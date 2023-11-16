<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetATOLType4OrderRequest StructType
 * @subpackage Structs
 */
class GetATOLType4OrderRequest extends AbstractStructBase
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
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for GetATOLType4OrderRequest
     * @uses GetATOLType4OrderRequest::setItemId()
     * @uses GetATOLType4OrderRequest::setOrderId()
     * @param int[] $itemId
     * @param int $orderId
     */
    public function __construct(array $itemId = [], ?int $orderId = null)
    {
        $this
            ->setItemId($itemId)
            ->setOrderId($orderId);
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
        foreach ($values as $getATOLType4OrderRequestItemIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getATOLType4OrderRequestItemIdItem) || ctype_digit($getATOLType4OrderRequestItemIdItem))) {
                $invalidValues[] = is_object($getATOLType4OrderRequestItemIdItem) ? get_class($getATOLType4OrderRequestItemIdItem) : sprintf('%s(%s)', gettype($getATOLType4OrderRequestItemIdItem), var_export($getATOLType4OrderRequestItemIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetATOLType4OrderRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetATOLType4OrderRequest
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
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetATOLType4OrderRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
}
