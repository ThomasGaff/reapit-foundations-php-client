# NorthernEstateAgencies\ReapitFoundationsClient\TasksApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTaskById()**](TasksApi.md#getTaskById) | **GET** /tasks/{id} | Retrieves a specific task
[**getTasks()**](TasksApi.md#getTasks) | **GET** /tasks/ | Retrieves a collection of tasks
[**tasksIdPatch()**](TasksApi.md#tasksIdPatch) | **PATCH** /tasks/{id} | Updates a task by its unique identifier
[**tasksPost()**](TasksApi.md#tasksPost) | **POST** /tasks/ | Creates a new task


## `getTaskById()`

```php
getTaskById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20032Embedded
```

Retrieves a specific task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the task to return
$embed = array('embed_example'); // string[] | Embed additional resources into the task returned

try {
    $result = $apiInstance->getTaskById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTaskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the task to return |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the task returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20032Embedded**](../Model/InlineResponse20032Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTasks()`

```php
getTasks($pageSize, $pageNumber, $sortBy, $embed, $id, $applicantId, $contactId, $landlordId, $officeId, $propertyId, $recipientId, $senderId, $typeId, $tenancyId, $activatesFrom, $activatesTo, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20032
```

Retrieves a collection of tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of tasks to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/typeId/activates/senderId)
$embed = array('embed_example'); // string[] | Embed additional resources into the tasks returned
$id = array('id_example'); // string[] | Only return tasks where the `id` field matches one or more values provided
$applicantId = array('applicantId_example'); // string[] | Only return tasks where the `applicantId` field matches one or more values provided
$contactId = array('contactId_example'); // string[] | Only return tasks where the `contactId` field matches one or more values provided
$landlordId = array('landlordId_example'); // string[] | Only return tasks where the `landlordId` field matches one or more values provided
$officeId = array('officeId_example'); // string[] | Only return tasks where the `officeId` field matches one or more values provided
$propertyId = array('propertyId_example'); // string[] | Only return tasks where the `propertyId` field matches one or more values provided
$recipientId = array('recipientId_example'); // string[] | Only return tasks where the `recipientId` field matches one or more values provided
$senderId = array('senderId_example'); // string[] | Only return tasks where the `senderId` field matches one or more values provided
$typeId = array('typeId_example'); // string[] | Only return tasks where the `typeId` field matches one or more values provided
$tenancyId = array('tenancyId_example'); // string[] | Only return tasks where the `tenancyId` field matches one or more values provided
$activatesFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tasks where the `activates` field is on or after the ISO8601 date and time value provided
$activatesTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tasks where the `activates` field is on or before the ISO8601 date and time value provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tasks where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tasks where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tasks where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return tasks where the `modified` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return tasks where the metadata matches the filters given

try {
    $result = $apiInstance->getTasks($pageSize, $pageNumber, $sortBy, $embed, $id, $applicantId, $contactId, $landlordId, $officeId, $propertyId, $recipientId, $senderId, $typeId, $tenancyId, $activatesFrom, $activatesTo, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of tasks to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/typeId/activates/senderId) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the tasks returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **applicantId** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;applicantId&#x60; field matches one or more values provided | [optional]
 **contactId** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;contactId&#x60; field matches one or more values provided | [optional]
 **landlordId** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;landlordId&#x60; field matches one or more values provided | [optional]
 **officeId** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;officeId&#x60; field matches one or more values provided | [optional]
 **propertyId** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;propertyId&#x60; field matches one or more values provided | [optional]
 **recipientId** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;recipientId&#x60; field matches one or more values provided | [optional]
 **senderId** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;senderId&#x60; field matches one or more values provided | [optional]
 **typeId** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;typeId&#x60; field matches one or more values provided | [optional]
 **tenancyId** | [**string[]**](../Model/string.md)| Only return tasks where the &#x60;tenancyId&#x60; field matches one or more values provided | [optional]
 **activatesFrom** | **\DateTime**| Only return tasks where the &#x60;activates&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **activatesTo** | **\DateTime**| Only return tasks where the &#x60;activates&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **createdFrom** | **\DateTime**| Only return tasks where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return tasks where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return tasks where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return tasks where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return tasks where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksIdPatch()`

```php
tasksIdPatch($ifMatch, $id, $body)
```

Updates a task by its unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier of the task to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject48(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject48

try {
    $apiInstance->tasksIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier of the task to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject48**](../Model/InlineObject48.md)|  | [optional]

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

## `tasksPost()`

```php
tasksPost($body)
```

Creates a new task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject47(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject47

try {
    $apiInstance->tasksPost($body);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject47**](../Model/InlineObject47.md)|  | [optional]

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
