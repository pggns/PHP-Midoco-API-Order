<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintSelectsForOrderResponse StructType
 * @subpackage Structs
 */
class GetPrintSelectsForOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintSelect
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoPrintSelect
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[]
     */
    protected array $MidocoPrintSelect = [];
    /**
     * The MidocoPrintSelectionGroupForOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintSelectionGroupForOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder[]
     */
    protected array $MidocoPrintSelectionGroupForOrder = [];
    /**
     * The OrderPrintRestriction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OrderPrintRestriction
     * @var \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $OrderPrintRestriction = null;
    /**
     * Constructor method for GetPrintSelectsForOrderResponse
     * @uses GetPrintSelectsForOrderResponse::setMidocoPrintSelect()
     * @uses GetPrintSelectsForOrderResponse::setMidocoPrintSelectionGroupForOrder()
     * @uses GetPrintSelectsForOrderResponse::setOrderPrintRestriction()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder[] $midocoPrintSelectionGroupForOrder
     * @param \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $orderPrintRestriction
     */
    public function __construct(array $midocoPrintSelect = [], array $midocoPrintSelectionGroupForOrder = [], ?\Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $orderPrintRestriction = null)
    {
        $this
            ->setMidocoPrintSelect($midocoPrintSelect)
            ->setMidocoPrintSelectionGroupForOrder($midocoPrintSelectionGroupForOrder)
            ->setOrderPrintRestriction($orderPrintRestriction);
    }
    /**
     * Get MidocoPrintSelect value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[]
     */
    public function getMidocoPrintSelect(): array
    {
        return $this->MidocoPrintSelect;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintSelect method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintSelect method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintSelectForArrayConstraintsFromSetMidocoPrintSelect(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintSelectsForOrderResponseMidocoPrintSelectItem) {
            // validation for constraint: itemType
            if (!$getPrintSelectsForOrderResponseMidocoPrintSelectItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect) {
                $invalidValues[] = is_object($getPrintSelectsForOrderResponseMidocoPrintSelectItem) ? get_class($getPrintSelectsForOrderResponseMidocoPrintSelectItem) : sprintf('%s(%s)', gettype($getPrintSelectsForOrderResponseMidocoPrintSelectItem), var_export($getPrintSelectsForOrderResponseMidocoPrintSelectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderResponse
     */
    public function setMidocoPrintSelect(array $midocoPrintSelect = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintSelectArrayErrorMessage = self::validateMidocoPrintSelectForArrayConstraintsFromSetMidocoPrintSelect($midocoPrintSelect))) {
            throw new InvalidArgumentException($midocoPrintSelectArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintSelect = $midocoPrintSelect;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderResponse
     */
    public function addToMidocoPrintSelect(\Pggns\MidocoApi\Order\StructType\MidocoPrintSelect $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintSelect[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoPrintSelectionGroupForOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder[]
     */
    public function getMidocoPrintSelectionGroupForOrder(): array
    {
        return $this->MidocoPrintSelectionGroupForOrder;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintSelectionGroupForOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintSelectionGroupForOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintSelectionGroupForOrderForArrayConstraintsFromSetMidocoPrintSelectionGroupForOrder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintSelectsForOrderResponseMidocoPrintSelectionGroupForOrderItem) {
            // validation for constraint: itemType
            if (!$getPrintSelectsForOrderResponseMidocoPrintSelectionGroupForOrderItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder) {
                $invalidValues[] = is_object($getPrintSelectsForOrderResponseMidocoPrintSelectionGroupForOrderItem) ? get_class($getPrintSelectsForOrderResponseMidocoPrintSelectionGroupForOrderItem) : sprintf('%s(%s)', gettype($getPrintSelectsForOrderResponseMidocoPrintSelectionGroupForOrderItem), var_export($getPrintSelectsForOrderResponseMidocoPrintSelectionGroupForOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintSelectionGroupForOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintSelectionGroupForOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder[] $midocoPrintSelectionGroupForOrder
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderResponse
     */
    public function setMidocoPrintSelectionGroupForOrder(array $midocoPrintSelectionGroupForOrder = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintSelectionGroupForOrderArrayErrorMessage = self::validateMidocoPrintSelectionGroupForOrderForArrayConstraintsFromSetMidocoPrintSelectionGroupForOrder($midocoPrintSelectionGroupForOrder))) {
            throw new InvalidArgumentException($midocoPrintSelectionGroupForOrderArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintSelectionGroupForOrder = $midocoPrintSelectionGroupForOrder;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintSelectionGroupForOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderResponse
     */
    public function addToMidocoPrintSelectionGroupForOrder(\Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintSelectionGroupForOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelectionGroupForOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintSelectionGroupForOrder[] = $item;
        
        return $this;
    }
    /**
     * Get OrderPrintRestriction value
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction|null
     */
    public function getOrderPrintRestriction(): ?\Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
    {
        return $this->OrderPrintRestriction;
    }
    /**
     * Set OrderPrintRestriction value
     * @param \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $orderPrintRestriction
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderResponse
     */
    public function setOrderPrintRestriction(?\Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $orderPrintRestriction = null): self
    {
        $this->OrderPrintRestriction = $orderPrintRestriction;
        
        return $this;
    }
}
