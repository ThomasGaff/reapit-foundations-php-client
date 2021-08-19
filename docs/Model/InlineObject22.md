# # InlineObject22

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**propertyId** | **string** | The unique identifier of the property the journal entry is related to. Can additionally be associated to another type (Required when &#39;associatedId&#39; is not given) | [optional]
**associatedType** | **string** | The entity type the journal entry has been raised against (applicant/contact/company/landlord/tenancy) (Required when &#39;associatedId&#39; is given) | [optional]
**associatedId** | **string** | The unique identifier of the entity the journal entry has been raised against. Can additionally be associated to a property (Required when &#39;propertyId&#39; is not given) | [optional]
**description** | **string** | The textual description of the journal entry event |
**negotiatorId** | **string** | The identifier of the negotiator recording the journal entry | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
