<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoYearlyTurnover StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoYearlyTurnover extends AbstractStructBase
{
    /**
     * The year
     * @var int|null
     */
    protected ?int $year = null;
    /**
     * The yearlyTurnover
     * @var float|null
     */
    protected ?float $yearlyTurnover = null;
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
     * Constructor method for MidocoYearlyTurnover
     * @uses MidocoYearlyTurnover::setYear()
     * @uses MidocoYearlyTurnover::setYearlyTurnover()
     * @uses MidocoYearlyTurnover::setStartDate()
     * @uses MidocoYearlyTurnover::setEndDate()
     * @param int $year
     * @param float $yearlyTurnover
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(?int $year = null, ?float $yearlyTurnover = null, ?string $startDate = null, ?string $endDate = null)
    {
        $this
            ->setYear($year)
            ->setYearlyTurnover($yearlyTurnover)
            ->setStartDate($startDate)
            ->setEndDate($endDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoYearlyTurnover
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
    /**
     * Get yearlyTurnover value
     * @return float|null
     */
    public function getYearlyTurnover(): ?float
    {
        return $this->yearlyTurnover;
    }
    /**
     * Set yearlyTurnover value
     * @param float $yearlyTurnover
     * @return \Pggns\MidocoApi\Order\StructType\MidocoYearlyTurnover
     */
    public function setYearlyTurnover(?float $yearlyTurnover = null): self
    {
        // validation for constraint: float
        if (!is_null($yearlyTurnover) && !(is_float($yearlyTurnover) || is_numeric($yearlyTurnover))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($yearlyTurnover, true), gettype($yearlyTurnover)), __LINE__);
        }
        $this->yearlyTurnover = $yearlyTurnover;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoYearlyTurnover
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoYearlyTurnover
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
}
