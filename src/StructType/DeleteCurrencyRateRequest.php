<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCurrencyRateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCurrencyRateRequest extends AbstractStructBase
{
    /**
     * The fromCurrency
     * @var string|null
     */
    protected ?string $fromCurrency = null;
    /**
     * The toCurrency
     * @var string|null
     */
    protected ?string $toCurrency = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The isGlobal
     * @var bool|null
     */
    protected ?bool $isGlobal = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for DeleteCurrencyRateRequest
     * @uses DeleteCurrencyRateRequest::setFromCurrency()
     * @uses DeleteCurrencyRateRequest::setToCurrency()
     * @uses DeleteCurrencyRateRequest::setValidFrom()
     * @uses DeleteCurrencyRateRequest::setIsGlobal()
     * @uses DeleteCurrencyRateRequest::setUnitName()
     * @param string $fromCurrency
     * @param string $toCurrency
     * @param string $validFrom
     * @param bool $isGlobal
     * @param string $unitName
     */
    public function __construct(?string $fromCurrency = null, ?string $toCurrency = null, ?string $validFrom = null, ?bool $isGlobal = null, ?string $unitName = null)
    {
        $this
            ->setFromCurrency($fromCurrency)
            ->setToCurrency($toCurrency)
            ->setValidFrom($validFrom)
            ->setIsGlobal($isGlobal)
            ->setUnitName($unitName);
    }
    /**
     * Get fromCurrency value
     * @return string|null
     */
    public function getFromCurrency(): ?string
    {
        return $this->fromCurrency;
    }
    /**
     * Set fromCurrency value
     * @param string $fromCurrency
     * @return \Pggns\MidocoApi\Order\StructType\DeleteCurrencyRateRequest
     */
    public function setFromCurrency(?string $fromCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($fromCurrency) && !is_string($fromCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCurrency, true), gettype($fromCurrency)), __LINE__);
        }
        $this->fromCurrency = $fromCurrency;
        
        return $this;
    }
    /**
     * Get toCurrency value
     * @return string|null
     */
    public function getToCurrency(): ?string
    {
        return $this->toCurrency;
    }
    /**
     * Set toCurrency value
     * @param string $toCurrency
     * @return \Pggns\MidocoApi\Order\StructType\DeleteCurrencyRateRequest
     */
    public function setToCurrency(?string $toCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($toCurrency) && !is_string($toCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toCurrency, true), gettype($toCurrency)), __LINE__);
        }
        $this->toCurrency = $toCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteCurrencyRateRequest
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
     * Get isGlobal value
     * @return bool|null
     */
    public function getIsGlobal(): ?bool
    {
        return $this->isGlobal;
    }
    /**
     * Set isGlobal value
     * @param bool $isGlobal
     * @return \Pggns\MidocoApi\Order\StructType\DeleteCurrencyRateRequest
     */
    public function setIsGlobal(?bool $isGlobal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGlobal) && !is_bool($isGlobal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGlobal, true), gettype($isGlobal)), __LINE__);
        }
        $this->isGlobal = $isGlobal;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteCurrencyRateRequest
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
}
