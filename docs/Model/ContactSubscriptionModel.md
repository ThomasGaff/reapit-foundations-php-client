# # ContactSubscriptionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the subscription | [optional]
**contactId** | **string** | The unique identifier of the contact the subscription is associated with | [optional]
**name** | **string** | The name of the subscription | [optional]
**group** | **string** | The name of the group this subscription belongs to, if applicable | [optional]
**status** | **string** | The status of the subscription (subscribed/unsubscribed) | [optional]
**type** | **string** | The type of subscription (mailing/event) | [optional]
**subscribedOn** | [**\DateTime**](\DateTime.md) | The date and time when the subscription was started for the associated contact | [optional]
**unsubscribedOn** | [**\DateTime**](\DateTime.md) | The date and time when the subscription was terminated for the associated contact | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
