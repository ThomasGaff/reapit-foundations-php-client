# NorthernEstateAgencies\ReapitFoundationsClient\OffersApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfferById()**](OffersApi.md#getOfferById) | **GET** /offers/{id} | Gets a specific offer by unique identifier
[**offersGet()**](OffersApi.md#offersGet) | **GET** /offers/ | Gets a paged collection of offers
[**offersIdPatch()**](OffersApi.md#offersIdPatch) | **PATCH** /offers/{id} | Updates an offer by unique identifier
[**offersPost()**](OffersApi.md#offersPost) | **POST** /offers/ | Creates a new offer


## `getOfferById()`

```php
getOfferById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20025Embedded
```

Gets a specific offer by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the offer
$embed = array('embed_example'); // string[] | Embed additional resources into the offer returned

try {
    $result = $apiInstance->getOfferById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->getOfferById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the offer |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the offer returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20025Embedded**](../Model/InlineResponse20025Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offersGet()`

```php
offersGet($pageSize, $pageNumber, $sortBy, $embed, $id, $applicantId, $propertyId, $status, $address, $name, $amountFrom, $amountTo, $dateFrom, $dateTo, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20025
```

Gets a paged collection of offers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of offers to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/propertyId/applicantId/status/amount)
$embed = array('embed_example'); // string[] | Embed additional resources into the offers returned
$id = array('id_example'); // string[] | Only return offers where the `id` field matches one or more values provided
$applicantId = array('applicantId_example'); // string[] | Only return offers where the `applicantId` field matches one or more values provided
$propertyId = array('propertyId_example'); // string[] | Only return offers where the `propertyId` field matches one or more values provided
$status = array('status_example'); // string[] | Only return offers where the `status` field matches one or more values provided
$address = 'address_example'; // string | Only return offers where the `address` field of a `related` contact matches the value provided
$name = 'name_example'; // string | Only return offers where the `name` field of a `related` contact matches the value provided
$amountFrom = 3.4; // double | Only return offers where the `amount` field is greater than or equal to the value provided
$amountTo = 3.4; // double | Only return offers where the `amount` field is less than or equal to the value provided
$dateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offers where the `date` field is on or after the ISO8601 date value provided
$dateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offers where the `date` field is on or before the ISO8601 date value provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offers where the `created` field is on or after the ISO8601 date value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offers where the `created` field is on or before the ISO8601 date value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offers where the `modified` field is on or after the ISO8601 date value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return offers where the `modified` field is on or before the ISO8601 date value provided
$metadata = array('metadata_example'); // string[] | Only return offers where the metadata matches the filters given

try {
    $result = $apiInstance->offersGet($pageSize, $pageNumber, $sortBy, $embed, $id, $applicantId, $propertyId, $status, $address, $name, $amountFrom, $amountTo, $dateFrom, $dateTo, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of offers to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/propertyId/applicantId/status/amount) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the offers returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return offers where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **applicantId** | [**string[]**](../Model/string.md)| Only return offers where the &#x60;applicantId&#x60; field matches one or more values provided | [optional]
 **propertyId** | [**string[]**](../Model/string.md)| Only return offers where the &#x60;propertyId&#x60; field matches one or more values provided | [optional]
 **status** | [**string[]**](../Model/string.md)| Only return offers where the &#x60;status&#x60; field matches one or more values provided | [optional]
 **address** | **string**| Only return offers where the &#x60;address&#x60; field of a &#x60;related&#x60; contact matches the value provided | [optional]
 **name** | **string**| Only return offers where the &#x60;name&#x60; field of a &#x60;related&#x60; contact matches the value provided | [optional]
 **amountFrom** | **double**| Only return offers where the &#x60;amount&#x60; field is greater than or equal to the value provided | [optional]
 **amountTo** | **double**| Only return offers where the &#x60;amount&#x60; field is less than or equal to the value provided | [optional]
 **dateFrom** | **\DateTime**| Only return offers where the &#x60;date&#x60; field is on or after the ISO8601 date value provided | [optional]
 **dateTo** | **\DateTime**| Only return offers where the &#x60;date&#x60; field is on or before the ISO8601 date value provided | [optional]
 **createdFrom** | **\DateTime**| Only return offers where the &#x60;created&#x60; field is on or after the ISO8601 date value provided | [optional]
 **createdTo** | **\DateTime**| Only return offers where the &#x60;created&#x60; field is on or before the ISO8601 date value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return offers where the &#x60;modified&#x60; field is on or after the ISO8601 date value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return offers where the &#x60;modified&#x60; field is on or before the ISO8601 date value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return offers where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offersIdPatch()`

```php
offersIdPatch($ifMatch, $id, $body)
```

Updates an offer by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier of the offer to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject33(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject33

try {
    $apiInstance->offersIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier of the offer to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject33**](../Model/InlineObject33.md)|  | [optional]

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

## `offersPost()`

```php
offersPost($body)
```

Creates a new offer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject32(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject32

try {
    $apiInstance->offersPost($body);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject32**](../Model/InlineObject32.md)|  | [optional]

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
