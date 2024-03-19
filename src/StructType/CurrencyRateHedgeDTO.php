<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyRateHedgeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CurrencyRateHedgeDTO extends AbstractStructBase
{
    /**
     * The fromCurrency
     * @var string|null
     */
    protected ?string $fromCurrency = null;
    /**
     * The rateAvg
     * @var float|null
     */
    protected ?float $rateAvg = null;
    /**
     * The rateBuy
     * @var float|null
     */
    protected ?float $rateBuy = null;
    /**
     * The rateSell
     * @var float|null
     */
    protected ?float $rateSell = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The toCurrency
     * @var string|null
     */
    protected ?string $toCurrency = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
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
     * Constructor method for CurrencyRateHedgeDTO
     * @uses CurrencyRateHedgeDTO::setFromCurrency()
     * @uses CurrencyRateHedgeDTO::setRateAvg()
     * @uses CurrencyRateHedgeDTO::setRateBuy()
     * @uses CurrencyRateHedgeDTO::setRateSell()
     * @uses CurrencyRateHedgeDTO::setTimestamp()
     * @uses CurrencyRateHedgeDTO::setToCurrency()
     * @uses CurrencyRateHedgeDTO::setUnitName()
     * @uses CurrencyRateHedgeDTO::setUserId()
     * @uses CurrencyRateHedgeDTO::setValidFrom()
     * @uses CurrencyRateHedgeDTO::setValidUntil()
     * @param string $fromCurrency
     * @param float $rateAvg
     * @param float $rateBuy
     * @param float $rateSell
     * @param string $timestamp
     * @param string $toCurrency
     * @param string $unitName
     * @param int $userId
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?string $fromCurrency = null, ?float $rateAvg = null, ?float $rateBuy = null, ?float $rateSell = null, ?string $timestamp = null, ?string $toCurrency = null, ?string $unitName = null, ?int $userId = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setFromCurrency($fromCurrency)
            ->setRateAvg($rateAvg)
            ->setRateBuy($rateBuy)
            ->setRateSell($rateSell)
            ->setTimestamp($timestamp)
            ->setToCurrency($toCurrency)
            ->setUnitName($unitName)
            ->setUserId($userId)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
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
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
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
     * Get rateAvg value
     * @return float|null
     */
    public function getRateAvg(): ?float
    {
        return $this->rateAvg;
    }
    /**
     * Set rateAvg value
     * @param float $rateAvg
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
     */
    public function setRateAvg(?float $rateAvg = null): self
    {
        // validation for constraint: float
        if (!is_null($rateAvg) && !(is_float($rateAvg) || is_numeric($rateAvg))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rateAvg, true), gettype($rateAvg)), __LINE__);
        }
        $this->rateAvg = $rateAvg;
        
        return $this;
    }
    /**
     * Get rateBuy value
     * @return float|null
     */
    public function getRateBuy(): ?float
    {
        return $this->rateBuy;
    }
    /**
     * Set rateBuy value
     * @param float $rateBuy
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
     */
    public function setRateBuy(?float $rateBuy = null): self
    {
        // validation for constraint: float
        if (!is_null($rateBuy) && !(is_float($rateBuy) || is_numeric($rateBuy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rateBuy, true), gettype($rateBuy)), __LINE__);
        }
        $this->rateBuy = $rateBuy;
        
        return $this;
    }
    /**
     * Get rateSell value
     * @return float|null
     */
    public function getRateSell(): ?float
    {
        return $this->rateSell;
    }
    /**
     * Set rateSell value
     * @param float $rateSell
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
     */
    public function setRateSell(?float $rateSell = null): self
    {
        // validation for constraint: float
        if (!is_null($rateSell) && !(is_float($rateSell) || is_numeric($rateSell))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rateSell, true), gettype($rateSell)), __LINE__);
        }
        $this->rateSell = $rateSell;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO
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
