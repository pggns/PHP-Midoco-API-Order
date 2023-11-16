<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CampaignAssignDTO StructType
 * @subpackage Structs
 */
class CampaignAssignDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dateOfIssue
     * @var string|null
     */
    protected ?string $dateOfIssue = null;
    /**
     * The done
     * @var bool|null
     */
    protected ?bool $done = null;
    /**
     * The feedback
     * @var bool|null
     */
    protected ?bool $feedback = null;
    /**
     * The importedOrgUnit
     * @var string|null
     */
    protected ?string $importedOrgUnit = null;
    /**
     * The isImported
     * @var bool|null
     */
    protected ?bool $isImported = null;
    /**
     * The recipientInfo
     * @var string|null
     */
    protected ?string $recipientInfo = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * Constructor method for CampaignAssignDTO
     * @uses CampaignAssignDTO::setCampaignId()
     * @uses CampaignAssignDTO::setCustomerId()
     * @uses CampaignAssignDTO::setDateOfIssue()
     * @uses CampaignAssignDTO::setDone()
     * @uses CampaignAssignDTO::setFeedback()
     * @uses CampaignAssignDTO::setImportedOrgUnit()
     * @uses CampaignAssignDTO::setIsImported()
     * @uses CampaignAssignDTO::setRecipientInfo()
     * @uses CampaignAssignDTO::setRemark()
     * @param int $campaignId
     * @param int $customerId
     * @param string $dateOfIssue
     * @param bool $done
     * @param bool $feedback
     * @param string $importedOrgUnit
     * @param bool $isImported
     * @param string $recipientInfo
     * @param string $remark
     */
    public function __construct(?int $campaignId = null, ?int $customerId = null, ?string $dateOfIssue = null, ?bool $done = null, ?bool $feedback = null, ?string $importedOrgUnit = null, ?bool $isImported = null, ?string $recipientInfo = null, ?string $remark = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setCustomerId($customerId)
            ->setDateOfIssue($dateOfIssue)
            ->setDone($done)
            ->setFeedback($feedback)
            ->setImportedOrgUnit($importedOrgUnit)
            ->setIsImported($isImported)
            ->setRecipientInfo($recipientInfo)
            ->setRemark($remark);
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Order\StructType\CampaignAssignDTO
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CampaignAssignDTO
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
     * Get dateOfIssue value
     * @return string|null
     */
    public function getDateOfIssue(): ?string
    {
        return $this->dateOfIssue;
    }
    /**
     * Set dateOfIssue value
     * @param string $dateOfIssue
     * @return \Pggns\MidocoApi\Order\StructType\CampaignAssignDTO
     */
    public function setDateOfIssue(?string $dateOfIssue = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfIssue) && !is_string($dateOfIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfIssue, true), gettype($dateOfIssue)), __LINE__);
        }
        $this->dateOfIssue = $dateOfIssue;
        
        return $this;
    }
    /**
     * Get done value
     * @return bool|null
     */
    public function getDone(): ?bool
    {
        return $this->done;
    }
    /**
     * Set done value
     * @param bool $done
     * @return \Pggns\MidocoApi\Order\StructType\CampaignAssignDTO
     */
    public function setDone(?bool $done = null): self
    {
        // validation for constraint: boolean
        if (!is_null($done) && !is_bool($done)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($done, true), gettype($done)), __LINE__);
        }
        $this->done = $done;
        
        return $this;
    }
    /**
     * Get feedback value
     * @return bool|null
     */
    public function getFeedback(): ?bool
    {
        return $this->feedback;
    }
    /**
     * Set feedback value
     * @param bool $feedback
     * @return \Pggns\MidocoApi\Order\StructType\CampaignAssignDTO
     */
    public function setFeedback(?bool $feedback = null): self
    {
        // validation for constraint: boolean
        if (!is_null($feedback) && !is_bool($feedback)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feedback, true), gettype($feedback)), __LINE__);
        }
        $this->feedback = $feedback;
        
        return $this;
    }
    /**
     * Get importedOrgUnit value
     * @return string|null
     */
    public function getImportedOrgUnit(): ?string
    {
        return $this->importedOrgUnit;
    }
    /**
     * Set importedOrgUnit value
     * @param string $importedOrgUnit
     * @return \Pggns\MidocoApi\Order\StructType\CampaignAssignDTO
     */
    public function setImportedOrgUnit(?string $importedOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($importedOrgUnit) && !is_string($importedOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importedOrgUnit, true), gettype($importedOrgUnit)), __LINE__);
        }
        $this->importedOrgUnit = $importedOrgUnit;
        
        return $this;
    }
    /**
     * Get isImported value
     * @return bool|null
     */
    public function getIsImported(): ?bool
    {
        return $this->isImported;
    }
    /**
     * Set isImported value
     * @param bool $isImported
     * @return \Pggns\MidocoApi\Order\StructType\CampaignAssignDTO
     */
    public function setIsImported(?bool $isImported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImported) && !is_bool($isImported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImported, true), gettype($isImported)), __LINE__);
        }
        $this->isImported = $isImported;
        
        return $this;
    }
    /**
     * Get recipientInfo value
     * @return string|null
     */
    public function getRecipientInfo(): ?string
    {
        return $this->recipientInfo;
    }
    /**
     * Set recipientInfo value
     * @param string $recipientInfo
     * @return \Pggns\MidocoApi\Order\StructType\CampaignAssignDTO
     */
    public function setRecipientInfo(?string $recipientInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientInfo) && !is_string($recipientInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientInfo, true), gettype($recipientInfo)), __LINE__);
        }
        $this->recipientInfo = $recipientInfo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CampaignAssignDTO
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
}
