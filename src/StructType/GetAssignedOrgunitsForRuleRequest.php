<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedOrgunitsForRuleRequest StructType
 * @subpackage Structs
 */
class GetAssignedOrgunitsForRuleRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleAssignSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleAssignSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRuleAssignSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoRuleAssignSearchCriteria $MidocoRuleAssignSearchCriteria = null;
    /**
     * Constructor method for GetAssignedOrgunitsForRuleRequest
     * @uses GetAssignedOrgunitsForRuleRequest::setMidocoRuleAssignSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria = null)
    {
        $this
            ->setMidocoRuleAssignSearchCriteria($midocoRuleAssignSearchCriteria);
    }
    /**
     * Get MidocoRuleAssignSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRuleAssignSearchCriteria|null
     */
    public function getMidocoRuleAssignSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\MidocoRuleAssignSearchCriteria
    {
        return $this->MidocoRuleAssignSearchCriteria;
    }
    /**
     * Set MidocoRuleAssignSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedOrgunitsForRuleRequest
     */
    public function setMidocoRuleAssignSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoRuleAssignSearchCriteria $midocoRuleAssignSearchCriteria = null): self
    {
        $this->MidocoRuleAssignSearchCriteria = $midocoRuleAssignSearchCriteria;
        
        return $this;
    }
}
