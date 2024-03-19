<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaypalTransactionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaypalTransactionDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The contextParameter
     * @var string|null
     */
    protected ?string $contextParameter = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The lastStatus
     * @var int|null
     */
    protected ?int $lastStatus = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The originalTransaction
     * @var int|null
     */
    protected ?int $originalTransaction = null;
    /**
     * The payerId
     * @var string|null
     */
    protected ?string $payerId = null;
    /**
     * The paymentModel
     * @var int|null
     */
    protected ?int $paymentModel = null;
    /**
     * The paypalId
     * @var string|null
     */
    protected ?string $paypalId = null;
    /**
     * The paypalOrderTransaction
     * @var int|null
     */
    protected ?int $paypalOrderTransaction = null;
    /**
     * The paypalPayerEmail
     * @var string|null
     */
    protected ?string $paypalPayerEmail = null;
    /**
     * The paypalPayerForename
     * @var string|null
     */
    protected ?string $paypalPayerForename = null;
    /**
     * The paypalPayerLastname
     * @var string|null
     */
    protected ?string $paypalPayerLastname = null;
    /**
     * The paypalReason
     * @var string|null
     */
    protected ?string $paypalReason = null;
    /**
     * The paypalStatus
     * @var string|null
     */
    protected ?string $paypalStatus = null;
    /**
     * The previousStatus
     * @var int|null
     */
    protected ?int $previousStatus = null;
    /**
     * The transactionDate
     * @var string|null
     */
    protected ?string $transactionDate = null;
    /**
     * The transactionType
     * @var int|null
     */
    protected ?int $transactionType = null;
    /**
     * Constructor method for PaypalTransactionDTO
     * @uses PaypalTransactionDTO::setAmount()
     * @uses PaypalTransactionDTO::setContextParameter()
     * @uses PaypalTransactionDTO::setId()
     * @uses PaypalTransactionDTO::setLastStatus()
     * @uses PaypalTransactionDTO::setOrderId()
     * @uses PaypalTransactionDTO::setOriginalTransaction()
     * @uses PaypalTransactionDTO::setPayerId()
     * @uses PaypalTransactionDTO::setPaymentModel()
     * @uses PaypalTransactionDTO::setPaypalId()
     * @uses PaypalTransactionDTO::setPaypalOrderTransaction()
     * @uses PaypalTransactionDTO::setPaypalPayerEmail()
     * @uses PaypalTransactionDTO::setPaypalPayerForename()
     * @uses PaypalTransactionDTO::setPaypalPayerLastname()
     * @uses PaypalTransactionDTO::setPaypalReason()
     * @uses PaypalTransactionDTO::setPaypalStatus()
     * @uses PaypalTransactionDTO::setPreviousStatus()
     * @uses PaypalTransactionDTO::setTransactionDate()
     * @uses PaypalTransactionDTO::setTransactionType()
     * @param float $amount
     * @param string $contextParameter
     * @param int $id
     * @param int $lastStatus
     * @param int $orderId
     * @param int $originalTransaction
     * @param string $payerId
     * @param int $paymentModel
     * @param string $paypalId
     * @param int $paypalOrderTransaction
     * @param string $paypalPayerEmail
     * @param string $paypalPayerForename
     * @param string $paypalPayerLastname
     * @param string $paypalReason
     * @param string $paypalStatus
     * @param int $previousStatus
     * @param string $transactionDate
     * @param int $transactionType
     */
    public function __construct(?float $amount = null, ?string $contextParameter = null, ?int $id = null, ?int $lastStatus = null, ?int $orderId = null, ?int $originalTransaction = null, ?string $payerId = null, ?int $paymentModel = null, ?string $paypalId = null, ?int $paypalOrderTransaction = null, ?string $paypalPayerEmail = null, ?string $paypalPayerForename = null, ?string $paypalPayerLastname = null, ?string $paypalReason = null, ?string $paypalStatus = null, ?int $previousStatus = null, ?string $transactionDate = null, ?int $transactionType = null)
    {
        $this
            ->setAmount($amount)
            ->setContextParameter($contextParameter)
            ->setId($id)
            ->setLastStatus($lastStatus)
            ->setOrderId($orderId)
            ->setOriginalTransaction($originalTransaction)
            ->setPayerId($payerId)
            ->setPaymentModel($paymentModel)
            ->setPaypalId($paypalId)
            ->setPaypalOrderTransaction($paypalOrderTransaction)
            ->setPaypalPayerEmail($paypalPayerEmail)
            ->setPaypalPayerForename($paypalPayerForename)
            ->setPaypalPayerLastname($paypalPayerLastname)
            ->setPaypalReason($paypalReason)
            ->setPaypalStatus($paypalStatus)
            ->setPreviousStatus($previousStatus)
            ->setTransactionDate($transactionDate)
            ->setTransactionType($transactionType);
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
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
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
     * Get contextParameter value
     * @return string|null
     */
    public function getContextParameter(): ?string
    {
        return $this->contextParameter;
    }
    /**
     * Set contextParameter value
     * @param string $contextParameter
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setContextParameter(?string $contextParameter = null): self
    {
        // validation for constraint: string
        if (!is_null($contextParameter) && !is_string($contextParameter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextParameter, true), gettype($contextParameter)), __LINE__);
        }
        $this->contextParameter = $contextParameter;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get lastStatus value
     * @return int|null
     */
    public function getLastStatus(): ?int
    {
        return $this->lastStatus;
    }
    /**
     * Set lastStatus value
     * @param int $lastStatus
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setLastStatus(?int $lastStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($lastStatus) && !(is_int($lastStatus) || ctype_digit($lastStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastStatus, true), gettype($lastStatus)), __LINE__);
        }
        $this->lastStatus = $lastStatus;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
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
     * Get originalTransaction value
     * @return int|null
     */
    public function getOriginalTransaction(): ?int
    {
        return $this->originalTransaction;
    }
    /**
     * Set originalTransaction value
     * @param int $originalTransaction
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setOriginalTransaction(?int $originalTransaction = null): self
    {
        // validation for constraint: int
        if (!is_null($originalTransaction) && !(is_int($originalTransaction) || ctype_digit($originalTransaction))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originalTransaction, true), gettype($originalTransaction)), __LINE__);
        }
        $this->originalTransaction = $originalTransaction;
        
        return $this;
    }
    /**
     * Get payerId value
     * @return string|null
     */
    public function getPayerId(): ?string
    {
        return $this->payerId;
    }
    /**
     * Set payerId value
     * @param string $payerId
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPayerId(?string $payerId = null): self
    {
        // validation for constraint: string
        if (!is_null($payerId) && !is_string($payerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payerId, true), gettype($payerId)), __LINE__);
        }
        $this->payerId = $payerId;
        
        return $this;
    }
    /**
     * Get paymentModel value
     * @return int|null
     */
    public function getPaymentModel(): ?int
    {
        return $this->paymentModel;
    }
    /**
     * Set paymentModel value
     * @param int $paymentModel
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPaymentModel(?int $paymentModel = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentModel) && !(is_int($paymentModel) || ctype_digit($paymentModel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentModel, true), gettype($paymentModel)), __LINE__);
        }
        $this->paymentModel = $paymentModel;
        
        return $this;
    }
    /**
     * Get paypalId value
     * @return string|null
     */
    public function getPaypalId(): ?string
    {
        return $this->paypalId;
    }
    /**
     * Set paypalId value
     * @param string $paypalId
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPaypalId(?string $paypalId = null): self
    {
        // validation for constraint: string
        if (!is_null($paypalId) && !is_string($paypalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paypalId, true), gettype($paypalId)), __LINE__);
        }
        $this->paypalId = $paypalId;
        
        return $this;
    }
    /**
     * Get paypalOrderTransaction value
     * @return int|null
     */
    public function getPaypalOrderTransaction(): ?int
    {
        return $this->paypalOrderTransaction;
    }
    /**
     * Set paypalOrderTransaction value
     * @param int $paypalOrderTransaction
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPaypalOrderTransaction(?int $paypalOrderTransaction = null): self
    {
        // validation for constraint: int
        if (!is_null($paypalOrderTransaction) && !(is_int($paypalOrderTransaction) || ctype_digit($paypalOrderTransaction))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paypalOrderTransaction, true), gettype($paypalOrderTransaction)), __LINE__);
        }
        $this->paypalOrderTransaction = $paypalOrderTransaction;
        
        return $this;
    }
    /**
     * Get paypalPayerEmail value
     * @return string|null
     */
    public function getPaypalPayerEmail(): ?string
    {
        return $this->paypalPayerEmail;
    }
    /**
     * Set paypalPayerEmail value
     * @param string $paypalPayerEmail
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPaypalPayerEmail(?string $paypalPayerEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($paypalPayerEmail) && !is_string($paypalPayerEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paypalPayerEmail, true), gettype($paypalPayerEmail)), __LINE__);
        }
        $this->paypalPayerEmail = $paypalPayerEmail;
        
        return $this;
    }
    /**
     * Get paypalPayerForename value
     * @return string|null
     */
    public function getPaypalPayerForename(): ?string
    {
        return $this->paypalPayerForename;
    }
    /**
     * Set paypalPayerForename value
     * @param string $paypalPayerForename
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPaypalPayerForename(?string $paypalPayerForename = null): self
    {
        // validation for constraint: string
        if (!is_null($paypalPayerForename) && !is_string($paypalPayerForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paypalPayerForename, true), gettype($paypalPayerForename)), __LINE__);
        }
        $this->paypalPayerForename = $paypalPayerForename;
        
        return $this;
    }
    /**
     * Get paypalPayerLastname value
     * @return string|null
     */
    public function getPaypalPayerLastname(): ?string
    {
        return $this->paypalPayerLastname;
    }
    /**
     * Set paypalPayerLastname value
     * @param string $paypalPayerLastname
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPaypalPayerLastname(?string $paypalPayerLastname = null): self
    {
        // validation for constraint: string
        if (!is_null($paypalPayerLastname) && !is_string($paypalPayerLastname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paypalPayerLastname, true), gettype($paypalPayerLastname)), __LINE__);
        }
        $this->paypalPayerLastname = $paypalPayerLastname;
        
        return $this;
    }
    /**
     * Get paypalReason value
     * @return string|null
     */
    public function getPaypalReason(): ?string
    {
        return $this->paypalReason;
    }
    /**
     * Set paypalReason value
     * @param string $paypalReason
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPaypalReason(?string $paypalReason = null): self
    {
        // validation for constraint: string
        if (!is_null($paypalReason) && !is_string($paypalReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paypalReason, true), gettype($paypalReason)), __LINE__);
        }
        $this->paypalReason = $paypalReason;
        
        return $this;
    }
    /**
     * Get paypalStatus value
     * @return string|null
     */
    public function getPaypalStatus(): ?string
    {
        return $this->paypalStatus;
    }
    /**
     * Set paypalStatus value
     * @param string $paypalStatus
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPaypalStatus(?string $paypalStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($paypalStatus) && !is_string($paypalStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paypalStatus, true), gettype($paypalStatus)), __LINE__);
        }
        $this->paypalStatus = $paypalStatus;
        
        return $this;
    }
    /**
     * Get previousStatus value
     * @return int|null
     */
    public function getPreviousStatus(): ?int
    {
        return $this->previousStatus;
    }
    /**
     * Set previousStatus value
     * @param int $previousStatus
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setPreviousStatus(?int $previousStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($previousStatus) && !(is_int($previousStatus) || ctype_digit($previousStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($previousStatus, true), gettype($previousStatus)), __LINE__);
        }
        $this->previousStatus = $previousStatus;
        
        return $this;
    }
    /**
     * Get transactionDate value
     * @return string|null
     */
    public function getTransactionDate(): ?string
    {
        return $this->transactionDate;
    }
    /**
     * Set transactionDate value
     * @param string $transactionDate
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setTransactionDate(?string $transactionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->transactionDate = $transactionDate;
        
        return $this;
    }
    /**
     * Get transactionType value
     * @return int|null
     */
    public function getTransactionType(): ?int
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param int $transactionType
     * @return \Pggns\MidocoApi\Order\StructType\PaypalTransactionDTO
     */
    public function setTransactionType(?int $transactionType = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionType) && !(is_int($transactionType) || ctype_digit($transactionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->transactionType = $transactionType;
        
        return $this;
    }
}
