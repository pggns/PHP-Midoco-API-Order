<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshMilesAndMoreEarnTransactionStatusRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Request the latest transaction's information via HTTP GET, and update the MilesAndMoreEarnTransaction status if necessary.
 * @subpackage Structs
 */
class RefreshMilesAndMoreEarnTransactionStatusRequest extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - documentation: Sell item id
     * - base: xs:integer
     * - maxOccurs: unbounded
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int[]
     */
    protected array $ItemId = [];
    /**
     * Constructor method for RefreshMilesAndMoreEarnTransactionStatusRequest
     * @uses RefreshMilesAndMoreEarnTransactionStatusRequest::setItemId()
     * @param int[] $itemId
     */
    public function __construct(array $itemId = [])
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return int[]
     */
    public function getItemId(): array
    {
        return $this->ItemId;
    }
    /**
     * This method is responsible for validating the values passed to the setItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIdForArrayConstraintsFromSetItemId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refreshMilesAndMoreEarnTransactionStatusRequestItemIdItem) {
            // validation for constraint: itemType
            if (!(is_int($refreshMilesAndMoreEarnTransactionStatusRequestItemIdItem) || ctype_digit($refreshMilesAndMoreEarnTransactionStatusRequestItemIdItem))) {
                $invalidValues[] = is_object($refreshMilesAndMoreEarnTransactionStatusRequestItemIdItem) ? get_class($refreshMilesAndMoreEarnTransactionStatusRequestItemIdItem) : sprintf('%s(%s)', gettype($refreshMilesAndMoreEarnTransactionStatusRequestItemIdItem), var_export($refreshMilesAndMoreEarnTransactionStatusRequestItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemId value
     * @throws InvalidArgumentException
     * @param int[] $itemId
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreEarnTransactionStatusRequest
     */
    public function setItemId(array $itemId = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemIdArrayErrorMessage = self::validateItemIdForArrayConstraintsFromSetItemId($itemId))) {
            throw new InvalidArgumentException($itemIdArrayErrorMessage, __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($itemId) && $itemId < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($itemId, true)), __LINE__);
        }
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Add item to ItemId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreEarnTransactionStatusRequest
     */
    public function addToItemId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The ItemId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if ($item < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($item, true)), __LINE__);
        }
        $this->ItemId[] = $item;
        
        return $this;
    }
}
