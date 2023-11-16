<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateCompetitionRuleContentRequest StructType
 * @subpackage Structs
 */
class ValidateCompetitionRuleContentRequest extends AbstractStructBase
{
    /**
     * The MidocoRuleSet
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleSet
     * @var \Pggns\MidocoApi\Order\StructType\RulesetDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\RulesetDTO $MidocoRuleSet = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * Constructor method for ValidateCompetitionRuleContentRequest
     * @uses ValidateCompetitionRuleContentRequest::setMidocoRuleSet()
     * @uses ValidateCompetitionRuleContentRequest::setOrderNo()
     * @param \Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet
     * @param int $orderNo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet = null, ?int $orderNo = null)
    {
        $this
            ->setMidocoRuleSet($midocoRuleSet)
            ->setOrderNo($orderNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\ValidateCompetitionRuleContentRequest
     */
    public function setMidocoRuleSet(?\Pggns\MidocoApi\Order\StructType\RulesetDTO $midocoRuleSet = null): self
    {
        $this->MidocoRuleSet = $midocoRuleSet;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\ValidateCompetitionRuleContentRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
}
