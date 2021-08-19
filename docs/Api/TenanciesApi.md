# NorthernEstateAgencies\ReapitFoundationsClient\TenanciesApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTenancyRelationshipById()**](TenanciesApi.md#getTenancyRelationshipById) | **GET** /tenancies/{id}/relationships/{relationshipId} | Gets a single relationship between this tenancy and a contact/company
[**tenanciesGet()**](TenanciesApi.md#tenanciesGet) | **GET** /tenancies/ | Retrieves a collection of tenancies
[**tenanciesIdChecksCheckIdDelete()**](TenanciesApi.md#tenanciesIdChecksCheckIdDelete) | **DELETE** /tenancies/{id}/checks/{checkId} | Deletes an existing tenancy check
[**tenanciesIdChecksCheckIdGet()**](TenanciesApi.md#tenanciesIdChecksCheckIdGet) | **GET** /tenancies/{id}/checks/{checkId} | Retrieves a specific tenancy check
[**tenanciesIdChecksCheckIdPatch()**](TenanciesApi.md#tenanciesIdChecksCheckIdPatch) | **PATCH** /tenancies/{id}/checks/{checkId} | Updates an existing tenancy check
[**tenanciesIdChecksGet()**](TenanciesApi.md#tenanciesIdChecksGet) | **GET** /tenancies/{id}/checks | Retrieves the pre and post tenancy checks associated to a tenancy
[**tenanciesIdChecksPost()**](TenanciesApi.md#tenanciesIdChecksPost) | **POST** /tenancies/{id}/checks | Creates a new tenancy check
[**tenanciesIdGet()**](TenanciesApi.md#tenanciesIdGet) | **GET** /tenancies/{id} | Retrieves a specific tenancy
[**tenanciesIdPatch()**](TenanciesApi.md#tenanciesIdPatch) | **PATCH** /tenancies/{id} | Updates a tenancy by unique identifier
[**tenanciesIdRelationshipsGet()**](TenanciesApi.md#tenanciesIdRelationshipsGet) | **GET** /tenancies/{id}/relationships | Retrieves the relationship details of the contacts and/or companies associated as tenants
[**tenanciesPost()**](TenanciesApi.md#tenanciesPost) | **POST** /tenancies/ | Creates a new pending tenancy


## `getTenancyRelationshipById()`

```php
getTenancyRelationshipById($id, $relationshipId): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20034Embedded
```

Gets a single relationship between this tenancy and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique tenancy identifier
$relationshipId = 'relationshipId_example'; // string | Unique relationship identifier

try {
    $result = $apiInstance->getTenancyRelationshipById($id, $relationshipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->getTenancyRelationshipById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique tenancy identifier |
 **relationshipId** | **string**| Unique relationship identifier |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20034Embedded**](../Model/InlineResponse20034Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenanciesGet()`

```php
tenanciesGet($pageSize, $pageNumber, $sortBy, $fromArchive, $embed, $id, $negotiatorId, $applicantId, $propertyId, $status, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20033
```

Retrieves a collection of tenancies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of tenancies to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified)
$fromArchive = True; // bool | Only return tenancies where the `fromArchive` field matches the value given
$embed = array('embed_example'); // string[] | Embed additional resources into the tenancies returned
$id = array('id_example'); // string[] | Only return tenancies where the `id` field matches one or more values provided
$negotiatorId = array('negotiatorId_example'); // string[] | Only return tenancies where the `negotiatorId` field matches one or more values provided
$applicantId = array('applicantId_example'); // string[] | Only return tenancies where the `applicantId` field matches one or more values provided
$propertyId = array('propertyId_example'); // string[] | Only return tenancies where the `propertyId` field matches one or more values provided
$status = array('status_example'); // string[] | Only return tenancies where the `status` field matches one or more values provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tenancies where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tenancies where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tenancies where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tenancies where the `modified` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return tenancies where the metadata matches the filters given

try {
    $result = $apiInstance->tenanciesGet($pageSize, $pageNumber, $sortBy, $fromArchive, $embed, $id, $negotiatorId, $applicantId, $propertyId, $status, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of tenancies to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) | [optional]
 **fromArchive** | **bool**| Only return tenancies where the &#x60;fromArchive&#x60; field matches the value given | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the tenancies returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return tenancies where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **negotiatorId** | [**string[]**](../Model/string.md)| Only return tenancies where the &#x60;negotiatorId&#x60; field matches one or more values provided | [optional]
 **applicantId** | [**string[]**](../Model/string.md)| Only return tenancies where the &#x60;applicantId&#x60; field matches one or more values provided | [optional]
 **propertyId** | [**string[]**](../Model/string.md)| Only return tenancies where the &#x60;propertyId&#x60; field matches one or more values provided | [optional]
 **status** | [**string[]**](../Model/string.md)| Only return tenancies where the &#x60;status&#x60; field matches one or more values provided | [optional]
 **createdFrom** | **\DateTime**| Only return tenancies where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return tenancies where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return tenancies where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return tenancies where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return tenancies where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenanciesIdChecksCheckIdDelete()`

```php
tenanciesIdChecksCheckIdDelete($id, $checkId)
```

Deletes an existing tenancy check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the tenancy that owns the tenancy check
$checkId = 'checkId_example'; // string | Unique identifier of the tenancy check to delete

try {
    $apiInstance->tenanciesIdChecksCheckIdDelete($id, $checkId);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesIdChecksCheckIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the tenancy that owns the tenancy check |
 **checkId** | **string**| Unique identifier of the tenancy check to delete |

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

## `tenanciesIdChecksCheckIdGet()`

```php
tenanciesIdChecksCheckIdGet($id, $checkId): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20035Embedded
```

Retrieves a specific tenancy check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique tenancy identifier
$checkId = 'checkId_example'; // string | Unique tenancy check identifier

try {
    $result = $apiInstance->tenanciesIdChecksCheckIdGet($id, $checkId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesIdChecksCheckIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique tenancy identifier |
 **checkId** | **string**| Unique tenancy check identifier |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20035Embedded**](../Model/InlineResponse20035Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenanciesIdChecksCheckIdPatch()`

```php
tenanciesIdChecksCheckIdPatch($ifMatch, $id, $checkId, $body)
```

Updates an existing tenancy check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | Unique identifier of the tenancy that owns the tenancy check
$checkId = 'checkId_example'; // string | Unique identifier of the tenancy check to update
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject52(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject52

try {
    $apiInstance->tenanciesIdChecksCheckIdPatch($ifMatch, $id, $checkId, $body);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesIdChecksCheckIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| Unique identifier of the tenancy that owns the tenancy check |
 **checkId** | **string**| Unique identifier of the tenancy check to update |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject52**](../Model/InlineObject52.md)|  | [optional]

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

## `tenanciesIdChecksGet()`

```php
tenanciesIdChecksGet($id, $pageSize, $pageNumber): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20035
```

Retrieves the pre and post tenancy checks associated to a tenancy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique tenancy identifier
$pageSize = 56; // int | A limit on the number of tenancy checks to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return

try {
    $result = $apiInstance->tenanciesIdChecksGet($id, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesIdChecksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique tenancy identifier |
 **pageSize** | **int**| A limit on the number of tenancy checks to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenanciesIdChecksPost()`

```php
tenanciesIdChecksPost($id, $body)
```

Creates a new tenancy check

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique tenancy identifier
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject51(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject51

try {
    $apiInstance->tenanciesIdChecksPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesIdChecksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique tenancy identifier |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject51**](../Model/InlineObject51.md)|  | [optional]

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

## `tenanciesIdGet()`

```php
tenanciesIdGet($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20033Embedded
```

Retrieves a specific tenancy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the tenancy to return
$embed = array('embed_example'); // string[] | Embed additional resources into the tenancy returned

try {
    $result = $apiInstance->tenanciesIdGet($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the tenancy to return |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the tenancy returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20033Embedded**](../Model/InlineResponse20033Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenanciesIdPatch()`

```php
tenanciesIdPatch($ifMatch, $id, $body)
```

Updates a tenancy by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier for the tenacy to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject50(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject50

try {
    $apiInstance->tenanciesIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier for the tenacy to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject50**](../Model/InlineObject50.md)|  | [optional]

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

## `tenanciesIdRelationshipsGet()`

```php
tenanciesIdRelationshipsGet($id, $pageSize, $pageNumber): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20034
```

Retrieves the relationship details of the contacts and/or companies associated as tenants

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique tenancy identifier
$pageSize = 56; // int | A limit on the number of tenant relationships to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return

try {
    $result = $apiInstance->tenanciesIdRelationshipsGet($id, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesIdRelationshipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique tenancy identifier |
 **pageSize** | **int**| A limit on the number of tenant relationships to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenanciesPost()`

```php
tenanciesPost($body)
```

Creates a new pending tenancy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TenanciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject49(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject49

try {
    $apiInstance->tenanciesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling TenanciesApi->tenanciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject49**](../Model/InlineObject49.md)|  | [optional]

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
