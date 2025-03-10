<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RulesLocalAdditional implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RulesLocalAdditional';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  user：联邦用户在本系统中的用户名称。   ``` \"user\":{\"name\":\"{0}\"} ```    group：联邦用户在本系统中所属用户组。   ``` \"group\":{\"name\":\"0cd5e9\"} ```
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  user：联邦用户在本系统中的用户名称。   ``` \"user\":{\"name\":\"{0}\"} ```    group：联邦用户在本系统中所属用户组。   ``` \"group\":{\"name\":\"0cd5e9\"} ```
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * name  user：联邦用户在本系统中的用户名称。   ``` \"user\":{\"name\":\"{0}\"} ```    group：联邦用户在本系统中所属用户组。   ``` \"group\":{\"name\":\"0cd5e9\"} ```
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  user：联邦用户在本系统中的用户名称。   ``` \"user\":{\"name\":\"{0}\"} ```    group：联邦用户在本系统中所属用户组。   ``` \"group\":{\"name\":\"0cd5e9\"} ```
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  user：联邦用户在本系统中的用户名称。   ``` \"user\":{\"name\":\"{0}\"} ```    group：联邦用户在本系统中所属用户组。   ``` \"group\":{\"name\":\"0cd5e9\"} ```
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName'
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
        return self::$openAPIModelName;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets name
    *  user：联邦用户在本系统中的用户名称。   ``` \"user\":{\"name\":\"{0}\"} ```    group：联邦用户在本系统中所属用户组。   ``` \"group\":{\"name\":\"0cd5e9\"} ```
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name user：联邦用户在本系统中的用户名称。   ``` \"user\":{\"name\":\"{0}\"} ```    group：联邦用户在本系统中所属用户组。   ``` \"group\":{\"name\":\"0cd5e9\"} ```
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

