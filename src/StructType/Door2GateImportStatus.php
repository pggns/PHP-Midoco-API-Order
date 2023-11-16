<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Door2GateImportStatus StructType
 * @subpackage Structs
 */
class Door2GateImportStatus extends ImportHandlerResponseType
{
    /**
     * The resellerUnitName
     * @var string|null
     */
    protected ?string $resellerUnitName = null;
    /**
     * The resellerUnitOrderId
     * @var string|null
     */
    protected ?string $resellerUnitOrderId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * Constructor method for Door2GateImportStatus
     * @uses Door2GateImportStatus::setResellerUnitName()
     * @uses Door2GateImportStatus::setResellerUnitOrderId()
     * @uses Door2GateImportStatus::setBookingId()
     * @param string $resellerUnitName
     * @param string $resellerUnitOrderId
     * @param string $bookingId
     */
    public function __construct(?string $resellerUnitName = null, ?string $resellerUnitOrderId = null, ?string $bookingId = null)
    {
        $this
            ->setResellerUnitName($resellerUnitName)
            ->setResellerUnitOrderId($resellerUnitOrderId)
            ->setBookingId($bookingId);
    }
    /**
     * Get resellerUnitName value
     * @return string|null
     */
    public function getResellerUnitName(): ?string
    {
        return $this->resellerUnitName;
    }
    /**
     * Set resellerUnitName value
     * @param string $resellerUnitName
     * @return \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus
     */
    public function setResellerUnitName(?string $resellerUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($resellerUnitName) && !is_string($resellerUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resellerUnitName, true), gettype($resellerUnitName)), __LINE__);
        }
        $this->resellerUnitName = $resellerUnitName;
        
        return $this;
    }
    /**
     * Get resellerUnitOrderId value
     * @return string|null
     */
    public function getResellerUnitOrderId(): ?string
    {
        return $this->resellerUnitOrderId;
    }
    /**
     * Set resellerUnitOrderId value
     * @param string $resellerUnitOrderId
     * @return \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus
     */
    public function setResellerUnitOrderId(?string $resellerUnitOrderId = null): self
    {
        // validation for constraint: string
        if (!is_null($resellerUnitOrderId) && !is_string($resellerUnitOrderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resellerUnitOrderId, true), gettype($resellerUnitOrderId)), __LINE__);
        }
        $this->resellerUnitOrderId = $resellerUnitOrderId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Door2GateImportStatus
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
}
