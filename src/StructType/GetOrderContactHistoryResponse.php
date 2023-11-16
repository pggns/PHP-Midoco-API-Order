<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderContactHistoryResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getOrderContactHistory --- returns the list of order contact history for a given order id
 * @subpackage Structs
 */
class GetOrderContactHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderContactHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[]
     */
    protected array $MidocoOrderContactHistory = [];
    /**
     * Constructor method for GetOrderContactHistoryResponse
     * @uses GetOrderContactHistoryResponse::setMidocoOrderContactHistory()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[] $midocoOrderContactHistory
     */
    public function __construct(array $midocoOrderContactHistory = [])
    {
        $this
            ->setMidocoOrderContactHistory($midocoOrderContactHistory);
    }
    /**
     * Get MidocoOrderContactHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[]
     */
    public function getMidocoOrderContactHistory(): array
    {
        return $this->MidocoOrderContactHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderContactHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderContactHistoryForArrayConstraintsFromSetMidocoOrderContactHistory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderContactHistoryResponseMidocoOrderContactHistoryItem) {
            // validation for constraint: itemType
            if (!$getOrderContactHistoryResponseMidocoOrderContactHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory) {
                $invalidValues[] = is_object($getOrderContactHistoryResponseMidocoOrderContactHistoryItem) ? get_class($getOrderContactHistoryResponseMidocoOrderContactHistoryItem) : sprintf('%s(%s)', gettype($getOrderContactHistoryResponseMidocoOrderContactHistoryItem), var_export($getOrderContactHistoryResponseMidocoOrderContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[] $midocoOrderContactHistory
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderContactHistoryResponse
     */
    public function setMidocoOrderContactHistory(array $midocoOrderContactHistory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderContactHistoryArrayErrorMessage = self::validateMidocoOrderContactHistoryForArrayConstraintsFromSetMidocoOrderContactHistory($midocoOrderContactHistory))) {
            throw new InvalidArgumentException($midocoOrderContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderContactHistory = $midocoOrderContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderContactHistoryResponse
     */
    public function addToMidocoOrderContactHistory(\Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderContactHistory[] = $item;
        
        return $this;
    }
}
