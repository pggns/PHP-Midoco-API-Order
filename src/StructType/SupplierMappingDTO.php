<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierMappingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierMappingDTO extends AbstractStructBase
{
    /**
     * The crsNameIn
     * @var string|null
     */
    protected ?string $crsNameIn = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isInheritable
     * @var bool|null
     */
    protected ?bool $isInheritable = null;
    /**
     * The mappingId
     * @var int|null
     */
    protected ?int $mappingId = null;
    /**
     * The sourceExtSystemIn
     * @var string|null
     */
    protected ?string $sourceExtSystemIn = null;
    /**
     * The supplierIdIn
     * @var string|null
     */
    protected ?string $supplierIdIn = null;
    /**
     * The supplierIdOut
     * @var string|null
     */
    protected ?string $supplierIdOut = null;
    /**
     * The traveltypeIn
     * @var string|null
     */
    protected ?string $traveltypeIn = null;
    /**
     * The traveltypeOut
     * @var string|null
     */
    protected ?string $traveltypeOut = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * Constructor method for SupplierMappingDTO
     * @uses SupplierMappingDTO::setCrsNameIn()
     * @uses SupplierMappingDTO::setIsActive()
     * @uses SupplierMappingDTO::setIsInheritable()
     * @uses SupplierMappingDTO::setMappingId()
     * @uses SupplierMappingDTO::setSourceExtSystemIn()
     * @uses SupplierMappingDTO::setSupplierIdIn()
     * @uses SupplierMappingDTO::setSupplierIdOut()
     * @uses SupplierMappingDTO::setTraveltypeIn()
     * @uses SupplierMappingDTO::setTraveltypeOut()
     * @uses SupplierMappingDTO::setUnitName()
     * @uses SupplierMappingDTO::setValidFrom()
     * @uses SupplierMappingDTO::setValidUntil()
     * @param string $crsNameIn
     * @param bool $isActive
     * @param bool $isInheritable
     * @param int $mappingId
     * @param string $sourceExtSystemIn
     * @param string $supplierIdIn
     * @param string $supplierIdOut
     * @param string $traveltypeIn
     * @param string $traveltypeOut
     * @param string $unitName
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?string $crsNameIn = null, ?bool $isActive = null, ?bool $isInheritable = null, ?int $mappingId = null, ?string $sourceExtSystemIn = null, ?string $supplierIdIn = null, ?string $supplierIdOut = null, ?string $traveltypeIn = null, ?string $traveltypeOut = null, ?string $unitName = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setCrsNameIn($crsNameIn)
            ->setIsActive($isActive)
            ->setIsInheritable($isInheritable)
            ->setMappingId($mappingId)
            ->setSourceExtSystemIn($sourceExtSystemIn)
            ->setSupplierIdIn($supplierIdIn)
            ->setSupplierIdOut($supplierIdOut)
            ->setTraveltypeIn($traveltypeIn)
            ->setTraveltypeOut($traveltypeOut)
            ->setUnitName($unitName)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
    }
    /**
     * Get crsNameIn value
     * @return string|null
     */
    public function getCrsNameIn(): ?string
    {
        return $this->crsNameIn;
    }
    /**
     * Set crsNameIn value
     * @param string $crsNameIn
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setCrsNameIn(?string $crsNameIn = null): self
    {
        // validation for constraint: string
        if (!is_null($crsNameIn) && !is_string($crsNameIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsNameIn, true), gettype($crsNameIn)), __LINE__);
        }
        $this->crsNameIn = $crsNameIn;
        
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
        return $this;
    }
    /**
     * Get isInheritable value
     * @return bool|null
     */
    public function getIsInheritable(): ?bool
    {
        return $this->isInheritable;
    }
    /**
     * Set isInheritable value
     * @param bool $isInheritable
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setIsInheritable(?bool $isInheritable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritable) && !is_bool($isInheritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritable, true), gettype($isInheritable)), __LINE__);
        }
        $this->isInheritable = $isInheritable;
        
        return $this;
    }
    /**
     * Get mappingId value
     * @return int|null
     */
    public function getMappingId(): ?int
    {
        return $this->mappingId;
    }
    /**
     * Set mappingId value
     * @param int $mappingId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setMappingId(?int $mappingId = null): self
    {
        // validation for constraint: int
        if (!is_null($mappingId) && !(is_int($mappingId) || ctype_digit($mappingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mappingId, true), gettype($mappingId)), __LINE__);
        }
        $this->mappingId = $mappingId;
        
        return $this;
    }
    /**
     * Get sourceExtSystemIn value
     * @return string|null
     */
    public function getSourceExtSystemIn(): ?string
    {
        return $this->sourceExtSystemIn;
    }
    /**
     * Set sourceExtSystemIn value
     * @param string $sourceExtSystemIn
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setSourceExtSystemIn(?string $sourceExtSystemIn = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceExtSystemIn) && !is_string($sourceExtSystemIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceExtSystemIn, true), gettype($sourceExtSystemIn)), __LINE__);
        }
        $this->sourceExtSystemIn = $sourceExtSystemIn;
        
        return $this;
    }
    /**
     * Get supplierIdIn value
     * @return string|null
     */
    public function getSupplierIdIn(): ?string
    {
        return $this->supplierIdIn;
    }
    /**
     * Set supplierIdIn value
     * @param string $supplierIdIn
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setSupplierIdIn(?string $supplierIdIn = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierIdIn) && !is_string($supplierIdIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierIdIn, true), gettype($supplierIdIn)), __LINE__);
        }
        $this->supplierIdIn = $supplierIdIn;
        
        return $this;
    }
    /**
     * Get supplierIdOut value
     * @return string|null
     */
    public function getSupplierIdOut(): ?string
    {
        return $this->supplierIdOut;
    }
    /**
     * Set supplierIdOut value
     * @param string $supplierIdOut
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setSupplierIdOut(?string $supplierIdOut = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierIdOut) && !is_string($supplierIdOut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierIdOut, true), gettype($supplierIdOut)), __LINE__);
        }
        $this->supplierIdOut = $supplierIdOut;
        
        return $this;
    }
    /**
     * Get traveltypeIn value
     * @return string|null
     */
    public function getTraveltypeIn(): ?string
    {
        return $this->traveltypeIn;
    }
    /**
     * Set traveltypeIn value
     * @param string $traveltypeIn
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setTraveltypeIn(?string $traveltypeIn = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltypeIn) && !is_string($traveltypeIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltypeIn, true), gettype($traveltypeIn)), __LINE__);
        }
        $this->traveltypeIn = $traveltypeIn;
        
        return $this;
    }
    /**
     * Get traveltypeOut value
     * @return string|null
     */
    public function getTraveltypeOut(): ?string
    {
        return $this->traveltypeOut;
    }
    /**
     * Set traveltypeOut value
     * @param string $traveltypeOut
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setTraveltypeOut(?string $traveltypeOut = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltypeOut) && !is_string($traveltypeOut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltypeOut, true), gettype($traveltypeOut)), __LINE__);
        }
        $this->traveltypeOut = $traveltypeOut;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
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
    /**
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMappingDTO
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
}
