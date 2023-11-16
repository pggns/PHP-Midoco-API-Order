<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderStatusRequest StructType
 * @subpackage Structs
 */
class GetOrderStatusRequest extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $orderId = [];
    /**
     * Constructor method for GetOrderStatusRequest
     * @uses GetOrderStatusRequest::setOrderId()
     * @param int[] $orderId
     */
    public function __construct(array $orderId = [])
    {
        $this
            ->setOrderId($orderId);
    }
    /**
     * Get orderId value
     * @return int[]
     */
    public function getOrderId(): array
    {
        return $this->orderId;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderIdForArrayConstraintsFromSetOrderId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderStatusRequestOrderIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getOrderStatusRequestOrderIdItem) || ctype_digit($getOrderStatusRequestOrderIdItem))) {
                $invalidValues[] = is_object($getOrderStatusRequestOrderIdItem) ? get_class($getOrderStatusRequestOrderIdItem) : sprintf('%s(%s)', gettype($getOrderStatusRequestOrderIdItem), var_export($getOrderStatusRequestOrderIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orderId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orderId value
     * @throws InvalidArgumentException
     * @param int[] $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderStatusRequest
     */
    public function setOrderId(array $orderId = []): self
    {
        // validation for constraint: array
        if ('' !== ($orderIdArrayErrorMessage = self::validateOrderIdForArrayConstraintsFromSetOrderId($orderId))) {
            throw new InvalidArgumentException($orderIdArrayErrorMessage, __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Add item to orderId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderStatusRequest
     */
    public function addToOrderId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The orderId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orderId[] = $item;
        
        return $this;
    }
}
