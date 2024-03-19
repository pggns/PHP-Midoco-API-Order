<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingPeriodDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookingPeriodDTO extends AbstractStructBase
{
    /**
     * The bookingPeriodClosed
     * @var int|null
     */
    protected ?int $bookingPeriodClosed = null;
    /**
     * The bookingYear
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * The carriedForward
     * @var bool|null
     */
    protected ?bool $carriedForward = null;
    /**
     * Constructor method for BookingPeriodDTO
     * @uses BookingPeriodDTO::setBookingPeriodClosed()
     * @uses BookingPeriodDTO::setBookingYear()
     * @uses BookingPeriodDTO::setCarriedForward()
     * @param int $bookingPeriodClosed
     * @param int $bookingYear
     * @param bool $carriedForward
     */
    public function __construct(?int $bookingPeriodClosed = null, ?int $bookingYear = null, ?bool $carriedForward = null)
    {
        $this
            ->setBookingPeriodClosed($bookingPeriodClosed)
            ->setBookingYear($bookingYear)
            ->setCarriedForward($carriedForward);
    }
    /**
     * Get bookingPeriodClosed value
     * @return int|null
     */
    public function getBookingPeriodClosed(): ?int
    {
        return $this->bookingPeriodClosed;
    }
    /**
     * Set bookingPeriodClosed value
     * @param int $bookingPeriodClosed
     * @return \Pggns\MidocoApi\Order\StructType\BookingPeriodDTO
     */
    public function setBookingPeriodClosed(?int $bookingPeriodClosed = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriodClosed) && !(is_int($bookingPeriodClosed) || ctype_digit($bookingPeriodClosed))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriodClosed, true), gettype($bookingPeriodClosed)), __LINE__);
        }
        $this->bookingPeriodClosed = $bookingPeriodClosed;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingPeriodDTO
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
     * Get carriedForward value
     * @return bool|null
     */
    public function getCarriedForward(): ?bool
    {
        return $this->carriedForward;
    }
    /**
     * Set carriedForward value
     * @param bool $carriedForward
     * @return \Pggns\MidocoApi\Order\StructType\BookingPeriodDTO
     */
    public function setCarriedForward(?bool $carriedForward = null): self
    {
        // validation for constraint: boolean
        if (!is_null($carriedForward) && !is_bool($carriedForward)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($carriedForward, true), gettype($carriedForward)), __LINE__);
        }
        $this->carriedForward = $carriedForward;
        
        return $this;
    }
}
