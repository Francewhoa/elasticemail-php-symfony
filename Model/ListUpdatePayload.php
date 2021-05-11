<?php
/**
 * ListUpdatePayload
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
 * Class representing the ListUpdatePayload model.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class ListUpdatePayload 
{
        /**
     * Name of your list if you want to change it.
     *
     * @var string|null
     * @SerializedName("NewListName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $newListName;

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
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->newListName = isset($data['newListName']) ? $data['newListName'] : null;
        $this->allowUnsubscribe = isset($data['allowUnsubscribe']) ? $data['allowUnsubscribe'] : null;
    }

    /**
     * Gets newListName.
     *
     * @return string|null
     */
    public function getNewListName()
    {
        return $this->newListName;
    }

    /**
     * Sets newListName.
     *
     * @param string|null $newListName  Name of your list if you want to change it.
     *
     * @return $this
     */
    public function setNewListName($newListName = null)
    {
        $this->newListName = $newListName;

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
}


