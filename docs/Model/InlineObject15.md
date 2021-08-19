# # InlineObject15

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**associatedType** | **string** | The type of entity that the document is associated with (appliance/applicant/bankStatement/batch/certificate/contact/depositCertificate/estate/estateUnit/idCheck/keySet/landlord/nominalTransaction/property/tenancy/tenancyCheck/tenancyRenewal/worksOrder) |
**associatedId** | **string** | The unique identifier of the entity that the document is associated with |
**typeId** | **string** | The unique identifier of the type of document |
**name** | **string** | The filename of the document |
**fileData** | **string** | The base64 encoded document content, prefixed with the content type (eg. data:text/plain;base64,VGVzdCBmaWxl)  This supports upto 6MB | [optional]
**fileUrl** | **string** | The presigned s3 url which a document has been uploaded to (This supports files up to 30MB) | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the document | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
