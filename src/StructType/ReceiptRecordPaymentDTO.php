<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptRecordPaymentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReceiptRecordPaymentDTO extends AbstractStructBase
{
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The paidAmountLocalCurrency
     * @var float|null
     */
    protected ?float $paidAmountLocalCurrency = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The receiptRecordId
     * @var int|null
     */
    protected ?int $receiptRecordId = null;
    /**
     * Constructor method for ReceiptRecordPaymentDTO
     * @uses ReceiptRecordPaymentDTO::setCurrency()
     * @uses ReceiptRecordPaymentDTO::setPaidAmount()
     * @uses ReceiptRecordPaymentDTO::setPaidAmountLocalCurrency()
     * @uses ReceiptRecordPaymentDTO::setPaymentType()
     * @uses ReceiptRecordPaymentDTO::setReceiptRecordId()
     * @param string $currency
     * @param float $paidAmount
     * @param float $paidAmountLocalCurrency
     * @param string $paymentType
     * @param int $receiptRecordId
     */
    public function __construct(?string $currency = null, ?float $paidAmount = null, ?float $paidAmountLocalCurrency = null, ?string $paymentType = null, ?int $receiptRecordId = null)
    {
        $this
            ->setCurrency($currency)
            ->setPaidAmount($paidAmount)
            ->setPaidAmountLocalCurrency($paidAmountLocalCurrency)
            ->setPaymentType($paymentType)
            ->setReceiptRecordId($receiptRecordId);
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordPaymentDTO
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
     * Get paidAmountLocalCurrency value
     * @return float|null
     */
    public function getPaidAmountLocalCurrency(): ?float
    {
        return $this->paidAmountLocalCurrency;
    }
    /**
     * Set paidAmountLocalCurrency value
     * @param float $paidAmountLocalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordPaymentDTO
     */
    public function setPaidAmountLocalCurrency(?float $paidAmountLocalCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($paidAmountLocalCurrency) && !(is_float($paidAmountLocalCurrency) || is_numeric($paidAmountLocalCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidAmountLocalCurrency, true), gettype($paidAmountLocalCurrency)), __LINE__);
        }
        $this->paidAmountLocalCurrency = $paidAmountLocalCurrency;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordPaymentDTO
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get receiptRecordId value
     * @return int|null
     */
    public function getReceiptRecordId(): ?int
    {
        return $this->receiptRecordId;
    }
    /**
     * Set receiptRecordId value
     * @param int $receiptRecordId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordPaymentDTO
     */
    public function setReceiptRecordId(?int $receiptRecordId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptRecordId) && !(is_int($receiptRecordId) || ctype_digit($receiptRecordId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptRecordId, true), gettype($receiptRecordId)), __LINE__);
        }
        $this->receiptRecordId = $receiptRecordId;
        
        return $this;
    }
}
