<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentProviderEntryType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentProviderEntryType extends EntryDTO
{
    /**
     * The paymentProvider
     * @var string|null
     */
    protected ?string $paymentProvider = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The settlementInvoiceNo
     * @var string|null
     */
    protected ?string $settlementInvoiceNo = null;
    /**
     * The settlementAmount
     * @var float|null
     */
    protected ?float $settlementAmount = null;
    /**
     * The settlementBooked
     * @var bool|null
     */
    protected ?bool $settlementBooked = null;
    /**
     * The settlementCustomerField
     * @var string|null
     */
    protected ?string $settlementCustomerField = null;
    /**
     * The entryCreationDate
     * @var string|null
     */
    protected ?string $entryCreationDate = null;
    /**
     * The settlementDifference
     * @var float|null
     */
    protected ?float $settlementDifference = null;
    /**
     * Constructor method for PaymentProviderEntryType
     * @uses PaymentProviderEntryType::setPaymentProvider()
     * @uses PaymentProviderEntryType::setSettlementId()
     * @uses PaymentProviderEntryType::setSettlementInvoiceNo()
     * @uses PaymentProviderEntryType::setSettlementAmount()
     * @uses PaymentProviderEntryType::setSettlementBooked()
     * @uses PaymentProviderEntryType::setSettlementCustomerField()
     * @uses PaymentProviderEntryType::setEntryCreationDate()
     * @uses PaymentProviderEntryType::setSettlementDifference()
     * @param string $paymentProvider
     * @param int $settlementId
     * @param string $settlementInvoiceNo
     * @param float $settlementAmount
     * @param bool $settlementBooked
     * @param string $settlementCustomerField
     * @param string $entryCreationDate
     * @param float $settlementDifference
     */
    public function __construct(?string $paymentProvider = null, ?int $settlementId = null, ?string $settlementInvoiceNo = null, ?float $settlementAmount = null, ?bool $settlementBooked = null, ?string $settlementCustomerField = null, ?string $entryCreationDate = null, ?float $settlementDifference = null)
    {
        $this
            ->setPaymentProvider($paymentProvider)
            ->setSettlementId($settlementId)
            ->setSettlementInvoiceNo($settlementInvoiceNo)
            ->setSettlementAmount($settlementAmount)
            ->setSettlementBooked($settlementBooked)
            ->setSettlementCustomerField($settlementCustomerField)
            ->setEntryCreationDate($entryCreationDate)
            ->setSettlementDifference($settlementDifference);
    }
    /**
     * Get paymentProvider value
     * @return string|null
     */
    public function getPaymentProvider(): ?string
    {
        return $this->paymentProvider;
    }
    /**
     * Set paymentProvider value
     * @param string $paymentProvider
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType
     */
    public function setPaymentProvider(?string $paymentProvider = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentProvider) && !is_string($paymentProvider)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentProvider, true), gettype($paymentProvider)), __LINE__);
        }
        $this->paymentProvider = $paymentProvider;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType
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
     * Get settlementInvoiceNo value
     * @return string|null
     */
    public function getSettlementInvoiceNo(): ?string
    {
        return $this->settlementInvoiceNo;
    }
    /**
     * Set settlementInvoiceNo value
     * @param string $settlementInvoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType
     */
    public function setSettlementInvoiceNo(?string $settlementInvoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementInvoiceNo) && !is_string($settlementInvoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementInvoiceNo, true), gettype($settlementInvoiceNo)), __LINE__);
        }
        $this->settlementInvoiceNo = $settlementInvoiceNo;
        
        return $this;
    }
    /**
     * Get settlementAmount value
     * @return float|null
     */
    public function getSettlementAmount(): ?float
    {
        return $this->settlementAmount;
    }
    /**
     * Set settlementAmount value
     * @param float $settlementAmount
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType
     */
    public function setSettlementAmount(?float $settlementAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($settlementAmount) && !(is_float($settlementAmount) || is_numeric($settlementAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($settlementAmount, true), gettype($settlementAmount)), __LINE__);
        }
        $this->settlementAmount = $settlementAmount;
        
        return $this;
    }
    /**
     * Get settlementBooked value
     * @return bool|null
     */
    public function getSettlementBooked(): ?bool
    {
        return $this->settlementBooked;
    }
    /**
     * Set settlementBooked value
     * @param bool $settlementBooked
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType
     */
    public function setSettlementBooked(?bool $settlementBooked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($settlementBooked) && !is_bool($settlementBooked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($settlementBooked, true), gettype($settlementBooked)), __LINE__);
        }
        $this->settlementBooked = $settlementBooked;
        
        return $this;
    }
    /**
     * Get settlementCustomerField value
     * @return string|null
     */
    public function getSettlementCustomerField(): ?string
    {
        return $this->settlementCustomerField;
    }
    /**
     * Set settlementCustomerField value
     * @param string $settlementCustomerField
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType
     */
    public function setSettlementCustomerField(?string $settlementCustomerField = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementCustomerField) && !is_string($settlementCustomerField)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementCustomerField, true), gettype($settlementCustomerField)), __LINE__);
        }
        $this->settlementCustomerField = $settlementCustomerField;
        
        return $this;
    }
    /**
     * Get entryCreationDate value
     * @return string|null
     */
    public function getEntryCreationDate(): ?string
    {
        return $this->entryCreationDate;
    }
    /**
     * Set entryCreationDate value
     * @param string $entryCreationDate
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType
     */
    public function setEntryCreationDate(?string $entryCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($entryCreationDate) && !is_string($entryCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryCreationDate, true), gettype($entryCreationDate)), __LINE__);
        }
        $this->entryCreationDate = $entryCreationDate;
        
        return $this;
    }
    /**
     * Get settlementDifference value
     * @return float|null
     */
    public function getSettlementDifference(): ?float
    {
        return $this->settlementDifference;
    }
    /**
     * Set settlementDifference value
     * @param float $settlementDifference
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType
     */
    public function setSettlementDifference(?float $settlementDifference = null): self
    {
        // validation for constraint: float
        if (!is_null($settlementDifference) && !(is_float($settlementDifference) || is_numeric($settlementDifference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($settlementDifference, true), gettype($settlementDifference)), __LINE__);
        }
        $this->settlementDifference = $settlementDifference;
        
        return $this;
    }
}
