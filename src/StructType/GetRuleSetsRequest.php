<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRuleSetsRequest StructType
 * @subpackage Structs
 */
class GetRuleSetsRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleSetSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSetSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRuleSetSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoRuleSetSearchCriteria $MidocoRuleSetSearchCriteria = null;
    /**
     * Constructor method for GetRuleSetsRequest
     * @uses GetRuleSetsRequest::setMidocoRuleSetSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria = null)
    {
        $this
            ->setMidocoRuleSetSearchCriteria($midocoRuleSetSearchCriteria);
    }
    /**
     * Get MidocoRuleSetSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRuleSetSearchCriteria|null
     */
    public function getMidocoRuleSetSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\MidocoRuleSetSearchCriteria
    {
        return $this->MidocoRuleSetSearchCriteria;
    }
    /**
     * Set MidocoRuleSetSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetRuleSetsRequest
     */
    public function setMidocoRuleSetSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoRuleSetSearchCriteria $midocoRuleSetSearchCriteria = null): self
    {
        $this->MidocoRuleSetSearchCriteria = $midocoRuleSetSearchCriteria;
        
        return $this;
    }
}
