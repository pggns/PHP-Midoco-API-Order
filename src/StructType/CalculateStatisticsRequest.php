<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateStatisticsRequest StructType
 * @subpackage Structs
 */
class CalculateStatisticsRequest extends AbstractStructBase
{
    /**
     * The itemId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $itemId = [];
    /**
     * Constructor method for CalculateStatisticsRequest
     * @uses CalculateStatisticsRequest::setItemId()
     * @param int[] $itemId
     */
    public function __construct(array $itemId = [])
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get itemId value
     * @return int[]
     */
    public function getItemId(): array
    {
        return $this->itemId;
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
        foreach ($values as $calculateStatisticsRequestItemIdItem) {
            // validation for constraint: itemType
            if (!(is_int($calculateStatisticsRequestItemIdItem) || ctype_digit($calculateStatisticsRequestItemIdItem))) {
                $invalidValues[] = is_object($calculateStatisticsRequestItemIdItem) ? get_class($calculateStatisticsRequestItemIdItem) : sprintf('%s(%s)', gettype($calculateStatisticsRequestItemIdItem), var_export($calculateStatisticsRequestItemIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\CalculateStatisticsRequest
     */
    public function setItemId(array $itemId = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemIdArrayErrorMessage = self::validateItemIdForArrayConstraintsFromSetItemId($itemId))) {
            throw new InvalidArgumentException($itemIdArrayErrorMessage, __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Add item to itemId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\CalculateStatisticsRequest
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
