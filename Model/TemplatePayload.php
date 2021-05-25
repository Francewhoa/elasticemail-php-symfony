<?php
/**
 * TemplatePayload
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
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
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
 * Class representing the TemplatePayload model.
 *
 * New template object
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class TemplatePayload 
{
        /**
     * Template name
     *
     * @var string|null
     * @SerializedName("Name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $name;

    /**
     * Default subject of email.
     *
     * @var string|null
     * @SerializedName("Subject")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $subject;

    /**
     * Email content of this template
     *
     * @var ElasticEmail\Model\BodyPart[]|null
     * @SerializedName("Body")
     * @Assert\All({
     *   @Assert\Type("ElasticEmail\Model\BodyPart")
     * })
     * @Type("array<ElasticEmail\Model\BodyPart>")
     */
    protected $body;

    /**
     * Visibility of a template
     *
     * @var TemplateScope|null
     * @SerializedName("TemplateScope")
     * @Assert\Type("TemplateScope")
     * @Type("TemplateScope")
     */
    protected $templateScope;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->subject = isset($data['subject']) ? $data['subject'] : null;
        $this->body = isset($data['body']) ? $data['body'] : null;
        $this->templateScope = isset($data['templateScope']) ? $data['templateScope'] : null;
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
     * @param string|null $name  Template name
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets subject.
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets subject.
     *
     * @param string|null $subject  Default subject of email.
     *
     * @return $this
     */
    public function setSubject($subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Gets body.
     *
     * @return ElasticEmail\Model\BodyPart[]|null
     */
    public function getBody(): ?array
    {
        return $this->body;
    }

    /**
     * Sets body.
     *
     * @param ElasticEmail\Model\BodyPart[]|null $body  Email content of this template
     *
     * @return $this
     */
    public function setBody(array $body = null)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Gets templateScope.
     *
     * @return TemplateScope|null
     */
    public function getTemplateScope()
    {
        return $this->templateScope;
    }

    /**
     * Sets templateScope.
     *
     * @param TemplateScope|null $templateScope  Visibility of a template
     *
     * @return $this
     */
    public function setTemplateScope($templateScope = null)
    {
        $this->templateScope = $templateScope;

        return $this;
    }
}


