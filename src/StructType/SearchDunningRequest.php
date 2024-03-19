<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDunningRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchDunningRequest extends AbstractStructBase
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
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The excUserId
     * @var int|null
     */
    protected ?int $excUserId = null;
    /**
     * Constructor method for SearchDunningRequest
     * @uses SearchDunningRequest::setStartDate()
     * @uses SearchDunningRequest::setEndDate()
     * @uses SearchDunningRequest::setFromDunningLevel()
     * @uses SearchDunningRequest::setOrgUnit()
     * @uses SearchDunningRequest::setToDunningLevel()
     * @uses SearchDunningRequest::setSearchCriteria()
     * @uses SearchDunningRequest::setOrderId()
     * @uses SearchDunningRequest::setExcUserId()
     * @param string $startDate
     * @param string $endDate
     * @param int $fromDunningLevel
     * @param string $orgUnit
     * @param int $toDunningLevel
     * @param string $searchCriteria
     * @param int $orderId
     * @param int $excUserId
     */
    public function __construct(?string $startDate = null, ?string $endDate = null, ?int $fromDunningLevel = null, ?string $orgUnit = null, ?int $toDunningLevel = null, ?string $searchCriteria = null, ?int $orderId = null, ?int $excUserId = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setFromDunningLevel($fromDunningLevel)
            ->setOrgUnit($orgUnit)
            ->setToDunningLevel($toDunningLevel)
            ->setSearchCriteria($searchCriteria)
            ->setOrderId($orderId)
            ->setExcUserId($excUserId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchDunningRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchDunningRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchDunningRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchDunningRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchDunningRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchDunningRequest
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
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\SearchDunningRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get excUserId value
     * @return int|null
     */
    public function getExcUserId(): ?int
    {
        return $this->excUserId;
    }
    /**
     * Set excUserId value
     * @param int $excUserId
     * @return \Pggns\MidocoApi\Order\StructType\SearchDunningRequest
     */
    public function setExcUserId(?int $excUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($excUserId) && !(is_int($excUserId) || ctype_digit($excUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($excUserId, true), gettype($excUserId)), __LINE__);
        }
        $this->excUserId = $excUserId;
        
        return $this;
    }
}
