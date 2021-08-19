# NorthernEstateAgencies\ReapitFoundationsClient\NegotiatorsApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNegotiatorById()**](NegotiatorsApi.md#getNegotiatorById) | **GET** /negotiators/{id} | Gets a specific negotiator by unique identifier
[**negotiatorsGet()**](NegotiatorsApi.md#negotiatorsGet) | **GET** /negotiators/ | Gets a collection of negotiators matching the filter criteria provided
[**negotiatorsIdPatch()**](NegotiatorsApi.md#negotiatorsIdPatch) | **PATCH** /negotiators/{id} | Updates a negotiator by unique identifier
[**negotiatorsPost()**](NegotiatorsApi.md#negotiatorsPost) | **POST** /negotiators/ | Creates a new negotiator


## `getNegotiatorById()`

```php
getNegotiatorById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20024Embedded
```

Gets a specific negotiator by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\NegotiatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the negotiator
$embed = array('embed_example'); // string[] | Embed additional resources into the negotiator returned

try {
    $result = $apiInstance->getNegotiatorById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiatorsApi->getNegotiatorById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the negotiator |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the negotiator returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20024Embedded**](../Model/InlineResponse20024Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `negotiatorsGet()`

```php
negotiatorsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $officeId, $email, $name, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $active, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20024
```

Gets a collection of negotiators matching the filter criteria provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\NegotiatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of negotiators to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (name/officeId)
$embed = array('embed_example'); // string[] | Embed additional resources into the negotiators returned
$id = array('id_example'); // string[] | Only return negotiators where the `id` field matches one or more values provided
$officeId = array('officeId_example'); // string[] | Only return negotiators where the `officeId` field matches one or more values provided
$email = 'email_example'; // string | Only return negotiators where the `email` field matches the value provided
$name = 'name_example'; // string | Only return negotiators where the `name` field matches the value provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return negotiators where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return negotiators where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return negotiators where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return negotiators where the `modified` field is on or before the ISO8601 date and time value provided
$active = True; // bool | Only return negotiators where the 'active' field matches the value provided
$metadata = array('metadata_example'); // string[] | Only return negotiators where the metadata matches the filters given

try {
    $result = $apiInstance->negotiatorsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $officeId, $email, $name, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $active, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NegotiatorsApi->negotiatorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of negotiators to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (name/officeId) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the negotiators returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return negotiators where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **officeId** | [**string[]**](../Model/string.md)| Only return negotiators where the &#x60;officeId&#x60; field matches one or more values provided | [optional]
 **email** | **string**| Only return negotiators where the &#x60;email&#x60; field matches the value provided | [optional]
 **name** | **string**| Only return negotiators where the &#x60;name&#x60; field matches the value provided | [optional]
 **createdFrom** | **\DateTime**| Only return negotiators where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return negotiators where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return negotiators where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return negotiators where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **active** | **bool**| Only return negotiators where the &#39;active&#39; field matches the value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return negotiators where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `negotiatorsIdPatch()`

```php
negotiatorsIdPatch($ifMatch, $id, $body)
```

Updates a negotiator by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\NegotiatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier of the negotiator to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject31(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject31

try {
    $apiInstance->negotiatorsIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling NegotiatorsApi->negotiatorsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier of the negotiator to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject31**](../Model/InlineObject31.md)|  | [optional]

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

## `negotiatorsPost()`

```php
negotiatorsPost($body)
```

Creates a new negotiator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\NegotiatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject30(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject30

try {
    $apiInstance->negotiatorsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling NegotiatorsApi->negotiatorsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject30**](../Model/InlineObject30.md)|  | [optional]

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
