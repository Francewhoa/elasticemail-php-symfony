<?php
/**
 * VerificationFileResultDetails
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
 * Class representing the VerificationFileResultDetails model.
 *
 * Detailed verification file result info
 *
 * @package ElasticEmail\Model
 * @author  OpenAPI Generator team
 */
class VerificationFileResultDetails 
{
        /**
     * Verification result&#39;s details
     *
     * @var ElasticEmail\Model\EmailValidationResult[]|null
     * @SerializedName("VerificationResult")
     * @Assert\All({
     *   @Assert\Type("ElasticEmail\Model\EmailValidationResult")
     * })
     * @Type("array<ElasticEmail\Model\EmailValidationResult>")
     */
    protected $verificationResult;

    /**
     * Identifier of this verification result
     *
     * @var string|null
     * @SerializedName("VerificationID")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $verificationID;

    /**
     * Origin file name
     *
     * @var string|null
     * @SerializedName("Filename")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $filename;

    /**
     * In what state does this verification result currently is
     *
     * @var VerificationStatus|null
     * @SerializedName("VerificationStatus")
     * @Assert\Type("VerificationStatus")
     * @Type("VerificationStatus")
     */
    protected $verificationStatus;

    /**
     * How many emails were detected in the file for verification
     *
     * @var FileUploadResult|null
     * @SerializedName("FileUploadResult")
     * @Assert\Type("FileUploadResult")
     * @Type("FileUploadResult")
     */
    protected $fileUploadResult;

    /**
     * Date of creation in YYYY-MM-DDThh:ii:ss format
     *
     * @var \DateTime|null
     * @SerializedName("DateAdded")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $dateAdded;

    /**
     * Origin file extension
     *
     * @var string|null
     * @SerializedName("Source")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $source;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->verificationResult = isset($data['verificationResult']) ? $data['verificationResult'] : null;
        $this->verificationID = isset($data['verificationID']) ? $data['verificationID'] : null;
        $this->filename = isset($data['filename']) ? $data['filename'] : null;
        $this->verificationStatus = isset($data['verificationStatus']) ? $data['verificationStatus'] : null;
        $this->fileUploadResult = isset($data['fileUploadResult']) ? $data['fileUploadResult'] : null;
        $this->dateAdded = isset($data['dateAdded']) ? $data['dateAdded'] : null;
        $this->source = isset($data['source']) ? $data['source'] : null;
    }

    /**
     * Gets verificationResult.
     *
     * @return ElasticEmail\Model\EmailValidationResult[]|null
     */
    public function getVerificationResult(): ?array
    {
        return $this->verificationResult;
    }

    /**
     * Sets verificationResult.
     *
     * @param ElasticEmail\Model\EmailValidationResult[]|null $verificationResult  Verification result's details
     *
     * @return $this
     */
    public function setVerificationResult(array $verificationResult = null)
    {
        $this->verificationResult = $verificationResult;

        return $this;
    }

    /**
     * Gets verificationID.
     *
     * @return string|null
     */
    public function getVerificationID()
    {
        return $this->verificationID;
    }

    /**
     * Sets verificationID.
     *
     * @param string|null $verificationID  Identifier of this verification result
     *
     * @return $this
     */
    public function setVerificationID($verificationID = null)
    {
        $this->verificationID = $verificationID;

        return $this;
    }

    /**
     * Gets filename.
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets filename.
     *
     * @param string|null $filename  Origin file name
     *
     * @return $this
     */
    public function setFilename($filename = null)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Gets verificationStatus.
     *
     * @return VerificationStatus|null
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }

    /**
     * Sets verificationStatus.
     *
     * @param VerificationStatus|null $verificationStatus  In what state does this verification result currently is
     *
     * @return $this
     */
    public function setVerificationStatus($verificationStatus = null)
    {
        $this->verificationStatus = $verificationStatus;

        return $this;
    }

    /**
     * Gets fileUploadResult.
     *
     * @return FileUploadResult|null
     */
    public function getFileUploadResult()
    {
        return $this->fileUploadResult;
    }

    /**
     * Sets fileUploadResult.
     *
     * @param FileUploadResult|null $fileUploadResult  How many emails were detected in the file for verification
     *
     * @return $this
     */
    public function setFileUploadResult($fileUploadResult = null)
    {
        $this->fileUploadResult = $fileUploadResult;

        return $this;
    }

    /**
     * Gets dateAdded.
     *
     * @return \DateTime|null
     */
    public function getDateAdded(): ?\DateTime
    {
        return $this->dateAdded;
    }

    /**
     * Sets dateAdded.
     *
     * @param \DateTime|null $dateAdded  Date of creation in YYYY-MM-DDThh:ii:ss format
     *
     * @return $this
     */
    public function setDateAdded(\DateTime $dateAdded = null)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Gets source.
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets source.
     *
     * @param string|null $source  Origin file extension
     *
     * @return $this
     */
    public function setSource($source = null)
    {
        $this->source = $source;

        return $this;
    }
}


