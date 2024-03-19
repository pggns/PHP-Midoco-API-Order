<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderAttribute StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderAttribute extends AbstractStructBase
{
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The attributeValue
     * @var string|null
     */
    protected ?string $attributeValue = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
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
     * Constructor method for MidocoOrderAttribute
     * @uses MidocoOrderAttribute::setAttributeName()
     * @uses MidocoOrderAttribute::setAttributeValue()
     * @uses MidocoOrderAttribute::setOrderId()
     * @uses MidocoOrderAttribute::setName()
     * @uses MidocoOrderAttribute::setValue()
     * @param string $attributeName
     * @param string $attributeValue
     * @param int $orderId
     * @param string $name
     * @param string $value
     */
    public function __construct(?string $attributeName = null, ?string $attributeValue = null, ?int $orderId = null, ?string $name = null, ?string $value = null)
    {
        $this
            ->setAttributeName($attributeName)
            ->setAttributeValue($attributeValue)
            ->setOrderId($orderId)
            ->setName($name)
            ->setValue($value);
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get attributeValue value
     * @return string|null
     */
    public function getAttributeValue(): ?string
    {
        return $this->attributeValue;
    }
    /**
     * Set attributeValue value
     * @param string $attributeValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute
     */
    public function setAttributeValue(?string $attributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeValue) && !is_string($attributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeValue, true), gettype($attributeValue)), __LINE__);
        }
        $this->attributeValue = $attributeValue;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute
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
