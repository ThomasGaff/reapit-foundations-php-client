# # InlineObject24

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | A flag determining whether or not the landlord is currently active | [optional]
**solicitorId** | **string** | The unique identifier of the company acting as the landlord&#39;s solicitor | [optional]
**officeId** | **string** | The unique identifier of the office that is associated to the landlord |
**source** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\LandlordsSource**](LandlordsSource.md) |  | [optional]
**related** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\LandlordsRelated[]**](LandlordsRelated.md) | A collection of contacts and/or companies associated to the landlord. The first item in the collection is considered the primary relationship |
**metadata** | **array<string,object>** | App specific metadata that to set against the landlord | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
