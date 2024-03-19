<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for saving StructType
 * Meta information extracted from the WSDL
 * - documentation: saving data
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Saving extends AbstractStructBase
{
    /**
     * The lowestFare
     * @var float|null
     */
    protected ?float $lowestFare = null;
    /**
     * The highestFare
     * @var float|null
     */
    protected ?float $highestFare = null;
    /**
     * The reasonCode
     * @var string|null
     */
    protected ?string $reasonCode = null;
    /**
     * The tarifCode
     * @var string|null
     */
    protected ?string $tarifCode = null;
    /**
     * The airlineLowestFare
     * @var string|null
     */
    protected ?string $airlineLowestFare = null;
    /**
     * The detailsAssign
     * @var string|null
     */
    protected ?string $detailsAssign = null;
    /**
     * Constructor method for saving
     * @uses Saving::setLowestFare()
     * @uses Saving::setHighestFare()
     * @uses Saving::setReasonCode()
     * @uses Saving::setTarifCode()
     * @uses Saving::setAirlineLowestFare()
     * @uses Saving::setDetailsAssign()
     * @param float $lowestFare
     * @param float $highestFare
     * @param string $reasonCode
     * @param string $tarifCode
     * @param string $airlineLowestFare
     * @param string $detailsAssign
     */
    public function __construct(?float $lowestFare = null, ?float $highestFare = null, ?string $reasonCode = null, ?string $tarifCode = null, ?string $airlineLowestFare = null, ?string $detailsAssign = null)
    {
        $this
            ->setLowestFare($lowestFare)
            ->setHighestFare($highestFare)
            ->setReasonCode($reasonCode)
            ->setTarifCode($tarifCode)
            ->setAirlineLowestFare($airlineLowestFare)
            ->setDetailsAssign($detailsAssign);
    }
    /**
     * Get lowestFare value
     * @return float|null
     */
    public function getLowestFare(): ?float
    {
        return $this->lowestFare;
    }
    /**
     * Set lowestFare value
     * @param float $lowestFare
     * @return \Pggns\MidocoApi\Order\StructType\Saving
     */
    public function setLowestFare(?float $lowestFare = null): self
    {
        // validation for constraint: float
        if (!is_null($lowestFare) && !(is_float($lowestFare) || is_numeric($lowestFare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lowestFare, true), gettype($lowestFare)), __LINE__);
        }
        $this->lowestFare = $lowestFare;
        
        return $this;
    }
    /**
     * Get highestFare value
     * @return float|null
     */
    public function getHighestFare(): ?float
    {
        return $this->highestFare;
    }
    /**
     * Set highestFare value
     * @param float $highestFare
     * @return \Pggns\MidocoApi\Order\StructType\Saving
     */
    public function setHighestFare(?float $highestFare = null): self
    {
        // validation for constraint: float
        if (!is_null($highestFare) && !(is_float($highestFare) || is_numeric($highestFare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($highestFare, true), gettype($highestFare)), __LINE__);
        }
        $this->highestFare = $highestFare;
        
        return $this;
    }
    /**
     * Get reasonCode value
     * @return string|null
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }
    /**
     * Set reasonCode value
     * @param string $reasonCode
     * @return \Pggns\MidocoApi\Order\StructType\Saving
     */
    public function setReasonCode(?string $reasonCode = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonCode) && !is_string($reasonCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonCode, true), gettype($reasonCode)), __LINE__);
        }
        $this->reasonCode = $reasonCode;
        
        return $this;
    }
    /**
     * Get tarifCode value
     * @return string|null
     */
    public function getTarifCode(): ?string
    {
        return $this->tarifCode;
    }
    /**
     * Set tarifCode value
     * @param string $tarifCode
     * @return \Pggns\MidocoApi\Order\StructType\Saving
     */
    public function setTarifCode(?string $tarifCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tarifCode) && !is_string($tarifCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tarifCode, true), gettype($tarifCode)), __LINE__);
        }
        $this->tarifCode = $tarifCode;
        
        return $this;
    }
    /**
     * Get airlineLowestFare value
     * @return string|null
     */
    public function getAirlineLowestFare(): ?string
    {
        return $this->airlineLowestFare;
    }
    /**
     * Set airlineLowestFare value
     * @param string $airlineLowestFare
     * @return \Pggns\MidocoApi\Order\StructType\Saving
     */
    public function setAirlineLowestFare(?string $airlineLowestFare = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineLowestFare) && !is_string($airlineLowestFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineLowestFare, true), gettype($airlineLowestFare)), __LINE__);
        }
        $this->airlineLowestFare = $airlineLowestFare;
        
        return $this;
    }
    /**
     * Get detailsAssign value
     * @return string|null
     */
    public function getDetailsAssign(): ?string
    {
        return $this->detailsAssign;
    }
    /**
     * Set detailsAssign value
     * @param string $detailsAssign
     * @return \Pggns\MidocoApi\Order\StructType\Saving
     */
    public function setDetailsAssign(?string $detailsAssign = null): self
    {
        // validation for constraint: string
        if (!is_null($detailsAssign) && !is_string($detailsAssign)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailsAssign, true), gettype($detailsAssign)), __LINE__);
        }
        $this->detailsAssign = $detailsAssign;
        
        return $this;
    }
}
