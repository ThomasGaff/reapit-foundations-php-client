# # AreaModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the area | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the area was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the area was last modified | [optional]
**name** | **string** | The name of the area | [optional]
**active** | **bool** | A flag denoting whether the area can currently be selected against properties and applicants | [optional]
**type** | **string** | The type of area (postcodes/polygon/group) | [optional]
**area** | **string[]** | The location details (comma delimited list of postcodes, group ids or lat/long coordinate groups) | [optional]
**departmentIds** | **string[]** | A collection of unique identifiers of departments associated to the area | [optional]
**officeIds** | **string[]** | A collection of unique identifiers of offices attached to the area. The first item in the collection is considered the primary office | [optional]
**eTag** | **string** | The ETag for the current version of the area. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
