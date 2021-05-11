# ElasticEmail\Api\StatisticsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statisticsCampaignsByNameGet**](StatisticsApiInterface.md#statisticsCampaignsByNameGet) | **GET** /statistics/campaigns/{name} | Load Campaign Stats
[**statisticsCampaignsGet**](StatisticsApiInterface.md#statisticsCampaignsGet) | **GET** /statistics/campaigns | Load Campaigns Stats
[**statisticsChannelsByNameGet**](StatisticsApiInterface.md#statisticsChannelsByNameGet) | **GET** /statistics/channels/{name} | Load Channel Stats
[**statisticsChannelsGet**](StatisticsApiInterface.md#statisticsChannelsGet) | **GET** /statistics/channels | Load Channels Stats
[**statisticsGet**](StatisticsApiInterface.md#statisticsGet) | **GET** /statistics | Load Statistics


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.statistics:
        class: Acme\MyBundle\Api\StatisticsApi
        tags:
            - { name: "open_api_server.api", api: "statistics" }
    # ...
```

## **statisticsCampaignsByNameGet**
> ElasticEmail\Model\ChannelLogStatusSummary statisticsCampaignsByNameGet($name)

Load Campaign Stats

Retrieve stats of an existing campaign. Required Access Level: ViewChannels

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StatisticsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\StatisticsApiInterface;

class StatisticsApi implements StatisticsApiInterface
{

    /**
     * Configure API key authorization: apikey
     */
    public function setapikey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of StatisticsApiInterface#statisticsCampaignsByNameGet
     */
    public function statisticsCampaignsByNameGet($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the campaign to get. |

### Return type

[**ElasticEmail\Model\ChannelLogStatusSummary**](../Model/ChannelLogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **statisticsCampaignsGet**
> ElasticEmail\Model\ChannelLogStatusSummary statisticsCampaignsGet($limit, $offset)

Load Campaigns Stats

Returns a list of your Campaigns' stats. Required Access Level: ViewChannels

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StatisticsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\StatisticsApiInterface;

class StatisticsApi implements StatisticsApiInterface
{

    /**
     * Configure API key authorization: apikey
     */
    public function setapikey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of StatisticsApiInterface#statisticsCampaignsGet
     */
    public function statisticsCampaignsGet($limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\ChannelLogStatusSummary**](../Model/ChannelLogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **statisticsChannelsByNameGet**
> ElasticEmail\Model\ChannelLogStatusSummary statisticsChannelsByNameGet($name)

Load Channel Stats

Retrieve an existing channel stats. Required Access Level: ViewChannels

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StatisticsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\StatisticsApiInterface;

class StatisticsApi implements StatisticsApiInterface
{

    /**
     * Configure API key authorization: apikey
     */
    public function setapikey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of StatisticsApiInterface#statisticsChannelsByNameGet
     */
    public function statisticsChannelsByNameGet($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the channel to get. |

### Return type

[**ElasticEmail\Model\ChannelLogStatusSummary**](../Model/ChannelLogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **statisticsChannelsGet**
> ElasticEmail\Model\ChannelLogStatusSummary statisticsChannelsGet($limit, $offset)

Load Channels Stats

Returns a list of your Channels' stats. Required Access Level: ViewChannels

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StatisticsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\StatisticsApiInterface;

class StatisticsApi implements StatisticsApiInterface
{

    /**
     * Configure API key authorization: apikey
     */
    public function setapikey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of StatisticsApiInterface#statisticsChannelsGet
     */
    public function statisticsChannelsGet($limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\ChannelLogStatusSummary**](../Model/ChannelLogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **statisticsGet**
> ElasticEmail\Model\LogStatusSummary statisticsGet($from, $to)

Load Statistics

Returns basic statistics. Required Access Level: ViewReports

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StatisticsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\StatisticsApiInterface;

class StatisticsApi implements StatisticsApiInterface
{

    /**
     * Configure API key authorization: apikey
     */
    public function setapikey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of StatisticsApiInterface#statisticsGet
     */
    public function statisticsGet(\DateTime $from, \DateTime $to = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. |
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]

### Return type

[**ElasticEmail\Model\LogStatusSummary**](../Model/LogStatusSummary.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

