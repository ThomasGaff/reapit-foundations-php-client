# # InlineResponse20025Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the offer | [optional]
**created** | [**\DateTime**](\DateTime.md) | The the date and time when the offer was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the offer was last modified | [optional]
**currency** | **string** | The currency that applies to monetary amounts exposed in the model | [optional]
**applicantId** | **string** | The unique identifier of the applicant associated to the offer | [optional]
**propertyId** | **string** | The unique identifier of the property associated to the offer | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator associated to the offer | [optional]
**date** | [**\DateTime**](\DateTime.md) | The date when the offer was made | [optional]
**amount** | **double** | The monetary amount of the offer | [optional]
**status** | **string** | The current status of the offer (pending/withdrawn/rejected/accepted/noteOfInterest) | [optional]
**inclusions** | **string** | A free text field describing items that should be included in the sale | [optional]
**exclusions** | **string** | A free text field describing items that are explicitly excluded from the sale | [optional]
**conditions** | **string** | A free text field describing any other conditions set by either party that relate to the sale | [optional]
**related** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20025Related[]**](InlineResponse20025Related.md) | A collection of contacts associated to the offer | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the offer | [optional]
**eTag** | **string** | The ETag for the current version of the offer. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
