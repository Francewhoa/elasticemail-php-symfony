# ElasticEmail\Api\EmailsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailsByMsgidViewGet**](EmailsApiInterface.md#emailsByMsgidViewGet) | **GET** /emails/{msgid}/view | View Email
[**emailsMergefilePost**](EmailsApiInterface.md#emailsMergefilePost) | **POST** /emails/mergefile | Send Bulk Emails CSV
[**emailsPost**](EmailsApiInterface.md#emailsPost) | **POST** /emails | Send Bulk Emails
[**emailsTransactionalPost**](EmailsApiInterface.md#emailsTransactionalPost) | **POST** /emails/transactional | Send Transactional Email


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.emails:
        class: Acme\MyBundle\Api\EmailsApi
        tags:
            - { name: "open_api_server.api", api: "emails" }
    # ...
```

## **emailsByMsgidViewGet**
> ElasticEmail\Model\EmailData emailsByMsgidViewGet($msgid)

View Email

Returns email details for viewing or rendering. Required Access Level: None

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EmailsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EmailsApiInterface;

class EmailsApi implements EmailsApiInterface
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
     * Implementation of EmailsApiInterface#emailsByMsgidViewGet
     */
    public function emailsByMsgidViewGet($msgid)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msgid** | **string**| Message identifier |

### Return type

[**ElasticEmail\Model\EmailData**](../Model/EmailData.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **emailsMergefilePost**
> ElasticEmail\Model\EmailSend emailsMergefilePost($mergeEmailPayload)

Send Bulk Emails CSV

Send bulk merge email. Required Access Level: SendHttp

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EmailsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EmailsApiInterface;

class EmailsApi implements EmailsApiInterface
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
     * Implementation of EmailsApiInterface#emailsMergefilePost
     */
    public function emailsMergefilePost(MergeEmailPayload $mergeEmailPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mergeEmailPayload** | [**ElasticEmail\Model\MergeEmailPayload**](../Model/MergeEmailPayload.md)| Email data |

### Return type

[**ElasticEmail\Model\EmailSend**](../Model/EmailSend.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **emailsPost**
> ElasticEmail\Model\EmailSend emailsPost($emailMessageData)

Send Bulk Emails

Send bulk merge email. Required Access Level: SendHttp

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EmailsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EmailsApiInterface;

class EmailsApi implements EmailsApiInterface
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
     * Implementation of EmailsApiInterface#emailsPost
     */
    public function emailsPost(EmailMessageData $emailMessageData)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailMessageData** | [**ElasticEmail\Model\EmailMessageData**](../Model/EmailMessageData.md)| Email data |

### Return type

[**ElasticEmail\Model\EmailSend**](../Model/EmailSend.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **emailsTransactionalPost**
> ElasticEmail\Model\EmailSend emailsTransactionalPost($emailTransactionalMessageData)

Send Transactional Email

Send transactional emails (recipients will be known to each other). Required Access Level: SendHttp

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/EmailsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\EmailsApiInterface;

class EmailsApi implements EmailsApiInterface
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
     * Implementation of EmailsApiInterface#emailsTransactionalPost
     */
    public function emailsTransactionalPost(EmailTransactionalMessageData $emailTransactionalMessageData)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailTransactionalMessageData** | [**ElasticEmail\Model\EmailTransactionalMessageData**](../Model/EmailTransactionalMessageData.md)| Email data |

### Return type

[**ElasticEmail\Model\EmailSend**](../Model/EmailSend.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

