# # UpdateContactModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The contact&#39;s title  (eg. Mr, Mrs, Miss, Dr) | [optional]
**forename** | **string** | The contact&#39;s forename | [optional]
**surname** | **string** | The contact&#39;s surname | [optional]
**dateOfBirth** | [**\DateTime**](\DateTime.md) | The contact&#39;s date of birth | [optional]
**active** | **bool** | A flag determining whether or not the contact is currently active | [optional]
**marketingConsent** | **string** | The marketing consent status of the contact (grant/deny/notAsked) | [optional]
**source** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\ContactsIdSource**](ContactsIdSource.md) |  | [optional]
**homePhone** | **string** | The home phone number of the contact | [optional]
**workPhone** | **string** | The work phone number of the contact | [optional]
**mobilePhone** | **string** | The mobile phone number of the contact | [optional]
**email** | **string** | The email address of the contact | [optional]
**officeIds** | **string[]** | A collection of unique identifiers of offices attached to the contact. The first item in the collection is considered the primary office | [optional]
**negotiatorIds** | **string[]** | A collection of unique identifiers of negotiators attached to the contact. The first item in the collection is considered the primary negotiator | [optional]
**primaryAddress** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\ContactsIdPrimaryAddress**](ContactsIdPrimaryAddress.md) |  | [optional]
**secondaryAddress** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\ContactsIdPrimaryAddress**](ContactsIdPrimaryAddress.md) |  | [optional]
**workAddress** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\ContactsIdPrimaryAddress**](ContactsIdPrimaryAddress.md) |  | [optional]
**communicationPreferenceLetter** | **bool** | A flag determining whether or not the contact is happy to receive communications by letter | [optional]
**communicationPreferenceEmail** | **bool** | A flag determining whether or not the contact is happy to receive communications by email | [optional]
**communicationPreferencePhone** | **bool** | A flag determining whether or not the contact is happy to receive communications by phone | [optional]
**communicationPreferenceSMS** | **bool** | A flag determining whether or not the contact is happy to receive communications by SMS | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the contact | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
