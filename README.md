# reapit-foundations-php-client

<p>Technical documentation for the Reapit Foundations REST API endpoints. This tool is interactive and provides instant access to data hosted in our <strong><a href=\"https://foundations-documentation.reapit.cloud/api/api-documentation#sandbox-mode\">sandbox environment</a> </strong>with <strong>authentication</strong> and <strong>versioning</strong> headers pre-populated. Example requests and responses are shown by default but you can switch to view a fully documented schema - look for the&nbsp;<strong>model</strong> link.</p>
<p>* To begin developing with the platform, consult our&nbsp;<strong><a href=\"https://foundations-documentation.reapit.cloud/api/api-documentation\">documentation</a></strong>&nbsp;<br />* To report a bug or request a new feature, see our <strong><a href=\"https://developers.reapit.cloud/help\">help pages</a>&nbsp;<br /></strong>* For information on terminology, see our&nbsp;<strong><a href=\"https://foundations-documentation.reapit.cloud/platform-glossary\">glossary</a></strong>&nbsp;<br />* Our APIs are located at&nbsp;<strong>https://platform.reapit.cloud<br /></strong>* The current API version is&nbsp;<strong>2020-01-31<br /></strong></p>


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run the following

`composer require northernestateagencies/reapit-foundations-php-client`:

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/reapit-foundations-php-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Authorization
$config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NorthernEstateAgencies\ReapitFoundationsClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NorthernEstateAgencies\ReapitFoundationsClient\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | A limit on the number of applicants to be returned per page. Value can range between 1 and 100, and the default is 25
$pageNumber = 56; // int | The page number to return (must be greater than 0)
$sortBy = 'sortBy_example'; // string | Sort results by the value specified. Prefix string with '-' to indicate descending direction (created/modified/nextCall/lastCall)
$embed = array('embed_example'); // string[] | Embed additional resources into the applicants returned
$id = array('id_example'); // string[] | Only return applicants where the `id` field matches one or more values provided
$age = array('age_example'); // string[] | Only return applicants where the `age` field contains one or more values provided
$emailAddresses = array('emailAddresses_example'); // string[] | Only return applicants where the `email` field matches one or more values provided
$furnishing = array('furnishing_example'); // string[] | Only return appliants where the `furnishing` field contains one or more values provided. Only applicable when marketingMode is renting
$locality = array('locality_example'); // string[] | Only return applicants where the `locality` field contains one or more values provided
$negotiatorId = array('negotiatorId_example'); // string[] | Only return applicants where the `negotiatorId` field matches one or more values provided
$officeId = array('officeId_example'); // string[] | Only return applicants where the `officeId` field matches one or more values provided
$parking = array('parking_example'); // string[] | Only return applicants where the `parking` field contains one or more values provided
$situation = array('situation_example'); // string[] | Only return applicants where the `situation` field contains one or more values provided
$style = array('style_example'); // string[] | Only return applicants where the `style` field contains one or more values provided
$type = array('type_example'); // string[] | Only return applicants where the `type` field contains one or more values provided
$address = 'address_example'; // string | Only return applicants where the `address` field matches the value provided
$departmentId = 'departmentId_example'; // string | Only return applicants where the `departmentId` field matches the value provided
$marketingMode = array('marketingMode_example'); // string[] | Only return applicants where the `marketingMode` field matches the value provided
$name = 'name_example'; // string | Only return applicants where the `name` field matches the value provided
$priceFrom = 56; // int | Only return applicants where the `buying.priceFrom` field is more than or equal to the value provided
$priceTo = 56; // int | Only return applicants where the `buying.priceTo` field is less than or equal to the value provided
$rentFrom = 3.4; // double | Only return applicants where the `renting.rentFrom` field is more than or equal to the value provided
$rentTo = 3.4; // double | Only return applicants where the `renting.rentTo` field is less than or equal to the value provided
$rentFrequency = array('rentFrequency_example'); // string[] | The rent collection frequency that 'rentFrom' and 'rentTo' parameters are in relation to. Defaults to monthly.
$bedroomsFrom = 56; // int | Only return applicants where the `bedrooms` field is more than or equal to the value provided
$bedroomsTo = 56; // int | Only return applicants where the `bedrooms` field is less than or equal to the value provided
$active = True; // bool | Only return applicants where the `active` field matches the value provided
$fromArchive = True; // bool | Only return applicants where the `fromArchive` field matches the value provided
$createdFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `created` field is on or after the ISO8601 date and time value provided
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `created` field is on or before the ISO8601 date and time value provided
$modifiedFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `modified` field is on or after the ISO8601 date and time value provided
$modifiedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `modified` field is on or before the ISO8601 date and time value provided
$lastCallFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `lastCall` field is on or after the ISO8601 date and time value provided
$lastCallTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `lastCall` field is on or before the ISO8601 date and time value provided
$nextCallFrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `nextCall` field is on or after the ISO8601 date and time value provided
$nextCallTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return applicants where the `nextCall` field is on or before the ISO8601 date and time value provided
$metadata = array('metadata_example'); // string[] | Only return applicants where the metadata matches the filters given

