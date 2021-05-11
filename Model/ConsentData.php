<?php
/**
 * ConsentData
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
 * Class representing the ConsentData model.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class ConsentData 
{
        /**
     * IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent.
     *
     * @var string|null
     * @SerializedName("ConsentIP")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $consentIP;

    /**
     * Date of consent to send this contact(s) your email. If not provided current date is used for consent.
     *
     * @var \DateTime|null
     * @SerializedName("ConsentDate")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $consentDate;

    /**
     * Does the contant consent to have their tracking data stored.
     *
     * @var ConsentTracking|null
     * @SerializedName("ConsentTracking")
     * @Assert\Type("ConsentTracking")
     * @Type("ConsentTracking")
     */
    protected $consentTracking;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->consentIP = isset($data['consentIP']) ? $data['consentIP'] : null;
        $this->consentDate = isset($data['consentDate']) ? $data['consentDate'] : null;
        $this->consentTracking = isset($data['consentTracking']) ? $data['consentTracking'] : null;
    }

    /**
     * Gets consentIP.
     *
     * @return string|null
     */
    public function getConsentIP()
    {
        return $this->consentIP;
    }

    /**
     * Sets consentIP.
     *
     * @param string|null $consentIP  IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent.
     *
     * @return $this
     */
    public function setConsentIP($consentIP = null)
    {
        $this->consentIP = $consentIP;

        return $this;
    }

    /**
     * Gets consentDate.
     *
     * @return \DateTime|null
     */
    public function getConsentDate(): ?\DateTime
    {
        return $this->consentDate;
    }

    /**
     * Sets consentDate.
     *
     * @param \DateTime|null $consentDate  Date of consent to send this contact(s) your email. If not provided current date is used for consent.
     *
     * @return $this
     */
    public function setConsentDate(\DateTime $consentDate = null)
    {
        $this->consentDate = $consentDate;

        return $this;
    }

    /**
     * Gets consentTracking.
     *
     * @return ConsentTracking|null
     */
    public function getConsentTracking()
    {
        return $this->consentTracking;
    }

    /**
     * Sets consentTracking.
     *
     * @param ConsentTracking|null $consentTracking  Does the contant consent to have their tracking data stored.
     *
     * @return $this
     */
    public function setConsentTracking($consentTracking = null)
    {
        $this->consentTracking = $consentTracking;

        return $this;
    }
}


