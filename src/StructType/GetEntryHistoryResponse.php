<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEntryHistoryResponse StructType
 * @subpackage Structs
 */
class GetEntryHistoryResponse extends AbstractStructBase
{
    /**
     * The MidocoEntryHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEntryHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory[]
     */
    protected array $MidocoEntryHistory = [];
    /**
     * Constructor method for GetEntryHistoryResponse
     * @uses GetEntryHistoryResponse::setMidocoEntryHistory()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory[] $midocoEntryHistory
     */
    public function __construct(array $midocoEntryHistory = [])
    {
        $this
            ->setMidocoEntryHistory($midocoEntryHistory);
    }
    /**
     * Get MidocoEntryHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory[]
     */
    public function getMidocoEntryHistory(): array
    {
        return $this->MidocoEntryHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEntryHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEntryHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEntryHistoryForArrayConstraintsFromSetMidocoEntryHistory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEntryHistoryResponseMidocoEntryHistoryItem) {
            // validation for constraint: itemType
            if (!$getEntryHistoryResponseMidocoEntryHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory) {
                $invalidValues[] = is_object($getEntryHistoryResponseMidocoEntryHistoryItem) ? get_class($getEntryHistoryResponseMidocoEntryHistoryItem) : sprintf('%s(%s)', gettype($getEntryHistoryResponseMidocoEntryHistoryItem), var_export($getEntryHistoryResponseMidocoEntryHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEntryHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEntryHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory[] $midocoEntryHistory
     * @return \Pggns\MidocoApi\Order\StructType\GetEntryHistoryResponse
     */
    public function setMidocoEntryHistory(array $midocoEntryHistory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEntryHistoryArrayErrorMessage = self::validateMidocoEntryHistoryForArrayConstraintsFromSetMidocoEntryHistory($midocoEntryHistory))) {
            throw new InvalidArgumentException($midocoEntryHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoEntryHistory = $midocoEntryHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoEntryHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\GetEntryHistoryResponse
     */
    public function addToMidocoEntryHistory(\Pggns\MidocoApi\Order\StructType\MidocoEntryHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoEntryHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEntryHistory[] = $item;
        
        return $this;
    }
}
