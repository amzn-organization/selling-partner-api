<?php
/**
 * Poa
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
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

namespace SellingPartnerApi\Model\ServiceV1;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * Poa Class Doc Comment
 *
 * @category Class
 * @description Proof of Appointment (POA) details.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Poa implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Poa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appointment_time' => '\SellingPartnerApi\Model\ServiceV1\AppointmentTime',
        'technicians' => '\SellingPartnerApi\Model\ServiceV1\Technician[]',
        'uploading_technician' => 'string',
        'upload_time' => 'string',
        'poa_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appointment_time' => null,
        'technicians' => null,
        'uploading_technician' => null,
        'upload_time' => null,
        'poa_type' => null
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
        'appointment_time' => 'appointmentTime',
        'technicians' => 'technicians',
        'uploading_technician' => 'uploadingTechnician',
        'upload_time' => 'uploadTime',
        'poa_type' => 'poaType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'appointment_time' => 'setAppointmentTime',
        'technicians' => 'setTechnicians',
        'uploading_technician' => 'setUploadingTechnician',
        'upload_time' => 'setUploadTime',
        'poa_type' => 'setPoaType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_time' => 'getAppointmentTime',
        'technicians' => 'getTechnicians',
        'uploading_technician' => 'getUploadingTechnician',
        'upload_time' => 'getUploadTime',
        'poa_type' => 'getPoaType'
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
    }const POA_TYPE_NO_SIGNATURE_DUMMY_POS = 'NO_SIGNATURE_DUMMY_POS';
    const POA_TYPE_CUSTOMER_SIGNATURE = 'CUSTOMER_SIGNATURE';
    const POA_TYPE_DUMMY_RECEIPT = 'DUMMY_RECEIPT';
    const POA_TYPE_POA_RECEIPT = 'POA_RECEIPT';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPoaTypeAllowableValues()
    {
        return [
            self::POA_TYPE_NO_SIGNATURE_DUMMY_POS,
            self::POA_TYPE_CUSTOMER_SIGNATURE,
            self::POA_TYPE_DUMMY_RECEIPT,
            self::POA_TYPE_POA_RECEIPT,
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
        $this->container['appointment_time'] = $data['appointment_time'] ?? null;
        $this->container['technicians'] = $data['technicians'] ?? null;
        $this->container['uploading_technician'] = $data['uploading_technician'] ?? null;
        $this->container['upload_time'] = $data['upload_time'] ?? null;
        $this->container['poa_type'] = $data['poa_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['technicians']) && (count($this->container['technicians']) < 1)) {
            $invalidProperties[] = "invalid value for 'technicians', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['uploading_technician']) && !preg_match("/^[A-Z0-9]*$/", $this->container['uploading_technician'])) {
            $invalidProperties[] = "invalid value for 'uploading_technician', must be conform to the pattern /^[A-Z0-9]*$/.";
        }

        $allowedValues = $this->getPoaTypeAllowableValues();
        if (!is_null($this->container['poa_type']) && !in_array($this->container['poa_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'poa_type', must be one of '%s'",
                $this->container['poa_type'],
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
     * Gets appointment_time
     *
     * @return \SellingPartnerApi\Model\ServiceV1\AppointmentTime|null
     */
    public function getAppointmentTime()
    {
        return $this->container['appointment_time'];
    }

    /**
     * Sets appointment_time
     *
     * @param \SellingPartnerApi\Model\ServiceV1\AppointmentTime|null $appointment_time appointment_time
     *
     * @return self
     */
    public function setAppointmentTime($appointment_time)
    {
        $this->container['appointment_time'] = $appointment_time;

        return $this;
    }
    /**
     * Gets technicians
     *
     * @return \SellingPartnerApi\Model\ServiceV1\Technician[]|null
     */
    public function getTechnicians()
    {
        return $this->container['technicians'];
    }

    /**
     * Sets technicians
     *
     * @param \SellingPartnerApi\Model\ServiceV1\Technician[]|null $technicians A list of technicians.
     *
     * @return self
     */
    public function setTechnicians($technicians)
    {


        if (!is_null($technicians) && (count($technicians) < 1)) {
            throw new \InvalidArgumentException('invalid length for $technicians when calling Poa., number of items must be greater than or equal to 1.');
        }
        $this->container['technicians'] = $technicians;

        return $this;
    }
    /**
     * Gets uploading_technician
     *
     * @return string|null
     */
    public function getUploadingTechnician()
    {
        return $this->container['uploading_technician'];
    }

    /**
     * Sets uploading_technician
     *
     * @param string|null $uploading_technician The identifier of the technician who uploaded the POA.
     *
     * @return self
     */
    public function setUploadingTechnician($uploading_technician)
    {

        if (!is_null($uploading_technician) && (!preg_match("/^[A-Z0-9]*$/", $uploading_technician))) {
            throw new \InvalidArgumentException("invalid value for $uploading_technician when calling Poa., must conform to the pattern /^[A-Z0-9]*$/.");
        }

        $this->container['uploading_technician'] = $uploading_technician;

        return $this;
    }
    /**
     * Gets upload_time
     *
     * @return string|null
     */
    public function getUploadTime()
    {
        return $this->container['upload_time'];
    }

    /**
     * Sets upload_time
     *
     * @param string|null $upload_time The date and time when the POA was uploaded, in ISO 8601 format.
     *
     * @return self
     */
    public function setUploadTime($upload_time)
    {
        $this->container['upload_time'] = $upload_time;

        return $this;
    }
    /**
     * Gets poa_type
     *
     * @return string|null
     */
    public function getPoaType()
    {
        return $this->container['poa_type'];
    }

    /**
     * Sets poa_type
     *
     * @param string|null $poa_type The type of POA uploaded.
     *
     * @return self
     */
    public function setPoaType($poa_type)
    {
        $allowedValues = $this->getPoaTypeAllowableValues();
        if (!is_null($poa_type) && !in_array($poa_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'poa_type', must be one of '%s'",
                    $poa_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['poa_type'] = $poa_type;

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

