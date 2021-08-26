<?php
/**
 * TemplatesApiInterface
 * PHP version 7.1.3
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace ElasticEmail\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use ElasticEmail\Model\Template;
use ElasticEmail\Model\TemplatePayload;
use ElasticEmail\Model\TemplateScope;
use ElasticEmail\Model\TemplateType;

/**
 * TemplatesApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  ElasticEmail\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface TemplatesApiInterface
{

    /**
     * Sets authentication method apikey
     *
     * @param string $value Value of the apikey authentication method.
     *
     * @return void
     */
    public function setapikey($value);

    /**
     * Operation templatesByNameDelete
     *
     * Delete Template
     *
     * @param  \string $name  Name of template. (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function templatesByNameDelete($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation templatesByNameGet
     *
     * Load Template
     *
     * @param  \string $name  Name of template. (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \Template
     */
    public function templatesByNameGet($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation templatesByNamePut
     *
     * Update Template
     *
     * @param  \string $name  Name of template. (required)
     * @param  \ElasticEmail\Model\TemplatePayload $templatePayload   (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Template
     */
    public function templatesByNamePut($name, TemplatePayload $templatePayload, &$responseCode, array &$responseHeaders);

    /**
     * Operation templatesGet
     *
     * Load Templates
     *
     * @param  \ElasticEmail\Model\TemplateScope[] $scopeType  Return templates with specified scope only (required)
     * @param  \ElasticEmail\Model\TemplateType[] $templateTypes  Return templates with specified type only (optional)
     * @param  \int $limit  Maximum number of returned items. (optional)
     * @param  \int $offset  How many items should be returned ahead. (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Template[]
     */
    public function templatesGet(array $scopeType, array $templateTypes = null, $limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation templatesPost
     *
     * Add Template
     *
     * @param  \ElasticEmail\Model\TemplatePayload $templatePayload   (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \Template
     */
    public function templatesPost(TemplatePayload $templatePayload, &$responseCode, array &$responseHeaders);
}
