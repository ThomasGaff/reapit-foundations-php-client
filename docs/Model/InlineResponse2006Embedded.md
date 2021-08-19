# # InlineResponse2006Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the relationship | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the relationship was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the relationship was last modified | [optional]
**companyId** | **string** | The unique identifier of the related company | [optional]
**associatedType** | **string** | The type of related entity (applicant/landlord/offer/tenancy/vendor) | [optional]
**associatedId** | **string** | The unique identifier of the related entity | [optional]
**fromArchive** | **bool** | Flag to determine if this role on the system is now archived | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
