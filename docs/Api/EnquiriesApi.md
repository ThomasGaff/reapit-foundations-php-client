# NorthernEstateAgencies\ReapitFoundationsClient\EnquiriesApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**enquiriesGet()**](EnquiriesApi.md#enquiriesGet) | **GET** /enquiries/ | Retrieves a collection of enquiries from prospective vendors, landlords or applicants
[**enquiriesIdGet()**](EnquiriesApi.md#enquiriesIdGet) | **GET** /enquiries/{id} | Get a single enquiry by its&#39; unique identifier
[**enquiriesPost()**](EnquiriesApi.md#enquiriesPost) | **POST** /enquiries/ | Create a new enquiry


## `enquiriesGet()`

```php
enquiriesGet($pageSize, $pageNumber, $sortBy, $enquiryType, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015
```

Retrieves a collection of enquiries from prospective vendors, landlords or applicants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\EnquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of enquiries to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified)
$enquiryType = 'enquiryType_example'; // string | Only return enquiries where the `enquiryType` matches this value (salesApplicant/lettingsApplicant/salesProperty/lettingsProperty)
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return enquiries where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return enquiries where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return enquiries where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return enquiries where the `modified` field is on or before the ISO8601 date and time value provided

try {
    $result = $apiInstance->enquiriesGet($pageSize, $pageNumber, $sortBy, $enquiryType, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiriesApi->enquiriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of enquiries to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) | [optional]
 **enquiryType** | **string**| Only return enquiries where the &#x60;enquiryType&#x60; matches this value (salesApplicant/lettingsApplicant/salesProperty/lettingsProperty) | [optional]
 **createdFrom** | **\DateTime**| Only return enquiries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return enquiries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return enquiries where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return enquiries where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enquiriesIdGet()`

```php
enquiriesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015Embedded
```

Get a single enquiry by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\EnquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Unique identifier of the enquiry to return

try {
    $result = $apiInstance->enquiriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiriesApi->enquiriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Unique identifier of the enquiry to return |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20015Embedded**](../Model/InlineResponse20015Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enquiriesPost()`

```php
enquiriesPost($body)
```

Create a new enquiry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\EnquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject18(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject18

try {
    $apiInstance->enquiriesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling EnquiriesApi->enquiriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject18**](../Model/InlineObject18.md)|  | [optional]

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
