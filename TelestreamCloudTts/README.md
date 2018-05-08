# Telestream Cloud Timed Text Speech PHP SDK

This library provides a low-level interface to the REST API of Telestream Cloud, the online video encoding service.

## Requirements

PHP 5.5 and later

## Getting Started
### Initialize client
```php
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', "YOUR_API_KEY");

$api = new TelestreamCloudTts\Api\TtsApi(
    new GuzzleHttp\Client(),
    $config
);

$projectID = "YOUR_PROJECT_ID";
```

### Create project
```php
<?php
$projectBody->setName('Project name');
$projectBody->setDescription('Detailed project description');
$projectBody->setLanguage('en-US');

try {
    $createdProject = $api->createProject($projectBody);
    $projectID = $createdProject->getId();
} catch (\Exception $e) {
    print_r($e);
}
?>
```

### Create video from source url

```php
<?php
$jobBody = new TelestreamCloudTts\Model\Job;
$jobBody->setSourceUrl('http://url/to/file.mp4');
$createdJob = $api->createJob($projectID, $jobBody);
?>
```

### Create video from upload

```php
<?php
try {
    $upload = new TelestreamCloudTts\Uploader($api, array(
        'project_id' => $projectID,
        'file' => '/path/to/video.mp4',
    ));

    $job_id = $upload->upload();
    echo $job_id;
} catch(Exception $e) {
    print_r($e);
    // Handle exception
}
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cloud.telestream.net/tts/v1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*TtsApi* | [**corpora**](docs/Api/TtsApi.md#corpora) | **GET** /projects/{projectID}/corpora | Returns a collection of Corpora
*TtsApi* | [**corpus**](docs/Api/TtsApi.md#corpus) | **GET** /projects/{projectID}/corpora/{name} | Returns the Corpus
*TtsApi* | [**createCorpus**](docs/Api/TtsApi.md#createcorpus) | **POST** /projects/{projectID}/corpora/{name} | Creates a new Corpus
*TtsApi* | [**createJob**](docs/Api/TtsApi.md#createjob) | **POST** /projects/{projectID}/jobs | Creates a new Job
*TtsApi* | [**createProject**](docs/Api/TtsApi.md#createproject) | **POST** /projects | Creates a new Project
*TtsApi* | [**deleteCorpus**](docs/Api/TtsApi.md#deletecorpus) | **DELETE** /projects/{projectID}/corpora/{name} | Creates a new Corpus
*TtsApi* | [**deleteJob**](docs/Api/TtsApi.md#deletejob) | **DELETE** /projects/{projectID}/jobs/{jobID} | Deletes the Job
*TtsApi* | [**deleteProject**](docs/Api/TtsApi.md#deleteproject) | **DELETE** /projects/{projectID} | Deletes the Project
*TtsApi* | [**job**](docs/Api/TtsApi.md#job) | **GET** /projects/{projectID}/jobs/{jobID} | Returns the Job
*TtsApi* | [**jobResult**](docs/Api/TtsApi.md#jobresult) | **GET** /projects/{projectID}/jobs/{jobID}/result | Returns the Job Result
*TtsApi* | [**jobs**](docs/Api/TtsApi.md#jobs) | **GET** /projects/{projectID}/jobs | Returns a collection of Jobs
*TtsApi* | [**project**](docs/Api/TtsApi.md#project) | **GET** /projects/{projectID} | Returns the Project
*TtsApi* | [**projects**](docs/Api/TtsApi.md#projects) | **GET** /projects | Returns a collection of Projects
*TtsApi* | [**trainProject**](docs/Api/TtsApi.md#trainproject) | **POST** /projects/{projectID}/train | Queues training
*TtsApi* | [**updateProject**](docs/Api/TtsApi.md#updateproject) | **PUT** /projects/{projectID} | Updates an existing Project
*TtsApi* | [**uploadVideo**](docs/Api/TtsApi.md#uploadvideo) | **POST** /projects/{projectID}/jobs/upload | Creates an upload session


## Documentation For Models

 - [CorporaCollection](docs/Model/CorporaCollection.md)
 - [Corpus](docs/Model/Corpus.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [ExtraFile](docs/Model/ExtraFile.md)
 - [Fragment](docs/Model/Fragment.md)
 - [FragmentVariant](docs/Model/FragmentVariant.md)
 - [Job](docs/Model/Job.md)
 - [JobResult](docs/Model/JobResult.md)
 - [JobsCollection](docs/Model/JobsCollection.md)
 - [Project](docs/Model/Project.md)
 - [ProjectsCollection](docs/Model/ProjectsCollection.md)
 - [Result](docs/Model/Result.md)
 - [UploadSession](docs/Model/UploadSession.md)
 - [VideoUploadBody](docs/Model/VideoUploadBody.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: X-Api-Key
- **Location**: HTTP header


## Author

cloudsupport@telestream.net


