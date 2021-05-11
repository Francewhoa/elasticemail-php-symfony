# ElasticEmail\Api\SecurityApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**securityApikeysByNameDelete**](SecurityApiInterface.md#securityApikeysByNameDelete) | **DELETE** /security/apikeys/{name} | Delete ApiKey
[**securityApikeysByNameGet**](SecurityApiInterface.md#securityApikeysByNameGet) | **GET** /security/apikeys/{name} | Load ApiKey
[**securityApikeysByNamePut**](SecurityApiInterface.md#securityApikeysByNamePut) | **PUT** /security/apikeys/{name} | Update ApiKey
[**securityApikeysGet**](SecurityApiInterface.md#securityApikeysGet) | **GET** /security/apikeys | List ApiKeys
[**securityApikeysPost**](SecurityApiInterface.md#securityApikeysPost) | **POST** /security/apikeys | Add ApiKey
[**securitySmtpByNameDelete**](SecurityApiInterface.md#securitySmtpByNameDelete) | **DELETE** /security/smtp/{name} | Delete SMTP Credential
[**securitySmtpByNameGet**](SecurityApiInterface.md#securitySmtpByNameGet) | **GET** /security/smtp/{name} | Load SMTP Credential
[**securitySmtpByNamePut**](SecurityApiInterface.md#securitySmtpByNamePut) | **PUT** /security/smtp/{name} | Update SMTP Credential
[**securitySmtpGet**](SecurityApiInterface.md#securitySmtpGet) | **GET** /security/smtp | List SMTP Credentials
[**securitySmtpPost**](SecurityApiInterface.md#securitySmtpPost) | **POST** /security/smtp | Add SMTP Credential


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.security:
        class: Acme\MyBundle\Api\SecurityApi
        tags:
            - { name: "open_api_server.api", api: "security" }
    # ...
```

## **securityApikeysByNameDelete**
> securityApikeysByNameDelete($name, $subaccount)

Delete ApiKey

Delete your existing ApiKey. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securityApikeysByNameDelete
     */
    public function securityApikeysByNameDelete($name, $subaccount = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the ApiKey |
 **subaccount** | **string**| Email of the subaccount of which ApiKey should be deleted | [optional]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **securityApikeysByNameGet**
> ElasticEmail\Model\ApiKey securityApikeysByNameGet($name, $subaccount)

Load ApiKey

Load your existing ApiKey info. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securityApikeysByNameGet
     */
    public function securityApikeysByNameGet($name, $subaccount = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the ApiKey |
 **subaccount** | **string**| Email of the subaccount of which ApiKey should be loaded | [optional]

### Return type

[**ElasticEmail\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **securityApikeysByNamePut**
> ElasticEmail\Model\ApiKey securityApikeysByNamePut($name, $apiKeyPayload)

Update ApiKey

Update your existing ApiKey. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securityApikeysByNamePut
     */
    public function securityApikeysByNamePut($name, ApiKeyPayload $apiKeyPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the ApiKey |
 **apiKeyPayload** | [**ElasticEmail\Model\ApiKeyPayload**](../Model/ApiKeyPayload.md)|  |

### Return type

[**ElasticEmail\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **securityApikeysGet**
> ElasticEmail\Model\ApiKey securityApikeysGet($subaccount)

List ApiKeys

List all your existing ApiKeys. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securityApikeysGet
     */
    public function securityApikeysGet($subaccount = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subaccount** | **string**| Email of the subaccount of which ApiKeys should be loaded | [optional]

### Return type

[**ElasticEmail\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **securityApikeysPost**
> ElasticEmail\Model\NewApiKey securityApikeysPost($apiKeyPayload)

Add ApiKey

Add a new ApiKey. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securityApikeysPost
     */
    public function securityApikeysPost(ApiKeyPayload $apiKeyPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apiKeyPayload** | [**ElasticEmail\Model\ApiKeyPayload**](../Model/ApiKeyPayload.md)|  |

### Return type

[**ElasticEmail\Model\NewApiKey**](../Model/NewApiKey.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **securitySmtpByNameDelete**
> securitySmtpByNameDelete($name, $subaccount)

Delete SMTP Credential

Delete your existing SMTP Credentials. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securitySmtpByNameDelete
     */
    public function securitySmtpByNameDelete($name, $subaccount = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the SMTP Credential |
 **subaccount** | **string**| Email of the subaccount of which credential should be deleted | [optional]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **securitySmtpByNameGet**
> ElasticEmail\Model\SmtpCredentials securitySmtpByNameGet($name, $subaccount)

Load SMTP Credential

Load your existing SMTP Credential info. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securitySmtpByNameGet
     */
    public function securitySmtpByNameGet($name, $subaccount = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the SMTP Credential |
 **subaccount** | **string**| Email of the subaccount of which credential should be loaded | [optional]

### Return type

[**ElasticEmail\Model\SmtpCredentials**](../Model/SmtpCredentials.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **securitySmtpByNamePut**
> ElasticEmail\Model\SmtpCredentials securitySmtpByNamePut($name, $smtpCredentialsPayload)

Update SMTP Credential

Update your existing SMTP Credentials. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securitySmtpByNamePut
     */
    public function securitySmtpByNamePut($name, SmtpCredentialsPayload $smtpCredentialsPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the SMTP Credential |
 **smtpCredentialsPayload** | [**ElasticEmail\Model\SmtpCredentialsPayload**](../Model/SmtpCredentialsPayload.md)|  |

### Return type

[**ElasticEmail\Model\SmtpCredentials**](../Model/SmtpCredentials.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **securitySmtpGet**
> ElasticEmail\Model\SmtpCredentials securitySmtpGet($subaccount)

List SMTP Credentials

List all your existing SMTP Credentials. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securitySmtpGet
     */
    public function securitySmtpGet($subaccount = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subaccount** | **string**| Email of the subaccount of which credentials should be listed | [optional]

### Return type

[**ElasticEmail\Model\SmtpCredentials**](../Model/SmtpCredentials.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **securitySmtpPost**
> ElasticEmail\Model\NewSmtpCredentials securitySmtpPost($smtpCredentialsPayload)

Add SMTP Credential

Add new SMTP Credential. Required Access Level: Security

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
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
     * Implementation of SecurityApiInterface#securitySmtpPost
     */
    public function securitySmtpPost(SmtpCredentialsPayload $smtpCredentialsPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smtpCredentialsPayload** | [**ElasticEmail\Model\SmtpCredentialsPayload**](../Model/SmtpCredentialsPayload.md)|  |

### Return type

[**ElasticEmail\Model\NewSmtpCredentials**](../Model/NewSmtpCredentials.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

