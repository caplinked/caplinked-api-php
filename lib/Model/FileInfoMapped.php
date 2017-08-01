<?php
/**
 * FileInfoMapped
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CapLinked API v1.0
 *
 * Core information security endpoints for managing files/folders, users/groups, uploads/downloads, and more.
 *
 * OpenAPI spec version: 2017-05-23
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * FileInfoMapped Class Doc Comment
 *
 * @category    Class
 * @description Update file information
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FileInfoMapped implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FileInfoMapped';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'file_name' => 'string',
        'file_content_type' => 'string',
        'file_size' => 'string',
        'index' => 'int',
        'folder_id' => 'int',
        'pages' => 'int',
        'version' => 'int',
        'infected' => 'bool',
        'viewer_image' => '\Swagger\Client\Model\FileViewerImage',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'title' => null,
        'file_name' => null,
        'file_content_type' => null,
        'file_size' => null,
        'index' => 'int32',
        'folder_id' => 'int32',
        'pages' => 'int32',
        'version' => 'int32',
        'infected' => null,
        'viewer_image' => null,
        'created_at' => null,
        'updated_at' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'title' => 'title',
        'file_name' => 'file_name',
        'file_content_type' => 'file_content_type',
        'file_size' => 'file_size',
        'index' => 'index',
        'folder_id' => 'folder_id',
        'pages' => 'pages',
        'version' => 'version',
        'infected' => 'infected',
        'viewer_image' => 'viewer_image',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'file_name' => 'setFileName',
        'file_content_type' => 'setFileContentType',
        'file_size' => 'setFileSize',
        'index' => 'setIndex',
        'folder_id' => 'setFolderId',
        'pages' => 'setPages',
        'version' => 'setVersion',
        'infected' => 'setInfected',
        'viewer_image' => 'setViewerImage',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'file_name' => 'getFileName',
        'file_content_type' => 'getFileContentType',
        'file_size' => 'getFileSize',
        'index' => 'getIndex',
        'folder_id' => 'getFolderId',
        'pages' => 'getPages',
        'version' => 'getVersion',
        'infected' => 'getInfected',
        'viewer_image' => 'getViewerImage',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['file_content_type'] = isset($data['file_content_type']) ? $data['file_content_type'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['infected'] = isset($data['infected']) ? $data['infected'] : null;
        $this->container['viewer_image'] = isset($data['viewer_image']) ? $data['viewer_image'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets file_name
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     * @param string $file_name
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_content_type
     * @return string
     */
    public function getFileContentType()
    {
        return $this->container['file_content_type'];
    }

    /**
     * Sets file_content_type
     * @param string $file_content_type
     * @return $this
     */
    public function setFileContentType($file_content_type)
    {
        $this->container['file_content_type'] = $file_content_type;

        return $this;
    }

    /**
     * Gets file_size
     * @return string
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     * @param string $file_size
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets index
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     * @param int $index
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets folder_id
     * @return int
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     * @param int $folder_id
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets pages
     * @return int
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     * @param int $pages
     * @return $this
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

        return $this;
    }

    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param int $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets infected
     * @return bool
     */
    public function getInfected()
    {
        return $this->container['infected'];
    }

    /**
     * Sets infected
     * @param bool $infected
     * @return $this
     */
    public function setInfected($infected)
    {
        $this->container['infected'] = $infected;

        return $this;
    }

    /**
     * Gets viewer_image
     * @return \Swagger\Client\Model\FileViewerImage
     */
    public function getViewerImage()
    {
        return $this->container['viewer_image'];
    }

    /**
     * Sets viewer_image
     * @param \Swagger\Client\Model\FileViewerImage $viewer_image
     * @return $this
     */
    public function setViewerImage($viewer_image)
    {
        $this->container['viewer_image'] = $viewer_image;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

