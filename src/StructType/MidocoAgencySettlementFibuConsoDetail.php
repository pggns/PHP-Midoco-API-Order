<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencySettlementFibuConsoDetail StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgencySettlementFibuConsoDetail extends AbstractStructBase
{
    /**
     * The issueDate
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The travelerName
     * @var string|null
     */
    protected ?string $travelerName = null;
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
    /**
     * The bspValidator
     * @var string|null
     */
    protected ?string $bspValidator = null;
    /**
     * The filekey
     * @var string|null
     */
    protected ?string $filekey = null;
    /**
     * The ticketTotalAmount
     * @var float|null
     */
    protected ?float $ticketTotalAmount = null;
    /**
     * The ticketInkassoAmount
     * @var float|null
     */
    protected ?float $ticketInkassoAmount = null;
    /**
     * The segments
     * @var string|null
     */
    protected ?string $segments = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The totalTax
     * @var float|null
     */
    protected ?float $totalTax = null;
    /**
     * The ticketFareBase
     * @var float|null
     */
    protected ?float $ticketFareBase = null;
    /**
     * The ticketType
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The mcoType
     * @var string|null
     */
    protected ?string $mcoType = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The feeType
     * @var string|null
     */
    protected ?string $feeType = null;
    /**
     * The feeDescription
     * @var string|null
     */
    protected ?string $feeDescription = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The ticketFee
     * @var float|null
     */
    protected ?float $ticketFee = null;
    /**
     * The customerFee
     * @var float|null
     */
    protected ?float $customerFee = null;
    /**
     * The billingPeriod
     * @var string|null
     */
    protected ?string $billingPeriod = null;
    /**
     * The billingDate
     * @var string|null
     */
    protected ?string $billingDate = null;
    /**
     * The iataCode
     * @var string|null
     */
    protected ?string $iataCode = null;
    /**
     * The transactionType
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The commission
     * @var float|null
     */
    protected ?float $commission = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The posCode
     * @var string|null
     */
    protected ?string $posCode = null;
    /**
     * The businessModel
     * @var string|null
     */
    protected ?string $businessModel = null;
    /**
     * The departureDate
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The airlineFees
     * @var float|null
     */
    protected ?float $airlineFees = null;
    /**
     * The bspValidatorName
     * @var string|null
     */
    protected ?string $bspValidatorName = null;
    /**
     * The passengerAssignment
     * @var string|null
     */
    protected ?string $passengerAssignment = null;
    /**
     * The ticketNoConj
     * @var string|null
     */
    protected ?string $ticketNoConj = null;
    /**
     * The docSubtypeDescription
     * @var string|null
     */
    protected ?string $docSubtypeDescription = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The orderPosition
     * @var int|null
     */
    protected ?int $orderPosition = null;
    /**
     * The inkassoMode
     * @var int|null
     */
    protected ?int $inkassoMode = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The passengerCount
     * @var int|null
     */
    protected ?int $passengerCount = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The originalBookingId
     * @var string|null
     */
    protected ?string $originalBookingId = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * Constructor method for MidocoAgencySettlementFibuConsoDetail
     * @uses MidocoAgencySettlementFibuConsoDetail::setIssueDate()
     * @uses MidocoAgencySettlementFibuConsoDetail::setOrderNo()
     * @uses MidocoAgencySettlementFibuConsoDetail::setOrderId()
     * @uses MidocoAgencySettlementFibuConsoDetail::setItemId()
     * @uses MidocoAgencySettlementFibuConsoDetail::setBookingId()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTravelerName()
     * @uses MidocoAgencySettlementFibuConsoDetail::setDocumentNo()
     * @uses MidocoAgencySettlementFibuConsoDetail::setBspValidator()
     * @uses MidocoAgencySettlementFibuConsoDetail::setFilekey()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTicketTotalAmount()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTicketInkassoAmount()
     * @uses MidocoAgencySettlementFibuConsoDetail::setSegments()
     * @uses MidocoAgencySettlementFibuConsoDetail::setCarrier()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTotalTax()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTicketFareBase()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTicketType()
     * @uses MidocoAgencySettlementFibuConsoDetail::setMcoType()
     * @uses MidocoAgencySettlementFibuConsoDetail::setVatAmount()
     * @uses MidocoAgencySettlementFibuConsoDetail::setVatPercent()
     * @uses MidocoAgencySettlementFibuConsoDetail::setFeeType()
     * @uses MidocoAgencySettlementFibuConsoDetail::setFeeDescription()
     * @uses MidocoAgencySettlementFibuConsoDetail::setFeeAmount()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTicketFee()
     * @uses MidocoAgencySettlementFibuConsoDetail::setCustomerFee()
     * @uses MidocoAgencySettlementFibuConsoDetail::setBillingPeriod()
     * @uses MidocoAgencySettlementFibuConsoDetail::setBillingDate()
     * @uses MidocoAgencySettlementFibuConsoDetail::setIataCode()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTransactionType()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTotalPrice()
     * @uses MidocoAgencySettlementFibuConsoDetail::setCurrency()
     * @uses MidocoAgencySettlementFibuConsoDetail::setCommission()
     * @uses MidocoAgencySettlementFibuConsoDetail::setRemark()
     * @uses MidocoAgencySettlementFibuConsoDetail::setPosCode()
     * @uses MidocoAgencySettlementFibuConsoDetail::setBusinessModel()
     * @uses MidocoAgencySettlementFibuConsoDetail::setDepartureDate()
     * @uses MidocoAgencySettlementFibuConsoDetail::setEndDate()
     * @uses MidocoAgencySettlementFibuConsoDetail::setAirlineFees()
     * @uses MidocoAgencySettlementFibuConsoDetail::setBspValidatorName()
     * @uses MidocoAgencySettlementFibuConsoDetail::setPassengerAssignment()
     * @uses MidocoAgencySettlementFibuConsoDetail::setTicketNoConj()
     * @uses MidocoAgencySettlementFibuConsoDetail::setDocSubtypeDescription()
     * @uses MidocoAgencySettlementFibuConsoDetail::setCcType()
     * @uses MidocoAgencySettlementFibuConsoDetail::setPaymentType()
     * @uses MidocoAgencySettlementFibuConsoDetail::setOrderPosition()
     * @uses MidocoAgencySettlementFibuConsoDetail::setInkassoMode()
     * @uses MidocoAgencySettlementFibuConsoDetail::setDescription()
     * @uses MidocoAgencySettlementFibuConsoDetail::setItemType()
     * @uses MidocoAgencySettlementFibuConsoDetail::setPassengerCount()
     * @uses MidocoAgencySettlementFibuConsoDetail::setSupplierId()
     * @uses MidocoAgencySettlementFibuConsoDetail::setOriginalBookingId()
     * @uses MidocoAgencySettlementFibuConsoDetail::setSupplierName()
     * @param string $issueDate
     * @param int $orderNo
     * @param int $orderId
     * @param int $itemId
     * @param string $bookingId
     * @param string $travelerName
     * @param string $documentNo
     * @param string $bspValidator
     * @param string $filekey
     * @param float $ticketTotalAmount
     * @param float $ticketInkassoAmount
     * @param string $segments
     * @param string $carrier
     * @param float $totalTax
     * @param float $ticketFareBase
     * @param string $ticketType
     * @param string $mcoType
     * @param float $vatAmount
     * @param float $vatPercent
     * @param string $feeType
     * @param string $feeDescription
     * @param float $feeAmount
     * @param float $ticketFee
     * @param float $customerFee
     * @param string $billingPeriod
     * @param string $billingDate
     * @param string $iataCode
     * @param string $transactionType
     * @param float $totalPrice
     * @param string $currency
     * @param float $commission
     * @param string $remark
     * @param string $posCode
     * @param string $businessModel
     * @param string $departureDate
     * @param string $endDate
     * @param float $airlineFees
     * @param string $bspValidatorName
     * @param string $passengerAssignment
     * @param string $ticketNoConj
     * @param string $docSubtypeDescription
     * @param string $ccType
     * @param string $paymentType
     * @param int $orderPosition
     * @param int $inkassoMode
     * @param string $description
     * @param string $itemType
     * @param int $passengerCount
     * @param string $supplierId
     * @param string $originalBookingId
     * @param string $supplierName
     */
    public function __construct(?string $issueDate = null, ?int $orderNo = null, ?int $orderId = null, ?int $itemId = null, ?string $bookingId = null, ?string $travelerName = null, ?string $documentNo = null, ?string $bspValidator = null, ?string $filekey = null, ?float $ticketTotalAmount = null, ?float $ticketInkassoAmount = null, ?string $segments = null, ?string $carrier = null, ?float $totalTax = null, ?float $ticketFareBase = null, ?string $ticketType = null, ?string $mcoType = null, ?float $vatAmount = null, ?float $vatPercent = null, ?string $feeType = null, ?string $feeDescription = null, ?float $feeAmount = null, ?float $ticketFee = null, ?float $customerFee = null, ?string $billingPeriod = null, ?string $billingDate = null, ?string $iataCode = null, ?string $transactionType = null, ?float $totalPrice = null, ?string $currency = null, ?float $commission = null, ?string $remark = null, ?string $posCode = null, ?string $businessModel = null, ?string $departureDate = null, ?string $endDate = null, ?float $airlineFees = null, ?string $bspValidatorName = null, ?string $passengerAssignment = null, ?string $ticketNoConj = null, ?string $docSubtypeDescription = null, ?string $ccType = null, ?string $paymentType = null, ?int $orderPosition = null, ?int $inkassoMode = null, ?string $description = null, ?string $itemType = null, ?int $passengerCount = null, ?string $supplierId = null, ?string $originalBookingId = null, ?string $supplierName = null)
    {
        $this
            ->setIssueDate($issueDate)
            ->setOrderNo($orderNo)
            ->setOrderId($orderId)
            ->setItemId($itemId)
            ->setBookingId($bookingId)
            ->setTravelerName($travelerName)
            ->setDocumentNo($documentNo)
            ->setBspValidator($bspValidator)
            ->setFilekey($filekey)
            ->setTicketTotalAmount($ticketTotalAmount)
            ->setTicketInkassoAmount($ticketInkassoAmount)
            ->setSegments($segments)
            ->setCarrier($carrier)
            ->setTotalTax($totalTax)
            ->setTicketFareBase($ticketFareBase)
            ->setTicketType($ticketType)
            ->setMcoType($mcoType)
            ->setVatAmount($vatAmount)
            ->setVatPercent($vatPercent)
            ->setFeeType($feeType)
            ->setFeeDescription($feeDescription)
            ->setFeeAmount($feeAmount)
            ->setTicketFee($ticketFee)
            ->setCustomerFee($customerFee)
            ->setBillingPeriod($billingPeriod)
            ->setBillingDate($billingDate)
            ->setIataCode($iataCode)
            ->setTransactionType($transactionType)
            ->setTotalPrice($totalPrice)
            ->setCurrency($currency)
            ->setCommission($commission)
            ->setRemark($remark)
            ->setPosCode($posCode)
            ->setBusinessModel($businessModel)
            ->setDepartureDate($departureDate)
            ->setEndDate($endDate)
            ->setAirlineFees($airlineFees)
            ->setBspValidatorName($bspValidatorName)
            ->setPassengerAssignment($passengerAssignment)
            ->setTicketNoConj($ticketNoConj)
            ->setDocSubtypeDescription($docSubtypeDescription)
            ->setCcType($ccType)
            ->setPaymentType($paymentType)
            ->setOrderPosition($orderPosition)
            ->setInkassoMode($inkassoMode)
            ->setDescription($description)
            ->setItemType($itemType)
            ->setPassengerCount($passengerCount)
            ->setSupplierId($supplierId)
            ->setOriginalBookingId($originalBookingId)
            ->setSupplierName($supplierName);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get travelerName value
     * @return string|null
     */
    public function getTravelerName(): ?string
    {
        return $this->travelerName;
    }
    /**
     * Set travelerName value
     * @param string $travelerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setTravelerName(?string $travelerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travelerName) && !is_string($travelerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerName, true), gettype($travelerName)), __LINE__);
        }
        $this->travelerName = $travelerName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * Get bspValidator value
     * @return string|null
     */
    public function getBspValidator(): ?string
    {
        return $this->bspValidator;
    }
    /**
     * Set bspValidator value
     * @param string $bspValidator
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setBspValidator(?string $bspValidator = null): self
    {
        // validation for constraint: string
        if (!is_null($bspValidator) && !is_string($bspValidator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspValidator, true), gettype($bspValidator)), __LINE__);
        }
        $this->bspValidator = $bspValidator;
        
        return $this;
    }
    /**
     * Get filekey value
     * @return string|null
     */
    public function getFilekey(): ?string
    {
        return $this->filekey;
    }
    /**
     * Set filekey value
     * @param string $filekey
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setFilekey(?string $filekey = null): self
    {
        // validation for constraint: string
        if (!is_null($filekey) && !is_string($filekey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filekey, true), gettype($filekey)), __LINE__);
        }
        $this->filekey = $filekey;
        
        return $this;
    }
    /**
     * Get ticketTotalAmount value
     * @return float|null
     */
    public function getTicketTotalAmount(): ?float
    {
        return $this->ticketTotalAmount;
    }
    /**
     * Set ticketTotalAmount value
     * @param float $ticketTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setTicketTotalAmount(?float $ticketTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($ticketTotalAmount) && !(is_float($ticketTotalAmount) || is_numeric($ticketTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ticketTotalAmount, true), gettype($ticketTotalAmount)), __LINE__);
        }
        $this->ticketTotalAmount = $ticketTotalAmount;
        
        return $this;
    }
    /**
     * Get ticketInkassoAmount value
     * @return float|null
     */
    public function getTicketInkassoAmount(): ?float
    {
        return $this->ticketInkassoAmount;
    }
    /**
     * Set ticketInkassoAmount value
     * @param float $ticketInkassoAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setTicketInkassoAmount(?float $ticketInkassoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($ticketInkassoAmount) && !(is_float($ticketInkassoAmount) || is_numeric($ticketInkassoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ticketInkassoAmount, true), gettype($ticketInkassoAmount)), __LINE__);
        }
        $this->ticketInkassoAmount = $ticketInkassoAmount;
        
        return $this;
    }
    /**
     * Get segments value
     * @return string|null
     */
    public function getSegments(): ?string
    {
        return $this->segments;
    }
    /**
     * Set segments value
     * @param string $segments
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setSegments(?string $segments = null): self
    {
        // validation for constraint: string
        if (!is_null($segments) && !is_string($segments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segments, true), gettype($segments)), __LINE__);
        }
        $this->segments = $segments;
        
        return $this;
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get totalTax value
     * @return float|null
     */
    public function getTotalTax(): ?float
    {
        return $this->totalTax;
    }
    /**
     * Set totalTax value
     * @param float $totalTax
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setTotalTax(?float $totalTax = null): self
    {
        // validation for constraint: float
        if (!is_null($totalTax) && !(is_float($totalTax) || is_numeric($totalTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->totalTax = $totalTax;
        
        return $this;
    }
    /**
     * Get ticketFareBase value
     * @return float|null
     */
    public function getTicketFareBase(): ?float
    {
        return $this->ticketFareBase;
    }
    /**
     * Set ticketFareBase value
     * @param float $ticketFareBase
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setTicketFareBase(?float $ticketFareBase = null): self
    {
        // validation for constraint: float
        if (!is_null($ticketFareBase) && !(is_float($ticketFareBase) || is_numeric($ticketFareBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ticketFareBase, true), gettype($ticketFareBase)), __LINE__);
        }
        $this->ticketFareBase = $ticketFareBase;
        
        return $this;
    }
    /**
     * Get ticketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }
    /**
     * Set ticketType value
     * @param string $ticketType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketType, true), gettype($ticketType)), __LINE__);
        }
        $this->ticketType = $ticketType;
        
        return $this;
    }
    /**
     * Get mcoType value
     * @return string|null
     */
    public function getMcoType(): ?string
    {
        return $this->mcoType;
    }
    /**
     * Set mcoType value
     * @param string $mcoType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setMcoType(?string $mcoType = null): self
    {
        // validation for constraint: string
        if (!is_null($mcoType) && !is_string($mcoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mcoType, true), gettype($mcoType)), __LINE__);
        }
        $this->mcoType = $mcoType;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
    /**
     * Get feeType value
     * @return string|null
     */
    public function getFeeType(): ?string
    {
        return $this->feeType;
    }
    /**
     * Set feeType value
     * @param string $feeType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setFeeType(?string $feeType = null): self
    {
        // validation for constraint: string
        if (!is_null($feeType) && !is_string($feeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeType, true), gettype($feeType)), __LINE__);
        }
        $this->feeType = $feeType;
        
        return $this;
    }
    /**
     * Get feeDescription value
     * @return string|null
     */
    public function getFeeDescription(): ?string
    {
        return $this->feeDescription;
    }
    /**
     * Set feeDescription value
     * @param string $feeDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setFeeDescription(?string $feeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($feeDescription) && !is_string($feeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeDescription, true), gettype($feeDescription)), __LINE__);
        }
        $this->feeDescription = $feeDescription;
        
        return $this;
    }
    /**
     * Get feeAmount value
     * @return float|null
     */
    public function getFeeAmount(): ?float
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param float $feeAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setFeeAmount(?float $feeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmount) && !(is_float($feeAmount) || is_numeric($feeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmount, true), gettype($feeAmount)), __LINE__);
        }
        $this->feeAmount = $feeAmount;
        
        return $this;
    }
    /**
     * Get ticketFee value
     * @return float|null
     */
    public function getTicketFee(): ?float
    {
        return $this->ticketFee;
    }
    /**
     * Set ticketFee value
     * @param float $ticketFee
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setTicketFee(?float $ticketFee = null): self
    {
        // validation for constraint: float
        if (!is_null($ticketFee) && !(is_float($ticketFee) || is_numeric($ticketFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ticketFee, true), gettype($ticketFee)), __LINE__);
        }
        $this->ticketFee = $ticketFee;
        
        return $this;
    }
    /**
     * Get customerFee value
     * @return float|null
     */
    public function getCustomerFee(): ?float
    {
        return $this->customerFee;
    }
    /**
     * Set customerFee value
     * @param float $customerFee
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setCustomerFee(?float $customerFee = null): self
    {
        // validation for constraint: float
        if (!is_null($customerFee) && !(is_float($customerFee) || is_numeric($customerFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customerFee, true), gettype($customerFee)), __LINE__);
        }
        $this->customerFee = $customerFee;
        
        return $this;
    }
    /**
     * Get billingPeriod value
     * @return string|null
     */
    public function getBillingPeriod(): ?string
    {
        return $this->billingPeriod;
    }
    /**
     * Set billingPeriod value
     * @param string $billingPeriod
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setBillingPeriod(?string $billingPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($billingPeriod) && !is_string($billingPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingPeriod, true), gettype($billingPeriod)), __LINE__);
        }
        $this->billingPeriod = $billingPeriod;
        
        return $this;
    }
    /**
     * Get billingDate value
     * @return string|null
     */
    public function getBillingDate(): ?string
    {
        return $this->billingDate;
    }
    /**
     * Set billingDate value
     * @param string $billingDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setBillingDate(?string $billingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($billingDate) && !is_string($billingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingDate, true), gettype($billingDate)), __LINE__);
        }
        $this->billingDate = $billingDate;
        
        return $this;
    }
    /**
     * Get iataCode value
     * @return string|null
     */
    public function getIataCode(): ?string
    {
        return $this->iataCode;
    }
    /**
     * Set iataCode value
     * @param string $iataCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setIataCode(?string $iataCode = null): self
    {
        // validation for constraint: string
        if (!is_null($iataCode) && !is_string($iataCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iataCode, true), gettype($iataCode)), __LINE__);
        }
        $this->iataCode = $iataCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * Get commission value
     * @return float|null
     */
    public function getCommission(): ?float
    {
        return $this->commission;
    }
    /**
     * Set commission value
     * @param float $commission
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setCommission(?float $commission = null): self
    {
        // validation for constraint: float
        if (!is_null($commission) && !(is_float($commission) || is_numeric($commission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission, true), gettype($commission)), __LINE__);
        }
        $this->commission = $commission;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
    /**
     * Get posCode value
     * @return string|null
     */
    public function getPosCode(): ?string
    {
        return $this->posCode;
    }
    /**
     * Set posCode value
     * @param string $posCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setPosCode(?string $posCode = null): self
    {
        // validation for constraint: string
        if (!is_null($posCode) && !is_string($posCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posCode, true), gettype($posCode)), __LINE__);
        }
        $this->posCode = $posCode;
        
        return $this;
    }
    /**
     * Get businessModel value
     * @return string|null
     */
    public function getBusinessModel(): ?string
    {
        return $this->businessModel;
    }
    /**
     * Set businessModel value
     * @param string $businessModel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setBusinessModel(?string $businessModel = null): self
    {
        // validation for constraint: string
        if (!is_null($businessModel) && !is_string($businessModel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessModel, true), gettype($businessModel)), __LINE__);
        }
        $this->businessModel = $businessModel;
        
        return $this;
    }
    /**
     * Get departureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }
    /**
     * Set departureDate value
     * @param string $departureDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        $this->departureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get airlineFees value
     * @return float|null
     */
    public function getAirlineFees(): ?float
    {
        return $this->airlineFees;
    }
    /**
     * Set airlineFees value
     * @param float $airlineFees
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setAirlineFees(?float $airlineFees = null): self
    {
        // validation for constraint: float
        if (!is_null($airlineFees) && !(is_float($airlineFees) || is_numeric($airlineFees))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($airlineFees, true), gettype($airlineFees)), __LINE__);
        }
        $this->airlineFees = $airlineFees;
        
        return $this;
    }
    /**
     * Get bspValidatorName value
     * @return string|null
     */
    public function getBspValidatorName(): ?string
    {
        return $this->bspValidatorName;
    }
    /**
     * Set bspValidatorName value
     * @param string $bspValidatorName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setBspValidatorName(?string $bspValidatorName = null): self
    {
        // validation for constraint: string
        if (!is_null($bspValidatorName) && !is_string($bspValidatorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspValidatorName, true), gettype($bspValidatorName)), __LINE__);
        }
        $this->bspValidatorName = $bspValidatorName;
        
        return $this;
    }
    /**
     * Get passengerAssignment value
     * @return string|null
     */
    public function getPassengerAssignment(): ?string
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param string $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setPassengerAssignment(?string $passengerAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerAssignment) && !is_string($passengerAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get ticketNoConj value
     * @return string|null
     */
    public function getTicketNoConj(): ?string
    {
        return $this->ticketNoConj;
    }
    /**
     * Set ticketNoConj value
     * @param string $ticketNoConj
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setTicketNoConj(?string $ticketNoConj = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNoConj) && !is_string($ticketNoConj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNoConj, true), gettype($ticketNoConj)), __LINE__);
        }
        $this->ticketNoConj = $ticketNoConj;
        
        return $this;
    }
    /**
     * Get docSubtypeDescription value
     * @return string|null
     */
    public function getDocSubtypeDescription(): ?string
    {
        return $this->docSubtypeDescription;
    }
    /**
     * Set docSubtypeDescription value
     * @param string $docSubtypeDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setDocSubtypeDescription(?string $docSubtypeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($docSubtypeDescription) && !is_string($docSubtypeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docSubtypeDescription, true), gettype($docSubtypeDescription)), __LINE__);
        }
        $this->docSubtypeDescription = $docSubtypeDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * Get orderPosition value
     * @return int|null
     */
    public function getOrderPosition(): ?int
    {
        return $this->orderPosition;
    }
    /**
     * Set orderPosition value
     * @param int $orderPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setOrderPosition(?int $orderPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($orderPosition) && !(is_int($orderPosition) || ctype_digit($orderPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderPosition, true), gettype($orderPosition)), __LINE__);
        }
        $this->orderPosition = $orderPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get passengerCount value
     * @return int|null
     */
    public function getPassengerCount(): ?int
    {
        return $this->passengerCount;
    }
    /**
     * Set passengerCount value
     * @param int $passengerCount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setPassengerCount(?int $passengerCount = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerCount) && !(is_int($passengerCount) || ctype_digit($passengerCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerCount, true), gettype($passengerCount)), __LINE__);
        }
        $this->passengerCount = $passengerCount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
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
     * Get originalBookingId value
     * @return string|null
     */
    public function getOriginalBookingId(): ?string
    {
        return $this->originalBookingId;
    }
    /**
     * Set originalBookingId value
     * @param string $originalBookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setOriginalBookingId(?string $originalBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($originalBookingId) && !is_string($originalBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBookingId, true), gettype($originalBookingId)), __LINE__);
        }
        $this->originalBookingId = $originalBookingId;
        
        return $this;
    }
    /**
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencySettlementFibuConsoDetail
     */
    public function setSupplierName(?string $supplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierName, true), gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        
        return $this;
    }
}
