<?php
/**
 * AccountPlansPlanAudio
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * API Description
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developer@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AccountPlansPlanAudio Class Doc Comment
 *
 * @category Class
 * @description Additional Audio Conferencing &lt;a href&#x3D;\&quot;#plans\&quot;&gt;plan type&lt;/a&gt;
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountPlansPlanAudio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountPlans_plan_audio';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'tollfree_countries' => 'string',
        'premium_countries' => 'string',
        'callout_countries' => 'string',
        'ddi_numbers' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'tollfree_countries' => null,
        'premium_countries' => null,
        'callout_countries' => null,
        'ddi_numbers' => null
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
        'type' => 'type',
        'tollfree_countries' => 'tollfree_countries',
        'premium_countries' => 'premium_countries',
        'callout_countries' => 'callout_countries',
        'ddi_numbers' => 'ddi_numbers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'tollfree_countries' => 'setTollfreeCountries',
        'premium_countries' => 'setPremiumCountries',
        'callout_countries' => 'setCalloutCountries',
        'ddi_numbers' => 'setDdiNumbers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'tollfree_countries' => 'getTollfreeCountries',
        'premium_countries' => 'getPremiumCountries',
        'callout_countries' => 'getCalloutCountries',
        'ddi_numbers' => 'getDdiNumbers'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tollfree_countries'] = isset($data['tollfree_countries']) ? $data['tollfree_countries'] : null;
        $this->container['premium_countries'] = isset($data['premium_countries']) ? $data['premium_countries'] : null;
        $this->container['callout_countries'] = isset($data['callout_countries']) ? $data['callout_countries'] : null;
        $this->container['ddi_numbers'] = isset($data['ddi_numbers']) ? $data['ddi_numbers'] : null;
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Additional Audio Conferencing <a href=\"#plans\">plan type</a>
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets tollfree_countries
     *
     * @return string
     */
    public function getTollfreeCountries()
    {
        return $this->container['tollfree_countries'];
    }

    /**
     * Sets tollfree_countries
     *
     * @param string $tollfree_countries Toll-free countries, multiple value separated by comma
     *
     * @return $this
     */
    public function setTollfreeCountries($tollfree_countries)
    {
        $this->container['tollfree_countries'] = $tollfree_countries;

        return $this;
    }

    /**
     * Gets premium_countries
     *
     * @return string
     */
    public function getPremiumCountries()
    {
        return $this->container['premium_countries'];
    }

    /**
     * Sets premium_countries
     *
     * @param string $premium_countries Premium countries, multiple value separated by comma
     *
     * @return $this
     */
    public function setPremiumCountries($premium_countries)
    {
        $this->container['premium_countries'] = $premium_countries;

        return $this;
    }

    /**
     * Gets callout_countries
     *
     * @return string
     */
    public function getCalloutCountries()
    {
        return $this->container['callout_countries'];
    }

    /**
     * Sets callout_countries
     *
     * @param string $callout_countries Call-out countries, multiple value separated by comma
     *
     * @return $this
     */
    public function setCalloutCountries($callout_countries)
    {
        $this->container['callout_countries'] = $callout_countries;

        return $this;
    }

    /**
     * Gets ddi_numbers
     *
     * @return int
     */
    public function getDdiNumbers()
    {
        return $this->container['ddi_numbers'];
    }

    /**
     * Sets ddi_numbers
     *
     * @param int $ddi_numbers Dedicated Dial-In Numbers
     *
     * @return $this
     */
    public function setDdiNumbers($ddi_numbers)
    {
        $this->container['ddi_numbers'] = $ddi_numbers;

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


