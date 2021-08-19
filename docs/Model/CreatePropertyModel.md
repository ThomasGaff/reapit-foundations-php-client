# # CreatePropertyModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketingMode** | **string** | The marketing mode of the property (selling/letting/sellingAndLetting) |
**departmentId** | **string** | The unique identifier of the department the property is associated with. The property will only match to applicants with the same values set. See the [Platform Glossary](https://foundations-documentation.reapit.cloud/platform-glossary#department) for more information about departments |
**strapline** | **string** | The strapline description containing a short summary about the property | [optional]
**description** | **string** | The brief description of the property | [optional]
**summary** | **string** | The summary of accommodation, typically short phrases or bullet points describing the key features of the property | [optional]
**alternateId** | **string** | An optional alternative identifier specified for this property | [optional]
**address** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesAddress**](PropertiesAddress.md) |  |
**bedrooms** | **int** | The total number of bedrooms in the property | [optional]
**receptions** | **int** | The total number of reception rooms in the property | [optional]
**bathrooms** | **int** | The total number of bathrooms in the property | [optional]
**councilTax** | **string** | The council tax banding of the property (A/B/C/D/E/F/G/H) | [optional]
**internetAdvertising** | **bool** | A flag denoting whether or not this property can be advertised on the internet | [optional]
**viewingArrangements** | **string** | The arrangements regarding viewing the property | [optional]
**videoUrl** | **string** | The url of a video associated with this property, such as a virtual tour | [optional]
**videoCaption** | **string** | The caption for the video url associated with this property | [optional]
**video2Url** | **string** | The url of a second video associated with this property, such as a virtual tour | [optional]
**video2Caption** | **string** | The caption for the second video url associated with this property | [optional]
**notes** | **string** | Any general notes regarding the property. These are not usually exposed to end users and may contain sensitive information about a sale | [optional]
**longDescription** | **string** | The long description of the property | [optional]
**boardStatus** | **string** | The status of the advertising board sited outside or near to the property | [optional]
**boardNotes** | **string** | Any notes relevant to the advertising board sited outside or near to the property | [optional]
**boardUpdated** | [**\DateTime**](\DateTime.md) | The date the advertising board was last updated (or should be updated when the date is in the future) | [optional]
**epc** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesEpc**](PropertiesEpc.md) |  | [optional]
**externalArea** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesExternalArea**](PropertiesExternalArea.md) |  | [optional]
**internalArea** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesInternalArea**](PropertiesInternalArea.md) |  | [optional]
**selling** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesSelling**](PropertiesSelling.md) |  | [optional]
**letting** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesLetting**](PropertiesLetting.md) |  | [optional]
**type** | **string[]** | The attributes describing the overall type of the property (eg house, bungalow, land), as defined by the property&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**style** | **string[]** | The attributes describing the style of property (eg detached, semiDetached), defined by the property&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**situation** | **string[]** | The attributes describing other aspects of the property - such as outside space - as defined by the property&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**parking** | **string[]** | The attributes describing the parking available at the property (eg garage), as defined by the property&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**age** | **string[]** | The attributes describing the age of the property (eg new, period), as defined by the property&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**locality** | **string[]** | The attributes describing the general location of the property (eg rural, townCity), as defined by the property&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**rooms** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\PropertiesRooms[]**](PropertiesRooms.md) | Details of each room in the property | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator managing the property |
**officeIds** | **string[]** | A collection of unique identifiers of offices attached to the property |
**areaId** | **string** | The unique identifier of the area that the property resides in | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the property | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
