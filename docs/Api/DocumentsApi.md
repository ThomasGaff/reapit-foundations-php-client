# NorthernEstateAgencies\ReapitFoundationsClient\DocumentsApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentsGet()**](DocumentsApi.md#documentsGet) | **GET** /documents/ | Gets a collection of documents matching the filter criteria provided
[**documentsIdDelete()**](DocumentsApi.md#documentsIdDelete) | **DELETE** /documents/{id} | Deletes a document by unique identifier
[**documentsIdPatch()**](DocumentsApi.md#documentsIdPatch) | **PATCH** /documents/{id} | Updates an existing document by its&#39; unique identifier
[**documentsPost()**](DocumentsApi.md#documentsPost) | **POST** /documents/ | Creates a new document
[**documentsSignedUrlPost()**](DocumentsApi.md#documentsSignedUrlPost) | **POST** /documents/signedUrl | Creates pre signed urls used for uploading files between 6MB and 30MB
[**getDocumentById()**](DocumentsApi.md#getDocumentById) | **GET** /documents/{id} | Gets a single document by its&#39; unique identifier
[**getDocumentContentById()**](DocumentsApi.md#getDocumentContentById) | **GET** /documents/{id}/download | Gets a the content of single document by its&#39; unique identifier


## `documentsGet()`

```php
documentsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $associatedId, $associatedType, $typeId, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20014
```

Gets a collection of documents matching the filter criteria provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | Maximum number of records per page
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified)
$embed = array('embed_example'); // string[] | Embed additional resources into the documents returned
$id = array('id_example'); // string[] | Only return documents where the `id` field matches one or more values provided
$associatedId = array('associatedId_example'); // string[] | Only return documents where the `associatedId` field matches one or more values provided
$associatedType = array('associatedType_example'); // string[] | Only return documents where the `associatedType` field matches one or more values provided
$typeId = array('typeId_example'); // string[] | Only return documents where the `typeId` field matches one or more values provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return documents where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return documents where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return documents where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return documents where the `modified` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return documents where the metadata matches the filters given

try {
    $result = $apiInstance->documentsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $associatedId, $associatedType, $typeId, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Maximum number of records per page | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the documents returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return documents where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **associatedId** | [**string[]**](../Model/string.md)| Only return documents where the &#x60;associatedId&#x60; field matches one or more values provided | [optional]
 **associatedType** | [**string[]**](../Model/string.md)| Only return documents where the &#x60;associatedType&#x60; field matches one or more values provided | [optional]
 **typeId** | [**string[]**](../Model/string.md)| Only return documents where the &#x60;typeId&#x60; field matches one or more values provided | [optional]
 **createdFrom** | **\DateTime**| Only return documents where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return documents where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return documents where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return documents where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return documents where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdDelete()`

```php
documentsIdDelete($id)
```

Deletes a document by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier for the document to delete.

try {
    $apiInstance->documentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier for the document to delete. |

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

## `documentsIdPatch()`

```php
documentsIdPatch($ifMatch, $id, $body)
```

Updates an existing document by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier for the document to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject16(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject16

try {
    $apiInstance->documentsIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier for the document to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject16**](../Model/InlineObject16.md)|  | [optional]

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

## `documentsPost()`

```php
documentsPost($body)
```

Creates a new document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject15(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject15

try {
    $apiInstance->documentsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject15**](../Model/InlineObject15.md)|  | [optional]

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

## `documentsSignedUrlPost()`

```php
documentsSignedUrlPost($body): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject17
```

Creates pre signed urls used for uploading files between 6MB and 30MB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject17(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject17

try {
    $result = $apiInstance->documentsSignedUrlPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsSignedUrlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject17**](../Model/InlineObject17.md)|  | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject17**](../Model/InlineObject17.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentById()`

```php
getDocumentById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20014Embedded
```

Gets a single document by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique document identifier
$embed = array('embed_example'); // string[] | Embed additional resources into the document returned

try {
    $result = $apiInstance->getDocumentById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique document identifier |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the document returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20014Embedded**](../Model/InlineResponse20014Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentContentById()`

```php
getDocumentContentById($id): \SplFileObject
```

Gets a the content of single document by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique document identifier

try {
    $result = $apiInstance->getDocumentContentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocumentContentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique document identifier |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
