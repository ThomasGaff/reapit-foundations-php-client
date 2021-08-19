# # IdentityCheckModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the identity check | [optional]
**contactId** | **string** | The unique identifier of the contact associated to the identity check | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the identity check was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the identity check was last modified | [optional]
**checkDate** | [**\DateTime**](\DateTime.md) | The date when the identity check was performed. This may differ to the date when the check was created | [optional]
**status** | **string** | The current status of the identity check (pass/fail/pending/cancelled/warnings/unchecked) | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator that initiated the identity check | [optional]
**identityDocument1** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20016IdentityDocument1**](InlineResponse20016IdentityDocument1.md) |  | [optional]
**identityDocument2** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20016IdentityDocument1**](InlineResponse20016IdentityDocument1.md) |  | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the identity check | [optional]
**eTag** | **string** | The ETag for the current version of the identity check. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
