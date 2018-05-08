<?php
/**
 * UploadSession
 *
 * PHP version 5
 *
 * @category Class
 * @package  TelestreamCloudTts
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Tts API
 *
 * Description
 *
 * OpenAPI spec version: 2.0.0
 * Contact: cloudsupport@telestream.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TelestreamCloudTts\Model;

use \ArrayAccess;
use \TelestreamCloudTts\ObjectSerializer;

/**
 * UploadSession Class Doc Comment
 *
 * @category Class
 * @package  TelestreamCloudTts
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UploadSession implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UploadSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'location' => 'string',
        'parts' => 'int',
        'part_size' => 'int',
        'max_connections' => 'int',
        'extra_files' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'location' => null,
        'parts' => null,
        'part_size' => null,
        'max_connections' => null,
        'extra_files' => null
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
        'id' => 'id',
        'location' => 'location',
        'parts' => 'parts',
        'part_size' => 'part_size',
        'max_connections' => 'max_connections',
        'extra_files' => 'extra_files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'location' => 'setLocation',
        'parts' => 'setParts',
        'part_size' => 'setPartSize',
        'max_connections' => 'setMaxConnections',
        'extra_files' => 'setExtraFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'location' => 'getLocation',
        'parts' => 'getParts',
        'part_size' => 'getPartSize',
        'max_connections' => 'getMaxConnections',
        'extra_files' => 'getExtraFiles'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['parts'] = isset($data['parts']) ? $data['parts'] : null;
        $this->container['part_size'] = isset($data['part_size']) ? $data['part_size'] : null;
        $this->container['max_connections'] = isset($data['max_connections']) ? $data['max_connections'] : null;
        $this->container['extra_files'] = isset($data['extra_files']) ? $data['extra_files'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['location'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id An unique identifier of the UploadSession.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location An URL to which chunks of the uploaded file should be sent
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets parts
     *
     * @return int
     */
    public function getParts()
    {
        return $this->container['parts'];
    }

    /**
     * Sets parts
     *
     * @param int $parts A number of chunks that are expected by the upstream.
     *
     * @return $this
     */
    public function setParts($parts)
    {
        $this->container['parts'] = $parts;

        return $this;
    }

    /**
     * Gets part_size
     *
     * @return int
     */
    public function getPartSize()
    {
        return $this->container['part_size'];
    }

    /**
     * Sets part_size
     *
     * @param int $part_size An expected size of uploaded chunks.
     *
     * @return $this
     */
    public function setPartSize($part_size)
    {
        $this->container['part_size'] = $part_size;

        return $this;
    }

    /**
     * Gets max_connections
     *
     * @return int
     */
    public function getMaxConnections()
    {
        return $this->container['max_connections'];
    }

    /**
     * Sets max_connections
     *
     * @param int $max_connections A maximum number of concurrent connections.
     *
     * @return $this
     */
    public function setMaxConnections($max_connections)
    {
        $this->container['max_connections'] = $max_connections;

        return $this;
    }

    /**
     * Gets extra_files
     *
     * @return object
     */
    public function getExtraFiles()
    {
        return $this->container['extra_files'];
    }

    /**
     * Sets extra_files
     *
     * @param object $extra_files An object containing additional files uploaded using the session.
     *
     * @return $this
     */
    public function setExtraFiles($extra_files)
    {
        $this->container['extra_files'] = $extra_files;

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


