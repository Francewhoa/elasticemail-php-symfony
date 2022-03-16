<?php
/**
 * SortOrderItem
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
 * Class representing the SortOrderItem model.
 *
 * Change the ordering of this inbound route for when matching the inbound
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class SortOrderItem 
{
        /**
     * ID of the route to change the order of
     *
     * @var string
     * @SerializedName("PublicInboundId")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $publicInboundId;

    /**
     * 1 - route will be used first
     *
     * @var int
     * @SerializedName("SortOrder")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $sortOrder;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->publicInboundId = isset($data['publicInboundId']) ? $data['publicInboundId'] : null;
        $this->sortOrder = isset($data['sortOrder']) ? $data['sortOrder'] : null;
    }

    /**
     * Gets publicInboundId.
     *
     * @return string
     */
    public function getPublicInboundId()
    {
        return $this->publicInboundId;
    }

    /**
     * Sets publicInboundId.
     *
     * @param string $publicInboundId  ID of the route to change the order of
     *
     * @return $this
     */
    public function setPublicInboundId($publicInboundId)
    {
        $this->publicInboundId = $publicInboundId;

        return $this;
    }

    /**
     * Gets sortOrder.
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets sortOrder.
     *
     * @param int $sortOrder  1 - route will be used first
     *
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }
}


