<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingSearchInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingSearchInfoType extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
    /**
     * The collectInvReferenceNo
     * @var int|null
     */
    protected ?int $collectInvReferenceNo = null;
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
     * The printingDate
     * @var string|null
     */
    protected ?string $printingDate = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The travellerName
     * @var string|null
     */
    protected ?string $travellerName = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The invoiceToEmail
     * @var string|null
     */
    protected ?string $invoiceToEmail = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for MidocoBillingSearchInfoType
     * @uses MidocoBillingSearchInfoType::setDocumentId()
     * @uses MidocoBillingSearchInfoType::setName()
     * @uses MidocoBillingSearchInfoType::setForename()
     * @uses MidocoBillingSearchInfoType::setTravelDate()
     * @uses MidocoBillingSearchInfoType::setDocumentNo()
     * @uses MidocoBillingSearchInfoType::setCollectInvReferenceNo()
     * @uses MidocoBillingSearchInfoType::setCreationDate()
     * @uses MidocoBillingSearchInfoType::setCreationUser()
     * @uses MidocoBillingSearchInfoType::setPrintingDate()
     * @uses MidocoBillingSearchInfoType::setTotalPrice()
     * @uses MidocoBillingSearchInfoType::setInvoicedAmount()
     * @uses MidocoBillingSearchInfoType::setTravellerName()
     * @uses MidocoBillingSearchInfoType::setDebitorNo()
     * @uses MidocoBillingSearchInfoType::setIsSpecialCustomer()
     * @uses MidocoBillingSearchInfoType::setInvoiceToEmail()
     * @uses MidocoBillingSearchInfoType::setCustomerId()
     * @param int $documentId
     * @param string $name
     * @param string $forename
     * @param string $travelDate
     * @param string $documentNo
     * @param int $collectInvReferenceNo
     * @param string $creationDate
     * @param int $creationUser
     * @param string $printingDate
     * @param float $totalPrice
     * @param float $invoicedAmount
     * @param string $travellerName
     * @param string $debitorNo
     * @param bool $isSpecialCustomer
     * @param string $invoiceToEmail
     * @param int $customerId
     */
    public function __construct(?int $documentId = null, ?string $name = null, ?string $forename = null, ?string $travelDate = null, ?string $documentNo = null, ?int $collectInvReferenceNo = null, ?string $creationDate = null, ?int $creationUser = null, ?string $printingDate = null, ?float $totalPrice = null, ?float $invoicedAmount = null, ?string $travellerName = null, ?string $debitorNo = null, ?bool $isSpecialCustomer = null, ?string $invoiceToEmail = null, ?int $customerId = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setName($name)
            ->setForename($forename)
            ->setTravelDate($travelDate)
            ->setDocumentNo($documentNo)
            ->setCollectInvReferenceNo($collectInvReferenceNo)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setPrintingDate($printingDate)
            ->setTotalPrice($totalPrice)
            ->setInvoicedAmount($invoicedAmount)
            ->setTravellerName($travellerName)
            ->setDebitorNo($debitorNo)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setInvoiceToEmail($invoiceToEmail)
            ->setCustomerId($customerId);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return string|null
     */
    public function getDocumentNo(): ?string
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param string $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
     */
    public function setDocumentNo(?string $documentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNo) && !is_string($documentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * Get travellerName value
     * @return string|null
     */
    public function getTravellerName(): ?string
    {
        return $this->travellerName;
    }
    /**
     * Set travellerName value
     * @param string $travellerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
     */
    public function setTravellerName(?string $travellerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerName) && !is_string($travellerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerName, true), gettype($travellerName)), __LINE__);
        }
        $this->travellerName = $travellerName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
     * Get invoiceToEmail value
     * @return string|null
     */
    public function getInvoiceToEmail(): ?string
    {
        return $this->invoiceToEmail;
    }
    /**
     * Set invoiceToEmail value
     * @param string $invoiceToEmail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
     */
    public function setInvoiceToEmail(?string $invoiceToEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceToEmail) && !is_string($invoiceToEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceToEmail, true), gettype($invoiceToEmail)), __LINE__);
        }
        $this->invoiceToEmail = $invoiceToEmail;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType
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
}
