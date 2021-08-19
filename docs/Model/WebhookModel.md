# # WebhookModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the webhook | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the webhook was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the webhook was last modified | [optional]
**url** | **string** | The url where the payload associated with the webhook should be sent to | [optional]
**description** | **string** | A short description associated with the webhook (ie a friendly name or label) | [optional]
**topicIds** | **string[]** | The identifiers of the topics the webhook is associated with | [optional]
**active** | **bool** | Flag denoting whether or not the webhook is active and ready to receive data | [optional]
**ignoreEtagOnlyChanges** | **bool** | Flag denoting whether or events that only contain changes to etags and/or modified dates are emitted | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
