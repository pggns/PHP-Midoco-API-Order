<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CostCentreSummaryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CostCentreSummaryDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The bookingPeriod
     * @var int|null
     */
    protected ?int $bookingPeriod = null;
    /**
     * The bookingYear
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The costsAmount
     * @var float|null
     */
    protected ?float $costsAmount = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The revenueAmount
     * @var float|null
     */
    protected ?float $revenueAmount = null;
    /**
     * Constructor method for CostCentreSummaryDTO
     * @uses CostCentreSummaryDTO::setAccountId()
     * @uses CostCentreSummaryDTO::setBookingPeriod()
     * @uses CostCentreSummaryDTO::setBookingYear()
     * @uses CostCentreSummaryDTO::setCostCentre()
     * @uses CostCentreSummaryDTO::setCostsAmount()
     * @uses CostCentreSummaryDTO::setPlanId()
     * @uses CostCentreSummaryDTO::setRevenueAmount()
     * @param string $accountId
     * @param int $bookingPeriod
     * @param int $bookingYear
     * @param string $costCentre
     * @param float $costsAmount
     * @param string $planId
     * @param float $revenueAmount
     */
    public function __construct(?string $accountId = null, ?int $bookingPeriod = null, ?int $bookingYear = null, ?string $costCentre = null, ?float $costsAmount = null, ?string $planId = null, ?float $revenueAmount = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBookingPeriod($bookingPeriod)
            ->setBookingYear($bookingYear)
            ->setCostCentre($costCentre)
            ->setCostsAmount($costsAmount)
            ->setPlanId($planId)
            ->setRevenueAmount($revenueAmount);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreSummaryDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get bookingPeriod value
     * @return int|null
     */
    public function getBookingPeriod(): ?int
    {
        return $this->bookingPeriod;
    }
    /**
     * Set bookingPeriod value
     * @param int $bookingPeriod
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreSummaryDTO
     */
    public function setBookingPeriod(?int $bookingPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriod) && !(is_int($bookingPeriod) || ctype_digit($bookingPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriod, true), gettype($bookingPeriod)), __LINE__);
        }
        $this->bookingPeriod = $bookingPeriod;
        
        return $this;
    }
    /**
     * Get bookingYear value
     * @return int|null
     */
    public function getBookingYear(): ?int
    {
        return $this->bookingYear;
    }
    /**
     * Set bookingYear value
     * @param int $bookingYear
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreSummaryDTO
     */
    public function setBookingYear(?int $bookingYear = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingYear) && !(is_int($bookingYear) || ctype_digit($bookingYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingYear, true), gettype($bookingYear)), __LINE__);
        }
        $this->bookingYear = $bookingYear;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreSummaryDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get costsAmount value
     * @return float|null
     */
    public function getCostsAmount(): ?float
    {
        return $this->costsAmount;
    }
    /**
     * Set costsAmount value
     * @param float $costsAmount
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreSummaryDTO
     */
    public function setCostsAmount(?float $costsAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($costsAmount) && !(is_float($costsAmount) || is_numeric($costsAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($costsAmount, true), gettype($costsAmount)), __LINE__);
        }
        $this->costsAmount = $costsAmount;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreSummaryDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get revenueAmount value
     * @return float|null
     */
    public function getRevenueAmount(): ?float
    {
        return $this->revenueAmount;
    }
    /**
     * Set revenueAmount value
     * @param float $revenueAmount
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreSummaryDTO
     */
    public function setRevenueAmount(?float $revenueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueAmount) && !(is_float($revenueAmount) || is_numeric($revenueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueAmount, true), gettype($revenueAmount)), __LINE__);
        }
        $this->revenueAmount = $revenueAmount;
        
        return $this;
    }
}
