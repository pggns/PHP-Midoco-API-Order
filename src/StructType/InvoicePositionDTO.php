<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoicePositionDTO StructType
 * @subpackage Structs
 */
class InvoicePositionDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
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
     * The debitAccount
     * @var string|null
     */
    protected ?string $debitAccount = null;
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
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The isDiPayment
     * @var bool|null
     */
    protected ?bool $isDiPayment = null;
    /**
     * The isRevenue
     * @var bool|null
     */
    protected ?bool $isRevenue = null;
    /**
     * The isReverseCharge
     * @var bool|null
     */
    protected ?bool $isReverseCharge = null;
    /**
     * The isVoidPosition
     * @var bool|null
     */
    protected ?bool $isVoidPosition = null;
    /**
     * The isVoided
     * @var bool|null
     */
    protected ?bool $isVoided = null;
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
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
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
     * The partialPosition
     * @var bool|null
     */
    protected ?bool $partialPosition = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The receiptNo
     * @var int|null
     */
    protected ?int $receiptNo = null;
    /**
     * The settlementPositionId
     * @var int|null
     */
    protected ?int $settlementPositionId = null;
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
     * The voidInvoiceId
     * @var int|null
     */
    protected ?int $voidInvoiceId = null;
    /**
     * Constructor method for InvoicePositionDTO
     * @uses InvoicePositionDTO::setAmount()
     * @uses InvoicePositionDTO::setBookingId()
     * @uses InvoicePositionDTO::setCostCentre()
     * @uses InvoicePositionDTO::setCostUnit()
     * @uses InvoicePositionDTO::setCreditAccount()
     * @uses InvoicePositionDTO::setDebitAccount()
     * @uses InvoicePositionDTO::setDueDate()
     * @uses InvoicePositionDTO::setExchangeRate()
     * @uses InvoicePositionDTO::setInvoiceId()
     * @uses InvoicePositionDTO::setIsDiPayment()
     * @uses InvoicePositionDTO::setIsRevenue()
     * @uses InvoicePositionDTO::setIsReverseCharge()
     * @uses InvoicePositionDTO::setIsVoidPosition()
     * @uses InvoicePositionDTO::setIsVoided()
     * @uses InvoicePositionDTO::setItemId()
     * @uses InvoicePositionDTO::setJournalId()
     * @uses InvoicePositionDTO::setOrderId()
     * @uses InvoicePositionDTO::setOriginalAmount()
     * @uses InvoicePositionDTO::setOriginalCurrency()
     * @uses InvoicePositionDTO::setPartialPosition()
     * @uses InvoicePositionDTO::setPosition()
     * @uses InvoicePositionDTO::setReceiptNo()
     * @uses InvoicePositionDTO::setSettlementPositionId()
     * @uses InvoicePositionDTO::setVatAmount()
     * @uses InvoicePositionDTO::setVatCode()
     * @uses InvoicePositionDTO::setVatPercent()
     * @uses InvoicePositionDTO::setVoidInvoiceId()
     * @param float $amount
     * @param string $bookingId
     * @param string $costCentre
     * @param string $costUnit
     * @param string $creditAccount
     * @param string $debitAccount
     * @param string $dueDate
     * @param float $exchangeRate
     * @param int $invoiceId
     * @param bool $isDiPayment
     * @param bool $isRevenue
     * @param bool $isReverseCharge
     * @param bool $isVoidPosition
     * @param bool $isVoided
     * @param int $itemId
     * @param int $journalId
     * @param int $orderId
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param bool $partialPosition
     * @param int $position
     * @param int $receiptNo
     * @param int $settlementPositionId
     * @param float $vatAmount
     * @param string $vatCode
     * @param float $vatPercent
     * @param int $voidInvoiceId
     */
    public function __construct(?float $amount = null, ?string $bookingId = null, ?string $costCentre = null, ?string $costUnit = null, ?string $creditAccount = null, ?string $debitAccount = null, ?string $dueDate = null, ?float $exchangeRate = null, ?int $invoiceId = null, ?bool $isDiPayment = null, ?bool $isRevenue = null, ?bool $isReverseCharge = null, ?bool $isVoidPosition = null, ?bool $isVoided = null, ?int $itemId = null, ?int $journalId = null, ?int $orderId = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?bool $partialPosition = null, ?int $position = null, ?int $receiptNo = null, ?int $settlementPositionId = null, ?float $vatAmount = null, ?string $vatCode = null, ?float $vatPercent = null, ?int $voidInvoiceId = null)
    {
        $this
            ->setAmount($amount)
            ->setBookingId($bookingId)
            ->setCostCentre($costCentre)
            ->setCostUnit($costUnit)
            ->setCreditAccount($creditAccount)
            ->setDebitAccount($debitAccount)
            ->setDueDate($dueDate)
            ->setExchangeRate($exchangeRate)
            ->setInvoiceId($invoiceId)
            ->setIsDiPayment($isDiPayment)
            ->setIsRevenue($isRevenue)
            ->setIsReverseCharge($isReverseCharge)
            ->setIsVoidPosition($isVoidPosition)
            ->setIsVoided($isVoided)
            ->setItemId($itemId)
            ->setJournalId($journalId)
            ->setOrderId($orderId)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setPartialPosition($partialPosition)
            ->setPosition($position)
            ->setReceiptNo($receiptNo)
            ->setSettlementPositionId($settlementPositionId)
            ->setVatAmount($vatAmount)
            ->setVatCode($vatCode)
            ->setVatPercent($vatPercent)
            ->setVoidInvoiceId($voidInvoiceId);
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get isDiPayment value
     * @return bool|null
     */
    public function getIsDiPayment(): ?bool
    {
        return $this->isDiPayment;
    }
    /**
     * Set isDiPayment value
     * @param bool $isDiPayment
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setIsDiPayment(?bool $isDiPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDiPayment) && !is_bool($isDiPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDiPayment, true), gettype($isDiPayment)), __LINE__);
        }
        $this->isDiPayment = $isDiPayment;
        
        return $this;
    }
    /**
     * Get isRevenue value
     * @return bool|null
     */
    public function getIsRevenue(): ?bool
    {
        return $this->isRevenue;
    }
    /**
     * Set isRevenue value
     * @param bool $isRevenue
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setIsRevenue(?bool $isRevenue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRevenue) && !is_bool($isRevenue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRevenue, true), gettype($isRevenue)), __LINE__);
        }
        $this->isRevenue = $isRevenue;
        
        return $this;
    }
    /**
     * Get isReverseCharge value
     * @return bool|null
     */
    public function getIsReverseCharge(): ?bool
    {
        return $this->isReverseCharge;
    }
    /**
     * Set isReverseCharge value
     * @param bool $isReverseCharge
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setIsReverseCharge(?bool $isReverseCharge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReverseCharge) && !is_bool($isReverseCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReverseCharge, true), gettype($isReverseCharge)), __LINE__);
        }
        $this->isReverseCharge = $isReverseCharge;
        
        return $this;
    }
    /**
     * Get isVoidPosition value
     * @return bool|null
     */
    public function getIsVoidPosition(): ?bool
    {
        return $this->isVoidPosition;
    }
    /**
     * Set isVoidPosition value
     * @param bool $isVoidPosition
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setIsVoidPosition(?bool $isVoidPosition = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoidPosition) && !is_bool($isVoidPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoidPosition, true), gettype($isVoidPosition)), __LINE__);
        }
        $this->isVoidPosition = $isVoidPosition;
        
        return $this;
    }
    /**
     * Get isVoided value
     * @return bool|null
     */
    public function getIsVoided(): ?bool
    {
        return $this->isVoided;
    }
    /**
     * Set isVoided value
     * @param bool $isVoided
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setIsVoided(?bool $isVoided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoided) && !is_bool($isVoided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoided, true), gettype($isVoided)), __LINE__);
        }
        $this->isVoided = $isVoided;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * Get partialPosition value
     * @return bool|null
     */
    public function getPartialPosition(): ?bool
    {
        return $this->partialPosition;
    }
    /**
     * Set partialPosition value
     * @param bool $partialPosition
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setPartialPosition(?bool $partialPosition = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partialPosition) && !is_bool($partialPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partialPosition, true), gettype($partialPosition)), __LINE__);
        }
        $this->partialPosition = $partialPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * Get receiptNo value
     * @return int|null
     */
    public function getReceiptNo(): ?int
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param int $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setReceiptNo(?int $receiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNo) && !(is_int($receiptNo) || ctype_digit($receiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get settlementPositionId value
     * @return int|null
     */
    public function getSettlementPositionId(): ?int
    {
        return $this->settlementPositionId;
    }
    /**
     * Set settlementPositionId value
     * @param int $settlementPositionId
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setSettlementPositionId(?int $settlementPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementPositionId) && !(is_int($settlementPositionId) || ctype_digit($settlementPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementPositionId, true), gettype($settlementPositionId)), __LINE__);
        }
        $this->settlementPositionId = $settlementPositionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
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
     * Get voidInvoiceId value
     * @return int|null
     */
    public function getVoidInvoiceId(): ?int
    {
        return $this->voidInvoiceId;
    }
    /**
     * Set voidInvoiceId value
     * @param int $voidInvoiceId
     * @return \Pggns\MidocoApi\Order\StructType\InvoicePositionDTO
     */
    public function setVoidInvoiceId(?int $voidInvoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidInvoiceId) && !(is_int($voidInvoiceId) || ctype_digit($voidInvoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidInvoiceId, true), gettype($voidInvoiceId)), __LINE__);
        }
        $this->voidInvoiceId = $voidInvoiceId;
        
        return $this;
    }
}
