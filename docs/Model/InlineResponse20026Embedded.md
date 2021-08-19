# # InlineResponse20026Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the office | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the office was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the office was last modified | [optional]
**name** | **string** | The name of the office | [optional]
**manager** | **string** | The name of the office manager | [optional]
**address** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200PrimaryAddress**](InlineResponse200PrimaryAddress.md) |  | [optional]
**workPhone** | **string** | The work phone number of the office | [optional]
**email** | **string** | The email address of the office | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the office | [optional]
**eTag** | **string** | The ETag for the current version of the office. Used for managing update concurrency | [optional] [readonly]
**extrasField** | **array<string,object>** | The requested extras fields | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
