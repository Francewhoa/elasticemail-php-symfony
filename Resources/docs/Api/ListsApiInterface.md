# ElasticEmail\Api\ListsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsByNameContactsPost**](ListsApiInterface.md#listsByNameContactsPost) | **POST** /lists/{name}/contacts | Add Contacts to List
[**listsByNameContactsRemovePost**](ListsApiInterface.md#listsByNameContactsRemovePost) | **POST** /lists/{name}/contacts/remove | Remove Contacts from List
[**listsByNameDelete**](ListsApiInterface.md#listsByNameDelete) | **DELETE** /lists/{name} | Delete List
[**listsByNameGet**](ListsApiInterface.md#listsByNameGet) | **GET** /lists/{name} | Load List
[**listsByNamePut**](ListsApiInterface.md#listsByNamePut) | **PUT** /lists/{name} | Update List
[**listsGet**](ListsApiInterface.md#listsGet) | **GET** /lists | Load Lists
[**listsPost**](ListsApiInterface.md#listsPost) | **POST** /lists | Add List


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.lists:
        class: Acme\MyBundle\Api\ListsApi
        tags:
            - { name: "open_api_server.api", api: "lists" }
    # ...
```

## **listsByNameContactsPost**
> ElasticEmail\Model\ContactsList listsByNameContactsPost($name, $emailsPayload)

Add Contacts to List

Add existing Contacts to specified list. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ListsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ListsApiInterface;

class ListsApi implements ListsApiInterface
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
     * Implementation of ListsApiInterface#listsByNameContactsPost
     */
    public function listsByNameContactsPost($name, EmailsPayload $emailsPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |
 **emailsPayload** | [**ElasticEmail\Model\EmailsPayload**](../Model/EmailsPayload.md)| Provide either rule or a list of emails, not both. |

### Return type

[**ElasticEmail\Model\ContactsList**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **listsByNameContactsRemovePost**
> listsByNameContactsRemovePost($name, $emailsPayload)

Remove Contacts from List

Remove specified Contacts from your list. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ListsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ListsApiInterface;

class ListsApi implements ListsApiInterface
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
     * Implementation of ListsApiInterface#listsByNameContactsRemovePost
     */
    public function listsByNameContactsRemovePost($name, EmailsPayload $emailsPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |
 **emailsPayload** | [**ElasticEmail\Model\EmailsPayload**](../Model/EmailsPayload.md)| Provide either rule or a list of emails, not both. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **listsByNameDelete**
> listsByNameDelete($name)

Delete List

Deletes List and removes all the Contacts from it (does not delete Contacts). Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ListsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ListsApiInterface;

class ListsApi implements ListsApiInterface
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
     * Implementation of ListsApiInterface#listsByNameDelete
     */
    public function listsByNameDelete($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **listsByNameGet**
> ElasticEmail\Model\ContactsList listsByNameGet($name)

Load List

Returns detailed information about specified list. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ListsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ListsApiInterface;

class ListsApi implements ListsApiInterface
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
     * Implementation of ListsApiInterface#listsByNameGet
     */
    public function listsByNameGet($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |

### Return type

[**ElasticEmail\Model\ContactsList**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **listsByNamePut**
> ElasticEmail\Model\ContactsList listsByNamePut($name, $listUpdatePayload)

Update List

Update existing list. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ListsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ListsApiInterface;

class ListsApi implements ListsApiInterface
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
     * Implementation of ListsApiInterface#listsByNamePut
     */
    public function listsByNamePut($name, ListUpdatePayload $listUpdatePayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your list. |
 **listUpdatePayload** | [**ElasticEmail\Model\ListUpdatePayload**](../Model/ListUpdatePayload.md)|  |

### Return type

[**ElasticEmail\Model\ContactsList**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **listsGet**
> ElasticEmail\Model\ContactsList listsGet($limit, $offset)

Load Lists

Returns all your existing lists. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ListsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ListsApiInterface;

class ListsApi implements ListsApiInterface
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
     * Implementation of ListsApiInterface#listsGet
     */
    public function listsGet($limit = null, $offset = null)
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

[**ElasticEmail\Model\ContactsList**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **listsPost**
> ElasticEmail\Model\ContactsList listsPost($listPayload)

Add List

Add a new list. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ListsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ListsApiInterface;

class ListsApi implements ListsApiInterface
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
     * Implementation of ListsApiInterface#listsPost
     */
    public function listsPost(ListPayload $listPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listPayload** | [**ElasticEmail\Model\ListPayload**](../Model/ListPayload.md)|  |

### Return type

[**ElasticEmail\Model\ContactsList**](../Model/ContactsList.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

