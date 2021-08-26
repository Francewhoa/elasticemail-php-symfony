<?php
/**
 * Options
 *
 * PHP version 7.1.3
 *
 * @category Class
 * @package  ElasticEmail\Model
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

namespace ElasticEmail\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Options model.
 *
 * E-mail configuration
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class Options 
{
        /**
     * By how long should an e-mail be delayed (in minutes). Maximum is 35 days.
     *
     * @var int|null
     * @SerializedName("TimeOffset")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $timeOffset;

    /**
     * Name of your custom IP Pool to be used in the sending process
     *
     * @var string|null
     * @SerializedName("PoolName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $poolName;

    /**
     * Name of selected channel.
     *
     * @var string|null
     * @SerializedName("ChannelName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $channelName;

    /**
     * 0 for None, 1 for Raw7Bit, 2 for Raw8Bit, 3 for QuotedPrintable, 4 for Base64 (Default), 5 for Uue note that you can also provide the text version such as \&quot;Raw7Bit\&quot; for value 1. NOTE: Base64 or QuotedPrintable is recommended if you are validating your domain(s) with DKIM.
     *
     * @var EncodingType|null
     * @SerializedName("Encoding")
     * @Assert\Type("EncodingType")
     * @Type("EncodingType")
     */
    protected $encoding;

    /**
     * Should the opens be tracked? If no value has been provided, Account&#39;s default setting will be used.
     *
     * @var bool|null
     * @SerializedName("TrackOpens")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected $trackOpens;

    /**
     * Should the clicks be tracked? If no value has been provided, Account&#39;s default setting will be used.
     *
     * @var bool|null
     * @SerializedName("TrackClicks")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected $trackClicks;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->timeOffset = isset($data['timeOffset']) ? $data['timeOffset'] : null;
        $this->poolName = isset($data['poolName']) ? $data['poolName'] : null;
        $this->channelName = isset($data['channelName']) ? $data['channelName'] : null;
        $this->encoding = isset($data['encoding']) ? $data['encoding'] : null;
        $this->trackOpens = isset($data['trackOpens']) ? $data['trackOpens'] : null;
        $this->trackClicks = isset($data['trackClicks']) ? $data['trackClicks'] : null;
    }

    /**
     * Gets timeOffset.
     *
     * @return int|null
     */
    public function getTimeOffset()
    {
        return $this->timeOffset;
    }

    /**
     * Sets timeOffset.
     *
     * @param int|null $timeOffset  By how long should an e-mail be delayed (in minutes). Maximum is 35 days.
     *
     * @return $this
     */
    public function setTimeOffset($timeOffset = null)
    {
        $this->timeOffset = $timeOffset;

        return $this;
    }

    /**
     * Gets poolName.
     *
     * @return string|null
     */
    public function getPoolName()
    {
        return $this->poolName;
    }

    /**
     * Sets poolName.
     *
     * @param string|null $poolName  Name of your custom IP Pool to be used in the sending process
     *
     * @return $this
     */
    public function setPoolName($poolName = null)
    {
        $this->poolName = $poolName;

        return $this;
    }

    /**
     * Gets channelName.
     *
     * @return string|null
     */
    public function getChannelName()
    {
        return $this->channelName;
    }

    /**
     * Sets channelName.
     *
     * @param string|null $channelName  Name of selected channel.
     *
     * @return $this
     */
    public function setChannelName($channelName = null)
    {
        $this->channelName = $channelName;

        return $this;
    }

    /**
     * Gets encoding.
     *
     * @return EncodingType|null
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Sets encoding.
     *
     * @param EncodingType|null $encoding  0 for None, 1 for Raw7Bit, 2 for Raw8Bit, 3 for QuotedPrintable, 4 for Base64 (Default), 5 for Uue note that you can also provide the text version such as \"Raw7Bit\" for value 1. NOTE: Base64 or QuotedPrintable is recommended if you are validating your domain(s) with DKIM.
     *
     * @return $this
     */
    public function setEncoding($encoding = null)
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * Gets trackOpens.
     *
     * @return bool|null
     */
    public function isTrackOpens()
    {
        return $this->trackOpens;
    }

    /**
     * Sets trackOpens.
     *
     * @param bool|null $trackOpens  Should the opens be tracked? If no value has been provided, Account's default setting will be used.
     *
     * @return $this
     */
    public function setTrackOpens($trackOpens = null)
    {
        $this->trackOpens = $trackOpens;

        return $this;
    }

    /**
     * Gets trackClicks.
     *
     * @return bool|null
     */
    public function isTrackClicks()
    {
        return $this->trackClicks;
    }

    /**
     * Sets trackClicks.
     *
     * @param bool|null $trackClicks  Should the clicks be tracked? If no value has been provided, Account's default setting will be used.
     *
     * @return $this
     */
    public function setTrackClicks($trackClicks = null)
    {
        $this->trackClicks = $trackClicks;

        return $this;
    }
}


