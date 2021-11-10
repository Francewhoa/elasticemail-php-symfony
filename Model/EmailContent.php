<?php
/**
 * EmailContent
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
 * Class representing the EmailContent model.
 *
 * Proper e-mail content
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class EmailContent 
{
        /**
     * List of e-mail body parts, with user-provided MIME types (text/html, text/plain etc)
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
     * A key-value collection of custom merge fields, shared between recipients. Should be used in e-mail body like so: {firstname}, {lastname} etc.
     *
     * @var string[]|null
     * @SerializedName("Merge")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string, string>")
     */
    protected $merge;

    /**
     * Attachments provided by sending binary data
     *
     * @var ElasticEmail\Model\MessageAttachment[]|null
     * @SerializedName("Attachments")
     * @Assert\All({
     *   @Assert\Type("ElasticEmail\Model\MessageAttachment")
     * })
     * @Type("array<ElasticEmail\Model\MessageAttachment>")
     */
    protected $attachments;

    /**
     * A key-value collection of custom e-mail headers.
     *
     * @var string[]|null
     * @SerializedName("Headers")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string, string>")
     */
    protected $headers;

    /**
     * Postback header.
     *
     * @var string|null
     * @SerializedName("Postback")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $postback;

    /**
     * E-mail with an optional name to be used as the envelope from address (e.g.: John Doe &lt;email@domain.com&gt;)
     *
     * @var string|null
     * @SerializedName("EnvelopeFrom")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $envelopeFrom;

    /**
     * Your e-mail with an optional name (e.g.: John Doe &lt;email@domain.com&gt;)
     *
     * @var string|null
     * @SerializedName("From")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $from;

    /**
     * To what address should the recipients reply to (e.g. John Doe &lt;email@domain.com&gt;)
     *
     * @var string|null
     * @SerializedName("ReplyTo")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $replyTo;

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
     * Name of template.
     *
     * @var string|null
     * @SerializedName("TemplateName")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $templateName;

    /**
     * Names of previously uploaded files that should be sent as downloadable attachments
     *
     * @var string[]|null
     * @SerializedName("AttachFiles")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $attachFiles;

    /**
     * @var ElasticEmail\Model\Utm|null
     * @SerializedName("Utm")
     * @Assert\Type("ElasticEmail\Model\Utm")
     * @Type("ElasticEmail\Model\Utm")
     */
    protected $utm;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->body = isset($data['body']) ? $data['body'] : null;
        $this->merge = isset($data['merge']) ? $data['merge'] : null;
        $this->attachments = isset($data['attachments']) ? $data['attachments'] : null;
        $this->headers = isset($data['headers']) ? $data['headers'] : null;
        $this->postback = isset($data['postback']) ? $data['postback'] : null;
        $this->envelopeFrom = isset($data['envelopeFrom']) ? $data['envelopeFrom'] : null;
        $this->from = isset($data['from']) ? $data['from'] : null;
        $this->replyTo = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->subject = isset($data['subject']) ? $data['subject'] : null;
        $this->templateName = isset($data['templateName']) ? $data['templateName'] : null;
        $this->attachFiles = isset($data['attachFiles']) ? $data['attachFiles'] : null;
        $this->utm = isset($data['utm']) ? $data['utm'] : null;
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
     * @param ElasticEmail\Model\BodyPart[]|null $body  List of e-mail body parts, with user-provided MIME types (text/html, text/plain etc)
     *
     * @return $this
     */
    public function setBody(array $body = null)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Gets merge.
     *
     * @return string[]|null
     */
    public function getMerge(): ?array
    {
        return $this->merge;
    }

    /**
     * Sets merge.
     *
     * @param string[]|null $merge  A key-value collection of custom merge fields, shared between recipients. Should be used in e-mail body like so: {firstname}, {lastname} etc.
     *
     * @return $this
     */
    public function setMerge(array $merge = null)
    {
        $this->merge = $merge;

        return $this;
    }

    /**
     * Gets attachments.
     *
     * @return ElasticEmail\Model\MessageAttachment[]|null
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * Sets attachments.
     *
     * @param ElasticEmail\Model\MessageAttachment[]|null $attachments  Attachments provided by sending binary data
     *
     * @return $this
     */
    public function setAttachments(array $attachments = null)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Gets headers.
     *
     * @return string[]|null
     */
    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    /**
     * Sets headers.
     *
     * @param string[]|null $headers  A key-value collection of custom e-mail headers.
     *
     * @return $this
     */
    public function setHeaders(array $headers = null)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Gets postback.
     *
     * @return string|null
     */
    public function getPostback()
    {
        return $this->postback;
    }

    /**
     * Sets postback.
     *
     * @param string|null $postback  Postback header.
     *
     * @return $this
     */
    public function setPostback($postback = null)
    {
        $this->postback = $postback;

        return $this;
    }

    /**
     * Gets envelopeFrom.
     *
     * @return string|null
     */
    public function getEnvelopeFrom()
    {
        return $this->envelopeFrom;
    }

    /**
     * Sets envelopeFrom.
     *
     * @param string|null $envelopeFrom  E-mail with an optional name to be used as the envelope from address (e.g.: John Doe <email@domain.com>)
     *
     * @return $this
     */
    public function setEnvelopeFrom($envelopeFrom = null)
    {
        $this->envelopeFrom = $envelopeFrom;

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
     * @param string|null $from  Your e-mail with an optional name (e.g.: John Doe <email@domain.com>)
     *
     * @return $this
     */
    public function setFrom($from = null)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Gets replyTo.
     *
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * Sets replyTo.
     *
     * @param string|null $replyTo  To what address should the recipients reply to (e.g. John Doe <email@domain.com>)
     *
     * @return $this
     */
    public function setReplyTo($replyTo = null)
    {
        $this->replyTo = $replyTo;

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
     * Gets templateName.
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Sets templateName.
     *
     * @param string|null $templateName  Name of template.
     *
     * @return $this
     */
    public function setTemplateName($templateName = null)
    {
        $this->templateName = $templateName;

        return $this;
    }

    /**
     * Gets attachFiles.
     *
     * @return string[]|null
     */
    public function getAttachFiles(): ?array
    {
        return $this->attachFiles;
    }

    /**
     * Sets attachFiles.
     *
     * @param string[]|null $attachFiles  Names of previously uploaded files that should be sent as downloadable attachments
     *
     * @return $this
     */
    public function setAttachFiles(array $attachFiles = null)
    {
        $this->attachFiles = $attachFiles;

        return $this;
    }

    /**
     * Gets utm.
     *
     * @return ElasticEmail\Model\Utm|null
     */
    public function getUtm(): ?Utm
    {
        return $this->utm;
    }

    /**
     * Sets utm.
     *
     * @param ElasticEmail\Model\Utm|null $utm
     *
     * @return $this
     */
    public function setUtm(Utm $utm = null)
    {
        $this->utm = $utm;

        return $this;
    }
}


