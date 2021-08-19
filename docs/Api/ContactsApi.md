# NorthernEstateAgencies\ReapitFoundationsClient\ContactsApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactsGet()**](ContactsApi.md#contactsGet) | **GET** /contacts/ | Retrieve a collection of contacts
[**contactsIdPatch()**](ContactsApi.md#contactsIdPatch) | **PATCH** /contacts/{id} | Update a contact
[**contactsIdRelationshipsGet()**](ContactsApi.md#contactsIdRelationshipsGet) | **GET** /contacts/{id}/relationships | Retrieve details of the roles/relationships for a specific contact
[**contactsIdSubscriptionsGet()**](ContactsApi.md#contactsIdSubscriptionsGet) | **GET** /contacts/{id}/subscriptions | Retrieve details of any mailing and/or event subscriptions for a specific contact
[**contactsIdSubscriptionsSubscriptionIdGet()**](ContactsApi.md#contactsIdSubscriptionsSubscriptionIdGet) | **GET** /contacts/{id}/subscriptions/{subscriptionId} | Retrieve details of a specific mailing or event subscription for a specific contact
[**contactsIdSubscriptionsSubscriptionIdPut()**](ContactsApi.md#contactsIdSubscriptionsSubscriptionIdPut) | **PUT** /contacts/{id}/subscriptions/{subscriptionId} | Updates the details of a specific mailing or event subscription for a specific contact
[**contactsPost()**](ContactsApi.md#contactsPost) | **POST** /contacts/ | Create a new contact
[**getContactById()**](ContactsApi.md#getContactById) | **GET** /contacts/{id} | Retrieve a specific contact


## `contactsGet()`

```php
contactsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $email, $negotiatorId, $officeId, $address, $identityCheck, $name, $marketingConsent, $active, $fromArchive, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009
```

Retrieve a collection of contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of contacts to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/name/address)
$embed = array('embed_example'); // string[] | Embed additional resources into the contacts returned
$id = array('id_example'); // string[] | Only return contacts where the `id` field matches one or more values provided
$email = array('email_example'); // string[] | Only return contacts where the `email` field matches one or more values provided
$negotiatorId = array('negotiatorId_example'); // string[] | Only return contacts where the `negotiatorId` field matches one or more values provided
$officeId = array('officeId_example'); // string[] | Only return contacts where the `officeId` field matches one or more values provided
$address = 'address_example'; // string | Only return contacts where the `primaryAddress` field matches the value provided
$identityCheck = array('identityCheck_example'); // string[] | Only return contacts where the `identityCheck` field matches the value provided
$name = 'name_example'; // string | Only return contacts where the `title`, `forename` and/or `surname` field matches the value provided
$marketingConsent = array('marketingConsent_example'); // string[] | Only return contacts where the `marketingConsent` field matches the value provided
$active = True; // bool | Only return contacts where the `active` field matches the value provided
$fromArchive = True; // bool | Only return contacts where the `fromArchive` field matches the value given
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return contacts where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return contacts where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return contacts where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return contacts where the `modified` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return contacts where the metadata matches the filters given

try {
    $result = $apiInstance->contactsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $email, $negotiatorId, $officeId, $address, $identityCheck, $name, $marketingConsent, $active, $fromArchive, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of contacts to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/name/address) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the contacts returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return contacts where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **email** | [**string[]**](../Model/string.md)| Only return contacts where the &#x60;email&#x60; field matches one or more values provided | [optional]
 **negotiatorId** | [**string[]**](../Model/string.md)| Only return contacts where the &#x60;negotiatorId&#x60; field matches one or more values provided | [optional]
 **officeId** | [**string[]**](../Model/string.md)| Only return contacts where the &#x60;officeId&#x60; field matches one or more values provided | [optional]
 **address** | **string**| Only return contacts where the &#x60;primaryAddress&#x60; field matches the value provided | [optional]
 **identityCheck** | [**string[]**](../Model/string.md)| Only return contacts where the &#x60;identityCheck&#x60; field matches the value provided | [optional]
 **name** | **string**| Only return contacts where the &#x60;title&#x60;, &#x60;forename&#x60; and/or &#x60;surname&#x60; field matches the value provided | [optional]
 **marketingConsent** | [**string[]**](../Model/string.md)| Only return contacts where the &#x60;marketingConsent&#x60; field matches the value provided | [optional]
 **active** | **bool**| Only return contacts where the &#x60;active&#x60; field matches the value provided | [optional]
 **fromArchive** | **bool**| Only return contacts where the &#x60;fromArchive&#x60; field matches the value given | [optional]
 **createdFrom** | **\DateTime**| Only return contacts where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return contacts where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return contacts where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return contacts where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return contacts where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsIdPatch()`

```php
contactsIdPatch($ifMatch, $id, $body)
```

Update a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier for the contact to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject10(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject10

try {
    $apiInstance->contactsIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier for the contact to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject10**](../Model/InlineObject10.md)|  | [optional]

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

## `contactsIdRelationshipsGet()`

```php
contactsIdRelationshipsGet($id, $pageSize, $pageNumber): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20010
```

Retrieve details of the roles/relationships for a specific contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the contact
$pageSize = 56; // int | A limit on the number of contacts to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return

try {
    $result = $apiInstance->contactsIdRelationshipsGet($id, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdRelationshipsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the contact |
 **pageSize** | **int**| A limit on the number of contacts to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsIdSubscriptionsGet()`

```php
contactsIdSubscriptionsGet($id, $pageSize, $pageNumber, $type, $status): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20011
```

Retrieve details of any mailing and/or event subscriptions for a specific contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the contact
$pageSize = 56; // int | A limit on the number of subscriptions to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return
$type = 'type_example'; // string | Only fetch contact subscriptions where the `type` field matches the value provided
$status = 'status_example'; // string | Only fetch contact subscriptions where the `status` field matches the value provided (subscribed/unsubscribed)

try {
    $result = $apiInstance->contactsIdSubscriptionsGet($id, $pageSize, $pageNumber, $type, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdSubscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the contact |
 **pageSize** | **int**| A limit on the number of subscriptions to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]
 **type** | **string**| Only fetch contact subscriptions where the &#x60;type&#x60; field matches the value provided | [optional]
 **status** | **string**| Only fetch contact subscriptions where the &#x60;status&#x60; field matches the value provided (subscribed/unsubscribed) | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsIdSubscriptionsSubscriptionIdGet()`

```php
contactsIdSubscriptionsSubscriptionIdGet($id, $subscriptionId): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20011Embedded
```

Retrieve details of a specific mailing or event subscription for a specific contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the contact
$subscriptionId = 'subscriptionId_example'; // string | The id of the subscription to fetch

try {
    $result = $apiInstance->contactsIdSubscriptionsSubscriptionIdGet($id, $subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdSubscriptionsSubscriptionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the contact |
 **subscriptionId** | **string**| The id of the subscription to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20011Embedded**](../Model/InlineResponse20011Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contactsIdSubscriptionsSubscriptionIdPut()`

```php
contactsIdSubscriptionsSubscriptionIdPut($id, $subscriptionId, $body)
```

Updates the details of a specific mailing or event subscription for a specific contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the contact
$subscriptionId = 'subscriptionId_example'; // string | The id of the subscription to update
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject11(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject11

try {
    $apiInstance->contactsIdSubscriptionsSubscriptionIdPut($id, $subscriptionId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsIdSubscriptionsSubscriptionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the contact |
 **subscriptionId** | **string**| The id of the subscription to update |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject11**](../Model/InlineObject11.md)|  | [optional]

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

## `contactsPost()`

```php
contactsPost($body)
```

Create a new contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject9(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject9

try {
    $apiInstance->contactsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->contactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject9**](../Model/InlineObject9.md)|  | [optional]

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

## `getContactById()`

```php
getContactById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Embedded
```

Retrieve a specific contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the contact
$embed = array('embed_example'); // string[] | Embed additional resources into the contact returned

try {
    $result = $apiInstance->getContactById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the contact |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the contact returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Embedded**](../Model/InlineResponse2009Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
