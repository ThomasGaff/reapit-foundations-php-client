<?php
/**
 * PropertyImageModelPagedResult
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
 * PropertyImageModelPagedResult Class Doc Comment
 *
 * @category Class
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PropertyImageModelPagedResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PropertyImageModelPagedResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'embedded' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20029Embedded[]',
        'pageNumber' => 'int',
        'pageSize' => 'int',
        'pageCount' => 'int',
        'totalPageCount' => 'int',
        'totalCount' => 'int',
        'links' => 'array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'embedded' => null,
        'pageNumber' => 'int32',
        'pageSize' => 'int32',
        'pageCount' => 'int32',
        'totalPageCount' => 'int32',
        'totalCount' => 'int32',
        'links' => null
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
        'embedded' => '_embedded',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'pageCount' => 'pageCount',
        'totalPageCount' => 'totalPageCount',
        'totalCount' => 'totalCount',
        'links' => '_links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'embedded' => 'setEmbedded',
        'pageNumber' => 'setPageNumber',
        'pageSize' => 'setPageSize',
        'pageCount' => 'setPageCount',
        'totalPageCount' => 'setTotalPageCount',
        'totalCount' => 'setTotalCount',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'embedded' => 'getEmbedded',
        'pageNumber' => 'getPageNumber',
        'pageSize' => 'getPageSize',
        'pageCount' => 'getPageCount',
        'totalPageCount' => 'getTotalPageCount',
        'totalCount' => 'getTotalCount',
        'links' => 'getLinks'
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
        $this->container['embedded'] = $data['embedded'] ?? null;
        $this->container['pageNumber'] = $data['pageNumber'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['pageCount'] = $data['pageCount'] ?? null;
        $this->container['totalPageCount'] = $data['totalPageCount'] ?? null;
        $this->container['totalCount'] = $data['totalCount'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
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
     * Gets embedded
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20029Embedded[]|null
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20029Embedded[]|null $embedded embedded
     *
     * @return self
     */
    public function setEmbedded($embedded)
    {
        $this->container['embedded'] = $embedded;

        return $this;
    }

    /**
     * Gets pageNumber
     *
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
     * Sets pageNumber
     *
     * @param int|null $pageNumber pageNumber
     *
     * @return self
     */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize pageSize
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets pageCount
     *
     * @return int|null
     */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
     * Sets pageCount
     *
     * @param int|null $pageCount pageCount
     *
     * @return self
     */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;

        return $this;
    }

    /**
     * Gets totalPageCount
     *
     * @return int|null
     */
    public function getTotalPageCount()
    {
        return $this->container['totalPageCount'];
    }

    /**
     * Sets totalPageCount
     *
     * @param int|null $totalPageCount totalPageCount
     *
     * @return self
     */
    public function setTotalPageCount($totalPageCount)
    {
        $this->container['totalPageCount'] = $totalPageCount;

        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount totalCount
     *
     * @return self
     */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets links
     *
     * @return array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


