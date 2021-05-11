<?php
/**
 * SegmentsApiInterface
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
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    To start using this API, you will need your Access Token (available <a href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a href=\"https://api.elasticemail.com/public/help\">here</a>.
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
use ElasticEmail\Model\Segment;
use ElasticEmail\Model\SegmentPayload;

/**
 * SegmentsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  ElasticEmail\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface SegmentsApiInterface
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
     * Operation segmentsByNameDelete
     *
     * Delete Segment
     *
     * @param  string $name  Name of your segment. (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function segmentsByNameDelete($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation segmentsByNameGet
     *
     * Load Segment
     *
     * @param  string $name  Name of the segment you want to load. Will load all contacts if the &#39;All Contacts&#39; name has been provided (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\Segment
     *
     */
    public function segmentsByNameGet($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation segmentsByNamePut
     *
     * Update Segment
     *
     * @param  string $name  Name of your segment. (required)
     * @param  ElasticEmail\Model\SegmentPayload $segmentPayload   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\Segment
     *
     */
    public function segmentsByNamePut($name, SegmentPayload $segmentPayload, &$responseCode, array &$responseHeaders);

    /**
     * Operation segmentsGet
     *
     * Load Segments
     *
     * @param  int $limit  Maximum number of returned items. (optional)
     * @param  int $offset  How many items should be returned ahead. (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\Segment[]
     *
     */
    public function segmentsGet($limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation segmentsPost
     *
     * Add Segment
     *
     * @param  ElasticEmail\Model\SegmentPayload $segmentPayload   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\Segment
     *
     */
    public function segmentsPost(SegmentPayload $segmentPayload, &$responseCode, array &$responseHeaders);
}
