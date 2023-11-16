<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFairplaneStatus StructType
 * @subpackage Structs
 */
class MidocoFairplaneStatus extends FairplaneStatusDTO
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The segmentNo
     * @var int|null
     */
    protected ?int $segmentNo = null;
    /**
     * The delay
     * @var string|null
     */
    protected ?string $delay = null;
    /**
     * The flightCanceled
     * @var bool|null
     */
    protected ?bool $flightCanceled = null;
    /**
     * The estimatedCompensation
     * @var string|null
     */
    protected ?string $estimatedCompensation = null;
    /**
     * The fairplaneLink
     * @var string|null
     */
    protected ?string $fairplaneLink = null;
    /**
     * Constructor method for MidocoFairplaneStatus
     * @uses MidocoFairplaneStatus::setBookingId()
     * @uses MidocoFairplaneStatus::setSegmentNo()
     * @uses MidocoFairplaneStatus::setDelay()
     * @uses MidocoFairplaneStatus::setFlightCanceled()
     * @uses MidocoFairplaneStatus::setEstimatedCompensation()
     * @uses MidocoFairplaneStatus::setFairplaneLink()
     * @param string $bookingId
     * @param int $segmentNo
     * @param string $delay
     * @param bool $flightCanceled
     * @param string $estimatedCompensation
     * @param string $fairplaneLink
     */
    public function __construct(?string $bookingId = null, ?int $segmentNo = null, ?string $delay = null, ?bool $flightCanceled = null, ?string $estimatedCompensation = null, ?string $fairplaneLink = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setSegmentNo($segmentNo)
            ->setDelay($delay)
            ->setFlightCanceled($flightCanceled)
            ->setEstimatedCompensation($estimatedCompensation)
            ->setFairplaneLink($fairplaneLink);
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get segmentNo value
     * @return int|null
     */
    public function getSegmentNo(): ?int
    {
        return $this->segmentNo;
    }
    /**
     * Set segmentNo value
     * @param int $segmentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus
     */
    public function setSegmentNo(?int $segmentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentNo) && !(is_int($segmentNo) || ctype_digit($segmentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentNo, true), gettype($segmentNo)), __LINE__);
        }
        $this->segmentNo = $segmentNo;
        
        return $this;
    }
    /**
     * Get delay value
     * @return string|null
     */
    public function getDelay(): ?string
    {
        return $this->delay;
    }
    /**
     * Set delay value
     * @param string $delay
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus
     */
    public function setDelay(?string $delay = null): self
    {
        // validation for constraint: string
        if (!is_null($delay) && !is_string($delay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delay, true), gettype($delay)), __LINE__);
        }
        $this->delay = $delay;
        
        return $this;
    }
    /**
     * Get flightCanceled value
     * @return bool|null
     */
    public function getFlightCanceled(): ?bool
    {
        return $this->flightCanceled;
    }
    /**
     * Set flightCanceled value
     * @param bool $flightCanceled
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus
     */
    public function setFlightCanceled(?bool $flightCanceled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flightCanceled) && !is_bool($flightCanceled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flightCanceled, true), gettype($flightCanceled)), __LINE__);
        }
        $this->flightCanceled = $flightCanceled;
        
        return $this;
    }
    /**
     * Get estimatedCompensation value
     * @return string|null
     */
    public function getEstimatedCompensation(): ?string
    {
        return $this->estimatedCompensation;
    }
    /**
     * Set estimatedCompensation value
     * @param string $estimatedCompensation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus
     */
    public function setEstimatedCompensation(?string $estimatedCompensation = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedCompensation) && !is_string($estimatedCompensation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedCompensation, true), gettype($estimatedCompensation)), __LINE__);
        }
        $this->estimatedCompensation = $estimatedCompensation;
        
        return $this;
    }
    /**
     * Get fairplaneLink value
     * @return string|null
     */
    public function getFairplaneLink(): ?string
    {
        return $this->fairplaneLink;
    }
    /**
     * Set fairplaneLink value
     * @param string $fairplaneLink
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus
     */
    public function setFairplaneLink(?string $fairplaneLink = null): self
    {
        // validation for constraint: string
        if (!is_null($fairplaneLink) && !is_string($fairplaneLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fairplaneLink, true), gettype($fairplaneLink)), __LINE__);
        }
        $this->fairplaneLink = $fairplaneLink;
        
        return $this;
    }
}
