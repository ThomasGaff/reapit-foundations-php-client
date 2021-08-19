# # CreateOfferModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicantId** | **string** | The unique identifier of the applicant associated to the offer |
**propertyId** | **string** | The unique identifier of the property associated to the offer |
**negotiatorId** | **string** | The unique identifier of the negotiator associated to the offer | [optional]
**date** | [**\DateTime**](\DateTime.md) | The date when the offer was made |
**amount** | **double** | The monetary amount of the offer |
**status** | **string** | The current status of the offer (pending/withdrawn/rejected/accepted/noteOfInterest) |
**inclusions** | **string** | A free text field describing items that should be included in the sale | [optional]
**exclusions** | **string** | A free text field describing items that are explicitly excluded from the sale | [optional]
**conditions** | **string** | A free text field describing any other conditions set by either party that relate to the sale | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the offer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
