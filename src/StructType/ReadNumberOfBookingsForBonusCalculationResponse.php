<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadNumberOfBookingsForBonusCalculationResponse StructType
 * @subpackage Structs
 */
class ReadNumberOfBookingsForBonusCalculationResponse extends AbstractStructBase
{
    /**
     * The bookings
     * @var int|null
     */
    protected ?int $bookings = null;
    /**
     * Constructor method for ReadNumberOfBookingsForBonusCalculationResponse
     * @uses ReadNumberOfBookingsForBonusCalculationResponse::setBookings()
     * @param int $bookings
     */
    public function __construct(?int $bookings = null)
    {
        $this
            ->setBookings($bookings);
    }
    /**
     * Get bookings value
     * @return int|null
     */
    public function getBookings(): ?int
    {
        return $this->bookings;
    }
    /**
     * Set bookings value
     * @param int $bookings
     * @return \Pggns\MidocoApi\Order\StructType\ReadNumberOfBookingsForBonusCalculationResponse
     */
    public function setBookings(?int $bookings = null): self
    {
        // validation for constraint: int
        if (!is_null($bookings) && !(is_int($bookings) || ctype_digit($bookings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookings, true), gettype($bookings)), __LINE__);
        }
        $this->bookings = $bookings;
        
        return $this;
    }
}
