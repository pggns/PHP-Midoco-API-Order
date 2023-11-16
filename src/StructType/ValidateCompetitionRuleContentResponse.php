<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateCompetitionRuleContentResponse StructType
 * @subpackage Structs
 */
class ValidateCompetitionRuleContentResponse extends AbstractStructBase
{
    /**
     * The bytes
     * @var string|null
     */
    protected ?string $bytes = null;
    /**
     * The ruleBase
     * @var float|null
     */
    protected ?float $ruleBase = null;
    /**
     * Constructor method for ValidateCompetitionRuleContentResponse
     * @uses ValidateCompetitionRuleContentResponse::setBytes()
     * @uses ValidateCompetitionRuleContentResponse::setRuleBase()
     * @param string $bytes
     * @param float $ruleBase
     */
    public function __construct(?string $bytes = null, ?float $ruleBase = null)
    {
        $this
            ->setBytes($bytes)
            ->setRuleBase($ruleBase);
    }
    /**
     * Get bytes value
     * @return string|null
     */
    public function getBytes(): ?string
    {
        return $this->bytes;
    }
    /**
     * Set bytes value
     * @param string $bytes
     * @return \Pggns\MidocoApi\Order\StructType\ValidateCompetitionRuleContentResponse
     */
    public function setBytes(?string $bytes = null): self
    {
        // validation for constraint: string
        if (!is_null($bytes) && !is_string($bytes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bytes, true), gettype($bytes)), __LINE__);
        }
        $this->bytes = $bytes;
        
        return $this;
    }
    /**
     * Get ruleBase value
     * @return float|null
     */
    public function getRuleBase(): ?float
    {
        return $this->ruleBase;
    }
    /**
     * Set ruleBase value
     * @param float $ruleBase
     * @return \Pggns\MidocoApi\Order\StructType\ValidateCompetitionRuleContentResponse
     */
    public function setRuleBase(?float $ruleBase = null): self
    {
        // validation for constraint: float
        if (!is_null($ruleBase) && !(is_float($ruleBase) || is_numeric($ruleBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ruleBase, true), gettype($ruleBase)), __LINE__);
        }
        $this->ruleBase = $ruleBase;
        
        return $this;
    }
}
