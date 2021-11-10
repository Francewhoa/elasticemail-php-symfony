# RecipientEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactionID** | **string** | ID number of transaction | [optional] 
**msgID** | **string** | ID number of selected message. | [optional] 
**fromEmail** | **string** | Default From: email address. | [optional] 
**to** | **string** | Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional] 
**subject** | **string** | Default subject of email. | [optional] 
**eventType** | [**ElasticEmail\Model\EventType**](EventType.md) |  | [optional] 
**eventDate** | **\DateTime** | Creation date | [optional] 
**channelName** | **string** | Name of selected channel. | [optional] 
**messageCategory** | [**ElasticEmail\Model\MessageCategory**](MessageCategory.md) |  | [optional] 
**nextTryOn** | **\DateTime** | Date of next try | [optional] 
**message** | **string** | Content of message, HTML encoded | [optional] 
**iPAddress** | **string** | IP which this email was sent through | [optional] 
**poolName** | **string** | Name of an IP pool this email was sent through | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


