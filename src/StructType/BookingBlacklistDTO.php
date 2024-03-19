<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingBlacklistDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookingBlacklistDTO extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingVersion
     * @var string|null
     */
    protected ?string $bookingVersion = null;
    /**
     * The internalBookingId
     * @var string|null
     */
    protected ?string $internalBookingId = null;
    /**
     * The internalId
     * @var int|null
     */
    protected ?int $internalId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * Constructor method for BookingBlacklistDTO
     * @uses BookingBlacklistDTO::setBookingId()
     * @uses BookingBlacklistDTO::setBookingVersion()
     * @uses BookingBlacklistDTO::setInternalBookingId()
     * @uses BookingBlacklistDTO::setInternalId()
     * @uses BookingBlacklistDTO::setSupplierId()
     * @uses BookingBlacklistDTO::setTravelDate()
     * @uses BookingBlacklistDTO::setTraveltype()
     * @param string $bookingId
     * @param string $bookingVersion
     * @param string $internalBookingId
     * @param int $internalId
     * @param string $supplierId
     * @param string $travelDate
     * @param string $traveltype
     */
    public function __construct(?string $bookingId = null, ?string $bookingVersion = null, ?string $internalBookingId = null, ?int $internalId = null, ?string $supplierId = null, ?string $travelDate = null, ?string $traveltype = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setBookingVersion($bookingVersion)
            ->setInternalBookingId($internalBookingId)
            ->setInternalId($internalId)
            ->setSupplierId($supplierId)
            ->setTravelDate($travelDate)
            ->setTraveltype($traveltype);
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingBlacklistDTO
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
     * Get bookingVersion value
     * @return string|null
     */
    public function getBookingVersion(): ?string
    {
        return $this->bookingVersion;
    }
    /**
     * Set bookingVersion value
     * @param string $bookingVersion
     * @return \Pggns\MidocoApi\Order\StructType\BookingBlacklistDTO
     */
    public function setBookingVersion(?string $bookingVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingVersion) && !is_string($bookingVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingVersion, true), gettype($bookingVersion)), __LINE__);
        }
        $this->bookingVersion = $bookingVersion;
        
        return $this;
    }
    /**
     * Get internalBookingId value
     * @return string|null
     */
    public function getInternalBookingId(): ?string
    {
        return $this->internalBookingId;
    }
    /**
     * Set internalBookingId value
     * @param string $internalBookingId
     * @return \Pggns\MidocoApi\Order\StructType\BookingBlacklistDTO
     */
    public function setInternalBookingId(?string $internalBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($internalBookingId) && !is_string($internalBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalBookingId, true), gettype($internalBookingId)), __LINE__);
        }
        $this->internalBookingId = $internalBookingId;
        
        return $this;
    }
    /**
     * Get internalId value
     * @return int|null
     */
    public function getInternalId(): ?int
    {
        return $this->internalId;
    }
    /**
     * Set internalId value
     * @param int $internalId
     * @return \Pggns\MidocoApi\Order\StructType\BookingBlacklistDTO
     */
    public function setInternalId(?int $internalId = null): self
    {
        // validation for constraint: int
        if (!is_null($internalId) && !(is_int($internalId) || ctype_digit($internalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalId, true), gettype($internalId)), __LINE__);
        }
        $this->internalId = $internalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingBlacklistDTO
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
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\BookingBlacklistDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\BookingBlacklistDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
        return $this;
    }
}
