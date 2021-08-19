# NorthernEstateAgencies\ReapitFoundationsClient\SourcesApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSourceById()**](SourcesApi.md#getSourceById) | **GET** /sources/{id} | Retrieve a specific sources
[**sourcesGet()**](SourcesApi.md#sourcesGet) | **GET** /sources/ | Gets a paged collection of sources
[**sourcesIdPatch()**](SourcesApi.md#sourcesIdPatch) | **PATCH** /sources/{id} | Update a source
[**sourcesPost()**](SourcesApi.md#sourcesPost) | **POST** /sources/ | Create a new source


## `getSourceById()`

```php
getSourceById($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20031Embedded
```

Retrieve a specific sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the sources

try {
    $result = $apiInstance->getSourceById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->getSourceById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the sources |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20031Embedded**](../Model/InlineResponse20031Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sourcesGet()`

```php
sourcesGet($pageSize, $pageNumber, $sortBy, $id, $officeId, $departmentId, $name, $type, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20031
```

Gets a paged collection of sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of sources to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified)
$id = array('id_example'); // string[] | Only return sources where the `id` field matches one or more values provided
$officeId = array('officeId_example'); // string[] | Only return sources where the `officeId` field matches one or more values provided
$departmentId = array('departmentId_example'); // string[] | Only return sources where the `departmentId` field matches one or more values provided
$name = 'name_example'; // string | Only return sources where the `name` field matches the value provided
$type = 'type_example'; // string | Only return sources where the `type` field matches the value provided (advertisement/source)
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return sources where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return sources where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return sources where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return sources where the `modified` field is on or before the ISO8601 date and time value provided

try {
    $result = $apiInstance->sourcesGet($pageSize, $pageNumber, $sortBy, $id, $officeId, $departmentId, $name, $type, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->sourcesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of sources to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return sources where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **officeId** | [**string[]**](../Model/string.md)| Only return sources where the &#x60;officeId&#x60; field matches one or more values provided | [optional]
 **departmentId** | [**string[]**](../Model/string.md)| Only return sources where the &#x60;departmentId&#x60; field matches one or more values provided | [optional]
 **name** | **string**| Only return sources where the &#x60;name&#x60; field matches the value provided | [optional]
 **type** | **string**| Only return sources where the &#x60;type&#x60; field matches the value provided (advertisement/source) | [optional]
 **createdFrom** | **\DateTime**| Only return sources where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return sources where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return sources where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return sources where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sourcesIdPatch()`

```php
sourcesIdPatch($ifMatch, $id, $body)
```

Update a source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier for the source to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject46(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject46

try {
    $apiInstance->sourcesIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->sourcesIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier for the source to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject46**](../Model/InlineObject46.md)|  | [optional]

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

## `sourcesPost()`

```php
sourcesPost($body)
```

Create a new source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\SourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject45(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject45

try {
    $apiInstance->sourcesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling SourcesApi->sourcesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject45**](../Model/InlineObject45.md)|  | [optional]

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
