<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravelnoPurchaseAssignment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTravelnoPurchaseAssignment extends TravelnoPurchaseAssignmentDTO
{
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
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The travelerName
     * @var string|null
     */
    protected ?string $travelerName = null;
    /**
     * The selected
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The orderTotalPrice
     * @var float|null
     */
    protected ?float $orderTotalPrice = null;
    /**
     * Constructor method for MidocoTravelnoPurchaseAssignment
     * @uses MidocoTravelnoPurchaseAssignment::setSupplierId()
     * @uses MidocoTravelnoPurchaseAssignment::setBookingId()
     * @uses MidocoTravelnoPurchaseAssignment::setOrderNo()
     * @uses MidocoTravelnoPurchaseAssignment::setTravelerName()
     * @uses MidocoTravelnoPurchaseAssignment::setSelected()
     * @uses MidocoTravelnoPurchaseAssignment::setItemPrice()
     * @uses MidocoTravelnoPurchaseAssignment::setStatus()
     * @uses MidocoTravelnoPurchaseAssignment::setOrderTotalPrice()
     * @param string $supplierId
     * @param string $bookingId
     * @param int $orderNo
     * @param string $travelerName
     * @param bool $selected
     * @param float $itemPrice
     * @param string $status
     * @param float $orderTotalPrice
     */
    public function __construct(?string $supplierId = null, ?string $bookingId = null, ?int $orderNo = null, ?string $travelerName = null, ?bool $selected = null, ?float $itemPrice = null, ?string $status = null, ?float $orderTotalPrice = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setOrderNo($orderNo)
            ->setTravelerName($travelerName)
            ->setSelected($selected)
            ->setItemPrice($itemPrice)
            ->setStatus($status)
            ->setOrderTotalPrice($orderTotalPrice);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment
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
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get travelerName value
     * @return string|null
     */
    public function getTravelerName(): ?string
    {
        return $this->travelerName;
    }
    /**
     * Set travelerName value
     * @param string $travelerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment
     */
    public function setTravelerName(?string $travelerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travelerName) && !is_string($travelerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerName, true), gettype($travelerName)), __LINE__);
        }
        $this->travelerName = $travelerName;
        
        return $this;
    }
    /**
     * Get selected value
     * @return bool|null
     */
    public function getSelected(): ?bool
    {
        return $this->selected;
    }
    /**
     * Set selected value
     * @param bool $selected
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment
     */
    public function setSelected(?bool $selected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->selected = $selected;
        
        return $this;
    }
    /**
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get orderTotalPrice value
     * @return float|null
     */
    public function getOrderTotalPrice(): ?float
    {
        return $this->orderTotalPrice;
    }
    /**
     * Set orderTotalPrice value
     * @param float $orderTotalPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment
     */
    public function setOrderTotalPrice(?float $orderTotalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($orderTotalPrice) && !(is_float($orderTotalPrice) || is_numeric($orderTotalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($orderTotalPrice, true), gettype($orderTotalPrice)), __LINE__);
        }
        $this->orderTotalPrice = $orderTotalPrice;
        
        return $this;
    }
}
