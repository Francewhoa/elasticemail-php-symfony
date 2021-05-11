<?php
/**
 * ContactUpdatePayload
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
 * Class representing the ContactUpdatePayload model.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class ContactUpdatePayload 
{
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
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->firstName = isset($data['firstName']) ? $data['firstName'] : null;
        $this->lastName = isset($data['lastName']) ? $data['lastName'] : null;
        $this->customFields = isset($data['customFields']) ? $data['customFields'] : null;
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
}


