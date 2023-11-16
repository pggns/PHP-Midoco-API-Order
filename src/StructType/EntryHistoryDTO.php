<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntryHistoryDTO StructType
 * @subpackage Structs
 */
class EntryHistoryDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
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
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The historyId
     * @var int|null
     */
    protected ?int $historyId = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
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
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * Constructor method for EntryHistoryDTO
     * @uses EntryHistoryDTO::setAccountId()
     * @uses EntryHistoryDTO::setBookingText()
     * @uses EntryHistoryDTO::setComment()
     * @uses EntryHistoryDTO::setCommentDatetime()
     * @uses EntryHistoryDTO::setCommentUser()
     * @uses EntryHistoryDTO::setCurrency()
     * @uses EntryHistoryDTO::setEntryId()
     * @uses EntryHistoryDTO::setHistoryId()
     * @uses EntryHistoryDTO::setInvoicedAmount()
     * @uses EntryHistoryDTO::setJournalId()
     * @uses EntryHistoryDTO::setOriginalCurrency()
     * @uses EntryHistoryDTO::setOriginalInvoicedAmount()
     * @uses EntryHistoryDTO::setOriginalPaidAmount()
     * @uses EntryHistoryDTO::setPaidAmount()
     * @uses EntryHistoryDTO::setPlanId()
     * @uses EntryHistoryDTO::setReceiptDate()
     * @param string $accountId
     * @param string $bookingText
     * @param string $comment
     * @param string $commentDatetime
     * @param int $commentUser
     * @param string $currency
     * @param string $entryId
     * @param int $historyId
     * @param float $invoicedAmount
     * @param int $journalId
     * @param string $originalCurrency
     * @param float $originalInvoicedAmount
     * @param float $originalPaidAmount
     * @param float $paidAmount
     * @param string $planId
     * @param string $receiptDate
     */
    public function __construct(?string $accountId = null, ?string $bookingText = null, ?string $comment = null, ?string $commentDatetime = null, ?int $commentUser = null, ?string $currency = null, ?string $entryId = null, ?int $historyId = null, ?float $invoicedAmount = null, ?int $journalId = null, ?string $originalCurrency = null, ?float $originalInvoicedAmount = null, ?float $originalPaidAmount = null, ?float $paidAmount = null, ?string $planId = null, ?string $receiptDate = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBookingText($bookingText)
            ->setComment($comment)
            ->setCommentDatetime($commentDatetime)
            ->setCommentUser($commentUser)
            ->setCurrency($currency)
            ->setEntryId($entryId)
            ->setHistoryId($historyId)
            ->setInvoicedAmount($invoicedAmount)
            ->setJournalId($journalId)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalInvoicedAmount($originalInvoicedAmount)
            ->setOriginalPaidAmount($originalPaidAmount)
            ->setPaidAmount($paidAmount)
            ->setPlanId($planId)
            ->setReceiptDate($receiptDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * Get historyId value
     * @return int|null
     */
    public function getHistoryId(): ?int
    {
        return $this->historyId;
    }
    /**
     * Set historyId value
     * @param int $historyId
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
     */
    public function setHistoryId(?int $historyId = null): self
    {
        // validation for constraint: int
        if (!is_null($historyId) && !(is_int($historyId) || ctype_digit($historyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($historyId, true), gettype($historyId)), __LINE__);
        }
        $this->historyId = $historyId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EntryHistoryDTO
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
}
