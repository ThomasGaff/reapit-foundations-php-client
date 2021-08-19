# # TransactionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the transaction | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the transaction was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the transaction was last modified | [optional]
**category** | **string** | The transaction category (advertisingCharge,accountTransfer,bankCharges,buyerAdminFee,buyerDeposit,buyerPayment,deposit,depositDeduction,depositRefund,depositTransfer,depositTransferToAgent,depositTransferToLandlord,depositTransferToScheme,estateServiceCharge,estateWorksOrder,estateUnitWorksOrder,externalCredit,externalAgentFee,freeholderPayment,float,groundRent,goodwillPayment,holdingDeposit,introducingTenantFee,landlordAdminFee,landlordTax,landlordPayment,landlordToSupplierPayment,landlordWorksOrder,leaseholderAdminFee,leaseholderPayment,leaseholderRepayment,leaseholderWorksOrder,lettingFee,managementFee,paymentSurcharge,receipt,rent,rentGuarantee,recoveryPayment,reserveFund,tenantAdminFee,tenantPayment,tenantToLandlordPayment,tenantToSupplierPayment,trustAccountingInvoice,tenantWorksOrder,vacantManagementFee,vendorAdminFee,vendorCommission,vendorPayment,vendorToSupplierPayment,worksOrderPayment) | [optional]
**type** | **string** | The transaction type (bankersDraft,bankTransfer,cash,cheque,creditCard,debitCard,directDebit,housingBenefit,paymentRequest,standingOrder) | [optional]
**description** | **string** | The transaction description | [optional]
**status** | **string** | The status of the transaction (awaitingAuthorisation/awaitingPosting/posted/rejected) | [optional]
**ledger** | **string** | The ledger the transaction is recorded in | [optional]
**netAmount** | **double** | The transaction net amount | [optional]
**taxAmount** | **double** | The transaction tax amount | [optional]
**grossAmount** | **double** | The transaction gross amount | [optional]
**outstanding** | **double** | The amount outstanding that remains to be paid | [optional]
**companyId** | **string** | The unique identifier of the company the transaction is associated with, where applicable | [optional]
**landlordId** | **string** | The unique identifier of the landlord the transaction is associated with, where applicable | [optional]
**propertyId** | **string** | The unique identifier of the property the transaction is associated with, where applicable | [optional]
**tenancyId** | **string** | The unique identifier of the tenancy the transaction is associated with, where applicable | [optional]
**eTag** | **string** | The ETag for the current version of the transaction. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
