<?php
/**
 * AnalyticsGetStockOnWarehousesResponseTotalItem
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
 * AnalyticsGetStockOnWarehousesResponseTotalItem Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AnalyticsGetStockOnWarehousesResponseTotalItem implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsGetStockOnWarehousesResponseTotalItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'barcode' => 'string',
        'category' => 'string',
        'discounted' => 'string',
        'height' => 'float',
        'length' => 'float',
        'offer_id' => 'string',
        'sku' => 'string',
        'stock' => '\Swagger\Client\Model\AnalyticsGetStockOnWarehousesResponseTotalStock',
        'title' => 'string',
        'volume' => 'float',
        'weight' => 'float',
        'width' => 'float'
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
        'barcode' => 'barcode',
        'category' => 'category',
        'discounted' => 'discounted',
        'height' => 'height',
        'length' => 'length',
        'offer_id' => 'offer_id',
        'sku' => 'sku',
        'stock' => 'stock',
        'title' => 'title',
        'volume' => 'volume',
        'weight' => 'weight',
        'width' => 'width'
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
        'barcode' => 'setBarcode',
        'category' => 'setCategory',
        'discounted' => 'setDiscounted',
        'height' => 'setHeight',
        'length' => 'setLength',
        'offer_id' => 'setOfferId',
        'sku' => 'setSku',
        'stock' => 'setStock',
        'title' => 'setTitle',
        'volume' => 'setVolume',
        'weight' => 'setWeight',
        'width' => 'setWidth'
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
        'barcode' => 'getBarcode',
        'category' => 'getCategory',
        'discounted' => 'getDiscounted',
        'height' => 'getHeight',
        'length' => 'getLength',
        'offer_id' => 'getOfferId',
        'sku' => 'getSku',
        'stock' => 'getStock',
        'title' => 'getTitle',
        'volume' => 'getVolume',
        'weight' => 'getWeight',
        'width' => 'getWidth'
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
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['discounted'] = isset($data['discounted']) ? $data['discounted'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
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
     * Gets barcode
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     * @param string $barcode
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

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
     * Gets discounted
     * @return string
     */
    public function getDiscounted()
    {
        return $this->container['discounted'];
    }

    /**
     * Sets discounted
     * @param string $discounted
     * @return $this
     */
    public function setDiscounted($discounted)
    {
        $this->container['discounted'] = $discounted;

        return $this;
    }

    /**
     * Gets height
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param float $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets length
     * @return float
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     * @param float $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

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
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets stock
     * @return \Swagger\Client\Model\AnalyticsGetStockOnWarehousesResponseTotalStock
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     * @param \Swagger\Client\Model\AnalyticsGetStockOnWarehousesResponseTotalStock $stock
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets volume
     * @return float
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     * @param float $volume
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets weight
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param float $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets width
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param float $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


