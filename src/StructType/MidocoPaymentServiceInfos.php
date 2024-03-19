<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPaymentServiceInfos StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPaymentServiceInfos extends AbstractStructBase
{
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * Constructor method for MidocoPaymentServiceInfos
     * @uses MidocoPaymentServiceInfos::setPosition()
     * @uses MidocoPaymentServiceInfos::setItemType()
     * @uses MidocoPaymentServiceInfos::setSupplierId()
     * @uses MidocoPaymentServiceInfos::setBookingId()
     * @uses MidocoPaymentServiceInfos::setStartTravel()
     * @uses MidocoPaymentServiceInfos::setBookingDate()
     * @param int $position
     * @param string $itemType
     * @param string $supplierId
     * @param string $bookingId
     * @param string $startTravel
     * @param string $bookingDate
     */
    public function __construct(?int $position = null, ?string $itemType = null, ?string $supplierId = null, ?string $bookingId = null, ?string $startTravel = null, ?string $bookingDate = null)
    {
        $this
            ->setPosition($position)
            ->setItemType($itemType)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setStartTravel($startTravel)
            ->setBookingDate($bookingDate);
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos
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
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
}
