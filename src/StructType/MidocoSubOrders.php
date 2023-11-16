<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSubOrders StructType
 * @subpackage Structs
 */
class MidocoSubOrders extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType[]
     */
    protected array $MidocoOrder = [];
    /**
     * Constructor method for MidocoSubOrders
     * @uses MidocoSubOrders::setMidocoOrder()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType[] $midocoOrder
     */
    public function __construct(array $midocoOrder = [])
    {
        $this
            ->setMidocoOrder($midocoOrder);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType[]
     */
    public function getMidocoOrder(): array
    {
        return $this->MidocoOrder;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderForArrayConstraintsFromSetMidocoOrder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSubOrdersMidocoOrderItem) {
            // validation for constraint: itemType
            if (!$midocoSubOrdersMidocoOrderItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderType) {
                $invalidValues[] = is_object($midocoSubOrdersMidocoOrderItem) ? get_class($midocoSubOrdersMidocoOrderItem) : sprintf('%s(%s)', gettype($midocoSubOrdersMidocoOrderItem), var_export($midocoSubOrdersMidocoOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType[] $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubOrders
     */
    public function setMidocoOrder(array $midocoOrder = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderArrayErrorMessage = self::validateMidocoOrderForArrayConstraintsFromSetMidocoOrder($midocoOrder))) {
            throw new InvalidArgumentException($midocoOrderArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Add item to MidocoOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubOrders
     */
    public function addToMidocoOrder(\Pggns\MidocoApi\Order\StructType\MidocoOrderType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderType) {
            throw new InvalidArgumentException(sprintf('The MidocoOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrder[] = $item;
        
        return $this;
    }
}
