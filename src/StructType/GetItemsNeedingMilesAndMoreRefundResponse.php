<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemsNeedingMilesAndMoreRefundResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetItemsNeedingMilesAndMoreRefundResponse extends AbstractStructBase
{
    /**
     * The itemId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $itemId = null;
    /**
     * Constructor method for GetItemsNeedingMilesAndMoreRefundResponse
     * @uses GetItemsNeedingMilesAndMoreRefundResponse::setItemId()
     * @param int[] $itemId
     */
    public function __construct(?array $itemId = null)
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get itemId value
     * @return int[]
     */
    public function getItemId(): ?array
    {
        return $this->itemId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIdForArrayConstraintFromSetItemId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getItemsNeedingMilesAndMoreRefundResponseItemIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getItemsNeedingMilesAndMoreRefundResponseItemIdItem) || ctype_digit($getItemsNeedingMilesAndMoreRefundResponseItemIdItem))) {
                $invalidValues[] = is_object($getItemsNeedingMilesAndMoreRefundResponseItemIdItem) ? get_class($getItemsNeedingMilesAndMoreRefundResponseItemIdItem) : sprintf('%s(%s)', gettype($getItemsNeedingMilesAndMoreRefundResponseItemIdItem), var_export($getItemsNeedingMilesAndMoreRefundResponseItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The itemId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set itemId value
     * @throws InvalidArgumentException
     * @param int[] $itemId
     * @return \Pggns\MidocoApi\Order\StructType\GetItemsNeedingMilesAndMoreRefundResponse
     */
    public function setItemId(?array $itemId = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemIdArrayErrorMessage = self::validateItemIdForArrayConstraintFromSetItemId($itemId))) {
            throw new InvalidArgumentException($itemIdArrayErrorMessage, __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Add item to itemId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GetItemsNeedingMilesAndMoreRefundResponse
     */
    public function addToItemId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The itemId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->itemId[] = $item;
        
        return $this;
    }
}
