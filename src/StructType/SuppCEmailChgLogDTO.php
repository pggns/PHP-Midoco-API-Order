<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuppCEmailChgLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SuppCEmailChgLogDTO extends AbstractStructBase
{
    /**
     * The bookingType
     * @var string|null
     */
    protected ?string $bookingType = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The suppCancelCEmailId
     * @var int|null
     */
    protected ?int $suppCancelCEmailId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for SuppCEmailChgLogDTO
     * @uses SuppCEmailChgLogDTO::setBookingType()
     * @uses SuppCEmailChgLogDTO::setChangeId()
     * @uses SuppCEmailChgLogDTO::setDestination()
     * @uses SuppCEmailChgLogDTO::setEmail()
     * @uses SuppCEmailChgLogDTO::setSuppCancelCEmailId()
     * @uses SuppCEmailChgLogDTO::setSupplierId()
     * @uses SuppCEmailChgLogDTO::setTimestamp()
     * @uses SuppCEmailChgLogDTO::setTravelType()
     * @uses SuppCEmailChgLogDTO::setUserId()
     * @param string $bookingType
     * @param int $changeId
     * @param string $destination
     * @param string $email
     * @param int $suppCancelCEmailId
     * @param string $supplierId
     * @param string $timestamp
     * @param string $travelType
     * @param int $userId
     */
    public function __construct(?string $bookingType = null, ?int $changeId = null, ?string $destination = null, ?string $email = null, ?int $suppCancelCEmailId = null, ?string $supplierId = null, ?string $timestamp = null, ?string $travelType = null, ?int $userId = null)
    {
        $this
            ->setBookingType($bookingType)
            ->setChangeId($changeId)
            ->setDestination($destination)
            ->setEmail($email)
            ->setSuppCancelCEmailId($suppCancelCEmailId)
            ->setSupplierId($supplierId)
            ->setTimestamp($timestamp)
            ->setTravelType($travelType)
            ->setUserId($userId);
    }
    /**
     * Get bookingType value
     * @return string|null
     */
    public function getBookingType(): ?string
    {
        return $this->bookingType;
    }
    /**
     * Set bookingType value
     * @param string $bookingType
     * @return \Pggns\MidocoApi\Order\StructType\SuppCEmailChgLogDTO
     */
    public function setBookingType(?string $bookingType = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingType) && !is_string($bookingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingType, true), gettype($bookingType)), __LINE__);
        }
        $this->bookingType = $bookingType;
        
        return $this;
    }
    /**
     * Get changeId value
     * @return int|null
     */
    public function getChangeId(): ?int
    {
        return $this->changeId;
    }
    /**
     * Set changeId value
     * @param int $changeId
     * @return \Pggns\MidocoApi\Order\StructType\SuppCEmailChgLogDTO
     */
    public function setChangeId(?int $changeId = null): self
    {
        // validation for constraint: int
        if (!is_null($changeId) && !(is_int($changeId) || ctype_digit($changeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeId, true), gettype($changeId)), __LINE__);
        }
        $this->changeId = $changeId;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\SuppCEmailChgLogDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\SuppCEmailChgLogDTO
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get suppCancelCEmailId value
     * @return int|null
     */
    public function getSuppCancelCEmailId(): ?int
    {
        return $this->suppCancelCEmailId;
    }
    /**
     * Set suppCancelCEmailId value
     * @param int $suppCancelCEmailId
     * @return \Pggns\MidocoApi\Order\StructType\SuppCEmailChgLogDTO
     */
    public function setSuppCancelCEmailId(?int $suppCancelCEmailId = null): self
    {
        // validation for constraint: int
        if (!is_null($suppCancelCEmailId) && !(is_int($suppCancelCEmailId) || ctype_digit($suppCancelCEmailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suppCancelCEmailId, true), gettype($suppCancelCEmailId)), __LINE__);
        }
        $this->suppCancelCEmailId = $suppCancelCEmailId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppCEmailChgLogDTO
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
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\SuppCEmailChgLogDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\SuppCEmailChgLogDTO
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\SuppCEmailChgLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
