<?php
/**
 * SuppressionsApiInterface
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
use ElasticEmail\Model\Suppression;

/**
 * SuppressionsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  ElasticEmail\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface SuppressionsApiInterface
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
     * Operation suppressionsBouncesGet
     *
     * Get Bounce List
     *
     * @param  \string $search  Text fragment used for searching. (optional)
     * @param  \int $limit  Maximum number of returned items. (optional)
     * @param  \int $offset  How many items should be returned ahead. (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Suppression[]
     */
    public function suppressionsBouncesGet($search = null, $limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsBouncesImportPost
     *
     * Add Bounces Async
     *
     * @param  \UploadedFile $file   (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function suppressionsBouncesImportPost(UploadedFile $file = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsBouncesPost
     *
     * Add Bounces
     *
     * @param  \string[] $requestBody  Emails to add as bounces. Limited to 1000 per request (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Suppression[]
     */
    public function suppressionsBouncesPost(array $requestBody, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsByEmailDelete
     *
     * Delete Suppression
     *
     * @param  \string $email  Proper email address. (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function suppressionsByEmailDelete($email, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsByEmailGet
     *
     * Get Suppression
     *
     * @param  \string $email  Proper email address. (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Suppression
     */
    public function suppressionsByEmailGet($email, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsComplaintsGet
     *
     * Get Complaints List
     *
     * @param  \string $search  Text fragment used for searching. (optional)
     * @param  \int $limit  Maximum number of returned items. (optional)
     * @param  \int $offset  How many items should be returned ahead. (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Suppression[]
     */
    public function suppressionsComplaintsGet($search = null, $limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsComplaintsImportPost
     *
     * Add Complaints Async
     *
     * @param  \UploadedFile $file   (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function suppressionsComplaintsImportPost(UploadedFile $file = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsComplaintsPost
     *
     * Add Complaints
     *
     * @param  \string[] $requestBody  Emails to add as complaints. Limited to 1000 per request (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Suppression[]
     */
    public function suppressionsComplaintsPost(array $requestBody, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsGet
     *
     * Get Suppressions
     *
     * @param  \int $limit  Maximum number of returned items. (optional)
     * @param  \int $offset  How many items should be returned ahead. (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Suppression[]
     */
    public function suppressionsGet($limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsUnsubscribesGet
     *
     * Get Unsubscribes List
     *
     * @param  \string $search  Text fragment used for searching. (optional)
     * @param  \int $limit  Maximum number of returned items. (optional)
     * @param  \int $offset  How many items should be returned ahead. (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Suppression[]
     */
    public function suppressionsUnsubscribesGet($search = null, $limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsUnsubscribesImportPost
     *
     * Add Unsubscribes Async
     *
     * @param  \UploadedFile $file   (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function suppressionsUnsubscribesImportPost(UploadedFile $file = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation suppressionsUnsubscribesPost
     *
     * Add Unsubscribes
     *
     * @param  \string[] $requestBody  Emails to add as unsubscribes. Limited to 1000 per request (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Suppression[]
     */
    public function suppressionsUnsubscribesPost(array $requestBody, &$responseCode, array &$responseHeaders);
}
