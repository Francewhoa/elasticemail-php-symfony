# ElasticEmail\Api\SubAccountsApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subaccountsByEmailCreditsPatch**](SubAccountsApiInterface.md#subaccountsByEmailCreditsPatch) | **PATCH** /subaccounts/{email}/credits | Add, Subtract Email Credits
[**subaccountsByEmailDelete**](SubAccountsApiInterface.md#subaccountsByEmailDelete) | **DELETE** /subaccounts/{email} | Delete SubAccount
[**subaccountsByEmailGet**](SubAccountsApiInterface.md#subaccountsByEmailGet) | **GET** /subaccounts/{email} | Load SubAccount
[**subaccountsByEmailSettingsEmailPut**](SubAccountsApiInterface.md#subaccountsByEmailSettingsEmailPut) | **PUT** /subaccounts/{email}/settings/email | Update SubAccount Email Settings
[**subaccountsGet**](SubAccountsApiInterface.md#subaccountsGet) | **GET** /subaccounts | Load SubAccounts
[**subaccountsPost**](SubAccountsApiInterface.md#subaccountsPost) | **POST** /subaccounts | Add SubAccount


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.subAccounts:
        class: Acme\MyBundle\Api\SubAccountsApi
        tags:
            - { name: "open_api_server.api", api: "subAccounts" }
    # ...
```

## **subaccountsByEmailCreditsPatch**
> subaccountsByEmailCreditsPatch($email, $subaccountEmailCreditsPayload)

Add, Subtract Email Credits

Update email credits of a subaccount by the given amount. Required Access Level: ModifySubAccounts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SubAccountsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SubAccountsApiInterface;

class SubAccountsApi implements SubAccountsApiInterface
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
     * Implementation of SubAccountsApiInterface#subaccountsByEmailCreditsPatch
     */
    public function subaccountsByEmailCreditsPatch($email, SubaccountEmailCreditsPayload $subaccountEmailCreditsPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address of Sub-Account |
 **subaccountEmailCreditsPayload** | [**ElasticEmail\Model\SubaccountEmailCreditsPayload**](../Model/SubaccountEmailCreditsPayload.md)| Amount of email credits to add or subtract from the current SubAccount email credits pool (positive or negative value) |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **subaccountsByEmailDelete**
> subaccountsByEmailDelete($email)

Delete SubAccount

Deletes specified SubAccount. An email will be sent to confirm this change. Required Access Level: ModifySubAccounts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SubAccountsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SubAccountsApiInterface;

class SubAccountsApi implements SubAccountsApiInterface
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
     * Implementation of SubAccountsApiInterface#subaccountsByEmailDelete
     */
    public function subaccountsByEmailDelete($email)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address of Sub-Account |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **subaccountsByEmailGet**
> ElasticEmail\Model\SubAccountInfo subaccountsByEmailGet($email)

Load SubAccount

Returns details for the specified SubAccount. Required Access Level: ViewSubAccounts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SubAccountsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SubAccountsApiInterface;

class SubAccountsApi implements SubAccountsApiInterface
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
     * Implementation of SubAccountsApiInterface#subaccountsByEmailGet
     */
    public function subaccountsByEmailGet($email)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email address of Sub-Account |

### Return type

[**ElasticEmail\Model\SubAccountInfo**](../Model/SubAccountInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **subaccountsByEmailSettingsEmailPut**
> ElasticEmail\Model\SubaccountEmailSettings subaccountsByEmailSettingsEmailPut($email, $subaccountEmailSettings)

Update SubAccount Email Settings

Update SubAccount email settings. Required Access Level: ModifySubAccounts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SubAccountsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SubAccountsApiInterface;

class SubAccountsApi implements SubAccountsApiInterface
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
     * Implementation of SubAccountsApiInterface#subaccountsByEmailSettingsEmailPut
     */
    public function subaccountsByEmailSettingsEmailPut($email, SubaccountEmailSettings $subaccountEmailSettings)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |
 **subaccountEmailSettings** | [**ElasticEmail\Model\SubaccountEmailSettings**](../Model/SubaccountEmailSettings.md)| Updated Email Settings |

### Return type

[**ElasticEmail\Model\SubaccountEmailSettings**](../Model/SubaccountEmailSettings.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **subaccountsGet**
> ElasticEmail\Model\SubAccountInfo subaccountsGet($limit, $offset)

Load SubAccounts

Returns a list of all your SubAccounts. Required Access Level: ViewSubAccounts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SubAccountsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SubAccountsApiInterface;

class SubAccountsApi implements SubAccountsApiInterface
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
     * Implementation of SubAccountsApiInterface#subaccountsGet
     */
    public function subaccountsGet($limit = null, $offset = null)
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

[**ElasticEmail\Model\SubAccountInfo**](../Model/SubAccountInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **subaccountsPost**
> ElasticEmail\Model\SubAccountInfo subaccountsPost($subaccountPayload)

Add SubAccount

Add a new SubAccount to your Account. To receive an access token for this SubAccount, make a POST security/apikeys request using the 'subaccount' parameter. Required Access Level: ModifySubAccounts

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SubAccountsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\SubAccountsApiInterface;

class SubAccountsApi implements SubAccountsApiInterface
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
     * Implementation of SubAccountsApiInterface#subaccountsPost
     */
    public function subaccountsPost(SubaccountPayload $subaccountPayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subaccountPayload** | [**ElasticEmail\Model\SubaccountPayload**](../Model/SubaccountPayload.md)|  |

### Return type

[**ElasticEmail\Model\SubAccountInfo**](../Model/SubAccountInfo.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

