<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RuleAssignDTO extends AbstractStructBase
{
    /**
     * The ruleId
     * @var int|null
     */
    protected ?int $ruleId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for RuleAssignDTO
     * @uses RuleAssignDTO::setRuleId()
     * @uses RuleAssignDTO::setUnitName()
     * @param int $ruleId
     * @param string $unitName
     */
    public function __construct(?int $ruleId = null, ?string $unitName = null)
    {
        $this
            ->setRuleId($ruleId)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\RuleAssignDTO
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
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\RuleAssignDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
