<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderStatusResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderStatusResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderStatus
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus[]
     */
    protected ?array $MidocoOrderStatus = null;
    /**
     * Constructor method for GetOrderStatusResponse
     * @uses GetOrderStatusResponse::setMidocoOrderStatus()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus[] $midocoOrderStatus
     */
    public function __construct(?array $midocoOrderStatus = null)
    {
        $this
            ->setMidocoOrderStatus($midocoOrderStatus);
    }
    /**
     * Get MidocoOrderStatus value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus[]
     */
    public function getMidocoOrderStatus(): ?array
    {
        return $this->MidocoOrderStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderStatusForArrayConstraintFromSetMidocoOrderStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderStatusResponseMidocoOrderStatusItem) {
            // validation for constraint: itemType
            if (!$getOrderStatusResponseMidocoOrderStatusItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus) {
                $invalidValues[] = is_object($getOrderStatusResponseMidocoOrderStatusItem) ? get_class($getOrderStatusResponseMidocoOrderStatusItem) : sprintf('%s(%s)', gettype($getOrderStatusResponseMidocoOrderStatusItem), var_export($getOrderStatusResponseMidocoOrderStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus[] $midocoOrderStatus
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderStatusResponse
     */
    public function setMidocoOrderStatus(?array $midocoOrderStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderStatusArrayErrorMessage = self::validateMidocoOrderStatusForArrayConstraintFromSetMidocoOrderStatus($midocoOrderStatus))) {
            throw new InvalidArgumentException($midocoOrderStatusArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderStatus = $midocoOrderStatus;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderStatusResponse
     */
    public function addToMidocoOrderStatus(\Pggns\MidocoApi\Order\StructType\MidocoOrderStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderStatus[] = $item;
        
        return $this;
    }
}
