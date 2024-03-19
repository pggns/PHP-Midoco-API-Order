<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentProviderSettlementDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentProviderSettlementDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The invoiceNo
     * @var string|null
     */
    protected ?string $invoiceNo = null;
    /**
     * The paymentProviderId
     * @var string|null
     */
    protected ?string $paymentProviderId = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * Constructor method for PaymentProviderSettlementDTO
     * @uses PaymentProviderSettlementDTO::setCreationDate()
     * @uses PaymentProviderSettlementDTO::setFileName()
     * @uses PaymentProviderSettlementDTO::setInvoiceDate()
     * @uses PaymentProviderSettlementDTO::setInvoiceNo()
     * @uses PaymentProviderSettlementDTO::setPaymentProviderId()
     * @uses PaymentProviderSettlementDTO::setSettlementId()
     * @uses PaymentProviderSettlementDTO::setTotalAmount()
     * @param string $creationDate
     * @param string $fileName
     * @param string $invoiceDate
     * @param string $invoiceNo
     * @param string $paymentProviderId
     * @param int $settlementId
     * @param float $totalAmount
     */
    public function __construct(?string $creationDate = null, ?string $fileName = null, ?string $invoiceDate = null, ?string $invoiceNo = null, ?string $paymentProviderId = null, ?int $settlementId = null, ?float $totalAmount = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setFileName($fileName)
            ->setInvoiceDate($invoiceDate)
            ->setInvoiceNo($invoiceNo)
            ->setPaymentProviderId($paymentProviderId)
            ->setSettlementId($settlementId)
            ->setTotalAmount($totalAmount);
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlementDTO
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
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlementDTO
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlementDTO
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
     * Get invoiceNo value
     * @return string|null
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param string $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlementDTO
     */
    public function setInvoiceNo(?string $invoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get paymentProviderId value
     * @return string|null
     */
    public function getPaymentProviderId(): ?string
    {
        return $this->paymentProviderId;
    }
    /**
     * Set paymentProviderId value
     * @param string $paymentProviderId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlementDTO
     */
    public function setPaymentProviderId(?string $paymentProviderId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentProviderId) && !is_string($paymentProviderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentProviderId, true), gettype($paymentProviderId)), __LINE__);
        }
        $this->paymentProviderId = $paymentProviderId;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlementDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderSettlementDTO
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
}
