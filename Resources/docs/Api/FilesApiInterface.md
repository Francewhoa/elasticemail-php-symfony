# ElasticEmail\Api\FilesApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**filesByNameDelete**](FilesApiInterface.md#filesByNameDelete) | **DELETE** /files/{name} | Delete File
[**filesByNameGet**](FilesApiInterface.md#filesByNameGet) | **GET** /files/{name} | Download File
[**filesByNameInfoGet**](FilesApiInterface.md#filesByNameInfoGet) | **GET** /files/{name}/info | Load File Details
[**filesGet**](FilesApiInterface.md#filesGet) | **GET** /files | List Files
[**filesPost**](FilesApiInterface.md#filesPost) | **POST** /files | Upload File


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.files:
        class: Acme\MyBundle\Api\FilesApi
        tags:
            - { name: "open_api_server.api", api: "files" }
    # ...
```

## **filesByNameDelete**
> filesByNameDelete($name)

Delete File

Permanently deletes the file from your Account. Required Access Level: ModifyFiles

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/FilesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\FilesApiInterface;

class FilesApi implements FilesApiInterface
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
     * Implementation of FilesApiInterface#filesByNameDelete
     */
    public function filesByNameDelete($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your file including extension. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **filesByNameGet**
> UploadedFile filesByNameGet($name)

Download File

Gets content of the specified File. Required Access Level: ViewFiles

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/FilesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\FilesApiInterface;

class FilesApi implements FilesApiInterface
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
     * Implementation of FilesApiInterface#filesByNameGet
     */
    public function filesByNameGet($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your file including extension. |

### Return type

**UploadedFile**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **filesByNameInfoGet**
> ElasticEmail\Model\FileInfo filesByNameInfoGet($name)

Load File Details

Returns the specified File's details. Required Access Level: ViewFiles

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/FilesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\FilesApiInterface;

class FilesApi implements FilesApiInterface
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
     * Implementation of FilesApiInterface#filesByNameInfoGet
     */
    public function filesByNameInfoGet($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of your file including extension. |

### Return type

[**ElasticEmail\Model\FileInfo**](../Model/FileInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **filesGet**
> ElasticEmail\Model\FileInfo filesGet($limit, $offset)

List Files

Returns a list of all your available files. Required Access Level: ViewFiles

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/FilesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\FilesApiInterface;

class FilesApi implements FilesApiInterface
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
     * Implementation of FilesApiInterface#filesGet
     */
    public function filesGet($limit = null, $offset = null)
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

[**ElasticEmail\Model\FileInfo**](../Model/FileInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **filesPost**
> ElasticEmail\Model\FileInfo filesPost($filePayload, $expiresAfterDays)

Upload File

Uploads selected file to the server. Required Access Level: ModifyFiles

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/FilesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\FilesApiInterface;

class FilesApi implements FilesApiInterface
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
     * Implementation of FilesApiInterface#filesPost
     */
    public function filesPost(FilePayload $filePayload, $expiresAfterDays = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filePayload** | [**ElasticEmail\Model\FilePayload**](../Model/FilePayload.md)|  |
 **expiresAfterDays** | **int**| After how many days should the file be deleted. | [optional]

### Return type

[**ElasticEmail\Model\FileInfo**](../Model/FileInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

