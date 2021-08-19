# NorthernEstateAgencies\ReapitFoundationsClient\ConfigurationApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurationAppointmentTypesGet()**](ConfigurationApi.md#configurationAppointmentTypesGet) | **GET** /configuration/appointmentTypes | Gets the full listing of appointment types
[**configurationAppointmentTypesIdGet()**](ConfigurationApi.md#configurationAppointmentTypesIdGet) | **GET** /configuration/appointmentTypes/{id} | Gets a single appointment type
[**configurationBoardStatusesGet()**](ConfigurationApi.md#configurationBoardStatusesGet) | **GET** /configuration/boardStatuses | Gets the full listing of board statuses
[**configurationBoardStatusesIdGet()**](ConfigurationApi.md#configurationBoardStatusesIdGet) | **GET** /configuration/boardStatuses/{id} | Gets a single board status
[**configurationCertificateTypesGet()**](ConfigurationApi.md#configurationCertificateTypesGet) | **GET** /configuration/certificateTypes | Gets the full listing of certificate types
[**configurationCertificateTypesIdGet()**](ConfigurationApi.md#configurationCertificateTypesIdGet) | **GET** /configuration/certificateTypes/{id} | Gets a single certificate type
[**configurationCompanyTypesGet()**](ConfigurationApi.md#configurationCompanyTypesGet) | **GET** /configuration/companyTypes | Gets the full listing of company types
[**configurationCompanyTypesIdGet()**](ConfigurationApi.md#configurationCompanyTypesIdGet) | **GET** /configuration/companyTypes/{id} | Gets a single company type
[**configurationDocumentTypesGet()**](ConfigurationApi.md#configurationDocumentTypesGet) | **GET** /configuration/documentTypes | Gets the full listing of document types
[**configurationDocumentTypesIdGet()**](ConfigurationApi.md#configurationDocumentTypesIdGet) | **GET** /configuration/documentTypes/{id} | Gets a single document type
[**configurationFollowUpResponsesGet()**](ConfigurationApi.md#configurationFollowUpResponsesGet) | **GET** /configuration/followUpResponses | Gets the full listing of pre-defined appointment follow up feedback responses
[**configurationFollowUpResponsesIdGet()**](ConfigurationApi.md#configurationFollowUpResponsesIdGet) | **GET** /configuration/followUpResponses/{id} | Gets a single pre-defined appointment follow up feedback response
[**configurationIdentityDocumentTypesGet()**](ConfigurationApi.md#configurationIdentityDocumentTypesGet) | **GET** /configuration/identityDocumentTypes | Gets the full listing of ID document types
[**configurationIdentityDocumentTypesIdGet()**](ConfigurationApi.md#configurationIdentityDocumentTypesIdGet) | **GET** /configuration/identityDocumentTypes/{id} | Gets a single ID document type
[**configurationJournalEntryTypesGet()**](ConfigurationApi.md#configurationJournalEntryTypesGet) | **GET** /configuration/journalEntryTypes | Gets the full listing of journal entry types
[**configurationJournalEntryTypesIdGet()**](ConfigurationApi.md#configurationJournalEntryTypesIdGet) | **GET** /configuration/journalEntryTypes/{id} | Gets a single journal entry type
[**configurationSellingReasonsGet()**](ConfigurationApi.md#configurationSellingReasonsGet) | **GET** /configuration/sellingReasons | Gets the full listing of vendor selling reasons
[**configurationSellingReasonsIdGet()**](ConfigurationApi.md#configurationSellingReasonsIdGet) | **GET** /configuration/sellingReasons/{id} | Gets a single vendor selling reason
[**configurationSupplierTypesGet()**](ConfigurationApi.md#configurationSupplierTypesGet) | **GET** /configuration/supplierTypes | Gets the full listing of supplier types
[**configurationSupplierTypesIdGet()**](ConfigurationApi.md#configurationSupplierTypesIdGet) | **GET** /configuration/supplierTypes/{id} | Gets a single supplier type
[**configurationTaskTypesGet()**](ConfigurationApi.md#configurationTaskTypesGet) | **GET** /configuration/taskTypes | Gets the full listing of task types
[**configurationTaskTypesIdGet()**](ConfigurationApi.md#configurationTaskTypesIdGet) | **GET** /configuration/taskTypes/{id} | Gets a single task type
[**configurationTenancyTypesGet()**](ConfigurationApi.md#configurationTenancyTypesGet) | **GET** /configuration/tenancyTypes | Gets the full listing of tenancy types
[**configurationTenancyTypesIdGet()**](ConfigurationApi.md#configurationTenancyTypesIdGet) | **GET** /configuration/tenancyTypes/{id} | Gets a single tenancy type
[**configurationVendorTypesGet()**](ConfigurationApi.md#configurationVendorTypesGet) | **GET** /configuration/vendorTypes | Gets the full listing of vendor types
[**configurationVendorTypesIdGet()**](ConfigurationApi.md#configurationVendorTypesIdGet) | **GET** /configuration/vendorTypes/{id} | Gets a single vendor type
[**configurationWorksOrderTypesGet()**](ConfigurationApi.md#configurationWorksOrderTypesGet) | **GET** /configuration/worksOrderTypes | Gets the full listing of work order types
[**configurationWorksOrderTypesIdGet()**](ConfigurationApi.md#configurationWorksOrderTypesIdGet) | **GET** /configuration/worksOrderTypes/{id} | Gets a single work order type


## `configurationAppointmentTypesGet()`

```php
configurationAppointmentTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of appointment types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationAppointmentTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationAppointmentTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationAppointmentTypesIdGet()`

```php
configurationAppointmentTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single appointment type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the appointment type to fetch

try {
    $result = $apiInstance->configurationAppointmentTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationAppointmentTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the appointment type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationBoardStatusesGet()`

```php
configurationBoardStatusesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of board statuses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationBoardStatusesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationBoardStatusesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationBoardStatusesIdGet()`

```php
configurationBoardStatusesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single board status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the board status to fetch

try {
    $result = $apiInstance->configurationBoardStatusesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationBoardStatusesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the board status to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationCertificateTypesGet()`

```php
configurationCertificateTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of certificate types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationCertificateTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationCertificateTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationCertificateTypesIdGet()`

```php
configurationCertificateTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single certificate type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the certificate type to fetch

try {
    $result = $apiInstance->configurationCertificateTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationCertificateTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the certificate type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationCompanyTypesGet()`

```php
configurationCompanyTypesGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of company types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | Only return items where the `id` field matches one or more values provided

try {
    $result = $apiInstance->configurationCompanyTypesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationCompanyTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string[]**](../Model/string.md)| Only return items where the &#x60;id&#x60; field matches one or more values provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationCompanyTypesIdGet()`

```php
configurationCompanyTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single company type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the company type to fetch

try {
    $result = $apiInstance->configurationCompanyTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationCompanyTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the company type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationDocumentTypesGet()`

```php
configurationDocumentTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of document types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationDocumentTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationDocumentTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationDocumentTypesIdGet()`

```php
configurationDocumentTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single document type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the document type to fetch

try {
    $result = $apiInstance->configurationDocumentTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationDocumentTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the document type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationFollowUpResponsesGet()`

```php
configurationFollowUpResponsesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of pre-defined appointment follow up feedback responses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationFollowUpResponsesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationFollowUpResponsesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationFollowUpResponsesIdGet()`

```php
configurationFollowUpResponsesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single pre-defined appointment follow up feedback response

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the follow up feedback response option to fetch

try {
    $result = $apiInstance->configurationFollowUpResponsesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationFollowUpResponsesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the follow up feedback response option to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationIdentityDocumentTypesGet()`

```php
configurationIdentityDocumentTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of ID document types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationIdentityDocumentTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationIdentityDocumentTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationIdentityDocumentTypesIdGet()`

```php
configurationIdentityDocumentTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single ID document type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the ID document type to fetch

try {
    $result = $apiInstance->configurationIdentityDocumentTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationIdentityDocumentTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the ID document type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationJournalEntryTypesGet()`

```php
configurationJournalEntryTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of journal entry types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationJournalEntryTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationJournalEntryTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationJournalEntryTypesIdGet()`

```php
configurationJournalEntryTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single journal entry type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the journal entry type to fetch

try {
    $result = $apiInstance->configurationJournalEntryTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationJournalEntryTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the journal entry type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationSellingReasonsGet()`

```php
configurationSellingReasonsGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of vendor selling reasons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationSellingReasonsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationSellingReasonsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationSellingReasonsIdGet()`

```php
configurationSellingReasonsIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single vendor selling reason

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the vendor selling reason to fetch

try {
    $result = $apiInstance->configurationSellingReasonsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationSellingReasonsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the vendor selling reason to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationSupplierTypesGet()`

```php
configurationSupplierTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of supplier types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationSupplierTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationSupplierTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationSupplierTypesIdGet()`

```php
configurationSupplierTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single supplier type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the supplier type to fetch

try {
    $result = $apiInstance->configurationSupplierTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationSupplierTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the supplier type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationTaskTypesGet()`

```php
configurationTaskTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of task types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationTaskTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationTaskTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationTaskTypesIdGet()`

```php
configurationTaskTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single task type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the task type to fetch

try {
    $result = $apiInstance->configurationTaskTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationTaskTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationTenancyTypesGet()`

```php
configurationTenancyTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of tenancy types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationTenancyTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationTenancyTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationTenancyTypesIdGet()`

```php
configurationTenancyTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single tenancy type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the tenancy type to fetch

try {
    $result = $apiInstance->configurationTenancyTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationTenancyTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the tenancy type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationVendorTypesGet()`

```php
configurationVendorTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of vendor types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationVendorTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationVendorTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationVendorTypesIdGet()`

```php
configurationVendorTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single vendor type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the vendor type to fetch

try {
    $result = $apiInstance->configurationVendorTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationVendorTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the vendor type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationWorksOrderTypesGet()`

```php
configurationWorksOrderTypesGet(): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]
```

Gets the full listing of work order types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configurationWorksOrderTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationWorksOrderTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008[]**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configurationWorksOrderTypesIdGet()`

```php
configurationWorksOrderTypesIdGet($id): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008
```

Gets a single work order type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the work order type to fetch

try {
    $result = $apiInstance->configurationWorksOrderTypesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->configurationWorksOrderTypesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the work order type to fetch |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
