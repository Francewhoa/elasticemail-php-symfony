# ElasticEmail\Api\EventsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsByTransactionidGet**](EventsApiInterface.md#eventsByTransactionidGet) | **GET** /events/{transactionid} | Load Email Events
[**eventsChannelsByNameExportPost**](EventsApiInterface.md#eventsChannelsByNameExportPost) | **POST** /events/channels/{name}/export | Export Channel Events
[**eventsChannelsByNameGet**](EventsApiInterface.md#eventsChannelsByNameGet) | **GET** /events/channels/{name} | Load Channel Events
[**eventsChannelsExportByIdStatusGet**](EventsApiInterface.md#eventsChannelsExportByIdStatusGet) | **GET** /events/channels/export/{id}/status | Check Channel Export Status
[**eventsExportByIdStatusGet**](EventsApiInterface.md#eventsExportByIdStatusGet) | **GET** /events/export/{id}/status | Check Export Status
[**eventsExportPost**](EventsApiInterface.md#eventsExportPost) | **POST** /events/export | Export Events
[**eventsGet**](EventsApiInterface.md#eventsGet) | **GET** /events | Load Events


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.events:
        class: Acme\MyBundle\Api\EventsApi
        tags:
            - { name: "open_api_server.api", api: "events" }
    # ...
```

## **eventsByTransactionidGet**
> ElasticEmail\Model\RecipientEvent eventsByTransactionidGet($transactionid, $from, $to, $orderBy, $limit, $offset)

Load Email Events

Returns a log of delivery events for the specific transaction ID. Required Access Level: ViewReports

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EventsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EventsApiInterface;

class EventsApi implements EventsApiInterface
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
     * Implementation of EventsApiInterface#eventsByTransactionidGet
     */
    public function eventsByTransactionidGet($transactionid, \DateTime $from = null, \DateTime $to = null, EventsOrderBy $orderBy = null, $limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionid** | **string**| ID number of transaction |
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **orderBy** | [**ElasticEmail\Model\EventsOrderBy**](../Model/.md)|  | [optional]
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\RecipientEvent**](../Model/RecipientEvent.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **eventsChannelsByNameExportPost**
> ElasticEmail\Model\ExportLink eventsChannelsByNameExportPost($name, $eventTypes, $from, $to, $fileFormat, $compressionFormat, $fileName)

Export Channel Events

Export delivery events log information to the specified file format. Required Access Level: Export

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EventsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EventsApiInterface;

class EventsApi implements EventsApiInterface
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
     * Implementation of EventsApiInterface#eventsChannelsByNameExportPost
     */
    public function eventsChannelsByNameExportPost($name, array $eventTypes = null, \DateTime $from = null, \DateTime $to = null, ExportFileFormats $fileFormat = null, CompressionFormat $compressionFormat = null, $fileName = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of selected channel. |
 **eventTypes** | [**ElasticEmail\Model\EventType**](../Model/ElasticEmail\Model\EventType.md)| Types of Events to return | [optional]
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **fileFormat** | [**ElasticEmail\Model\ExportFileFormats**](../Model/.md)| Format of the exported file | [optional]
 **compressionFormat** | [**ElasticEmail\Model\CompressionFormat**](../Model/.md)| FileResponse compression format. None or Zip. | [optional]
 **fileName** | **string**| Name of your file including extension. | [optional]

### Return type

[**ElasticEmail\Model\ExportLink**](../Model/ExportLink.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **eventsChannelsByNameGet**
> ElasticEmail\Model\RecipientEvent eventsChannelsByNameGet($name, $eventTypes, $from, $to, $orderBy, $limit, $offset)

Load Channel Events

Returns a log of delivery events filtered by specified parameters. Required Access Level: ViewReports

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EventsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EventsApiInterface;

class EventsApi implements EventsApiInterface
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
     * Implementation of EventsApiInterface#eventsChannelsByNameGet
     */
    public function eventsChannelsByNameGet($name, array $eventTypes = null, \DateTime $from = null, \DateTime $to = null, EventsOrderBy $orderBy = null, $limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of selected channel. |
 **eventTypes** | [**ElasticEmail\Model\EventType**](../Model/ElasticEmail\Model\EventType.md)| Types of Events to return | [optional]
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **orderBy** | [**ElasticEmail\Model\EventsOrderBy**](../Model/.md)|  | [optional]
 **limit** | **int**| How many items to load. Maximum for this request is 1000 items | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\RecipientEvent**](../Model/RecipientEvent.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **eventsChannelsExportByIdStatusGet**
> ElasticEmail\Model\ExportStatus eventsChannelsExportByIdStatusGet($id)

Check Channel Export Status

Check the current status of the channel export. Required Access Level: Export

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EventsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EventsApiInterface;

class EventsApi implements EventsApiInterface
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
     * Implementation of EventsApiInterface#eventsChannelsExportByIdStatusGet
     */
    public function eventsChannelsExportByIdStatusGet($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the exported file |

### Return type

[**ElasticEmail\Model\ExportStatus**](../Model/ExportStatus.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **eventsExportByIdStatusGet**
> ElasticEmail\Model\ExportStatus eventsExportByIdStatusGet($id)

Check Export Status

Check the current status of the export. Required Access Level: Export

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EventsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EventsApiInterface;

class EventsApi implements EventsApiInterface
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
     * Implementation of EventsApiInterface#eventsExportByIdStatusGet
     */
    public function eventsExportByIdStatusGet($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the exported file |

### Return type

[**ElasticEmail\Model\ExportStatus**](../Model/ExportStatus.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **eventsExportPost**
> ElasticEmail\Model\ExportLink eventsExportPost($eventTypes, $from, $to, $fileFormat, $compressionFormat, $fileName)

Export Events

Export delivery events log information to the specified file format. Required Access Level: Export

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EventsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EventsApiInterface;

class EventsApi implements EventsApiInterface
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
     * Implementation of EventsApiInterface#eventsExportPost
     */
    public function eventsExportPost(array $eventTypes = null, \DateTime $from = null, \DateTime $to = null, ExportFileFormats $fileFormat = null, CompressionFormat $compressionFormat = null, $fileName = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventTypes** | [**ElasticEmail\Model\EventType**](../Model/ElasticEmail\Model\EventType.md)| Types of Events to return | [optional]
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **fileFormat** | [**ElasticEmail\Model\ExportFileFormats**](../Model/.md)| Format of the exported file | [optional]
 **compressionFormat** | [**ElasticEmail\Model\CompressionFormat**](../Model/.md)| FileResponse compression format. None or Zip. | [optional]
 **fileName** | **string**| Name of your file including extension. | [optional]

### Return type

[**ElasticEmail\Model\ExportLink**](../Model/ExportLink.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **eventsGet**
> ElasticEmail\Model\RecipientEvent eventsGet($eventTypes, $from, $to, $orderBy, $limit, $offset)

Load Events

Returns a log of delivery events filtered by specified parameters. Required Access Level: ViewReports

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EventsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EventsApiInterface;

class EventsApi implements EventsApiInterface
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
     * Implementation of EventsApiInterface#eventsGet
     */
    public function eventsGet(array $eventTypes = null, \DateTime $from = null, \DateTime $to = null, EventsOrderBy $orderBy = null, $limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventTypes** | [**ElasticEmail\Model\EventType**](../Model/ElasticEmail\Model\EventType.md)| Types of Events to return | [optional]
 **from** | **\DateTime**| Starting date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **to** | **\DateTime**| Ending date for search in YYYY-MM-DDThh:mm:ss format. | [optional]
 **orderBy** | [**ElasticEmail\Model\EventsOrderBy**](../Model/.md)|  | [optional]
 **limit** | **int**| How many items to load. Maximum for this request is 1000 items | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\RecipientEvent**](../Model/RecipientEvent.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

