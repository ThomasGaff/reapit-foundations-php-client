# NorthernEstateAgencies\ReapitFoundationsClient\JournalEntriesApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalEntriesGet()**](JournalEntriesApi.md#journalEntriesGet) | **GET** /journalEntries/ | Retrieves a collection of journal entries - timestamped events relating to one or more entities
[**journalEntriesPost()**](JournalEntriesApi.md#journalEntriesPost) | **POST** /journalEntries/ | Create a new journal entry event against an entity


## `journalEntriesGet()`

```php
journalEntriesGet($pageSize, $pageNumber, $sortBy, $embed, $associatedType, $associatedId, $negotiatorId, $propertyId, $typeId, $createdFrom, $createdTo): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20017
```

Retrieves a collection of journal entries - timestamped events relating to one or more entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of journal entries to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/typeId)
$embed = array('embed_example'); // string[] | Embed additional resources into the journal entries returned
$associatedType = array('associatedType_example'); // string[] | Only return journal entries where the `AssociatedType` field matches this value
$associatedId = array('associatedId_example'); // string[] | Only return journal entries where the `AssociatedId` field matches one or more values provided
$negotiatorId = array('negotiatorId_example'); // string[] | Only return journal entries where the `NegotiatorId` field matches one or more values provided
$propertyId = array('propertyId_example'); // string[] | Only return journal entries where the `PropertyId` field matches one or more values provided
$typeId = array('typeId_example'); // string[] | Only return journal entries where the `TypeId` field matches one or more values provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return journal entries where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return journal entries where the `created` field is on or before the ISO8601 date and time value provided

try {
    $result = $apiInstance->journalEntriesGet($pageSize, $pageNumber, $sortBy, $embed, $associatedType, $associatedId, $negotiatorId, $propertyId, $typeId, $createdFrom, $createdTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->journalEntriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of journal entries to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/typeId) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the journal entries returned | [optional]
 **associatedType** | [**string[]**](../Model/string.md)| Only return journal entries where the &#x60;AssociatedType&#x60; field matches this value | [optional]
 **associatedId** | [**string[]**](../Model/string.md)| Only return journal entries where the &#x60;AssociatedId&#x60; field matches one or more values provided | [optional]
 **negotiatorId** | [**string[]**](../Model/string.md)| Only return journal entries where the &#x60;NegotiatorId&#x60; field matches one or more values provided | [optional]
 **propertyId** | [**string[]**](../Model/string.md)| Only return journal entries where the &#x60;PropertyId&#x60; field matches one or more values provided | [optional]
 **typeId** | [**string[]**](../Model/string.md)| Only return journal entries where the &#x60;TypeId&#x60; field matches one or more values provided | [optional]
 **createdFrom** | **\DateTime**| Only return journal entries where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return journal entries where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `journalEntriesPost()`

```php
journalEntriesPost($body)
```

Create a new journal entry event against an entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject22(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject22

try {
    $apiInstance->journalEntriesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->journalEntriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject22**](../Model/InlineObject22.md)|  | [optional]

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
