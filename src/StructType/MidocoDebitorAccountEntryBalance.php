<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDebitorAccountEntryBalance StructType
 * @subpackage Structs
 */
class MidocoDebitorAccountEntryBalance extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The openAmount
     * @var float|null
     */
    protected ?float $openAmount = null;
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The accountType
     * @var string|null
     */
    protected ?string $accountType = null;
    /**
     * The originalPaidAmount
     * @var float|null
     */
    protected ?float $originalPaidAmount = null;
    /**
     * The originalInvoicedAmount
     * @var float|null
     */
    protected ?float $originalInvoicedAmount = null;
    /**
     * The originalOpenAmount
     * @var float|null
     */
    protected ?float $originalOpenAmount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The creditLimit
     * @var float|null
     */
    protected ?float $creditLimit = null;
    /**
     * The creditLimitIndicator
     * @var string|null
     */
    protected ?string $creditLimitIndicator = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * Constructor method for MidocoDebitorAccountEntryBalance
     * @uses MidocoDebitorAccountEntryBalance::setAccountId()
     * @uses MidocoDebitorAccountEntryBalance::setPaidAmount()
     * @uses MidocoDebitorAccountEntryBalance::setInvoicedAmount()
     * @uses MidocoDebitorAccountEntryBalance::setOpenAmount()
     * @uses MidocoDebitorAccountEntryBalance::setAccountName()
     * @uses MidocoDebitorAccountEntryBalance::setAccountType()
     * @uses MidocoDebitorAccountEntryBalance::setOriginalPaidAmount()
     * @uses MidocoDebitorAccountEntryBalance::setOriginalInvoicedAmount()
     * @uses MidocoDebitorAccountEntryBalance::setOriginalOpenAmount()
     * @uses MidocoDebitorAccountEntryBalance::setCurrency()
     * @uses MidocoDebitorAccountEntryBalance::setCreditLimit()
     * @uses MidocoDebitorAccountEntryBalance::setCreditLimitIndicator()
     * @uses MidocoDebitorAccountEntryBalance::setOriginalCurrency()
     * @param string $accountId
     * @param float $paidAmount
     * @param float $invoicedAmount
     * @param float $openAmount
     * @param string $accountName
     * @param string $accountType
     * @param float $originalPaidAmount
     * @param float $originalInvoicedAmount
     * @param float $originalOpenAmount
     * @param string $currency
     * @param float $creditLimit
     * @param string $creditLimitIndicator
     * @param string $originalCurrency
     */
    public function __construct(?string $accountId = null, ?float $paidAmount = null, ?float $invoicedAmount = null, ?float $openAmount = null, ?string $accountName = null, ?string $accountType = null, ?float $originalPaidAmount = null, ?float $originalInvoicedAmount = null, ?float $originalOpenAmount = null, ?string $currency = null, ?float $creditLimit = null, ?string $creditLimitIndicator = null, ?string $originalCurrency = null)
    {
        $this
            ->setAccountId($accountId)
            ->setPaidAmount($paidAmount)
            ->setInvoicedAmount($invoicedAmount)
            ->setOpenAmount($openAmount)
            ->setAccountName($accountName)
            ->setAccountType($accountType)
            ->setOriginalPaidAmount($originalPaidAmount)
            ->setOriginalInvoicedAmount($originalInvoicedAmount)
            ->setOriginalOpenAmount($originalOpenAmount)
            ->setCurrency($currency)
            ->setCreditLimit($creditLimit)
            ->setCreditLimitIndicator($creditLimitIndicator)
            ->setOriginalCurrency($originalCurrency);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
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
     * Get openAmount value
     * @return float|null
     */
    public function getOpenAmount(): ?float
    {
        return $this->openAmount;
    }
    /**
     * Set openAmount value
     * @param float $openAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
     */
    public function setOpenAmount(?float $openAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($openAmount) && !(is_float($openAmount) || is_numeric($openAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($openAmount, true), gettype($openAmount)), __LINE__);
        }
        $this->openAmount = $openAmount;
        
        return $this;
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
        return $this;
    }
    /**
     * Get accountType value
     * @return string|null
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param string $accountType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
     */
    public function setAccountType(?string $accountType = null): self
    {
        // validation for constraint: string
        if (!is_null($accountType) && !is_string($accountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
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
     * Get originalOpenAmount value
     * @return float|null
     */
    public function getOriginalOpenAmount(): ?float
    {
        return $this->originalOpenAmount;
    }
    /**
     * Set originalOpenAmount value
     * @param float $originalOpenAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
     */
    public function setOriginalOpenAmount(?float $originalOpenAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalOpenAmount) && !(is_float($originalOpenAmount) || is_numeric($originalOpenAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalOpenAmount, true), gettype($originalOpenAmount)), __LINE__);
        }
        $this->originalOpenAmount = $originalOpenAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
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
     * Get creditLimit value
     * @return float|null
     */
    public function getCreditLimit(): ?float
    {
        return $this->creditLimit;
    }
    /**
     * Set creditLimit value
     * @param float $creditLimit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
     */
    public function setCreditLimit(?float $creditLimit = null): self
    {
        // validation for constraint: float
        if (!is_null($creditLimit) && !(is_float($creditLimit) || is_numeric($creditLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditLimit, true), gettype($creditLimit)), __LINE__);
        }
        $this->creditLimit = $creditLimit;
        
        return $this;
    }
    /**
     * Get creditLimitIndicator value
     * @return string|null
     */
    public function getCreditLimitIndicator(): ?string
    {
        return $this->creditLimitIndicator;
    }
    /**
     * Set creditLimitIndicator value
     * @param string $creditLimitIndicator
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
     */
    public function setCreditLimitIndicator(?string $creditLimitIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($creditLimitIndicator) && !is_string($creditLimitIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditLimitIndicator, true), gettype($creditLimitIndicator)), __LINE__);
        }
        $this->creditLimitIndicator = $creditLimitIndicator;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorAccountEntryBalance
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
}
