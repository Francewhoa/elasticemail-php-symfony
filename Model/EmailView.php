<?php
/**
 * EmailView
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
 * Class representing the EmailView model.
 *
 * Email details formatted in json
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class EmailView 
{
        /**
     * Body (HTML, otherwise plain text) of email
     *
     * @var string|null
     * @SerializedName("Body")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $body;

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
     * From email address
     *
     * @var string|null
     * @SerializedName("From")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $from;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->body = isset($data['body']) ? $data['body'] : null;
        $this->subject = isset($data['subject']) ? $data['subject'] : null;
        $this->from = isset($data['from']) ? $data['from'] : null;
    }

    /**
     * Gets body.
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets body.
     *
     * @param string|null $body  Body (HTML, otherwise plain text) of email
     *
     * @return $this
     */
    public function setBody($body = null)
    {
        $this->body = $body;

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
     * Gets from.
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets from.
     *
     * @param string|null $from  From email address
     *
     * @return $this
     */
    public function setFrom($from = null)
    {
        $this->from = $from;

        return $this;
    }
}


