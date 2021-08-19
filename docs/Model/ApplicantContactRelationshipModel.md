# # ApplicantContactRelationshipModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the applicant relationship | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the relationship was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the relationship was last modified | [optional]
**applicantId** | **string** | The unique identifier of the applicant | [optional]
**associatedType** | **string** | The type of related entity (contact/company) | [optional]
**associatedId** | **string** | The unique identifier of the related contact or company | [optional]
**isMain** | **bool** | A flag denoting whether or not this relationship should be regarded as the main relationship for the parent applicant entity | [optional]
**fromArchive** | **bool** | A flag denoting whether or not this relationship is archived | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
