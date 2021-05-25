<?php
/**
 * LogStatusSummary
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

namespace ElasticEmail\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the LogStatusSummary model.
 *
 * Summary of log status
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class LogStatusSummary 
{
        /**
     * Number of recipients
     *
     * @var int|null
     * @SerializedName("Recipients")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $recipients;

    /**
     * Number of emails
     *
     * @var int|null
     * @SerializedName("EmailTotal")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $emailTotal;

    /**
     * Number of SMS
     *
     * @var int|null
     * @SerializedName("SmsTotal")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $smsTotal;

    /**
     * Number of delivered messages
     *
     * @var int|null
     * @SerializedName("Delivered")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $delivered;

    /**
     * Number of bounced messages
     *
     * @var int|null
     * @SerializedName("Bounced")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $bounced;

    /**
     * Number of messages in progress
     *
     * @var int|null
     * @SerializedName("InProgress")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $inProgress;

    /**
     * Number of opened messages
     *
     * @var int|null
     * @SerializedName("Opened")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $opened;

    /**
     * Number of clicked messages
     *
     * @var int|null
     * @SerializedName("Clicked")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $clicked;

    /**
     * Number of unsubscribed messages
     *
     * @var int|null
     * @SerializedName("Unsubscribed")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $unsubscribed;

    /**
     * Number of complaint messages
     *
     * @var int|null
     * @SerializedName("Complaints")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $complaints;

    /**
     * Number of inbound messages
     *
     * @var int|null
     * @SerializedName("Inbound")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $inbound;

    /**
     * Number of manually cancelled messages
     *
     * @var int|null
     * @SerializedName("ManualCancel")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $manualCancel;

    /**
     * Number of messages flagged with &#39;Not Delivered&#39;
     *
     * @var int|null
     * @SerializedName("NotDelivered")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $notDelivered;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->recipients = isset($data['recipients']) ? $data['recipients'] : null;
        $this->emailTotal = isset($data['emailTotal']) ? $data['emailTotal'] : null;
        $this->smsTotal = isset($data['smsTotal']) ? $data['smsTotal'] : null;
        $this->delivered = isset($data['delivered']) ? $data['delivered'] : null;
        $this->bounced = isset($data['bounced']) ? $data['bounced'] : null;
        $this->inProgress = isset($data['inProgress']) ? $data['inProgress'] : null;
        $this->opened = isset($data['opened']) ? $data['opened'] : null;
        $this->clicked = isset($data['clicked']) ? $data['clicked'] : null;
        $this->unsubscribed = isset($data['unsubscribed']) ? $data['unsubscribed'] : null;
        $this->complaints = isset($data['complaints']) ? $data['complaints'] : null;
        $this->inbound = isset($data['inbound']) ? $data['inbound'] : null;
        $this->manualCancel = isset($data['manualCancel']) ? $data['manualCancel'] : null;
        $this->notDelivered = isset($data['notDelivered']) ? $data['notDelivered'] : null;
    }

    /**
     * Gets recipients.
     *
     * @return int|null
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * Sets recipients.
     *
     * @param int|null $recipients  Number of recipients
     *
     * @return $this
     */
    public function setRecipients($recipients = null)
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Gets emailTotal.
     *
     * @return int|null
     */
    public function getEmailTotal()
    {
        return $this->emailTotal;
    }

    /**
     * Sets emailTotal.
     *
     * @param int|null $emailTotal  Number of emails
     *
     * @return $this
     */
    public function setEmailTotal($emailTotal = null)
    {
        $this->emailTotal = $emailTotal;

        return $this;
    }

    /**
     * Gets smsTotal.
     *
     * @return int|null
     */
    public function getSmsTotal()
    {
        return $this->smsTotal;
    }

    /**
     * Sets smsTotal.
     *
     * @param int|null $smsTotal  Number of SMS
     *
     * @return $this
     */
    public function setSmsTotal($smsTotal = null)
    {
        $this->smsTotal = $smsTotal;

        return $this;
    }

    /**
     * Gets delivered.
     *
     * @return int|null
     */
    public function getDelivered()
    {
        return $this->delivered;
    }

    /**
     * Sets delivered.
     *
     * @param int|null $delivered  Number of delivered messages
     *
     * @return $this
     */
    public function setDelivered($delivered = null)
    {
        $this->delivered = $delivered;

        return $this;
    }

    /**
     * Gets bounced.
     *
     * @return int|null
     */
    public function getBounced()
    {
        return $this->bounced;
    }

    /**
     * Sets bounced.
     *
     * @param int|null $bounced  Number of bounced messages
     *
     * @return $this
     */
    public function setBounced($bounced = null)
    {
        $this->bounced = $bounced;

        return $this;
    }

    /**
     * Gets inProgress.
     *
     * @return int|null
     */
    public function getInProgress()
    {
        return $this->inProgress;
    }

    /**
     * Sets inProgress.
     *
     * @param int|null $inProgress  Number of messages in progress
     *
     * @return $this
     */
    public function setInProgress($inProgress = null)
    {
        $this->inProgress = $inProgress;

        return $this;
    }

    /**
     * Gets opened.
     *
     * @return int|null
     */
    public function getOpened()
    {
        return $this->opened;
    }

    /**
     * Sets opened.
     *
     * @param int|null $opened  Number of opened messages
     *
     * @return $this
     */
    public function setOpened($opened = null)
    {
        $this->opened = $opened;

        return $this;
    }

    /**
     * Gets clicked.
     *
     * @return int|null
     */
    public function getClicked()
    {
        return $this->clicked;
    }

    /**
     * Sets clicked.
     *
     * @param int|null $clicked  Number of clicked messages
     *
     * @return $this
     */
    public function setClicked($clicked = null)
    {
        $this->clicked = $clicked;

        return $this;
    }

    /**
     * Gets unsubscribed.
     *
     * @return int|null
     */
    public function getUnsubscribed()
    {
        return $this->unsubscribed;
    }

    /**
     * Sets unsubscribed.
     *
     * @param int|null $unsubscribed  Number of unsubscribed messages
     *
     * @return $this
     */
    public function setUnsubscribed($unsubscribed = null)
    {
        $this->unsubscribed = $unsubscribed;

        return $this;
    }

    /**
     * Gets complaints.
     *
     * @return int|null
     */
    public function getComplaints()
    {
        return $this->complaints;
    }

    /**
     * Sets complaints.
     *
     * @param int|null $complaints  Number of complaint messages
     *
     * @return $this
     */
    public function setComplaints($complaints = null)
    {
        $this->complaints = $complaints;

        return $this;
    }

    /**
     * Gets inbound.
     *
     * @return int|null
     */
    public function getInbound()
    {
        return $this->inbound;
    }

    /**
     * Sets inbound.
     *
     * @param int|null $inbound  Number of inbound messages
     *
     * @return $this
     */
    public function setInbound($inbound = null)
    {
        $this->inbound = $inbound;

        return $this;
    }

    /**
     * Gets manualCancel.
     *
     * @return int|null
     */
    public function getManualCancel()
    {
        return $this->manualCancel;
    }

    /**
     * Sets manualCancel.
     *
     * @param int|null $manualCancel  Number of manually cancelled messages
     *
     * @return $this
     */
    public function setManualCancel($manualCancel = null)
    {
        $this->manualCancel = $manualCancel;

        return $this;
    }

    /**
     * Gets notDelivered.
     *
     * @return int|null
     */
    public function getNotDelivered()
    {
        return $this->notDelivered;
    }

    /**
     * Sets notDelivered.
     *
     * @param int|null $notDelivered  Number of messages flagged with 'Not Delivered'
     *
     * @return $this
     */
    public function setNotDelivered($notDelivered = null)
    {
        $this->notDelivered = $notDelivered;

        return $this;
    }
}


