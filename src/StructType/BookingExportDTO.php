<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingExportDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookingExportDTO extends AbstractStructBase
{
    /**
     * The acknowledgeTime
     * @var string|null
     */
    protected ?string $acknowledgeTime = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The pickupTime
     * @var string|null
     */
    protected ?string $pickupTime = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The systemName
     * @var string|null
     */
    protected ?string $systemName = null;
    /**
     * Constructor method for BookingExportDTO
     * @uses BookingExportDTO::setAcknowledgeTime()
     * @uses BookingExportDTO::setBookingId()
     * @uses BookingExportDTO::setExportId()
     * @uses BookingExportDTO::setItemId()
     * @uses BookingExportDTO::setPickupTime()
     * @uses BookingExportDTO::setSupplierId()
     * @uses BookingExportDTO::setSystemName()
     * @param string $acknowledgeTime
     * @param string $bookingId
     * @param int $exportId
     * @param int $itemId
     * @param string $pickupTime
     * @param string $supplierId
     * @param string $systemName
     */
    public function __construct(?string $acknowledgeTime = null, ?string $bookingId = null, ?int $exportId = null, ?int $itemId = null, ?string $pickupTime = null, ?string $supplierId = null, ?string $systemName = null)
    {
        $this
            ->setAcknowledgeTime($acknowledgeTime)
            ->setBookingId($bookingId)
            ->setExportId($exportId)
            ->setItemId($itemId)
            ->setPickupTime($pickupTime)
            ->setSupplierId($supplierId)
            ->setSystemName($systemName);
    }
    /**
     * Get acknowledgeTime value
     * @return string|null
     */
    public function getAcknowledgeTime(): ?string
    {
        return $this->acknowledgeTime;
    }
    /**
     * Set acknowledgeTime value
     * @param string $acknowledgeTime
     * @return \Pggns\MidocoApi\Order\StructType\BookingExportDTO
     */
    public function setAcknowledgeTime(?string $acknowledgeTime = null): self
    {
        // validation for constraint: string
        if (!is_null($acknowledgeTime) && !is_string($acknowledgeTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acknowledgeTime, true), gettype($acknowledgeTime)), __LINE__);
        }
        $this->acknowledgeTime = $acknowledgeTime;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingExportDTO
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
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\BookingExportDTO
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\BookingExportDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get pickupTime value
     * @return string|null
     */
    public function getPickupTime(): ?string
    {
        return $this->pickupTime;
    }
    /**
     * Set pickupTime value
     * @param string $pickupTime
     * @return \Pggns\MidocoApi\Order\StructType\BookingExportDTO
     */
    public function setPickupTime(?string $pickupTime = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupTime) && !is_string($pickupTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupTime, true), gettype($pickupTime)), __LINE__);
        }
        $this->pickupTime = $pickupTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingExportDTO
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
     * Get systemName value
     * @return string|null
     */
    public function getSystemName(): ?string
    {
        return $this->systemName;
    }
    /**
     * Set systemName value
     * @param string $systemName
     * @return \Pggns\MidocoApi\Order\StructType\BookingExportDTO
     */
    public function setSystemName(?string $systemName = null): self
    {
        // validation for constraint: string
        if (!is_null($systemName) && !is_string($systemName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemName, true), gettype($systemName)), __LINE__);
        }
        $this->systemName = $systemName;
        
        return $this;
    }
}
