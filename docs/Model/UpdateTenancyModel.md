# # UpdateTenancyModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**startDate** | [**\DateTime**](\DateTime.md) | The start date of the tenancy | [optional]
**endDate** | [**\DateTime**](\DateTime.md) | The end date of the tenancy | [optional]
**status** | **string** | The current status of the tenancy (offerPending/offerWithdrawn/offerRejected/arranging/current/finished/cancelled) | [optional]
**agentRole** | **string** | The role that the agent is performing for the tenancy (managed/rentCollection/collectFirstPayment/collectRentToDate/lettingOnly/introducingTenant) | [optional]
**rent** | **double** | The amount of rent required, returned in relation to the collection frequency | [optional]
**rentFrequency** | **string** | The rent collection frequency (weekly/monthly/annually) | [optional]
**endDateConfirmed** | **bool** | Flag for end date confirmation | [optional]
**isPeriodic** | **bool** | A flag determining whether or not the tenancy has been extended indefinitely | [optional]
**typeId** | **string** | The unique identifier of the type of tenancy | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator who is managing the tenancy | [optional]
**source** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\TenanciesSource**](TenanciesSource.md) |  | [optional]
**rentInstalmentsFrequency** | **string** | The frequency of rental instalment payments (weekly/fortnightly/monthly/quarterly/halfYearly/yearly/every28Days/other) | [optional]
**rentInstalmentsAmount** | **double** | The amount due for each rent instalment (where specified) | [optional]
**rentInstalmentsStart** | [**\DateTime**](\DateTime.md) | The date that the first instalment is due | [optional]
**meterReadingGas** | **string** | The recorded utility reading for the gas meter | [optional]
**meterReadingGasLastRead** | [**\DateTime**](\DateTime.md) | Date of when the reading of gas utility was last recorded | [optional]
**meterReadingElectricity** | **string** | The recorded utility reading for the electricity meter | [optional]
**meterReadingElectricityLastRead** | [**\DateTime**](\DateTime.md) | Date of when the reading of electricity utility was last recorded | [optional]
**meterReadingWater** | **string** | The recorded utility reading for the water meter | [optional]
**meterReadingWaterLastRead** | [**\DateTime**](\DateTime.md) | Date of when the reading of water utility was last recorded | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the tenancy | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
