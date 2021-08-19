# NorthernEstateAgencies\ReapitFoundationsClient\VendorsApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVendorById()**](VendorsApi.md#getVendorById) | **GET** /vendors/{id} | Gets a single vendor by its&#39; unique identifier
[**getVendorRelationshipById()**](VendorsApi.md#getVendorRelationshipById) | **GET** /vendors/{id}/relationships/{relationshipId} | Gets a single relationship between this vendor and a contact/company
[**vendorsGet()**](VendorsApi.md#vendorsGet) | **GET** /vendors/ | Gets a paged collection of vendors
[**vendorsIdPatch()**](VendorsApi.md#vendorsIdPatch) | **PATCH** /vendors/{id} | Updates a vendor
[**vendorsIdRelationshipsGet()**](VendorsApi.md#vendorsIdRelationshipsGet) | **GET** /vendors/{id}/relationships | Gets this vendors contact/company relationships
[**vendorsIdRelationshipsPost()**](VendorsApi.md#vendorsIdRelationshipsPost) | **POST** /vendors/{id}/relationships | Creates a relationship between this vendor and a contact/company
[**vendorsIdRelationshipsRelationshipIdDelete()**](VendorsApi.md#vendorsIdRelationshipsRelationshipIdDelete) | **DELETE** /vendors/{id}/relationships/{relationshipId} | Deletes a specific relationship between this vendor and a contact/company


## `getVendorById()`

```php
getVendorById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20037
```

Gets a single vendor by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Vendors unique identifier
$embed = array('embed_example'); // string[] | Embed additional resources into the vendor returned

try {
    $result = $apiInstance->getVendorById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->getVendorById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Vendors unique identifier |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the vendor returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVendorRelationshipById()`

```php
getVendorRelationshipById($id, $relationshipId): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20039Embedded
```

Gets a single relationship between this vendor and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique vendor identifier
$relationshipId = 'relationshipId_example'; // string | Unique relationship identifier

try {
    $result = $apiInstance->getVendorRelationshipById($id, $relationshipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->getVendorRelationshipById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique vendor identifier |
 **relationshipId** | **string**| Unique relationship identifier |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20039Embedded**](../Model/InlineResponse20039Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorsGet()`

```php
vendorsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $negotiatorId, $officeId, $fromArchive, $address, $name, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $lastCallFrom, $lastCallTo, $nextCallFrom, $nextCallTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20038
```

Gets a paged collection of vendors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of vendors to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/lastCall/nextCall)
$embed = array('embed_example'); // string[] | Embed additional resources into the vendors returned
$id = array('id_example'); // string[] | Only return vendors where the `id` field matches one or more values provided
$negotiatorId = array('negotiatorId_example'); // string[] | Only return vendors where the `negotiatorId` field matches one or more values provided
$officeId = array('officeId_example'); // string[] | Only return vendors where the `officeId` field matches one or more values provided
$fromArchive = True; // bool | Only return vendors where the `fromArchive` field matches the value given
$address = 'address_example'; // string | Only return vendors where a contact related to the vendor has a `primaryAddress` that matches the value provided
$name = 'name_example'; // string | Only return vendors where a contact related to the vendor has a `name` that matches the value provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return vendors where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return vendors where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return vendors where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return vendors where the `modified` field is on or before the ISO8601 date and time value provided
$lastCallFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return vendors where the `lastCall` field is on or after the ISO8601 date and time value provided
$lastCallTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return vendors where the `lastCall` field is on or before the ISO8601 date and time value provided
$nextCallFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return vendors where the `nextCall` field is on or after the ISO8601 date and time value provided
$nextCallTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return vendors where the `nextCall` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return vendors where the metadata matches the filters given

try {
    $result = $apiInstance->vendorsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $negotiatorId, $officeId, $fromArchive, $address, $name, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $lastCallFrom, $lastCallTo, $nextCallFrom, $nextCallTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->vendorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of vendors to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/lastCall/nextCall) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the vendors returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return vendors where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **negotiatorId** | [**string[]**](../Model/string.md)| Only return vendors where the &#x60;negotiatorId&#x60; field matches one or more values provided | [optional]
 **officeId** | [**string[]**](../Model/string.md)| Only return vendors where the &#x60;officeId&#x60; field matches one or more values provided | [optional]
 **fromArchive** | **bool**| Only return vendors where the &#x60;fromArchive&#x60; field matches the value given | [optional]
 **address** | **string**| Only return vendors where a contact related to the vendor has a &#x60;primaryAddress&#x60; that matches the value provided | [optional]
 **name** | **string**| Only return vendors where a contact related to the vendor has a &#x60;name&#x60; that matches the value provided | [optional]
 **createdFrom** | **\DateTime**| Only return vendors where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return vendors where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return vendors where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return vendors where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **lastCallFrom** | **\DateTime**| Only return vendors where the &#x60;lastCall&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **lastCallTo** | **\DateTime**| Only return vendors where the &#x60;lastCall&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **nextCallFrom** | **\DateTime**| Only return vendors where the &#x60;nextCall&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **nextCallTo** | **\DateTime**| Only return vendors where the &#x60;nextCall&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return vendors where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorsIdPatch()`

```php
vendorsIdPatch($ifMatch, $id, $body)
```

Updates a vendor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | Unique identifier of the vendor to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject53(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject53

try {
    $apiInstance->vendorsIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->vendorsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| Unique identifier of the vendor to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject53**](../Model/InlineObject53.md)|  | [optional]

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

## `vendorsIdRelationshipsGet()`

```php
vendorsIdRelationshipsGet($id, $pageSize, $pageNumber): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20039
```

Gets this vendors contact/company relationships

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique vendor identifier
$pageSize = 56; // int | A limit on the number of vendor relationships to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return

try {
    $result = $apiInstance->vendorsIdRelationshipsGet($id, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->vendorsIdRelationshipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique vendor identifier |
 **pageSize** | **int**| A limit on the number of vendor relationships to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vendorsIdRelationshipsPost()`

```php
vendorsIdRelationshipsPost($id, $body)
```

Creates a relationship between this vendor and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique vendor identifier
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject54(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject54

try {
    $apiInstance->vendorsIdRelationshipsPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->vendorsIdRelationshipsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique vendor identifier |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject54**](../Model/InlineObject54.md)|  | [optional]

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

## `vendorsIdRelationshipsRelationshipIdDelete()`

```php
vendorsIdRelationshipsRelationshipIdDelete($id, $relationshipId)
```

Deletes a specific relationship between this vendor and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\VendorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique vendor identifier
$relationshipId = 'relationshipId_example'; // string | Unique relationship identifier

try {
    $apiInstance->vendorsIdRelationshipsRelationshipIdDelete($id, $relationshipId);
} catch (Exception $e) {
    echo 'Exception when calling VendorsApi->vendorsIdRelationshipsRelationshipIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique vendor identifier |
 **relationshipId** | **string**| Unique relationship identifier |

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
