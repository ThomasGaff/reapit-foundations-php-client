<?php
/**
 * UpdateIdentityCheckModel
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
 * UpdateIdentityCheckModel Class Doc Comment
 *
 * @category Class
 * @description Request body used to update an exist contact identity check
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateIdentityCheckModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateIdentityCheckModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'checkDate' => '\DateTime',
        'status' => 'string',
        'negotiatorId' => 'string',
        'identityDocument1' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdIdentityDocument1',
        'identityDocument2' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdIdentityDocument1',
        'metadata' => 'array<string,object>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'checkDate' => 'date',
        'status' => null,
        'negotiatorId' => null,
        'identityDocument1' => null,
        'identityDocument2' => null,
        'metadata' => null
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
        'checkDate' => 'checkDate',
        'status' => 'status',
        'negotiatorId' => 'negotiatorId',
        'identityDocument1' => 'identityDocument1',
        'identityDocument2' => 'identityDocument2',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkDate' => 'setCheckDate',
        'status' => 'setStatus',
        'negotiatorId' => 'setNegotiatorId',
        'identityDocument1' => 'setIdentityDocument1',
        'identityDocument2' => 'setIdentityDocument2',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkDate' => 'getCheckDate',
        'status' => 'getStatus',
        'negotiatorId' => 'getNegotiatorId',
        'identityDocument1' => 'getIdentityDocument1',
        'identityDocument2' => 'getIdentityDocument2',
        'metadata' => 'getMetadata'
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
        $this->container['checkDate'] = $data['checkDate'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['negotiatorId'] = $data['negotiatorId'] ?? null;
        $this->container['identityDocument1'] = $data['identityDocument1'] ?? null;
        $this->container['identityDocument2'] = $data['identityDocument2'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets checkDate
     *
     * @return \DateTime|null
     */
    public function getCheckDate()
    {
        return $this->container['checkDate'];
    }

    /**
     * Sets checkDate
     *
     * @param \DateTime|null $checkDate The date when the identity check was performed. This may differ to the date when the check was created
     *
     * @return self
     */
    public function setCheckDate($checkDate)
    {
        $this->container['checkDate'] = $checkDate;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current status of the identity check (pass/fail/pending/cancelled/warnings/unchecked)
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets negotiatorId
     *
     * @return string|null
     */
    public function getNegotiatorId()
    {
        return $this->container['negotiatorId'];
    }

    /**
     * Sets negotiatorId
     *
     * @param string|null $negotiatorId The unique identifier of the negotiator that initiated the identity check
     *
     * @return self
     */
    public function setNegotiatorId($negotiatorId)
    {
        $this->container['negotiatorId'] = $negotiatorId;

        return $this;
    }

    /**
     * Gets identityDocument1
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdIdentityDocument1|null
     */
    public function getIdentityDocument1()
    {
        return $this->container['identityDocument1'];
    }

    /**
     * Sets identityDocument1
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdIdentityDocument1|null $identityDocument1 identityDocument1
     *
     * @return self
     */
    public function setIdentityDocument1($identityDocument1)
    {
        $this->container['identityDocument1'] = $identityDocument1;

        return $this;
    }

    /**
     * Gets identityDocument2
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdIdentityDocument1|null
     */
    public function getIdentityDocument2()
    {
        return $this->container['identityDocument2'];
    }

    /**
     * Sets identityDocument2
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdIdentityDocument1|null $identityDocument2 identityDocument2
     *
     * @return self
     */
    public function setIdentityDocument2($identityDocument2)
    {
        $this->container['identityDocument2'] = $identityDocument2;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,object>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,object>|null $metadata App specific metadata to set against the identity check
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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


