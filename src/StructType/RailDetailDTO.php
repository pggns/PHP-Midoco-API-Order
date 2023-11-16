<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailDetailDTO StructType
 * @subpackage Structs
 */
class RailDetailDTO extends AbstractStructBase
{
    /**
     * The adapter
     * @var string|null
     */
    protected ?string $adapter = null;
    /**
     * The arrivalCode
     * @var string|null
     */
    protected ?string $arrivalCode = null;
    /**
     * The arrivalDate
     * @var string|null
     */
    protected ?string $arrivalDate = null;
    /**
     * The arrivalDesc
     * @var string|null
     */
    protected ?string $arrivalDesc = null;
    /**
     * The arrivalPlatform
     * @var string|null
     */
    protected ?string $arrivalPlatform = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The bookingClass
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The bookingType
     * @var string|null
     */
    protected ?string $bookingType = null;
    /**
     * The cancellationFee
     * @var float|null
     */
    protected ?float $cancellationFee = null;
    /**
     * The ccApprovalCode
     * @var string|null
     */
    protected ?string $ccApprovalCode = null;
    /**
     * The ccNumber
     * @var string|null
     */
    protected ?string $ccNumber = null;
    /**
     * The ccSlipNo
     * @var string|null
     */
    protected ?string $ccSlipNo = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The companyCustomer
     * @var bool|null
     */
    protected ?bool $companyCustomer = null;
    /**
     * The crsAgencyNo
     * @var string|null
     */
    protected ?string $crsAgencyNo = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDate
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The departureDesc
     * @var string|null
     */
    protected ?string $departureDesc = null;
    /**
     * The departurePlatform
     * @var string|null
     */
    protected ?string $departurePlatform = null;
    /**
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
    /**
     * The domesticIndicator
     * @var string|null
     */
    protected ?string $domesticIndicator = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The globalPrice
     * @var bool|null
     */
    protected ?bool $globalPrice = null;
    /**
     * The issueType
     * @var string|null
     */
    protected ?string $issueType = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The journeyType
     * @var string|null
     */
    protected ?string $journeyType = null;
    /**
     * The lastCancelDate
     * @var string|null
     */
    protected ?string $lastCancelDate = null;
    /**
     * The noOfChildren
     * @var int|null
     */
    protected ?int $noOfChildren = null;
    /**
     * The partition
     * @var string|null
     */
    protected ?string $partition = null;
    /**
     * The passengercommrate
     * @var float|null
     */
    protected ?float $passengercommrate = null;
    /**
     * The paxPerServices
     * @var int|null
     */
    protected ?int $paxPerServices = null;
    /**
     * The paymentMode
     * @var string|null
     */
    protected ?string $paymentMode = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The priceClass
     * @var string|null
     */
    protected ?string $priceClass = null;
    /**
     * The priceType
     * @var string|null
     */
    protected ?string $priceType = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The reductionCode
     * @var string|null
     */
    protected ?string $reductionCode = null;
    /**
     * The reductionDesc
     * @var string|null
     */
    protected ?string $reductionDesc = null;
    /**
     * The referencePosition
     * @var int|null
     */
    protected ?int $referencePosition = null;
    /**
     * The seat
     * @var string|null
     */
    protected ?string $seat = null;
    /**
     * The seatExtra
     * @var string|null
     */
    protected ?string $seatExtra = null;
    /**
     * The serviceCode
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceDesc
     * @var string|null
     */
    protected ?string $serviceDesc = null;
    /**
     * The serviceName
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The servicePrice
     * @var float|null
     */
    protected ?float $servicePrice = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The tariffCode
     * @var string|null
     */
    protected ?string $tariffCode = null;
    /**
     * The tariffDesc
     * @var string|null
     */
    protected ?string $tariffDesc = null;
    /**
     * The ticketCategory
     * @var string|null
     */
    protected ?string $ticketCategory = null;
    /**
     * The tokenChecked
     * @var bool|null
     */
    protected ?bool $tokenChecked = null;
    /**
     * The tourTicket
     * @var string|null
     */
    protected ?string $tourTicket = null;
    /**
     * The traffic
     * @var string|null
     */
    protected ?string $traffic = null;
    /**
     * The trainNo
     * @var string|null
     */
    protected ?string $trainNo = null;
    /**
     * The trainType
     * @var string|null
     */
    protected ?string $trainType = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The vat2Amount
     * @var float|null
     */
    protected ?float $vat2Amount = null;
    /**
     * The vat2Base
     * @var float|null
     */
    protected ?float $vat2Base = null;
    /**
     * The vat2Percent
     * @var float|null
     */
    protected ?float $vat2Percent = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatBase
     * @var float|null
     */
    protected ?float $vatBase = null;
    /**
     * The vatIncluded
     * @var bool|null
     */
    protected ?bool $vatIncluded = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The waggon
     * @var string|null
     */
    protected ?string $waggon = null;
    /**
     * Constructor method for RailDetailDTO
     * @uses RailDetailDTO::setAdapter()
     * @uses RailDetailDTO::setArrivalCode()
     * @uses RailDetailDTO::setArrivalDate()
     * @uses RailDetailDTO::setArrivalDesc()
     * @uses RailDetailDTO::setArrivalPlatform()
     * @uses RailDetailDTO::setArrivalTime()
     * @uses RailDetailDTO::setBookingClass()
     * @uses RailDetailDTO::setBookingType()
     * @uses RailDetailDTO::setCancellationFee()
     * @uses RailDetailDTO::setCcApprovalCode()
     * @uses RailDetailDTO::setCcNumber()
     * @uses RailDetailDTO::setCcSlipNo()
     * @uses RailDetailDTO::setCcType()
     * @uses RailDetailDTO::setCompanyCustomer()
     * @uses RailDetailDTO::setCrsAgencyNo()
     * @uses RailDetailDTO::setCurrency()
     * @uses RailDetailDTO::setDepartureCode()
     * @uses RailDetailDTO::setDepartureDate()
     * @uses RailDetailDTO::setDepartureDesc()
     * @uses RailDetailDTO::setDeparturePlatform()
     * @uses RailDetailDTO::setDepartureTime()
     * @uses RailDetailDTO::setDocumentNo()
     * @uses RailDetailDTO::setDomesticIndicator()
     * @uses RailDetailDTO::setFeeAmount()
     * @uses RailDetailDTO::setGlobalPrice()
     * @uses RailDetailDTO::setIssueType()
     * @uses RailDetailDTO::setItemId()
     * @uses RailDetailDTO::setJourneyType()
     * @uses RailDetailDTO::setLastCancelDate()
     * @uses RailDetailDTO::setNoOfChildren()
     * @uses RailDetailDTO::setPartition()
     * @uses RailDetailDTO::setPassengercommrate()
     * @uses RailDetailDTO::setPaxPerServices()
     * @uses RailDetailDTO::setPaymentMode()
     * @uses RailDetailDTO::setPersonAssignment()
     * @uses RailDetailDTO::setPosition()
     * @uses RailDetailDTO::setPriceClass()
     * @uses RailDetailDTO::setPriceType()
     * @uses RailDetailDTO::setProductType()
     * @uses RailDetailDTO::setReductionCode()
     * @uses RailDetailDTO::setReductionDesc()
     * @uses RailDetailDTO::setReferencePosition()
     * @uses RailDetailDTO::setSeat()
     * @uses RailDetailDTO::setSeatExtra()
     * @uses RailDetailDTO::setServiceCode()
     * @uses RailDetailDTO::setServiceDesc()
     * @uses RailDetailDTO::setServiceName()
     * @uses RailDetailDTO::setServicePrice()
     * @uses RailDetailDTO::setServiceStatus()
     * @uses RailDetailDTO::setTariffCode()
     * @uses RailDetailDTO::setTariffDesc()
     * @uses RailDetailDTO::setTicketCategory()
     * @uses RailDetailDTO::setTokenChecked()
     * @uses RailDetailDTO::setTourTicket()
     * @uses RailDetailDTO::setTraffic()
     * @uses RailDetailDTO::setTrainNo()
     * @uses RailDetailDTO::setTrainType()
     * @uses RailDetailDTO::setValidFrom()
     * @uses RailDetailDTO::setValidTo()
     * @uses RailDetailDTO::setVat2Amount()
     * @uses RailDetailDTO::setVat2Base()
     * @uses RailDetailDTO::setVat2Percent()
     * @uses RailDetailDTO::setVatAmount()
     * @uses RailDetailDTO::setVatBase()
     * @uses RailDetailDTO::setVatIncluded()
     * @uses RailDetailDTO::setVatPercent()
     * @uses RailDetailDTO::setWaggon()
     * @param string $adapter
     * @param string $arrivalCode
     * @param string $arrivalDate
     * @param string $arrivalDesc
     * @param string $arrivalPlatform
     * @param string $arrivalTime
     * @param string $bookingClass
     * @param string $bookingType
     * @param float $cancellationFee
     * @param string $ccApprovalCode
     * @param string $ccNumber
     * @param string $ccSlipNo
     * @param string $ccType
     * @param bool $companyCustomer
     * @param string $crsAgencyNo
     * @param string $currency
     * @param string $departureCode
     * @param string $departureDate
     * @param string $departureDesc
     * @param string $departurePlatform
     * @param string $departureTime
     * @param string $documentNo
     * @param string $domesticIndicator
     * @param float $feeAmount
     * @param bool $globalPrice
     * @param string $issueType
     * @param int $itemId
     * @param string $journeyType
     * @param string $lastCancelDate
     * @param int $noOfChildren
     * @param string $partition
     * @param float $passengercommrate
     * @param int $paxPerServices
     * @param string $paymentMode
     * @param string $personAssignment
     * @param int $position
     * @param string $priceClass
     * @param string $priceType
     * @param string $productType
     * @param string $reductionCode
     * @param string $reductionDesc
     * @param int $referencePosition
     * @param string $seat
     * @param string $seatExtra
     * @param string $serviceCode
     * @param string $serviceDesc
     * @param string $serviceName
     * @param float $servicePrice
     * @param string $serviceStatus
     * @param string $tariffCode
     * @param string $tariffDesc
     * @param string $ticketCategory
     * @param bool $tokenChecked
     * @param string $tourTicket
     * @param string $traffic
     * @param string $trainNo
     * @param string $trainType
     * @param string $validFrom
     * @param string $validTo
     * @param float $vat2Amount
     * @param float $vat2Base
     * @param float $vat2Percent
     * @param float $vatAmount
     * @param float $vatBase
     * @param bool $vatIncluded
     * @param float $vatPercent
     * @param string $waggon
     */
    public function __construct(?string $adapter = null, ?string $arrivalCode = null, ?string $arrivalDate = null, ?string $arrivalDesc = null, ?string $arrivalPlatform = null, ?string $arrivalTime = null, ?string $bookingClass = null, ?string $bookingType = null, ?float $cancellationFee = null, ?string $ccApprovalCode = null, ?string $ccNumber = null, ?string $ccSlipNo = null, ?string $ccType = null, ?bool $companyCustomer = null, ?string $crsAgencyNo = null, ?string $currency = null, ?string $departureCode = null, ?string $departureDate = null, ?string $departureDesc = null, ?string $departurePlatform = null, ?string $departureTime = null, ?string $documentNo = null, ?string $domesticIndicator = null, ?float $feeAmount = null, ?bool $globalPrice = null, ?string $issueType = null, ?int $itemId = null, ?string $journeyType = null, ?string $lastCancelDate = null, ?int $noOfChildren = null, ?string $partition = null, ?float $passengercommrate = null, ?int $paxPerServices = null, ?string $paymentMode = null, ?string $personAssignment = null, ?int $position = null, ?string $priceClass = null, ?string $priceType = null, ?string $productType = null, ?string $reductionCode = null, ?string $reductionDesc = null, ?int $referencePosition = null, ?string $seat = null, ?string $seatExtra = null, ?string $serviceCode = null, ?string $serviceDesc = null, ?string $serviceName = null, ?float $servicePrice = null, ?string $serviceStatus = null, ?string $tariffCode = null, ?string $tariffDesc = null, ?string $ticketCategory = null, ?bool $tokenChecked = null, ?string $tourTicket = null, ?string $traffic = null, ?string $trainNo = null, ?string $trainType = null, ?string $validFrom = null, ?string $validTo = null, ?float $vat2Amount = null, ?float $vat2Base = null, ?float $vat2Percent = null, ?float $vatAmount = null, ?float $vatBase = null, ?bool $vatIncluded = null, ?float $vatPercent = null, ?string $waggon = null)
    {
        $this
            ->setAdapter($adapter)
            ->setArrivalCode($arrivalCode)
            ->setArrivalDate($arrivalDate)
            ->setArrivalDesc($arrivalDesc)
            ->setArrivalPlatform($arrivalPlatform)
            ->setArrivalTime($arrivalTime)
            ->setBookingClass($bookingClass)
            ->setBookingType($bookingType)
            ->setCancellationFee($cancellationFee)
            ->setCcApprovalCode($ccApprovalCode)
            ->setCcNumber($ccNumber)
            ->setCcSlipNo($ccSlipNo)
            ->setCcType($ccType)
            ->setCompanyCustomer($companyCustomer)
            ->setCrsAgencyNo($crsAgencyNo)
            ->setCurrency($currency)
            ->setDepartureCode($departureCode)
            ->setDepartureDate($departureDate)
            ->setDepartureDesc($departureDesc)
            ->setDeparturePlatform($departurePlatform)
            ->setDepartureTime($departureTime)
            ->setDocumentNo($documentNo)
            ->setDomesticIndicator($domesticIndicator)
            ->setFeeAmount($feeAmount)
            ->setGlobalPrice($globalPrice)
            ->setIssueType($issueType)
            ->setItemId($itemId)
            ->setJourneyType($journeyType)
            ->setLastCancelDate($lastCancelDate)
            ->setNoOfChildren($noOfChildren)
            ->setPartition($partition)
            ->setPassengercommrate($passengercommrate)
            ->setPaxPerServices($paxPerServices)
            ->setPaymentMode($paymentMode)
            ->setPersonAssignment($personAssignment)
            ->setPosition($position)
            ->setPriceClass($priceClass)
            ->setPriceType($priceType)
            ->setProductType($productType)
            ->setReductionCode($reductionCode)
            ->setReductionDesc($reductionDesc)
            ->setReferencePosition($referencePosition)
            ->setSeat($seat)
            ->setSeatExtra($seatExtra)
            ->setServiceCode($serviceCode)
            ->setServiceDesc($serviceDesc)
            ->setServiceName($serviceName)
            ->setServicePrice($servicePrice)
            ->setServiceStatus($serviceStatus)
            ->setTariffCode($tariffCode)
            ->setTariffDesc($tariffDesc)
            ->setTicketCategory($ticketCategory)
            ->setTokenChecked($tokenChecked)
            ->setTourTicket($tourTicket)
            ->setTraffic($traffic)
            ->setTrainNo($trainNo)
            ->setTrainType($trainType)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setVat2Amount($vat2Amount)
            ->setVat2Base($vat2Base)
            ->setVat2Percent($vat2Percent)
            ->setVatAmount($vatAmount)
            ->setVatBase($vatBase)
            ->setVatIncluded($vatIncluded)
            ->setVatPercent($vatPercent)
            ->setWaggon($waggon);
    }
    /**
     * Get adapter value
     * @return string|null
     */
    public function getAdapter(): ?string
    {
        return $this->adapter;
    }
    /**
     * Set adapter value
     * @param string $adapter
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setAdapter(?string $adapter = null): self
    {
        // validation for constraint: string
        if (!is_null($adapter) && !is_string($adapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapter, true), gettype($adapter)), __LINE__);
        }
        $this->adapter = $adapter;
        
        return $this;
    }
    /**
     * Get arrivalCode value
     * @return string|null
     */
    public function getArrivalCode(): ?string
    {
        return $this->arrivalCode;
    }
    /**
     * Set arrivalCode value
     * @param string $arrivalCode
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setArrivalCode(?string $arrivalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalCode) && !is_string($arrivalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalCode, true), gettype($arrivalCode)), __LINE__);
        }
        $this->arrivalCode = $arrivalCode;
        
        return $this;
    }
    /**
     * Get arrivalDate value
     * @return string|null
     */
    public function getArrivalDate(): ?string
    {
        return $this->arrivalDate;
    }
    /**
     * Set arrivalDate value
     * @param string $arrivalDate
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setArrivalDate(?string $arrivalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDate, true), gettype($arrivalDate)), __LINE__);
        }
        $this->arrivalDate = $arrivalDate;
        
        return $this;
    }
    /**
     * Get arrivalDesc value
     * @return string|null
     */
    public function getArrivalDesc(): ?string
    {
        return $this->arrivalDesc;
    }
    /**
     * Set arrivalDesc value
     * @param string $arrivalDesc
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setArrivalDesc(?string $arrivalDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalDesc) && !is_string($arrivalDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDesc, true), gettype($arrivalDesc)), __LINE__);
        }
        $this->arrivalDesc = $arrivalDesc;
        
        return $this;
    }
    /**
     * Get arrivalPlatform value
     * @return string|null
     */
    public function getArrivalPlatform(): ?string
    {
        return $this->arrivalPlatform;
    }
    /**
     * Set arrivalPlatform value
     * @param string $arrivalPlatform
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setArrivalPlatform(?string $arrivalPlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalPlatform) && !is_string($arrivalPlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalPlatform, true), gettype($arrivalPlatform)), __LINE__);
        }
        $this->arrivalPlatform = $arrivalPlatform;
        
        return $this;
    }
    /**
     * Get arrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->arrivalTime;
    }
    /**
     * Set arrivalTime value
     * @param string $arrivalTime
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->arrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get bookingClass value
     * @return string|null
     */
    public function getBookingClass(): ?string
    {
        return $this->bookingClass;
    }
    /**
     * Set bookingClass value
     * @param string $bookingClass
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setBookingClass(?string $bookingClass = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingClass, true), gettype($bookingClass)), __LINE__);
        }
        $this->bookingClass = $bookingClass;
        
        return $this;
    }
    /**
     * Get bookingType value
     * @return string|null
     */
    public function getBookingType(): ?string
    {
        return $this->bookingType;
    }
    /**
     * Set bookingType value
     * @param string $bookingType
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setBookingType(?string $bookingType = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingType) && !is_string($bookingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingType, true), gettype($bookingType)), __LINE__);
        }
        $this->bookingType = $bookingType;
        
        return $this;
    }
    /**
     * Get cancellationFee value
     * @return float|null
     */
    public function getCancellationFee(): ?float
    {
        return $this->cancellationFee;
    }
    /**
     * Set cancellationFee value
     * @param float $cancellationFee
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setCancellationFee(?float $cancellationFee = null): self
    {
        // validation for constraint: float
        if (!is_null($cancellationFee) && !(is_float($cancellationFee) || is_numeric($cancellationFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancellationFee, true), gettype($cancellationFee)), __LINE__);
        }
        $this->cancellationFee = $cancellationFee;
        
        return $this;
    }
    /**
     * Get ccApprovalCode value
     * @return string|null
     */
    public function getCcApprovalCode(): ?string
    {
        return $this->ccApprovalCode;
    }
    /**
     * Set ccApprovalCode value
     * @param string $ccApprovalCode
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setCcApprovalCode(?string $ccApprovalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($ccApprovalCode) && !is_string($ccApprovalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccApprovalCode, true), gettype($ccApprovalCode)), __LINE__);
        }
        $this->ccApprovalCode = $ccApprovalCode;
        
        return $this;
    }
    /**
     * Get ccNumber value
     * @return string|null
     */
    public function getCcNumber(): ?string
    {
        return $this->ccNumber;
    }
    /**
     * Set ccNumber value
     * @param string $ccNumber
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setCcNumber(?string $ccNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNumber) && !is_string($ccNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNumber, true), gettype($ccNumber)), __LINE__);
        }
        $this->ccNumber = $ccNumber;
        
        return $this;
    }
    /**
     * Get ccSlipNo value
     * @return string|null
     */
    public function getCcSlipNo(): ?string
    {
        return $this->ccSlipNo;
    }
    /**
     * Set ccSlipNo value
     * @param string $ccSlipNo
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setCcSlipNo(?string $ccSlipNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccSlipNo) && !is_string($ccSlipNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccSlipNo, true), gettype($ccSlipNo)), __LINE__);
        }
        $this->ccSlipNo = $ccSlipNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
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
     * Get companyCustomer value
     * @return bool|null
     */
    public function getCompanyCustomer(): ?bool
    {
        return $this->companyCustomer;
    }
    /**
     * Set companyCustomer value
     * @param bool $companyCustomer
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setCompanyCustomer(?bool $companyCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($companyCustomer) && !is_bool($companyCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($companyCustomer, true), gettype($companyCustomer)), __LINE__);
        }
        $this->companyCustomer = $companyCustomer;
        
        return $this;
    }
    /**
     * Get crsAgencyNo value
     * @return string|null
     */
    public function getCrsAgencyNo(): ?string
    {
        return $this->crsAgencyNo;
    }
    /**
     * Set crsAgencyNo value
     * @param string $crsAgencyNo
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setCrsAgencyNo(?string $crsAgencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($crsAgencyNo) && !is_string($crsAgencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsAgencyNo, true), gettype($crsAgencyNo)), __LINE__);
        }
        $this->crsAgencyNo = $crsAgencyNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
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
     * Get departureCode value
     * @return string|null
     */
    public function getDepartureCode(): ?string
    {
        return $this->departureCode;
    }
    /**
     * Set departureCode value
     * @param string $departureCode
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        $this->departureCode = $departureCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
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
     * Get departureDesc value
     * @return string|null
     */
    public function getDepartureDesc(): ?string
    {
        return $this->departureDesc;
    }
    /**
     * Set departureDesc value
     * @param string $departureDesc
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setDepartureDesc(?string $departureDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDesc) && !is_string($departureDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDesc, true), gettype($departureDesc)), __LINE__);
        }
        $this->departureDesc = $departureDesc;
        
        return $this;
    }
    /**
     * Get departurePlatform value
     * @return string|null
     */
    public function getDeparturePlatform(): ?string
    {
        return $this->departurePlatform;
    }
    /**
     * Set departurePlatform value
     * @param string $departurePlatform
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setDeparturePlatform(?string $departurePlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($departurePlatform) && !is_string($departurePlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departurePlatform, true), gettype($departurePlatform)), __LINE__);
        }
        $this->departurePlatform = $departurePlatform;
        
        return $this;
    }
    /**
     * Get departureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->departureTime;
    }
    /**
     * Set departureTime value
     * @param string $departureTime
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->departureTime = $departureTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
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
     * Get domesticIndicator value
     * @return string|null
     */
    public function getDomesticIndicator(): ?string
    {
        return $this->domesticIndicator;
    }
    /**
     * Set domesticIndicator value
     * @param string $domesticIndicator
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setDomesticIndicator(?string $domesticIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($domesticIndicator) && !is_string($domesticIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domesticIndicator, true), gettype($domesticIndicator)), __LINE__);
        }
        $this->domesticIndicator = $domesticIndicator;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
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
     * Get globalPrice value
     * @return bool|null
     */
    public function getGlobalPrice(): ?bool
    {
        return $this->globalPrice;
    }
    /**
     * Set globalPrice value
     * @param bool $globalPrice
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setGlobalPrice(?bool $globalPrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($globalPrice) && !is_bool($globalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalPrice, true), gettype($globalPrice)), __LINE__);
        }
        $this->globalPrice = $globalPrice;
        
        return $this;
    }
    /**
     * Get issueType value
     * @return string|null
     */
    public function getIssueType(): ?string
    {
        return $this->issueType;
    }
    /**
     * Set issueType value
     * @param string $issueType
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setIssueType(?string $issueType = null): self
    {
        // validation for constraint: string
        if (!is_null($issueType) && !is_string($issueType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueType, true), gettype($issueType)), __LINE__);
        }
        $this->issueType = $issueType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
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
     * Get journeyType value
     * @return string|null
     */
    public function getJourneyType(): ?string
    {
        return $this->journeyType;
    }
    /**
     * Set journeyType value
     * @param string $journeyType
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setJourneyType(?string $journeyType = null): self
    {
        // validation for constraint: string
        if (!is_null($journeyType) && !is_string($journeyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($journeyType, true), gettype($journeyType)), __LINE__);
        }
        $this->journeyType = $journeyType;
        
        return $this;
    }
    /**
     * Get lastCancelDate value
     * @return string|null
     */
    public function getLastCancelDate(): ?string
    {
        return $this->lastCancelDate;
    }
    /**
     * Set lastCancelDate value
     * @param string $lastCancelDate
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setLastCancelDate(?string $lastCancelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastCancelDate) && !is_string($lastCancelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastCancelDate, true), gettype($lastCancelDate)), __LINE__);
        }
        $this->lastCancelDate = $lastCancelDate;
        
        return $this;
    }
    /**
     * Get noOfChildren value
     * @return int|null
     */
    public function getNoOfChildren(): ?int
    {
        return $this->noOfChildren;
    }
    /**
     * Set noOfChildren value
     * @param int $noOfChildren
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setNoOfChildren(?int $noOfChildren = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfChildren) && !(is_int($noOfChildren) || ctype_digit($noOfChildren))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfChildren, true), gettype($noOfChildren)), __LINE__);
        }
        $this->noOfChildren = $noOfChildren;
        
        return $this;
    }
    /**
     * Get partition value
     * @return string|null
     */
    public function getPartition(): ?string
    {
        return $this->partition;
    }
    /**
     * Set partition value
     * @param string $partition
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setPartition(?string $partition = null): self
    {
        // validation for constraint: string
        if (!is_null($partition) && !is_string($partition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partition, true), gettype($partition)), __LINE__);
        }
        $this->partition = $partition;
        
        return $this;
    }
    /**
     * Get passengercommrate value
     * @return float|null
     */
    public function getPassengercommrate(): ?float
    {
        return $this->passengercommrate;
    }
    /**
     * Set passengercommrate value
     * @param float $passengercommrate
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setPassengercommrate(?float $passengercommrate = null): self
    {
        // validation for constraint: float
        if (!is_null($passengercommrate) && !(is_float($passengercommrate) || is_numeric($passengercommrate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($passengercommrate, true), gettype($passengercommrate)), __LINE__);
        }
        $this->passengercommrate = $passengercommrate;
        
        return $this;
    }
    /**
     * Get paxPerServices value
     * @return int|null
     */
    public function getPaxPerServices(): ?int
    {
        return $this->paxPerServices;
    }
    /**
     * Set paxPerServices value
     * @param int $paxPerServices
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setPaxPerServices(?int $paxPerServices = null): self
    {
        // validation for constraint: int
        if (!is_null($paxPerServices) && !(is_int($paxPerServices) || ctype_digit($paxPerServices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxPerServices, true), gettype($paxPerServices)), __LINE__);
        }
        $this->paxPerServices = $paxPerServices;
        
        return $this;
    }
    /**
     * Get paymentMode value
     * @return string|null
     */
    public function getPaymentMode(): ?string
    {
        return $this->paymentMode;
    }
    /**
     * Set paymentMode value
     * @param string $paymentMode
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setPaymentMode(?string $paymentMode = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMode) && !is_string($paymentMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMode, true), gettype($paymentMode)), __LINE__);
        }
        $this->paymentMode = $paymentMode;
        
        return $this;
    }
    /**
     * Get personAssignment value
     * @return string|null
     */
    public function getPersonAssignment(): ?string
    {
        return $this->personAssignment;
    }
    /**
     * Set personAssignment value
     * @param string $personAssignment
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setPersonAssignment(?string $personAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($personAssignment) && !is_string($personAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personAssignment, true), gettype($personAssignment)), __LINE__);
        }
        $this->personAssignment = $personAssignment;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get priceClass value
     * @return string|null
     */
    public function getPriceClass(): ?string
    {
        return $this->priceClass;
    }
    /**
     * Set priceClass value
     * @param string $priceClass
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setPriceClass(?string $priceClass = null): self
    {
        // validation for constraint: string
        if (!is_null($priceClass) && !is_string($priceClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priceClass, true), gettype($priceClass)), __LINE__);
        }
        $this->priceClass = $priceClass;
        
        return $this;
    }
    /**
     * Get priceType value
     * @return string|null
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }
    /**
     * Set priceType value
     * @param string $priceType
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setPriceType(?string $priceType = null): self
    {
        // validation for constraint: string
        if (!is_null($priceType) && !is_string($priceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priceType, true), gettype($priceType)), __LINE__);
        }
        $this->priceType = $priceType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
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
     * Get reductionCode value
     * @return string|null
     */
    public function getReductionCode(): ?string
    {
        return $this->reductionCode;
    }
    /**
     * Set reductionCode value
     * @param string $reductionCode
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setReductionCode(?string $reductionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($reductionCode) && !is_string($reductionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reductionCode, true), gettype($reductionCode)), __LINE__);
        }
        $this->reductionCode = $reductionCode;
        
        return $this;
    }
    /**
     * Get reductionDesc value
     * @return string|null
     */
    public function getReductionDesc(): ?string
    {
        return $this->reductionDesc;
    }
    /**
     * Set reductionDesc value
     * @param string $reductionDesc
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setReductionDesc(?string $reductionDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($reductionDesc) && !is_string($reductionDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reductionDesc, true), gettype($reductionDesc)), __LINE__);
        }
        $this->reductionDesc = $reductionDesc;
        
        return $this;
    }
    /**
     * Get referencePosition value
     * @return int|null
     */
    public function getReferencePosition(): ?int
    {
        return $this->referencePosition;
    }
    /**
     * Set referencePosition value
     * @param int $referencePosition
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setReferencePosition(?int $referencePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($referencePosition) && !(is_int($referencePosition) || ctype_digit($referencePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referencePosition, true), gettype($referencePosition)), __LINE__);
        }
        $this->referencePosition = $referencePosition;
        
        return $this;
    }
    /**
     * Get seat value
     * @return string|null
     */
    public function getSeat(): ?string
    {
        return $this->seat;
    }
    /**
     * Set seat value
     * @param string $seat
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setSeat(?string $seat = null): self
    {
        // validation for constraint: string
        if (!is_null($seat) && !is_string($seat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seat, true), gettype($seat)), __LINE__);
        }
        $this->seat = $seat;
        
        return $this;
    }
    /**
     * Get seatExtra value
     * @return string|null
     */
    public function getSeatExtra(): ?string
    {
        return $this->seatExtra;
    }
    /**
     * Set seatExtra value
     * @param string $seatExtra
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setSeatExtra(?string $seatExtra = null): self
    {
        // validation for constraint: string
        if (!is_null($seatExtra) && !is_string($seatExtra)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatExtra, true), gettype($seatExtra)), __LINE__);
        }
        $this->seatExtra = $seatExtra;
        
        return $this;
    }
    /**
     * Get serviceCode value
     * @return string|null
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }
    /**
     * Set serviceCode value
     * @param string $serviceCode
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;
        
        return $this;
    }
    /**
     * Get serviceDesc value
     * @return string|null
     */
    public function getServiceDesc(): ?string
    {
        return $this->serviceDesc;
    }
    /**
     * Set serviceDesc value
     * @param string $serviceDesc
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setServiceDesc(?string $serviceDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceDesc) && !is_string($serviceDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceDesc, true), gettype($serviceDesc)), __LINE__);
        }
        $this->serviceDesc = $serviceDesc;
        
        return $this;
    }
    /**
     * Get serviceName value
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }
    /**
     * Set serviceName value
     * @param string $serviceName
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setServiceName(?string $serviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->serviceName = $serviceName;
        
        return $this;
    }
    /**
     * Get servicePrice value
     * @return float|null
     */
    public function getServicePrice(): ?float
    {
        return $this->servicePrice;
    }
    /**
     * Set servicePrice value
     * @param float $servicePrice
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setServicePrice(?float $servicePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($servicePrice) && !(is_float($servicePrice) || is_numeric($servicePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($servicePrice, true), gettype($servicePrice)), __LINE__);
        }
        $this->servicePrice = $servicePrice;
        
        return $this;
    }
    /**
     * Get serviceStatus value
     * @return string|null
     */
    public function getServiceStatus(): ?string
    {
        return $this->serviceStatus;
    }
    /**
     * Set serviceStatus value
     * @param string $serviceStatus
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setServiceStatus(?string $serviceStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceStatus) && !is_string($serviceStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceStatus, true), gettype($serviceStatus)), __LINE__);
        }
        $this->serviceStatus = $serviceStatus;
        
        return $this;
    }
    /**
     * Get tariffCode value
     * @return string|null
     */
    public function getTariffCode(): ?string
    {
        return $this->tariffCode;
    }
    /**
     * Set tariffCode value
     * @param string $tariffCode
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setTariffCode(?string $tariffCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffCode) && !is_string($tariffCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffCode, true), gettype($tariffCode)), __LINE__);
        }
        $this->tariffCode = $tariffCode;
        
        return $this;
    }
    /**
     * Get tariffDesc value
     * @return string|null
     */
    public function getTariffDesc(): ?string
    {
        return $this->tariffDesc;
    }
    /**
     * Set tariffDesc value
     * @param string $tariffDesc
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setTariffDesc(?string $tariffDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffDesc) && !is_string($tariffDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffDesc, true), gettype($tariffDesc)), __LINE__);
        }
        $this->tariffDesc = $tariffDesc;
        
        return $this;
    }
    /**
     * Get ticketCategory value
     * @return string|null
     */
    public function getTicketCategory(): ?string
    {
        return $this->ticketCategory;
    }
    /**
     * Set ticketCategory value
     * @param string $ticketCategory
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setTicketCategory(?string $ticketCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketCategory) && !is_string($ticketCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketCategory, true), gettype($ticketCategory)), __LINE__);
        }
        $this->ticketCategory = $ticketCategory;
        
        return $this;
    }
    /**
     * Get tokenChecked value
     * @return bool|null
     */
    public function getTokenChecked(): ?bool
    {
        return $this->tokenChecked;
    }
    /**
     * Set tokenChecked value
     * @param bool $tokenChecked
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setTokenChecked(?bool $tokenChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tokenChecked) && !is_bool($tokenChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tokenChecked, true), gettype($tokenChecked)), __LINE__);
        }
        $this->tokenChecked = $tokenChecked;
        
        return $this;
    }
    /**
     * Get tourTicket value
     * @return string|null
     */
    public function getTourTicket(): ?string
    {
        return $this->tourTicket;
    }
    /**
     * Set tourTicket value
     * @param string $tourTicket
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setTourTicket(?string $tourTicket = null): self
    {
        // validation for constraint: string
        if (!is_null($tourTicket) && !is_string($tourTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourTicket, true), gettype($tourTicket)), __LINE__);
        }
        $this->tourTicket = $tourTicket;
        
        return $this;
    }
    /**
     * Get traffic value
     * @return string|null
     */
    public function getTraffic(): ?string
    {
        return $this->traffic;
    }
    /**
     * Set traffic value
     * @param string $traffic
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setTraffic(?string $traffic = null): self
    {
        // validation for constraint: string
        if (!is_null($traffic) && !is_string($traffic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traffic, true), gettype($traffic)), __LINE__);
        }
        $this->traffic = $traffic;
        
        return $this;
    }
    /**
     * Get trainNo value
     * @return string|null
     */
    public function getTrainNo(): ?string
    {
        return $this->trainNo;
    }
    /**
     * Set trainNo value
     * @param string $trainNo
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setTrainNo(?string $trainNo = null): self
    {
        // validation for constraint: string
        if (!is_null($trainNo) && !is_string($trainNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNo, true), gettype($trainNo)), __LINE__);
        }
        $this->trainNo = $trainNo;
        
        return $this;
    }
    /**
     * Get trainType value
     * @return string|null
     */
    public function getTrainType(): ?string
    {
        return $this->trainType;
    }
    /**
     * Set trainType value
     * @param string $trainType
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setTrainType(?string $trainType = null): self
    {
        // validation for constraint: string
        if (!is_null($trainType) && !is_string($trainType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainType, true), gettype($trainType)), __LINE__);
        }
        $this->trainType = $trainType;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
    /**
     * Get vat2Amount value
     * @return float|null
     */
    public function getVat2Amount(): ?float
    {
        return $this->vat2Amount;
    }
    /**
     * Set vat2Amount value
     * @param float $vat2Amount
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setVat2Amount(?float $vat2Amount = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Amount) && !(is_float($vat2Amount) || is_numeric($vat2Amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Amount, true), gettype($vat2Amount)), __LINE__);
        }
        $this->vat2Amount = $vat2Amount;
        
        return $this;
    }
    /**
     * Get vat2Base value
     * @return float|null
     */
    public function getVat2Base(): ?float
    {
        return $this->vat2Base;
    }
    /**
     * Set vat2Base value
     * @param float $vat2Base
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setVat2Base(?float $vat2Base = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Base) && !(is_float($vat2Base) || is_numeric($vat2Base))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Base, true), gettype($vat2Base)), __LINE__);
        }
        $this->vat2Base = $vat2Base;
        
        return $this;
    }
    /**
     * Get vat2Percent value
     * @return float|null
     */
    public function getVat2Percent(): ?float
    {
        return $this->vat2Percent;
    }
    /**
     * Set vat2Percent value
     * @param float $vat2Percent
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setVat2Percent(?float $vat2Percent = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Percent) && !(is_float($vat2Percent) || is_numeric($vat2Percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Percent, true), gettype($vat2Percent)), __LINE__);
        }
        $this->vat2Percent = $vat2Percent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
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
     * Get vatBase value
     * @return float|null
     */
    public function getVatBase(): ?float
    {
        return $this->vatBase;
    }
    /**
     * Set vatBase value
     * @param float $vatBase
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setVatBase(?float $vatBase = null): self
    {
        // validation for constraint: float
        if (!is_null($vatBase) && !(is_float($vatBase) || is_numeric($vatBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatBase, true), gettype($vatBase)), __LINE__);
        }
        $this->vatBase = $vatBase;
        
        return $this;
    }
    /**
     * Get vatIncluded value
     * @return bool|null
     */
    public function getVatIncluded(): ?bool
    {
        return $this->vatIncluded;
    }
    /**
     * Set vatIncluded value
     * @param bool $vatIncluded
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setVatIncluded(?bool $vatIncluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIncluded) && !is_bool($vatIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->vatIncluded = $vatIncluded;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
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
     * Get waggon value
     * @return string|null
     */
    public function getWaggon(): ?string
    {
        return $this->waggon;
    }
    /**
     * Set waggon value
     * @param string $waggon
     * @return \Pggns\MidocoApi\Order\StructType\RailDetailDTO
     */
    public function setWaggon(?string $waggon = null): self
    {
        // validation for constraint: string
        if (!is_null($waggon) && !is_string($waggon)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waggon, true), gettype($waggon)), __LINE__);
        }
        $this->waggon = $waggon;
        
        return $this;
    }
}
