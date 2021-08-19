<?php
/**
 * PropertySellingModel
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
 * PropertySellingModel Class Doc Comment
 *
 * @category Class
 * @description Representation of property details specific to sales marketing
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PropertySellingModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PropertySellingModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instructed' => '\DateTime',
        'price' => 'double',
        'qualifier' => 'string',
        'status' => 'string',
        'disposal' => 'string',
        'completed' => '\DateTime',
        'exchanged' => '\DateTime',
        'accountPaid' => '\DateTime',
        'tenure' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingTenure',
        'vendorId' => 'string',
        'agency' => 'string',
        'fee' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingFee',
        'exchangedCompanyFee' => 'double',
        'recommendedPrice' => 'int',
        'brochureId' => 'string',
        'exchangedPrice' => 'int',
        'exchangedOfficeId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'instructed' => 'date',
        'price' => 'double',
        'qualifier' => null,
        'status' => null,
        'disposal' => null,
        'completed' => 'date',
        'exchanged' => 'date',
        'accountPaid' => 'date',
        'tenure' => null,
        'vendorId' => null,
        'agency' => null,
        'fee' => null,
        'exchangedCompanyFee' => 'double',
        'recommendedPrice' => 'int32',
        'brochureId' => null,
        'exchangedPrice' => 'int32',
        'exchangedOfficeId' => null
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
        'instructed' => 'instructed',
        'price' => 'price',
        'qualifier' => 'qualifier',
        'status' => 'status',
        'disposal' => 'disposal',
        'completed' => 'completed',
        'exchanged' => 'exchanged',
        'accountPaid' => 'accountPaid',
        'tenure' => 'tenure',
        'vendorId' => 'vendorId',
        'agency' => 'agency',
        'fee' => 'fee',
        'exchangedCompanyFee' => 'exchangedCompanyFee',
        'recommendedPrice' => 'recommendedPrice',
        'brochureId' => 'brochureId',
        'exchangedPrice' => 'exchangedPrice',
        'exchangedOfficeId' => 'exchangedOfficeId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instructed' => 'setInstructed',
        'price' => 'setPrice',
        'qualifier' => 'setQualifier',
        'status' => 'setStatus',
        'disposal' => 'setDisposal',
        'completed' => 'setCompleted',
        'exchanged' => 'setExchanged',
        'accountPaid' => 'setAccountPaid',
        'tenure' => 'setTenure',
        'vendorId' => 'setVendorId',
        'agency' => 'setAgency',
        'fee' => 'setFee',
        'exchangedCompanyFee' => 'setExchangedCompanyFee',
        'recommendedPrice' => 'setRecommendedPrice',
        'brochureId' => 'setBrochureId',
        'exchangedPrice' => 'setExchangedPrice',
        'exchangedOfficeId' => 'setExchangedOfficeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instructed' => 'getInstructed',
        'price' => 'getPrice',
        'qualifier' => 'getQualifier',
        'status' => 'getStatus',
        'disposal' => 'getDisposal',
        'completed' => 'getCompleted',
        'exchanged' => 'getExchanged',
        'accountPaid' => 'getAccountPaid',
        'tenure' => 'getTenure',
        'vendorId' => 'getVendorId',
        'agency' => 'getAgency',
        'fee' => 'getFee',
        'exchangedCompanyFee' => 'getExchangedCompanyFee',
        'recommendedPrice' => 'getRecommendedPrice',
        'brochureId' => 'getBrochureId',
        'exchangedPrice' => 'getExchangedPrice',
        'exchangedOfficeId' => 'getExchangedOfficeId'
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
        $this->container['instructed'] = $data['instructed'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['qualifier'] = $data['qualifier'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['disposal'] = $data['disposal'] ?? null;
        $this->container['completed'] = $data['completed'] ?? null;
        $this->container['exchanged'] = $data['exchanged'] ?? null;
        $this->container['accountPaid'] = $data['accountPaid'] ?? null;
        $this->container['tenure'] = $data['tenure'] ?? null;
        $this->container['vendorId'] = $data['vendorId'] ?? null;
        $this->container['agency'] = $data['agency'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['exchangedCompanyFee'] = $data['exchangedCompanyFee'] ?? null;
        $this->container['recommendedPrice'] = $data['recommendedPrice'] ?? null;
        $this->container['brochureId'] = $data['brochureId'] ?? null;
        $this->container['exchangedPrice'] = $data['exchangedPrice'] ?? null;
        $this->container['exchangedOfficeId'] = $data['exchangedOfficeId'] ?? null;
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
     * Gets instructed
     *
     * @return \DateTime|null
     */
    public function getInstructed()
    {
        return $this->container['instructed'];
    }

    /**
     * Sets instructed
     *
     * @param \DateTime|null $instructed The date that the property was marked as for sale
     *
     * @return self
     */
    public function setInstructed($instructed)
    {
        $this->container['instructed'] = $instructed;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double|null $price The marketing price of the property
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets qualifier
     *
     * @return string|null
     */
    public function getQualifier()
    {
        return $this->container['qualifier'];
    }

    /**
     * Sets qualifier
     *
     * @param string|null $qualifier The price qualifier (askingPrice/priceOnApplication/guidePrice/offersInRegion/offersOver/offersInExcess/fixedPrice/priceReducedTo)
     *
     * @return self
     */
    public function setQualifier($qualifier)
    {
        $this->container['qualifier'] = $qualifier;

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
     * @param string|null $status The current status of the sale (preAppraisal/valuation/paidValuation/forSale/forSaleUnavailable/underOffer/underOfferUnavailable/reserved/exchanged/completed/soldExternally/withdrawn)
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets disposal
     *
     * @return string|null
     */
    public function getDisposal()
    {
        return $this->container['disposal'];
    }

    /**
     * Sets disposal
     *
     * @param string|null $disposal The method used to sell the property (auction/confidential/tender/offersInvited/privateTreaty)
     *
     * @return self
     */
    public function setDisposal($disposal)
    {
        $this->container['disposal'] = $disposal;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return \DateTime|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param \DateTime|null $completed The date the property sale was completed
     *
     * @return self
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets exchanged
     *
     * @return \DateTime|null
     */
    public function getExchanged()
    {
        return $this->container['exchanged'];
    }

    /**
     * Sets exchanged
     *
     * @param \DateTime|null $exchanged The date the property was exchanged
     *
     * @return self
     */
    public function setExchanged($exchanged)
    {
        $this->container['exchanged'] = $exchanged;

        return $this;
    }

    /**
     * Gets accountPaid
     *
     * @return \DateTime|null
     */
    public function getAccountPaid()
    {
        return $this->container['accountPaid'];
    }

    /**
     * Sets accountPaid
     *
     * @param \DateTime|null $accountPaid The date the property account was paid
     *
     * @return self
     */
    public function setAccountPaid($accountPaid)
    {
        $this->container['accountPaid'] = $accountPaid;

        return $this;
    }

    /**
     * Gets tenure
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingTenure|null
     */
    public function getTenure()
    {
        return $this->container['tenure'];
    }

    /**
     * Sets tenure
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingTenure|null $tenure tenure
     *
     * @return self
     */
    public function setTenure($tenure)
    {
        $this->container['tenure'] = $tenure;

        return $this;
    }

    /**
     * Gets vendorId
     *
     * @return string|null
     */
    public function getVendorId()
    {
        return $this->container['vendorId'];
    }

    /**
     * Sets vendorId
     *
     * @param string|null $vendorId The unique identifier of the vendor selling the property
     *
     * @return self
     */
    public function setVendorId($vendorId)
    {
        $this->container['vendorId'] = $vendorId;

        return $this;
    }

    /**
     * Gets agency
     *
     * @return string|null
     */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
     * Sets agency
     *
     * @param string|null $agency The selling agency type (marketingForAssociate/clientsOnly/comparable/subAgent/jointSole/jointSoleFeeAvailable/multiple/multipleFeeAvailable/ownToSell/soleSellingRights/soleSellingRightsFeeAvailable/soleAgent/soleAgentFeeAvailable)
     *
     * @return self
     */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingFee|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027SellingFee|null $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets exchangedCompanyFee
     *
     * @return double|null
     */
    public function getExchangedCompanyFee()
    {
        return $this->container['exchangedCompanyFee'];
    }

    /**
     * Sets exchangedCompanyFee
     *
     * @param double|null $exchangedCompanyFee The actual fee amount to be collected by the agent - often based on the exchange price of the property
     *
     * @return self
     */
    public function setExchangedCompanyFee($exchangedCompanyFee)
    {
        $this->container['exchangedCompanyFee'] = $exchangedCompanyFee;

        return $this;
    }

    /**
     * Gets recommendedPrice
     *
     * @return int|null
     */
    public function getRecommendedPrice()
    {
        return $this->container['recommendedPrice'];
    }

    /**
     * Sets recommendedPrice
     *
     * @param int|null $recommendedPrice The agent's recommended asking price
     *
     * @return self
     */
    public function setRecommendedPrice($recommendedPrice)
    {
        $this->container['recommendedPrice'] = $recommendedPrice;

        return $this;
    }

    /**
     * Gets brochureId
     *
     * @return string|null
     */
    public function getBrochureId()
    {
        return $this->container['brochureId'];
    }

    /**
     * Sets brochureId
     *
     * @param string|null $brochureId The unique identifier of the document used for the sales brochure
     *
     * @return self
     */
    public function setBrochureId($brochureId)
    {
        $this->container['brochureId'] = $brochureId;

        return $this;
    }

    /**
     * Gets exchangedPrice
     *
     * @return int|null
     */
    public function getExchangedPrice()
    {
        return $this->container['exchangedPrice'];
    }

    /**
     * Sets exchangedPrice
     *
     * @param int|null $exchangedPrice The price the property exchanged/sold for
     *
     * @return self
     */
    public function setExchangedPrice($exchangedPrice)
    {
        $this->container['exchangedPrice'] = $exchangedPrice;

        return $this;
    }

    /**
     * Gets exchangedOfficeId
     *
     * @return string|null
     */
    public function getExchangedOfficeId()
    {
        return $this->container['exchangedOfficeId'];
    }

    /**
     * Sets exchangedOfficeId
     *
     * @param string|null $exchangedOfficeId The unique identifier of the office that sold the property
     *
     * @return self
     */
    public function setExchangedOfficeId($exchangedOfficeId)
    {
        $this->container['exchangedOfficeId'] = $exchangedOfficeId;

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


