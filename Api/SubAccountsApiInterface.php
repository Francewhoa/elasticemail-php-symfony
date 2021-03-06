<?php
/**
 * SubAccountsApiInterface
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
use ElasticEmail\Model\SubAccountInfo;
use ElasticEmail\Model\SubaccountEmailCreditsPayload;
use ElasticEmail\Model\SubaccountEmailSettings;
use ElasticEmail\Model\SubaccountPayload;

/**
 * SubAccountsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  ElasticEmail\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface SubAccountsApiInterface
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
     * Operation subaccountsByEmailCreditsPatch
     *
     * Add, Subtract Email Credits
     *
     * @param  \string $email  Email address of Sub-Account (required)
     * @param  \ElasticEmail\Model\SubaccountEmailCreditsPayload $subaccountEmailCreditsPayload  Amount of email credits to add or subtract from the current SubAccount email credits pool (positive or negative value) (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function subaccountsByEmailCreditsPatch($email, SubaccountEmailCreditsPayload $subaccountEmailCreditsPayload, &$responseCode, array &$responseHeaders);

    /**
     * Operation subaccountsByEmailDelete
     *
     * Delete SubAccount
     *
     * @param  \string $email  Email address of Sub-Account (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function subaccountsByEmailDelete($email, &$responseCode, array &$responseHeaders);

    /**
     * Operation subaccountsByEmailGet
     *
     * Load SubAccount
     *
     * @param  \string $email  Email address of Sub-Account (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\SubAccountInfo
     */
    public function subaccountsByEmailGet($email, &$responseCode, array &$responseHeaders);

    /**
     * Operation subaccountsByEmailSettingsEmailPut
     *
     * Update SubAccount Email Settings
     *
     * @param  \string $email   (required)
     * @param  \ElasticEmail\Model\SubaccountEmailSettings $subaccountEmailSettings  Updated Email Settings (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\SubaccountEmailSettings
     */
    public function subaccountsByEmailSettingsEmailPut($email, SubaccountEmailSettings $subaccountEmailSettings, &$responseCode, array &$responseHeaders);

    /**
     * Operation subaccountsGet
     *
     * Load SubAccounts
     *
     * @param  \int $limit  Maximum number of returned items. (optional)
     * @param  \int $offset  How many items should be returned ahead. (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\SubAccountInfo[]
     */
    public function subaccountsGet($limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation subaccountsPost
     *
     * Add SubAccount
     *
     * @param  \ElasticEmail\Model\SubaccountPayload $subaccountPayload   (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\SubAccountInfo
     */
    public function subaccountsPost(SubaccountPayload $subaccountPayload, &$responseCode, array &$responseHeaders);
}
