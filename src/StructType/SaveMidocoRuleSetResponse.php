<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoRuleSetResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoRuleSetResponse extends AbstractStructBase
{
    /**
     * The ruleId
     * @var int|null
     */
    protected ?int $ruleId = null;
    /**
     * Constructor method for SaveMidocoRuleSetResponse
     * @uses SaveMidocoRuleSetResponse::setRuleId()
     * @param int $ruleId
     */
    public function __construct(?int $ruleId = null)
    {
        $this
            ->setRuleId($ruleId);
    }
    /**
     * Get ruleId value
     * @return int|null
     */
    public function getRuleId(): ?int
    {
        return $this->ruleId;
    }
    /**
     * Set ruleId value
     * @param int $ruleId
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoRuleSetResponse
     */
    public function setRuleId(?int $ruleId = null): self
    {
        // validation for constraint: int
        if (!is_null($ruleId) && !(is_int($ruleId) || ctype_digit($ruleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ruleId, true), gettype($ruleId)), __LINE__);
        }
        $this->ruleId = $ruleId;
        
        return $this;
    }
}
