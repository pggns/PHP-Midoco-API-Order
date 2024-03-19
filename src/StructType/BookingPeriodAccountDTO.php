<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingPeriodAccountDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookingPeriodAccountDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
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
     * Constructor method for BookingPeriodAccountDTO
     * @uses BookingPeriodAccountDTO::setAccountId()
     * @uses BookingPeriodAccountDTO::setBookingPeriodClosed()
     * @uses BookingPeriodAccountDTO::setBookingYear()
     * @uses BookingPeriodAccountDTO::setCarriedForward()
     * @param string $accountId
     * @param int $bookingPeriodClosed
     * @param int $bookingYear
     * @param bool $carriedForward
     */
    public function __construct(?string $accountId = null, ?int $bookingPeriodClosed = null, ?int $bookingYear = null, ?bool $carriedForward = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBookingPeriodClosed($bookingPeriodClosed)
            ->setBookingYear($bookingYear)
            ->setCarriedForward($carriedForward);
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO
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
