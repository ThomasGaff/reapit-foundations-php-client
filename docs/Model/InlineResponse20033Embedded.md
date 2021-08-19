# # InlineResponse20033Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the tenancy | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the tenancy was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the tenancy was last modified | [optional]
**startDate** | [**\DateTime**](\DateTime.md) |  | [optional]
**endDate** | [**\DateTime**](\DateTime.md) |  | [optional]
**status** | **string** | The current status of the tenancy (offerPending/offerWithdrawn/offerRejected/arranging/current/finished/cancelled) | [optional]
**agentRole** | **string** | The role that the agent is performing for this tenancy (managed/rentCollection/collectFirstPayment/collectRentToDate/lettingOnly/introducingTenant) | [optional]
**rent** | **int** | The amount of rent required, returned in relation to the collection frequency | [optional]
**rentFrequency** | **string** | The rent collection frequency (weekly/monthly/annually) | [optional]
**endDateConfirmed** | **bool** | A flag determining whether or not the tenancy is confirmed to finish at the end date | [optional]
**isPeriodic** | **bool** | A flag determining whether or not the tenancy has been extended indefinitely | [optional]
**rentInstalmentsFrequency** | **string** | The frequency of rental instalment payments (weekly/fortnightly/monthly/quarterly/halfYearly/yearly/every28Days/other) | [optional]
**rentInstalmentsAmount** | **double** | The amount due for each rent instalment (where specified) | [optional]
**rentInstalmentsStart** | [**\DateTime**](\DateTime.md) | The date that the first instalment is due | [optional]
**meterReadingGas** | **string** | The recorded utility reading for the gas meter | [optional]
**meterReadingGasLastRead** | [**\DateTime**](\DateTime.md) | Date of when the reading of gas utility was last recorded | [optional]
**meterReadingElectricity** | **string** | The recorded utility reading for the electricity meter | [optional]
**meterReadingElectricityLastRead** | [**\DateTime**](\DateTime.md) | Date of when the reading of electricity utility was last recorded | [optional]
**meterReadingWater** | **string** | The recorded utility reading for the water meter | [optional]
**meterReadingWaterLastRead** | [**\DateTime**](\DateTime.md) | Date of when the reading of water utility was last recorded | [optional]
**typeId** | **string** | The unique identifier of the type of tenancy | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator who is managing the tenancy | [optional]
**propertyId** | **string** | The unique identifier of the property that relates to the tenancy | [optional]
**applicantId** | **string** | The unique identifier of the applicant who has applied to be a tenant | [optional]
**source** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20033Source**](InlineResponse20033Source.md) |  | [optional]
**related** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20033Related[]**](InlineResponse20033Related.md) | A collection of contact / company tenants associated to the tenancy. The first item in the collection is considered the primary relationship | [optional]
**fromArchive** | **bool** | A flag denoting whether or not this tenancy is archived | [optional]
**eTag** | **string** | The ETag for the current version of the tenancy. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
