<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreparedInvoicePositionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PreparedInvoicePositionDTO extends AbstractStructBase
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
     * The invoicePositionId
     * @var int|null
     */
    protected ?int $invoicePositionId = null;
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
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
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
     * Constructor method for PreparedInvoicePositionDTO
     * @uses PreparedInvoicePositionDTO::setAmount()
     * @uses PreparedInvoicePositionDTO::setBookingId()
     * @uses PreparedInvoicePositionDTO::setCostCentre()
     * @uses PreparedInvoicePositionDTO::setCostUnit()
     * @uses PreparedInvoicePositionDTO::setCreditAccount()
     * @uses PreparedInvoicePositionDTO::setDebitAccount()
     * @uses PreparedInvoicePositionDTO::setDueDate()
     * @uses PreparedInvoicePositionDTO::setExchangeRate()
     * @uses PreparedInvoicePositionDTO::setInvoicePositionId()
     * @uses PreparedInvoicePositionDTO::setIsDiPayment()
     * @uses PreparedInvoicePositionDTO::setIsRevenue()
     * @uses PreparedInvoicePositionDTO::setIsReverseCharge()
     * @uses PreparedInvoicePositionDTO::setItemId()
     * @uses PreparedInvoicePositionDTO::setOrderId()
     * @uses PreparedInvoicePositionDTO::setOriginalAmount()
     * @uses PreparedInvoicePositionDTO::setOriginalCurrency()
     * @uses PreparedInvoicePositionDTO::setVatAmount()
     * @uses PreparedInvoicePositionDTO::setVatCode()
     * @uses PreparedInvoicePositionDTO::setVatPercent()
     * @param float $amount
     * @param string $bookingId
     * @param string $costCentre
     * @param string $costUnit
     * @param string $creditAccount
     * @param string $debitAccount
     * @param string $dueDate
     * @param float $exchangeRate
     * @param int $invoicePositionId
     * @param bool $isDiPayment
     * @param bool $isRevenue
     * @param bool $isReverseCharge
     * @param int $itemId
     * @param int $orderId
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param float $vatAmount
     * @param string $vatCode
     * @param float $vatPercent
     */
    public function __construct(?float $amount = null, ?string $bookingId = null, ?string $costCentre = null, ?string $costUnit = null, ?string $creditAccount = null, ?string $debitAccount = null, ?string $dueDate = null, ?float $exchangeRate = null, ?int $invoicePositionId = null, ?bool $isDiPayment = null, ?bool $isRevenue = null, ?bool $isReverseCharge = null, ?int $itemId = null, ?int $orderId = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?float $vatAmount = null, ?string $vatCode = null, ?float $vatPercent = null)
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
            ->setInvoicePositionId($invoicePositionId)
            ->setIsDiPayment($isDiPayment)
            ->setIsRevenue($isRevenue)
            ->setIsReverseCharge($isReverseCharge)
            ->setItemId($itemId)
            ->setOrderId($orderId)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * Get invoicePositionId value
     * @return int|null
     */
    public function getInvoicePositionId(): ?int
    {
        return $this->invoicePositionId;
    }
    /**
     * Set invoicePositionId value
     * @param int $invoicePositionId
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
     */
    public function setInvoicePositionId(?int $invoicePositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoicePositionId) && !(is_int($invoicePositionId) || ctype_digit($invoicePositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoicePositionId, true), gettype($invoicePositionId)), __LINE__);
        }
        $this->invoicePositionId = $invoicePositionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedInvoicePositionDTO
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
