<?php
/**
 * RecipientEvent
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
 * Class representing the RecipientEvent model.
 *
 * Detailed information about message recipient
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class RecipientEvent 
{
        /**
     * ID number of transaction
     *
     * @var string|null
     * @SerializedName("TransactionID")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $transactionID;

    /**
     * ID number of selected message.
     *
     * @var string|null
     * @SerializedName("MsgID")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $msgID;

    /**
     * Default From: email address.
     *
     * @var string|null
     * @SerializedName("FromEmail")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $fromEmail;

    /**
     * Ending date for search in YYYY-MM-DDThh:mm:ss format.
     *
     * @var string|null
     * @SerializedName("To")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $to;

    /**
     * Default subject of email.
     *
     * @var string|null
     * @SerializedName("Subject")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $subject;

    /**
     * @var ElasticEmail\Model\EventType|null
     * @SerializedName("EventType")
     * @Assert\Type("ElasticEmail\Model\EventType")
     * @Type("ElasticEmail\Model\EventType")
     */
    protected $eventType;

    /**
     * Creation date
     *
     * @var \DateTime|null
     * @SerializedName("EventDate")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $eventDate;

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
     * @var ElasticEmail\Model\MessageCategory|null
     * @SerializedName("MessageCategory")
     * @Assert\Type("ElasticEmail\Model\MessageCategory")
     * @Type("ElasticEmail\Model\MessageCategory")
     */
    protected $messageCategory;

    /**
     * Date of next try
     *
     * @var \DateTime|null
     * @SerializedName("NextTryOn")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $nextTryOn;

    /**
     * Content of message, HTML encoded
     *
     * @var string|null
     * @SerializedName("Message")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $message;

    /**
     * IP which this email was sent through
     *
     * @var string|null
     * @SerializedName("IPAddress")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $iPAddress;

    /**
     * Name of an IP pool this email was sent through
     *
     * @var string|null
     * @SerializedName("PoolName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $poolName;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->transactionID = isset($data['transactionID']) ? $data['transactionID'] : null;
        $this->msgID = isset($data['msgID']) ? $data['msgID'] : null;
        $this->fromEmail = isset($data['fromEmail']) ? $data['fromEmail'] : null;
        $this->to = isset($data['to']) ? $data['to'] : null;
        $this->subject = isset($data['subject']) ? $data['subject'] : null;
        $this->eventType = isset($data['eventType']) ? $data['eventType'] : null;
        $this->eventDate = isset($data['eventDate']) ? $data['eventDate'] : null;
        $this->channelName = isset($data['channelName']) ? $data['channelName'] : null;
        $this->messageCategory = isset($data['messageCategory']) ? $data['messageCategory'] : null;
        $this->nextTryOn = isset($data['nextTryOn']) ? $data['nextTryOn'] : null;
        $this->message = isset($data['message']) ? $data['message'] : null;
        $this->iPAddress = isset($data['iPAddress']) ? $data['iPAddress'] : null;
        $this->poolName = isset($data['poolName']) ? $data['poolName'] : null;
    }

    /**
     * Gets transactionID.
     *
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets transactionID.
     *
     * @param string|null $transactionID  ID number of transaction
     *
     * @return $this
     */
    public function setTransactionID($transactionID = null)
    {
        $this->transactionID = $transactionID;

        return $this;
    }

    /**
     * Gets msgID.
     *
     * @return string|null
     */
    public function getMsgID()
    {
        return $this->msgID;
    }

    /**
     * Sets msgID.
     *
     * @param string|null $msgID  ID number of selected message.
     *
     * @return $this
     */
    public function setMsgID($msgID = null)
    {
        $this->msgID = $msgID;

        return $this;
    }

    /**
     * Gets fromEmail.
     *
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * Sets fromEmail.
     *
     * @param string|null $fromEmail  Default From: email address.
     *
     * @return $this
     */
    public function setFromEmail($fromEmail = null)
    {
        $this->fromEmail = $fromEmail;

        return $this;
    }

    /**
     * Gets to.
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets to.
     *
     * @param string|null $to  Ending date for search in YYYY-MM-DDThh:mm:ss format.
     *
     * @return $this
     */
    public function setTo($to = null)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Gets subject.
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets subject.
     *
     * @param string|null $subject  Default subject of email.
     *
     * @return $this
     */
    public function setSubject($subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Gets eventType.
     *
     * @return ElasticEmail\Model\EventType|null
     */
    public function getEventType(): ?EventType
    {
        return $this->eventType;
    }

    /**
     * Sets eventType.
     *
     * @param ElasticEmail\Model\EventType|null $eventType
     *
     * @return $this
     */
    public function setEventType(EventType $eventType = null)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Gets eventDate.
     *
     * @return \DateTime|null
     */
    public function getEventDate(): ?\DateTime
    {
        return $this->eventDate;
    }

    /**
     * Sets eventDate.
     *
     * @param \DateTime|null $eventDate  Creation date
     *
     * @return $this
     */
    public function setEventDate(\DateTime $eventDate = null)
    {
        $this->eventDate = $eventDate;

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
     * Gets messageCategory.
     *
     * @return ElasticEmail\Model\MessageCategory|null
     */
    public function getMessageCategory(): ?MessageCategory
    {
        return $this->messageCategory;
    }

    /**
     * Sets messageCategory.
     *
     * @param ElasticEmail\Model\MessageCategory|null $messageCategory
     *
     * @return $this
     */
    public function setMessageCategory(MessageCategory $messageCategory = null)
    {
        $this->messageCategory = $messageCategory;

        return $this;
    }

    /**
     * Gets nextTryOn.
     *
     * @return \DateTime|null
     */
    public function getNextTryOn(): ?\DateTime
    {
        return $this->nextTryOn;
    }

    /**
     * Sets nextTryOn.
     *
     * @param \DateTime|null $nextTryOn  Date of next try
     *
     * @return $this
     */
    public function setNextTryOn(\DateTime $nextTryOn = null)
    {
        $this->nextTryOn = $nextTryOn;

        return $this;
    }

    /**
     * Gets message.
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets message.
     *
     * @param string|null $message  Content of message, HTML encoded
     *
     * @return $this
     */
    public function setMessage($message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Gets iPAddress.
     *
     * @return string|null
     */
    public function getIPAddress()
    {
        return $this->iPAddress;
    }

    /**
     * Sets iPAddress.
     *
     * @param string|null $iPAddress  IP which this email was sent through
     *
     * @return $this
     */
    public function setIPAddress($iPAddress = null)
    {
        $this->iPAddress = $iPAddress;

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
     * @param string|null $poolName  Name of an IP pool this email was sent through
     *
     * @return $this
     */
    public function setPoolName($poolName = null)
    {
        $this->poolName = $poolName;

        return $this;
    }
}


