# ElasticEmail\Api\CampaignsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignsByNameDelete**](CampaignsApiInterface.md#campaignsByNameDelete) | **DELETE** /campaigns/{name} | Delete Campaign
[**campaignsByNameGet**](CampaignsApiInterface.md#campaignsByNameGet) | **GET** /campaigns/{name} | Load Campaign
[**campaignsByNamePut**](CampaignsApiInterface.md#campaignsByNamePut) | **PUT** /campaigns/{name} | Update Campaign
[**campaignsGet**](CampaignsApiInterface.md#campaignsGet) | **GET** /campaigns | Load Campaigns
[**campaignsPost**](CampaignsApiInterface.md#campaignsPost) | **POST** /campaigns | Add Campaign


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.campaigns:
        class: Acme\MyBundle\Api\CampaignsApi
        tags:
            - { name: "open_api_server.api", api: "campaigns" }
    # ...
```

## **campaignsByNameDelete**
> campaignsByNameDelete($name)

Delete Campaign

Delete the specific campaign.  This does not cancel in progress email, see Cancel In Progress. Required Access Level: ModifyCampaigns

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CampaignsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\CampaignsApiInterface;

class CampaignsApi implements CampaignsApiInterface
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
     * Implementation of CampaignsApiInterface#campaignsByNameDelete
     */
    public function campaignsByNameDelete($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of Campaign to delete |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **campaignsByNameGet**
> ElasticEmail\Model\Campaign campaignsByNameGet($name)

Load Campaign

Returns the specified campaign details. Required Access Level: ViewCampaigns

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CampaignsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\CampaignsApiInterface;

class CampaignsApi implements CampaignsApiInterface
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
     * Implementation of CampaignsApiInterface#campaignsByNameGet
     */
    public function campaignsByNameGet($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of Campaign to get |

### Return type

[**ElasticEmail\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **campaignsByNamePut**
> ElasticEmail\Model\Campaign campaignsByNamePut($name, $campaign)

Update Campaign

Updates a previously added campaign.  Only Active and Paused campaigns can be updated. Required Access Level: ModifyCampaigns

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CampaignsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\CampaignsApiInterface;

class CampaignsApi implements CampaignsApiInterface
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
     * Implementation of CampaignsApiInterface#campaignsByNamePut
     */
    public function campaignsByNamePut($name, Campaign $campaign)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of Campaign to update |
 **campaign** | [**ElasticEmail\Model\Campaign**](../Model/Campaign.md)| JSON representation of a campaign |

### Return type

[**ElasticEmail\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **campaignsGet**
> ElasticEmail\Model\Campaign campaignsGet($search, $offset, $limit)

Load Campaigns

Returns a list all of your campaigns. Limited to 1000 results. Required Access Level: ViewCampaigns

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CampaignsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\CampaignsApiInterface;

class CampaignsApi implements CampaignsApiInterface
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
     * Implementation of CampaignsApiInterface#campaignsGet
     */
    public function campaignsGet($search = null, $offset = null, $limit = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Text fragment used for searching in Campaign name (using the &#39;contains&#39; rule) | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]
 **limit** | **int**| Maximum number of returned items. | [optional]

### Return type

[**ElasticEmail\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **campaignsPost**
> ElasticEmail\Model\Campaign campaignsPost($campaign)

Add Campaign

Add a campaign for processing. Required Access Level: ModifyCampaigns

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/CampaignsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\CampaignsApiInterface;

class CampaignsApi implements CampaignsApiInterface
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
     * Implementation of CampaignsApiInterface#campaignsPost
     */
    public function campaignsPost(Campaign $campaign)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign** | [**ElasticEmail\Model\Campaign**](../Model/Campaign.md)| JSON representation of a campaign |

### Return type

[**ElasticEmail\Model\Campaign**](../Model/Campaign.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

