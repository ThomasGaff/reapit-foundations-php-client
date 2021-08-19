# # UpdateIdentityCheckModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkDate** | [**\DateTime**](\DateTime.md) | The date when the identity check was performed. This may differ to the date when the check was created | [optional]
**status** | **string** | The current status of the identity check (pass/fail/pending/cancelled/warnings/unchecked) | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator that initiated the identity check | [optional]
**identityDocument1** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdIdentityDocument1**](IdentityChecksIdIdentityDocument1.md) |  | [optional]
**identityDocument2** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\IdentityChecksIdIdentityDocument1**](IdentityChecksIdIdentityDocument1.md) |  | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the identity check | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
