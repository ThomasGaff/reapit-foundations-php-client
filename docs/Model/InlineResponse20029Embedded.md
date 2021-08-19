# # InlineResponse20029Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the image, which is also the filename | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the image was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the property image was last modified | [optional]
**propertyId** | **string** | The unique identifier of the property attached to the image | [optional]
**url** | **string** | The url where the image can be downloaded from | [optional]
**caption** | **string** | The image caption | [optional]
**type** | **string** | The type of image (picture/floorPlan/epc/map) | [optional]
**order** | **int** | The display order index of the image which can be used to correctly order the whole collection | [optional]
**eTag** | **string** | The ETag for the current version of the image. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
