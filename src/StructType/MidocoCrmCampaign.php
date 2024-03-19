<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmCampaign StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmCampaign extends CrmCampaignDTO
{
    /**
     * The dateOfIssue
     * @var string|null
     */
    protected ?string $dateOfIssue = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The recipientInfo
     * @var string|null
     */
    protected ?string $recipientInfo = null;
    /**
     * Constructor method for MidocoCrmCampaign
     * @uses MidocoCrmCampaign::setDateOfIssue()
     * @uses MidocoCrmCampaign::setRemark()
     * @uses MidocoCrmCampaign::setRecipientInfo()
     * @param string $dateOfIssue
     * @param string $remark
     * @param string $recipientInfo
     */
    public function __construct(?string $dateOfIssue = null, ?string $remark = null, ?string $recipientInfo = null)
    {
        $this
            ->setDateOfIssue($dateOfIssue)
            ->setRemark($remark)
            ->setRecipientInfo($recipientInfo);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCampaign
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCampaign
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCampaign
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
}
