# ElasticEmail\Api\ContactsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactsByEmailDelete**](ContactsApiInterface.md#contactsByEmailDelete) | **DELETE** /contacts/{email} | Delete Contact
[**contactsByEmailGet**](ContactsApiInterface.md#contactsByEmailGet) | **GET** /contacts/{email} | Load Contact
[**contactsByEmailHistoryGet**](ContactsApiInterface.md#contactsByEmailHistoryGet) | **GET** /contacts/{email}/history | Load History
[**contactsByEmailPut**](ContactsApiInterface.md#contactsByEmailPut) | **PUT** /contacts/{email} | Update Contact
[**contactsDeletePost**](ContactsApiInterface.md#contactsDeletePost) | **POST** /contacts/delete | Delete Contacts Bulk
[**contactsExportByIdStatusGet**](ContactsApiInterface.md#contactsExportByIdStatusGet) | **GET** /contacts/export/{id}/status | Check Export Status
[**contactsExportPost**](ContactsApiInterface.md#contactsExportPost) | **POST** /contacts/export | Export Contacts
[**contactsGet**](ContactsApiInterface.md#contactsGet) | **GET** /contacts | Load Contacts
[**contactsImportPost**](ContactsApiInterface.md#contactsImportPost) | **POST** /contacts/import | Upload Contacts
[**contactsPost**](ContactsApiInterface.md#contactsPost) | **POST** /contacts | Add Contact


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.contacts:
        class: Acme\MyBundle\Api\ContactsApi
        tags:
            - { name: "open_api_server.api", api: "contacts" }
    # ...
```

## **contactsByEmailDelete**
> contactsByEmailDelete($email)

Delete Contact

Deletes the provided contact. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsByEmailDelete
     */
    public function contactsByEmailDelete($email)
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

## **contactsByEmailGet**
> ElasticEmail\Model\Contact contactsByEmailGet($email)

Load Contact

Load detailed contact information for specified email. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsByEmailGet
     */
    public function contactsByEmailGet($email)
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

[**ElasticEmail\Model\Contact**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **contactsByEmailHistoryGet**
> ElasticEmail\Model\ContactHistory contactsByEmailHistoryGet($email, $limit, $offset)

Load History

Returns detailed history of specified Contact. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsByEmailHistoryGet
     */
    public function contactsByEmailHistoryGet($email, $limit = null, $offset = null)
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
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\ContactHistory**](../Model/ContactHistory.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **contactsByEmailPut**
> ElasticEmail\Model\Contact contactsByEmailPut($email, $contactUpdatePayload)

Update Contact

Update selected contact. Omitted contact's fields will not be changed. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsByEmailPut
     */
    public function contactsByEmailPut($email, ContactUpdatePayload $contactUpdatePayload)
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
 **contactUpdatePayload** | [**ElasticEmail\Model\ContactUpdatePayload**](../Model/ContactUpdatePayload.md)|  |

### Return type

[**ElasticEmail\Model\Contact**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **contactsDeletePost**
> contactsDeletePost($emailsPayload)

Delete Contacts Bulk

Deletes provided contacts in bulk. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsDeletePost
     */
    public function contactsDeletePost(EmailsPayload $emailsPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emailsPayload** | [**ElasticEmail\Model\EmailsPayload**](../Model/EmailsPayload.md)| Provide either rule or a list of emails, not both. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **contactsExportByIdStatusGet**
> ElasticEmail\Model\ExportStatus contactsExportByIdStatusGet($id)

Check Export Status

Check the current status of the export. Required Access Level: Export

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsExportByIdStatusGet
     */
    public function contactsExportByIdStatusGet($id)
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

## **contactsExportPost**
> ElasticEmail\Model\ExportLink contactsExportPost($fileFormat, $rule, $emails, $compressionFormat, $fileName)

Export Contacts

Request an Export of specified Contacts. Required Access Level: Export

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsExportPost
     */
    public function contactsExportPost($fileFormat = null, $rule = null, array $emails = null, $compressionFormat = null, $fileName = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileFormat** | [**ExportFileFormats**](../Model/.md)| Format of the exported file | [optional]
 **rule** | **string**| Query used for filtering. | [optional]
 **emails** | [**string**](../Model/string.md)| Comma delimited list of contact emails | [optional]
 **compressionFormat** | [**CompressionFormat**](../Model/.md)| FileResponse compression format. None or Zip. | [optional]
 **fileName** | **string**| Name of your file including extension. | [optional]

### Return type

[**ElasticEmail\Model\ExportLink**](../Model/ExportLink.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **contactsGet**
> ElasticEmail\Model\Contact contactsGet($limit, $offset)

Load Contacts

Returns a list of contacts. Required Access Level: ViewContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsGet
     */
    public function contactsGet($limit = null, $offset = null)
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

[**ElasticEmail\Model\Contact**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **contactsImportPost**
> contactsImportPost($listName, $encodingName, $file)

Upload Contacts

Upload contacts from a file. Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsImportPost
     */
    public function contactsImportPost($listName = null, $encodingName = null, UploadedFile $file = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listName** | **string**| Name of an existing list to add these contacts to | [optional]
 **encodingName** | **string**| In what encoding the file is uploaded | [optional]
 **file** | **UploadedFile****UploadedFile**|  | [optional]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **contactsPost**
> ElasticEmail\Model\Contact contactsPost($contactPayload, $listnames)

Add Contact

Add new Contacts to your Lists. Up to 1000 can be added (for more please refer to the import request). Required Access Level: ModifyContacts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ContactsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\ContactsApiInterface;

class ContactsApi implements ContactsApiInterface
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
     * Implementation of ContactsApiInterface#contactsPost
     */
    public function contactsPost(array $contactPayload, array $listnames = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactPayload** | [**ElasticEmail\Model\ContactPayload**](../Model/ContactPayload.md)|  |
 **listnames** | [**string**](../Model/string.md)| Names of lists to which the uploaded contacts should be added to | [optional]

### Return type

[**ElasticEmail\Model\Contact**](../Model/Contact.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

