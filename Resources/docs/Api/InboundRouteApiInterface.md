# ElasticEmail\Api\InboundRouteApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inboundrouteByIdDelete**](InboundRouteApiInterface.md#inboundrouteByIdDelete) | **DELETE** /inboundroute/{id} | Delete Route
[**inboundrouteByIdGet**](InboundRouteApiInterface.md#inboundrouteByIdGet) | **GET** /inboundroute/{id} | Get Route
[**inboundrouteByIdPut**](InboundRouteApiInterface.md#inboundrouteByIdPut) | **PUT** /inboundroute/{id} | Update Route
[**inboundrouteGet**](InboundRouteApiInterface.md#inboundrouteGet) | **GET** /inboundroute | Get Routes
[**inboundrouteOrderPut**](InboundRouteApiInterface.md#inboundrouteOrderPut) | **PUT** /inboundroute/order | Update Sorting
[**inboundroutePost**](InboundRouteApiInterface.md#inboundroutePost) | **POST** /inboundroute | Create Route


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.inboundRoute:
        class: Acme\MyBundle\Api\InboundRouteApi
        tags:
            - { name: "open_api_server.api", api: "inboundRoute" }
    # ...
```

## **inboundrouteByIdDelete**
> inboundrouteByIdDelete($id)

Delete Route

Deletes the Inbound Route. Required Access Level: ModifySettings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/InboundRouteApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\InboundRouteApiInterface;

class InboundRouteApi implements InboundRouteApiInterface
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
     * Implementation of InboundRouteApiInterface#inboundrouteByIdDelete
     */
    public function inboundrouteByIdDelete($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **inboundrouteByIdGet**
> ElasticEmail\Model\InboundRoute inboundrouteByIdGet($id)

Get Route

Load an Inbound Route. Required Access Level: ViewSettings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/InboundRouteApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\InboundRouteApiInterface;

class InboundRouteApi implements InboundRouteApiInterface
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
     * Implementation of InboundRouteApiInterface#inboundrouteByIdGet
     */
    public function inboundrouteByIdGet($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID number of your attachment |

### Return type

[**ElasticEmail\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **inboundrouteByIdPut**
> ElasticEmail\Model\InboundRoute inboundrouteByIdPut($id, $inboundPayload)

Update Route

Update the Inbound Route. Required Access Level: ModifySettings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/InboundRouteApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\InboundRouteApiInterface;

class InboundRouteApi implements InboundRouteApiInterface
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
     * Implementation of InboundRouteApiInterface#inboundrouteByIdPut
     */
    public function inboundrouteByIdPut($id, InboundPayload $inboundPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **inboundPayload** | [**ElasticEmail\Model\InboundPayload**](../Model/InboundPayload.md)|  |

### Return type

[**ElasticEmail\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **inboundrouteGet**
> ElasticEmail\Model\InboundRoute inboundrouteGet()

Get Routes

Get all your Inbound Routes. Required Access Level: ViewSettings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/InboundRouteApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\InboundRouteApiInterface;

class InboundRouteApi implements InboundRouteApiInterface
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
     * Implementation of InboundRouteApiInterface#inboundrouteGet
     */
    public function inboundrouteGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**ElasticEmail\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **inboundrouteOrderPut**
> ElasticEmail\Model\InboundRoute inboundrouteOrderPut($sortOrderItem)

Update Sorting

Required Access Level: ViewSettings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/InboundRouteApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\InboundRouteApiInterface;

class InboundRouteApi implements InboundRouteApiInterface
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
     * Implementation of InboundRouteApiInterface#inboundrouteOrderPut
     */
    public function inboundrouteOrderPut(array $sortOrderItem)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sortOrderItem** | [**ElasticEmail\Model\SortOrderItem**](../Model/SortOrderItem.md)| Change the ordering of inbound routes for when matching the inbound |

### Return type

[**ElasticEmail\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **inboundroutePost**
> ElasticEmail\Model\InboundRoute inboundroutePost($inboundPayload)

Create Route

Create new Inbound Route. Required Access Level: ModifySettings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/InboundRouteApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\InboundRouteApiInterface;

class InboundRouteApi implements InboundRouteApiInterface
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
     * Implementation of InboundRouteApiInterface#inboundroutePost
     */
    public function inboundroutePost(InboundPayload $inboundPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inboundPayload** | [**ElasticEmail\Model\InboundPayload**](../Model/InboundPayload.md)|  |

### Return type

[**ElasticEmail\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

