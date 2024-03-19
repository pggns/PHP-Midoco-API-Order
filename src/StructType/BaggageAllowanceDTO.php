<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageAllowanceDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BaggageAllowanceDTO extends AbstractStructBase
{
    /**
     * The airlineCode
     * @var string|null
     */
    protected ?string $airlineCode = null;
    /**
     * The allowanceInKg
     * @var int|null
     */
    protected ?int $allowanceInKg = null;
    /**
     * The baggageAllowanceId
     * @var int|null
     */
    protected ?int $baggageAllowanceId = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isInherited
     * @var bool|null
     */
    protected ?bool $isInherited = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
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
     * Constructor method for BaggageAllowanceDTO
     * @uses BaggageAllowanceDTO::setAirlineCode()
     * @uses BaggageAllowanceDTO::setAllowanceInKg()
     * @uses BaggageAllowanceDTO::setBaggageAllowanceId()
     * @uses BaggageAllowanceDTO::setIsActive()
     * @uses BaggageAllowanceDTO::setIsInherited()
     * @uses BaggageAllowanceDTO::setSupplierId()
     * @uses BaggageAllowanceDTO::setValidFrom()
     * @uses BaggageAllowanceDTO::setValidUntil()
     * @param string $airlineCode
     * @param int $allowanceInKg
     * @param int $baggageAllowanceId
     * @param bool $isActive
     * @param bool $isInherited
     * @param string $supplierId
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?string $airlineCode = null, ?int $allowanceInKg = null, ?int $baggageAllowanceId = null, ?bool $isActive = null, ?bool $isInherited = null, ?string $supplierId = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setAirlineCode($airlineCode)
            ->setAllowanceInKg($allowanceInKg)
            ->setBaggageAllowanceId($baggageAllowanceId)
            ->setIsActive($isActive)
            ->setIsInherited($isInherited)
            ->setSupplierId($supplierId)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
    }
    /**
     * Get airlineCode value
     * @return string|null
     */
    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }
    /**
     * Set airlineCode value
     * @param string $airlineCode
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowanceDTO
     */
    public function setAirlineCode(?string $airlineCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineCode, true), gettype($airlineCode)), __LINE__);
        }
        $this->airlineCode = $airlineCode;
        
        return $this;
    }
    /**
     * Get allowanceInKg value
     * @return int|null
     */
    public function getAllowanceInKg(): ?int
    {
        return $this->allowanceInKg;
    }
    /**
     * Set allowanceInKg value
     * @param int $allowanceInKg
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowanceDTO
     */
    public function setAllowanceInKg(?int $allowanceInKg = null): self
    {
        // validation for constraint: int
        if (!is_null($allowanceInKg) && !(is_int($allowanceInKg) || ctype_digit($allowanceInKg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($allowanceInKg, true), gettype($allowanceInKg)), __LINE__);
        }
        $this->allowanceInKg = $allowanceInKg;
        
        return $this;
    }
    /**
     * Get baggageAllowanceId value
     * @return int|null
     */
    public function getBaggageAllowanceId(): ?int
    {
        return $this->baggageAllowanceId;
    }
    /**
     * Set baggageAllowanceId value
     * @param int $baggageAllowanceId
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowanceDTO
     */
    public function setBaggageAllowanceId(?int $baggageAllowanceId = null): self
    {
        // validation for constraint: int
        if (!is_null($baggageAllowanceId) && !(is_int($baggageAllowanceId) || ctype_digit($baggageAllowanceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($baggageAllowanceId, true), gettype($baggageAllowanceId)), __LINE__);
        }
        $this->baggageAllowanceId = $baggageAllowanceId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowanceDTO
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
     * Get isInherited value
     * @return bool|null
     */
    public function getIsInherited(): ?bool
    {
        return $this->isInherited;
    }
    /**
     * Set isInherited value
     * @param bool $isInherited
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowanceDTO
     */
    public function setIsInherited(?bool $isInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInherited) && !is_bool($isInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInherited, true), gettype($isInherited)), __LINE__);
        }
        $this->isInherited = $isInherited;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowanceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowanceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowanceDTO
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
