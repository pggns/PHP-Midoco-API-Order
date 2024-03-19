<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderAndCrmContactHistoryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderAndCrmContactHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderContactHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[]
     */
    protected ?array $MidocoOrderContactHistory = null;
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: crm:MidocoContactHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoContactHistory[]
     */
    protected ?array $MidocoContactHistory = null;
    /**
     * Constructor method for GetOrderAndCrmContactHistoryResponse
     * @uses GetOrderAndCrmContactHistoryResponse::setMidocoOrderContactHistory()
     * @uses GetOrderAndCrmContactHistoryResponse::setMidocoContactHistory()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[] $midocoOrderContactHistory
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactHistory[] $midocoContactHistory
     */
    public function __construct(?array $midocoOrderContactHistory = null, ?array $midocoContactHistory = null)
    {
        $this
            ->setMidocoOrderContactHistory($midocoOrderContactHistory)
            ->setMidocoContactHistory($midocoContactHistory);
    }
    /**
     * Get MidocoOrderContactHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory[]
     */
    public function getMidocoOrderContactHistory(): ?array
    {
        return $this->MidocoOrderContactHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderContactHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderContactHistoryForArrayConstraintFromSetMidocoOrderContactHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderAndCrmContactHistoryResponseMidocoOrderContactHistoryItem) {
            // validation for constraint: itemType
            if (!$getOrderAndCrmContactHistoryResponseMidocoOrderContactHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory) {
                $invalidValues[] = is_object($getOrderAndCrmContactHistoryResponseMidocoOrderContactHistoryItem) ? get_class($getOrderAndCrmContactHistoryResponseMidocoOrderContactHistoryItem) : sprintf('%s(%s)', gettype($getOrderAndCrmContactHistoryResponseMidocoOrderContactHistoryItem), var_export($getOrderAndCrmContactHistoryResponseMidocoOrderContactHistoryItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAndCrmContactHistoryResponse
     */
    public function setMidocoOrderContactHistory(?array $midocoOrderContactHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderContactHistoryArrayErrorMessage = self::validateMidocoOrderContactHistoryForArrayConstraintFromSetMidocoOrderContactHistory($midocoOrderContactHistory))) {
            throw new InvalidArgumentException($midocoOrderContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderContactHistory = $midocoOrderContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAndCrmContactHistoryResponse
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
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoContactHistory[]
     */
    public function getMidocoContactHistory(): ?array
    {
        return $this->MidocoContactHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactHistoryForArrayConstraintFromSetMidocoContactHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderAndCrmContactHistoryResponseMidocoContactHistoryItem) {
            // validation for constraint: itemType
            if (!$getOrderAndCrmContactHistoryResponseMidocoContactHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoContactHistory) {
                $invalidValues[] = is_object($getOrderAndCrmContactHistoryResponseMidocoContactHistoryItem) ? get_class($getOrderAndCrmContactHistoryResponseMidocoContactHistoryItem) : sprintf('%s(%s)', gettype($getOrderAndCrmContactHistoryResponseMidocoContactHistoryItem), var_export($getOrderAndCrmContactHistoryResponseMidocoContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactHistory[] $midocoContactHistory
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAndCrmContactHistoryResponse
     */
    public function setMidocoContactHistory(?array $midocoContactHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactHistoryArrayErrorMessage = self::validateMidocoContactHistoryForArrayConstraintFromSetMidocoContactHistory($midocoContactHistory))) {
            throw new InvalidArgumentException($midocoContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAndCrmContactHistoryResponse
     */
    public function addToMidocoContactHistory(\Pggns\MidocoApi\Order\StructType\MidocoContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactHistory[] = $item;
        
        return $this;
    }
}
