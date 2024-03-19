<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoBonusCalculationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoBonusCalculationRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusCalculation
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusCalculation
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $MidocoBonusCalculation = null;
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoRuleSet
     * @var \Pggns\MidocoApi\Order\StructType\RulesetDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\RulesetDTO $MidocoRuleSet = null;
    /**
     * Constructor method for SaveMidocoBonusCalculationRequest
     * @uses SaveMidocoBonusCalculationRequest::setMidocoBonusCalculation()
     * @uses SaveMidocoBonusCalculationRequest::setMidocoRuleSet()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation
     * @param \Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation = null, ?\Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet = null)
    {
        $this
            ->setMidocoBonusCalculation($midocoBonusCalculation)
            ->setMidocoRuleSet($midocoRuleSet);
    }
    /**
     * Get MidocoBonusCalculation value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation|null
     */
    public function getMidocoBonusCalculation(): ?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation
    {
        return $this->MidocoBonusCalculation;
    }
    /**
     * Set MidocoBonusCalculation value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoBonusCalculationRequest
     */
    public function setMidocoBonusCalculation(?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation = null): self
    {
        $this->MidocoBonusCalculation = $midocoBonusCalculation;
        
        return $this;
    }
    /**
     * Get MidocoRuleSet value
     * @return \Pggns\MidocoApi\Order\StructType\RulesetDTO|null
     */
    public function getMidocoRuleSet(): ?\Pggns\MidocoApi\Order\StructType\RulesetDTO
    {
        return $this->MidocoRuleSet;
    }
    /**
     * Set MidocoRuleSet value
     * @param \Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoBonusCalculationRequest
     */
    public function setMidocoRuleSet(?\Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet = null): self
    {
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
}
