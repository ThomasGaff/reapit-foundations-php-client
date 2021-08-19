# # InlineResponse20034Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the tenancy relationship | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the relationship was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the relationship was last modified | [optional]
**tenancyId** | **string** | The unique identifier of the tenancy | [optional]
**associatedType** | **string** | The type of related entity (contact/company) | [optional]
**associatedId** | **string** | The unique identifier of the related contact or company | [optional]
**isMain** | **bool** | A flag denoting whether or not this contact or company should be regarded as the main tenant | [optional]
**fromArchive** | **bool** | A flag denoting whether or not this relationship is archived | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
