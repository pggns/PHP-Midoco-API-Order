<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitorAccountEntryType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DebitorAccountEntryType extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The dueAmount
     * @var float|null
     */
    protected ?float $dueAmount = null;
    /**
     * The company
     * @var string|null
     */
    protected ?string $company = null;
    /**
     * The customer
     * @var string|null
     */
    protected ?string $customer = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The accountType
     * @var string|null
     */
    protected ?string $accountType = null;
    /**
     * The originalPaidAmount
     * @var float|null
     */
    protected ?float $originalPaidAmount = null;
    /**
     * The originalInvoicedAmount
     * @var float|null
     */
    protected ?float $originalInvoicedAmount = null;
    /**
     * The originalDueAmount
     * @var float|null
     */
    protected ?float $originalDueAmount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The oppositeAccountId
     * @var string|null
     */
    protected ?string $oppositeAccountId = null;
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The commentUser
     * @var int|null
     */
    protected ?int $commentUser = null;
    /**
     * The commentDatetime
     * @var string|null
     */
    protected ?string $commentDatetime = null;
    /**
     * The hasTask
     * @var bool|null
     */
    protected ?bool $hasTask = null;
    /**
     * The processingLock
     * @var bool|null
     */
    protected ?bool $processingLock = null;
    /**
     * The creditLimit
     * @var float|null
     */
    protected ?float $creditLimit = null;
    /**
     * The paymentConditionDescr
     * @var string|null
     */
    protected ?string $paymentConditionDescr = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for DebitorAccountEntryType
     * @uses DebitorAccountEntryType::setAccountId()
     * @uses DebitorAccountEntryType::setDueDate()
     * @uses DebitorAccountEntryType::setCreationDate()
     * @uses DebitorAccountEntryType::setDueAmount()
     * @uses DebitorAccountEntryType::setCompany()
     * @uses DebitorAccountEntryType::setCustomer()
     * @uses DebitorAccountEntryType::setEntryId()
     * @uses DebitorAccountEntryType::setPaidAmount()
     * @uses DebitorAccountEntryType::setInvoicedAmount()
     * @uses DebitorAccountEntryType::setPlanId()
     * @uses DebitorAccountEntryType::setAccountName()
     * @uses DebitorAccountEntryType::setAccountType()
     * @uses DebitorAccountEntryType::setOriginalPaidAmount()
     * @uses DebitorAccountEntryType::setOriginalInvoicedAmount()
     * @uses DebitorAccountEntryType::setOriginalDueAmount()
     * @uses DebitorAccountEntryType::setCurrency()
     * @uses DebitorAccountEntryType::setOriginalCurrency()
     * @uses DebitorAccountEntryType::setOppositeAccountId()
     * @uses DebitorAccountEntryType::setComment()
     * @uses DebitorAccountEntryType::setCommentUser()
     * @uses DebitorAccountEntryType::setCommentDatetime()
     * @uses DebitorAccountEntryType::setHasTask()
     * @uses DebitorAccountEntryType::setProcessingLock()
     * @uses DebitorAccountEntryType::setCreditLimit()
     * @uses DebitorAccountEntryType::setPaymentConditionDescr()
     * @uses DebitorAccountEntryType::setInvoiceDate()
     * @uses DebitorAccountEntryType::setCustomerId()
     * @param string $accountId
     * @param string $dueDate
     * @param string $creationDate
     * @param float $dueAmount
     * @param string $company
     * @param string $customer
     * @param string $entryId
     * @param float $paidAmount
     * @param float $invoicedAmount
     * @param string $planId
     * @param string $accountName
     * @param string $accountType
     * @param float $originalPaidAmount
     * @param float $originalInvoicedAmount
     * @param float $originalDueAmount
     * @param string $currency
     * @param string $originalCurrency
     * @param string $oppositeAccountId
     * @param string $comment
     * @param int $commentUser
     * @param string $commentDatetime
     * @param bool $hasTask
     * @param bool $processingLock
     * @param float $creditLimit
     * @param string $paymentConditionDescr
     * @param string $invoiceDate
     * @param int $customerId
     */
    public function __construct(?string $accountId = null, ?string $dueDate = null, ?string $creationDate = null, ?float $dueAmount = null, ?string $company = null, ?string $customer = null, ?string $entryId = null, ?float $paidAmount = null, ?float $invoicedAmount = null, ?string $planId = null, ?string $accountName = null, ?string $accountType = null, ?float $originalPaidAmount = null, ?float $originalInvoicedAmount = null, ?float $originalDueAmount = null, ?string $currency = null, ?string $originalCurrency = null, ?string $oppositeAccountId = null, ?string $comment = null, ?int $commentUser = null, ?string $commentDatetime = null, ?bool $hasTask = null, ?bool $processingLock = null, ?float $creditLimit = null, ?string $paymentConditionDescr = null, ?string $invoiceDate = null, ?int $customerId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setDueDate($dueDate)
            ->setCreationDate($creationDate)
            ->setDueAmount($dueAmount)
            ->setCompany($company)
            ->setCustomer($customer)
            ->setEntryId($entryId)
            ->setPaidAmount($paidAmount)
            ->setInvoicedAmount($invoicedAmount)
            ->setPlanId($planId)
            ->setAccountName($accountName)
            ->setAccountType($accountType)
            ->setOriginalPaidAmount($originalPaidAmount)
            ->setOriginalInvoicedAmount($originalInvoicedAmount)
            ->setOriginalDueAmount($originalDueAmount)
            ->setCurrency($currency)
            ->setOriginalCurrency($originalCurrency)
            ->setOppositeAccountId($oppositeAccountId)
            ->setComment($comment)
            ->setCommentUser($commentUser)
            ->setCommentDatetime($commentDatetime)
            ->setHasTask($hasTask)
            ->setProcessingLock($processingLock)
            ->setCreditLimit($creditLimit)
            ->setPaymentConditionDescr($paymentConditionDescr)
            ->setInvoiceDate($invoiceDate)
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
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
     * Get dueAmount value
     * @return float|null
     */
    public function getDueAmount(): ?float
    {
        return $this->dueAmount;
    }
    /**
     * Set dueAmount value
     * @param float $dueAmount
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setDueAmount(?float $dueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($dueAmount) && !(is_float($dueAmount) || is_numeric($dueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dueAmount, true), gettype($dueAmount)), __LINE__);
        }
        $this->dueAmount = $dueAmount;
        
        return $this;
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->company = $company;
        
        return $this;
    }
    /**
     * Get customer value
     * @return string|null
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param string $customer
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setCustomer(?string $customer = null): self
    {
        // validation for constraint: string
        if (!is_null($customer) && !is_string($customer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer, true), gettype($customer)), __LINE__);
        }
        $this->customer = $customer;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
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
     * Get paidAmount value
     * @return float|null
     */
    public function getPaidAmount(): ?float
    {
        return $this->paidAmount;
    }
    /**
     * Set paidAmount value
     * @param float $paidAmount
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setPaidAmount(?float $paidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidAmount) && !(is_float($paidAmount) || is_numeric($paidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidAmount, true), gettype($paidAmount)), __LINE__);
        }
        $this->paidAmount = $paidAmount;
        
        return $this;
    }
    /**
     * Get invoicedAmount value
     * @return float|null
     */
    public function getInvoicedAmount(): ?float
    {
        return $this->invoicedAmount;
    }
    /**
     * Set invoicedAmount value
     * @param float $invoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setInvoicedAmount(?float $invoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoicedAmount) && !(is_float($invoicedAmount) || is_numeric($invoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoicedAmount, true), gettype($invoicedAmount)), __LINE__);
        }
        $this->invoicedAmount = $invoicedAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
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
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
        return $this;
    }
    /**
     * Get accountType value
     * @return string|null
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param string $accountType
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setAccountType(?string $accountType = null): self
    {
        // validation for constraint: string
        if (!is_null($accountType) && !is_string($accountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Get originalPaidAmount value
     * @return float|null
     */
    public function getOriginalPaidAmount(): ?float
    {
        return $this->originalPaidAmount;
    }
    /**
     * Set originalPaidAmount value
     * @param float $originalPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setOriginalPaidAmount(?float $originalPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalPaidAmount) && !(is_float($originalPaidAmount) || is_numeric($originalPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalPaidAmount, true), gettype($originalPaidAmount)), __LINE__);
        }
        $this->originalPaidAmount = $originalPaidAmount;
        
        return $this;
    }
    /**
     * Get originalInvoicedAmount value
     * @return float|null
     */
    public function getOriginalInvoicedAmount(): ?float
    {
        return $this->originalInvoicedAmount;
    }
    /**
     * Set originalInvoicedAmount value
     * @param float $originalInvoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setOriginalInvoicedAmount(?float $originalInvoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalInvoicedAmount) && !(is_float($originalInvoicedAmount) || is_numeric($originalInvoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalInvoicedAmount, true), gettype($originalInvoicedAmount)), __LINE__);
        }
        $this->originalInvoicedAmount = $originalInvoicedAmount;
        
        return $this;
    }
    /**
     * Get originalDueAmount value
     * @return float|null
     */
    public function getOriginalDueAmount(): ?float
    {
        return $this->originalDueAmount;
    }
    /**
     * Set originalDueAmount value
     * @param float $originalDueAmount
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setOriginalDueAmount(?float $originalDueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalDueAmount) && !(is_float($originalDueAmount) || is_numeric($originalDueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalDueAmount, true), gettype($originalDueAmount)), __LINE__);
        }
        $this->originalDueAmount = $originalDueAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
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
     * Get oppositeAccountId value
     * @return string|null
     */
    public function getOppositeAccountId(): ?string
    {
        return $this->oppositeAccountId;
    }
    /**
     * Set oppositeAccountId value
     * @param string $oppositeAccountId
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setOppositeAccountId(?string $oppositeAccountId = null): self
    {
        // validation for constraint: string
        if (!is_null($oppositeAccountId) && !is_string($oppositeAccountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oppositeAccountId, true), gettype($oppositeAccountId)), __LINE__);
        }
        $this->oppositeAccountId = $oppositeAccountId;
        
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
    /**
     * Get commentUser value
     * @return int|null
     */
    public function getCommentUser(): ?int
    {
        return $this->commentUser;
    }
    /**
     * Set commentUser value
     * @param int $commentUser
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setCommentUser(?int $commentUser = null): self
    {
        // validation for constraint: int
        if (!is_null($commentUser) && !(is_int($commentUser) || ctype_digit($commentUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commentUser, true), gettype($commentUser)), __LINE__);
        }
        $this->commentUser = $commentUser;
        
        return $this;
    }
    /**
     * Get commentDatetime value
     * @return string|null
     */
    public function getCommentDatetime(): ?string
    {
        return $this->commentDatetime;
    }
    /**
     * Set commentDatetime value
     * @param string $commentDatetime
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setCommentDatetime(?string $commentDatetime = null): self
    {
        // validation for constraint: string
        if (!is_null($commentDatetime) && !is_string($commentDatetime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentDatetime, true), gettype($commentDatetime)), __LINE__);
        }
        $this->commentDatetime = $commentDatetime;
        
        return $this;
    }
    /**
     * Get hasTask value
     * @return bool|null
     */
    public function getHasTask(): ?bool
    {
        return $this->hasTask;
    }
    /**
     * Set hasTask value
     * @param bool $hasTask
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setHasTask(?bool $hasTask = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasTask) && !is_bool($hasTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasTask, true), gettype($hasTask)), __LINE__);
        }
        $this->hasTask = $hasTask;
        
        return $this;
    }
    /**
     * Get processingLock value
     * @return bool|null
     */
    public function getProcessingLock(): ?bool
    {
        return $this->processingLock;
    }
    /**
     * Set processingLock value
     * @param bool $processingLock
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setProcessingLock(?bool $processingLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($processingLock) && !is_bool($processingLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processingLock, true), gettype($processingLock)), __LINE__);
        }
        $this->processingLock = $processingLock;
        
        return $this;
    }
    /**
     * Get creditLimit value
     * @return float|null
     */
    public function getCreditLimit(): ?float
    {
        return $this->creditLimit;
    }
    /**
     * Set creditLimit value
     * @param float $creditLimit
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setCreditLimit(?float $creditLimit = null): self
    {
        // validation for constraint: float
        if (!is_null($creditLimit) && !(is_float($creditLimit) || is_numeric($creditLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditLimit, true), gettype($creditLimit)), __LINE__);
        }
        $this->creditLimit = $creditLimit;
        
        return $this;
    }
    /**
     * Get paymentConditionDescr value
     * @return string|null
     */
    public function getPaymentConditionDescr(): ?string
    {
        return $this->paymentConditionDescr;
    }
    /**
     * Set paymentConditionDescr value
     * @param string $paymentConditionDescr
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setPaymentConditionDescr(?string $paymentConditionDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentConditionDescr) && !is_string($paymentConditionDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentConditionDescr, true), gettype($paymentConditionDescr)), __LINE__);
        }
        $this->paymentConditionDescr = $paymentConditionDescr;
        
        return $this;
    }
    /**
     * Get invoiceDate value
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }
    /**
     * Set invoiceDate value
     * @param string $invoiceDate
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->invoiceDate = $invoiceDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType
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
