# # CreateIdentityDocumentModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**typeId** | **string** | The unique identifier of the type of identity document provided |
**expiry** | [**\DateTime**](\DateTime.md) | The date when the document expires and becomes invalid | [optional]
**details** | **string** | Details regarding the identity document (eg. passport number) (Required when &#39;fileData&#39; is not given) | [optional]
**fileData** | **string** | The base64 encoded identity document content, prefixed with the content type (eg. data:text/plain;base64,VGVzdCBmaWxl) (Required when &#39;details&#39; are not given)  The total request payload cannot exceed 6Mb, regardless of the number of documents being sent | [optional]
**fileUrl** | **string** | The presigned s3 url which a document has been uploaded to (This supports files up to 30MB) | [optional]
**name** | **string** | The filename to store the document as (Required when &#39;details&#39; are not given) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
