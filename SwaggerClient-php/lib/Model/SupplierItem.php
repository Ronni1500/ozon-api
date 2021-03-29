<?php
/**
 * SupplierItem
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
 * SupplierItem Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SupplierItem implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'supplierItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'amount_by_document' => 'int',
        'amount_by_fact' => 'int',
        'amount_of_accepted' => 'int',
        'amount_of_defect' => 'int',
        'amount_of_shortage' => 'int',
        'amount_of_surplus' => 'int',
        'contractor_item_code' => 'string',
        'defect_reason' => 'string',
        'name' => 'string',
        'ozon_id' => 'int',
        'price_without_vat' => 'double',
        'total_sum_with_vat' => 'double',
        'vat_rate' => 'double',
        'vat_sum' => 'double'
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
        'amount_by_document' => 'amount_by_document',
        'amount_by_fact' => 'amount_by_fact',
        'amount_of_accepted' => 'amount_of_accepted',
        'amount_of_defect' => 'amount_of_defect',
        'amount_of_shortage' => 'amount_of_shortage',
        'amount_of_surplus' => 'amount_of_surplus',
        'contractor_item_code' => 'contractor_item_code',
        'defect_reason' => 'defect_reason',
        'name' => 'name',
        'ozon_id' => 'ozon_id',
        'price_without_vat' => 'price_without_vat',
        'total_sum_with_vat' => 'total_sum_with_vat',
        'vat_rate' => 'vat_rate',
        'vat_sum' => 'vat_sum'
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
        'amount_by_document' => 'setAmountByDocument',
        'amount_by_fact' => 'setAmountByFact',
        'amount_of_accepted' => 'setAmountOfAccepted',
        'amount_of_defect' => 'setAmountOfDefect',
        'amount_of_shortage' => 'setAmountOfShortage',
        'amount_of_surplus' => 'setAmountOfSurplus',
        'contractor_item_code' => 'setContractorItemCode',
        'defect_reason' => 'setDefectReason',
        'name' => 'setName',
        'ozon_id' => 'setOzonId',
        'price_without_vat' => 'setPriceWithoutVat',
        'total_sum_with_vat' => 'setTotalSumWithVat',
        'vat_rate' => 'setVatRate',
        'vat_sum' => 'setVatSum'
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
        'amount_by_document' => 'getAmountByDocument',
        'amount_by_fact' => 'getAmountByFact',
        'amount_of_accepted' => 'getAmountOfAccepted',
        'amount_of_defect' => 'getAmountOfDefect',
        'amount_of_shortage' => 'getAmountOfShortage',
        'amount_of_surplus' => 'getAmountOfSurplus',
        'contractor_item_code' => 'getContractorItemCode',
        'defect_reason' => 'getDefectReason',
        'name' => 'getName',
        'ozon_id' => 'getOzonId',
        'price_without_vat' => 'getPriceWithoutVat',
        'total_sum_with_vat' => 'getTotalSumWithVat',
        'vat_rate' => 'getVatRate',
        'vat_sum' => 'getVatSum'
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
        $this->container['amount_by_document'] = isset($data['amount_by_document']) ? $data['amount_by_document'] : null;
        $this->container['amount_by_fact'] = isset($data['amount_by_fact']) ? $data['amount_by_fact'] : null;
        $this->container['amount_of_accepted'] = isset($data['amount_of_accepted']) ? $data['amount_of_accepted'] : null;
        $this->container['amount_of_defect'] = isset($data['amount_of_defect']) ? $data['amount_of_defect'] : null;
        $this->container['amount_of_shortage'] = isset($data['amount_of_shortage']) ? $data['amount_of_shortage'] : null;
        $this->container['amount_of_surplus'] = isset($data['amount_of_surplus']) ? $data['amount_of_surplus'] : null;
        $this->container['contractor_item_code'] = isset($data['contractor_item_code']) ? $data['contractor_item_code'] : null;
        $this->container['defect_reason'] = isset($data['defect_reason']) ? $data['defect_reason'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ozon_id'] = isset($data['ozon_id']) ? $data['ozon_id'] : null;
        $this->container['price_without_vat'] = isset($data['price_without_vat']) ? $data['price_without_vat'] : null;
        $this->container['total_sum_with_vat'] = isset($data['total_sum_with_vat']) ? $data['total_sum_with_vat'] : null;
        $this->container['vat_rate'] = isset($data['vat_rate']) ? $data['vat_rate'] : null;
        $this->container['vat_sum'] = isset($data['vat_sum']) ? $data['vat_sum'] : null;
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
     * Gets amount_by_document
     * @return int
     */
    public function getAmountByDocument()
    {
        return $this->container['amount_by_document'];
    }

    /**
     * Sets amount_by_document
     * @param int $amount_by_document
     * @return $this
     */
    public function setAmountByDocument($amount_by_document)
    {
        $this->container['amount_by_document'] = $amount_by_document;

        return $this;
    }

    /**
     * Gets amount_by_fact
     * @return int
     */
    public function getAmountByFact()
    {
        return $this->container['amount_by_fact'];
    }

    /**
     * Sets amount_by_fact
     * @param int $amount_by_fact
     * @return $this
     */
    public function setAmountByFact($amount_by_fact)
    {
        $this->container['amount_by_fact'] = $amount_by_fact;

        return $this;
    }

    /**
     * Gets amount_of_accepted
     * @return int
     */
    public function getAmountOfAccepted()
    {
        return $this->container['amount_of_accepted'];
    }

    /**
     * Sets amount_of_accepted
     * @param int $amount_of_accepted
     * @return $this
     */
    public function setAmountOfAccepted($amount_of_accepted)
    {
        $this->container['amount_of_accepted'] = $amount_of_accepted;

        return $this;
    }

    /**
     * Gets amount_of_defect
     * @return int
     */
    public function getAmountOfDefect()
    {
        return $this->container['amount_of_defect'];
    }

    /**
     * Sets amount_of_defect
     * @param int $amount_of_defect
     * @return $this
     */
    public function setAmountOfDefect($amount_of_defect)
    {
        $this->container['amount_of_defect'] = $amount_of_defect;

        return $this;
    }

    /**
     * Gets amount_of_shortage
     * @return int
     */
    public function getAmountOfShortage()
    {
        return $this->container['amount_of_shortage'];
    }

    /**
     * Sets amount_of_shortage
     * @param int $amount_of_shortage
     * @return $this
     */
    public function setAmountOfShortage($amount_of_shortage)
    {
        $this->container['amount_of_shortage'] = $amount_of_shortage;

        return $this;
    }

    /**
     * Gets amount_of_surplus
     * @return int
     */
    public function getAmountOfSurplus()
    {
        return $this->container['amount_of_surplus'];
    }

    /**
     * Sets amount_of_surplus
     * @param int $amount_of_surplus
     * @return $this
     */
    public function setAmountOfSurplus($amount_of_surplus)
    {
        $this->container['amount_of_surplus'] = $amount_of_surplus;

        return $this;
    }

    /**
     * Gets contractor_item_code
     * @return string
     */
    public function getContractorItemCode()
    {
        return $this->container['contractor_item_code'];
    }

    /**
     * Sets contractor_item_code
     * @param string $contractor_item_code
     * @return $this
     */
    public function setContractorItemCode($contractor_item_code)
    {
        $this->container['contractor_item_code'] = $contractor_item_code;

        return $this;
    }

    /**
     * Gets defect_reason
     * @return string
     */
    public function getDefectReason()
    {
        return $this->container['defect_reason'];
    }

    /**
     * Sets defect_reason
     * @param string $defect_reason
     * @return $this
     */
    public function setDefectReason($defect_reason)
    {
        $this->container['defect_reason'] = $defect_reason;

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
     * Gets ozon_id
     * @return int
     */
    public function getOzonId()
    {
        return $this->container['ozon_id'];
    }

    /**
     * Sets ozon_id
     * @param int $ozon_id
     * @return $this
     */
    public function setOzonId($ozon_id)
    {
        $this->container['ozon_id'] = $ozon_id;

        return $this;
    }

    /**
     * Gets price_without_vat
     * @return double
     */
    public function getPriceWithoutVat()
    {
        return $this->container['price_without_vat'];
    }

    /**
     * Sets price_without_vat
     * @param double $price_without_vat
     * @return $this
     */
    public function setPriceWithoutVat($price_without_vat)
    {
        $this->container['price_without_vat'] = $price_without_vat;

        return $this;
    }

    /**
     * Gets total_sum_with_vat
     * @return double
     */
    public function getTotalSumWithVat()
    {
        return $this->container['total_sum_with_vat'];
    }

    /**
     * Sets total_sum_with_vat
     * @param double $total_sum_with_vat
     * @return $this
     */
    public function setTotalSumWithVat($total_sum_with_vat)
    {
        $this->container['total_sum_with_vat'] = $total_sum_with_vat;

        return $this;
    }

    /**
     * Gets vat_rate
     * @return double
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     * @param double $vat_rate
     * @return $this
     */
    public function setVatRate($vat_rate)
    {
        $this->container['vat_rate'] = $vat_rate;

        return $this;
    }

    /**
     * Gets vat_sum
     * @return double
     */
    public function getVatSum()
    {
        return $this->container['vat_sum'];
    }

    /**
     * Sets vat_sum
     * @param double $vat_sum
     * @return $this
     */
    public function setVatSum($vat_sum)
    {
        $this->container['vat_sum'] = $vat_sum;

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


