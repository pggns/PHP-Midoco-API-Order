<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelFlightRequest StructType
 * @subpackage Structs
 */
class CancelFlightRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $MidocoSellItem = null;
    /**
     * The feeItemIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $feeItemIds = [];
    /**
     * Constructor method for CancelFlightRequest
     * @uses CancelFlightRequest::setMidocoSellItem()
     * @uses CancelFlightRequest::setFeeItemIds()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem
     * @param int[] $feeItemIds
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem = null, array $feeItemIds = [])
    {
        $this
            ->setMidocoSellItem($midocoSellItem)
            ->setFeeItemIds($feeItemIds);
    }
    /**
     * Get MidocoSellItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType|null
     */
    public function getMidocoSellItem(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType
    {
        return $this->MidocoSellItem;
    }
    /**
     * Set MidocoSellItem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem
     * @return \Pggns\MidocoApi\Order\StructType\CancelFlightRequest
     */
    public function setMidocoSellItem(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $midocoSellItem = null): self
    {
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
    /**
     * Get feeItemIds value
     * @return int[]
     */
    public function getFeeItemIds(): array
    {
        return $this->feeItemIds;
    }
    /**
     * This method is responsible for validating the values passed to the setFeeItemIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeItemIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeItemIdsForArrayConstraintsFromSetFeeItemIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cancelFlightRequestFeeItemIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($cancelFlightRequestFeeItemIdsItem) || ctype_digit($cancelFlightRequestFeeItemIdsItem))) {
                $invalidValues[] = is_object($cancelFlightRequestFeeItemIdsItem) ? get_class($cancelFlightRequestFeeItemIdsItem) : sprintf('%s(%s)', gettype($cancelFlightRequestFeeItemIdsItem), var_export($cancelFlightRequestFeeItemIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The feeItemIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set feeItemIds value
     * @throws InvalidArgumentException
     * @param int[] $feeItemIds
     * @return \Pggns\MidocoApi\Order\StructType\CancelFlightRequest
     */
    public function setFeeItemIds(array $feeItemIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($feeItemIdsArrayErrorMessage = self::validateFeeItemIdsForArrayConstraintsFromSetFeeItemIds($feeItemIds))) {
            throw new InvalidArgumentException($feeItemIdsArrayErrorMessage, __LINE__);
        }
        $this->feeItemIds = $feeItemIds;
        
        return $this;
    }
    /**
     * Add item to feeItemIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\CancelFlightRequest
     */
    public function addToFeeItemIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The feeItemIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->feeItemIds[] = $item;
        
        return $this;
    }
}
