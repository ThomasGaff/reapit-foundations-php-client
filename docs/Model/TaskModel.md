# # TaskModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the task | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the task was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the task was last modified | [optional]
**activates** | [**\DateTime**](\DateTime.md) | The date the task becomes active | [optional]
**completed** | [**\DateTime**](\DateTime.md) | The date the task was completed | [optional]
**typeId** | **string** | The unique identifier of the task type | [optional]
**senderId** | **string** | The unique identifer of the negotiator that created the task | [optional]
**text** | **string** | The textual contents of the task or message | [optional]
**landlordId** | **string** | The unique identifier of the landlord the task is associated to | [optional]
**propertyId** | **string** | The unique identifier of the property the task is associated to | [optional]
**applicantId** | **string** | The unique identifier of the applicant the task is associated to | [optional]
**tenancyId** | **string** | The unique identifier of the tenancy the task is associated to | [optional]
**contactId** | **string** | The unique identifier of the contact the task is associated to | [optional]
**recipientId** | **string** | The unique identifier of the negotiator or office the task is being sent to | [optional]
**recipientType** | **string** | The type of the recipient (office/negotiator) | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the task | [optional]
**eTag** | **string** | The ETag for the current version of the task. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
