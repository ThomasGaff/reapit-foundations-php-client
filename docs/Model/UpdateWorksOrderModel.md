# # UpdateWorksOrderModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**companyId** | **string** | The unique identifier of the company that has been selected to perform the work | [optional]
**propertyId** | **string** | The unique identifier of the property where the work is to be carried out | [optional]
**tenancyId** | **string** | The unique identifier of the tenancy that the works order originated from | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator that booked the works order | [optional]
**typeId** | **string** | The unique id of the type of work that needs to be carried out | [optional]
**status** | **string** | The current status of the works order (pendingApproval/pendingQuote/raised/raisedToChase/landlordToComplete/complete/cancelled) | [optional]
**description** | **string** | A free text description of the work required | [optional]
**reporter** | **string** | The party requesting the work to be carried out (landlord/tenant/other) | [optional]
**booked** | [**\DateTime**](\DateTime.md) | The date when the works order was booked | [optional]
**required** | [**\DateTime**](\DateTime.md) | The date when the work is required to be completed by | [optional]
**completed** | [**\DateTime**](\DateTime.md) | The date when the work was completed | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the works order | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
