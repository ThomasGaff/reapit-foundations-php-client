<?php
/**
 * WebhookModel
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
 * WebhookModel Class Doc Comment
 *
 * @category Class
 * @description Representation of a webhook subscription
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'url' => 'string',
        'description' => 'string',
        'topicIds' => 'string[]',
        'active' => 'bool',
        'ignoreEtagOnlyChanges' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'created' => 'date-time',
        'modified' => 'date-time',
        'url' => null,
        'description' => null,
        'topicIds' => null,
        'active' => null,
        'ignoreEtagOnlyChanges' => null
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
        'id' => 'id',
        'created' => 'created',
        'modified' => 'modified',
        'url' => 'url',
        'description' => 'description',
        'topicIds' => 'topicIds',
        'active' => 'active',
        'ignoreEtagOnlyChanges' => 'ignoreEtagOnlyChanges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'url' => 'setUrl',
        'description' => 'setDescription',
        'topicIds' => 'setTopicIds',
        'active' => 'setActive',
        'ignoreEtagOnlyChanges' => 'setIgnoreEtagOnlyChanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'url' => 'getUrl',
        'description' => 'getDescription',
        'topicIds' => 'getTopicIds',
        'active' => 'getActive',
        'ignoreEtagOnlyChanges' => 'getIgnoreEtagOnlyChanges'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['topicIds'] = $data['topicIds'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['ignoreEtagOnlyChanges'] = $data['ignoreEtagOnlyChanges'] ?? null;
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
     * @param string|null $id The unique identifier of the webhook
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
     * @param \DateTime|null $created The date and time when the webhook was created
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
     * @param \DateTime|null $modified The date and time when the webhook was last modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The url where the payload associated with the webhook should be sent to
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * @param string|null $description A short description associated with the webhook (ie a friendly name or label)
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets topicIds
     *
     * @return string[]|null
     */
    public function getTopicIds()
    {
        return $this->container['topicIds'];
    }

    /**
     * Sets topicIds
     *
     * @param string[]|null $topicIds The identifiers of the topics the webhook is associated with
     *
     * @return self
     */
    public function setTopicIds($topicIds)
    {
        $this->container['topicIds'] = $topicIds;

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
     * @param bool|null $active Flag denoting whether or not the webhook is active and ready to receive data
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets ignoreEtagOnlyChanges
     *
     * @return bool|null
     */
    public function getIgnoreEtagOnlyChanges()
    {
        return $this->container['ignoreEtagOnlyChanges'];
    }

    /**
     * Sets ignoreEtagOnlyChanges
     *
     * @param bool|null $ignoreEtagOnlyChanges Flag denoting whether or events that only contain changes to etags and/or modified dates are emitted
     *
     * @return self
     */
    public function setIgnoreEtagOnlyChanges($ignoreEtagOnlyChanges)
    {
        $this->container['ignoreEtagOnlyChanges'] = $ignoreEtagOnlyChanges;

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


