<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFairplaneEmail4OrderResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveFairplaneEmail4OrderResponse extends AbstractStructBase
{
    /**
     * The orderDocumentId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $orderDocumentId = null;
    /**
     * Constructor method for SaveFairplaneEmail4OrderResponse
     * @uses SaveFairplaneEmail4OrderResponse::setOrderDocumentId()
     * @param int[] $orderDocumentId
     */
    public function __construct(?array $orderDocumentId = null)
    {
        $this
            ->setOrderDocumentId($orderDocumentId);
    }
    /**
     * Get orderDocumentId value
     * @return int[]
     */
    public function getOrderDocumentId(): ?array
    {
        return $this->orderDocumentId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrderDocumentId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderDocumentId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderDocumentIdForArrayConstraintFromSetOrderDocumentId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveFairplaneEmail4OrderResponseOrderDocumentIdItem) {
            // validation for constraint: itemType
            if (!(is_int($saveFairplaneEmail4OrderResponseOrderDocumentIdItem) || ctype_digit($saveFairplaneEmail4OrderResponseOrderDocumentIdItem))) {
                $invalidValues[] = is_object($saveFairplaneEmail4OrderResponseOrderDocumentIdItem) ? get_class($saveFairplaneEmail4OrderResponseOrderDocumentIdItem) : sprintf('%s(%s)', gettype($saveFairplaneEmail4OrderResponseOrderDocumentIdItem), var_export($saveFairplaneEmail4OrderResponseOrderDocumentIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orderDocumentId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orderDocumentId value
     * @throws InvalidArgumentException
     * @param int[] $orderDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\SaveFairplaneEmail4OrderResponse
     */
    public function setOrderDocumentId(?array $orderDocumentId = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderDocumentIdArrayErrorMessage = self::validateOrderDocumentIdForArrayConstraintFromSetOrderDocumentId($orderDocumentId))) {
            throw new InvalidArgumentException($orderDocumentIdArrayErrorMessage, __LINE__);
        }
        $this->orderDocumentId = $orderDocumentId;
        
        return $this;
    }
    /**
     * Add item to orderDocumentId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveFairplaneEmail4OrderResponse
     */
    public function addToOrderDocumentId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The orderDocumentId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orderDocumentId[] = $item;
        
        return $this;
    }
}
