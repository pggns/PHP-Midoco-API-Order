<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareDunningOrdersRequest StructType
 * @subpackage Structs
 */
class PrepareDunningOrdersRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ordersd:MidocoDunningTemplate
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $MidocoDunningTemplate = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The fromDunningLevel
     * @var int|null
     */
    protected ?int $fromDunningLevel = null;
    /**
     * The toDunningLevel
     * @var int|null
     */
    protected ?int $toDunningLevel = null;
    /**
     * The searchMode
     * @var string|null
     */
    protected ?string $searchMode = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The checkDunningDate
     * @var bool|null
     */
    protected ?bool $checkDunningDate = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The printIfNoEmail
     * @var bool|null
     */
    protected ?bool $printIfNoEmail = null;
    /**
     * Constructor method for PrepareDunningOrdersRequest
     * @uses PrepareDunningOrdersRequest::setMidocoDunningTemplate()
     * @uses PrepareDunningOrdersRequest::setStartDate()
     * @uses PrepareDunningOrdersRequest::setEndDate()
     * @uses PrepareDunningOrdersRequest::setFromDunningLevel()
     * @uses PrepareDunningOrdersRequest::setToDunningLevel()
     * @uses PrepareDunningOrdersRequest::setSearchMode()
     * @uses PrepareDunningOrdersRequest::setOrgUnit()
     * @uses PrepareDunningOrdersRequest::setCheckDunningDate()
     * @uses PrepareDunningOrdersRequest::setOrderNo()
     * @uses PrepareDunningOrdersRequest::setPrintIfNoEmail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate
     * @param string $startDate
     * @param string $endDate
     * @param int $fromDunningLevel
     * @param int $toDunningLevel
     * @param string $searchMode
     * @param string $orgUnit
     * @param bool $checkDunningDate
     * @param int $orderNo
     * @param bool $printIfNoEmail
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate = null, ?string $startDate = null, ?string $endDate = null, ?int $fromDunningLevel = null, ?int $toDunningLevel = null, ?string $searchMode = null, ?string $orgUnit = null, ?bool $checkDunningDate = null, ?int $orderNo = null, ?bool $printIfNoEmail = null)
    {
        $this
            ->setMidocoDunningTemplate($midocoDunningTemplate)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setFromDunningLevel($fromDunningLevel)
            ->setToDunningLevel($toDunningLevel)
            ->setSearchMode($searchMode)
            ->setOrgUnit($orgUnit)
            ->setCheckDunningDate($checkDunningDate)
            ->setOrderNo($orderNo)
            ->setPrintIfNoEmail($printIfNoEmail);
    }
    /**
     * Get MidocoDunningTemplate value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate|null
     */
    public function getMidocoDunningTemplate(): ?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate
    {
        return $this->MidocoDunningTemplate;
    }
    /**
     * Set MidocoDunningTemplate value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setMidocoDunningTemplate(?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate = null): self
    {
        $this->MidocoDunningTemplate = $midocoDunningTemplate;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get fromDunningLevel value
     * @return int|null
     */
    public function getFromDunningLevel(): ?int
    {
        return $this->fromDunningLevel;
    }
    /**
     * Set fromDunningLevel value
     * @param int $fromDunningLevel
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setFromDunningLevel(?int $fromDunningLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($fromDunningLevel) && !(is_int($fromDunningLevel) || ctype_digit($fromDunningLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fromDunningLevel, true), gettype($fromDunningLevel)), __LINE__);
        }
        $this->fromDunningLevel = $fromDunningLevel;
        
        return $this;
    }
    /**
     * Get toDunningLevel value
     * @return int|null
     */
    public function getToDunningLevel(): ?int
    {
        return $this->toDunningLevel;
    }
    /**
     * Set toDunningLevel value
     * @param int $toDunningLevel
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setToDunningLevel(?int $toDunningLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($toDunningLevel) && !(is_int($toDunningLevel) || ctype_digit($toDunningLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($toDunningLevel, true), gettype($toDunningLevel)), __LINE__);
        }
        $this->toDunningLevel = $toDunningLevel;
        
        return $this;
    }
    /**
     * Get searchMode value
     * @return string|null
     */
    public function getSearchMode(): ?string
    {
        return $this->searchMode;
    }
    /**
     * Set searchMode value
     * @param string $searchMode
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setSearchMode(?string $searchMode = null): self
    {
        // validation for constraint: string
        if (!is_null($searchMode) && !is_string($searchMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchMode, true), gettype($searchMode)), __LINE__);
        }
        $this->searchMode = $searchMode;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get checkDunningDate value
     * @return bool|null
     */
    public function getCheckDunningDate(): ?bool
    {
        return $this->checkDunningDate;
    }
    /**
     * Set checkDunningDate value
     * @param bool $checkDunningDate
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setCheckDunningDate(?bool $checkDunningDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkDunningDate) && !is_bool($checkDunningDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkDunningDate, true), gettype($checkDunningDate)), __LINE__);
        }
        $this->checkDunningDate = $checkDunningDate;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get printIfNoEmail value
     * @return bool|null
     */
    public function getPrintIfNoEmail(): ?bool
    {
        return $this->printIfNoEmail;
    }
    /**
     * Set printIfNoEmail value
     * @param bool $printIfNoEmail
     * @return \Pggns\MidocoApi\Order\StructType\PrepareDunningOrdersRequest
     */
    public function setPrintIfNoEmail(?bool $printIfNoEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printIfNoEmail) && !is_bool($printIfNoEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printIfNoEmail, true), gettype($printIfNoEmail)), __LINE__);
        }
        $this->printIfNoEmail = $printIfNoEmail;
        
        return $this;
    }
}
