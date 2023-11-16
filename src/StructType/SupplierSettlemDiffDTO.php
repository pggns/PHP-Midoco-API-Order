<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierSettlemDiffDTO StructType
 * @subpackage Structs
 */
class SupplierSettlemDiffDTO extends AbstractStructBase
{
    /**
     * The diffAccountNoVat
     * @var string|null
     */
    protected ?string $diffAccountNoVat = null;
    /**
     * The diffAccountVat
     * @var string|null
     */
    protected ?string $diffAccountVat = null;
    /**
     * The priceDiff
     * @var float|null
     */
    protected ?float $priceDiff = null;
    /**
     * The priceDiffPercent
     * @var float|null
     */
    protected ?float $priceDiffPercent = null;
    /**
     * The revenueDiff
     * @var float|null
     */
    protected ?float $revenueDiff = null;
    /**
     * The revenueDiffPercent
     * @var float|null
     */
    protected ?float $revenueDiffPercent = null;
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
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for SupplierSettlemDiffDTO
     * @uses SupplierSettlemDiffDTO::setDiffAccountNoVat()
     * @uses SupplierSettlemDiffDTO::setDiffAccountVat()
     * @uses SupplierSettlemDiffDTO::setPriceDiff()
     * @uses SupplierSettlemDiffDTO::setPriceDiffPercent()
     * @uses SupplierSettlemDiffDTO::setRevenueDiff()
     * @uses SupplierSettlemDiffDTO::setRevenueDiffPercent()
     * @uses SupplierSettlemDiffDTO::setSupplierId()
     * @uses SupplierSettlemDiffDTO::setTravelType()
     * @uses SupplierSettlemDiffDTO::setValidFrom()
     * @param string $diffAccountNoVat
     * @param string $diffAccountVat
     * @param float $priceDiff
     * @param float $priceDiffPercent
     * @param float $revenueDiff
     * @param float $revenueDiffPercent
     * @param string $supplierId
     * @param string $travelType
     * @param string $validFrom
     */
    public function __construct(?string $diffAccountNoVat = null, ?string $diffAccountVat = null, ?float $priceDiff = null, ?float $priceDiffPercent = null, ?float $revenueDiff = null, ?float $revenueDiffPercent = null, ?string $supplierId = null, ?string $travelType = null, ?string $validFrom = null)
    {
        $this
            ->setDiffAccountNoVat($diffAccountNoVat)
            ->setDiffAccountVat($diffAccountVat)
            ->setPriceDiff($priceDiff)
            ->setPriceDiffPercent($priceDiffPercent)
            ->setRevenueDiff($revenueDiff)
            ->setRevenueDiffPercent($revenueDiffPercent)
            ->setSupplierId($supplierId)
            ->setTravelType($travelType)
            ->setValidFrom($validFrom);
    }
    /**
     * Get diffAccountNoVat value
     * @return string|null
     */
    public function getDiffAccountNoVat(): ?string
    {
        return $this->diffAccountNoVat;
    }
    /**
     * Set diffAccountNoVat value
     * @param string $diffAccountNoVat
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
     */
    public function setDiffAccountNoVat(?string $diffAccountNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($diffAccountNoVat) && !is_string($diffAccountNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diffAccountNoVat, true), gettype($diffAccountNoVat)), __LINE__);
        }
        $this->diffAccountNoVat = $diffAccountNoVat;
        
        return $this;
    }
    /**
     * Get diffAccountVat value
     * @return string|null
     */
    public function getDiffAccountVat(): ?string
    {
        return $this->diffAccountVat;
    }
    /**
     * Set diffAccountVat value
     * @param string $diffAccountVat
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
     */
    public function setDiffAccountVat(?string $diffAccountVat = null): self
    {
        // validation for constraint: string
        if (!is_null($diffAccountVat) && !is_string($diffAccountVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diffAccountVat, true), gettype($diffAccountVat)), __LINE__);
        }
        $this->diffAccountVat = $diffAccountVat;
        
        return $this;
    }
    /**
     * Get priceDiff value
     * @return float|null
     */
    public function getPriceDiff(): ?float
    {
        return $this->priceDiff;
    }
    /**
     * Set priceDiff value
     * @param float $priceDiff
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
     */
    public function setPriceDiff(?float $priceDiff = null): self
    {
        // validation for constraint: float
        if (!is_null($priceDiff) && !(is_float($priceDiff) || is_numeric($priceDiff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceDiff, true), gettype($priceDiff)), __LINE__);
        }
        $this->priceDiff = $priceDiff;
        
        return $this;
    }
    /**
     * Get priceDiffPercent value
     * @return float|null
     */
    public function getPriceDiffPercent(): ?float
    {
        return $this->priceDiffPercent;
    }
    /**
     * Set priceDiffPercent value
     * @param float $priceDiffPercent
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
     */
    public function setPriceDiffPercent(?float $priceDiffPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($priceDiffPercent) && !(is_float($priceDiffPercent) || is_numeric($priceDiffPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceDiffPercent, true), gettype($priceDiffPercent)), __LINE__);
        }
        $this->priceDiffPercent = $priceDiffPercent;
        
        return $this;
    }
    /**
     * Get revenueDiff value
     * @return float|null
     */
    public function getRevenueDiff(): ?float
    {
        return $this->revenueDiff;
    }
    /**
     * Set revenueDiff value
     * @param float $revenueDiff
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
     */
    public function setRevenueDiff(?float $revenueDiff = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueDiff) && !(is_float($revenueDiff) || is_numeric($revenueDiff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueDiff, true), gettype($revenueDiff)), __LINE__);
        }
        $this->revenueDiff = $revenueDiff;
        
        return $this;
    }
    /**
     * Get revenueDiffPercent value
     * @return float|null
     */
    public function getRevenueDiffPercent(): ?float
    {
        return $this->revenueDiffPercent;
    }
    /**
     * Set revenueDiffPercent value
     * @param float $revenueDiffPercent
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
     */
    public function setRevenueDiffPercent(?float $revenueDiffPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueDiffPercent) && !(is_float($revenueDiffPercent) || is_numeric($revenueDiffPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueDiffPercent, true), gettype($revenueDiffPercent)), __LINE__);
        }
        $this->revenueDiffPercent = $revenueDiffPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemDiffDTO
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
