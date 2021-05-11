# Contact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Proper email address. | [optional] 
**status** | [**ContactStatus**](ContactStatus.md) | Status of the given resource | [optional] 
**firstName** | **string** | First name. | [optional] 
**lastName** | **string** | Last name. | [optional] 
**customFields** | **string** | A key-value collection of custom contact fields which can be used in the system. | [optional] 
**consent** | [**ElasticEmail\Model\ConsentData**](ConsentData.md) |  | [optional] 
**source** | [**ContactSource**](ContactSource.md) | From where was this contact added | [optional] 
**dateAdded** | [**\DateTime**](\DateTime.md) | Date of creation in YYYY-MM-DDThh:ii:ss format | [optional] 
**dateUpdated** | [**\DateTime**](\DateTime.md) | Last change date | [optional] 
**statusChangeDate** | [**\DateTime**](\DateTime.md) | Date of last status change. | [optional] 
**activity** | [**ContactActivity**](ContactActivity.md) | Contact&#39;s email statistics and activity | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


