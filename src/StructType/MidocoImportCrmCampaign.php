<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportCrmCampaign StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoImportCrmCampaign extends AbstractStructBase
{
    /**
     * The extId
     * @var int|null
     */
    protected ?int $extId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The infoText
     * @var string|null
     */
    protected ?string $infoText = null;
    /**
     * The issueDate
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The campaignType
     * @var string|null
     */
    protected ?string $campaignType = null;
    /**
     * The issueUser
     * @var string|null
     */
    protected ?string $issueUser = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for MidocoImportCrmCampaign
     * @uses MidocoImportCrmCampaign::setExtId()
     * @uses MidocoImportCrmCampaign::setDescription()
     * @uses MidocoImportCrmCampaign::setInfoText()
     * @uses MidocoImportCrmCampaign::setIssueDate()
     * @uses MidocoImportCrmCampaign::setCampaignType()
     * @uses MidocoImportCrmCampaign::setIssueUser()
     * @uses MidocoImportCrmCampaign::setRemark()
     * @uses MidocoImportCrmCampaign::setCustomerId()
     * @uses MidocoImportCrmCampaign::setOrgunit()
     * @param int $extId
     * @param string $description
     * @param string $infoText
     * @param string $issueDate
     * @param string $campaignType
     * @param string $issueUser
     * @param string $remark
     * @param int $customerId
     * @param string $orgunit
     */
    public function __construct(?int $extId = null, ?string $description = null, ?string $infoText = null, ?string $issueDate = null, ?string $campaignType = null, ?string $issueUser = null, ?string $remark = null, ?int $customerId = null, ?string $orgunit = null)
    {
        $this
            ->setExtId($extId)
            ->setDescription($description)
            ->setInfoText($infoText)
            ->setIssueDate($issueDate)
            ->setCampaignType($campaignType)
            ->setIssueUser($issueUser)
            ->setRemark($remark)
            ->setCustomerId($customerId)
            ->setOrgunit($orgunit);
    }
    /**
     * Get extId value
     * @return int|null
     */
    public function getExtId(): ?int
    {
        return $this->extId;
    }
    /**
     * Set extId value
     * @param int $extId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCrmCampaign
     */
    public function setExtId(?int $extId = null): self
    {
        // validation for constraint: int
        if (!is_null($extId) && !(is_int($extId) || ctype_digit($extId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extId, true), gettype($extId)), __LINE__);
        }
        $this->extId = $extId;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCrmCampaign
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get infoText value
     * @return string|null
     */
    public function getInfoText(): ?string
    {
        return $this->infoText;
    }
    /**
     * Set infoText value
     * @param string $infoText
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCrmCampaign
     */
    public function setInfoText(?string $infoText = null): self
    {
        // validation for constraint: string
        if (!is_null($infoText) && !is_string($infoText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoText, true), gettype($infoText)), __LINE__);
        }
        $this->infoText = $infoText;
        
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCrmCampaign
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        
        return $this;
    }
    /**
     * Get campaignType value
     * @return string|null
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }
    /**
     * Set campaignType value
     * @param string $campaignType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCrmCampaign
     */
    public function setCampaignType(?string $campaignType = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignType) && !is_string($campaignType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignType, true), gettype($campaignType)), __LINE__);
        }
        $this->campaignType = $campaignType;
        
        return $this;
    }
    /**
     * Get issueUser value
     * @return string|null
     */
    public function getIssueUser(): ?string
    {
        return $this->issueUser;
    }
    /**
     * Set issueUser value
     * @param string $issueUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCrmCampaign
     */
    public function setIssueUser(?string $issueUser = null): self
    {
        // validation for constraint: string
        if (!is_null($issueUser) && !is_string($issueUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueUser, true), gettype($issueUser)), __LINE__);
        }
        $this->issueUser = $issueUser;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCrmCampaign
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCrmCampaign
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCrmCampaign
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
