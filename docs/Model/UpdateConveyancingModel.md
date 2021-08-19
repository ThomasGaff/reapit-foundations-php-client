# # UpdateConveyancingModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendorSolicitorId** | **string** | The unique identifier of the vendor that this offer is associated to. Empty if the offer is external and relates to a property not instructed to the agent | [optional]
**buyerSolicitorId** | **string** | The unique identifier of the solicitor / conveyancer that the vendor has instructed | [optional]
**fixturesAndFittingsCompleted** | [**\DateTime**](\DateTime.md) | The date when the fixtures and fittings form has been completed | [optional]
**deedsRequested** | [**\DateTime**](\DateTime.md) | The date when the title deeds were requested from land registry | [optional]
**deedsReceived** | [**\DateTime**](\DateTime.md) | The date when the title deeds were received from land registry | [optional]
**enquiriesSent** | [**\DateTime**](\DateTime.md) | The date when the legal enquiries raised by the buyers solicitor were sent | [optional]
**enquiriesAnswered** | [**\DateTime**](\DateTime.md) | The date when the legal enquiries raised by the buyers solicitor were answered | [optional]
**searchesPaid** | [**\DateTime**](\DateTime.md) | The date when the buyer paid for conveyancing searches | [optional]
**searchesApplied** | [**\DateTime**](\DateTime.md) | The date when conveyancing searches were applied for | [optional]
**searchesReceived** | [**\DateTime**](\DateTime.md) | The date when conveyancing searches were received | [optional]
**contractSent** | [**\DateTime**](\DateTime.md) | The date when the draft contract was sent | [optional]
**contractReceived** | [**\DateTime**](\DateTime.md) | The date when the draft contract was received | [optional]
**contractApproved** | [**\DateTime**](\DateTime.md) | The date when the contract was approved | [optional]
**contractVendorSigned** | [**\DateTime**](\DateTime.md) | The date when the vendor signed the approved contract | [optional]
**contractBuyerSigned** | [**\DateTime**](\DateTime.md) | The date when the buyer signed the approved contract | [optional]
**mortgageRequired** | **string** | Indication of whether the buyer will require a mortgage to fund the purchase (yes/no/unknown) | [optional]
**mortgageLoanPercentage** | **int** | The loan to value percentage of the mortgage required | [optional]
**mortgageSubmitted** | [**\DateTime**](\DateTime.md) | The date when the mortgage application was submitted | [optional]
**mortgageOfferReceived** | [**\DateTime**](\DateTime.md) | The date when the mortgage offer was received | [optional]
**mortgageLenderId** | **string** | The unique identifier of the company who will provide the mortgage | [optional]
**mortgageBrokerId** | **string** | The unique identifier of the company who brokered the mortgage | [optional]
**mortgageSurveyDate** | [**\DateTime**](\DateTime.md) | The date of the mortgage valuation/survey | [optional]
**mortgageSurveyorId** | **string** | The unique identifier of the company who will perform the mortgage valuation/survey | [optional]
**additionalSurveyRequired** | **string** | Indication of whether the buyer requires that an additional survey take place (yes/no/unknown) | [optional]
**additionalSurveyDate** | [**\DateTime**](\DateTime.md) | The date of the additional survey | [optional]
**additionalSurveyorId** | **string** | The unique identifier of the company who will perform the additional survey | [optional]
**exchangedVendor** | [**\DateTime**](\DateTime.md) | The date when the vendor conveyancer confirms the exchange | [optional]
**exchangedBuyer** | [**\DateTime**](\DateTime.md) | The date when the buyer conveyancer confirms the exchange | [optional]
**completion** | [**\DateTime**](\DateTime.md) | The date when the sale completed | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against this conveyancing record | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
