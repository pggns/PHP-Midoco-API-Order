<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerMfRuleAttributeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerMfRuleAttributeType extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for CustomerMfRuleAttributeType
     * @uses CustomerMfRuleAttributeType::setName()
     * @uses CustomerMfRuleAttributeType::setValue()
     * @param string $name
     * @param string $value
     */
    public function __construct(?string $name = null, ?string $value = null)
    {
        $this
            ->setName($name)
            ->setValue($value);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @uses \Pggns\MidocoApi\Order\EnumType\CustomerMfRuleAttributeTypeNames::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\CustomerMfRuleAttributeTypeNames::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfRuleAttributeType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\CustomerMfRuleAttributeTypeNames::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\CustomerMfRuleAttributeTypeNames', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\CustomerMfRuleAttributeTypeNames::getValidValues())), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfRuleAttributeType
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
