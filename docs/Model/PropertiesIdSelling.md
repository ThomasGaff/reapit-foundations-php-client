# # PropertiesIdSelling

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instructed** | [**\DateTime**](\DateTime.md) | The date that the property was marked as for sale | [optional]
**price** | **int** | The marketing price of the property | [optional]
**qualifier** | **string** | The price qualifier (askingPrice/priceOnApplication/guidePrice/offersInRegion/offersOver/offersInExcess/fixedPrice/priceReducedTo) | [optional]
**status** | **string** | The current status of the sale (preAppraisal/valuation/paidValuation/forSale/forSaleUnavailable/underOffer/underOfferUnavailable/reserved/exchanged/completed/soldExternally/withdrawn) | [optional]
**disposal** | **string** | The method used to sell the property (auction/confidential/tender/offersInvited/privateTreaty) | [optional]
**completed** | [**\DateTime**](\DateTime.md) | The date the property sale was completed | [optional]
**exchanged** | [**\DateTime**](\DateTime.md) | The date the property was exchanged | [optional]
**accountPaid** | [**\DateTime**](\DateTime.md) | The date the property account was paid | [optional]
**tenure** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesIdSellingTenure**](PropertiesIdSellingTenure.md) |  | [optional]
**sellingAgency** | **string** | The selling agency type (marketingForAssociate/clientsOnly/comparable/subAgent/jointSole/jointSoleFeeAvailable/multiple/multipleFeeAvailable/ownToSell/soleSellingRights/soleSellingRightsFeeAvailable/soleAgent/soleAgentFeeAvailable) | [optional]
**fee** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesIdSellingFee**](PropertiesIdSellingFee.md) |  | [optional]
**recommendedPrice** | **int** | The agent&#39;s recommended asking price | [optional]
**brochureId** | **string** | The unique identifier of the document used for the sales brochure | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
