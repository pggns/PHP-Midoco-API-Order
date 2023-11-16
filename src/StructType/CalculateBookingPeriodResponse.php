<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateBookingPeriodResponse StructType
 * @subpackage Structs
 */
class CalculateBookingPeriodResponse extends AbstractStructBase
{
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
     * The isBookingPeriodClosed
     * @var bool|null
     */
    protected ?bool $isBookingPeriodClosed = null;
    /**
     * Constructor method for CalculateBookingPeriodResponse
     * @uses CalculateBookingPeriodResponse::setBookingPeriod()
     * @uses CalculateBookingPeriodResponse::setBookingYear()
     * @uses CalculateBookingPeriodResponse::setIsBookingPeriodClosed()
     * @param int $bookingPeriod
     * @param int $bookingYear
     * @param bool $isBookingPeriodClosed
     */
    public function __construct(?int $bookingPeriod = null, ?int $bookingYear = null, ?bool $isBookingPeriodClosed = null)
    {
        $this
            ->setBookingPeriod($bookingPeriod)
            ->setBookingYear($bookingYear)
            ->setIsBookingPeriodClosed($isBookingPeriodClosed);
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
     * @return \Pggns\MidocoApi\Order\StructType\CalculateBookingPeriodResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\CalculateBookingPeriodResponse
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
     * Get isBookingPeriodClosed value
     * @return bool|null
     */
    public function getIsBookingPeriodClosed(): ?bool
    {
        return $this->isBookingPeriodClosed;
    }
    /**
     * Set isBookingPeriodClosed value
     * @param bool $isBookingPeriodClosed
     * @return \Pggns\MidocoApi\Order\StructType\CalculateBookingPeriodResponse
     */
    public function setIsBookingPeriodClosed(?bool $isBookingPeriodClosed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBookingPeriodClosed) && !is_bool($isBookingPeriodClosed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBookingPeriodClosed, true), gettype($isBookingPeriodClosed)), __LINE__);
        }
        $this->isBookingPeriodClosed = $isBookingPeriodClosed;
        
        return $this;
    }
}
