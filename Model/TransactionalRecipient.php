<?php
/**
 * TransactionalRecipient
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
 * Class representing the TransactionalRecipient model.
 *
 * List of transactional recipients
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class TransactionalRecipient 
{
        /**
     * List of recipients (visible to others)
     *
     * @var string[]|null
     * @SerializedName("To")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $to;

    /**
     * List of Carbon Copy recipients (visible to others)
     *
     * @var string[]|null
     * @SerializedName("CC")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $cC;

    /**
     * List of Blind Carbon Copy recipients (hidden from other recipients)
     *
     * @var string[]|null
     * @SerializedName("BCC")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $bCC;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->to = isset($data['to']) ? $data['to'] : null;
        $this->cC = isset($data['cC']) ? $data['cC'] : null;
        $this->bCC = isset($data['bCC']) ? $data['bCC'] : null;
    }

    /**
     * Gets to.
     *
     * @return string[]|null
     */
    public function getTo(): ?array
    {
        return $this->to;
    }

    /**
     * Sets to.
     *
     * @param string[]|null $to  List of recipients (visible to others)
     *
     * @return $this
     */
    public function setTo(array $to = null)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Gets cC.
     *
     * @return string[]|null
     */
    public function getCC(): ?array
    {
        return $this->cC;
    }

    /**
     * Sets cC.
     *
     * @param string[]|null $cC  List of Carbon Copy recipients (visible to others)
     *
     * @return $this
     */
    public function setCC(array $cC = null)
    {
        $this->cC = $cC;

        return $this;
    }

    /**
     * Gets bCC.
     *
     * @return string[]|null
     */
    public function getBCC(): ?array
    {
        return $this->bCC;
    }

    /**
     * Sets bCC.
     *
     * @param string[]|null $bCC  List of Blind Carbon Copy recipients (hidden from other recipients)
     *
     * @return $this
     */
    public function setBCC(array $bCC = null)
    {
        $this->bCC = $bCC;

        return $this;
    }
}


