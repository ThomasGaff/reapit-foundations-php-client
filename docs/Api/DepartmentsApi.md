# NorthernEstateAgencies\ReapitFoundationsClient\DepartmentsApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**departmentsGet()**](DepartmentsApi.md#departmentsGet) | **GET** /departments/ | Gets a collection of departments
[**getDepartmentById()**](DepartmentsApi.md#getDepartmentById) | **GET** /departments/{id} | Gets a single department by its&#39; unique identifier


## `departmentsGet()`

```php
departmentsGet($pageSize, $pageNumber, $id, $name): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013
```

Gets a collection of departments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of departments to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$id = array('id_example'); // string[] | Only return departments where the `id` field matches one or more values provided
$name = 'name_example'; // string | Only return departments where the `name` field matches one or more values provided

try {
    $result = $apiInstance->departmentsGet($pageSize, $pageNumber, $id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->departmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of departments to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return departments where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **name** | **string**| Only return departments where the &#x60;name&#x60; field matches one or more values provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepartmentById()`

```php
getDepartmentById($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013Embedded
```

Gets a single department by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique department identifier

try {
    $result = $apiInstance->getDepartmentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getDepartmentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique department identifier |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20013Embedded**](../Model/InlineResponse20013Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
