<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManualBookingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ManualBookingDTO extends AbstractStructBase
{
    /**
     * The automaticVat
     * @var bool|null
     */
    protected ?bool $automaticVat = null;
    /**
     * The batchId
     * @var int|null
     */
    protected ?int $batchId = null;
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
     * The crc32
     * @var string|null
     */
    protected ?string $crc32 = null;
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
     * The position
     * @var int|null
     */
    protected ?int $position = null;
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
     * Constructor method for ManualBookingDTO
     * @uses ManualBookingDTO::setAutomaticVat()
     * @uses ManualBookingDTO::setBatchId()
     * @uses ManualBookingDTO::setBookingAmount()
     * @uses ManualBookingDTO::setBookingPeriod()
     * @uses ManualBookingDTO::setBookingText()
     * @uses ManualBookingDTO::setBookingYear()
     * @uses ManualBookingDTO::setCostCentre()
     * @uses ManualBookingDTO::setCostUnit()
     * @uses ManualBookingDTO::setCrc32()
     * @uses ManualBookingDTO::setCreditAccount()
     * @uses ManualBookingDTO::setCreditEntry()
     * @uses ManualBookingDTO::setCurrency()
     * @uses ManualBookingDTO::setDebitAccount()
     * @uses ManualBookingDTO::setDebitEntry()
     * @uses ManualBookingDTO::setDueDate()
     * @uses ManualBookingDTO::setOriginalAmount()
     * @uses ManualBookingDTO::setOriginalCurrency()
     * @uses ManualBookingDTO::setPosition()
     * @uses ManualBookingDTO::setReceiptDate()
     * @uses ManualBookingDTO::setReceiptNo()
     * @uses ManualBookingDTO::setReverseChargeCountry()
     * @uses ManualBookingDTO::setSkontoAmount()
     * @uses ManualBookingDTO::setSkontoVatAmount()
     * @uses ManualBookingDTO::setVatAmount()
     * @uses ManualBookingDTO::setVatCode()
     * @uses ManualBookingDTO::setVatId()
     * @uses ManualBookingDTO::setVatPercent()
     * @param bool $automaticVat
     * @param int $batchId
     * @param float $bookingAmount
     * @param int $bookingPeriod
     * @param string $bookingText
     * @param int $bookingYear
     * @param string $costCentre
     * @param string $costUnit
     * @param string $crc32
     * @param string $creditAccount
     * @param string $creditEntry
     * @param string $currency
     * @param string $debitAccount
     * @param string $debitEntry
     * @param string $dueDate
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param int $position
     * @param string $receiptDate
     * @param string $receiptNo
     * @param string $reverseChargeCountry
     * @param float $skontoAmount
     * @param float $skontoVatAmount
     * @param float $vatAmount
     * @param string $vatCode
     * @param string $vatId
     * @param float $vatPercent
     */
    public function __construct(?bool $automaticVat = null, ?int $batchId = null, ?float $bookingAmount = null, ?int $bookingPeriod = null, ?string $bookingText = null, ?int $bookingYear = null, ?string $costCentre = null, ?string $costUnit = null, ?string $crc32 = null, ?string $creditAccount = null, ?string $creditEntry = null, ?string $currency = null, ?string $debitAccount = null, ?string $debitEntry = null, ?string $dueDate = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?int $position = null, ?string $receiptDate = null, ?string $receiptNo = null, ?string $reverseChargeCountry = null, ?float $skontoAmount = null, ?float $skontoVatAmount = null, ?float $vatAmount = null, ?string $vatCode = null, ?string $vatId = null, ?float $vatPercent = null)
    {
        $this
            ->setAutomaticVat($automaticVat)
            ->setBatchId($batchId)
            ->setBookingAmount($bookingAmount)
            ->setBookingPeriod($bookingPeriod)
            ->setBookingText($bookingText)
            ->setBookingYear($bookingYear)
            ->setCostCentre($costCentre)
            ->setCostUnit($costUnit)
            ->setCrc32($crc32)
            ->setCreditAccount($creditAccount)
            ->setCreditEntry($creditEntry)
            ->setCurrency($currency)
            ->setDebitAccount($debitAccount)
            ->setDebitEntry($debitEntry)
            ->setDueDate($dueDate)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setPosition($position)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setReverseChargeCountry($reverseChargeCountry)
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * Get batchId value
     * @return int|null
     */
    public function getBatchId(): ?int
    {
        return $this->batchId;
    }
    /**
     * Set batchId value
     * @param int $batchId
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
     */
    public function setBatchId(?int $batchId = null): self
    {
        // validation for constraint: int
        if (!is_null($batchId) && !(is_int($batchId) || ctype_digit($batchId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchId, true), gettype($batchId)), __LINE__);
        }
        $this->batchId = $batchId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * Get crc32 value
     * @return string|null
     */
    public function getCrc32(): ?string
    {
        return $this->crc32;
    }
    /**
     * Set crc32 value
     * @param string $crc32
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
     */
    public function setCrc32(?string $crc32 = null): self
    {
        // validation for constraint: string
        if (!is_null($crc32) && !is_string($crc32)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crc32, true), gettype($crc32)), __LINE__);
        }
        $this->crc32 = $crc32;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingDTO
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
