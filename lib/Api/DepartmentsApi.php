<?php
/**
 * DepartmentsApi
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
 * DepartmentsApi Class Doc Comment
 *
 * @category Class
 * @package  NorthernEstateAgencies\ReapitFoundationsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DepartmentsApi
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
     * Operation departmentsGet
     *
     * Gets a collection of departments
     *
     * @param  int $pageSize A limit on the number of departments to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string[] $id Only return departments where the &#x60;id&#x60; field matches one or more values provided (optional)
     * @param  string $name Only return departments where the &#x60;name&#x60; field matches one or more values provided (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013
     */
    public function departmentsGet($pageSize = null, $pageNumber = null, $id = null, $name = null)
    {
        list($response) = $this->departmentsGetWithHttpInfo($pageSize, $pageNumber, $id, $name);
        return $response;
    }

    /**
     * Operation departmentsGetWithHttpInfo
     *
     * Gets a collection of departments
     *
     * @param  int $pageSize A limit on the number of departments to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string[] $id Only return departments where the &#x60;id&#x60; field matches one or more values provided (optional)
     * @param  string $name Only return departments where the &#x60;name&#x60; field matches one or more values provided (optional)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013, HTTP status code, HTTP response headers (array of strings)
     */
    public function departmentsGetWithHttpInfo($pageSize = null, $pageNumber = null, $id = null, $name = null)
    {
        $request = $this->departmentsGetRequest($pageSize, $pageNumber, $id, $name);

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
                    if ('\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013';
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
                        '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation departmentsGetAsync
     *
     * Gets a collection of departments
     *
     * @param  int $pageSize A limit on the number of departments to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string[] $id Only return departments where the &#x60;id&#x60; field matches one or more values provided (optional)
     * @param  string $name Only return departments where the &#x60;name&#x60; field matches one or more values provided (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function departmentsGetAsync($pageSize = null, $pageNumber = null, $id = null, $name = null)
    {
        return $this->departmentsGetAsyncWithHttpInfo($pageSize, $pageNumber, $id, $name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation departmentsGetAsyncWithHttpInfo
     *
     * Gets a collection of departments
     *
     * @param  int $pageSize A limit on the number of departments to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string[] $id Only return departments where the &#x60;id&#x60; field matches one or more values provided (optional)
     * @param  string $name Only return departments where the &#x60;name&#x60; field matches one or more values provided (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function departmentsGetAsyncWithHttpInfo($pageSize = null, $pageNumber = null, $id = null, $name = null)
    {
        $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013';
        $request = $this->departmentsGetRequest($pageSize, $pageNumber, $id, $name);

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
     * Create request for operation 'departmentsGet'
     *
     * @param  int $pageSize A limit on the number of departments to be returned per page. Value can range between 1 and 100, and the default is 25 (optional)
     * @param  int $pageNumber The page number to return (must be greater than 0) (optional)
     * @param  string[] $id Only return departments where the &#x60;id&#x60; field matches one or more values provided (optional)
     * @param  string $name Only return departments where the &#x60;name&#x60; field matches one or more values provided (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function departmentsGetRequest($pageSize = null, $pageNumber = null, $id = null, $name = null)
    {


        $resourcePath = '/departments/';
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
        if ($id !== null) {
            if('form' === 'form' && is_array($id)) {
                foreach($id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['id'] = $id;
            }
        }
        // query params
        if (is_array($name)) {
            $name = ObjectSerializer::serializeCollection($name, '', true);
        }
        if ($name !== null) {
            $queryParams['name'] = $name;
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
     * Operation getDepartmentById
     *
     * Gets a single department by its&#39; unique identifier
     *
     * @param  string $id Unique department identifier (required)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013Embedded
     */
    public function getDepartmentById($id)
    {
        list($response) = $this->getDepartmentByIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getDepartmentByIdWithHttpInfo
     *
     * Gets a single department by its&#39; unique identifier
     *
     * @param  string $id Unique department identifier (required)
     *
     * @throws \NorthernEstateAgencies\ReapitFoundationsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013Embedded, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDepartmentByIdWithHttpInfo($id)
    {
        $request = $this->getDepartmentByIdRequest($id);

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
                    if ('\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013Embedded' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013Embedded', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013Embedded';
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
                        '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013Embedded',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDepartmentByIdAsync
     *
     * Gets a single department by its&#39; unique identifier
     *
     * @param  string $id Unique department identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDepartmentByIdAsync($id)
    {
        return $this->getDepartmentByIdAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDepartmentByIdAsyncWithHttpInfo
     *
     * Gets a single department by its&#39; unique identifier
     *
     * @param  string $id Unique department identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDepartmentByIdAsyncWithHttpInfo($id)
    {
        $returnType = '\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013Embedded';
        $request = $this->getDepartmentByIdRequest($id);

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
     * Create request for operation 'getDepartmentById'
     *
     * @param  string $id Unique department identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDepartmentByIdRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getDepartmentById'
            );
        }

        $resourcePath = '/departments/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
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