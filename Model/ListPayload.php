<?php
/**
 * ListPayload
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
 * Class representing the ListPayload model.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class ListPayload 
{
        /**
     * Name of your list.
     *
     * @var string
     * @SerializedName("ListName")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $listName;

    /**
     * True: Allow unsubscribing from this list. Otherwise, false
     *
     * @var bool|null
     * @SerializedName("AllowUnsubscribe")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected $allowUnsubscribe;

    /**
     * Comma delimited list of existing contact emails that should be added to this list. Leave empty for all contacts
     *
     * @var string[]|null
     * @SerializedName("Emails")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $emails;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->listName = isset($data['listName']) ? $data['listName'] : null;
        $this->allowUnsubscribe = isset($data['allowUnsubscribe']) ? $data['allowUnsubscribe'] : null;
        $this->emails = isset($data['emails']) ? $data['emails'] : null;
    }

    /**
     * Gets listName.
     *
     * @return string
     */
    public function getListName()
    {
        return $this->listName;
    }

    /**
     * Sets listName.
     *
     * @param string $listName  Name of your list.
     *
     * @return $this
     */
    public function setListName($listName)
    {
        $this->listName = $listName;

        return $this;
    }

    /**
     * Gets allowUnsubscribe.
     *
     * @return bool|null
     */
    public function isAllowUnsubscribe()
    {
        return $this->allowUnsubscribe;
    }

    /**
     * Sets allowUnsubscribe.
     *
     * @param bool|null $allowUnsubscribe  True: Allow unsubscribing from this list. Otherwise, false
     *
     * @return $this
     */
    public function setAllowUnsubscribe($allowUnsubscribe = null)
    {
        $this->allowUnsubscribe = $allowUnsubscribe;

        return $this;
    }

    /**
     * Gets emails.
     *
     * @return string[]|null
     */
    public function getEmails(): ?array
    {
        return $this->emails;
    }

    /**
     * Sets emails.
     *
     * @param string[]|null $emails  Comma delimited list of existing contact emails that should be added to this list. Leave empty for all contacts
     *
     * @return $this
     */
    public function setEmails(array $emails = null)
    {
        $this->emails = $emails;

        return $this;
    }
}


