<?php
/**
 * PostingFboPosting
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
 * PostingFboPosting Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostingFboPosting implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'postingFboPosting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'additional_data' => '\Swagger\Client\Model\PostingAdditionalDataItem[]',
        'analytics_data' => '\Swagger\Client\Model\FboPostingFboPostingAnalyticsData',
        'cancel_reason_id' => 'int',
        'created_at' => '\DateTime',
        'financial_data' => '\Swagger\Client\Model\PostingPostingFinancialData',
        'in_process_at' => '\DateTime',
        'order_id' => 'int',
        'order_number' => 'string',
        'posting_number' => 'string',
        'products' => '\Swagger\Client\Model\PostingPostingProduct[]',
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
        'additional_data' => 'additional_data',
        'analytics_data' => 'analytics_data',
        'cancel_reason_id' => 'cancel_reason_id',
        'created_at' => 'created_at',
        'financial_data' => 'financial_data',
        'in_process_at' => 'in_process_at',
        'order_id' => 'order_id',
        'order_number' => 'order_number',
        'posting_number' => 'posting_number',
        'products' => 'products',
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
        'additional_data' => 'setAdditionalData',
        'analytics_data' => 'setAnalyticsData',
        'cancel_reason_id' => 'setCancelReasonId',
        'created_at' => 'setCreatedAt',
        'financial_data' => 'setFinancialData',
        'in_process_at' => 'setInProcessAt',
        'order_id' => 'setOrderId',
        'order_number' => 'setOrderNumber',
        'posting_number' => 'setPostingNumber',
        'products' => 'setProducts',
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
        'additional_data' => 'getAdditionalData',
        'analytics_data' => 'getAnalyticsData',
        'cancel_reason_id' => 'getCancelReasonId',
        'created_at' => 'getCreatedAt',
        'financial_data' => 'getFinancialData',
        'in_process_at' => 'getInProcessAt',
        'order_id' => 'getOrderId',
        'order_number' => 'getOrderNumber',
        'posting_number' => 'getPostingNumber',
        'products' => 'getProducts',
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
        $this->container['additional_data'] = isset($data['additional_data']) ? $data['additional_data'] : null;
        $this->container['analytics_data'] = isset($data['analytics_data']) ? $data['analytics_data'] : null;
        $this->container['cancel_reason_id'] = isset($data['cancel_reason_id']) ? $data['cancel_reason_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['financial_data'] = isset($data['financial_data']) ? $data['financial_data'] : null;
        $this->container['in_process_at'] = isset($data['in_process_at']) ? $data['in_process_at'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['posting_number'] = isset($data['posting_number']) ? $data['posting_number'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
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
     * Gets additional_data
     * @return \Swagger\Client\Model\PostingAdditionalDataItem[]
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     * @param \Swagger\Client\Model\PostingAdditionalDataItem[] $additional_data
     * @return $this
     */
    public function setAdditionalData($additional_data)
    {
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets analytics_data
     * @return \Swagger\Client\Model\FboPostingFboPostingAnalyticsData
     */
    public function getAnalyticsData()
    {
        return $this->container['analytics_data'];
    }

    /**
     * Sets analytics_data
     * @param \Swagger\Client\Model\FboPostingFboPostingAnalyticsData $analytics_data
     * @return $this
     */
    public function setAnalyticsData($analytics_data)
    {
        $this->container['analytics_data'] = $analytics_data;

        return $this;
    }

    /**
     * Gets cancel_reason_id
     * @return int
     */
    public function getCancelReasonId()
    {
        return $this->container['cancel_reason_id'];
    }

    /**
     * Sets cancel_reason_id
     * @param int $cancel_reason_id
     * @return $this
     */
    public function setCancelReasonId($cancel_reason_id)
    {
        $this->container['cancel_reason_id'] = $cancel_reason_id;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets financial_data
     * @return \Swagger\Client\Model\PostingPostingFinancialData
     */
    public function getFinancialData()
    {
        return $this->container['financial_data'];
    }

    /**
     * Sets financial_data
     * @param \Swagger\Client\Model\PostingPostingFinancialData $financial_data
     * @return $this
     */
    public function setFinancialData($financial_data)
    {
        $this->container['financial_data'] = $financial_data;

        return $this;
    }

    /**
     * Gets in_process_at
     * @return \DateTime
     */
    public function getInProcessAt()
    {
        return $this->container['in_process_at'];
    }

    /**
     * Sets in_process_at
     * @param \DateTime $in_process_at
     * @return $this
     */
    public function setInProcessAt($in_process_at)
    {
        $this->container['in_process_at'] = $in_process_at;

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
     * Gets posting_number
     * @return string
     */
    public function getPostingNumber()
    {
        return $this->container['posting_number'];
    }

    /**
     * Sets posting_number
     * @param string $posting_number
     * @return $this
     */
    public function setPostingNumber($posting_number)
    {
        $this->container['posting_number'] = $posting_number;

        return $this;
    }

    /**
     * Gets products
     * @return \Swagger\Client\Model\PostingPostingProduct[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param \Swagger\Client\Model\PostingPostingProduct[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

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


