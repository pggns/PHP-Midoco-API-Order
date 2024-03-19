<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCashBookForCrtUserCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCashBookForCrtUserCriteria extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The fromDate
     * @var string|null
     */
    protected ?string $fromDate = null;
    /**
     * The toDate
     * @var string|null
     */
    protected ?string $toDate = null;
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for SearchCashBookForCrtUserCriteria
     * @uses SearchCashBookForCrtUserCriteria::setUnitName()
     * @uses SearchCashBookForCrtUserCriteria::setFromDate()
     * @uses SearchCashBookForCrtUserCriteria::setToDate()
     * @uses SearchCashBookForCrtUserCriteria::setUserId()
     * @param string $unitName
     * @param string $fromDate
     * @param string $toDate
     * @param int $userId
     */
    public function __construct(?string $unitName = null, ?string $fromDate = null, ?string $toDate = null, ?int $userId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setFromDate($fromDate)
            ->setToDate($toDate)
            ->setUserId($userId);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get fromDate value
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria
     */
    public function setFromDate(?string $fromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;
        
        return $this;
    }
    /**
     * Get toDate value
     * @return string|null
     */
    public function getToDate(): ?string
    {
        return $this->toDate;
    }
    /**
     * Set toDate value
     * @param string $toDate
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria
     */
    public function setToDate(?string $toDate = null): self
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserCriteria
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
