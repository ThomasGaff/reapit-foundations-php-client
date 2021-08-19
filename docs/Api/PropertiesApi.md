# NorthernEstateAgencies\ReapitFoundationsClient\PropertiesApi

All URIs are relative to http://platform.reapit.cloud.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCertificateById()**](PropertiesApi.md#getCertificateById) | **GET** /properties/{id}/certificates/{certificateId} | Gets a specific certificate by its&#39; unique identifier for a specific property
[**getPropertyById()**](PropertiesApi.md#getPropertyById) | **GET** /properties/{id} | Gets a single property by its&#39; unique identifier
[**propertiesGet()**](PropertiesApi.md#propertiesGet) | **GET** /properties/ | Gets a collection of properties
[**propertiesIdCertificatesCertificateIdPatch()**](PropertiesApi.md#propertiesIdCertificatesCertificateIdPatch) | **PATCH** /properties/{id}/certificates/{certificateId} | Updates an existing certificate
[**propertiesIdCertificatesGet()**](PropertiesApi.md#propertiesIdCertificatesGet) | **GET** /properties/{id}/certificates | Gets a collection of certificates for a specific property
[**propertiesIdCertificatesPost()**](PropertiesApi.md#propertiesIdCertificatesPost) | **POST** /properties/{id}/certificates | Creates a new certificate
[**propertiesIdPatch()**](PropertiesApi.md#propertiesIdPatch) | **PATCH** /properties/{id} | Updates a property by unique identifier
[**propertiesPost()**](PropertiesApi.md#propertiesPost) | **POST** /properties/ | Creates a new property


## `getCertificateById()`

```php
getCertificateById($id, $certificateId): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20028Embedded
```

Gets a specific certificate by its' unique identifier for a specific property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique property identifier
$certificateId = 'certificateId_example'; // string | Unique certificate identifier

try {
    $result = $apiInstance->getCertificateById($id, $certificateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->getCertificateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique property identifier |
 **certificateId** | **string**| Unique certificate identifier |

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20028Embedded**](../Model/InlineResponse20028Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyById()`

```php
getPropertyById($id, $embed, $extrasField): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027Embedded
```

Gets a single property by its' unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique property identifier
$embed = array('embed_example'); // string[] | Embed additional resources into the property returned
$extrasField = array('extrasField_example'); // string[] | Include extras fields matching one or more field names specified. You must be granted access to this data beforehand

try {
    $result = $apiInstance->getPropertyById($id, $embed, $extrasField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->getPropertyById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique property identifier |
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the property returned | [optional]
 **extrasField** | [**string[]**](../Model/string.md)| Include extras fields matching one or more field names specified. You must be granted access to this data beforehand | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027Embedded**](../Model/InlineResponse20027Embedded.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertiesGet()`

```php
propertiesGet($pageSize, $pageNumber, $sortBy, $embed, $id, $age, $agentRole, $landlordId, $lettingStatus, $locality, $marketingMode, $masterId, $officeId, $parking, $sellingStatus, $situation, $style, $type, $address, $departmentId, $bedroomsFrom, $bedroomsTo, $priceFrom, $priceTo, $rentFrom, $rentTo, $rentFrequency, $internetAdvertising, $fromArchive, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata, $extrasField): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027
```

Gets a collection of properties

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of properties to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/address/bedrooms/negotiatorId/officeId/price/rent)
$embed = array('embed_example'); // string[] | Embed additional resources into the properties returned
$id = array('id_example'); // string[] | Only return properties where the `id` field matches one or more values provided
$age = array('age_example'); // string[] | Only return properties where the `age` field contains one or more values provided
$agentRole = array('agentRole_example'); // string[] | Only return properties where the `letting.agentRole` field matches one or more values provided
$landlordId = array('landlordId_example'); // string[] | Only return properties where the `landlordId` field matches one or more values provided
$lettingStatus = array('lettingStatus_example'); // string[] | Only return properties where the `lettingStatus` field matches one or more values provided
$locality = array('locality_example'); // string[] | Only return properties where the `locality` field contains one or more values provided
$marketingMode = array('marketingMode_example'); // string[] | Only return properties where the `marketingMode` field matches one or more values provided. Note that querying for single marketing mode properties (eg `selling`) will also return properties that are marketed in both modes (`selling` AND `sellingAndLetting`)
$masterId = array('masterId_example'); // string[] | Only return properties where the master property id matches one or more values provided.
$officeId = array('officeId_example'); // string[] | Only return properties where the `officeIds` matches one or more values provided.
$parking = array('parking_example'); // string[] | Only return properties where the `parking` field contains one or more values provided
$sellingStatus = array('sellingStatus_example'); // string[] | Only return properties where the `sellingStatus` field matches or more values provided
$situation = array('situation_example'); // string[] | Only return properties where the `garden` field contains one or more values provided
$style = array('style_example'); // string[] | Only return properties where the `style` field contains one or more values provided
$type = array('type_example'); // string[] | Only return properties where the `type` field contains one or more values provided
$address = 'address_example'; // string | Only return properties where the `address` field matches the value provided
$departmentId = 'departmentId_example'; // string | Only return properties where the `departmentId` field matches the value provided
$bedroomsFrom = 56; // int | Only return properties where the `bedrooms` field is more than or equal to the value provided
$bedroomsTo = 56; // int | Only return properties where the `bedrooms` field is less than or equal to the value provided
$priceFrom = 56; // int | Only return properties where the `selling.price` field is more than or equal to the value provided
$priceTo = 56; // int | Only return properties where the `selling.price` field is less than or equal to the value provided
$rentFrom = 3.4; // double | Only return properties where the `letting.rent` field is more than or equal to the value provided
$rentTo = 3.4; // double | Only return properties where the `letting.rent` field is less than or equal to the value provided
$rentFrequency = array('rentFrequency_example'); // string[] | The rent collection frequency that 'rentFrom' and 'rentTo' parameters are in relation to. Defaults to monthly.
$internetAdvertising = True; // bool | Only return properties where the `internetAdvertising` field matches the value provided
$fromArchive = True; // bool | Only return properties where the `fromArchive` field matches the value given
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return properties where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return properties where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return properties which have been modified/created since the given ISO8601 date and time provided.
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return properties which have been modified/created before the given ISO8601 date and time provided.
$metadata = array('metadata_example'); // string[] | Only return properties where the metadata matches the filters given
$extrasField = array('extrasField_example'); // string[] | Include extras fields matching one or more field names specified. You must be granted access to this data beforehand

try {
    $result = $apiInstance->propertiesGet($pageSize, $pageNumber, $sortBy, $embed, $id, $age, $agentRole, $landlordId, $lettingStatus, $locality, $marketingMode, $masterId, $officeId, $parking, $sellingStatus, $situation, $style, $type, $address, $departmentId, $bedroomsFrom, $bedroomsTo, $priceFrom, $priceTo, $rentFrom, $rentTo, $rentFrequency, $internetAdvertising, $fromArchive, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $metadata, $extrasField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| A limit on the number of properties to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **sortBy** | **string**| Sort results by the value specified. Prefix string with &#39;-&#39; to indicate descending direction (created/modified/address/bedrooms/negotiatorId/officeId/price/rent) | [optional]
 **embed** | [**string[]**](../Model/string.md)| Embed additional resources into the properties returned | [optional]
 **id** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;id&#x60; field matches one or more values provided | [optional]
 **age** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;age&#x60; field contains one or more values provided | [optional]
 **agentRole** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;letting.agentRole&#x60; field matches one or more values provided | [optional]
 **landlordId** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;landlordId&#x60; field matches one or more values provided | [optional]
 **lettingStatus** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;lettingStatus&#x60; field matches one or more values provided | [optional]
 **locality** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;locality&#x60; field contains one or more values provided | [optional]
 **marketingMode** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;marketingMode&#x60; field matches one or more values provided. Note that querying for single marketing mode properties (eg &#x60;selling&#x60;) will also return properties that are marketed in both modes (&#x60;selling&#x60; AND &#x60;sellingAndLetting&#x60;) | [optional]
 **masterId** | [**string[]**](../Model/string.md)| Only return properties where the master property id matches one or more values provided. | [optional]
 **officeId** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;officeIds&#x60; matches one or more values provided. | [optional]
 **parking** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;parking&#x60; field contains one or more values provided | [optional]
 **sellingStatus** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;sellingStatus&#x60; field matches or more values provided | [optional]
 **situation** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;garden&#x60; field contains one or more values provided | [optional]
 **style** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;style&#x60; field contains one or more values provided | [optional]
 **type** | [**string[]**](../Model/string.md)| Only return properties where the &#x60;type&#x60; field contains one or more values provided | [optional]
 **address** | **string**| Only return properties where the &#x60;address&#x60; field matches the value provided | [optional]
 **departmentId** | **string**| Only return properties where the &#x60;departmentId&#x60; field matches the value provided | [optional]
 **bedroomsFrom** | **int**| Only return properties where the &#x60;bedrooms&#x60; field is more than or equal to the value provided | [optional]
 **bedroomsTo** | **int**| Only return properties where the &#x60;bedrooms&#x60; field is less than or equal to the value provided | [optional]
 **priceFrom** | **int**| Only return properties where the &#x60;selling.price&#x60; field is more than or equal to the value provided | [optional]
 **priceTo** | **int**| Only return properties where the &#x60;selling.price&#x60; field is less than or equal to the value provided | [optional]
 **rentFrom** | **double**| Only return properties where the &#x60;letting.rent&#x60; field is more than or equal to the value provided | [optional]
 **rentTo** | **double**| Only return properties where the &#x60;letting.rent&#x60; field is less than or equal to the value provided | [optional]
 **rentFrequency** | [**string[]**](../Model/string.md)| The rent collection frequency that &#39;rentFrom&#39; and &#39;rentTo&#39; parameters are in relation to. Defaults to monthly. | [optional]
 **internetAdvertising** | **bool**| Only return properties where the &#x60;internetAdvertising&#x60; field matches the value provided | [optional]
 **fromArchive** | **bool**| Only return properties where the &#x60;fromArchive&#x60; field matches the value given | [optional]
 **createdFrom** | **\DateTime**| Only return properties where the &#x60;created&#x60; field is on or after the ISO8601 date and time value provided | [optional]
 **createdTo** | **\DateTime**| Only return properties where the &#x60;created&#x60; field is on or before the ISO8601 date and time value provided | [optional]
 **modifiedFrom** | **\DateTime**| Only return properties which have been modified/created since the given ISO8601 date and time provided. | [optional]
 **modifiedTo** | **\DateTime**| Only return properties which have been modified/created before the given ISO8601 date and time provided. | [optional]
 **metadata** | [**string[]**](../Model/string.md)| Only return properties where the metadata matches the filters given | [optional]
 **extrasField** | [**string[]**](../Model/string.md)| Include extras fields matching one or more field names specified. You must be granted access to this data beforehand | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertiesIdCertificatesCertificateIdPatch()`

```php
propertiesIdCertificatesCertificateIdPatch($ifMatch, $id, $certificateId, $body)
```

Updates an existing certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | Unique property identifier
$certificateId = 'certificateId_example'; // string | The unique identifier for the certificate to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject39(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject39

try {
    $apiInstance->propertiesIdCertificatesCertificateIdPatch($ifMatch, $id, $certificateId, $body);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesIdCertificatesCertificateIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| Unique property identifier |
 **certificateId** | **string**| The unique identifier for the certificate to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject39**](../Model/InlineObject39.md)|  | [optional]

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

## `propertiesIdCertificatesGet()`

```php
propertiesIdCertificatesGet($id, $pageSize, $pageNumber, $category): \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20028
```

Gets a collection of certificates for a specific property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique property identifier
$pageSize = 56; // int | A limit on the number of properties to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$category = array('category_example'); // string[] | Only return certificates where the `category` field matches one or more values provided

try {
    $result = $apiInstance->propertiesIdCertificatesGet($id, $pageSize, $pageNumber, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesIdCertificatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique property identifier |
 **pageSize** | **int**| A limit on the number of properties to be returned per page. Value can range between 1 and 100, and the default is 25 | [optional]
 **pageNumber** | **int**| The page number to return (must be greater than 0) | [optional]
 **category** | [**string[]**](../Model/string.md)| Only return certificates where the &#x60;category&#x60; field matches one or more values provided | [optional]

### Return type

[**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertiesIdCertificatesPost()`

```php
propertiesIdCertificatesPost($id, $body)
```

Creates a new certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique property identifier
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject38(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject38

try {
    $apiInstance->propertiesIdCertificatesPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesIdCertificatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique property identifier |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject38**](../Model/InlineObject38.md)|  | [optional]

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

## `propertiesIdPatch()`

```php
propertiesIdPatch($ifMatch, $id, $body)
```

Updates a property by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ifMatch = 'ifMatch_example'; // string | The ETag provided in the payload from the current version of this resource
$id = 'id_example'; // string | The unique identifier for the property to update.
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject37(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject37

try {
    $apiInstance->propertiesIdPatch($ifMatch, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifMatch** | **string**| The ETag provided in the payload from the current version of this resource |
 **id** | **string**| The unique identifier for the property to update. |
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject37**](../Model/InlineObject37.md)|  | [optional]

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

## `propertiesPost()`

```php
propertiesPost($body)
```

Creates a new property

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject36(); // \NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject36

try {
    $apiInstance->propertiesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineObject36**](../Model/InlineObject36.md)|  | [optional]

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
