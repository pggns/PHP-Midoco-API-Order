<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingVatCalculation StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingVatCalculation extends BillingVatCalculationDTO
{
    /**
     * The displayedVatAmount
     * @var float|null
     */
    protected ?float $displayedVatAmount = null;
    /**
     * The displayedVatBase
     * @var float|null
     */
    protected ?float $displayedVatBase = null;
    /**
     * Constructor method for MidocoBillingVatCalculation
     * @uses MidocoBillingVatCalculation::setDisplayedVatAmount()
     * @uses MidocoBillingVatCalculation::setDisplayedVatBase()
     * @param float $displayedVatAmount
     * @param float $displayedVatBase
     */
    public function __construct(?float $displayedVatAmount = null, ?float $displayedVatBase = null)
    {
        $this
            ->setDisplayedVatAmount($displayedVatAmount)
            ->setDisplayedVatBase($displayedVatBase);
    }
    /**
     * Get displayedVatAmount value
     * @return float|null
     */
    public function getDisplayedVatAmount(): ?float
    {
        return $this->displayedVatAmount;
    }
    /**
     * Set displayedVatAmount value
     * @param float $displayedVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation
     */
    public function setDisplayedVatAmount(?float $displayedVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedVatAmount) && !(is_float($displayedVatAmount) || is_numeric($displayedVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedVatAmount, true), gettype($displayedVatAmount)), __LINE__);
        }
        $this->displayedVatAmount = $displayedVatAmount;
        
        return $this;
    }
    /**
     * Get displayedVatBase value
     * @return float|null
     */
    public function getDisplayedVatBase(): ?float
    {
        return $this->displayedVatBase;
    }
    /**
     * Set displayedVatBase value
     * @param float $displayedVatBase
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingVatCalculation
     */
    public function setDisplayedVatBase(?float $displayedVatBase = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedVatBase) && !(is_float($displayedVatBase) || is_numeric($displayedVatBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedVatBase, true), gettype($displayedVatBase)), __LINE__);
        }
        $this->displayedVatBase = $displayedVatBase;
        
        return $this;
    }
}
