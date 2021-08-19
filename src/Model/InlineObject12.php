<?php
/**
 * InlineObject12
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
 * InlineObject12 Class Doc Comment
 *
 * @category Class
 * @description Request body for updating sales progression information on an existing offer
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject12 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_12';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendorSolicitorId' => 'string',
        'buyerSolicitorId' => 'string',
        'fixturesAndFittingsCompleted' => '\DateTime',
        'deedsRequested' => '\DateTime',
        'deedsReceived' => '\DateTime',
        'enquiriesSent' => '\DateTime',
        'enquiriesAnswered' => '\DateTime',
        'searchesPaid' => '\DateTime',
        'searchesApplied' => '\DateTime',
        'searchesReceived' => '\DateTime',
        'contractSent' => '\DateTime',
        'contractReceived' => '\DateTime',
        'contractApproved' => '\DateTime',
        'contractVendorSigned' => '\DateTime',
        'contractBuyerSigned' => '\DateTime',
        'mortgageRequired' => 'string',
        'mortgageLoanPercentage' => 'int',
        'mortgageSubmitted' => '\DateTime',
        'mortgageOfferReceived' => '\DateTime',
        'mortgageLenderId' => 'string',
        'mortgageBrokerId' => 'string',
        'mortgageSurveyDate' => '\DateTime',
        'mortgageSurveyorId' => 'string',
        'additionalSurveyRequired' => 'string',
        'additionalSurveyDate' => '\DateTime',
        'additionalSurveyorId' => 'string',
        'exchangedVendor' => '\DateTime',
        'exchangedBuyer' => '\DateTime',
        'completion' => '\DateTime',
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
        'vendorSolicitorId' => null,
        'buyerSolicitorId' => null,
        'fixturesAndFittingsCompleted' => 'date',
        'deedsRequested' => 'date',
        'deedsReceived' => 'date',
        'enquiriesSent' => 'date',
        'enquiriesAnswered' => 'date',
        'searchesPaid' => 'date',
        'searchesApplied' => 'date',
        'searchesReceived' => 'date',
        'contractSent' => 'date',
        'contractReceived' => 'date',
        'contractApproved' => 'date',
        'contractVendorSigned' => 'date',
        'contractBuyerSigned' => 'date',
        'mortgageRequired' => null,
        'mortgageLoanPercentage' => 'int32',
        'mortgageSubmitted' => 'date',
        'mortgageOfferReceived' => 'date',
        'mortgageLenderId' => null,
        'mortgageBrokerId' => null,
        'mortgageSurveyDate' => 'date-time',
        'mortgageSurveyorId' => null,
        'additionalSurveyRequired' => null,
        'additionalSurveyDate' => 'date',
        'additionalSurveyorId' => null,
        'exchangedVendor' => 'date',
        'exchangedBuyer' => 'date',
        'completion' => 'date',
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
        'vendorSolicitorId' => 'vendorSolicitorId',
        'buyerSolicitorId' => 'buyerSolicitorId',
        'fixturesAndFittingsCompleted' => 'fixturesAndFittingsCompleted',
        'deedsRequested' => 'deedsRequested',
        'deedsReceived' => 'deedsReceived',
        'enquiriesSent' => 'enquiriesSent',
        'enquiriesAnswered' => 'enquiriesAnswered',
        'searchesPaid' => 'searchesPaid',
        'searchesApplied' => 'searchesApplied',
        'searchesReceived' => 'searchesReceived',
        'contractSent' => 'contractSent',
        'contractReceived' => 'contractReceived',
        'contractApproved' => 'contractApproved',
        'contractVendorSigned' => 'contractVendorSigned',
        'contractBuyerSigned' => 'contractBuyerSigned',
        'mortgageRequired' => 'mortgageRequired',
        'mortgageLoanPercentage' => 'mortgageLoanPercentage',
        'mortgageSubmitted' => 'mortgageSubmitted',
        'mortgageOfferReceived' => 'mortgageOfferReceived',
        'mortgageLenderId' => 'mortgageLenderId',
        'mortgageBrokerId' => 'mortgageBrokerId',
        'mortgageSurveyDate' => 'mortgageSurveyDate',
        'mortgageSurveyorId' => 'mortgageSurveyorId',
        'additionalSurveyRequired' => 'additionalSurveyRequired',
        'additionalSurveyDate' => 'additionalSurveyDate',
        'additionalSurveyorId' => 'additionalSurveyorId',
        'exchangedVendor' => 'exchangedVendor',
        'exchangedBuyer' => 'exchangedBuyer',
        'completion' => 'completion',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorSolicitorId' => 'setVendorSolicitorId',
        'buyerSolicitorId' => 'setBuyerSolicitorId',
        'fixturesAndFittingsCompleted' => 'setFixturesAndFittingsCompleted',
        'deedsRequested' => 'setDeedsRequested',
        'deedsReceived' => 'setDeedsReceived',
        'enquiriesSent' => 'setEnquiriesSent',
        'enquiriesAnswered' => 'setEnquiriesAnswered',
        'searchesPaid' => 'setSearchesPaid',
        'searchesApplied' => 'setSearchesApplied',
        'searchesReceived' => 'setSearchesReceived',
        'contractSent' => 'setContractSent',
        'contractReceived' => 'setContractReceived',
        'contractApproved' => 'setContractApproved',
        'contractVendorSigned' => 'setContractVendorSigned',
        'contractBuyerSigned' => 'setContractBuyerSigned',
        'mortgageRequired' => 'setMortgageRequired',
        'mortgageLoanPercentage' => 'setMortgageLoanPercentage',
        'mortgageSubmitted' => 'setMortgageSubmitted',
        'mortgageOfferReceived' => 'setMortgageOfferReceived',
        'mortgageLenderId' => 'setMortgageLenderId',
        'mortgageBrokerId' => 'setMortgageBrokerId',
        'mortgageSurveyDate' => 'setMortgageSurveyDate',
        'mortgageSurveyorId' => 'setMortgageSurveyorId',
        'additionalSurveyRequired' => 'setAdditionalSurveyRequired',
        'additionalSurveyDate' => 'setAdditionalSurveyDate',
        'additionalSurveyorId' => 'setAdditionalSurveyorId',
        'exchangedVendor' => 'setExchangedVendor',
        'exchangedBuyer' => 'setExchangedBuyer',
        'completion' => 'setCompletion',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorSolicitorId' => 'getVendorSolicitorId',
        'buyerSolicitorId' => 'getBuyerSolicitorId',
        'fixturesAndFittingsCompleted' => 'getFixturesAndFittingsCompleted',
        'deedsRequested' => 'getDeedsRequested',
        'deedsReceived' => 'getDeedsReceived',
        'enquiriesSent' => 'getEnquiriesSent',
        'enquiriesAnswered' => 'getEnquiriesAnswered',
        'searchesPaid' => 'getSearchesPaid',
        'searchesApplied' => 'getSearchesApplied',
        'searchesReceived' => 'getSearchesReceived',
        'contractSent' => 'getContractSent',
        'contractReceived' => 'getContractReceived',
        'contractApproved' => 'getContractApproved',
        'contractVendorSigned' => 'getContractVendorSigned',
        'contractBuyerSigned' => 'getContractBuyerSigned',
        'mortgageRequired' => 'getMortgageRequired',
        'mortgageLoanPercentage' => 'getMortgageLoanPercentage',
        'mortgageSubmitted' => 'getMortgageSubmitted',
        'mortgageOfferReceived' => 'getMortgageOfferReceived',
        'mortgageLenderId' => 'getMortgageLenderId',
        'mortgageBrokerId' => 'getMortgageBrokerId',
        'mortgageSurveyDate' => 'getMortgageSurveyDate',
        'mortgageSurveyorId' => 'getMortgageSurveyorId',
        'additionalSurveyRequired' => 'getAdditionalSurveyRequired',
        'additionalSurveyDate' => 'getAdditionalSurveyDate',
        'additionalSurveyorId' => 'getAdditionalSurveyorId',
        'exchangedVendor' => 'getExchangedVendor',
        'exchangedBuyer' => 'getExchangedBuyer',
        'completion' => 'getCompletion',
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
        $this->container['vendorSolicitorId'] = $data['vendorSolicitorId'] ?? null;
        $this->container['buyerSolicitorId'] = $data['buyerSolicitorId'] ?? null;
        $this->container['fixturesAndFittingsCompleted'] = $data['fixturesAndFittingsCompleted'] ?? null;
        $this->container['deedsRequested'] = $data['deedsRequested'] ?? null;
        $this->container['deedsReceived'] = $data['deedsReceived'] ?? null;
        $this->container['enquiriesSent'] = $data['enquiriesSent'] ?? null;
        $this->container['enquiriesAnswered'] = $data['enquiriesAnswered'] ?? null;
        $this->container['searchesPaid'] = $data['searchesPaid'] ?? null;
        $this->container['searchesApplied'] = $data['searchesApplied'] ?? null;
        $this->container['searchesReceived'] = $data['searchesReceived'] ?? null;
        $this->container['contractSent'] = $data['contractSent'] ?? null;
        $this->container['contractReceived'] = $data['contractReceived'] ?? null;
        $this->container['contractApproved'] = $data['contractApproved'] ?? null;
        $this->container['contractVendorSigned'] = $data['contractVendorSigned'] ?? null;
        $this->container['contractBuyerSigned'] = $data['contractBuyerSigned'] ?? null;
        $this->container['mortgageRequired'] = $data['mortgageRequired'] ?? null;
        $this->container['mortgageLoanPercentage'] = $data['mortgageLoanPercentage'] ?? null;
        $this->container['mortgageSubmitted'] = $data['mortgageSubmitted'] ?? null;
        $this->container['mortgageOfferReceived'] = $data['mortgageOfferReceived'] ?? null;
        $this->container['mortgageLenderId'] = $data['mortgageLenderId'] ?? null;
        $this->container['mortgageBrokerId'] = $data['mortgageBrokerId'] ?? null;
        $this->container['mortgageSurveyDate'] = $data['mortgageSurveyDate'] ?? null;
        $this->container['mortgageSurveyorId'] = $data['mortgageSurveyorId'] ?? null;
        $this->container['additionalSurveyRequired'] = $data['additionalSurveyRequired'] ?? null;
        $this->container['additionalSurveyDate'] = $data['additionalSurveyDate'] ?? null;
        $this->container['additionalSurveyorId'] = $data['additionalSurveyorId'] ?? null;
        $this->container['exchangedVendor'] = $data['exchangedVendor'] ?? null;
        $this->container['exchangedBuyer'] = $data['exchangedBuyer'] ?? null;
        $this->container['completion'] = $data['completion'] ?? null;
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
     * Gets vendorSolicitorId
     *
     * @return string|null
     */
    public function getVendorSolicitorId()
    {
        return $this->container['vendorSolicitorId'];
    }

    /**
     * Sets vendorSolicitorId
     *
     * @param string|null $vendorSolicitorId The unique identifier of the vendor that this offer is associated to. Empty if the offer is external and relates to a property not instructed to the agent
     *
     * @return self
     */
    public function setVendorSolicitorId($vendorSolicitorId)
    {
        $this->container['vendorSolicitorId'] = $vendorSolicitorId;

        return $this;
    }

    /**
     * Gets buyerSolicitorId
     *
     * @return string|null
     */
    public function getBuyerSolicitorId()
    {
        return $this->container['buyerSolicitorId'];
    }

    /**
     * Sets buyerSolicitorId
     *
     * @param string|null $buyerSolicitorId The unique identifier of the solicitor / conveyancer that the vendor has instructed
     *
     * @return self
     */
    public function setBuyerSolicitorId($buyerSolicitorId)
    {
        $this->container['buyerSolicitorId'] = $buyerSolicitorId;

        return $this;
    }

    /**
     * Gets fixturesAndFittingsCompleted
     *
     * @return \DateTime|null
     */
    public function getFixturesAndFittingsCompleted()
    {
        return $this->container['fixturesAndFittingsCompleted'];
    }

    /**
     * Sets fixturesAndFittingsCompleted
     *
     * @param \DateTime|null $fixturesAndFittingsCompleted The date when the fixtures and fittings form has been completed
     *
     * @return self
     */
    public function setFixturesAndFittingsCompleted($fixturesAndFittingsCompleted)
    {
        $this->container['fixturesAndFittingsCompleted'] = $fixturesAndFittingsCompleted;

        return $this;
    }

    /**
     * Gets deedsRequested
     *
     * @return \DateTime|null
     */
    public function getDeedsRequested()
    {
        return $this->container['deedsRequested'];
    }

    /**
     * Sets deedsRequested
     *
     * @param \DateTime|null $deedsRequested The date when the title deeds were requested from land registry
     *
     * @return self
     */
    public function setDeedsRequested($deedsRequested)
    {
        $this->container['deedsRequested'] = $deedsRequested;

        return $this;
    }

    /**
     * Gets deedsReceived
     *
     * @return \DateTime|null
     */
    public function getDeedsReceived()
    {
        return $this->container['deedsReceived'];
    }

    /**
     * Sets deedsReceived
     *
     * @param \DateTime|null $deedsReceived The date when the title deeds were received from land registry
     *
     * @return self
     */
    public function setDeedsReceived($deedsReceived)
    {
        $this->container['deedsReceived'] = $deedsReceived;

        return $this;
    }

    /**
     * Gets enquiriesSent
     *
     * @return \DateTime|null
     */
    public function getEnquiriesSent()
    {
        return $this->container['enquiriesSent'];
    }

    /**
     * Sets enquiriesSent
     *
     * @param \DateTime|null $enquiriesSent The date when the legal enquiries raised by the buyers solicitor were sent
     *
     * @return self
     */
    public function setEnquiriesSent($enquiriesSent)
    {
        $this->container['enquiriesSent'] = $enquiriesSent;

        return $this;
    }

    /**
     * Gets enquiriesAnswered
     *
     * @return \DateTime|null
     */
    public function getEnquiriesAnswered()
    {
        return $this->container['enquiriesAnswered'];
    }

    /**
     * Sets enquiriesAnswered
     *
     * @param \DateTime|null $enquiriesAnswered The date when the legal enquiries raised by the buyers solicitor were answered
     *
     * @return self
     */
    public function setEnquiriesAnswered($enquiriesAnswered)
    {
        $this->container['enquiriesAnswered'] = $enquiriesAnswered;

        return $this;
    }

    /**
     * Gets searchesPaid
     *
     * @return \DateTime|null
     */
    public function getSearchesPaid()
    {
        return $this->container['searchesPaid'];
    }

    /**
     * Sets searchesPaid
     *
     * @param \DateTime|null $searchesPaid The date when the buyer paid for conveyancing searches
     *
     * @return self
     */
    public function setSearchesPaid($searchesPaid)
    {
        $this->container['searchesPaid'] = $searchesPaid;

        return $this;
    }

    /**
     * Gets searchesApplied
     *
     * @return \DateTime|null
     */
    public function getSearchesApplied()
    {
        return $this->container['searchesApplied'];
    }

    /**
     * Sets searchesApplied
     *
     * @param \DateTime|null $searchesApplied The date when conveyancing searches were applied for
     *
     * @return self
     */
    public function setSearchesApplied($searchesApplied)
    {
        $this->container['searchesApplied'] = $searchesApplied;

        return $this;
    }

    /**
     * Gets searchesReceived
     *
     * @return \DateTime|null
     */
    public function getSearchesReceived()
    {
        return $this->container['searchesReceived'];
    }

    /**
     * Sets searchesReceived
     *
     * @param \DateTime|null $searchesReceived The date when conveyancing searches were received
     *
     * @return self
     */
    public function setSearchesReceived($searchesReceived)
    {
        $this->container['searchesReceived'] = $searchesReceived;

        return $this;
    }

    /**
     * Gets contractSent
     *
     * @return \DateTime|null
     */
    public function getContractSent()
    {
        return $this->container['contractSent'];
    }

    /**
     * Sets contractSent
     *
     * @param \DateTime|null $contractSent The date when the draft contract was sent
     *
     * @return self
     */
    public function setContractSent($contractSent)
    {
        $this->container['contractSent'] = $contractSent;

        return $this;
    }

    /**
     * Gets contractReceived
     *
     * @return \DateTime|null
     */
    public function getContractReceived()
    {
        return $this->container['contractReceived'];
    }

    /**
     * Sets contractReceived
     *
     * @param \DateTime|null $contractReceived The date when the draft contract was received
     *
     * @return self
     */
    public function setContractReceived($contractReceived)
    {
        $this->container['contractReceived'] = $contractReceived;

        return $this;
    }

    /**
     * Gets contractApproved
     *
     * @return \DateTime|null
     */
    public function getContractApproved()
    {
        return $this->container['contractApproved'];
    }

    /**
     * Sets contractApproved
     *
     * @param \DateTime|null $contractApproved The date when the contract was approved
     *
     * @return self
     */
    public function setContractApproved($contractApproved)
    {
        $this->container['contractApproved'] = $contractApproved;

        return $this;
    }

    /**
     * Gets contractVendorSigned
     *
     * @return \DateTime|null
     */
    public function getContractVendorSigned()
    {
        return $this->container['contractVendorSigned'];
    }

    /**
     * Sets contractVendorSigned
     *
     * @param \DateTime|null $contractVendorSigned The date when the vendor signed the approved contract
     *
     * @return self
     */
    public function setContractVendorSigned($contractVendorSigned)
    {
        $this->container['contractVendorSigned'] = $contractVendorSigned;

        return $this;
    }

    /**
     * Gets contractBuyerSigned
     *
     * @return \DateTime|null
     */
    public function getContractBuyerSigned()
    {
        return $this->container['contractBuyerSigned'];
    }

    /**
     * Sets contractBuyerSigned
     *
     * @param \DateTime|null $contractBuyerSigned The date when the buyer signed the approved contract
     *
     * @return self
     */
    public function setContractBuyerSigned($contractBuyerSigned)
    {
        $this->container['contractBuyerSigned'] = $contractBuyerSigned;

        return $this;
    }

    /**
     * Gets mortgageRequired
     *
     * @return string|null
     */
    public function getMortgageRequired()
    {
        return $this->container['mortgageRequired'];
    }

    /**
     * Sets mortgageRequired
     *
     * @param string|null $mortgageRequired Indication of whether the buyer will require a mortgage to fund the purchase (yes/no/unknown)
     *
     * @return self
     */
    public function setMortgageRequired($mortgageRequired)
    {
        $this->container['mortgageRequired'] = $mortgageRequired;

        return $this;
    }

    /**
     * Gets mortgageLoanPercentage
     *
     * @return int|null
     */
    public function getMortgageLoanPercentage()
    {
        return $this->container['mortgageLoanPercentage'];
    }

    /**
     * Sets mortgageLoanPercentage
     *
     * @param int|null $mortgageLoanPercentage The loan to value percentage of the mortgage required
     *
     * @return self
     */
    public function setMortgageLoanPercentage($mortgageLoanPercentage)
    {
        $this->container['mortgageLoanPercentage'] = $mortgageLoanPercentage;

        return $this;
    }

    /**
     * Gets mortgageSubmitted
     *
     * @return \DateTime|null
     */
    public function getMortgageSubmitted()
    {
        return $this->container['mortgageSubmitted'];
    }

    /**
     * Sets mortgageSubmitted
     *
     * @param \DateTime|null $mortgageSubmitted The date when the mortgage application was submitted
     *
     * @return self
     */
    public function setMortgageSubmitted($mortgageSubmitted)
    {
        $this->container['mortgageSubmitted'] = $mortgageSubmitted;

        return $this;
    }

    /**
     * Gets mortgageOfferReceived
     *
     * @return \DateTime|null
     */
    public function getMortgageOfferReceived()
    {
        return $this->container['mortgageOfferReceived'];
    }

    /**
     * Sets mortgageOfferReceived
     *
     * @param \DateTime|null $mortgageOfferReceived The date when the mortgage offer was received
     *
     * @return self
     */
    public function setMortgageOfferReceived($mortgageOfferReceived)
    {
        $this->container['mortgageOfferReceived'] = $mortgageOfferReceived;

        return $this;
    }

    /**
     * Gets mortgageLenderId
     *
     * @return string|null
     */
    public function getMortgageLenderId()
    {
        return $this->container['mortgageLenderId'];
    }

    /**
     * Sets mortgageLenderId
     *
     * @param string|null $mortgageLenderId The unique identifier of the company who will provide the mortgage
     *
     * @return self
     */
    public function setMortgageLenderId($mortgageLenderId)
    {
        $this->container['mortgageLenderId'] = $mortgageLenderId;

        return $this;
    }

    /**
     * Gets mortgageBrokerId
     *
     * @return string|null
     */
    public function getMortgageBrokerId()
    {
        return $this->container['mortgageBrokerId'];
    }

    /**
     * Sets mortgageBrokerId
     *
     * @param string|null $mortgageBrokerId The unique identifier of the company who brokered the mortgage
     *
     * @return self
     */
    public function setMortgageBrokerId($mortgageBrokerId)
    {
        $this->container['mortgageBrokerId'] = $mortgageBrokerId;

        return $this;
    }

    /**
     * Gets mortgageSurveyDate
     *
     * @return \DateTime|null
     */
    public function getMortgageSurveyDate()
    {
        return $this->container['mortgageSurveyDate'];
    }

    /**
     * Sets mortgageSurveyDate
     *
     * @param \DateTime|null $mortgageSurveyDate The date of the mortgage valuation/survey
     *
     * @return self
     */
    public function setMortgageSurveyDate($mortgageSurveyDate)
    {
        $this->container['mortgageSurveyDate'] = $mortgageSurveyDate;

        return $this;
    }

    /**
     * Gets mortgageSurveyorId
     *
     * @return string|null
     */
    public function getMortgageSurveyorId()
    {
        return $this->container['mortgageSurveyorId'];
    }

    /**
     * Sets mortgageSurveyorId
     *
     * @param string|null $mortgageSurveyorId The unique identifier of the company who will perform the mortgage valuation/survey
     *
     * @return self
     */
    public function setMortgageSurveyorId($mortgageSurveyorId)
    {
        $this->container['mortgageSurveyorId'] = $mortgageSurveyorId;

        return $this;
    }

    /**
     * Gets additionalSurveyRequired
     *
     * @return string|null
     */
    public function getAdditionalSurveyRequired()
    {
        return $this->container['additionalSurveyRequired'];
    }

    /**
     * Sets additionalSurveyRequired
     *
     * @param string|null $additionalSurveyRequired Indication of whether the buyer requires that an additional survey take place (yes/no/unknown)
     *
     * @return self
     */
    public function setAdditionalSurveyRequired($additionalSurveyRequired)
    {
        $this->container['additionalSurveyRequired'] = $additionalSurveyRequired;

        return $this;
    }

    /**
     * Gets additionalSurveyDate
     *
     * @return \DateTime|null
     */
    public function getAdditionalSurveyDate()
    {
        return $this->container['additionalSurveyDate'];
    }

    /**
     * Sets additionalSurveyDate
     *
     * @param \DateTime|null $additionalSurveyDate The date of the additional survey
     *
     * @return self
     */
    public function setAdditionalSurveyDate($additionalSurveyDate)
    {
        $this->container['additionalSurveyDate'] = $additionalSurveyDate;

        return $this;
    }

    /**
     * Gets additionalSurveyorId
     *
     * @return string|null
     */
    public function getAdditionalSurveyorId()
    {
        return $this->container['additionalSurveyorId'];
    }

    /**
     * Sets additionalSurveyorId
     *
     * @param string|null $additionalSurveyorId The unique identifier of the company who will perform the additional survey
     *
     * @return self
     */
    public function setAdditionalSurveyorId($additionalSurveyorId)
    {
        $this->container['additionalSurveyorId'] = $additionalSurveyorId;

        return $this;
    }

    /**
     * Gets exchangedVendor
     *
     * @return \DateTime|null
     */
    public function getExchangedVendor()
    {
        return $this->container['exchangedVendor'];
    }

    /**
     * Sets exchangedVendor
     *
     * @param \DateTime|null $exchangedVendor The date when the vendor conveyancer confirms the exchange
     *
     * @return self
     */
    public function setExchangedVendor($exchangedVendor)
    {
        $this->container['exchangedVendor'] = $exchangedVendor;

        return $this;
    }

    /**
     * Gets exchangedBuyer
     *
     * @return \DateTime|null
     */
    public function getExchangedBuyer()
    {
        return $this->container['exchangedBuyer'];
    }

    /**
     * Sets exchangedBuyer
     *
     * @param \DateTime|null $exchangedBuyer The date when the buyer conveyancer confirms the exchange
     *
     * @return self
     */
    public function setExchangedBuyer($exchangedBuyer)
    {
        $this->container['exchangedBuyer'] = $exchangedBuyer;

        return $this;
    }

    /**
     * Gets completion
     *
     * @return \DateTime|null
     */
    public function getCompletion()
    {
        return $this->container['completion'];
    }

    /**
     * Sets completion
     *
     * @param \DateTime|null $completion The date when the sale completed
     *
     * @return self
     */
    public function setCompletion($completion)
    {
        $this->container['completion'] = $completion;

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
     * @param array<string,object>|null $metadata App specific metadata to set against this conveyancing record
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

