<?php
/**
 * OrderItemStatusAcknowledgementStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorOrdersV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * OrderItemStatusAcknowledgementStatus Class Doc Comment
 *
 * @category Class
 * @description Acknowledgement status information.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderItemStatusAcknowledgementStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemStatus_acknowledgementStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'confirmation_status' => 'string',
        'accepted_quantity' => '\SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity',
        'rejected_quantity' => '\SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity',
        'acknowledgement_status_details' => '\SellingPartnerApi\Model\VendorOrdersV1\AcknowledgementStatusDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'confirmation_status' => null,
        'accepted_quantity' => null,
        'rejected_quantity' => null,
        'acknowledgement_status_details' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'confirmation_status' => 'confirmationStatus',
        'accepted_quantity' => 'acceptedQuantity',
        'rejected_quantity' => 'rejectedQuantity',
        'acknowledgement_status_details' => 'acknowledgementStatusDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'confirmation_status' => 'setConfirmationStatus',
        'accepted_quantity' => 'setAcceptedQuantity',
        'rejected_quantity' => 'setRejectedQuantity',
        'acknowledgement_status_details' => 'setAcknowledgementStatusDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmation_status' => 'getConfirmationStatus',
        'accepted_quantity' => 'getAcceptedQuantity',
        'rejected_quantity' => 'getRejectedQuantity',
        'acknowledgement_status_details' => 'getAcknowledgementStatusDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const CONFIRMATION_STATUS_ACCEPTED = 'ACCEPTED';
    const CONFIRMATION_STATUS_PARTIALLY_ACCEPTED = 'PARTIALLY_ACCEPTED';
    const CONFIRMATION_STATUS_REJECTED = 'REJECTED';
    const CONFIRMATION_STATUS_UNCONFIRMED = 'UNCONFIRMED';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConfirmationStatusAllowableValues()
    {
        return [
            self::CONFIRMATION_STATUS_ACCEPTED,
            self::CONFIRMATION_STATUS_PARTIALLY_ACCEPTED,
            self::CONFIRMATION_STATUS_REJECTED,
            self::CONFIRMATION_STATUS_UNCONFIRMED,
        ];
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['confirmation_status'] = $data['confirmation_status'] ?? null;
        $this->container['accepted_quantity'] = $data['accepted_quantity'] ?? null;
        $this->container['rejected_quantity'] = $data['rejected_quantity'] ?? null;
        $this->container['acknowledgement_status_details'] = $data['acknowledgement_status_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConfirmationStatusAllowableValues();
        if (!is_null($this->container['confirmation_status']) && !in_array($this->container['confirmation_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'confirmation_status', must be one of '%s'",
                $this->container['confirmation_status'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets confirmation_status
     *
     * @return string|null
     */
    public function getConfirmationStatus()
    {
        return $this->container['confirmation_status'];
    }

    /**
     * Sets confirmation_status
     *
     * @param string|null $confirmation_status Confirmation status of line item.
     *
     * @return self
     */
    public function setConfirmationStatus($confirmation_status)
    {
        $allowedValues = $this->getConfirmationStatusAllowableValues();
        if (!is_null($confirmation_status) && !in_array($confirmation_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'confirmation_status', must be one of '%s'",
                    $confirmation_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['confirmation_status'] = $confirmation_status;

        return $this;
    }
    /**
     * Gets accepted_quantity
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null
     */
    public function getAcceptedQuantity()
    {
        return $this->container['accepted_quantity'];
    }

    /**
     * Sets accepted_quantity
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null $accepted_quantity accepted_quantity
     *
     * @return self
     */
    public function setAcceptedQuantity($accepted_quantity)
    {
        $this->container['accepted_quantity'] = $accepted_quantity;

        return $this;
    }
    /**
     * Gets rejected_quantity
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null
     */
    public function getRejectedQuantity()
    {
        return $this->container['rejected_quantity'];
    }

    /**
     * Sets rejected_quantity
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\ItemQuantity|null $rejected_quantity rejected_quantity
     *
     * @return self
     */
    public function setRejectedQuantity($rejected_quantity)
    {
        $this->container['rejected_quantity'] = $rejected_quantity;

        return $this;
    }
    /**
     * Gets acknowledgement_status_details
     *
     * @return \SellingPartnerApi\Model\VendorOrdersV1\AcknowledgementStatusDetails[]|null
     */
    public function getAcknowledgementStatusDetails()
    {
        return $this->container['acknowledgement_status_details'];
    }

    /**
     * Sets acknowledgement_status_details
     *
     * @param \SellingPartnerApi\Model\VendorOrdersV1\AcknowledgementStatusDetails[]|null $acknowledgement_status_details Details of item quantity confirmed.
     *
     * @return self
     */
    public function setAcknowledgementStatusDetails($acknowledgement_status_details)
    {
        $this->container['acknowledgement_status_details'] = $acknowledgement_status_details;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


