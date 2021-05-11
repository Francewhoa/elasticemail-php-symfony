<?php
/**
 * StatisticsApiInterface
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
use ElasticEmail\Model\ChannelLogStatusSummary;
use ElasticEmail\Model\LogStatusSummary;

/**
 * StatisticsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  ElasticEmail\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface StatisticsApiInterface
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
     * Operation statisticsCampaignsByNameGet
     *
     * Load Campaign Stats
     *
     * @param  string $name  The name of the campaign to get. (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\ChannelLogStatusSummary
     *
     */
    public function statisticsCampaignsByNameGet($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation statisticsCampaignsGet
     *
     * Load Campaigns Stats
     *
     * @param  int $limit  Maximum number of returned items. (optional)
     * @param  int $offset  How many items should be returned ahead. (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\ChannelLogStatusSummary[]
     *
     */
    public function statisticsCampaignsGet($limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation statisticsChannelsByNameGet
     *
     * Load Channel Stats
     *
     * @param  string $name  The name of the channel to get. (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\ChannelLogStatusSummary
     *
     */
    public function statisticsChannelsByNameGet($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation statisticsChannelsGet
     *
     * Load Channels Stats
     *
     * @param  int $limit  Maximum number of returned items. (optional)
     * @param  int $offset  How many items should be returned ahead. (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\ChannelLogStatusSummary[]
     *
     */
    public function statisticsChannelsGet($limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation statisticsGet
     *
     * Load Statistics
     *
     * @param  \DateTime $from  Starting date for search in YYYY-MM-DDThh:mm:ss format. (required)
     * @param  \DateTime $to  Ending date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\LogStatusSummary
     *
     */
    public function statisticsGet(\DateTime $from, \DateTime $to = null, &$responseCode, array &$responseHeaders);
}