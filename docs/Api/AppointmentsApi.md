# NorthernEstateAgencies\ReapitFoundationsClient\AppointmentsApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appointmentsGet()**](AppointmentsApi.md#appointmentsGet) | **GET** /appointments/ | Gets a collection of calendar appointments
[**appointmentsIdPatch()**](AppointmentsApi.md#appointmentsIdPatch) | **PATCH** /appointments/{id} | Updates an appointment in one or more negotiators&#39; diary
[**appointmentsPost()**](AppointmentsApi.md#appointmentsPost) | **POST** /appointments/ | Creates an appointment in one or more negotiators diary
[**getAppointmentById()**](AppointmentsApi.md#getAppointmentById) | **GET** /appointments/{id} | Gets a single calendar appointment by its&#39; unique identifier


## `appointmentsGet()`

```php
appointmentsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $typeId, $negotiatorId, $officeId, $propertyId, $attendeeId, $attendeeType, $start, $end, $includeCancelled, $includeUnconfirmed, $fromArchive, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003
```

Gets a collection of calendar appointments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of appointments to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (start/created/typeId)
$embed = array('embed_example'); // string[] | Embed additional resources into the appointments returned
$id = array('id_example'); // string[] | Only return appointments where the `id` field matches one or more values provided
$typeId = array('typeId_example'); // string[] | Only return appointments where the `typeId` field matches one or more values provided
$negotiatorId = array('negotiatorId_example'); // string[] | Only return appointments where the `negotiatorId` field matches one or more values provided
$officeId = array('officeId_example'); // string[] | Only return appointments where the `officeId` field matches one or more values provided
$propertyId = array('propertyId_example'); // string[] | Only return appointments where the `propertyId` field matches one or more values provided
$attendeeId = array('attendeeId_example'); // string[] | Only return appointments where the `attendee.id` field matches one or more values provided
$attendeeType = array('attendeeType_example'); // string[] | Only return appointments where the `attendee.type` field matches value provided
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return appointments where the `start` field is on or after the ISO8601 date and time value provided
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return appointments where the `end` field is on or before the ISO8601 date and time value provided
$includeCancelled = True; // bool | When true, include cancelled appointments
$includeUnconfirmed = True; // bool | When true, include unconfirmed appointments
$fromArchive = True; // bool | When true, return archived appointments
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return appointments where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return appointments where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return appointments where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return appointments where the `modified` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return appointments where the metadata matches the filters given

try {
    $result = $apiInstance->appointmentsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $typeId, $negotiatorId, $officeId, $propertyId, $attendeeId, $attendeeType, $start, $end, $includeCancelled, $includeUnconfirmed, $fromArchive, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of appointments to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (start/created/typeId) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the appointments returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return appointments where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **typeId** | [**string[]**](../Model/string.md)| Only return appointments where the &#x60;typeId&#x60; field matches one or more values provided | [optional]
 **negotiatorId** | [**string[]**](../Model/string.md)| Only return appointments where the &#x60;negotiatorId&#x60; field matches one or more values provided | [optional]
 **officeId** | [**string[]**](../Model/string.md)| Only return appointments where the &#x60;officeId&#x60; field matches one or more values provided | [optional]
 **propertyId** | [**string[]**](../Model/string.md)| Only return appointments where the &#x60;propertyId&#x60; field matches one or more values provided | [optional]
 **attendeeId** | [**string[]**](../Model/string.md)| Only return appointments where the &#x60;attendee.id&#x60; field matches one or more values provided | [optional]
 **attendeeType** | [**string[]**](../Model/string.md)| Only return appointments where the &#x60;attendee.type&#x60; field matches value provided | [optional]
 **start** | **\DateTime**| Only return appointments where the &#x60;start&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **end** | **\DateTime**| Only return appointments where the &#x60;end&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **includeCancelled** | **bool**| When true, include cancelled appointments | [optional]
 **includeUnconfirmed** | **bool**| When true, include unconfirmed appointments | [optional]
 **fromArchive** | **bool**| When true, return archived appointments | [optional]
 **createdFrom** | **\DateTime**| Only return appointments where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return appointments where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return appointments where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return appointments where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return appointments where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appointmentsIdPatch()`

```php
appointmentsIdPatch($ifMatch, $id, $body)
```

Updates an appointment in one or more negotiators' diary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | Unique appointment identifier
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject6(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject6

try {
    $apiInstance->appointmentsIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| Unique appointment identifier |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject6**](../Model/InlineObject6.md)|  | [optional]

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

## `appointmentsPost()`

```php
appointmentsPost($body)
```

Creates an appointment in one or more negotiators diary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject5(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject5

try {
    $apiInstance->appointmentsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->appointmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject5**](../Model/InlineObject5.md)|  | [optional]

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

## `getAppointmentById()`

```php
getAppointmentById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Embedded
```

Gets a single calendar appointment by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique appointment identifier
$embed = array('embed_example'); // string[] | Embed additional resources into the appointment returned

try {
    $result = $apiInstance->getAppointmentById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->getAppointmentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique appointment identifier |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the appointment returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Embedded**](../Model/InlineResponse2003Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
