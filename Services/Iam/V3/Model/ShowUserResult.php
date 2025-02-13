<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    * id  IAM用户ID。
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * links  links
    * xuserId  IAM用户在外部系统中的ID。
    * xuserType  IAM用户在外部系统中的类型。
    * areacode  IAM用户手机号的国家码。
    * email  IAM用户邮箱。
    * phone  IAM用户手机号。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * updateTime  IAM用户更新时间。
    * createTime  IAM用户创建时间。
    * lastLoginTime  IAM用户最后登录时间。
    * pwdStrength  IAM用户密码强度。结果为low/middle/high/none，分别表示密码强度低/中/高/无。
    * isDomainOwner  IAM用户是否为根用户。
    * accessMode  IAM用户访问模式。
    * description  IAM用户描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'id' => 'string',
            'domainId' => 'string',
            'name' => 'string',
            'links' => '\HuaweiCloud\SDK\Iam\V3\Model\Links',
            'xuserId' => 'string',
            'xuserType' => 'string',
            'areacode' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'pwdStatus' => 'bool',
            'updateTime' => 'string',
            'createTime' => 'string',
            'lastLoginTime' => 'string',
            'pwdStrength' => 'string',
            'isDomainOwner' => 'bool',
            'accessMode' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    * id  IAM用户ID。
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * links  links
    * xuserId  IAM用户在外部系统中的ID。
    * xuserType  IAM用户在外部系统中的类型。
    * areacode  IAM用户手机号的国家码。
    * email  IAM用户邮箱。
    * phone  IAM用户手机号。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * updateTime  IAM用户更新时间。
    * createTime  IAM用户创建时间。
    * lastLoginTime  IAM用户最后登录时间。
    * pwdStrength  IAM用户密码强度。结果为low/middle/high/none，分别表示密码强度低/中/高/无。
    * isDomainOwner  IAM用户是否为根用户。
    * accessMode  IAM用户访问模式。
    * description  IAM用户描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'id' => null,
        'domainId' => null,
        'name' => null,
        'links' => null,
        'xuserId' => null,
        'xuserType' => null,
        'areacode' => null,
        'email' => null,
        'phone' => null,
        'pwdStatus' => null,
        'updateTime' => null,
        'createTime' => null,
        'lastLoginTime' => null,
        'pwdStrength' => null,
        'isDomainOwner' => null,
        'accessMode' => null,
        'description' => null
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
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    * id  IAM用户ID。
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * links  links
    * xuserId  IAM用户在外部系统中的ID。
    * xuserType  IAM用户在外部系统中的类型。
    * areacode  IAM用户手机号的国家码。
    * email  IAM用户邮箱。
    * phone  IAM用户手机号。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * updateTime  IAM用户更新时间。
    * createTime  IAM用户创建时间。
    * lastLoginTime  IAM用户最后登录时间。
    * pwdStrength  IAM用户密码强度。结果为low/middle/high/none，分别表示密码强度低/中/高/无。
    * isDomainOwner  IAM用户是否为根用户。
    * accessMode  IAM用户访问模式。
    * description  IAM用户描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'id' => 'id',
            'domainId' => 'domain_id',
            'name' => 'name',
            'links' => 'links',
            'xuserId' => 'xuser_id',
            'xuserType' => 'xuser_type',
            'areacode' => 'areacode',
            'email' => 'email',
            'phone' => 'phone',
            'pwdStatus' => 'pwd_status',
            'updateTime' => 'update_time',
            'createTime' => 'create_time',
            'lastLoginTime' => 'last_login_time',
            'pwdStrength' => 'pwd_strength',
            'isDomainOwner' => 'is_domain_owner',
            'accessMode' => 'access_mode',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    * id  IAM用户ID。
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * links  links
    * xuserId  IAM用户在外部系统中的ID。
    * xuserType  IAM用户在外部系统中的类型。
    * areacode  IAM用户手机号的国家码。
    * email  IAM用户邮箱。
    * phone  IAM用户手机号。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * updateTime  IAM用户更新时间。
    * createTime  IAM用户创建时间。
    * lastLoginTime  IAM用户最后登录时间。
    * pwdStrength  IAM用户密码强度。结果为low/middle/high/none，分别表示密码强度低/中/高/无。
    * isDomainOwner  IAM用户是否为根用户。
    * accessMode  IAM用户访问模式。
    * description  IAM用户描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'links' => 'setLinks',
            'xuserId' => 'setXuserId',
            'xuserType' => 'setXuserType',
            'areacode' => 'setAreacode',
            'email' => 'setEmail',
            'phone' => 'setPhone',
            'pwdStatus' => 'setPwdStatus',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime',
            'lastLoginTime' => 'setLastLoginTime',
            'pwdStrength' => 'setPwdStrength',
            'isDomainOwner' => 'setIsDomainOwner',
            'accessMode' => 'setAccessMode',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  IAM用户是否启用。true表示启用，false表示停用，默认为true。
    * id  IAM用户ID。
    * domainId  IAM用户所属账号ID。
    * name  IAM用户名。
    * links  links
    * xuserId  IAM用户在外部系统中的ID。
    * xuserType  IAM用户在外部系统中的类型。
    * areacode  IAM用户手机号的国家码。
    * email  IAM用户邮箱。
    * phone  IAM用户手机号。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：正常。
    * updateTime  IAM用户更新时间。
    * createTime  IAM用户创建时间。
    * lastLoginTime  IAM用户最后登录时间。
    * pwdStrength  IAM用户密码强度。结果为low/middle/high/none，分别表示密码强度低/中/高/无。
    * isDomainOwner  IAM用户是否为根用户。
    * accessMode  IAM用户访问模式。
    * description  IAM用户描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'links' => 'getLinks',
            'xuserId' => 'getXuserId',
            'xuserType' => 'getXuserType',
            'areacode' => 'getAreacode',
            'email' => 'getEmail',
            'phone' => 'getPhone',
            'pwdStatus' => 'getPwdStatus',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime',
            'lastLoginTime' => 'getLastLoginTime',
            'pwdStrength' => 'getPwdStrength',
            'isDomainOwner' => 'getIsDomainOwner',
            'accessMode' => 'getAccessMode',
            'description' => 'getDescription'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['xuserId'] = isset($data['xuserId']) ? $data['xuserId'] : null;
        $this->container['xuserType'] = isset($data['xuserType']) ? $data['xuserType'] : null;
        $this->container['areacode'] = isset($data['areacode']) ? $data['areacode'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['pwdStatus'] = isset($data['pwdStatus']) ? $data['pwdStatus'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastLoginTime'] = isset($data['lastLoginTime']) ? $data['lastLoginTime'] : null;
        $this->container['pwdStrength'] = isset($data['pwdStrength']) ? $data['pwdStrength'] : null;
        $this->container['isDomainOwner'] = isset($data['isDomainOwner']) ? $data['isDomainOwner'] : null;
        $this->container['accessMode'] = isset($data['accessMode']) ? $data['accessMode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['isDomainOwner'] === null) {
            $invalidProperties[] = "'isDomainOwner' can't be null";
        }
        if ($this->container['accessMode'] === null) {
            $invalidProperties[] = "'accessMode' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
    * Gets enabled
    *  IAM用户是否启用。true表示启用，false表示停用，默认为true。
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
    * @param bool $enabled IAM用户是否启用。true表示启用，false表示停用，默认为true。
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
    *  IAM用户ID。
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
    * @param string $id IAM用户ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  IAM用户所属账号ID。
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
    * @param string $domainId IAM用户所属账号ID。
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
    *  IAM用户名。
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
    * @param string $name IAM用户名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets links
    *  links
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\Links
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\Links $links links
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets xuserId
    *  IAM用户在外部系统中的ID。
    *
    * @return string|null
    */
    public function getXuserId()
    {
        return $this->container['xuserId'];
    }

    /**
    * Sets xuserId
    *
    * @param string|null $xuserId IAM用户在外部系统中的ID。
    *
    * @return $this
    */
    public function setXuserId($xuserId)
    {
        $this->container['xuserId'] = $xuserId;
        return $this;
    }

    /**
    * Gets xuserType
    *  IAM用户在外部系统中的类型。
    *
    * @return string|null
    */
    public function getXuserType()
    {
        return $this->container['xuserType'];
    }

    /**
    * Sets xuserType
    *
    * @param string|null $xuserType IAM用户在外部系统中的类型。
    *
    * @return $this
    */
    public function setXuserType($xuserType)
    {
        $this->container['xuserType'] = $xuserType;
        return $this;
    }

    /**
    * Gets areacode
    *  IAM用户手机号的国家码。
    *
    * @return string|null
    */
    public function getAreacode()
    {
        return $this->container['areacode'];
    }

    /**
    * Sets areacode
    *
    * @param string|null $areacode IAM用户手机号的国家码。
    *
    * @return $this
    */
    public function setAreacode($areacode)
    {
        $this->container['areacode'] = $areacode;
        return $this;
    }

    /**
    * Gets email
    *  IAM用户邮箱。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email IAM用户邮箱。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets phone
    *  IAM用户手机号。
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone IAM用户手机号。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets pwdStatus
    *  IAM用户密码状态。true：需要修改密码，false：正常。
    *
    * @return bool|null
    */
    public function getPwdStatus()
    {
        return $this->container['pwdStatus'];
    }

    /**
    * Sets pwdStatus
    *
    * @param bool|null $pwdStatus IAM用户密码状态。true：需要修改密码，false：正常。
    *
    * @return $this
    */
    public function setPwdStatus($pwdStatus)
    {
        $this->container['pwdStatus'] = $pwdStatus;
        return $this;
    }

    /**
    * Gets updateTime
    *  IAM用户更新时间。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime IAM用户更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  IAM用户创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime IAM用户创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastLoginTime
    *  IAM用户最后登录时间。
    *
    * @return string|null
    */
    public function getLastLoginTime()
    {
        return $this->container['lastLoginTime'];
    }

    /**
    * Sets lastLoginTime
    *
    * @param string|null $lastLoginTime IAM用户最后登录时间。
    *
    * @return $this
    */
    public function setLastLoginTime($lastLoginTime)
    {
        $this->container['lastLoginTime'] = $lastLoginTime;
        return $this;
    }

    /**
    * Gets pwdStrength
    *  IAM用户密码强度。结果为low/middle/high/none，分别表示密码强度低/中/高/无。
    *
    * @return string|null
    */
    public function getPwdStrength()
    {
        return $this->container['pwdStrength'];
    }

    /**
    * Sets pwdStrength
    *
    * @param string|null $pwdStrength IAM用户密码强度。结果为low/middle/high/none，分别表示密码强度低/中/高/无。
    *
    * @return $this
    */
    public function setPwdStrength($pwdStrength)
    {
        $this->container['pwdStrength'] = $pwdStrength;
        return $this;
    }

    /**
    * Gets isDomainOwner
    *  IAM用户是否为根用户。
    *
    * @return bool
    */
    public function getIsDomainOwner()
    {
        return $this->container['isDomainOwner'];
    }

    /**
    * Sets isDomainOwner
    *
    * @param bool $isDomainOwner IAM用户是否为根用户。
    *
    * @return $this
    */
    public function setIsDomainOwner($isDomainOwner)
    {
        $this->container['isDomainOwner'] = $isDomainOwner;
        return $this;
    }

    /**
    * Gets accessMode
    *  IAM用户访问模式。
    *
    * @return string
    */
    public function getAccessMode()
    {
        return $this->container['accessMode'];
    }

    /**
    * Sets accessMode
    *
    * @param string $accessMode IAM用户访问模式。
    *
    * @return $this
    */
    public function setAccessMode($accessMode)
    {
        $this->container['accessMode'] = $accessMode;
        return $this;
    }

    /**
    * Gets description
    *  IAM用户描述信息
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
    * @param string $description IAM用户描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

