# # TenancyCheckModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the tenancy check | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the tenancy check was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the tenancy check was last modified | [optional]
**description** | **string** | Textual description of what the tenancy check relates to | [optional]
**status** | **string** | The status of the tenancy check (needed/notNeeded/arranging/completed) | [optional]
**type** | **string** | The type of the tenancy check (preTenancy/postTenancy) | [optional]
**tenancyId** | **string** | The unique identifier of the tenancy that this check relates to | [optional]
**eTag** | **string** | The ETag for the current version of the teanncy check. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
