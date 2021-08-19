# NorthernEstateAgencies\ReapitFoundationsClient\IdentityChecksApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getIdCheckById()**](IdentityChecksApi.md#getIdCheckById) | **GET** /identityChecks/{id} | Retrieves details of a specific identity check
[**identityChecksGet()**](IdentityChecksApi.md#identityChecksGet) | **GET** /identityChecks/ | Retrieves a collection of identity checks
[**identityChecksIdPatch()**](IdentityChecksApi.md#identityChecksIdPatch) | **PATCH** /identityChecks/{id} | Updates an identity check
[**identityChecksPost()**](IdentityChecksApi.md#identityChecksPost) | **POST** /identityChecks/ | Create a new identity check
[**identityChecksSignedUrlPost()**](IdentityChecksApi.md#identityChecksSignedUrlPost) | **POST** /identityChecks/signedUrl | Creates pre signed urls used for uploading documents between 6MB and 30MB


## `getIdCheckById()`

```php
getIdCheckById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20016Embedded
```

Retrieves details of a specific identity check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\IdentityChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identity checks unique identifier
$embed = array('embed_example'); // string[] | Embed additional resources into the identity check returned

try {
    $result = $apiInstance->getIdCheckById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityChecksApi->getIdCheckById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identity checks unique identifier |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the identity check returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20016Embedded**](../Model/InlineResponse20016Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityChecksGet()`

```php
identityChecksGet($pageSize, $pageNumber, $sortBy, $embed, $id, $contactId, $negotiatorId, $status, $checkDateFrom, $checkDateTo, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20016
```

Retrieves a collection of identity checks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\IdentityChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of identity checks to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified)
$embed = array('embed_example'); // string[] | Embed additional resources into the identity checks returned
$id = array('id_example'); // string[] | Only return identity checks where the `id` field matches one or more values provided
$contactId = array('contactId_example'); // string[] | Only return identity checks where the `contactId` field matches one or more values provided
$negotiatorId = array('negotiatorId_example'); // string[] | Only return identity checks where the `negotiatorId` field matches one or more values provided
$status = array('status_example'); // string[] | Only return identity checks where the `status` field matches one or more values provided.
$checkDateFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return identity checks where the `checkDate` field is on or after the ISO8601 date and time value provided
$checkDateTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return identity checks where the `checkDate` field is on or before the ISO8601 date and time value provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return identity checks where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return identity checks where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return identity checks where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return identity checks where the `modified` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return identity checks where the metadata matches the filters given

try {
    $result = $apiInstance->identityChecksGet($pageSize, $pageNumber, $sortBy, $embed, $id, $contactId, $negotiatorId, $status, $checkDateFrom, $checkDateTo, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityChecksApi->identityChecksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of identity checks to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the identity checks returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return identity checks where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **contactId** | [**string[]**](../Model/string.md)| Only return identity checks where the &#x60;contactId&#x60; field matches one or more values provided | [optional]
 **negotiatorId** | [**string[]**](../Model/string.md)| Only return identity checks where the &#x60;negotiatorId&#x60; field matches one or more values provided | [optional]
 **status** | [**string[]**](../Model/string.md)| Only return identity checks where the &#x60;status&#x60; field matches one or more values provided. | [optional]
 **checkDateFrom** | **\DateTime**| Only return identity checks where the &#x60;checkDate&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **checkDateTo** | **\DateTime**| Only return identity checks where the &#x60;checkDate&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **createdFrom** | **\DateTime**| Only return identity checks where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return identity checks where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return identity checks where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return identity checks where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return identity checks where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityChecksIdPatch()`

```php
identityChecksIdPatch($ifMatch, $id, $body)
```

Updates an identity check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\IdentityChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The identification check id
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject20(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject20

try {
    $apiInstance->identityChecksIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling IdentityChecksApi->identityChecksIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The identification check id |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject20**](../Model/InlineObject20.md)|  | [optional]

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

## `identityChecksPost()`

```php
identityChecksPost($body)
```

Create a new identity check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\IdentityChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject19(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject19

try {
    $apiInstance->identityChecksPost($body);
} catch (Exception $e) {
    echo 'Exception when calling IdentityChecksApi->identityChecksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject19**](../Model/InlineObject19.md)|  | [optional]

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

## `identityChecksSignedUrlPost()`

```php
identityChecksSignedUrlPost($body): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject21
```

Creates pre signed urls used for uploading documents between 6MB and 30MB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\IdentityChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject21(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject21

try {
    $result = $apiInstance->identityChecksSignedUrlPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityChecksApi->identityChecksSignedUrlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject21**](../Model/InlineObject21.md)|  | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject21**](../Model/InlineObject21.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/_*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
