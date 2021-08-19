<?php
/**
 * JournalEntriesApi
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

namespace NorthernEstateAgencies\ReapitFoundationsClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use NorthernEstateAgencies\ReapitFoundationsClient\ApiException;
use NorthernEstateAgencies\ReapitFoundationsClient\Configuration;
use NorthernEstateAgencies\ReapitFoundationsClient\HeaderSelector;
use NorthernEstateAgencies\ReapitFoundationsClient\ObjectSerializer;

/**
 * JournalEntriesApi Class Doc Comment
 *
 * @category Class
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JournalEntriesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation journalEntriesGet
     *
     * Retrieves a collection of journal entries - timestamped events relating to one or more entities
     *
     * @param  int $pageSize A limit on the number of journal entries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/typeId) (optional)
     * @param  string[] $embed Embed additional resources into the journal entries returned (optional)
     * @param  string[] $associatedType Only return journal entries where the &#x60;AssociatedType&#x60; field matches this value (optional)
     * @param  string[] $associatedId Only return journal entries where the &#x60;AssociatedId&#x60; field matches one or more values provided (optional)
     * @param  string[] $negotiatorId Only return journal entries where the &#x60;NegotiatorId&#x60; field matches one or more values provided (optional)
     * @param  string[] $propertyId Only return journal entries where the &#x60;PropertyId&#x60; field matches one or more values provided (optional)
     * @param  string[] $typeId Only return journal entries where the &#x60;TypeId&#x60; field matches one or more values provided (optional)
     * @param  \DateTime $createdFrom Only return journal entries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return journal entries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20017
     */
    public function journalEntriesGet($pageSize = null, $pageNumber = null, $sortBy = null, $embed = null, $associatedType = null, $associatedId = null, $negotiatorId = null, $propertyId = null, $typeId = null, $createdFrom = null, $createdTo = null)
    {
        list($response) = $this->journalEntriesGetWithHttpInfo($pageSize, $pageNumber, $sortBy, $embed, $associatedType, $associatedId, $negotiatorId, $propertyId, $typeId, $createdFrom, $createdTo);
        return $response;
    }

    /**
     * Operation journalEntriesGetWithHttpInfo
     *
     * Retrieves a collection of journal entries - timestamped events relating to one or more entities
     *
     * @param  int $pageSize A limit on the number of journal entries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/typeId) (optional)
     * @param  string[] $embed Embed additional resources into the journal entries returned (optional)
     * @param  string[] $associatedType Only return journal entries where the &#x60;AssociatedType&#x60; field matches this value (optional)
     * @param  string[] $associatedId Only return journal entries where the &#x60;AssociatedId&#x60; field matches one or more values provided (optional)
     * @param  string[] $negotiatorId Only return journal entries where the &#x60;NegotiatorId&#x60; field matches one or more values provided (optional)
     * @param  string[] $propertyId Only return journal entries where the &#x60;PropertyId&#x60; field matches one or more values provided (optional)
     * @param  string[] $typeId Only return journal entries where the &#x60;TypeId&#x60; field matches one or more values provided (optional)
     * @param  \DateTime $createdFrom Only return journal entries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return journal entries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20017, HTTP status code, HTTP response headers (array of strings)
     */
    public function journalEntriesGetWithHttpInfo($pageSize = null, $pageNumber = null, $sortBy = null, $embed = null, $associatedType = null, $associatedId = null, $negotiatorId = null, $propertyId = null, $typeId = null, $createdFrom = null, $createdTo = null)
    {
        $request = $this->journalEntriesGetRequest($pageSize, $pageNumber, $sortBy, $embed, $associatedType, $associatedId, $negotiatorId, $propertyId, $typeId, $createdFrom, $createdTo);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20017' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20017', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20017';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20017',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation journalEntriesGetAsync
     *
     * Retrieves a collection of journal entries - timestamped events relating to one or more entities
     *
     * @param  int $pageSize A limit on the number of journal entries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/typeId) (optional)
     * @param  string[] $embed Embed additional resources into the journal entries returned (optional)
     * @param  string[] $associatedType Only return journal entries where the &#x60;AssociatedType&#x60; field matches this value (optional)
     * @param  string[] $associatedId Only return journal entries where the &#x60;AssociatedId&#x60; field matches one or more values provided (optional)
     * @param  string[] $negotiatorId Only return journal entries where the &#x60;NegotiatorId&#x60; field matches one or more values provided (optional)
     * @param  string[] $propertyId Only return journal entries where the &#x60;PropertyId&#x60; field matches one or more values provided (optional)
     * @param  string[] $typeId Only return journal entries where the &#x60;TypeId&#x60; field matches one or more values provided (optional)
     * @param  \DateTime $createdFrom Only return journal entries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return journal entries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function journalEntriesGetAsync($pageSize = null, $pageNumber = null, $sortBy = null, $embed = null, $associatedType = null, $associatedId = null, $negotiatorId = null, $propertyId = null, $typeId = null, $createdFrom = null, $createdTo = null)
    {
        return $this->journalEntriesGetAsyncWithHttpInfo($pageSize, $pageNumber, $sortBy, $embed, $associatedType, $associatedId, $negotiatorId, $propertyId, $typeId, $createdFrom, $createdTo)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation journalEntriesGetAsyncWithHttpInfo
     *
     * Retrieves a collection of journal entries - timestamped events relating to one or more entities
     *
     * @param  int $pageSize A limit on the number of journal entries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/typeId) (optional)
     * @param  string[] $embed Embed additional resources into the journal entries returned (optional)
     * @param  string[] $associatedType Only return journal entries where the &#x60;AssociatedType&#x60; field matches this value (optional)
     * @param  string[] $associatedId Only return journal entries where the &#x60;AssociatedId&#x60; field matches one or more values provided (optional)
     * @param  string[] $negotiatorId Only return journal entries where the &#x60;NegotiatorId&#x60; field matches one or more values provided (optional)
     * @param  string[] $propertyId Only return journal entries where the &#x60;PropertyId&#x60; field matches one or more values provided (optional)
     * @param  string[] $typeId Only return journal entries where the &#x60;TypeId&#x60; field matches one or more values provided (optional)
     * @param  \DateTime $createdFrom Only return journal entries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return journal entries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function journalEntriesGetAsyncWithHttpInfo($pageSize = null, $pageNumber = null, $sortBy = null, $embed = null, $associatedType = null, $associatedId = null, $negotiatorId = null, $propertyId = null, $typeId = null, $createdFrom = null, $createdTo = null)
    {
        $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20017';
        $request = $this->journalEntriesGetRequest($pageSize, $pageNumber, $sortBy, $embed, $associatedType, $associatedId, $negotiatorId, $propertyId, $typeId, $createdFrom, $createdTo);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'journalEntriesGet'
     *
     * @param  int $pageSize A limit on the number of journal entries to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string $sortBy Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/typeId) (optional)
     * @param  string[] $embed Embed additional resources into the journal entries returned (optional)
     * @param  string[] $associatedType Only return journal entries where the &#x60;AssociatedType&#x60; field matches this value (optional)
     * @param  string[] $associatedId Only return journal entries where the &#x60;AssociatedId&#x60; field matches one or more values provided (optional)
     * @param  string[] $negotiatorId Only return journal entries where the &#x60;NegotiatorId&#x60; field matches one or more values provided (optional)
     * @param  string[] $propertyId Only return journal entries where the &#x60;PropertyId&#x60; field matches one or more values provided (optional)
     * @param  string[] $typeId Only return journal entries where the &#x60;TypeId&#x60; field matches one or more values provided (optional)
     * @param  \DateTime $createdFrom Only return journal entries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided (optional)
     * @param  \DateTime $createdTo Only return journal entries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function journalEntriesGetRequest($pageSize = null, $pageNumber = null, $sortBy = null, $embed = null, $associatedType = null, $associatedId = null, $negotiatorId = null, $propertyId = null, $typeId = null, $createdFrom = null, $createdTo = null)
    {







        $resourcePath = '/journalEntries/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($pageSize)) {
            $pageSize = ObjectSerializer::serializeCollection($pageSize, '', true);
        }
        if ($pageSize !== null) {
            $queryParams['pageSize'] = $pageSize;
        }
        // query params
        if (is_array($pageNumber)) {
            $pageNumber = ObjectSerializer::serializeCollection($pageNumber, '', true);
        }
        if ($pageNumber !== null) {
            $queryParams['pageNumber'] = $pageNumber;
        }
        // query params
        if (is_array($sortBy)) {
            $sortBy = ObjectSerializer::serializeCollection($sortBy, '', true);
        }
        if ($sortBy !== null) {
            $queryParams['sortBy'] = $sortBy;
        }
        // query params
        if ($embed !== null) {
            if('form' === 'form' && is_array($embed)) {
                foreach($embed as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['embed'] = $embed;
            }
        }
        // query params
        if ($associatedType !== null) {
            if('form' === 'form' && is_array($associatedType)) {
                foreach($associatedType as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['associatedType'] = $associatedType;
            }
        }
        // query params
        if ($associatedId !== null) {
            if('form' === 'form' && is_array($associatedId)) {
                foreach($associatedId as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['associatedId'] = $associatedId;
            }
        }
        // query params
        if ($negotiatorId !== null) {
            if('form' === 'form' && is_array($negotiatorId)) {
                foreach($negotiatorId as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['negotiatorId'] = $negotiatorId;
            }
        }
        // query params
        if ($propertyId !== null) {
            if('form' === 'form' && is_array($propertyId)) {
                foreach($propertyId as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['propertyId'] = $propertyId;
            }
        }
        // query params
        if ($typeId !== null) {
            if('form' === 'form' && is_array($typeId)) {
                foreach($typeId as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['typeId'] = $typeId;
            }
        }
        // query params
        if (is_array($createdFrom)) {
            $createdFrom = ObjectSerializer::serializeCollection($createdFrom, '', true);
        }
        if ($createdFrom !== null) {
            $queryParams['createdFrom'] = $createdFrom;
        }
        // query params
        if (is_array($createdTo)) {
            $createdTo = ObjectSerializer::serializeCollection($createdTo, '', true);
        }
        if ($createdTo !== null) {
            $queryParams['createdTo'] = $createdTo;
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation journalEntriesPost
     *
     * Create a new journal entry event against an entity
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject22 $body body (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function journalEntriesPost($body = null)
    {
        $this->journalEntriesPostWithHttpInfo($body);
    }

    /**
     * Operation journalEntriesPostWithHttpInfo
     *
     * Create a new journal entry event against an entity
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject22 $body (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function journalEntriesPostWithHttpInfo($body = null)
    {
        $request = $this->journalEntriesPostRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation journalEntriesPostAsync
     *
     * Create a new journal entry event against an entity
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject22 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function journalEntriesPostAsync($body = null)
    {
        return $this->journalEntriesPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation journalEntriesPostAsyncWithHttpInfo
     *
     * Create a new journal entry event against an entity
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject22 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function journalEntriesPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '';
        $request = $this->journalEntriesPostRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'journalEntriesPost'
     *
     * @param  \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject22 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function journalEntriesPostRequest($body = null)
    {

        $resourcePath = '/journalEntries/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json-patch+json', 'application/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
