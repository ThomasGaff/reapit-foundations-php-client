# NorthernEstateAgencies\ReapitFoundationsClient\MetadataSchemaApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSchemaById()**](MetadataSchemaApi.md#getSchemaById) | **GET** /metadata/metadataSchema/{id} | Retrieves a specific metadata schema, used to validate a metadata entity
[**metadataMetadataSchemaGet()**](MetadataSchemaApi.md#metadataMetadataSchemaGet) | **GET** /metadata/metadataSchema | Retrieves a paged collection of metadata schemas, used to validate metadata entities
[**metadataMetadataSchemaIdPut()**](MetadataSchemaApi.md#metadataMetadataSchemaIdPut) | **PUT** /metadata/metadataSchema/{id} | Updates an existing metadata schema, used to validate a metadata entity
[**metadataMetadataSchemaPost()**](MetadataSchemaApi.md#metadataMetadataSchemaPost) | **POST** /metadata/metadataSchema | Creates a new metadata schema, used to validate a metadata entity


## `getSchemaById()`

```php
getSchemaById($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20022
```

Retrieves a specific metadata schema, used to validate a metadata entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataSchemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the JSON schema to return

try {
    $result = $apiInstance->getSchemaById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataSchemaApi->getSchemaById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the JSON schema to return |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataMetadataSchemaGet()`

```php
metadataMetadataSchemaGet($pageSize, $pageNumber, $entityType): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20023
```

Retrieves a paged collection of metadata schemas, used to validate metadata entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataSchemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of JSON schemas to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return
$entityType = 'entityType_example'; // string | The name of the entity type that this JSON schema is associated to

try {
    $result = $apiInstance->metadataMetadataSchemaGet($pageSize, $pageNumber, $entityType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataSchemaApi->metadataMetadataSchemaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of JSON schemas to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]
 **entityType** | **string**| The name of the entity type that this JSON schema is associated to | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metadataMetadataSchemaIdPut()`

```php
metadataMetadataSchemaIdPut($id, $body)
```

Updates an existing metadata schema, used to validate a metadata entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataSchemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the JSON schema to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject28(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject28

try {
    $apiInstance->metadataMetadataSchemaIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MetadataSchemaApi->metadataMetadataSchemaIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the JSON schema to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject28**](../Model/InlineObject28.md)|  | [optional]

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

## `metadataMetadataSchemaPost()`

```php
metadataMetadataSchemaPost($body)
```

Creates a new metadata schema, used to validate a metadata entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\MetadataSchemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject29(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject29

try {
    $apiInstance->metadataMetadataSchemaPost($body);
} catch (Exception $e) {
    echo 'Exception when calling MetadataSchemaApi->metadataMetadataSchemaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject29**](../Model/InlineObject29.md)|  | [optional]

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
