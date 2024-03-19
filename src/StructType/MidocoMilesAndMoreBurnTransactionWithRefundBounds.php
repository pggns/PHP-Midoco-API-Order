<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMilesAndMoreBurnTransactionWithRefundBounds
 * StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMilesAndMoreBurnTransactionWithRefundBounds extends MidocoMilesAndMoreBurnTransactionType
{
    /**
     * The minimalRefundAmount
     * Meta information extracted from the WSDL
     * - documentation: The minimal refund amount for the transaction respecting the maximal refund amounts of all Miles and More refunds on the billing
     * @var float|null
     */
    protected ?float $minimalRefundAmount = null;
    /**
     * The refundAmountByRatio
     * Meta information extracted from the WSDL
     * - documentation: The minimal refund amount for the transaction in respect to the payable-paid-ratio
     * @var float|null
     */
    protected ?float $refundAmountByRatio = null;
    /**
     * The maximalRefundAmount
     * Meta information extracted from the WSDL
     * - documentation: The maximal refund amount for the billing
     * @var float|null
     */
    protected ?float $maximalRefundAmount = null;
    /**
     * Constructor method for MidocoMilesAndMoreBurnTransactionWithRefundBounds
     * @uses MidocoMilesAndMoreBurnTransactionWithRefundBounds::setMinimalRefundAmount()
     * @uses MidocoMilesAndMoreBurnTransactionWithRefundBounds::setRefundAmountByRatio()
     * @uses MidocoMilesAndMoreBurnTransactionWithRefundBounds::setMaximalRefundAmount()
     * @param float $minimalRefundAmount
     * @param float $refundAmountByRatio
     * @param float $maximalRefundAmount
     */
    public function __construct(?float $minimalRefundAmount = null, ?float $refundAmountByRatio = null, ?float $maximalRefundAmount = null)
    {
        $this
            ->setMinimalRefundAmount($minimalRefundAmount)
            ->setRefundAmountByRatio($refundAmountByRatio)
            ->setMaximalRefundAmount($maximalRefundAmount);
    }
    /**
     * Get minimalRefundAmount value
     * @return float|null
     */
    public function getMinimalRefundAmount(): ?float
    {
        return $this->minimalRefundAmount;
    }
    /**
     * Set minimalRefundAmount value
     * @param float $minimalRefundAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds
     */
    public function setMinimalRefundAmount(?float $minimalRefundAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($minimalRefundAmount) && !(is_float($minimalRefundAmount) || is_numeric($minimalRefundAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimalRefundAmount, true), gettype($minimalRefundAmount)), __LINE__);
        }
        $this->minimalRefundAmount = $minimalRefundAmount;
        
        return $this;
    }
    /**
     * Get refundAmountByRatio value
     * @return float|null
     */
    public function getRefundAmountByRatio(): ?float
    {
        return $this->refundAmountByRatio;
    }
    /**
     * Set refundAmountByRatio value
     * @param float $refundAmountByRatio
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds
     */
    public function setRefundAmountByRatio(?float $refundAmountByRatio = null): self
    {
        // validation for constraint: float
        if (!is_null($refundAmountByRatio) && !(is_float($refundAmountByRatio) || is_numeric($refundAmountByRatio))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($refundAmountByRatio, true), gettype($refundAmountByRatio)), __LINE__);
        }
        $this->refundAmountByRatio = $refundAmountByRatio;
        
        return $this;
    }
    /**
     * Get maximalRefundAmount value
     * @return float|null
     */
    public function getMaximalRefundAmount(): ?float
    {
        return $this->maximalRefundAmount;
    }
    /**
     * Set maximalRefundAmount value
     * @param float $maximalRefundAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionWithRefundBounds
     */
    public function setMaximalRefundAmount(?float $maximalRefundAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($maximalRefundAmount) && !(is_float($maximalRefundAmount) || is_numeric($maximalRefundAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maximalRefundAmount, true), gettype($maximalRefundAmount)), __LINE__);
        }
        $this->maximalRefundAmount = $maximalRefundAmount;
        
        return $this;
    }
}
