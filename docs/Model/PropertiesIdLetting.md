# # PropertiesIdLetting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instructed** | [**\DateTime**](\DateTime.md) | The date the property was marked as to let | [optional]
**availableFrom** | [**\DateTime**](\DateTime.md) | The date the property is next available from | [optional]
**availableTo** | [**\DateTime**](\DateTime.md) | The date the property is available to | [optional]
**rent** | **double** | The rent being charged for the property | [optional]
**rentFrequency** | **string** | The frequency at which rent will be collected (weekly/monthly/yearly) | [optional]
**furnishing** | **string[]** | The furnishing state that the property can be offered in (furnished/unfurnished/partFurnished) | [optional]
**term** | **string** | The acceptable letting terms (short/long/any) | [optional]
**status** | **string** | The current status of the let (valuation/toLet/toLetUnavailable/underOffer/underOfferUnavailable/arrangingTenancyUnavailable/arrangingTenancy/tenancyCurrentUnavailable/tenancyCurrent/tenancyFinished/tenancyCancelled/sold/letByOtherAgent/letPrivately/provisional/withdrawn) | [optional]
**agentRole** | **string** | The role that the agent will be performing for this lettings property (managed/rentCollection/collectFirstPayment/collectRentToDate/lettingOnly/introducingTenant) | [optional]
**landlordId** | **string** | The unique identifier of the landlord letting the property | [optional]
**brochureId** | **string** | The unique identifier of the document used for the lettings brochure | [optional]
**managementFee** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesIdSellingFee**](PropertiesIdSellingFee.md) |  | [optional]
**lettingFee** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesIdSellingFee**](PropertiesIdSellingFee.md) |  | [optional]
**qualifier** | **string** | The rent qualifier (rentOnApplication/askingRent) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
