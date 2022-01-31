# SubaccountEmailSettingsPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requiresEmailCredits** | **bool** | True, if Account needs credits to send emails. Otherwise, false | [optional] 
**emailSizeLimit** | **int** | Maximum size of email including attachments in MB&#39;s | [optional] 
**dailySendLimit** | **int** | Amount of emails Account can send daily | [optional] 
**maxContacts** | **int** | Maximum number of contacts the Account can have. 0 means that parent account&#39;s limit is used. | [optional] 
**enablePrivateIPPurchase** | **bool** | Can the SubAccount purchase Private IP for themselves | [optional] 
**poolName** | **string** | Name of your custom IP Pool to be used in the sending process | [optional] 
**validSenderDomainOnly** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


