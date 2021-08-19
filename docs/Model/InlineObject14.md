# # InlineObject14

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offerId** | **string** | The unique identifier of the offer above this one in the chain. Should be left empty if the upward property is external (instructed by another agent) | [optional]
**propertyAddress** | **string** | The address of the property above this one in the chain. (Required when &#39;offerId&#39; is not provided) | [optional]
**agent** | **string** | The name of the agent managing the sale of the property. (Required when &#39;offerId&#39; is not provided) | [optional]
**vendor** | **string** | The name of the vendor selling the property. (Required when &#39;offerId&#39; is not provided) | [optional]
**vendorSolicitorId** | **string** | The unique identifier of the solicitor / conveyancer that the vendor has instructed. (Required when &#39;offerId&#39; is not provided) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
