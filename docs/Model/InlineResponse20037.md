# # InlineResponse20037

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the vendor | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the vendor was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the vendor was last modified | [optional]
**lastCall** | [**\DateTime**](\DateTime.md) | The date the vendor was last called | [optional]
**nextCall** | [**\DateTime**](\DateTime.md) | The date the vendor is next due to be called | [optional]
**typeId** | **string** | The unique identifier of the type of vendor | [optional]
**sellingReasonId** | **string** | The unique identifier of the reason the vendor is selling | [optional]
**solicitorId** | **string** | The unique identifier of the solicitor associated to the vendor | [optional]
**propertyId** | **string** | The unique identifier of the property associated to the vendor | [optional]
**source** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20037Source**](InlineResponse20037Source.md) |  | [optional]
**related** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20037Related[]**](InlineResponse20037Related.md) | A collection of contacts and/or companies associated to the vendor. The first item in the collection is considered the primary relationship | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator attached to the vendor. The first item in the collection is considered the primary negotiator | [optional]
**officeIds** | **string[]** | A collection of unique identifiers of offices attached to the vendor. The first item in the collection is considered the primary office | [optional]
**archivedOn** | [**\DateTime**](\DateTime.md) | The date and time the vendor was archived | [optional]
**fromArchive** | **bool** | A flag determining whether or not the vendor is archived | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the vendor | [optional]
**eTag** | **string** | The ETag for the current version of the vendor. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
