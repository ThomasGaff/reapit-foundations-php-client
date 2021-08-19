# # ContactModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the contact | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the contact was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the contact was last modified | [optional]
**title** | **string** | The contact&#39;s title  (eg. Mr, Mrs, Miss, Dr) | [optional]
**forename** | **string** | The contact&#39;s forename | [optional]
**surname** | **string** | The contact&#39;s surname | [optional]
**dateOfBirth** | [**\DateTime**](\DateTime.md) | The contact&#39;s date of birth | [optional]
**active** | **bool** | A flag determining whether or not the contact is currently active | [optional]
**marketingConsent** | **string** | The marketing consent status of the contact (grant/deny/notAsked) | [optional]
**identityCheck** | **string** | The status of the last identity check performed against the contact (pass/fail/pending/cancelled/warnings/unchecked) | [optional]
**source** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Source**](InlineResponse2009Source.md) |  | [optional]
**homePhone** | **string** | The home phone number of the contact | [optional]
**workPhone** | **string** | The work phone number of the contact | [optional]
**mobilePhone** | **string** | The mobile phone number of the contact | [optional]
**email** | **string** | The email address of the contact | [optional]
**archivedOn** | [**\DateTime**](\DateTime.md) | The date and time the contact was archived | [optional]
**fromArchive** | **bool** | A flag determining whether or not the contact is archived | [optional]
**primaryAddress** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress**](InlineResponse2009PrimaryAddress.md) |  | [optional]
**secondaryAddress** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress**](InlineResponse2009PrimaryAddress.md) |  | [optional]
**workAddress** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009PrimaryAddress**](InlineResponse2009PrimaryAddress.md) |  | [optional]
**officeIds** | **string[]** | A collection of unique identifiers of offices attached to the contact. The first item in the collection is considered the primary office | [optional]
**negotiatorIds** | **string[]** | A collection of unique identifiers of negotiators attached to the contact. The first item in the collection is considered the primary negotiator | [optional]
**communicationPreferenceLetter** | **bool** | A flag determining whether or not the contact is happy to receive communications by letter | [optional]
**communicationPreferenceEmail** | **bool** | A flag determining whether or not the contact is happy to receive communications by email | [optional]
**communicationPreferencePhone** | **bool** | A flag determining whether or not the contact is happy to receive communications by phone | [optional]
**communicationPreferenceSMS** | **bool** | A flag determining whether or not the contact is happy to receive communications by SMS | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the contact | [optional]
**eTag** | **string** | The ETag for the current version of the contact. Used for managing update concurrency | [optional] [readonly]
**relationships** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2009Relationships[]**](InlineResponse2009Relationships.md) | A list of relationships belonging to the contact. This is later removed from the response | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
