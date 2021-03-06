<?php
/**
 * SmtpCredentialsPayload
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
 * Class representing the SmtpCredentialsPayload model.
 *
 * Create new SMTP Credentials
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class SmtpCredentialsPayload 
{
        /**
     * Name of the Credential for ease of reference. It must be a valid email address.
     *
     * @var string
     * @SerializedName("Name")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $name;

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
     * Email of the subaccount for which this SmtpCredential should be created
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
        $this->expires = isset($data['expires']) ? $data['expires'] : null;
        $this->restrictAccessToIPRange = isset($data['restrictAccessToIPRange']) ? $data['restrictAccessToIPRange'] : null;
        $this->subaccount = isset($data['subaccount']) ? $data['subaccount'] : null;
    }

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name.
     *
     * @param string $name  Name of the Credential for ease of reference. It must be a valid email address.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @param string|null $subaccount  Email of the subaccount for which this SmtpCredential should be created
     *
     * @return $this
     */
    public function setSubaccount($subaccount = null)
    {
        $this->subaccount = $subaccount;

        return $this;
    }
}


