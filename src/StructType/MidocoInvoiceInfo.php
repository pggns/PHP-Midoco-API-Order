<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInvoiceInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoInvoiceInfo extends AbstractStructBase
{
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The invoiceNo
     * @var int|null
     */
    protected ?int $invoiceNo = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The invoiceAmount
     * @var float|null
     */
    protected ?float $invoiceAmount = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
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
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The creationUser
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The callDate
     * @var string|null
     */
    protected ?string $callDate = null;
    /**
     * The fileName
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The partialInvoice
     * @var bool|null
     */
    protected ?bool $partialInvoice = null;
    /**
     * The isDiffInvoice
     * @var bool|null
     */
    protected ?bool $isDiffInvoice = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * Constructor method for MidocoInvoiceInfo
     * @uses MidocoInvoiceInfo::setInvoiceId()
     * @uses MidocoInvoiceInfo::setInvoiceNo()
     * @uses MidocoInvoiceInfo::setReceiptDate()
     * @uses MidocoInvoiceInfo::setInvoiceAmount()
     * @uses MidocoInvoiceInfo::setMedia()
     * @uses MidocoInvoiceInfo::setDocumentId()
     * @uses MidocoInvoiceInfo::setOrderId()
     * @uses MidocoInvoiceInfo::setOrderNo()
     * @uses MidocoInvoiceInfo::setForename()
     * @uses MidocoInvoiceInfo::setName()
     * @uses MidocoInvoiceInfo::setCurrency()
     * @uses MidocoInvoiceInfo::setCustomerId()
     * @uses MidocoInvoiceInfo::setUnitName()
     * @uses MidocoInvoiceInfo::setCreationUser()
     * @uses MidocoInvoiceInfo::setCreationTimestamp()
     * @uses MidocoInvoiceInfo::setCallDate()
     * @uses MidocoInvoiceInfo::setFileName()
     * @uses MidocoInvoiceInfo::setPartialInvoice()
     * @uses MidocoInvoiceInfo::setIsDiffInvoice()
     * @uses MidocoInvoiceInfo::setStoreUntil()
     * @param int $invoiceId
     * @param int $invoiceNo
     * @param string $receiptDate
     * @param float $invoiceAmount
     * @param string $media
     * @param int $documentId
     * @param int $orderId
     * @param int $orderNo
     * @param string $forename
     * @param string $name
     * @param string $currency
     * @param int $customerId
     * @param string $unitName
     * @param string $creationUser
     * @param string $creationTimestamp
     * @param string $callDate
     * @param string $fileName
     * @param bool $partialInvoice
     * @param bool $isDiffInvoice
     * @param string $storeUntil
     */
    public function __construct(?int $invoiceId = null, ?int $invoiceNo = null, ?string $receiptDate = null, ?float $invoiceAmount = null, ?string $media = null, ?int $documentId = null, ?int $orderId = null, ?int $orderNo = null, ?string $forename = null, ?string $name = null, ?string $currency = null, ?int $customerId = null, ?string $unitName = null, ?string $creationUser = null, ?string $creationTimestamp = null, ?string $callDate = null, ?string $fileName = null, ?bool $partialInvoice = null, ?bool $isDiffInvoice = null, ?string $storeUntil = null)
    {
        $this
            ->setInvoiceId($invoiceId)
            ->setInvoiceNo($invoiceNo)
            ->setReceiptDate($receiptDate)
            ->setInvoiceAmount($invoiceAmount)
            ->setMedia($media)
            ->setDocumentId($documentId)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setForename($forename)
            ->setName($name)
            ->setCurrency($currency)
            ->setCustomerId($customerId)
            ->setUnitName($unitName)
            ->setCreationUser($creationUser)
            ->setCreationTimestamp($creationTimestamp)
            ->setCallDate($callDate)
            ->setFileName($fileName)
            ->setPartialInvoice($partialInvoice)
            ->setIsDiffInvoice($isDiffInvoice)
            ->setStoreUntil($storeUntil);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * Get invoiceAmount value
     * @return float|null
     */
    public function getInvoiceAmount(): ?float
    {
        return $this->invoiceAmount;
    }
    /**
     * Set invoiceAmount value
     * @param float $invoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
     */
    public function setInvoiceAmount(?float $invoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceAmount) && !(is_float($invoiceAmount) || is_numeric($invoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceAmount, true), gettype($invoiceAmount)), __LINE__);
        }
        $this->invoiceAmount = $invoiceAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * Get creationUser value
     * @return string|null
     */
    public function getCreationUser(): ?string
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param string $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
     */
    public function setCreationUser(?string $creationUser = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUser) && !is_string($creationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
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
     * Get storeUntil value
     * @return string|null
     */
    public function getStoreUntil(): ?string
    {
        return $this->storeUntil;
    }
    /**
     * Set storeUntil value
     * @param string $storeUntil
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo
     */
    public function setStoreUntil(?string $storeUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($storeUntil) && !is_string($storeUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeUntil, true), gettype($storeUntil)), __LINE__);
        }
        $this->storeUntil = $storeUntil;
        
        return $this;
    }
}
