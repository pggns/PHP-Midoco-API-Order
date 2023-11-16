<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankAccountDTO StructType
 * @subpackage Structs
 */
class BankAccountDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The bankAccountNo
     * @var string|null
     */
    protected ?string $bankAccountNo = null;
    /**
     * The bankCountry
     * @var string|null
     */
    protected ?string $bankCountry = null;
    /**
     * The bankDescription
     * @var string|null
     */
    protected ?string $bankDescription = null;
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The bankNo
     * @var string|null
     */
    protected ?string $bankNo = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The contactPerson
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerNo
     * @var string|null
     */
    protected ?string $customerNo = null;
    /**
     * The debteeId
     * @var string|null
     */
    protected ?string $debteeId = null;
    /**
     * The department
     * @var string|null
     */
    protected ?string $department = null;
    /**
     * The firmCode
     * @var string|null
     */
    protected ?string $firmCode = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The intermediateAccountCredit
     * @var string|null
     */
    protected ?string $intermediateAccountCredit = null;
    /**
     * The intermediateAccountDebit
     * @var string|null
     */
    protected ?string $intermediateAccountDebit = null;
    /**
     * The nationalBankKey
     * @var string|null
     */
    protected ?string $nationalBankKey = null;
    /**
     * The nationalBankNotification
     * @var bool|null
     */
    protected ?bool $nationalBankNotification = null;
    /**
     * The paymentScheme
     * @var string|null
     */
    protected ?string $paymentScheme = null;
    /**
     * The phone
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The processStatements
     * @var bool|null
     */
    protected ?bool $processStatements = null;
    /**
     * The qrIban
     * @var string|null
     */
    protected ?string $qrIban = null;
    /**
     * The qrInvoiceBankParticipantId
     * @var string|null
     */
    protected ?string $qrInvoiceBankParticipantId = null;
    /**
     * The qrInvoiceParticipantId
     * @var string|null
     */
    protected ?string $qrInvoiceParticipantId = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The swiftBicCode
     * @var string|null
     */
    protected ?string $swiftBicCode = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The use4QrInvoice
     * @var bool|null
     */
    protected ?bool $use4QrInvoice = null;
    /**
     * Constructor method for BankAccountDTO
     * @uses BankAccountDTO::setAccountId()
     * @uses BankAccountDTO::setAccountOwner()
     * @uses BankAccountDTO::setBankAccountNo()
     * @uses BankAccountDTO::setBankCountry()
     * @uses BankAccountDTO::setBankDescription()
     * @uses BankAccountDTO::setBankName()
     * @uses BankAccountDTO::setBankNo()
     * @uses BankAccountDTO::setCity()
     * @uses BankAccountDTO::setContactPerson()
     * @uses BankAccountDTO::setCurrency()
     * @uses BankAccountDTO::setCustomerNo()
     * @uses BankAccountDTO::setDebteeId()
     * @uses BankAccountDTO::setDepartment()
     * @uses BankAccountDTO::setFirmCode()
     * @uses BankAccountDTO::setIban()
     * @uses BankAccountDTO::setIntermediateAccountCredit()
     * @uses BankAccountDTO::setIntermediateAccountDebit()
     * @uses BankAccountDTO::setNationalBankKey()
     * @uses BankAccountDTO::setNationalBankNotification()
     * @uses BankAccountDTO::setPaymentScheme()
     * @uses BankAccountDTO::setPhone()
     * @uses BankAccountDTO::setPlanId()
     * @uses BankAccountDTO::setPostalCode()
     * @uses BankAccountDTO::setProcessStatements()
     * @uses BankAccountDTO::setQrIban()
     * @uses BankAccountDTO::setQrInvoiceBankParticipantId()
     * @uses BankAccountDTO::setQrInvoiceParticipantId()
     * @uses BankAccountDTO::setStreet()
     * @uses BankAccountDTO::setSwiftBicCode()
     * @uses BankAccountDTO::setUnitName()
     * @uses BankAccountDTO::setUse4QrInvoice()
     * @param string $accountId
     * @param string $accountOwner
     * @param string $bankAccountNo
     * @param string $bankCountry
     * @param string $bankDescription
     * @param string $bankName
     * @param string $bankNo
     * @param string $city
     * @param string $contactPerson
     * @param string $currency
     * @param string $customerNo
     * @param string $debteeId
     * @param string $department
     * @param string $firmCode
     * @param string $iban
     * @param string $intermediateAccountCredit
     * @param string $intermediateAccountDebit
     * @param string $nationalBankKey
     * @param bool $nationalBankNotification
     * @param string $paymentScheme
     * @param string $phone
     * @param string $planId
     * @param string $postalCode
     * @param bool $processStatements
     * @param string $qrIban
     * @param string $qrInvoiceBankParticipantId
     * @param string $qrInvoiceParticipantId
     * @param string $street
     * @param string $swiftBicCode
     * @param string $unitName
     * @param bool $use4QrInvoice
     */
    public function __construct(?string $accountId = null, ?string $accountOwner = null, ?string $bankAccountNo = null, ?string $bankCountry = null, ?string $bankDescription = null, ?string $bankName = null, ?string $bankNo = null, ?string $city = null, ?string $contactPerson = null, ?string $currency = null, ?string $customerNo = null, ?string $debteeId = null, ?string $department = null, ?string $firmCode = null, ?string $iban = null, ?string $intermediateAccountCredit = null, ?string $intermediateAccountDebit = null, ?string $nationalBankKey = null, ?bool $nationalBankNotification = null, ?string $paymentScheme = null, ?string $phone = null, ?string $planId = null, ?string $postalCode = null, ?bool $processStatements = null, ?string $qrIban = null, ?string $qrInvoiceBankParticipantId = null, ?string $qrInvoiceParticipantId = null, ?string $street = null, ?string $swiftBicCode = null, ?string $unitName = null, ?bool $use4QrInvoice = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAccountOwner($accountOwner)
            ->setBankAccountNo($bankAccountNo)
            ->setBankCountry($bankCountry)
            ->setBankDescription($bankDescription)
            ->setBankName($bankName)
            ->setBankNo($bankNo)
            ->setCity($city)
            ->setContactPerson($contactPerson)
            ->setCurrency($currency)
            ->setCustomerNo($customerNo)
            ->setDebteeId($debteeId)
            ->setDepartment($department)
            ->setFirmCode($firmCode)
            ->setIban($iban)
            ->setIntermediateAccountCredit($intermediateAccountCredit)
            ->setIntermediateAccountDebit($intermediateAccountDebit)
            ->setNationalBankKey($nationalBankKey)
            ->setNationalBankNotification($nationalBankNotification)
            ->setPaymentScheme($paymentScheme)
            ->setPhone($phone)
            ->setPlanId($planId)
            ->setPostalCode($postalCode)
            ->setProcessStatements($processStatements)
            ->setQrIban($qrIban)
            ->setQrInvoiceBankParticipantId($qrInvoiceBankParticipantId)
            ->setQrInvoiceParticipantId($qrInvoiceParticipantId)
            ->setStreet($street)
            ->setSwiftBicCode($swiftBicCode)
            ->setUnitName($unitName)
            ->setUse4QrInvoice($use4QrInvoice);
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
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
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
     * Get accountOwner value
     * @return string|null
     */
    public function getAccountOwner(): ?string
    {
        return $this->accountOwner;
    }
    /**
     * Set accountOwner value
     * @param string $accountOwner
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setAccountOwner(?string $accountOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($accountOwner) && !is_string($accountOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountOwner, true), gettype($accountOwner)), __LINE__);
        }
        $this->accountOwner = $accountOwner;
        
        return $this;
    }
    /**
     * Get bankAccountNo value
     * @return string|null
     */
    public function getBankAccountNo(): ?string
    {
        return $this->bankAccountNo;
    }
    /**
     * Set bankAccountNo value
     * @param string $bankAccountNo
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setBankAccountNo(?string $bankAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankAccountNo) && !is_string($bankAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAccountNo, true), gettype($bankAccountNo)), __LINE__);
        }
        $this->bankAccountNo = $bankAccountNo;
        
        return $this;
    }
    /**
     * Get bankCountry value
     * @return string|null
     */
    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }
    /**
     * Set bankCountry value
     * @param string $bankCountry
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setBankCountry(?string $bankCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($bankCountry) && !is_string($bankCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCountry, true), gettype($bankCountry)), __LINE__);
        }
        $this->bankCountry = $bankCountry;
        
        return $this;
    }
    /**
     * Get bankDescription value
     * @return string|null
     */
    public function getBankDescription(): ?string
    {
        return $this->bankDescription;
    }
    /**
     * Set bankDescription value
     * @param string $bankDescription
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setBankDescription(?string $bankDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($bankDescription) && !is_string($bankDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankDescription, true), gettype($bankDescription)), __LINE__);
        }
        $this->bankDescription = $bankDescription;
        
        return $this;
    }
    /**
     * Get bankName value
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }
    /**
     * Set bankName value
     * @param string $bankName
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->bankName = $bankName;
        
        return $this;
    }
    /**
     * Get bankNo value
     * @return string|null
     */
    public function getBankNo(): ?string
    {
        return $this->bankNo;
    }
    /**
     * Set bankNo value
     * @param string $bankNo
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setBankNo(?string $bankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNo) && !is_string($bankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNo, true), gettype($bankNo)), __LINE__);
        }
        $this->bankNo = $bankNo;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get contactPerson value
     * @return string|null
     */
    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }
    /**
     * Set contactPerson value
     * @param string $contactPerson
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setContactPerson(?string $contactPerson = null): self
    {
        // validation for constraint: string
        if (!is_null($contactPerson) && !is_string($contactPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPerson, true), gettype($contactPerson)), __LINE__);
        }
        $this->contactPerson = $contactPerson;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
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
     * Get customerNo value
     * @return string|null
     */
    public function getCustomerNo(): ?string
    {
        return $this->customerNo;
    }
    /**
     * Set customerNo value
     * @param string $customerNo
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setCustomerNo(?string $customerNo = null): self
    {
        // validation for constraint: string
        if (!is_null($customerNo) && !is_string($customerNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNo, true), gettype($customerNo)), __LINE__);
        }
        $this->customerNo = $customerNo;
        
        return $this;
    }
    /**
     * Get debteeId value
     * @return string|null
     */
    public function getDebteeId(): ?string
    {
        return $this->debteeId;
    }
    /**
     * Set debteeId value
     * @param string $debteeId
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setDebteeId(?string $debteeId = null): self
    {
        // validation for constraint: string
        if (!is_null($debteeId) && !is_string($debteeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debteeId, true), gettype($debteeId)), __LINE__);
        }
        $this->debteeId = $debteeId;
        
        return $this;
    }
    /**
     * Get department value
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }
    /**
     * Set department value
     * @param string $department
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;
        
        return $this;
    }
    /**
     * Get firmCode value
     * @return string|null
     */
    public function getFirmCode(): ?string
    {
        return $this->firmCode;
    }
    /**
     * Set firmCode value
     * @param string $firmCode
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setFirmCode(?string $firmCode = null): self
    {
        // validation for constraint: string
        if (!is_null($firmCode) && !is_string($firmCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firmCode, true), gettype($firmCode)), __LINE__);
        }
        $this->firmCode = $firmCode;
        
        return $this;
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get intermediateAccountCredit value
     * @return string|null
     */
    public function getIntermediateAccountCredit(): ?string
    {
        return $this->intermediateAccountCredit;
    }
    /**
     * Set intermediateAccountCredit value
     * @param string $intermediateAccountCredit
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setIntermediateAccountCredit(?string $intermediateAccountCredit = null): self
    {
        // validation for constraint: string
        if (!is_null($intermediateAccountCredit) && !is_string($intermediateAccountCredit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intermediateAccountCredit, true), gettype($intermediateAccountCredit)), __LINE__);
        }
        $this->intermediateAccountCredit = $intermediateAccountCredit;
        
        return $this;
    }
    /**
     * Get intermediateAccountDebit value
     * @return string|null
     */
    public function getIntermediateAccountDebit(): ?string
    {
        return $this->intermediateAccountDebit;
    }
    /**
     * Set intermediateAccountDebit value
     * @param string $intermediateAccountDebit
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setIntermediateAccountDebit(?string $intermediateAccountDebit = null): self
    {
        // validation for constraint: string
        if (!is_null($intermediateAccountDebit) && !is_string($intermediateAccountDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intermediateAccountDebit, true), gettype($intermediateAccountDebit)), __LINE__);
        }
        $this->intermediateAccountDebit = $intermediateAccountDebit;
        
        return $this;
    }
    /**
     * Get nationalBankKey value
     * @return string|null
     */
    public function getNationalBankKey(): ?string
    {
        return $this->nationalBankKey;
    }
    /**
     * Set nationalBankKey value
     * @param string $nationalBankKey
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setNationalBankKey(?string $nationalBankKey = null): self
    {
        // validation for constraint: string
        if (!is_null($nationalBankKey) && !is_string($nationalBankKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationalBankKey, true), gettype($nationalBankKey)), __LINE__);
        }
        $this->nationalBankKey = $nationalBankKey;
        
        return $this;
    }
    /**
     * Get nationalBankNotification value
     * @return bool|null
     */
    public function getNationalBankNotification(): ?bool
    {
        return $this->nationalBankNotification;
    }
    /**
     * Set nationalBankNotification value
     * @param bool $nationalBankNotification
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setNationalBankNotification(?bool $nationalBankNotification = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nationalBankNotification) && !is_bool($nationalBankNotification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nationalBankNotification, true), gettype($nationalBankNotification)), __LINE__);
        }
        $this->nationalBankNotification = $nationalBankNotification;
        
        return $this;
    }
    /**
     * Get paymentScheme value
     * @return string|null
     */
    public function getPaymentScheme(): ?string
    {
        return $this->paymentScheme;
    }
    /**
     * Set paymentScheme value
     * @param string $paymentScheme
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setPaymentScheme(?string $paymentScheme = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentScheme) && !is_string($paymentScheme)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentScheme, true), gettype($paymentScheme)), __LINE__);
        }
        $this->paymentScheme = $paymentScheme;
        
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
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
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get processStatements value
     * @return bool|null
     */
    public function getProcessStatements(): ?bool
    {
        return $this->processStatements;
    }
    /**
     * Set processStatements value
     * @param bool $processStatements
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setProcessStatements(?bool $processStatements = null): self
    {
        // validation for constraint: boolean
        if (!is_null($processStatements) && !is_bool($processStatements)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processStatements, true), gettype($processStatements)), __LINE__);
        }
        $this->processStatements = $processStatements;
        
        return $this;
    }
    /**
     * Get qrIban value
     * @return string|null
     */
    public function getQrIban(): ?string
    {
        return $this->qrIban;
    }
    /**
     * Set qrIban value
     * @param string $qrIban
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setQrIban(?string $qrIban = null): self
    {
        // validation for constraint: string
        if (!is_null($qrIban) && !is_string($qrIban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qrIban, true), gettype($qrIban)), __LINE__);
        }
        $this->qrIban = $qrIban;
        
        return $this;
    }
    /**
     * Get qrInvoiceBankParticipantId value
     * @return string|null
     */
    public function getQrInvoiceBankParticipantId(): ?string
    {
        return $this->qrInvoiceBankParticipantId;
    }
    /**
     * Set qrInvoiceBankParticipantId value
     * @param string $qrInvoiceBankParticipantId
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setQrInvoiceBankParticipantId(?string $qrInvoiceBankParticipantId = null): self
    {
        // validation for constraint: string
        if (!is_null($qrInvoiceBankParticipantId) && !is_string($qrInvoiceBankParticipantId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qrInvoiceBankParticipantId, true), gettype($qrInvoiceBankParticipantId)), __LINE__);
        }
        $this->qrInvoiceBankParticipantId = $qrInvoiceBankParticipantId;
        
        return $this;
    }
    /**
     * Get qrInvoiceParticipantId value
     * @return string|null
     */
    public function getQrInvoiceParticipantId(): ?string
    {
        return $this->qrInvoiceParticipantId;
    }
    /**
     * Set qrInvoiceParticipantId value
     * @param string $qrInvoiceParticipantId
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setQrInvoiceParticipantId(?string $qrInvoiceParticipantId = null): self
    {
        // validation for constraint: string
        if (!is_null($qrInvoiceParticipantId) && !is_string($qrInvoiceParticipantId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qrInvoiceParticipantId, true), gettype($qrInvoiceParticipantId)), __LINE__);
        }
        $this->qrInvoiceParticipantId = $qrInvoiceParticipantId;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get swiftBicCode value
     * @return string|null
     */
    public function getSwiftBicCode(): ?string
    {
        return $this->swiftBicCode;
    }
    /**
     * Set swiftBicCode value
     * @param string $swiftBicCode
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setSwiftBicCode(?string $swiftBicCode = null): self
    {
        // validation for constraint: string
        if (!is_null($swiftBicCode) && !is_string($swiftBicCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swiftBicCode, true), gettype($swiftBicCode)), __LINE__);
        }
        $this->swiftBicCode = $swiftBicCode;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get use4QrInvoice value
     * @return bool|null
     */
    public function getUse4QrInvoice(): ?bool
    {
        return $this->use4QrInvoice;
    }
    /**
     * Set use4QrInvoice value
     * @param bool $use4QrInvoice
     * @return \Pggns\MidocoApi\Order\StructType\BankAccountDTO
     */
    public function setUse4QrInvoice(?bool $use4QrInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($use4QrInvoice) && !is_bool($use4QrInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($use4QrInvoice, true), gettype($use4QrInvoice)), __LINE__);
        }
        $this->use4QrInvoice = $use4QrInvoice;
        
        return $this;
    }
}
