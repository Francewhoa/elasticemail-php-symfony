<?php
/**
 * SubAccountInfo
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
 * Class representing the SubAccountInfo model.
 *
 * Detailed information about SubAccount.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class SubAccountInfo 
{
        /**
     * Public key for limited access to your Account such as contact/add so you can use it safely on public websites.
     *
     * @var string|null
     * @SerializedName("PublicAccountID")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $publicAccountID;

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
     * SubAccount settings
     *
     * @var SubaccountSettingsInfo|null
     * @SerializedName("Settings")
     * @Assert\Type("SubaccountSettingsInfo")
     * @Type("SubaccountSettingsInfo")
     */
    protected $settings;

    /**
     * Date of last activity on Account
     *
     * @var \DateTime|null
     * @SerializedName("LastActivity")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $lastActivity;

    /**
     * Amount of email credits
     *
     * @var int|null
     * @SerializedName("EmailCredits")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $emailCredits;

    /**
     * Amount of emails sent from this Account
     *
     * @var int|null
     * @SerializedName("TotalEmailsSent")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $totalEmailsSent;

    /**
     * Numeric reputation
     *
     * @var double|null
     * @SerializedName("Reputation")
     * @Assert\Type("double")
     * @Type("double")
     */
    protected $reputation;

    /**
     * Account&#39;s current status.
     *
     * @var AccountStatusEnum|null
     * @SerializedName("Status")
     * @Assert\Type("AccountStatusEnum")
     * @Type("AccountStatusEnum")
     */
    protected $status;

    /**
     * How many contacts this SubAccount has stored
     *
     * @var int|null
     * @SerializedName("ContactsCount")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $contactsCount;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->publicAccountID = isset($data['publicAccountID']) ? $data['publicAccountID'] : null;
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->settings = isset($data['settings']) ? $data['settings'] : null;
        $this->lastActivity = isset($data['lastActivity']) ? $data['lastActivity'] : null;
        $this->emailCredits = isset($data['emailCredits']) ? $data['emailCredits'] : null;
        $this->totalEmailsSent = isset($data['totalEmailsSent']) ? $data['totalEmailsSent'] : null;
        $this->reputation = isset($data['reputation']) ? $data['reputation'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->contactsCount = isset($data['contactsCount']) ? $data['contactsCount'] : null;
    }

    /**
     * Gets publicAccountID.
     *
     * @return string|null
     */
    public function getPublicAccountID()
    {
        return $this->publicAccountID;
    }

    /**
     * Sets publicAccountID.
     *
     * @param string|null $publicAccountID  Public key for limited access to your Account such as contact/add so you can use it safely on public websites.
     *
     * @return $this
     */
    public function setPublicAccountID($publicAccountID = null)
    {
        $this->publicAccountID = $publicAccountID;

        return $this;
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
     * Gets settings.
     *
     * @return SubaccountSettingsInfo|null
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Sets settings.
     *
     * @param SubaccountSettingsInfo|null $settings  SubAccount settings
     *
     * @return $this
     */
    public function setSettings($settings = null)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Gets lastActivity.
     *
     * @return \DateTime|null
     */
    public function getLastActivity(): ?\DateTime
    {
        return $this->lastActivity;
    }

    /**
     * Sets lastActivity.
     *
     * @param \DateTime|null $lastActivity  Date of last activity on Account
     *
     * @return $this
     */
    public function setLastActivity(\DateTime $lastActivity = null)
    {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Gets emailCredits.
     *
     * @return int|null
     */
    public function getEmailCredits()
    {
        return $this->emailCredits;
    }

    /**
     * Sets emailCredits.
     *
     * @param int|null $emailCredits  Amount of email credits
     *
     * @return $this
     */
    public function setEmailCredits($emailCredits = null)
    {
        $this->emailCredits = $emailCredits;

        return $this;
    }

    /**
     * Gets totalEmailsSent.
     *
     * @return int|null
     */
    public function getTotalEmailsSent()
    {
        return $this->totalEmailsSent;
    }

    /**
     * Sets totalEmailsSent.
     *
     * @param int|null $totalEmailsSent  Amount of emails sent from this Account
     *
     * @return $this
     */
    public function setTotalEmailsSent($totalEmailsSent = null)
    {
        $this->totalEmailsSent = $totalEmailsSent;

        return $this;
    }

    /**
     * Gets reputation.
     *
     * @return double|null
     */
    public function getReputation()
    {
        return $this->reputation;
    }

    /**
     * Sets reputation.
     *
     * @param double|null $reputation  Numeric reputation
     *
     * @return $this
     */
    public function setReputation($reputation = null)
    {
        $this->reputation = $reputation;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return AccountStatusEnum|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param AccountStatusEnum|null $status  Account's current status.
     *
     * @return $this
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets contactsCount.
     *
     * @return int|null
     */
    public function getContactsCount()
    {
        return $this->contactsCount;
    }

    /**
     * Sets contactsCount.
     *
     * @param int|null $contactsCount  How many contacts this SubAccount has stored
     *
     * @return $this
     */
    public function setContactsCount($contactsCount = null)
    {
        $this->contactsCount = $contactsCount;

        return $this;
    }
}

