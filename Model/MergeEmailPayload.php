<?php
/**
 * MergeEmailPayload
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
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
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
 * Class representing the MergeEmailPayload model.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class MergeEmailPayload 
{
        /**
     * CSV file containing recipients with optional merge fields
     *
     * @var MessageAttachment
     * @SerializedName("MergeFile")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("MessageAttachment")
     * @Type("MessageAttachment")
     */
    protected $mergeFile;

    /**
     * Proper e-mail content
     *
     * @var EmailContent|null
     * @SerializedName("Content")
     * @Assert\Type("EmailContent")
     * @Type("EmailContent")
     */
    protected $content;

    /**
     * E-mail configuration
     *
     * @var Options|null
     * @SerializedName("Options")
     * @Assert\Type("Options")
     * @Type("Options")
     */
    protected $options;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->mergeFile = isset($data['mergeFile']) ? $data['mergeFile'] : null;
        $this->content = isset($data['content']) ? $data['content'] : null;
        $this->options = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Gets mergeFile.
     *
     * @return MessageAttachment
     */
    public function getMergeFile()
    {
        return $this->mergeFile;
    }

    /**
     * Sets mergeFile.
     *
     * @param MessageAttachment $mergeFile  CSV file containing recipients with optional merge fields
     *
     * @return $this
     */
    public function setMergeFile($mergeFile)
    {
        $this->mergeFile = $mergeFile;

        return $this;
    }

    /**
     * Gets content.
     *
     * @return EmailContent|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets content.
     *
     * @param EmailContent|null $content  Proper e-mail content
     *
     * @return $this
     */
    public function setContent($content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Gets options.
     *
     * @return Options|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets options.
     *
     * @param Options|null $options  E-mail configuration
     *
     * @return $this
     */
    public function setOptions($options = null)
    {
        $this->options = $options;

        return $this;
    }
}


