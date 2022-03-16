<?php
/**
 * EmailTransactionalMessageData
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
 * Class representing the EmailTransactionalMessageData model.
 *
 * Email data
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class EmailTransactionalMessageData 
{
        /**
     * @var ElasticEmail\Model\TransactionalRecipient
     * @SerializedName("Recipients")
     * @Assert\NotNull()
     * @Assert\Valid()
     * @Assert\Type("ElasticEmail\Model\TransactionalRecipient")
     * @Type("ElasticEmail\Model\TransactionalRecipient")
     */
    protected $recipients;

    /**
     * @var ElasticEmail\Model\EmailContent|null
     * @SerializedName("Content")
     * @Assert\Type("ElasticEmail\Model\EmailContent")
     * @Type("ElasticEmail\Model\EmailContent")
     */
    protected $content;

    /**
     * @var ElasticEmail\Model\Options|null
     * @SerializedName("Options")
     * @Assert\Type("ElasticEmail\Model\Options")
     * @Type("ElasticEmail\Model\Options")
     */
    protected $options;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->recipients = isset($data['recipients']) ? $data['recipients'] : null;
        $this->content = isset($data['content']) ? $data['content'] : null;
        $this->options = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Gets recipients.
     *
     * @return ElasticEmail\Model\TransactionalRecipient
     */
    public function getRecipients(): TransactionalRecipient
    {
        return $this->recipients;
    }

    /**
     * Sets recipients.
     *
     * @param ElasticEmail\Model\TransactionalRecipient $recipients
     *
     * @return $this
     */
    public function setRecipients(TransactionalRecipient $recipients)
    {
        $this->recipients = $recipients;

        return $this;
    }

    /**
     * Gets content.
     *
     * @return ElasticEmail\Model\EmailContent|null
     */
    public function getContent(): ?EmailContent
    {
        return $this->content;
    }

    /**
     * Sets content.
     *
     * @param ElasticEmail\Model\EmailContent|null $content
     *
     * @return $this
     */
    public function setContent(EmailContent $content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Gets options.
     *
     * @return ElasticEmail\Model\Options|null
     */
    public function getOptions(): ?Options
    {
        return $this->options;
    }

    /**
     * Sets options.
     *
     * @param ElasticEmail\Model\Options|null $options
     *
     * @return $this
     */
    public function setOptions(Options $options = null)
    {
        $this->options = $options;

        return $this;
    }
}


