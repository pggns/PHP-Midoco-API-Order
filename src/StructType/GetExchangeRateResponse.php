<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExchangeRateResponse StructType
 * @subpackage Structs
 */
class GetExchangeRateResponse extends AbstractStructBase
{
    /**
     * The conversionRate
     * @var float|null
     */
    protected ?float $conversionRate = null;
    /**
     * Constructor method for GetExchangeRateResponse
     * @uses GetExchangeRateResponse::setConversionRate()
     * @param float $conversionRate
     */
    public function __construct(?float $conversionRate = null)
    {
        $this
            ->setConversionRate($conversionRate);
    }
    /**
     * Get conversionRate value
     * @return float|null
     */
    public function getConversionRate(): ?float
    {
        return $this->conversionRate;
    }
    /**
     * Set conversionRate value
     * @param float $conversionRate
     * @return \Pggns\MidocoApi\Order\StructType\GetExchangeRateResponse
     */
    public function setConversionRate(?float $conversionRate = null): self
    {
        // validation for constraint: float
        if (!is_null($conversionRate) && !(is_float($conversionRate) || is_numeric($conversionRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($conversionRate, true), gettype($conversionRate)), __LINE__);
        }
        $this->conversionRate = $conversionRate;
        
        return $this;
    }
}
