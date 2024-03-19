<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierDTO extends AbstractStructBase
{
    /**
     * The acceptCash
     * @var bool|null
     */
    protected ?bool $acceptCash = null;
    /**
     * The acceptCc
     * @var bool|null
     */
    protected ?bool $acceptCc = null;
    /**
     * The acceptDebit
     * @var bool|null
     */
    protected ?bool $acceptDebit = null;
    /**
     * The acceptInvoice
     * @var bool|null
     */
    protected ?bool $acceptInvoice = null;
    /**
     * The accountDiPayment
     * @var string|null
     */
    protected ?string $accountDiPayment = null;
    /**
     * The accountExpenseInvoice
     * @var string|null
     */
    protected ?string $accountExpenseInvoice = null;
    /**
     * The accountProvisionInsurance
     * @var string|null
     */
    protected ?string $accountProvisionInsurance = null;
    /**
     * The accountProvisionInsuranceDi
     * @var string|null
     */
    protected ?string $accountProvisionInsuranceDi = null;
    /**
     * The accountProvisionNovat
     * @var string|null
     */
    protected ?string $accountProvisionNovat = null;
    /**
     * The accountProvisionNovatDi
     * @var string|null
     */
    protected ?string $accountProvisionNovatDi = null;
    /**
     * The accountProvisionReceivable
     * @var string|null
     */
    protected ?string $accountProvisionReceivable = null;
    /**
     * The accountProvisionVat
     * @var string|null
     */
    protected ?string $accountProvisionVat = null;
    /**
     * The accountProvisionVatDi
     * @var string|null
     */
    protected ?string $accountProvisionVatDi = null;
    /**
     * The accountSupplierPayment
     * @var string|null
     */
    protected ?string $accountSupplierPayment = null;
    /**
     * The accountSupplierVat
     * @var string|null
     */
    protected ?string $accountSupplierVat = null;
    /**
     * The activeCommissionSettlement
     * @var bool|null
     */
    protected ?bool $activeCommissionSettlement = null;
    /**
     * The allowMarkUp
     * @var bool|null
     */
    protected ?bool $allowMarkUp = null;
    /**
     * The autoRemarkPosition
     * @var int|null
     */
    protected ?int $autoRemarkPosition = null;
    /**
     * The bookingIdRequired
     * @var bool|null
     */
    protected ?bool $bookingIdRequired = null;
    /**
     * The collectiveSettlement
     * @var bool|null
     */
    protected ?bool $collectiveSettlement = null;
    /**
     * The commissionMode
     * @var int|null
     */
    protected ?int $commissionMode = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerWishNotification
     * @var bool|null
     */
    protected ?bool $customerWishNotification = null;
    /**
     * The emailNotification
     * @var bool|null
     */
    protected ?bool $emailNotification = null;
    /**
     * The entryHandlingCollective
     * @var int|null
     */
    protected ?int $entryHandlingCollective = null;
    /**
     * The entryRestAsProv
     * @var bool|null
     */
    protected ?bool $entryRestAsProv = null;
    /**
     * The group1
     * @var string|null
     */
    protected ?string $group1 = null;
    /**
     * The group2
     * @var string|null
     */
    protected ?string $group2 = null;
    /**
     * The group3
     * @var string|null
     */
    protected ?string $group3 = null;
    /**
     * The inkassoMode
     * @var int|null
     */
    protected ?int $inkassoMode = null;
    /**
     * The interimAccount
     * @var string|null
     */
    protected ?string $interimAccount = null;
    /**
     * The isCommPrefTravelDate
     * @var bool|null
     */
    protected ?bool $isCommPrefTravelDate = null;
    /**
     * The isInsurance
     * @var bool|null
     */
    protected ?bool $isInsurance = null;
    /**
     * The isLocked
     * @var bool|null
     */
    protected ?bool $isLocked = null;
    /**
     * The isOwnAccount
     * @var bool|null
     */
    protected ?bool $isOwnAccount = null;
    /**
     * The isOwnSettlement
     * @var bool|null
     */
    protected ?bool $isOwnSettlement = null;
    /**
     * The isPrefTravelDate
     * @var bool|null
     */
    protected ?bool $isPrefTravelDate = null;
    /**
     * The isVarious
     * @var bool|null
     */
    protected ?bool $isVarious = null;
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
     * The optionPeriod
     * @var int|null
     */
    protected ?int $optionPeriod = null;
    /**
     * The preventBillingPosSplit
     * @var bool|null
     */
    protected ?bool $preventBillingPosSplit = null;
    /**
     * The preventBookingRefGen
     * @var bool|null
     */
    protected ?bool $preventBookingRefGen = null;
    /**
     * The printOptionId
     * @var int|null
     */
    protected ?int $printOptionId = null;
    /**
     * The requiresConfirmation
     * @var bool|null
     */
    protected ?bool $requiresConfirmation = null;
    /**
     * The settlementGroup
     * @var string|null
     */
    protected ?string $settlementGroup = null;
    /**
     * The settlementTypeCreditDefault
     * @var string|null
     */
    protected ?string $settlementTypeCreditDefault = null;
    /**
     * The settlementTypeDebitDefault
     * @var string|null
     */
    protected ?string $settlementTypeDebitDefault = null;
    /**
     * The stornoNotification
     * @var bool|null
     */
    protected ?bool $stornoNotification = null;
    /**
     * The supplierGroupForFee
     * @var string|null
     */
    protected ?string $supplierGroupForFee = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The suppressBackofficeExport
     * @var bool|null
     */
    protected ?bool $suppressBackofficeExport = null;
    /**
     * The suppressRevenueBooking
     * @var bool|null
     */
    protected ?bool $suppressRevenueBooking = null;
    /**
     * The travelDocumentsPerItem
     * @var bool|null
     */
    protected ?bool $travelDocumentsPerItem = null;
    /**
     * The useBookingAsEntry
     * @var bool|null
     */
    protected ?bool $useBookingAsEntry = null;
    /**
     * The validCreationTravel
     * @var string|null
     */
    protected ?string $validCreationTravel = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * The vatIdChange
     * @var bool|null
     */
    protected ?bool $vatIdChange = null;
    /**
     * The verkCode
     * @var int|null
     */
    protected ?int $verkCode = null;
    /**
     * Constructor method for SupplierDTO
     * @uses SupplierDTO::setAcceptCash()
     * @uses SupplierDTO::setAcceptCc()
     * @uses SupplierDTO::setAcceptDebit()
     * @uses SupplierDTO::setAcceptInvoice()
     * @uses SupplierDTO::setAccountDiPayment()
     * @uses SupplierDTO::setAccountExpenseInvoice()
     * @uses SupplierDTO::setAccountProvisionInsurance()
     * @uses SupplierDTO::setAccountProvisionInsuranceDi()
     * @uses SupplierDTO::setAccountProvisionNovat()
     * @uses SupplierDTO::setAccountProvisionNovatDi()
     * @uses SupplierDTO::setAccountProvisionReceivable()
     * @uses SupplierDTO::setAccountProvisionVat()
     * @uses SupplierDTO::setAccountProvisionVatDi()
     * @uses SupplierDTO::setAccountSupplierPayment()
     * @uses SupplierDTO::setAccountSupplierVat()
     * @uses SupplierDTO::setActiveCommissionSettlement()
     * @uses SupplierDTO::setAllowMarkUp()
     * @uses SupplierDTO::setAutoRemarkPosition()
     * @uses SupplierDTO::setBookingIdRequired()
     * @uses SupplierDTO::setCollectiveSettlement()
     * @uses SupplierDTO::setCommissionMode()
     * @uses SupplierDTO::setCurrency()
     * @uses SupplierDTO::setCustomerWishNotification()
     * @uses SupplierDTO::setEmailNotification()
     * @uses SupplierDTO::setEntryHandlingCollective()
     * @uses SupplierDTO::setEntryRestAsProv()
     * @uses SupplierDTO::setGroup1()
     * @uses SupplierDTO::setGroup2()
     * @uses SupplierDTO::setGroup3()
     * @uses SupplierDTO::setInkassoMode()
     * @uses SupplierDTO::setInterimAccount()
     * @uses SupplierDTO::setIsCommPrefTravelDate()
     * @uses SupplierDTO::setIsInsurance()
     * @uses SupplierDTO::setIsLocked()
     * @uses SupplierDTO::setIsOwnAccount()
     * @uses SupplierDTO::setIsOwnSettlement()
     * @uses SupplierDTO::setIsPrefTravelDate()
     * @uses SupplierDTO::setIsVarious()
     * @uses SupplierDTO::setLockDate()
     * @uses SupplierDTO::setName()
     * @uses SupplierDTO::setOptionPeriod()
     * @uses SupplierDTO::setPreventBillingPosSplit()
     * @uses SupplierDTO::setPreventBookingRefGen()
     * @uses SupplierDTO::setPrintOptionId()
     * @uses SupplierDTO::setRequiresConfirmation()
     * @uses SupplierDTO::setSettlementGroup()
     * @uses SupplierDTO::setSettlementTypeCreditDefault()
     * @uses SupplierDTO::setSettlementTypeDebitDefault()
     * @uses SupplierDTO::setStornoNotification()
     * @uses SupplierDTO::setSupplierGroupForFee()
     * @uses SupplierDTO::setSupplierId()
     * @uses SupplierDTO::setSuppressBackofficeExport()
     * @uses SupplierDTO::setSuppressRevenueBooking()
     * @uses SupplierDTO::setTravelDocumentsPerItem()
     * @uses SupplierDTO::setUseBookingAsEntry()
     * @uses SupplierDTO::setValidCreationTravel()
     * @uses SupplierDTO::setValidDate()
     * @uses SupplierDTO::setVatId()
     * @uses SupplierDTO::setVatIdChange()
     * @uses SupplierDTO::setVerkCode()
     * @param bool $acceptCash
     * @param bool $acceptCc
     * @param bool $acceptDebit
     * @param bool $acceptInvoice
     * @param string $accountDiPayment
     * @param string $accountExpenseInvoice
     * @param string $accountProvisionInsurance
     * @param string $accountProvisionInsuranceDi
     * @param string $accountProvisionNovat
     * @param string $accountProvisionNovatDi
     * @param string $accountProvisionReceivable
     * @param string $accountProvisionVat
     * @param string $accountProvisionVatDi
     * @param string $accountSupplierPayment
     * @param string $accountSupplierVat
     * @param bool $activeCommissionSettlement
     * @param bool $allowMarkUp
     * @param int $autoRemarkPosition
     * @param bool $bookingIdRequired
     * @param bool $collectiveSettlement
     * @param int $commissionMode
     * @param string $currency
     * @param bool $customerWishNotification
     * @param bool $emailNotification
     * @param int $entryHandlingCollective
     * @param bool $entryRestAsProv
     * @param string $group1
     * @param string $group2
     * @param string $group3
     * @param int $inkassoMode
     * @param string $interimAccount
     * @param bool $isCommPrefTravelDate
     * @param bool $isInsurance
     * @param bool $isLocked
     * @param bool $isOwnAccount
     * @param bool $isOwnSettlement
     * @param bool $isPrefTravelDate
     * @param bool $isVarious
     * @param string $lockDate
     * @param string $name
     * @param int $optionPeriod
     * @param bool $preventBillingPosSplit
     * @param bool $preventBookingRefGen
     * @param int $printOptionId
     * @param bool $requiresConfirmation
     * @param string $settlementGroup
     * @param string $settlementTypeCreditDefault
     * @param string $settlementTypeDebitDefault
     * @param bool $stornoNotification
     * @param string $supplierGroupForFee
     * @param string $supplierId
     * @param bool $suppressBackofficeExport
     * @param bool $suppressRevenueBooking
     * @param bool $travelDocumentsPerItem
     * @param bool $useBookingAsEntry
     * @param string $validCreationTravel
     * @param string $validDate
     * @param string $vatId
     * @param bool $vatIdChange
     * @param int $verkCode
     */
    public function __construct(?bool $acceptCash = null, ?bool $acceptCc = null, ?bool $acceptDebit = null, ?bool $acceptInvoice = null, ?string $accountDiPayment = null, ?string $accountExpenseInvoice = null, ?string $accountProvisionInsurance = null, ?string $accountProvisionInsuranceDi = null, ?string $accountProvisionNovat = null, ?string $accountProvisionNovatDi = null, ?string $accountProvisionReceivable = null, ?string $accountProvisionVat = null, ?string $accountProvisionVatDi = null, ?string $accountSupplierPayment = null, ?string $accountSupplierVat = null, ?bool $activeCommissionSettlement = null, ?bool $allowMarkUp = null, ?int $autoRemarkPosition = null, ?bool $bookingIdRequired = null, ?bool $collectiveSettlement = null, ?int $commissionMode = null, ?string $currency = null, ?bool $customerWishNotification = null, ?bool $emailNotification = null, ?int $entryHandlingCollective = null, ?bool $entryRestAsProv = null, ?string $group1 = null, ?string $group2 = null, ?string $group3 = null, ?int $inkassoMode = null, ?string $interimAccount = null, ?bool $isCommPrefTravelDate = null, ?bool $isInsurance = null, ?bool $isLocked = null, ?bool $isOwnAccount = null, ?bool $isOwnSettlement = null, ?bool $isPrefTravelDate = null, ?bool $isVarious = null, ?string $lockDate = null, ?string $name = null, ?int $optionPeriod = null, ?bool $preventBillingPosSplit = null, ?bool $preventBookingRefGen = null, ?int $printOptionId = null, ?bool $requiresConfirmation = null, ?string $settlementGroup = null, ?string $settlementTypeCreditDefault = null, ?string $settlementTypeDebitDefault = null, ?bool $stornoNotification = null, ?string $supplierGroupForFee = null, ?string $supplierId = null, ?bool $suppressBackofficeExport = null, ?bool $suppressRevenueBooking = null, ?bool $travelDocumentsPerItem = null, ?bool $useBookingAsEntry = null, ?string $validCreationTravel = null, ?string $validDate = null, ?string $vatId = null, ?bool $vatIdChange = null, ?int $verkCode = null)
    {
        $this
            ->setAcceptCash($acceptCash)
            ->setAcceptCc($acceptCc)
            ->setAcceptDebit($acceptDebit)
            ->setAcceptInvoice($acceptInvoice)
            ->setAccountDiPayment($accountDiPayment)
            ->setAccountExpenseInvoice($accountExpenseInvoice)
            ->setAccountProvisionInsurance($accountProvisionInsurance)
            ->setAccountProvisionInsuranceDi($accountProvisionInsuranceDi)
            ->setAccountProvisionNovat($accountProvisionNovat)
            ->setAccountProvisionNovatDi($accountProvisionNovatDi)
            ->setAccountProvisionReceivable($accountProvisionReceivable)
            ->setAccountProvisionVat($accountProvisionVat)
            ->setAccountProvisionVatDi($accountProvisionVatDi)
            ->setAccountSupplierPayment($accountSupplierPayment)
            ->setAccountSupplierVat($accountSupplierVat)
            ->setActiveCommissionSettlement($activeCommissionSettlement)
            ->setAllowMarkUp($allowMarkUp)
            ->setAutoRemarkPosition($autoRemarkPosition)
            ->setBookingIdRequired($bookingIdRequired)
            ->setCollectiveSettlement($collectiveSettlement)
            ->setCommissionMode($commissionMode)
            ->setCurrency($currency)
            ->setCustomerWishNotification($customerWishNotification)
            ->setEmailNotification($emailNotification)
            ->setEntryHandlingCollective($entryHandlingCollective)
            ->setEntryRestAsProv($entryRestAsProv)
            ->setGroup1($group1)
            ->setGroup2($group2)
            ->setGroup3($group3)
            ->setInkassoMode($inkassoMode)
            ->setInterimAccount($interimAccount)
            ->setIsCommPrefTravelDate($isCommPrefTravelDate)
            ->setIsInsurance($isInsurance)
            ->setIsLocked($isLocked)
            ->setIsOwnAccount($isOwnAccount)
            ->setIsOwnSettlement($isOwnSettlement)
            ->setIsPrefTravelDate($isPrefTravelDate)
            ->setIsVarious($isVarious)
            ->setLockDate($lockDate)
            ->setName($name)
            ->setOptionPeriod($optionPeriod)
            ->setPreventBillingPosSplit($preventBillingPosSplit)
            ->setPreventBookingRefGen($preventBookingRefGen)
            ->setPrintOptionId($printOptionId)
            ->setRequiresConfirmation($requiresConfirmation)
            ->setSettlementGroup($settlementGroup)
            ->setSettlementTypeCreditDefault($settlementTypeCreditDefault)
            ->setSettlementTypeDebitDefault($settlementTypeDebitDefault)
            ->setStornoNotification($stornoNotification)
            ->setSupplierGroupForFee($supplierGroupForFee)
            ->setSupplierId($supplierId)
            ->setSuppressBackofficeExport($suppressBackofficeExport)
            ->setSuppressRevenueBooking($suppressRevenueBooking)
            ->setTravelDocumentsPerItem($travelDocumentsPerItem)
            ->setUseBookingAsEntry($useBookingAsEntry)
            ->setValidCreationTravel($validCreationTravel)
            ->setValidDate($validDate)
            ->setVatId($vatId)
            ->setVatIdChange($vatIdChange)
            ->setVerkCode($verkCode);
    }
    /**
     * Get acceptCash value
     * @return bool|null
     */
    public function getAcceptCash(): ?bool
    {
        return $this->acceptCash;
    }
    /**
     * Set acceptCash value
     * @param bool $acceptCash
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAcceptCash(?bool $acceptCash = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acceptCash) && !is_bool($acceptCash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acceptCash, true), gettype($acceptCash)), __LINE__);
        }
        $this->acceptCash = $acceptCash;
        
        return $this;
    }
    /**
     * Get acceptCc value
     * @return bool|null
     */
    public function getAcceptCc(): ?bool
    {
        return $this->acceptCc;
    }
    /**
     * Set acceptCc value
     * @param bool $acceptCc
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAcceptCc(?bool $acceptCc = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acceptCc) && !is_bool($acceptCc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acceptCc, true), gettype($acceptCc)), __LINE__);
        }
        $this->acceptCc = $acceptCc;
        
        return $this;
    }
    /**
     * Get acceptDebit value
     * @return bool|null
     */
    public function getAcceptDebit(): ?bool
    {
        return $this->acceptDebit;
    }
    /**
     * Set acceptDebit value
     * @param bool $acceptDebit
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAcceptDebit(?bool $acceptDebit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acceptDebit) && !is_bool($acceptDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acceptDebit, true), gettype($acceptDebit)), __LINE__);
        }
        $this->acceptDebit = $acceptDebit;
        
        return $this;
    }
    /**
     * Get acceptInvoice value
     * @return bool|null
     */
    public function getAcceptInvoice(): ?bool
    {
        return $this->acceptInvoice;
    }
    /**
     * Set acceptInvoice value
     * @param bool $acceptInvoice
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAcceptInvoice(?bool $acceptInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acceptInvoice) && !is_bool($acceptInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acceptInvoice, true), gettype($acceptInvoice)), __LINE__);
        }
        $this->acceptInvoice = $acceptInvoice;
        
        return $this;
    }
    /**
     * Get accountDiPayment value
     * @return string|null
     */
    public function getAccountDiPayment(): ?string
    {
        return $this->accountDiPayment;
    }
    /**
     * Set accountDiPayment value
     * @param string $accountDiPayment
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountDiPayment(?string $accountDiPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($accountDiPayment) && !is_string($accountDiPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountDiPayment, true), gettype($accountDiPayment)), __LINE__);
        }
        $this->accountDiPayment = $accountDiPayment;
        
        return $this;
    }
    /**
     * Get accountExpenseInvoice value
     * @return string|null
     */
    public function getAccountExpenseInvoice(): ?string
    {
        return $this->accountExpenseInvoice;
    }
    /**
     * Set accountExpenseInvoice value
     * @param string $accountExpenseInvoice
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountExpenseInvoice(?string $accountExpenseInvoice = null): self
    {
        // validation for constraint: string
        if (!is_null($accountExpenseInvoice) && !is_string($accountExpenseInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountExpenseInvoice, true), gettype($accountExpenseInvoice)), __LINE__);
        }
        $this->accountExpenseInvoice = $accountExpenseInvoice;
        
        return $this;
    }
    /**
     * Get accountProvisionInsurance value
     * @return string|null
     */
    public function getAccountProvisionInsurance(): ?string
    {
        return $this->accountProvisionInsurance;
    }
    /**
     * Set accountProvisionInsurance value
     * @param string $accountProvisionInsurance
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountProvisionInsurance(?string $accountProvisionInsurance = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionInsurance) && !is_string($accountProvisionInsurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionInsurance, true), gettype($accountProvisionInsurance)), __LINE__);
        }
        $this->accountProvisionInsurance = $accountProvisionInsurance;
        
        return $this;
    }
    /**
     * Get accountProvisionInsuranceDi value
     * @return string|null
     */
    public function getAccountProvisionInsuranceDi(): ?string
    {
        return $this->accountProvisionInsuranceDi;
    }
    /**
     * Set accountProvisionInsuranceDi value
     * @param string $accountProvisionInsuranceDi
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountProvisionInsuranceDi(?string $accountProvisionInsuranceDi = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionInsuranceDi) && !is_string($accountProvisionInsuranceDi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionInsuranceDi, true), gettype($accountProvisionInsuranceDi)), __LINE__);
        }
        $this->accountProvisionInsuranceDi = $accountProvisionInsuranceDi;
        
        return $this;
    }
    /**
     * Get accountProvisionNovat value
     * @return string|null
     */
    public function getAccountProvisionNovat(): ?string
    {
        return $this->accountProvisionNovat;
    }
    /**
     * Set accountProvisionNovat value
     * @param string $accountProvisionNovat
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountProvisionNovat(?string $accountProvisionNovat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionNovat) && !is_string($accountProvisionNovat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionNovat, true), gettype($accountProvisionNovat)), __LINE__);
        }
        $this->accountProvisionNovat = $accountProvisionNovat;
        
        return $this;
    }
    /**
     * Get accountProvisionNovatDi value
     * @return string|null
     */
    public function getAccountProvisionNovatDi(): ?string
    {
        return $this->accountProvisionNovatDi;
    }
    /**
     * Set accountProvisionNovatDi value
     * @param string $accountProvisionNovatDi
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountProvisionNovatDi(?string $accountProvisionNovatDi = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionNovatDi) && !is_string($accountProvisionNovatDi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionNovatDi, true), gettype($accountProvisionNovatDi)), __LINE__);
        }
        $this->accountProvisionNovatDi = $accountProvisionNovatDi;
        
        return $this;
    }
    /**
     * Get accountProvisionReceivable value
     * @return string|null
     */
    public function getAccountProvisionReceivable(): ?string
    {
        return $this->accountProvisionReceivable;
    }
    /**
     * Set accountProvisionReceivable value
     * @param string $accountProvisionReceivable
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountProvisionReceivable(?string $accountProvisionReceivable = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionReceivable) && !is_string($accountProvisionReceivable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionReceivable, true), gettype($accountProvisionReceivable)), __LINE__);
        }
        $this->accountProvisionReceivable = $accountProvisionReceivable;
        
        return $this;
    }
    /**
     * Get accountProvisionVat value
     * @return string|null
     */
    public function getAccountProvisionVat(): ?string
    {
        return $this->accountProvisionVat;
    }
    /**
     * Set accountProvisionVat value
     * @param string $accountProvisionVat
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountProvisionVat(?string $accountProvisionVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionVat) && !is_string($accountProvisionVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionVat, true), gettype($accountProvisionVat)), __LINE__);
        }
        $this->accountProvisionVat = $accountProvisionVat;
        
        return $this;
    }
    /**
     * Get accountProvisionVatDi value
     * @return string|null
     */
    public function getAccountProvisionVatDi(): ?string
    {
        return $this->accountProvisionVatDi;
    }
    /**
     * Set accountProvisionVatDi value
     * @param string $accountProvisionVatDi
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountProvisionVatDi(?string $accountProvisionVatDi = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionVatDi) && !is_string($accountProvisionVatDi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionVatDi, true), gettype($accountProvisionVatDi)), __LINE__);
        }
        $this->accountProvisionVatDi = $accountProvisionVatDi;
        
        return $this;
    }
    /**
     * Get accountSupplierPayment value
     * @return string|null
     */
    public function getAccountSupplierPayment(): ?string
    {
        return $this->accountSupplierPayment;
    }
    /**
     * Set accountSupplierPayment value
     * @param string $accountSupplierPayment
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountSupplierPayment(?string $accountSupplierPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($accountSupplierPayment) && !is_string($accountSupplierPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountSupplierPayment, true), gettype($accountSupplierPayment)), __LINE__);
        }
        $this->accountSupplierPayment = $accountSupplierPayment;
        
        return $this;
    }
    /**
     * Get accountSupplierVat value
     * @return string|null
     */
    public function getAccountSupplierVat(): ?string
    {
        return $this->accountSupplierVat;
    }
    /**
     * Set accountSupplierVat value
     * @param string $accountSupplierVat
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAccountSupplierVat(?string $accountSupplierVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountSupplierVat) && !is_string($accountSupplierVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountSupplierVat, true), gettype($accountSupplierVat)), __LINE__);
        }
        $this->accountSupplierVat = $accountSupplierVat;
        
        return $this;
    }
    /**
     * Get activeCommissionSettlement value
     * @return bool|null
     */
    public function getActiveCommissionSettlement(): ?bool
    {
        return $this->activeCommissionSettlement;
    }
    /**
     * Set activeCommissionSettlement value
     * @param bool $activeCommissionSettlement
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setActiveCommissionSettlement(?bool $activeCommissionSettlement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($activeCommissionSettlement) && !is_bool($activeCommissionSettlement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activeCommissionSettlement, true), gettype($activeCommissionSettlement)), __LINE__);
        }
        $this->activeCommissionSettlement = $activeCommissionSettlement;
        
        return $this;
    }
    /**
     * Get allowMarkUp value
     * @return bool|null
     */
    public function getAllowMarkUp(): ?bool
    {
        return $this->allowMarkUp;
    }
    /**
     * Set allowMarkUp value
     * @param bool $allowMarkUp
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAllowMarkUp(?bool $allowMarkUp = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowMarkUp) && !is_bool($allowMarkUp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowMarkUp, true), gettype($allowMarkUp)), __LINE__);
        }
        $this->allowMarkUp = $allowMarkUp;
        
        return $this;
    }
    /**
     * Get autoRemarkPosition value
     * @return int|null
     */
    public function getAutoRemarkPosition(): ?int
    {
        return $this->autoRemarkPosition;
    }
    /**
     * Set autoRemarkPosition value
     * @param int $autoRemarkPosition
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setAutoRemarkPosition(?int $autoRemarkPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($autoRemarkPosition) && !(is_int($autoRemarkPosition) || ctype_digit($autoRemarkPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($autoRemarkPosition, true), gettype($autoRemarkPosition)), __LINE__);
        }
        $this->autoRemarkPosition = $autoRemarkPosition;
        
        return $this;
    }
    /**
     * Get bookingIdRequired value
     * @return bool|null
     */
    public function getBookingIdRequired(): ?bool
    {
        return $this->bookingIdRequired;
    }
    /**
     * Set bookingIdRequired value
     * @param bool $bookingIdRequired
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setBookingIdRequired(?bool $bookingIdRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookingIdRequired) && !is_bool($bookingIdRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookingIdRequired, true), gettype($bookingIdRequired)), __LINE__);
        }
        $this->bookingIdRequired = $bookingIdRequired;
        
        return $this;
    }
    /**
     * Get collectiveSettlement value
     * @return bool|null
     */
    public function getCollectiveSettlement(): ?bool
    {
        return $this->collectiveSettlement;
    }
    /**
     * Set collectiveSettlement value
     * @param bool $collectiveSettlement
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setCollectiveSettlement(?bool $collectiveSettlement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveSettlement) && !is_bool($collectiveSettlement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveSettlement, true), gettype($collectiveSettlement)), __LINE__);
        }
        $this->collectiveSettlement = $collectiveSettlement;
        
        return $this;
    }
    /**
     * Get commissionMode value
     * @return int|null
     */
    public function getCommissionMode(): ?int
    {
        return $this->commissionMode;
    }
    /**
     * Set commissionMode value
     * @param int $commissionMode
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setCommissionMode(?int $commissionMode = null): self
    {
        // validation for constraint: int
        if (!is_null($commissionMode) && !(is_int($commissionMode) || ctype_digit($commissionMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commissionMode, true), gettype($commissionMode)), __LINE__);
        }
        $this->commissionMode = $commissionMode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
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
     * Get customerWishNotification value
     * @return bool|null
     */
    public function getCustomerWishNotification(): ?bool
    {
        return $this->customerWishNotification;
    }
    /**
     * Set customerWishNotification value
     * @param bool $customerWishNotification
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setCustomerWishNotification(?bool $customerWishNotification = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customerWishNotification) && !is_bool($customerWishNotification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerWishNotification, true), gettype($customerWishNotification)), __LINE__);
        }
        $this->customerWishNotification = $customerWishNotification;
        
        return $this;
    }
    /**
     * Get emailNotification value
     * @return bool|null
     */
    public function getEmailNotification(): ?bool
    {
        return $this->emailNotification;
    }
    /**
     * Set emailNotification value
     * @param bool $emailNotification
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setEmailNotification(?bool $emailNotification = null): self
    {
        // validation for constraint: boolean
        if (!is_null($emailNotification) && !is_bool($emailNotification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailNotification, true), gettype($emailNotification)), __LINE__);
        }
        $this->emailNotification = $emailNotification;
        
        return $this;
    }
    /**
     * Get entryHandlingCollective value
     * @return int|null
     */
    public function getEntryHandlingCollective(): ?int
    {
        return $this->entryHandlingCollective;
    }
    /**
     * Set entryHandlingCollective value
     * @param int $entryHandlingCollective
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setEntryHandlingCollective(?int $entryHandlingCollective = null): self
    {
        // validation for constraint: int
        if (!is_null($entryHandlingCollective) && !(is_int($entryHandlingCollective) || ctype_digit($entryHandlingCollective))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entryHandlingCollective, true), gettype($entryHandlingCollective)), __LINE__);
        }
        $this->entryHandlingCollective = $entryHandlingCollective;
        
        return $this;
    }
    /**
     * Get entryRestAsProv value
     * @return bool|null
     */
    public function getEntryRestAsProv(): ?bool
    {
        return $this->entryRestAsProv;
    }
    /**
     * Set entryRestAsProv value
     * @param bool $entryRestAsProv
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setEntryRestAsProv(?bool $entryRestAsProv = null): self
    {
        // validation for constraint: boolean
        if (!is_null($entryRestAsProv) && !is_bool($entryRestAsProv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($entryRestAsProv, true), gettype($entryRestAsProv)), __LINE__);
        }
        $this->entryRestAsProv = $entryRestAsProv;
        
        return $this;
    }
    /**
     * Get group1 value
     * @return string|null
     */
    public function getGroup1(): ?string
    {
        return $this->group1;
    }
    /**
     * Set group1 value
     * @param string $group1
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setGroup1(?string $group1 = null): self
    {
        // validation for constraint: string
        if (!is_null($group1) && !is_string($group1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group1, true), gettype($group1)), __LINE__);
        }
        $this->group1 = $group1;
        
        return $this;
    }
    /**
     * Get group2 value
     * @return string|null
     */
    public function getGroup2(): ?string
    {
        return $this->group2;
    }
    /**
     * Set group2 value
     * @param string $group2
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setGroup2(?string $group2 = null): self
    {
        // validation for constraint: string
        if (!is_null($group2) && !is_string($group2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group2, true), gettype($group2)), __LINE__);
        }
        $this->group2 = $group2;
        
        return $this;
    }
    /**
     * Get group3 value
     * @return string|null
     */
    public function getGroup3(): ?string
    {
        return $this->group3;
    }
    /**
     * Set group3 value
     * @param string $group3
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setGroup3(?string $group3 = null): self
    {
        // validation for constraint: string
        if (!is_null($group3) && !is_string($group3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group3, true), gettype($group3)), __LINE__);
        }
        $this->group3 = $group3;
        
        return $this;
    }
    /**
     * Get inkassoMode value
     * @return int|null
     */
    public function getInkassoMode(): ?int
    {
        return $this->inkassoMode;
    }
    /**
     * Set inkassoMode value
     * @param int $inkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setInkassoMode(?int $inkassoMode = null): self
    {
        // validation for constraint: int
        if (!is_null($inkassoMode) && !(is_int($inkassoMode) || ctype_digit($inkassoMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($inkassoMode, true), gettype($inkassoMode)), __LINE__);
        }
        $this->inkassoMode = $inkassoMode;
        
        return $this;
    }
    /**
     * Get interimAccount value
     * @return string|null
     */
    public function getInterimAccount(): ?string
    {
        return $this->interimAccount;
    }
    /**
     * Set interimAccount value
     * @param string $interimAccount
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setInterimAccount(?string $interimAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($interimAccount) && !is_string($interimAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($interimAccount, true), gettype($interimAccount)), __LINE__);
        }
        $this->interimAccount = $interimAccount;
        
        return $this;
    }
    /**
     * Get isCommPrefTravelDate value
     * @return bool|null
     */
    public function getIsCommPrefTravelDate(): ?bool
    {
        return $this->isCommPrefTravelDate;
    }
    /**
     * Set isCommPrefTravelDate value
     * @param bool $isCommPrefTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setIsCommPrefTravelDate(?bool $isCommPrefTravelDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCommPrefTravelDate) && !is_bool($isCommPrefTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCommPrefTravelDate, true), gettype($isCommPrefTravelDate)), __LINE__);
        }
        $this->isCommPrefTravelDate = $isCommPrefTravelDate;
        
        return $this;
    }
    /**
     * Get isInsurance value
     * @return bool|null
     */
    public function getIsInsurance(): ?bool
    {
        return $this->isInsurance;
    }
    /**
     * Set isInsurance value
     * @param bool $isInsurance
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setIsInsurance(?bool $isInsurance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInsurance) && !is_bool($isInsurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInsurance, true), gettype($isInsurance)), __LINE__);
        }
        $this->isInsurance = $isInsurance;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
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
     * Get isOwnAccount value
     * @return bool|null
     */
    public function getIsOwnAccount(): ?bool
    {
        return $this->isOwnAccount;
    }
    /**
     * Set isOwnAccount value
     * @param bool $isOwnAccount
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setIsOwnAccount(?bool $isOwnAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOwnAccount) && !is_bool($isOwnAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwnAccount, true), gettype($isOwnAccount)), __LINE__);
        }
        $this->isOwnAccount = $isOwnAccount;
        
        return $this;
    }
    /**
     * Get isOwnSettlement value
     * @return bool|null
     */
    public function getIsOwnSettlement(): ?bool
    {
        return $this->isOwnSettlement;
    }
    /**
     * Set isOwnSettlement value
     * @param bool $isOwnSettlement
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setIsOwnSettlement(?bool $isOwnSettlement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOwnSettlement) && !is_bool($isOwnSettlement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwnSettlement, true), gettype($isOwnSettlement)), __LINE__);
        }
        $this->isOwnSettlement = $isOwnSettlement;
        
        return $this;
    }
    /**
     * Get isPrefTravelDate value
     * @return bool|null
     */
    public function getIsPrefTravelDate(): ?bool
    {
        return $this->isPrefTravelDate;
    }
    /**
     * Set isPrefTravelDate value
     * @param bool $isPrefTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setIsPrefTravelDate(?bool $isPrefTravelDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrefTravelDate) && !is_bool($isPrefTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrefTravelDate, true), gettype($isPrefTravelDate)), __LINE__);
        }
        $this->isPrefTravelDate = $isPrefTravelDate;
        
        return $this;
    }
    /**
     * Get isVarious value
     * @return bool|null
     */
    public function getIsVarious(): ?bool
    {
        return $this->isVarious;
    }
    /**
     * Set isVarious value
     * @param bool $isVarious
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setIsVarious(?bool $isVarious = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVarious) && !is_bool($isVarious)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVarious, true), gettype($isVarious)), __LINE__);
        }
        $this->isVarious = $isVarious;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
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
     * Get optionPeriod value
     * @return int|null
     */
    public function getOptionPeriod(): ?int
    {
        return $this->optionPeriod;
    }
    /**
     * Set optionPeriod value
     * @param int $optionPeriod
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setOptionPeriod(?int $optionPeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($optionPeriod) && !(is_int($optionPeriod) || ctype_digit($optionPeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($optionPeriod, true), gettype($optionPeriod)), __LINE__);
        }
        $this->optionPeriod = $optionPeriod;
        
        return $this;
    }
    /**
     * Get preventBillingPosSplit value
     * @return bool|null
     */
    public function getPreventBillingPosSplit(): ?bool
    {
        return $this->preventBillingPosSplit;
    }
    /**
     * Set preventBillingPosSplit value
     * @param bool $preventBillingPosSplit
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setPreventBillingPosSplit(?bool $preventBillingPosSplit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventBillingPosSplit) && !is_bool($preventBillingPosSplit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventBillingPosSplit, true), gettype($preventBillingPosSplit)), __LINE__);
        }
        $this->preventBillingPosSplit = $preventBillingPosSplit;
        
        return $this;
    }
    /**
     * Get preventBookingRefGen value
     * @return bool|null
     */
    public function getPreventBookingRefGen(): ?bool
    {
        return $this->preventBookingRefGen;
    }
    /**
     * Set preventBookingRefGen value
     * @param bool $preventBookingRefGen
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setPreventBookingRefGen(?bool $preventBookingRefGen = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventBookingRefGen) && !is_bool($preventBookingRefGen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventBookingRefGen, true), gettype($preventBookingRefGen)), __LINE__);
        }
        $this->preventBookingRefGen = $preventBookingRefGen;
        
        return $this;
    }
    /**
     * Get printOptionId value
     * @return int|null
     */
    public function getPrintOptionId(): ?int
    {
        return $this->printOptionId;
    }
    /**
     * Set printOptionId value
     * @param int $printOptionId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setPrintOptionId(?int $printOptionId = null): self
    {
        // validation for constraint: int
        if (!is_null($printOptionId) && !(is_int($printOptionId) || ctype_digit($printOptionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printOptionId, true), gettype($printOptionId)), __LINE__);
        }
        $this->printOptionId = $printOptionId;
        
        return $this;
    }
    /**
     * Get requiresConfirmation value
     * @return bool|null
     */
    public function getRequiresConfirmation(): ?bool
    {
        return $this->requiresConfirmation;
    }
    /**
     * Set requiresConfirmation value
     * @param bool $requiresConfirmation
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setRequiresConfirmation(?bool $requiresConfirmation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiresConfirmation) && !is_bool($requiresConfirmation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresConfirmation, true), gettype($requiresConfirmation)), __LINE__);
        }
        $this->requiresConfirmation = $requiresConfirmation;
        
        return $this;
    }
    /**
     * Get settlementGroup value
     * @return string|null
     */
    public function getSettlementGroup(): ?string
    {
        return $this->settlementGroup;
    }
    /**
     * Set settlementGroup value
     * @param string $settlementGroup
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setSettlementGroup(?string $settlementGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementGroup) && !is_string($settlementGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementGroup, true), gettype($settlementGroup)), __LINE__);
        }
        $this->settlementGroup = $settlementGroup;
        
        return $this;
    }
    /**
     * Get settlementTypeCreditDefault value
     * @return string|null
     */
    public function getSettlementTypeCreditDefault(): ?string
    {
        return $this->settlementTypeCreditDefault;
    }
    /**
     * Set settlementTypeCreditDefault value
     * @param string $settlementTypeCreditDefault
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setSettlementTypeCreditDefault(?string $settlementTypeCreditDefault = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementTypeCreditDefault) && !is_string($settlementTypeCreditDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementTypeCreditDefault, true), gettype($settlementTypeCreditDefault)), __LINE__);
        }
        $this->settlementTypeCreditDefault = $settlementTypeCreditDefault;
        
        return $this;
    }
    /**
     * Get settlementTypeDebitDefault value
     * @return string|null
     */
    public function getSettlementTypeDebitDefault(): ?string
    {
        return $this->settlementTypeDebitDefault;
    }
    /**
     * Set settlementTypeDebitDefault value
     * @param string $settlementTypeDebitDefault
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setSettlementTypeDebitDefault(?string $settlementTypeDebitDefault = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementTypeDebitDefault) && !is_string($settlementTypeDebitDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementTypeDebitDefault, true), gettype($settlementTypeDebitDefault)), __LINE__);
        }
        $this->settlementTypeDebitDefault = $settlementTypeDebitDefault;
        
        return $this;
    }
    /**
     * Get stornoNotification value
     * @return bool|null
     */
    public function getStornoNotification(): ?bool
    {
        return $this->stornoNotification;
    }
    /**
     * Set stornoNotification value
     * @param bool $stornoNotification
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setStornoNotification(?bool $stornoNotification = null): self
    {
        // validation for constraint: boolean
        if (!is_null($stornoNotification) && !is_bool($stornoNotification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stornoNotification, true), gettype($stornoNotification)), __LINE__);
        }
        $this->stornoNotification = $stornoNotification;
        
        return $this;
    }
    /**
     * Get supplierGroupForFee value
     * @return string|null
     */
    public function getSupplierGroupForFee(): ?string
    {
        return $this->supplierGroupForFee;
    }
    /**
     * Set supplierGroupForFee value
     * @param string $supplierGroupForFee
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setSupplierGroupForFee(?string $supplierGroupForFee = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierGroupForFee) && !is_string($supplierGroupForFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierGroupForFee, true), gettype($supplierGroupForFee)), __LINE__);
        }
        $this->supplierGroupForFee = $supplierGroupForFee;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get suppressBackofficeExport value
     * @return bool|null
     */
    public function getSuppressBackofficeExport(): ?bool
    {
        return $this->suppressBackofficeExport;
    }
    /**
     * Set suppressBackofficeExport value
     * @param bool $suppressBackofficeExport
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setSuppressBackofficeExport(?bool $suppressBackofficeExport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressBackofficeExport) && !is_bool($suppressBackofficeExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressBackofficeExport, true), gettype($suppressBackofficeExport)), __LINE__);
        }
        $this->suppressBackofficeExport = $suppressBackofficeExport;
        
        return $this;
    }
    /**
     * Get suppressRevenueBooking value
     * @return bool|null
     */
    public function getSuppressRevenueBooking(): ?bool
    {
        return $this->suppressRevenueBooking;
    }
    /**
     * Set suppressRevenueBooking value
     * @param bool $suppressRevenueBooking
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setSuppressRevenueBooking(?bool $suppressRevenueBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressRevenueBooking) && !is_bool($suppressRevenueBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressRevenueBooking, true), gettype($suppressRevenueBooking)), __LINE__);
        }
        $this->suppressRevenueBooking = $suppressRevenueBooking;
        
        return $this;
    }
    /**
     * Get travelDocumentsPerItem value
     * @return bool|null
     */
    public function getTravelDocumentsPerItem(): ?bool
    {
        return $this->travelDocumentsPerItem;
    }
    /**
     * Set travelDocumentsPerItem value
     * @param bool $travelDocumentsPerItem
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setTravelDocumentsPerItem(?bool $travelDocumentsPerItem = null): self
    {
        // validation for constraint: boolean
        if (!is_null($travelDocumentsPerItem) && !is_bool($travelDocumentsPerItem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($travelDocumentsPerItem, true), gettype($travelDocumentsPerItem)), __LINE__);
        }
        $this->travelDocumentsPerItem = $travelDocumentsPerItem;
        
        return $this;
    }
    /**
     * Get useBookingAsEntry value
     * @return bool|null
     */
    public function getUseBookingAsEntry(): ?bool
    {
        return $this->useBookingAsEntry;
    }
    /**
     * Set useBookingAsEntry value
     * @param bool $useBookingAsEntry
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setUseBookingAsEntry(?bool $useBookingAsEntry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useBookingAsEntry) && !is_bool($useBookingAsEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useBookingAsEntry, true), gettype($useBookingAsEntry)), __LINE__);
        }
        $this->useBookingAsEntry = $useBookingAsEntry;
        
        return $this;
    }
    /**
     * Get validCreationTravel value
     * @return string|null
     */
    public function getValidCreationTravel(): ?string
    {
        return $this->validCreationTravel;
    }
    /**
     * Set validCreationTravel value
     * @param string $validCreationTravel
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setValidCreationTravel(?string $validCreationTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($validCreationTravel) && !is_string($validCreationTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validCreationTravel, true), gettype($validCreationTravel)), __LINE__);
        }
        $this->validCreationTravel = $validCreationTravel;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
    /**
     * Get vatId value
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param string $vatId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setVatId(?string $vatId = null): self
    {
        // validation for constraint: string
        if (!is_null($vatId) && !is_string($vatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
        return $this;
    }
    /**
     * Get vatIdChange value
     * @return bool|null
     */
    public function getVatIdChange(): ?bool
    {
        return $this->vatIdChange;
    }
    /**
     * Set vatIdChange value
     * @param bool $vatIdChange
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setVatIdChange(?bool $vatIdChange = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIdChange) && !is_bool($vatIdChange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIdChange, true), gettype($vatIdChange)), __LINE__);
        }
        $this->vatIdChange = $vatIdChange;
        
        return $this;
    }
    /**
     * Get verkCode value
     * @return int|null
     */
    public function getVerkCode(): ?int
    {
        return $this->verkCode;
    }
    /**
     * Set verkCode value
     * @param int $verkCode
     * @return \Pggns\MidocoApi\Order\StructType\SupplierDTO
     */
    public function setVerkCode(?int $verkCode = null): self
    {
        // validation for constraint: int
        if (!is_null($verkCode) && !(is_int($verkCode) || ctype_digit($verkCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($verkCode, true), gettype($verkCode)), __LINE__);
        }
        $this->verkCode = $verkCode;
        
        return $this;
    }
}
