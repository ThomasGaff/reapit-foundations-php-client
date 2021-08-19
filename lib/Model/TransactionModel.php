<?php
/**
 * TransactionModel
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
 * TransactionModel Class Doc Comment
 *
 * @category Class
 * @description Model representing a transaction
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'links' => 'array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>',
        'embedded' => 'array<string,object>',
        'id' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'category' => 'string',
        'type' => 'string',
        'description' => 'string',
        'status' => 'string',
        'ledger' => 'string',
        'netAmount' => 'double',
        'taxAmount' => 'double',
        'grossAmount' => 'double',
        'outstanding' => 'double',
        'companyId' => 'string',
        'landlordId' => 'string',
        'propertyId' => 'string',
        'tenancyId' => 'string',
        'eTag' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'links' => null,
        'embedded' => null,
        'id' => null,
        'created' => 'date-time',
        'modified' => 'date-time',
        'category' => null,
        'type' => null,
        'description' => null,
        'status' => null,
        'ledger' => null,
        'netAmount' => 'double',
        'taxAmount' => 'double',
        'grossAmount' => 'double',
        'outstanding' => 'double',
        'companyId' => null,
        'landlordId' => null,
        'propertyId' => null,
        'tenancyId' => null,
        'eTag' => null
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
        'links' => '_links',
        'embedded' => '_embedded',
        'id' => 'id',
        'created' => 'created',
        'modified' => 'modified',
        'category' => 'category',
        'type' => 'type',
        'description' => 'description',
        'status' => 'status',
        'ledger' => 'ledger',
        'netAmount' => 'netAmount',
        'taxAmount' => 'taxAmount',
        'grossAmount' => 'grossAmount',
        'outstanding' => 'outstanding',
        'companyId' => 'companyId',
        'landlordId' => 'landlordId',
        'propertyId' => 'propertyId',
        'tenancyId' => 'tenancyId',
        'eTag' => '_eTag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'embedded' => 'setEmbedded',
        'id' => 'setId',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'category' => 'setCategory',
        'type' => 'setType',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'ledger' => 'setLedger',
        'netAmount' => 'setNetAmount',
        'taxAmount' => 'setTaxAmount',
        'grossAmount' => 'setGrossAmount',
        'outstanding' => 'setOutstanding',
        'companyId' => 'setCompanyId',
        'landlordId' => 'setLandlordId',
        'propertyId' => 'setPropertyId',
        'tenancyId' => 'setTenancyId',
        'eTag' => 'setETag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'embedded' => 'getEmbedded',
        'id' => 'getId',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'category' => 'getCategory',
        'type' => 'getType',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'ledger' => 'getLedger',
        'netAmount' => 'getNetAmount',
        'taxAmount' => 'getTaxAmount',
        'grossAmount' => 'getGrossAmount',
        'outstanding' => 'getOutstanding',
        'companyId' => 'getCompanyId',
        'landlordId' => 'getLandlordId',
        'propertyId' => 'getPropertyId',
        'tenancyId' => 'getTenancyId',
        'eTag' => 'getETag'
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
        $this->container['links'] = $data['links'] ?? null;
        $this->container['embedded'] = $data['embedded'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['ledger'] = $data['ledger'] ?? null;
        $this->container['netAmount'] = $data['netAmount'] ?? null;
        $this->container['taxAmount'] = $data['taxAmount'] ?? null;
        $this->container['grossAmount'] = $data['grossAmount'] ?? null;
        $this->container['outstanding'] = $data['outstanding'] ?? null;
        $this->container['companyId'] = $data['companyId'] ?? null;
        $this->container['landlordId'] = $data['landlordId'] ?? null;
        $this->container['propertyId'] = $data['propertyId'] ?? null;
        $this->container['tenancyId'] = $data['tenancyId'] ?? null;
        $this->container['eTag'] = $data['eTag'] ?? null;
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
     * Gets embedded
     *
     * @return array<string,object>|null
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     *
     * @param array<string,object>|null $embedded embedded
     *
     * @return self
     */
    public function setEmbedded($embedded)
    {
        $this->container['embedded'] = $embedded;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier of the transaction
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created The date and time when the transaction was created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime|null
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime|null $modified The date and time when the transaction was last modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category The transaction category (advertisingCharge,accountTransfer,bankCharges,buyerAdminFee,buyerDeposit,buyerPayment,deposit,depositDeduction,depositRefund,depositTransfer,depositTransferToAgent,depositTransferToLandlord,depositTransferToScheme,estateServiceCharge,estateWorksOrder,estateUnitWorksOrder,externalCredit,externalAgentFee,freeholderPayment,float,groundRent,goodwillPayment,holdingDeposit,introducingTenantFee,landlordAdminFee,landlordTax,landlordPayment,landlordToSupplierPayment,landlordWorksOrder,leaseholderAdminFee,leaseholderPayment,leaseholderRepayment,leaseholderWorksOrder,lettingFee,managementFee,paymentSurcharge,receipt,rent,rentGuarantee,recoveryPayment,reserveFund,tenantAdminFee,tenantPayment,tenantToLandlordPayment,tenantToSupplierPayment,trustAccountingInvoice,tenantWorksOrder,vacantManagementFee,vendorAdminFee,vendorCommission,vendorPayment,vendorToSupplierPayment,worksOrderPayment)
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The transaction type (bankersDraft,bankTransfer,cash,cheque,creditCard,debitCard,directDebit,housingBenefit,paymentRequest,standingOrder)
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The transaction description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string|null $status The status of the transaction (awaitingAuthorisation/awaitingPosting/posted/rejected)
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets ledger
     *
     * @return string|null
     */
    public function getLedger()
    {
        return $this->container['ledger'];
    }

    /**
     * Sets ledger
     *
     * @param string|null $ledger The ledger the transaction is recorded in
     *
     * @return self
     */
    public function setLedger($ledger)
    {
        $this->container['ledger'] = $ledger;

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
     * @param double|null $netAmount The transaction net amount
     *
     * @return self
     */
    public function setNetAmount($netAmount)
    {
        $this->container['netAmount'] = $netAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return double|null
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param double|null $taxAmount The transaction tax amount
     *
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets grossAmount
     *
     * @return double|null
     */
    public function getGrossAmount()
    {
        return $this->container['grossAmount'];
    }

    /**
     * Sets grossAmount
     *
     * @param double|null $grossAmount The transaction gross amount
     *
     * @return self
     */
    public function setGrossAmount($grossAmount)
    {
        $this->container['grossAmount'] = $grossAmount;

        return $this;
    }

    /**
     * Gets outstanding
     *
     * @return double|null
     */
    public function getOutstanding()
    {
        return $this->container['outstanding'];
    }

    /**
     * Sets outstanding
     *
     * @param double|null $outstanding The amount outstanding that remains to be paid
     *
     * @return self
     */
    public function setOutstanding($outstanding)
    {
        $this->container['outstanding'] = $outstanding;

        return $this;
    }

    /**
     * Gets companyId
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['companyId'];
    }

    /**
     * Sets companyId
     *
     * @param string|null $companyId The unique identifier of the company the transaction is associated with, where applicable
     *
     * @return self
     */
    public function setCompanyId($companyId)
    {
        $this->container['companyId'] = $companyId;

        return $this;
    }

    /**
     * Gets landlordId
     *
     * @return string|null
     */
    public function getLandlordId()
    {
        return $this->container['landlordId'];
    }

    /**
     * Sets landlordId
     *
     * @param string|null $landlordId The unique identifier of the landlord the transaction is associated with, where applicable
     *
     * @return self
     */
    public function setLandlordId($landlordId)
    {
        $this->container['landlordId'] = $landlordId;

        return $this;
    }

    /**
     * Gets propertyId
     *
     * @return string|null
     */
    public function getPropertyId()
    {
        return $this->container['propertyId'];
    }

    /**
     * Sets propertyId
     *
     * @param string|null $propertyId The unique identifier of the property the transaction is associated with, where applicable
     *
     * @return self
     */
    public function setPropertyId($propertyId)
    {
        $this->container['propertyId'] = $propertyId;

        return $this;
    }

    /**
     * Gets tenancyId
     *
     * @return string|null
     */
    public function getTenancyId()
    {
        return $this->container['tenancyId'];
    }

    /**
     * Sets tenancyId
     *
     * @param string|null $tenancyId The unique identifier of the tenancy the transaction is associated with, where applicable
     *
     * @return self
     */
    public function setTenancyId($tenancyId)
    {
        $this->container['tenancyId'] = $tenancyId;

        return $this;
    }

    /**
     * Gets eTag
     *
     * @return string|null
     */
    public function getETag()
    {
        return $this->container['eTag'];
    }

    /**
     * Sets eTag
     *
     * @param string|null $eTag The ETag for the current version of the transaction. Used for managing update concurrency
     *
     * @return self
     */
    public function setETag($eTag)
    {
        $this->container['eTag'] = $eTag;

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


