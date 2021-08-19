# NorthernEstateAgencies\ReapitFoundationsClient\MetadataApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**metadataGet()**](MetadataApi.md#metadataGet) | **GET** /metadata/ | Retrieves a collection of metadata records
[**metadataIdDelete()**](MetadataApi.md#metadataIdDelete) | **DELETE** /metadata/{id} | Deletes a specific metadata record
[**metadataIdGet()**](MetadataApi.md#metadataIdGet) | **GET** /metadata/{id} | Retrieves a specific metadata record
[**metadataIdPatch()**](MetadataApi.md#metadataIdPatch) | **PATCH** /metadata/{id} | Updates a metadata record using a JSON patch document
[**metadataIdPut()**](MetadataApi.md#metadataIdPut) | **PUT** /metadata/{id} | Updates a metadata record
[**metadataPost()**](MetadataApi.md#metadataPost) | **POST** /metadata/ | Creates a new metadata record


## `metadataGet()`

```php
metadataGet($pageSize, $pageNumber, $entityType, $id, $entityId, $filter): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20021
```

Retrieves a collection of metadata records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of metadata records to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return
$entityType = 'entityType_example'; // string | The metadata entity type to filter by. This can represent a Foundations inbuilt type (an entity presented in our APIs) or it can be a custom entity type (a dynamic standalone metadata entity that you create).                Inbuilt types: applicant, appointment, company, contact, conveyancing, identityCheck, landlord, negotiator, offer, office, property, task, vendor, worksOrder
$id = array('id_example'); // string[] | The unique identifier of the metadata record - more than one can be provided.
$entityId = array('entityId_example'); // string[] | The unique identifier of the associated entity to fetch metadata for - more than one can be provided
$filter = array('filter_example'); // string[] | The metadata filter expression - more than one can be provided

try {
    $result = $apiInstance->metadataGet($pageSize, $pageNumber, $entityType, $id, $entityId, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of metadata records to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]
 **entityType** | **string**| The metadata entity type to filter by. This can represent a Foundations inbuilt type (an entity presented in our APIs) or it can be a custom entity type (a dynamic standalone metadata entity that you create).                Inbuilt types: applicant, appointment, company, contact, conveyancing, identityCheck, landlord, negotiator, offer, office, property, task, vendor, worksOrder | [optional]
 **id** | [**string[]**](../Model/string.md)| The unique identifier of the metadata record - more than one can be provided. | [optional]
 **entityId** | [**string[]**](../Model/string.md)| The unique identifier of the associated entity to fetch metadata for - more than one can be provided | [optional]
 **filter** | [**string[]**](../Model/string.md)| The metadata filter expression - more than one can be provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataIdDelete()`

```php
metadataIdDelete($id)
```

Deletes a specific metadata record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the metadata record to delete

try {
    $apiInstance->metadataIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the metadata record to delete |

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

## `metadataIdGet()`

```php
metadataIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20021Embedded
```

Retrieves a specific metadata record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the metadata record to return

try {
    $result = $apiInstance->metadataIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the metadata record to return |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20021Embedded**](../Model/InlineResponse20021Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataIdPatch()`

```php
metadataIdPatch($id, $body)
```

Updates a metadata record using a JSON patch document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the metadata record to update.
$body = array(new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject()); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject[] | The patch metadata payload.

try {
    $apiInstance->metadataIdPatch($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the metadata record to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject[]**](../Model/InlineObject.md)| The patch metadata payload. | [optional]

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

## `metadataIdPut()`

```php
metadataIdPut($id, $body)
```

Updates a metadata record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the metadata record to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject27(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject27

try {
    $apiInstance->metadataIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the metadata record to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject27**](../Model/InlineObject27.md)|  | [optional]

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

## `metadataPost()`

```php
metadataPost($body)
```

Creates a new metadata record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject26(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject26

try {
    $apiInstance->metadataPost($body);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->metadataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject26**](../Model/InlineObject26.md)|  | [optional]

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
