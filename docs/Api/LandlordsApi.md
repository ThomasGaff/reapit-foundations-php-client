# NorthernEstateAgencies\ReapitFoundationsClient\LandlordsApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLandlordById()**](LandlordsApi.md#getLandlordById) | **GET** /landlords/{id} | Gets a single landlord by its&#39; unique identifier
[**getLandlordRelationshipById()**](LandlordsApi.md#getLandlordRelationshipById) | **GET** /landlords/{id}/relationships/{relationshipId} | Gets a single relationship between this landlord and a contact/company
[**landlordsGet()**](LandlordsApi.md#landlordsGet) | **GET** /landlords/ | Gets a paged collection of landlords
[**landlordsIdPatch()**](LandlordsApi.md#landlordsIdPatch) | **PATCH** /landlords/{id} | Updates a landlord
[**landlordsIdRelationshipsGet()**](LandlordsApi.md#landlordsIdRelationshipsGet) | **GET** /landlords/{id}/relationships | Gets this landlords contact/company relationships
[**landlordsIdRelationshipsPost()**](LandlordsApi.md#landlordsIdRelationshipsPost) | **POST** /landlords/{id}/relationships | Creates a relationship between this landlord and a contact/company
[**landlordsIdRelationshipsRelationshipIdDelete()**](LandlordsApi.md#landlordsIdRelationshipsRelationshipIdDelete) | **DELETE** /landlords/{id}/relationships/{relationshipId} | Deletes a specific relationship between this landlord and a contact/company
[**landlordsPost()**](LandlordsApi.md#landlordsPost) | **POST** /landlords/ | Creates a new landlord


## `getLandlordById()`

```php
getLandlordById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20018
```

Gets a single landlord by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\LandlordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique landlord identifier
$embed = array('embed_example'); // string[] | Embed additional resources into the landlord returned

try {
    $result = $apiInstance->getLandlordById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandlordsApi->getLandlordById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique landlord identifier |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the landlord returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLandlordRelationshipById()`

```php
getLandlordRelationshipById($id, $relationshipId): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20020Embedded
```

Gets a single relationship between this landlord and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\LandlordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique landlord identifier
$relationshipId = 'relationshipId_example'; // string | Unique relationship identifier

try {
    $result = $apiInstance->getLandlordRelationshipById($id, $relationshipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandlordsApi->getLandlordRelationshipById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique landlord identifier |
 **relationshipId** | **string**| Unique relationship identifier |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20020Embedded**](../Model/InlineResponse20020Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `landlordsGet()`

```php
landlordsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $active, $address, $name, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20019
```

Gets a paged collection of landlords

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\LandlordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of landlords to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified)
$embed = array('embed_example'); // string[] | Embed additional resources into the landlords returned
$id = array('id_example'); // string[] | Only return landlords where the `id` field matches one or more values provided
$active = True; // bool | Only return landlords where the `active` field matches the value provided
$address = 'address_example'; // string | Only return landlords where the `address` field of a `related` contact matches the value provided
$name = 'name_example'; // string | Only return landlords where the `name` field of a `related` contact matches the value provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return landlords where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return landlords where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return landlords where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return landlords where the `modified` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return landlords where the metadata matches the filters given

try {
    $result = $apiInstance->landlordsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $active, $address, $name, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandlordsApi->landlordsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of landlords to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the landlords returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return landlords where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **active** | **bool**| Only return landlords where the &#x60;active&#x60; field matches the value provided | [optional]
 **address** | **string**| Only return landlords where the &#x60;address&#x60; field of a &#x60;related&#x60; contact matches the value provided | [optional]
 **name** | **string**| Only return landlords where the &#x60;name&#x60; field of a &#x60;related&#x60; contact matches the value provided | [optional]
 **createdFrom** | **\DateTime**| Only return landlords where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return landlords where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return landlords where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return landlords where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return landlords where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `landlordsIdPatch()`

```php
landlordsIdPatch($ifMatch, $id, $body)
```

Updates a landlord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\LandlordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | Unique identifier of the landlord to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject23(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject23

try {
    $apiInstance->landlordsIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling LandlordsApi->landlordsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| Unique identifier of the landlord to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject23**](../Model/InlineObject23.md)|  | [optional]

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

## `landlordsIdRelationshipsGet()`

```php
landlordsIdRelationshipsGet($id, $pageSize, $pageNumber): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20020
```

Gets this landlords contact/company relationships

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\LandlordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique landlord identifier
$pageSize = 56; // int | A limit on the number of landlord relationships to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return

try {
    $result = $apiInstance->landlordsIdRelationshipsGet($id, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandlordsApi->landlordsIdRelationshipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique landlord identifier |
 **pageSize** | **int**| A limit on the number of landlord relationships to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `landlordsIdRelationshipsPost()`

```php
landlordsIdRelationshipsPost($id, $body)
```

Creates a relationship between this landlord and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\LandlordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique landlord identifier
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject25(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject25

try {
    $apiInstance->landlordsIdRelationshipsPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling LandlordsApi->landlordsIdRelationshipsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique landlord identifier |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject25**](../Model/InlineObject25.md)|  | [optional]

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

## `landlordsIdRelationshipsRelationshipIdDelete()`

```php
landlordsIdRelationshipsRelationshipIdDelete($id, $relationshipId)
```

Deletes a specific relationship between this landlord and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\LandlordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique landlord identifier
$relationshipId = 'relationshipId_example'; // string | Unique relationship identifier

try {
    $apiInstance->landlordsIdRelationshipsRelationshipIdDelete($id, $relationshipId);
} catch (Exception $e) {
    echo 'Exception when calling LandlordsApi->landlordsIdRelationshipsRelationshipIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique landlord identifier |
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

## `landlordsPost()`

```php
landlordsPost($body)
```

Creates a new landlord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\LandlordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject24(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject24

try {
    $apiInstance->landlordsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling LandlordsApi->landlordsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject24**](../Model/InlineObject24.md)|  | [optional]

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
