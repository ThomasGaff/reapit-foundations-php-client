# NorthernEstateAgencies\ReapitFoundationsClient\PropertyImagesApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPropertyImageById()**](PropertyImagesApi.md#getPropertyImageById) | **GET** /propertyImages/{id} | Gets a single property image by its&#39; unique identifier
[**propertyImagesGet()**](PropertyImagesApi.md#propertyImagesGet) | **GET** /propertyImages/ | Gets a collection of property images
[**propertyImagesIdDelete()**](PropertyImagesApi.md#propertyImagesIdDelete) | **DELETE** /propertyImages/{id} | Deletes a property image by unique identifier
[**propertyImagesIdPatch()**](PropertyImagesApi.md#propertyImagesIdPatch) | **PATCH** /propertyImages/{id} | Updates a property image by unique identifier
[**propertyImagesPost()**](PropertyImagesApi.md#propertyImagesPost) | **POST** /propertyImages/ | Creates a property image
[**propertyImagesSignedUrlPost()**](PropertyImagesApi.md#propertyImagesSignedUrlPost) | **POST** /propertyImages/signedUrl | Creates pre signed urls used for uploading files between 6MB and 30MB


## `getPropertyImageById()`

```php
getPropertyImageById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20029Embedded
```

Gets a single property image by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertyImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the property image. This is the filename and not the property id
$embed = array('embed_example'); // string[] | Embed additional resources into the property image returned

try {
    $result = $apiInstance->getPropertyImageById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyImagesApi->getPropertyImageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the property image. This is the filename and not the property id |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the property image returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20029Embedded**](../Model/InlineResponse20029Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertyImagesGet()`

```php
propertyImagesGet($pageSize, $pageNumber, $sortBy, $id, $embed, $propertyId, $type, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20029
```

Gets a collection of property images

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertyImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of property images to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/order/type/propertyId)
$id = array('id_example'); // string[] | Only return property images where the `id` field matches one or more values provided
$embed = array('embed_example'); // string[] | Embed additional resources into the property images returned
$propertyId = array('propertyId_example'); // string[] | Only return property images where the `propertyId` field matches one or more values provided
$type = array('type_example'); // string[] | Only return property images where the `type` field matches one or more values provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return property images where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return property images where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return property images where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return property images where the `modified` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return property images where the metadata matches the filters given

try {
    $result = $apiInstance->propertyImagesGet($pageSize, $pageNumber, $sortBy, $id, $embed, $propertyId, $type, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyImagesApi->propertyImagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of property images to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/order/type/propertyId) | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return property images where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the property images returned | [optional]
 **propertyId** | [**string[]**](../Model/string.md)| Only return property images where the &#x60;propertyId&#x60; field matches one or more values provided | [optional]
 **type** | [**string[]**](../Model/string.md)| Only return property images where the &#x60;type&#x60; field matches one or more values provided | [optional]
 **createdFrom** | **\DateTime**| Only return property images where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return property images where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return property images where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return property images where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return property images where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertyImagesIdDelete()`

```php
propertyImagesIdDelete($id)
```

Deletes a property image by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertyImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier for the property image to delete.

try {
    $apiInstance->propertyImagesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyImagesApi->propertyImagesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier for the property image to delete. |

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

## `propertyImagesIdPatch()`

```php
propertyImagesIdPatch($ifMatch, $id, $body)
```

Updates a property image by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertyImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier for the property image to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject41(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject41

try {
    $apiInstance->propertyImagesIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PropertyImagesApi->propertyImagesIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier for the property image to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject41**](../Model/InlineObject41.md)|  | [optional]

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

## `propertyImagesPost()`

```php
propertyImagesPost($body)
```

Creates a property image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertyImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject40(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject40

try {
    $apiInstance->propertyImagesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PropertyImagesApi->propertyImagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject40**](../Model/InlineObject40.md)|  | [optional]

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

## `propertyImagesSignedUrlPost()`

```php
propertyImagesSignedUrlPost($body): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject42
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


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertyImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject42(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject42

try {
    $result = $apiInstance->propertyImagesSignedUrlPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyImagesApi->propertyImagesSignedUrlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject42**](../Model/InlineObject42.md)|  | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject42**](../Model/InlineObject42.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
