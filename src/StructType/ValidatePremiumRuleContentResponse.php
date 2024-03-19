<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatePremiumRuleContentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidatePremiumRuleContentResponse extends AbstractStructBase
{
    /**
     * The bytes
     * @var string|null
     */
    protected ?string $bytes = null;
    /**
     * The bonus
     * @var float|null
     */
    protected ?float $bonus = null;
    /**
     * Constructor method for ValidatePremiumRuleContentResponse
     * @uses ValidatePremiumRuleContentResponse::setBytes()
     * @uses ValidatePremiumRuleContentResponse::setBonus()
     * @param string $bytes
     * @param float $bonus
     */
    public function __construct(?string $bytes = null, ?float $bonus = null)
    {
        $this
            ->setBytes($bytes)
            ->setBonus($bonus);
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
     * @return \Pggns\MidocoApi\Order\StructType\ValidatePremiumRuleContentResponse
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
     * Get bonus value
     * @return float|null
     */
    public function getBonus(): ?float
    {
        return $this->bonus;
    }
    /**
     * Set bonus value
     * @param float $bonus
     * @return \Pggns\MidocoApi\Order\StructType\ValidatePremiumRuleContentResponse
     */
    public function setBonus(?float $bonus = null): self
    {
        // validation for constraint: float
        if (!is_null($bonus) && !(is_float($bonus) || is_numeric($bonus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bonus, true), gettype($bonus)), __LINE__);
        }
        $this->bonus = $bonus;
        
        return $this;
    }
}
