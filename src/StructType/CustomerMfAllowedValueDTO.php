<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerMfAllowedValueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerMfAllowedValueDTO extends AbstractStructBase
{
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * The bean
     * @var string|null
     */
    protected ?string $bean = null;
    /**
     * The className
     * @var string|null
     */
    protected ?string $className = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for CustomerMfAllowedValueDTO
     * @uses CustomerMfAllowedValueDTO::setAttrName()
     * @uses CustomerMfAllowedValueDTO::setBean()
     * @uses CustomerMfAllowedValueDTO::setClassName()
     * @uses CustomerMfAllowedValueDTO::setCustomerId()
     * @uses CustomerMfAllowedValueDTO::setValidFrom()
     * @uses CustomerMfAllowedValueDTO::setValue()
     * @param string $attrName
     * @param string $bean
     * @param string $className
     * @param int $customerId
     * @param string $validFrom
     * @param string $value
     */
    public function __construct(?string $attrName = null, ?string $bean = null, ?string $className = null, ?int $customerId = null, ?string $validFrom = null, ?string $value = null)
    {
        $this
            ->setAttrName($attrName)
            ->setBean($bean)
            ->setClassName($className)
            ->setCustomerId($customerId)
            ->setValidFrom($validFrom)
            ->setValue($value);
    }
    /**
     * Get attrName value
     * @return string|null
     */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     * @param string $attrName
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO
     */
    public function setAttrName(?string $attrName = null): self
    {
        // validation for constraint: string
        if (!is_null($attrName) && !is_string($attrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrName, true), gettype($attrName)), __LINE__);
        }
        $this->attrName = $attrName;
        
        return $this;
    }
    /**
     * Get bean value
     * @return string|null
     */
    public function getBean(): ?string
    {
        return $this->bean;
    }
    /**
     * Set bean value
     * @param string $bean
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO
     */
    public function setBean(?string $bean = null): self
    {
        // validation for constraint: string
        if (!is_null($bean) && !is_string($bean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bean, true), gettype($bean)), __LINE__);
        }
        $this->bean = $bean;
        
        return $this;
    }
    /**
     * Get className value
     * @return string|null
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }
    /**
     * Set className value
     * @param string $className
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO
     */
    public function setClassName(?string $className = null): self
    {
        // validation for constraint: string
        if (!is_null($className) && !is_string($className)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($className, true), gettype($className)), __LINE__);
        }
        $this->className = $className;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO
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
