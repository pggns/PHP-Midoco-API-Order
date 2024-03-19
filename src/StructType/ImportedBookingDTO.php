<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportedBookingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportedBookingDTO extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The importTime
     * @var string|null
     */
    protected ?string $importTime = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The updateTime
     * @var string|null
     */
    protected ?string $updateTime = null;
    /**
     * Constructor method for ImportedBookingDTO
     * @uses ImportedBookingDTO::setBookingId()
     * @uses ImportedBookingDTO::setImportTime()
     * @uses ImportedBookingDTO::setSupplierId()
     * @uses ImportedBookingDTO::setUpdateTime()
     * @param string $bookingId
     * @param string $importTime
     * @param string $supplierId
     * @param string $updateTime
     */
    public function __construct(?string $bookingId = null, ?string $importTime = null, ?string $supplierId = null, ?string $updateTime = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setImportTime($importTime)
            ->setSupplierId($supplierId)
            ->setUpdateTime($updateTime);
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportedBookingDTO
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
     * Get importTime value
     * @return string|null
     */
    public function getImportTime(): ?string
    {
        return $this->importTime;
    }
    /**
     * Set importTime value
     * @param string $importTime
     * @return \Pggns\MidocoApi\Order\StructType\ImportedBookingDTO
     */
    public function setImportTime(?string $importTime = null): self
    {
        // validation for constraint: string
        if (!is_null($importTime) && !is_string($importTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importTime, true), gettype($importTime)), __LINE__);
        }
        $this->importTime = $importTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportedBookingDTO
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
     * Get updateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }
    /**
     * Set updateTime value
     * @param string $updateTime
     * @return \Pggns\MidocoApi\Order\StructType\ImportedBookingDTO
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->updateTime = $updateTime;
        
        return $this;
    }
}
