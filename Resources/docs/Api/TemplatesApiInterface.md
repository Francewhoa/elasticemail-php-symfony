# ElasticEmail\Api\TemplatesApiInterface

All URIs are relative to *https://api.elasticemail.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**templatesByNameDelete**](TemplatesApiInterface.md#templatesByNameDelete) | **DELETE** /templates/{name} | Delete Template
[**templatesByNameGet**](TemplatesApiInterface.md#templatesByNameGet) | **GET** /templates/{name} | Load Template
[**templatesByNamePut**](TemplatesApiInterface.md#templatesByNamePut) | **PUT** /templates/{name} | Update Template
[**templatesGet**](TemplatesApiInterface.md#templatesGet) | **GET** /templates | Load Templates
[**templatesPost**](TemplatesApiInterface.md#templatesPost) | **POST** /templates | Add Template


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.templates:
        class: Acme\MyBundle\Api\TemplatesApi
        tags:
            - { name: "open_api_server.api", api: "templates" }
    # ...
```

## **templatesByNameDelete**
> templatesByNameDelete($name)

Delete Template

Delete template with the specified name. Required Access Level: ModifyTemplates

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TemplatesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\TemplatesApiInterface;

class TemplatesApi implements TemplatesApiInterface
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
     * Implementation of TemplatesApiInterface#templatesByNameDelete
     */
    public function templatesByNameDelete($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of template. |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **templatesByNameGet**
> Template templatesByNameGet($name)

Load Template

Load detailed information of the specified template. Required Access Level: ViewTemplates

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TemplatesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\TemplatesApiInterface;

class TemplatesApi implements TemplatesApiInterface
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
     * Implementation of TemplatesApiInterface#templatesByNameGet
     */
    public function templatesByNameGet($name)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of template. |

### Return type

[**Template**](../Model/Template.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **templatesByNamePut**
> ElasticEmail\Model\Template templatesByNamePut($name, $templatePayload)

Update Template

Update existing template, overwriting existing data. Required Access Level: ModifyTemplates

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TemplatesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\TemplatesApiInterface;

class TemplatesApi implements TemplatesApiInterface
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
     * Implementation of TemplatesApiInterface#templatesByNamePut
     */
    public function templatesByNamePut($name, TemplatePayload $templatePayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of template. |
 **templatePayload** | [**ElasticEmail\Model\TemplatePayload**](../Model/TemplatePayload.md)|  |

### Return type

[**ElasticEmail\Model\Template**](../Model/Template.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **templatesGet**
> ElasticEmail\Model\Template templatesGet($scopeType, $templateTypes, $limit, $offset)

Load Templates

Returns a list of templates for the specified type. Required Access Level: ViewTemplates

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TemplatesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\TemplatesApiInterface;

class TemplatesApi implements TemplatesApiInterface
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
     * Implementation of TemplatesApiInterface#templatesGet
     */
    public function templatesGet(array $scopeType, array $templateTypes = null, $limit = null, $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scopeType** | [**ElasticEmail\Model\TemplateScopeType**](../Model/ElasticEmail\Model\TemplateScopeType.md)| Return templates with specified scope only |
 **templateTypes** | [**ElasticEmail\Model\TemplateType**](../Model/ElasticEmail\Model\TemplateType.md)| Return templates with specified type only | [optional]
 **limit** | **int**| Maximum number of returned items. | [optional]
 **offset** | **int**| How many items should be returned ahead. | [optional]

### Return type

[**ElasticEmail\Model\Template**](../Model/Template.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **templatesPost**
> Template templatesPost($templatePayload)

Add Template

Add a new Template. Required Access Level: ModifyTemplates

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/TemplatesApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\TemplatesApiInterface;

class TemplatesApi implements TemplatesApiInterface
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
     * Implementation of TemplatesApiInterface#templatesPost
     */
    public function templatesPost(TemplatePayload $templatePayload)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **templatePayload** | [**ElasticEmail\Model\TemplatePayload**](../Model/TemplatePayload.md)|  |

### Return type

[**Template**](../Model/Template.md)

### Authorization

[apikey](../../README.md#apikey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

