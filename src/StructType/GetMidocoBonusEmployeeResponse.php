<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoBonusEmployeeResponse StructType
 * @subpackage Structs
 */
class GetMidocoBonusEmployeeResponse extends AbstractStructBase
{
    /**
     * The totalBonusAmount
     * @var float|null
     */
    protected ?float $totalBonusAmount = null;
    /**
     * The totalRuleBaseAmount
     * @var float|null
     */
    protected ?float $totalRuleBaseAmount = null;
    /**
     * The totalCompetitionAmount
     * @var float|null
     */
    protected ?float $totalCompetitionAmount = null;
    /**
     * The totalAddittionAmount
     * @var float|null
     */
    protected ?float $totalAddittionAmount = null;
    /**
     * The totalPremiumAmount
     * @var float|null
     */
    protected ?float $totalPremiumAmount = null;
    /**
     * Constructor method for GetMidocoBonusEmployeeResponse
     * @uses GetMidocoBonusEmployeeResponse::setTotalBonusAmount()
     * @uses GetMidocoBonusEmployeeResponse::setTotalRuleBaseAmount()
     * @uses GetMidocoBonusEmployeeResponse::setTotalCompetitionAmount()
     * @uses GetMidocoBonusEmployeeResponse::setTotalAddittionAmount()
     * @uses GetMidocoBonusEmployeeResponse::setTotalPremiumAmount()
     * @param float $totalBonusAmount
     * @param float $totalRuleBaseAmount
     * @param float $totalCompetitionAmount
     * @param float $totalAddittionAmount
     * @param float $totalPremiumAmount
     */
    public function __construct(?float $totalBonusAmount = null, ?float $totalRuleBaseAmount = null, ?float $totalCompetitionAmount = null, ?float $totalAddittionAmount = null, ?float $totalPremiumAmount = null)
    {
        $this
            ->setTotalBonusAmount($totalBonusAmount)
            ->setTotalRuleBaseAmount($totalRuleBaseAmount)
            ->setTotalCompetitionAmount($totalCompetitionAmount)
            ->setTotalAddittionAmount($totalAddittionAmount)
            ->setTotalPremiumAmount($totalPremiumAmount);
    }
    /**
     * Get totalBonusAmount value
     * @return float|null
     */
    public function getTotalBonusAmount(): ?float
    {
        return $this->totalBonusAmount;
    }
    /**
     * Set totalBonusAmount value
     * @param float $totalBonusAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusEmployeeResponse
     */
    public function setTotalBonusAmount(?float $totalBonusAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalBonusAmount) && !(is_float($totalBonusAmount) || is_numeric($totalBonusAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalBonusAmount, true), gettype($totalBonusAmount)), __LINE__);
        }
        $this->totalBonusAmount = $totalBonusAmount;
        
        return $this;
    }
    /**
     * Get totalRuleBaseAmount value
     * @return float|null
     */
    public function getTotalRuleBaseAmount(): ?float
    {
        return $this->totalRuleBaseAmount;
    }
    /**
     * Set totalRuleBaseAmount value
     * @param float $totalRuleBaseAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusEmployeeResponse
     */
    public function setTotalRuleBaseAmount(?float $totalRuleBaseAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalRuleBaseAmount) && !(is_float($totalRuleBaseAmount) || is_numeric($totalRuleBaseAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalRuleBaseAmount, true), gettype($totalRuleBaseAmount)), __LINE__);
        }
        $this->totalRuleBaseAmount = $totalRuleBaseAmount;
        
        return $this;
    }
    /**
     * Get totalCompetitionAmount value
     * @return float|null
     */
    public function getTotalCompetitionAmount(): ?float
    {
        return $this->totalCompetitionAmount;
    }
    /**
     * Set totalCompetitionAmount value
     * @param float $totalCompetitionAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusEmployeeResponse
     */
    public function setTotalCompetitionAmount(?float $totalCompetitionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalCompetitionAmount) && !(is_float($totalCompetitionAmount) || is_numeric($totalCompetitionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCompetitionAmount, true), gettype($totalCompetitionAmount)), __LINE__);
        }
        $this->totalCompetitionAmount = $totalCompetitionAmount;
        
        return $this;
    }
    /**
     * Get totalAddittionAmount value
     * @return float|null
     */
    public function getTotalAddittionAmount(): ?float
    {
        return $this->totalAddittionAmount;
    }
    /**
     * Set totalAddittionAmount value
     * @param float $totalAddittionAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusEmployeeResponse
     */
    public function setTotalAddittionAmount(?float $totalAddittionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAddittionAmount) && !(is_float($totalAddittionAmount) || is_numeric($totalAddittionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAddittionAmount, true), gettype($totalAddittionAmount)), __LINE__);
        }
        $this->totalAddittionAmount = $totalAddittionAmount;
        
        return $this;
    }
    /**
     * Get totalPremiumAmount value
     * @return float|null
     */
    public function getTotalPremiumAmount(): ?float
    {
        return $this->totalPremiumAmount;
    }
    /**
     * Set totalPremiumAmount value
     * @param float $totalPremiumAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusEmployeeResponse
     */
    public function setTotalPremiumAmount(?float $totalPremiumAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPremiumAmount) && !(is_float($totalPremiumAmount) || is_numeric($totalPremiumAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPremiumAmount, true), gettype($totalPremiumAmount)), __LINE__);
        }
        $this->totalPremiumAmount = $totalPremiumAmount;
        
        return $this;
    }
}
