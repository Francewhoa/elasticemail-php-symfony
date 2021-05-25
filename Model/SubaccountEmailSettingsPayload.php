<?php
/**
 * SubaccountEmailSettingsPayload
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
 * Class representing the SubaccountEmailSettingsPayload model.
 *
 * Settings related to sending emails
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class SubaccountEmailSettingsPayload 
{
        /**
     * True, if Account needs credits to send emails. Otherwise, false
     *
     * @var bool|null
     * @SerializedName("RequiresEmailCredits")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected $requiresEmailCredits;

    /**
     * Maximum size of email including attachments in MB&#39;s
     *
     * @var int|null
     * @SerializedName("EmailSizeLimit")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $emailSizeLimit;

    /**
     * Amount of emails Account can send daily
     *
     * @var int|null
     * @SerializedName("DailySendLimit")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $dailySendLimit;

    /**
     * Maximum number of contacts the Account can have. 0 means that parent account&#39;s limit is used.
     *
     * @var int|null
     * @SerializedName("MaxContacts")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $maxContacts;

    /**
     * Can the SubAccount purchase Private IP for themselves
     *
     * @var bool|null
     * @SerializedName("EnablePrivateIPPurchase")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected $enablePrivateIPPurchase;

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
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->requiresEmailCredits = isset($data['requiresEmailCredits']) ? $data['requiresEmailCredits'] : null;
        $this->emailSizeLimit = isset($data['emailSizeLimit']) ? $data['emailSizeLimit'] : null;
        $this->dailySendLimit = isset($data['dailySendLimit']) ? $data['dailySendLimit'] : null;
        $this->maxContacts = isset($data['maxContacts']) ? $data['maxContacts'] : null;
        $this->enablePrivateIPPurchase = isset($data['enablePrivateIPPurchase']) ? $data['enablePrivateIPPurchase'] : null;
        $this->poolName = isset($data['poolName']) ? $data['poolName'] : null;
    }

    /**
     * Gets requiresEmailCredits.
     *
     * @return bool|null
     */
    public function isRequiresEmailCredits()
    {
        return $this->requiresEmailCredits;
    }

    /**
     * Sets requiresEmailCredits.
     *
     * @param bool|null $requiresEmailCredits  True, if Account needs credits to send emails. Otherwise, false
     *
     * @return $this
     */
    public function setRequiresEmailCredits($requiresEmailCredits = null)
    {
        $this->requiresEmailCredits = $requiresEmailCredits;

        return $this;
    }

    /**
     * Gets emailSizeLimit.
     *
     * @return int|null
     */
    public function getEmailSizeLimit()
    {
        return $this->emailSizeLimit;
    }

    /**
     * Sets emailSizeLimit.
     *
     * @param int|null $emailSizeLimit  Maximum size of email including attachments in MB's
     *
     * @return $this
     */
    public function setEmailSizeLimit($emailSizeLimit = null)
    {
        $this->emailSizeLimit = $emailSizeLimit;

        return $this;
    }

    /**
     * Gets dailySendLimit.
     *
     * @return int|null
     */
    public function getDailySendLimit()
    {
        return $this->dailySendLimit;
    }

    /**
     * Sets dailySendLimit.
     *
     * @param int|null $dailySendLimit  Amount of emails Account can send daily
     *
     * @return $this
     */
    public function setDailySendLimit($dailySendLimit = null)
    {
        $this->dailySendLimit = $dailySendLimit;

        return $this;
    }

    /**
     * Gets maxContacts.
     *
     * @return int|null
     */
    public function getMaxContacts()
    {
        return $this->maxContacts;
    }

    /**
     * Sets maxContacts.
     *
     * @param int|null $maxContacts  Maximum number of contacts the Account can have. 0 means that parent account's limit is used.
     *
     * @return $this
     */
    public function setMaxContacts($maxContacts = null)
    {
        $this->maxContacts = $maxContacts;

        return $this;
    }

    /**
     * Gets enablePrivateIPPurchase.
     *
     * @return bool|null
     */
    public function isEnablePrivateIPPurchase()
    {
        return $this->enablePrivateIPPurchase;
    }

    /**
     * Sets enablePrivateIPPurchase.
     *
     * @param bool|null $enablePrivateIPPurchase  Can the SubAccount purchase Private IP for themselves
     *
     * @return $this
     */
    public function setEnablePrivateIPPurchase($enablePrivateIPPurchase = null)
    {
        $this->enablePrivateIPPurchase = $enablePrivateIPPurchase;

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
}


