# CampaignOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deliveryOptimization** | [**DeliveryOptimizationType**](DeliveryOptimizationType.md) | How to order email delivery - by recipients&#39; engagement score or by the time they open the most of the emails that were sent to them | [optional] 
**trackOpens** | **bool** | Should the opens be tracked? If no value has been provided, Account&#39;s default setting will be used. | [optional] 
**trackClicks** | **bool** | Should the clicks be tracked? If no value has been provided, Account&#39;s default setting will be used. | [optional] 
**scheduleFor** | [**\DateTime**](\DateTime.md) | Date when this Campaign is scheduled to be sent on | [optional] 
**splitOptions** | [**SplitOptions**](SplitOptions.md) | Optional options for A/X split campaigns. Will be ignored if only one template content was provided | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

