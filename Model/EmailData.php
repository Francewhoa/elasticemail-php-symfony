<?php
/**
 * EmailData
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
 * Class representing the EmailData model.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class EmailData 
{
        /**
     * Email details
     *
     * @var EmailView|null
     * @SerializedName("Preview")
     * @Assert\Type("EmailView")
     * @Type("EmailView")
     */
    protected $preview;

    /**
     * Attachments sent with the email
     *
     * @var ElasticEmail\Model\FileInfo[]|null
     * @SerializedName("Attachments")
     * @Assert\All({
     *   @Assert\Type("ElasticEmail\Model\FileInfo")
     * })
     * @Type("array<ElasticEmail\Model\FileInfo>")
     */
    protected $attachments;

    /**
     * Status of the given resource
     *
     * @var EmailStatus|null
     * @SerializedName("Status")
     * @Assert\Type("EmailStatus")
     * @Type("EmailStatus")
     */
    protected $status;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->preview = isset($data['preview']) ? $data['preview'] : null;
        $this->attachments = isset($data['attachments']) ? $data['attachments'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Gets preview.
     *
     * @return EmailView|null
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * Sets preview.
     *
     * @param EmailView|null $preview  Email details
     *
     * @return $this
     */
    public function setPreview($preview = null)
    {
        $this->preview = $preview;

        return $this;
    }

    /**
     * Gets attachments.
     *
     * @return ElasticEmail\Model\FileInfo[]|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * Sets attachments.
     *
     * @param ElasticEmail\Model\FileInfo[]|null $attachments  Attachments sent with the email
     *
     * @return $this
     */
    public function setAttachments(array $attachments = null)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return EmailStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param EmailStatus|null $status  Status of the given resource
     *
     * @return $this
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }
}

