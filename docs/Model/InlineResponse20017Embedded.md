# # InlineResponse20017Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the journal entry was created | [optional]
**propertyId** | **string** | The unique identifier of the property the journal entry is related to. Can additionally be associated to another type | [optional]
**associatedType** | **string** | The entity type the journal entry has been raised against (applicant/contact/company/landlord/tenancy) | [optional]
**associatedId** | **string** | The unique identifier of the entity the journal entry has been raised against. Can additionally be associated to a property | [optional]
**typeId** | **string** | The type of journal entry | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator that created the entry | [optional]
**description** | **string** | The textual description of the journal entry event | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
