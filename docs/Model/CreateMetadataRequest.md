# # CreateMetadataRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entityType** | **string** | The type of the entity that this metadata is related to. This can represent a Foundations inbuilt type (an entity presented in our APIs) or it can be a custom entity type (a dynamic standalone metadata entity that you create).                Inbuilt types: applicant, appointment, company, contact, conveyancing, identityCheck, landlord, negotiator, offer, office, property, task, vendor, worksOrder |
**entityId** | **string** | The unique identifier of the entity that this metadata is related to.  For custom entities, this can be left blank and an id will be generated for you. | [optional]
**metadata** | **array<string,object>** | The JSON document to store |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
