<?php
/**
 * ProductGetProductPriceListResponseItem
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
 * ProductGetProductPriceListResponseItem Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductGetProductPriceListResponseItem implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'productGetProductPriceListResponseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'buybox_price' => 'string',
        'commission' => '\Swagger\Client\Model\GetProductPriceListResponseCommission',
        'id' => 'int',
        'marketing_price' => 'string',
        'min_ozon_price' => 'string',
        'offer_id' => 'string',
        'old_price' => 'string',
        'premium_price' => 'string',
        'price' => 'string',
        'recommended_price' => 'string'
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
        'buybox_price' => 'buybox_price',
        'commission' => 'commission',
        'id' => 'id',
        'marketing_price' => 'marketing_price',
        'min_ozon_price' => 'min_ozon_price',
        'offer_id' => 'offer_id',
        'old_price' => 'old_price',
        'premium_price' => 'premium_price',
        'price' => 'price',
        'recommended_price' => 'recommended_price'
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
        'buybox_price' => 'setBuyboxPrice',
        'commission' => 'setCommission',
        'id' => 'setId',
        'marketing_price' => 'setMarketingPrice',
        'min_ozon_price' => 'setMinOzonPrice',
        'offer_id' => 'setOfferId',
        'old_price' => 'setOldPrice',
        'premium_price' => 'setPremiumPrice',
        'price' => 'setPrice',
        'recommended_price' => 'setRecommendedPrice'
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
        'buybox_price' => 'getBuyboxPrice',
        'commission' => 'getCommission',
        'id' => 'getId',
        'marketing_price' => 'getMarketingPrice',
        'min_ozon_price' => 'getMinOzonPrice',
        'offer_id' => 'getOfferId',
        'old_price' => 'getOldPrice',
        'premium_price' => 'getPremiumPrice',
        'price' => 'getPrice',
        'recommended_price' => 'getRecommendedPrice'
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
        $this->container['buybox_price'] = isset($data['buybox_price']) ? $data['buybox_price'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['marketing_price'] = isset($data['marketing_price']) ? $data['marketing_price'] : null;
        $this->container['min_ozon_price'] = isset($data['min_ozon_price']) ? $data['min_ozon_price'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['old_price'] = isset($data['old_price']) ? $data['old_price'] : null;
        $this->container['premium_price'] = isset($data['premium_price']) ? $data['premium_price'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['recommended_price'] = isset($data['recommended_price']) ? $data['recommended_price'] : null;
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
     * Gets buybox_price
     * @return string
     */
    public function getBuyboxPrice()
    {
        return $this->container['buybox_price'];
    }

    /**
     * Sets buybox_price
     * @param string $buybox_price
     * @return $this
     */
    public function setBuyboxPrice($buybox_price)
    {
        $this->container['buybox_price'] = $buybox_price;

        return $this;
    }

    /**
     * Gets commission
     * @return \Swagger\Client\Model\GetProductPriceListResponseCommission
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     * @param \Swagger\Client\Model\GetProductPriceListResponseCommission $commission
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets marketing_price
     * @return string
     */
    public function getMarketingPrice()
    {
        return $this->container['marketing_price'];
    }

    /**
     * Sets marketing_price
     * @param string $marketing_price
     * @return $this
     */
    public function setMarketingPrice($marketing_price)
    {
        $this->container['marketing_price'] = $marketing_price;

        return $this;
    }

    /**
     * Gets min_ozon_price
     * @return string
     */
    public function getMinOzonPrice()
    {
        return $this->container['min_ozon_price'];
    }

    /**
     * Sets min_ozon_price
     * @param string $min_ozon_price
     * @return $this
     */
    public function setMinOzonPrice($min_ozon_price)
    {
        $this->container['min_ozon_price'] = $min_ozon_price;

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
     * Gets old_price
     * @return string
     */
    public function getOldPrice()
    {
        return $this->container['old_price'];
    }

    /**
     * Sets old_price
     * @param string $old_price
     * @return $this
     */
    public function setOldPrice($old_price)
    {
        $this->container['old_price'] = $old_price;

        return $this;
    }

    /**
     * Gets premium_price
     * @return string
     */
    public function getPremiumPrice()
    {
        return $this->container['premium_price'];
    }

    /**
     * Sets premium_price
     * @param string $premium_price
     * @return $this
     */
    public function setPremiumPrice($premium_price)
    {
        $this->container['premium_price'] = $premium_price;

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
     * Gets recommended_price
     * @return string
     */
    public function getRecommendedPrice()
    {
        return $this->container['recommended_price'];
    }

    /**
     * Sets recommended_price
     * @param string $recommended_price
     * @return $this
     */
    public function setRecommendedPrice($recommended_price)
    {
        $this->container['recommended_price'] = $recommended_price;

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


