<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPaymentOrdersInfos StructType
 * @subpackage Structs
 */
class MidocoPaymentOrdersInfos extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The creationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The companyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The receiptNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The invoiceNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $invoiceNo = null;
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The ordersExtBookingId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ordersExtBookingId = null;
    /**
     * The ordersMainBookingId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ordersMainBookingId = null;
    /**
     * The ordersMainSupplierId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ordersMainSupplierId = null;
    /**
     * The isDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The paymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The manualBookingText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $manualBookingText = null;
    /**
     * The transactionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The debitType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $debitType = null;
    /**
     * The travelDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The invoiceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $invoiceType = null;
    /**
     * The agencyId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The portal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $portal = null;
    /**
     * The debitorNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The paymentReason
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentReason = null;
    /**
     * The isCreated
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isCreated = null;
    /**
     * The firstTraveller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $firstTraveller = null;
    /**
     * The MidocoPaymentServiceInfos
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPaymentServiceInfos
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos[]
     */
    protected array $MidocoPaymentServiceInfos = [];
    /**
     * The hasFlightInfos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $hasFlightInfos = null;
    /**
     * The flightBookingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flightBookingDate = null;
    /**
     * The flightDeparture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flightDeparture = null;
    /**
     * The flightDepartureDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flightDepartureDate = null;
    /**
     * The flightDestination
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flightDestination = null;
    /**
     * The flightFilekey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flightFilekey = null;
    /**
     * The productType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The destinationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationDescription = null;
    /**
     * The countryDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryDescription = null;
    /**
     * Constructor method for MidocoPaymentOrdersInfos
     * @uses MidocoPaymentOrdersInfos::setOrderId()
     * @uses MidocoPaymentOrdersInfos::setOrderNo()
     * @uses MidocoPaymentOrdersInfos::setCreationDate()
     * @uses MidocoPaymentOrdersInfos::setCustomerId()
     * @uses MidocoPaymentOrdersInfos::setCustomerName()
     * @uses MidocoPaymentOrdersInfos::setCompanyName()
     * @uses MidocoPaymentOrdersInfos::setUnitName()
     * @uses MidocoPaymentOrdersInfos::setReceiptNo()
     * @uses MidocoPaymentOrdersInfos::setInvoiceNo()
     * @uses MidocoPaymentOrdersInfos::setMediatorId()
     * @uses MidocoPaymentOrdersInfos::setOrdersExtBookingId()
     * @uses MidocoPaymentOrdersInfos::setOrdersMainBookingId()
     * @uses MidocoPaymentOrdersInfos::setOrdersMainSupplierId()
     * @uses MidocoPaymentOrdersInfos::setIsDeposit()
     * @uses MidocoPaymentOrdersInfos::setPaymentType()
     * @uses MidocoPaymentOrdersInfos::setManualBookingText()
     * @uses MidocoPaymentOrdersInfos::setTransactionType()
     * @uses MidocoPaymentOrdersInfos::setDebitType()
     * @uses MidocoPaymentOrdersInfos::setTravelDate()
     * @uses MidocoPaymentOrdersInfos::setInvoiceType()
     * @uses MidocoPaymentOrdersInfos::setAgencyId()
     * @uses MidocoPaymentOrdersInfos::setPortal()
     * @uses MidocoPaymentOrdersInfos::setDebitorNo()
     * @uses MidocoPaymentOrdersInfos::setPaymentReason()
     * @uses MidocoPaymentOrdersInfos::setIsCreated()
     * @uses MidocoPaymentOrdersInfos::setFirstTraveller()
     * @uses MidocoPaymentOrdersInfos::setMidocoPaymentServiceInfos()
     * @uses MidocoPaymentOrdersInfos::setHasFlightInfos()
     * @uses MidocoPaymentOrdersInfos::setFlightBookingDate()
     * @uses MidocoPaymentOrdersInfos::setFlightDeparture()
     * @uses MidocoPaymentOrdersInfos::setFlightDepartureDate()
     * @uses MidocoPaymentOrdersInfos::setFlightDestination()
     * @uses MidocoPaymentOrdersInfos::setFlightFilekey()
     * @uses MidocoPaymentOrdersInfos::setProductType()
     * @uses MidocoPaymentOrdersInfos::setDestinationDescription()
     * @uses MidocoPaymentOrdersInfos::setCountryDescription()
     * @param int $orderId
     * @param int $orderNo
     * @param string $creationDate
     * @param int $customerId
     * @param string $customerName
     * @param string $companyName
     * @param string $unitName
     * @param string $receiptNo
     * @param string $invoiceNo
     * @param string $mediatorId
     * @param string $ordersExtBookingId
     * @param string $ordersMainBookingId
     * @param string $ordersMainSupplierId
     * @param bool $isDeposit
     * @param string $paymentType
     * @param string $manualBookingText
     * @param string $transactionType
     * @param string $debitType
     * @param string $travelDate
     * @param string $invoiceType
     * @param string $agencyId
     * @param string $portal
     * @param string $debitorNo
     * @param string $paymentReason
     * @param bool $isCreated
     * @param string $firstTraveller
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos[] $midocoPaymentServiceInfos
     * @param string $hasFlightInfos
     * @param string $flightBookingDate
     * @param string $flightDeparture
     * @param string $flightDepartureDate
     * @param string $flightDestination
     * @param string $flightFilekey
     * @param string $productType
     * @param string $destinationDescription
     * @param string $countryDescription
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?string $creationDate = null, ?int $customerId = null, ?string $customerName = null, ?string $companyName = null, ?string $unitName = null, ?string $receiptNo = null, ?string $invoiceNo = null, ?string $mediatorId = null, ?string $ordersExtBookingId = null, ?string $ordersMainBookingId = null, ?string $ordersMainSupplierId = null, ?bool $isDeposit = null, ?string $paymentType = null, ?string $manualBookingText = null, ?string $transactionType = null, ?string $debitType = null, ?string $travelDate = null, ?string $invoiceType = null, ?string $agencyId = null, ?string $portal = null, ?string $debitorNo = null, ?string $paymentReason = null, ?bool $isCreated = false, ?string $firstTraveller = null, array $midocoPaymentServiceInfos = [], ?string $hasFlightInfos = null, ?string $flightBookingDate = null, ?string $flightDeparture = null, ?string $flightDepartureDate = null, ?string $flightDestination = null, ?string $flightFilekey = null, ?string $productType = null, ?string $destinationDescription = null, ?string $countryDescription = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setCreationDate($creationDate)
            ->setCustomerId($customerId)
            ->setCustomerName($customerName)
            ->setCompanyName($companyName)
            ->setUnitName($unitName)
            ->setReceiptNo($receiptNo)
            ->setInvoiceNo($invoiceNo)
            ->setMediatorId($mediatorId)
            ->setOrdersExtBookingId($ordersExtBookingId)
            ->setOrdersMainBookingId($ordersMainBookingId)
            ->setOrdersMainSupplierId($ordersMainSupplierId)
            ->setIsDeposit($isDeposit)
            ->setPaymentType($paymentType)
            ->setManualBookingText($manualBookingText)
            ->setTransactionType($transactionType)
            ->setDebitType($debitType)
            ->setTravelDate($travelDate)
            ->setInvoiceType($invoiceType)
            ->setAgencyId($agencyId)
            ->setPortal($portal)
            ->setDebitorNo($debitorNo)
            ->setPaymentReason($paymentReason)
            ->setIsCreated($isCreated)
            ->setFirstTraveller($firstTraveller)
            ->setMidocoPaymentServiceInfos($midocoPaymentServiceInfos)
            ->setHasFlightInfos($hasFlightInfos)
            ->setFlightBookingDate($flightBookingDate)
            ->setFlightDeparture($flightDeparture)
            ->setFlightDepartureDate($flightDepartureDate)
            ->setFlightDestination($flightDestination)
            ->setFlightFilekey($flightFilekey)
            ->setProductType($productType)
            ->setDestinationDescription($destinationDescription)
            ->setCountryDescription($countryDescription);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return string|null
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param string $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setInvoiceNo(?string $invoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get ordersExtBookingId value
     * @return string|null
     */
    public function getOrdersExtBookingId(): ?string
    {
        return $this->ordersExtBookingId;
    }
    /**
     * Set ordersExtBookingId value
     * @param string $ordersExtBookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setOrdersExtBookingId(?string $ordersExtBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($ordersExtBookingId) && !is_string($ordersExtBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ordersExtBookingId, true), gettype($ordersExtBookingId)), __LINE__);
        }
        $this->ordersExtBookingId = $ordersExtBookingId;
        
        return $this;
    }
    /**
     * Get ordersMainBookingId value
     * @return string|null
     */
    public function getOrdersMainBookingId(): ?string
    {
        return $this->ordersMainBookingId;
    }
    /**
     * Set ordersMainBookingId value
     * @param string $ordersMainBookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setOrdersMainBookingId(?string $ordersMainBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($ordersMainBookingId) && !is_string($ordersMainBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ordersMainBookingId, true), gettype($ordersMainBookingId)), __LINE__);
        }
        $this->ordersMainBookingId = $ordersMainBookingId;
        
        return $this;
    }
    /**
     * Get ordersMainSupplierId value
     * @return string|null
     */
    public function getOrdersMainSupplierId(): ?string
    {
        return $this->ordersMainSupplierId;
    }
    /**
     * Set ordersMainSupplierId value
     * @param string $ordersMainSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setOrdersMainSupplierId(?string $ordersMainSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($ordersMainSupplierId) && !is_string($ordersMainSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ordersMainSupplierId, true), gettype($ordersMainSupplierId)), __LINE__);
        }
        $this->ordersMainSupplierId = $ordersMainSupplierId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * Get manualBookingText value
     * @return string|null
     */
    public function getManualBookingText(): ?string
    {
        return $this->manualBookingText;
    }
    /**
     * Set manualBookingText value
     * @param string $manualBookingText
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setManualBookingText(?string $manualBookingText = null): self
    {
        // validation for constraint: string
        if (!is_null($manualBookingText) && !is_string($manualBookingText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manualBookingText, true), gettype($manualBookingText)), __LINE__);
        }
        $this->manualBookingText = $manualBookingText;
        
        return $this;
    }
    /**
     * Get transactionType value
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param string $transactionType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setTransactionType(?string $transactionType = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionType) && !is_string($transactionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->transactionType = $transactionType;
        
        return $this;
    }
    /**
     * Get debitType value
     * @return string|null
     */
    public function getDebitType(): ?string
    {
        return $this->debitType;
    }
    /**
     * Set debitType value
     * @param string $debitType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setDebitType(?string $debitType = null): self
    {
        // validation for constraint: string
        if (!is_null($debitType) && !is_string($debitType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitType, true), gettype($debitType)), __LINE__);
        }
        $this->debitType = $debitType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * Get invoiceType value
     * @return string|null
     */
    public function getInvoiceType(): ?string
    {
        return $this->invoiceType;
    }
    /**
     * Set invoiceType value
     * @param string $invoiceType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setInvoiceType(?string $invoiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceType) && !is_string($invoiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceType, true), gettype($invoiceType)), __LINE__);
        }
        $this->invoiceType = $invoiceType;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get portal value
     * @return string|null
     */
    public function getPortal(): ?string
    {
        return $this->portal;
    }
    /**
     * Set portal value
     * @param string $portal
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setPortal(?string $portal = null): self
    {
        // validation for constraint: string
        if (!is_null($portal) && !is_string($portal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portal, true), gettype($portal)), __LINE__);
        }
        $this->portal = $portal;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
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
     * Get paymentReason value
     * @return string|null
     */
    public function getPaymentReason(): ?string
    {
        return $this->paymentReason;
    }
    /**
     * Set paymentReason value
     * @param string $paymentReason
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setPaymentReason(?string $paymentReason = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentReason) && !is_string($paymentReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentReason, true), gettype($paymentReason)), __LINE__);
        }
        $this->paymentReason = $paymentReason;
        
        return $this;
    }
    /**
     * Get isCreated value
     * @return bool|null
     */
    public function getIsCreated(): ?bool
    {
        return $this->isCreated;
    }
    /**
     * Set isCreated value
     * @param bool $isCreated
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setIsCreated(?bool $isCreated = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isCreated) && !is_bool($isCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCreated, true), gettype($isCreated)), __LINE__);
        }
        $this->isCreated = $isCreated;
        
        return $this;
    }
    /**
     * Get firstTraveller value
     * @return string|null
     */
    public function getFirstTraveller(): ?string
    {
        return $this->firstTraveller;
    }
    /**
     * Set firstTraveller value
     * @param string $firstTraveller
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setFirstTraveller(?string $firstTraveller = null): self
    {
        // validation for constraint: string
        if (!is_null($firstTraveller) && !is_string($firstTraveller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstTraveller, true), gettype($firstTraveller)), __LINE__);
        }
        $this->firstTraveller = $firstTraveller;
        
        return $this;
    }
    /**
     * Get MidocoPaymentServiceInfos value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos[]
     */
    public function getMidocoPaymentServiceInfos(): array
    {
        return $this->MidocoPaymentServiceInfos;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPaymentServiceInfos method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPaymentServiceInfos method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPaymentServiceInfosForArrayConstraintsFromSetMidocoPaymentServiceInfos(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoPaymentOrdersInfosMidocoPaymentServiceInfosItem) {
            // validation for constraint: itemType
            if (!$midocoPaymentOrdersInfosMidocoPaymentServiceInfosItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos) {
                $invalidValues[] = is_object($midocoPaymentOrdersInfosMidocoPaymentServiceInfosItem) ? get_class($midocoPaymentOrdersInfosMidocoPaymentServiceInfosItem) : sprintf('%s(%s)', gettype($midocoPaymentOrdersInfosMidocoPaymentServiceInfosItem), var_export($midocoPaymentOrdersInfosMidocoPaymentServiceInfosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPaymentServiceInfos property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPaymentServiceInfos value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos[] $midocoPaymentServiceInfos
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setMidocoPaymentServiceInfos(array $midocoPaymentServiceInfos = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPaymentServiceInfosArrayErrorMessage = self::validateMidocoPaymentServiceInfosForArrayConstraintsFromSetMidocoPaymentServiceInfos($midocoPaymentServiceInfos))) {
            throw new InvalidArgumentException($midocoPaymentServiceInfosArrayErrorMessage, __LINE__);
        }
        $this->MidocoPaymentServiceInfos = $midocoPaymentServiceInfos;
        
        return $this;
    }
    /**
     * Add item to MidocoPaymentServiceInfos value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function addToMidocoPaymentServiceInfos(\Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos) {
            throw new InvalidArgumentException(sprintf('The MidocoPaymentServiceInfos property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPaymentServiceInfos, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPaymentServiceInfos[] = $item;
        
        return $this;
    }
    /**
     * Get hasFlightInfos value
     * @return string|null
     */
    public function getHasFlightInfos(): ?string
    {
        return $this->hasFlightInfos;
    }
    /**
     * Set hasFlightInfos value
     * @param string $hasFlightInfos
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setHasFlightInfos(?string $hasFlightInfos = null): self
    {
        // validation for constraint: string
        if (!is_null($hasFlightInfos) && !is_string($hasFlightInfos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hasFlightInfos, true), gettype($hasFlightInfos)), __LINE__);
        }
        $this->hasFlightInfos = $hasFlightInfos;
        
        return $this;
    }
    /**
     * Get flightBookingDate value
     * @return string|null
     */
    public function getFlightBookingDate(): ?string
    {
        return $this->flightBookingDate;
    }
    /**
     * Set flightBookingDate value
     * @param string $flightBookingDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setFlightBookingDate(?string $flightBookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($flightBookingDate) && !is_string($flightBookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightBookingDate, true), gettype($flightBookingDate)), __LINE__);
        }
        $this->flightBookingDate = $flightBookingDate;
        
        return $this;
    }
    /**
     * Get flightDeparture value
     * @return string|null
     */
    public function getFlightDeparture(): ?string
    {
        return $this->flightDeparture;
    }
    /**
     * Set flightDeparture value
     * @param string $flightDeparture
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setFlightDeparture(?string $flightDeparture = null): self
    {
        // validation for constraint: string
        if (!is_null($flightDeparture) && !is_string($flightDeparture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightDeparture, true), gettype($flightDeparture)), __LINE__);
        }
        $this->flightDeparture = $flightDeparture;
        
        return $this;
    }
    /**
     * Get flightDepartureDate value
     * @return string|null
     */
    public function getFlightDepartureDate(): ?string
    {
        return $this->flightDepartureDate;
    }
    /**
     * Set flightDepartureDate value
     * @param string $flightDepartureDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setFlightDepartureDate(?string $flightDepartureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($flightDepartureDate) && !is_string($flightDepartureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightDepartureDate, true), gettype($flightDepartureDate)), __LINE__);
        }
        $this->flightDepartureDate = $flightDepartureDate;
        
        return $this;
    }
    /**
     * Get flightDestination value
     * @return string|null
     */
    public function getFlightDestination(): ?string
    {
        return $this->flightDestination;
    }
    /**
     * Set flightDestination value
     * @param string $flightDestination
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setFlightDestination(?string $flightDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($flightDestination) && !is_string($flightDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightDestination, true), gettype($flightDestination)), __LINE__);
        }
        $this->flightDestination = $flightDestination;
        
        return $this;
    }
    /**
     * Get flightFilekey value
     * @return string|null
     */
    public function getFlightFilekey(): ?string
    {
        return $this->flightFilekey;
    }
    /**
     * Set flightFilekey value
     * @param string $flightFilekey
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setFlightFilekey(?string $flightFilekey = null): self
    {
        // validation for constraint: string
        if (!is_null($flightFilekey) && !is_string($flightFilekey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightFilekey, true), gettype($flightFilekey)), __LINE__);
        }
        $this->flightFilekey = $flightFilekey;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get destinationDescription value
     * @return string|null
     */
    public function getDestinationDescription(): ?string
    {
        return $this->destinationDescription;
    }
    /**
     * Set destinationDescription value
     * @param string $destinationDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setDestinationDescription(?string $destinationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDescription) && !is_string($destinationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDescription, true), gettype($destinationDescription)), __LINE__);
        }
        $this->destinationDescription = $destinationDescription;
        
        return $this;
    }
    /**
     * Get countryDescription value
     * @return string|null
     */
    public function getCountryDescription(): ?string
    {
        return $this->countryDescription;
    }
    /**
     * Set countryDescription value
     * @param string $countryDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
     */
    public function setCountryDescription(?string $countryDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($countryDescription) && !is_string($countryDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryDescription, true), gettype($countryDescription)), __LINE__);
        }
        $this->countryDescription = $countryDescription;
        
        return $this;
    }
}
