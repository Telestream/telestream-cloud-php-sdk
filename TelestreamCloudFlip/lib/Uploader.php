<?php

namespace TelestreamCloudFlip;

class UploaderFileSession {
    protected $path;
    protected $uploader;
    protected $tag;

    public function __construct($uploader, $path, $tag = null) {
        $this->path = $path;
        $this->uploader = $uploader;
        $this->tag = $tag;
    }

    public function getParams() {
        $params = array(
            'file_size' => filesize($this->path),
            'file_name' => basename($this->path),
        );

        if ($this->tag) {
            $params['tag'] = $this->tag;
        }

        return $params;
    }

    public function upload() {
        $file = fopen($this->path, "r");

        $parts = $this->getMissingParts();

        $session = $this->getSession();

        for ($i = 0; $i < $session['parts']; $i++) {
            $response = $this->sendChunk($file, $session, $parts[$i]);

            if ($response !== null) {
                $this->uploader->setResult($response);
            }
        }

        fclose($file);

        $missingParts = $this->getMissingParts();

        if (sizeof($missingParts) > 0) {
            throw new Exception("Missing upload parts");
        }
    }

    protected function getSession() {
        return $this->uploader->session;
    }

    protected function getMissingParts() {
        $session = $this->getSession();

        $headers = array();
        if ($this->tag) {
            $headers[] = "X-Extra-File-Tag: " . $this->tag;
        }

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->location());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


        $response = curl_exec($curl);
        return json_decode($response, true)['missing_parts'];
    }

    protected function sendChunk($file, $session, $index) {
        $curl = curl_init();

        $headers = [];
        $headers[] = "Content-Type: application/octet-stream";
        $headers[] = "X-Part: " . $index;
        $headers[] = "Expect:";

        if ($this->tag) {
            $headers[] = "X-Extra-File-Tag: " . $this->tag;
        }

        fseek($file, $index * $this->partSize());
        $chunk = fread($file, $this->partSize());

        curl_setopt($curl, CURLOPT_POSTFIELDS, $chunk);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_URL, $this->location());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($curl);
        return json_decode($response, true);
    }

    protected function location() {
        return $this->getSession()['location'];
    }

    protected function partSize() {
        $session = $this->getSession();


        if ($this->tag) {
            return $session['extra_files'][$this->tag]->part_size;
        }

        return $session['part_size'];
    }
}

class Uploader
{
    protected $client;
    protected $result;
    public $session;

    protected $file;
    protected $extraFiles;
    protected $params;
    protected $factoryId;

    public function __construct($client, $params) {
        $this->client = $client;
        $this->params = $params;

        $this->parseExtraFiles();
    }

    public function upload() {
        if (!$this->session) {
            $this->session = $this->createSession($this->params);
        }

        $this->retryableUpload(5);

        if (!$this->result) {
            throw new \Exception("Missing upload result");
        }

        return $this->result['id'];
    }

    protected function retryableUpload($attempt) {
        try {
            $this->file->upload();

            foreach ($this->extraFiles as $extraFile) {
                $extraFile->upload();
            }

            return true;
        } catch (\Exception $e) {
            if ($attempt > 0) {
                return $this->retryableUpload($attempt - 1);
            }

            throw $e;
        }
    }

    protected function parseExtraFiles() {
        $this->file = new UploaderFileSession($this, $this->params['file']);

        $extraFiles = $this->params['extra_files'];
        if (!$extraFiles) {
            $this->extraFiles = array();
            return;
        }

        unset($this->params['extra_files']);

        foreach ($extraFiles as $tag => $extraFilesList) {
            if (!is_array($extraFilesList)) {
                $extraFilesList = array($extraFilesList);
            }

            foreach ($extraFilesList as $index => $path) {
                $fileTag = (sizeof($extraFilesList) > 1) ? $tag . ".index-" . $index : $tag;
                $this->extraFiles[] = new UploaderFileSession($this, $path, $fileTag);
            }
        }
    }

    public function setResult($result) {
        $this->result = $result;
    }

    protected function createSession($params) {
        $params = array_merge(
            $params,
            $this->file->getParams(),
            array(
                'multi_chunk' => 'true',
                'extra_files' => array_map(function($extraFile) {
                    return $extraFile->getParams();
                }, $this->extraFiles)
            )
        );

        $payload = new Model\VideoUploadBody;
        $payload->setFileSize($params['file_size']);
        $payload->setFileName($params['file_name']);
        $payload->setMultiChunk(true);

        $extraFiles = array();

        foreach ($params['extra_files'] as $index => $extraFileParams) {
            $extraFiles[] = new Model\ExtraFile;
            $extraFiles[$index]->setFileName($extraFileParams['file_name']);
            $extraFiles[$index]->setFileSize($extraFileParams['file_size']);
            $extraFiles[$index]->setTag($extraFileParams['tag']);
        }

        $payload->setExtraFiles($extraFiles);


        switch (get_class($this->client)) {
        case "TelestreamCloudFlip\Api\FlipApi":
            if (!$this->factoryId) {
                $this->factoryId = $params['factory_id'];
                unset($params['factory_id']);
            }

            return $this->client->uploadVideo($this->factoryId, $payload);
        default:
            if (!$this->factoryId) {
                $this->factoryId = $params['project_id'];
                unset($params['project_id']);
            }

            return $this->client->uploadVideo($this->factoryId, $payload);
        }
    }
}
?>