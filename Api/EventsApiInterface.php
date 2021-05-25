<?php
/**
 * EventsApiInterface
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
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
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
use ElasticEmail\Model\CompressionFormat;
use ElasticEmail\Model\EventType;
use ElasticEmail\Model\EventsOrderBy;
use ElasticEmail\Model\ExportFileFormats;
use ElasticEmail\Model\ExportLink;
use ElasticEmail\Model\ExportStatus;
use ElasticEmail\Model\RecipientEvent;

/**
 * EventsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  ElasticEmail\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface EventsApiInterface
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
     * Operation eventsByTransactionidGet
     *
     * Load Email Events
     *
     * @param  string $transactionid  ID number of transaction (required)
     * @param  \DateTime $from  Starting date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  \DateTime $to  Ending date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  EventsOrderBy $orderBy   (optional)
     * @param  int $limit  Maximum number of returned items. (optional)
     * @param  int $offset  How many items should be returned ahead. (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\RecipientEvent[]
     *
     */
    public function eventsByTransactionidGet($transactionid, \DateTime $from = null, \DateTime $to = null, $orderBy = null, $limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation eventsChannelsByNameExportPost
     *
     * Export Channel Events
     *
     * @param  string $name  Name of selected channel. (required)
     * @param  ElasticEmail\Model\EventType[] $eventTypes  Types of Events to return (optional)
     * @param  \DateTime $from  Starting date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  \DateTime $to  Ending date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  ExportFileFormats $fileFormat  Format of the exported file (optional)
     * @param  CompressionFormat $compressionFormat  FileResponse compression format. None or Zip. (optional)
     * @param  string $fileName  Name of your file including extension. (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\ExportLink
     *
     */
    public function eventsChannelsByNameExportPost($name, array $eventTypes = null, \DateTime $from = null, \DateTime $to = null, $fileFormat = null, $compressionFormat = null, $fileName = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation eventsChannelsByNameGet
     *
     * Load Channel Events
     *
     * @param  string $name  Name of selected channel. (required)
     * @param  ElasticEmail\Model\EventType[] $eventTypes  Types of Events to return (optional)
     * @param  \DateTime $from  Starting date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  \DateTime $to  Ending date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  EventsOrderBy $orderBy   (optional)
     * @param  int $limit  How many items to load. Maximum for this request is 1000 items (optional)
     * @param  int $offset  How many items should be returned ahead. (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\RecipientEvent[]
     *
     */
    public function eventsChannelsByNameGet($name, array $eventTypes = null, \DateTime $from = null, \DateTime $to = null, $orderBy = null, $limit = null, $offset = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation eventsChannelsExportByIdStatusGet
     *
     * Check Channel Export Status
     *
     * @param  string $id  ID of the exported file (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\ExportStatus
     *
     */
    public function eventsChannelsExportByIdStatusGet($id, &$responseCode, array &$responseHeaders);

    /**
     * Operation eventsExportByIdStatusGet
     *
     * Check Export Status
     *
     * @param  string $id  ID of the exported file (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\ExportStatus
     *
     */
    public function eventsExportByIdStatusGet($id, &$responseCode, array &$responseHeaders);

    /**
     * Operation eventsExportPost
     *
     * Export Events
     *
     * @param  ElasticEmail\Model\EventType[] $eventTypes  Types of Events to return (optional)
     * @param  \DateTime $from  Starting date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  \DateTime $to  Ending date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  ExportFileFormats $fileFormat  Format of the exported file (optional)
     * @param  CompressionFormat $compressionFormat  FileResponse compression format. None or Zip. (optional)
     * @param  string $fileName  Name of your file including extension. (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\ExportLink
     *
     */
    public function eventsExportPost(array $eventTypes = null, \DateTime $from = null, \DateTime $to = null, $fileFormat = null, $compressionFormat = null, $fileName = null, &$responseCode, array &$responseHeaders);

    /**
     * Operation eventsGet
     *
     * Load Events
     *
     * @param  ElasticEmail\Model\EventType[] $eventTypes  Types of Events to return (optional)
     * @param  \DateTime $from  Starting date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  \DateTime $to  Ending date for search in YYYY-MM-DDThh:mm:ss format. (optional)
     * @param  EventsOrderBy $orderBy   (optional)
     * @param  int $limit  How many items to load. Maximum for this request is 1000 items (optional)
     * @param  int $offset  How many items should be returned ahead. (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return ElasticEmail\Model\RecipientEvent[]
     *
     */
    public function eventsGet(array $eventTypes = null, \DateTime $from = null, \DateTime $to = null, $orderBy = null, $limit = null, $offset = null, &$responseCode, array &$responseHeaders);
}
