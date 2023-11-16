<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoRuleSetRequest StructType
 * @subpackage Structs
 */
class SaveMidocoRuleSetRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSet
     * @var \Pggns\MidocoApi\Order\StructType\RulesetDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\RulesetDTO $MidocoRuleSet = null;
    /**
     * Constructor method for SaveMidocoRuleSetRequest
     * @uses SaveMidocoRuleSetRequest::setMidocoRuleSet()
     * @param \Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet = null)
    {
        $this
            ->setMidocoRuleSet($midocoRuleSet);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoRuleSetRequest
     */
    public function setMidocoRuleSet(?\Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet = null): self
    {
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
}
