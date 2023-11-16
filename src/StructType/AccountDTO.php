<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountDTO StructType
 * @subpackage Structs
 */
class AccountDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The accountType
     * @var string|null
     */
    protected ?string $accountType = null;
    /**
     * The accrualAccount
     * @var string|null
     */
    protected ?string $accrualAccount = null;
    /**
     * The applyForeignCurrencyToExport
     * @var bool|null
     */
    protected ?bool $applyForeignCurrencyToExport = null;
    /**
     * The automaticVat
     * @var bool|null
     */
    protected ?bool $automaticVat = null;
    /**
     * The balanceSheetPosition
     * @var string|null
     */
    protected ?string $balanceSheetPosition = null;
    /**
     * The clearingAccount
     * @var string|null
     */
    protected ?string $clearingAccount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The currencyLookupMethod
     * @var int|null
     */
    protected ?int $currencyLookupMethod = null;
    /**
     * The depositAccount
     * @var string|null
     */
    protected ?string $depositAccount = null;
    /**
     * The isCommissionAccount
     * @var bool|null
     */
    protected ?bool $isCommissionAccount = null;
    /**
     * The isLocked
     * @var bool|null
     */
    protected ?bool $isLocked = null;
    /**
     * The isManualUsage
     * @var bool|null
     */
    protected ?bool $isManualUsage = null;
    /**
     * The isPaymentAccount
     * @var bool|null
     */
    protected ?bool $isPaymentAccount = null;
    /**
     * The isProtectedAccount
     * @var bool|null
     */
    protected ?bool $isProtectedAccount = null;
    /**
     * The lastUsedDate
     * @var string|null
     */
    protected ?string $lastUsedDate = null;
    /**
     * The lockDate
     * @var string|null
     */
    protected ?string $lockDate = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The preventObBooking
     * @var bool|null
     */
    protected ?bool $preventObBooking = null;
    /**
     * The summaryAccount
     * @var string|null
     */
    protected ?string $summaryAccount = null;
    /**
     * The useAsCashAccount
     * @var bool|null
     */
    protected ?bool $useAsCashAccount = null;
    /**
     * The useAsReverseChargeAccount
     * @var bool|null
     */
    protected ?bool $useAsReverseChargeAccount = null;
    /**
     * The useCostCentre
     * @var bool|null
     */
    protected ?bool $useCostCentre = null;
    /**
     * The useInItReceipt
     * @var bool|null
     */
    protected ?bool $useInItReceipt = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * Constructor method for AccountDTO
     * @uses AccountDTO::setAccountId()
     * @uses AccountDTO::setAccountType()
     * @uses AccountDTO::setAccrualAccount()
     * @uses AccountDTO::setApplyForeignCurrencyToExport()
     * @uses AccountDTO::setAutomaticVat()
     * @uses AccountDTO::setBalanceSheetPosition()
     * @uses AccountDTO::setClearingAccount()
     * @uses AccountDTO::setCurrency()
     * @uses AccountDTO::setCurrencyLookupMethod()
     * @uses AccountDTO::setDepositAccount()
     * @uses AccountDTO::setIsCommissionAccount()
     * @uses AccountDTO::setIsLocked()
     * @uses AccountDTO::setIsManualUsage()
     * @uses AccountDTO::setIsPaymentAccount()
     * @uses AccountDTO::setIsProtectedAccount()
     * @uses AccountDTO::setLastUsedDate()
     * @uses AccountDTO::setLockDate()
     * @uses AccountDTO::setName()
     * @uses AccountDTO::setPlanId()
     * @uses AccountDTO::setPreventObBooking()
     * @uses AccountDTO::setSummaryAccount()
     * @uses AccountDTO::setUseAsCashAccount()
     * @uses AccountDTO::setUseAsReverseChargeAccount()
     * @uses AccountDTO::setUseCostCentre()
     * @uses AccountDTO::setUseInItReceipt()
     * @uses AccountDTO::setVatCode()
     * @param string $accountId
     * @param string $accountType
     * @param string $accrualAccount
     * @param bool $applyForeignCurrencyToExport
     * @param bool $automaticVat
     * @param string $balanceSheetPosition
     * @param string $clearingAccount
     * @param string $currency
     * @param int $currencyLookupMethod
     * @param string $depositAccount
     * @param bool $isCommissionAccount
     * @param bool $isLocked
     * @param bool $isManualUsage
     * @param bool $isPaymentAccount
     * @param bool $isProtectedAccount
     * @param string $lastUsedDate
     * @param string $lockDate
     * @param string $name
     * @param string $planId
     * @param bool $preventObBooking
     * @param string $summaryAccount
     * @param bool $useAsCashAccount
     * @param bool $useAsReverseChargeAccount
     * @param bool $useCostCentre
     * @param bool $useInItReceipt
     * @param string $vatCode
     */
    public function __construct(?string $accountId = null, ?string $accountType = null, ?string $accrualAccount = null, ?bool $applyForeignCurrencyToExport = null, ?bool $automaticVat = null, ?string $balanceSheetPosition = null, ?string $clearingAccount = null, ?string $currency = null, ?int $currencyLookupMethod = null, ?string $depositAccount = null, ?bool $isCommissionAccount = null, ?bool $isLocked = null, ?bool $isManualUsage = null, ?bool $isPaymentAccount = null, ?bool $isProtectedAccount = null, ?string $lastUsedDate = null, ?string $lockDate = null, ?string $name = null, ?string $planId = null, ?bool $preventObBooking = null, ?string $summaryAccount = null, ?bool $useAsCashAccount = null, ?bool $useAsReverseChargeAccount = null, ?bool $useCostCentre = null, ?bool $useInItReceipt = null, ?string $vatCode = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAccountType($accountType)
            ->setAccrualAccount($accrualAccount)
            ->setApplyForeignCurrencyToExport($applyForeignCurrencyToExport)
            ->setAutomaticVat($automaticVat)
            ->setBalanceSheetPosition($balanceSheetPosition)
            ->setClearingAccount($clearingAccount)
            ->setCurrency($currency)
            ->setCurrencyLookupMethod($currencyLookupMethod)
            ->setDepositAccount($depositAccount)
            ->setIsCommissionAccount($isCommissionAccount)
            ->setIsLocked($isLocked)
            ->setIsManualUsage($isManualUsage)
            ->setIsPaymentAccount($isPaymentAccount)
            ->setIsProtectedAccount($isProtectedAccount)
            ->setLastUsedDate($lastUsedDate)
            ->setLockDate($lockDate)
            ->setName($name)
            ->setPlanId($planId)
            ->setPreventObBooking($preventObBooking)
            ->setSummaryAccount($summaryAccount)
            ->setUseAsCashAccount($useAsCashAccount)
            ->setUseAsReverseChargeAccount($useAsReverseChargeAccount)
            ->setUseCostCentre($useCostCentre)
            ->setUseInItReceipt($useInItReceipt)
            ->setVatCode($vatCode);
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
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
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
     * Get accrualAccount value
     * @return string|null
     */
    public function getAccrualAccount(): ?string
    {
        return $this->accrualAccount;
    }
    /**
     * Set accrualAccount value
     * @param string $accrualAccount
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setAccrualAccount(?string $accrualAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($accrualAccount) && !is_string($accrualAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accrualAccount, true), gettype($accrualAccount)), __LINE__);
        }
        $this->accrualAccount = $accrualAccount;
        
        return $this;
    }
    /**
     * Get applyForeignCurrencyToExport value
     * @return bool|null
     */
    public function getApplyForeignCurrencyToExport(): ?bool
    {
        return $this->applyForeignCurrencyToExport;
    }
    /**
     * Set applyForeignCurrencyToExport value
     * @param bool $applyForeignCurrencyToExport
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setApplyForeignCurrencyToExport(?bool $applyForeignCurrencyToExport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($applyForeignCurrencyToExport) && !is_bool($applyForeignCurrencyToExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($applyForeignCurrencyToExport, true), gettype($applyForeignCurrencyToExport)), __LINE__);
        }
        $this->applyForeignCurrencyToExport = $applyForeignCurrencyToExport;
        
        return $this;
    }
    /**
     * Get automaticVat value
     * @return bool|null
     */
    public function getAutomaticVat(): ?bool
    {
        return $this->automaticVat;
    }
    /**
     * Set automaticVat value
     * @param bool $automaticVat
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setAutomaticVat(?bool $automaticVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticVat) && !is_bool($automaticVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticVat, true), gettype($automaticVat)), __LINE__);
        }
        $this->automaticVat = $automaticVat;
        
        return $this;
    }
    /**
     * Get balanceSheetPosition value
     * @return string|null
     */
    public function getBalanceSheetPosition(): ?string
    {
        return $this->balanceSheetPosition;
    }
    /**
     * Set balanceSheetPosition value
     * @param string $balanceSheetPosition
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setBalanceSheetPosition(?string $balanceSheetPosition = null): self
    {
        // validation for constraint: string
        if (!is_null($balanceSheetPosition) && !is_string($balanceSheetPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($balanceSheetPosition, true), gettype($balanceSheetPosition)), __LINE__);
        }
        $this->balanceSheetPosition = $balanceSheetPosition;
        
        return $this;
    }
    /**
     * Get clearingAccount value
     * @return string|null
     */
    public function getClearingAccount(): ?string
    {
        return $this->clearingAccount;
    }
    /**
     * Set clearingAccount value
     * @param string $clearingAccount
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setClearingAccount(?string $clearingAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($clearingAccount) && !is_string($clearingAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clearingAccount, true), gettype($clearingAccount)), __LINE__);
        }
        $this->clearingAccount = $clearingAccount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
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
     * Get currencyLookupMethod value
     * @return int|null
     */
    public function getCurrencyLookupMethod(): ?int
    {
        return $this->currencyLookupMethod;
    }
    /**
     * Set currencyLookupMethod value
     * @param int $currencyLookupMethod
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setCurrencyLookupMethod(?int $currencyLookupMethod = null): self
    {
        // validation for constraint: int
        if (!is_null($currencyLookupMethod) && !(is_int($currencyLookupMethod) || ctype_digit($currencyLookupMethod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currencyLookupMethod, true), gettype($currencyLookupMethod)), __LINE__);
        }
        $this->currencyLookupMethod = $currencyLookupMethod;
        
        return $this;
    }
    /**
     * Get depositAccount value
     * @return string|null
     */
    public function getDepositAccount(): ?string
    {
        return $this->depositAccount;
    }
    /**
     * Set depositAccount value
     * @param string $depositAccount
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setDepositAccount(?string $depositAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($depositAccount) && !is_string($depositAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositAccount, true), gettype($depositAccount)), __LINE__);
        }
        $this->depositAccount = $depositAccount;
        
        return $this;
    }
    /**
     * Get isCommissionAccount value
     * @return bool|null
     */
    public function getIsCommissionAccount(): ?bool
    {
        return $this->isCommissionAccount;
    }
    /**
     * Set isCommissionAccount value
     * @param bool $isCommissionAccount
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setIsCommissionAccount(?bool $isCommissionAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCommissionAccount) && !is_bool($isCommissionAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCommissionAccount, true), gettype($isCommissionAccount)), __LINE__);
        }
        $this->isCommissionAccount = $isCommissionAccount;
        
        return $this;
    }
    /**
     * Get isLocked value
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }
    /**
     * Set isLocked value
     * @param bool $isLocked
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setIsLocked(?bool $isLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLocked) && !is_bool($isLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLocked, true), gettype($isLocked)), __LINE__);
        }
        $this->isLocked = $isLocked;
        
        return $this;
    }
    /**
     * Get isManualUsage value
     * @return bool|null
     */
    public function getIsManualUsage(): ?bool
    {
        return $this->isManualUsage;
    }
    /**
     * Set isManualUsage value
     * @param bool $isManualUsage
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setIsManualUsage(?bool $isManualUsage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManualUsage) && !is_bool($isManualUsage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManualUsage, true), gettype($isManualUsage)), __LINE__);
        }
        $this->isManualUsage = $isManualUsage;
        
        return $this;
    }
    /**
     * Get isPaymentAccount value
     * @return bool|null
     */
    public function getIsPaymentAccount(): ?bool
    {
        return $this->isPaymentAccount;
    }
    /**
     * Set isPaymentAccount value
     * @param bool $isPaymentAccount
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setIsPaymentAccount(?bool $isPaymentAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPaymentAccount) && !is_bool($isPaymentAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPaymentAccount, true), gettype($isPaymentAccount)), __LINE__);
        }
        $this->isPaymentAccount = $isPaymentAccount;
        
        return $this;
    }
    /**
     * Get isProtectedAccount value
     * @return bool|null
     */
    public function getIsProtectedAccount(): ?bool
    {
        return $this->isProtectedAccount;
    }
    /**
     * Set isProtectedAccount value
     * @param bool $isProtectedAccount
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setIsProtectedAccount(?bool $isProtectedAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProtectedAccount) && !is_bool($isProtectedAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProtectedAccount, true), gettype($isProtectedAccount)), __LINE__);
        }
        $this->isProtectedAccount = $isProtectedAccount;
        
        return $this;
    }
    /**
     * Get lastUsedDate value
     * @return string|null
     */
    public function getLastUsedDate(): ?string
    {
        return $this->lastUsedDate;
    }
    /**
     * Set lastUsedDate value
     * @param string $lastUsedDate
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setLastUsedDate(?string $lastUsedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUsedDate) && !is_string($lastUsedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUsedDate, true), gettype($lastUsedDate)), __LINE__);
        }
        $this->lastUsedDate = $lastUsedDate;
        
        return $this;
    }
    /**
     * Get lockDate value
     * @return string|null
     */
    public function getLockDate(): ?string
    {
        return $this->lockDate;
    }
    /**
     * Set lockDate value
     * @param string $lockDate
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setLockDate(?string $lockDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lockDate) && !is_string($lockDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockDate, true), gettype($lockDate)), __LINE__);
        }
        $this->lockDate = $lockDate;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get preventObBooking value
     * @return bool|null
     */
    public function getPreventObBooking(): ?bool
    {
        return $this->preventObBooking;
    }
    /**
     * Set preventObBooking value
     * @param bool $preventObBooking
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setPreventObBooking(?bool $preventObBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventObBooking) && !is_bool($preventObBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventObBooking, true), gettype($preventObBooking)), __LINE__);
        }
        $this->preventObBooking = $preventObBooking;
        
        return $this;
    }
    /**
     * Get summaryAccount value
     * @return string|null
     */
    public function getSummaryAccount(): ?string
    {
        return $this->summaryAccount;
    }
    /**
     * Set summaryAccount value
     * @param string $summaryAccount
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setSummaryAccount(?string $summaryAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($summaryAccount) && !is_string($summaryAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($summaryAccount, true), gettype($summaryAccount)), __LINE__);
        }
        $this->summaryAccount = $summaryAccount;
        
        return $this;
    }
    /**
     * Get useAsCashAccount value
     * @return bool|null
     */
    public function getUseAsCashAccount(): ?bool
    {
        return $this->useAsCashAccount;
    }
    /**
     * Set useAsCashAccount value
     * @param bool $useAsCashAccount
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setUseAsCashAccount(?bool $useAsCashAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useAsCashAccount) && !is_bool($useAsCashAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useAsCashAccount, true), gettype($useAsCashAccount)), __LINE__);
        }
        $this->useAsCashAccount = $useAsCashAccount;
        
        return $this;
    }
    /**
     * Get useAsReverseChargeAccount value
     * @return bool|null
     */
    public function getUseAsReverseChargeAccount(): ?bool
    {
        return $this->useAsReverseChargeAccount;
    }
    /**
     * Set useAsReverseChargeAccount value
     * @param bool $useAsReverseChargeAccount
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setUseAsReverseChargeAccount(?bool $useAsReverseChargeAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useAsReverseChargeAccount) && !is_bool($useAsReverseChargeAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useAsReverseChargeAccount, true), gettype($useAsReverseChargeAccount)), __LINE__);
        }
        $this->useAsReverseChargeAccount = $useAsReverseChargeAccount;
        
        return $this;
    }
    /**
     * Get useCostCentre value
     * @return bool|null
     */
    public function getUseCostCentre(): ?bool
    {
        return $this->useCostCentre;
    }
    /**
     * Set useCostCentre value
     * @param bool $useCostCentre
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setUseCostCentre(?bool $useCostCentre = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useCostCentre) && !is_bool($useCostCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useCostCentre, true), gettype($useCostCentre)), __LINE__);
        }
        $this->useCostCentre = $useCostCentre;
        
        return $this;
    }
    /**
     * Get useInItReceipt value
     * @return bool|null
     */
    public function getUseInItReceipt(): ?bool
    {
        return $this->useInItReceipt;
    }
    /**
     * Set useInItReceipt value
     * @param bool $useInItReceipt
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setUseInItReceipt(?bool $useInItReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useInItReceipt) && !is_bool($useInItReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useInItReceipt, true), gettype($useInItReceipt)), __LINE__);
        }
        $this->useInItReceipt = $useInItReceipt;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\AccountDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
}
