<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DunningLetterDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DunningLetterDTO extends AbstractStructBase
{
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The daysLimit
     * @var int|null
     */
    protected ?int $daysLimit = null;
    /**
     * The dunningCharge
     * @var float|null
     */
    protected ?float $dunningCharge = null;
    /**
     * The dunningLevel
     * @var int|null
     */
    protected ?int $dunningLevel = null;
    /**
     * The forDeposit
     * @var bool|null
     */
    protected ?bool $forDeposit = null;
    /**
     * The forStorno
     * @var bool|null
     */
    protected ?bool $forStorno = null;
    /**
     * The mediaType
     * @var string|null
     */
    protected ?string $mediaType = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The useStornoDate
     * @var bool|null
     */
    protected ?bool $useStornoDate = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for DunningLetterDTO
     * @uses DunningLetterDTO::setCode()
     * @uses DunningLetterDTO::setDaysLimit()
     * @uses DunningLetterDTO::setDunningCharge()
     * @uses DunningLetterDTO::setDunningLevel()
     * @uses DunningLetterDTO::setForDeposit()
     * @uses DunningLetterDTO::setForStorno()
     * @uses DunningLetterDTO::setMediaType()
     * @uses DunningLetterDTO::setPrintType()
     * @uses DunningLetterDTO::setSupplierId()
     * @uses DunningLetterDTO::setUseStornoDate()
     * @uses DunningLetterDTO::setValidFrom()
     * @uses DunningLetterDTO::setValidTo()
     * @param string $code
     * @param int $daysLimit
     * @param float $dunningCharge
     * @param int $dunningLevel
     * @param bool $forDeposit
     * @param bool $forStorno
     * @param string $mediaType
     * @param string $printType
     * @param string $supplierId
     * @param bool $useStornoDate
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $code = null, ?int $daysLimit = null, ?float $dunningCharge = null, ?int $dunningLevel = null, ?bool $forDeposit = null, ?bool $forStorno = null, ?string $mediaType = null, ?string $printType = null, ?string $supplierId = null, ?bool $useStornoDate = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setCode($code)
            ->setDaysLimit($daysLimit)
            ->setDunningCharge($dunningCharge)
            ->setDunningLevel($dunningLevel)
            ->setForDeposit($forDeposit)
            ->setForStorno($forStorno)
            ->setMediaType($mediaType)
            ->setPrintType($printType)
            ->setSupplierId($supplierId)
            ->setUseStornoDate($useStornoDate)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get daysLimit value
     * @return int|null
     */
    public function getDaysLimit(): ?int
    {
        return $this->daysLimit;
    }
    /**
     * Set daysLimit value
     * @param int $daysLimit
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setDaysLimit(?int $daysLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($daysLimit) && !(is_int($daysLimit) || ctype_digit($daysLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysLimit, true), gettype($daysLimit)), __LINE__);
        }
        $this->daysLimit = $daysLimit;
        
        return $this;
    }
    /**
     * Get dunningCharge value
     * @return float|null
     */
    public function getDunningCharge(): ?float
    {
        return $this->dunningCharge;
    }
    /**
     * Set dunningCharge value
     * @param float $dunningCharge
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setDunningCharge(?float $dunningCharge = null): self
    {
        // validation for constraint: float
        if (!is_null($dunningCharge) && !(is_float($dunningCharge) || is_numeric($dunningCharge))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dunningCharge, true), gettype($dunningCharge)), __LINE__);
        }
        $this->dunningCharge = $dunningCharge;
        
        return $this;
    }
    /**
     * Get dunningLevel value
     * @return int|null
     */
    public function getDunningLevel(): ?int
    {
        return $this->dunningLevel;
    }
    /**
     * Set dunningLevel value
     * @param int $dunningLevel
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setDunningLevel(?int $dunningLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningLevel) && !(is_int($dunningLevel) || ctype_digit($dunningLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningLevel, true), gettype($dunningLevel)), __LINE__);
        }
        $this->dunningLevel = $dunningLevel;
        
        return $this;
    }
    /**
     * Get forDeposit value
     * @return bool|null
     */
    public function getForDeposit(): ?bool
    {
        return $this->forDeposit;
    }
    /**
     * Set forDeposit value
     * @param bool $forDeposit
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setForDeposit(?bool $forDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forDeposit) && !is_bool($forDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forDeposit, true), gettype($forDeposit)), __LINE__);
        }
        $this->forDeposit = $forDeposit;
        
        return $this;
    }
    /**
     * Get forStorno value
     * @return bool|null
     */
    public function getForStorno(): ?bool
    {
        return $this->forStorno;
    }
    /**
     * Set forStorno value
     * @param bool $forStorno
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setForStorno(?bool $forStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forStorno) && !is_bool($forStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forStorno, true), gettype($forStorno)), __LINE__);
        }
        $this->forStorno = $forStorno;
        
        return $this;
    }
    /**
     * Get mediaType value
     * @return string|null
     */
    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }
    /**
     * Set mediaType value
     * @param string $mediaType
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setMediaType(?string $mediaType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaType) && !is_string($mediaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaType, true), gettype($mediaType)), __LINE__);
        }
        $this->mediaType = $mediaType;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
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
     * Get useStornoDate value
     * @return bool|null
     */
    public function getUseStornoDate(): ?bool
    {
        return $this->useStornoDate;
    }
    /**
     * Set useStornoDate value
     * @param bool $useStornoDate
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setUseStornoDate(?bool $useStornoDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useStornoDate) && !is_bool($useStornoDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useStornoDate, true), gettype($useStornoDate)), __LINE__);
        }
        $this->useStornoDate = $useStornoDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
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
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
