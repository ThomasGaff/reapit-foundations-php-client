# # InlineObject1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketingMode** | **string** | Indicates whether the applicant is look to buy or rent a property (buying/renting) | [optional]
**active** | **bool** | A flag determining whether or not the applicant is actively looking for a property | [optional]
**notes** | **string** | A free text field describing any adhoc buying or renting requirements | [optional]
**lastCall** | [**\DateTime**](\DateTime.md) | The date when the applicant was last contacted | [optional]
**nextCall** | [**\DateTime**](\DateTime.md) | The date when the applicant is next due to be contacted | [optional]
**departmentId** | **string** | The unique identifier of the department that the applicant requirements are associated with. The applicant will only match to properties with the same value | [optional]
**solicitorId** | **string** | The unique identifier of the solicitor associated to the applicant | [optional]
**type** | **string[]** | The applicant&#39;s property type requirements (eg house, bungalow, land), as defined by the applicant&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**style** | **string[]** | The applicant&#39;s property style requirements (eg detached, semiDetached), as defined by the applicant&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**situation** | **string[]** | The applicant&#39;s requirements for other aspects of prospective properties - such as outside space - as defined by the applicant&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**parking** | **string[]** | The applicant&#39;s parking requirements (eg garage), as defined by the applicant&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**age** | **string[]** | The applicant&#39;s property age requirements (eg new, period), as defined by the applicant&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**locality** | **string[]** | The applicant&#39;s general property location requirements (eg rural, townCity), as defined by the applicant&#39;s [department](https://foundations-documentation.reapit.cloud/platform-glossary#department) | [optional]
**bedroomsMin** | **int** | The minimum number of bedrooms the applicant requires | [optional]
**bedroomsMax** | **int** | The maximum number of bedrooms the applicant requires | [optional]
**receptionsMin** | **int** | The minimum number of reception rooms the applicant requires | [optional]
**receptionsMax** | **int** | The maximum number of reception rooms the applicant requires | [optional]
**bathroomsMin** | **int** | The minimum number of bathrooms the applicant requires | [optional]
**bathroomsMax** | **int** | The maximum number of bathrooms the applicant requires | [optional]
**locationType** | **string** | The applicant&#39;s location type (areas/addresses/none) | [optional]
**locationOptions** | **string[]** | The applicant&#39;s location options | [optional]
**buying** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Buying**](InlineResponse200Buying.md) |  | [optional]
**renting** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\ApplicantsIdRenting**](ApplicantsIdRenting.md) |  | [optional]
**externalArea** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200ExternalArea**](InlineResponse200ExternalArea.md) |  | [optional]
**internalArea** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200InternalArea**](InlineResponse200InternalArea.md) |  | [optional]
**source** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Source**](InlineResponse200Source.md) |  | [optional]
**officeIds** | **string[]** | A collection of unique identifiers of offices attached to the applicant. The first item in the collection is considered the primary office | [optional]
**negotiatorIds** | **string[]** | A collection of unique identifiers of negotiators attached to the applicant. The first item in the collection is considered the primary negotiator | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the applicant | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
