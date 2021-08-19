# # InlineResponse20040Items

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the works order item | [optional]
**worksOrderId** | **string** | The unique identifier of the parent works order | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the works order item was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the works order item was last modified | [optional]
**notes** | **string** | The notes attached to the works order item | [optional]
**chargeTo** | **string** | The party to be charged for the work being carried out (landlord/tenant) | [optional]
**estimate** | **double** | The estimate of any costs associated with the work being carried out given to the party to be charged for the work | [optional]
**estimateType** | **string** | The type of estimate supplied (agent/verbal/written) | [optional]
**netAmount** | **double** | The net cost of the work to be carried out | [optional]
**vatAmount** | **double** | The additional vat cost for the work to be carried out | [optional]
**grossAmount** | **double** | The gross cost of the work to be carried out | [optional]
**eTag** | **string** | The ETag for the current version of the works order item. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
