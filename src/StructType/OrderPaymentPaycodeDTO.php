<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderPaymentPaycodeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderPaymentPaycodeDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The lastStatusDate
     * @var string|null
     */
    protected ?string $lastStatusDate = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The payAmount
     * @var float|null
     */
    protected ?float $payAmount = null;
    /**
     * The paycode
     * @var string|null
     */
    protected ?string $paycode = null;
    /**
     * The paymentId
     * @var int|null
     */
    protected ?int $paymentId = null;
    /**
     * The transactionNumber
     * @var string|null
     */
    protected ?string $transactionNumber = null;
    /**
     * The transactionStatus
     * @var string|null
     */
    protected ?string $transactionStatus = null;
    /**
     * The transactionStatusReason
     * @var string|null
     */
    protected ?string $transactionStatusReason = null;
    /**
     * Constructor method for OrderPaymentPaycodeDTO
     * @uses OrderPaymentPaycodeDTO::setCreationDate()
     * @uses OrderPaymentPaycodeDTO::setIsDeposit()
     * @uses OrderPaymentPaycodeDTO::setLastStatusDate()
     * @uses OrderPaymentPaycodeDTO::setOrderId()
     * @uses OrderPaymentPaycodeDTO::setPaidAmount()
     * @uses OrderPaymentPaycodeDTO::setPayAmount()
     * @uses OrderPaymentPaycodeDTO::setPaycode()
     * @uses OrderPaymentPaycodeDTO::setPaymentId()
     * @uses OrderPaymentPaycodeDTO::setTransactionNumber()
     * @uses OrderPaymentPaycodeDTO::setTransactionStatus()
     * @uses OrderPaymentPaycodeDTO::setTransactionStatusReason()
     * @param string $creationDate
     * @param bool $isDeposit
     * @param string $lastStatusDate
     * @param int $orderId
     * @param float $paidAmount
     * @param float $payAmount
     * @param string $paycode
     * @param int $paymentId
     * @param string $transactionNumber
     * @param string $transactionStatus
     * @param string $transactionStatusReason
     */
    public function __construct(?string $creationDate = null, ?bool $isDeposit = null, ?string $lastStatusDate = null, ?int $orderId = null, ?float $paidAmount = null, ?float $payAmount = null, ?string $paycode = null, ?int $paymentId = null, ?string $transactionNumber = null, ?string $transactionStatus = null, ?string $transactionStatusReason = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setIsDeposit($isDeposit)
            ->setLastStatusDate($lastStatusDate)
            ->setOrderId($orderId)
            ->setPaidAmount($paidAmount)
            ->setPayAmount($payAmount)
            ->setPaycode($paycode)
            ->setPaymentId($paymentId)
            ->setTransactionNumber($transactionNumber)
            ->setTransactionStatus($transactionStatus)
            ->setTransactionStatusReason($transactionStatusReason);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
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
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
     */
    public function setIsDeposit(?bool $isDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
        return $this;
    }
    /**
     * Get lastStatusDate value
     * @return string|null
     */
    public function getLastStatusDate(): ?string
    {
        return $this->lastStatusDate;
    }
    /**
     * Set lastStatusDate value
     * @param string $lastStatusDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
     */
    public function setLastStatusDate(?string $lastStatusDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastStatusDate) && !is_string($lastStatusDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastStatusDate, true), gettype($lastStatusDate)), __LINE__);
        }
        $this->lastStatusDate = $lastStatusDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
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
     * Get payAmount value
     * @return float|null
     */
    public function getPayAmount(): ?float
    {
        return $this->payAmount;
    }
    /**
     * Set payAmount value
     * @param float $payAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
     */
    public function setPayAmount(?float $payAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($payAmount) && !(is_float($payAmount) || is_numeric($payAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($payAmount, true), gettype($payAmount)), __LINE__);
        }
        $this->payAmount = $payAmount;
        
        return $this;
    }
    /**
     * Get paycode value
     * @return string|null
     */
    public function getPaycode(): ?string
    {
        return $this->paycode;
    }
    /**
     * Set paycode value
     * @param string $paycode
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
     */
    public function setPaycode(?string $paycode = null): self
    {
        // validation for constraint: string
        if (!is_null($paycode) && !is_string($paycode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paycode, true), gettype($paycode)), __LINE__);
        }
        $this->paycode = $paycode;
        
        return $this;
    }
    /**
     * Get paymentId value
     * @return int|null
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }
    /**
     * Set paymentId value
     * @param int $paymentId
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
     */
    public function setPaymentId(?int $paymentId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentId) && !(is_int($paymentId) || ctype_digit($paymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentId, true), gettype($paymentId)), __LINE__);
        }
        $this->paymentId = $paymentId;
        
        return $this;
    }
    /**
     * Get transactionNumber value
     * @return string|null
     */
    public function getTransactionNumber(): ?string
    {
        return $this->transactionNumber;
    }
    /**
     * Set transactionNumber value
     * @param string $transactionNumber
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
     */
    public function setTransactionNumber(?string $transactionNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionNumber) && !is_string($transactionNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionNumber, true), gettype($transactionNumber)), __LINE__);
        }
        $this->transactionNumber = $transactionNumber;
        
        return $this;
    }
    /**
     * Get transactionStatus value
     * @return string|null
     */
    public function getTransactionStatus(): ?string
    {
        return $this->transactionStatus;
    }
    /**
     * Set transactionStatus value
     * @param string $transactionStatus
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
     */
    public function setTransactionStatus(?string $transactionStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionStatus) && !is_string($transactionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionStatus, true), gettype($transactionStatus)), __LINE__);
        }
        $this->transactionStatus = $transactionStatus;
        
        return $this;
    }
    /**
     * Get transactionStatusReason value
     * @return string|null
     */
    public function getTransactionStatusReason(): ?string
    {
        return $this->transactionStatusReason;
    }
    /**
     * Set transactionStatusReason value
     * @param string $transactionStatusReason
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
     */
    public function setTransactionStatusReason(?string $transactionStatusReason = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionStatusReason) && !is_string($transactionStatusReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionStatusReason, true), gettype($transactionStatusReason)), __LINE__);
        }
        $this->transactionStatusReason = $transactionStatusReason;
        
        return $this;
    }
}
