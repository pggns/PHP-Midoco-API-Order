<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeOrderDiffInvoiceRequest StructType
 * @subpackage Structs
 */
class MakeOrderDiffInvoiceRequest extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderId;
    /**
     * The itemIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected array $itemIds = [];
    /**
     * Constructor method for MakeOrderDiffInvoiceRequest
     * @uses MakeOrderDiffInvoiceRequest::setOrderId()
     * @uses MakeOrderDiffInvoiceRequest::setItemIds()
     * @param int $orderId
     * @param int[] $itemIds
     */
    public function __construct(int $orderId, array $itemIds = [])
    {
        $this
            ->setOrderId($orderId)
            ->setItemIds($itemIds);
    }
    /**
     * Get orderId value
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceRequest
     */
    public function setOrderId(int $orderId): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get itemIds value
     * @return int[]
     */
    public function getItemIds(): array
    {
        return $this->itemIds;
    }
    /**
     * This method is responsible for validating the values passed to the setItemIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIdsForArrayConstraintsFromSetItemIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeOrderDiffInvoiceRequestItemIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($makeOrderDiffInvoiceRequestItemIdsItem) || ctype_digit($makeOrderDiffInvoiceRequestItemIdsItem))) {
                $invalidValues[] = is_object($makeOrderDiffInvoiceRequestItemIdsItem) ? get_class($makeOrderDiffInvoiceRequestItemIdsItem) : sprintf('%s(%s)', gettype($makeOrderDiffInvoiceRequestItemIdsItem), var_export($makeOrderDiffInvoiceRequestItemIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The itemIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set itemIds value
     * @throws InvalidArgumentException
     * @param int[] $itemIds
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceRequest
     */
    public function setItemIds(array $itemIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemIdsArrayErrorMessage = self::validateItemIdsForArrayConstraintsFromSetItemIds($itemIds))) {
            throw new InvalidArgumentException($itemIdsArrayErrorMessage, __LINE__);
        }
        $this->itemIds = $itemIds;
        
        return $this;
    }
    /**
     * Add item to itemIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceRequest
     */
    public function addToItemIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The itemIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->itemIds[] = $item;
        
        return $this;
    }
}
