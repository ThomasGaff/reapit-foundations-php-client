# NorthernEstateAgencies\ReapitFoundationsClient\OfficesApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfficeById()**](OfficesApi.md#getOfficeById) | **GET** /offices/{id} | Gets a specific office by unique identifier
[**officesGet()**](OfficesApi.md#officesGet) | **GET** /offices/ | Gets a collection of offices matching the filter criteria provided
[**officesIdPatch()**](OfficesApi.md#officesIdPatch) | **PATCH** /offices/{id} | Updates an office by unique identifier
[**officesPost()**](OfficesApi.md#officesPost) | **POST** /offices/ | Creates a new office


## `getOfficeById()`

```php
getOfficeById($id, $embed, $extrasField): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20026Embedded
```

Gets a specific office by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\OfficesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the office
$embed = array('embed_example'); // string[] | Embed additional resources into the office returned
$extrasField = array('extrasField_example'); // string[] | Include extras fields matching one or more field names specified. You must be granted access to this data beforehand

try {
    $result = $apiInstance->getOfficeById($id, $embed, $extrasField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficesApi->getOfficeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the office |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the office returned | [optional]
 **extrasField** | [**string[]**](../Model/string.md)| Include extras fields matching one or more field names specified. You must be granted access to this data beforehand | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20026Embedded**](../Model/InlineResponse20026Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `officesGet()`

```php
officesGet($pageSize, $pageNumber, $sortBy, $embed, $id, $address, $name, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata, $extrasField): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20026
```

Gets a collection of offices matching the filter criteria provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\OfficesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of offices to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/name/address)
$embed = array('embed_example'); // string[] | Embed additional resources into the offices returned
$id = array('id_example'); // string[]
$address = 'address_example'; // string
$name = 'name_example'; // string
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offices where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offices where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offices where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offices where the `modified` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return offices where the metadata matches the filters given
$extrasField = array('extrasField_example'); // string[] | Include extras fields matching one or more field names specified. You must be granted access to this data beforehand

try {
    $result = $apiInstance->officesGet($pageSize, $pageNumber, $sortBy, $embed, $id, $address, $name, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata, $extrasField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfficesApi->officesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of offices to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/name/address) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the offices returned | [optional]
 **id** | [**string[]**](../Model/string.md)|  | [optional]
 **address** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **createdFrom** | **\DateTime**| Only return offices where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return offices where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return offices where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return offices where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return offices where the metadata matches the filters given | [optional]
 **extrasField** | [**string[]**](../Model/string.md)| Include extras fields matching one or more field names specified. You must be granted access to this data beforehand | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `officesIdPatch()`

```php
officesIdPatch($ifMatch, $id, $body)
```

Updates an office by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\OfficesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier of the office to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject35(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject35

try {
    $apiInstance->officesIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OfficesApi->officesIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier of the office to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject35**](../Model/InlineObject35.md)|  | [optional]

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

## `officesPost()`

```php
officesPost($body)
```

Creates a new office

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\OfficesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject34(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject34

try {
    $apiInstance->officesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling OfficesApi->officesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject34**](../Model/InlineObject34.md)|  | [optional]

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
