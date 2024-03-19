<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPreparedRevenueBooking StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPreparedRevenueBooking extends PreparedRevenueBookingDTO
{
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * The bookingSource
     * @var string|null
     */
    protected ?string $bookingSource = null;
    /**
     * The inkassoMode
     * @var string|null
     */
    protected ?string $inkassoMode = null;
    /**
     * The isVoided
     * @var bool|null
     */
    protected ?bool $isVoided = null;
    /**
     * The skipBooking
     * @var bool|null
     */
    protected ?bool $skipBooking = null;
    /**
     * Constructor method for MidocoPreparedRevenueBooking
     * @uses MidocoPreparedRevenueBooking::setBooked()
     * @uses MidocoPreparedRevenueBooking::setBookingSource()
     * @uses MidocoPreparedRevenueBooking::setInkassoMode()
     * @uses MidocoPreparedRevenueBooking::setIsVoided()
     * @uses MidocoPreparedRevenueBooking::setSkipBooking()
     * @param bool $booked
     * @param string $bookingSource
     * @param string $inkassoMode
     * @param bool $isVoided
     * @param bool $skipBooking
     */
    public function __construct(?bool $booked = null, ?string $bookingSource = null, ?string $inkassoMode = null, ?bool $isVoided = null, ?bool $skipBooking = null)
    {
        $this
            ->setBooked($booked)
            ->setBookingSource($bookingSource)
            ->setInkassoMode($inkassoMode)
            ->setIsVoided($isVoided)
            ->setSkipBooking($skipBooking);
    }
    /**
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
        return $this;
    }
    /**
     * Get bookingSource value
     * @return string|null
     */
    public function getBookingSource(): ?string
    {
        return $this->bookingSource;
    }
    /**
     * Set bookingSource value
     * @param string $bookingSource
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking
     */
    public function setBookingSource(?string $bookingSource = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingSource) && !is_string($bookingSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingSource, true), gettype($bookingSource)), __LINE__);
        }
        $this->bookingSource = $bookingSource;
        
        return $this;
    }
    /**
     * Get inkassoMode value
     * @return string|null
     */
    public function getInkassoMode(): ?string
    {
        return $this->inkassoMode;
    }
    /**
     * Set inkassoMode value
     * @param string $inkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking
     */
    public function setInkassoMode(?string $inkassoMode = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoMode) && !is_string($inkassoMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoMode, true), gettype($inkassoMode)), __LINE__);
        }
        $this->inkassoMode = $inkassoMode;
        
        return $this;
    }
    /**
     * Get isVoided value
     * @return bool|null
     */
    public function getIsVoided(): ?bool
    {
        return $this->isVoided;
    }
    /**
     * Set isVoided value
     * @param bool $isVoided
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking
     */
    public function setIsVoided(?bool $isVoided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoided) && !is_bool($isVoided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoided, true), gettype($isVoided)), __LINE__);
        }
        $this->isVoided = $isVoided;
        
        return $this;
    }
    /**
     * Get skipBooking value
     * @return bool|null
     */
    public function getSkipBooking(): ?bool
    {
        return $this->skipBooking;
    }
    /**
     * Set skipBooking value
     * @param bool $skipBooking
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking
     */
    public function setSkipBooking(?bool $skipBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($skipBooking) && !is_bool($skipBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skipBooking, true), gettype($skipBooking)), __LINE__);
        }
        $this->skipBooking = $skipBooking;
        
        return $this;
    }
}
