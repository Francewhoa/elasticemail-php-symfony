# ElasticEmail\Api\SegmentsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**segmentsByNameDelete**](SegmentsApiInterface.md#segmentsByNameDelete) | **DELETE** /segments/{name} | Delete Segment
[**segmentsByNameGet**](SegmentsApiInterface.md#segmentsByNameGet) | **GET** /segments/{name} | Load Segment
[**segmentsByNamePut**](SegmentsApiInterface.md#segmentsByNamePut) | **PUT** /segments/{name} | Update Segment
[**segmentsGet**](SegmentsApiInterface.md#segmentsGet) | **GET** /segments | Load Segments
[**segmentsPost**](SegmentsApiInterface.md#segmentsPost) | **POST** /segments | Add Segment


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.segments:
        class: Acme\MyBundle\Api\SegmentsApi
        tags:
            - { name: "open_api_server.api", api: "segments" }
    # ...
```

## **segmentsByNameDelete**
> segmentsByNameDelete($name)

Delete Segment

Delete an existing segment. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SegmentsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SegmentsApiInterface;

class SegmentsApi implements SegmentsApiInterface
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
     * Implementation of SegmentsApiInterface#segmentsByNameDelete
     */
    public function segmentsByNameDelete($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your segment. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **segmentsByNameGet**
> ElasticEmail\Model\Segment segmentsByNameGet($name)

Load Segment

Returns details for the specified segment. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SegmentsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SegmentsApiInterface;

class SegmentsApi implements SegmentsApiInterface
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
     * Implementation of SegmentsApiInterface#segmentsByNameGet
     */
    public function segmentsByNameGet($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the segment you want to load. Will load all contacts if the &#39;All Contacts&#39; name has been provided |

### Return type

[**ElasticEmail\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **segmentsByNamePut**
> ElasticEmail\Model\Segment segmentsByNamePut($name, $segmentPayload)

Update Segment

Rename or change RULE for your segment. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SegmentsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SegmentsApiInterface;

class SegmentsApi implements SegmentsApiInterface
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
     * Implementation of SegmentsApiInterface#segmentsByNamePut
     */
    public function segmentsByNamePut($name, SegmentPayload $segmentPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your segment. |
 **segmentPayload** | [**ElasticEmail\Model\SegmentPayload**](../Model/SegmentPayload.md)|  |

### Return type

[**ElasticEmail\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **segmentsGet**
> ElasticEmail\Model\Segment segmentsGet($limit, $offset)

Load Segments

Returns a list of all your available Segments. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SegmentsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SegmentsApiInterface;

class SegmentsApi implements SegmentsApiInterface
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
     * Implementation of SegmentsApiInterface#segmentsGet
     */
    public function segmentsGet($limit = null, $offset = null)
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

[**ElasticEmail\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **segmentsPost**
> ElasticEmail\Model\Segment segmentsPost($segmentPayload)

Add Segment

Add a new segment, based on specified RULE. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SegmentsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SegmentsApiInterface;

class SegmentsApi implements SegmentsApiInterface
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
     * Implementation of SegmentsApiInterface#segmentsPost
     */
    public function segmentsPost(SegmentPayload $segmentPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segmentPayload** | [**ElasticEmail\Model\SegmentPayload**](../Model/SegmentPayload.md)|  |

### Return type

[**ElasticEmail\Model\Segment**](../Model/Segment.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

