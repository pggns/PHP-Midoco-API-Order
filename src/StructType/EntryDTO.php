<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EntryDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The balanceMode
     * @var int|null
     */
    protected ?int $balanceMode = null;
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The commentDatetime
     * @var string|null
     */
    protected ?string $commentDatetime = null;
    /**
     * The commentUser
     * @var int|null
     */
    protected ?int $commentUser = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The dunningLevel
     * @var int|null
     */
    protected ?int $dunningLevel = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The hasTask
     * @var bool|null
     */
    protected ?bool $hasTask = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The isDepositBookingLogic
     * @var bool|null
     */
    protected ?bool $isDepositBookingLogic = null;
    /**
     * The isDunningBlock
     * @var bool|null
     */
    protected ?bool $isDunningBlock = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The originalInvoicedAmount
     * @var float|null
     */
    protected ?float $originalInvoicedAmount = null;
    /**
     * The originalPaidAmount
     * @var float|null
     */
    protected ?float $originalPaidAmount = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The processingLock
     * @var bool|null
     */
    protected ?bool $processingLock = null;
    /**
     * Constructor method for EntryDTO
     * @uses EntryDTO::setAccountId()
     * @uses EntryDTO::setBalanceMode()
     * @uses EntryDTO::setComment()
     * @uses EntryDTO::setCommentDatetime()
     * @uses EntryDTO::setCommentUser()
     * @uses EntryDTO::setCurrency()
     * @uses EntryDTO::setCustomerId()
     * @uses EntryDTO::setDueDate()
     * @uses EntryDTO::setDunningLevel()
     * @uses EntryDTO::setEntryId()
     * @uses EntryDTO::setHasTask()
     * @uses EntryDTO::setInvoicedAmount()
     * @uses EntryDTO::setIsDepositBookingLogic()
     * @uses EntryDTO::setIsDunningBlock()
     * @uses EntryDTO::setOriginalCurrency()
     * @uses EntryDTO::setOriginalInvoicedAmount()
     * @uses EntryDTO::setOriginalPaidAmount()
     * @uses EntryDTO::setPaidAmount()
     * @uses EntryDTO::setPlanId()
     * @uses EntryDTO::setProcessingLock()
     * @param string $accountId
     * @param int $balanceMode
     * @param string $comment
     * @param string $commentDatetime
     * @param int $commentUser
     * @param string $currency
     * @param int $customerId
     * @param string $dueDate
     * @param int $dunningLevel
     * @param string $entryId
     * @param bool $hasTask
     * @param float $invoicedAmount
     * @param bool $isDepositBookingLogic
     * @param bool $isDunningBlock
     * @param string $originalCurrency
     * @param float $originalInvoicedAmount
     * @param float $originalPaidAmount
     * @param float $paidAmount
     * @param string $planId
     * @param bool $processingLock
     */
    public function __construct(?string $accountId = null, ?int $balanceMode = null, ?string $comment = null, ?string $commentDatetime = null, ?int $commentUser = null, ?string $currency = null, ?int $customerId = null, ?string $dueDate = null, ?int $dunningLevel = null, ?string $entryId = null, ?bool $hasTask = null, ?float $invoicedAmount = null, ?bool $isDepositBookingLogic = null, ?bool $isDunningBlock = null, ?string $originalCurrency = null, ?float $originalInvoicedAmount = null, ?float $originalPaidAmount = null, ?float $paidAmount = null, ?string $planId = null, ?bool $processingLock = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBalanceMode($balanceMode)
            ->setComment($comment)
            ->setCommentDatetime($commentDatetime)
            ->setCommentUser($commentUser)
            ->setCurrency($currency)
            ->setCustomerId($customerId)
            ->setDueDate($dueDate)
            ->setDunningLevel($dunningLevel)
            ->setEntryId($entryId)
            ->setHasTask($hasTask)
            ->setInvoicedAmount($invoicedAmount)
            ->setIsDepositBookingLogic($isDepositBookingLogic)
            ->setIsDunningBlock($isDunningBlock)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalInvoicedAmount($originalInvoicedAmount)
            ->setOriginalPaidAmount($originalPaidAmount)
            ->setPaidAmount($paidAmount)
            ->setPlanId($planId)
            ->setProcessingLock($processingLock);
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * Get balanceMode value
     * @return int|null
     */
    public function getBalanceMode(): ?int
    {
        return $this->balanceMode;
    }
    /**
     * Set balanceMode value
     * @param int $balanceMode
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
     */
    public function setBalanceMode(?int $balanceMode = null): self
    {
        // validation for constraint: int
        if (!is_null($balanceMode) && !(is_int($balanceMode) || ctype_digit($balanceMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($balanceMode, true), gettype($balanceMode)), __LINE__);
        }
        $this->balanceMode = $balanceMode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * Get dunningLevel value
     * @return int|null
     */
    public function getDunningLevel(): ?int
    {
        return $this->dunningLevel;
    }
    /**
     * Set dunningLevel value
     * @param int $dunningLevel
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
     */
    public function setDunningLevel(?int $dunningLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningLevel) && !(is_int($dunningLevel) || ctype_digit($dunningLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningLevel, true), gettype($dunningLevel)), __LINE__);
        }
        $this->dunningLevel = $dunningLevel;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * Get isDepositBookingLogic value
     * @return bool|null
     */
    public function getIsDepositBookingLogic(): ?bool
    {
        return $this->isDepositBookingLogic;
    }
    /**
     * Set isDepositBookingLogic value
     * @param bool $isDepositBookingLogic
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
     */
    public function setIsDepositBookingLogic(?bool $isDepositBookingLogic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDepositBookingLogic) && !is_bool($isDepositBookingLogic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDepositBookingLogic, true), gettype($isDepositBookingLogic)), __LINE__);
        }
        $this->isDepositBookingLogic = $isDepositBookingLogic;
        
        return $this;
    }
    /**
     * Get isDunningBlock value
     * @return bool|null
     */
    public function getIsDunningBlock(): ?bool
    {
        return $this->isDunningBlock;
    }
    /**
     * Set isDunningBlock value
     * @param bool $isDunningBlock
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
     */
    public function setIsDunningBlock(?bool $isDunningBlock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDunningBlock) && !is_bool($isDunningBlock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDunningBlock, true), gettype($isDunningBlock)), __LINE__);
        }
        $this->isDunningBlock = $isDunningBlock;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryDTO
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
}
