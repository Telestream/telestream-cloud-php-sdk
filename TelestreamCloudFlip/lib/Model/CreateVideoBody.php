<?php
/**
 * CreateVideoBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  TelestreamCloudFlip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flip API
 *
 * Description
 *
 * OpenAPI spec version: 2.0.1
 * Contact: cloudsupport@telestream.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TelestreamCloudFlip\Model;

use \ArrayAccess;
use \TelestreamCloudFlip\ObjectSerializer;

/**
 * CreateVideoBody Class Doc Comment
 *
 * @category Class
 * @package  TelestreamCloudFlip
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateVideoBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'create_video_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'source_url' => 'string',
        'profiles' => 'string',
        'payload' => 'string',
        'pipeline' => 'string',
        'subtitle_files' => 'string[]',
        'extra_files' => 'map[string,string[]]',
        'extra_variables' => 'map[string,string]',
        'path_format' => 'string',
        'clip_end' => 'string',
        'clip_length' => 'string',
        'clip_offset' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'source_url' => null,
        'profiles' => null,
        'payload' => null,
        'pipeline' => null,
        'subtitle_files' => null,
        'extra_files' => null,
        'extra_variables' => null,
        'path_format' => null,
        'clip_end' => null,
        'clip_length' => null,
        'clip_offset' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'source_url' => 'source_url',
        'profiles' => 'profiles',
        'payload' => 'payload',
        'pipeline' => 'pipeline',
        'subtitle_files' => 'subtitle_files',
        'extra_files' => 'extra_files',
        'extra_variables' => 'extra_variables',
        'path_format' => 'path_format',
        'clip_end' => 'clip_end',
        'clip_length' => 'clip_length',
        'clip_offset' => 'clip_offset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_url' => 'setSourceUrl',
        'profiles' => 'setProfiles',
        'payload' => 'setPayload',
        'pipeline' => 'setPipeline',
        'subtitle_files' => 'setSubtitleFiles',
        'extra_files' => 'setExtraFiles',
        'extra_variables' => 'setExtraVariables',
        'path_format' => 'setPathFormat',
        'clip_end' => 'setClipEnd',
        'clip_length' => 'setClipLength',
        'clip_offset' => 'setClipOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_url' => 'getSourceUrl',
        'profiles' => 'getProfiles',
        'payload' => 'getPayload',
        'pipeline' => 'getPipeline',
        'subtitle_files' => 'getSubtitleFiles',
        'extra_files' => 'getExtraFiles',
        'extra_variables' => 'getExtraVariables',
        'path_format' => 'getPathFormat',
        'clip_end' => 'getClipEnd',
        'clip_length' => 'getClipLength',
        'clip_offset' => 'getClipOffset'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['source_url'] = isset($data['source_url']) ? $data['source_url'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
        $this->container['pipeline'] = isset($data['pipeline']) ? $data['pipeline'] : null;
        $this->container['subtitle_files'] = isset($data['subtitle_files']) ? $data['subtitle_files'] : null;
        $this->container['extra_files'] = isset($data['extra_files']) ? $data['extra_files'] : null;
        $this->container['extra_variables'] = isset($data['extra_variables']) ? $data['extra_variables'] : null;
        $this->container['path_format'] = isset($data['path_format']) ? $data['path_format'] : null;
        $this->container['clip_end'] = isset($data['clip_end']) ? $data['clip_end'] : null;
        $this->container['clip_length'] = isset($data['clip_length']) ? $data['clip_length'] : null;
        $this->container['clip_offset'] = isset($data['clip_offset']) ? $data['clip_offset'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets source_url
     *
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->container['source_url'];
    }

    /**
     * Sets source_url
     *
     * @param string $source_url An URL pointing to a source file.
     *
     * @return $this
     */
    public function setSourceUrl($source_url)
    {
        $this->container['source_url'] = $source_url;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return string
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param string $profiles Comma-separated list of profile names or IDs to be used during encoding. Alternatively, specify none so no encodings are created yet.
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return string
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param string $payload Arbitrary string stored along the Video object.
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets pipeline
     *
     * @return string
     */
    public function getPipeline()
    {
        return $this->container['pipeline'];
    }

    /**
     * Sets pipeline
     *
     * @param string $pipeline String-encoded JSON describing profiles pipeline.
     *
     * @return $this
     */
    public function setPipeline($pipeline)
    {
        $this->container['pipeline'] = $pipeline;

        return $this;
    }

    /**
     * Gets subtitle_files
     *
     * @return string[]
     */
    public function getSubtitleFiles()
    {
        return $this->container['subtitle_files'];
    }

    /**
     * Sets subtitle_files
     *
     * @param string[] $subtitle_files A list of urls pointing to remote subtitle files.
     *
     * @return $this
     */
    public function setSubtitleFiles($subtitle_files)
    {
        $this->container['subtitle_files'] = $subtitle_files;

        return $this;
    }

    /**
     * Gets extra_files
     *
     * @return map[string,string[]]
     */
    public function getExtraFiles()
    {
        return $this->container['extra_files'];
    }

    /**
     * Sets extra_files
     *
     * @param map[string,string[]] $extra_files extra_files
     *
     * @return $this
     */
    public function setExtraFiles($extra_files)
    {
        $this->container['extra_files'] = $extra_files;

        return $this;
    }

    /**
     * Gets extra_variables
     *
     * @return map[string,string]
     */
    public function getExtraVariables()
    {
        return $this->container['extra_variables'];
    }

    /**
     * Sets extra_variables
     *
     * @param map[string,string] $extra_variables extra_variables
     *
     * @return $this
     */
    public function setExtraVariables($extra_variables)
    {
        $this->container['extra_variables'] = $extra_variables;

        return $this;
    }

    /**
     * Gets path_format
     *
     * @return string
     */
    public function getPathFormat()
    {
        return $this->container['path_format'];
    }

    /**
     * Sets path_format
     *
     * @param string $path_format path_format
     *
     * @return $this
     */
    public function setPathFormat($path_format)
    {
        $this->container['path_format'] = $path_format;

        return $this;
    }

    /**
     * Gets clip_end
     *
     * @return string
     */
    public function getClipEnd()
    {
        return $this->container['clip_end'];
    }

    /**
     * Sets clip_end
     *
     * @param string $clip_end Clip ends at a specific time.
     *
     * @return $this
     */
    public function setClipEnd($clip_end)
    {
        $this->container['clip_end'] = $clip_end;

        return $this;
    }

    /**
     * Gets clip_length
     *
     * @return string
     */
    public function getClipLength()
    {
        return $this->container['clip_length'];
    }

    /**
     * Sets clip_length
     *
     * @param string $clip_length A clip’s duration.
     *
     * @return $this
     */
    public function setClipLength($clip_length)
    {
        $this->container['clip_length'] = $clip_length;

        return $this;
    }

    /**
     * Gets clip_offset
     *
     * @return string
     */
    public function getClipOffset()
    {
        return $this->container['clip_offset'];
    }

    /**
     * Sets clip_offset
     *
     * @param string $clip_offset Clip starts at a specific offset.
     *
     * @return $this
     */
    public function setClipOffset($clip_offset)
    {
        $this->container['clip_offset'] = $clip_offset;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


