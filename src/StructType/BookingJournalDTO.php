<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingJournalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookingJournalDTO extends AbstractStructBase
{
    /**
     * The automaticVat
     * @var bool|null
     */
    protected ?bool $automaticVat = null;
    /**
     * The bookingAmount
     * @var float|null
     */
    protected ?float $bookingAmount = null;
    /**
     * The bookingPeriod
     * @var int|null
     */
    protected ?int $bookingPeriod = null;
    /**
     * The bookingPeriodManuallyChanged
     * @var bool|null
     */
    protected ?bool $bookingPeriodManuallyChanged = null;
    /**
     * The bookingReversal
     * @var bool|null
     */
    protected ?bool $bookingReversal = null;
    /**
     * The bookingSource
     * @var int|null
     */
    protected ?int $bookingSource = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The bookingYear
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The costUnit
     * @var string|null
     */
    protected ?string $costUnit = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The creditAccount
     * @var string|null
     */
    protected ?string $creditAccount = null;
    /**
     * The creditEntry
     * @var string|null
     */
    protected ?string $creditEntry = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The debitAccount
     * @var string|null
     */
    protected ?string $debitAccount = null;
    /**
     * The debitEntry
     * @var string|null
     */
    protected ?string $debitEntry = null;
    /**
     * The deferralPositionId
     * @var int|null
     */
    protected ?int $deferralPositionId = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The exportCode
     * @var string|null
     */
    protected ?string $exportCode = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isInvoice
     * @var bool|null
     */
    protected ?bool $isInvoice = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * The masterJournalId
     * @var int|null
     */
    protected ?int $masterJournalId = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * The reverseChargeCountry
     * @var string|null
     */
    protected ?string $reverseChargeCountry = null;
    /**
     * The skontoAmount
     * @var float|null
     */
    protected ?float $skontoAmount = null;
    /**
     * The skontoVatAmount
     * @var float|null
     */
    protected ?float $skontoVatAmount = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for BookingJournalDTO
     * @uses BookingJournalDTO::setAutomaticVat()
     * @uses BookingJournalDTO::setBookingAmount()
     * @uses BookingJournalDTO::setBookingPeriod()
     * @uses BookingJournalDTO::setBookingPeriodManuallyChanged()
     * @uses BookingJournalDTO::setBookingReversal()
     * @uses BookingJournalDTO::setBookingSource()
     * @uses BookingJournalDTO::setBookingText()
     * @uses BookingJournalDTO::setBookingYear()
     * @uses BookingJournalDTO::setCostCentre()
     * @uses BookingJournalDTO::setCostUnit()
     * @uses BookingJournalDTO::setCreationDate()
     * @uses BookingJournalDTO::setCreationTimestamp()
     * @uses BookingJournalDTO::setCreationUser()
     * @uses BookingJournalDTO::setCreditAccount()
     * @uses BookingJournalDTO::setCreditEntry()
     * @uses BookingJournalDTO::setCurrency()
     * @uses BookingJournalDTO::setDebitAccount()
     * @uses BookingJournalDTO::setDebitEntry()
     * @uses BookingJournalDTO::setDeferralPositionId()
     * @uses BookingJournalDTO::setDocumentId()
     * @uses BookingJournalDTO::setDueDate()
     * @uses BookingJournalDTO::setExchangeRate()
     * @uses BookingJournalDTO::setExportCode()
     * @uses BookingJournalDTO::setExportDate()
     * @uses BookingJournalDTO::setExportId()
     * @uses BookingJournalDTO::setIsExported()
     * @uses BookingJournalDTO::setIsInvoice()
     * @uses BookingJournalDTO::setItemId()
     * @uses BookingJournalDTO::setJournalId()
     * @uses BookingJournalDTO::setMasterJournalId()
     * @uses BookingJournalDTO::setOriginalAmount()
     * @uses BookingJournalDTO::setOriginalCurrency()
     * @uses BookingJournalDTO::setPlanId()
     * @uses BookingJournalDTO::setReceiptDate()
     * @uses BookingJournalDTO::setReceiptNo()
     * @uses BookingJournalDTO::setRevenueId()
     * @uses BookingJournalDTO::setReverseChargeCountry()
     * @uses BookingJournalDTO::setSkontoAmount()
     * @uses BookingJournalDTO::setSkontoVatAmount()
     * @uses BookingJournalDTO::setTravelDate()
     * @uses BookingJournalDTO::setVatAmount()
     * @uses BookingJournalDTO::setVatCode()
     * @uses BookingJournalDTO::setVatId()
     * @uses BookingJournalDTO::setVatPercent()
     * @param bool $automaticVat
     * @param float $bookingAmount
     * @param int $bookingPeriod
     * @param bool $bookingPeriodManuallyChanged
     * @param bool $bookingReversal
     * @param int $bookingSource
     * @param string $bookingText
     * @param int $bookingYear
     * @param string $costCentre
     * @param string $costUnit
     * @param string $creationDate
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $creditAccount
     * @param string $creditEntry
     * @param string $currency
     * @param string $debitAccount
     * @param string $debitEntry
     * @param int $deferralPositionId
     * @param int $documentId
     * @param string $dueDate
     * @param float $exchangeRate
     * @param string $exportCode
     * @param string $exportDate
     * @param int $exportId
     * @param bool $isExported
     * @param bool $isInvoice
     * @param int $itemId
     * @param int $journalId
     * @param int $masterJournalId
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param string $planId
     * @param string $receiptDate
     * @param string $receiptNo
     * @param int $revenueId
     * @param string $reverseChargeCountry
     * @param float $skontoAmount
     * @param float $skontoVatAmount
     * @param string $travelDate
     * @param float $vatAmount
     * @param string $vatCode
     * @param string $vatId
     * @param float $vatPercent
     */
    public function __construct(?bool $automaticVat = null, ?float $bookingAmount = null, ?int $bookingPeriod = null, ?bool $bookingPeriodManuallyChanged = null, ?bool $bookingReversal = null, ?int $bookingSource = null, ?string $bookingText = null, ?int $bookingYear = null, ?string $costCentre = null, ?string $costUnit = null, ?string $creationDate = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?string $creditAccount = null, ?string $creditEntry = null, ?string $currency = null, ?string $debitAccount = null, ?string $debitEntry = null, ?int $deferralPositionId = null, ?int $documentId = null, ?string $dueDate = null, ?float $exchangeRate = null, ?string $exportCode = null, ?string $exportDate = null, ?int $exportId = null, ?bool $isExported = null, ?bool $isInvoice = null, ?int $itemId = null, ?int $journalId = null, ?int $masterJournalId = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?string $planId = null, ?string $receiptDate = null, ?string $receiptNo = null, ?int $revenueId = null, ?string $reverseChargeCountry = null, ?float $skontoAmount = null, ?float $skontoVatAmount = null, ?string $travelDate = null, ?float $vatAmount = null, ?string $vatCode = null, ?string $vatId = null, ?float $vatPercent = null)
    {
        $this
            ->setAutomaticVat($automaticVat)
            ->setBookingAmount($bookingAmount)
            ->setBookingPeriod($bookingPeriod)
            ->setBookingPeriodManuallyChanged($bookingPeriodManuallyChanged)
            ->setBookingReversal($bookingReversal)
            ->setBookingSource($bookingSource)
            ->setBookingText($bookingText)
            ->setBookingYear($bookingYear)
            ->setCostCentre($costCentre)
            ->setCostUnit($costUnit)
            ->setCreationDate($creationDate)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setCreditAccount($creditAccount)
            ->setCreditEntry($creditEntry)
            ->setCurrency($currency)
            ->setDebitAccount($debitAccount)
            ->setDebitEntry($debitEntry)
            ->setDeferralPositionId($deferralPositionId)
            ->setDocumentId($documentId)
            ->setDueDate($dueDate)
            ->setExchangeRate($exchangeRate)
            ->setExportCode($exportCode)
            ->setExportDate($exportDate)
            ->setExportId($exportId)
            ->setIsExported($isExported)
            ->setIsInvoice($isInvoice)
            ->setItemId($itemId)
            ->setJournalId($journalId)
            ->setMasterJournalId($masterJournalId)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setPlanId($planId)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setRevenueId($revenueId)
            ->setReverseChargeCountry($reverseChargeCountry)
            ->setSkontoAmount($skontoAmount)
            ->setSkontoVatAmount($skontoVatAmount)
            ->setTravelDate($travelDate)
            ->setVatAmount($vatAmount)
            ->setVatCode($vatCode)
            ->setVatId($vatId)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get automaticVat value
     * @return bool|null
     */
    public function getAutomaticVat(): ?bool
    {
        return $this->automaticVat;
    }
    /**
     * Set automaticVat value
     * @param bool $automaticVat
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setAutomaticVat(?bool $automaticVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticVat) && !is_bool($automaticVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticVat, true), gettype($automaticVat)), __LINE__);
        }
        $this->automaticVat = $automaticVat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
     * Get bookingPeriodManuallyChanged value
     * @return bool|null
     */
    public function getBookingPeriodManuallyChanged(): ?bool
    {
        return $this->bookingPeriodManuallyChanged;
    }
    /**
     * Set bookingPeriodManuallyChanged value
     * @param bool $bookingPeriodManuallyChanged
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setBookingPeriodManuallyChanged(?bool $bookingPeriodManuallyChanged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookingPeriodManuallyChanged) && !is_bool($bookingPeriodManuallyChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookingPeriodManuallyChanged, true), gettype($bookingPeriodManuallyChanged)), __LINE__);
        }
        $this->bookingPeriodManuallyChanged = $bookingPeriodManuallyChanged;
        
        return $this;
    }
    /**
     * Get bookingReversal value
     * @return bool|null
     */
    public function getBookingReversal(): ?bool
    {
        return $this->bookingReversal;
    }
    /**
     * Set bookingReversal value
     * @param bool $bookingReversal
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setBookingReversal(?bool $bookingReversal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookingReversal) && !is_bool($bookingReversal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookingReversal, true), gettype($bookingReversal)), __LINE__);
        }
        $this->bookingReversal = $bookingReversal;
        
        return $this;
    }
    /**
     * Get bookingSource value
     * @return int|null
     */
    public function getBookingSource(): ?int
    {
        return $this->bookingSource;
    }
    /**
     * Set bookingSource value
     * @param int $bookingSource
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setBookingSource(?int $bookingSource = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingSource) && !(is_int($bookingSource) || ctype_digit($bookingSource))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingSource, true), gettype($bookingSource)), __LINE__);
        }
        $this->bookingSource = $bookingSource;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get costUnit value
     * @return string|null
     */
    public function getCostUnit(): ?string
    {
        return $this->costUnit;
    }
    /**
     * Set costUnit value
     * @param string $costUnit
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setCostUnit(?string $costUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($costUnit) && !is_string($costUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costUnit, true), gettype($costUnit)), __LINE__);
        }
        $this->costUnit = $costUnit;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get creditAccount value
     * @return string|null
     */
    public function getCreditAccount(): ?string
    {
        return $this->creditAccount;
    }
    /**
     * Set creditAccount value
     * @param string $creditAccount
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setCreditAccount(?string $creditAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($creditAccount) && !is_string($creditAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditAccount, true), gettype($creditAccount)), __LINE__);
        }
        $this->creditAccount = $creditAccount;
        
        return $this;
    }
    /**
     * Get creditEntry value
     * @return string|null
     */
    public function getCreditEntry(): ?string
    {
        return $this->creditEntry;
    }
    /**
     * Set creditEntry value
     * @param string $creditEntry
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setCreditEntry(?string $creditEntry = null): self
    {
        // validation for constraint: string
        if (!is_null($creditEntry) && !is_string($creditEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditEntry, true), gettype($creditEntry)), __LINE__);
        }
        $this->creditEntry = $creditEntry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
     * Get debitAccount value
     * @return string|null
     */
    public function getDebitAccount(): ?string
    {
        return $this->debitAccount;
    }
    /**
     * Set debitAccount value
     * @param string $debitAccount
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setDebitAccount(?string $debitAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($debitAccount) && !is_string($debitAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitAccount, true), gettype($debitAccount)), __LINE__);
        }
        $this->debitAccount = $debitAccount;
        
        return $this;
    }
    /**
     * Get debitEntry value
     * @return string|null
     */
    public function getDebitEntry(): ?string
    {
        return $this->debitEntry;
    }
    /**
     * Set debitEntry value
     * @param string $debitEntry
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setDebitEntry(?string $debitEntry = null): self
    {
        // validation for constraint: string
        if (!is_null($debitEntry) && !is_string($debitEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitEntry, true), gettype($debitEntry)), __LINE__);
        }
        $this->debitEntry = $debitEntry;
        
        return $this;
    }
    /**
     * Get deferralPositionId value
     * @return int|null
     */
    public function getDeferralPositionId(): ?int
    {
        return $this->deferralPositionId;
    }
    /**
     * Set deferralPositionId value
     * @param int $deferralPositionId
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setDeferralPositionId(?int $deferralPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($deferralPositionId) && !(is_int($deferralPositionId) || ctype_digit($deferralPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deferralPositionId, true), gettype($deferralPositionId)), __LINE__);
        }
        $this->deferralPositionId = $deferralPositionId;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
    /**
     * Get exportCode value
     * @return string|null
     */
    public function getExportCode(): ?string
    {
        return $this->exportCode;
    }
    /**
     * Set exportCode value
     * @param string $exportCode
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setExportCode(?string $exportCode = null): self
    {
        // validation for constraint: string
        if (!is_null($exportCode) && !is_string($exportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportCode, true), gettype($exportCode)), __LINE__);
        }
        $this->exportCode = $exportCode;
        
        return $this;
    }
    /**
     * Get exportDate value
     * @return string|null
     */
    public function getExportDate(): ?string
    {
        return $this->exportDate;
    }
    /**
     * Set exportDate value
     * @param string $exportDate
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setExportDate(?string $exportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDate) && !is_string($exportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDate, true), gettype($exportDate)), __LINE__);
        }
        $this->exportDate = $exportDate;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get isInvoice value
     * @return bool|null
     */
    public function getIsInvoice(): ?bool
    {
        return $this->isInvoice;
    }
    /**
     * Set isInvoice value
     * @param bool $isInvoice
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setIsInvoice(?bool $isInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInvoice) && !is_bool($isInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInvoice, true), gettype($isInvoice)), __LINE__);
        }
        $this->isInvoice = $isInvoice;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
     * Get masterJournalId value
     * @return int|null
     */
    public function getMasterJournalId(): ?int
    {
        return $this->masterJournalId;
    }
    /**
     * Set masterJournalId value
     * @param int $masterJournalId
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setMasterJournalId(?int $masterJournalId = null): self
    {
        // validation for constraint: int
        if (!is_null($masterJournalId) && !(is_int($masterJournalId) || ctype_digit($masterJournalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masterJournalId, true), gettype($masterJournalId)), __LINE__);
        }
        $this->masterJournalId = $masterJournalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
     * Get revenueId value
     * @return int|null
     */
    public function getRevenueId(): ?int
    {
        return $this->revenueId;
    }
    /**
     * Set revenueId value
     * @param int $revenueId
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setRevenueId(?int $revenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($revenueId) && !(is_int($revenueId) || ctype_digit($revenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revenueId, true), gettype($revenueId)), __LINE__);
        }
        $this->revenueId = $revenueId;
        
        return $this;
    }
    /**
     * Get reverseChargeCountry value
     * @return string|null
     */
    public function getReverseChargeCountry(): ?string
    {
        return $this->reverseChargeCountry;
    }
    /**
     * Set reverseChargeCountry value
     * @param string $reverseChargeCountry
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setReverseChargeCountry(?string $reverseChargeCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($reverseChargeCountry) && !is_string($reverseChargeCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reverseChargeCountry, true), gettype($reverseChargeCountry)), __LINE__);
        }
        $this->reverseChargeCountry = $reverseChargeCountry;
        
        return $this;
    }
    /**
     * Get skontoAmount value
     * @return float|null
     */
    public function getSkontoAmount(): ?float
    {
        return $this->skontoAmount;
    }
    /**
     * Set skontoAmount value
     * @param float $skontoAmount
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setSkontoAmount(?float $skontoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($skontoAmount) && !(is_float($skontoAmount) || is_numeric($skontoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($skontoAmount, true), gettype($skontoAmount)), __LINE__);
        }
        $this->skontoAmount = $skontoAmount;
        
        return $this;
    }
    /**
     * Get skontoVatAmount value
     * @return float|null
     */
    public function getSkontoVatAmount(): ?float
    {
        return $this->skontoVatAmount;
    }
    /**
     * Set skontoVatAmount value
     * @param float $skontoVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setSkontoVatAmount(?float $skontoVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($skontoVatAmount) && !(is_float($skontoVatAmount) || is_numeric($skontoVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($skontoVatAmount, true), gettype($skontoVatAmount)), __LINE__);
        }
        $this->skontoVatAmount = $skontoVatAmount;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get vatId value
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param string $vatId
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
     */
    public function setVatId(?string $vatId = null): self
    {
        // validation for constraint: string
        if (!is_null($vatId) && !is_string($vatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingJournalDTO
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
}
