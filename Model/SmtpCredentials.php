<?php
/**
 * SmtpCredentials
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
 * Class representing the SmtpCredentials model.
 *
 * SMTP Credentials info
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class SmtpCredentials 
{
        /**
     * Access level of this Smtp Credential.
     *
     * @var AccessLevel|null
     * @SerializedName("AccessLevel")
     * @Assert\Type("AccessLevel")
     * @Type("AccessLevel")
     */
    protected $accessLevel;

    /**
     * Name of the key.
     *
     * @var string|null
     * @SerializedName("Name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $name;

    /**
     * Date this SmtpCredential was created.
     *
     * @var \DateTime|null
     * @SerializedName("DateCreated")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $dateCreated;

    /**
     * Date this SmtpCredential was last used.
     *
     * @var \DateTime|null
     * @SerializedName("LastUse")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $lastUse;

    /**
     * Date this SmtpCredential expires.
     *
     * @var \DateTime|null
     * @SerializedName("Expires")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $expires;

    /**
     * Which IPs can use this SmtpCredential
     *
     * @var string[]|null
     * @SerializedName("RestrictAccessToIPRange")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $restrictAccessToIPRange;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->accessLevel = isset($data['accessLevel']) ? $data['accessLevel'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->dateCreated = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->lastUse = isset($data['lastUse']) ? $data['lastUse'] : null;
        $this->expires = isset($data['expires']) ? $data['expires'] : null;
        $this->restrictAccessToIPRange = isset($data['restrictAccessToIPRange']) ? $data['restrictAccessToIPRange'] : null;
    }

    /**
     * Gets accessLevel.
     *
     * @return AccessLevel|null
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Sets accessLevel.
     *
     * @param AccessLevel|null $accessLevel  Access level of this Smtp Credential.
     *
     * @return $this
     */
    public function setAccessLevel($accessLevel = null)
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string|null $name  Name of the key.
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets dateCreated.
     *
     * @return \DateTime|null
     */
    public function getDateCreated(): ?\DateTime
    {
        return $this->dateCreated;
    }

    /**
     * Sets dateCreated.
     *
     * @param \DateTime|null $dateCreated  Date this SmtpCredential was created.
     *
     * @return $this
     */
    public function setDateCreated(\DateTime $dateCreated = null)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Gets lastUse.
     *
     * @return \DateTime|null
     */
    public function getLastUse(): ?\DateTime
    {
        return $this->lastUse;
    }

    /**
     * Sets lastUse.
     *
     * @param \DateTime|null $lastUse  Date this SmtpCredential was last used.
     *
     * @return $this
     */
    public function setLastUse(\DateTime $lastUse = null)
    {
        $this->lastUse = $lastUse;

        return $this;
    }

    /**
     * Gets expires.
     *
     * @return \DateTime|null
     */
    public function getExpires(): ?\DateTime
    {
        return $this->expires;
    }

    /**
     * Sets expires.
     *
     * @param \DateTime|null $expires  Date this SmtpCredential expires.
     *
     * @return $this
     */
    public function setExpires(\DateTime $expires = null)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Gets restrictAccessToIPRange.
     *
     * @return string[]|null
     */
    public function getRestrictAccessToIPRange(): ?array
    {
        return $this->restrictAccessToIPRange;
    }

    /**
     * Sets restrictAccessToIPRange.
     *
     * @param string[]|null $restrictAccessToIPRange  Which IPs can use this SmtpCredential
     *
     * @return $this
     */
    public function setRestrictAccessToIPRange(array $restrictAccessToIPRange = null)
    {
        $this->restrictAccessToIPRange = $restrictAccessToIPRange;

        return $this;
    }
}


