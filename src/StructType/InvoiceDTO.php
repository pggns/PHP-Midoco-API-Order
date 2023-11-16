<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceDTO StructType
 * @subpackage Structs
 */
class InvoiceDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The callDate
     * @var string|null
     */
    protected ?string $callDate = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
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
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The depositAmount
     * @var float|null
     */
    protected ?float $depositAmount = null;
    /**
     * The depositDate
     * @var string|null
     */
    protected ?string $depositDate = null;
    /**
     * The documentExportDate
     * @var string|null
     */
    protected ?string $documentExportDate = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The finalPaymentAmount
     * @var float|null
     */
    protected ?float $finalPaymentAmount = null;
    /**
     * The finalPaymentDate
     * @var string|null
     */
    protected ?string $finalPaymentDate = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The invoiceLogicVersion
     * @var int|null
     */
    protected ?int $invoiceLogicVersion = null;
    /**
     * The invoiceNo
     * @var int|null
     */
    protected ?int $invoiceNo = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The isDiffInvoice
     * @var bool|null
     */
    protected ?bool $isDiffInvoice = null;
    /**
     * The isDocumentExported
     * @var bool|null
     */
    protected ?bool $isDocumentExported = null;
    /**
     * The isReprint
     * @var bool|null
     */
    protected ?bool $isReprint = null;
    /**
     * The isVoided
     * @var bool|null
     */
    protected ?bool $isVoided = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The orderDocumentId
     * @var int|null
     */
    protected ?int $orderDocumentId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The partialInvoice
     * @var bool|null
     */
    protected ?bool $partialInvoice = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The reverseChargeCountry
     * @var string|null
     */
    protected ?string $reverseChargeCountry = null;
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
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * The voidInvoiceId
     * @var int|null
     */
    protected ?int $voidInvoiceId = null;
    /**
     * Constructor method for InvoiceDTO
     * @uses InvoiceDTO::setAmount()
     * @uses InvoiceDTO::setCallDate()
     * @uses InvoiceDTO::setCity()
     * @uses InvoiceDTO::setCountry()
     * @uses InvoiceDTO::setCreationTimestamp()
     * @uses InvoiceDTO::setCreationUser()
     * @uses InvoiceDTO::setCurrency()
     * @uses InvoiceDTO::setCustomerId()
     * @uses InvoiceDTO::setDebitorNo()
     * @uses InvoiceDTO::setDepositAmount()
     * @uses InvoiceDTO::setDepositDate()
     * @uses InvoiceDTO::setDocumentExportDate()
     * @uses InvoiceDTO::setDocumentId()
     * @uses InvoiceDTO::setDueDate()
     * @uses InvoiceDTO::setExchangeRate()
     * @uses InvoiceDTO::setFileName()
     * @uses InvoiceDTO::setFinalPaymentAmount()
     * @uses InvoiceDTO::setFinalPaymentDate()
     * @uses InvoiceDTO::setForename()
     * @uses InvoiceDTO::setInvoiceId()
     * @uses InvoiceDTO::setInvoiceLogicVersion()
     * @uses InvoiceDTO::setInvoiceNo()
     * @uses InvoiceDTO::setIsDeposit()
     * @uses InvoiceDTO::setIsDiffInvoice()
     * @uses InvoiceDTO::setIsDocumentExported()
     * @uses InvoiceDTO::setIsReprint()
     * @uses InvoiceDTO::setIsVoided()
     * @uses InvoiceDTO::setMedia()
     * @uses InvoiceDTO::setName()
     * @uses InvoiceDTO::setOrderDocumentId()
     * @uses InvoiceDTO::setOrderId()
     * @uses InvoiceDTO::setOriginalAmount()
     * @uses InvoiceDTO::setOriginalCurrency()
     * @uses InvoiceDTO::setPartialInvoice()
     * @uses InvoiceDTO::setPostalCode()
     * @uses InvoiceDTO::setReceiptDate()
     * @uses InvoiceDTO::setReverseChargeCountry()
     * @uses InvoiceDTO::setStreet()
     * @uses InvoiceDTO::setStreetNo()
     * @uses InvoiceDTO::setUnitName()
     * @uses InvoiceDTO::setVatId()
     * @uses InvoiceDTO::setVoidInvoiceId()
     * @param float $amount
     * @param string $callDate
     * @param string $city
     * @param string $country
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $currency
     * @param int $customerId
     * @param string $debitorNo
     * @param float $depositAmount
     * @param string $depositDate
     * @param string $documentExportDate
     * @param int $documentId
     * @param string $dueDate
     * @param float $exchangeRate
     * @param string $fileName
     * @param float $finalPaymentAmount
     * @param string $finalPaymentDate
     * @param string $forename
     * @param int $invoiceId
     * @param int $invoiceLogicVersion
     * @param int $invoiceNo
     * @param bool $isDeposit
     * @param bool $isDiffInvoice
     * @param bool $isDocumentExported
     * @param bool $isReprint
     * @param bool $isVoided
     * @param string $media
     * @param string $name
     * @param int $orderDocumentId
     * @param int $orderId
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param bool $partialInvoice
     * @param string $postalCode
     * @param string $receiptDate
     * @param string $reverseChargeCountry
     * @param string $street
     * @param string $streetNo
     * @param string $unitName
     * @param string $vatId
     * @param int $voidInvoiceId
     */
    public function __construct(?float $amount = null, ?string $callDate = null, ?string $city = null, ?string $country = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?string $currency = null, ?int $customerId = null, ?string $debitorNo = null, ?float $depositAmount = null, ?string $depositDate = null, ?string $documentExportDate = null, ?int $documentId = null, ?string $dueDate = null, ?float $exchangeRate = null, ?string $fileName = null, ?float $finalPaymentAmount = null, ?string $finalPaymentDate = null, ?string $forename = null, ?int $invoiceId = null, ?int $invoiceLogicVersion = null, ?int $invoiceNo = null, ?bool $isDeposit = null, ?bool $isDiffInvoice = null, ?bool $isDocumentExported = null, ?bool $isReprint = null, ?bool $isVoided = null, ?string $media = null, ?string $name = null, ?int $orderDocumentId = null, ?int $orderId = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?bool $partialInvoice = null, ?string $postalCode = null, ?string $receiptDate = null, ?string $reverseChargeCountry = null, ?string $street = null, ?string $streetNo = null, ?string $unitName = null, ?string $vatId = null, ?int $voidInvoiceId = null)
    {
        $this
            ->setAmount($amount)
            ->setCallDate($callDate)
            ->setCity($city)
            ->setCountry($country)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setCurrency($currency)
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo)
            ->setDepositAmount($depositAmount)
            ->setDepositDate($depositDate)
            ->setDocumentExportDate($documentExportDate)
            ->setDocumentId($documentId)
            ->setDueDate($dueDate)
            ->setExchangeRate($exchangeRate)
            ->setFileName($fileName)
            ->setFinalPaymentAmount($finalPaymentAmount)
            ->setFinalPaymentDate($finalPaymentDate)
            ->setForename($forename)
            ->setInvoiceId($invoiceId)
            ->setInvoiceLogicVersion($invoiceLogicVersion)
            ->setInvoiceNo($invoiceNo)
            ->setIsDeposit($isDeposit)
            ->setIsDiffInvoice($isDiffInvoice)
            ->setIsDocumentExported($isDocumentExported)
            ->setIsReprint($isReprint)
            ->setIsVoided($isVoided)
            ->setMedia($media)
            ->setName($name)
            ->setOrderDocumentId($orderDocumentId)
            ->setOrderId($orderId)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setPartialInvoice($partialInvoice)
            ->setPostalCode($postalCode)
            ->setReceiptDate($receiptDate)
            ->setReverseChargeCountry($reverseChargeCountry)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setUnitName($unitName)
            ->setVatId($vatId)
            ->setVoidInvoiceId($voidInvoiceId);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * Get depositAmount value
     * @return float|null
     */
    public function getDepositAmount(): ?float
    {
        return $this->depositAmount;
    }
    /**
     * Set depositAmount value
     * @param float $depositAmount
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setDepositAmount(?float $depositAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($depositAmount) && !(is_float($depositAmount) || is_numeric($depositAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositAmount, true), gettype($depositAmount)), __LINE__);
        }
        $this->depositAmount = $depositAmount;
        
        return $this;
    }
    /**
     * Get depositDate value
     * @return string|null
     */
    public function getDepositDate(): ?string
    {
        return $this->depositDate;
    }
    /**
     * Set depositDate value
     * @param string $depositDate
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setDepositDate(?string $depositDate = null): self
    {
        // validation for constraint: string
        if (!is_null($depositDate) && !is_string($depositDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositDate, true), gettype($depositDate)), __LINE__);
        }
        $this->depositDate = $depositDate;
        
        return $this;
    }
    /**
     * Get documentExportDate value
     * @return string|null
     */
    public function getDocumentExportDate(): ?string
    {
        return $this->documentExportDate;
    }
    /**
     * Set documentExportDate value
     * @param string $documentExportDate
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setDocumentExportDate(?string $documentExportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentExportDate) && !is_string($documentExportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentExportDate, true), gettype($documentExportDate)), __LINE__);
        }
        $this->documentExportDate = $documentExportDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * Get finalPaymentAmount value
     * @return float|null
     */
    public function getFinalPaymentAmount(): ?float
    {
        return $this->finalPaymentAmount;
    }
    /**
     * Set finalPaymentAmount value
     * @param float $finalPaymentAmount
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setFinalPaymentAmount(?float $finalPaymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($finalPaymentAmount) && !(is_float($finalPaymentAmount) || is_numeric($finalPaymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($finalPaymentAmount, true), gettype($finalPaymentAmount)), __LINE__);
        }
        $this->finalPaymentAmount = $finalPaymentAmount;
        
        return $this;
    }
    /**
     * Get finalPaymentDate value
     * @return string|null
     */
    public function getFinalPaymentDate(): ?string
    {
        return $this->finalPaymentDate;
    }
    /**
     * Set finalPaymentDate value
     * @param string $finalPaymentDate
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setFinalPaymentDate(?string $finalPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPaymentDate) && !is_string($finalPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPaymentDate, true), gettype($finalPaymentDate)), __LINE__);
        }
        $this->finalPaymentDate = $finalPaymentDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get invoiceLogicVersion value
     * @return int|null
     */
    public function getInvoiceLogicVersion(): ?int
    {
        return $this->invoiceLogicVersion;
    }
    /**
     * Set invoiceLogicVersion value
     * @param int $invoiceLogicVersion
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setInvoiceLogicVersion(?int $invoiceLogicVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceLogicVersion) && !(is_int($invoiceLogicVersion) || ctype_digit($invoiceLogicVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceLogicVersion, true), gettype($invoiceLogicVersion)), __LINE__);
        }
        $this->invoiceLogicVersion = $invoiceLogicVersion;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return int|null
     */
    public function getInvoiceNo(): ?int
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param int $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setInvoiceNo(?int $invoiceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNo) && !(is_int($invoiceNo) || ctype_digit($invoiceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setIsDeposit(?bool $isDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
        return $this;
    }
    /**
     * Get isDiffInvoice value
     * @return bool|null
     */
    public function getIsDiffInvoice(): ?bool
    {
        return $this->isDiffInvoice;
    }
    /**
     * Set isDiffInvoice value
     * @param bool $isDiffInvoice
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setIsDiffInvoice(?bool $isDiffInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDiffInvoice) && !is_bool($isDiffInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDiffInvoice, true), gettype($isDiffInvoice)), __LINE__);
        }
        $this->isDiffInvoice = $isDiffInvoice;
        
        return $this;
    }
    /**
     * Get isDocumentExported value
     * @return bool|null
     */
    public function getIsDocumentExported(): ?bool
    {
        return $this->isDocumentExported;
    }
    /**
     * Set isDocumentExported value
     * @param bool $isDocumentExported
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setIsDocumentExported(?bool $isDocumentExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDocumentExported) && !is_bool($isDocumentExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDocumentExported, true), gettype($isDocumentExported)), __LINE__);
        }
        $this->isDocumentExported = $isDocumentExported;
        
        return $this;
    }
    /**
     * Get isReprint value
     * @return bool|null
     */
    public function getIsReprint(): ?bool
    {
        return $this->isReprint;
    }
    /**
     * Set isReprint value
     * @param bool $isReprint
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setIsReprint(?bool $isReprint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReprint) && !is_bool($isReprint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReprint, true), gettype($isReprint)), __LINE__);
        }
        $this->isReprint = $isReprint;
        
        return $this;
    }
    /**
     * Get isVoided value
     * @return bool|null
     */
    public function getIsVoided(): ?bool
    {
        return $this->isVoided;
    }
    /**
     * Set isVoided value
     * @param bool $isVoided
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setIsVoided(?bool $isVoided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoided) && !is_bool($isVoided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoided, true), gettype($isVoided)), __LINE__);
        }
        $this->isVoided = $isVoided;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * Get orderDocumentId value
     * @return int|null
     */
    public function getOrderDocumentId(): ?int
    {
        return $this->orderDocumentId;
    }
    /**
     * Set orderDocumentId value
     * @param int $orderDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setOrderDocumentId(?int $orderDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderDocumentId) && !(is_int($orderDocumentId) || ctype_digit($orderDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderDocumentId, true), gettype($orderDocumentId)), __LINE__);
        }
        $this->orderDocumentId = $orderDocumentId;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get originalAmount value
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->originalAmount;
    }
    /**
     * Set originalAmount value
     * @param float $originalAmount
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setOriginalAmount(?float $originalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalAmount) && !(is_float($originalAmount) || is_numeric($originalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalAmount, true), gettype($originalAmount)), __LINE__);
        }
        $this->originalAmount = $originalAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
    /**
     * Get partialInvoice value
     * @return bool|null
     */
    public function getPartialInvoice(): ?bool
    {
        return $this->partialInvoice;
    }
    /**
     * Set partialInvoice value
     * @param bool $partialInvoice
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setPartialInvoice(?bool $partialInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partialInvoice) && !is_bool($partialInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partialInvoice, true), gettype($partialInvoice)), __LINE__);
        }
        $this->partialInvoice = $partialInvoice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * Get reverseChargeCountry value
     * @return string|null
     */
    public function getReverseChargeCountry(): ?string
    {
        return $this->reverseChargeCountry;
    }
    /**
     * Set reverseChargeCountry value
     * @param string $reverseChargeCountry
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setReverseChargeCountry(?string $reverseChargeCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($reverseChargeCountry) && !is_string($reverseChargeCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reverseChargeCountry, true), gettype($reverseChargeCountry)), __LINE__);
        }
        $this->reverseChargeCountry = $reverseChargeCountry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
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
     * Get voidInvoiceId value
     * @return int|null
     */
    public function getVoidInvoiceId(): ?int
    {
        return $this->voidInvoiceId;
    }
    /**
     * Set voidInvoiceId value
     * @param int $voidInvoiceId
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDTO
     */
    public function setVoidInvoiceId(?int $voidInvoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidInvoiceId) && !(is_int($voidInvoiceId) || ctype_digit($voidInvoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidInvoiceId, true), gettype($voidInvoiceId)), __LINE__);
        }
        $this->voidInvoiceId = $voidInvoiceId;
        
        return $this;
    }
}
