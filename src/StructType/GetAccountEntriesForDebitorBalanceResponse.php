<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountEntriesForDebitorBalanceResponse StructType
 * @subpackage Structs
 */
class GetAccountEntriesForDebitorBalanceResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitorAccountEntryBalance
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitorAccountEntryBalance
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance[]
     */
    protected array $MidocoDebitorAccountEntryBalance = [];
    /**
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * The totalInvoicedAmount
     * @var float|null
     */
    protected ?float $totalInvoicedAmount = null;
    /**
     * The totalPaidAmount
     * @var float|null
     */
    protected ?float $totalPaidAmount = null;
    /**
     * The totalOpenAmount
     * @var float|null
     */
    protected ?float $totalOpenAmount = null;
    /**
     * Constructor method for GetAccountEntriesForDebitorBalanceResponse
     * @uses GetAccountEntriesForDebitorBalanceResponse::setMidocoDebitorAccountEntryBalance()
     * @uses GetAccountEntriesForDebitorBalanceResponse::setTotalNoOfRecords()
     * @uses GetAccountEntriesForDebitorBalanceResponse::setTotalInvoicedAmount()
     * @uses GetAccountEntriesForDebitorBalanceResponse::setTotalPaidAmount()
     * @uses GetAccountEntriesForDebitorBalanceResponse::setTotalOpenAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance[] $midocoDebitorAccountEntryBalance
     * @param int $totalNoOfRecords
     * @param float $totalInvoicedAmount
     * @param float $totalPaidAmount
     * @param float $totalOpenAmount
     */
    public function __construct(array $midocoDebitorAccountEntryBalance = [], ?int $totalNoOfRecords = null, ?float $totalInvoicedAmount = null, ?float $totalPaidAmount = null, ?float $totalOpenAmount = null)
    {
        $this
            ->setMidocoDebitorAccountEntryBalance($midocoDebitorAccountEntryBalance)
            ->setTotalNoOfRecords($totalNoOfRecords)
            ->setTotalInvoicedAmount($totalInvoicedAmount)
            ->setTotalPaidAmount($totalPaidAmount)
            ->setTotalOpenAmount($totalOpenAmount);
    }
    /**
     * Get MidocoDebitorAccountEntryBalance value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance[]
     */
    public function getMidocoDebitorAccountEntryBalance(): array
    {
        return $this->MidocoDebitorAccountEntryBalance;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDebitorAccountEntryBalance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitorAccountEntryBalance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorAccountEntryBalanceForArrayConstraintsFromSetMidocoDebitorAccountEntryBalance(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccountEntriesForDebitorBalanceResponseMidocoDebitorAccountEntryBalanceItem) {
            // validation for constraint: itemType
            if (!$getAccountEntriesForDebitorBalanceResponseMidocoDebitorAccountEntryBalanceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance) {
                $invalidValues[] = is_object($getAccountEntriesForDebitorBalanceResponseMidocoDebitorAccountEntryBalanceItem) ? get_class($getAccountEntriesForDebitorBalanceResponseMidocoDebitorAccountEntryBalanceItem) : sprintf('%s(%s)', gettype($getAccountEntriesForDebitorBalanceResponseMidocoDebitorAccountEntryBalanceItem), var_export($getAccountEntriesForDebitorBalanceResponseMidocoDebitorAccountEntryBalanceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitorAccountEntryBalance property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitorAccountEntryBalance value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance[] $midocoDebitorAccountEntryBalance
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceResponse
     */
    public function setMidocoDebitorAccountEntryBalance(array $midocoDebitorAccountEntryBalance = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorAccountEntryBalanceArrayErrorMessage = self::validateMidocoDebitorAccountEntryBalanceForArrayConstraintsFromSetMidocoDebitorAccountEntryBalance($midocoDebitorAccountEntryBalance))) {
            throw new InvalidArgumentException($midocoDebitorAccountEntryBalanceArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitorAccountEntryBalance = $midocoDebitorAccountEntryBalance;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitorAccountEntryBalance value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceResponse
     */
    public function addToMidocoDebitorAccountEntryBalance(\Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitorAccountEntryBalance property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitorAccountEntryBalance[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceResponse
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
     * Get totalInvoicedAmount value
     * @return float|null
     */
    public function getTotalInvoicedAmount(): ?float
    {
        return $this->totalInvoicedAmount;
    }
    /**
     * Set totalInvoicedAmount value
     * @param float $totalInvoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceResponse
     */
    public function setTotalInvoicedAmount(?float $totalInvoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalInvoicedAmount) && !(is_float($totalInvoicedAmount) || is_numeric($totalInvoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalInvoicedAmount, true), gettype($totalInvoicedAmount)), __LINE__);
        }
        $this->totalInvoicedAmount = $totalInvoicedAmount;
        
        return $this;
    }
    /**
     * Get totalPaidAmount value
     * @return float|null
     */
    public function getTotalPaidAmount(): ?float
    {
        return $this->totalPaidAmount;
    }
    /**
     * Set totalPaidAmount value
     * @param float $totalPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceResponse
     */
    public function setTotalPaidAmount(?float $totalPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPaidAmount) && !(is_float($totalPaidAmount) || is_numeric($totalPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPaidAmount, true), gettype($totalPaidAmount)), __LINE__);
        }
        $this->totalPaidAmount = $totalPaidAmount;
        
        return $this;
    }
    /**
     * Get totalOpenAmount value
     * @return float|null
     */
    public function getTotalOpenAmount(): ?float
    {
        return $this->totalOpenAmount;
    }
    /**
     * Set totalOpenAmount value
     * @param float $totalOpenAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorBalanceResponse
     */
    public function setTotalOpenAmount(?float $totalOpenAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalOpenAmount) && !(is_float($totalOpenAmount) || is_numeric($totalOpenAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalOpenAmount, true), gettype($totalOpenAmount)), __LINE__);
        }
        $this->totalOpenAmount = $totalOpenAmount;
        
        return $this;
    }
}
