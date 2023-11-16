<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravelNoMarginSaleItem StructType
 * @subpackage Structs
 */
class MidocoTravelNoMarginSaleItem extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
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
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The openInkassoPrice
     * @var float|null
     */
    protected ?float $openInkassoPrice = null;
    /**
     * The diAmount
     * @var float|null
     */
    protected ?float $diAmount = null;
    /**
     * The margin
     * @var float|null
     */
    protected ?float $margin = null;
    /**
     * The paid
     * @var bool|null
     */
    protected ?bool $paid = null;
    /**
     * Constructor method for MidocoTravelNoMarginSaleItem
     * @uses MidocoTravelNoMarginSaleItem::setItemId()
     * @uses MidocoTravelNoMarginSaleItem::setOrderNo()
     * @uses MidocoTravelNoMarginSaleItem::setSupplierId()
     * @uses MidocoTravelNoMarginSaleItem::setBookingId()
     * @uses MidocoTravelNoMarginSaleItem::setStartTravel()
     * @uses MidocoTravelNoMarginSaleItem::setStatus()
     * @uses MidocoTravelNoMarginSaleItem::setInkassoPrice()
     * @uses MidocoTravelNoMarginSaleItem::setOpenInkassoPrice()
     * @uses MidocoTravelNoMarginSaleItem::setDiAmount()
     * @uses MidocoTravelNoMarginSaleItem::setMargin()
     * @uses MidocoTravelNoMarginSaleItem::setPaid()
     * @param int $itemId
     * @param int $orderNo
     * @param string $supplierId
     * @param string $bookingId
     * @param string $startTravel
     * @param string $status
     * @param float $inkassoPrice
     * @param float $openInkassoPrice
     * @param float $diAmount
     * @param float $margin
     * @param bool $paid
     */
    public function __construct(?int $itemId = null, ?int $orderNo = null, ?string $supplierId = null, ?string $bookingId = null, ?string $startTravel = null, ?string $status = null, ?float $inkassoPrice = null, ?float $openInkassoPrice = null, ?float $diAmount = null, ?float $margin = null, ?bool $paid = null)
    {
        $this
            ->setItemId($itemId)
            ->setOrderNo($orderNo)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setStartTravel($startTravel)
            ->setStatus($status)
            ->setInkassoPrice($inkassoPrice)
            ->setOpenInkassoPrice($openInkassoPrice)
            ->setDiAmount($diAmount)
            ->setMargin($margin)
            ->setPaid($paid);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
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
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
        return $this;
    }
    /**
     * Get openInkassoPrice value
     * @return float|null
     */
    public function getOpenInkassoPrice(): ?float
    {
        return $this->openInkassoPrice;
    }
    /**
     * Set openInkassoPrice value
     * @param float $openInkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
     */
    public function setOpenInkassoPrice(?float $openInkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($openInkassoPrice) && !(is_float($openInkassoPrice) || is_numeric($openInkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($openInkassoPrice, true), gettype($openInkassoPrice)), __LINE__);
        }
        $this->openInkassoPrice = $openInkassoPrice;
        
        return $this;
    }
    /**
     * Get diAmount value
     * @return float|null
     */
    public function getDiAmount(): ?float
    {
        return $this->diAmount;
    }
    /**
     * Set diAmount value
     * @param float $diAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
     */
    public function setDiAmount(?float $diAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($diAmount) && !(is_float($diAmount) || is_numeric($diAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($diAmount, true), gettype($diAmount)), __LINE__);
        }
        $this->diAmount = $diAmount;
        
        return $this;
    }
    /**
     * Get margin value
     * @return float|null
     */
    public function getMargin(): ?float
    {
        return $this->margin;
    }
    /**
     * Set margin value
     * @param float $margin
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
     */
    public function setMargin(?float $margin = null): self
    {
        // validation for constraint: float
        if (!is_null($margin) && !(is_float($margin) || is_numeric($margin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($margin, true), gettype($margin)), __LINE__);
        }
        $this->margin = $margin;
        
        return $this;
    }
    /**
     * Get paid value
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }
    /**
     * Set paid value
     * @param bool $paid
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSaleItem
     */
    public function setPaid(?bool $paid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paid) && !is_bool($paid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paid, true), gettype($paid)), __LINE__);
        }
        $this->paid = $paid;
        
        return $this;
    }
}
