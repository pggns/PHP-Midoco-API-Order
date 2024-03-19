<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatahubQueueBookingReferenceDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DatahubQueueBookingReferenceDTO extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for DatahubQueueBookingReferenceDTO
     * @uses DatahubQueueBookingReferenceDTO::setBookingId()
     * @uses DatahubQueueBookingReferenceDTO::setQueueId()
     * @uses DatahubQueueBookingReferenceDTO::setSupplierId()
     * @param string $bookingId
     * @param int $queueId
     * @param string $supplierId
     */
    public function __construct(?string $bookingId = null, ?int $queueId = null, ?string $supplierId = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setQueueId($queueId)
            ->setSupplierId($supplierId);
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
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueBookingReferenceDTO
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
     * Get queueId value
     * @return int|null
     */
    public function getQueueId(): ?int
    {
        return $this->queueId;
    }
    /**
     * Set queueId value
     * @param int $queueId
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueBookingReferenceDTO
     */
    public function setQueueId(?int $queueId = null): self
    {
        // validation for constraint: int
        if (!is_null($queueId) && !(is_int($queueId) || ctype_digit($queueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queueId, true), gettype($queueId)), __LINE__);
        }
        $this->queueId = $queueId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DatahubQueueBookingReferenceDTO
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
}
