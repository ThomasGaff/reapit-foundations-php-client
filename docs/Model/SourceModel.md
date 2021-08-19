# # SourceModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the source | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the source was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the source was last modified | [optional]
**name** | **string** | The name of the source or advertising publication | [optional]
**type** | **string** | The type of the source (source/advertisement) | [optional]
**officeIds** | **string[]** | A collection of the unique identifiers of offices that regularly get business from the source | [optional]
**departmentIds** | **string[]** | A collection of unique identifiers of departments that regularly get business from the source | [optional]
**eTag** | **string** | The ETag for the current version of the source. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
