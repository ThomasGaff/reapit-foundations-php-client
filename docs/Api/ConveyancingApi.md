# NorthernEstateAgencies\ReapitFoundationsClient\ConveyancingApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**conveyancingGet()**](ConveyancingApi.md#conveyancingGet) | **GET** /conveyancing/ | Retrieves sales progression information for a collection of offers
[**conveyancingIdChainGet()**](ConveyancingApi.md#conveyancingIdChainGet) | **GET** /conveyancing/{id}/chain | Retrieves details of the known chain for the specified offer
[**conveyancingIdDownwardDelete()**](ConveyancingApi.md#conveyancingIdDownwardDelete) | **DELETE** /conveyancing/{id}/downward | Deletes the link between the specified offer and the one below it one in the chain (the buyers sale)
[**conveyancingIdDownwardPost()**](ConveyancingApi.md#conveyancingIdDownwardPost) | **POST** /conveyancing/{id}/downward | Create a link between the specified offer to another below this one in the chain (the buyers sale)
[**conveyancingIdGet()**](ConveyancingApi.md#conveyancingIdGet) | **GET** /conveyancing/{id} | Retrieves sales progression information for the specified offer
[**conveyancingIdPatch()**](ConveyancingApi.md#conveyancingIdPatch) | **PATCH** /conveyancing/{id} | Updates sales progression information for the specified offer
[**conveyancingIdUpwardDelete()**](ConveyancingApi.md#conveyancingIdUpwardDelete) | **DELETE** /conveyancing/{id}/upward | Deletes the link between the specified offer and the one above it one in the chain (the vendors purchase)
[**conveyancingIdUpwardPost()**](ConveyancingApi.md#conveyancingIdUpwardPost) | **POST** /conveyancing/{id}/upward | Create a link between the specified offer to another above this one in the chain (the vendors purchase)


## `conveyancingGet()`

```php
conveyancingGet($pageSize, $pageNumber, $sortBy, $id, $propertyId, $embed, $metadata, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20012
```

Retrieves sales progression information for a collection of offers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConveyancingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of entities to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified)
$id = array('id_example'); // string[] | Only return entities where the `id` field matches one or more values provided
$propertyId = array('propertyId_example'); // string[] | Only return entities where the `propertyId` field matches one or more values provided
$embed = array('embed_example'); // string[] | Embed additional resources into the entities returned
$metadata = array('metadata_example'); // string[] | Only return entities where the metadata matches the filters given
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return entities where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return entities where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return entities where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return entities where the `modified` field is on or before the ISO8601 date and time value provided

try {
    $result = $apiInstance->conveyancingGet($pageSize, $pageNumber, $sortBy, $id, $propertyId, $embed, $metadata, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConveyancingApi->conveyancingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of entities to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return entities where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **propertyId** | [**string[]**](../Model/string.md)| Only return entities where the &#x60;propertyId&#x60; field matches one or more values provided | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the entities returned | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return entities where the metadata matches the filters given | [optional]
 **createdFrom** | **\DateTime**| Only return entities where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return entities where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return entities where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return entities where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conveyancingIdChainGet()`

```php
conveyancingIdChainGet($id, $pageSize, $pageNumber, $sortBy): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20012
```

Retrieves details of the known chain for the specified offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConveyancingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the offer
$pageSize = 56; // int | A limit on the number of entities to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified)

try {
    $result = $apiInstance->conveyancingIdChainGet($id, $pageSize, $pageNumber, $sortBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConveyancingApi->conveyancingIdChainGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the offer |
 **pageSize** | **int**| A limit on the number of entities to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conveyancingIdDownwardDelete()`

```php
conveyancingIdDownwardDelete($id)
```

Deletes the link between the specified offer and the one below it one in the chain (the buyers sale)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConveyancingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the offer to remove the downward link from

try {
    $apiInstance->conveyancingIdDownwardDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ConveyancingApi->conveyancingIdDownwardDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the offer to remove the downward link from |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conveyancingIdDownwardPost()`

```php
conveyancingIdDownwardPost($id, $body)
```

Create a link between the specified offer to another below this one in the chain (the buyers sale)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConveyancingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the offer to create the downward link against
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject13(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject13

try {
    $apiInstance->conveyancingIdDownwardPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConveyancingApi->conveyancingIdDownwardPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the offer to create the downward link against |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject13**](../Model/InlineObject13.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/_*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conveyancingIdGet()`

```php
conveyancingIdGet($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20012Embedded
```

Retrieves sales progression information for the specified offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConveyancingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the offer
$embed = array('embed_example'); // string[] | Embed additional resources into the entity returned

try {
    $result = $apiInstance->conveyancingIdGet($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConveyancingApi->conveyancingIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the offer |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the entity returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20012Embedded**](../Model/InlineResponse20012Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conveyancingIdPatch()`

```php
conveyancingIdPatch($ifMatch, $id, $body)
```

Updates sales progression information for the specified offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConveyancingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier of the offer
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject12(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject12

try {
    $apiInstance->conveyancingIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConveyancingApi->conveyancingIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier of the offer |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject12**](../Model/InlineObject12.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/_*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conveyancingIdUpwardDelete()`

```php
conveyancingIdUpwardDelete($id)
```

Deletes the link between the specified offer and the one above it one in the chain (the vendors purchase)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConveyancingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the offer to remove the upward link from

try {
    $apiInstance->conveyancingIdUpwardDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ConveyancingApi->conveyancingIdUpwardDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the offer to remove the upward link from |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `conveyancingIdUpwardPost()`

```php
conveyancingIdUpwardPost($id, $body)
```

Create a link between the specified offer to another above this one in the chain (the vendors purchase)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConveyancingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the offer to create the upward link against
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject14(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject14

try {
    $apiInstance->conveyancingIdUpwardPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConveyancingApi->conveyancingIdUpwardPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the offer to create the upward link against |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject14**](../Model/InlineObject14.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/_*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
