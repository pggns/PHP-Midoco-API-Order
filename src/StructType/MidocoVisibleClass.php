<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVisibleClass StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoVisibleClass extends AbstractStructBase
{
    /**
     * The MidocoPropertyAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPropertyAttribute
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute[]
     */
    protected ?array $MidocoPropertyAttribute = null;
    /**
     * The className
     * @var string|null
     */
    protected ?string $className = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoVisibleClass
     * @uses MidocoVisibleClass::setMidocoPropertyAttribute()
     * @uses MidocoVisibleClass::setClassName()
     * @uses MidocoVisibleClass::setDescription()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute[] $midocoPropertyAttribute
     * @param string $className
     * @param string $description
     */
    public function __construct(?array $midocoPropertyAttribute = null, ?string $className = null, ?string $description = null)
    {
        $this
            ->setMidocoPropertyAttribute($midocoPropertyAttribute)
            ->setClassName($className)
            ->setDescription($description);
    }
    /**
     * Get MidocoPropertyAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute[]
     */
    public function getMidocoPropertyAttribute(): ?array
    {
        return $this->MidocoPropertyAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPropertyAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPropertyAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPropertyAttributeForArrayConstraintFromSetMidocoPropertyAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoVisibleClassMidocoPropertyAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoVisibleClassMidocoPropertyAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute) {
                $invalidValues[] = is_object($midocoVisibleClassMidocoPropertyAttributeItem) ? get_class($midocoVisibleClassMidocoPropertyAttributeItem) : sprintf('%s(%s)', gettype($midocoVisibleClassMidocoPropertyAttributeItem), var_export($midocoVisibleClassMidocoPropertyAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPropertyAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPropertyAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute[] $midocoPropertyAttribute
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass
     */
    public function setMidocoPropertyAttribute(?array $midocoPropertyAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPropertyAttributeArrayErrorMessage = self::validateMidocoPropertyAttributeForArrayConstraintFromSetMidocoPropertyAttribute($midocoPropertyAttribute))) {
            throw new InvalidArgumentException($midocoPropertyAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoPropertyAttribute = $midocoPropertyAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoPropertyAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass
     */
    public function addToMidocoPropertyAttribute(\Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoPropertyAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPropertyAttribute[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVisibleClass
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
