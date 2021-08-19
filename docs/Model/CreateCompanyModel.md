# # CreateCompanyModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the company |
**branch** | **string** | The branch name of the company | [optional]
**notes** | **string** | A free text field containing notes that describe the company&#39;s business or service offering | [optional]
**active** | **bool** | A flag determining whether or not the company is currently active | [optional]
**vatRegistered** | **bool** | A flag determining whether or not the company is VAT registered | [optional]
**typeIds** | **string[]** | A collection of unique identifiers of company types that categorise the type of business the company operates |
**supplierTypeId** | **string** | The unique identifier of a supplier type, if the company is a supplier | [optional]
**workPhone** | **string** | The work phone number of the company. (Required when no other company or address details are provided) | [optional]
**mobilePhone** | **string** | The mobile phone number of the company. (Required when no other company or address details are provided) | [optional]
**email** | **string** | The email address of the company. (Required when no other company or address details are provided) | [optional]
**address** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\CompaniesAddress**](CompaniesAddress.md) |  | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the company | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
