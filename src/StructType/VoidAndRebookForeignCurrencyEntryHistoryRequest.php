<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidAndRebookForeignCurrencyEntryHistoryRequest StructType
 * @subpackage Structs
 */
class VoidAndRebookForeignCurrencyEntryHistoryRequest extends AbstractStructBase
{
    /**
     * The entryHistoryId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected array $entryHistoryId = [];
    /**
     * The newInvoicedAmount
     * @var float|null
     */
    protected ?float $newInvoicedAmount = null;
    /**
     * Constructor method for VoidAndRebookForeignCurrencyEntryHistoryRequest
     * @uses VoidAndRebookForeignCurrencyEntryHistoryRequest::setEntryHistoryId()
     * @uses VoidAndRebookForeignCurrencyEntryHistoryRequest::setNewInvoicedAmount()
     * @param int[] $entryHistoryId
     * @param float $newInvoicedAmount
     */
    public function __construct(array $entryHistoryId = [], ?float $newInvoicedAmount = null)
    {
        $this
            ->setEntryHistoryId($entryHistoryId)
            ->setNewInvoicedAmount($newInvoicedAmount);
    }
    /**
     * Get entryHistoryId value
     * @return int[]
     */
    public function getEntryHistoryId(): array
    {
        return $this->entryHistoryId;
    }
    /**
     * This method is responsible for validating the values passed to the setEntryHistoryId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntryHistoryId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryHistoryIdForArrayConstraintsFromSetEntryHistoryId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $voidAndRebookForeignCurrencyEntryHistoryRequestEntryHistoryIdItem) {
            // validation for constraint: itemType
            if (!(is_int($voidAndRebookForeignCurrencyEntryHistoryRequestEntryHistoryIdItem) || ctype_digit($voidAndRebookForeignCurrencyEntryHistoryRequestEntryHistoryIdItem))) {
                $invalidValues[] = is_object($voidAndRebookForeignCurrencyEntryHistoryRequestEntryHistoryIdItem) ? get_class($voidAndRebookForeignCurrencyEntryHistoryRequestEntryHistoryIdItem) : sprintf('%s(%s)', gettype($voidAndRebookForeignCurrencyEntryHistoryRequestEntryHistoryIdItem), var_export($voidAndRebookForeignCurrencyEntryHistoryRequestEntryHistoryIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entryHistoryId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set entryHistoryId value
     * @throws InvalidArgumentException
     * @param int[] $entryHistoryId
     * @return \Pggns\MidocoApi\Order\StructType\VoidAndRebookForeignCurrencyEntryHistoryRequest
     */
    public function setEntryHistoryId(array $entryHistoryId = []): self
    {
        // validation for constraint: array
        if ('' !== ($entryHistoryIdArrayErrorMessage = self::validateEntryHistoryIdForArrayConstraintsFromSetEntryHistoryId($entryHistoryId))) {
            throw new InvalidArgumentException($entryHistoryIdArrayErrorMessage, __LINE__);
        }
        $this->entryHistoryId = $entryHistoryId;
        
        return $this;
    }
    /**
     * Add item to entryHistoryId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\VoidAndRebookForeignCurrencyEntryHistoryRequest
     */
    public function addToEntryHistoryId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The entryHistoryId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entryHistoryId[] = $item;
        
        return $this;
    }
    /**
     * Get newInvoicedAmount value
     * @return float|null
     */
    public function getNewInvoicedAmount(): ?float
    {
        return $this->newInvoicedAmount;
    }
    /**
     * Set newInvoicedAmount value
     * @param float $newInvoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\VoidAndRebookForeignCurrencyEntryHistoryRequest
     */
    public function setNewInvoicedAmount(?float $newInvoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($newInvoicedAmount) && !(is_float($newInvoicedAmount) || is_numeric($newInvoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newInvoicedAmount, true), gettype($newInvoicedAmount)), __LINE__);
        }
        $this->newInvoicedAmount = $newInvoicedAmount;
        
        return $this;
    }
}
