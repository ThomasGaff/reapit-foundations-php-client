# # AppointmentModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**array<string,\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse200Links>**](InlineResponse200Links.md) |  | [optional] [readonly]
**embedded** | **array<string,object>** |  | [optional] [readonly]
**id** | **string** | The unique identifier of the appointment | [optional]
**created** | [**\DateTime**](\DateTime.md) | The date and time when the appointment was created | [optional]
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the appointment was last modified | [optional]
**start** | [**\DateTime**](\DateTime.md) | The date and time when the appointment will start | [optional]
**end** | [**\DateTime**](\DateTime.md) | The date and time when the appointment will end | [optional]
**typeId** | **string** | The unique identifier of the appointment type | [optional]
**description** | **string** | A free text description about the appointment | [optional]
**recurring** | **bool** | A flag denoting whether or not the appointment recurs | [optional]
**recurrence** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Recurrence**](InlineResponse2003Recurrence.md) |  | [optional]
**cancelled** | **bool** | A flag denoting whether or not the appointment has been cancelled | [optional]
**followUp** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003FollowUp**](InlineResponse2003FollowUp.md) |  | [optional]
**propertyId** | **string** | The unique identifier of the property related to the appointment | [optional]
**organiserId** | **string** | The unique identifier of the negotiator that organised the appointment | [optional]
**negotiatorIds** | **string[]** | A collection of unique identifiers of negotiators attached to the appointment. The first item in the collection is considered the primary negotiator | [optional]
**officeIds** | **string[]** | A collection of unique identifiers of offices attached to the appointment. The first item in the collection is considered the primary office | [optional]
**attendee** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\InlineResponse2003Attendee**](InlineResponse2003Attendee.md) |  | [optional]
**accompanied** | **bool** | A flag denoting whether or not the appointment will be accompanied by one or more negotiators | [optional]
**virtual** | **bool** | A flag denoting whether or not the appointment is virtual | [optional]
**negotiatorConfirmed** | **bool** | A flag denoting whether or not the main negotiator has confirmed their attendance | [optional]
**attendeeConfirmed** | **bool** | A flag denoting whether or not the attendee has confirmed their attendance | [optional]
**propertyConfirmed** | **bool** | A flag denoting whether or not the property and/or property&#39;s vendor has confirmed their attendance | [optional]
**fromArchive** | **bool** | A flag determining whether or not the appointment is archived | [optional]
**metadata** | **array<string,object>** | App specific metadata that has been set against the appointment | [optional]
**eTag** | **string** | The ETag for the current version of the appointment. Used for managing update concurrency | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
