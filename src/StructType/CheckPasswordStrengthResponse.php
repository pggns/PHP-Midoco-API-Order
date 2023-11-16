<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckPasswordStrengthResponse StructType
 * @subpackage Structs
 */
class CheckPasswordStrengthResponse extends AbstractStructBase
{
    /**
     * The strengthColor
     * @var string|null
     */
    protected ?string $strengthColor = null;
    /**
     * The suggestion
     * @var string|null
     */
    protected ?string $suggestion = null;
    /**
     * Constructor method for CheckPasswordStrengthResponse
     * @uses CheckPasswordStrengthResponse::setStrengthColor()
     * @uses CheckPasswordStrengthResponse::setSuggestion()
     * @param string $strengthColor
     * @param string $suggestion
     */
    public function __construct(?string $strengthColor = null, ?string $suggestion = null)
    {
        $this
            ->setStrengthColor($strengthColor)
            ->setSuggestion($suggestion);
    }
    /**
     * Get strengthColor value
     * @return string|null
     */
    public function getStrengthColor(): ?string
    {
        return $this->strengthColor;
    }
    /**
     * Set strengthColor value
     * @uses \Pggns\MidocoApi\Order\EnumType\StrengthColor::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\StrengthColor::getValidValues()
     * @throws InvalidArgumentException
     * @param string $strengthColor
     * @return \Pggns\MidocoApi\Order\StructType\CheckPasswordStrengthResponse
     */
    public function setStrengthColor(?string $strengthColor = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\StrengthColor::valueIsValid($strengthColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\StrengthColor', is_array($strengthColor) ? implode(', ', $strengthColor) : var_export($strengthColor, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\StrengthColor::getValidValues())), __LINE__);
        }
        $this->strengthColor = $strengthColor;
        
        return $this;
    }
    /**
     * Get suggestion value
     * @return string|null
     */
    public function getSuggestion(): ?string
    {
        return $this->suggestion;
    }
    /**
     * Set suggestion value
     * @param string $suggestion
     * @return \Pggns\MidocoApi\Order\StructType\CheckPasswordStrengthResponse
     */
    public function setSuggestion(?string $suggestion = null): self
    {
        // validation for constraint: string
        if (!is_null($suggestion) && !is_string($suggestion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suggestion, true), gettype($suggestion)), __LINE__);
        }
        $this->suggestion = $suggestion;
        
        return $this;
    }
}
