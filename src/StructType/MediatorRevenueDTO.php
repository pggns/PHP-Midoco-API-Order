<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorRevenueDTO StructType
 * @subpackage Structs
 */
class MediatorRevenueDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The mediatorRevenueId
     * @var int|null
     */
    protected ?int $mediatorRevenueId = null;
    /**
     * The month
     * @var int|null
     */
    protected ?int $month = null;
    /**
     * The pax
     * @var int|null
     */
    protected ?int $pax = null;
    /**
     * The paxLastYear
     * @var int|null
     */
    protected ?int $paxLastYear = null;
    /**
     * The paxLastYearEnd
     * @var int|null
     */
    protected ?int $paxLastYearEnd = null;
    /**
     * The revenue
     * @var float|null
     */
    protected ?float $revenue = null;
    /**
     * The revenueLastYear
     * @var float|null
     */
    protected ?float $revenueLastYear = null;
    /**
     * The revenueLastYearEnd
     * @var float|null
     */
    protected ?float $revenueLastYearEnd = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The year
     * @var int|null
     */
    protected ?int $year = null;
    /**
     * Constructor method for MediatorRevenueDTO
     * @uses MediatorRevenueDTO::setAgencyId()
     * @uses MediatorRevenueDTO::setCustomerId()
     * @uses MediatorRevenueDTO::setMediatorRevenueId()
     * @uses MediatorRevenueDTO::setMonth()
     * @uses MediatorRevenueDTO::setPax()
     * @uses MediatorRevenueDTO::setPaxLastYear()
     * @uses MediatorRevenueDTO::setPaxLastYearEnd()
     * @uses MediatorRevenueDTO::setRevenue()
     * @uses MediatorRevenueDTO::setRevenueLastYear()
     * @uses MediatorRevenueDTO::setRevenueLastYearEnd()
     * @uses MediatorRevenueDTO::setSupplierId()
     * @uses MediatorRevenueDTO::setYear()
     * @param string $agencyId
     * @param int $customerId
     * @param int $mediatorRevenueId
     * @param int $month
     * @param int $pax
     * @param int $paxLastYear
     * @param int $paxLastYearEnd
     * @param float $revenue
     * @param float $revenueLastYear
     * @param float $revenueLastYearEnd
     * @param string $supplierId
     * @param int $year
     */
    public function __construct(?string $agencyId = null, ?int $customerId = null, ?int $mediatorRevenueId = null, ?int $month = null, ?int $pax = null, ?int $paxLastYear = null, ?int $paxLastYearEnd = null, ?float $revenue = null, ?float $revenueLastYear = null, ?float $revenueLastYearEnd = null, ?string $supplierId = null, ?int $year = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setCustomerId($customerId)
            ->setMediatorRevenueId($mediatorRevenueId)
            ->setMonth($month)
            ->setPax($pax)
            ->setPaxLastYear($paxLastYear)
            ->setPaxLastYearEnd($paxLastYearEnd)
            ->setRevenue($revenue)
            ->setRevenueLastYear($revenueLastYear)
            ->setRevenueLastYearEnd($revenueLastYearEnd)
            ->setSupplierId($supplierId)
            ->setYear($year);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
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
     * Get mediatorRevenueId value
     * @return int|null
     */
    public function getMediatorRevenueId(): ?int
    {
        return $this->mediatorRevenueId;
    }
    /**
     * Set mediatorRevenueId value
     * @param int $mediatorRevenueId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setMediatorRevenueId(?int $mediatorRevenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorRevenueId) && !(is_int($mediatorRevenueId) || ctype_digit($mediatorRevenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorRevenueId, true), gettype($mediatorRevenueId)), __LINE__);
        }
        $this->mediatorRevenueId = $mediatorRevenueId;
        
        return $this;
    }
    /**
     * Get month value
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setMonth(?int $month = null): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get pax value
     * @return int|null
     */
    public function getPax(): ?int
    {
        return $this->pax;
    }
    /**
     * Set pax value
     * @param int $pax
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setPax(?int $pax = null): self
    {
        // validation for constraint: int
        if (!is_null($pax) && !(is_int($pax) || ctype_digit($pax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pax, true), gettype($pax)), __LINE__);
        }
        $this->pax = $pax;
        
        return $this;
    }
    /**
     * Get paxLastYear value
     * @return int|null
     */
    public function getPaxLastYear(): ?int
    {
        return $this->paxLastYear;
    }
    /**
     * Set paxLastYear value
     * @param int $paxLastYear
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setPaxLastYear(?int $paxLastYear = null): self
    {
        // validation for constraint: int
        if (!is_null($paxLastYear) && !(is_int($paxLastYear) || ctype_digit($paxLastYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxLastYear, true), gettype($paxLastYear)), __LINE__);
        }
        $this->paxLastYear = $paxLastYear;
        
        return $this;
    }
    /**
     * Get paxLastYearEnd value
     * @return int|null
     */
    public function getPaxLastYearEnd(): ?int
    {
        return $this->paxLastYearEnd;
    }
    /**
     * Set paxLastYearEnd value
     * @param int $paxLastYearEnd
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setPaxLastYearEnd(?int $paxLastYearEnd = null): self
    {
        // validation for constraint: int
        if (!is_null($paxLastYearEnd) && !(is_int($paxLastYearEnd) || ctype_digit($paxLastYearEnd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxLastYearEnd, true), gettype($paxLastYearEnd)), __LINE__);
        }
        $this->paxLastYearEnd = $paxLastYearEnd;
        
        return $this;
    }
    /**
     * Get revenue value
     * @return float|null
     */
    public function getRevenue(): ?float
    {
        return $this->revenue;
    }
    /**
     * Set revenue value
     * @param float $revenue
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setRevenue(?float $revenue = null): self
    {
        // validation for constraint: float
        if (!is_null($revenue) && !(is_float($revenue) || is_numeric($revenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenue, true), gettype($revenue)), __LINE__);
        }
        $this->revenue = $revenue;
        
        return $this;
    }
    /**
     * Get revenueLastYear value
     * @return float|null
     */
    public function getRevenueLastYear(): ?float
    {
        return $this->revenueLastYear;
    }
    /**
     * Set revenueLastYear value
     * @param float $revenueLastYear
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setRevenueLastYear(?float $revenueLastYear = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueLastYear) && !(is_float($revenueLastYear) || is_numeric($revenueLastYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueLastYear, true), gettype($revenueLastYear)), __LINE__);
        }
        $this->revenueLastYear = $revenueLastYear;
        
        return $this;
    }
    /**
     * Get revenueLastYearEnd value
     * @return float|null
     */
    public function getRevenueLastYearEnd(): ?float
    {
        return $this->revenueLastYearEnd;
    }
    /**
     * Set revenueLastYearEnd value
     * @param float $revenueLastYearEnd
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setRevenueLastYearEnd(?float $revenueLastYearEnd = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueLastYearEnd) && !(is_float($revenueLastYearEnd) || is_numeric($revenueLastYearEnd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueLastYearEnd, true), gettype($revenueLastYearEnd)), __LINE__);
        }
        $this->revenueLastYearEnd = $revenueLastYearEnd;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \Pggns\MidocoApi\Order\StructType\MediatorRevenueDTO
     */
    public function setYear(?int $year = null): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
        return $this;
    }
}
