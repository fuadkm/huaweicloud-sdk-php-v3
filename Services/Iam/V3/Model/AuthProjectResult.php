<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthProjectResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthProjectResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isDomain  false.
    * description  项目描述信息。
    * links  links
    * enabled  项目是否可用。
    * id  项目ID。
    * parentId  如果查询自己创建的项目，则此处返回所属区域的项目ID。    如果查询的是系统内置项目，如cn-north-4，则此处返回账号ID。
    * domainId  项目所属账号ID。
    * name  项目名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isDomain' => 'bool',
            'description' => 'string',
            'links' => '\HuaweiCloud\SDK\Iam\V3\Model\LinksSelf',
            'enabled' => 'bool',
            'id' => 'string',
            'parentId' => 'string',
            'domainId' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isDomain  false.
    * description  项目描述信息。
    * links  links
    * enabled  项目是否可用。
    * id  项目ID。
    * parentId  如果查询自己创建的项目，则此处返回所属区域的项目ID。    如果查询的是系统内置项目，如cn-north-4，则此处返回账号ID。
    * domainId  项目所属账号ID。
    * name  项目名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isDomain' => null,
        'description' => null,
        'links' => null,
        'enabled' => null,
        'id' => null,
        'parentId' => null,
        'domainId' => null,
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
    * isDomain  false.
    * description  项目描述信息。
    * links  links
    * enabled  项目是否可用。
    * id  项目ID。
    * parentId  如果查询自己创建的项目，则此处返回所属区域的项目ID。    如果查询的是系统内置项目，如cn-north-4，则此处返回账号ID。
    * domainId  项目所属账号ID。
    * name  项目名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isDomain' => 'is_domain',
            'description' => 'description',
            'links' => 'links',
            'enabled' => 'enabled',
            'id' => 'id',
            'parentId' => 'parent_id',
            'domainId' => 'domain_id',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isDomain  false.
    * description  项目描述信息。
    * links  links
    * enabled  项目是否可用。
    * id  项目ID。
    * parentId  如果查询自己创建的项目，则此处返回所属区域的项目ID。    如果查询的是系统内置项目，如cn-north-4，则此处返回账号ID。
    * domainId  项目所属账号ID。
    * name  项目名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'isDomain' => 'setIsDomain',
            'description' => 'setDescription',
            'links' => 'setLinks',
            'enabled' => 'setEnabled',
            'id' => 'setId',
            'parentId' => 'setParentId',
            'domainId' => 'setDomainId',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isDomain  false.
    * description  项目描述信息。
    * links  links
    * enabled  项目是否可用。
    * id  项目ID。
    * parentId  如果查询自己创建的项目，则此处返回所属区域的项目ID。    如果查询的是系统内置项目，如cn-north-4，则此处返回账号ID。
    * domainId  项目所属账号ID。
    * name  项目名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'isDomain' => 'getIsDomain',
            'description' => 'getDescription',
            'links' => 'getLinks',
            'enabled' => 'getEnabled',
            'id' => 'getId',
            'parentId' => 'getParentId',
            'domainId' => 'getDomainId',
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
        $this->container['isDomain'] = isset($data['isDomain']) ? $data['isDomain'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
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
        if ($this->container['isDomain'] === null) {
            $invalidProperties[] = "'isDomain' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets isDomain
    *  false.
    *
    * @return bool
    */
    public function getIsDomain()
    {
        return $this->container['isDomain'];
    }

    /**
    * Sets isDomain
    *
    * @param bool $isDomain false.
    *
    * @return $this
    */
    public function setIsDomain($isDomain)
    {
        $this->container['isDomain'] = $isDomain;
        return $this;
    }

    /**
    * Gets description
    *  项目描述信息。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 项目描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets links
    *  links
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\LinksSelf
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\LinksSelf $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets enabled
    *  项目是否可用。
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 项目是否可用。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets id
    *  项目ID。
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
    * @param string $id 项目ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets parentId
    *  如果查询自己创建的项目，则此处返回所属区域的项目ID。    如果查询的是系统内置项目，如cn-north-4，则此处返回账号ID。
    *
    * @return string
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string $parentId 如果查询自己创建的项目，则此处返回所属区域的项目ID。    如果查询的是系统内置项目，如cn-north-4，则此处返回账号ID。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets domainId
    *  项目所属账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 项目所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets name
    *  项目名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 项目名称。
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

