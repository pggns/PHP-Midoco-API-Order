<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuppCancelCEmailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SuppCancelCEmailDTO extends AbstractStructBase
{
    /**
     * The bookingType
     * @var string|null
     */
    protected ?string $bookingType = null;
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
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * Constructor method for SuppCancelCEmailDTO
     * @uses SuppCancelCEmailDTO::setBookingType()
     * @uses SuppCancelCEmailDTO::setDestination()
     * @uses SuppCancelCEmailDTO::setEmail()
     * @uses SuppCancelCEmailDTO::setSuppCancelCEmailId()
     * @uses SuppCancelCEmailDTO::setSupplierId()
     * @uses SuppCancelCEmailDTO::setTravelType()
     * @param string $bookingType
     * @param string $destination
     * @param string $email
     * @param int $suppCancelCEmailId
     * @param string $supplierId
     * @param string $travelType
     */
    public function __construct(?string $bookingType = null, ?string $destination = null, ?string $email = null, ?int $suppCancelCEmailId = null, ?string $supplierId = null, ?string $travelType = null)
    {
        $this
            ->setBookingType($bookingType)
            ->setDestination($destination)
            ->setEmail($email)
            ->setSuppCancelCEmailId($suppCancelCEmailId)
            ->setSupplierId($supplierId)
            ->setTravelType($travelType);
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppCancelCEmailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppCancelCEmailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppCancelCEmailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppCancelCEmailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppCancelCEmailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppCancelCEmailDTO
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
}
