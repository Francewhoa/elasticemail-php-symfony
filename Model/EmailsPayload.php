<?php
/**
 * EmailsPayload
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
 * Class representing the EmailsPayload model.
 *
 * Provide either rule or a list of emails, not both.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class EmailsPayload 
{
        /**
     * SQL-like rule. Sending &#39;All&#39; as a value loads all resources of the given type. Help for building a segment rule can be found here: https://help.elasticemail.com/en/articles/5162182-segment-rules
     *
     * @var string|null
     * @SerializedName("Rule")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $rule;

    /**
     * Comma delimited list of contact emails
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
        $this->rule = isset($data['rule']) ? $data['rule'] : null;
        $this->emails = isset($data['emails']) ? $data['emails'] : null;
    }

    /**
     * Gets rule.
     *
     * @return string|null
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets rule.
     *
     * @param string|null $rule  SQL-like rule. Sending 'All' as a value loads all resources of the given type. Help for building a segment rule can be found here: https://help.elasticemail.com/en/articles/5162182-segment-rules
     *
     * @return $this
     */
    public function setRule($rule = null)
    {
        $this->rule = $rule;

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
     * @param string[]|null $emails  Comma delimited list of contact emails
     *
     * @return $this
     */
    public function setEmails(array $emails = null)
    {
        $this->emails = $emails;

        return $this;
    }
}


