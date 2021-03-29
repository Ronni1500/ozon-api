<?php
/**
 * ReturnsGetReturnsCompanyFBSRequestFilter
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * apiv1/warehouse.proto
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: release-sapi-516
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ReturnsGetReturnsCompanyFBSRequestFilter Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReturnsGetReturnsCompanyFBSRequestFilter implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'returnsGetReturnsCompanyFBSRequestFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'accepted_from_customer_moment' => '\Swagger\Client\Model\FilterTimeRange',
        'last_free_waiting_day' => '\Swagger\Client\Model\FilterTimeRange',
        'order_id' => 'int',
        'posting_number' => 'string[]',
        'product_name' => 'string',
        'product_offer_id' => 'string',
        'status' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'accepted_from_customer_moment' => 'accepted_from_customer_moment',
        'last_free_waiting_day' => 'last_free_waiting_day',
        'order_id' => 'order_id',
        'posting_number' => 'posting_number',
        'product_name' => 'product_name',
        'product_offer_id' => 'product_offer_id',
        'status' => 'status'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'accepted_from_customer_moment' => 'setAcceptedFromCustomerMoment',
        'last_free_waiting_day' => 'setLastFreeWaitingDay',
        'order_id' => 'setOrderId',
        'posting_number' => 'setPostingNumber',
        'product_name' => 'setProductName',
        'product_offer_id' => 'setProductOfferId',
        'status' => 'setStatus'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'accepted_from_customer_moment' => 'getAcceptedFromCustomerMoment',
        'last_free_waiting_day' => 'getLastFreeWaitingDay',
        'order_id' => 'getOrderId',
        'posting_number' => 'getPostingNumber',
        'product_name' => 'getProductName',
        'product_offer_id' => 'getProductOfferId',
        'status' => 'getStatus'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['accepted_from_customer_moment'] = isset($data['accepted_from_customer_moment']) ? $data['accepted_from_customer_moment'] : null;
        $this->container['last_free_waiting_day'] = isset($data['last_free_waiting_day']) ? $data['last_free_waiting_day'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['posting_number'] = isset($data['posting_number']) ? $data['posting_number'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['product_offer_id'] = isset($data['product_offer_id']) ? $data['product_offer_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets accepted_from_customer_moment
     * @return \Swagger\Client\Model\FilterTimeRange
     */
    public function getAcceptedFromCustomerMoment()
    {
        return $this->container['accepted_from_customer_moment'];
    }

    /**
     * Sets accepted_from_customer_moment
     * @param \Swagger\Client\Model\FilterTimeRange $accepted_from_customer_moment
     * @return $this
     */
    public function setAcceptedFromCustomerMoment($accepted_from_customer_moment)
    {
        $this->container['accepted_from_customer_moment'] = $accepted_from_customer_moment;

        return $this;
    }

    /**
     * Gets last_free_waiting_day
     * @return \Swagger\Client\Model\FilterTimeRange
     */
    public function getLastFreeWaitingDay()
    {
        return $this->container['last_free_waiting_day'];
    }

    /**
     * Sets last_free_waiting_day
     * @param \Swagger\Client\Model\FilterTimeRange $last_free_waiting_day
     * @return $this
     */
    public function setLastFreeWaitingDay($last_free_waiting_day)
    {
        $this->container['last_free_waiting_day'] = $last_free_waiting_day;

        return $this;
    }

    /**
     * Gets order_id
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param int $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets posting_number
     * @return string[]
     */
    public function getPostingNumber()
    {
        return $this->container['posting_number'];
    }

    /**
     * Sets posting_number
     * @param string[] $posting_number
     * @return $this
     */
    public function setPostingNumber($posting_number)
    {
        $this->container['posting_number'] = $posting_number;

        return $this;
    }

    /**
     * Gets product_name
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     * @param string $product_name
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets product_offer_id
     * @return string
     */
    public function getProductOfferId()
    {
        return $this->container['product_offer_id'];
    }

    /**
     * Sets product_offer_id
     * @param string $product_offer_id
     * @return $this
     */
    public function setProductOfferId($product_offer_id)
    {
        $this->container['product_offer_id'] = $product_offer_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


