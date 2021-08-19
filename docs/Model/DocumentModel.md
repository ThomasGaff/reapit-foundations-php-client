# # DocumentModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the document | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the document was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the document was last modified | [optional]
**associatedType** | **string** | The type of entity that the document is associated with | [optional]
**associatedId** | **string** | The unique identifier of the entity that the document is associated with | [optional]
**typeId** | **string** | The unique identifier of the type of document | [optional]
**name** | **string** | The filename of the document | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the document | [optional]
**eTag** | **string** | The ETag for the current version of the document. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
