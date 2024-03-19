<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExchangeRateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExchangeRateRequest extends AbstractStructBase
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
     * The lookupMethod
     * Meta information extracted from the WSDL
     * - documentation: CURRENCY_LOOKUP_AVG = 1; CURRENCY_LOOKUP_BUY = 2; CURRENCY_LOOKUP_SELL = 4;
     * - default: 1
     * @var int|null
     */
    protected ?int $lookupMethod = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * Constructor method for GetExchangeRateRequest
     * @uses GetExchangeRateRequest::setFromCurrency()
     * @uses GetExchangeRateRequest::setToCurrency()
     * @uses GetExchangeRateRequest::setLookupMethod()
     * @uses GetExchangeRateRequest::setValidDate()
     * @param string $fromCurrency
     * @param string $toCurrency
     * @param int $lookupMethod
     * @param string $validDate
     */
    public function __construct(?string $fromCurrency = null, ?string $toCurrency = null, ?int $lookupMethod = 1, ?string $validDate = null)
    {
        $this
            ->setFromCurrency($fromCurrency)
            ->setToCurrency($toCurrency)
            ->setLookupMethod($lookupMethod)
            ->setValidDate($validDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExchangeRateRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExchangeRateRequest
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
     * Get lookupMethod value
     * @return int|null
     */
    public function getLookupMethod(): ?int
    {
        return $this->lookupMethod;
    }
    /**
     * Set lookupMethod value
     * @param int $lookupMethod
     * @return \Pggns\MidocoApi\Order\StructType\GetExchangeRateRequest
     */
    public function setLookupMethod(?int $lookupMethod = 1): self
    {
        // validation for constraint: int
        if (!is_null($lookupMethod) && !(is_int($lookupMethod) || ctype_digit($lookupMethod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lookupMethod, true), gettype($lookupMethod)), __LINE__);
        }
        $this->lookupMethod = $lookupMethod;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\GetExchangeRateRequest
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
}
