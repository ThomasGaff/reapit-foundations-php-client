# NorthernEstateAgencies\ReapitFoundationsClient\ApplicantsApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicantsGet()**](ApplicantsApi.md#applicantsGet) | **GET** /applicants/ | Gets a collection of applicants matching the filter criteria provided
[**applicantsIdPatch()**](ApplicantsApi.md#applicantsIdPatch) | **PATCH** /applicants/{id} | Updates an applicant
[**applicantsIdRelationshipsGet()**](ApplicantsApi.md#applicantsIdRelationshipsGet) | **GET** /applicants/{id}/relationships | Gets this applicants contact/company relationships
[**applicantsIdRelationshipsPost()**](ApplicantsApi.md#applicantsIdRelationshipsPost) | **POST** /applicants/{id}/relationships | Creates a relationship between this applicant and a contact/company
[**applicantsIdRelationshipsRelationshipIdDelete()**](ApplicantsApi.md#applicantsIdRelationshipsRelationshipIdDelete) | **DELETE** /applicants/{id}/relationships/{relationshipId} | Deletes a specific relationship between this applicant and a contact/company
[**applicantsPost()**](ApplicantsApi.md#applicantsPost) | **POST** /applicants/ | Creates a new applicant
[**getApplicantById()**](ApplicantsApi.md#getApplicantById) | **GET** /applicants/{id} | Gets a single applicant by its&#39; unique identifier
[**getApplicantRelationshipById()**](ApplicantsApi.md#getApplicantRelationshipById) | **GET** /applicants/{id}/relationships/{relationshipId} | Gets a single relationship between this applicant and a contact/company


## `applicantsGet()`

```php
applicantsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $age, $emailAddresses, $furnishing, $locality, $negotiatorId, $officeId, $parking, $situation, $style, $type, $address, $departmentId, $marketingMode, $name, $priceFrom, $priceTo, $rentFrom, $rentTo, $rentFrequency, $bedroomsFrom, $bedroomsTo, $active, $fromArchive, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $lastCallFrom, $lastCallTo, $nextCallFrom, $nextCallTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200
```

Gets a collection of applicants matching the filter criteria provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of applicants to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/nextCall/lastCall)
$embed = array('embed_example'); // string[] | Embed additional resources into the applicants returned
$id = array('id_example'); // string[] | Only return applicants where the `id` field matches one or more values provided
$age = array('age_example'); // string[] | Only return applicants where the `age` field contains one or more values provided
$emailAddresses = array('emailAddresses_example'); // string[] | Only return applicants where the `email` field matches one or more values provided
$furnishing = array('furnishing_example'); // string[] | Only return appliants where the `furnishing` field contains one or more values provided. Only applicable when marketingMode is renting
$locality = array('locality_example'); // string[] | Only return applicants where the `locality` field contains one or more values provided
$negotiatorId = array('negotiatorId_example'); // string[] | Only return applicants where the `negotiatorId` field matches one or more values provided
$officeId = array('officeId_example'); // string[] | Only return applicants where the `officeId` field matches one or more values provided
$parking = array('parking_example'); // string[] | Only return applicants where the `parking` field contains one or more values provided
$situation = array('situation_example'); // string[] | Only return applicants where the `situation` field contains one or more values provided
$style = array('style_example'); // string[] | Only return applicants where the `style` field contains one or more values provided
$type = array('type_example'); // string[] | Only return applicants where the `type` field contains one or more values provided
$address = 'address_example'; // string | Only return applicants where the `address` field matches the value provided
$departmentId = 'departmentId_example'; // string | Only return applicants where the `departmentId` field matches the value provided
$marketingMode = array('marketingMode_example'); // string[] | Only return applicants where the `marketingMode` field matches the value provided
$name = 'name_example'; // string | Only return applicants where the `name` field matches the value provided
$priceFrom = 56; // int | Only return applicants where the `buying.priceFrom` field is more than or equal to the value provided
$priceTo = 56; // int | Only return applicants where the `buying.priceTo` field is less than or equal to the value provided
$rentFrom = 3.4; // double | Only return applicants where the `renting.rentFrom` field is more than or equal to the value provided
$rentTo = 3.4; // double | Only return applicants where the `renting.rentTo` field is less than or equal to the value provided
$rentFrequency = array('rentFrequency_example'); // string[] | The rent collection frequency that 'rentFrom' and 'rentTo' parameters are in relation to. Defaults to monthly.
$bedroomsFrom = 56; // int | Only return applicants where the `bedrooms` field is more than or equal to the value provided
$bedroomsTo = 56; // int | Only return applicants where the `bedrooms` field is less than or equal to the value provided
$active = True; // bool | Only return applicants where the `active` field matches the value provided
$fromArchive = True; // bool | Only return applicants where the `fromArchive` field matches the value provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `modified` field is on or before the ISO8601 date and time value provided
$lastCallFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `lastCall` field is on or after the ISO8601 date and time value provided
$lastCallTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `lastCall` field is on or before the ISO8601 date and time value provided
$nextCallFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `nextCall` field is on or after the ISO8601 date and time value provided
$nextCallTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `nextCall` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return applicants where the metadata matches the filters given

try {
    $result = $apiInstance->applicantsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $age, $emailAddresses, $furnishing, $locality, $negotiatorId, $officeId, $parking, $situation, $style, $type, $address, $departmentId, $marketingMode, $name, $priceFrom, $priceTo, $rentFrom, $rentTo, $rentFrequency, $bedroomsFrom, $bedroomsTo, $active, $fromArchive, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $lastCallFrom, $lastCallTo, $nextCallFrom, $nextCallTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->applicantsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of applicants to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/nextCall/lastCall) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the applicants returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **age** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;age&#x60; field contains one or more values provided | [optional]
 **emailAddresses** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;email&#x60; field matches one or more values provided | [optional]
 **furnishing** | [**string[]**](../Model/string.md)| Only return appliants where the &#x60;furnishing&#x60; field contains one or more values provided. Only applicable when marketingMode is renting | [optional]
 **locality** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;locality&#x60; field contains one or more values provided | [optional]
 **negotiatorId** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;negotiatorId&#x60; field matches one or more values provided | [optional]
 **officeId** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;officeId&#x60; field matches one or more values provided | [optional]
 **parking** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;parking&#x60; field contains one or more values provided | [optional]
 **situation** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;situation&#x60; field contains one or more values provided | [optional]
 **style** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;style&#x60; field contains one or more values provided | [optional]
 **type** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;type&#x60; field contains one or more values provided | [optional]
 **address** | **string**| Only return applicants where the &#x60;address&#x60; field matches the value provided | [optional]
 **departmentId** | **string**| Only return applicants where the &#x60;departmentId&#x60; field matches the value provided | [optional]
 **marketingMode** | [**string[]**](../Model/string.md)| Only return applicants where the &#x60;marketingMode&#x60; field matches the value provided | [optional]
 **name** | **string**| Only return applicants where the &#x60;name&#x60; field matches the value provided | [optional]
 **priceFrom** | **int**| Only return applicants where the &#x60;buying.priceFrom&#x60; field is more than or equal to the value provided | [optional]
 **priceTo** | **int**| Only return applicants where the &#x60;buying.priceTo&#x60; field is less than or equal to the value provided | [optional]
 **rentFrom** | **double**| Only return applicants where the &#x60;renting.rentFrom&#x60; field is more than or equal to the value provided | [optional]
 **rentTo** | **double**| Only return applicants where the &#x60;renting.rentTo&#x60; field is less than or equal to the value provided | [optional]
 **rentFrequency** | [**string[]**](../Model/string.md)| The rent collection frequency that &#39;rentFrom&#39; and &#39;rentTo&#39; parameters are in relation to. Defaults to monthly. | [optional]
 **bedroomsFrom** | **int**| Only return applicants where the &#x60;bedrooms&#x60; field is more than or equal to the value provided | [optional]
 **bedroomsTo** | **int**| Only return applicants where the &#x60;bedrooms&#x60; field is less than or equal to the value provided | [optional]
 **active** | **bool**| Only return applicants where the &#x60;active&#x60; field matches the value provided | [optional]
 **fromArchive** | **bool**| Only return applicants where the &#x60;fromArchive&#x60; field matches the value provided | [optional]
 **createdFrom** | **\DateTime**| Only return applicants where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return applicants where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return applicants where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return applicants where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **lastCallFrom** | **\DateTime**| Only return applicants where the &#x60;lastCall&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **lastCallTo** | **\DateTime**| Only return applicants where the &#x60;lastCall&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **nextCallFrom** | **\DateTime**| Only return applicants where the &#x60;nextCall&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **nextCallTo** | **\DateTime**| Only return applicants where the &#x60;nextCall&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return applicants where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicantsIdPatch()`

```php
applicantsIdPatch($ifMatch, $id, $body)
```

Updates an applicant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | Unique identifier of the applicant to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject1(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject1

try {
    $apiInstance->applicantsIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->applicantsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| Unique identifier of the applicant to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

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

## `applicantsIdRelationshipsGet()`

```php
applicantsIdRelationshipsGet($id, $pageSize, $pageNumber): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2001
```

Gets this applicants contact/company relationships

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique applicant identifier
$pageSize = 56; // int | A limit on the number of applicant relationships to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return

try {
    $result = $apiInstance->applicantsIdRelationshipsGet($id, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->applicantsIdRelationshipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique applicant identifier |
 **pageSize** | **int**| A limit on the number of applicant relationships to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicantsIdRelationshipsPost()`

```php
applicantsIdRelationshipsPost($id, $body)
```

Creates a relationship between this applicant and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique applicant identifier
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject2(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject2

try {
    $apiInstance->applicantsIdRelationshipsPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->applicantsIdRelationshipsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique applicant identifier |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

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

## `applicantsIdRelationshipsRelationshipIdDelete()`

```php
applicantsIdRelationshipsRelationshipIdDelete($id, $relationshipId)
```

Deletes a specific relationship between this applicant and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique applicant identifier
$relationshipId = 'relationshipId_example'; // string | Unique relationship identifier

try {
    $apiInstance->applicantsIdRelationshipsRelationshipIdDelete($id, $relationshipId);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->applicantsIdRelationshipsRelationshipIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique applicant identifier |
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

## `applicantsPost()`

```php
applicantsPost($body)
```

Creates a new applicant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject

try {
    $apiInstance->applicantsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->applicantsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

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

## `getApplicantById()`

```php
getApplicantById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Embedded
```

Gets a single applicant by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique applicant identifier
$embed = array('embed_example'); // string[] | Embed additional resources into the applicant returned

try {
    $result = $apiInstance->getApplicantById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->getApplicantById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique applicant identifier |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the applicant returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Embedded**](../Model/InlineResponse200Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicantRelationshipById()`

```php
getApplicantRelationshipById($id, $relationshipId): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2001Embedded
```

Gets a single relationship between this applicant and a contact/company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique applicant identifier
$relationshipId = 'relationshipId_example'; // string | Unique relationship identifier

try {
    $result = $apiInstance->getApplicantRelationshipById($id, $relationshipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->getApplicantRelationshipById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique applicant identifier |
 **relationshipId** | **string**| Unique relationship identifier |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2001Embedded**](../Model/InlineResponse2001Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
