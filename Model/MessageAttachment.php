<?php
/**
 * MessageAttachment
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
 * Class representing the MessageAttachment model.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class MessageAttachment 
{
        /**
     * File&#39;s content as byte array (or a Base64 string)
     *
     * @var string
     * @SerializedName("BinaryContent")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $binaryContent;

    /**
     * Display name of the file
     *
     * @var string|null
     * @SerializedName("Name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $name;

    /**
     * MIME content type
     *
     * @var string|null
     * @SerializedName("ContentType")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $contentType;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->binaryContent = isset($data['binaryContent']) ? $data['binaryContent'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->contentType = isset($data['contentType']) ? $data['contentType'] : null;
    }

    /**
     * Gets binaryContent.
     *
     * @return string
     */
    public function getBinaryContent()
    {
        return $this->binaryContent;
    }

    /**
     * Sets binaryContent.
     *
     * @param string $binaryContent  File's content as byte array (or a Base64 string)
     *
     * @return $this
     */
    public function setBinaryContent($binaryContent)
    {
        $this->binaryContent = $binaryContent;

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
     * @param string|null $name  Display name of the file
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets contentType.
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets contentType.
     *
     * @param string|null $contentType  MIME content type
     *
     * @return $this
     */
    public function setContentType($contentType = null)
    {
        $this->contentType = $contentType;

        return $this;
    }
}


