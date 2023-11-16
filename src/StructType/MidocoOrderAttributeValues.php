<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderAttributeValues StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for OrderAttributes and SellItemAttributes that need to be saved.
 * @subpackage Structs
 */
class MidocoOrderAttributeValues extends AbstractStructBase
{
    /**
     * The orderAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\OrderAttr[]
     */
    protected array $orderAttr = [];
    /**
     * The itemAttr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\ItemAttr[]
     */
    protected array $itemAttr = [];
    /**
     * Constructor method for MidocoOrderAttributeValues
     * @uses MidocoOrderAttributeValues::setOrderAttr()
     * @uses MidocoOrderAttributeValues::setItemAttr()
     * @param \Pggns\MidocoApi\Order\StructType\OrderAttr[] $orderAttr
     * @param \Pggns\MidocoApi\Order\StructType\ItemAttr[] $itemAttr
     */
    public function __construct(array $orderAttr = [], array $itemAttr = [])
    {
        $this
            ->setOrderAttr($orderAttr)
            ->setItemAttr($itemAttr);
    }
    /**
     * Get orderAttr value
     * @return \Pggns\MidocoApi\Order\StructType\OrderAttr[]
     */
    public function getOrderAttr(): array
    {
        return $this->orderAttr;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderAttr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderAttrForArrayConstraintsFromSetOrderAttr(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderAttributeValuesOrderAttrItem) {
            // validation for constraint: itemType
            if (!$midocoOrderAttributeValuesOrderAttrItem instanceof \Pggns\MidocoApi\Order\StructType\OrderAttr) {
                $invalidValues[] = is_object($midocoOrderAttributeValuesOrderAttrItem) ? get_class($midocoOrderAttributeValuesOrderAttrItem) : sprintf('%s(%s)', gettype($midocoOrderAttributeValuesOrderAttrItem), var_export($midocoOrderAttributeValuesOrderAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orderAttr property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderAttr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orderAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderAttr[] $orderAttr
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttributeValues
     */
    public function setOrderAttr(array $orderAttr = []): self
    {
        // validation for constraint: array
        if ('' !== ($orderAttrArrayErrorMessage = self::validateOrderAttrForArrayConstraintsFromSetOrderAttr($orderAttr))) {
            throw new InvalidArgumentException($orderAttrArrayErrorMessage, __LINE__);
        }
        $this->orderAttr = $orderAttr;
        
        return $this;
    }
    /**
     * Add item to orderAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderAttr $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttributeValues
     */
    public function addToOrderAttr(\Pggns\MidocoApi\Order\StructType\OrderAttr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderAttr) {
            throw new InvalidArgumentException(sprintf('The orderAttr property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderAttr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orderAttr[] = $item;
        
        return $this;
    }
    /**
     * Get itemAttr value
     * @return \Pggns\MidocoApi\Order\StructType\ItemAttr[]
     */
    public function getItemAttr(): array
    {
        return $this->itemAttr;
    }
    /**
     * This method is responsible for validating the values passed to the setItemAttr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemAttr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemAttrForArrayConstraintsFromSetItemAttr(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderAttributeValuesItemAttrItem) {
            // validation for constraint: itemType
            if (!$midocoOrderAttributeValuesItemAttrItem instanceof \Pggns\MidocoApi\Order\StructType\ItemAttr) {
                $invalidValues[] = is_object($midocoOrderAttributeValuesItemAttrItem) ? get_class($midocoOrderAttributeValuesItemAttrItem) : sprintf('%s(%s)', gettype($midocoOrderAttributeValuesItemAttrItem), var_export($midocoOrderAttributeValuesItemAttrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The itemAttr property can only contain items of type \Pggns\MidocoApi\Order\StructType\ItemAttr, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set itemAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ItemAttr[] $itemAttr
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttributeValues
     */
    public function setItemAttr(array $itemAttr = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemAttrArrayErrorMessage = self::validateItemAttrForArrayConstraintsFromSetItemAttr($itemAttr))) {
            throw new InvalidArgumentException($itemAttrArrayErrorMessage, __LINE__);
        }
        $this->itemAttr = $itemAttr;
        
        return $this;
    }
    /**
     * Add item to itemAttr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ItemAttr $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttributeValues
     */
    public function addToItemAttr(\Pggns\MidocoApi\Order\StructType\ItemAttr $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ItemAttr) {
            throw new InvalidArgumentException(sprintf('The itemAttr property can only contain items of type \Pggns\MidocoApi\Order\StructType\ItemAttr, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->itemAttr[] = $item;
        
        return $this;
    }
}
