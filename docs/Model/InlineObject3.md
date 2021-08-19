# # InlineObject3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the area |
**type** | **string** | The type of area (postcodes/polygon/group) |
**area** | **string[]** | The location details (comma delimited list of postcodes, group ids or lat/long coordinate groups) |
**departmentIds** | **string[]** | A collection of unique identifiers of departments associated to the area | [optional]
**officeIds** | **string[]** | A collection of unique identifiers of offices attached to the area. The first item in the collection is considered the primary office | [optional]
**parentId** | **string** | The unique identifier of the parent area, if the area should be registered as a child area/group in an existing area group | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
