# # LandlordModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the landlord | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the landlord was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the landlord was last modified | [optional]
**active** | **bool** | A flag determining whether or not the landlord is currently active | [optional]
**solicitorId** | **string** | The unique identifier of the company acting as the landlord&#39;s solicitor | [optional]
**officeId** | **string** | The unique identifier of the office that is associated to the landlord | [optional]
**source** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20018Source**](InlineResponse20018Source.md) |  | [optional]
**related** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20018Related[]**](InlineResponse20018Related.md) | A collection of contacts and/or companies associated to the landlord. The first item in the collection is considered the primary relationship | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the landlord | [optional]
**eTag** | **string** | The ETag for the current version of the landlord. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
