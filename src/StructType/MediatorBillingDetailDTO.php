<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorBillingDetailDTO StructType
 * @subpackage Structs
 */
class MediatorBillingDetailDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The baseAmount
     * @var float|null
     */
    protected ?float $baseAmount = null;
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
     * The calculatedCommissionAmount
     * @var float|null
     */
    protected ?float $calculatedCommissionAmount = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The excludedFromTotal
     * @var bool|null
     */
    protected ?bool $excludedFromTotal = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The mediatorBillingId
     * @var int|null
     */
    protected ?int $mediatorBillingId = null;
    /**
     * The paidCommissionAmount
     * @var float|null
     */
    protected ?float $paidCommissionAmount = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for MediatorBillingDetailDTO
     * @uses MediatorBillingDetailDTO::setAgencyId()
     * @uses MediatorBillingDetailDTO::setAmount()
     * @uses MediatorBillingDetailDTO::setBaseAmount()
     * @uses MediatorBillingDetailDTO::setBookingId()
     * @uses MediatorBillingDetailDTO::setBookingPrice()
     * @uses MediatorBillingDetailDTO::setCalculatedCommissionAmount()
     * @uses MediatorBillingDetailDTO::setCommissionPercent()
     * @uses MediatorBillingDetailDTO::setCustomerName()
     * @uses MediatorBillingDetailDTO::setExcludedFromTotal()
     * @uses MediatorBillingDetailDTO::setFeeAmount()
     * @uses MediatorBillingDetailDTO::setItemId()
     * @uses MediatorBillingDetailDTO::setMediatorBillingId()
     * @uses MediatorBillingDetailDTO::setPaidCommissionAmount()
     * @uses MediatorBillingDetailDTO::setPosition()
     * @uses MediatorBillingDetailDTO::setSupplierId()
     * @param string $agencyId
     * @param float $amount
     * @param float $baseAmount
     * @param string $bookingId
     * @param float $bookingPrice
     * @param float $calculatedCommissionAmount
     * @param float $commissionPercent
     * @param string $customerName
     * @param bool $excludedFromTotal
     * @param float $feeAmount
     * @param int $itemId
     * @param int $mediatorBillingId
     * @param float $paidCommissionAmount
     * @param int $position
     * @param string $supplierId
     */
    public function __construct(?string $agencyId = null, ?float $amount = null, ?float $baseAmount = null, ?string $bookingId = null, ?float $bookingPrice = null, ?float $calculatedCommissionAmount = null, ?float $commissionPercent = null, ?string $customerName = null, ?bool $excludedFromTotal = null, ?float $feeAmount = null, ?int $itemId = null, ?int $mediatorBillingId = null, ?float $paidCommissionAmount = null, ?int $position = null, ?string $supplierId = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setAmount($amount)
            ->setBaseAmount($baseAmount)
            ->setBookingId($bookingId)
            ->setBookingPrice($bookingPrice)
            ->setCalculatedCommissionAmount($calculatedCommissionAmount)
            ->setCommissionPercent($commissionPercent)
            ->setCustomerName($customerName)
            ->setExcludedFromTotal($excludedFromTotal)
            ->setFeeAmount($feeAmount)
            ->setItemId($itemId)
            ->setMediatorBillingId($mediatorBillingId)
            ->setPaidCommissionAmount($paidCommissionAmount)
            ->setPosition($position)
            ->setSupplierId($supplierId);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get baseAmount value
     * @return float|null
     */
    public function getBaseAmount(): ?float
    {
        return $this->baseAmount;
    }
    /**
     * Set baseAmount value
     * @param float $baseAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setBaseAmount(?float $baseAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($baseAmount) && !(is_float($baseAmount) || is_numeric($baseAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseAmount, true), gettype($baseAmount)), __LINE__);
        }
        $this->baseAmount = $baseAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
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
     * Get calculatedCommissionAmount value
     * @return float|null
     */
    public function getCalculatedCommissionAmount(): ?float
    {
        return $this->calculatedCommissionAmount;
    }
    /**
     * Set calculatedCommissionAmount value
     * @param float $calculatedCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setCalculatedCommissionAmount(?float $calculatedCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedCommissionAmount) && !(is_float($calculatedCommissionAmount) || is_numeric($calculatedCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedCommissionAmount, true), gettype($calculatedCommissionAmount)), __LINE__);
        }
        $this->calculatedCommissionAmount = $calculatedCommissionAmount;
        
        return $this;
    }
    /**
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get excludedFromTotal value
     * @return bool|null
     */
    public function getExcludedFromTotal(): ?bool
    {
        return $this->excludedFromTotal;
    }
    /**
     * Set excludedFromTotal value
     * @param bool $excludedFromTotal
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setExcludedFromTotal(?bool $excludedFromTotal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($excludedFromTotal) && !is_bool($excludedFromTotal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludedFromTotal, true), gettype($excludedFromTotal)), __LINE__);
        }
        $this->excludedFromTotal = $excludedFromTotal;
        
        return $this;
    }
    /**
     * Get feeAmount value
     * @return float|null
     */
    public function getFeeAmount(): ?float
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param float $feeAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setFeeAmount(?float $feeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmount) && !(is_float($feeAmount) || is_numeric($feeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmount, true), gettype($feeAmount)), __LINE__);
        }
        $this->feeAmount = $feeAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
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
     * Get mediatorBillingId value
     * @return int|null
     */
    public function getMediatorBillingId(): ?int
    {
        return $this->mediatorBillingId;
    }
    /**
     * Set mediatorBillingId value
     * @param int $mediatorBillingId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setMediatorBillingId(?int $mediatorBillingId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorBillingId) && !(is_int($mediatorBillingId) || ctype_digit($mediatorBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorBillingId, true), gettype($mediatorBillingId)), __LINE__);
        }
        $this->mediatorBillingId = $mediatorBillingId;
        
        return $this;
    }
    /**
     * Get paidCommissionAmount value
     * @return float|null
     */
    public function getPaidCommissionAmount(): ?float
    {
        return $this->paidCommissionAmount;
    }
    /**
     * Set paidCommissionAmount value
     * @param float $paidCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
     */
    public function setPaidCommissionAmount(?float $paidCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidCommissionAmount) && !(is_float($paidCommissionAmount) || is_numeric($paidCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidCommissionAmount, true), gettype($paidCommissionAmount)), __LINE__);
        }
        $this->paidCommissionAmount = $paidCommissionAmount;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDetailDTO
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
