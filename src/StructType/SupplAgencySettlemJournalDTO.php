<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplAgencySettlemJournalDTO StructType
 * @subpackage Structs
 */
class SupplAgencySettlemJournalDTO extends AbstractStructBase
{
    /**
     * The automaticVat
     * @var bool|null
     */
    protected ?bool $automaticVat = null;
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
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
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
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
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
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
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * The journalPosition
     * @var int|null
     */
    protected ?int $journalPosition = null;
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
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
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
     * Constructor method for SupplAgencySettlemJournalDTO
     * @uses SupplAgencySettlemJournalDTO::setAutomaticVat()
     * @uses SupplAgencySettlemJournalDTO::setBooked()
     * @uses SupplAgencySettlemJournalDTO::setBookingAmount()
     * @uses SupplAgencySettlemJournalDTO::setBookingPeriod()
     * @uses SupplAgencySettlemJournalDTO::setBookingPosition()
     * @uses SupplAgencySettlemJournalDTO::setBookingText()
     * @uses SupplAgencySettlemJournalDTO::setBookingYear()
     * @uses SupplAgencySettlemJournalDTO::setCostCentre()
     * @uses SupplAgencySettlemJournalDTO::setCostUnit()
     * @uses SupplAgencySettlemJournalDTO::setCreationTime()
     * @uses SupplAgencySettlemJournalDTO::setCreationUser()
     * @uses SupplAgencySettlemJournalDTO::setCreditAccount()
     * @uses SupplAgencySettlemJournalDTO::setCreditEntry()
     * @uses SupplAgencySettlemJournalDTO::setCurrency()
     * @uses SupplAgencySettlemJournalDTO::setDebitAccount()
     * @uses SupplAgencySettlemJournalDTO::setDebitEntry()
     * @uses SupplAgencySettlemJournalDTO::setDueDate()
     * @uses SupplAgencySettlemJournalDTO::setExchangeRate()
     * @uses SupplAgencySettlemJournalDTO::setExportDate()
     * @uses SupplAgencySettlemJournalDTO::setExportId()
     * @uses SupplAgencySettlemJournalDTO::setIsExported()
     * @uses SupplAgencySettlemJournalDTO::setJournalId()
     * @uses SupplAgencySettlemJournalDTO::setJournalPosition()
     * @uses SupplAgencySettlemJournalDTO::setOriginalAmount()
     * @uses SupplAgencySettlemJournalDTO::setOriginalCurrency()
     * @uses SupplAgencySettlemJournalDTO::setPlanId()
     * @uses SupplAgencySettlemJournalDTO::setReceiptDate()
     * @uses SupplAgencySettlemJournalDTO::setReceiptNo()
     * @uses SupplAgencySettlemJournalDTO::setSettlementId()
     * @uses SupplAgencySettlemJournalDTO::setSkontoAmount()
     * @uses SupplAgencySettlemJournalDTO::setSkontoVatAmount()
     * @uses SupplAgencySettlemJournalDTO::setVatAmount()
     * @uses SupplAgencySettlemJournalDTO::setVatCode()
     * @uses SupplAgencySettlemJournalDTO::setVatId()
     * @uses SupplAgencySettlemJournalDTO::setVatPercent()
     * @param bool $automaticVat
     * @param bool $booked
     * @param float $bookingAmount
     * @param int $bookingPeriod
     * @param int $bookingPosition
     * @param string $bookingText
     * @param int $bookingYear
     * @param string $costCentre
     * @param string $costUnit
     * @param string $creationTime
     * @param int $creationUser
     * @param string $creditAccount
     * @param string $creditEntry
     * @param string $currency
     * @param string $debitAccount
     * @param string $debitEntry
     * @param string $dueDate
     * @param float $exchangeRate
     * @param string $exportDate
     * @param int $exportId
     * @param bool $isExported
     * @param int $journalId
     * @param int $journalPosition
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param string $planId
     * @param string $receiptDate
     * @param string $receiptNo
     * @param int $settlementId
     * @param float $skontoAmount
     * @param float $skontoVatAmount
     * @param float $vatAmount
     * @param string $vatCode
     * @param string $vatId
     * @param float $vatPercent
     */
    public function __construct(?bool $automaticVat = null, ?bool $booked = null, ?float $bookingAmount = null, ?int $bookingPeriod = null, ?int $bookingPosition = null, ?string $bookingText = null, ?int $bookingYear = null, ?string $costCentre = null, ?string $costUnit = null, ?string $creationTime = null, ?int $creationUser = null, ?string $creditAccount = null, ?string $creditEntry = null, ?string $currency = null, ?string $debitAccount = null, ?string $debitEntry = null, ?string $dueDate = null, ?float $exchangeRate = null, ?string $exportDate = null, ?int $exportId = null, ?bool $isExported = null, ?int $journalId = null, ?int $journalPosition = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?string $planId = null, ?string $receiptDate = null, ?string $receiptNo = null, ?int $settlementId = null, ?float $skontoAmount = null, ?float $skontoVatAmount = null, ?float $vatAmount = null, ?string $vatCode = null, ?string $vatId = null, ?float $vatPercent = null)
    {
        $this
            ->setAutomaticVat($automaticVat)
            ->setBooked($booked)
            ->setBookingAmount($bookingAmount)
            ->setBookingPeriod($bookingPeriod)
            ->setBookingPosition($bookingPosition)
            ->setBookingText($bookingText)
            ->setBookingYear($bookingYear)
            ->setCostCentre($costCentre)
            ->setCostUnit($costUnit)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCreditAccount($creditAccount)
            ->setCreditEntry($creditEntry)
            ->setCurrency($currency)
            ->setDebitAccount($debitAccount)
            ->setDebitEntry($debitEntry)
            ->setDueDate($dueDate)
            ->setExchangeRate($exchangeRate)
            ->setExportDate($exportDate)
            ->setExportId($exportId)
            ->setIsExported($isExported)
            ->setJournalId($journalId)
            ->setJournalPosition($journalPosition)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setPlanId($planId)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setSettlementId($settlementId)
            ->setSkontoAmount($skontoAmount)
            ->setSkontoVatAmount($skontoVatAmount)
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * Get journalPosition value
     * @return int|null
     */
    public function getJournalPosition(): ?int
    {
        return $this->journalPosition;
    }
    /**
     * Set journalPosition value
     * @param int $journalPosition
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
     */
    public function setJournalPosition(?int $journalPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($journalPosition) && !(is_int($journalPosition) || ctype_digit($journalPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalPosition, true), gettype($journalPosition)), __LINE__);
        }
        $this->journalPosition = $journalPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO
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
