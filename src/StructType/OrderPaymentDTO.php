<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderPaymentDTO StructType
 * @subpackage Structs
 */
class OrderPaymentDTO extends AbstractStructBase
{
    /**
     * The bookingUser
     * @var int|null
     */
    protected ?int $bookingUser = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The contraAccountId
     * @var string|null
     */
    protected ?string $contraAccountId = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
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
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
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
     * The paymentAmount
     * @var float|null
     */
    protected ?float $paymentAmount = null;
    /**
     * The paymentDate
     * @var string|null
     */
    protected ?string $paymentDate = null;
    /**
     * The paymentId
     * @var int|null
     */
    protected ?int $paymentId = null;
    /**
     * The paymentMethod
     * @var string|null
     */
    protected ?string $paymentMethod = null;
    /**
     * The paymentText
     * @var string|null
     */
    protected ?string $paymentText = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * Constructor method for OrderPaymentDTO
     * @uses OrderPaymentDTO::setBookingUser()
     * @uses OrderPaymentDTO::setCcType()
     * @uses OrderPaymentDTO::setContraAccountId()
     * @uses OrderPaymentDTO::setCreationDate()
     * @uses OrderPaymentDTO::setCustomerId()
     * @uses OrderPaymentDTO::setDebitorNo()
     * @uses OrderPaymentDTO::setDocumentId()
     * @uses OrderPaymentDTO::setJournalId()
     * @uses OrderPaymentDTO::setOrderId()
     * @uses OrderPaymentDTO::setOriginalAmount()
     * @uses OrderPaymentDTO::setOriginalCurrency()
     * @uses OrderPaymentDTO::setPaymentAmount()
     * @uses OrderPaymentDTO::setPaymentDate()
     * @uses OrderPaymentDTO::setPaymentId()
     * @uses OrderPaymentDTO::setPaymentMethod()
     * @uses OrderPaymentDTO::setPaymentText()
     * @uses OrderPaymentDTO::setPaymentType()
     * @param int $bookingUser
     * @param string $ccType
     * @param string $contraAccountId
     * @param string $creationDate
     * @param int $customerId
     * @param string $debitorNo
     * @param int $documentId
     * @param int $journalId
     * @param int $orderId
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param float $paymentAmount
     * @param string $paymentDate
     * @param int $paymentId
     * @param string $paymentMethod
     * @param string $paymentText
     * @param string $paymentType
     */
    public function __construct(?int $bookingUser = null, ?string $ccType = null, ?string $contraAccountId = null, ?string $creationDate = null, ?int $customerId = null, ?string $debitorNo = null, ?int $documentId = null, ?int $journalId = null, ?int $orderId = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?float $paymentAmount = null, ?string $paymentDate = null, ?int $paymentId = null, ?string $paymentMethod = null, ?string $paymentText = null, ?string $paymentType = null)
    {
        $this
            ->setBookingUser($bookingUser)
            ->setCcType($ccType)
            ->setContraAccountId($contraAccountId)
            ->setCreationDate($creationDate)
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo)
            ->setDocumentId($documentId)
            ->setJournalId($journalId)
            ->setOrderId($orderId)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setPaymentAmount($paymentAmount)
            ->setPaymentDate($paymentDate)
            ->setPaymentId($paymentId)
            ->setPaymentMethod($paymentMethod)
            ->setPaymentText($paymentText)
            ->setPaymentType($paymentType);
    }
    /**
     * Get bookingUser value
     * @return int|null
     */
    public function getBookingUser(): ?int
    {
        return $this->bookingUser;
    }
    /**
     * Set bookingUser value
     * @param int $bookingUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
     */
    public function setBookingUser(?int $bookingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingUser) && !(is_int($bookingUser) || ctype_digit($bookingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingUser, true), gettype($bookingUser)), __LINE__);
        }
        $this->bookingUser = $bookingUser;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get contraAccountId value
     * @return string|null
     */
    public function getContraAccountId(): ?string
    {
        return $this->contraAccountId;
    }
    /**
     * Set contraAccountId value
     * @param string $contraAccountId
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
     */
    public function setContraAccountId(?string $contraAccountId = null): self
    {
        // validation for constraint: string
        if (!is_null($contraAccountId) && !is_string($contraAccountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contraAccountId, true), gettype($contraAccountId)), __LINE__);
        }
        $this->contraAccountId = $contraAccountId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
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
     * Get journalId value
     * @return int|null
     */
    public function getJournalId(): ?int
    {
        return $this->journalId;
    }
    /**
     * Set journalId value
     * @param int $journalId
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
     */
    public function setJournalId(?int $journalId = null): self
    {
        // validation for constraint: int
        if (!is_null($journalId) && !(is_int($journalId) || ctype_digit($journalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalId, true), gettype($journalId)), __LINE__);
        }
        $this->journalId = $journalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
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
     * Get paymentAmount value
     * @return float|null
     */
    public function getPaymentAmount(): ?float
    {
        return $this->paymentAmount;
    }
    /**
     * Set paymentAmount value
     * @param float $paymentAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
     */
    public function setPaymentAmount(?float $paymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paymentAmount) && !(is_float($paymentAmount) || is_numeric($paymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paymentAmount, true), gettype($paymentAmount)), __LINE__);
        }
        $this->paymentAmount = $paymentAmount;
        
        return $this;
    }
    /**
     * Get paymentDate value
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }
    /**
     * Set paymentDate value
     * @param string $paymentDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
     */
    public function setPaymentDate(?string $paymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDate, true), gettype($paymentDate)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        
        return $this;
    }
    /**
     * Get paymentId value
     * @return int|null
     */
    public function getPaymentId(): ?int
    {
        return $this->paymentId;
    }
    /**
     * Set paymentId value
     * @param int $paymentId
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
     */
    public function setPaymentId(?int $paymentId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentId) && !(is_int($paymentId) || ctype_digit($paymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentId, true), gettype($paymentId)), __LINE__);
        }
        $this->paymentId = $paymentId;
        
        return $this;
    }
    /**
     * Get paymentMethod value
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @param string $paymentMethod
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethod, true), gettype($paymentMethod)), __LINE__);
        }
        $this->paymentMethod = $paymentMethod;
        
        return $this;
    }
    /**
     * Get paymentText value
     * @return string|null
     */
    public function getPaymentText(): ?string
    {
        return $this->paymentText;
    }
    /**
     * Set paymentText value
     * @param string $paymentText
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
     */
    public function setPaymentText(?string $paymentText = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentText) && !is_string($paymentText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentText, true), gettype($paymentText)), __LINE__);
        }
        $this->paymentText = $paymentText;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentDTO
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
}
