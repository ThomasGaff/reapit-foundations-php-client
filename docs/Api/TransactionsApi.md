# NorthernEstateAgencies\ReapitFoundationsClient\TransactionsApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionsGet()**](TransactionsApi.md#transactionsGet) | **GET** /transactions/ | Retrieves a collection of transactions
[**transactionsIdGet()**](TransactionsApi.md#transactionsIdGet) | **GET** /transactions/{id} | Retrieves a specific transaction


## `transactionsGet()`

```php
transactionsGet($pageSize, $pageNumber, $sortBy, $id, $propertyId, $landlordId, $tenancyId, $status, $type, $ledger, $category, $createdFrom, $createdTo): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20036
```

Retrieves a collection of transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of transactions to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified)
$id = array('id_example'); // string[] | Only return transactions where the `id` field matches one or more values provided
$propertyId = array('propertyId_example'); // string[] | Only return transactions where the `propertyId` field matches one or more values provided
$landlordId = array('landlordId_example'); // string[] | Only return transactions where the `landlordId` field matches one or more values provided
$tenancyId = array('tenancyId_example'); // string[] | Only return transactions where the `tenancyId` field matches one or more values provided
$status = array('status_example'); // string[] | Only return transactions where the `status` field matches one or more values provided
$type = array('type_example'); // string[] | Only return transactions where the `type` field matches one or more values provided
$ledger = array('ledger_example'); // string[] | Only return transactions where the `ledger` field matches one or more values provided
$category = array('category_example'); // string[] | Only return transactions where the `category` field matches one or more values provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return transactions where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return transactions where the `created` field is on or before the ISO8601 date and time value provided

try {
    $result = $apiInstance->transactionsGet($pageSize, $pageNumber, $sortBy, $id, $propertyId, $landlordId, $tenancyId, $status, $type, $ledger, $category, $createdFrom, $createdTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of transactions to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified) | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return transactions where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **propertyId** | [**string[]**](../Model/string.md)| Only return transactions where the &#x60;propertyId&#x60; field matches one or more values provided | [optional]
 **landlordId** | [**string[]**](../Model/string.md)| Only return transactions where the &#x60;landlordId&#x60; field matches one or more values provided | [optional]
 **tenancyId** | [**string[]**](../Model/string.md)| Only return transactions where the &#x60;tenancyId&#x60; field matches one or more values provided | [optional]
 **status** | [**string[]**](../Model/string.md)| Only return transactions where the &#x60;status&#x60; field matches one or more values provided | [optional]
 **type** | [**string[]**](../Model/string.md)| Only return transactions where the &#x60;type&#x60; field matches one or more values provided | [optional]
 **ledger** | [**string[]**](../Model/string.md)| Only return transactions where the &#x60;ledger&#x60; field matches one or more values provided | [optional]
 **category** | [**string[]**](../Model/string.md)| Only return transactions where the &#x60;category&#x60; field matches one or more values provided | [optional]
 **createdFrom** | **\DateTime**| Only return transactions where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return transactions where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionsIdGet()`

```php
transactionsIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20036Embedded
```

Retrieves a specific transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the transaction to return

try {
    $result = $apiInstance->transactionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->transactionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the transaction to return |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20036Embedded**](../Model/InlineResponse20036Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
