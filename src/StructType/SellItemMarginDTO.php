<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemMarginDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellItemMarginDTO extends AbstractStructBase
{
    /**
     * The bookedMargin
     * @var float|null
     */
    protected ?float $bookedMargin = null;
    /**
     * The bookedMarginVat
     * @var float|null
     */
    protected ?float $bookedMarginVat = null;
    /**
     * The buyPrice
     * @var float|null
     */
    protected ?float $buyPrice = null;
    /**
     * The buyPriceNet
     * @var float|null
     */
    protected ?float $buyPriceNet = null;
    /**
     * The calculatedMargin
     * @var float|null
     */
    protected ?float $calculatedMargin = null;
    /**
     * The calculatedMarginVat
     * @var float|null
     */
    protected ?float $calculatedMarginVat = null;
    /**
     * The feeNet
     * @var float|null
     */
    protected ?float $feeNet = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The marginNet
     * @var float|null
     */
    protected ?float $marginNet = null;
    /**
     * The needsMarginBooking
     * @var bool|null
     */
    protected ?bool $needsMarginBooking = null;
    /**
     * The salePriceNet
     * @var float|null
     */
    protected ?float $salePriceNet = null;
    /**
     * The settlementDone
     * @var bool|null
     */
    protected ?bool $settlementDone = null;
    /**
     * The supplierInvoice
     * @var float|null
     */
    protected ?float $supplierInvoice = null;
    /**
     * The supplierInvoiceNet
     * @var float|null
     */
    protected ?float $supplierInvoiceNet = null;
    /**
     * The updatedAt
     * @var string|null
     */
    protected ?string $updatedAt = null;
    /**
     * Constructor method for SellItemMarginDTO
     * @uses SellItemMarginDTO::setBookedMargin()
     * @uses SellItemMarginDTO::setBookedMarginVat()
     * @uses SellItemMarginDTO::setBuyPrice()
     * @uses SellItemMarginDTO::setBuyPriceNet()
     * @uses SellItemMarginDTO::setCalculatedMargin()
     * @uses SellItemMarginDTO::setCalculatedMarginVat()
     * @uses SellItemMarginDTO::setFeeNet()
     * @uses SellItemMarginDTO::setItemId()
     * @uses SellItemMarginDTO::setMarginNet()
     * @uses SellItemMarginDTO::setNeedsMarginBooking()
     * @uses SellItemMarginDTO::setSalePriceNet()
     * @uses SellItemMarginDTO::setSettlementDone()
     * @uses SellItemMarginDTO::setSupplierInvoice()
     * @uses SellItemMarginDTO::setSupplierInvoiceNet()
     * @uses SellItemMarginDTO::setUpdatedAt()
     * @param float $bookedMargin
     * @param float $bookedMarginVat
     * @param float $buyPrice
     * @param float $buyPriceNet
     * @param float $calculatedMargin
     * @param float $calculatedMarginVat
     * @param float $feeNet
     * @param int $itemId
     * @param float $marginNet
     * @param bool $needsMarginBooking
     * @param float $salePriceNet
     * @param bool $settlementDone
     * @param float $supplierInvoice
     * @param float $supplierInvoiceNet
     * @param string $updatedAt
     */
    public function __construct(?float $bookedMargin = null, ?float $bookedMarginVat = null, ?float $buyPrice = null, ?float $buyPriceNet = null, ?float $calculatedMargin = null, ?float $calculatedMarginVat = null, ?float $feeNet = null, ?int $itemId = null, ?float $marginNet = null, ?bool $needsMarginBooking = null, ?float $salePriceNet = null, ?bool $settlementDone = null, ?float $supplierInvoice = null, ?float $supplierInvoiceNet = null, ?string $updatedAt = null)
    {
        $this
            ->setBookedMargin($bookedMargin)
            ->setBookedMarginVat($bookedMarginVat)
            ->setBuyPrice($buyPrice)
            ->setBuyPriceNet($buyPriceNet)
            ->setCalculatedMargin($calculatedMargin)
            ->setCalculatedMarginVat($calculatedMarginVat)
            ->setFeeNet($feeNet)
            ->setItemId($itemId)
            ->setMarginNet($marginNet)
            ->setNeedsMarginBooking($needsMarginBooking)
            ->setSalePriceNet($salePriceNet)
            ->setSettlementDone($settlementDone)
            ->setSupplierInvoice($supplierInvoice)
            ->setSupplierInvoiceNet($supplierInvoiceNet)
            ->setUpdatedAt($updatedAt);
    }
    /**
     * Get bookedMargin value
     * @return float|null
     */
    public function getBookedMargin(): ?float
    {
        return $this->bookedMargin;
    }
    /**
     * Set bookedMargin value
     * @param float $bookedMargin
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setBookedMargin(?float $bookedMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedMargin) && !(is_float($bookedMargin) || is_numeric($bookedMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedMargin, true), gettype($bookedMargin)), __LINE__);
        }
        $this->bookedMargin = $bookedMargin;
        
        return $this;
    }
    /**
     * Get bookedMarginVat value
     * @return float|null
     */
    public function getBookedMarginVat(): ?float
    {
        return $this->bookedMarginVat;
    }
    /**
     * Set bookedMarginVat value
     * @param float $bookedMarginVat
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setBookedMarginVat(?float $bookedMarginVat = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedMarginVat) && !(is_float($bookedMarginVat) || is_numeric($bookedMarginVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedMarginVat, true), gettype($bookedMarginVat)), __LINE__);
        }
        $this->bookedMarginVat = $bookedMarginVat;
        
        return $this;
    }
    /**
     * Get buyPrice value
     * @return float|null
     */
    public function getBuyPrice(): ?float
    {
        return $this->buyPrice;
    }
    /**
     * Set buyPrice value
     * @param float $buyPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setBuyPrice(?float $buyPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($buyPrice) && !(is_float($buyPrice) || is_numeric($buyPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyPrice, true), gettype($buyPrice)), __LINE__);
        }
        $this->buyPrice = $buyPrice;
        
        return $this;
    }
    /**
     * Get buyPriceNet value
     * @return float|null
     */
    public function getBuyPriceNet(): ?float
    {
        return $this->buyPriceNet;
    }
    /**
     * Set buyPriceNet value
     * @param float $buyPriceNet
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setBuyPriceNet(?float $buyPriceNet = null): self
    {
        // validation for constraint: float
        if (!is_null($buyPriceNet) && !(is_float($buyPriceNet) || is_numeric($buyPriceNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyPriceNet, true), gettype($buyPriceNet)), __LINE__);
        }
        $this->buyPriceNet = $buyPriceNet;
        
        return $this;
    }
    /**
     * Get calculatedMargin value
     * @return float|null
     */
    public function getCalculatedMargin(): ?float
    {
        return $this->calculatedMargin;
    }
    /**
     * Set calculatedMargin value
     * @param float $calculatedMargin
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setCalculatedMargin(?float $calculatedMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMargin) && !(is_float($calculatedMargin) || is_numeric($calculatedMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMargin, true), gettype($calculatedMargin)), __LINE__);
        }
        $this->calculatedMargin = $calculatedMargin;
        
        return $this;
    }
    /**
     * Get calculatedMarginVat value
     * @return float|null
     */
    public function getCalculatedMarginVat(): ?float
    {
        return $this->calculatedMarginVat;
    }
    /**
     * Set calculatedMarginVat value
     * @param float $calculatedMarginVat
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setCalculatedMarginVat(?float $calculatedMarginVat = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMarginVat) && !(is_float($calculatedMarginVat) || is_numeric($calculatedMarginVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMarginVat, true), gettype($calculatedMarginVat)), __LINE__);
        }
        $this->calculatedMarginVat = $calculatedMarginVat;
        
        return $this;
    }
    /**
     * Get feeNet value
     * @return float|null
     */
    public function getFeeNet(): ?float
    {
        return $this->feeNet;
    }
    /**
     * Set feeNet value
     * @param float $feeNet
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setFeeNet(?float $feeNet = null): self
    {
        // validation for constraint: float
        if (!is_null($feeNet) && !(is_float($feeNet) || is_numeric($feeNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeNet, true), gettype($feeNet)), __LINE__);
        }
        $this->feeNet = $feeNet;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
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
     * Get marginNet value
     * @return float|null
     */
    public function getMarginNet(): ?float
    {
        return $this->marginNet;
    }
    /**
     * Set marginNet value
     * @param float $marginNet
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setMarginNet(?float $marginNet = null): self
    {
        // validation for constraint: float
        if (!is_null($marginNet) && !(is_float($marginNet) || is_numeric($marginNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($marginNet, true), gettype($marginNet)), __LINE__);
        }
        $this->marginNet = $marginNet;
        
        return $this;
    }
    /**
     * Get needsMarginBooking value
     * @return bool|null
     */
    public function getNeedsMarginBooking(): ?bool
    {
        return $this->needsMarginBooking;
    }
    /**
     * Set needsMarginBooking value
     * @param bool $needsMarginBooking
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setNeedsMarginBooking(?bool $needsMarginBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsMarginBooking) && !is_bool($needsMarginBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsMarginBooking, true), gettype($needsMarginBooking)), __LINE__);
        }
        $this->needsMarginBooking = $needsMarginBooking;
        
        return $this;
    }
    /**
     * Get salePriceNet value
     * @return float|null
     */
    public function getSalePriceNet(): ?float
    {
        return $this->salePriceNet;
    }
    /**
     * Set salePriceNet value
     * @param float $salePriceNet
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setSalePriceNet(?float $salePriceNet = null): self
    {
        // validation for constraint: float
        if (!is_null($salePriceNet) && !(is_float($salePriceNet) || is_numeric($salePriceNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePriceNet, true), gettype($salePriceNet)), __LINE__);
        }
        $this->salePriceNet = $salePriceNet;
        
        return $this;
    }
    /**
     * Get settlementDone value
     * @return bool|null
     */
    public function getSettlementDone(): ?bool
    {
        return $this->settlementDone;
    }
    /**
     * Set settlementDone value
     * @param bool $settlementDone
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setSettlementDone(?bool $settlementDone = null): self
    {
        // validation for constraint: boolean
        if (!is_null($settlementDone) && !is_bool($settlementDone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($settlementDone, true), gettype($settlementDone)), __LINE__);
        }
        $this->settlementDone = $settlementDone;
        
        return $this;
    }
    /**
     * Get supplierInvoice value
     * @return float|null
     */
    public function getSupplierInvoice(): ?float
    {
        return $this->supplierInvoice;
    }
    /**
     * Set supplierInvoice value
     * @param float $supplierInvoice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setSupplierInvoice(?float $supplierInvoice = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoice) && !(is_float($supplierInvoice) || is_numeric($supplierInvoice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoice, true), gettype($supplierInvoice)), __LINE__);
        }
        $this->supplierInvoice = $supplierInvoice;
        
        return $this;
    }
    /**
     * Get supplierInvoiceNet value
     * @return float|null
     */
    public function getSupplierInvoiceNet(): ?float
    {
        return $this->supplierInvoiceNet;
    }
    /**
     * Set supplierInvoiceNet value
     * @param float $supplierInvoiceNet
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setSupplierInvoiceNet(?float $supplierInvoiceNet = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoiceNet) && !(is_float($supplierInvoiceNet) || is_numeric($supplierInvoiceNet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoiceNet, true), gettype($supplierInvoiceNet)), __LINE__);
        }
        $this->supplierInvoiceNet = $supplierInvoiceNet;
        
        return $this;
    }
    /**
     * Get updatedAt value
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }
    /**
     * Set updatedAt value
     * @param string $updatedAt
     * @return \Pggns\MidocoApi\Order\StructType\SellItemMarginDTO
     */
    public function setUpdatedAt(?string $updatedAt = null): self
    {
        // validation for constraint: string
        if (!is_null($updatedAt) && !is_string($updatedAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updatedAt, true), gettype($updatedAt)), __LINE__);
        }
        $this->updatedAt = $updatedAt;
        
        return $this;
    }
}
