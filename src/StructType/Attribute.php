<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for attribute StructType
 * Meta information extracted from the WSDL
 * - documentation: optional attributes at the order level of midoco (compare to attributes at booking level), codes have to be preDefined | optional attributes placed at the level of this booking in midoco order. Any attribute has to be preDefined in
 * midoco to be stored correctly, otherwise this information is ignored | optional attributes placed at the level of this package in midoco order. Any attribute has to be preDefined in midoco to be stored correctly, otherwise this information is ignored
 * | optional attributes at the order level of midoco (compare to attributes at booking level), codes have to be pre-defined | optional attributes placed at the level of this booking in midoco order. Any attribute has to be pre-defined in midoco to be
 * stored correctly, otherwise this information is ignored | optional attributes placed at the level of this package in midoco order. Any attribute has to be pre-defined in midoco to be stored correctly, otherwise this information is ignored
 * @subpackage Structs
 */
class Attribute extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - documentation: id of the attribute, has to be preDefined | id of the attribute, has to be pre-defined
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - documentation: value of the attribute, type has to follow the preDefinition | value of the attribute, type has to follow the pre-definition
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for attribute
     * @uses Attribute::setName()
     * @uses Attribute::setValue()
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
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\Attribute
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\Attribute
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
