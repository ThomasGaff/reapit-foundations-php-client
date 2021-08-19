# # InlineObject19

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactId** | **string** | The unique identifier of the contact associated to the identity check |
**checkDate** | [**\DateTime**](\DateTime.md) | The date when the identity check was performed. This may differ to the date when the check was created |
**status** | **string** | The current status of the identity check (pass/fail/pending/cancelled/warnings/unchecked) |
**negotiatorId** | **string** | The unique identifier of the negotiator that initiated the identity check |
**identityDocument1** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdentityDocument1**](IdentityChecksIdentityDocument1.md) |  |
**identityDocument2** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdentityDocument1**](IdentityChecksIdentityDocument1.md) |  | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the identity check | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
