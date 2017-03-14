<?php
/**
 * FilterListAvailableNumbers
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Phone.com API
 *
 * This is a Phone.com api Swagger definition
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apisupport@phone.com
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
 * FilterListAvailableNumbers Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FilterListAvailableNumbers implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FilterListAvailableNumbers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'phone_number' => 'string',
        'country_code' => 'string',
        'npa' => 'string',
        'nxx' => 'string',
        'xxxx' => 'string',
        'city' => 'string',
        'province' => 'string',
        'country' => 'string',
        'price' => 'string',
        'category' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'phone_number' => 'phone_number',
        'country_code' => 'country_code',
        'npa' => 'npa',
        'nxx' => 'nxx',
        'xxxx' => 'xxxx',
        'city' => 'city',
        'province' => 'province',
        'country' => 'country',
        'price' => 'price',
        'category' => 'category'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'phone_number' => 'setPhoneNumber',
        'country_code' => 'setCountryCode',
        'npa' => 'setNpa',
        'nxx' => 'setNxx',
        'xxxx' => 'setXxxx',
        'city' => 'setCity',
        'province' => 'setProvince',
        'country' => 'setCountry',
        'price' => 'setPrice',
        'category' => 'setCategory'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'phone_number' => 'getPhoneNumber',
        'country_code' => 'getCountryCode',
        'npa' => 'getNpa',
        'nxx' => 'getNxx',
        'xxxx' => 'getXxxx',
        'city' => 'getCity',
        'province' => 'getProvince',
        'country' => 'getCountry',
        'price' => 'getPrice',
        'category' => 'getCategory'
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
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['npa'] = isset($data['npa']) ? $data['npa'] : null;
        $this->container['nxx'] = isset($data['nxx']) ? $data['nxx'] : null;
        $this->container['xxxx'] = isset($data['xxxx']) ? $data['xxxx'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
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
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets npa
     * @return string
     */
    public function getNpa()
    {
        return $this->container['npa'];
    }

    /**
     * Sets npa
     * @param string $npa
     * @return $this
     */
    public function setNpa($npa)
    {
        $this->container['npa'] = $npa;

        return $this;
    }

    /**
     * Gets nxx
     * @return string
     */
    public function getNxx()
    {
        return $this->container['nxx'];
    }

    /**
     * Sets nxx
     * @param string $nxx
     * @return $this
     */
    public function setNxx($nxx)
    {
        $this->container['nxx'] = $nxx;

        return $this;
    }

    /**
     * Gets xxxx
     * @return string
     */
    public function getXxxx()
    {
        return $this->container['xxxx'];
    }

    /**
     * Sets xxxx
     * @param string $xxxx
     * @return $this
     */
    public function setXxxx($xxxx)
    {
        $this->container['xxxx'] = $xxxx;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets province
     * @return string
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     * @param string $province
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets price
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param string $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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

