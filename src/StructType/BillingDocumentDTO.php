<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDocumentDTO StructType
 * @subpackage Structs
 */
class BillingDocumentDTO extends AbstractStructBase
{
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
     * The bankTransferOffsetDays
     * @var int|null
     */
    protected ?int $bankTransferOffsetDays = null;
    /**
     * The calculatedPrintDate
     * @var string|null
     */
    protected ?string $calculatedPrintDate = null;
    /**
     * The callDate
     * @var string|null
     */
    protected ?string $callDate = null;
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The cashBookLine
     * @var int|null
     */
    protected ?int $cashBookLine = null;
    /**
     * The cashBookPage
     * @var int|null
     */
    protected ?int $cashBookPage = null;
    /**
     * The cashBookPrintId
     * @var int|null
     */
    protected ?int $cashBookPrintId = null;
    /**
     * The ccPrintSignature
     * @var bool|null
     */
    protected ?bool $ccPrintSignature = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The clearingDate
     * @var string|null
     */
    protected ?string $clearingDate = null;
    /**
     * The collectInvReferenceNo
     * @var int|null
     */
    protected ?int $collectInvReferenceNo = null;
    /**
     * The collectInvSettingId
     * @var int|null
     */
    protected ?int $collectInvSettingId = null;
    /**
     * The consolidation
     * @var string|null
     */
    protected ?string $consolidation = null;
    /**
     * The contraAccount
     * @var int|null
     */
    protected ?int $contraAccount = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The countryCategory
     * @var string|null
     */
    protected ?string $countryCategory = null;
    /**
     * The createItInvoice
     * @var bool|null
     */
    protected ?bool $createItInvoice = null;
    /**
     * The createNormalInvoice
     * @var bool|null
     */
    protected ?bool $createNormalInvoice = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The debitCardCity
     * @var string|null
     */
    protected ?string $debitCardCity = null;
    /**
     * The debitCardStreet
     * @var string|null
     */
    protected ?string $debitCardStreet = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The displayedCurrency
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * The displayedCurrencyRate
     * @var float|null
     */
    protected ?float $displayedCurrencyRate = null;
    /**
     * The displayedTotalPrice
     * @var float|null
     */
    protected ?float $displayedTotalPrice = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The dunningDate
     * @var string|null
     */
    protected ?string $dunningDate = null;
    /**
     * The dunningLevel
     * @var int|null
     */
    protected ?int $dunningLevel = null;
    /**
     * The dunningLock
     * @var bool|null
     */
    protected ?bool $dunningLock = null;
    /**
     * The endorsement
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The isDeliveryReceipt
     * @var bool|null
     */
    protected ?bool $isDeliveryReceipt = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isManuallyCreated
     * @var bool|null
     */
    protected ?bool $isManuallyCreated = null;
    /**
     * The isRecurring
     * @var bool|null
     */
    protected ?bool $isRecurring = null;
    /**
     * The isShadowDocument
     * @var bool|null
     */
    protected ?bool $isShadowDocument = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The issueDate
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The mandateId
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The mediatorId
     * @var int|null
     */
    protected ?int $mediatorId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The overrideAddress
     * @var bool|null
     */
    protected ?bool $overrideAddress = null;
    /**
     * The paid
     * @var bool|null
     */
    protected ?bool $paid = null;
    /**
     * The paidDate
     * @var string|null
     */
    protected ?string $paidDate = null;
    /**
     * The paymentConditionId
     * @var string|null
     */
    protected ?string $paymentConditionId = null;
    /**
     * The paymentDueDate
     * @var string|null
     */
    protected ?string $paymentDueDate = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The printAllTravellers
     * @var bool|null
     */
    protected ?bool $printAllTravellers = null;
    /**
     * The printGroupName
     * @var bool|null
     */
    protected ?bool $printGroupName = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The printingCount
     * @var int|null
     */
    protected ?int $printingCount = null;
    /**
     * The printingDate
     * @var string|null
     */
    protected ?string $printingDate = null;
    /**
     * The printingUser
     * @var int|null
     */
    protected ?int $printingUser = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * The shadowDocumentId
     * @var int|null
     */
    protected ?int $shadowDocumentId = null;
    /**
     * The shadowDocumentUnitName
     * @var string|null
     */
    protected ?string $shadowDocumentUnitName = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetNo
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The submitDate
     * @var string|null
     */
    protected ?string $submitDate = null;
    /**
     * The swiftBicCode
     * @var string|null
     */
    protected ?string $swiftBicCode = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The usedDocumentNo
     * @var int|null
     */
    protected ?int $usedDocumentNo = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * The voidedDocumentNo
     * @var int|null
     */
    protected ?int $voidedDocumentNo = null;
    /**
     * Constructor method for BillingDocumentDTO
     * @uses BillingDocumentDTO::setAccountOwner()
     * @uses BillingDocumentDTO::setBankAccountNo()
     * @uses BillingDocumentDTO::setBankCountry()
     * @uses BillingDocumentDTO::setBankName()
     * @uses BillingDocumentDTO::setBankNo()
     * @uses BillingDocumentDTO::setBankTransferOffsetDays()
     * @uses BillingDocumentDTO::setCalculatedPrintDate()
     * @uses BillingDocumentDTO::setCallDate()
     * @uses BillingDocumentDTO::setCashBookId()
     * @uses BillingDocumentDTO::setCashBookLine()
     * @uses BillingDocumentDTO::setCashBookPage()
     * @uses BillingDocumentDTO::setCashBookPrintId()
     * @uses BillingDocumentDTO::setCcPrintSignature()
     * @uses BillingDocumentDTO::setCity()
     * @uses BillingDocumentDTO::setClearingDate()
     * @uses BillingDocumentDTO::setCollectInvReferenceNo()
     * @uses BillingDocumentDTO::setCollectInvSettingId()
     * @uses BillingDocumentDTO::setConsolidation()
     * @uses BillingDocumentDTO::setContraAccount()
     * @uses BillingDocumentDTO::setCountry()
     * @uses BillingDocumentDTO::setCountryCategory()
     * @uses BillingDocumentDTO::setCreateItInvoice()
     * @uses BillingDocumentDTO::setCreateNormalInvoice()
     * @uses BillingDocumentDTO::setCreationDate()
     * @uses BillingDocumentDTO::setCreationUser()
     * @uses BillingDocumentDTO::setCurrency()
     * @uses BillingDocumentDTO::setCustomerId()
     * @uses BillingDocumentDTO::setDebitCardCity()
     * @uses BillingDocumentDTO::setDebitCardStreet()
     * @uses BillingDocumentDTO::setDebitorNo()
     * @uses BillingDocumentDTO::setDisplayedCurrency()
     * @uses BillingDocumentDTO::setDisplayedCurrencyRate()
     * @uses BillingDocumentDTO::setDisplayedTotalPrice()
     * @uses BillingDocumentDTO::setDocumentId()
     * @uses BillingDocumentDTO::setDocumentNo()
     * @uses BillingDocumentDTO::setDocumentType()
     * @uses BillingDocumentDTO::setDunningDate()
     * @uses BillingDocumentDTO::setDunningLevel()
     * @uses BillingDocumentDTO::setDunningLock()
     * @uses BillingDocumentDTO::setEndorsement()
     * @uses BillingDocumentDTO::setErrorBundle()
     * @uses BillingDocumentDTO::setErrorCode()
     * @uses BillingDocumentDTO::setForename()
     * @uses BillingDocumentDTO::setIban()
     * @uses BillingDocumentDTO::setInternalVersion()
     * @uses BillingDocumentDTO::setInvoicedAmount()
     * @uses BillingDocumentDTO::setIsDeliveryReceipt()
     * @uses BillingDocumentDTO::setIsExported()
     * @uses BillingDocumentDTO::setIsManuallyCreated()
     * @uses BillingDocumentDTO::setIsRecurring()
     * @uses BillingDocumentDTO::setIsShadowDocument()
     * @uses BillingDocumentDTO::setIsSpecialCustomer()
     * @uses BillingDocumentDTO::setIssueDate()
     * @uses BillingDocumentDTO::setMandateId()
     * @uses BillingDocumentDTO::setMedia()
     * @uses BillingDocumentDTO::setMediatorId()
     * @uses BillingDocumentDTO::setName()
     * @uses BillingDocumentDTO::setOverrideAddress()
     * @uses BillingDocumentDTO::setPaid()
     * @uses BillingDocumentDTO::setPaidDate()
     * @uses BillingDocumentDTO::setPaymentConditionId()
     * @uses BillingDocumentDTO::setPaymentDueDate()
     * @uses BillingDocumentDTO::setPaymentType()
     * @uses BillingDocumentDTO::setPostalCode()
     * @uses BillingDocumentDTO::setPrintAllTravellers()
     * @uses BillingDocumentDTO::setPrintGroupName()
     * @uses BillingDocumentDTO::setPrintType()
     * @uses BillingDocumentDTO::setPrintingCount()
     * @uses BillingDocumentDTO::setPrintingDate()
     * @uses BillingDocumentDTO::setPrintingUser()
     * @uses BillingDocumentDTO::setReceiptDate()
     * @uses BillingDocumentDTO::setSalutationId()
     * @uses BillingDocumentDTO::setShadowDocumentId()
     * @uses BillingDocumentDTO::setShadowDocumentUnitName()
     * @uses BillingDocumentDTO::setStreet()
     * @uses BillingDocumentDTO::setStreetNo()
     * @uses BillingDocumentDTO::setSubmitDate()
     * @uses BillingDocumentDTO::setSwiftBicCode()
     * @uses BillingDocumentDTO::setTitle()
     * @uses BillingDocumentDTO::setTotalPrice()
     * @uses BillingDocumentDTO::setType()
     * @uses BillingDocumentDTO::setUnitName()
     * @uses BillingDocumentDTO::setUsedDocumentNo()
     * @uses BillingDocumentDTO::setVatId()
     * @uses BillingDocumentDTO::setVoidedDocumentNo()
     * @param string $accountOwner
     * @param string $bankAccountNo
     * @param string $bankCountry
     * @param string $bankName
     * @param string $bankNo
     * @param int $bankTransferOffsetDays
     * @param string $calculatedPrintDate
     * @param string $callDate
     * @param int $cashBookId
     * @param int $cashBookLine
     * @param int $cashBookPage
     * @param int $cashBookPrintId
     * @param bool $ccPrintSignature
     * @param string $city
     * @param string $clearingDate
     * @param int $collectInvReferenceNo
     * @param int $collectInvSettingId
     * @param string $consolidation
     * @param int $contraAccount
     * @param string $country
     * @param string $countryCategory
     * @param bool $createItInvoice
     * @param bool $createNormalInvoice
     * @param string $creationDate
     * @param int $creationUser
     * @param string $currency
     * @param int $customerId
     * @param string $debitCardCity
     * @param string $debitCardStreet
     * @param string $debitorNo
     * @param string $displayedCurrency
     * @param float $displayedCurrencyRate
     * @param float $displayedTotalPrice
     * @param int $documentId
     * @param int $documentNo
     * @param string $documentType
     * @param string $dunningDate
     * @param int $dunningLevel
     * @param bool $dunningLock
     * @param string $endorsement
     * @param string $errorBundle
     * @param string $errorCode
     * @param string $forename
     * @param string $iban
     * @param int $internalVersion
     * @param float $invoicedAmount
     * @param bool $isDeliveryReceipt
     * @param bool $isExported
     * @param bool $isManuallyCreated
     * @param bool $isRecurring
     * @param bool $isShadowDocument
     * @param bool $isSpecialCustomer
     * @param string $issueDate
     * @param int $mandateId
     * @param string $media
     * @param int $mediatorId
     * @param string $name
     * @param bool $overrideAddress
     * @param bool $paid
     * @param string $paidDate
     * @param string $paymentConditionId
     * @param string $paymentDueDate
     * @param string $paymentType
     * @param string $postalCode
     * @param bool $printAllTravellers
     * @param bool $printGroupName
     * @param string $printType
     * @param int $printingCount
     * @param string $printingDate
     * @param int $printingUser
     * @param string $receiptDate
     * @param string $salutationId
     * @param int $shadowDocumentId
     * @param string $shadowDocumentUnitName
     * @param string $street
     * @param string $streetNo
     * @param string $submitDate
     * @param string $swiftBicCode
     * @param string $title
     * @param float $totalPrice
     * @param string $type
     * @param string $unitName
     * @param int $usedDocumentNo
     * @param string $vatId
     * @param int $voidedDocumentNo
     */
    public function __construct(?string $accountOwner = null, ?string $bankAccountNo = null, ?string $bankCountry = null, ?string $bankName = null, ?string $bankNo = null, ?int $bankTransferOffsetDays = null, ?string $calculatedPrintDate = null, ?string $callDate = null, ?int $cashBookId = null, ?int $cashBookLine = null, ?int $cashBookPage = null, ?int $cashBookPrintId = null, ?bool $ccPrintSignature = null, ?string $city = null, ?string $clearingDate = null, ?int $collectInvReferenceNo = null, ?int $collectInvSettingId = null, ?string $consolidation = null, ?int $contraAccount = null, ?string $country = null, ?string $countryCategory = null, ?bool $createItInvoice = null, ?bool $createNormalInvoice = null, ?string $creationDate = null, ?int $creationUser = null, ?string $currency = null, ?int $customerId = null, ?string $debitCardCity = null, ?string $debitCardStreet = null, ?string $debitorNo = null, ?string $displayedCurrency = null, ?float $displayedCurrencyRate = null, ?float $displayedTotalPrice = null, ?int $documentId = null, ?int $documentNo = null, ?string $documentType = null, ?string $dunningDate = null, ?int $dunningLevel = null, ?bool $dunningLock = null, ?string $endorsement = null, ?string $errorBundle = null, ?string $errorCode = null, ?string $forename = null, ?string $iban = null, ?int $internalVersion = null, ?float $invoicedAmount = null, ?bool $isDeliveryReceipt = null, ?bool $isExported = null, ?bool $isManuallyCreated = null, ?bool $isRecurring = null, ?bool $isShadowDocument = null, ?bool $isSpecialCustomer = null, ?string $issueDate = null, ?int $mandateId = null, ?string $media = null, ?int $mediatorId = null, ?string $name = null, ?bool $overrideAddress = null, ?bool $paid = null, ?string $paidDate = null, ?string $paymentConditionId = null, ?string $paymentDueDate = null, ?string $paymentType = null, ?string $postalCode = null, ?bool $printAllTravellers = null, ?bool $printGroupName = null, ?string $printType = null, ?int $printingCount = null, ?string $printingDate = null, ?int $printingUser = null, ?string $receiptDate = null, ?string $salutationId = null, ?int $shadowDocumentId = null, ?string $shadowDocumentUnitName = null, ?string $street = null, ?string $streetNo = null, ?string $submitDate = null, ?string $swiftBicCode = null, ?string $title = null, ?float $totalPrice = null, ?string $type = null, ?string $unitName = null, ?int $usedDocumentNo = null, ?string $vatId = null, ?int $voidedDocumentNo = null)
    {
        $this
            ->setAccountOwner($accountOwner)
            ->setBankAccountNo($bankAccountNo)
            ->setBankCountry($bankCountry)
            ->setBankName($bankName)
            ->setBankNo($bankNo)
            ->setBankTransferOffsetDays($bankTransferOffsetDays)
            ->setCalculatedPrintDate($calculatedPrintDate)
            ->setCallDate($callDate)
            ->setCashBookId($cashBookId)
            ->setCashBookLine($cashBookLine)
            ->setCashBookPage($cashBookPage)
            ->setCashBookPrintId($cashBookPrintId)
            ->setCcPrintSignature($ccPrintSignature)
            ->setCity($city)
            ->setClearingDate($clearingDate)
            ->setCollectInvReferenceNo($collectInvReferenceNo)
            ->setCollectInvSettingId($collectInvSettingId)
            ->setConsolidation($consolidation)
            ->setContraAccount($contraAccount)
            ->setCountry($country)
            ->setCountryCategory($countryCategory)
            ->setCreateItInvoice($createItInvoice)
            ->setCreateNormalInvoice($createNormalInvoice)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setCurrency($currency)
            ->setCustomerId($customerId)
            ->setDebitCardCity($debitCardCity)
            ->setDebitCardStreet($debitCardStreet)
            ->setDebitorNo($debitorNo)
            ->setDisplayedCurrency($displayedCurrency)
            ->setDisplayedCurrencyRate($displayedCurrencyRate)
            ->setDisplayedTotalPrice($displayedTotalPrice)
            ->setDocumentId($documentId)
            ->setDocumentNo($documentNo)
            ->setDocumentType($documentType)
            ->setDunningDate($dunningDate)
            ->setDunningLevel($dunningLevel)
            ->setDunningLock($dunningLock)
            ->setEndorsement($endorsement)
            ->setErrorBundle($errorBundle)
            ->setErrorCode($errorCode)
            ->setForename($forename)
            ->setIban($iban)
            ->setInternalVersion($internalVersion)
            ->setInvoicedAmount($invoicedAmount)
            ->setIsDeliveryReceipt($isDeliveryReceipt)
            ->setIsExported($isExported)
            ->setIsManuallyCreated($isManuallyCreated)
            ->setIsRecurring($isRecurring)
            ->setIsShadowDocument($isShadowDocument)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setIssueDate($issueDate)
            ->setMandateId($mandateId)
            ->setMedia($media)
            ->setMediatorId($mediatorId)
            ->setName($name)
            ->setOverrideAddress($overrideAddress)
            ->setPaid($paid)
            ->setPaidDate($paidDate)
            ->setPaymentConditionId($paymentConditionId)
            ->setPaymentDueDate($paymentDueDate)
            ->setPaymentType($paymentType)
            ->setPostalCode($postalCode)
            ->setPrintAllTravellers($printAllTravellers)
            ->setPrintGroupName($printGroupName)
            ->setPrintType($printType)
            ->setPrintingCount($printingCount)
            ->setPrintingDate($printingDate)
            ->setPrintingUser($printingUser)
            ->setReceiptDate($receiptDate)
            ->setSalutationId($salutationId)
            ->setShadowDocumentId($shadowDocumentId)
            ->setShadowDocumentUnitName($shadowDocumentUnitName)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setSubmitDate($submitDate)
            ->setSwiftBicCode($swiftBicCode)
            ->setTitle($title)
            ->setTotalPrice($totalPrice)
            ->setType($type)
            ->setUnitName($unitName)
            ->setUsedDocumentNo($usedDocumentNo)
            ->setVatId($vatId)
            ->setVoidedDocumentNo($voidedDocumentNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get bankTransferOffsetDays value
     * @return int|null
     */
    public function getBankTransferOffsetDays(): ?int
    {
        return $this->bankTransferOffsetDays;
    }
    /**
     * Set bankTransferOffsetDays value
     * @param int $bankTransferOffsetDays
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setBankTransferOffsetDays(?int $bankTransferOffsetDays = null): self
    {
        // validation for constraint: int
        if (!is_null($bankTransferOffsetDays) && !(is_int($bankTransferOffsetDays) || ctype_digit($bankTransferOffsetDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bankTransferOffsetDays, true), gettype($bankTransferOffsetDays)), __LINE__);
        }
        $this->bankTransferOffsetDays = $bankTransferOffsetDays;
        
        return $this;
    }
    /**
     * Get calculatedPrintDate value
     * @return string|null
     */
    public function getCalculatedPrintDate(): ?string
    {
        return $this->calculatedPrintDate;
    }
    /**
     * Set calculatedPrintDate value
     * @param string $calculatedPrintDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCalculatedPrintDate(?string $calculatedPrintDate = null): self
    {
        // validation for constraint: string
        if (!is_null($calculatedPrintDate) && !is_string($calculatedPrintDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculatedPrintDate, true), gettype($calculatedPrintDate)), __LINE__);
        }
        $this->calculatedPrintDate = $calculatedPrintDate;
        
        return $this;
    }
    /**
     * Get callDate value
     * @return string|null
     */
    public function getCallDate(): ?string
    {
        return $this->callDate;
    }
    /**
     * Set callDate value
     * @param string $callDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCallDate(?string $callDate = null): self
    {
        // validation for constraint: string
        if (!is_null($callDate) && !is_string($callDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callDate, true), gettype($callDate)), __LINE__);
        }
        $this->callDate = $callDate;
        
        return $this;
    }
    /**
     * Get cashBookId value
     * @return int|null
     */
    public function getCashBookId(): ?int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCashBookId(?int $cashBookId = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get cashBookLine value
     * @return int|null
     */
    public function getCashBookLine(): ?int
    {
        return $this->cashBookLine;
    }
    /**
     * Set cashBookLine value
     * @param int $cashBookLine
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCashBookLine(?int $cashBookLine = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookLine) && !(is_int($cashBookLine) || ctype_digit($cashBookLine))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookLine, true), gettype($cashBookLine)), __LINE__);
        }
        $this->cashBookLine = $cashBookLine;
        
        return $this;
    }
    /**
     * Get cashBookPage value
     * @return int|null
     */
    public function getCashBookPage(): ?int
    {
        return $this->cashBookPage;
    }
    /**
     * Set cashBookPage value
     * @param int $cashBookPage
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCashBookPage(?int $cashBookPage = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookPage) && !(is_int($cashBookPage) || ctype_digit($cashBookPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookPage, true), gettype($cashBookPage)), __LINE__);
        }
        $this->cashBookPage = $cashBookPage;
        
        return $this;
    }
    /**
     * Get cashBookPrintId value
     * @return int|null
     */
    public function getCashBookPrintId(): ?int
    {
        return $this->cashBookPrintId;
    }
    /**
     * Set cashBookPrintId value
     * @param int $cashBookPrintId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCashBookPrintId(?int $cashBookPrintId = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookPrintId) && !(is_int($cashBookPrintId) || ctype_digit($cashBookPrintId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookPrintId, true), gettype($cashBookPrintId)), __LINE__);
        }
        $this->cashBookPrintId = $cashBookPrintId;
        
        return $this;
    }
    /**
     * Get ccPrintSignature value
     * @return bool|null
     */
    public function getCcPrintSignature(): ?bool
    {
        return $this->ccPrintSignature;
    }
    /**
     * Set ccPrintSignature value
     * @param bool $ccPrintSignature
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCcPrintSignature(?bool $ccPrintSignature = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ccPrintSignature) && !is_bool($ccPrintSignature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ccPrintSignature, true), gettype($ccPrintSignature)), __LINE__);
        }
        $this->ccPrintSignature = $ccPrintSignature;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get clearingDate value
     * @return string|null
     */
    public function getClearingDate(): ?string
    {
        return $this->clearingDate;
    }
    /**
     * Set clearingDate value
     * @param string $clearingDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setClearingDate(?string $clearingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($clearingDate) && !is_string($clearingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clearingDate, true), gettype($clearingDate)), __LINE__);
        }
        $this->clearingDate = $clearingDate;
        
        return $this;
    }
    /**
     * Get collectInvReferenceNo value
     * @return int|null
     */
    public function getCollectInvReferenceNo(): ?int
    {
        return $this->collectInvReferenceNo;
    }
    /**
     * Set collectInvReferenceNo value
     * @param int $collectInvReferenceNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCollectInvReferenceNo(?int $collectInvReferenceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($collectInvReferenceNo) && !(is_int($collectInvReferenceNo) || ctype_digit($collectInvReferenceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($collectInvReferenceNo, true), gettype($collectInvReferenceNo)), __LINE__);
        }
        $this->collectInvReferenceNo = $collectInvReferenceNo;
        
        return $this;
    }
    /**
     * Get collectInvSettingId value
     * @return int|null
     */
    public function getCollectInvSettingId(): ?int
    {
        return $this->collectInvSettingId;
    }
    /**
     * Set collectInvSettingId value
     * @param int $collectInvSettingId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCollectInvSettingId(?int $collectInvSettingId = null): self
    {
        // validation for constraint: int
        if (!is_null($collectInvSettingId) && !(is_int($collectInvSettingId) || ctype_digit($collectInvSettingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($collectInvSettingId, true), gettype($collectInvSettingId)), __LINE__);
        }
        $this->collectInvSettingId = $collectInvSettingId;
        
        return $this;
    }
    /**
     * Get consolidation value
     * @return string|null
     */
    public function getConsolidation(): ?string
    {
        return $this->consolidation;
    }
    /**
     * Set consolidation value
     * @param string $consolidation
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setConsolidation(?string $consolidation = null): self
    {
        // validation for constraint: string
        if (!is_null($consolidation) && !is_string($consolidation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consolidation, true), gettype($consolidation)), __LINE__);
        }
        $this->consolidation = $consolidation;
        
        return $this;
    }
    /**
     * Get contraAccount value
     * @return int|null
     */
    public function getContraAccount(): ?int
    {
        return $this->contraAccount;
    }
    /**
     * Set contraAccount value
     * @param int $contraAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setContraAccount(?int $contraAccount = null): self
    {
        // validation for constraint: int
        if (!is_null($contraAccount) && !(is_int($contraAccount) || ctype_digit($contraAccount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contraAccount, true), gettype($contraAccount)), __LINE__);
        }
        $this->contraAccount = $contraAccount;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get countryCategory value
     * @return string|null
     */
    public function getCountryCategory(): ?string
    {
        return $this->countryCategory;
    }
    /**
     * Set countryCategory value
     * @param string $countryCategory
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCountryCategory(?string $countryCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCategory) && !is_string($countryCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCategory, true), gettype($countryCategory)), __LINE__);
        }
        $this->countryCategory = $countryCategory;
        
        return $this;
    }
    /**
     * Get createItInvoice value
     * @return bool|null
     */
    public function getCreateItInvoice(): ?bool
    {
        return $this->createItInvoice;
    }
    /**
     * Set createItInvoice value
     * @param bool $createItInvoice
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCreateItInvoice(?bool $createItInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createItInvoice) && !is_bool($createItInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createItInvoice, true), gettype($createItInvoice)), __LINE__);
        }
        $this->createItInvoice = $createItInvoice;
        
        return $this;
    }
    /**
     * Get createNormalInvoice value
     * @return bool|null
     */
    public function getCreateNormalInvoice(): ?bool
    {
        return $this->createNormalInvoice;
    }
    /**
     * Set createNormalInvoice value
     * @param bool $createNormalInvoice
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCreateNormalInvoice(?bool $createNormalInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createNormalInvoice) && !is_bool($createNormalInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createNormalInvoice, true), gettype($createNormalInvoice)), __LINE__);
        }
        $this->createNormalInvoice = $createNormalInvoice;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get debitCardCity value
     * @return string|null
     */
    public function getDebitCardCity(): ?string
    {
        return $this->debitCardCity;
    }
    /**
     * Set debitCardCity value
     * @param string $debitCardCity
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDebitCardCity(?string $debitCardCity = null): self
    {
        // validation for constraint: string
        if (!is_null($debitCardCity) && !is_string($debitCardCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitCardCity, true), gettype($debitCardCity)), __LINE__);
        }
        $this->debitCardCity = $debitCardCity;
        
        return $this;
    }
    /**
     * Get debitCardStreet value
     * @return string|null
     */
    public function getDebitCardStreet(): ?string
    {
        return $this->debitCardStreet;
    }
    /**
     * Set debitCardStreet value
     * @param string $debitCardStreet
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDebitCardStreet(?string $debitCardStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($debitCardStreet) && !is_string($debitCardStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitCardStreet, true), gettype($debitCardStreet)), __LINE__);
        }
        $this->debitCardStreet = $debitCardStreet;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get displayedCurrency value
     * @return string|null
     */
    public function getDisplayedCurrency(): ?string
    {
        return $this->displayedCurrency;
    }
    /**
     * Set displayedCurrency value
     * @param string $displayedCurrency
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDisplayedCurrency(?string $displayedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedCurrency) && !is_string($displayedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedCurrency, true), gettype($displayedCurrency)), __LINE__);
        }
        $this->displayedCurrency = $displayedCurrency;
        
        return $this;
    }
    /**
     * Get displayedCurrencyRate value
     * @return float|null
     */
    public function getDisplayedCurrencyRate(): ?float
    {
        return $this->displayedCurrencyRate;
    }
    /**
     * Set displayedCurrencyRate value
     * @param float $displayedCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDisplayedCurrencyRate(?float $displayedCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedCurrencyRate) && !(is_float($displayedCurrencyRate) || is_numeric($displayedCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedCurrencyRate, true), gettype($displayedCurrencyRate)), __LINE__);
        }
        $this->displayedCurrencyRate = $displayedCurrencyRate;
        
        return $this;
    }
    /**
     * Get displayedTotalPrice value
     * @return float|null
     */
    public function getDisplayedTotalPrice(): ?float
    {
        return $this->displayedTotalPrice;
    }
    /**
     * Set displayedTotalPrice value
     * @param float $displayedTotalPrice
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDisplayedTotalPrice(?float $displayedTotalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedTotalPrice) && !(is_float($displayedTotalPrice) || is_numeric($displayedTotalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedTotalPrice, true), gettype($displayedTotalPrice)), __LINE__);
        }
        $this->displayedTotalPrice = $displayedTotalPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get dunningDate value
     * @return string|null
     */
    public function getDunningDate(): ?string
    {
        return $this->dunningDate;
    }
    /**
     * Set dunningDate value
     * @param string $dunningDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDunningDate(?string $dunningDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dunningDate) && !is_string($dunningDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dunningDate, true), gettype($dunningDate)), __LINE__);
        }
        $this->dunningDate = $dunningDate;
        
        return $this;
    }
    /**
     * Get dunningLevel value
     * @return int|null
     */
    public function getDunningLevel(): ?int
    {
        return $this->dunningLevel;
    }
    /**
     * Set dunningLevel value
     * @param int $dunningLevel
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDunningLevel(?int $dunningLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningLevel) && !(is_int($dunningLevel) || ctype_digit($dunningLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningLevel, true), gettype($dunningLevel)), __LINE__);
        }
        $this->dunningLevel = $dunningLevel;
        
        return $this;
    }
    /**
     * Get dunningLock value
     * @return bool|null
     */
    public function getDunningLock(): ?bool
    {
        return $this->dunningLock;
    }
    /**
     * Set dunningLock value
     * @param bool $dunningLock
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setDunningLock(?bool $dunningLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dunningLock) && !is_bool($dunningLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dunningLock, true), gettype($dunningLock)), __LINE__);
        }
        $this->dunningLock = $dunningLock;
        
        return $this;
    }
    /**
     * Get endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->endorsement;
    }
    /**
     * Set endorsement value
     * @param string $endorsement
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        $this->endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get isDeliveryReceipt value
     * @return bool|null
     */
    public function getIsDeliveryReceipt(): ?bool
    {
        return $this->isDeliveryReceipt;
    }
    /**
     * Set isDeliveryReceipt value
     * @param bool $isDeliveryReceipt
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setIsDeliveryReceipt(?bool $isDeliveryReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeliveryReceipt) && !is_bool($isDeliveryReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeliveryReceipt, true), gettype($isDeliveryReceipt)), __LINE__);
        }
        $this->isDeliveryReceipt = $isDeliveryReceipt;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get isManuallyCreated value
     * @return bool|null
     */
    public function getIsManuallyCreated(): ?bool
    {
        return $this->isManuallyCreated;
    }
    /**
     * Set isManuallyCreated value
     * @param bool $isManuallyCreated
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setIsManuallyCreated(?bool $isManuallyCreated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManuallyCreated) && !is_bool($isManuallyCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManuallyCreated, true), gettype($isManuallyCreated)), __LINE__);
        }
        $this->isManuallyCreated = $isManuallyCreated;
        
        return $this;
    }
    /**
     * Get isRecurring value
     * @return bool|null
     */
    public function getIsRecurring(): ?bool
    {
        return $this->isRecurring;
    }
    /**
     * Set isRecurring value
     * @param bool $isRecurring
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setIsRecurring(?bool $isRecurring = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->isRecurring = $isRecurring;
        
        return $this;
    }
    /**
     * Get isShadowDocument value
     * @return bool|null
     */
    public function getIsShadowDocument(): ?bool
    {
        return $this->isShadowDocument;
    }
    /**
     * Set isShadowDocument value
     * @param bool $isShadowDocument
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setIsShadowDocument(?bool $isShadowDocument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShadowDocument) && !is_bool($isShadowDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShadowDocument, true), gettype($isShadowDocument)), __LINE__);
        }
        $this->isShadowDocument = $isShadowDocument;
        
        return $this;
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        
        return $this;
    }
    /**
     * Get mandateId value
     * @return int|null
     */
    public function getMandateId(): ?int
    {
        return $this->mandateId;
    }
    /**
     * Set mandateId value
     * @param int $mandateId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setMandateId(?int $mandateId = null): self
    {
        // validation for constraint: int
        if (!is_null($mandateId) && !(is_int($mandateId) || ctype_digit($mandateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateId, true), gettype($mandateId)), __LINE__);
        }
        $this->mandateId = $mandateId;
        
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return int|null
     */
    public function getMediatorId(): ?int
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param int $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setMediatorId(?int $mediatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorId) && !(is_int($mediatorId) || ctype_digit($mediatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get overrideAddress value
     * @return bool|null
     */
    public function getOverrideAddress(): ?bool
    {
        return $this->overrideAddress;
    }
    /**
     * Set overrideAddress value
     * @param bool $overrideAddress
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setOverrideAddress(?bool $overrideAddress = null): self
    {
        // validation for constraint: boolean
        if (!is_null($overrideAddress) && !is_bool($overrideAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideAddress, true), gettype($overrideAddress)), __LINE__);
        }
        $this->overrideAddress = $overrideAddress;
        
        return $this;
    }
    /**
     * Get paid value
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }
    /**
     * Set paid value
     * @param bool $paid
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPaid(?bool $paid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paid) && !is_bool($paid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paid, true), gettype($paid)), __LINE__);
        }
        $this->paid = $paid;
        
        return $this;
    }
    /**
     * Get paidDate value
     * @return string|null
     */
    public function getPaidDate(): ?string
    {
        return $this->paidDate;
    }
    /**
     * Set paidDate value
     * @param string $paidDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPaidDate(?string $paidDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paidDate) && !is_string($paidDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paidDate, true), gettype($paidDate)), __LINE__);
        }
        $this->paidDate = $paidDate;
        
        return $this;
    }
    /**
     * Get paymentConditionId value
     * @return string|null
     */
    public function getPaymentConditionId(): ?string
    {
        return $this->paymentConditionId;
    }
    /**
     * Set paymentConditionId value
     * @param string $paymentConditionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPaymentConditionId(?string $paymentConditionId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentConditionId) && !is_string($paymentConditionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentConditionId, true), gettype($paymentConditionId)), __LINE__);
        }
        $this->paymentConditionId = $paymentConditionId;
        
        return $this;
    }
    /**
     * Get paymentDueDate value
     * @return string|null
     */
    public function getPaymentDueDate(): ?string
    {
        return $this->paymentDueDate;
    }
    /**
     * Set paymentDueDate value
     * @param string $paymentDueDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPaymentDueDate(?string $paymentDueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDueDate) && !is_string($paymentDueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDueDate, true), gettype($paymentDueDate)), __LINE__);
        }
        $this->paymentDueDate = $paymentDueDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get printAllTravellers value
     * @return bool|null
     */
    public function getPrintAllTravellers(): ?bool
    {
        return $this->printAllTravellers;
    }
    /**
     * Set printAllTravellers value
     * @param bool $printAllTravellers
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPrintAllTravellers(?bool $printAllTravellers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printAllTravellers) && !is_bool($printAllTravellers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printAllTravellers, true), gettype($printAllTravellers)), __LINE__);
        }
        $this->printAllTravellers = $printAllTravellers;
        
        return $this;
    }
    /**
     * Get printGroupName value
     * @return bool|null
     */
    public function getPrintGroupName(): ?bool
    {
        return $this->printGroupName;
    }
    /**
     * Set printGroupName value
     * @param bool $printGroupName
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPrintGroupName(?bool $printGroupName = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printGroupName) && !is_bool($printGroupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printGroupName, true), gettype($printGroupName)), __LINE__);
        }
        $this->printGroupName = $printGroupName;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get printingCount value
     * @return int|null
     */
    public function getPrintingCount(): ?int
    {
        return $this->printingCount;
    }
    /**
     * Set printingCount value
     * @param int $printingCount
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPrintingCount(?int $printingCount = null): self
    {
        // validation for constraint: int
        if (!is_null($printingCount) && !(is_int($printingCount) || ctype_digit($printingCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printingCount, true), gettype($printingCount)), __LINE__);
        }
        $this->printingCount = $printingCount;
        
        return $this;
    }
    /**
     * Get printingDate value
     * @return string|null
     */
    public function getPrintingDate(): ?string
    {
        return $this->printingDate;
    }
    /**
     * Set printingDate value
     * @param string $printingDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPrintingDate(?string $printingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printingDate) && !is_string($printingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingDate, true), gettype($printingDate)), __LINE__);
        }
        $this->printingDate = $printingDate;
        
        return $this;
    }
    /**
     * Get printingUser value
     * @return int|null
     */
    public function getPrintingUser(): ?int
    {
        return $this->printingUser;
    }
    /**
     * Set printingUser value
     * @param int $printingUser
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setPrintingUser(?int $printingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($printingUser) && !(is_int($printingUser) || ctype_digit($printingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printingUser, true), gettype($printingUser)), __LINE__);
        }
        $this->printingUser = $printingUser;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
        return $this;
    }
    /**
     * Get shadowDocumentId value
     * @return int|null
     */
    public function getShadowDocumentId(): ?int
    {
        return $this->shadowDocumentId;
    }
    /**
     * Set shadowDocumentId value
     * @param int $shadowDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setShadowDocumentId(?int $shadowDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($shadowDocumentId) && !(is_int($shadowDocumentId) || ctype_digit($shadowDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shadowDocumentId, true), gettype($shadowDocumentId)), __LINE__);
        }
        $this->shadowDocumentId = $shadowDocumentId;
        
        return $this;
    }
    /**
     * Get shadowDocumentUnitName value
     * @return string|null
     */
    public function getShadowDocumentUnitName(): ?string
    {
        return $this->shadowDocumentUnitName;
    }
    /**
     * Set shadowDocumentUnitName value
     * @param string $shadowDocumentUnitName
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setShadowDocumentUnitName(?string $shadowDocumentUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($shadowDocumentUnitName) && !is_string($shadowDocumentUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shadowDocumentUnitName, true), gettype($shadowDocumentUnitName)), __LINE__);
        }
        $this->shadowDocumentUnitName = $shadowDocumentUnitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->streetNo = $streetNo;
        
        return $this;
    }
    /**
     * Get submitDate value
     * @return string|null
     */
    public function getSubmitDate(): ?string
    {
        return $this->submitDate;
    }
    /**
     * Set submitDate value
     * @param string $submitDate
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setSubmitDate(?string $submitDate = null): self
    {
        // validation for constraint: string
        if (!is_null($submitDate) && !is_string($submitDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($submitDate, true), gettype($submitDate)), __LINE__);
        }
        $this->submitDate = $submitDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get usedDocumentNo value
     * @return int|null
     */
    public function getUsedDocumentNo(): ?int
    {
        return $this->usedDocumentNo;
    }
    /**
     * Set usedDocumentNo value
     * @param int $usedDocumentNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setUsedDocumentNo(?int $usedDocumentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($usedDocumentNo) && !(is_int($usedDocumentNo) || ctype_digit($usedDocumentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($usedDocumentNo, true), gettype($usedDocumentNo)), __LINE__);
        }
        $this->usedDocumentNo = $usedDocumentNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
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
     * Get voidedDocumentNo value
     * @return int|null
     */
    public function getVoidedDocumentNo(): ?int
    {
        return $this->voidedDocumentNo;
    }
    /**
     * Set voidedDocumentNo value
     * @param int $voidedDocumentNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDTO
     */
    public function setVoidedDocumentNo(?int $voidedDocumentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($voidedDocumentNo) && !(is_int($voidedDocumentNo) || ctype_digit($voidedDocumentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidedDocumentNo, true), gettype($voidedDocumentNo)), __LINE__);
        }
        $this->voidedDocumentNo = $voidedDocumentNo;
        
        return $this;
    }
}
