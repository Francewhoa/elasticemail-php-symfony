<?php
/**
 * InboundRoute
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
 * Class representing the InboundRoute model.
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class InboundRoute 
{
        /**
     * @var string|null
     * @SerializedName("PublicId")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $publicId;

    /**
     * Name of this route
     *
     * @var string|null
     * @SerializedName("Name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $name;

    /**
     * @var ElasticEmail\Model\InboundRouteFilterType|null
     * @SerializedName("FilterType")
     * @Assert\Type("ElasticEmail\Model\InboundRouteFilterType")
     * @Type("ElasticEmail\Model\InboundRouteFilterType")
     */
    protected $filterType;

    /**
     * Filter of the inbound data
     *
     * @var string|null
     * @SerializedName("Filter")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $filter;

    /**
     * @var ElasticEmail\Model\InboundRouteActionType|null
     * @SerializedName("ActionType")
     * @Assert\Type("ElasticEmail\Model\InboundRouteActionType")
     * @Type("ElasticEmail\Model\InboundRouteActionType")
     */
    protected $actionType;

    /**
     * URL address or Email to notify about the inbound
     *
     * @var string|null
     * @SerializedName("ActionParameter")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $actionParameter;

    /**
     * Place of this route in your routes queue&#39;s order
     *
     * @var int|null
     * @SerializedName("SortOrder")
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
        $this->publicId = isset($data['publicId']) ? $data['publicId'] : null;
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->filterType = isset($data['filterType']) ? $data['filterType'] : null;
        $this->filter = isset($data['filter']) ? $data['filter'] : null;
        $this->actionType = isset($data['actionType']) ? $data['actionType'] : null;
        $this->actionParameter = isset($data['actionParameter']) ? $data['actionParameter'] : null;
        $this->sortOrder = isset($data['sortOrder']) ? $data['sortOrder'] : null;
    }

    /**
     * Gets publicId.
     *
     * @return string|null
     */
    public function getPublicId()
    {
        return $this->publicId;
    }

    /**
     * Sets publicId.
     *
     * @param string|null $publicId
     *
     * @return $this
     */
    public function setPublicId($publicId = null)
    {
        $this->publicId = $publicId;

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
     * @param string|null $name  Name of this route
     *
     * @return $this
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets filterType.
     *
     * @return ElasticEmail\Model\InboundRouteFilterType|null
     */
    public function getFilterType(): ?InboundRouteFilterType
    {
        return $this->filterType;
    }

    /**
     * Sets filterType.
     *
     * @param ElasticEmail\Model\InboundRouteFilterType|null $filterType
     *
     * @return $this
     */
    public function setFilterType(InboundRouteFilterType $filterType = null)
    {
        $this->filterType = $filterType;

        return $this;
    }

    /**
     * Gets filter.
     *
     * @return string|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets filter.
     *
     * @param string|null $filter  Filter of the inbound data
     *
     * @return $this
     */
    public function setFilter($filter = null)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Gets actionType.
     *
     * @return ElasticEmail\Model\InboundRouteActionType|null
     */
    public function getActionType(): ?InboundRouteActionType
    {
        return $this->actionType;
    }

    /**
     * Sets actionType.
     *
     * @param ElasticEmail\Model\InboundRouteActionType|null $actionType
     *
     * @return $this
     */
    public function setActionType(InboundRouteActionType $actionType = null)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets actionParameter.
     *
     * @return string|null
     */
    public function getActionParameter()
    {
        return $this->actionParameter;
    }

    /**
     * Sets actionParameter.
     *
     * @param string|null $actionParameter  URL address or Email to notify about the inbound
     *
     * @return $this
     */
    public function setActionParameter($actionParameter = null)
    {
        $this->actionParameter = $actionParameter;

        return $this;
    }

    /**
     * Gets sortOrder.
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets sortOrder.
     *
     * @param int|null $sortOrder  Place of this route in your routes queue's order
     *
     * @return $this
     */
    public function setSortOrder($sortOrder = null)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }
}


