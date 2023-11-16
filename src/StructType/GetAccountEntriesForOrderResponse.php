<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountEntriesForOrderResponse StructType
 * @subpackage Structs
 */
class GetAccountEntriesForOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderAccountEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderAccountEntry
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry[]
     */
    protected array $MidocoOrderAccountEntry = [];
    /**
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * The totalDueAmount
     * @var float|null
     */
    protected ?float $totalDueAmount = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * Constructor method for GetAccountEntriesForOrderResponse
     * @uses GetAccountEntriesForOrderResponse::setMidocoOrderAccountEntry()
     * @uses GetAccountEntriesForOrderResponse::setTotalNoOfRecords()
     * @uses GetAccountEntriesForOrderResponse::setTotalDueAmount()
     * @uses GetAccountEntriesForOrderResponse::setTotalAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry[] $midocoOrderAccountEntry
     * @param int $totalNoOfRecords
     * @param float $totalDueAmount
     * @param float $totalAmount
     */
    public function __construct(array $midocoOrderAccountEntry = [], ?int $totalNoOfRecords = null, ?float $totalDueAmount = null, ?float $totalAmount = null)
    {
        $this
            ->setMidocoOrderAccountEntry($midocoOrderAccountEntry)
            ->setTotalNoOfRecords($totalNoOfRecords)
            ->setTotalDueAmount($totalDueAmount)
            ->setTotalAmount($totalAmount);
    }
    /**
     * Get MidocoOrderAccountEntry value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry[]
     */
    public function getMidocoOrderAccountEntry(): array
    {
        return $this->MidocoOrderAccountEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderAccountEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderAccountEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderAccountEntryForArrayConstraintsFromSetMidocoOrderAccountEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccountEntriesForOrderResponseMidocoOrderAccountEntryItem) {
            // validation for constraint: itemType
            if (!$getAccountEntriesForOrderResponseMidocoOrderAccountEntryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry) {
                $invalidValues[] = is_object($getAccountEntriesForOrderResponseMidocoOrderAccountEntryItem) ? get_class($getAccountEntriesForOrderResponseMidocoOrderAccountEntryItem) : sprintf('%s(%s)', gettype($getAccountEntriesForOrderResponseMidocoOrderAccountEntryItem), var_export($getAccountEntriesForOrderResponseMidocoOrderAccountEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderAccountEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderAccountEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry[] $midocoOrderAccountEntry
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderResponse
     */
    public function setMidocoOrderAccountEntry(array $midocoOrderAccountEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderAccountEntryArrayErrorMessage = self::validateMidocoOrderAccountEntryForArrayConstraintsFromSetMidocoOrderAccountEntry($midocoOrderAccountEntry))) {
            throw new InvalidArgumentException($midocoOrderAccountEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderAccountEntry = $midocoOrderAccountEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderAccountEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderResponse
     */
    public function addToMidocoOrderAccountEntry(\Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderAccountEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderAccountEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderAccountEntry[] = $item;
        
        return $this;
    }
    /**
     * Get totalNoOfRecords value
     * @return int|null
     */
    public function getTotalNoOfRecords(): ?int
    {
        return $this->totalNoOfRecords;
    }
    /**
     * Set totalNoOfRecords value
     * @param int $totalNoOfRecords
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderResponse
     */
    public function setTotalNoOfRecords(?int $totalNoOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfRecords) && !(is_int($totalNoOfRecords) || ctype_digit($totalNoOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfRecords, true), gettype($totalNoOfRecords)), __LINE__);
        }
        $this->totalNoOfRecords = $totalNoOfRecords;
        
        return $this;
    }
    /**
     * Get totalDueAmount value
     * @return float|null
     */
    public function getTotalDueAmount(): ?float
    {
        return $this->totalDueAmount;
    }
    /**
     * Set totalDueAmount value
     * @param float $totalDueAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderResponse
     */
    public function setTotalDueAmount(?float $totalDueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalDueAmount) && !(is_float($totalDueAmount) || is_numeric($totalDueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalDueAmount, true), gettype($totalDueAmount)), __LINE__);
        }
        $this->totalDueAmount = $totalDueAmount;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForOrderResponse
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
}
