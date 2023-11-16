<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformEntryClearingRequest StructType
 * @subpackage Structs
 */
class PerformEntryClearingRequest extends AbstractStructBase
{
    /**
     * The clearingEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Order\StructType\EntryDTO[]
     */
    protected array $clearingEntry = [];
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * Constructor method for PerformEntryClearingRequest
     * @uses PerformEntryClearingRequest::setClearingEntry()
     * @uses PerformEntryClearingRequest::setReceiptNo()
     * @uses PerformEntryClearingRequest::setReceiptDate()
     * @uses PerformEntryClearingRequest::setAccountId()
     * @uses PerformEntryClearingRequest::setBookingText()
     * @uses PerformEntryClearingRequest::setCurrency()
     * @uses PerformEntryClearingRequest::setExchangeRate()
     * @param \Pggns\MidocoApi\Order\StructType\EntryDTO[] $clearingEntry
     * @param string $receiptNo
     * @param string $receiptDate
     * @param string $accountId
     * @param string $bookingText
     * @param string $currency
     * @param float $exchangeRate
     */
    public function __construct(array $clearingEntry = [], ?string $receiptNo = null, ?string $receiptDate = null, ?string $accountId = null, ?string $bookingText = null, ?string $currency = null, ?float $exchangeRate = null)
    {
        $this
            ->setClearingEntry($clearingEntry)
            ->setReceiptNo($receiptNo)
            ->setReceiptDate($receiptDate)
            ->setAccountId($accountId)
            ->setBookingText($bookingText)
            ->setCurrency($currency)
            ->setExchangeRate($exchangeRate);
    }
    /**
     * Get clearingEntry value
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO[]
     */
    public function getClearingEntry(): array
    {
        return $this->clearingEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setClearingEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClearingEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClearingEntryForArrayConstraintsFromSetClearingEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $performEntryClearingRequestClearingEntryItem) {
            // validation for constraint: itemType
            if (!$performEntryClearingRequestClearingEntryItem instanceof \Pggns\MidocoApi\Order\StructType\EntryDTO) {
                $invalidValues[] = is_object($performEntryClearingRequestClearingEntryItem) ? get_class($performEntryClearingRequestClearingEntryItem) : sprintf('%s(%s)', gettype($performEntryClearingRequestClearingEntryItem), var_export($performEntryClearingRequestClearingEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The clearingEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\EntryDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set clearingEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\EntryDTO[] $clearingEntry
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest
     */
    public function setClearingEntry(array $clearingEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($clearingEntryArrayErrorMessage = self::validateClearingEntryForArrayConstraintsFromSetClearingEntry($clearingEntry))) {
            throw new InvalidArgumentException($clearingEntryArrayErrorMessage, __LINE__);
        }
        $this->clearingEntry = $clearingEntry;
        
        return $this;
    }
    /**
     * Add item to clearingEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\EntryDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest
     */
    public function addToClearingEntry(\Pggns\MidocoApi\Order\StructType\EntryDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\EntryDTO) {
            throw new InvalidArgumentException(sprintf('The clearingEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\EntryDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->clearingEntry[] = $item;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get bookingText value
     * @return string|null
     */
    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }
    /**
     * Set bookingText value
     * @param string $bookingText
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest
     */
    public function setBookingText(?string $bookingText = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingText) && !is_string($bookingText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingText, true), gettype($bookingText)), __LINE__);
        }
        $this->bookingText = $bookingText;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
}
