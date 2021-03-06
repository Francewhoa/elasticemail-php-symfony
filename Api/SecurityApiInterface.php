<?php
/**
 * SecurityApiInterface
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
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
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
use ElasticEmail\Model\ApiKey;
use ElasticEmail\Model\ApiKeyPayload;
use ElasticEmail\Model\NewApiKey;
use ElasticEmail\Model\NewSmtpCredentials;
use ElasticEmail\Model\SmtpCredentials;
use ElasticEmail\Model\SmtpCredentialsPayload;

/**
 * SecurityApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  ElasticEmail\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface SecurityApiInterface
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
     * Operation securityApikeysByNameDelete
     *
     * Delete ApiKey
     *
     * @param  \string $name  Name of the ApiKey (required)
     * @param  \string $subaccount  Email of the subaccount of which ApiKey should be deleted (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function securityApikeysByNameDelete($name, $subaccount = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation securityApikeysByNameGet
     *
     * Load ApiKey
     *
     * @param  \string $name  Name of the ApiKey (required)
     * @param  \string $subaccount  Email of the subaccount of which ApiKey should be loaded (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\ApiKey
     */
    public function securityApikeysByNameGet($name, $subaccount = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation securityApikeysByNamePut
     *
     * Update ApiKey
     *
     * @param  \string $name  Name of the ApiKey (required)
     * @param  \ElasticEmail\Model\ApiKeyPayload $apiKeyPayload   (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\ApiKey
     */
    public function securityApikeysByNamePut($name, ApiKeyPayload $apiKeyPayload, &$responseCode, array &$responseHeaders);

    /**
     * Operation securityApikeysGet
     *
     * List ApiKeys
     *
     * @param  \string $subaccount  Email of the subaccount of which ApiKeys should be loaded (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\ApiKey[]
     */
    public function securityApikeysGet($subaccount = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation securityApikeysPost
     *
     * Add ApiKey
     *
     * @param  \ElasticEmail\Model\ApiKeyPayload $apiKeyPayload   (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\NewApiKey
     */
    public function securityApikeysPost(ApiKeyPayload $apiKeyPayload, &$responseCode, array &$responseHeaders);

    /**
     * Operation securitySmtpByNameDelete
     *
     * Delete SMTP Credential
     *
     * @param  \string $name  Name of the SMTP Credential (required)
     * @param  \string $subaccount  Email of the subaccount of which credential should be deleted (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function securitySmtpByNameDelete($name, $subaccount = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation securitySmtpByNameGet
     *
     * Load SMTP Credential
     *
     * @param  \string $name  Name of the SMTP Credential (required)
     * @param  \string $subaccount  Email of the subaccount of which credential should be loaded (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\SmtpCredentials
     */
    public function securitySmtpByNameGet($name, $subaccount = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation securitySmtpByNamePut
     *
     * Update SMTP Credential
     *
     * @param  \string $name  Name of the SMTP Credential (required)
     * @param  \ElasticEmail\Model\SmtpCredentialsPayload $smtpCredentialsPayload   (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\SmtpCredentials
     */
    public function securitySmtpByNamePut($name, SmtpCredentialsPayload $smtpCredentialsPayload, &$responseCode, array &$responseHeaders);

    /**
     * Operation securitySmtpGet
     *
     * List SMTP Credentials
     *
     * @param  \string $subaccount  Email of the subaccount of which credentials should be listed (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\SmtpCredentials[]
     */
    public function securitySmtpGet($subaccount = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation securitySmtpPost
     *
     * Add SMTP Credential
     *
     * @param  \ElasticEmail\Model\SmtpCredentialsPayload $smtpCredentialsPayload   (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\NewSmtpCredentials
     */
    public function securitySmtpPost(SmtpCredentialsPayload $smtpCredentialsPayload, &$responseCode, array &$responseHeaders);
}
