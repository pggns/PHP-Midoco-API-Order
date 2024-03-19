<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankBookingJournalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankBookingJournalDTO extends AbstractStructBase
{
    /**
     * The accountPosition
     * @var int|null
     */
    protected ?int $accountPosition = null;
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
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The bookingType
     * @var string|null
     */
    protected ?string $bookingType = null;
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
     * The entryAmount
     * @var float|null
     */
    protected ?float $entryAmount = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The isBooked
     * @var bool|null
     */
    protected ?bool $isBooked = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isPreAccounted
     * @var bool|null
     */
    protected ?bool $isPreAccounted = null;
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
     * The originalEntryAmount
     * @var float|null
     */
    protected ?float $originalEntryAmount = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The protocolId
     * @var int|null
     */
    protected ?int $protocolId = null;
    /**
     * The provCostCentre
     * @var string|null
     */
    protected ?string $provCostCentre = null;
    /**
     * The provInsuranceAccount
     * @var string|null
     */
    protected ?string $provInsuranceAccount = null;
    /**
     * The provItemId
     * @var int|null
     */
    protected ?int $provItemId = null;
    /**
     * The provReceiptDate
     * @var string|null
     */
    protected ?string $provReceiptDate = null;
    /**
     * The provReceiptNo
     * @var string|null
     */
    protected ?string $provReceiptNo = null;
    /**
     * The provWovatAccount
     * @var string|null
     */
    protected ?string $provWovatAccount = null;
    /**
     * The provWvatAccount
     * @var string|null
     */
    protected ?string $provWvatAccount = null;
    /**
     * The provinsurance
     * @var float|null
     */
    protected ?float $provinsurance = null;
    /**
     * The provwovatamount
     * @var float|null
     */
    protected ?float $provwovatamount = null;
    /**
     * The provwvatamount
     * @var float|null
     */
    protected ?float $provwvatamount = null;
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
     * The receiptSend
     * @var bool|null
     */
    protected ?bool $receiptSend = null;
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
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
     * The statementId
     * @var int|null
     */
    protected ?int $statementId = null;
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
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for BankBookingJournalDTO
     * @uses BankBookingJournalDTO::setAccountPosition()
     * @uses BankBookingJournalDTO::setAutomaticVat()
     * @uses BankBookingJournalDTO::setBookingAmount()
     * @uses BankBookingJournalDTO::setBookingText()
     * @uses BankBookingJournalDTO::setBookingType()
     * @uses BankBookingJournalDTO::setCostCentre()
     * @uses BankBookingJournalDTO::setCostUnit()
     * @uses BankBookingJournalDTO::setCreditAccount()
     * @uses BankBookingJournalDTO::setCreditEntry()
     * @uses BankBookingJournalDTO::setCurrency()
     * @uses BankBookingJournalDTO::setDebitAccount()
     * @uses BankBookingJournalDTO::setDebitEntry()
     * @uses BankBookingJournalDTO::setEntryAmount()
     * @uses BankBookingJournalDTO::setExchangeRate()
     * @uses BankBookingJournalDTO::setIsBooked()
     * @uses BankBookingJournalDTO::setIsExported()
     * @uses BankBookingJournalDTO::setIsPreAccounted()
     * @uses BankBookingJournalDTO::setJournalId()
     * @uses BankBookingJournalDTO::setJournalPosition()
     * @uses BankBookingJournalDTO::setOriginalAmount()
     * @uses BankBookingJournalDTO::setOriginalCurrency()
     * @uses BankBookingJournalDTO::setOriginalEntryAmount()
     * @uses BankBookingJournalDTO::setPosition()
     * @uses BankBookingJournalDTO::setProtocolId()
     * @uses BankBookingJournalDTO::setProvCostCentre()
     * @uses BankBookingJournalDTO::setProvInsuranceAccount()
     * @uses BankBookingJournalDTO::setProvItemId()
     * @uses BankBookingJournalDTO::setProvReceiptDate()
     * @uses BankBookingJournalDTO::setProvReceiptNo()
     * @uses BankBookingJournalDTO::setProvWovatAccount()
     * @uses BankBookingJournalDTO::setProvWvatAccount()
     * @uses BankBookingJournalDTO::setProvinsurance()
     * @uses BankBookingJournalDTO::setProvwovatamount()
     * @uses BankBookingJournalDTO::setProvwvatamount()
     * @uses BankBookingJournalDTO::setReceiptDate()
     * @uses BankBookingJournalDTO::setReceiptNo()
     * @uses BankBookingJournalDTO::setReceiptSend()
     * @uses BankBookingJournalDTO::setRevenueId()
     * @uses BankBookingJournalDTO::setSettlementType()
     * @uses BankBookingJournalDTO::setSkontoAmount()
     * @uses BankBookingJournalDTO::setSkontoVatAmount()
     * @uses BankBookingJournalDTO::setStatementId()
     * @uses BankBookingJournalDTO::setVatAmount()
     * @uses BankBookingJournalDTO::setVatCode()
     * @uses BankBookingJournalDTO::setVatPercent()
     * @param int $accountPosition
     * @param bool $automaticVat
     * @param float $bookingAmount
     * @param string $bookingText
     * @param string $bookingType
     * @param string $costCentre
     * @param string $costUnit
     * @param string $creditAccount
     * @param string $creditEntry
     * @param string $currency
     * @param string $debitAccount
     * @param string $debitEntry
     * @param float $entryAmount
     * @param float $exchangeRate
     * @param bool $isBooked
     * @param bool $isExported
     * @param bool $isPreAccounted
     * @param int $journalId
     * @param int $journalPosition
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param float $originalEntryAmount
     * @param int $position
     * @param int $protocolId
     * @param string $provCostCentre
     * @param string $provInsuranceAccount
     * @param int $provItemId
     * @param string $provReceiptDate
     * @param string $provReceiptNo
     * @param string $provWovatAccount
     * @param string $provWvatAccount
     * @param float $provinsurance
     * @param float $provwovatamount
     * @param float $provwvatamount
     * @param string $receiptDate
     * @param string $receiptNo
     * @param bool $receiptSend
     * @param int $revenueId
     * @param string $settlementType
     * @param float $skontoAmount
     * @param float $skontoVatAmount
     * @param int $statementId
     * @param float $vatAmount
     * @param string $vatCode
     * @param float $vatPercent
     */
    public function __construct(?int $accountPosition = null, ?bool $automaticVat = null, ?float $bookingAmount = null, ?string $bookingText = null, ?string $bookingType = null, ?string $costCentre = null, ?string $costUnit = null, ?string $creditAccount = null, ?string $creditEntry = null, ?string $currency = null, ?string $debitAccount = null, ?string $debitEntry = null, ?float $entryAmount = null, ?float $exchangeRate = null, ?bool $isBooked = null, ?bool $isExported = null, ?bool $isPreAccounted = null, ?int $journalId = null, ?int $journalPosition = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?float $originalEntryAmount = null, ?int $position = null, ?int $protocolId = null, ?string $provCostCentre = null, ?string $provInsuranceAccount = null, ?int $provItemId = null, ?string $provReceiptDate = null, ?string $provReceiptNo = null, ?string $provWovatAccount = null, ?string $provWvatAccount = null, ?float $provinsurance = null, ?float $provwovatamount = null, ?float $provwvatamount = null, ?string $receiptDate = null, ?string $receiptNo = null, ?bool $receiptSend = null, ?int $revenueId = null, ?string $settlementType = null, ?float $skontoAmount = null, ?float $skontoVatAmount = null, ?int $statementId = null, ?float $vatAmount = null, ?string $vatCode = null, ?float $vatPercent = null)
    {
        $this
            ->setAccountPosition($accountPosition)
            ->setAutomaticVat($automaticVat)
            ->setBookingAmount($bookingAmount)
            ->setBookingText($bookingText)
            ->setBookingType($bookingType)
            ->setCostCentre($costCentre)
            ->setCostUnit($costUnit)
            ->setCreditAccount($creditAccount)
            ->setCreditEntry($creditEntry)
            ->setCurrency($currency)
            ->setDebitAccount($debitAccount)
            ->setDebitEntry($debitEntry)
            ->setEntryAmount($entryAmount)
            ->setExchangeRate($exchangeRate)
            ->setIsBooked($isBooked)
            ->setIsExported($isExported)
            ->setIsPreAccounted($isPreAccounted)
            ->setJournalId($journalId)
            ->setJournalPosition($journalPosition)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalEntryAmount($originalEntryAmount)
            ->setPosition($position)
            ->setProtocolId($protocolId)
            ->setProvCostCentre($provCostCentre)
            ->setProvInsuranceAccount($provInsuranceAccount)
            ->setProvItemId($provItemId)
            ->setProvReceiptDate($provReceiptDate)
            ->setProvReceiptNo($provReceiptNo)
            ->setProvWovatAccount($provWovatAccount)
            ->setProvWvatAccount($provWvatAccount)
            ->setProvinsurance($provinsurance)
            ->setProvwovatamount($provwovatamount)
            ->setProvwvatamount($provwvatamount)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setReceiptSend($receiptSend)
            ->setRevenueId($revenueId)
            ->setSettlementType($settlementType)
            ->setSkontoAmount($skontoAmount)
            ->setSkontoVatAmount($skontoVatAmount)
            ->setStatementId($statementId)
            ->setVatAmount($vatAmount)
            ->setVatCode($vatCode)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get accountPosition value
     * @return int|null
     */
    public function getAccountPosition(): ?int
    {
        return $this->accountPosition;
    }
    /**
     * Set accountPosition value
     * @param int $accountPosition
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setAccountPosition(?int $accountPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($accountPosition) && !(is_int($accountPosition) || ctype_digit($accountPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountPosition, true), gettype($accountPosition)), __LINE__);
        }
        $this->accountPosition = $accountPosition;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * Get bookingType value
     * @return string|null
     */
    public function getBookingType(): ?string
    {
        return $this->bookingType;
    }
    /**
     * Set bookingType value
     * @param string $bookingType
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setBookingType(?string $bookingType = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingType) && !is_string($bookingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingType, true), gettype($bookingType)), __LINE__);
        }
        $this->bookingType = $bookingType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * Get entryAmount value
     * @return float|null
     */
    public function getEntryAmount(): ?float
    {
        return $this->entryAmount;
    }
    /**
     * Set entryAmount value
     * @param float $entryAmount
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setEntryAmount(?float $entryAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($entryAmount) && !(is_float($entryAmount) || is_numeric($entryAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($entryAmount, true), gettype($entryAmount)), __LINE__);
        }
        $this->entryAmount = $entryAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * Get isBooked value
     * @return bool|null
     */
    public function getIsBooked(): ?bool
    {
        return $this->isBooked;
    }
    /**
     * Set isBooked value
     * @param bool $isBooked
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setIsBooked(?bool $isBooked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBooked) && !is_bool($isBooked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBooked, true), gettype($isBooked)), __LINE__);
        }
        $this->isBooked = $isBooked;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * Get isPreAccounted value
     * @return bool|null
     */
    public function getIsPreAccounted(): ?bool
    {
        return $this->isPreAccounted;
    }
    /**
     * Set isPreAccounted value
     * @param bool $isPreAccounted
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setIsPreAccounted(?bool $isPreAccounted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreAccounted) && !is_bool($isPreAccounted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreAccounted, true), gettype($isPreAccounted)), __LINE__);
        }
        $this->isPreAccounted = $isPreAccounted;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * Get originalEntryAmount value
     * @return float|null
     */
    public function getOriginalEntryAmount(): ?float
    {
        return $this->originalEntryAmount;
    }
    /**
     * Set originalEntryAmount value
     * @param float $originalEntryAmount
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setOriginalEntryAmount(?float $originalEntryAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalEntryAmount) && !(is_float($originalEntryAmount) || is_numeric($originalEntryAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalEntryAmount, true), gettype($originalEntryAmount)), __LINE__);
        }
        $this->originalEntryAmount = $originalEntryAmount;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get protocolId value
     * @return int|null
     */
    public function getProtocolId(): ?int
    {
        return $this->protocolId;
    }
    /**
     * Set protocolId value
     * @param int $protocolId
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProtocolId(?int $protocolId = null): self
    {
        // validation for constraint: int
        if (!is_null($protocolId) && !(is_int($protocolId) || ctype_digit($protocolId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($protocolId, true), gettype($protocolId)), __LINE__);
        }
        $this->protocolId = $protocolId;
        
        return $this;
    }
    /**
     * Get provCostCentre value
     * @return string|null
     */
    public function getProvCostCentre(): ?string
    {
        return $this->provCostCentre;
    }
    /**
     * Set provCostCentre value
     * @param string $provCostCentre
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvCostCentre(?string $provCostCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($provCostCentre) && !is_string($provCostCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provCostCentre, true), gettype($provCostCentre)), __LINE__);
        }
        $this->provCostCentre = $provCostCentre;
        
        return $this;
    }
    /**
     * Get provInsuranceAccount value
     * @return string|null
     */
    public function getProvInsuranceAccount(): ?string
    {
        return $this->provInsuranceAccount;
    }
    /**
     * Set provInsuranceAccount value
     * @param string $provInsuranceAccount
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvInsuranceAccount(?string $provInsuranceAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($provInsuranceAccount) && !is_string($provInsuranceAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provInsuranceAccount, true), gettype($provInsuranceAccount)), __LINE__);
        }
        $this->provInsuranceAccount = $provInsuranceAccount;
        
        return $this;
    }
    /**
     * Get provItemId value
     * @return int|null
     */
    public function getProvItemId(): ?int
    {
        return $this->provItemId;
    }
    /**
     * Set provItemId value
     * @param int $provItemId
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvItemId(?int $provItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($provItemId) && !(is_int($provItemId) || ctype_digit($provItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($provItemId, true), gettype($provItemId)), __LINE__);
        }
        $this->provItemId = $provItemId;
        
        return $this;
    }
    /**
     * Get provReceiptDate value
     * @return string|null
     */
    public function getProvReceiptDate(): ?string
    {
        return $this->provReceiptDate;
    }
    /**
     * Set provReceiptDate value
     * @param string $provReceiptDate
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvReceiptDate(?string $provReceiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($provReceiptDate) && !is_string($provReceiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provReceiptDate, true), gettype($provReceiptDate)), __LINE__);
        }
        $this->provReceiptDate = $provReceiptDate;
        
        return $this;
    }
    /**
     * Get provReceiptNo value
     * @return string|null
     */
    public function getProvReceiptNo(): ?string
    {
        return $this->provReceiptNo;
    }
    /**
     * Set provReceiptNo value
     * @param string $provReceiptNo
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvReceiptNo(?string $provReceiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($provReceiptNo) && !is_string($provReceiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provReceiptNo, true), gettype($provReceiptNo)), __LINE__);
        }
        $this->provReceiptNo = $provReceiptNo;
        
        return $this;
    }
    /**
     * Get provWovatAccount value
     * @return string|null
     */
    public function getProvWovatAccount(): ?string
    {
        return $this->provWovatAccount;
    }
    /**
     * Set provWovatAccount value
     * @param string $provWovatAccount
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvWovatAccount(?string $provWovatAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($provWovatAccount) && !is_string($provWovatAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provWovatAccount, true), gettype($provWovatAccount)), __LINE__);
        }
        $this->provWovatAccount = $provWovatAccount;
        
        return $this;
    }
    /**
     * Get provWvatAccount value
     * @return string|null
     */
    public function getProvWvatAccount(): ?string
    {
        return $this->provWvatAccount;
    }
    /**
     * Set provWvatAccount value
     * @param string $provWvatAccount
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvWvatAccount(?string $provWvatAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($provWvatAccount) && !is_string($provWvatAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provWvatAccount, true), gettype($provWvatAccount)), __LINE__);
        }
        $this->provWvatAccount = $provWvatAccount;
        
        return $this;
    }
    /**
     * Get provinsurance value
     * @return float|null
     */
    public function getProvinsurance(): ?float
    {
        return $this->provinsurance;
    }
    /**
     * Set provinsurance value
     * @param float $provinsurance
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvinsurance(?float $provinsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($provinsurance) && !(is_float($provinsurance) || is_numeric($provinsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provinsurance, true), gettype($provinsurance)), __LINE__);
        }
        $this->provinsurance = $provinsurance;
        
        return $this;
    }
    /**
     * Get provwovatamount value
     * @return float|null
     */
    public function getProvwovatamount(): ?float
    {
        return $this->provwovatamount;
    }
    /**
     * Set provwovatamount value
     * @param float $provwovatamount
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvwovatamount(?float $provwovatamount = null): self
    {
        // validation for constraint: float
        if (!is_null($provwovatamount) && !(is_float($provwovatamount) || is_numeric($provwovatamount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provwovatamount, true), gettype($provwovatamount)), __LINE__);
        }
        $this->provwovatamount = $provwovatamount;
        
        return $this;
    }
    /**
     * Get provwvatamount value
     * @return float|null
     */
    public function getProvwvatamount(): ?float
    {
        return $this->provwvatamount;
    }
    /**
     * Set provwvatamount value
     * @param float $provwvatamount
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setProvwvatamount(?float $provwvatamount = null): self
    {
        // validation for constraint: float
        if (!is_null($provwvatamount) && !(is_float($provwvatamount) || is_numeric($provwvatamount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provwvatamount, true), gettype($provwvatamount)), __LINE__);
        }
        $this->provwvatamount = $provwvatamount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * Get receiptSend value
     * @return bool|null
     */
    public function getReceiptSend(): ?bool
    {
        return $this->receiptSend;
    }
    /**
     * Set receiptSend value
     * @param bool $receiptSend
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setReceiptSend(?bool $receiptSend = null): self
    {
        // validation for constraint: boolean
        if (!is_null($receiptSend) && !is_bool($receiptSend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($receiptSend, true), gettype($receiptSend)), __LINE__);
        }
        $this->receiptSend = $receiptSend;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * Get statementId value
     * @return int|null
     */
    public function getStatementId(): ?int
    {
        return $this->statementId;
    }
    /**
     * Set statementId value
     * @param int $statementId
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
     */
    public function setStatementId(?int $statementId = null): self
    {
        // validation for constraint: int
        if (!is_null($statementId) && !(is_int($statementId) || ctype_digit($statementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statementId, true), gettype($statementId)), __LINE__);
        }
        $this->statementId = $statementId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankBookingJournalDTO
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
