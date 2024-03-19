<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMarginBuyItem StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMarginBuyItem extends AbstractStructBase
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
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The expectedBuyAmount
     * @var float|null
     */
    protected ?float $expectedBuyAmount = null;
    /**
     * The revenueBookingAmount
     * @var float|null
     */
    protected ?float $revenueBookingAmount = null;
    /**
     * The marginAmount
     * @var float|null
     */
    protected ?float $marginAmount = null;
    /**
     * The colorStatus
     * @var int|null
     */
    protected ?int $colorStatus = null;
    /**
     * The openSupplierInvoiceAmount
     * @var float|null
     */
    protected ?float $openSupplierInvoiceAmount = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * Constructor method for MidocoMarginBuyItem
     * @uses MidocoMarginBuyItem::setItemId()
     * @uses MidocoMarginBuyItem::setOrderNo()
     * @uses MidocoMarginBuyItem::setSupplierId()
     * @uses MidocoMarginBuyItem::setBookingId()
     * @uses MidocoMarginBuyItem::setStartTravel()
     * @uses MidocoMarginBuyItem::setStatus()
     * @uses MidocoMarginBuyItem::setItemPrice()
     * @uses MidocoMarginBuyItem::setIsDeposit()
     * @uses MidocoMarginBuyItem::setCommissionAmount()
     * @uses MidocoMarginBuyItem::setExpectedBuyAmount()
     * @uses MidocoMarginBuyItem::setRevenueBookingAmount()
     * @uses MidocoMarginBuyItem::setMarginAmount()
     * @uses MidocoMarginBuyItem::setColorStatus()
     * @uses MidocoMarginBuyItem::setOpenSupplierInvoiceAmount()
     * @uses MidocoMarginBuyItem::setSettlementType()
     * @param int $itemId
     * @param int $orderNo
     * @param string $supplierId
     * @param string $bookingId
     * @param string $startTravel
     * @param string $status
     * @param float $itemPrice
     * @param bool $isDeposit
     * @param float $commissionAmount
     * @param float $expectedBuyAmount
     * @param float $revenueBookingAmount
     * @param float $marginAmount
     * @param int $colorStatus
     * @param float $openSupplierInvoiceAmount
     * @param string $settlementType
     */
    public function __construct(?int $itemId = null, ?int $orderNo = null, ?string $supplierId = null, ?string $bookingId = null, ?string $startTravel = null, ?string $status = null, ?float $itemPrice = null, ?bool $isDeposit = null, ?float $commissionAmount = null, ?float $expectedBuyAmount = null, ?float $revenueBookingAmount = null, ?float $marginAmount = null, ?int $colorStatus = null, ?float $openSupplierInvoiceAmount = null, ?string $settlementType = null)
    {
        $this
            ->setItemId($itemId)
            ->setOrderNo($orderNo)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setStartTravel($startTravel)
            ->setStatus($status)
            ->setItemPrice($itemPrice)
            ->setIsDeposit($isDeposit)
            ->setCommissionAmount($commissionAmount)
            ->setExpectedBuyAmount($expectedBuyAmount)
            ->setRevenueBookingAmount($revenueBookingAmount)
            ->setMarginAmount($marginAmount)
            ->setColorStatus($colorStatus)
            ->setOpenSupplierInvoiceAmount($openSupplierInvoiceAmount)
            ->setSettlementType($settlementType);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
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
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
     */
    public function setIsDeposit(?bool $isDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get expectedBuyAmount value
     * @return float|null
     */
    public function getExpectedBuyAmount(): ?float
    {
        return $this->expectedBuyAmount;
    }
    /**
     * Set expectedBuyAmount value
     * @param float $expectedBuyAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
     */
    public function setExpectedBuyAmount(?float $expectedBuyAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($expectedBuyAmount) && !(is_float($expectedBuyAmount) || is_numeric($expectedBuyAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($expectedBuyAmount, true), gettype($expectedBuyAmount)), __LINE__);
        }
        $this->expectedBuyAmount = $expectedBuyAmount;
        
        return $this;
    }
    /**
     * Get revenueBookingAmount value
     * @return float|null
     */
    public function getRevenueBookingAmount(): ?float
    {
        return $this->revenueBookingAmount;
    }
    /**
     * Set revenueBookingAmount value
     * @param float $revenueBookingAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
     */
    public function setRevenueBookingAmount(?float $revenueBookingAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueBookingAmount) && !(is_float($revenueBookingAmount) || is_numeric($revenueBookingAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueBookingAmount, true), gettype($revenueBookingAmount)), __LINE__);
        }
        $this->revenueBookingAmount = $revenueBookingAmount;
        
        return $this;
    }
    /**
     * Get marginAmount value
     * @return float|null
     */
    public function getMarginAmount(): ?float
    {
        return $this->marginAmount;
    }
    /**
     * Set marginAmount value
     * @param float $marginAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
     */
    public function setMarginAmount(?float $marginAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($marginAmount) && !(is_float($marginAmount) || is_numeric($marginAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginAmount, true), gettype($marginAmount)), __LINE__);
        }
        $this->marginAmount = $marginAmount;
        
        return $this;
    }
    /**
     * Get colorStatus value
     * @return int|null
     */
    public function getColorStatus(): ?int
    {
        return $this->colorStatus;
    }
    /**
     * Set colorStatus value
     * @param int $colorStatus
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
     */
    public function setColorStatus(?int $colorStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($colorStatus) && !(is_int($colorStatus) || ctype_digit($colorStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($colorStatus, true), gettype($colorStatus)), __LINE__);
        }
        $this->colorStatus = $colorStatus;
        
        return $this;
    }
    /**
     * Get openSupplierInvoiceAmount value
     * @return float|null
     */
    public function getOpenSupplierInvoiceAmount(): ?float
    {
        return $this->openSupplierInvoiceAmount;
    }
    /**
     * Set openSupplierInvoiceAmount value
     * @param float $openSupplierInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
     */
    public function setOpenSupplierInvoiceAmount(?float $openSupplierInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($openSupplierInvoiceAmount) && !(is_float($openSupplierInvoiceAmount) || is_numeric($openSupplierInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($openSupplierInvoiceAmount, true), gettype($openSupplierInvoiceAmount)), __LINE__);
        }
        $this->openSupplierInvoiceAmount = $openSupplierInvoiceAmount;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarginBuyItem
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
}
