# # CreateDownwardLinkModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offerId** | **string** | The unique identifier of the offer below this one in the chain. Should be left empty if the upward property is external (instructed by another agent) | [optional]
**propertyAddress** | **string** | The address of the property below this one in the chain. (Required when &#39;offerId&#39; is not provided) | [optional]
**agent** | **string** | The name of the agent managing the sale of the property. (Required when &#39;offerId&#39; is not provided) | [optional]
**buyer** | **string** | The name of the buyer purchasing the property. (Required when &#39;offerId&#39; is not provided) | [optional]
**buyerSolicitorId** | **string** | The unique identifier of the solicitor / conveyancer that the buyer has instructed. (Required when &#39;offerId&#39; is not provided) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
