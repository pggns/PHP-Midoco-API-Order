<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOnlyOrderResponse StructType
 * @subpackage Structs
 */
class SaveOnlyOrderResponse extends AbstractStructBase
{
    /**
     * The ToBeProcessedOrderId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $ToBeProcessedOrderId = [];
    /**
     * The mainOrderId
     * @var int|null
     */
    protected ?int $mainOrderId = null;
    /**
     * Constructor method for SaveOnlyOrderResponse
     * @uses SaveOnlyOrderResponse::setToBeProcessedOrderId()
     * @uses SaveOnlyOrderResponse::setMainOrderId()
     * @param int[] $toBeProcessedOrderId
     * @param int $mainOrderId
     */
    public function __construct(array $toBeProcessedOrderId = [], ?int $mainOrderId = null)
    {
        $this
            ->setToBeProcessedOrderId($toBeProcessedOrderId)
            ->setMainOrderId($mainOrderId);
    }
    /**
     * Get ToBeProcessedOrderId value
     * @return int[]
     */
    public function getToBeProcessedOrderId(): array
    {
        return $this->ToBeProcessedOrderId;
    }
    /**
     * This method is responsible for validating the values passed to the setToBeProcessedOrderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setToBeProcessedOrderId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateToBeProcessedOrderIdForArrayConstraintsFromSetToBeProcessedOrderId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveOnlyOrderResponseToBeProcessedOrderIdItem) {
            // validation for constraint: itemType
            if (!(is_int($saveOnlyOrderResponseToBeProcessedOrderIdItem) || ctype_digit($saveOnlyOrderResponseToBeProcessedOrderIdItem))) {
                $invalidValues[] = is_object($saveOnlyOrderResponseToBeProcessedOrderIdItem) ? get_class($saveOnlyOrderResponseToBeProcessedOrderIdItem) : sprintf('%s(%s)', gettype($saveOnlyOrderResponseToBeProcessedOrderIdItem), var_export($saveOnlyOrderResponseToBeProcessedOrderIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ToBeProcessedOrderId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ToBeProcessedOrderId value
     * @throws InvalidArgumentException
     * @param int[] $toBeProcessedOrderId
     * @return \Pggns\MidocoApi\Order\StructType\SaveOnlyOrderResponse
     */
    public function setToBeProcessedOrderId(array $toBeProcessedOrderId = []): self
    {
        // validation for constraint: array
        if ('' !== ($toBeProcessedOrderIdArrayErrorMessage = self::validateToBeProcessedOrderIdForArrayConstraintsFromSetToBeProcessedOrderId($toBeProcessedOrderId))) {
            throw new InvalidArgumentException($toBeProcessedOrderIdArrayErrorMessage, __LINE__);
        }
        $this->ToBeProcessedOrderId = $toBeProcessedOrderId;
        
        return $this;
    }
    /**
     * Add item to ToBeProcessedOrderId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveOnlyOrderResponse
     */
    public function addToToBeProcessedOrderId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The ToBeProcessedOrderId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ToBeProcessedOrderId[] = $item;
        
        return $this;
    }
    /**
     * Get mainOrderId value
     * @return int|null
     */
    public function getMainOrderId(): ?int
    {
        return $this->mainOrderId;
    }
    /**
     * Set mainOrderId value
     * @param int $mainOrderId
     * @return \Pggns\MidocoApi\Order\StructType\SaveOnlyOrderResponse
     */
    public function setMainOrderId(?int $mainOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($mainOrderId) && !(is_int($mainOrderId) || ctype_digit($mainOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mainOrderId, true), gettype($mainOrderId)), __LINE__);
        }
        $this->mainOrderId = $mainOrderId;
        
        return $this;
    }
}
