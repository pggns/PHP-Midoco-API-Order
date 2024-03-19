<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBookingStatusRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateBookingStatusRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $supplierId;
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $bookingId;
    /**
     * The newStatus
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $newStatus;
    /**
     * The newBookingId
     * @var string|null
     */
    protected ?string $newBookingId = null;
    /**
     * The newReferenceBookingId
     * @var string|null
     */
    protected ?string $newReferenceBookingId = null;
    /**
     * Constructor method for UpdateBookingStatusRequest
     * @uses UpdateBookingStatusRequest::setSupplierId()
     * @uses UpdateBookingStatusRequest::setBookingId()
     * @uses UpdateBookingStatusRequest::setNewStatus()
     * @uses UpdateBookingStatusRequest::setNewBookingId()
     * @uses UpdateBookingStatusRequest::setNewReferenceBookingId()
     * @param string $supplierId
     * @param string $bookingId
     * @param string $newStatus
     * @param string $newBookingId
     * @param string $newReferenceBookingId
     */
    public function __construct(string $supplierId, string $bookingId, string $newStatus, ?string $newBookingId = null, ?string $newReferenceBookingId = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setNewStatus($newStatus)
            ->setNewBookingId($newBookingId)
            ->setNewReferenceBookingId($newReferenceBookingId);
    }
    /**
     * Get supplierId value
     * @return string
     */
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusRequest
     */
    public function setSupplierId(string $supplierId): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string
     */
    public function getBookingId(): string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusRequest
     */
    public function setBookingId(string $bookingId): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get newStatus value
     * @return string
     */
    public function getNewStatus(): string
    {
        return $this->newStatus;
    }
    /**
     * Set newStatus value
     * @param string $newStatus
     * @return \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusRequest
     */
    public function setNewStatus(string $newStatus): self
    {
        // validation for constraint: string
        if (!is_null($newStatus) && !is_string($newStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newStatus, true), gettype($newStatus)), __LINE__);
        }
        $this->newStatus = $newStatus;
        
        return $this;
    }
    /**
     * Get newBookingId value
     * @return string|null
     */
    public function getNewBookingId(): ?string
    {
        return $this->newBookingId;
    }
    /**
     * Set newBookingId value
     * @param string $newBookingId
     * @return \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusRequest
     */
    public function setNewBookingId(?string $newBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($newBookingId) && !is_string($newBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newBookingId, true), gettype($newBookingId)), __LINE__);
        }
        $this->newBookingId = $newBookingId;
        
        return $this;
    }
    /**
     * Get newReferenceBookingId value
     * @return string|null
     */
    public function getNewReferenceBookingId(): ?string
    {
        return $this->newReferenceBookingId;
    }
    /**
     * Set newReferenceBookingId value
     * @param string $newReferenceBookingId
     * @return \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusRequest
     */
    public function setNewReferenceBookingId(?string $newReferenceBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($newReferenceBookingId) && !is_string($newReferenceBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newReferenceBookingId, true), gettype($newReferenceBookingId)), __LINE__);
        }
        $this->newReferenceBookingId = $newReferenceBookingId;
        
        return $this;
    }
}
