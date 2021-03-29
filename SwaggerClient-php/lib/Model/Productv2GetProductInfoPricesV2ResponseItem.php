<?php
/**
 * Productv2GetProductInfoPricesV2ResponseItem
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
 * Productv2GetProductInfoPricesV2ResponseItem Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Productv2GetProductInfoPricesV2ResponseItem implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'productv2GetProductInfoPricesV2ResponseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'commissions' => '\Swagger\Client\Model\Productv2GetProductInfoPricesV2ResponseCommissions',
        'marketing_actions' => '\Swagger\Client\Model\ItemMarketingActions',
        'offer_id' => 'string',
        'price' => '\Swagger\Client\Model\GetProductInfoPricesV2ResponsePrice',
        'price_index' => 'string',
        'product_id' => 'int',
        'volume_weight' => 'double'
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
        'commissions' => 'commissions',
        'marketing_actions' => 'marketing_actions',
        'offer_id' => 'offer_id',
        'price' => 'price',
        'price_index' => 'price_index',
        'product_id' => 'product_id',
        'volume_weight' => 'volume_weight'
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
        'commissions' => 'setCommissions',
        'marketing_actions' => 'setMarketingActions',
        'offer_id' => 'setOfferId',
        'price' => 'setPrice',
        'price_index' => 'setPriceIndex',
        'product_id' => 'setProductId',
        'volume_weight' => 'setVolumeWeight'
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
        'commissions' => 'getCommissions',
        'marketing_actions' => 'getMarketingActions',
        'offer_id' => 'getOfferId',
        'price' => 'getPrice',
        'price_index' => 'getPriceIndex',
        'product_id' => 'getProductId',
        'volume_weight' => 'getVolumeWeight'
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
        $this->container['commissions'] = isset($data['commissions']) ? $data['commissions'] : null;
        $this->container['marketing_actions'] = isset($data['marketing_actions']) ? $data['marketing_actions'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_index'] = isset($data['price_index']) ? $data['price_index'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['volume_weight'] = isset($data['volume_weight']) ? $data['volume_weight'] : null;
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
     * Gets commissions
     * @return \Swagger\Client\Model\Productv2GetProductInfoPricesV2ResponseCommissions
     */
    public function getCommissions()
    {
        return $this->container['commissions'];
    }

    /**
     * Sets commissions
     * @param \Swagger\Client\Model\Productv2GetProductInfoPricesV2ResponseCommissions $commissions
     * @return $this
     */
    public function setCommissions($commissions)
    {
        $this->container['commissions'] = $commissions;

        return $this;
    }

    /**
     * Gets marketing_actions
     * @return \Swagger\Client\Model\ItemMarketingActions
     */
    public function getMarketingActions()
    {
        return $this->container['marketing_actions'];
    }

    /**
     * Sets marketing_actions
     * @param \Swagger\Client\Model\ItemMarketingActions $marketing_actions
     * @return $this
     */
    public function setMarketingActions($marketing_actions)
    {
        $this->container['marketing_actions'] = $marketing_actions;

        return $this;
    }

    /**
     * Gets offer_id
     * @return string
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     * @param string $offer_id
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets price
     * @return \Swagger\Client\Model\GetProductInfoPricesV2ResponsePrice
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param \Swagger\Client\Model\GetProductInfoPricesV2ResponsePrice $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_index
     * @return string
     */
    public function getPriceIndex()
    {
        return $this->container['price_index'];
    }

    /**
     * Sets price_index
     * @param string $price_index
     * @return $this
     */
    public function setPriceIndex($price_index)
    {
        $this->container['price_index'] = $price_index;

        return $this;
    }

    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets volume_weight
     * @return double
     */
    public function getVolumeWeight()
    {
        return $this->container['volume_weight'];
    }

    /**
     * Sets volume_weight
     * @param double $volume_weight
     * @return $this
     */
    public function setVolumeWeight($volume_weight)
    {
        $this->container['volume_weight'] = $volume_weight;

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

