<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignMidocoRuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssignMidocoRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleAssign
     * @var \Pggns\MidocoApi\Order\StructType\RuleAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\RuleAssignDTO $MidocoRuleAssign = null;
    /**
     * Constructor method for AssignMidocoRuleRequest
     * @uses AssignMidocoRuleRequest::setMidocoRuleAssign()
     * @param \Pggns\MidocoApi\Order\StructType\RuleAssignDTO $midocoRuleAssign
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\RuleAssignDTO $midocoRuleAssign = null)
    {
        $this
            ->setMidocoRuleAssign($midocoRuleAssign);
    }
    /**
     * Get MidocoRuleAssign value
     * @return \Pggns\MidocoApi\Order\StructType\RuleAssignDTO|null
     */
    public function getMidocoRuleAssign(): ?\Pggns\MidocoApi\Order\StructType\RuleAssignDTO
    {
        return $this->MidocoRuleAssign;
    }
    /**
     * Set MidocoRuleAssign value
     * @param \Pggns\MidocoApi\Order\StructType\RuleAssignDTO $midocoRuleAssign
     * @return \Pggns\MidocoApi\Order\StructType\AssignMidocoRuleRequest
     */
    public function setMidocoRuleAssign(?\Pggns\MidocoApi\Order\StructType\RuleAssignDTO $midocoRuleAssign = null): self
    {
        $this->MidocoRuleAssign = $midocoRuleAssign;
        
        return $this;
    }
}
