<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBillingDunningRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBillingDunningRequest extends AbstractStructBase
{
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
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The toDunningLevel
     * @var int|null
     */
    protected ?int $toDunningLevel = null;
    /**
     * The searchCriteria
     * @var string|null
     */
    protected ?string $searchCriteria = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * Constructor method for SearchBillingDunningRequest
     * @uses SearchBillingDunningRequest::setStartDate()
     * @uses SearchBillingDunningRequest::setEndDate()
     * @uses SearchBillingDunningRequest::setFromDunningLevel()
     * @uses SearchBillingDunningRequest::setOrgUnit()
     * @uses SearchBillingDunningRequest::setToDunningLevel()
     * @uses SearchBillingDunningRequest::setSearchCriteria()
     * @uses SearchBillingDunningRequest::setCustomerId()
     * @uses SearchBillingDunningRequest::setDebitorNo()
     * @param string $startDate
     * @param string $endDate
     * @param int $fromDunningLevel
     * @param string $orgUnit
     * @param int $toDunningLevel
     * @param string $searchCriteria
     * @param int $customerId
     * @param string $debitorNo
     */
    public function __construct(?string $startDate = null, ?string $endDate = null, ?int $fromDunningLevel = null, ?string $orgUnit = null, ?int $toDunningLevel = null, ?string $searchCriteria = null, ?int $customerId = null, ?string $debitorNo = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setFromDunningLevel($fromDunningLevel)
            ->setOrgUnit($orgUnit)
            ->setToDunningLevel($toDunningLevel)
            ->setSearchCriteria($searchCriteria)
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest
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
     * Get searchCriteria value
     * @return string|null
     */
    public function getSearchCriteria(): ?string
    {
        return $this->searchCriteria;
    }
    /**
     * Set searchCriteria value
     * @param string $searchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest
     */
    public function setSearchCriteria(?string $searchCriteria = null): self
    {
        // validation for constraint: string
        if (!is_null($searchCriteria) && !is_string($searchCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchCriteria, true), gettype($searchCriteria)), __LINE__);
        }
        $this->searchCriteria = $searchCriteria;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest
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
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
}
