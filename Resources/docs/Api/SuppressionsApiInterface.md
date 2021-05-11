# ElasticEmail\Api\SuppressionsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**suppressionsBouncesGet**](SuppressionsApiInterface.md#suppressionsBouncesGet) | **GET** /suppressions/bounces | Get Bounce List
[**suppressionsBouncesImportPost**](SuppressionsApiInterface.md#suppressionsBouncesImportPost) | **POST** /suppressions/bounces/import | Add Bounces Async
[**suppressionsBouncesPost**](SuppressionsApiInterface.md#suppressionsBouncesPost) | **POST** /suppressions/bounces | Add Bounces
[**suppressionsByEmailDelete**](SuppressionsApiInterface.md#suppressionsByEmailDelete) | **DELETE** /suppressions/{email} | Delete Suppression
[**suppressionsByEmailGet**](SuppressionsApiInterface.md#suppressionsByEmailGet) | **GET** /suppressions/{email} | Get Suppression
[**suppressionsComplaintsGet**](SuppressionsApiInterface.md#suppressionsComplaintsGet) | **GET** /suppressions/complaints | Get Complaints List
[**suppressionsComplaintsImportPost**](SuppressionsApiInterface.md#suppressionsComplaintsImportPost) | **POST** /suppressions/complaints/import | Add Complaints Async
[**suppressionsComplaintsPost**](SuppressionsApiInterface.md#suppressionsComplaintsPost) | **POST** /suppressions/complaints | Add Complaints
[**suppressionsGet**](SuppressionsApiInterface.md#suppressionsGet) | **GET** /suppressions | Get Suppressions
[**suppressionsUnsubscribesGet**](SuppressionsApiInterface.md#suppressionsUnsubscribesGet) | **GET** /suppressions/unsubscribes | Get Unsubscribes List
[**suppressionsUnsubscribesImportPost**](SuppressionsApiInterface.md#suppressionsUnsubscribesImportPost) | **POST** /suppressions/unsubscribes/import | Add Unsubscribes Async
[**suppressionsUnsubscribesPost**](SuppressionsApiInterface.md#suppressionsUnsubscribesPost) | **POST** /suppressions/unsubscribes | Add Unsubscribes


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.suppressions:
        class: Acme\MyBundle\Api\SuppressionsApi
        tags:
            - { name: "open_api_server.api", api: "suppressions" }
    # ...
```

## **suppressionsBouncesGet**
> ElasticEmail\Model\Suppression suppressionsBouncesGet($search, $limit, $offset)

Get Bounce List

Retrieve your list of bounced emails. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsBouncesGet
     */
    public function suppressionsBouncesGet($search = null, $limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Text fragment used for searching. | [optional]
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\Suppression**](../Model/Suppression.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsBouncesImportPost**
> suppressionsBouncesImportPost($file)

Add Bounces Async

Add Bounced. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsBouncesImportPost
     */
    public function suppressionsBouncesImportPost(UploadedFile $file = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **UploadedFile****UploadedFile**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsBouncesPost**
> ElasticEmail\Model\Suppression suppressionsBouncesPost($requestBody)

Add Bounces

Add Bounced. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsBouncesPost
     */
    public function suppressionsBouncesPost(array $requestBody)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestBody** | [**string**](../Model/string.md)| Emails to add as bounces. Limited to 1000 per request |

### Return type

[**ElasticEmail\Model\Suppression**](../Model/Suppression.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsByEmailDelete**
> suppressionsByEmailDelete($email)

Delete Suppression

Delete Suppression. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsByEmailDelete
     */
    public function suppressionsByEmailDelete($email)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Proper email address. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsByEmailGet**
> ElasticEmail\Model\Suppression suppressionsByEmailGet($email)

Get Suppression

Retrieve your suppression. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsByEmailGet
     */
    public function suppressionsByEmailGet($email)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Proper email address. |

### Return type

[**ElasticEmail\Model\Suppression**](../Model/Suppression.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsComplaintsGet**
> ElasticEmail\Model\Suppression suppressionsComplaintsGet($search, $limit, $offset)

Get Complaints List

Retrieve your list of complaints. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsComplaintsGet
     */
    public function suppressionsComplaintsGet($search = null, $limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Text fragment used for searching. | [optional]
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\Suppression**](../Model/Suppression.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsComplaintsImportPost**
> suppressionsComplaintsImportPost($file)

Add Complaints Async

Add Complaints. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsComplaintsImportPost
     */
    public function suppressionsComplaintsImportPost(UploadedFile $file = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **UploadedFile****UploadedFile**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsComplaintsPost**
> ElasticEmail\Model\Suppression suppressionsComplaintsPost($requestBody)

Add Complaints

Add Complaints. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsComplaintsPost
     */
    public function suppressionsComplaintsPost(array $requestBody)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestBody** | [**string**](../Model/string.md)| Emails to add as complaints. Limited to 1000 per request |

### Return type

[**ElasticEmail\Model\Suppression**](../Model/Suppression.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsGet**
> ElasticEmail\Model\Suppression suppressionsGet($limit, $offset)

Get Suppressions

Retrieve your suppressions. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsGet
     */
    public function suppressionsGet($limit = null, $offset = null)
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

[**ElasticEmail\Model\Suppression**](../Model/Suppression.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsUnsubscribesGet**
> ElasticEmail\Model\Suppression suppressionsUnsubscribesGet($search, $limit, $offset)

Get Unsubscribes List

Retrieve your list of unsubscribes. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsUnsubscribesGet
     */
    public function suppressionsUnsubscribesGet($search = null, $limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Text fragment used for searching. | [optional]
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\Suppression**](../Model/Suppression.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsUnsubscribesImportPost**
> suppressionsUnsubscribesImportPost($file)

Add Unsubscribes Async

Add Unsubscribes. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsUnsubscribesImportPost
     */
    public function suppressionsUnsubscribesImportPost(UploadedFile $file = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **UploadedFile****UploadedFile**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **suppressionsUnsubscribesPost**
> ElasticEmail\Model\Suppression suppressionsUnsubscribesPost($requestBody)

Add Unsubscribes

Add Unsubscribes. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SuppressionsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SuppressionsApiInterface;

class SuppressionsApi implements SuppressionsApiInterface
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
     * Implementation of SuppressionsApiInterface#suppressionsUnsubscribesPost
     */
    public function suppressionsUnsubscribesPost(array $requestBody)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestBody** | [**string**](../Model/string.md)| Emails to add as unsubscribes. Limited to 1000 per request |

### Return type

[**ElasticEmail\Model\Suppression**](../Model/Suppression.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

