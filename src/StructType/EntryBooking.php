<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntryBooking StructType
 * @subpackage Structs
 */
class EntryBooking extends AbstractStructBase
{
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - documentation: account for entry handling
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The entryId
     * Meta information extracted from the WSDL
     * - documentation: entry id
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - documentation: booked amount for the entry
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The isInvoice
     * Meta information extracted from the WSDL
     * - documentation: indicates an invoiced amount, false means a payment
     * @var bool|null
     */
    protected ?bool $isInvoice = null;
    /**
     * The dueDate
     * Meta information extracted from the WSDL
     * - documentation: for invoiced amounts, the new due date, might be also filled for payments, when entry is created by payment
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The originalAmount
     * Meta information extracted from the WSDL
     * - documentation: foreign currency equivalent amount, optional
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCurrency
     * Meta information extracted from the WSDL
     * - documentation: foreign currency, optional
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - documentation: if entry is referring to a customer booked on a diverse accoount, the customerId reference is filled here. Refers to a customer in crm database of midoco.
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for EntryBooking
     * @uses EntryBooking::setAccountId()
     * @uses EntryBooking::setEntryId()
     * @uses EntryBooking::setAmount()
     * @uses EntryBooking::setIsInvoice()
     * @uses EntryBooking::setDueDate()
     * @uses EntryBooking::setOriginalAmount()
     * @uses EntryBooking::setOriginalCurrency()
     * @uses EntryBooking::setCustomerId()
     * @param string $accountId
     * @param string $entryId
     * @param float $amount
     * @param bool $isInvoice
     * @param string $dueDate
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param int $customerId
     */
    public function __construct(?string $accountId = null, ?string $entryId = null, ?float $amount = null, ?bool $isInvoice = null, ?string $dueDate = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?int $customerId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setEntryId($entryId)
            ->setAmount($amount)
            ->setIsInvoice($isInvoice)
            ->setDueDate($dueDate)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setCustomerId($customerId);
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryBooking
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
     * Get entryId value
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param string $entryId
     * @return \Pggns\MidocoApi\Order\StructType\EntryBooking
     */
    public function setEntryId(?string $entryId = null): self
    {
        // validation for constraint: string
        if (!is_null($entryId) && !is_string($entryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryBooking
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\EntryBooking
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
}
