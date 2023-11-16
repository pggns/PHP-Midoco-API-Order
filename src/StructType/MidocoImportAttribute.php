<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportAttribute StructType
 * @subpackage Structs
 */
class MidocoImportAttribute extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The attributeTyp
     * @var string|null
     */
    protected ?string $attributeTyp = null;
    /**
     * The attributeValue
     * @var string|null
     */
    protected ?string $attributeValue = null;
    /**
     * Constructor method for MidocoImportAttribute
     * @uses MidocoImportAttribute::setCustomerId()
     * @uses MidocoImportAttribute::setAttributeTyp()
     * @uses MidocoImportAttribute::setAttributeValue()
     * @param string $customerId
     * @param string $attributeTyp
     * @param string $attributeValue
     */
    public function __construct(?string $customerId = null, ?string $attributeTyp = null, ?string $attributeValue = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setAttributeTyp($attributeTyp)
            ->setAttributeValue($attributeValue);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get attributeTyp value
     * @return string|null
     */
    public function getAttributeTyp(): ?string
    {
        return $this->attributeTyp;
    }
    /**
     * Set attributeTyp value
     * @param string $attributeTyp
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute
     */
    public function setAttributeTyp(?string $attributeTyp = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeTyp) && !is_string($attributeTyp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeTyp, true), gettype($attributeTyp)), __LINE__);
        }
        $this->attributeTyp = $attributeTyp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute
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
}
