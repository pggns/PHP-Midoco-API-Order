<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierCommissionCondDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierCommissionCondDTO extends AbstractStructBase
{
    /**
     * The commFixedPersonMultiply
     * @var bool|null
     */
    protected ?bool $commFixedPersonMultiply = null;
    /**
     * The commFixedSegmentMultiply
     * @var bool|null
     */
    protected ?bool $commFixedSegmentMultiply = null;
    /**
     * The commissionFixedAmount
     * @var float|null
     */
    protected ?float $commissionFixedAmount = null;
    /**
     * The commissionFixedHandling
     * @var string|null
     */
    protected ?string $commissionFixedHandling = null;
    /**
     * The commissionForCancel
     * @var bool|null
     */
    protected ?bool $commissionForCancel = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The commissionPercentCancel
     * @var float|null
     */
    protected ?float $commissionPercentCancel = null;
    /**
     * The commissionPercentEu
     * @var float|null
     */
    protected ?float $commissionPercentEu = null;
    /**
     * The conditionId
     * @var int|null
     */
    protected ?int $conditionId = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for SupplierCommissionCondDTO
     * @uses SupplierCommissionCondDTO::setCommFixedPersonMultiply()
     * @uses SupplierCommissionCondDTO::setCommFixedSegmentMultiply()
     * @uses SupplierCommissionCondDTO::setCommissionFixedAmount()
     * @uses SupplierCommissionCondDTO::setCommissionFixedHandling()
     * @uses SupplierCommissionCondDTO::setCommissionForCancel()
     * @uses SupplierCommissionCondDTO::setCommissionPercent()
     * @uses SupplierCommissionCondDTO::setCommissionPercentCancel()
     * @uses SupplierCommissionCondDTO::setCommissionPercentEu()
     * @uses SupplierCommissionCondDTO::setConditionId()
     * @uses SupplierCommissionCondDTO::setProductType()
     * @uses SupplierCommissionCondDTO::setSupplierId()
     * @uses SupplierCommissionCondDTO::setTraveltype()
     * @uses SupplierCommissionCondDTO::setValidFrom()
     * @param bool $commFixedPersonMultiply
     * @param bool $commFixedSegmentMultiply
     * @param float $commissionFixedAmount
     * @param string $commissionFixedHandling
     * @param bool $commissionForCancel
     * @param float $commissionPercent
     * @param float $commissionPercentCancel
     * @param float $commissionPercentEu
     * @param int $conditionId
     * @param string $productType
     * @param string $supplierId
     * @param string $traveltype
     * @param string $validFrom
     */
    public function __construct(?bool $commFixedPersonMultiply = null, ?bool $commFixedSegmentMultiply = null, ?float $commissionFixedAmount = null, ?string $commissionFixedHandling = null, ?bool $commissionForCancel = null, ?float $commissionPercent = null, ?float $commissionPercentCancel = null, ?float $commissionPercentEu = null, ?int $conditionId = null, ?string $productType = null, ?string $supplierId = null, ?string $traveltype = null, ?string $validFrom = null)
    {
        $this
            ->setCommFixedPersonMultiply($commFixedPersonMultiply)
            ->setCommFixedSegmentMultiply($commFixedSegmentMultiply)
            ->setCommissionFixedAmount($commissionFixedAmount)
            ->setCommissionFixedHandling($commissionFixedHandling)
            ->setCommissionForCancel($commissionForCancel)
            ->setCommissionPercent($commissionPercent)
            ->setCommissionPercentCancel($commissionPercentCancel)
            ->setCommissionPercentEu($commissionPercentEu)
            ->setConditionId($conditionId)
            ->setProductType($productType)
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setValidFrom($validFrom);
    }
    /**
     * Get commFixedPersonMultiply value
     * @return bool|null
     */
    public function getCommFixedPersonMultiply(): ?bool
    {
        return $this->commFixedPersonMultiply;
    }
    /**
     * Set commFixedPersonMultiply value
     * @param bool $commFixedPersonMultiply
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setCommFixedPersonMultiply(?bool $commFixedPersonMultiply = null): self
    {
        // validation for constraint: boolean
        if (!is_null($commFixedPersonMultiply) && !is_bool($commFixedPersonMultiply)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commFixedPersonMultiply, true), gettype($commFixedPersonMultiply)), __LINE__);
        }
        $this->commFixedPersonMultiply = $commFixedPersonMultiply;
        
        return $this;
    }
    /**
     * Get commFixedSegmentMultiply value
     * @return bool|null
     */
    public function getCommFixedSegmentMultiply(): ?bool
    {
        return $this->commFixedSegmentMultiply;
    }
    /**
     * Set commFixedSegmentMultiply value
     * @param bool $commFixedSegmentMultiply
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setCommFixedSegmentMultiply(?bool $commFixedSegmentMultiply = null): self
    {
        // validation for constraint: boolean
        if (!is_null($commFixedSegmentMultiply) && !is_bool($commFixedSegmentMultiply)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commFixedSegmentMultiply, true), gettype($commFixedSegmentMultiply)), __LINE__);
        }
        $this->commFixedSegmentMultiply = $commFixedSegmentMultiply;
        
        return $this;
    }
    /**
     * Get commissionFixedAmount value
     * @return float|null
     */
    public function getCommissionFixedAmount(): ?float
    {
        return $this->commissionFixedAmount;
    }
    /**
     * Set commissionFixedAmount value
     * @param float $commissionFixedAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setCommissionFixedAmount(?float $commissionFixedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionFixedAmount) && !(is_float($commissionFixedAmount) || is_numeric($commissionFixedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionFixedAmount, true), gettype($commissionFixedAmount)), __LINE__);
        }
        $this->commissionFixedAmount = $commissionFixedAmount;
        
        return $this;
    }
    /**
     * Get commissionFixedHandling value
     * @return string|null
     */
    public function getCommissionFixedHandling(): ?string
    {
        return $this->commissionFixedHandling;
    }
    /**
     * Set commissionFixedHandling value
     * @param string $commissionFixedHandling
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setCommissionFixedHandling(?string $commissionFixedHandling = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionFixedHandling) && !is_string($commissionFixedHandling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionFixedHandling, true), gettype($commissionFixedHandling)), __LINE__);
        }
        $this->commissionFixedHandling = $commissionFixedHandling;
        
        return $this;
    }
    /**
     * Get commissionForCancel value
     * @return bool|null
     */
    public function getCommissionForCancel(): ?bool
    {
        return $this->commissionForCancel;
    }
    /**
     * Set commissionForCancel value
     * @param bool $commissionForCancel
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setCommissionForCancel(?bool $commissionForCancel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($commissionForCancel) && !is_bool($commissionForCancel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commissionForCancel, true), gettype($commissionForCancel)), __LINE__);
        }
        $this->commissionForCancel = $commissionForCancel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
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
     * Get commissionPercentCancel value
     * @return float|null
     */
    public function getCommissionPercentCancel(): ?float
    {
        return $this->commissionPercentCancel;
    }
    /**
     * Set commissionPercentCancel value
     * @param float $commissionPercentCancel
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setCommissionPercentCancel(?float $commissionPercentCancel = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercentCancel) && !(is_float($commissionPercentCancel) || is_numeric($commissionPercentCancel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercentCancel, true), gettype($commissionPercentCancel)), __LINE__);
        }
        $this->commissionPercentCancel = $commissionPercentCancel;
        
        return $this;
    }
    /**
     * Get commissionPercentEu value
     * @return float|null
     */
    public function getCommissionPercentEu(): ?float
    {
        return $this->commissionPercentEu;
    }
    /**
     * Set commissionPercentEu value
     * @param float $commissionPercentEu
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setCommissionPercentEu(?float $commissionPercentEu = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercentEu) && !(is_float($commissionPercentEu) || is_numeric($commissionPercentEu))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercentEu, true), gettype($commissionPercentEu)), __LINE__);
        }
        $this->commissionPercentEu = $commissionPercentEu;
        
        return $this;
    }
    /**
     * Get conditionId value
     * @return int|null
     */
    public function getConditionId(): ?int
    {
        return $this->conditionId;
    }
    /**
     * Set conditionId value
     * @param int $conditionId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setConditionId(?int $conditionId = null): self
    {
        // validation for constraint: int
        if (!is_null($conditionId) && !(is_int($conditionId) || ctype_digit($conditionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($conditionId, true), gettype($conditionId)), __LINE__);
        }
        $this->conditionId = $conditionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
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
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionCondDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
}
