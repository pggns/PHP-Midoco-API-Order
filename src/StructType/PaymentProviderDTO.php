<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentProviderDTO StructType
 * @subpackage Structs
 */
class PaymentProviderDTO extends AbstractStructBase
{
    /**
     * The accountFeeNoVat
     * @var string|null
     */
    protected ?string $accountFeeNoVat = null;
    /**
     * The accountFeeVat
     * @var string|null
     */
    protected ?string $accountFeeVat = null;
    /**
     * The costCentreFeeNoVat
     * @var string|null
     */
    protected ?string $costCentreFeeNoVat = null;
    /**
     * The costCentreFeeVat
     * @var string|null
     */
    protected ?string $costCentreFeeVat = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The entryAccount
     * @var string|null
     */
    protected ?string $entryAccount = null;
    /**
     * The formatId
     * @var string|null
     */
    protected ?string $formatId = null;
    /**
     * The ignoreFees
     * @var bool|null
     */
    protected ?bool $ignoreFees = null;
    /**
     * The paymentProviderId
     * @var string|null
     */
    protected ?string $paymentProviderId = null;
    /**
     * Constructor method for PaymentProviderDTO
     * @uses PaymentProviderDTO::setAccountFeeNoVat()
     * @uses PaymentProviderDTO::setAccountFeeVat()
     * @uses PaymentProviderDTO::setCostCentreFeeNoVat()
     * @uses PaymentProviderDTO::setCostCentreFeeVat()
     * @uses PaymentProviderDTO::setDebitorNo()
     * @uses PaymentProviderDTO::setEntryAccount()
     * @uses PaymentProviderDTO::setFormatId()
     * @uses PaymentProviderDTO::setIgnoreFees()
     * @uses PaymentProviderDTO::setPaymentProviderId()
     * @param string $accountFeeNoVat
     * @param string $accountFeeVat
     * @param string $costCentreFeeNoVat
     * @param string $costCentreFeeVat
     * @param string $debitorNo
     * @param string $entryAccount
     * @param string $formatId
     * @param bool $ignoreFees
     * @param string $paymentProviderId
     */
    public function __construct(?string $accountFeeNoVat = null, ?string $accountFeeVat = null, ?string $costCentreFeeNoVat = null, ?string $costCentreFeeVat = null, ?string $debitorNo = null, ?string $entryAccount = null, ?string $formatId = null, ?bool $ignoreFees = null, ?string $paymentProviderId = null)
    {
        $this
            ->setAccountFeeNoVat($accountFeeNoVat)
            ->setAccountFeeVat($accountFeeVat)
            ->setCostCentreFeeNoVat($costCentreFeeNoVat)
            ->setCostCentreFeeVat($costCentreFeeVat)
            ->setDebitorNo($debitorNo)
            ->setEntryAccount($entryAccount)
            ->setFormatId($formatId)
            ->setIgnoreFees($ignoreFees)
            ->setPaymentProviderId($paymentProviderId);
    }
    /**
     * Get accountFeeNoVat value
     * @return string|null
     */
    public function getAccountFeeNoVat(): ?string
    {
        return $this->accountFeeNoVat;
    }
    /**
     * Set accountFeeNoVat value
     * @param string $accountFeeNoVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderDTO
     */
    public function setAccountFeeNoVat(?string $accountFeeNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountFeeNoVat) && !is_string($accountFeeNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountFeeNoVat, true), gettype($accountFeeNoVat)), __LINE__);
        }
        $this->accountFeeNoVat = $accountFeeNoVat;
        
        return $this;
    }
    /**
     * Get accountFeeVat value
     * @return string|null
     */
    public function getAccountFeeVat(): ?string
    {
        return $this->accountFeeVat;
    }
    /**
     * Set accountFeeVat value
     * @param string $accountFeeVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderDTO
     */
    public function setAccountFeeVat(?string $accountFeeVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountFeeVat) && !is_string($accountFeeVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountFeeVat, true), gettype($accountFeeVat)), __LINE__);
        }
        $this->accountFeeVat = $accountFeeVat;
        
        return $this;
    }
    /**
     * Get costCentreFeeNoVat value
     * @return string|null
     */
    public function getCostCentreFeeNoVat(): ?string
    {
        return $this->costCentreFeeNoVat;
    }
    /**
     * Set costCentreFeeNoVat value
     * @param string $costCentreFeeNoVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderDTO
     */
    public function setCostCentreFeeNoVat(?string $costCentreFeeNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentreFeeNoVat) && !is_string($costCentreFeeNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentreFeeNoVat, true), gettype($costCentreFeeNoVat)), __LINE__);
        }
        $this->costCentreFeeNoVat = $costCentreFeeNoVat;
        
        return $this;
    }
    /**
     * Get costCentreFeeVat value
     * @return string|null
     */
    public function getCostCentreFeeVat(): ?string
    {
        return $this->costCentreFeeVat;
    }
    /**
     * Set costCentreFeeVat value
     * @param string $costCentreFeeVat
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderDTO
     */
    public function setCostCentreFeeVat(?string $costCentreFeeVat = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentreFeeVat) && !is_string($costCentreFeeVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentreFeeVat, true), gettype($costCentreFeeVat)), __LINE__);
        }
        $this->costCentreFeeVat = $costCentreFeeVat;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get entryAccount value
     * @return string|null
     */
    public function getEntryAccount(): ?string
    {
        return $this->entryAccount;
    }
    /**
     * Set entryAccount value
     * @param string $entryAccount
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderDTO
     */
    public function setEntryAccount(?string $entryAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($entryAccount) && !is_string($entryAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryAccount, true), gettype($entryAccount)), __LINE__);
        }
        $this->entryAccount = $entryAccount;
        
        return $this;
    }
    /**
     * Get formatId value
     * @return string|null
     */
    public function getFormatId(): ?string
    {
        return $this->formatId;
    }
    /**
     * Set formatId value
     * @param string $formatId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderDTO
     */
    public function setFormatId(?string $formatId = null): self
    {
        // validation for constraint: string
        if (!is_null($formatId) && !is_string($formatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatId, true), gettype($formatId)), __LINE__);
        }
        $this->formatId = $formatId;
        
        return $this;
    }
    /**
     * Get ignoreFees value
     * @return bool|null
     */
    public function getIgnoreFees(): ?bool
    {
        return $this->ignoreFees;
    }
    /**
     * Set ignoreFees value
     * @param bool $ignoreFees
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderDTO
     */
    public function setIgnoreFees(?bool $ignoreFees = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreFees) && !is_bool($ignoreFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreFees, true), gettype($ignoreFees)), __LINE__);
        }
        $this->ignoreFees = $ignoreFees;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderDTO
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
}
