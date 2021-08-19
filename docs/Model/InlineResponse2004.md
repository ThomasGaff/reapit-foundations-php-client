# # InlineResponse2004

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the company | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the company was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the company was last modified | [optional]
**name** | **string** | The name of the company | [optional]
**branch** | **string** | The branch name of the company | [optional]
**notes** | **string** | A free text field containing notes that describe the company&#39;s business or service offering | [optional]
**active** | **bool** | A flag determining whether or not the company is currently active | [optional]
**vatRegistered** | **bool** | A flag determining whether or not the company is VAT registered | [optional]
**typeIds** | **string[]** | A collection of unique identifiers of company types that categorise the type of business the company operates | [optional]
**supplierTypeId** | **string** | The unique identifier of a supplier type, if the company is a supplier | [optional]
**workPhone** | **string** | The work phone number of the company | [optional]
**mobilePhone** | **string** | The mobile phone number of the company | [optional]
**email** | **string** | The email address of the company | [optional]
**archivedOn** | [**\DateTime**](\DateTime.md) | The date and time the company was archived | [optional]
**fromArchive** | **bool** | A flag determining whether or not the company is archived | [optional]
**address** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2004Address**](InlineResponse2004Address.md) |  | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the company | [optional]
**eTag** | **string** | The ETag for the current version of the company. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
