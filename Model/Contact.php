<?php
/**
 * Contact
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
 * Class representing the Contact model.
 *
 * Contact
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class Contact 
{
        /**
     * Proper email address.
     *
     * @var string|null
     * @SerializedName("Email")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $email;

    /**
     * Status of the given resource
     *
     * @var ContactStatus|null
     * @SerializedName("Status")
     * @Assert\Type("ContactStatus")
     * @Type("ContactStatus")
     */
    protected $status;

    /**
     * First name.
     *
     * @var string|null
     * @SerializedName("FirstName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $firstName;

    /**
     * Last name.
     *
     * @var string|null
     * @SerializedName("LastName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $lastName;

    /**
     * A key-value collection of custom contact fields which can be used in the system.
     *
     * @var string[]|null
     * @SerializedName("CustomFields")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string, string>")
     */
    protected $customFields;

    /**
     * @var ElasticEmail\Model\ConsentData|null
     * @SerializedName("Consent")
     * @Assert\Type("ElasticEmail\Model\ConsentData")
     * @Type("ElasticEmail\Model\ConsentData")
     */
    protected $consent;

    /**
     * From where was this contact added
     *
     * @var ContactSource|null
     * @SerializedName("Source")
     * @Assert\Type("ContactSource")
     * @Type("ContactSource")
     */
    protected $source;

    /**
     * Date of creation in YYYY-MM-DDThh:ii:ss format
     *
     * @var \DateTime|null
     * @SerializedName("DateAdded")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $dateAdded;

    /**
     * Last change date
     *
     * @var \DateTime|null
     * @SerializedName("DateUpdated")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $dateUpdated;

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
     * Contact&#39;s email statistics and activity
     *
     * @var ContactActivity|null
     * @SerializedName("Activity")
     * @Assert\Type("ContactActivity")
     * @Type("ContactActivity")
     */
    protected $activity;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->firstName = isset($data['firstName']) ? $data['firstName'] : null;
        $this->lastName = isset($data['lastName']) ? $data['lastName'] : null;
        $this->customFields = isset($data['customFields']) ? $data['customFields'] : null;
        $this->consent = isset($data['consent']) ? $data['consent'] : null;
        $this->source = isset($data['source']) ? $data['source'] : null;
        $this->dateAdded = isset($data['dateAdded']) ? $data['dateAdded'] : null;
        $this->dateUpdated = isset($data['dateUpdated']) ? $data['dateUpdated'] : null;
        $this->statusChangeDate = isset($data['statusChangeDate']) ? $data['statusChangeDate'] : null;
        $this->activity = isset($data['activity']) ? $data['activity'] : null;
    }

    /**
     * Gets email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets email.
     *
     * @param string|null $email  Proper email address.
     *
     * @return $this
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return ContactStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param ContactStatus|null $status  Status of the given resource
     *
     * @return $this
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets firstName.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets firstName.
     *
     * @param string|null $firstName  First name.
     *
     * @return $this
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Gets lastName.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets lastName.
     *
     * @param string|null $lastName  Last name.
     *
     * @return $this
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Gets customFields.
     *
     * @return string[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Sets customFields.
     *
     * @param string[]|null $customFields  A key-value collection of custom contact fields which can be used in the system.
     *
     * @return $this
     */
    public function setCustomFields(array $customFields = null)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * Gets consent.
     *
     * @return ElasticEmail\Model\ConsentData|null
     */
    public function getConsent(): ?ConsentData
    {
        return $this->consent;
    }

    /**
     * Sets consent.
     *
     * @param ElasticEmail\Model\ConsentData|null $consent
     *
     * @return $this
     */
    public function setConsent(ConsentData $consent = null)
    {
        $this->consent = $consent;

        return $this;
    }

    /**
     * Gets source.
     *
     * @return ContactSource|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets source.
     *
     * @param ContactSource|null $source  From where was this contact added
     *
     * @return $this
     */
    public function setSource($source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Gets dateAdded.
     *
     * @return \DateTime|null
     */
    public function getDateAdded(): ?\DateTime
    {
        return $this->dateAdded;
    }

    /**
     * Sets dateAdded.
     *
     * @param \DateTime|null $dateAdded  Date of creation in YYYY-MM-DDThh:ii:ss format
     *
     * @return $this
     */
    public function setDateAdded(\DateTime $dateAdded = null)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Gets dateUpdated.
     *
     * @return \DateTime|null
     */
    public function getDateUpdated(): ?\DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * Sets dateUpdated.
     *
     * @param \DateTime|null $dateUpdated  Last change date
     *
     * @return $this
     */
    public function setDateUpdated(\DateTime $dateUpdated = null)
    {
        $this->dateUpdated = $dateUpdated;

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
     * Gets activity.
     *
     * @return ContactActivity|null
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets activity.
     *
     * @param ContactActivity|null $activity  Contact's email statistics and activity
     *
     * @return $this
     */
    public function setActivity($activity = null)
    {
        $this->activity = $activity;

        return $this;
    }
}


