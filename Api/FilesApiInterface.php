<?php
/**
 * FilesApiInterface
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
use ElasticEmail\Model\FileInfo;
use ElasticEmail\Model\FilePayload;

/**
 * FilesApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  ElasticEmail\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface FilesApiInterface
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
     * Operation filesByNameDelete
     *
     * Delete File
     *
     * @param  \string $name  Name of your file including extension. (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function filesByNameDelete($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation filesByNameGet
     *
     * Download File
     *
     * @param  \string $name  Name of your file including extension. (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \UploadedFile
     */
    public function filesByNameGet($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation filesByNameInfoGet
     *
     * Load File Details
     *
     * @param  \string $name  Name of your file including extension. (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\FileInfo
     */
    public function filesByNameInfoGet($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation filesGet
     *
     * List Files
     *
     * @param  \int $limit  Maximum number of returned items. (optional)
     * @param  \int $offset  How many items should be returned ahead. (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\FileInfo[]
     */
    public function filesGet($limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation filesPost
     *
     * Upload File
     *
     * @param  \ElasticEmail\Model\FilePayload $filePayload   (required)
     * @param  \int $expiresAfterDays  After how many days should the file be deleted. (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\FileInfo
     */
    public function filesPost(FilePayload $filePayload, $expiresAfterDays = null, &$responseCode, array &$responseHeaders);
}
