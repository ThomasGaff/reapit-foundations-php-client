# # InlineResponse20020Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the landlord relationship | [optional]
**landlordId** | **string** | The unique identifier of the landlord | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the relationship was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the relationship was last modified | [optional]
**associatedType** | **string** | The type of related entity (contact/company) | [optional]
**associatedId** | **string** | The unique identifier of the related contact or company | [optional]
**isMain** | **bool** | A flag denoting whether or not the relationship should be regarded as the main relationship for the parent landlord entity | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
