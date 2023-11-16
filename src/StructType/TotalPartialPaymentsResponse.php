<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalPartialPaymentsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTotalPartialPayments --- return if the partial payments are allowed
 * @subpackage Structs
 */
class TotalPartialPaymentsResponse extends AbstractStructBase
{
    /**
     * The totalPartialAmount
     * @var float|null
     */
    protected ?float $totalPartialAmount = null;
    /**
     * Constructor method for TotalPartialPaymentsResponse
     * @uses TotalPartialPaymentsResponse::setTotalPartialAmount()
     * @param float $totalPartialAmount
     */
    public function __construct(?float $totalPartialAmount = null)
    {
        $this
            ->setTotalPartialAmount($totalPartialAmount);
    }
    /**
     * Get totalPartialAmount value
     * @return float|null
     */
    public function getTotalPartialAmount(): ?float
    {
        return $this->totalPartialAmount;
    }
    /**
     * Set totalPartialAmount value
     * @param float $totalPartialAmount
     * @return \Pggns\MidocoApi\Order\StructType\TotalPartialPaymentsResponse
     */
    public function setTotalPartialAmount(?float $totalPartialAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPartialAmount) && !(is_float($totalPartialAmount) || is_numeric($totalPartialAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPartialAmount, true), gettype($totalPartialAmount)), __LINE__);
        }
        $this->totalPartialAmount = $totalPartialAmount;
        
        return $this;
    }
}
