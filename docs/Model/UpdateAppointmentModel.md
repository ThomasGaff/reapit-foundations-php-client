# # UpdateAppointmentModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start** | [**\DateTime**](\DateTime.md) | The date and time when the appointment will start | [optional]
**end** | [**\DateTime**](\DateTime.md) | The date and time when the appointment will end | [optional]
**followUpOn** | [**\DateTime**](\DateTime.md) | The date when the appointment should be followed up | [optional]
**typeId** | **string** | The unique identifier of the appointment type | [optional]
**description** | **string** | A free text description about the appointment | [optional]
**propertyId** | **string** | The unique identifier of the property related to the appointment | [optional]
**organiserId** | **string** | The unique identifier of the negotiator that organised the appointment | [optional]
**cancelled** | **bool** | A flag denoting whether or not the appointment has been cancelled | [optional]
**negotiatorIds** | **string[]** | A collection of unique identifiers of negotiators attached to the appointment. The first item in the collection is considered the primary negotiator | [optional]
**officeIds** | **string[]** | A collection of unique identifiers of offices attached to the appointment. The first item in the collection is considered the primary office | [optional]
**attendee** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\AppointmentsIdAttendee**](AppointmentsIdAttendee.md) |  | [optional]
**accompanied** | **bool** | A flag denoting whether or not the appointment will be accompanied by one or more negotiators | [optional]
**virtual** | **bool** | A flag denoting whether or not the appointment is virtual | [optional]
**negotiatorConfirmed** | **bool** | A flag denoting whether or not the main negotiator has confirmed their attendance | [optional]
**attendeeConfirmed** | **bool** | A flag denoting whether or not the attendee has confirmed their attendance | [optional]
**propertyConfirmed** | **bool** | A flag denoting whether or not the property and/or property&#39;s vendor has confirmed their attendance | [optional]
**followUp** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\AppointmentsIdFollowUp**](AppointmentsIdFollowUp.md) |  | [optional]
**recurrence** | [**\NorthernEstateAgencies\ReapitFoundationsClient\Model\AppointmentsIdRecurrence**](AppointmentsIdRecurrence.md) |  | [optional]
**metadata** | **array<string,object>** | App specific metadata to set against the appointment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
