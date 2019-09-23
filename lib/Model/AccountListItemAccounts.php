<?php
/**
 * AccountListItemAccounts
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
 * AccountListItemAccounts Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountListItemAccounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountListItem_accounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'account_name' => 'string',
        'owner_email' => 'string',
        'account_type' => 'string',
        'seats' => 'int',
        'subscription_start_time' => '\DateTime',
        'subscription_end_time' => '\DateTime',
        'created_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'account_name' => null,
        'owner_email' => null,
        'account_type' => null,
        'seats' => null,
        'subscription_start_time' => 'date-time',
        'subscription_end_time' => 'date-time',
        'created_at' => 'date-time'
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
        'account_name' => 'account_name',
        'owner_email' => 'owner_email',
        'account_type' => 'account_type',
        'seats' => 'seats',
        'subscription_start_time' => 'subscription_start_time',
        'subscription_end_time' => 'subscription_end_time',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account_name' => 'setAccountName',
        'owner_email' => 'setOwnerEmail',
        'account_type' => 'setAccountType',
        'seats' => 'setSeats',
        'subscription_start_time' => 'setSubscriptionStartTime',
        'subscription_end_time' => 'setSubscriptionEndTime',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account_name' => 'getAccountName',
        'owner_email' => 'getOwnerEmail',
        'account_type' => 'getAccountType',
        'seats' => 'getSeats',
        'subscription_start_time' => 'getSubscriptionStartTime',
        'subscription_end_time' => 'getSubscriptionEndTime',
        'created_at' => 'getCreatedAt'
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
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['owner_email'] = isset($data['owner_email']) ? $data['owner_email'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['seats'] = isset($data['seats']) ? $data['seats'] : null;
        $this->container['subscription_start_time'] = isset($data['subscription_start_time']) ? $data['subscription_start_time'] : null;
        $this->container['subscription_end_time'] = isset($data['subscription_end_time']) ? $data['subscription_end_time'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
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
     * @param string $id Account ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name Account name
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets owner_email
     *
     * @return string
     */
    public function getOwnerEmail()
    {
        return $this->container['owner_email'];
    }

    /**
     * Sets owner_email
     *
     * @param string $owner_email Account owner email
     *
     * @return $this
     */
    public function setOwnerEmail($owner_email)
    {
        $this->container['owner_email'] = $owner_email;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type Account type
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets seats
     *
     * @return int
     */
    public function getSeats()
    {
        return $this->container['seats'];
    }

    /**
     * Sets seats
     *
     * @param int $seats Account seats
     *
     * @return $this
     */
    public function setSeats($seats)
    {
        $this->container['seats'] = $seats;

        return $this;
    }

    /**
     * Gets subscription_start_time
     *
     * @return \DateTime
     */
    public function getSubscriptionStartTime()
    {
        return $this->container['subscription_start_time'];
    }

    /**
     * Sets subscription_start_time
     *
     * @param \DateTime $subscription_start_time Account subscription start date/time
     *
     * @return $this
     */
    public function setSubscriptionStartTime($subscription_start_time)
    {
        $this->container['subscription_start_time'] = $subscription_start_time;

        return $this;
    }

    /**
     * Gets subscription_end_time
     *
     * @return \DateTime
     */
    public function getSubscriptionEndTime()
    {
        return $this->container['subscription_end_time'];
    }

    /**
     * Sets subscription_end_time
     *
     * @param \DateTime $subscription_end_time Account subscription end date/time
     *
     * @return $this
     */
    public function setSubscriptionEndTime($subscription_end_time)
    {
        $this->container['subscription_end_time'] = $subscription_end_time;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Account creation date/time
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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


