# EmailStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Email address this email was sent from. | [optional] 
**to** | **string** | Email address this email was sent to. | [optional] 
**date** | **\DateTime** | Date the email was submitted. | [optional] 
**status** | [**ElasticEmail\Model\LogJobStatus**](LogJobStatus.md) |  | [optional] 
**statusName** | **string** | Name of email&#39;s status | [optional] 
**statusChangeDate** | **\DateTime** | Date of last status change. | [optional] 
**dateSent** | **\DateTime** | Date when the email was sent | [optional] 
**dateOpened** | **\DateTime** | Date when the email changed the status to &#39;opened&#39; | [optional] 
**dateClicked** | **\DateTime** | Date when the email changed the status to &#39;clicked&#39; | [optional] 
**errorMessage** | **string** | Detailed error or bounced message. | [optional] 
**transactionID** | **string** | ID number of transaction | [optional] 
**envelopeFrom** | **string** | Envelope from address | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


