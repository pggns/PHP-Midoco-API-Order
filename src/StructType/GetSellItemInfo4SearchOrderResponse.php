<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemInfo4SearchOrderResponse StructType
 * @subpackage Structs
 */
class GetSellItemInfo4SearchOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoSellItemInfo4SearchOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemInfo4SearchOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder[]
     */
    protected array $MidocoSellItemInfo4SearchOrder = [];
    /**
     * Constructor method for GetSellItemInfo4SearchOrderResponse
     * @uses GetSellItemInfo4SearchOrderResponse::setMidocoSellItemInfo4SearchOrder()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder[] $midocoSellItemInfo4SearchOrder
     */
    public function __construct(array $midocoSellItemInfo4SearchOrder = [])
    {
        $this
            ->setMidocoSellItemInfo4SearchOrder($midocoSellItemInfo4SearchOrder);
    }
    /**
     * Get MidocoSellItemInfo4SearchOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder[]
     */
    public function getMidocoSellItemInfo4SearchOrder(): array
    {
        return $this->MidocoSellItemInfo4SearchOrder;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemInfo4SearchOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemInfo4SearchOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemInfo4SearchOrderForArrayConstraintsFromSetMidocoSellItemInfo4SearchOrder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellItemInfo4SearchOrderResponseMidocoSellItemInfo4SearchOrderItem) {
            // validation for constraint: itemType
            if (!$getSellItemInfo4SearchOrderResponseMidocoSellItemInfo4SearchOrderItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder) {
                $invalidValues[] = is_object($getSellItemInfo4SearchOrderResponseMidocoSellItemInfo4SearchOrderItem) ? get_class($getSellItemInfo4SearchOrderResponseMidocoSellItemInfo4SearchOrderItem) : sprintf('%s(%s)', gettype($getSellItemInfo4SearchOrderResponseMidocoSellItemInfo4SearchOrderItem), var_export($getSellItemInfo4SearchOrderResponseMidocoSellItemInfo4SearchOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemInfo4SearchOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemInfo4SearchOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder[] $midocoSellItemInfo4SearchOrder
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemInfo4SearchOrderResponse
     */
    public function setMidocoSellItemInfo4SearchOrder(array $midocoSellItemInfo4SearchOrder = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemInfo4SearchOrderArrayErrorMessage = self::validateMidocoSellItemInfo4SearchOrderForArrayConstraintsFromSetMidocoSellItemInfo4SearchOrder($midocoSellItemInfo4SearchOrder))) {
            throw new InvalidArgumentException($midocoSellItemInfo4SearchOrderArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemInfo4SearchOrder = $midocoSellItemInfo4SearchOrder;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemInfo4SearchOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemInfo4SearchOrderResponse
     */
    public function addToMidocoSellItemInfo4SearchOrder(\Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemInfo4SearchOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4SearchOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemInfo4SearchOrder[] = $item;
        
        return $this;
    }
}
