<?php
/**
 * Productv2GetProductInfoResponseResult
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
 * Productv2GetProductInfoResponseResult Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Productv2GetProductInfoResponseResult implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'productv2GetProductInfoResponseResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'barcode' => 'string',
        'buybox_price' => 'string',
        'category_id' => 'int',
        'commissions' => '\Swagger\Client\Model\Productv2GetProductInfoResponseCommissions[]',
        'created_at' => '\DateTime',
        'errors' => '\Swagger\Client\Model\Productv2GetProductInfoResponseError[]',
        'id' => 'int',
        'images' => 'string[]',
        'is_prepayment' => 'bool',
        'is_prepayment_allowed' => 'bool',
        'marketing_price' => 'string',
        'min_ozon_price' => 'string',
        'name' => 'string',
        'offer_id' => 'string',
        'old_price' => 'string',
        'premium_price' => 'string',
        'price' => 'string',
        'price_index' => 'string',
        'recommended_price' => 'string',
        'sources' => '\Swagger\Client\Model\Productv2GetProductInfoResponseSource[]',
        'state' => 'string',
        'stocks' => '\Swagger\Client\Model\Productv2GetProductInfoResponseStock',
        'vat' => 'string',
        'visibility_details' => '\Swagger\Client\Model\Productv2GetProductInfoResponseVisibilityDetails',
        'visible' => 'bool',
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
        'barcode' => 'barcode',
        'buybox_price' => 'buybox_price',
        'category_id' => 'category_id',
        'commissions' => 'commissions',
        'created_at' => 'created_at',
        'errors' => 'errors',
        'id' => 'id',
        'images' => 'images',
        'is_prepayment' => 'is_prepayment',
        'is_prepayment_allowed' => 'is_prepayment_allowed',
        'marketing_price' => 'marketing_price',
        'min_ozon_price' => 'min_ozon_price',
        'name' => 'name',
        'offer_id' => 'offer_id',
        'old_price' => 'old_price',
        'premium_price' => 'premium_price',
        'price' => 'price',
        'price_index' => 'price_index',
        'recommended_price' => 'recommended_price',
        'sources' => 'sources',
        'state' => 'state',
        'stocks' => 'stocks',
        'vat' => 'vat',
        'visibility_details' => 'visibility_details',
        'visible' => 'visible',
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
        'barcode' => 'setBarcode',
        'buybox_price' => 'setBuyboxPrice',
        'category_id' => 'setCategoryId',
        'commissions' => 'setCommissions',
        'created_at' => 'setCreatedAt',
        'errors' => 'setErrors',
        'id' => 'setId',
        'images' => 'setImages',
        'is_prepayment' => 'setIsPrepayment',
        'is_prepayment_allowed' => 'setIsPrepaymentAllowed',
        'marketing_price' => 'setMarketingPrice',
        'min_ozon_price' => 'setMinOzonPrice',
        'name' => 'setName',
        'offer_id' => 'setOfferId',
        'old_price' => 'setOldPrice',
        'premium_price' => 'setPremiumPrice',
        'price' => 'setPrice',
        'price_index' => 'setPriceIndex',
        'recommended_price' => 'setRecommendedPrice',
        'sources' => 'setSources',
        'state' => 'setState',
        'stocks' => 'setStocks',
        'vat' => 'setVat',
        'visibility_details' => 'setVisibilityDetails',
        'visible' => 'setVisible',
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
        'barcode' => 'getBarcode',
        'buybox_price' => 'getBuyboxPrice',
        'category_id' => 'getCategoryId',
        'commissions' => 'getCommissions',
        'created_at' => 'getCreatedAt',
        'errors' => 'getErrors',
        'id' => 'getId',
        'images' => 'getImages',
        'is_prepayment' => 'getIsPrepayment',
        'is_prepayment_allowed' => 'getIsPrepaymentAllowed',
        'marketing_price' => 'getMarketingPrice',
        'min_ozon_price' => 'getMinOzonPrice',
        'name' => 'getName',
        'offer_id' => 'getOfferId',
        'old_price' => 'getOldPrice',
        'premium_price' => 'getPremiumPrice',
        'price' => 'getPrice',
        'price_index' => 'getPriceIndex',
        'recommended_price' => 'getRecommendedPrice',
        'sources' => 'getSources',
        'state' => 'getState',
        'stocks' => 'getStocks',
        'vat' => 'getVat',
        'visibility_details' => 'getVisibilityDetails',
        'visible' => 'getVisible',
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
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['buybox_price'] = isset($data['buybox_price']) ? $data['buybox_price'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['commissions'] = isset($data['commissions']) ? $data['commissions'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['is_prepayment'] = isset($data['is_prepayment']) ? $data['is_prepayment'] : null;
        $this->container['is_prepayment_allowed'] = isset($data['is_prepayment_allowed']) ? $data['is_prepayment_allowed'] : null;
        $this->container['marketing_price'] = isset($data['marketing_price']) ? $data['marketing_price'] : null;
        $this->container['min_ozon_price'] = isset($data['min_ozon_price']) ? $data['min_ozon_price'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['old_price'] = isset($data['old_price']) ? $data['old_price'] : null;
        $this->container['premium_price'] = isset($data['premium_price']) ? $data['premium_price'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_index'] = isset($data['price_index']) ? $data['price_index'] : null;
        $this->container['recommended_price'] = isset($data['recommended_price']) ? $data['recommended_price'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['stocks'] = isset($data['stocks']) ? $data['stocks'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['visibility_details'] = isset($data['visibility_details']) ? $data['visibility_details'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
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
     * Gets category_id
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param int $category_id
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets commissions
     * @return \Swagger\Client\Model\Productv2GetProductInfoResponseCommissions[]
     */
    public function getCommissions()
    {
        return $this->container['commissions'];
    }

    /**
     * Sets commissions
     * @param \Swagger\Client\Model\Productv2GetProductInfoResponseCommissions[] $commissions
     * @return $this
     */
    public function setCommissions($commissions)
    {
        $this->container['commissions'] = $commissions;

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
     * Gets errors
     * @return \Swagger\Client\Model\Productv2GetProductInfoResponseError[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     * @param \Swagger\Client\Model\Productv2GetProductInfoResponseError[] $errors
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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
     * Gets images
     * @return string[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     * @param string[] $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets is_prepayment
     * @return bool
     */
    public function getIsPrepayment()
    {
        return $this->container['is_prepayment'];
    }

    /**
     * Sets is_prepayment
     * @param bool $is_prepayment
     * @return $this
     */
    public function setIsPrepayment($is_prepayment)
    {
        $this->container['is_prepayment'] = $is_prepayment;

        return $this;
    }

    /**
     * Gets is_prepayment_allowed
     * @return bool
     */
    public function getIsPrepaymentAllowed()
    {
        return $this->container['is_prepayment_allowed'];
    }

    /**
     * Sets is_prepayment_allowed
     * @param bool $is_prepayment_allowed
     * @return $this
     */
    public function setIsPrepaymentAllowed($is_prepayment_allowed)
    {
        $this->container['is_prepayment_allowed'] = $is_prepayment_allowed;

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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets sources
     * @return \Swagger\Client\Model\Productv2GetProductInfoResponseSource[]
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     * @param \Swagger\Client\Model\Productv2GetProductInfoResponseSource[] $sources
     * @return $this
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets stocks
     * @return \Swagger\Client\Model\Productv2GetProductInfoResponseStock
     */
    public function getStocks()
    {
        return $this->container['stocks'];
    }

    /**
     * Sets stocks
     * @param \Swagger\Client\Model\Productv2GetProductInfoResponseStock $stocks
     * @return $this
     */
    public function setStocks($stocks)
    {
        $this->container['stocks'] = $stocks;

        return $this;
    }

    /**
     * Gets vat
     * @return string
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     * @param string $vat
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets visibility_details
     * @return \Swagger\Client\Model\Productv2GetProductInfoResponseVisibilityDetails
     */
    public function getVisibilityDetails()
    {
        return $this->container['visibility_details'];
    }

    /**
     * Sets visibility_details
     * @param \Swagger\Client\Model\Productv2GetProductInfoResponseVisibilityDetails $visibility_details
     * @return $this
     */
    public function setVisibilityDetails($visibility_details)
    {
        $this->container['visibility_details'] = $visibility_details;

        return $this;
    }

    /**
     * Gets visible
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     * @param bool $visible
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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


