# # NegotiatorModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the negotiator | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the negotiator was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the negotiator was last modified | [optional]
**name** | **string** | The name of the negotiator | [optional]
**jobTitle** | **string** | The job title of the negotiator | [optional]
**officeId** | **string** | The unique identifier of the office that the negotiator is attached to | [optional]
**workPhone** | **string** | The work phone number of the negotiator | [optional]
**mobilePhone** | **string** | The mobile phone number of the negotiator | [optional]
**email** | **string** | The email address of the negotiator | [optional]
**profileImageUrl** | **string** | The URL of the optional negotiator profile image | [optional]
**active** | **bool** | A flag determining whether or not the negotiator is active | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the negotiator | [optional]
**eTag** | **string** | The ETag for the current version of the negotiator. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