try {
    $result = $apiInstance->applicantsGet($pageSize, $pageNumber, $sortBy, $embed, $id, $age, $emailAddresses, $furnishing, $locality, $negotiatorId, $officeId, $parking, $situation, $style, $type, $address, $departmentId, $marketingMode, $name, $priceFrom, $priceTo, $rentFrom, $rentTo, $rentFrequency, $bedroomsFrom, $bedroomsTo, $active, $fromArchive, $createdFrom, $createdTo, $modifiedFrom, $modifiedTo, $lastCallFrom, $lastCallTo, $nextCallFrom, $nextCallTo, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->applicantsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://platform.reapit.cloud*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicantsApi* | [**applicantsGet**](docs/Api/ApplicantsApi.md#applicantsget) | **GET** /applicants/ | Gets a collection of applicants matching the filter criteria provided
*ApplicantsApi* | [**applicantsIdPatch**](docs/Api/ApplicantsApi.md#applicantsidpatch) | **PATCH** /applicants/{id} | Updates an applicant
*ApplicantsApi* | [**applicantsIdRelationshipsGet**](docs/Api/ApplicantsApi.md#applicantsidrelationshipsget) | **GET** /applicants/{id}/relationships | Gets this applicants contact/company relationships
*ApplicantsApi* | [**applicantsIdRelationshipsPost**](docs/Api/ApplicantsApi.md#applicantsidrelationshipspost) | **POST** /applicants/{id}/relationships | Creates a relationship between this applicant and a contact/company
*ApplicantsApi* | [**applicantsIdRelationshipsRelationshipIdDelete**](docs/Api/ApplicantsApi.md#applicantsidrelationshipsrelationshipiddelete) | **DELETE** /applicants/{id}/relationships/{relationshipId} | Deletes a specific relationship between this applicant and a contact/company
*ApplicantsApi* | [**applicantsPost**](docs/Api/ApplicantsApi.md#applicantspost) | **POST** /applicants/ | Creates a new applicant
*ApplicantsApi* | [**getApplicantById**](docs/Api/ApplicantsApi.md#getapplicantbyid) | **GET** /applicants/{id} | Gets a single applicant by its&#39; unique identifier
*ApplicantsApi* | [**getApplicantRelationshipById**](docs/Api/ApplicantsApi.md#getapplicantrelationshipbyid) | **GET** /applicants/{id}/relationships/{relationshipId} | Gets a single relationship between this applicant and a contact/company
*AppointmentsApi* | [**appointmentsGet**](docs/Api/AppointmentsApi.md#appointmentsget) | **GET** /appointments/ | Gets a collection of calendar appointments
*AppointmentsApi* | [**appointmentsIdPatch**](docs/Api/AppointmentsApi.md#appointmentsidpatch) | **PATCH** /appointments/{id} | Updates an appointment in one or more negotiators&#39; diary
*AppointmentsApi* | [**appointmentsPost**](docs/Api/AppointmentsApi.md#appointmentspost) | **POST** /appointments/ | Creates an appointment in one or more negotiators diary
*AppointmentsApi* | [**getAppointmentById**](docs/Api/AppointmentsApi.md#getappointmentbyid) | **GET** /appointments/{id} | Gets a single calendar appointment by its&#39; unique identifier
*AreasApi* | [**areasGet**](docs/Api/AreasApi.md#areasget) | **GET** /areas/ | Gets a collection of areas
*AreasApi* | [**areasIdPatch**](docs/Api/AreasApi.md#areasidpatch) | **PATCH** /areas/{id} | Updates an existing area
*AreasApi* | [**areasPost**](docs/Api/AreasApi.md#areaspost) | **POST** /areas/ | Creates a new area
*AreasApi* | [**getAreaById**](docs/Api/AreasApi.md#getareabyid) | **GET** /areas/{id} | Retrieves a specific area
*CompaniesApi* | [**companiesGet**](docs/Api/CompaniesApi.md#companiesget) | **GET** /companies/ | Gets a paged collection of companies
*CompaniesApi* | [**companiesIdPatch**](docs/Api/CompaniesApi.md#companiesidpatch) | **PATCH** /companies/{id} | Updates a company by unique identifier
*CompaniesApi* | [**companiesIdRelationshipsGet**](docs/Api/CompaniesApi.md#companiesidrelationshipsget) | **GET** /companies/{id}/relationships | Retrieve details of the roles/relationships for a specific company
*CompaniesApi* | [**companiesIdStaffMembersGet**](docs/Api/CompaniesApi.md#companiesidstaffmembersget) | **GET** /companies/{id}/staffMembers | Gets a collection of a company&#39;s staff members
*CompaniesApi* | [**companiesPost**](docs/Api/CompaniesApi.md#companiespost) | **POST** /companies/ | Creates a new company
*CompaniesApi* | [**getCompanyById**](docs/Api/CompaniesApi.md#getcompanybyid) | **GET** /companies/{id} | Gets a single company by its&#39; unique identifier
*ConfigurationApi* | [**configurationAppointmentTypesGet**](docs/Api/ConfigurationApi.md#configurationappointmenttypesget) | **GET** /configuration/appointmentTypes | Gets the full listing of appointment types
*ConfigurationApi* | [**configurationAppointmentTypesIdGet**](docs/Api/ConfigurationApi.md#configurationappointmenttypesidget) | **GET** /configuration/appointmentTypes/{id} | Gets a single appointment type
*ConfigurationApi* | [**configurationBoardStatusesGet**](docs/Api/ConfigurationApi.md#configurationboardstatusesget) | **GET** /configuration/boardStatuses | Gets the full listing of board statuses
*ConfigurationApi* | [**configurationBoardStatusesIdGet**](docs/Api/ConfigurationApi.md#configurationboardstatusesidget) | **GET** /configuration/boardStatuses/{id} | Gets a single board status
*ConfigurationApi* | [**configurationCertificateTypesGet**](docs/Api/ConfigurationApi.md#configurationcertificatetypesget) | **GET** /configuration/certificateTypes | Gets the full listing of certificate types
*ConfigurationApi* | [**configurationCertificateTypesIdGet**](docs/Api/ConfigurationApi.md#configurationcertificatetypesidget) | **GET** /configuration/certificateTypes/{id} | Gets a single certificate type
*ConfigurationApi* | [**configurationCompanyTypesGet**](docs/Api/ConfigurationApi.md#configurationcompanytypesget) | **GET** /configuration/companyTypes | Gets the full listing of company types
*ConfigurationApi* | [**configurationCompanyTypesIdGet**](docs/Api/ConfigurationApi.md#configurationcompanytypesidget) | **GET** /configuration/companyTypes/{id} | Gets a single company type
*ConfigurationApi* | [**configurationDocumentTypesGet**](docs/Api/ConfigurationApi.md#configurationdocumenttypesget) | **GET** /configuration/documentTypes | Gets the full listing of document types
*ConfigurationApi* | [**configurationDocumentTypesIdGet**](docs/Api/ConfigurationApi.md#configurationdocumenttypesidget) | **GET** /configuration/documentTypes/{id} | Gets a single document type
*ConfigurationApi* | [**configurationFollowUpResponsesGet**](docs/Api/ConfigurationApi.md#configurationfollowupresponsesget) | **GET** /configuration/followUpResponses | Gets the full listing of pre-defined appointment follow up feedback responses
*ConfigurationApi* | [**configurationFollowUpResponsesIdGet**](docs/Api/ConfigurationApi.md#configurationfollowupresponsesidget) | **GET** /configuration/followUpResponses/{id} | Gets a single pre-defined appointment follow up feedback response
*ConfigurationApi* | [**configurationIdentityDocumentTypesGet**](docs/Api/ConfigurationApi.md#configurationidentitydocumenttypesget) | **GET** /configuration/identityDocumentTypes | Gets the full listing of ID document types
*ConfigurationApi* | [**configurationIdentityDocumentTypesIdGet**](docs/Api/ConfigurationApi.md#configurationidentitydocumenttypesidget) | **GET** /configuration/identityDocumentTypes/{id} | Gets a single ID document type
*ConfigurationApi* | [**configurationJournalEntryTypesGet**](docs/Api/ConfigurationApi.md#configurationjournalentrytypesget) | **GET** /configuration/journalEntryTypes | Gets the full listing of journal entry types
*ConfigurationApi* | [**configurationJournalEntryTypesIdGet**](docs/Api/ConfigurationApi.md#configurationjournalentrytypesidget) | **GET** /configuration/journalEntryTypes/{id} | Gets a single journal entry type
*ConfigurationApi* | [**configurationSellingReasonsGet**](docs/Api/ConfigurationApi.md#configurationsellingreasonsget) | **GET** /configuration/sellingReasons | Gets the full listing of vendor selling reasons
*ConfigurationApi* | [**configurationSellingReasonsIdGet**](docs/Api/ConfigurationApi.md#configurationsellingreasonsidget) | **GET** /configuration/sellingReasons/{id} | Gets a single vendor selling reason
*ConfigurationApi* | [**configurationSupplierTypesGet**](docs/Api/ConfigurationApi.md#configurationsuppliertypesget) | **GET** /configuration/supplierTypes | Gets the full listing of supplier types
*ConfigurationApi* | [**configurationSupplierTypesIdGet**](docs/Api/ConfigurationApi.md#configurationsuppliertypesidget) | **GET** /configuration/supplierTypes/{id} | Gets a single supplier type
*ConfigurationApi* | [**configurationTaskTypesGet**](docs/Api/ConfigurationApi.md#configurationtasktypesget) | **GET** /configuration/taskTypes | Gets the full listing of task types
*ConfigurationApi* | [**configurationTaskTypesIdGet**](docs/Api/ConfigurationApi.md#configurationtasktypesidget) | **GET** /configuration/taskTypes/{id} | Gets a single task type
*ConfigurationApi* | [**configurationTenancyTypesGet**](docs/Api/ConfigurationApi.md#configurationtenancytypesget) | **GET** /configuration/tenancyTypes | Gets the full listing of tenancy types
*ConfigurationApi* | [**configurationTenancyTypesIdGet**](docs/Api/ConfigurationApi.md#configurationtenancytypesidget) | **GET** /configuration/tenancyTypes/{id} | Gets a single tenancy type
*ConfigurationApi* | [**configurationVendorTypesGet**](docs/Api/ConfigurationApi.md#configurationvendortypesget) | **GET** /configuration/vendorTypes | Gets the full listing of vendor types
*ConfigurationApi* | [**configurationVendorTypesIdGet**](docs/Api/ConfigurationApi.md#configurationvendortypesidget) | **GET** /configuration/vendorTypes/{id} | Gets a single vendor type
*ConfigurationApi* | [**configurationWorksOrderTypesGet**](docs/Api/ConfigurationApi.md#configurationworksordertypesget) | **GET** /configuration/worksOrderTypes | Gets the full listing of work order types
*ConfigurationApi* | [**configurationWorksOrderTypesIdGet**](docs/Api/ConfigurationApi.md#configurationworksordertypesidget) | **GET** /configuration/worksOrderTypes/{id} | Gets a single work order type
*ContactsApi* | [**contactsGet**](docs/Api/ContactsApi.md#contactsget) | **GET** /contacts/ | Retrieve a collection of contacts
*ContactsApi* | [**contactsIdPatch**](docs/Api/ContactsApi.md#contactsidpatch) | **PATCH** /contacts/{id} | Update a contact
*ContactsApi* | [**contactsIdRelationshipsGet**](docs/Api/ContactsApi.md#contactsidrelationshipsget) | **GET** /contacts/{id}/relationships | Retrieve details of the roles/relationships for a specific contact
*ContactsApi* | [**contactsIdSubscriptionsGet**](docs/Api/ContactsApi.md#contactsidsubscriptionsget) | **GET** /contacts/{id}/subscriptions | Retrieve details of any mailing and/or event subscriptions for a specific contact
*ContactsApi* | [**contactsIdSubscriptionsSubscriptionIdGet**](docs/Api/ContactsApi.md#contactsidsubscriptionssubscriptionidget) | **GET** /contacts/{id}/subscriptions/{subscriptionId} | Retrieve details of a specific mailing or event subscription for a specific contact
*ContactsApi* | [**contactsIdSubscriptionsSubscriptionIdPut**](docs/Api/ContactsApi.md#contactsidsubscriptionssubscriptionidput) | **PUT** /contacts/{id}/subscriptions/{subscriptionId} | Updates the details of a specific mailing or event subscription for a specific contact
*ContactsApi* | [**contactsPost**](docs/Api/ContactsApi.md#contactspost) | **POST** /contacts/ | Create a new contact
*ContactsApi* | [**getContactById**](docs/Api/ContactsApi.md#getcontactbyid) | **GET** /contacts/{id} | Retrieve a specific contact
*ConveyancingApi* | [**conveyancingGet**](docs/Api/ConveyancingApi.md#conveyancingget) | **GET** /conveyancing/ | Retrieves sales progression information for a collection of offers
*ConveyancingApi* | [**conveyancingIdChainGet**](docs/Api/ConveyancingApi.md#conveyancingidchainget) | **GET** /conveyancing/{id}/chain | Retrieves details of the known chain for the specified offer
*ConveyancingApi* | [**conveyancingIdDownwardDelete**](docs/Api/ConveyancingApi.md#conveyancingiddownwarddelete) | **DELETE** /conveyancing/{id}/downward | Deletes the link between the specified offer and the one below it one in the chain (the buyers sale)
*ConveyancingApi* | [**conveyancingIdDownwardPost**](docs/Api/ConveyancingApi.md#conveyancingiddownwardpost) | **POST** /conveyancing/{id}/downward | Create a link between the specified offer to another below this one in the chain (the buyers sale)
*ConveyancingApi* | [**conveyancingIdGet**](docs/Api/ConveyancingApi.md#conveyancingidget) | **GET** /conveyancing/{id} | Retrieves sales progression information for the specified offer
*ConveyancingApi* | [**conveyancingIdPatch**](docs/Api/ConveyancingApi.md#conveyancingidpatch) | **PATCH** /conveyancing/{id} | Updates sales progression information for the specified offer
*ConveyancingApi* | [**conveyancingIdUpwardDelete**](docs/Api/ConveyancingApi.md#conveyancingidupwarddelete) | **DELETE** /conveyancing/{id}/upward | Deletes the link between the specified offer and the one above it one in the chain (the vendors purchase)
*ConveyancingApi* | [**conveyancingIdUpwardPost**](docs/Api/ConveyancingApi.md#conveyancingidupwardpost) | **POST** /conveyancing/{id}/upward | Create a link between the specified offer to another above this one in the chain (the vendors purchase)
*DepartmentsApi* | [**departmentsGet**](docs/Api/DepartmentsApi.md#departmentsget) | **GET** /departments/ | Gets a collection of departments
*DepartmentsApi* | [**getDepartmentById**](docs/Api/DepartmentsApi.md#getdepartmentbyid) | **GET** /departments/{id} | Gets a single department by its&#39; unique identifier
*DocumentsApi* | [**documentsGet**](docs/Api/DocumentsApi.md#documentsget) | **GET** /documents/ | Gets a collection of documents matching the filter criteria provided
*DocumentsApi* | [**documentsIdDelete**](docs/Api/DocumentsApi.md#documentsiddelete) | **DELETE** /documents/{id} | Deletes a document by unique identifier
*DocumentsApi* | [**documentsIdPatch**](docs/Api/DocumentsApi.md#documentsidpatch) | **PATCH** /documents/{id} | Updates an existing document by its&#39; unique identifier
*DocumentsApi* | [**documentsPost**](docs/Api/DocumentsApi.md#documentspost) | **POST** /documents/ | Creates a new document
*DocumentsApi* | [**documentsSignedUrlPost**](docs/Api/DocumentsApi.md#documentssignedurlpost) | **POST** /documents/signedUrl | Creates pre signed urls used for uploading files between 6MB and 30MB
*DocumentsApi* | [**getDocumentById**](docs/Api/DocumentsApi.md#getdocumentbyid) | **GET** /documents/{id} | Gets a single document by its&#39; unique identifier
*DocumentsApi* | [**getDocumentContentById**](docs/Api/DocumentsApi.md#getdocumentcontentbyid) | **GET** /documents/{id}/download | Gets a the content of single document by its&#39; unique identifier
*EnquiriesApi* | [**enquiriesGet**](docs/Api/EnquiriesApi.md#enquiriesget) | **GET** /enquiries/ | Retrieves a collection of enquiries from prospective vendors, landlords or applicants
*EnquiriesApi* | [**enquiriesIdGet**](docs/Api/EnquiriesApi.md#enquiriesidget) | **GET** /enquiries/{id} | Get a single enquiry by its&#39; unique identifier
*EnquiriesApi* | [**enquiriesPost**](docs/Api/EnquiriesApi.md#enquiriespost) | **POST** /enquiries/ | Create a new enquiry
*IdentityChecksApi* | [**getIdCheckById**](docs/Api/IdentityChecksApi.md#getidcheckbyid) | **GET** /identityChecks/{id} | Retrieves details of a specific identity check
*IdentityChecksApi* | [**identityChecksGet**](docs/Api/IdentityChecksApi.md#identitychecksget) | **GET** /identityChecks/ | Retrieves a collection of identity checks
*IdentityChecksApi* | [**identityChecksIdPatch**](docs/Api/IdentityChecksApi.md#identitychecksidpatch) | **PATCH** /identityChecks/{id} | Updates an identity check
*IdentityChecksApi* | [**identityChecksPost**](docs/Api/IdentityChecksApi.md#identitycheckspost) | **POST** /identityChecks/ | Create a new identity check
*IdentityChecksApi* | [**identityChecksSignedUrlPost**](docs/Api/IdentityChecksApi.md#identitycheckssignedurlpost) | **POST** /identityChecks/signedUrl | Creates pre signed urls used for uploading documents between 6MB and 30MB
*JournalEntriesApi* | [**journalEntriesGet**](docs/Api/JournalEntriesApi.md#journalentriesget) | **GET** /journalEntries/ | Retrieves a collection of journal entries - timestamped events relating to one or more entities
*JournalEntriesApi* | [**journalEntriesPost**](docs/Api/JournalEntriesApi.md#journalentriespost) | **POST** /journalEntries/ | Create a new journal entry event against an entity
*LandlordsApi* | [**getLandlordById**](docs/Api/LandlordsApi.md#getlandlordbyid) | **GET** /landlords/{id} | Gets a single landlord by its&#39; unique identifier
*LandlordsApi* | [**getLandlordRelationshipById**](docs/Api/LandlordsApi.md#getlandlordrelationshipbyid) | **GET** /landlords/{id}/relationships/{relationshipId} | Gets a single relationship between this landlord and a contact/company
*LandlordsApi* | [**landlordsGet**](docs/Api/LandlordsApi.md#landlordsget) | **GET** /landlords/ | Gets a paged collection of landlords
*LandlordsApi* | [**landlordsIdPatch**](docs/Api/LandlordsApi.md#landlordsidpatch) | **PATCH** /landlords/{id} | Updates a landlord
*LandlordsApi* | [**landlordsIdRelationshipsGet**](docs/Api/LandlordsApi.md#landlordsidrelationshipsget) | **GET** /landlords/{id}/relationships | Gets this landlords contact/company relationships
*LandlordsApi* | [**landlordsIdRelationshipsPost**](docs/Api/LandlordsApi.md#landlordsidrelationshipspost) | **POST** /landlords/{id}/relationships | Creates a relationship between this landlord and a contact/company
*LandlordsApi* | [**landlordsIdRelationshipsRelationshipIdDelete**](docs/Api/LandlordsApi.md#landlordsidrelationshipsrelationshipiddelete) | **DELETE** /landlords/{id}/relationships/{relationshipId} | Deletes a specific relationship between this landlord and a contact/company
*LandlordsApi* | [**landlordsPost**](docs/Api/LandlordsApi.md#landlordspost) | **POST** /landlords/ | Creates a new landlord
*MetadataApi* | [**metadataGet**](docs/Api/MetadataApi.md#metadataget) | **GET** /metadata/ | Retrieves a collection of metadata records
*MetadataApi* | [**metadataIdDelete**](docs/Api/MetadataApi.md#metadataiddelete) | **DELETE** /metadata/{id} | Deletes a specific metadata record
*MetadataApi* | [**metadataIdGet**](docs/Api/MetadataApi.md#metadataidget) | **GET** /metadata/{id} | Retrieves a specific metadata record
*MetadataApi* | [**metadataIdPatch**](docs/Api/MetadataApi.md#metadataidpatch) | **PATCH** /metadata/{id} | Updates a metadata record using a JSON patch document
*MetadataApi* | [**metadataIdPut**](docs/Api/MetadataApi.md#metadataidput) | **PUT** /metadata/{id} | Updates a metadata record
*MetadataApi* | [**metadataPost**](docs/Api/MetadataApi.md#metadatapost) | **POST** /metadata/ | Creates a new metadata record
*MetadataSchemaApi* | [**getSchemaById**](docs/Api/MetadataSchemaApi.md#getschemabyid) | **GET** /metadata/metadataSchema/{id} | Retrieves a specific metadata schema, used to validate a metadata entity
*MetadataSchemaApi* | [**metadataMetadataSchemaGet**](docs/Api/MetadataSchemaApi.md#metadatametadataschemaget) | **GET** /metadata/metadataSchema | Retrieves a paged collection of metadata schemas, used to validate metadata entities
*MetadataSchemaApi* | [**metadataMetadataSchemaIdPut**](docs/Api/MetadataSchemaApi.md#metadatametadataschemaidput) | **PUT** /metadata/metadataSchema/{id} | Updates an existing metadata schema, used to validate a metadata entity
*MetadataSchemaApi* | [**metadataMetadataSchemaPost**](docs/Api/MetadataSchemaApi.md#metadatametadataschemapost) | **POST** /metadata/metadataSchema | Creates a new metadata schema, used to validate a metadata entity
*NegotiatorsApi* | [**getNegotiatorById**](docs/Api/NegotiatorsApi.md#getnegotiatorbyid) | **GET** /negotiators/{id} | Gets a specific negotiator by unique identifier
*NegotiatorsApi* | [**negotiatorsGet**](docs/Api/NegotiatorsApi.md#negotiatorsget) | **GET** /negotiators/ | Gets a collection of negotiators matching the filter criteria provided
*NegotiatorsApi* | [**negotiatorsIdPatch**](docs/Api/NegotiatorsApi.md#negotiatorsidpatch) | **PATCH** /negotiators/{id} | Updates a negotiator by unique identifier
*NegotiatorsApi* | [**negotiatorsPost**](docs/Api/NegotiatorsApi.md#negotiatorspost) | **POST** /negotiators/ | Creates a new negotiator
*OffersApi* | [**getOfferById**](docs/Api/OffersApi.md#getofferbyid) | **GET** /offers/{id} | Gets a specific offer by unique identifier
*OffersApi* | [**offersGet**](docs/Api/OffersApi.md#offersget) | **GET** /offers/ | Gets a paged collection of offers
*OffersApi* | [**offersIdPatch**](docs/Api/OffersApi.md#offersidpatch) | **PATCH** /offers/{id} | Updates an offer by unique identifier
*OffersApi* | [**offersPost**](docs/Api/OffersApi.md#offerspost) | **POST** /offers/ | Creates a new offer
*OfficesApi* | [**getOfficeById**](docs/Api/OfficesApi.md#getofficebyid) | **GET** /offices/{id} | Gets a specific office by unique identifier
*OfficesApi* | [**officesGet**](docs/Api/OfficesApi.md#officesget) | **GET** /offices/ | Gets a collection of offices matching the filter criteria provided
*OfficesApi* | [**officesIdPatch**](docs/Api/OfficesApi.md#officesidpatch) | **PATCH** /offices/{id} | Updates an office by unique identifier
*OfficesApi* | [**officesPost**](docs/Api/OfficesApi.md#officespost) | **POST** /offices/ | Creates a new office
*PropertiesApi* | [**getCertificateById**](docs/Api/PropertiesApi.md#getcertificatebyid) | **GET** /properties/{id}/certificates/{certificateId} | Gets a specific certificate by its&#39; unique identifier for a specific property
*PropertiesApi* | [**getPropertyById**](docs/Api/PropertiesApi.md#getpropertybyid) | **GET** /properties/{id} | Gets a single property by its&#39; unique identifier
*PropertiesApi* | [**propertiesGet**](docs/Api/PropertiesApi.md#propertiesget) | **GET** /properties/ | Gets a collection of properties
*PropertiesApi* | [**propertiesIdCertificatesCertificateIdPatch**](docs/Api/PropertiesApi.md#propertiesidcertificatescertificateidpatch) | **PATCH** /properties/{id}/certificates/{certificateId} | Updates an existing certificate
*PropertiesApi* | [**propertiesIdCertificatesGet**](docs/Api/PropertiesApi.md#propertiesidcertificatesget) | **GET** /properties/{id}/certificates | Gets a collection of certificates for a specific property
*PropertiesApi* | [**propertiesIdCertificatesPost**](docs/Api/PropertiesApi.md#propertiesidcertificatespost) | **POST** /properties/{id}/certificates | Creates a new certificate
*PropertiesApi* | [**propertiesIdPatch**](docs/Api/PropertiesApi.md#propertiesidpatch) | **PATCH** /properties/{id} | Updates a property by unique identifier
*PropertiesApi* | [**propertiesPost**](docs/Api/PropertiesApi.md#propertiespost) | **POST** /properties/ | Creates a new property
*PropertyImagesApi* | [**getPropertyImageById**](docs/Api/PropertyImagesApi.md#getpropertyimagebyid) | **GET** /propertyImages/{id} | Gets a single property image by its&#39; unique identifier
*PropertyImagesApi* | [**propertyImagesGet**](docs/Api/PropertyImagesApi.md#propertyimagesget) | **GET** /propertyImages/ | Gets a collection of property images
*PropertyImagesApi* | [**propertyImagesIdDelete**](docs/Api/PropertyImagesApi.md#propertyimagesiddelete) | **DELETE** /propertyImages/{id} | Deletes a property image by unique identifier
*PropertyImagesApi* | [**propertyImagesIdPatch**](docs/Api/PropertyImagesApi.md#propertyimagesidpatch) | **PATCH** /propertyImages/{id} | Updates a property image by unique identifier
*PropertyImagesApi* | [**propertyImagesPost**](docs/Api/PropertyImagesApi.md#propertyimagespost) | **POST** /propertyImages/ | Creates a property image
*PropertyImagesApi* | [**propertyImagesSignedUrlPost**](docs/Api/PropertyImagesApi.md#propertyimagessignedurlpost) | **POST** /propertyImages/signedUrl | Creates pre signed urls used for uploading files between 6MB and 30MB
*RestHooksApi* | [**getWebhookById**](docs/Api/RestHooksApi.md#getwebhookbyid) | **GET** /resthooks/{id} | Retrieves a specific webhook
*RestHooksApi* | [**resthooksGet**](docs/Api/RestHooksApi.md#resthooksget) | **GET** /resthooks/ | Retrieves a collection of webhooks
*RestHooksApi* | [**resthooksIdDelete**](docs/Api/RestHooksApi.md#resthooksiddelete) | **DELETE** /resthooks/{id} | Soft delete an existing webhook subscription
*RestHooksApi* | [**resthooksIdPut**](docs/Api/RestHooksApi.md#resthooksidput) | **PUT** /resthooks/{id} | Update an existing webhook subscription
*RestHooksApi* | [**resthooksPost**](docs/Api/RestHooksApi.md#resthookspost) | **POST** /resthooks/ | Creates a new webhook subscription
*SourcesApi* | [**getSourceById**](docs/Api/SourcesApi.md#getsourcebyid) | **GET** /sources/{id} | Retrieve a specific sources
*SourcesApi* | [**sourcesGet**](docs/Api/SourcesApi.md#sourcesget) | **GET** /sources/ | Gets a paged collection of sources
*SourcesApi* | [**sourcesIdPatch**](docs/Api/SourcesApi.md#sourcesidpatch) | **PATCH** /sources/{id} | Update a source
*SourcesApi* | [**sourcesPost**](docs/Api/SourcesApi.md#sourcespost) | **POST** /sources/ | Create a new source
*TasksApi* | [**getTaskById**](docs/Api/TasksApi.md#gettaskbyid) | **GET** /tasks/{id} | Retrieves a specific task
*TasksApi* | [**getTasks**](docs/Api/TasksApi.md#gettasks) | **GET** /tasks/ | Retrieves a collection of tasks
*TasksApi* | [**tasksIdPatch**](docs/Api/TasksApi.md#tasksidpatch) | **PATCH** /tasks/{id} | Updates a task by its unique identifier
*TasksApi* | [**tasksPost**](docs/Api/TasksApi.md#taskspost) | **POST** /tasks/ | Creates a new task
*TenanciesApi* | [**getTenancyRelationshipById**](docs/Api/TenanciesApi.md#gettenancyrelationshipbyid) | **GET** /tenancies/{id}/relationships/{relationshipId} | Gets a single relationship between this tenancy and a contact/company
*TenanciesApi* | [**tenanciesGet**](docs/Api/TenanciesApi.md#tenanciesget) | **GET** /tenancies/ | Retrieves a collection of tenancies
*TenanciesApi* | [**tenanciesIdChecksCheckIdDelete**](docs/Api/TenanciesApi.md#tenanciesidcheckscheckiddelete) | **DELETE** /tenancies/{id}/checks/{checkId} | Deletes an existing tenancy check
*TenanciesApi* | [**tenanciesIdChecksCheckIdGet**](docs/Api/TenanciesApi.md#tenanciesidcheckscheckidget) | **GET** /tenancies/{id}/checks/{checkId} | Retrieves a specific tenancy check
*TenanciesApi* | [**tenanciesIdChecksCheckIdPatch**](docs/Api/TenanciesApi.md#tenanciesidcheckscheckidpatch) | **PATCH** /tenancies/{id}/checks/{checkId} | Updates an existing tenancy check
*TenanciesApi* | [**tenanciesIdChecksGet**](docs/Api/TenanciesApi.md#tenanciesidchecksget) | **GET** /tenancies/{id}/checks | Retrieves the pre and post tenancy checks associated to a tenancy
*TenanciesApi* | [**tenanciesIdChecksPost**](docs/Api/TenanciesApi.md#tenanciesidcheckspost) | **POST** /tenancies/{id}/checks | Creates a new tenancy check
*TenanciesApi* | [**tenanciesIdGet**](docs/Api/TenanciesApi.md#tenanciesidget) | **GET** /tenancies/{id} | Retrieves a specific tenancy
*TenanciesApi* | [**tenanciesIdPatch**](docs/Api/TenanciesApi.md#tenanciesidpatch) | **PATCH** /tenancies/{id} | Updates a tenancy by unique identifier
*TenanciesApi* | [**tenanciesIdRelationshipsGet**](docs/Api/TenanciesApi.md#tenanciesidrelationshipsget) | **GET** /tenancies/{id}/relationships | Retrieves the relationship details of the contacts and/or companies associated as tenants
*TenanciesApi* | [**tenanciesPost**](docs/Api/TenanciesApi.md#tenanciespost) | **POST** /tenancies/ | Creates a new pending tenancy
*TransactionsApi* | [**transactionsGet**](docs/Api/TransactionsApi.md#transactionsget) | **GET** /transactions/ | Retrieves a collection of transactions
*TransactionsApi* | [**transactionsIdGet**](docs/Api/TransactionsApi.md#transactionsidget) | **GET** /transactions/{id} | Retrieves a specific transaction
*VendorsApi* | [**getVendorById**](docs/Api/VendorsApi.md#getvendorbyid) | **GET** /vendors/{id} | Gets a single vendor by its&#39; unique identifier
*VendorsApi* | [**getVendorRelationshipById**](docs/Api/VendorsApi.md#getvendorrelationshipbyid) | **GET** /vendors/{id}/relationships/{relationshipId} | Gets a single relationship between this vendor and a contact/company
*VendorsApi* | [**vendorsGet**](docs/Api/VendorsApi.md#vendorsget) | **GET** /vendors/ | Gets a paged collection of vendors
*VendorsApi* | [**vendorsIdPatch**](docs/Api/VendorsApi.md#vendorsidpatch) | **PATCH** /vendors/{id} | Updates a vendor
*VendorsApi* | [**vendorsIdRelationshipsGet**](docs/Api/VendorsApi.md#vendorsidrelationshipsget) | **GET** /vendors/{id}/relationships | Gets this vendors contact/company relationships
*VendorsApi* | [**vendorsIdRelationshipsPost**](docs/Api/VendorsApi.md#vendorsidrelationshipspost) | **POST** /vendors/{id}/relationships | Creates a relationship between this vendor and a contact/company
*VendorsApi* | [**vendorsIdRelationshipsRelationshipIdDelete**](docs/Api/VendorsApi.md#vendorsidrelationshipsrelationshipiddelete) | **DELETE** /vendors/{id}/relationships/{relationshipId} | Deletes a specific relationship between this vendor and a contact/company
*WorksOrdersApi* | [**getWorksOrderById**](docs/Api/WorksOrdersApi.md#getworksorderbyid) | **GET** /worksOrders/{id} | Gets a specific works order by unique identifier
*WorksOrdersApi* | [**getWorksOrderItemById**](docs/Api/WorksOrdersApi.md#getworksorderitembyid) | **GET** /worksOrders/{id}/items/{itemId} | Gets a specific works order item by id
*WorksOrdersApi* | [**worksOrdersGet**](docs/Api/WorksOrdersApi.md#worksordersget) | **GET** /worksOrders/ | Gets a paged collection of works orders
*WorksOrdersApi* | [**worksOrdersIdItemsGet**](docs/Api/WorksOrdersApi.md#worksordersiditemsget) | **GET** /worksOrders/{id}/items | Gets a collection of work order items by work order id
*WorksOrdersApi* | [**worksOrdersIdItemsItemIdDelete**](docs/Api/WorksOrdersApi.md#worksordersiditemsitemiddelete) | **DELETE** /worksOrders/{id}/items/{itemId} | Deletes a works order item
*WorksOrdersApi* | [**worksOrdersIdItemsItemIdPatch**](docs/Api/WorksOrdersApi.md#worksordersiditemsitemidpatch) | **PATCH** /worksOrders/{id}/items/{itemId} | Updates a works order item
*WorksOrdersApi* | [**worksOrdersIdItemsPost**](docs/Api/WorksOrdersApi.md#worksordersiditemspost) | **POST** /worksOrders/{id}/items | Creates a new works order item
*WorksOrdersApi* | [**worksOrdersIdPatch**](docs/Api/WorksOrdersApi.md#worksordersidpatch) | **PATCH** /worksOrders/{id} | Updates a works order
*WorksOrdersApi* | [**worksOrdersPost**](docs/Api/WorksOrdersApi.md#worksorderspost) | **POST** /worksOrders/ | Creates a new works order

## Models

- [ApplicantBuyingModel](docs/Model/ApplicantBuyingModel.md)
- [ApplicantContactAddressModel](docs/Model/ApplicantContactAddressModel.md)
- [ApplicantContactModel](docs/Model/ApplicantContactModel.md)
- [ApplicantContactRelationshipModel](docs/Model/ApplicantContactRelationshipModel.md)
- [ApplicantContactRelationshipModelPagedResult](docs/Model/ApplicantContactRelationshipModelPagedResult.md)
- [ApplicantExternalAreaModel](docs/Model/ApplicantExternalAreaModel.md)
- [ApplicantInternalAreaModel](docs/Model/ApplicantInternalAreaModel.md)
- [ApplicantModel](docs/Model/ApplicantModel.md)
- [ApplicantModelPagedResult](docs/Model/ApplicantModelPagedResult.md)
- [ApplicantRentingModel](docs/Model/ApplicantRentingModel.md)
- [ApplicantSourceModel](docs/Model/ApplicantSourceModel.md)
- [ApplicantsBuying](docs/Model/ApplicantsBuying.md)
- [ApplicantsIdRenting](docs/Model/ApplicantsIdRenting.md)
- [ApplicantsRelated](docs/Model/ApplicantsRelated.md)
- [ApplicantsRenting](docs/Model/ApplicantsRenting.md)
- [AppointmentAttendeeModel](docs/Model/AppointmentAttendeeModel.md)
- [AppointmentContactModel](docs/Model/AppointmentContactModel.md)
- [AppointmentFollowUpModel](docs/Model/AppointmentFollowUpModel.md)
- [AppointmentModel](docs/Model/AppointmentModel.md)
- [AppointmentModelPagedResult](docs/Model/AppointmentModelPagedResult.md)
- [AppointmentsAttendee](docs/Model/AppointmentsAttendee.md)
- [AppointmentsIdAttendee](docs/Model/AppointmentsIdAttendee.md)
- [AppointmentsIdFollowUp](docs/Model/AppointmentsIdFollowUp.md)
- [AppointmentsIdRecurrence](docs/Model/AppointmentsIdRecurrence.md)
- [AppointmentsRecurrence](docs/Model/AppointmentsRecurrence.md)
- [AreaModel](docs/Model/AreaModel.md)
- [AreaModelPagedResult](docs/Model/AreaModelPagedResult.md)
- [CertificateModel](docs/Model/CertificateModel.md)
- [CertificateModelPagedResult](docs/Model/CertificateModelPagedResult.md)
- [CompaniesAddress](docs/Model/CompaniesAddress.md)
- [CompaniesIdAddress](docs/Model/CompaniesIdAddress.md)
- [CompanyAddressModel](docs/Model/CompanyAddressModel.md)
- [CompanyModel](docs/Model/CompanyModel.md)
- [CompanyModelPagedResult](docs/Model/CompanyModelPagedResult.md)
- [CompanyRoleModel](docs/Model/CompanyRoleModel.md)
- [CompanyRoleModelPagedResult](docs/Model/CompanyRoleModelPagedResult.md)
- [ContactAddressModel](docs/Model/ContactAddressModel.md)
- [ContactModel](docs/Model/ContactModel.md)
- [ContactModelPagedResult](docs/Model/ContactModelPagedResult.md)
- [ContactRoleModel](docs/Model/ContactRoleModel.md)
- [ContactRoleModelPagedResult](docs/Model/ContactRoleModelPagedResult.md)
- [ContactSourceModel](docs/Model/ContactSourceModel.md)
- [ContactSubscriptionModel](docs/Model/ContactSubscriptionModel.md)
- [ContactSubscriptionModelPagedResult](docs/Model/ContactSubscriptionModelPagedResult.md)
- [ContactsIdPrimaryAddress](docs/Model/ContactsIdPrimaryAddress.md)
- [ContactsIdSource](docs/Model/ContactsIdSource.md)
- [ContactsPrimaryAddress](docs/Model/ContactsPrimaryAddress.md)
- [ContactsSource](docs/Model/ContactsSource.md)
- [ConveyancingModel](docs/Model/ConveyancingModel.md)
- [ConveyancingModelPagedResult](docs/Model/ConveyancingModelPagedResult.md)
- [CreateApplicantBuyingModel](docs/Model/CreateApplicantBuyingModel.md)
- [CreateApplicantContactRelationshipModel](docs/Model/CreateApplicantContactRelationshipModel.md)
- [CreateApplicantExternalAreaModel](docs/Model/CreateApplicantExternalAreaModel.md)
- [CreateApplicantInternalAreaModel](docs/Model/CreateApplicantInternalAreaModel.md)
- [CreateApplicantModel](docs/Model/CreateApplicantModel.md)
- [CreateApplicantRentingModel](docs/Model/CreateApplicantRentingModel.md)
- [CreateApplicantSourceModel](docs/Model/CreateApplicantSourceModel.md)
- [CreateAppointmentAttendeeModel](docs/Model/CreateAppointmentAttendeeModel.md)
- [CreateAppointmentModel](docs/Model/CreateAppointmentModel.md)
- [CreateAppointmentRecurrenceModel](docs/Model/CreateAppointmentRecurrenceModel.md)
- [CreateAreaModel](docs/Model/CreateAreaModel.md)
- [CreateCertificateModel](docs/Model/CreateCertificateModel.md)
- [CreateCompanyAddressModel](docs/Model/CreateCompanyAddressModel.md)
- [CreateCompanyModel](docs/Model/CreateCompanyModel.md)
- [CreateContactAddressModel](docs/Model/CreateContactAddressModel.md)
- [CreateContactModel](docs/Model/CreateContactModel.md)
- [CreateContactSourceModel](docs/Model/CreateContactSourceModel.md)
- [CreateDocumentModel](docs/Model/CreateDocumentModel.md)
- [CreateDownwardLinkModel](docs/Model/CreateDownwardLinkModel.md)
- [CreateEnquiryAddressModel](docs/Model/CreateEnquiryAddressModel.md)
- [CreateEnquiryModel](docs/Model/CreateEnquiryModel.md)
- [CreateIdentityCheckModel](docs/Model/CreateIdentityCheckModel.md)
- [CreateIdentityDocumentModel](docs/Model/CreateIdentityDocumentModel.md)
- [CreateJournalEntryModel](docs/Model/CreateJournalEntryModel.md)
- [CreateLandlordContactRelationshipModel](docs/Model/CreateLandlordContactRelationshipModel.md)
- [CreateLandlordModel](docs/Model/CreateLandlordModel.md)
- [CreateLandlordSourceModel](docs/Model/CreateLandlordSourceModel.md)
- [CreateMetadataRequest](docs/Model/CreateMetadataRequest.md)
- [CreateNegotiatorModel](docs/Model/CreateNegotiatorModel.md)
- [CreateOfferModel](docs/Model/CreateOfferModel.md)
- [CreateOfficeAddressModel](docs/Model/CreateOfficeAddressModel.md)
- [CreateOfficeModel](docs/Model/CreateOfficeModel.md)
- [CreatePreSignedUrlsModel](docs/Model/CreatePreSignedUrlsModel.md)
- [CreatePropertyAddressModel](docs/Model/CreatePropertyAddressModel.md)
- [CreatePropertyCommissionFeeModel](docs/Model/CreatePropertyCommissionFeeModel.md)
- [CreatePropertyEpcModel](docs/Model/CreatePropertyEpcModel.md)
- [CreatePropertyExternalAreaModel](docs/Model/CreatePropertyExternalAreaModel.md)
- [CreatePropertyGeolocationModel](docs/Model/CreatePropertyGeolocationModel.md)
- [CreatePropertyImageModel](docs/Model/CreatePropertyImageModel.md)
- [CreatePropertyInternalAreaModel](docs/Model/CreatePropertyInternalAreaModel.md)
- [CreatePropertyLettingModel](docs/Model/CreatePropertyLettingModel.md)
- [CreatePropertyModel](docs/Model/CreatePropertyModel.md)
- [CreatePropertyRoomModel](docs/Model/CreatePropertyRoomModel.md)
- [CreatePropertySellingModel](docs/Model/CreatePropertySellingModel.md)
- [CreatePropertyTenureModel](docs/Model/CreatePropertyTenureModel.md)
- [CreateSchemaRequest](docs/Model/CreateSchemaRequest.md)
- [CreateSourceModel](docs/Model/CreateSourceModel.md)
- [CreateTaskModel](docs/Model/CreateTaskModel.md)
- [CreateTenancyCheckModel](docs/Model/CreateTenancyCheckModel.md)
- [CreateTenancyModel](docs/Model/CreateTenancyModel.md)
- [CreateTenancySourceModel](docs/Model/CreateTenancySourceModel.md)
- [CreateUpwardLinkModel](docs/Model/CreateUpwardLinkModel.md)
- [CreateWebhookModel](docs/Model/CreateWebhookModel.md)
- [CreateWorksOrderItemModel](docs/Model/CreateWorksOrderItemModel.md)
- [CreateWorksOrderModel](docs/Model/CreateWorksOrderModel.md)
- [DepartmentModel](docs/Model/DepartmentModel.md)
- [DepartmentModelPagedResult](docs/Model/DepartmentModelPagedResult.md)
- [DocumentModel](docs/Model/DocumentModel.md)
- [DocumentModelPagedResult](docs/Model/DocumentModelPagedResult.md)
- [EnquiriesAddress](docs/Model/EnquiriesAddress.md)
- [EnquiryAddressModel](docs/Model/EnquiryAddressModel.md)
- [EnquiryModel](docs/Model/EnquiryModel.md)
- [EnquiryModelPagedResult](docs/Model/EnquiryModelPagedResult.md)
- [IdentityCheckModel](docs/Model/IdentityCheckModel.md)
- [IdentityCheckModelPagedResult](docs/Model/IdentityCheckModelPagedResult.md)
- [IdentityChecksIdIdentityDocument1](docs/Model/IdentityChecksIdIdentityDocument1.md)
- [IdentityChecksIdentityDocument1](docs/Model/IdentityChecksIdentityDocument1.md)
- [IdentityDocumentModel](docs/Model/IdentityDocumentModel.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject10](docs/Model/InlineObject10.md)
- [InlineObject11](docs/Model/InlineObject11.md)
- [InlineObject12](docs/Model/InlineObject12.md)
- [InlineObject13](docs/Model/InlineObject13.md)
- [InlineObject14](docs/Model/InlineObject14.md)
- [InlineObject15](docs/Model/InlineObject15.md)
- [InlineObject16](docs/Model/InlineObject16.md)
- [InlineObject17](docs/Model/InlineObject17.md)
- [InlineObject18](docs/Model/InlineObject18.md)
- [InlineObject19](docs/Model/InlineObject19.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject20](docs/Model/InlineObject20.md)
- [InlineObject21](docs/Model/InlineObject21.md)
- [InlineObject22](docs/Model/InlineObject22.md)
- [InlineObject23](docs/Model/InlineObject23.md)
- [InlineObject24](docs/Model/InlineObject24.md)
- [InlineObject25](docs/Model/InlineObject25.md)
- [InlineObject26](docs/Model/InlineObject26.md)
- [InlineObject27](docs/Model/InlineObject27.md)
- [InlineObject28](docs/Model/InlineObject28.md)
- [InlineObject29](docs/Model/InlineObject29.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject30](docs/Model/InlineObject30.md)
- [InlineObject31](docs/Model/InlineObject31.md)
- [InlineObject32](docs/Model/InlineObject32.md)
- [InlineObject33](docs/Model/InlineObject33.md)
- [InlineObject34](docs/Model/InlineObject34.md)
- [InlineObject35](docs/Model/InlineObject35.md)
- [InlineObject36](docs/Model/InlineObject36.md)
- [InlineObject37](docs/Model/InlineObject37.md)
- [InlineObject38](docs/Model/InlineObject38.md)
- [InlineObject39](docs/Model/InlineObject39.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject40](docs/Model/InlineObject40.md)
- [InlineObject41](docs/Model/InlineObject41.md)
- [InlineObject42](docs/Model/InlineObject42.md)
- [InlineObject43](docs/Model/InlineObject43.md)
- [InlineObject44](docs/Model/InlineObject44.md)
- [InlineObject45](docs/Model/InlineObject45.md)
- [InlineObject46](docs/Model/InlineObject46.md)
- [InlineObject47](docs/Model/InlineObject47.md)
- [InlineObject48](docs/Model/InlineObject48.md)
- [InlineObject49](docs/Model/InlineObject49.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject50](docs/Model/InlineObject50.md)
- [InlineObject51](docs/Model/InlineObject51.md)
- [InlineObject52](docs/Model/InlineObject52.md)
- [InlineObject53](docs/Model/InlineObject53.md)
- [InlineObject54](docs/Model/InlineObject54.md)
- [InlineObject55](docs/Model/InlineObject55.md)
- [InlineObject56](docs/Model/InlineObject56.md)
- [InlineObject57](docs/Model/InlineObject57.md)
- [InlineObject58](docs/Model/InlineObject58.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [InlineObject8](docs/Model/InlineObject8.md)
- [InlineObject9](docs/Model/InlineObject9.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse20011Embedded](docs/Model/InlineResponse20011Embedded.md)
- [InlineResponse20012](docs/Model/InlineResponse20012.md)
- [InlineResponse20012Embedded](docs/Model/InlineResponse20012Embedded.md)
- [InlineResponse20013](docs/Model/InlineResponse20013.md)
- [InlineResponse20013Embedded](docs/Model/InlineResponse20013Embedded.md)
- [InlineResponse20014](docs/Model/InlineResponse20014.md)
- [InlineResponse20014Embedded](docs/Model/InlineResponse20014Embedded.md)
- [InlineResponse20015](docs/Model/InlineResponse20015.md)
- [InlineResponse20015Embedded](docs/Model/InlineResponse20015Embedded.md)
- [InlineResponse20016](docs/Model/InlineResponse20016.md)
- [InlineResponse20016Embedded](docs/Model/InlineResponse20016Embedded.md)
- [InlineResponse20016IdentityDocument1](docs/Model/InlineResponse20016IdentityDocument1.md)
- [InlineResponse20017](docs/Model/InlineResponse20017.md)
- [InlineResponse20017Embedded](docs/Model/InlineResponse20017Embedded.md)
- [InlineResponse20018](docs/Model/InlineResponse20018.md)
- [InlineResponse20018Related](docs/Model/InlineResponse20018Related.md)
- [InlineResponse20018Source](docs/Model/InlineResponse20018Source.md)
- [InlineResponse20019](docs/Model/InlineResponse20019.md)
- [InlineResponse2001Embedded](docs/Model/InlineResponse2001Embedded.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse20020](docs/Model/InlineResponse20020.md)
- [InlineResponse20020Embedded](docs/Model/InlineResponse20020Embedded.md)
- [InlineResponse20021](docs/Model/InlineResponse20021.md)
- [InlineResponse20021Embedded](docs/Model/InlineResponse20021Embedded.md)
- [InlineResponse20022](docs/Model/InlineResponse20022.md)
- [InlineResponse20023](docs/Model/InlineResponse20023.md)
- [InlineResponse20024](docs/Model/InlineResponse20024.md)
- [InlineResponse20024Embedded](docs/Model/InlineResponse20024Embedded.md)
- [InlineResponse20025](docs/Model/InlineResponse20025.md)
- [InlineResponse20025Embedded](docs/Model/InlineResponse20025Embedded.md)
- [InlineResponse20025PrimaryAddress](docs/Model/InlineResponse20025PrimaryAddress.md)
- [InlineResponse20025Related](docs/Model/InlineResponse20025Related.md)
- [InlineResponse20026](docs/Model/InlineResponse20026.md)
- [InlineResponse20026Embedded](docs/Model/InlineResponse20026Embedded.md)
- [InlineResponse20027](docs/Model/InlineResponse20027.md)
- [InlineResponse20027Address](docs/Model/InlineResponse20027Address.md)
- [InlineResponse20027AddressGeolocation](docs/Model/InlineResponse20027AddressGeolocation.md)
- [InlineResponse20027Embedded](docs/Model/InlineResponse20027Embedded.md)
- [InlineResponse20027Epc](docs/Model/InlineResponse20027Epc.md)
- [InlineResponse20027ExternalArea](docs/Model/InlineResponse20027ExternalArea.md)
- [InlineResponse20027InternalArea](docs/Model/InlineResponse20027InternalArea.md)
- [InlineResponse20027Letting](docs/Model/InlineResponse20027Letting.md)
- [InlineResponse20027Rooms](docs/Model/InlineResponse20027Rooms.md)
- [InlineResponse20027Selling](docs/Model/InlineResponse20027Selling.md)
- [InlineResponse20027SellingFee](docs/Model/InlineResponse20027SellingFee.md)
- [InlineResponse20027SellingTenure](docs/Model/InlineResponse20027SellingTenure.md)
- [InlineResponse20028](docs/Model/InlineResponse20028.md)
- [InlineResponse20028Embedded](docs/Model/InlineResponse20028Embedded.md)
- [InlineResponse20029](docs/Model/InlineResponse20029.md)
- [InlineResponse20029Embedded](docs/Model/InlineResponse20029Embedded.md)
- [InlineResponse2002Embedded](docs/Model/InlineResponse2002Embedded.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse20030](docs/Model/InlineResponse20030.md)
- [InlineResponse20030Embedded](docs/Model/InlineResponse20030Embedded.md)
- [InlineResponse20031](docs/Model/InlineResponse20031.md)
- [InlineResponse20031Embedded](docs/Model/InlineResponse20031Embedded.md)
- [InlineResponse20032](docs/Model/InlineResponse20032.md)
- [InlineResponse20032Embedded](docs/Model/InlineResponse20032Embedded.md)
- [InlineResponse20033](docs/Model/InlineResponse20033.md)
- [InlineResponse20033Embedded](docs/Model/InlineResponse20033Embedded.md)
- [InlineResponse20033Related](docs/Model/InlineResponse20033Related.md)
- [InlineResponse20033Source](docs/Model/InlineResponse20033Source.md)
- [InlineResponse20034](docs/Model/InlineResponse20034.md)
- [InlineResponse20034Embedded](docs/Model/InlineResponse20034Embedded.md)
- [InlineResponse20035](docs/Model/InlineResponse20035.md)
- [InlineResponse20035Embedded](docs/Model/InlineResponse20035Embedded.md)
- [InlineResponse20036](docs/Model/InlineResponse20036.md)
- [InlineResponse20036Embedded](docs/Model/InlineResponse20036Embedded.md)
- [InlineResponse20037](docs/Model/InlineResponse20037.md)
- [InlineResponse20037Related](docs/Model/InlineResponse20037Related.md)
- [InlineResponse20037Source](docs/Model/InlineResponse20037Source.md)
- [InlineResponse20038](docs/Model/InlineResponse20038.md)
- [InlineResponse20039](docs/Model/InlineResponse20039.md)
- [InlineResponse20039Embedded](docs/Model/InlineResponse20039Embedded.md)
- [InlineResponse2003Attendee](docs/Model/InlineResponse2003Attendee.md)
- [InlineResponse2003AttendeeContacts](docs/Model/InlineResponse2003AttendeeContacts.md)
- [InlineResponse2003Embedded](docs/Model/InlineResponse2003Embedded.md)
- [InlineResponse2003FollowUp](docs/Model/InlineResponse2003FollowUp.md)
- [InlineResponse2003Recurrence](docs/Model/InlineResponse2003Recurrence.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse20040](docs/Model/InlineResponse20040.md)
- [InlineResponse20040Embedded](docs/Model/InlineResponse20040Embedded.md)
- [InlineResponse20040Items](docs/Model/InlineResponse20040Items.md)
- [InlineResponse20041](docs/Model/InlineResponse20041.md)
- [InlineResponse2004Address](docs/Model/InlineResponse2004Address.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2006Embedded](docs/Model/InlineResponse2006Embedded.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2007Embedded](docs/Model/InlineResponse2007Embedded.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InlineResponse2009Embedded](docs/Model/InlineResponse2009Embedded.md)
- [InlineResponse2009PrimaryAddress](docs/Model/InlineResponse2009PrimaryAddress.md)
- [InlineResponse2009Relationships](docs/Model/InlineResponse2009Relationships.md)
- [InlineResponse2009Source](docs/Model/InlineResponse2009Source.md)
- [InlineResponse200Buying](docs/Model/InlineResponse200Buying.md)
- [InlineResponse200Embedded](docs/Model/InlineResponse200Embedded.md)
- [InlineResponse200ExternalArea](docs/Model/InlineResponse200ExternalArea.md)
- [InlineResponse200InternalArea](docs/Model/InlineResponse200InternalArea.md)
- [InlineResponse200Links](docs/Model/InlineResponse200Links.md)
- [InlineResponse200PrimaryAddress](docs/Model/InlineResponse200PrimaryAddress.md)
- [InlineResponse200Related](docs/Model/InlineResponse200Related.md)
- [InlineResponse200Renting](docs/Model/InlineResponse200Renting.md)
- [InlineResponse200Source](docs/Model/InlineResponse200Source.md)
- [InsertApplicantContactRelationshipModel](docs/Model/InsertApplicantContactRelationshipModel.md)
- [InsertLandlordContactRelationshipModel](docs/Model/InsertLandlordContactRelationshipModel.md)
- [InsertVendorContactRelationshipModel](docs/Model/InsertVendorContactRelationshipModel.md)
- [JournalEntryModel](docs/Model/JournalEntryModel.md)
- [JournalEntryModelPagedResult](docs/Model/JournalEntryModelPagedResult.md)
- [LandlordContactAddressModel](docs/Model/LandlordContactAddressModel.md)
- [LandlordContactModel](docs/Model/LandlordContactModel.md)
- [LandlordContactRelationshipModel](docs/Model/LandlordContactRelationshipModel.md)
- [LandlordContactRelationshipModelPagedResult](docs/Model/LandlordContactRelationshipModelPagedResult.md)
- [LandlordModel](docs/Model/LandlordModel.md)
- [LandlordModelPagedResult](docs/Model/LandlordModelPagedResult.md)
- [LandlordSourceModel](docs/Model/LandlordSourceModel.md)
- [LandlordsIdSource](docs/Model/LandlordsIdSource.md)
- [LandlordsRelated](docs/Model/LandlordsRelated.md)
- [LandlordsSource](docs/Model/LandlordsSource.md)
- [LinkModel](docs/Model/LinkModel.md)
- [ListItemModel](docs/Model/ListItemModel.md)
- [MetadataModel](docs/Model/MetadataModel.md)
- [MetadataModelPagedResult](docs/Model/MetadataModelPagedResult.md)
- [NegotiatorModel](docs/Model/NegotiatorModel.md)
- [NegotiatorModelPagedResult](docs/Model/NegotiatorModelPagedResult.md)
- [OfferContactAddressModel](docs/Model/OfferContactAddressModel.md)
- [OfferContactModel](docs/Model/OfferContactModel.md)
- [OfferModel](docs/Model/OfferModel.md)
- [OfferModelPagedResult](docs/Model/OfferModelPagedResult.md)
- [OfficeAddressModel](docs/Model/OfficeAddressModel.md)
- [OfficeModel](docs/Model/OfficeModel.md)
- [OfficeModelPagedResult](docs/Model/OfficeModelPagedResult.md)
- [OfficesAddress](docs/Model/OfficesAddress.md)
- [OfficesIdAddress](docs/Model/OfficesIdAddress.md)
- [Operation](docs/Model/Operation.md)
- [OperationType](docs/Model/OperationType.md)
- [PagingLinkModel](docs/Model/PagingLinkModel.md)
- [PropertiesAddress](docs/Model/PropertiesAddress.md)
- [PropertiesAddressGeolocation](docs/Model/PropertiesAddressGeolocation.md)
- [PropertiesEpc](docs/Model/PropertiesEpc.md)
- [PropertiesExternalArea](docs/Model/PropertiesExternalArea.md)
- [PropertiesIdAddress](docs/Model/PropertiesIdAddress.md)
- [PropertiesIdAddressGeolocation](docs/Model/PropertiesIdAddressGeolocation.md)
- [PropertiesIdEpc](docs/Model/PropertiesIdEpc.md)
- [PropertiesIdExternalArea](docs/Model/PropertiesIdExternalArea.md)
- [PropertiesIdInternalArea](docs/Model/PropertiesIdInternalArea.md)
- [PropertiesIdLetting](docs/Model/PropertiesIdLetting.md)
- [PropertiesIdSelling](docs/Model/PropertiesIdSelling.md)
- [PropertiesIdSellingFee](docs/Model/PropertiesIdSellingFee.md)
- [PropertiesIdSellingTenure](docs/Model/PropertiesIdSellingTenure.md)
- [PropertiesInternalArea](docs/Model/PropertiesInternalArea.md)
- [PropertiesLetting](docs/Model/PropertiesLetting.md)
- [PropertiesRooms](docs/Model/PropertiesRooms.md)
- [PropertiesSelling](docs/Model/PropertiesSelling.md)
- [PropertiesSellingFee](docs/Model/PropertiesSellingFee.md)
- [PropertiesSellingTenure](docs/Model/PropertiesSellingTenure.md)
- [PropertyAddressModel](docs/Model/PropertyAddressModel.md)
- [PropertyCommissionFeeModel](docs/Model/PropertyCommissionFeeModel.md)
- [PropertyEpcModel](docs/Model/PropertyEpcModel.md)
- [PropertyExternalAreaModel](docs/Model/PropertyExternalAreaModel.md)
- [PropertyGeolocationModel](docs/Model/PropertyGeolocationModel.md)
- [PropertyImageModel](docs/Model/PropertyImageModel.md)
- [PropertyImageModelPagedResult](docs/Model/PropertyImageModelPagedResult.md)
- [PropertyInternalAreaModel](docs/Model/PropertyInternalAreaModel.md)
- [PropertyLettingModel](docs/Model/PropertyLettingModel.md)
- [PropertyModel](docs/Model/PropertyModel.md)
- [PropertyModelPagedResult](docs/Model/PropertyModelPagedResult.md)
- [PropertyRoomModel](docs/Model/PropertyRoomModel.md)
- [PropertySellingModel](docs/Model/PropertySellingModel.md)
- [PropertyTenureModel](docs/Model/PropertyTenureModel.md)
- [RecurrenceModel](docs/Model/RecurrenceModel.md)
- [SchemaModel](docs/Model/SchemaModel.md)
- [SchemaModelPagedResult](docs/Model/SchemaModelPagedResult.md)
- [SourceModel](docs/Model/SourceModel.md)
- [SourceModelPagedResult](docs/Model/SourceModelPagedResult.md)
- [StaffModel](docs/Model/StaffModel.md)
- [StaffModelPagedResult](docs/Model/StaffModelPagedResult.md)
- [TaskModel](docs/Model/TaskModel.md)
- [TaskModelPagedResult](docs/Model/TaskModelPagedResult.md)
- [TenanciesSource](docs/Model/TenanciesSource.md)
- [TenancyCheckModel](docs/Model/TenancyCheckModel.md)
- [TenancyCheckModelPagedResult](docs/Model/TenancyCheckModelPagedResult.md)
- [TenancyContactAddressModel](docs/Model/TenancyContactAddressModel.md)
- [TenancyContactModel](docs/Model/TenancyContactModel.md)
- [TenancyContactRelationshipModel](docs/Model/TenancyContactRelationshipModel.md)
- [TenancyContactRelationshipModelPagedResult](docs/Model/TenancyContactRelationshipModelPagedResult.md)
- [TenancyModel](docs/Model/TenancyModel.md)
- [TenancyModelPagedResult](docs/Model/TenancyModelPagedResult.md)
- [TenancySourceModel](docs/Model/TenancySourceModel.md)
- [TransactionModel](docs/Model/TransactionModel.md)
- [TransactionModelPagedResult](docs/Model/TransactionModelPagedResult.md)
- [UpdateApplicantBuyingModel](docs/Model/UpdateApplicantBuyingModel.md)
- [UpdateApplicantExternalAreaModel](docs/Model/UpdateApplicantExternalAreaModel.md)
- [UpdateApplicantInternalAreaModel](docs/Model/UpdateApplicantInternalAreaModel.md)
- [UpdateApplicantModel](docs/Model/UpdateApplicantModel.md)
- [UpdateApplicantRentingModel](docs/Model/UpdateApplicantRentingModel.md)
- [UpdateApplicantSourceModel](docs/Model/UpdateApplicantSourceModel.md)
- [UpdateAppointmentAttendeeModel](docs/Model/UpdateAppointmentAttendeeModel.md)
- [UpdateAppointmentFollowUpModel](docs/Model/UpdateAppointmentFollowUpModel.md)
- [UpdateAppointmentModel](docs/Model/UpdateAppointmentModel.md)
- [UpdateAppointmentRecurrenceModel](docs/Model/UpdateAppointmentRecurrenceModel.md)
- [UpdateAreaModel](docs/Model/UpdateAreaModel.md)
- [UpdateCertificateModel](docs/Model/UpdateCertificateModel.md)
- [UpdateCompanyAddressModel](docs/Model/UpdateCompanyAddressModel.md)
- [UpdateCompanyModel](docs/Model/UpdateCompanyModel.md)
- [UpdateContactAddressModel](docs/Model/UpdateContactAddressModel.md)
- [UpdateContactModel](docs/Model/UpdateContactModel.md)
- [UpdateContactSourceModel](docs/Model/UpdateContactSourceModel.md)
- [UpdateContactSubscriptionModel](docs/Model/UpdateContactSubscriptionModel.md)
- [UpdateConveyancingModel](docs/Model/UpdateConveyancingModel.md)
- [UpdateDocumentModel](docs/Model/UpdateDocumentModel.md)
- [UpdateIdentityCheckModel](docs/Model/UpdateIdentityCheckModel.md)
- [UpdateIdentityDocumentModel](docs/Model/UpdateIdentityDocumentModel.md)
- [UpdateLandlordModel](docs/Model/UpdateLandlordModel.md)
- [UpdateLandlordSourceModel](docs/Model/UpdateLandlordSourceModel.md)
- [UpdateMetadataRequest](docs/Model/UpdateMetadataRequest.md)
- [UpdateNegotiatorModel](docs/Model/UpdateNegotiatorModel.md)
- [UpdateOfferModel](docs/Model/UpdateOfferModel.md)
- [UpdateOfficeAddressModel](docs/Model/UpdateOfficeAddressModel.md)
- [UpdateOfficeModel](docs/Model/UpdateOfficeModel.md)
- [UpdatePropertyAddressModel](docs/Model/UpdatePropertyAddressModel.md)
- [UpdatePropertyCommissionFeeModel](docs/Model/UpdatePropertyCommissionFeeModel.md)
- [UpdatePropertyEpcModel](docs/Model/UpdatePropertyEpcModel.md)
- [UpdatePropertyExternalAreaModel](docs/Model/UpdatePropertyExternalAreaModel.md)
- [UpdatePropertyGeolocationModel](docs/Model/UpdatePropertyGeolocationModel.md)
- [UpdatePropertyImageModel](docs/Model/UpdatePropertyImageModel.md)
- [UpdatePropertyInternalAreaModel](docs/Model/UpdatePropertyInternalAreaModel.md)
- [UpdatePropertyLettingModel](docs/Model/UpdatePropertyLettingModel.md)
- [UpdatePropertyModel](docs/Model/UpdatePropertyModel.md)
- [UpdatePropertySellingModel](docs/Model/UpdatePropertySellingModel.md)
- [UpdatePropertyTenureModel](docs/Model/UpdatePropertyTenureModel.md)
- [UpdateSchemaRequest](docs/Model/UpdateSchemaRequest.md)
- [UpdateSourceModel](docs/Model/UpdateSourceModel.md)
- [UpdateTaskModel](docs/Model/UpdateTaskModel.md)
- [UpdateTenancyCheckModel](docs/Model/UpdateTenancyCheckModel.md)
- [UpdateTenancyModel](docs/Model/UpdateTenancyModel.md)
- [UpdateTenancySourceModel](docs/Model/UpdateTenancySourceModel.md)
- [UpdateVendorModel](docs/Model/UpdateVendorModel.md)
- [UpdateWebhookModel](docs/Model/UpdateWebhookModel.md)
- [UpdateWorksOrderItemModel](docs/Model/UpdateWorksOrderItemModel.md)
- [UpdateWorksOrderModel](docs/Model/UpdateWorksOrderModel.md)
- [VendorContactAddressModel](docs/Model/VendorContactAddressModel.md)
- [VendorContactModel](docs/Model/VendorContactModel.md)
- [VendorContactRelationshipModel](docs/Model/VendorContactRelationshipModel.md)
- [VendorContactRelationshipModelPagedResult](docs/Model/VendorContactRelationshipModelPagedResult.md)
- [VendorModel](docs/Model/VendorModel.md)
- [VendorModelPagedResult](docs/Model/VendorModelPagedResult.md)
- [VendorSourceModel](docs/Model/VendorSourceModel.md)
- [VendorUpdateSourceModel](docs/Model/VendorUpdateSourceModel.md)
- [WebhookModel](docs/Model/WebhookModel.md)
- [WebhookModelPagedResult](docs/Model/WebhookModelPagedResult.md)
- [WorksOrderItemModel](docs/Model/WorksOrderItemModel.md)
- [WorksOrderItemModelPagedResult](docs/Model/WorksOrderItemModelPagedResult.md)
- [WorksOrderModel](docs/Model/WorksOrderModel.md)
- [WorksOrderModelPagedResult](docs/Model/WorksOrderModelPagedResult.md)
- [WorksOrdersItems](docs/Model/WorksOrdersItems.md)

## Authorization

### Authorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
