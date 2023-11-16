<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalDataRecord StructType
 * @subpackage Structs
 */
class JournalDataRecord extends AbstractStructBase
{
    /**
     * The EntryBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\EntryBooking[]
     */
    protected array $EntryBooking = [];
    /**
     * The CostCentreBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\CostCentreBooking[]
     */
    protected array $CostCentreBooking = [];
    /**
     * The journalId
     * Meta information extracted from the WSDL
     * - documentation: a unique journalId, internal key
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * The receiptNo
     * Meta information extracted from the WSDL
     * - documentation: entered receipt no, for invoice = invoiceNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The receiptDate
     * Meta information extracted from the WSDL
     * - documentation: receipt date, not due date (see entry section)
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The mainAccount
     * Meta information extracted from the WSDL
     * - documentation: main account, for invoice or payment normally a debtor or creditor
     * @var string|null
     */
    protected ?string $mainAccount = null;
    /**
     * The oppositeAccount
     * Meta information extracted from the WSDL
     * - documentation: payment account or cost account
     * @var string|null
     */
    protected ?string $oppositeAccount = null;
    /**
     * The debitCreditIndicator
     * @var string|null
     */
    protected ?string $debitCreditIndicator = null;
    /**
     * The bookingAmount
     * Meta information extracted from the WSDL
     * - documentation: brutto amount including vat (vat has to be split in destination financial system, depending on VAT codes)
     * @var float|null
     */
    protected ?float $bookingAmount = null;
    /**
     * The vatType
     * @var string|null
     */
    protected ?string $vatType = null;
    /**
     * The vatPercent
     * Meta information extracted from the WSDL
     * - documentation: percentage of VAT
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The vatAmount
     * Meta information extracted from the WSDL
     * - documentation: calculated vat amount, VAT has to be calculated from amount booked on opposite account
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatCountry
     * Meta information extracted from the WSDL
     * - documentation: domestic or ISO code of foreign VAT, when a VAT of a foreign country is invoiced or deducted
     * @var string|null
     */
    protected ?string $vatCountry = null;
    /**
     * The reverseChargePercent
     * Meta information extracted from the WSDL
     * - documentation: for reverse charge input VAT, name the RC percent
     * @var float|null
     */
    protected ?float $reverseChargePercent = null;
    /**
     * The bookingText
     * Meta information extracted from the WSDL
     * - documentation: text reference, mostly an order number or customer name
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The originalcurrency
     * Meta information extracted from the WSDL
     * - documentation: in case of foreign currency, the original currency, otherwise not filled
     * @var string|null
     */
    protected ?string $originalcurrency = null;
    /**
     * The originalAmount
     * Meta information extracted from the WSDL
     * - documentation: in case of foreign currency, the original amount in foreign currency, otherwise not filled
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The bookingPeriod
     * Meta information extracted from the WSDL
     * - documentation: resulting booking period in Midoco (depending on period handling, might be internally forwarded to next open period)
     * @var int|null
     */
    protected ?int $bookingPeriod = null;
    /**
     * The bookingYear
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * Constructor method for JournalDataRecord
     * @uses JournalDataRecord::setEntryBooking()
     * @uses JournalDataRecord::setCostCentreBooking()
     * @uses JournalDataRecord::setJournalId()
     * @uses JournalDataRecord::setReceiptNo()
     * @uses JournalDataRecord::setReceiptDate()
     * @uses JournalDataRecord::setMainAccount()
     * @uses JournalDataRecord::setOppositeAccount()
     * @uses JournalDataRecord::setDebitCreditIndicator()
     * @uses JournalDataRecord::setBookingAmount()
     * @uses JournalDataRecord::setVatType()
     * @uses JournalDataRecord::setVatPercent()
     * @uses JournalDataRecord::setVatAmount()
     * @uses JournalDataRecord::setVatCountry()
     * @uses JournalDataRecord::setReverseChargePercent()
     * @uses JournalDataRecord::setBookingText()
     * @uses JournalDataRecord::setOriginalcurrency()
     * @uses JournalDataRecord::setOriginalAmount()
     * @uses JournalDataRecord::setBookingPeriod()
     * @uses JournalDataRecord::setBookingYear()
     * @param \Pggns\MidocoApi\Order\StructType\EntryBooking[] $entryBooking
     * @param \Pggns\MidocoApi\Order\StructType\CostCentreBooking[] $costCentreBooking
     * @param int $journalId
     * @param string $receiptNo
     * @param string $receiptDate
     * @param string $mainAccount
     * @param string $oppositeAccount
     * @param string $debitCreditIndicator
     * @param float $bookingAmount
     * @param string $vatType
     * @param float $vatPercent
     * @param float $vatAmount
     * @param string $vatCountry
     * @param float $reverseChargePercent
     * @param string $bookingText
     * @param string $originalcurrency
     * @param float $originalAmount
     * @param int $bookingPeriod
     * @param int $bookingYear
     */
    public function __construct(array $entryBooking = [], array $costCentreBooking = [], ?int $journalId = null, ?string $receiptNo = null, ?string $receiptDate = null, ?string $mainAccount = null, ?string $oppositeAccount = null, ?string $debitCreditIndicator = null, ?float $bookingAmount = null, ?string $vatType = null, ?float $vatPercent = null, ?float $vatAmount = null, ?string $vatCountry = null, ?float $reverseChargePercent = null, ?string $bookingText = null, ?string $originalcurrency = null, ?float $originalAmount = null, ?int $bookingPeriod = null, ?int $bookingYear = null)
    {
        $this
            ->setEntryBooking($entryBooking)
            ->setCostCentreBooking($costCentreBooking)
            ->setJournalId($journalId)
            ->setReceiptNo($receiptNo)
            ->setReceiptDate($receiptDate)
            ->setMainAccount($mainAccount)
            ->setOppositeAccount($oppositeAccount)
            ->setDebitCreditIndicator($debitCreditIndicator)
            ->setBookingAmount($bookingAmount)
            ->setVatType($vatType)
            ->setVatPercent($vatPercent)
            ->setVatAmount($vatAmount)
            ->setVatCountry($vatCountry)
            ->setReverseChargePercent($reverseChargePercent)
            ->setBookingText($bookingText)
            ->setOriginalcurrency($originalcurrency)
            ->setOriginalAmount($originalAmount)
            ->setBookingPeriod($bookingPeriod)
            ->setBookingYear($bookingYear);
    }
    /**
     * Get EntryBooking value
     * @return \Pggns\MidocoApi\Order\StructType\EntryBooking[]
     */
    public function getEntryBooking(): array
    {
        return $this->EntryBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setEntryBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntryBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryBookingForArrayConstraintsFromSetEntryBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $journalDataRecordEntryBookingItem) {
            // validation for constraint: itemType
            if (!$journalDataRecordEntryBookingItem instanceof \Pggns\MidocoApi\Order\StructType\EntryBooking) {
                $invalidValues[] = is_object($journalDataRecordEntryBookingItem) ? get_class($journalDataRecordEntryBookingItem) : sprintf('%s(%s)', gettype($journalDataRecordEntryBookingItem), var_export($journalDataRecordEntryBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EntryBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\EntryBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EntryBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\EntryBooking[] $entryBooking
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setEntryBooking(array $entryBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($entryBookingArrayErrorMessage = self::validateEntryBookingForArrayConstraintsFromSetEntryBooking($entryBooking))) {
            throw new InvalidArgumentException($entryBookingArrayErrorMessage, __LINE__);
        }
        $this->EntryBooking = $entryBooking;
        
        return $this;
    }
    /**
     * Add item to EntryBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\EntryBooking $item
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function addToEntryBooking(\Pggns\MidocoApi\Order\StructType\EntryBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\EntryBooking) {
            throw new InvalidArgumentException(sprintf('The EntryBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\EntryBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EntryBooking[] = $item;
        
        return $this;
    }
    /**
     * Get CostCentreBooking value
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreBooking[]
     */
    public function getCostCentreBooking(): array
    {
        return $this->CostCentreBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setCostCentreBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCostCentreBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCostCentreBookingForArrayConstraintsFromSetCostCentreBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $journalDataRecordCostCentreBookingItem) {
            // validation for constraint: itemType
            if (!$journalDataRecordCostCentreBookingItem instanceof \Pggns\MidocoApi\Order\StructType\CostCentreBooking) {
                $invalidValues[] = is_object($journalDataRecordCostCentreBookingItem) ? get_class($journalDataRecordCostCentreBookingItem) : sprintf('%s(%s)', gettype($journalDataRecordCostCentreBookingItem), var_export($journalDataRecordCostCentreBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CostCentreBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\CostCentreBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CostCentreBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CostCentreBooking[] $costCentreBooking
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setCostCentreBooking(array $costCentreBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($costCentreBookingArrayErrorMessage = self::validateCostCentreBookingForArrayConstraintsFromSetCostCentreBooking($costCentreBooking))) {
            throw new InvalidArgumentException($costCentreBookingArrayErrorMessage, __LINE__);
        }
        $this->CostCentreBooking = $costCentreBooking;
        
        return $this;
    }
    /**
     * Add item to CostCentreBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CostCentreBooking $item
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function addToCostCentreBooking(\Pggns\MidocoApi\Order\StructType\CostCentreBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CostCentreBooking) {
            throw new InvalidArgumentException(sprintf('The CostCentreBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\CostCentreBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CostCentreBooking[] = $item;
        
        return $this;
    }
    /**
     * Get journalId value
     * @return int|null
     */
    public function getJournalId(): ?int
    {
        return $this->journalId;
    }
    /**
     * Set journalId value
     * @param int $journalId
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setJournalId(?int $journalId = null): self
    {
        // validation for constraint: int
        if (!is_null($journalId) && !(is_int($journalId) || ctype_digit($journalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalId, true), gettype($journalId)), __LINE__);
        }
        $this->journalId = $journalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
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
     * Get mainAccount value
     * @return string|null
     */
    public function getMainAccount(): ?string
    {
        return $this->mainAccount;
    }
    /**
     * Set mainAccount value
     * @param string $mainAccount
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setMainAccount(?string $mainAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($mainAccount) && !is_string($mainAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainAccount, true), gettype($mainAccount)), __LINE__);
        }
        $this->mainAccount = $mainAccount;
        
        return $this;
    }
    /**
     * Get oppositeAccount value
     * @return string|null
     */
    public function getOppositeAccount(): ?string
    {
        return $this->oppositeAccount;
    }
    /**
     * Set oppositeAccount value
     * @param string $oppositeAccount
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setOppositeAccount(?string $oppositeAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($oppositeAccount) && !is_string($oppositeAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oppositeAccount, true), gettype($oppositeAccount)), __LINE__);
        }
        $this->oppositeAccount = $oppositeAccount;
        
        return $this;
    }
    /**
     * Get debitCreditIndicator value
     * @return string|null
     */
    public function getDebitCreditIndicator(): ?string
    {
        return $this->debitCreditIndicator;
    }
    /**
     * Set debitCreditIndicator value
     * @param string $debitCreditIndicator
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setDebitCreditIndicator(?string $debitCreditIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($debitCreditIndicator) && !is_string($debitCreditIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitCreditIndicator, true), gettype($debitCreditIndicator)), __LINE__);
        }
        $this->debitCreditIndicator = $debitCreditIndicator;
        
        return $this;
    }
    /**
     * Get bookingAmount value
     * @return float|null
     */
    public function getBookingAmount(): ?float
    {
        return $this->bookingAmount;
    }
    /**
     * Set bookingAmount value
     * @param float $bookingAmount
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setBookingAmount(?float $bookingAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bookingAmount) && !(is_float($bookingAmount) || is_numeric($bookingAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookingAmount, true), gettype($bookingAmount)), __LINE__);
        }
        $this->bookingAmount = $bookingAmount;
        
        return $this;
    }
    /**
     * Get vatType value
     * @return string|null
     */
    public function getVatType(): ?string
    {
        return $this->vatType;
    }
    /**
     * Set vatType value
     * @param string $vatType
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setVatType(?string $vatType = null): self
    {
        // validation for constraint: string
        if (!is_null($vatType) && !is_string($vatType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatType, true), gettype($vatType)), __LINE__);
        }
        $this->vatType = $vatType;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatCountry value
     * @return string|null
     */
    public function getVatCountry(): ?string
    {
        return $this->vatCountry;
    }
    /**
     * Set vatCountry value
     * @param string $vatCountry
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setVatCountry(?string $vatCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCountry) && !is_string($vatCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCountry, true), gettype($vatCountry)), __LINE__);
        }
        $this->vatCountry = $vatCountry;
        
        return $this;
    }
    /**
     * Get reverseChargePercent value
     * @return float|null
     */
    public function getReverseChargePercent(): ?float
    {
        return $this->reverseChargePercent;
    }
    /**
     * Set reverseChargePercent value
     * @param float $reverseChargePercent
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setReverseChargePercent(?float $reverseChargePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($reverseChargePercent) && !(is_float($reverseChargePercent) || is_numeric($reverseChargePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($reverseChargePercent, true), gettype($reverseChargePercent)), __LINE__);
        }
        $this->reverseChargePercent = $reverseChargePercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
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
     * Get originalcurrency value
     * @return string|null
     */
    public function getOriginalcurrency(): ?string
    {
        return $this->originalcurrency;
    }
    /**
     * Set originalcurrency value
     * @param string $originalcurrency
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setOriginalcurrency(?string $originalcurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalcurrency) && !is_string($originalcurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalcurrency, true), gettype($originalcurrency)), __LINE__);
        }
        $this->originalcurrency = $originalcurrency;
        
        return $this;
    }
    /**
     * Get originalAmount value
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->originalAmount;
    }
    /**
     * Set originalAmount value
     * @param float $originalAmount
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setOriginalAmount(?float $originalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalAmount) && !(is_float($originalAmount) || is_numeric($originalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalAmount, true), gettype($originalAmount)), __LINE__);
        }
        $this->originalAmount = $originalAmount;
        
        return $this;
    }
    /**
     * Get bookingPeriod value
     * @return int|null
     */
    public function getBookingPeriod(): ?int
    {
        return $this->bookingPeriod;
    }
    /**
     * Set bookingPeriod value
     * @param int $bookingPeriod
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setBookingPeriod(?int $bookingPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriod) && !(is_int($bookingPeriod) || ctype_digit($bookingPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriod, true), gettype($bookingPeriod)), __LINE__);
        }
        $this->bookingPeriod = $bookingPeriod;
        
        return $this;
    }
    /**
     * Get bookingYear value
     * @return int|null
     */
    public function getBookingYear(): ?int
    {
        return $this->bookingYear;
    }
    /**
     * Set bookingYear value
     * @param int $bookingYear
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord
     */
    public function setBookingYear(?int $bookingYear = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingYear) && !(is_int($bookingYear) || ctype_digit($bookingYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingYear, true), gettype($bookingYear)), __LINE__);
        }
        $this->bookingYear = $bookingYear;
        
        return $this;
    }
}
