<?php
/**
 * ContactsList
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
 * Class representing the ContactsList model.
 *
 * List of Lists, with detailed data about its contents.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class ContactsList 
{
        /**
     * Name of your list.
     *
     * @var string|null
     * @SerializedName("ListName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $listName;

    /**
     * ID code of list. Please note that this is different from the listid field.
     *
     * @var string|null
     * @SerializedName("PublicListID")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $publicListID;

    /**
     * Date of creation in YYYY-MM-DDThh:ii:ss format
     *
     * @var \DateTime|null
     * @SerializedName("DateAdded")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $dateAdded;

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
        $this->listName = isset($data['listName']) ? $data['listName'] : null;
        $this->publicListID = isset($data['publicListID']) ? $data['publicListID'] : null;
        $this->dateAdded = isset($data['dateAdded']) ? $data['dateAdded'] : null;
        $this->allowUnsubscribe = isset($data['allowUnsubscribe']) ? $data['allowUnsubscribe'] : null;
    }

    /**
     * Gets listName.
     *
     * @return string|null
     */
    public function getListName()
    {
        return $this->listName;
    }

    /**
     * Sets listName.
     *
     * @param string|null $listName  Name of your list.
     *
     * @return $this
     */
    public function setListName($listName = null)
    {
        $this->listName = $listName;

        return $this;
    }

    /**
     * Gets publicListID.
     *
     * @return string|null
     */
    public function getPublicListID()
    {
        return $this->publicListID;
    }

    /**
     * Sets publicListID.
     *
     * @param string|null $publicListID  ID code of list. Please note that this is different from the listid field.
     *
     * @return $this
     */
    public function setPublicListID($publicListID = null)
    {
        $this->publicListID = $publicListID;

        return $this;
    }

    /**
     * Gets dateAdded.
     *
     * @return \DateTime|null
     */
    public function getDateAdded(): ?\DateTime
    {
        return $this->dateAdded;
    }

    /**
     * Sets dateAdded.
     *
     * @param \DateTime|null $dateAdded  Date of creation in YYYY-MM-DDThh:ii:ss format
     *
     * @return $this
     */
    public function setDateAdded(\DateTime $dateAdded = null)
    {
        $this->dateAdded = $dateAdded;

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


