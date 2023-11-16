<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOnlinePaymentTransactionHistory StructType
 * @subpackage Structs
 */
class MidocoOnlinePaymentTransactionHistory extends AbstractStructBase
{
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccReceiptNo
     * @var int|null
     */
    protected ?int $ccReceiptNo = null;
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * The expiryMonthYear
     * @var string|null
     */
    protected ?string $expiryMonthYear = null;
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * The approvalCode
     * @var string|null
     */
    protected ?string $approvalCode = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The user
     * @var int|null
     */
    protected ?int $user = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorDescriptionCode
     * @var string|null
     */
    protected ?string $errorDescriptionCode = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorDescription
     * @var string|null
     */
    protected ?string $errorDescription = null;
    /**
     * Constructor method for MidocoOnlinePaymentTransactionHistory
     * @uses MidocoOnlinePaymentTransactionHistory::setTransactionId()
     * @uses MidocoOnlinePaymentTransactionHistory::setCcType()
     * @uses MidocoOnlinePaymentTransactionHistory::setCcNo()
     * @uses MidocoOnlinePaymentTransactionHistory::setCcReceiptNo()
     * @uses MidocoOnlinePaymentTransactionHistory::setReceiptId()
     * @uses MidocoOnlinePaymentTransactionHistory::setExpiryMonthYear()
     * @uses MidocoOnlinePaymentTransactionHistory::setAction()
     * @uses MidocoOnlinePaymentTransactionHistory::setApprovalCode()
     * @uses MidocoOnlinePaymentTransactionHistory::setAmount()
     * @uses MidocoOnlinePaymentTransactionHistory::setUser()
     * @uses MidocoOnlinePaymentTransactionHistory::setTimestamp()
     * @uses MidocoOnlinePaymentTransactionHistory::setStatus()
     * @uses MidocoOnlinePaymentTransactionHistory::setErrorCode()
     * @uses MidocoOnlinePaymentTransactionHistory::setErrorDescriptionCode()
     * @uses MidocoOnlinePaymentTransactionHistory::setErrorBundle()
     * @uses MidocoOnlinePaymentTransactionHistory::setErrorDescription()
     * @param int $transactionId
     * @param string $ccType
     * @param string $ccNo
     * @param int $ccReceiptNo
     * @param int $receiptId
     * @param string $expiryMonthYear
     * @param string $action
     * @param string $approvalCode
     * @param float $amount
     * @param int $user
     * @param string $timestamp
     * @param string $status
     * @param string $errorCode
     * @param string $errorDescriptionCode
     * @param string $errorBundle
     * @param string $errorDescription
     */
    public function __construct(?int $transactionId = null, ?string $ccType = null, ?string $ccNo = null, ?int $ccReceiptNo = null, ?int $receiptId = null, ?string $expiryMonthYear = null, ?string $action = null, ?string $approvalCode = null, ?float $amount = null, ?int $user = null, ?string $timestamp = null, ?string $status = null, ?string $errorCode = null, ?string $errorDescriptionCode = null, ?string $errorBundle = null, ?string $errorDescription = null)
    {
        $this
            ->setTransactionId($transactionId)
            ->setCcType($ccType)
            ->setCcNo($ccNo)
            ->setCcReceiptNo($ccReceiptNo)
            ->setReceiptId($receiptId)
            ->setExpiryMonthYear($expiryMonthYear)
            ->setAction($action)
            ->setApprovalCode($approvalCode)
            ->setAmount($amount)
            ->setUser($user)
            ->setTimestamp($timestamp)
            ->setStatus($status)
            ->setErrorCode($errorCode)
            ->setErrorDescriptionCode($errorDescriptionCode)
            ->setErrorBundle($errorBundle)
            ->setErrorDescription($errorDescription);
    }
    /**
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get ccReceiptNo value
     * @return int|null
     */
    public function getCcReceiptNo(): ?int
    {
        return $this->ccReceiptNo;
    }
    /**
     * Set ccReceiptNo value
     * @param int $ccReceiptNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setCcReceiptNo(?int $ccReceiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($ccReceiptNo) && !(is_int($ccReceiptNo) || ctype_digit($ccReceiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccReceiptNo, true), gettype($ccReceiptNo)), __LINE__);
        }
        $this->ccReceiptNo = $ccReceiptNo;
        
        return $this;
    }
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
    /**
     * Get expiryMonthYear value
     * @return string|null
     */
    public function getExpiryMonthYear(): ?string
    {
        return $this->expiryMonthYear;
    }
    /**
     * Set expiryMonthYear value
     * @param string $expiryMonthYear
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setExpiryMonthYear(?string $expiryMonthYear = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryMonthYear) && !is_string($expiryMonthYear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryMonthYear, true), gettype($expiryMonthYear)), __LINE__);
        }
        $this->expiryMonthYear = $expiryMonthYear;
        
        return $this;
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
    /**
     * Get approvalCode value
     * @return string|null
     */
    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }
    /**
     * Set approvalCode value
     * @param string $approvalCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setApprovalCode(?string $approvalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($approvalCode) && !is_string($approvalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approvalCode, true), gettype($approvalCode)), __LINE__);
        }
        $this->approvalCode = $approvalCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
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
     * Get user value
     * @return int|null
     */
    public function getUser(): ?int
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param int $user
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setUser(?int $user = null): self
    {
        // validation for constraint: int
        if (!is_null($user) && !(is_int($user) || ctype_digit($user))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorDescriptionCode value
     * @return string|null
     */
    public function getErrorDescriptionCode(): ?string
    {
        return $this->errorDescriptionCode;
    }
    /**
     * Set errorDescriptionCode value
     * @param string $errorDescriptionCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setErrorDescriptionCode(?string $errorDescriptionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescriptionCode) && !is_string($errorDescriptionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescriptionCode, true), gettype($errorDescriptionCode)), __LINE__);
        }
        $this->errorDescriptionCode = $errorDescriptionCode;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $errorDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory
     */
    public function setErrorDescription(?string $errorDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescription, true), gettype($errorDescription)), __LINE__);
        }
        $this->errorDescription = $errorDescription;
        
        return $this;
    }
}
