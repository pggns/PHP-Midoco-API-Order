<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierCommissionInfo StructType
 * @subpackage Structs
 */
class MidocoSupplierCommissionInfo extends AbstractStructBase
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
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The bookingPrice
     * @var float|null
     */
    protected ?float $bookingPrice = null;
    /**
     * The supplierCommissionAmount
     * @var float|null
     */
    protected ?float $supplierCommissionAmount = null;
    /**
     * The originalSupplierCommissionAmount
     * @var float|null
     */
    protected ?float $originalSupplierCommissionAmount = null;
    /**
     * The calculatedCommission
     * @var float|null
     */
    protected ?float $calculatedCommission = null;
    /**
     * The originalCalculatedCommission
     * @var float|null
     */
    protected ?float $originalCalculatedCommission = null;
    /**
     * The calculatedCommissionPercent
     * @var float|null
     */
    protected ?float $calculatedCommissionPercent = null;
    /**
     * Constructor method for MidocoSupplierCommissionInfo
     * @uses MidocoSupplierCommissionInfo::setSupplierId()
     * @uses MidocoSupplierCommissionInfo::setBookingId()
     * @uses MidocoSupplierCommissionInfo::setCreationDate()
     * @uses MidocoSupplierCommissionInfo::setStartTravel()
     * @uses MidocoSupplierCommissionInfo::setEndTravel()
     * @uses MidocoSupplierCommissionInfo::setStatus()
     * @uses MidocoSupplierCommissionInfo::setBookingPrice()
     * @uses MidocoSupplierCommissionInfo::setSupplierCommissionAmount()
     * @uses MidocoSupplierCommissionInfo::setOriginalSupplierCommissionAmount()
     * @uses MidocoSupplierCommissionInfo::setCalculatedCommission()
     * @uses MidocoSupplierCommissionInfo::setOriginalCalculatedCommission()
     * @uses MidocoSupplierCommissionInfo::setCalculatedCommissionPercent()
     * @param string $supplierId
     * @param string $bookingId
     * @param string $creationDate
     * @param string $startTravel
     * @param string $endTravel
     * @param string $status
     * @param float $bookingPrice
     * @param float $supplierCommissionAmount
     * @param float $originalSupplierCommissionAmount
     * @param float $calculatedCommission
     * @param float $originalCalculatedCommission
     * @param float $calculatedCommissionPercent
     */
    public function __construct(?string $supplierId = null, ?string $bookingId = null, ?string $creationDate = null, ?string $startTravel = null, ?string $endTravel = null, ?string $status = null, ?float $bookingPrice = null, ?float $supplierCommissionAmount = null, ?float $originalSupplierCommissionAmount = null, ?float $calculatedCommission = null, ?float $originalCalculatedCommission = null, ?float $calculatedCommissionPercent = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setCreationDate($creationDate)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setStatus($status)
            ->setBookingPrice($bookingPrice)
            ->setSupplierCommissionAmount($supplierCommissionAmount)
            ->setOriginalSupplierCommissionAmount($originalSupplierCommissionAmount)
            ->setCalculatedCommission($calculatedCommission)
            ->setOriginalCalculatedCommission($originalCalculatedCommission)
            ->setCalculatedCommissionPercent($calculatedCommissionPercent);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
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
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
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
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
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
     * Get supplierCommissionAmount value
     * @return float|null
     */
    public function getSupplierCommissionAmount(): ?float
    {
        return $this->supplierCommissionAmount;
    }
    /**
     * Set supplierCommissionAmount value
     * @param float $supplierCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
     */
    public function setSupplierCommissionAmount(?float $supplierCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierCommissionAmount) && !(is_float($supplierCommissionAmount) || is_numeric($supplierCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierCommissionAmount, true), gettype($supplierCommissionAmount)), __LINE__);
        }
        $this->supplierCommissionAmount = $supplierCommissionAmount;
        
        return $this;
    }
    /**
     * Get originalSupplierCommissionAmount value
     * @return float|null
     */
    public function getOriginalSupplierCommissionAmount(): ?float
    {
        return $this->originalSupplierCommissionAmount;
    }
    /**
     * Set originalSupplierCommissionAmount value
     * @param float $originalSupplierCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
     */
    public function setOriginalSupplierCommissionAmount(?float $originalSupplierCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalSupplierCommissionAmount) && !(is_float($originalSupplierCommissionAmount) || is_numeric($originalSupplierCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalSupplierCommissionAmount, true), gettype($originalSupplierCommissionAmount)), __LINE__);
        }
        $this->originalSupplierCommissionAmount = $originalSupplierCommissionAmount;
        
        return $this;
    }
    /**
     * Get calculatedCommission value
     * @return float|null
     */
    public function getCalculatedCommission(): ?float
    {
        return $this->calculatedCommission;
    }
    /**
     * Set calculatedCommission value
     * @param float $calculatedCommission
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
     */
    public function setCalculatedCommission(?float $calculatedCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedCommission) && !(is_float($calculatedCommission) || is_numeric($calculatedCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedCommission, true), gettype($calculatedCommission)), __LINE__);
        }
        $this->calculatedCommission = $calculatedCommission;
        
        return $this;
    }
    /**
     * Get originalCalculatedCommission value
     * @return float|null
     */
    public function getOriginalCalculatedCommission(): ?float
    {
        return $this->originalCalculatedCommission;
    }
    /**
     * Set originalCalculatedCommission value
     * @param float $originalCalculatedCommission
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
     */
    public function setOriginalCalculatedCommission(?float $originalCalculatedCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($originalCalculatedCommission) && !(is_float($originalCalculatedCommission) || is_numeric($originalCalculatedCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalCalculatedCommission, true), gettype($originalCalculatedCommission)), __LINE__);
        }
        $this->originalCalculatedCommission = $originalCalculatedCommission;
        
        return $this;
    }
    /**
     * Get calculatedCommissionPercent value
     * @return float|null
     */
    public function getCalculatedCommissionPercent(): ?float
    {
        return $this->calculatedCommissionPercent;
    }
    /**
     * Set calculatedCommissionPercent value
     * @param float $calculatedCommissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionInfo
     */
    public function setCalculatedCommissionPercent(?float $calculatedCommissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedCommissionPercent) && !(is_float($calculatedCommissionPercent) || is_numeric($calculatedCommissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedCommissionPercent, true), gettype($calculatedCommissionPercent)), __LINE__);
        }
        $this->calculatedCommissionPercent = $calculatedCommissionPercent;
        
        return $this;
    }
}
