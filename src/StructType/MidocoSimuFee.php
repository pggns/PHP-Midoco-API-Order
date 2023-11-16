<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSimuFee StructType
 * @subpackage Structs
 */
class MidocoSimuFee extends CalcitemDTO
{
    /**
     * The passengerName
     * @var string|null
     */
    protected ?string $passengerName = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The taxPartPercent
     * @var float|null
     */
    protected ?float $taxPartPercent = null;
    /**
     * Constructor method for MidocoSimuFee
     * @uses MidocoSimuFee::setPassengerName()
     * @uses MidocoSimuFee::setAmount()
     * @uses MidocoSimuFee::setTaxPartPercent()
     * @param string $passengerName
     * @param float $amount
     * @param float $taxPartPercent
     */
    public function __construct(?string $passengerName = null, ?float $amount = null, ?float $taxPartPercent = null)
    {
        $this
            ->setPassengerName($passengerName)
            ->setAmount($amount)
            ->setTaxPartPercent($taxPartPercent);
    }
    /**
     * Get passengerName value
     * @return string|null
     */
    public function getPassengerName(): ?string
    {
        return $this->passengerName;
    }
    /**
     * Set passengerName value
     * @param string $passengerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSimuFee
     */
    public function setPassengerName(?string $passengerName = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerName) && !is_string($passengerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerName, true), gettype($passengerName)), __LINE__);
        }
        $this->passengerName = $passengerName;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSimuFee
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get taxPartPercent value
     * @return float|null
     */
    public function getTaxPartPercent(): ?float
    {
        return $this->taxPartPercent;
    }
    /**
     * Set taxPartPercent value
     * @param float $taxPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSimuFee
     */
    public function setTaxPartPercent(?float $taxPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($taxPartPercent) && !(is_float($taxPartPercent) || is_numeric($taxPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxPartPercent, true), gettype($taxPartPercent)), __LINE__);
        }
        $this->taxPartPercent = $taxPartPercent;
        
        return $this;
    }
}
