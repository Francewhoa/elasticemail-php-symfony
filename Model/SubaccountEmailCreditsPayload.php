<?php
/**
 * SubaccountEmailCreditsPayload
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
 * Class representing the SubaccountEmailCreditsPayload model.
 *
 * A change to SubAccount email credits pool, with an additional note.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class SubaccountEmailCreditsPayload 
{
        /**
     * Positive or negative value; this will be added or subtracted from Subaccount&#39;s current email Credits pool.
     *
     * @var int|null
     * @SerializedName("Credits")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $credits;

    /**
     * Note to append to this credits change, for history.
     *
     * @var string|null
     * @SerializedName("Notes")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $notes;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->credits = isset($data['credits']) ? $data['credits'] : null;
        $this->notes = isset($data['notes']) ? $data['notes'] : null;
    }

    /**
     * Gets credits.
     *
     * @return int|null
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Sets credits.
     *
     * @param int|null $credits  Positive or negative value; this will be added or subtracted from Subaccount's current email Credits pool.
     *
     * @return $this
     */
    public function setCredits($credits = null)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Gets notes.
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets notes.
     *
     * @param string|null $notes  Note to append to this credits change, for history.
     *
     * @return $this
     */
    public function setNotes($notes = null)
    {
        $this->notes = $notes;

        return $this;
    }
}


