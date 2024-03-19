<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptRecordDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReceiptRecordDTO extends AbstractStructBase
{
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerCity
     * @var string|null
     */
    protected ?string $customerCity = null;
    /**
     * The customerCountry
     * @var string|null
     */
    protected ?string $customerCountry = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The customerPostalcode
     * @var string|null
     */
    protected ?string $customerPostalcode = null;
    /**
     * The customerStreet
     * @var string|null
     */
    protected ?string $customerStreet = null;
    /**
     * The customerType
     * @var string|null
     */
    protected ?string $customerType = null;
    /**
     * The customerVatid
     * @var string|null
     */
    protected ?string $customerVatid = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The isVoidReceipt
     * @var bool|null
     */
    protected ?bool $isVoidReceipt = null;
    /**
     * The printId
     * @var int|null
     */
    protected ?int $printId = null;
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
     * The receiptEndtime
     * @var string|null
     */
    protected ?string $receiptEndtime = null;
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * The receiptNo
     * @var int|null
     */
    protected ?int $receiptNo = null;
    /**
     * The receiptRecordId
     * @var int|null
     */
    protected ?int $receiptRecordId = null;
    /**
     * The receiptRecordSequence
     * @var int|null
     */
    protected ?int $receiptRecordSequence = null;
    /**
     * The receiptStarttime
     * @var string|null
     */
    protected ?string $receiptStarttime = null;
    /**
     * The totalPayment
     * @var float|null
     */
    protected ?float $totalPayment = null;
    /**
     * The totalSaleAmount
     * @var float|null
     */
    protected ?float $totalSaleAmount = null;
    /**
     * The workstationId
     * @var string|null
     */
    protected ?string $workstationId = null;
    /**
     * Constructor method for ReceiptRecordDTO
     * @uses ReceiptRecordDTO::setCurrency()
     * @uses ReceiptRecordDTO::setCustomerCity()
     * @uses ReceiptRecordDTO::setCustomerCountry()
     * @uses ReceiptRecordDTO::setCustomerId()
     * @uses ReceiptRecordDTO::setCustomerName()
     * @uses ReceiptRecordDTO::setCustomerPostalcode()
     * @uses ReceiptRecordDTO::setCustomerStreet()
     * @uses ReceiptRecordDTO::setCustomerType()
     * @uses ReceiptRecordDTO::setCustomerVatid()
     * @uses ReceiptRecordDTO::setDocumentId()
     * @uses ReceiptRecordDTO::setIsVoidReceipt()
     * @uses ReceiptRecordDTO::setPrintId()
     * @uses ReceiptRecordDTO::setPrintingUser()
     * @uses ReceiptRecordDTO::setReceiptDate()
     * @uses ReceiptRecordDTO::setReceiptEndtime()
     * @uses ReceiptRecordDTO::setReceiptId()
     * @uses ReceiptRecordDTO::setReceiptNo()
     * @uses ReceiptRecordDTO::setReceiptRecordId()
     * @uses ReceiptRecordDTO::setReceiptRecordSequence()
     * @uses ReceiptRecordDTO::setReceiptStarttime()
     * @uses ReceiptRecordDTO::setTotalPayment()
     * @uses ReceiptRecordDTO::setTotalSaleAmount()
     * @uses ReceiptRecordDTO::setWorkstationId()
     * @param string $currency
     * @param string $customerCity
     * @param string $customerCountry
     * @param int $customerId
     * @param string $customerName
     * @param string $customerPostalcode
     * @param string $customerStreet
     * @param string $customerType
     * @param string $customerVatid
     * @param int $documentId
     * @param bool $isVoidReceipt
     * @param int $printId
     * @param int $printingUser
     * @param string $receiptDate
     * @param string $receiptEndtime
     * @param int $receiptId
     * @param int $receiptNo
     * @param int $receiptRecordId
     * @param int $receiptRecordSequence
     * @param string $receiptStarttime
     * @param float $totalPayment
     * @param float $totalSaleAmount
     * @param string $workstationId
     */
    public function __construct(?string $currency = null, ?string $customerCity = null, ?string $customerCountry = null, ?int $customerId = null, ?string $customerName = null, ?string $customerPostalcode = null, ?string $customerStreet = null, ?string $customerType = null, ?string $customerVatid = null, ?int $documentId = null, ?bool $isVoidReceipt = null, ?int $printId = null, ?int $printingUser = null, ?string $receiptDate = null, ?string $receiptEndtime = null, ?int $receiptId = null, ?int $receiptNo = null, ?int $receiptRecordId = null, ?int $receiptRecordSequence = null, ?string $receiptStarttime = null, ?float $totalPayment = null, ?float $totalSaleAmount = null, ?string $workstationId = null)
    {
        $this
            ->setCurrency($currency)
            ->setCustomerCity($customerCity)
            ->setCustomerCountry($customerCountry)
            ->setCustomerId($customerId)
            ->setCustomerName($customerName)
            ->setCustomerPostalcode($customerPostalcode)
            ->setCustomerStreet($customerStreet)
            ->setCustomerType($customerType)
            ->setCustomerVatid($customerVatid)
            ->setDocumentId($documentId)
            ->setIsVoidReceipt($isVoidReceipt)
            ->setPrintId($printId)
            ->setPrintingUser($printingUser)
            ->setReceiptDate($receiptDate)
            ->setReceiptEndtime($receiptEndtime)
            ->setReceiptId($receiptId)
            ->setReceiptNo($receiptNo)
            ->setReceiptRecordId($receiptRecordId)
            ->setReceiptRecordSequence($receiptRecordSequence)
            ->setReceiptStarttime($receiptStarttime)
            ->setTotalPayment($totalPayment)
            ->setTotalSaleAmount($totalSaleAmount)
            ->setWorkstationId($workstationId);
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
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
     * Get customerCity value
     * @return string|null
     */
    public function getCustomerCity(): ?string
    {
        return $this->customerCity;
    }
    /**
     * Set customerCity value
     * @param string $customerCity
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setCustomerCity(?string $customerCity = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCity) && !is_string($customerCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCity, true), gettype($customerCity)), __LINE__);
        }
        $this->customerCity = $customerCity;
        
        return $this;
    }
    /**
     * Get customerCountry value
     * @return string|null
     */
    public function getCustomerCountry(): ?string
    {
        return $this->customerCountry;
    }
    /**
     * Set customerCountry value
     * @param string $customerCountry
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setCustomerCountry(?string $customerCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCountry) && !is_string($customerCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCountry, true), gettype($customerCountry)), __LINE__);
        }
        $this->customerCountry = $customerCountry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
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
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get customerPostalcode value
     * @return string|null
     */
    public function getCustomerPostalcode(): ?string
    {
        return $this->customerPostalcode;
    }
    /**
     * Set customerPostalcode value
     * @param string $customerPostalcode
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setCustomerPostalcode(?string $customerPostalcode = null): self
    {
        // validation for constraint: string
        if (!is_null($customerPostalcode) && !is_string($customerPostalcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPostalcode, true), gettype($customerPostalcode)), __LINE__);
        }
        $this->customerPostalcode = $customerPostalcode;
        
        return $this;
    }
    /**
     * Get customerStreet value
     * @return string|null
     */
    public function getCustomerStreet(): ?string
    {
        return $this->customerStreet;
    }
    /**
     * Set customerStreet value
     * @param string $customerStreet
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setCustomerStreet(?string $customerStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($customerStreet) && !is_string($customerStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerStreet, true), gettype($customerStreet)), __LINE__);
        }
        $this->customerStreet = $customerStreet;
        
        return $this;
    }
    /**
     * Get customerType value
     * @return string|null
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }
    /**
     * Set customerType value
     * @param string $customerType
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setCustomerType(?string $customerType = null): self
    {
        // validation for constraint: string
        if (!is_null($customerType) && !is_string($customerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerType, true), gettype($customerType)), __LINE__);
        }
        $this->customerType = $customerType;
        
        return $this;
    }
    /**
     * Get customerVatid value
     * @return string|null
     */
    public function getCustomerVatid(): ?string
    {
        return $this->customerVatid;
    }
    /**
     * Set customerVatid value
     * @param string $customerVatid
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setCustomerVatid(?string $customerVatid = null): self
    {
        // validation for constraint: string
        if (!is_null($customerVatid) && !is_string($customerVatid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerVatid, true), gettype($customerVatid)), __LINE__);
        }
        $this->customerVatid = $customerVatid;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
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
     * Get isVoidReceipt value
     * @return bool|null
     */
    public function getIsVoidReceipt(): ?bool
    {
        return $this->isVoidReceipt;
    }
    /**
     * Set isVoidReceipt value
     * @param bool $isVoidReceipt
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setIsVoidReceipt(?bool $isVoidReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoidReceipt) && !is_bool($isVoidReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoidReceipt, true), gettype($isVoidReceipt)), __LINE__);
        }
        $this->isVoidReceipt = $isVoidReceipt;
        
        return $this;
    }
    /**
     * Get printId value
     * @return int|null
     */
    public function getPrintId(): ?int
    {
        return $this->printId;
    }
    /**
     * Set printId value
     * @param int $printId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setPrintId(?int $printId = null): self
    {
        // validation for constraint: int
        if (!is_null($printId) && !(is_int($printId) || ctype_digit($printId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printId, true), gettype($printId)), __LINE__);
        }
        $this->printId = $printId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
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
     * Get receiptEndtime value
     * @return string|null
     */
    public function getReceiptEndtime(): ?string
    {
        return $this->receiptEndtime;
    }
    /**
     * Set receiptEndtime value
     * @param string $receiptEndtime
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setReceiptEndtime(?string $receiptEndtime = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptEndtime) && !is_string($receiptEndtime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptEndtime, true), gettype($receiptEndtime)), __LINE__);
        }
        $this->receiptEndtime = $receiptEndtime;
        
        return $this;
    }
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return int|null
     */
    public function getReceiptNo(): ?int
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param int $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setReceiptNo(?int $receiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNo) && !(is_int($receiptNo) || ctype_digit($receiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get receiptRecordId value
     * @return int|null
     */
    public function getReceiptRecordId(): ?int
    {
        return $this->receiptRecordId;
    }
    /**
     * Set receiptRecordId value
     * @param int $receiptRecordId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setReceiptRecordId(?int $receiptRecordId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptRecordId) && !(is_int($receiptRecordId) || ctype_digit($receiptRecordId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptRecordId, true), gettype($receiptRecordId)), __LINE__);
        }
        $this->receiptRecordId = $receiptRecordId;
        
        return $this;
    }
    /**
     * Get receiptRecordSequence value
     * @return int|null
     */
    public function getReceiptRecordSequence(): ?int
    {
        return $this->receiptRecordSequence;
    }
    /**
     * Set receiptRecordSequence value
     * @param int $receiptRecordSequence
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setReceiptRecordSequence(?int $receiptRecordSequence = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptRecordSequence) && !(is_int($receiptRecordSequence) || ctype_digit($receiptRecordSequence))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptRecordSequence, true), gettype($receiptRecordSequence)), __LINE__);
        }
        $this->receiptRecordSequence = $receiptRecordSequence;
        
        return $this;
    }
    /**
     * Get receiptStarttime value
     * @return string|null
     */
    public function getReceiptStarttime(): ?string
    {
        return $this->receiptStarttime;
    }
    /**
     * Set receiptStarttime value
     * @param string $receiptStarttime
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setReceiptStarttime(?string $receiptStarttime = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptStarttime) && !is_string($receiptStarttime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptStarttime, true), gettype($receiptStarttime)), __LINE__);
        }
        $this->receiptStarttime = $receiptStarttime;
        
        return $this;
    }
    /**
     * Get totalPayment value
     * @return float|null
     */
    public function getTotalPayment(): ?float
    {
        return $this->totalPayment;
    }
    /**
     * Set totalPayment value
     * @param float $totalPayment
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setTotalPayment(?float $totalPayment = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPayment) && !(is_float($totalPayment) || is_numeric($totalPayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPayment, true), gettype($totalPayment)), __LINE__);
        }
        $this->totalPayment = $totalPayment;
        
        return $this;
    }
    /**
     * Get totalSaleAmount value
     * @return float|null
     */
    public function getTotalSaleAmount(): ?float
    {
        return $this->totalSaleAmount;
    }
    /**
     * Set totalSaleAmount value
     * @param float $totalSaleAmount
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setTotalSaleAmount(?float $totalSaleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalSaleAmount) && !(is_float($totalSaleAmount) || is_numeric($totalSaleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalSaleAmount, true), gettype($totalSaleAmount)), __LINE__);
        }
        $this->totalSaleAmount = $totalSaleAmount;
        
        return $this;
    }
    /**
     * Get workstationId value
     * @return string|null
     */
    public function getWorkstationId(): ?string
    {
        return $this->workstationId;
    }
    /**
     * Set workstationId value
     * @param string $workstationId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordDTO
     */
    public function setWorkstationId(?string $workstationId = null): self
    {
        // validation for constraint: string
        if (!is_null($workstationId) && !is_string($workstationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workstationId, true), gettype($workstationId)), __LINE__);
        }
        $this->workstationId = $workstationId;
        
        return $this;
    }
}
