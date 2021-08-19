<?php
/**
 * CreateWorksOrderItemModel
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Foundations Interactive API Explorer
 *
 * <p>Technical documentation for the Reapit Foundations REST API endpoints. This tool is interactive and provides instant access to data hosted in our <strong><a href=\"https://foundations-documentation.reapit.cloud/api/api-documentation#sandbox-mode\">sandbox environment</a> </strong>with <strong>authentication</strong> and <strong>versioning</strong> headers pre-populated. Example requests and responses are shown by default but you can switch to view a fully documented schema - look for the&nbsp;<strong>model</strong> link.</p> <p>* To begin developing with the platform, consult our&nbsp;<strong><a href=\"https://foundations-documentation.reapit.cloud/api/api-documentation\">documentation</a></strong>&nbsp;<br />* To report a bug or request a new feature, see our <strong><a href=\"https://developers.reapit.cloud/help\">help pages</a>&nbsp;<br /></strong>* For information on terminology, see our&nbsp;<strong><a href=\"https://foundations-documentation.reapit.cloud/platform-glossary\">glossary</a></strong>&nbsp;<br />* Our APIs are located at&nbsp;<strong>https://platform.reapit.cloud<br /></strong>* The current API version is&nbsp;<strong>2020-01-31<br /></strong></p>
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NorthernEstateAgencies\ReapitFoundationsClient\Model;

use \ArrayAccess;
use \NorthernEstateAgencies\ReapitFoundationsClient\ObjectSerializer;

/**
 * CreateWorksOrderItemModel Class Doc Comment
 *
 * @category Class
 * @description Representation of a works order item
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateWorksOrderItemModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateWorksOrderItemModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'notes' => 'string',
        'chargeTo' => 'string',
        'estimate' => 'double',
        'estimateType' => 'string',
        'netAmount' => 'double',
        'vatAmount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'notes' => null,
        'chargeTo' => null,
        'estimate' => 'double',
        'estimateType' => null,
        'netAmount' => 'double',
        'vatAmount' => 'double'
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
        'notes' => 'notes',
        'chargeTo' => 'chargeTo',
        'estimate' => 'estimate',
        'estimateType' => 'estimateType',
        'netAmount' => 'netAmount',
        'vatAmount' => 'vatAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notes' => 'setNotes',
        'chargeTo' => 'setChargeTo',
        'estimate' => 'setEstimate',
        'estimateType' => 'setEstimateType',
        'netAmount' => 'setNetAmount',
        'vatAmount' => 'setVatAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notes' => 'getNotes',
        'chargeTo' => 'getChargeTo',
        'estimate' => 'getEstimate',
        'estimateType' => 'getEstimateType',
        'netAmount' => 'getNetAmount',
        'vatAmount' => 'getVatAmount'
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
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['chargeTo'] = $data['chargeTo'] ?? null;
        $this->container['estimate'] = $data['estimate'] ?? null;
        $this->container['estimateType'] = $data['estimateType'] ?? null;
        $this->container['netAmount'] = $data['netAmount'] ?? null;
        $this->container['vatAmount'] = $data['vatAmount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['notes'] === null) {
            $invalidProperties[] = "'notes' can't be null";
        }
        if ($this->container['chargeTo'] === null) {
            $invalidProperties[] = "'chargeTo' can't be null";
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
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes The notes attached to the works order item
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets chargeTo
     *
     * @return string
     */
    public function getChargeTo()
    {
        return $this->container['chargeTo'];
    }

    /**
     * Sets chargeTo
     *
     * @param string $chargeTo The party to be charged for the work being carried out (landlord/tenant)
     *
     * @return self
     */
    public function setChargeTo($chargeTo)
    {
        $this->container['chargeTo'] = $chargeTo;

        return $this;
    }

    /**
     * Gets estimate
     *
     * @return double|null
     */
    public function getEstimate()
    {
        return $this->container['estimate'];
    }

    /**
     * Sets estimate
     *
     * @param double|null $estimate The estimate of any costs associated with the work being carried out given to the party to be charged for the work
     *
     * @return self
     */
    public function setEstimate($estimate)
    {
        $this->container['estimate'] = $estimate;

        return $this;
    }

    /**
     * Gets estimateType
     *
     * @return string|null
     */
    public function getEstimateType()
    {
        return $this->container['estimateType'];
    }

    /**
     * Sets estimateType
     *
     * @param string|null $estimateType The type of estimate supplied (agent/verbal/written)
     *
     * @return self
     */
    public function setEstimateType($estimateType)
    {
        $this->container['estimateType'] = $estimateType;

        return $this;
    }

    /**
     * Gets netAmount
     *
     * @return double|null
     */
    public function getNetAmount()
    {
        return $this->container['netAmount'];
    }

    /**
     * Sets netAmount
     *
     * @param double|null $netAmount The net cost of the work to be carried out
     *
     * @return self
     */
    public function setNetAmount($netAmount)
    {
        $this->container['netAmount'] = $netAmount;

        return $this;
    }

    /**
     * Gets vatAmount
     *
     * @return double|null
     */
    public function getVatAmount()
    {
        return $this->container['vatAmount'];
    }

    /**
     * Sets vatAmount
     *
     * @param double|null $vatAmount The cost of the vat associated with the work
     *
     * @return self
     */
    public function setVatAmount($vatAmount)
    {
        $this->container['vatAmount'] = $vatAmount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


