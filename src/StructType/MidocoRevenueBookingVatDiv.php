<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoRevenueBookingVatDiv StructType
 * @subpackage Structs
 */
class MidocoRevenueBookingVatDiv extends RevenueBookingVatDivDTO
{
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * Constructor method for MidocoRevenueBookingVatDiv
     * @uses MidocoRevenueBookingVatDiv::setNettoAmount()
     * @param float $nettoAmount
     */
    public function __construct(?float $nettoAmount = null)
    {
        $this
            ->setNettoAmount($nettoAmount);
    }
    /**
     * Get nettoAmount value
     * @return float|null
     */
    public function getNettoAmount(): ?float
    {
        return $this->nettoAmount;
    }
    /**
     * Set nettoAmount value
     * @param float $nettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv
     */
    public function setNettoAmount(?float $nettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nettoAmount) && !(is_float($nettoAmount) || is_numeric($nettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nettoAmount, true), gettype($nettoAmount)), __LINE__);
        }
        $this->nettoAmount = $nettoAmount;
        
        return $this;
    }
}
