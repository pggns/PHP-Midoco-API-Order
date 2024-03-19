<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCompetitionRuleResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteCompetitionRuleResponse extends AbstractStructBase
{
    /**
     * The bonus
     * @var float|null
     */
    protected ?float $bonus = null;
    /**
     * The rulebase
     * @var float|null
     */
    protected ?float $rulebase = null;
    /**
     * The noOfSellItems
     * @var int|null
     */
    protected ?int $noOfSellItems = null;
    /**
     * Constructor method for ExecuteCompetitionRuleResponse
     * @uses ExecuteCompetitionRuleResponse::setBonus()
     * @uses ExecuteCompetitionRuleResponse::setRulebase()
     * @uses ExecuteCompetitionRuleResponse::setNoOfSellItems()
     * @param float $bonus
     * @param float $rulebase
     * @param int $noOfSellItems
     */
    public function __construct(?float $bonus = null, ?float $rulebase = null, ?int $noOfSellItems = null)
    {
        $this
            ->setBonus($bonus)
            ->setRulebase($rulebase)
            ->setNoOfSellItems($noOfSellItems);
    }
    /**
     * Get bonus value
     * @return float|null
     */
    public function getBonus(): ?float
    {
        return $this->bonus;
    }
    /**
     * Set bonus value
     * @param float $bonus
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleResponse
     */
    public function setBonus(?float $bonus = null): self
    {
        // validation for constraint: float
        if (!is_null($bonus) && !(is_float($bonus) || is_numeric($bonus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bonus, true), gettype($bonus)), __LINE__);
        }
        $this->bonus = $bonus;
        
        return $this;
    }
    /**
     * Get rulebase value
     * @return float|null
     */
    public function getRulebase(): ?float
    {
        return $this->rulebase;
    }
    /**
     * Set rulebase value
     * @param float $rulebase
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleResponse
     */
    public function setRulebase(?float $rulebase = null): self
    {
        // validation for constraint: float
        if (!is_null($rulebase) && !(is_float($rulebase) || is_numeric($rulebase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rulebase, true), gettype($rulebase)), __LINE__);
        }
        $this->rulebase = $rulebase;
        
        return $this;
    }
    /**
     * Get noOfSellItems value
     * @return int|null
     */
    public function getNoOfSellItems(): ?int
    {
        return $this->noOfSellItems;
    }
    /**
     * Set noOfSellItems value
     * @param int $noOfSellItems
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleResponse
     */
    public function setNoOfSellItems(?int $noOfSellItems = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfSellItems) && !(is_int($noOfSellItems) || ctype_digit($noOfSellItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfSellItems, true), gettype($noOfSellItems)), __LINE__);
        }
        $this->noOfSellItems = $noOfSellItems;
        
        return $this;
    }
}
