<?php
/**
 * InlineResponse2009Embedded
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
 * InlineResponse2009Embedded Class Doc Comment
 *
 * @category Class
 * @description Representation of an individual contact
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2009Embedded implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_9__embedded';

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
        'title' => 'string',
        'forename' => 'string',
        'surname' => 'string',
        'dateOfBirth' => '\DateTime',
        'active' => 'bool',
        'marketingConsent' => 'string',
        'identityCheck' => 'string',
        'source' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Source',
        'homePhone' => 'string',
        'workPhone' => 'string',
        'mobilePhone' => 'string',
        'email' => 'string',
        'archivedOn' => '\DateTime',
        'fromArchive' => 'bool',
        'primaryAddress' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress',
        'secondaryAddress' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress',
        'workAddress' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress',
        'officeIds' => 'string[]',
        'negotiatorIds' => 'string[]',
        'communicationPreferenceLetter' => 'bool',
        'communicationPreferenceEmail' => 'bool',
        'communicationPreferencePhone' => 'bool',
        'communicationPreferenceSMS' => 'bool',
        'metadata' => 'array<string,object>',
        'eTag' => 'string',
        'relationships' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Relationships[]'
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
        'title' => null,
        'forename' => null,
        'surname' => null,
        'dateOfBirth' => 'date',
        'active' => null,
        'marketingConsent' => null,
        'identityCheck' => null,
        'source' => null,
        'homePhone' => null,
        'workPhone' => null,
        'mobilePhone' => null,
        'email' => null,
        'archivedOn' => 'date-time',
        'fromArchive' => null,
        'primaryAddress' => null,
        'secondaryAddress' => null,
        'workAddress' => null,
        'officeIds' => null,
        'negotiatorIds' => null,
        'communicationPreferenceLetter' => null,
        'communicationPreferenceEmail' => null,
        'communicationPreferencePhone' => null,
        'communicationPreferenceSMS' => null,
        'metadata' => null,
        'eTag' => null,
        'relationships' => null
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
        'title' => 'title',
        'forename' => 'forename',
        'surname' => 'surname',
        'dateOfBirth' => 'dateOfBirth',
        'active' => 'active',
        'marketingConsent' => 'marketingConsent',
        'identityCheck' => 'identityCheck',
        'source' => 'source',
        'homePhone' => 'homePhone',
        'workPhone' => 'workPhone',
        'mobilePhone' => 'mobilePhone',
        'email' => 'email',
        'archivedOn' => 'archivedOn',
        'fromArchive' => 'fromArchive',
        'primaryAddress' => 'primaryAddress',
        'secondaryAddress' => 'secondaryAddress',
        'workAddress' => 'workAddress',
        'officeIds' => 'officeIds',
        'negotiatorIds' => 'negotiatorIds',
        'communicationPreferenceLetter' => 'communicationPreferenceLetter',
        'communicationPreferenceEmail' => 'communicationPreferenceEmail',
        'communicationPreferencePhone' => 'communicationPreferencePhone',
        'communicationPreferenceSMS' => 'communicationPreferenceSMS',
        'metadata' => 'metadata',
        'eTag' => '_eTag',
        'relationships' => 'relationships'
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
        'title' => 'setTitle',
        'forename' => 'setForename',
        'surname' => 'setSurname',
        'dateOfBirth' => 'setDateOfBirth',
        'active' => 'setActive',
        'marketingConsent' => 'setMarketingConsent',
        'identityCheck' => 'setIdentityCheck',
        'source' => 'setSource',
        'homePhone' => 'setHomePhone',
        'workPhone' => 'setWorkPhone',
        'mobilePhone' => 'setMobilePhone',
        'email' => 'setEmail',
        'archivedOn' => 'setArchivedOn',
        'fromArchive' => 'setFromArchive',
        'primaryAddress' => 'setPrimaryAddress',
        'secondaryAddress' => 'setSecondaryAddress',
        'workAddress' => 'setWorkAddress',
        'officeIds' => 'setOfficeIds',
        'negotiatorIds' => 'setNegotiatorIds',
        'communicationPreferenceLetter' => 'setCommunicationPreferenceLetter',
        'communicationPreferenceEmail' => 'setCommunicationPreferenceEmail',
        'communicationPreferencePhone' => 'setCommunicationPreferencePhone',
        'communicationPreferenceSMS' => 'setCommunicationPreferenceSMS',
        'metadata' => 'setMetadata',
        'eTag' => 'setETag',
        'relationships' => 'setRelationships'
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
        'title' => 'getTitle',
        'forename' => 'getForename',
        'surname' => 'getSurname',
        'dateOfBirth' => 'getDateOfBirth',
        'active' => 'getActive',
        'marketingConsent' => 'getMarketingConsent',
        'identityCheck' => 'getIdentityCheck',
        'source' => 'getSource',
        'homePhone' => 'getHomePhone',
        'workPhone' => 'getWorkPhone',
        'mobilePhone' => 'getMobilePhone',
        'email' => 'getEmail',
        'archivedOn' => 'getArchivedOn',
        'fromArchive' => 'getFromArchive',
        'primaryAddress' => 'getPrimaryAddress',
        'secondaryAddress' => 'getSecondaryAddress',
        'workAddress' => 'getWorkAddress',
        'officeIds' => 'getOfficeIds',
        'negotiatorIds' => 'getNegotiatorIds',
        'communicationPreferenceLetter' => 'getCommunicationPreferenceLetter',
        'communicationPreferenceEmail' => 'getCommunicationPreferenceEmail',
        'communicationPreferencePhone' => 'getCommunicationPreferencePhone',
        'communicationPreferenceSMS' => 'getCommunicationPreferenceSMS',
        'metadata' => 'getMetadata',
        'eTag' => 'getETag',
        'relationships' => 'getRelationships'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['forename'] = $data['forename'] ?? null;
        $this->container['surname'] = $data['surname'] ?? null;
        $this->container['dateOfBirth'] = $data['dateOfBirth'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['marketingConsent'] = $data['marketingConsent'] ?? null;
        $this->container['identityCheck'] = $data['identityCheck'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['homePhone'] = $data['homePhone'] ?? null;
        $this->container['workPhone'] = $data['workPhone'] ?? null;
        $this->container['mobilePhone'] = $data['mobilePhone'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['archivedOn'] = $data['archivedOn'] ?? null;
        $this->container['fromArchive'] = $data['fromArchive'] ?? null;
        $this->container['primaryAddress'] = $data['primaryAddress'] ?? null;
        $this->container['secondaryAddress'] = $data['secondaryAddress'] ?? null;
        $this->container['workAddress'] = $data['workAddress'] ?? null;
        $this->container['officeIds'] = $data['officeIds'] ?? null;
        $this->container['negotiatorIds'] = $data['negotiatorIds'] ?? null;
        $this->container['communicationPreferenceLetter'] = $data['communicationPreferenceLetter'] ?? null;
        $this->container['communicationPreferenceEmail'] = $data['communicationPreferenceEmail'] ?? null;
        $this->container['communicationPreferencePhone'] = $data['communicationPreferencePhone'] ?? null;
        $this->container['communicationPreferenceSMS'] = $data['communicationPreferenceSMS'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['eTag'] = $data['eTag'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
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
     * @param string|null $id The unique identifier of the contact
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
     * @param \DateTime|null $created The date and time when the contact was created
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
     * @param \DateTime|null $modified The date and time when the contact was last modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The contact's title  (eg. Mr, Mrs, Miss, Dr)
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets forename
     *
     * @return string|null
     */
    public function getForename()
    {
        return $this->container['forename'];
    }

    /**
     * Sets forename
     *
     * @param string|null $forename The contact's forename
     *
     * @return self
     */
    public function setForename($forename)
    {
        $this->container['forename'] = $forename;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname The contact's surname
     *
     * @return self
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets dateOfBirth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     *
     * @param \DateTime|null $dateOfBirth The contact's date of birth
     *
     * @return self
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active A flag determining whether or not the contact is currently active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets marketingConsent
     *
     * @return string|null
     */
    public function getMarketingConsent()
    {
        return $this->container['marketingConsent'];
    }

    /**
     * Sets marketingConsent
     *
     * @param string|null $marketingConsent The marketing consent status of the contact (grant/deny/notAsked)
     *
     * @return self
     */
    public function setMarketingConsent($marketingConsent)
    {
        $this->container['marketingConsent'] = $marketingConsent;

        return $this;
    }

    /**
     * Gets identityCheck
     *
     * @return string|null
     */
    public function getIdentityCheck()
    {
        return $this->container['identityCheck'];
    }

    /**
     * Sets identityCheck
     *
     * @param string|null $identityCheck The status of the last identity check performed against the contact (pass/fail/pending/cancelled/warnings/unchecked)
     *
     * @return self
     */
    public function setIdentityCheck($identityCheck)
    {
        $this->container['identityCheck'] = $identityCheck;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Source|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Source|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets homePhone
     *
     * @return string|null
     */
    public function getHomePhone()
    {
        return $this->container['homePhone'];
    }

    /**
     * Sets homePhone
     *
     * @param string|null $homePhone The home phone number of the contact
     *
     * @return self
     */
    public function setHomePhone($homePhone)
    {
        $this->container['homePhone'] = $homePhone;

        return $this;
    }

    /**
     * Gets workPhone
     *
     * @return string|null
     */
    public function getWorkPhone()
    {
        return $this->container['workPhone'];
    }

    /**
     * Sets workPhone
     *
     * @param string|null $workPhone The work phone number of the contact
     *
     * @return self
     */
    public function setWorkPhone($workPhone)
    {
        $this->container['workPhone'] = $workPhone;

        return $this;
    }

    /**
     * Gets mobilePhone
     *
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobilePhone'];
    }

    /**
     * Sets mobilePhone
     *
     * @param string|null $mobilePhone The mobile phone number of the contact
     *
     * @return self
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->container['mobilePhone'] = $mobilePhone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address of the contact
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets archivedOn
     *
     * @return \DateTime|null
     */
    public function getArchivedOn()
    {
        return $this->container['archivedOn'];
    }

    /**
     * Sets archivedOn
     *
     * @param \DateTime|null $archivedOn The date and time the contact was archived
     *
     * @return self
     */
    public function setArchivedOn($archivedOn)
    {
        $this->container['archivedOn'] = $archivedOn;

        return $this;
    }

    /**
     * Gets fromArchive
     *
     * @return bool|null
     */
    public function getFromArchive()
    {
        return $this->container['fromArchive'];
    }

    /**
     * Sets fromArchive
     *
     * @param bool|null $fromArchive A flag determining whether or not the contact is archived
     *
     * @return self
     */
    public function setFromArchive($fromArchive)
    {
        $this->container['fromArchive'] = $fromArchive;

        return $this;
    }

    /**
     * Gets primaryAddress
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress|null
     */
    public function getPrimaryAddress()
    {
        return $this->container['primaryAddress'];
    }

    /**
     * Sets primaryAddress
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress|null $primaryAddress primaryAddress
     *
     * @return self
     */
    public function setPrimaryAddress($primaryAddress)
    {
        $this->container['primaryAddress'] = $primaryAddress;

        return $this;
    }

    /**
     * Gets secondaryAddress
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress|null
     */
    public function getSecondaryAddress()
    {
        return $this->container['secondaryAddress'];
    }

    /**
     * Sets secondaryAddress
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress|null $secondaryAddress secondaryAddress
     *
     * @return self
     */
    public function setSecondaryAddress($secondaryAddress)
    {
        $this->container['secondaryAddress'] = $secondaryAddress;

        return $this;
    }

    /**
     * Gets workAddress
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress|null
     */
    public function getWorkAddress()
    {
        return $this->container['workAddress'];
    }

    /**
     * Sets workAddress
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress|null $workAddress workAddress
     *
     * @return self
     */
    public function setWorkAddress($workAddress)
    {
        $this->container['workAddress'] = $workAddress;

        return $this;
    }

    /**
     * Gets officeIds
     *
     * @return string[]|null
     */
    public function getOfficeIds()
    {
        return $this->container['officeIds'];
    }

    /**
     * Sets officeIds
     *
     * @param string[]|null $officeIds A collection of unique identifiers of offices attached to the contact. The first item in the collection is considered the primary office
     *
     * @return self
     */
    public function setOfficeIds($officeIds)
    {
        $this->container['officeIds'] = $officeIds;

        return $this;
    }

    /**
     * Gets negotiatorIds
     *
     * @return string[]|null
     */
    public function getNegotiatorIds()
    {
        return $this->container['negotiatorIds'];
    }

    /**
     * Sets negotiatorIds
     *
     * @param string[]|null $negotiatorIds A collection of unique identifiers of negotiators attached to the contact. The first item in the collection is considered the primary negotiator
     *
     * @return self
     */
    public function setNegotiatorIds($negotiatorIds)
    {
        $this->container['negotiatorIds'] = $negotiatorIds;

        return $this;
    }

    /**
     * Gets communicationPreferenceLetter
     *
     * @return bool|null
     */
    public function getCommunicationPreferenceLetter()
    {
        return $this->container['communicationPreferenceLetter'];
    }

    /**
     * Sets communicationPreferenceLetter
     *
     * @param bool|null $communicationPreferenceLetter A flag determining whether or not the contact is happy to receive communications by letter
     *
     * @return self
     */
    public function setCommunicationPreferenceLetter($communicationPreferenceLetter)
    {
        $this->container['communicationPreferenceLetter'] = $communicationPreferenceLetter;

        return $this;
    }

    /**
     * Gets communicationPreferenceEmail
     *
     * @return bool|null
     */
    public function getCommunicationPreferenceEmail()
    {
        return $this->container['communicationPreferenceEmail'];
    }

    /**
     * Sets communicationPreferenceEmail
     *
     * @param bool|null $communicationPreferenceEmail A flag determining whether or not the contact is happy to receive communications by email
     *
     * @return self
     */
    public function setCommunicationPreferenceEmail($communicationPreferenceEmail)
    {
        $this->container['communicationPreferenceEmail'] = $communicationPreferenceEmail;

        return $this;
    }

    /**
     * Gets communicationPreferencePhone
     *
     * @return bool|null
     */
    public function getCommunicationPreferencePhone()
    {
        return $this->container['communicationPreferencePhone'];
    }

    /**
     * Sets communicationPreferencePhone
     *
     * @param bool|null $communicationPreferencePhone A flag determining whether or not the contact is happy to receive communications by phone
     *
     * @return self
     */
    public function setCommunicationPreferencePhone($communicationPreferencePhone)
    {
        $this->container['communicationPreferencePhone'] = $communicationPreferencePhone;

        return $this;
    }

    /**
     * Gets communicationPreferenceSMS
     *
     * @return bool|null
     */
    public function getCommunicationPreferenceSMS()
    {
        return $this->container['communicationPreferenceSMS'];
    }

    /**
     * Sets communicationPreferenceSMS
     *
     * @param bool|null $communicationPreferenceSMS A flag determining whether or not the contact is happy to receive communications by SMS
     *
     * @return self
     */
    public function setCommunicationPreferenceSMS($communicationPreferenceSMS)
    {
        $this->container['communicationPreferenceSMS'] = $communicationPreferenceSMS;

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
     * @param array<string,object>|null $metadata App specific metadata that has been set against the contact
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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
     * @param string|null $eTag The ETag for the current version of the contact. Used for managing update concurrency
     *
     * @return self
     */
    public function setETag($eTag)
    {
        $this->container['eTag'] = $eTag;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Relationships[]|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Relationships[]|null $relationships A list of relationships belonging to the contact. This is later removed from the response
     *
     * @return self
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

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


