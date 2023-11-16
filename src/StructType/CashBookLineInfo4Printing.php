<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookLineInfo4Printing StructType
 * @subpackage Structs
 */
class CashBookLineInfo4Printing extends AbstractStructBase
{
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
    /**
     * The documentDate
     * @var string|null
     */
    protected ?string $documentDate = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The customerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The description1stBillingPosition
     * @var string|null
     */
    protected ?string $description1stBillingPosition = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The printingUser
     * @var \Pggns\MidocoApi\Order\StructType\UserDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\UserDTO $printingUser = null;
    /**
     * The creationUser
     * @var \Pggns\MidocoApi\Order\StructType\UserDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\UserDTO $creationUser = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The paymentValue
     * @var float|null
     */
    protected ?float $paymentValue = null;
    /**
     * The signatureFailure
     * @var string|null
     */
    protected ?string $signatureFailure = null;
    /**
     * Constructor method for CashBookLineInfo4Printing
     * @uses CashBookLineInfo4Printing::setDocumentNo()
     * @uses CashBookLineInfo4Printing::setDocumentDate()
     * @uses CashBookLineInfo4Printing::setTotalPrice()
     * @uses CashBookLineInfo4Printing::setCustomerName()
     * @uses CashBookLineInfo4Printing::setCustomerId()
     * @uses CashBookLineInfo4Printing::setDescription1stBillingPosition()
     * @uses CashBookLineInfo4Printing::setDebitorNo()
     * @uses CashBookLineInfo4Printing::setPaymentType()
     * @uses CashBookLineInfo4Printing::setCurrency()
     * @uses CashBookLineInfo4Printing::setPrintingUser()
     * @uses CashBookLineInfo4Printing::setCreationUser()
     * @uses CashBookLineInfo4Printing::setDocumentId()
     * @uses CashBookLineInfo4Printing::setPaymentValue()
     * @uses CashBookLineInfo4Printing::setSignatureFailure()
     * @param string $documentNo
     * @param string $documentDate
     * @param float $totalPrice
     * @param string $customerName
     * @param string $customerId
     * @param string $description1stBillingPosition
     * @param string $debitorNo
     * @param string $paymentType
     * @param string $currency
     * @param \Pggns\MidocoApi\Order\StructType\UserDTO $printingUser
     * @param \Pggns\MidocoApi\Order\StructType\UserDTO $creationUser
     * @param int $documentId
     * @param float $paymentValue
     * @param string $signatureFailure
     */
    public function __construct(?string $documentNo = null, ?string $documentDate = null, ?float $totalPrice = null, ?string $customerName = null, ?string $customerId = null, ?string $description1stBillingPosition = null, ?string $debitorNo = null, ?string $paymentType = null, ?string $currency = null, ?\Pggns\MidocoApi\Order\StructType\UserDTO $printingUser = null, ?\Pggns\MidocoApi\Order\StructType\UserDTO $creationUser = null, ?int $documentId = null, ?float $paymentValue = null, ?string $signatureFailure = null)
    {
        $this
            ->setDocumentNo($documentNo)
            ->setDocumentDate($documentDate)
            ->setTotalPrice($totalPrice)
            ->setCustomerName($customerName)
            ->setCustomerId($customerId)
            ->setDescription1stBillingPosition($description1stBillingPosition)
            ->setDebitorNo($debitorNo)
            ->setPaymentType($paymentType)
            ->setCurrency($currency)
            ->setPrintingUser($printingUser)
            ->setCreationUser($creationUser)
            ->setDocumentId($documentId)
            ->setPaymentValue($paymentValue)
            ->setSignatureFailure($signatureFailure);
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
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
     * Get documentDate value
     * @return string|null
     */
    public function getDocumentDate(): ?string
    {
        return $this->documentDate;
    }
    /**
     * Set documentDate value
     * @param string $documentDate
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
     */
    public function setDocumentDate(?string $documentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentDate) && !is_string($documentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentDate, true), gettype($documentDate)), __LINE__);
        }
        $this->documentDate = $documentDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
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
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get description1stBillingPosition value
     * @return string|null
     */
    public function getDescription1stBillingPosition(): ?string
    {
        return $this->description1stBillingPosition;
    }
    /**
     * Set description1stBillingPosition value
     * @param string $description1stBillingPosition
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
     */
    public function setDescription1stBillingPosition(?string $description1stBillingPosition = null): self
    {
        // validation for constraint: string
        if (!is_null($description1stBillingPosition) && !is_string($description1stBillingPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description1stBillingPosition, true), gettype($description1stBillingPosition)), __LINE__);
        }
        $this->description1stBillingPosition = $description1stBillingPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
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
     * Get printingUser value
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO|null
     */
    public function getPrintingUser(): ?\Pggns\MidocoApi\Order\StructType\UserDTO
    {
        return $this->printingUser;
    }
    /**
     * Set printingUser value
     * @param \Pggns\MidocoApi\Order\StructType\UserDTO $printingUser
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
     */
    public function setPrintingUser(?\Pggns\MidocoApi\Order\StructType\UserDTO $printingUser = null): self
    {
        $this->printingUser = $printingUser;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO|null
     */
    public function getCreationUser(): ?\Pggns\MidocoApi\Order\StructType\UserDTO
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param \Pggns\MidocoApi\Order\StructType\UserDTO $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
     */
    public function setCreationUser(?\Pggns\MidocoApi\Order\StructType\UserDTO $creationUser = null): self
    {
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
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
     * Get paymentValue value
     * @return float|null
     */
    public function getPaymentValue(): ?float
    {
        return $this->paymentValue;
    }
    /**
     * Set paymentValue value
     * @param float $paymentValue
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
     */
    public function setPaymentValue(?float $paymentValue = null): self
    {
        // validation for constraint: float
        if (!is_null($paymentValue) && !(is_float($paymentValue) || is_numeric($paymentValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paymentValue, true), gettype($paymentValue)), __LINE__);
        }
        $this->paymentValue = $paymentValue;
        
        return $this;
    }
    /**
     * Get signatureFailure value
     * @return string|null
     */
    public function getSignatureFailure(): ?string
    {
        return $this->signatureFailure;
    }
    /**
     * Set signatureFailure value
     * @param string $signatureFailure
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing
     */
    public function setSignatureFailure(?string $signatureFailure = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureFailure) && !is_string($signatureFailure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureFailure, true), gettype($signatureFailure)), __LINE__);
        }
        $this->signatureFailure = $signatureFailure;
        
        return $this;
    }
}
