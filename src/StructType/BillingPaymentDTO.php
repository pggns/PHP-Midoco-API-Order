<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPaymentDTO StructType
 * @subpackage Structs
 */
class BillingPaymentDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The ignoreUnderOverPayment
     * @var bool|null
     */
    protected ?bool $ignoreUnderOverPayment = null;
    /**
     * The paymentDate
     * @var string|null
     */
    protected ?string $paymentDate = null;
    /**
     * The paymentId
     * @var int|null
     */
    protected ?int $paymentId = null;
    /**
     * Constructor method for BillingPaymentDTO
     * @uses BillingPaymentDTO::setAmount()
     * @uses BillingPaymentDTO::setDocumentId()
     * @uses BillingPaymentDTO::setIgnoreUnderOverPayment()
     * @uses BillingPaymentDTO::setPaymentDate()
     * @uses BillingPaymentDTO::setPaymentId()
     * @param float $amount
     * @param int $documentId
     * @param bool $ignoreUnderOverPayment
     * @param string $paymentDate
     * @param int $paymentId
     */
    public function __construct(?float $amount = null, ?int $documentId = null, ?bool $ignoreUnderOverPayment = null, ?string $paymentDate = null, ?int $paymentId = null)
    {
        $this
            ->setAmount($amount)
            ->setDocumentId($documentId)
            ->setIgnoreUnderOverPayment($ignoreUnderOverPayment)
            ->setPaymentDate($paymentDate)
            ->setPaymentId($paymentId);
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO
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
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get ignoreUnderOverPayment value
     * @return bool|null
     */
    public function getIgnoreUnderOverPayment(): ?bool
    {
        return $this->ignoreUnderOverPayment;
    }
    /**
     * Set ignoreUnderOverPayment value
     * @param bool $ignoreUnderOverPayment
     * @return \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO
     */
    public function setIgnoreUnderOverPayment(?bool $ignoreUnderOverPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreUnderOverPayment) && !is_bool($ignoreUnderOverPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreUnderOverPayment, true), gettype($ignoreUnderOverPayment)), __LINE__);
        }
        $this->ignoreUnderOverPayment = $ignoreUnderOverPayment;
        
        return $this;
    }
    /**
     * Get paymentDate value
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }
    /**
     * Set paymentDate value
     * @param string $paymentDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO
     */
    public function setPaymentDate(?string $paymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDate, true), gettype($paymentDate)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPaymentDTO
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
}
