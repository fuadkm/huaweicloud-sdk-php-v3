<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DetectFace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DetectFace';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * boundingBox  boundingBox
    * attributes  attributes
    * landmark  landmark
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'boundingBox' => '\HuaweiCloud\SDK\Frs\V2\Model\BoundingBox',
            'attributes' => '\HuaweiCloud\SDK\Frs\V2\Model\Attributes',
            'landmark' => '\HuaweiCloud\SDK\Frs\V2\Model\Landmark'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * boundingBox  boundingBox
    * attributes  attributes
    * landmark  landmark
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'boundingBox' => null,
        'attributes' => null,
        'landmark' => null
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
    * boundingBox  boundingBox
    * attributes  attributes
    * landmark  landmark
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'boundingBox' => 'bounding_box',
            'attributes' => 'attributes',
            'landmark' => 'landmark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * boundingBox  boundingBox
    * attributes  attributes
    * landmark  landmark
    *
    * @var string[]
    */
    protected static $setters = [
            'boundingBox' => 'setBoundingBox',
            'attributes' => 'setAttributes',
            'landmark' => 'setLandmark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * boundingBox  boundingBox
    * attributes  attributes
    * landmark  landmark
    *
    * @var string[]
    */
    protected static $getters = [
            'boundingBox' => 'getBoundingBox',
            'attributes' => 'getAttributes',
            'landmark' => 'getLandmark'
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
        $this->container['boundingBox'] = isset($data['boundingBox']) ? $data['boundingBox'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['landmark'] = isset($data['landmark']) ? $data['landmark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['boundingBox'] === null) {
            $invalidProperties[] = "'boundingBox' can't be null";
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
    * Gets boundingBox
    *  boundingBox
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\BoundingBox
    */
    public function getBoundingBox()
    {
        return $this->container['boundingBox'];
    }

    /**
    * Sets boundingBox
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\BoundingBox $boundingBox boundingBox
    *
    * @return $this
    */
    public function setBoundingBox($boundingBox)
    {
        $this->container['boundingBox'] = $boundingBox;
        return $this;
    }

    /**
    * Gets attributes
    *  attributes
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\Attributes|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\Attributes|null $attributes attributes
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets landmark
    *  landmark
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\Landmark|null
    */
    public function getLandmark()
    {
        return $this->container['landmark'];
    }

    /**
    * Sets landmark
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\Landmark|null $landmark landmark
    *
    * @return $this
    */
    public function setLandmark($landmark)
    {
        $this->container['landmark'] = $landmark;
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

