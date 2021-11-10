# ElasticEmail\Api\VerificationsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**verificationsByEmailDelete**](VerificationsApiInterface.md#verificationsByEmailDelete) | **DELETE** /verifications/{email} | Delete Email Verification Result
[**verificationsByEmailGet**](VerificationsApiInterface.md#verificationsByEmailGet) | **GET** /verifications/{email} | Get Email Verification Result
[**verificationsByEmailPost**](VerificationsApiInterface.md#verificationsByEmailPost) | **POST** /verifications/{email} | Verify Email
[**verificationsFilesByIdDelete**](VerificationsApiInterface.md#verificationsFilesByIdDelete) | **DELETE** /verifications/files/{id} | Delete File Verification Result
[**verificationsFilesByIdResultDownloadGet**](VerificationsApiInterface.md#verificationsFilesByIdResultDownloadGet) | **GET** /verifications/files/{id}/result/download | Download File Verification Result
[**verificationsFilesByIdResultGet**](VerificationsApiInterface.md#verificationsFilesByIdResultGet) | **GET** /verifications/files/{id}/result | Get Detailed File Verification Result
[**verificationsFilesByIdVerificationPost**](VerificationsApiInterface.md#verificationsFilesByIdVerificationPost) | **POST** /verifications/files/{id}/verification | Start verification
[**verificationsFilesPost**](VerificationsApiInterface.md#verificationsFilesPost) | **POST** /verifications/files | Upload File with Emails
[**verificationsFilesResultGet**](VerificationsApiInterface.md#verificationsFilesResultGet) | **GET** /verifications/files/result | Get Files Verification Results
[**verificationsGet**](VerificationsApiInterface.md#verificationsGet) | **GET** /verifications | Get Emails Verification Results


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.verifications:
        class: Acme\MyBundle\Api\VerificationsApi
        tags:
            - { name: "open_api_server.api", api: "verifications" }
    # ...
```

## **verificationsByEmailDelete**
> verificationsByEmailDelete($email)

Delete Email Verification Result

Delete a result with given email if exists. Required Access Level: VerifyEmails

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsByEmailDelete
     */
    public function verificationsByEmailDelete($email)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address to verification |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **verificationsByEmailGet**
> ElasticEmail\Model\EmailValidationResult verificationsByEmailGet($email)

Get Email Verification Result

Returns a result of verified email. Required Access Level: ViewEmailVerifications

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsByEmailGet
     */
    public function verificationsByEmailGet($email)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address to view verification result of |

### Return type

[**ElasticEmail\Model\EmailValidationResult**](../Model/EmailValidationResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **verificationsByEmailPost**
> ElasticEmail\Model\EmailValidationResult verificationsByEmailPost($email)

Verify Email

Verify single email address and returns result of verification. Required Access Level: VerifyEmails

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsByEmailPost
     */
    public function verificationsByEmailPost($email)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address to verify |

### Return type

[**ElasticEmail\Model\EmailValidationResult**](../Model/EmailValidationResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **verificationsFilesByIdDelete**
> verificationsFilesByIdDelete($id)

Delete File Verification Result

Delete Verification Results if they exist. Required Access Level: VerifyEmails

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsFilesByIdDelete
     */
    public function verificationsFilesByIdDelete($id)
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

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **verificationsFilesByIdResultDownloadGet**
> UploadedFile verificationsFilesByIdResultDownloadGet($id)

Download File Verification Result

Download verification results as a ZIP file. Required Access Level: VerifyEmails

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsFilesByIdResultDownloadGet
     */
    public function verificationsFilesByIdResultDownloadGet($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Verification ID to download |

### Return type

**UploadedFile**

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **verificationsFilesByIdResultGet**
> ElasticEmail\Model\VerificationFileResultDetails verificationsFilesByIdResultGet($id, $limit, $offset)

Get Detailed File Verification Result

Returns status and results (if verified) of file with given ID. Required Access Level: ViewEmailVerifications

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsFilesByIdResultGet
     */
    public function verificationsFilesByIdResultGet($id, $limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the Verification to display status of |
 **limit** | **int**| Maximum number of returned email verification results | [optional]
 **offset** | **int**| How many result items should be returned ahead | [optional]

### Return type

[**ElasticEmail\Model\VerificationFileResultDetails**](../Model/VerificationFileResultDetails.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **verificationsFilesByIdVerificationPost**
> verificationsFilesByIdVerificationPost($id)

Start verification

Start a verification of the previously uploaded file with emails. Required Access Level: VerifyEmails

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsFilesByIdVerificationPost
     */
    public function verificationsFilesByIdVerificationPost($id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| File ID to start verification |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **verificationsFilesPost**
> ElasticEmail\Model\VerificationFileResult verificationsFilesPost($file)

Upload File with Emails

Uploads a CSV file with list of emails that can then be triggered for verification. An 'email' column is required. Required Access Level: VerifyEmails

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsFilesPost
     */
    public function verificationsFilesPost(UploadedFile $file = null)
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

[**ElasticEmail\Model\VerificationFileResult**](../Model/VerificationFileResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **verificationsFilesResultGet**
> ElasticEmail\Model\VerificationFileResult verificationsFilesResultGet()

Get Files Verification Results

Returns a list of uploaded files, their statuses and results. Required Access Level: ViewEmailVerifications

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsFilesResultGet
     */
    public function verificationsFilesResultGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**ElasticEmail\Model\VerificationFileResult**](../Model/VerificationFileResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **verificationsGet**
> ElasticEmail\Model\EmailValidationResult verificationsGet($limit, $offset)

Get Emails Verification Results

Returns a results of all verified single emails. Required Access Level: ViewEmailVerifications

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/VerificationsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\VerificationsApiInterface;

class VerificationsApi implements VerificationsApiInterface
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
     * Implementation of VerificationsApiInterface#verificationsGet
     */
    public function verificationsGet($limit = null, $offset = null)
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

[**ElasticEmail\Model\EmailValidationResult**](../Model/EmailValidationResult.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

