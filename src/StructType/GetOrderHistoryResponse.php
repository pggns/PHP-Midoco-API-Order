<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderHistoryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory[]
     */
    protected ?array $MidocoOrderHistory = null;
    /**
     * Constructor method for GetOrderHistoryResponse
     * @uses GetOrderHistoryResponse::setMidocoOrderHistory()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory[] $midocoOrderHistory
     */
    public function __construct(?array $midocoOrderHistory = null)
    {
        $this
            ->setMidocoOrderHistory($midocoOrderHistory);
    }
    /**
     * Get MidocoOrderHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory[]
     */
    public function getMidocoOrderHistory(): ?array
    {
        return $this->MidocoOrderHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderHistoryForArrayConstraintFromSetMidocoOrderHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderHistoryResponseMidocoOrderHistoryItem) {
            // validation for constraint: itemType
            if (!$getOrderHistoryResponseMidocoOrderHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory) {
                $invalidValues[] = is_object($getOrderHistoryResponseMidocoOrderHistoryItem) ? get_class($getOrderHistoryResponseMidocoOrderHistoryItem) : sprintf('%s(%s)', gettype($getOrderHistoryResponseMidocoOrderHistoryItem), var_export($getOrderHistoryResponseMidocoOrderHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory[] $midocoOrderHistory
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderHistoryResponse
     */
    public function setMidocoOrderHistory(?array $midocoOrderHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderHistoryArrayErrorMessage = self::validateMidocoOrderHistoryForArrayConstraintFromSetMidocoOrderHistory($midocoOrderHistory))) {
            throw new InvalidArgumentException($midocoOrderHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderHistory = $midocoOrderHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderHistoryResponse
     */
    public function addToMidocoOrderHistory(\Pggns\MidocoApi\Order\StructType\MidocoOrderHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderHistory[] = $item;
        
        return $this;
    }
}
