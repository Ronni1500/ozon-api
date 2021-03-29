<?php
/**
 * FinanceTransactionListResponseTransaction
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
 * FinanceTransactionListResponseTransaction Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FinanceTransactionListResponseTransaction implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FinanceTransactionListResponseTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'commission_amount' => 'double',
        'details' => 'string',
        'discount_amount' => 'double',
        'item_delivery_amount' => 'double',
        'item_return_amount' => 'double',
        'order_amount' => 'double',
        'order_date' => '\DateTime',
        'order_number' => 'string',
        'order_state' => 'string',
        'total_amount' => 'double',
        'transaction_date' => '\DateTime',
        'transaction_number' => 'int',
        'transaction_type' => 'string',
        'transaction_type_slug' => 'string'
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
        'commission_amount' => 'commission_amount',
        'details' => 'details',
        'discount_amount' => 'discount_amount',
        'item_delivery_amount' => 'item_delivery_amount',
        'item_return_amount' => 'item_return_amount',
        'order_amount' => 'order_amount',
        'order_date' => 'order_date',
        'order_number' => 'order_number',
        'order_state' => 'order_state',
        'total_amount' => 'total_amount',
        'transaction_date' => 'transaction_date',
        'transaction_number' => 'transaction_number',
        'transaction_type' => 'transaction_type',
        'transaction_type_slug' => 'transaction_type_slug'
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
        'commission_amount' => 'setCommissionAmount',
        'details' => 'setDetails',
        'discount_amount' => 'setDiscountAmount',
        'item_delivery_amount' => 'setItemDeliveryAmount',
        'item_return_amount' => 'setItemReturnAmount',
        'order_amount' => 'setOrderAmount',
        'order_date' => 'setOrderDate',
        'order_number' => 'setOrderNumber',
        'order_state' => 'setOrderState',
        'total_amount' => 'setTotalAmount',
        'transaction_date' => 'setTransactionDate',
        'transaction_number' => 'setTransactionNumber',
        'transaction_type' => 'setTransactionType',
        'transaction_type_slug' => 'setTransactionTypeSlug'
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
        'commission_amount' => 'getCommissionAmount',
        'details' => 'getDetails',
        'discount_amount' => 'getDiscountAmount',
        'item_delivery_amount' => 'getItemDeliveryAmount',
        'item_return_amount' => 'getItemReturnAmount',
        'order_amount' => 'getOrderAmount',
        'order_date' => 'getOrderDate',
        'order_number' => 'getOrderNumber',
        'order_state' => 'getOrderState',
        'total_amount' => 'getTotalAmount',
        'transaction_date' => 'getTransactionDate',
        'transaction_number' => 'getTransactionNumber',
        'transaction_type' => 'getTransactionType',
        'transaction_type_slug' => 'getTransactionTypeSlug'
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
        $this->container['commission_amount'] = isset($data['commission_amount']) ? $data['commission_amount'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['item_delivery_amount'] = isset($data['item_delivery_amount']) ? $data['item_delivery_amount'] : null;
        $this->container['item_return_amount'] = isset($data['item_return_amount']) ? $data['item_return_amount'] : null;
        $this->container['order_amount'] = isset($data['order_amount']) ? $data['order_amount'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['order_state'] = isset($data['order_state']) ? $data['order_state'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['transaction_number'] = isset($data['transaction_number']) ? $data['transaction_number'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['transaction_type_slug'] = isset($data['transaction_type_slug']) ? $data['transaction_type_slug'] : null;
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
     * Gets commission_amount
     * @return double
     */
    public function getCommissionAmount()
    {
        return $this->container['commission_amount'];
    }

    /**
     * Sets commission_amount
     * @param double $commission_amount
     * @return $this
     */
    public function setCommissionAmount($commission_amount)
    {
        $this->container['commission_amount'] = $commission_amount;

        return $this;
    }

    /**
     * Gets details
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param string $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets discount_amount
     * @return double
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     * @param double $discount_amount
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets item_delivery_amount
     * @return double
     */
    public function getItemDeliveryAmount()
    {
        return $this->container['item_delivery_amount'];
    }

    /**
     * Sets item_delivery_amount
     * @param double $item_delivery_amount
     * @return $this
     */
    public function setItemDeliveryAmount($item_delivery_amount)
    {
        $this->container['item_delivery_amount'] = $item_delivery_amount;

        return $this;
    }

    /**
     * Gets item_return_amount
     * @return double
     */
    public function getItemReturnAmount()
    {
        return $this->container['item_return_amount'];
    }

    /**
     * Sets item_return_amount
     * @param double $item_return_amount
     * @return $this
     */
    public function setItemReturnAmount($item_return_amount)
    {
        $this->container['item_return_amount'] = $item_return_amount;

        return $this;
    }

    /**
     * Gets order_amount
     * @return double
     */
    public function getOrderAmount()
    {
        return $this->container['order_amount'];
    }

    /**
     * Sets order_amount
     * @param double $order_amount
     * @return $this
     */
    public function setOrderAmount($order_amount)
    {
        $this->container['order_amount'] = $order_amount;

        return $this;
    }

    /**
     * Gets order_date
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     * @param \DateTime $order_date
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets order_number
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     * @param string $order_number
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets order_state
     * @return string
     */
    public function getOrderState()
    {
        return $this->container['order_state'];
    }

    /**
     * Sets order_state
     * @param string $order_state
     * @return $this
     */
    public function setOrderState($order_state)
    {
        $this->container['order_state'] = $order_state;

        return $this;
    }

    /**
     * Gets total_amount
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     * @param double $total_amount
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets transaction_date
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     * @param \DateTime $transaction_date
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets transaction_number
     * @return int
     */
    public function getTransactionNumber()
    {
        return $this->container['transaction_number'];
    }

    /**
     * Sets transaction_number
     * @param int $transaction_number
     * @return $this
     */
    public function setTransactionNumber($transaction_number)
    {
        $this->container['transaction_number'] = $transaction_number;

        return $this;
    }

    /**
     * Gets transaction_type
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     * @param string $transaction_type
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets transaction_type_slug
     * @return string
     */
    public function getTransactionTypeSlug()
    {
        return $this->container['transaction_type_slug'];
    }

    /**
     * Sets transaction_type_slug
     * @param string $transaction_type_slug
     * @return $this
     */
    public function setTransactionTypeSlug($transaction_type_slug)
    {
        $this->container['transaction_type_slug'] = $transaction_type_slug;

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


