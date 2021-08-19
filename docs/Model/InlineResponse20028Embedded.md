# # InlineResponse20028Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the certificate | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the certificate was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the certificate was last modified | [optional]
**category** | **string** | The certificate&#39;s category (safetyCertificate/insurancePolicy/warranty) | [optional]
**typeId** | **string** | The certificate&#39;s type | [optional]
**start** | [**\DateTime**](\DateTime.md) | The certificate&#39;s start date | [optional]
**expiry** | [**\DateTime**](\DateTime.md) | The certificate&#39;s expiry date | [optional]
**propertyId** | **string** | The unique identifier of the property | [optional]
**companyId** | **string** | The unique identifier of the company | [optional]
**notes** | **string** | Any general notes regarding the certificate | [optional]
**referenceNumber** | **string** | The certificate&#39;s reference number | [optional]
**eTag** | **string** | The ETag for the current version of the property. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
