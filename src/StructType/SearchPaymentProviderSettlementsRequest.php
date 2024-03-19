<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPaymentProviderSettlementsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchPaymentProviderSettlementsRequest extends AbstractStructBase
{
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The settlementDateFrom
     * @var string|null
     */
    protected ?string $settlementDateFrom = null;
    /**
     * The settlementDateTo
     * @var string|null
     */
    protected ?string $settlementDateTo = null;
    /**
     * The amountFrom
     * @var float|null
     */
    protected ?float $amountFrom = null;
    /**
     * The amountTo
     * @var float|null
     */
    protected ?float $amountTo = null;
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
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * The checked
     * @var bool|null
     */
    protected ?bool $checked = null;
    /**
     * Constructor method for SearchPaymentProviderSettlementsRequest
     * @uses SearchPaymentProviderSettlementsRequest::setCreationDateFrom()
     * @uses SearchPaymentProviderSettlementsRequest::setCreationDateTo()
     * @uses SearchPaymentProviderSettlementsRequest::setSettlementDateFrom()
     * @uses SearchPaymentProviderSettlementsRequest::setSettlementDateTo()
     * @uses SearchPaymentProviderSettlementsRequest::setAmountFrom()
     * @uses SearchPaymentProviderSettlementsRequest::setAmountTo()
     * @uses SearchPaymentProviderSettlementsRequest::setInvoiceNo()
     * @uses SearchPaymentProviderSettlementsRequest::setPaymentProviderId()
     * @uses SearchPaymentProviderSettlementsRequest::setBooked()
     * @uses SearchPaymentProviderSettlementsRequest::setChecked()
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param string $settlementDateFrom
     * @param string $settlementDateTo
     * @param float $amountFrom
     * @param float $amountTo
     * @param string $invoiceNo
     * @param string $paymentProviderId
     * @param bool $booked
     * @param bool $checked
     */
    public function __construct(?string $creationDateFrom = null, ?string $creationDateTo = null, ?string $settlementDateFrom = null, ?string $settlementDateTo = null, ?float $amountFrom = null, ?float $amountTo = null, ?string $invoiceNo = null, ?string $paymentProviderId = null, ?bool $booked = null, ?bool $checked = null)
    {
        $this
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setSettlementDateFrom($settlementDateFrom)
            ->setSettlementDateTo($settlementDateTo)
            ->setAmountFrom($amountFrom)
            ->setAmountTo($amountTo)
            ->setInvoiceNo($invoiceNo)
            ->setPaymentProviderId($paymentProviderId)
            ->setBooked($booked)
            ->setChecked($checked);
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get settlementDateFrom value
     * @return string|null
     */
    public function getSettlementDateFrom(): ?string
    {
        return $this->settlementDateFrom;
    }
    /**
     * Set settlementDateFrom value
     * @param string $settlementDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
     */
    public function setSettlementDateFrom(?string $settlementDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDateFrom) && !is_string($settlementDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDateFrom, true), gettype($settlementDateFrom)), __LINE__);
        }
        $this->settlementDateFrom = $settlementDateFrom;
        
        return $this;
    }
    /**
     * Get settlementDateTo value
     * @return string|null
     */
    public function getSettlementDateTo(): ?string
    {
        return $this->settlementDateTo;
    }
    /**
     * Set settlementDateTo value
     * @param string $settlementDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
     */
    public function setSettlementDateTo(?string $settlementDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDateTo) && !is_string($settlementDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDateTo, true), gettype($settlementDateTo)), __LINE__);
        }
        $this->settlementDateTo = $settlementDateTo;
        
        return $this;
    }
    /**
     * Get amountFrom value
     * @return float|null
     */
    public function getAmountFrom(): ?float
    {
        return $this->amountFrom;
    }
    /**
     * Set amountFrom value
     * @param float $amountFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
     */
    public function setAmountFrom(?float $amountFrom = null): self
    {
        // validation for constraint: float
        if (!is_null($amountFrom) && !(is_float($amountFrom) || is_numeric($amountFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountFrom, true), gettype($amountFrom)), __LINE__);
        }
        $this->amountFrom = $amountFrom;
        
        return $this;
    }
    /**
     * Get amountTo value
     * @return float|null
     */
    public function getAmountTo(): ?float
    {
        return $this->amountTo;
    }
    /**
     * Set amountTo value
     * @param float $amountTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
     */
    public function setAmountTo(?float $amountTo = null): self
    {
        // validation for constraint: float
        if (!is_null($amountTo) && !(is_float($amountTo) || is_numeric($amountTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountTo, true), gettype($amountTo)), __LINE__);
        }
        $this->amountTo = $amountTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
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
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
        return $this;
    }
    /**
     * Get checked value
     * @return bool|null
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }
    /**
     * Set checked value
     * @param bool $checked
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest
     */
    public function setChecked(?bool $checked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->checked = $checked;
        
        return $this;
    }
}
