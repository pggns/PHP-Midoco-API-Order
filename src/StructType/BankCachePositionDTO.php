<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankCachePositionDTO StructType
 * @subpackage Structs
 */
class BankCachePositionDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The amountPercent
     * @var float|null
     */
    protected ?float $amountPercent = null;
    /**
     * The automaticVat
     * @var bool|null
     */
    protected ?bool $automaticVat = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The cacheId
     * @var int|null
     */
    protected ?int $cacheId = null;
    /**
     * The contraAccount
     * @var string|null
     */
    protected ?string $contraAccount = null;
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
     * The creditEntry
     * @var string|null
     */
    protected ?string $creditEntry = null;
    /**
     * The debitEntry
     * @var string|null
     */
    protected ?string $debitEntry = null;
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
     * Constructor method for BankCachePositionDTO
     * @uses BankCachePositionDTO::setAmount()
     * @uses BankCachePositionDTO::setAmountPercent()
     * @uses BankCachePositionDTO::setAutomaticVat()
     * @uses BankCachePositionDTO::setBookingText()
     * @uses BankCachePositionDTO::setCacheId()
     * @uses BankCachePositionDTO::setContraAccount()
     * @uses BankCachePositionDTO::setCostCentre()
     * @uses BankCachePositionDTO::setCostUnit()
     * @uses BankCachePositionDTO::setCreditEntry()
     * @uses BankCachePositionDTO::setDebitEntry()
     * @uses BankCachePositionDTO::setPosition()
     * @uses BankCachePositionDTO::setReceiptDate()
     * @uses BankCachePositionDTO::setReceiptNo()
     * @uses BankCachePositionDTO::setVatAmount()
     * @uses BankCachePositionDTO::setVatCode()
     * @uses BankCachePositionDTO::setVatPercent()
     * @param float $amount
     * @param float $amountPercent
     * @param bool $automaticVat
     * @param string $bookingText
     * @param int $cacheId
     * @param string $contraAccount
     * @param string $costCentre
     * @param string $costUnit
     * @param string $creditEntry
     * @param string $debitEntry
     * @param int $position
     * @param string $receiptDate
     * @param string $receiptNo
     * @param float $vatAmount
     * @param string $vatCode
     * @param float $vatPercent
     */
    public function __construct(?float $amount = null, ?float $amountPercent = null, ?bool $automaticVat = null, ?string $bookingText = null, ?int $cacheId = null, ?string $contraAccount = null, ?string $costCentre = null, ?string $costUnit = null, ?string $creditEntry = null, ?string $debitEntry = null, ?int $position = null, ?string $receiptDate = null, ?string $receiptNo = null, ?float $vatAmount = null, ?string $vatCode = null, ?float $vatPercent = null)
    {
        $this
            ->setAmount($amount)
            ->setAmountPercent($amountPercent)
            ->setAutomaticVat($automaticVat)
            ->setBookingText($bookingText)
            ->setCacheId($cacheId)
            ->setContraAccount($contraAccount)
            ->setCostCentre($costCentre)
            ->setCostUnit($costUnit)
            ->setCreditEntry($creditEntry)
            ->setDebitEntry($debitEntry)
            ->setPosition($position)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setVatAmount($vatAmount)
            ->setVatCode($vatCode)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get amountPercent value
     * @return float|null
     */
    public function getAmountPercent(): ?float
    {
        return $this->amountPercent;
    }
    /**
     * Set amountPercent value
     * @param float $amountPercent
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
     */
    public function setAmountPercent(?float $amountPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($amountPercent) && !(is_float($amountPercent) || is_numeric($amountPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountPercent, true), gettype($amountPercent)), __LINE__);
        }
        $this->amountPercent = $amountPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * Get cacheId value
     * @return int|null
     */
    public function getCacheId(): ?int
    {
        return $this->cacheId;
    }
    /**
     * Set cacheId value
     * @param int $cacheId
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
     */
    public function setCacheId(?int $cacheId = null): self
    {
        // validation for constraint: int
        if (!is_null($cacheId) && !(is_int($cacheId) || ctype_digit($cacheId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cacheId, true), gettype($cacheId)), __LINE__);
        }
        $this->cacheId = $cacheId;
        
        return $this;
    }
    /**
     * Get contraAccount value
     * @return string|null
     */
    public function getContraAccount(): ?string
    {
        return $this->contraAccount;
    }
    /**
     * Set contraAccount value
     * @param string $contraAccount
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
     */
    public function setContraAccount(?string $contraAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccount) && !is_string($contraAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccount, true), gettype($contraAccount)), __LINE__);
        }
        $this->contraAccount = $contraAccount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankCachePositionDTO
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
