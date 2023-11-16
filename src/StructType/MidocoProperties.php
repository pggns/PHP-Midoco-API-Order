<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoProperties StructType
 * @subpackage Structs
 */
class MidocoProperties extends AbstractStructBase
{
    /**
     * The MidocoProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProperty
     * @var \Pggns\MidocoApi\Order\StructType\MidocoProperty[]
     */
    protected array $MidocoProperty = [];
    /**
     * Constructor method for MidocoProperties
     * @uses MidocoProperties::setMidocoProperty()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoProperty[] $midocoProperty
     */
    public function __construct(array $midocoProperty = [])
    {
        $this
            ->setMidocoProperty($midocoProperty);
    }
    /**
     * Get MidocoProperty value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProperty[]
     */
    public function getMidocoProperty(): array
    {
        return $this->MidocoProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPropertyForArrayConstraintsFromSetMidocoProperty(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoPropertiesMidocoPropertyItem) {
            // validation for constraint: itemType
            if (!$midocoPropertiesMidocoPropertyItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoProperty) {
                $invalidValues[] = is_object($midocoPropertiesMidocoPropertyItem) ? get_class($midocoPropertiesMidocoPropertyItem) : sprintf('%s(%s)', gettype($midocoPropertiesMidocoPropertyItem), var_export($midocoPropertiesMidocoPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProperty property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProperty value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoProperty[] $midocoProperty
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProperties
     */
    public function setMidocoProperty(array $midocoProperty = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPropertyArrayErrorMessage = self::validateMidocoPropertyForArrayConstraintsFromSetMidocoProperty($midocoProperty))) {
            throw new InvalidArgumentException($midocoPropertyArrayErrorMessage, __LINE__);
        }
        $this->MidocoProperty = $midocoProperty;
        
        return $this;
    }
    /**
     * Add item to MidocoProperty value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoProperty $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProperties
     */
    public function addToMidocoProperty(\Pggns\MidocoApi\Order\StructType\MidocoProperty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoProperty) {
            throw new InvalidArgumentException(sprintf('The MidocoProperty property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProperty[] = $item;
        
        return $this;
    }
}
