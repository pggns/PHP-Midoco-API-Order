<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hedgeCurrencyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class HedgeCurrencyRequest extends AbstractStructBase
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
     * The date
     * @var string|null
     */
    protected ?string $date = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for hedgeCurrencyRequest
     * @uses HedgeCurrencyRequest::setFromCurrency()
     * @uses HedgeCurrencyRequest::setToCurrency()
     * @uses HedgeCurrencyRequest::setDate()
     * @uses HedgeCurrencyRequest::setUnitName()
     * @param string $fromCurrency
     * @param string $toCurrency
     * @param string $date
     * @param string $unitName
     */
    public function __construct(?string $fromCurrency = null, ?string $toCurrency = null, ?string $date = null, ?string $unitName = null)
    {
        $this
            ->setFromCurrency($fromCurrency)
            ->setToCurrency($toCurrency)
            ->setDate($date)
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
     * @return \Pggns\MidocoApi\Order\StructType\HedgeCurrencyRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\HedgeCurrencyRequest
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
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Pggns\MidocoApi\Order\StructType\HedgeCurrencyRequest
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\HedgeCurrencyRequest
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
