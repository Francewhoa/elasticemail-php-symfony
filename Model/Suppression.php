<?php
/**
 * Suppression
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
 * Class representing the Suppression model.
 *
 * Suppression - Email returning Hard Bounces
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class Suppression 
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
     * RFC error message
     *
     * @var string|null
     * @SerializedName("FriendlyErrorMessage")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $friendlyErrorMessage;

    /**
     * SMTP Error code
     *
     * @var int|null
     * @SerializedName("ErrorCode")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $errorCode;

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
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->friendlyErrorMessage = isset($data['friendlyErrorMessage']) ? $data['friendlyErrorMessage'] : null;
        $this->errorCode = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->dateUpdated = isset($data['dateUpdated']) ? $data['dateUpdated'] : null;
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
     * @param string|null $friendlyErrorMessage  RFC error message
     *
     * @return $this
     */
    public function setFriendlyErrorMessage($friendlyErrorMessage = null)
    {
        $this->friendlyErrorMessage = $friendlyErrorMessage;

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
     * @param int|null $errorCode  SMTP Error code
     *
     * @return $this
     */
    public function setErrorCode($errorCode = null)
    {
        $this->errorCode = $errorCode;

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
}


