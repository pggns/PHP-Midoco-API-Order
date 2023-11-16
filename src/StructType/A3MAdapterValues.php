<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for A3MAdapterValues StructType
 * @subpackage Structs
 */
class A3MAdapterValues extends AbstractStructBase
{
    /**
     * The A3MAdapterValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: A3MAdapterValue
     * @var \Pggns\MidocoApi\Order\StructType\A3MAdapterValue[]
     */
    protected array $A3MAdapterValue = [];
    /**
     * Constructor method for A3MAdapterValues
     * @uses A3MAdapterValues::setA3MAdapterValue()
     * @param \Pggns\MidocoApi\Order\StructType\A3MAdapterValue[] $a3MAdapterValue
     */
    public function __construct(array $a3MAdapterValue = [])
    {
        $this
            ->setA3MAdapterValue($a3MAdapterValue);
    }
    /**
     * Get A3MAdapterValue value
     * @return \Pggns\MidocoApi\Order\StructType\A3MAdapterValue[]
     */
    public function getA3MAdapterValue(): array
    {
        return $this->A3MAdapterValue;
    }
    /**
     * This method is responsible for validating the values passed to the setA3MAdapterValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setA3MAdapterValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateA3MAdapterValueForArrayConstraintsFromSetA3MAdapterValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $a3MAdapterValuesA3MAdapterValueItem) {
            // validation for constraint: itemType
            if (!$a3MAdapterValuesA3MAdapterValueItem instanceof \Pggns\MidocoApi\Order\StructType\A3MAdapterValue) {
                $invalidValues[] = is_object($a3MAdapterValuesA3MAdapterValueItem) ? get_class($a3MAdapterValuesA3MAdapterValueItem) : sprintf('%s(%s)', gettype($a3MAdapterValuesA3MAdapterValueItem), var_export($a3MAdapterValuesA3MAdapterValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The A3MAdapterValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\A3MAdapterValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set A3MAdapterValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\A3MAdapterValue[] $a3MAdapterValue
     * @return \Pggns\MidocoApi\Order\StructType\A3MAdapterValues
     */
    public function setA3MAdapterValue(array $a3MAdapterValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($a3MAdapterValueArrayErrorMessage = self::validateA3MAdapterValueForArrayConstraintsFromSetA3MAdapterValue($a3MAdapterValue))) {
            throw new InvalidArgumentException($a3MAdapterValueArrayErrorMessage, __LINE__);
        }
        $this->A3MAdapterValue = $a3MAdapterValue;
        
        return $this;
    }
    /**
     * Add item to A3MAdapterValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\A3MAdapterValue $item
     * @return \Pggns\MidocoApi\Order\StructType\A3MAdapterValues
     */
    public function addToA3MAdapterValue(\Pggns\MidocoApi\Order\StructType\A3MAdapterValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\A3MAdapterValue) {
            throw new InvalidArgumentException(sprintf('The A3MAdapterValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\A3MAdapterValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->A3MAdapterValue[] = $item;
        
        return $this;
    }
}
