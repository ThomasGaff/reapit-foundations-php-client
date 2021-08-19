# # InlineObject18

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The title of the individual making the enquiry |
**forename** | **string** | The forename of the individual making the enquiry |
**surname** | **string** | The surname of the individual making the enquiry |
**position** | **string** | The selling position of the individual making the enquiry (renting/instructedThisAgent/instructedOtherAgent/privateSale/notOnMarket) | [optional]
**enquiryType** | **string** | The type of enquiry. Enquiries can created for applicants interested in buying/renting, as well as prospective vendors and landlords (salesApplicant/lettingsApplicant/salesProperty/lettingsProperty) |
**message** | **string** | Textual information about the nature of the enquiry - usually the message text from the individual making the enquiry |
**officeId** | **string** | The unique identifier of the related office |
**marketingConsent** | **string** | The marketing consent status of the individual making the enquiry (grant/deny/notAsked) |
**sourceName** | **string** | The name of the source that the enquiry was generated from |
**homePhone** | **string** | The home phone number of the individual making the enquiry (Required when no other contact details are given) | [optional]
**workPhone** | **string** | The work phone number of the individual making the enquiry (Required when no other contact details are given) | [optional]
**mobilePhone** | **string** | The mobile phone number of the individual making the enquiry (Required when no other contact details are given) | [optional]
**email** | **string** | The email of the individual making the enquiry (Required when no other contact details are given) | [optional]
**address** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\EnquiriesAddress**](EnquiriesAddress.md) |  | [optional]
**propertyIds** | **string[]** | A list of unique property identifiers that the enquiry relates to. Used to indicate the properties that a sales or lettings applicant has expressed an interest in | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
