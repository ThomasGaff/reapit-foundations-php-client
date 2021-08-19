# NorthernEstateAgencies\ReapitFoundationsClient\AreasApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**areasGet()**](AreasApi.md#areasGet) | **GET** /areas/ | Gets a collection of areas
[**areasIdPatch()**](AreasApi.md#areasIdPatch) | **PATCH** /areas/{id} | Updates an existing area
[**areasPost()**](AreasApi.md#areasPost) | **POST** /areas/ | Creates a new area
[**getAreaById()**](AreasApi.md#getAreaById) | **GET** /areas/{id} | Retrieves a specific area


## `areasGet()`

```php
areasGet($pageSize, $pageNumber, $sortBy, $id, $departmentId, $officeId, $name, $active, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2002
```

Gets a collection of areas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\AreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of areas to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/name)
$id = array('id_example'); // string[] | Only return areas where the `id` field matches one or more values provided
$departmentId = array('departmentId_example'); // string[] | Only return areas where the `departmentId` field matches one or more values provided
$officeId = array('officeId_example'); // string[] | Only return areas where the `officeId` field matches one or more values provided
$name = 'name_example'; // string | Only return areas where the `name` field matches the value provided
$active = True; // bool | Only return areas where the `active` field matches the value provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return areas where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return areas where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return areas where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return areas where the `modified` field is on or before the ISO8601 date and time value provided

try {
    $result = $apiInstance->areasGet($pageSize, $pageNumber, $sortBy, $id, $departmentId, $officeId, $name, $active, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreasApi->areasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of areas to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/name) | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return areas where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **departmentId** | [**string[]**](../Model/string.md)| Only return areas where the &#x60;departmentId&#x60; field matches one or more values provided | [optional]
 **officeId** | [**string[]**](../Model/string.md)| Only return areas where the &#x60;officeId&#x60; field matches one or more values provided | [optional]
 **name** | **string**| Only return areas where the &#x60;name&#x60; field matches the value provided | [optional]
 **active** | **bool**| Only return areas where the &#x60;active&#x60; field matches the value provided | [optional]
 **createdFrom** | **\DateTime**| Only return areas where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return areas where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return areas where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return areas where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `areasIdPatch()`

```php
areasIdPatch($ifMatch, $id, $body)
```

Updates an existing area

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\AreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier of the area to update
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject4(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject4

try {
    $apiInstance->areasIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AreasApi->areasIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier of the area to update |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject4**](../Model/InlineObject4.md)|  | [optional]

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

## `areasPost()`

```php
areasPost($body)
```

Creates a new area

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\AreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject3(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject3

try {
    $apiInstance->areasPost($body);
} catch (Exception $e) {
    echo 'Exception when calling AreasApi->areasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

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

## `getAreaById()`

```php
getAreaById($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2002Embedded
```

Retrieves a specific area

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\AreasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the area

try {
    $result = $apiInstance->getAreaById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AreasApi->getAreaById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the area |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2002Embedded**](../Model/InlineResponse2002Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
