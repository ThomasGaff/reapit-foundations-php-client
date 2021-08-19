# # UpdateWebhookModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The url where the payload associated with the webhook should be sent to |
**description** | **string** | A short description associated with the webhook (ie a friendly name or label) | [optional]
**topicIds** | **string[]** | The identifiers of the topics the subscription is associated with | [optional]
**active** | **bool** | Flag denoting whether or not the webhook is active and ready to receive data | [optional]
**ignoreEtagOnlyChanges** | **bool** | Flag denoting whether or events that only contain changes to etags and/or modified dates are emitted  Pass true to disable emitting of these events | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
