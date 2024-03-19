<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MedStlmntProdDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MedStlmntProdDetailDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The baseRevenueAmount
     * @var float|null
     */
    protected ?float $baseRevenueAmount = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingPrice
     * @var float|null
     */
    protected ?float $bookingPrice = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The medStlmntProdId
     * @var int|null
     */
    protected ?int $medStlmntProdId = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The revenueAmount
     * @var float|null
     */
    protected ?float $revenueAmount = null;
    /**
     * The revenuePercent
     * @var float|null
     */
    protected ?float $revenuePercent = null;
    /**
     * The revenueVatAmount
     * @var float|null
     */
    protected ?float $revenueVatAmount = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * Constructor method for MedStlmntProdDetailDTO
     * @uses MedStlmntProdDetailDTO::setAccountId()
     * @uses MedStlmntProdDetailDTO::setBaseRevenueAmount()
     * @uses MedStlmntProdDetailDTO::setBookingId()
     * @uses MedStlmntProdDetailDTO::setBookingPrice()
     * @uses MedStlmntProdDetailDTO::setItemId()
     * @uses MedStlmntProdDetailDTO::setMedStlmntProdId()
     * @uses MedStlmntProdDetailDTO::setPlanId()
     * @uses MedStlmntProdDetailDTO::setProductType()
     * @uses MedStlmntProdDetailDTO::setRevenueAmount()
     * @uses MedStlmntProdDetailDTO::setRevenuePercent()
     * @uses MedStlmntProdDetailDTO::setRevenueVatAmount()
     * @uses MedStlmntProdDetailDTO::setSupplierId()
     * @uses MedStlmntProdDetailDTO::setVatCode()
     * @param string $accountId
     * @param float $baseRevenueAmount
     * @param string $bookingId
     * @param float $bookingPrice
     * @param int $itemId
     * @param int $medStlmntProdId
     * @param string $planId
     * @param string $productType
     * @param float $revenueAmount
     * @param float $revenuePercent
     * @param float $revenueVatAmount
     * @param string $supplierId
     * @param string $vatCode
     */
    public function __construct(?string $accountId = null, ?float $baseRevenueAmount = null, ?string $bookingId = null, ?float $bookingPrice = null, ?int $itemId = null, ?int $medStlmntProdId = null, ?string $planId = null, ?string $productType = null, ?float $revenueAmount = null, ?float $revenuePercent = null, ?float $revenueVatAmount = null, ?string $supplierId = null, ?string $vatCode = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBaseRevenueAmount($baseRevenueAmount)
            ->setBookingId($bookingId)
            ->setBookingPrice($bookingPrice)
            ->setItemId($itemId)
            ->setMedStlmntProdId($medStlmntProdId)
            ->setPlanId($planId)
            ->setProductType($productType)
            ->setRevenueAmount($revenueAmount)
            ->setRevenuePercent($revenuePercent)
            ->setRevenueVatAmount($revenueVatAmount)
            ->setSupplierId($supplierId)
            ->setVatCode($vatCode);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get baseRevenueAmount value
     * @return float|null
     */
    public function getBaseRevenueAmount(): ?float
    {
        return $this->baseRevenueAmount;
    }
    /**
     * Set baseRevenueAmount value
     * @param float $baseRevenueAmount
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setBaseRevenueAmount(?float $baseRevenueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($baseRevenueAmount) && !(is_float($baseRevenueAmount) || is_numeric($baseRevenueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseRevenueAmount, true), gettype($baseRevenueAmount)), __LINE__);
        }
        $this->baseRevenueAmount = $baseRevenueAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
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
     * Get bookingPrice value
     * @return float|null
     */
    public function getBookingPrice(): ?float
    {
        return $this->bookingPrice;
    }
    /**
     * Set bookingPrice value
     * @param float $bookingPrice
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setBookingPrice(?float $bookingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($bookingPrice) && !(is_float($bookingPrice) || is_numeric($bookingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookingPrice, true), gettype($bookingPrice)), __LINE__);
        }
        $this->bookingPrice = $bookingPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
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
     * Get medStlmntProdId value
     * @return int|null
     */
    public function getMedStlmntProdId(): ?int
    {
        return $this->medStlmntProdId;
    }
    /**
     * Set medStlmntProdId value
     * @param int $medStlmntProdId
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setMedStlmntProdId(?int $medStlmntProdId = null): self
    {
        // validation for constraint: int
        if (!is_null($medStlmntProdId) && !(is_int($medStlmntProdId) || ctype_digit($medStlmntProdId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($medStlmntProdId, true), gettype($medStlmntProdId)), __LINE__);
        }
        $this->medStlmntProdId = $medStlmntProdId;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get revenueAmount value
     * @return float|null
     */
    public function getRevenueAmount(): ?float
    {
        return $this->revenueAmount;
    }
    /**
     * Set revenueAmount value
     * @param float $revenueAmount
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setRevenueAmount(?float $revenueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueAmount) && !(is_float($revenueAmount) || is_numeric($revenueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueAmount, true), gettype($revenueAmount)), __LINE__);
        }
        $this->revenueAmount = $revenueAmount;
        
        return $this;
    }
    /**
     * Get revenuePercent value
     * @return float|null
     */
    public function getRevenuePercent(): ?float
    {
        return $this->revenuePercent;
    }
    /**
     * Set revenuePercent value
     * @param float $revenuePercent
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setRevenuePercent(?float $revenuePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($revenuePercent) && !(is_float($revenuePercent) || is_numeric($revenuePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenuePercent, true), gettype($revenuePercent)), __LINE__);
        }
        $this->revenuePercent = $revenuePercent;
        
        return $this;
    }
    /**
     * Get revenueVatAmount value
     * @return float|null
     */
    public function getRevenueVatAmount(): ?float
    {
        return $this->revenueVatAmount;
    }
    /**
     * Set revenueVatAmount value
     * @param float $revenueVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setRevenueVatAmount(?float $revenueVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueVatAmount) && !(is_float($revenueVatAmount) || is_numeric($revenueVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueVatAmount, true), gettype($revenueVatAmount)), __LINE__);
        }
        $this->revenueVatAmount = $revenueVatAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
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
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDetailDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
}
