# NorthernEstateAgencies\ReapitFoundationsClient\WorksOrdersApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWorksOrderById()**](WorksOrdersApi.md#getWorksOrderById) | **GET** /worksOrders/{id} | Gets a specific works order by unique identifier
[**getWorksOrderItemById()**](WorksOrdersApi.md#getWorksOrderItemById) | **GET** /worksOrders/{id}/items/{itemId} | Gets a specific works order item by id
[**worksOrdersGet()**](WorksOrdersApi.md#worksOrdersGet) | **GET** /worksOrders/ | Gets a paged collection of works orders
[**worksOrdersIdItemsGet()**](WorksOrdersApi.md#worksOrdersIdItemsGet) | **GET** /worksOrders/{id}/items | Gets a collection of work order items by work order id
[**worksOrdersIdItemsItemIdDelete()**](WorksOrdersApi.md#worksOrdersIdItemsItemIdDelete) | **DELETE** /worksOrders/{id}/items/{itemId} | Deletes a works order item
[**worksOrdersIdItemsItemIdPatch()**](WorksOrdersApi.md#worksOrdersIdItemsItemIdPatch) | **PATCH** /worksOrders/{id}/items/{itemId} | Updates a works order item
[**worksOrdersIdItemsPost()**](WorksOrdersApi.md#worksOrdersIdItemsPost) | **POST** /worksOrders/{id}/items | Creates a new works order item
[**worksOrdersIdPatch()**](WorksOrdersApi.md#worksOrdersIdPatch) | **PATCH** /worksOrders/{id} | Updates a works order
[**worksOrdersPost()**](WorksOrdersApi.md#worksOrdersPost) | **POST** /worksOrders/ | Creates a new works order


## `getWorksOrderById()`

```php
getWorksOrderById($id, $embed): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20040Embedded
```

Gets a specific works order by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\WorksOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the works order
$embed = array('embed_example'); // string[] | Embed additional resources into the works order returned

try {
    $result = $apiInstance->getWorksOrderById($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorksOrdersApi->getWorksOrderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the works order |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the works order returned | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20040Embedded**](../Model/InlineResponse20040Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorksOrderItemById()`

```php
getWorksOrderItemById($id, $itemId): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20040Items
```

Gets a specific works order item by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\WorksOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the works order
$itemId = 'itemId_example'; // string | The unique identifier of the works order item

try {
    $result = $apiInstance->getWorksOrderItemById($id, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorksOrdersApi->getWorksOrderItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the works order |
 **itemId** | **string**| The unique identifier of the works order item |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20040Items**](../Model/InlineResponse20040Items.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `worksOrdersGet()`

```php
worksOrdersGet($pageSize, $pageNumber, $sortBy, $embed, $id, $companyId, $negotiatorId, $propertyId, $status, $tenancyId, $typeId, $completedFrom, $completedTo, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $requiredFrom, $requiredTo, $metadata): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20040
```

Gets a paged collection of works orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\WorksOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of works orders to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/completed/required)
$embed = array('embed_example'); // string[] | Embed additional resources into the works orders returned
$id = array('id_example'); // string[] | Only return works orders where the `id` field matches one or more values provided
$companyId = array('companyId_example'); // string[] | Only return works orders where the `companyId` field matches one or more values provided
$negotiatorId = array('negotiatorId_example'); // string[] | Only return works orders where the `negotiatorId` field matches one or more values provided
$propertyId = array('propertyId_example'); // string[] | Only return works orders where the `propertyId` field matches one or more values provided
$status = array('status_example'); // string[] | Only return works orders where the `status` field matches one or more values provided
$tenancyId = array('tenancyId_example'); // string[] | Only return works orders where the `tenancyId` field matches one or more values provided
$typeId = array('typeId_example'); // string[] | Only return works orders where the `typeId` field matches one or more values provided
$completedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return works orders where the `completed` field is on or after the ISO8601 date and time value provided
$completedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return works orders where the `completed` field is on or before this date and time
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return works orders where the `created` field is on or after this date and time
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return works orders where the `created` field is on or before this date and time
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return works orders where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return works orders where the `modified` field is on or before the ISO8601 date and time value provided
$requiredFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return works orders where the `required` field is on or after this date and time
$requiredTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return works orders where the `required` field is on or before this date and time
$metadata = array('metadata_example'); // string[] | Only return works orders where the metadata matches the filters given

try {
    $result = $apiInstance->worksOrdersGet($pageSize, $pageNumber, $sortBy, $embed, $id, $companyId, $negotiatorId, $propertyId, $status, $tenancyId, $typeId, $completedFrom, $completedTo, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $requiredFrom, $requiredTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorksOrdersApi->worksOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of works orders to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/completed/required) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the works orders returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return works orders where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **companyId** | [**string[]**](../Model/string.md)| Only return works orders where the &#x60;companyId&#x60; field matches one or more values provided | [optional]
 **negotiatorId** | [**string[]**](../Model/string.md)| Only return works orders where the &#x60;negotiatorId&#x60; field matches one or more values provided | [optional]
 **propertyId** | [**string[]**](../Model/string.md)| Only return works orders where the &#x60;propertyId&#x60; field matches one or more values provided | [optional]
 **status** | [**string[]**](../Model/string.md)| Only return works orders where the &#x60;status&#x60; field matches one or more values provided | [optional]
 **tenancyId** | [**string[]**](../Model/string.md)| Only return works orders where the &#x60;tenancyId&#x60; field matches one or more values provided | [optional]
 **typeId** | [**string[]**](../Model/string.md)| Only return works orders where the &#x60;typeId&#x60; field matches one or more values provided | [optional]
 **completedFrom** | **\DateTime**| Only return works orders where the &#x60;completed&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **completedTo** | **\DateTime**| Only return works orders where the &#x60;completed&#x60; field is on or before this date and time | [optional]
 **createdFrom** | **\DateTime**| Only return works orders where the &#x60;created&#x60; field is on or after this date and time | [optional]
 **createdTo** | **\DateTime**| Only return works orders where the &#x60;created&#x60; field is on or before this date and time | [optional]
 **modifiedFrom** | **\DateTime**| Only return works orders where the &#x60;modified&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **modifiedTo** | **\DateTime**| Only return works orders where the &#x60;modified&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **requiredFrom** | **\DateTime**| Only return works orders where the &#x60;required&#x60; field is on or after this date and time | [optional]
 **requiredTo** | **\DateTime**| Only return works orders where the &#x60;required&#x60; field is on or before this date and time | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return works orders where the metadata matches the filters given | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `worksOrdersIdItemsGet()`

```php
worksOrdersIdItemsGet($id, $pageSize, $pageNumber): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20041
```

Gets a collection of work order items by work order id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\WorksOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The unique identifier of the works order
$pageSize = 56; // int | A limit on the number of works order items to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return

try {
    $result = $apiInstance->worksOrdersIdItemsGet($id, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorksOrdersApi->worksOrdersIdItemsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unique identifier of the works order |
 **pageSize** | **int**| A limit on the number of works order items to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `worksOrdersIdItemsItemIdDelete()`

```php
worksOrdersIdItemsItemIdDelete($id, $itemId)
```

Deletes a works order item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\WorksOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the works order the item is against.
$itemId = 'itemId_example'; // string | Unique identifier of the works order item to delete.

try {
    $apiInstance->worksOrdersIdItemsItemIdDelete($id, $itemId);
} catch (Exception $e) {
    echo 'Exception when calling WorksOrdersApi->worksOrdersIdItemsItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the works order the item is against. |
 **itemId** | **string**| Unique identifier of the works order item to delete. |

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

## `worksOrdersIdItemsItemIdPatch()`

```php
worksOrdersIdItemsItemIdPatch($ifMatch, $id, $itemId, $body)
```

Updates a works order item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\WorksOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | Unique identifier of the works order the item is against.
$itemId = 'itemId_example'; // string | Unique identifier of the works order item to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject58(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject58

try {
    $apiInstance->worksOrdersIdItemsItemIdPatch($ifMatch, $id, $itemId, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorksOrdersApi->worksOrdersIdItemsItemIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| Unique identifier of the works order the item is against. |
 **itemId** | **string**| Unique identifier of the works order item to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject58**](../Model/InlineObject58.md)|  | [optional]

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

## `worksOrdersIdItemsPost()`

```php
worksOrdersIdItemsPost($id, $body)
```

Creates a new works order item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\WorksOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject57(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject57

try {
    $apiInstance->worksOrdersIdItemsPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorksOrdersApi->worksOrdersIdItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject57**](../Model/InlineObject57.md)|  | [optional]

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

## `worksOrdersIdPatch()`

```php
worksOrdersIdPatch($ifMatch, $id, $body)
```

Updates a works order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\WorksOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | Unique identifier of the works order to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject56(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject56

try {
    $apiInstance->worksOrdersIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorksOrdersApi->worksOrdersIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| Unique identifier of the works order to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject56**](../Model/InlineObject56.md)|  | [optional]

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

## `worksOrdersPost()`

```php
worksOrdersPost($body)
```

Creates a new works order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\WorksOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject55(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject55

try {
    $apiInstance->worksOrdersPost($body);
} catch (Exception $e) {
    echo 'Exception when calling WorksOrdersApi->worksOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject55**](../Model/InlineObject55.md)|  | [optional]

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
