<?php
/**
 * EmailStatus
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

namespace ElasticEmail\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the EmailStatus model.
 *
 * Status information of the specified email
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class EmailStatus 
{
        /**
     * Email address this email was sent from.
     *
     * @var string|null
     * @SerializedName("From")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $from;

    /**
     * Email address this email was sent to.
     *
     * @var string|null
     * @SerializedName("To")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $to;

    /**
     * Date the email was submitted.
     *
     * @var \DateTime|null
     * @SerializedName("Date")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $date;

    /**
     * Value of email&#39;s status
     *
     * @var LogJobStatus|null
     * @SerializedName("Status")
     * @Assert\Type("LogJobStatus")
     * @Type("LogJobStatus")
     */
    protected $status;

    /**
     * Name of email&#39;s status
     *
     * @var string|null
     * @SerializedName("StatusName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $statusName;

    /**
     * Date of last status change.
     *
     * @var \DateTime|null
     * @SerializedName("StatusChangeDate")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $statusChangeDate;

    /**
     * Date when the email was sent
     *
     * @var \DateTime|null
     * @SerializedName("DateSent")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $dateSent;

    /**
     * Date when the email changed the status to &#39;opened&#39;
     *
     * @var \DateTime|null
     * @SerializedName("DateOpened")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $dateOpened;

    /**
     * Date when the email changed the status to &#39;clicked&#39;
     *
     * @var \DateTime|null
     * @SerializedName("DateClicked")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $dateClicked;

    /**
     * Detailed error or bounced message.
     *
     * @var string|null
     * @SerializedName("ErrorMessage")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $errorMessage;

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
     * Envelope from address
     *
     * @var string|null
     * @SerializedName("EnvelopeFrom")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $envelopeFrom;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->from = isset($data['from']) ? $data['from'] : null;
        $this->to = isset($data['to']) ? $data['to'] : null;
        $this->date = isset($data['date']) ? $data['date'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->statusName = isset($data['statusName']) ? $data['statusName'] : null;
        $this->statusChangeDate = isset($data['statusChangeDate']) ? $data['statusChangeDate'] : null;
        $this->dateSent = isset($data['dateSent']) ? $data['dateSent'] : null;
        $this->dateOpened = isset($data['dateOpened']) ? $data['dateOpened'] : null;
        $this->dateClicked = isset($data['dateClicked']) ? $data['dateClicked'] : null;
        $this->errorMessage = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->transactionID = isset($data['transactionID']) ? $data['transactionID'] : null;
        $this->envelopeFrom = isset($data['envelopeFrom']) ? $data['envelopeFrom'] : null;
    }

    /**
     * Gets from.
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets from.
     *
     * @param string|null $from  Email address this email was sent from.
     *
     * @return $this
     */
    public function setFrom($from = null)
    {
        $this->from = $from;

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
     * @param string|null $to  Email address this email was sent to.
     *
     * @return $this
     */
    public function setTo($to = null)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Gets date.
     *
     * @return \DateTime|null
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Sets date.
     *
     * @param \DateTime|null $date  Date the email was submitted.
     *
     * @return $this
     */
    public function setDate(\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return LogJobStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param LogJobStatus|null $status  Value of email's status
     *
     * @return $this
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets statusName.
     *
     * @return string|null
     */
    public function getStatusName()
    {
        return $this->statusName;
    }

    /**
     * Sets statusName.
     *
     * @param string|null $statusName  Name of email's status
     *
     * @return $this
     */
    public function setStatusName($statusName = null)
    {
        $this->statusName = $statusName;

        return $this;
    }

    /**
     * Gets statusChangeDate.
     *
     * @return \DateTime|null
     */
    public function getStatusChangeDate(): ?\DateTime
    {
        return $this->statusChangeDate;
    }

    /**
     * Sets statusChangeDate.
     *
     * @param \DateTime|null $statusChangeDate  Date of last status change.
     *
     * @return $this
     */
    public function setStatusChangeDate(\DateTime $statusChangeDate = null)
    {
        $this->statusChangeDate = $statusChangeDate;

        return $this;
    }

    /**
     * Gets dateSent.
     *
     * @return \DateTime|null
     */
    public function getDateSent(): ?\DateTime
    {
        return $this->dateSent;
    }

    /**
     * Sets dateSent.
     *
     * @param \DateTime|null $dateSent  Date when the email was sent
     *
     * @return $this
     */
    public function setDateSent(\DateTime $dateSent = null)
    {
        $this->dateSent = $dateSent;

        return $this;
    }

    /**
     * Gets dateOpened.
     *
     * @return \DateTime|null
     */
    public function getDateOpened(): ?\DateTime
    {
        return $this->dateOpened;
    }

    /**
     * Sets dateOpened.
     *
     * @param \DateTime|null $dateOpened  Date when the email changed the status to 'opened'
     *
     * @return $this
     */
    public function setDateOpened(\DateTime $dateOpened = null)
    {
        $this->dateOpened = $dateOpened;

        return $this;
    }

    /**
     * Gets dateClicked.
     *
     * @return \DateTime|null
     */
    public function getDateClicked(): ?\DateTime
    {
        return $this->dateClicked;
    }

    /**
     * Sets dateClicked.
     *
     * @param \DateTime|null $dateClicked  Date when the email changed the status to 'clicked'
     *
     * @return $this
     */
    public function setDateClicked(\DateTime $dateClicked = null)
    {
        $this->dateClicked = $dateClicked;

        return $this;
    }

    /**
     * Gets errorMessage.
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets errorMessage.
     *
     * @param string|null $errorMessage  Detailed error or bounced message.
     *
     * @return $this
     */
    public function setErrorMessage($errorMessage = null)
    {
        $this->errorMessage = $errorMessage;

        return $this;
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
     * Gets envelopeFrom.
     *
     * @return string|null
     */
    public function getEnvelopeFrom()
    {
        return $this->envelopeFrom;
    }

    /**
     * Sets envelopeFrom.
     *
     * @param string|null $envelopeFrom  Envelope from address
     *
     * @return $this
     */
    public function setEnvelopeFrom($envelopeFrom = null)
    {
        $this->envelopeFrom = $envelopeFrom;

        return $this;
    }
}

