# # CreateApplicantRentingModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**moveDate** | [**\DateTime**](\DateTime.md) | The date the applicant is looking to move to a new property | [optional]
**term** | **string** | The applicant&#39;s preferred letting term (long/short/any) | [optional]
**rentFrom** | **double** | The lower bound of the applicant&#39;s budget. (Required when &#39;marketingMode&#39; is &#39;renting&#39; and &#39;rentTo&#39; is 0) | [optional]
**rentTo** | **double** | The upper bound of the applicant&#39;s budget. (Required when &#39;marketingMode&#39; is &#39;renting&#39; and &#39;rentFrom&#39; is 0) | [optional]
**rentFrequency** | **string** | The desired rent collection frequency specified by the applicant&#39;s budget (weekly/monthly/annually). | [optional]
**furnishing** | **string[]** | A list of property furnishing requirements taken from the full listing of the associated department | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
