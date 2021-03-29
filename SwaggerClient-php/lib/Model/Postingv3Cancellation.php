<?php
/**
 * Postingv3Cancellation
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
 * Postingv3Cancellation Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Postingv3Cancellation implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'postingv3Cancellation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'affect_cancellation_rating' => 'bool',
        'cancel_reason' => 'string',
        'cancel_reason_id' => 'int',
        'cancellation_initiator' => 'string',
        'cancellation_type' => 'string',
        'cancelled_after_ship' => 'bool'
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
        'affect_cancellation_rating' => 'affect_cancellation_rating',
        'cancel_reason' => 'cancel_reason',
        'cancel_reason_id' => 'cancel_reason_id',
        'cancellation_initiator' => 'cancellation_initiator',
        'cancellation_type' => 'cancellation_type',
        'cancelled_after_ship' => 'cancelled_after_ship'
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
        'affect_cancellation_rating' => 'setAffectCancellationRating',
        'cancel_reason' => 'setCancelReason',
        'cancel_reason_id' => 'setCancelReasonId',
        'cancellation_initiator' => 'setCancellationInitiator',
        'cancellation_type' => 'setCancellationType',
        'cancelled_after_ship' => 'setCancelledAfterShip'
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
        'affect_cancellation_rating' => 'getAffectCancellationRating',
        'cancel_reason' => 'getCancelReason',
        'cancel_reason_id' => 'getCancelReasonId',
        'cancellation_initiator' => 'getCancellationInitiator',
        'cancellation_type' => 'getCancellationType',
        'cancelled_after_ship' => 'getCancelledAfterShip'
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
        $this->container['affect_cancellation_rating'] = isset($data['affect_cancellation_rating']) ? $data['affect_cancellation_rating'] : null;
        $this->container['cancel_reason'] = isset($data['cancel_reason']) ? $data['cancel_reason'] : null;
        $this->container['cancel_reason_id'] = isset($data['cancel_reason_id']) ? $data['cancel_reason_id'] : null;
        $this->container['cancellation_initiator'] = isset($data['cancellation_initiator']) ? $data['cancellation_initiator'] : null;
        $this->container['cancellation_type'] = isset($data['cancellation_type']) ? $data['cancellation_type'] : null;
        $this->container['cancelled_after_ship'] = isset($data['cancelled_after_ship']) ? $data['cancelled_after_ship'] : null;
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
     * Gets affect_cancellation_rating
     * @return bool
     */
    public function getAffectCancellationRating()
    {
        return $this->container['affect_cancellation_rating'];
    }

    /**
     * Sets affect_cancellation_rating
     * @param bool $affect_cancellation_rating
     * @return $this
     */
    public function setAffectCancellationRating($affect_cancellation_rating)
    {
        $this->container['affect_cancellation_rating'] = $affect_cancellation_rating;

        return $this;
    }

    /**
     * Gets cancel_reason
     * @return string
     */
    public function getCancelReason()
    {
        return $this->container['cancel_reason'];
    }

    /**
     * Sets cancel_reason
     * @param string $cancel_reason
     * @return $this
     */
    public function setCancelReason($cancel_reason)
    {
        $this->container['cancel_reason'] = $cancel_reason;

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
     * Gets cancellation_initiator
     * @return string
     */
    public function getCancellationInitiator()
    {
        return $this->container['cancellation_initiator'];
    }

    /**
     * Sets cancellation_initiator
     * @param string $cancellation_initiator
     * @return $this
     */
    public function setCancellationInitiator($cancellation_initiator)
    {
        $this->container['cancellation_initiator'] = $cancellation_initiator;

        return $this;
    }

    /**
     * Gets cancellation_type
     * @return string
     */
    public function getCancellationType()
    {
        return $this->container['cancellation_type'];
    }

    /**
     * Sets cancellation_type
     * @param string $cancellation_type
     * @return $this
     */
    public function setCancellationType($cancellation_type)
    {
        $this->container['cancellation_type'] = $cancellation_type;

        return $this;
    }

    /**
     * Gets cancelled_after_ship
     * @return bool
     */
    public function getCancelledAfterShip()
    {
        return $this->container['cancelled_after_ship'];
    }

    /**
     * Sets cancelled_after_ship
     * @param bool $cancelled_after_ship
     * @return $this
     */
    public function setCancelledAfterShip($cancelled_after_ship)
    {
        $this->container['cancelled_after_ship'] = $cancelled_after_ship;

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

