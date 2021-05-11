<?php
/**
 * ApiKeyPayload
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
 * Class representing the ApiKeyPayload model.
 *
 * Create a new ApiKey
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class ApiKeyPayload 
{
        /**
     * Name of the ApiKey for ease of reference.
     *
     * @var string|null
     * @SerializedName("Name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $name;

    /**
     * Access level or permission to be assigned to this ApiKey.
     *
     * @var ElasticEmail\Model\AccessLevel[]|null
     * @SerializedName("AccessLevel")
     * @Assert\All({
     *   @Assert\Type("ElasticEmail\Model\AccessLevel")
     * })
     * @Type("array<ElasticEmail\Model\AccessLevel>")
     */
    protected $accessLevel;

    /**
     * Date this ApiKey expires.
     *
     * @var \DateTime|null
     * @SerializedName("Expires")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $expires;

    /**
     * Which IPs can use this ApiKey
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
     * Email of the subaccount for which this ApiKey should be created
     *
     * @var string|null
     * @SerializedName("Subaccount")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $subaccount;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->accessLevel = isset($data['accessLevel']) ? $data['accessLevel'] : null;
        $this->expires = isset($data['expires']) ? $data['expires'] : null;
        $this->restrictAccessToIPRange = isset($data['restrictAccessToIPRange']) ? $data['restrictAccessToIPRange'] : null;
        $this->subaccount = isset($data['subaccount']) ? $data['subaccount'] : null;
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
     * @param string|null $name  Name of the ApiKey for ease of reference.
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets accessLevel.
     *
     * @return ElasticEmail\Model\AccessLevel[]|null
     */
    public function getAccessLevel(): ?array
    {
        return $this->accessLevel;
    }

    /**
     * Sets accessLevel.
     *
     * @param ElasticEmail\Model\AccessLevel[]|null $accessLevel  Access level or permission to be assigned to this ApiKey.
     *
     * @return $this
     */
    public function setAccessLevel(array $accessLevel = null)
    {
        $this->accessLevel = $accessLevel;

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
     * @param \DateTime|null $expires  Date this ApiKey expires.
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
     * @param string[]|null $restrictAccessToIPRange  Which IPs can use this ApiKey
     *
     * @return $this
     */
    public function setRestrictAccessToIPRange(array $restrictAccessToIPRange = null)
    {
        $this->restrictAccessToIPRange = $restrictAccessToIPRange;

        return $this;
    }

    /**
     * Gets subaccount.
     *
     * @return string|null
     */
    public function getSubaccount()
    {
        return $this->subaccount;
    }

    /**
     * Sets subaccount.
     *
     * @param string|null $subaccount  Email of the subaccount for which this ApiKey should be created
     *
     * @return $this
     */
    public function setSubaccount($subaccount = null)
    {
        $this->subaccount = $subaccount;

        return $this;
    }
}

