<?php
/**
 * FolderList
 *
 * PHP version 5
 *
 * @category Class
 * @package  Caplinked
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

namespace Caplinked\Model;

use \ArrayAccess;

/**
 * FolderList Class Doc Comment
 *
 * @category    Class
 * @description List subfolder permissions for a group. Will return an array of subfolders under the specified folder, along with their permissions information. For is_mixed_view, is_mixed_download, and is_mixed_upload: if attribute is set to true, it indicates that at least one (but not all) child folder with view, download, or upload attributes set to true, respectively. \&quot;All Folders\&quot; is the parent of all other folders within the workspace; its permissions will be returned if a folder is not specified.
 * @package     Caplinked
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FolderList implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FolderList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'id_tree' => 'int',
        'name' => 'string',
        'view' => 'bool',
        'download' => 'bool',
        'upload' => 'bool',
        'position' => 'int',
        'index' => 'int',
        'is_mixed_view' => 'bool',
        'is_mixed_download' => 'bool',
        'is_mixed_upload' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'id_tree' => 'int32',
        'name' => null,
        'view' => null,
        'download' => null,
        'upload' => null,
        'position' => 'int32',
        'index' => 'int32',
        'is_mixed_view' => null,
        'is_mixed_download' => null,
        'is_mixed_upload' => null
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
        'id_tree' => 'id_tree',
        'name' => 'name',
        'view' => 'view',
        'download' => 'download',
        'upload' => 'upload',
        'position' => 'position',
        'index' => 'index',
        'is_mixed_view' => 'is_mixed_view',
        'is_mixed_download' => 'is_mixed_download',
        'is_mixed_upload' => 'is_mixed_upload'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_tree' => 'setIdTree',
        'name' => 'setName',
        'view' => 'setView',
        'download' => 'setDownload',
        'upload' => 'setUpload',
        'position' => 'setPosition',
        'index' => 'setIndex',
        'is_mixed_view' => 'setIsMixedView',
        'is_mixed_download' => 'setIsMixedDownload',
        'is_mixed_upload' => 'setIsMixedUpload'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_tree' => 'getIdTree',
        'name' => 'getName',
        'view' => 'getView',
        'download' => 'getDownload',
        'upload' => 'getUpload',
        'position' => 'getPosition',
        'index' => 'getIndex',
        'is_mixed_view' => 'getIsMixedView',
        'is_mixed_download' => 'getIsMixedDownload',
        'is_mixed_upload' => 'getIsMixedUpload'
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
        $this->container['id_tree'] = isset($data['id_tree']) ? $data['id_tree'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['download'] = isset($data['download']) ? $data['download'] : null;
        $this->container['upload'] = isset($data['upload']) ? $data['upload'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['is_mixed_view'] = isset($data['is_mixed_view']) ? $data['is_mixed_view'] : null;
        $this->container['is_mixed_download'] = isset($data['is_mixed_download']) ? $data['is_mixed_download'] : null;
        $this->container['is_mixed_upload'] = isset($data['is_mixed_upload']) ? $data['is_mixed_upload'] : null;
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
     * Gets id_tree
     * @return int
     */
    public function getIdTree()
    {
        return $this->container['id_tree'];
    }

    /**
     * Sets id_tree
     * @param int $id_tree
     * @return $this
     */
    public function setIdTree($id_tree)
    {
        $this->container['id_tree'] = $id_tree;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets view
     * @return bool
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view
     * @param bool $view
     * @return $this
     */
    public function setView($view)
    {
        $this->container['view'] = $view;

        return $this;
    }

    /**
     * Gets download
     * @return bool
     */
    public function getDownload()
    {
        return $this->container['download'];
    }

    /**
     * Sets download
     * @param bool $download
     * @return $this
     */
    public function setDownload($download)
    {
        $this->container['download'] = $download;

        return $this;
    }

    /**
     * Gets upload
     * @return bool
     */
    public function getUpload()
    {
        return $this->container['upload'];
    }

    /**
     * Sets upload
     * @param bool $upload
     * @return $this
     */
    public function setUpload($upload)
    {
        $this->container['upload'] = $upload;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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
     * Gets is_mixed_view
     * @return bool
     */
    public function getIsMixedView()
    {
        return $this->container['is_mixed_view'];
    }

    /**
     * Sets is_mixed_view
     * @param bool $is_mixed_view
     * @return $this
     */
    public function setIsMixedView($is_mixed_view)
    {
        $this->container['is_mixed_view'] = $is_mixed_view;

        return $this;
    }

    /**
     * Gets is_mixed_download
     * @return bool
     */
    public function getIsMixedDownload()
    {
        return $this->container['is_mixed_download'];
    }

    /**
     * Sets is_mixed_download
     * @param bool $is_mixed_download
     * @return $this
     */
    public function setIsMixedDownload($is_mixed_download)
    {
        $this->container['is_mixed_download'] = $is_mixed_download;

        return $this;
    }

    /**
     * Gets is_mixed_upload
     * @return bool
     */
    public function getIsMixedUpload()
    {
        return $this->container['is_mixed_upload'];
    }

    /**
     * Sets is_mixed_upload
     * @param bool $is_mixed_upload
     * @return $this
     */
    public function setIsMixedUpload($is_mixed_upload)
    {
        $this->container['is_mixed_upload'] = $is_mixed_upload;

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
            return json_encode(\Caplinked\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Caplinked\ObjectSerializer::sanitizeForSerialization($this));
    }
}


