<?php
/**
 * ContactActivity
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

namespace ElasticEmail\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the ContactActivity model.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class ContactActivity 
{
        /**
     * Total emails sent.
     *
     * @var int|null
     * @SerializedName("TotalSent")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $totalSent;

    /**
     * Total emails opened.
     *
     * @var int|null
     * @SerializedName("TotalOpened")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $totalOpened;

    /**
     * Total emails clicked
     *
     * @var int|null
     * @SerializedName("TotalClicked")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $totalClicked;

    /**
     * Total emails failed.
     *
     * @var int|null
     * @SerializedName("TotalFailed")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $totalFailed;

    /**
     * Last date when an email was sent to this contact
     *
     * @var \DateTime|null
     * @SerializedName("LastSent")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $lastSent;

    /**
     * Date this contact last opened an email
     *
     * @var \DateTime|null
     * @SerializedName("LastOpened")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $lastOpened;

    /**
     * Date this contact last clicked an email
     *
     * @var \DateTime|null
     * @SerializedName("LastClicked")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $lastClicked;

    /**
     * Last date when an email sent to this contact bounced
     *
     * @var \DateTime|null
     * @SerializedName("LastFailed")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $lastFailed;

    /**
     * IP from which this contact opened or clicked their email last time
     *
     * @var string|null
     * @SerializedName("LastIP")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $lastIP;

    /**
     * Last RFC Error code if any occurred
     *
     * @var int|null
     * @SerializedName("ErrorCode")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $errorCode;

    /**
     * Last RFC error message if any occurred
     *
     * @var string|null
     * @SerializedName("FriendlyErrorMessage")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $friendlyErrorMessage;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->totalSent = isset($data['totalSent']) ? $data['totalSent'] : null;
        $this->totalOpened = isset($data['totalOpened']) ? $data['totalOpened'] : null;
        $this->totalClicked = isset($data['totalClicked']) ? $data['totalClicked'] : null;
        $this->totalFailed = isset($data['totalFailed']) ? $data['totalFailed'] : null;
        $this->lastSent = isset($data['lastSent']) ? $data['lastSent'] : null;
        $this->lastOpened = isset($data['lastOpened']) ? $data['lastOpened'] : null;
        $this->lastClicked = isset($data['lastClicked']) ? $data['lastClicked'] : null;
        $this->lastFailed = isset($data['lastFailed']) ? $data['lastFailed'] : null;
        $this->lastIP = isset($data['lastIP']) ? $data['lastIP'] : null;
        $this->errorCode = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->friendlyErrorMessage = isset($data['friendlyErrorMessage']) ? $data['friendlyErrorMessage'] : null;
    }

    /**
     * Gets totalSent.
     *
     * @return int|null
     */
    public function getTotalSent()
    {
        return $this->totalSent;
    }

    /**
     * Sets totalSent.
     *
     * @param int|null $totalSent  Total emails sent.
     *
     * @return $this
     */
    public function setTotalSent($totalSent = null)
    {
        $this->totalSent = $totalSent;

        return $this;
    }

    /**
     * Gets totalOpened.
     *
     * @return int|null
     */
    public function getTotalOpened()
    {
        return $this->totalOpened;
    }

    /**
     * Sets totalOpened.
     *
     * @param int|null $totalOpened  Total emails opened.
     *
     * @return $this
     */
    public function setTotalOpened($totalOpened = null)
    {
        $this->totalOpened = $totalOpened;

        return $this;
    }

    /**
     * Gets totalClicked.
     *
     * @return int|null
     */
    public function getTotalClicked()
    {
        return $this->totalClicked;
    }

    /**
     * Sets totalClicked.
     *
     * @param int|null $totalClicked  Total emails clicked
     *
     * @return $this
     */
    public function setTotalClicked($totalClicked = null)
    {
        $this->totalClicked = $totalClicked;

        return $this;
    }

    /**
     * Gets totalFailed.
     *
     * @return int|null
     */
    public function getTotalFailed()
    {
        return $this->totalFailed;
    }

    /**
     * Sets totalFailed.
     *
     * @param int|null $totalFailed  Total emails failed.
     *
     * @return $this
     */
    public function setTotalFailed($totalFailed = null)
    {
        $this->totalFailed = $totalFailed;

        return $this;
    }

    /**
     * Gets lastSent.
     *
     * @return \DateTime|null
     */
    public function getLastSent(): ?\DateTime
    {
        return $this->lastSent;
    }

    /**
     * Sets lastSent.
     *
     * @param \DateTime|null $lastSent  Last date when an email was sent to this contact
     *
     * @return $this
     */
    public function setLastSent(\DateTime $lastSent = null)
    {
        $this->lastSent = $lastSent;

        return $this;
    }

    /**
     * Gets lastOpened.
     *
     * @return \DateTime|null
     */
    public function getLastOpened(): ?\DateTime
    {
        return $this->lastOpened;
    }

    /**
     * Sets lastOpened.
     *
     * @param \DateTime|null $lastOpened  Date this contact last opened an email
     *
     * @return $this
     */
    public function setLastOpened(\DateTime $lastOpened = null)
    {
        $this->lastOpened = $lastOpened;

        return $this;
    }

    /**
     * Gets lastClicked.
     *
     * @return \DateTime|null
     */
    public function getLastClicked(): ?\DateTime
    {
        return $this->lastClicked;
    }

    /**
     * Sets lastClicked.
     *
     * @param \DateTime|null $lastClicked  Date this contact last clicked an email
     *
     * @return $this
     */
    public function setLastClicked(\DateTime $lastClicked = null)
    {
        $this->lastClicked = $lastClicked;

        return $this;
    }

    /**
     * Gets lastFailed.
     *
     * @return \DateTime|null
     */
    public function getLastFailed(): ?\DateTime
    {
        return $this->lastFailed;
    }

    /**
     * Sets lastFailed.
     *
     * @param \DateTime|null $lastFailed  Last date when an email sent to this contact bounced
     *
     * @return $this
     */
    public function setLastFailed(\DateTime $lastFailed = null)
    {
        $this->lastFailed = $lastFailed;

        return $this;
    }

    /**
     * Gets lastIP.
     *
     * @return string|null
     */
    public function getLastIP()
    {
        return $this->lastIP;
    }

    /**
     * Sets lastIP.
     *
     * @param string|null $lastIP  IP from which this contact opened or clicked their email last time
     *
     * @return $this
     */
    public function setLastIP($lastIP = null)
    {
        $this->lastIP = $lastIP;

        return $this;
    }

    /**
     * Gets errorCode.
     *
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets errorCode.
     *
     * @param int|null $errorCode  Last RFC Error code if any occurred
     *
     * @return $this
     */
    public function setErrorCode($errorCode = null)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Gets friendlyErrorMessage.
     *
     * @return string|null
     */
    public function getFriendlyErrorMessage()
    {
        return $this->friendlyErrorMessage;
    }

    /**
     * Sets friendlyErrorMessage.
     *
     * @param string|null $friendlyErrorMessage  Last RFC error message if any occurred
     *
     * @return $this
     */
    public function setFriendlyErrorMessage($friendlyErrorMessage = null)
    {
        $this->friendlyErrorMessage = $friendlyErrorMessage;

        return $this;
    }
}


