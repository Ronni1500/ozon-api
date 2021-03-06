<?php
/**
 * SupplierWaybill
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
 * SupplierWaybill Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SupplierWaybill implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'supplierWaybill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'discrepancy_report' => '\Swagger\Client\Model\SupplierDiscrepancyReport[]',
        'document_date' => 'string',
        'document_number' => 'string',
        'item_count' => 'int',
        'state' => 'string',
        'sum_with_vat' => 'double',
        'total_item_amount_by_document' => 'int',
        'total_item_amount_by_fact' => 'int',
        'vat_sum' => 'double',
        'waybill_id' => 'int'
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
        'discrepancy_report' => 'discrepancy_report',
        'document_date' => 'document_date',
        'document_number' => 'document_number',
        'item_count' => 'item_count',
        'state' => 'state',
        'sum_with_vat' => 'sum_with_vat',
        'total_item_amount_by_document' => 'total_item_amount_by_document',
        'total_item_amount_by_fact' => 'total_item_amount_by_fact',
        'vat_sum' => 'vat_sum',
        'waybill_id' => 'waybill_id'
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
        'discrepancy_report' => 'setDiscrepancyReport',
        'document_date' => 'setDocumentDate',
        'document_number' => 'setDocumentNumber',
        'item_count' => 'setItemCount',
        'state' => 'setState',
        'sum_with_vat' => 'setSumWithVat',
        'total_item_amount_by_document' => 'setTotalItemAmountByDocument',
        'total_item_amount_by_fact' => 'setTotalItemAmountByFact',
        'vat_sum' => 'setVatSum',
        'waybill_id' => 'setWaybillId'
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
        'discrepancy_report' => 'getDiscrepancyReport',
        'document_date' => 'getDocumentDate',
        'document_number' => 'getDocumentNumber',
        'item_count' => 'getItemCount',
        'state' => 'getState',
        'sum_with_vat' => 'getSumWithVat',
        'total_item_amount_by_document' => 'getTotalItemAmountByDocument',
        'total_item_amount_by_fact' => 'getTotalItemAmountByFact',
        'vat_sum' => 'getVatSum',
        'waybill_id' => 'getWaybillId'
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
        $this->container['discrepancy_report'] = isset($data['discrepancy_report']) ? $data['discrepancy_report'] : null;
        $this->container['document_date'] = isset($data['document_date']) ? $data['document_date'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['item_count'] = isset($data['item_count']) ? $data['item_count'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['sum_with_vat'] = isset($data['sum_with_vat']) ? $data['sum_with_vat'] : null;
        $this->container['total_item_amount_by_document'] = isset($data['total_item_amount_by_document']) ? $data['total_item_amount_by_document'] : null;
        $this->container['total_item_amount_by_fact'] = isset($data['total_item_amount_by_fact']) ? $data['total_item_amount_by_fact'] : null;
        $this->container['vat_sum'] = isset($data['vat_sum']) ? $data['vat_sum'] : null;
        $this->container['waybill_id'] = isset($data['waybill_id']) ? $data['waybill_id'] : null;
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
     * Gets discrepancy_report
     * @return \Swagger\Client\Model\SupplierDiscrepancyReport[]
     */
    public function getDiscrepancyReport()
    {
        return $this->container['discrepancy_report'];
    }

    /**
     * Sets discrepancy_report
     * @param \Swagger\Client\Model\SupplierDiscrepancyReport[] $discrepancy_report
     * @return $this
     */
    public function setDiscrepancyReport($discrepancy_report)
    {
        $this->container['discrepancy_report'] = $discrepancy_report;

        return $this;
    }

    /**
     * Gets document_date
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     * @param string $document_date
     * @return $this
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets document_number
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     * @param string $document_number
     * @return $this
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets item_count
     * @return int
     */
    public function getItemCount()
    {
        return $this->container['item_count'];
    }

    /**
     * Sets item_count
     * @param int $item_count
     * @return $this
     */
    public function setItemCount($item_count)
    {
        $this->container['item_count'] = $item_count;

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
     * Gets sum_with_vat
     * @return double
     */
    public function getSumWithVat()
    {
        return $this->container['sum_with_vat'];
    }

    /**
     * Sets sum_with_vat
     * @param double $sum_with_vat
     * @return $this
     */
    public function setSumWithVat($sum_with_vat)
    {
        $this->container['sum_with_vat'] = $sum_with_vat;

        return $this;
    }

    /**
     * Gets total_item_amount_by_document
     * @return int
     */
    public function getTotalItemAmountByDocument()
    {
        return $this->container['total_item_amount_by_document'];
    }

    /**
     * Sets total_item_amount_by_document
     * @param int $total_item_amount_by_document
     * @return $this
     */
    public function setTotalItemAmountByDocument($total_item_amount_by_document)
    {
        $this->container['total_item_amount_by_document'] = $total_item_amount_by_document;

        return $this;
    }

    /**
     * Gets total_item_amount_by_fact
     * @return int
     */
    public function getTotalItemAmountByFact()
    {
        return $this->container['total_item_amount_by_fact'];
    }

    /**
     * Sets total_item_amount_by_fact
     * @param int $total_item_amount_by_fact
     * @return $this
     */
    public function setTotalItemAmountByFact($total_item_amount_by_fact)
    {
        $this->container['total_item_amount_by_fact'] = $total_item_amount_by_fact;

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
     * Gets waybill_id
     * @return int
     */
    public function getWaybillId()
    {
        return $this->container['waybill_id'];
    }

    /**
     * Sets waybill_id
     * @param int $waybill_id
     * @return $this
     */
    public function setWaybillId($waybill_id)
    {
        $this->container['waybill_id'] = $waybill_id;

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


