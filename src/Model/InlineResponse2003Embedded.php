<?php
/**
 * InlineResponse2003Embedded
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
 * InlineResponse2003Embedded Class Doc Comment
 *
 * @category Class
 * @description Representation of a calendar appointment
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2003Embedded implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_3__embedded';

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
        'start' => '\DateTime',
        'end' => '\DateTime',
        'typeId' => 'string',
        'description' => 'string',
        'recurring' => 'bool',
        'recurrence' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Recurrence',
        'cancelled' => 'bool',
        'followUp' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003FollowUp',
        'propertyId' => 'string',
        'organiserId' => 'string',
        'negotiatorIds' => 'string[]',
        'officeIds' => 'string[]',
        'attendee' => '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Attendee',
        'accompanied' => 'bool',
        'virtual' => 'bool',
        'negotiatorConfirmed' => 'bool',
        'attendeeConfirmed' => 'bool',
        'propertyConfirmed' => 'bool',
        'fromArchive' => 'bool',
        'metadata' => 'array<string,object>',
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
        'start' => 'date-time',
        'end' => 'date-time',
        'typeId' => null,
        'description' => null,
        'recurring' => null,
        'recurrence' => null,
        'cancelled' => null,
        'followUp' => null,
        'propertyId' => null,
        'organiserId' => null,
        'negotiatorIds' => null,
        'officeIds' => null,
        'attendee' => null,
        'accompanied' => null,
        'virtual' => null,
        'negotiatorConfirmed' => null,
        'attendeeConfirmed' => null,
        'propertyConfirmed' => null,
        'fromArchive' => null,
        'metadata' => null,
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
        'start' => 'start',
        'end' => 'end',
        'typeId' => 'typeId',
        'description' => 'description',
        'recurring' => 'recurring',
        'recurrence' => 'recurrence',
        'cancelled' => 'cancelled',
        'followUp' => 'followUp',
        'propertyId' => 'propertyId',
        'organiserId' => 'organiserId',
        'negotiatorIds' => 'negotiatorIds',
        'officeIds' => 'officeIds',
        'attendee' => 'attendee',
        'accompanied' => 'accompanied',
        'virtual' => 'virtual',
        'negotiatorConfirmed' => 'negotiatorConfirmed',
        'attendeeConfirmed' => 'attendeeConfirmed',
        'propertyConfirmed' => 'propertyConfirmed',
        'fromArchive' => 'fromArchive',
        'metadata' => 'metadata',
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
        'start' => 'setStart',
        'end' => 'setEnd',
        'typeId' => 'setTypeId',
        'description' => 'setDescription',
        'recurring' => 'setRecurring',
        'recurrence' => 'setRecurrence',
        'cancelled' => 'setCancelled',
        'followUp' => 'setFollowUp',
        'propertyId' => 'setPropertyId',
        'organiserId' => 'setOrganiserId',
        'negotiatorIds' => 'setNegotiatorIds',
        'officeIds' => 'setOfficeIds',
        'attendee' => 'setAttendee',
        'accompanied' => 'setAccompanied',
        'virtual' => 'setVirtual',
        'negotiatorConfirmed' => 'setNegotiatorConfirmed',
        'attendeeConfirmed' => 'setAttendeeConfirmed',
        'propertyConfirmed' => 'setPropertyConfirmed',
        'fromArchive' => 'setFromArchive',
        'metadata' => 'setMetadata',
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
        'start' => 'getStart',
        'end' => 'getEnd',
        'typeId' => 'getTypeId',
        'description' => 'getDescription',
        'recurring' => 'getRecurring',
        'recurrence' => 'getRecurrence',
        'cancelled' => 'getCancelled',
        'followUp' => 'getFollowUp',
        'propertyId' => 'getPropertyId',
        'organiserId' => 'getOrganiserId',
        'negotiatorIds' => 'getNegotiatorIds',
        'officeIds' => 'getOfficeIds',
        'attendee' => 'getAttendee',
        'accompanied' => 'getAccompanied',
        'virtual' => 'getVirtual',
        'negotiatorConfirmed' => 'getNegotiatorConfirmed',
        'attendeeConfirmed' => 'getAttendeeConfirmed',
        'propertyConfirmed' => 'getPropertyConfirmed',
        'fromArchive' => 'getFromArchive',
        'metadata' => 'getMetadata',
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
        $this->container['start'] = $data['start'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['typeId'] = $data['typeId'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['recurring'] = $data['recurring'] ?? null;
        $this->container['recurrence'] = $data['recurrence'] ?? null;
        $this->container['cancelled'] = $data['cancelled'] ?? null;
        $this->container['followUp'] = $data['followUp'] ?? null;
        $this->container['propertyId'] = $data['propertyId'] ?? null;
        $this->container['organiserId'] = $data['organiserId'] ?? null;
        $this->container['negotiatorIds'] = $data['negotiatorIds'] ?? null;
        $this->container['officeIds'] = $data['officeIds'] ?? null;
        $this->container['attendee'] = $data['attendee'] ?? null;
        $this->container['accompanied'] = $data['accompanied'] ?? null;
        $this->container['virtual'] = $data['virtual'] ?? null;
        $this->container['negotiatorConfirmed'] = $data['negotiatorConfirmed'] ?? null;
        $this->container['attendeeConfirmed'] = $data['attendeeConfirmed'] ?? null;
        $this->container['propertyConfirmed'] = $data['propertyConfirmed'] ?? null;
        $this->container['fromArchive'] = $data['fromArchive'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
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
     * @param string|null $id The unique identifier of the appointment
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
     * @param \DateTime|null $created The date and time when the appointment was created
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
     * @param \DateTime|null $modified The date and time when the appointment was last modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime|null $start The date and time when the appointment will start
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime|null $end The date and time when the appointment will end
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets typeId
     *
     * @return string|null
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     *
     * @param string|null $typeId The unique identifier of the appointment type
     *
     * @return self
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

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
     * @param string|null $description A free text description about the appointment
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets recurring
     *
     * @return bool|null
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     *
     * @param bool|null $recurring A flag denoting whether or not the appointment recurs
     *
     * @return self
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Recurrence|null
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Recurrence|null $recurrence recurrence
     *
     * @return self
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets cancelled
     *
     * @return bool|null
     */
    public function getCancelled()
    {
        return $this->container['cancelled'];
    }

    /**
     * Sets cancelled
     *
     * @param bool|null $cancelled A flag denoting whether or not the appointment has been cancelled
     *
     * @return self
     */
    public function setCancelled($cancelled)
    {
        $this->container['cancelled'] = $cancelled;

        return $this;
    }

    /**
     * Gets followUp
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003FollowUp|null
     */
    public function getFollowUp()
    {
        return $this->container['followUp'];
    }

    /**
     * Sets followUp
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003FollowUp|null $followUp followUp
     *
     * @return self
     */
    public function setFollowUp($followUp)
    {
        $this->container['followUp'] = $followUp;

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
     * @param string|null $propertyId The unique identifier of the property related to the appointment
     *
     * @return self
     */
    public function setPropertyId($propertyId)
    {
        $this->container['propertyId'] = $propertyId;

        return $this;
    }

    /**
     * Gets organiserId
     *
     * @return string|null
     */
    public function getOrganiserId()
    {
        return $this->container['organiserId'];
    }

    /**
     * Sets organiserId
     *
     * @param string|null $organiserId The unique identifier of the negotiator that organised the appointment
     *
     * @return self
     */
    public function setOrganiserId($organiserId)
    {
        $this->container['organiserId'] = $organiserId;

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
     * @param string[]|null $negotiatorIds A collection of unique identifiers of negotiators attached to the appointment. The first item in the collection is considered the primary negotiator
     *
     * @return self
     */
    public function setNegotiatorIds($negotiatorIds)
    {
        $this->container['negotiatorIds'] = $negotiatorIds;

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
     * @param string[]|null $officeIds A collection of unique identifiers of offices attached to the appointment. The first item in the collection is considered the primary office
     *
     * @return self
     */
    public function setOfficeIds($officeIds)
    {
        $this->container['officeIds'] = $officeIds;

        return $this;
    }

    /**
     * Gets attendee
     *
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Attendee|null
     */
    public function getAttendee()
    {
        return $this->container['attendee'];
    }

    /**
     * Sets attendee
     *
     * @param \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Attendee|null $attendee attendee
     *
     * @return self
     */
    public function setAttendee($attendee)
    {
        $this->container['attendee'] = $attendee;

        return $this;
    }

    /**
     * Gets accompanied
     *
     * @return bool|null
     */
    public function getAccompanied()
    {
        return $this->container['accompanied'];
    }

    /**
     * Sets accompanied
     *
     * @param bool|null $accompanied A flag denoting whether or not the appointment will be accompanied by one or more negotiators
     *
     * @return self
     */
    public function setAccompanied($accompanied)
    {
        $this->container['accompanied'] = $accompanied;

        return $this;
    }

    /**
     * Gets virtual
     *
     * @return bool|null
     */
    public function getVirtual()
    {
        return $this->container['virtual'];
    }

    /**
     * Sets virtual
     *
     * @param bool|null $virtual A flag denoting whether or not the appointment is virtual
     *
     * @return self
     */
    public function setVirtual($virtual)
    {
        $this->container['virtual'] = $virtual;

        return $this;
    }

    /**
     * Gets negotiatorConfirmed
     *
     * @return bool|null
     */
    public function getNegotiatorConfirmed()
    {
        return $this->container['negotiatorConfirmed'];
    }

    /**
     * Sets negotiatorConfirmed
     *
     * @param bool|null $negotiatorConfirmed A flag denoting whether or not the main negotiator has confirmed their attendance
     *
     * @return self
     */
    public function setNegotiatorConfirmed($negotiatorConfirmed)
    {
        $this->container['negotiatorConfirmed'] = $negotiatorConfirmed;

        return $this;
    }

    /**
     * Gets attendeeConfirmed
     *
     * @return bool|null
     */
    public function getAttendeeConfirmed()
    {
        return $this->container['attendeeConfirmed'];
    }

    /**
     * Sets attendeeConfirmed
     *
     * @param bool|null $attendeeConfirmed A flag denoting whether or not the attendee has confirmed their attendance
     *
     * @return self
     */
    public function setAttendeeConfirmed($attendeeConfirmed)
    {
        $this->container['attendeeConfirmed'] = $attendeeConfirmed;

        return $this;
    }

    /**
     * Gets propertyConfirmed
     *
     * @return bool|null
     */
    public function getPropertyConfirmed()
    {
        return $this->container['propertyConfirmed'];
    }

    /**
     * Sets propertyConfirmed
     *
     * @param bool|null $propertyConfirmed A flag denoting whether or not the property and/or property's vendor has confirmed their attendance
     *
     * @return self
     */
    public function setPropertyConfirmed($propertyConfirmed)
    {
        $this->container['propertyConfirmed'] = $propertyConfirmed;

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
     * @param bool|null $fromArchive A flag determining whether or not the appointment is archived
     *
     * @return self
     */
    public function setFromArchive($fromArchive)
    {
        $this->container['fromArchive'] = $fromArchive;

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
     * @param array<string,object>|null $metadata App specific metadata that has been set against the appointment
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
     * @param string|null $eTag The ETag for the current version of the appointment. Used for managing update concurrency
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

