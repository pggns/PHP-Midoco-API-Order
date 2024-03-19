<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderInfoRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderInfoRequest extends AbstractStructBase
{
    /**
     * The OrderInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 500
     * - ref: OrderInfo
     * @var \Pggns\MidocoApi\Order\StructType\OrderInfo[]
     */
    protected ?array $OrderInfo = null;
    /**
     * Constructor method for GetOrderInfoRequest
     * @uses GetOrderInfoRequest::setOrderInfo()
     * @param \Pggns\MidocoApi\Order\StructType\OrderInfo[] $orderInfo
     */
    public function __construct(?array $orderInfo = null)
    {
        $this
            ->setOrderInfo($orderInfo);
    }
    /**
     * Get OrderInfo value
     * @return \Pggns\MidocoApi\Order\StructType\OrderInfo[]
     */
    public function getOrderInfo(): ?array
    {
        return $this->OrderInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrderInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderInfoForArrayConstraintFromSetOrderInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderInfoRequestOrderInfoItem) {
            // validation for constraint: itemType
            if (!$getOrderInfoRequestOrderInfoItem instanceof \Pggns\MidocoApi\Order\StructType\OrderInfo) {
                $invalidValues[] = is_object($getOrderInfoRequestOrderInfoItem) ? get_class($getOrderInfoRequestOrderInfoItem) : sprintf('%s(%s)', gettype($getOrderInfoRequestOrderInfoItem), var_export($getOrderInfoRequestOrderInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OrderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderInfo[] $orderInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderInfoRequest
     */
    public function setOrderInfo(?array $orderInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderInfoArrayErrorMessage = self::validateOrderInfoForArrayConstraintFromSetOrderInfo($orderInfo))) {
            throw new InvalidArgumentException($orderInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($orderInfo) && count($orderInfo) > 500) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 500', count($orderInfo)), __LINE__);
        }
        $this->OrderInfo = $orderInfo;
        
        return $this;
    }
    /**
     * Add item to OrderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderInfoRequest
     */
    public function addToOrderInfo(\Pggns\MidocoApi\Order\StructType\OrderInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderInfo) {
            throw new InvalidArgumentException(sprintf('The OrderInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(500)
        if (is_array($this->OrderInfo) && count($this->OrderInfo) >= 500) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 500', count($this->OrderInfo)), __LINE__);
        }
        $this->OrderInfo[] = $item;
        
        return $this;
    }
}
