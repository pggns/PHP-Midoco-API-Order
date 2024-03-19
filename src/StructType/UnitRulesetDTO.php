<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitRulesetDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UnitRulesetDTO extends AbstractStructBase
{
    /**
     * The rulesetId
     * @var int|null
     */
    protected ?int $rulesetId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for UnitRulesetDTO
     * @uses UnitRulesetDTO::setRulesetId()
     * @uses UnitRulesetDTO::setUnitName()
     * @param int $rulesetId
     * @param string $unitName
     */
    public function __construct(?int $rulesetId = null, ?string $unitName = null)
    {
        $this
            ->setRulesetId($rulesetId)
            ->setUnitName($unitName);
    }
    /**
     * Get rulesetId value
     * @return int|null
     */
    public function getRulesetId(): ?int
    {
        return $this->rulesetId;
    }
    /**
     * Set rulesetId value
     * @param int $rulesetId
     * @return \Pggns\MidocoApi\Order\StructType\UnitRulesetDTO
     */
    public function setRulesetId(?int $rulesetId = null): self
    {
        // validation for constraint: int
        if (!is_null($rulesetId) && !(is_int($rulesetId) || ctype_digit($rulesetId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rulesetId, true), gettype($rulesetId)), __LINE__);
        }
        $this->rulesetId = $rulesetId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UnitRulesetDTO
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
