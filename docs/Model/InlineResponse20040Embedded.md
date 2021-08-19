# # InlineResponse20040Embedded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the works order | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the works order was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the works order was last modified | [optional]
**companyId** | **string** | The unique identifier of the company that has been selected to perform the work | [optional]
**propertyId** | **string** | The unique identifier of the property where the work is to be carried out | [optional]
**tenancyId** | **string** | The unique identifier of the tenancy that the works order originated from | [optional]
**negotiatorId** | **string** | The unique identifier of the negotiator that booked the works order | [optional]
**typeId** | **string** | The unique identifier of the type of work that needs to be carried out | [optional]
**status** | **string** | The current status of the works order (pendingApproval/pendingQuote/raised/raisedToChase/landlordToComplete/complete/cancelled) | [optional]
**description** | **string** | A free text description of the work required | [optional]
**reporter** | **string** | The party requesting the work to be carried out (landlord/tenant/other) | [optional]
**booked** | [**\DateTime**](\DateTime.md) | The date when the works order was booked | [optional]
**required** | [**\DateTime**](\DateTime.md) | The date when the work is required to be completed by | [optional]
**completed** | [**\DateTime**](\DateTime.md) | The date when the work was completed | [optional]
**totalNetAmount** | **double** | The total net cost for all of the items of work to be carried out | [optional]
**totalVatAmount** | **double** | The total additional vat cost for all of the items of work to be carried out | [optional]
**totalGrossAmount** | **double** | The total gross cost for all of the items of work to be carried out | [optional]
**items** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse20040Items[]**](InlineResponse20040Items.md) | A collection of jobs/items of work that the works order should fulfill | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the works order | [optional]
**eTag** | **string** | The ETag for the current version of the works order. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
