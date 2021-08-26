<?php
/**
 * CampaignsApiInterface
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
use ElasticEmail\Model\Campaign;

/**
 * CampaignsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  ElasticEmail\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface CampaignsApiInterface
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
     * Operation campaignsByNameDelete
     *
     * Delete Campaign
     *
     * @param  \string $name  Name of Campaign to delete (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function campaignsByNameDelete($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation campaignsByNameGet
     *
     * Load Campaign
     *
     * @param  \string $name  Name of Campaign to get (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Campaign
     */
    public function campaignsByNameGet($name, &$responseCode, array &$responseHeaders);

    /**
     * Operation campaignsByNamePut
     *
     * Update Campaign
     *
     * @param  \string $name  Name of Campaign to update (required)
     * @param  \ElasticEmail\Model\Campaign $campaign  JSON representation of a campaign (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Campaign
     */
    public function campaignsByNamePut($name, Campaign $campaign, &$responseCode, array &$responseHeaders);

    /**
     * Operation campaignsGet
     *
     * Load Campaigns
     *
     * @param  \string $search  Text fragment used for searching in Campaign name (using the &#39;contains&#39; rule) (optional)
     * @param  \int $offset  How many items should be returned ahead. (optional)
     * @param  \int $limit  Maximum number of returned items. (optional)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Campaign[]
     */
    public function campaignsGet($search = null, $offset = null, $limit = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation campaignsPost
     *
     * Add Campaign
     *
     * @param  \ElasticEmail\Model\Campaign $campaign  JSON representation of a campaign (required)
     * @param  \int $responseCode     The HTTP response code to return
     * @param  \array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return \ElasticEmail\Model\Campaign
     */
    public function campaignsPost(Campaign $campaign, &$responseCode, array &$responseHeaders);
}
