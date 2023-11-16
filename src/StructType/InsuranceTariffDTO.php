<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceTariffDTO StructType
 * @subpackage Structs
 */
class InsuranceTariffDTO extends AbstractStructBase
{
    /**
     * The enforceEuPassenger
     * @var bool|null
     */
    protected ?bool $enforceEuPassenger = null;
    /**
     * The extensionAllowed
     * @var bool|null
     */
    protected ?bool $extensionAllowed = null;
    /**
     * The fullTariff
     * @var float|null
     */
    protected ?float $fullTariff = null;
    /**
     * The insuranceTariffId
     * @var int|null
     */
    protected ?int $insuranceTariffId = null;
    /**
     * The insurer
     * @var string|null
     */
    protected ?string $insurer = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isYearly
     * @var bool|null
     */
    protected ?bool $isYearly = null;
    /**
     * The manualPrice
     * @var bool|null
     */
    protected ?bool $manualPrice = null;
    /**
     * The partialStorno
     * @var bool|null
     */
    protected ?bool $partialStorno = null;
    /**
     * The tariffCode
     * @var string|null
     */
    protected ?string $tariffCode = null;
    /**
     * The tariffPerPassengerAdditional
     * @var float|null
     */
    protected ?float $tariffPerPassengerAdditional = null;
    /**
     * The tariffPerPassengerDaily
     * @var float|null
     */
    protected ?float $tariffPerPassengerDaily = null;
    /**
     * The tariffPerPassengerPercent
     * @var float|null
     */
    protected ?float $tariffPerPassengerPercent = null;
    /**
     * The tariffType
     * @var string|null
     */
    protected ?string $tariffType = null;
    /**
     * The travelDurationMax
     * @var int|null
     */
    protected ?int $travelDurationMax = null;
    /**
     * The travelDurationMin
     * @var int|null
     */
    protected ?int $travelDurationMin = null;
    /**
     * The travelPriceMax
     * @var float|null
     */
    protected ?float $travelPriceMax = null;
    /**
     * The travelPriceMin
     * @var float|null
     */
    protected ?float $travelPriceMin = null;
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
     * Constructor method for InsuranceTariffDTO
     * @uses InsuranceTariffDTO::setEnforceEuPassenger()
     * @uses InsuranceTariffDTO::setExtensionAllowed()
     * @uses InsuranceTariffDTO::setFullTariff()
     * @uses InsuranceTariffDTO::setInsuranceTariffId()
     * @uses InsuranceTariffDTO::setInsurer()
     * @uses InsuranceTariffDTO::setIsActive()
     * @uses InsuranceTariffDTO::setIsYearly()
     * @uses InsuranceTariffDTO::setManualPrice()
     * @uses InsuranceTariffDTO::setPartialStorno()
     * @uses InsuranceTariffDTO::setTariffCode()
     * @uses InsuranceTariffDTO::setTariffPerPassengerAdditional()
     * @uses InsuranceTariffDTO::setTariffPerPassengerDaily()
     * @uses InsuranceTariffDTO::setTariffPerPassengerPercent()
     * @uses InsuranceTariffDTO::setTariffType()
     * @uses InsuranceTariffDTO::setTravelDurationMax()
     * @uses InsuranceTariffDTO::setTravelDurationMin()
     * @uses InsuranceTariffDTO::setTravelPriceMax()
     * @uses InsuranceTariffDTO::setTravelPriceMin()
     * @uses InsuranceTariffDTO::setValidFrom()
     * @uses InsuranceTariffDTO::setValidTo()
     * @param bool $enforceEuPassenger
     * @param bool $extensionAllowed
     * @param float $fullTariff
     * @param int $insuranceTariffId
     * @param string $insurer
     * @param bool $isActive
     * @param bool $isYearly
     * @param bool $manualPrice
     * @param bool $partialStorno
     * @param string $tariffCode
     * @param float $tariffPerPassengerAdditional
     * @param float $tariffPerPassengerDaily
     * @param float $tariffPerPassengerPercent
     * @param string $tariffType
     * @param int $travelDurationMax
     * @param int $travelDurationMin
     * @param float $travelPriceMax
     * @param float $travelPriceMin
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?bool $enforceEuPassenger = null, ?bool $extensionAllowed = null, ?float $fullTariff = null, ?int $insuranceTariffId = null, ?string $insurer = null, ?bool $isActive = null, ?bool $isYearly = null, ?bool $manualPrice = null, ?bool $partialStorno = null, ?string $tariffCode = null, ?float $tariffPerPassengerAdditional = null, ?float $tariffPerPassengerDaily = null, ?float $tariffPerPassengerPercent = null, ?string $tariffType = null, ?int $travelDurationMax = null, ?int $travelDurationMin = null, ?float $travelPriceMax = null, ?float $travelPriceMin = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setEnforceEuPassenger($enforceEuPassenger)
            ->setExtensionAllowed($extensionAllowed)
            ->setFullTariff($fullTariff)
            ->setInsuranceTariffId($insuranceTariffId)
            ->setInsurer($insurer)
            ->setIsActive($isActive)
            ->setIsYearly($isYearly)
            ->setManualPrice($manualPrice)
            ->setPartialStorno($partialStorno)
            ->setTariffCode($tariffCode)
            ->setTariffPerPassengerAdditional($tariffPerPassengerAdditional)
            ->setTariffPerPassengerDaily($tariffPerPassengerDaily)
            ->setTariffPerPassengerPercent($tariffPerPassengerPercent)
            ->setTariffType($tariffType)
            ->setTravelDurationMax($travelDurationMax)
            ->setTravelDurationMin($travelDurationMin)
            ->setTravelPriceMax($travelPriceMax)
            ->setTravelPriceMin($travelPriceMin)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get enforceEuPassenger value
     * @return bool|null
     */
    public function getEnforceEuPassenger(): ?bool
    {
        return $this->enforceEuPassenger;
    }
    /**
     * Set enforceEuPassenger value
     * @param bool $enforceEuPassenger
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setEnforceEuPassenger(?bool $enforceEuPassenger = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enforceEuPassenger) && !is_bool($enforceEuPassenger)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enforceEuPassenger, true), gettype($enforceEuPassenger)), __LINE__);
        }
        $this->enforceEuPassenger = $enforceEuPassenger;
        
        return $this;
    }
    /**
     * Get extensionAllowed value
     * @return bool|null
     */
    public function getExtensionAllowed(): ?bool
    {
        return $this->extensionAllowed;
    }
    /**
     * Set extensionAllowed value
     * @param bool $extensionAllowed
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setExtensionAllowed(?bool $extensionAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($extensionAllowed) && !is_bool($extensionAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($extensionAllowed, true), gettype($extensionAllowed)), __LINE__);
        }
        $this->extensionAllowed = $extensionAllowed;
        
        return $this;
    }
    /**
     * Get fullTariff value
     * @return float|null
     */
    public function getFullTariff(): ?float
    {
        return $this->fullTariff;
    }
    /**
     * Set fullTariff value
     * @param float $fullTariff
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setFullTariff(?float $fullTariff = null): self
    {
        // validation for constraint: float
        if (!is_null($fullTariff) && !(is_float($fullTariff) || is_numeric($fullTariff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fullTariff, true), gettype($fullTariff)), __LINE__);
        }
        $this->fullTariff = $fullTariff;
        
        return $this;
    }
    /**
     * Get insuranceTariffId value
     * @return int|null
     */
    public function getInsuranceTariffId(): ?int
    {
        return $this->insuranceTariffId;
    }
    /**
     * Set insuranceTariffId value
     * @param int $insuranceTariffId
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setInsuranceTariffId(?int $insuranceTariffId = null): self
    {
        // validation for constraint: int
        if (!is_null($insuranceTariffId) && !(is_int($insuranceTariffId) || ctype_digit($insuranceTariffId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insuranceTariffId, true), gettype($insuranceTariffId)), __LINE__);
        }
        $this->insuranceTariffId = $insuranceTariffId;
        
        return $this;
    }
    /**
     * Get insurer value
     * @return string|null
     */
    public function getInsurer(): ?string
    {
        return $this->insurer;
    }
    /**
     * Set insurer value
     * @param string $insurer
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setInsurer(?string $insurer = null): self
    {
        // validation for constraint: string
        if (!is_null($insurer) && !is_string($insurer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurer, true), gettype($insurer)), __LINE__);
        }
        $this->insurer = $insurer;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
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
     * Get isYearly value
     * @return bool|null
     */
    public function getIsYearly(): ?bool
    {
        return $this->isYearly;
    }
    /**
     * Set isYearly value
     * @param bool $isYearly
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setIsYearly(?bool $isYearly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isYearly) && !is_bool($isYearly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isYearly, true), gettype($isYearly)), __LINE__);
        }
        $this->isYearly = $isYearly;
        
        return $this;
    }
    /**
     * Get manualPrice value
     * @return bool|null
     */
    public function getManualPrice(): ?bool
    {
        return $this->manualPrice;
    }
    /**
     * Set manualPrice value
     * @param bool $manualPrice
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setManualPrice(?bool $manualPrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manualPrice) && !is_bool($manualPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manualPrice, true), gettype($manualPrice)), __LINE__);
        }
        $this->manualPrice = $manualPrice;
        
        return $this;
    }
    /**
     * Get partialStorno value
     * @return bool|null
     */
    public function getPartialStorno(): ?bool
    {
        return $this->partialStorno;
    }
    /**
     * Set partialStorno value
     * @param bool $partialStorno
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setPartialStorno(?bool $partialStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partialStorno) && !is_bool($partialStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partialStorno, true), gettype($partialStorno)), __LINE__);
        }
        $this->partialStorno = $partialStorno;
        
        return $this;
    }
    /**
     * Get tariffCode value
     * @return string|null
     */
    public function getTariffCode(): ?string
    {
        return $this->tariffCode;
    }
    /**
     * Set tariffCode value
     * @param string $tariffCode
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setTariffCode(?string $tariffCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffCode) && !is_string($tariffCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffCode, true), gettype($tariffCode)), __LINE__);
        }
        $this->tariffCode = $tariffCode;
        
        return $this;
    }
    /**
     * Get tariffPerPassengerAdditional value
     * @return float|null
     */
    public function getTariffPerPassengerAdditional(): ?float
    {
        return $this->tariffPerPassengerAdditional;
    }
    /**
     * Set tariffPerPassengerAdditional value
     * @param float $tariffPerPassengerAdditional
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setTariffPerPassengerAdditional(?float $tariffPerPassengerAdditional = null): self
    {
        // validation for constraint: float
        if (!is_null($tariffPerPassengerAdditional) && !(is_float($tariffPerPassengerAdditional) || is_numeric($tariffPerPassengerAdditional))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tariffPerPassengerAdditional, true), gettype($tariffPerPassengerAdditional)), __LINE__);
        }
        $this->tariffPerPassengerAdditional = $tariffPerPassengerAdditional;
        
        return $this;
    }
    /**
     * Get tariffPerPassengerDaily value
     * @return float|null
     */
    public function getTariffPerPassengerDaily(): ?float
    {
        return $this->tariffPerPassengerDaily;
    }
    /**
     * Set tariffPerPassengerDaily value
     * @param float $tariffPerPassengerDaily
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setTariffPerPassengerDaily(?float $tariffPerPassengerDaily = null): self
    {
        // validation for constraint: float
        if (!is_null($tariffPerPassengerDaily) && !(is_float($tariffPerPassengerDaily) || is_numeric($tariffPerPassengerDaily))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tariffPerPassengerDaily, true), gettype($tariffPerPassengerDaily)), __LINE__);
        }
        $this->tariffPerPassengerDaily = $tariffPerPassengerDaily;
        
        return $this;
    }
    /**
     * Get tariffPerPassengerPercent value
     * @return float|null
     */
    public function getTariffPerPassengerPercent(): ?float
    {
        return $this->tariffPerPassengerPercent;
    }
    /**
     * Set tariffPerPassengerPercent value
     * @param float $tariffPerPassengerPercent
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setTariffPerPassengerPercent(?float $tariffPerPassengerPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($tariffPerPassengerPercent) && !(is_float($tariffPerPassengerPercent) || is_numeric($tariffPerPassengerPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tariffPerPassengerPercent, true), gettype($tariffPerPassengerPercent)), __LINE__);
        }
        $this->tariffPerPassengerPercent = $tariffPerPassengerPercent;
        
        return $this;
    }
    /**
     * Get tariffType value
     * @return string|null
     */
    public function getTariffType(): ?string
    {
        return $this->tariffType;
    }
    /**
     * Set tariffType value
     * @param string $tariffType
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setTariffType(?string $tariffType = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffType) && !is_string($tariffType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffType, true), gettype($tariffType)), __LINE__);
        }
        $this->tariffType = $tariffType;
        
        return $this;
    }
    /**
     * Get travelDurationMax value
     * @return int|null
     */
    public function getTravelDurationMax(): ?int
    {
        return $this->travelDurationMax;
    }
    /**
     * Set travelDurationMax value
     * @param int $travelDurationMax
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setTravelDurationMax(?int $travelDurationMax = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDurationMax) && !(is_int($travelDurationMax) || ctype_digit($travelDurationMax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDurationMax, true), gettype($travelDurationMax)), __LINE__);
        }
        $this->travelDurationMax = $travelDurationMax;
        
        return $this;
    }
    /**
     * Get travelDurationMin value
     * @return int|null
     */
    public function getTravelDurationMin(): ?int
    {
        return $this->travelDurationMin;
    }
    /**
     * Set travelDurationMin value
     * @param int $travelDurationMin
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setTravelDurationMin(?int $travelDurationMin = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDurationMin) && !(is_int($travelDurationMin) || ctype_digit($travelDurationMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDurationMin, true), gettype($travelDurationMin)), __LINE__);
        }
        $this->travelDurationMin = $travelDurationMin;
        
        return $this;
    }
    /**
     * Get travelPriceMax value
     * @return float|null
     */
    public function getTravelPriceMax(): ?float
    {
        return $this->travelPriceMax;
    }
    /**
     * Set travelPriceMax value
     * @param float $travelPriceMax
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setTravelPriceMax(?float $travelPriceMax = null): self
    {
        // validation for constraint: float
        if (!is_null($travelPriceMax) && !(is_float($travelPriceMax) || is_numeric($travelPriceMax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelPriceMax, true), gettype($travelPriceMax)), __LINE__);
        }
        $this->travelPriceMax = $travelPriceMax;
        
        return $this;
    }
    /**
     * Get travelPriceMin value
     * @return float|null
     */
    public function getTravelPriceMin(): ?float
    {
        return $this->travelPriceMin;
    }
    /**
     * Set travelPriceMin value
     * @param float $travelPriceMin
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
     */
    public function setTravelPriceMin(?float $travelPriceMin = null): self
    {
        // validation for constraint: float
        if (!is_null($travelPriceMin) && !(is_float($travelPriceMin) || is_numeric($travelPriceMin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelPriceMin, true), gettype($travelPriceMin)), __LINE__);
        }
        $this->travelPriceMin = $travelPriceMin;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDTO
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
