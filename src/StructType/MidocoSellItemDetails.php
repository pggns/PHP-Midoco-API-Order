<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellItemDetails StructType
 * @subpackage Structs
 */
class MidocoSellItemDetails extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The originalBookingId
     * @var string|null
     */
    protected ?string $originalBookingId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * The supplierPosition
     * @var int|null
     */
    protected ?int $supplierPosition = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The areaDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $areaDescription = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDescription
     * @var string|null
     */
    protected ?string $departureDescription = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationDescription
     * @var string|null
     */
    protected ?string $destinationDescription = null;
    /**
     * The accomodationCode
     * @var string|null
     */
    protected ?string $accomodationCode = null;
    /**
     * The accomodationDescription
     * @var string|null
     */
    protected ?string $accomodationDescription = null;
    /**
     * The cruiseCode
     * @var string|null
     */
    protected ?string $cruiseCode = null;
    /**
     * The cruiseDescription
     * @var string|null
     */
    protected ?string $cruiseDescription = null;
    /**
     * The itemDescription
     * @var string|null
     */
    protected ?string $itemDescription = null;
    /**
     * The cateringDescription
     * @var string|null
     */
    protected ?string $cateringDescription = null;
    /**
     * The roomDescription
     * @var string|null
     */
    protected ?string $roomDescription = null;
    /**
     * The itemReferenceNo
     * @var string|null
     */
    protected ?string $itemReferenceNo = null;
    /**
     * The insuranceDescription
     * @var string|null
     */
    protected ?string $insuranceDescription = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The stornoDate
     * @var string|null
     */
    protected ?string $stornoDate = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The creationUser
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The carrierName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $carrierName = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The days
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $days = null;
    /**
     * The returnDepartureCode
     * @var string|null
     */
    protected ?string $returnDepartureCode = null;
    /**
     * The returnDepartureDescription
     * @var string|null
     */
    protected ?string $returnDepartureDescription = null;
    /**
     * The returnDestinationCode
     * @var string|null
     */
    protected ?string $returnDestinationCode = null;
    /**
     * The returnDestinationDescription
     * @var string|null
     */
    protected ?string $returnDestinationDescription = null;
    /**
     * The returnCarrier
     * @var string|null
     */
    protected ?string $returnCarrier = null;
    /**
     * The returnCarrierName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnCarrierName = null;
    /**
     * The returnFlightNo
     * @var string|null
     */
    protected ?string $returnFlightNo = null;
    /**
     * The returnDepartureTime
     * @var string|null
     */
    protected ?string $returnDepartureTime = null;
    /**
     * The returnArrivalTime
     * @var string|null
     */
    protected ?string $returnArrivalTime = null;
    /**
     * The returnDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnDays = null;
    /**
     * The preventPrinting
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $preventPrinting = null;
    /**
     * The extId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The extSystem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The locationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locationDescription = null;
    /**
     * The depositAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $depositAmount = null;
    /**
     * The depositPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depositPaymentType = null;
    /**
     * The finalPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $finalPaymentType = null;
    /**
     * The isOneWay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isOneWay = null;
    /**
     * The feeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $feeCode = null;
    /**
     * The productType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The bookingReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingReference = null;
    /**
     * The articleType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $articleType = null;
    /**
     * The MidocoAccomodationDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccomodationDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing[]
     */
    protected array $MidocoAccomodationDetailsInfo4Printing = [];
    /**
     * The MidocoCarDetailInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\CarDetailDTO[]
     */
    protected array $MidocoCarDetailInfo4Printing = [];
    /**
     * The MidocoFlightDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing[]
     */
    protected array $MidocoFlightDetailsInfo4Printing = [];
    /**
     * The MidocoInsuranceDetailInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO[]
     */
    protected array $MidocoInsuranceDetailInfo4Printing = [];
    /**
     * The MidocoTravelDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[]
     */
    protected array $MidocoTravelDetailsInfo4Printing = [];
    /**
     * The MidocoCalcItemDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCalcItemDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing[]
     */
    protected array $MidocoCalcItemDetailsInfo4Printing = [];
    /**
     * The MidocoPassengerInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPassengerInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing[]
     */
    protected array $MidocoPassengerInfo4Printing = [];
    /**
     * The MidocoCruiseDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCruiseDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing[]
     */
    protected array $MidocoCruiseDetailsInfo4Printing = [];
    /**
     * The MidocoAttributeValue4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAttributeValue4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing[]
     */
    protected array $MidocoAttributeValue4Printing = [];
    /**
     * The MidocoRemarks
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    protected array $MidocoRemarks = [];
    /**
     * The MidocoRemarksAbove
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    protected array $MidocoRemarksAbove = [];
    /**
     * The MidocoRemarksAfterService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    protected array $MidocoRemarksAfterService = [];
    /**
     * The MidocoRemarksEnd
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    protected array $MidocoRemarksEnd = [];
    /**
     * The MidocoHint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoHint
     * @var \Pggns\MidocoApi\Order\StructType\MidocoHintType[]
     */
    protected array $MidocoHint = [];
    /**
     * The MidocoBusDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBusDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing[]
     */
    protected array $MidocoBusDetailsInfo4Printing = [];
    /**
     * The MidocoRailDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRailDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing[]
     */
    protected array $MidocoRailDetailsInfo4Printing = [];
    /**
     * The MidocoPackageDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPackageDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing[]
     */
    protected array $MidocoPackageDetailsInfo4Printing = [];
    /**
     * The MidocoAdditionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdditionalService
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService[]
     */
    protected array $MidocoAdditionalService = [];
    /**
     * The MidocoEventDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEventDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing[]
     */
    protected array $MidocoEventDetailsInfo4Printing = [];
    /**
     * The MidocoDocumentitem4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDocumentitem4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing[]
     */
    protected array $MidocoDocumentitem4Printing = [];
    /**
     * The MidocoTransferDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTransferDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing[]
     */
    protected array $MidocoTransferDetailsInfo4Printing = [];
    /**
     * The MidocoSellDetailsPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellDetailsPrice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice[]
     */
    protected array $MidocoSellDetailsPrice = [];
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ordersd:MidocoSupplier
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * The MidocoSupplierAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ordersd:MidocoSupplierAddress
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $MidocoSupplierAddress = null;
    /**
     * The MidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ordersd:MidocoSupplierTemplate
     * @var \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO[]
     */
    protected array $MidocoSupplierTemplate = [];
    /**
     * The touchedCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $touchedCountry = [];
    /**
     * The travelTypeDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelTypeDescription = null;
    /**
     * The immediatePayment
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $immediatePayment = null;
    /**
     * The forCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $forCustomer = null;
    /**
     * The fromCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fromCustomer = null;
    /**
     * The voucherQuantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $voucherQuantity = null;
    /**
     * The voucherSinglePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $voucherSinglePrice = null;
    /**
     * The revenuePercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $revenuePercent = null;
    /**
     * The confirmationGroup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The sellingMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $sellingMode = null;
    /**
     * The transfer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transfer = null;
    /**
     * The noOfNights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $noOfNights = null;
    /**
     * The MidocoTravelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ordersd:MidocoTravelNumber
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelNumber $MidocoTravelNumber = null;
    /**
     * Constructor method for MidocoSellItemDetails
     * @uses MidocoSellItemDetails::setItemId()
     * @uses MidocoSellItemDetails::setItemType()
     * @uses MidocoSellItemDetails::setOriginalBookingId()
     * @uses MidocoSellItemDetails::setSupplierId()
     * @uses MidocoSellItemDetails::setSupplierName()
     * @uses MidocoSellItemDetails::setSupplierPosition()
     * @uses MidocoSellItemDetails::setTravelType()
     * @uses MidocoSellItemDetails::setStartTravel()
     * @uses MidocoSellItemDetails::setEndTravel()
     * @uses MidocoSellItemDetails::setAccountId()
     * @uses MidocoSellItemDetails::setAreaDescription()
     * @uses MidocoSellItemDetails::setDepartureCode()
     * @uses MidocoSellItemDetails::setDepartureDescription()
     * @uses MidocoSellItemDetails::setDestinationCode()
     * @uses MidocoSellItemDetails::setDestinationDescription()
     * @uses MidocoSellItemDetails::setAccomodationCode()
     * @uses MidocoSellItemDetails::setAccomodationDescription()
     * @uses MidocoSellItemDetails::setCruiseCode()
     * @uses MidocoSellItemDetails::setCruiseDescription()
     * @uses MidocoSellItemDetails::setItemDescription()
     * @uses MidocoSellItemDetails::setCateringDescription()
     * @uses MidocoSellItemDetails::setRoomDescription()
     * @uses MidocoSellItemDetails::setItemReferenceNo()
     * @uses MidocoSellItemDetails::setInsuranceDescription()
     * @uses MidocoSellItemDetails::setStatus()
     * @uses MidocoSellItemDetails::setIsStorno()
     * @uses MidocoSellItemDetails::setStornoDate()
     * @uses MidocoSellItemDetails::setBookingDate()
     * @uses MidocoSellItemDetails::setCreationUser()
     * @uses MidocoSellItemDetails::setCreationDate()
     * @uses MidocoSellItemDetails::setCarrier()
     * @uses MidocoSellItemDetails::setCarrierName()
     * @uses MidocoSellItemDetails::setFlightNo()
     * @uses MidocoSellItemDetails::setDepartureTime()
     * @uses MidocoSellItemDetails::setArrivalTime()
     * @uses MidocoSellItemDetails::setDays()
     * @uses MidocoSellItemDetails::setReturnDepartureCode()
     * @uses MidocoSellItemDetails::setReturnDepartureDescription()
     * @uses MidocoSellItemDetails::setReturnDestinationCode()
     * @uses MidocoSellItemDetails::setReturnDestinationDescription()
     * @uses MidocoSellItemDetails::setReturnCarrier()
     * @uses MidocoSellItemDetails::setReturnCarrierName()
     * @uses MidocoSellItemDetails::setReturnFlightNo()
     * @uses MidocoSellItemDetails::setReturnDepartureTime()
     * @uses MidocoSellItemDetails::setReturnArrivalTime()
     * @uses MidocoSellItemDetails::setReturnDays()
     * @uses MidocoSellItemDetails::setPreventPrinting()
     * @uses MidocoSellItemDetails::setExtId()
     * @uses MidocoSellItemDetails::setExtSystem()
     * @uses MidocoSellItemDetails::setLocationDescription()
     * @uses MidocoSellItemDetails::setDepositAmount()
     * @uses MidocoSellItemDetails::setDepositPaymentType()
     * @uses MidocoSellItemDetails::setFinalPaymentType()
     * @uses MidocoSellItemDetails::setIsOneWay()
     * @uses MidocoSellItemDetails::setFeeCode()
     * @uses MidocoSellItemDetails::setProductType()
     * @uses MidocoSellItemDetails::setBookingReference()
     * @uses MidocoSellItemDetails::setArticleType()
     * @uses MidocoSellItemDetails::setMidocoAccomodationDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoCarDetailInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoFlightDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoInsuranceDetailInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoTravelDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoCalcItemDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoPassengerInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoCruiseDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoAttributeValue4Printing()
     * @uses MidocoSellItemDetails::setMidocoRemarks()
     * @uses MidocoSellItemDetails::setMidocoRemarksAbove()
     * @uses MidocoSellItemDetails::setMidocoRemarksAfterService()
     * @uses MidocoSellItemDetails::setMidocoRemarksEnd()
     * @uses MidocoSellItemDetails::setMidocoHint()
     * @uses MidocoSellItemDetails::setMidocoBusDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoRailDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoPackageDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoAdditionalService()
     * @uses MidocoSellItemDetails::setMidocoEventDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoDocumentitem4Printing()
     * @uses MidocoSellItemDetails::setMidocoTransferDetailsInfo4Printing()
     * @uses MidocoSellItemDetails::setMidocoSellDetailsPrice()
     * @uses MidocoSellItemDetails::setMidocoSupplier()
     * @uses MidocoSellItemDetails::setMidocoSupplierAddress()
     * @uses MidocoSellItemDetails::setMidocoSupplierTemplate()
     * @uses MidocoSellItemDetails::setTouchedCountry()
     * @uses MidocoSellItemDetails::setTravelTypeDescription()
     * @uses MidocoSellItemDetails::setImmediatePayment()
     * @uses MidocoSellItemDetails::setForCustomer()
     * @uses MidocoSellItemDetails::setFromCustomer()
     * @uses MidocoSellItemDetails::setVoucherQuantity()
     * @uses MidocoSellItemDetails::setVoucherSinglePrice()
     * @uses MidocoSellItemDetails::setRevenuePercent()
     * @uses MidocoSellItemDetails::setConfirmationGroup()
     * @uses MidocoSellItemDetails::setSellingMode()
     * @uses MidocoSellItemDetails::setTransfer()
     * @uses MidocoSellItemDetails::setNoOfNights()
     * @uses MidocoSellItemDetails::setMidocoTravelNumber()
     * @param int $itemId
     * @param string $itemType
     * @param string $originalBookingId
     * @param string $supplierId
     * @param string $supplierName
     * @param int $supplierPosition
     * @param string $travelType
     * @param string $startTravel
     * @param string $endTravel
     * @param string $accountId
     * @param string $areaDescription
     * @param string $departureCode
     * @param string $departureDescription
     * @param string $destinationCode
     * @param string $destinationDescription
     * @param string $accomodationCode
     * @param string $accomodationDescription
     * @param string $cruiseCode
     * @param string $cruiseDescription
     * @param string $itemDescription
     * @param string $cateringDescription
     * @param string $roomDescription
     * @param string $itemReferenceNo
     * @param string $insuranceDescription
     * @param string $status
     * @param bool $isStorno
     * @param string $stornoDate
     * @param string $bookingDate
     * @param string $creationUser
     * @param string $creationDate
     * @param string $carrier
     * @param string $carrierName
     * @param string $flightNo
     * @param string $departureTime
     * @param string $arrivalTime
     * @param string $days
     * @param string $returnDepartureCode
     * @param string $returnDepartureDescription
     * @param string $returnDestinationCode
     * @param string $returnDestinationDescription
     * @param string $returnCarrier
     * @param string $returnCarrierName
     * @param string $returnFlightNo
     * @param string $returnDepartureTime
     * @param string $returnArrivalTime
     * @param string $returnDays
     * @param bool $preventPrinting
     * @param string $extId
     * @param string $extSystem
     * @param string $locationDescription
     * @param float $depositAmount
     * @param string $depositPaymentType
     * @param string $finalPaymentType
     * @param bool $isOneWay
     * @param string $feeCode
     * @param string $productType
     * @param string $bookingReference
     * @param string $articleType
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing[] $midocoAccomodationDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\CarDetailDTO[] $midocoCarDetailInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing[] $midocoFlightDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO[] $midocoInsuranceDetailInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[] $midocoTravelDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing[] $midocoCalcItemDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing[] $midocoPassengerInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing[] $midocoCruiseDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing[] $midocoAttributeValue4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarks
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarksAbove
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarksAfterService
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarksEnd
     * @param \Pggns\MidocoApi\Order\StructType\MidocoHintType[] $midocoHint
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing[] $midocoBusDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing[] $midocoRailDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing[] $midocoPackageDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService[] $midocoAdditionalService
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing[] $midocoEventDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing[] $midocoDocumentitem4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing[] $midocoTransferDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice[] $midocoSellDetailsPrice
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @param \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO[] $midocoSupplierTemplate
     * @param string[] $touchedCountry
     * @param string $travelTypeDescription
     * @param bool $immediatePayment
     * @param string $forCustomer
     * @param string $fromCustomer
     * @param int $voucherQuantity
     * @param float $voucherSinglePrice
     * @param float $revenuePercent
     * @param string $confirmationGroup
     * @param int $sellingMode
     * @param string $transfer
     * @param string $noOfNights
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber $midocoTravelNumber
     */
    public function __construct(?int $itemId = null, ?string $itemType = null, ?string $originalBookingId = null, ?string $supplierId = null, ?string $supplierName = null, ?int $supplierPosition = null, ?string $travelType = null, ?string $startTravel = null, ?string $endTravel = null, ?string $accountId = null, ?string $areaDescription = null, ?string $departureCode = null, ?string $departureDescription = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?string $accomodationCode = null, ?string $accomodationDescription = null, ?string $cruiseCode = null, ?string $cruiseDescription = null, ?string $itemDescription = null, ?string $cateringDescription = null, ?string $roomDescription = null, ?string $itemReferenceNo = null, ?string $insuranceDescription = null, ?string $status = null, ?bool $isStorno = null, ?string $stornoDate = null, ?string $bookingDate = null, ?string $creationUser = null, ?string $creationDate = null, ?string $carrier = null, ?string $carrierName = null, ?string $flightNo = null, ?string $departureTime = null, ?string $arrivalTime = null, ?string $days = null, ?string $returnDepartureCode = null, ?string $returnDepartureDescription = null, ?string $returnDestinationCode = null, ?string $returnDestinationDescription = null, ?string $returnCarrier = null, ?string $returnCarrierName = null, ?string $returnFlightNo = null, ?string $returnDepartureTime = null, ?string $returnArrivalTime = null, ?string $returnDays = null, ?bool $preventPrinting = false, ?string $extId = null, ?string $extSystem = null, ?string $locationDescription = null, ?float $depositAmount = null, ?string $depositPaymentType = null, ?string $finalPaymentType = null, ?bool $isOneWay = null, ?string $feeCode = null, ?string $productType = null, ?string $bookingReference = null, ?string $articleType = null, array $midocoAccomodationDetailsInfo4Printing = [], array $midocoCarDetailInfo4Printing = [], array $midocoFlightDetailsInfo4Printing = [], array $midocoInsuranceDetailInfo4Printing = [], array $midocoTravelDetailsInfo4Printing = [], array $midocoCalcItemDetailsInfo4Printing = [], array $midocoPassengerInfo4Printing = [], array $midocoCruiseDetailsInfo4Printing = [], array $midocoAttributeValue4Printing = [], array $midocoRemarks = [], array $midocoRemarksAbove = [], array $midocoRemarksAfterService = [], array $midocoRemarksEnd = [], array $midocoHint = [], array $midocoBusDetailsInfo4Printing = [], array $midocoRailDetailsInfo4Printing = [], array $midocoPackageDetailsInfo4Printing = [], array $midocoAdditionalService = [], array $midocoEventDetailsInfo4Printing = [], array $midocoDocumentitem4Printing = [], array $midocoTransferDetailsInfo4Printing = [], array $midocoSellDetailsPrice = [], ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress = null, array $midocoSupplierTemplate = [], array $touchedCountry = [], ?string $travelTypeDescription = null, ?bool $immediatePayment = false, ?string $forCustomer = null, ?string $fromCustomer = null, ?int $voucherQuantity = null, ?float $voucherSinglePrice = null, ?float $revenuePercent = null, ?string $confirmationGroup = null, ?int $sellingMode = null, ?string $transfer = null, ?string $noOfNights = null, ?\Pggns\MidocoApi\Order\StructType\MidocoTravelNumber $midocoTravelNumber = null)
    {
        $this
            ->setItemId($itemId)
            ->setItemType($itemType)
            ->setOriginalBookingId($originalBookingId)
            ->setSupplierId($supplierId)
            ->setSupplierName($supplierName)
            ->setSupplierPosition($supplierPosition)
            ->setTravelType($travelType)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setAccountId($accountId)
            ->setAreaDescription($areaDescription)
            ->setDepartureCode($departureCode)
            ->setDepartureDescription($departureDescription)
            ->setDestinationCode($destinationCode)
            ->setDestinationDescription($destinationDescription)
            ->setAccomodationCode($accomodationCode)
            ->setAccomodationDescription($accomodationDescription)
            ->setCruiseCode($cruiseCode)
            ->setCruiseDescription($cruiseDescription)
            ->setItemDescription($itemDescription)
            ->setCateringDescription($cateringDescription)
            ->setRoomDescription($roomDescription)
            ->setItemReferenceNo($itemReferenceNo)
            ->setInsuranceDescription($insuranceDescription)
            ->setStatus($status)
            ->setIsStorno($isStorno)
            ->setStornoDate($stornoDate)
            ->setBookingDate($bookingDate)
            ->setCreationUser($creationUser)
            ->setCreationDate($creationDate)
            ->setCarrier($carrier)
            ->setCarrierName($carrierName)
            ->setFlightNo($flightNo)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setDays($days)
            ->setReturnDepartureCode($returnDepartureCode)
            ->setReturnDepartureDescription($returnDepartureDescription)
            ->setReturnDestinationCode($returnDestinationCode)
            ->setReturnDestinationDescription($returnDestinationDescription)
            ->setReturnCarrier($returnCarrier)
            ->setReturnCarrierName($returnCarrierName)
            ->setReturnFlightNo($returnFlightNo)
            ->setReturnDepartureTime($returnDepartureTime)
            ->setReturnArrivalTime($returnArrivalTime)
            ->setReturnDays($returnDays)
            ->setPreventPrinting($preventPrinting)
            ->setExtId($extId)
            ->setExtSystem($extSystem)
            ->setLocationDescription($locationDescription)
            ->setDepositAmount($depositAmount)
            ->setDepositPaymentType($depositPaymentType)
            ->setFinalPaymentType($finalPaymentType)
            ->setIsOneWay($isOneWay)
            ->setFeeCode($feeCode)
            ->setProductType($productType)
            ->setBookingReference($bookingReference)
            ->setArticleType($articleType)
            ->setMidocoAccomodationDetailsInfo4Printing($midocoAccomodationDetailsInfo4Printing)
            ->setMidocoCarDetailInfo4Printing($midocoCarDetailInfo4Printing)
            ->setMidocoFlightDetailsInfo4Printing($midocoFlightDetailsInfo4Printing)
            ->setMidocoInsuranceDetailInfo4Printing($midocoInsuranceDetailInfo4Printing)
            ->setMidocoTravelDetailsInfo4Printing($midocoTravelDetailsInfo4Printing)
            ->setMidocoCalcItemDetailsInfo4Printing($midocoCalcItemDetailsInfo4Printing)
            ->setMidocoPassengerInfo4Printing($midocoPassengerInfo4Printing)
            ->setMidocoCruiseDetailsInfo4Printing($midocoCruiseDetailsInfo4Printing)
            ->setMidocoAttributeValue4Printing($midocoAttributeValue4Printing)
            ->setMidocoRemarks($midocoRemarks)
            ->setMidocoRemarksAbove($midocoRemarksAbove)
            ->setMidocoRemarksAfterService($midocoRemarksAfterService)
            ->setMidocoRemarksEnd($midocoRemarksEnd)
            ->setMidocoHint($midocoHint)
            ->setMidocoBusDetailsInfo4Printing($midocoBusDetailsInfo4Printing)
            ->setMidocoRailDetailsInfo4Printing($midocoRailDetailsInfo4Printing)
            ->setMidocoPackageDetailsInfo4Printing($midocoPackageDetailsInfo4Printing)
            ->setMidocoAdditionalService($midocoAdditionalService)
            ->setMidocoEventDetailsInfo4Printing($midocoEventDetailsInfo4Printing)
            ->setMidocoDocumentitem4Printing($midocoDocumentitem4Printing)
            ->setMidocoTransferDetailsInfo4Printing($midocoTransferDetailsInfo4Printing)
            ->setMidocoSellDetailsPrice($midocoSellDetailsPrice)
            ->setMidocoSupplier($midocoSupplier)
            ->setMidocoSupplierAddress($midocoSupplierAddress)
            ->setMidocoSupplierTemplate($midocoSupplierTemplate)
            ->setTouchedCountry($touchedCountry)
            ->setTravelTypeDescription($travelTypeDescription)
            ->setImmediatePayment($immediatePayment)
            ->setForCustomer($forCustomer)
            ->setFromCustomer($fromCustomer)
            ->setVoucherQuantity($voucherQuantity)
            ->setVoucherSinglePrice($voucherSinglePrice)
            ->setRevenuePercent($revenuePercent)
            ->setConfirmationGroup($confirmationGroup)
            ->setSellingMode($sellingMode)
            ->setTransfer($transfer)
            ->setNoOfNights($noOfNights)
            ->setMidocoTravelNumber($midocoTravelNumber);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
    /**
     * Get supplierPosition value
     * @return int|null
     */
    public function getSupplierPosition(): ?int
    {
        return $this->supplierPosition;
    }
    /**
     * Set supplierPosition value
     * @param int $supplierPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setSupplierPosition(?int $supplierPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($supplierPosition) && !(is_int($supplierPosition) || ctype_digit($supplierPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supplierPosition, true), gettype($supplierPosition)), __LINE__);
        }
        $this->supplierPosition = $supplierPosition;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get areaDescription value
     * @return string|null
     */
    public function getAreaDescription(): ?string
    {
        return $this->areaDescription;
    }
    /**
     * Set areaDescription value
     * @param string $areaDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setAreaDescription(?string $areaDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($areaDescription) && !is_string($areaDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaDescription, true), gettype($areaDescription)), __LINE__);
        }
        $this->areaDescription = $areaDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * Get departureDescription value
     * @return string|null
     */
    public function getDepartureDescription(): ?string
    {
        return $this->departureDescription;
    }
    /**
     * Set departureDescription value
     * @param string $departureDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setDepartureDescription(?string $departureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDescription) && !is_string($departureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDescription, true), gettype($departureDescription)), __LINE__);
        }
        $this->departureDescription = $departureDescription;
        
        return $this;
    }
    /**
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * Get accomodationCode value
     * @return string|null
     */
    public function getAccomodationCode(): ?string
    {
        return $this->accomodationCode;
    }
    /**
     * Set accomodationCode value
     * @param string $accomodationCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setAccomodationCode(?string $accomodationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationCode) && !is_string($accomodationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationCode, true), gettype($accomodationCode)), __LINE__);
        }
        $this->accomodationCode = $accomodationCode;
        
        return $this;
    }
    /**
     * Get accomodationDescription value
     * @return string|null
     */
    public function getAccomodationDescription(): ?string
    {
        return $this->accomodationDescription;
    }
    /**
     * Set accomodationDescription value
     * @param string $accomodationDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setAccomodationDescription(?string $accomodationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationDescription) && !is_string($accomodationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationDescription, true), gettype($accomodationDescription)), __LINE__);
        }
        $this->accomodationDescription = $accomodationDescription;
        
        return $this;
    }
    /**
     * Get cruiseCode value
     * @return string|null
     */
    public function getCruiseCode(): ?string
    {
        return $this->cruiseCode;
    }
    /**
     * Set cruiseCode value
     * @param string $cruiseCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setCruiseCode(?string $cruiseCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cruiseCode) && !is_string($cruiseCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cruiseCode, true), gettype($cruiseCode)), __LINE__);
        }
        $this->cruiseCode = $cruiseCode;
        
        return $this;
    }
    /**
     * Get cruiseDescription value
     * @return string|null
     */
    public function getCruiseDescription(): ?string
    {
        return $this->cruiseDescription;
    }
    /**
     * Set cruiseDescription value
     * @param string $cruiseDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setCruiseDescription(?string $cruiseDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cruiseDescription) && !is_string($cruiseDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cruiseDescription, true), gettype($cruiseDescription)), __LINE__);
        }
        $this->cruiseDescription = $cruiseDescription;
        
        return $this;
    }
    /**
     * Get itemDescription value
     * @return string|null
     */
    public function getItemDescription(): ?string
    {
        return $this->itemDescription;
    }
    /**
     * Set itemDescription value
     * @param string $itemDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setItemDescription(?string $itemDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($itemDescription) && !is_string($itemDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemDescription, true), gettype($itemDescription)), __LINE__);
        }
        $this->itemDescription = $itemDescription;
        
        return $this;
    }
    /**
     * Get cateringDescription value
     * @return string|null
     */
    public function getCateringDescription(): ?string
    {
        return $this->cateringDescription;
    }
    /**
     * Set cateringDescription value
     * @param string $cateringDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setCateringDescription(?string $cateringDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringDescription) && !is_string($cateringDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringDescription, true), gettype($cateringDescription)), __LINE__);
        }
        $this->cateringDescription = $cateringDescription;
        
        return $this;
    }
    /**
     * Get roomDescription value
     * @return string|null
     */
    public function getRoomDescription(): ?string
    {
        return $this->roomDescription;
    }
    /**
     * Set roomDescription value
     * @param string $roomDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setRoomDescription(?string $roomDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($roomDescription) && !is_string($roomDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roomDescription, true), gettype($roomDescription)), __LINE__);
        }
        $this->roomDescription = $roomDescription;
        
        return $this;
    }
    /**
     * Get itemReferenceNo value
     * @return string|null
     */
    public function getItemReferenceNo(): ?string
    {
        return $this->itemReferenceNo;
    }
    /**
     * Set itemReferenceNo value
     * @param string $itemReferenceNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setItemReferenceNo(?string $itemReferenceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($itemReferenceNo) && !is_string($itemReferenceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemReferenceNo, true), gettype($itemReferenceNo)), __LINE__);
        }
        $this->itemReferenceNo = $itemReferenceNo;
        
        return $this;
    }
    /**
     * Get insuranceDescription value
     * @return string|null
     */
    public function getInsuranceDescription(): ?string
    {
        return $this->insuranceDescription;
    }
    /**
     * Set insuranceDescription value
     * @param string $insuranceDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setInsuranceDescription(?string $insuranceDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceDescription) && !is_string($insuranceDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceDescription, true), gettype($insuranceDescription)), __LINE__);
        }
        $this->insuranceDescription = $insuranceDescription;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
        return $this;
    }
    /**
     * Get stornoDate value
     * @return string|null
     */
    public function getStornoDate(): ?string
    {
        return $this->stornoDate;
    }
    /**
     * Set stornoDate value
     * @param string $stornoDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setStornoDate(?string $stornoDate = null): self
    {
        // validation for constraint: string
        if (!is_null($stornoDate) && !is_string($stornoDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stornoDate, true), gettype($stornoDate)), __LINE__);
        }
        $this->stornoDate = $stornoDate;
        
        return $this;
    }
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * Get carrierName value
     * @return string|null
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }
    /**
     * Set carrierName value
     * @param string $carrierName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setCarrierName(?string $carrierName = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierName) && !is_string($carrierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierName, true), gettype($carrierName)), __LINE__);
        }
        $this->carrierName = $carrierName;
        
        return $this;
    }
    /**
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * Get days value
     * @return string|null
     */
    public function getDays(): ?string
    {
        return $this->days;
    }
    /**
     * Set days value
     * @param string $days
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setDays(?string $days = null): self
    {
        // validation for constraint: string
        if (!is_null($days) && !is_string($days)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($days, true), gettype($days)), __LINE__);
        }
        $this->days = $days;
        
        return $this;
    }
    /**
     * Get returnDepartureCode value
     * @return string|null
     */
    public function getReturnDepartureCode(): ?string
    {
        return $this->returnDepartureCode;
    }
    /**
     * Set returnDepartureCode value
     * @param string $returnDepartureCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnDepartureCode(?string $returnDepartureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureCode) && !is_string($returnDepartureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureCode, true), gettype($returnDepartureCode)), __LINE__);
        }
        $this->returnDepartureCode = $returnDepartureCode;
        
        return $this;
    }
    /**
     * Get returnDepartureDescription value
     * @return string|null
     */
    public function getReturnDepartureDescription(): ?string
    {
        return $this->returnDepartureDescription;
    }
    /**
     * Set returnDepartureDescription value
     * @param string $returnDepartureDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnDepartureDescription(?string $returnDepartureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureDescription) && !is_string($returnDepartureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureDescription, true), gettype($returnDepartureDescription)), __LINE__);
        }
        $this->returnDepartureDescription = $returnDepartureDescription;
        
        return $this;
    }
    /**
     * Get returnDestinationCode value
     * @return string|null
     */
    public function getReturnDestinationCode(): ?string
    {
        return $this->returnDestinationCode;
    }
    /**
     * Set returnDestinationCode value
     * @param string $returnDestinationCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnDestinationCode(?string $returnDestinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationCode) && !is_string($returnDestinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationCode, true), gettype($returnDestinationCode)), __LINE__);
        }
        $this->returnDestinationCode = $returnDestinationCode;
        
        return $this;
    }
    /**
     * Get returnDestinationDescription value
     * @return string|null
     */
    public function getReturnDestinationDescription(): ?string
    {
        return $this->returnDestinationDescription;
    }
    /**
     * Set returnDestinationDescription value
     * @param string $returnDestinationDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnDestinationDescription(?string $returnDestinationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationDescription) && !is_string($returnDestinationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationDescription, true), gettype($returnDestinationDescription)), __LINE__);
        }
        $this->returnDestinationDescription = $returnDestinationDescription;
        
        return $this;
    }
    /**
     * Get returnCarrier value
     * @return string|null
     */
    public function getReturnCarrier(): ?string
    {
        return $this->returnCarrier;
    }
    /**
     * Set returnCarrier value
     * @param string $returnCarrier
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnCarrier(?string $returnCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCarrier) && !is_string($returnCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCarrier, true), gettype($returnCarrier)), __LINE__);
        }
        $this->returnCarrier = $returnCarrier;
        
        return $this;
    }
    /**
     * Get returnCarrierName value
     * @return string|null
     */
    public function getReturnCarrierName(): ?string
    {
        return $this->returnCarrierName;
    }
    /**
     * Set returnCarrierName value
     * @param string $returnCarrierName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnCarrierName(?string $returnCarrierName = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCarrierName) && !is_string($returnCarrierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCarrierName, true), gettype($returnCarrierName)), __LINE__);
        }
        $this->returnCarrierName = $returnCarrierName;
        
        return $this;
    }
    /**
     * Get returnFlightNo value
     * @return string|null
     */
    public function getReturnFlightNo(): ?string
    {
        return $this->returnFlightNo;
    }
    /**
     * Set returnFlightNo value
     * @param string $returnFlightNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnFlightNo(?string $returnFlightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($returnFlightNo) && !is_string($returnFlightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFlightNo, true), gettype($returnFlightNo)), __LINE__);
        }
        $this->returnFlightNo = $returnFlightNo;
        
        return $this;
    }
    /**
     * Get returnDepartureTime value
     * @return string|null
     */
    public function getReturnDepartureTime(): ?string
    {
        return $this->returnDepartureTime;
    }
    /**
     * Set returnDepartureTime value
     * @param string $returnDepartureTime
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnDepartureTime(?string $returnDepartureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureTime) && !is_string($returnDepartureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureTime, true), gettype($returnDepartureTime)), __LINE__);
        }
        $this->returnDepartureTime = $returnDepartureTime;
        
        return $this;
    }
    /**
     * Get returnArrivalTime value
     * @return string|null
     */
    public function getReturnArrivalTime(): ?string
    {
        return $this->returnArrivalTime;
    }
    /**
     * Set returnArrivalTime value
     * @param string $returnArrivalTime
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnArrivalTime(?string $returnArrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnArrivalTime) && !is_string($returnArrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnArrivalTime, true), gettype($returnArrivalTime)), __LINE__);
        }
        $this->returnArrivalTime = $returnArrivalTime;
        
        return $this;
    }
    /**
     * Get returnDays value
     * @return string|null
     */
    public function getReturnDays(): ?string
    {
        return $this->returnDays;
    }
    /**
     * Set returnDays value
     * @param string $returnDays
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setReturnDays(?string $returnDays = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDays) && !is_string($returnDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDays, true), gettype($returnDays)), __LINE__);
        }
        $this->returnDays = $returnDays;
        
        return $this;
    }
    /**
     * Get preventPrinting value
     * @return bool|null
     */
    public function getPreventPrinting(): ?bool
    {
        return $this->preventPrinting;
    }
    /**
     * Set preventPrinting value
     * @param bool $preventPrinting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setPreventPrinting(?bool $preventPrinting = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preventPrinting) && !is_bool($preventPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventPrinting, true), gettype($preventPrinting)), __LINE__);
        }
        $this->preventPrinting = $preventPrinting;
        
        return $this;
    }
    /**
     * Get extId value
     * @return string|null
     */
    public function getExtId(): ?string
    {
        return $this->extId;
    }
    /**
     * Set extId value
     * @param string $extId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setExtId(?string $extId = null): self
    {
        // validation for constraint: string
        if (!is_null($extId) && !is_string($extId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extId, true), gettype($extId)), __LINE__);
        }
        $this->extId = $extId;
        
        return $this;
    }
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
        return $this;
    }
    /**
     * Get locationDescription value
     * @return string|null
     */
    public function getLocationDescription(): ?string
    {
        return $this->locationDescription;
    }
    /**
     * Set locationDescription value
     * @param string $locationDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setLocationDescription(?string $locationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($locationDescription) && !is_string($locationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationDescription, true), gettype($locationDescription)), __LINE__);
        }
        $this->locationDescription = $locationDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * Get depositPaymentType value
     * @return string|null
     */
    public function getDepositPaymentType(): ?string
    {
        return $this->depositPaymentType;
    }
    /**
     * Set depositPaymentType value
     * @param string $depositPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setDepositPaymentType(?string $depositPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($depositPaymentType) && !is_string($depositPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositPaymentType, true), gettype($depositPaymentType)), __LINE__);
        }
        $this->depositPaymentType = $depositPaymentType;
        
        return $this;
    }
    /**
     * Get finalPaymentType value
     * @return string|null
     */
    public function getFinalPaymentType(): ?string
    {
        return $this->finalPaymentType;
    }
    /**
     * Set finalPaymentType value
     * @param string $finalPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setFinalPaymentType(?string $finalPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPaymentType) && !is_string($finalPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPaymentType, true), gettype($finalPaymentType)), __LINE__);
        }
        $this->finalPaymentType = $finalPaymentType;
        
        return $this;
    }
    /**
     * Get isOneWay value
     * @return bool|null
     */
    public function getIsOneWay(): ?bool
    {
        return $this->isOneWay;
    }
    /**
     * Set isOneWay value
     * @param bool $isOneWay
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setIsOneWay(?bool $isOneWay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOneWay) && !is_bool($isOneWay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOneWay, true), gettype($isOneWay)), __LINE__);
        }
        $this->isOneWay = $isOneWay;
        
        return $this;
    }
    /**
     * Get feeCode value
     * @return string|null
     */
    public function getFeeCode(): ?string
    {
        return $this->feeCode;
    }
    /**
     * Set feeCode value
     * @param string $feeCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setFeeCode(?string $feeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCode, true), gettype($feeCode)), __LINE__);
        }
        $this->feeCode = $feeCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
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
     * Get bookingReference value
     * @return string|null
     */
    public function getBookingReference(): ?string
    {
        return $this->bookingReference;
    }
    /**
     * Set bookingReference value
     * @param string $bookingReference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setBookingReference(?string $bookingReference = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingReference) && !is_string($bookingReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingReference, true), gettype($bookingReference)), __LINE__);
        }
        $this->bookingReference = $bookingReference;
        
        return $this;
    }
    /**
     * Get articleType value
     * @return string|null
     */
    public function getArticleType(): ?string
    {
        return $this->articleType;
    }
    /**
     * Set articleType value
     * @param string $articleType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setArticleType(?string $articleType = null): self
    {
        // validation for constraint: string
        if (!is_null($articleType) && !is_string($articleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($articleType, true), gettype($articleType)), __LINE__);
        }
        $this->articleType = $articleType;
        
        return $this;
    }
    /**
     * Get MidocoAccomodationDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing[]
     */
    public function getMidocoAccomodationDetailsInfo4Printing(): array
    {
        return $this->MidocoAccomodationDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAccomodationDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccomodationDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccomodationDetailsInfo4PrintingForArrayConstraintsFromSetMidocoAccomodationDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoAccomodationDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoAccomodationDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoAccomodationDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoAccomodationDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoAccomodationDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoAccomodationDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccomodationDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccomodationDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing[] $midocoAccomodationDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoAccomodationDetailsInfo4Printing(array $midocoAccomodationDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccomodationDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoAccomodationDetailsInfo4PrintingForArrayConstraintsFromSetMidocoAccomodationDetailsInfo4Printing($midocoAccomodationDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoAccomodationDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccomodationDetailsInfo4Printing = $midocoAccomodationDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoAccomodationDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoAccomodationDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoAccomodationDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccomodationDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCarDetailInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\CarDetailDTO[]
     */
    public function getMidocoCarDetailInfo4Printing(): array
    {
        return $this->MidocoCarDetailInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCarDetailInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCarDetailInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCarDetailInfo4PrintingForArrayConstraintsFromSetMidocoCarDetailInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoCarDetailInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoCarDetailInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\CarDetailDTO) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoCarDetailInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoCarDetailInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoCarDetailInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoCarDetailInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCarDetailInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\CarDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCarDetailInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CarDetailDTO[] $midocoCarDetailInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoCarDetailInfo4Printing(array $midocoCarDetailInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCarDetailInfo4PrintingArrayErrorMessage = self::validateMidocoCarDetailInfo4PrintingForArrayConstraintsFromSetMidocoCarDetailInfo4Printing($midocoCarDetailInfo4Printing))) {
            throw new InvalidArgumentException($midocoCarDetailInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoCarDetailInfo4Printing = $midocoCarDetailInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoCarDetailInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CarDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoCarDetailInfo4Printing(\Pggns\MidocoApi\Order\StructType\CarDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CarDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCarDetailInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\CarDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCarDetailInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoFlightDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing[]
     */
    public function getMidocoFlightDetailsInfo4Printing(): array
    {
        return $this->MidocoFlightDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFlightDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightDetailsInfo4PrintingForArrayConstraintsFromSetMidocoFlightDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoFlightDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoFlightDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoFlightDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoFlightDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoFlightDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoFlightDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing[] $midocoFlightDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoFlightDetailsInfo4Printing(array $midocoFlightDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoFlightDetailsInfo4PrintingForArrayConstraintsFromSetMidocoFlightDetailsInfo4Printing($midocoFlightDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoFlightDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightDetailsInfo4Printing = $midocoFlightDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoFlightDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInsuranceDetailInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO[]
     */
    public function getMidocoInsuranceDetailInfo4Printing(): array
    {
        return $this->MidocoInsuranceDetailInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInsuranceDetailInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInsuranceDetailInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInsuranceDetailInfo4PrintingForArrayConstraintsFromSetMidocoInsuranceDetailInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoInsuranceDetailInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoInsuranceDetailInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoInsuranceDetailInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoInsuranceDetailInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoInsuranceDetailInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoInsuranceDetailInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInsuranceDetailInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInsuranceDetailInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO[] $midocoInsuranceDetailInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoInsuranceDetailInfo4Printing(array $midocoInsuranceDetailInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInsuranceDetailInfo4PrintingArrayErrorMessage = self::validateMidocoInsuranceDetailInfo4PrintingForArrayConstraintsFromSetMidocoInsuranceDetailInfo4Printing($midocoInsuranceDetailInfo4Printing))) {
            throw new InvalidArgumentException($midocoInsuranceDetailInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoInsuranceDetailInfo4Printing = $midocoInsuranceDetailInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoInsuranceDetailInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoInsuranceDetailInfo4Printing(\Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoInsuranceDetailInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\InsuranceDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInsuranceDetailInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTravelDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[]
     */
    public function getMidocoTravelDetailsInfo4Printing(): array
    {
        return $this->MidocoTravelDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelDetailsInfo4PrintingForArrayConstraintsFromSetMidocoTravelDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoTravelDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoTravelDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\TravelDetailDTO) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoTravelDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoTravelDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoTravelDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoTravelDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelDetailDTO[] $midocoTravelDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoTravelDetailsInfo4Printing(array $midocoTravelDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoTravelDetailsInfo4PrintingForArrayConstraintsFromSetMidocoTravelDetailsInfo4Printing($midocoTravelDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoTravelDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelDetailsInfo4Printing = $midocoTravelDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoTravelDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\TravelDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TravelDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCalcItemDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing[]
     */
    public function getMidocoCalcItemDetailsInfo4Printing(): array
    {
        return $this->MidocoCalcItemDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCalcItemDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCalcItemDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCalcItemDetailsInfo4PrintingForArrayConstraintsFromSetMidocoCalcItemDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoCalcItemDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoCalcItemDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoCalcItemDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoCalcItemDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoCalcItemDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoCalcItemDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCalcItemDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCalcItemDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing[] $midocoCalcItemDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoCalcItemDetailsInfo4Printing(array $midocoCalcItemDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCalcItemDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoCalcItemDetailsInfo4PrintingForArrayConstraintsFromSetMidocoCalcItemDetailsInfo4Printing($midocoCalcItemDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoCalcItemDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoCalcItemDetailsInfo4Printing = $midocoCalcItemDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoCalcItemDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoCalcItemDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoCalcItemDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCalcItemDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoPassengerInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing[]
     */
    public function getMidocoPassengerInfo4Printing(): array
    {
        return $this->MidocoPassengerInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPassengerInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPassengerInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPassengerInfo4PrintingForArrayConstraintsFromSetMidocoPassengerInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoPassengerInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoPassengerInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoPassengerInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoPassengerInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoPassengerInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoPassengerInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPassengerInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPassengerInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing[] $midocoPassengerInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoPassengerInfo4Printing(array $midocoPassengerInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPassengerInfo4PrintingArrayErrorMessage = self::validateMidocoPassengerInfo4PrintingForArrayConstraintsFromSetMidocoPassengerInfo4Printing($midocoPassengerInfo4Printing))) {
            throw new InvalidArgumentException($midocoPassengerInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoPassengerInfo4Printing = $midocoPassengerInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoPassengerInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoPassengerInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoPassengerInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPassengerInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCruiseDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing[]
     */
    public function getMidocoCruiseDetailsInfo4Printing(): array
    {
        return $this->MidocoCruiseDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCruiseDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCruiseDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCruiseDetailsInfo4PrintingForArrayConstraintsFromSetMidocoCruiseDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoCruiseDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoCruiseDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoCruiseDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoCruiseDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoCruiseDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoCruiseDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCruiseDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCruiseDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing[] $midocoCruiseDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoCruiseDetailsInfo4Printing(array $midocoCruiseDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCruiseDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoCruiseDetailsInfo4PrintingForArrayConstraintsFromSetMidocoCruiseDetailsInfo4Printing($midocoCruiseDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoCruiseDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoCruiseDetailsInfo4Printing = $midocoCruiseDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoCruiseDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoCruiseDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoCruiseDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCruiseDetailsInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCruiseDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAttributeValue4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing[]
     */
    public function getMidocoAttributeValue4Printing(): array
    {
        return $this->MidocoAttributeValue4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAttributeValue4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAttributeValue4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAttributeValue4PrintingForArrayConstraintsFromSetMidocoAttributeValue4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoAttributeValue4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoAttributeValue4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoAttributeValue4PrintingItem) ? get_class($midocoSellItemDetailsMidocoAttributeValue4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoAttributeValue4PrintingItem), var_export($midocoSellItemDetailsMidocoAttributeValue4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAttributeValue4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAttributeValue4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing[] $midocoAttributeValue4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoAttributeValue4Printing(array $midocoAttributeValue4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAttributeValue4PrintingArrayErrorMessage = self::validateMidocoAttributeValue4PrintingForArrayConstraintsFromSetMidocoAttributeValue4Printing($midocoAttributeValue4Printing))) {
            throw new InvalidArgumentException($midocoAttributeValue4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoAttributeValue4Printing = $midocoAttributeValue4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoAttributeValue4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoAttributeValue4Printing(\Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoAttributeValue4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAttributeValue4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoRemarks value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    public function getMidocoRemarks(): array
    {
        return $this->MidocoRemarks;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRemarks method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarks method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarksForArrayConstraintsFromSetMidocoRemarks(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoRemarksItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoRemarksItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoRemarksItem) ? get_class($midocoSellItemDetailsMidocoRemarksItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoRemarksItem), var_export($midocoSellItemDetailsMidocoRemarksItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarks property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarks value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarks
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoRemarks(array $midocoRemarks = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarksArrayErrorMessage = self::validateMidocoRemarksForArrayConstraintsFromSetMidocoRemarks($midocoRemarks))) {
            throw new InvalidArgumentException($midocoRemarksArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarks = $midocoRemarks;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarks value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoRemarks(\Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarks property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarks[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoRemarksAbove value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    public function getMidocoRemarksAbove(): array
    {
        return $this->MidocoRemarksAbove;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRemarksAbove method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarksAbove method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarksAboveForArrayConstraintsFromSetMidocoRemarksAbove(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoRemarksAboveItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoRemarksAboveItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoRemarksAboveItem) ? get_class($midocoSellItemDetailsMidocoRemarksAboveItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoRemarksAboveItem), var_export($midocoSellItemDetailsMidocoRemarksAboveItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarksAbove property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarksAbove value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarksAbove
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoRemarksAbove(array $midocoRemarksAbove = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarksAboveArrayErrorMessage = self::validateMidocoRemarksAboveForArrayConstraintsFromSetMidocoRemarksAbove($midocoRemarksAbove))) {
            throw new InvalidArgumentException($midocoRemarksAboveArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarksAbove = $midocoRemarksAbove;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarksAbove value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoRemarksAbove(\Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarksAbove property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarksAbove[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoRemarksAfterService value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    public function getMidocoRemarksAfterService(): array
    {
        return $this->MidocoRemarksAfterService;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRemarksAfterService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarksAfterService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarksAfterServiceForArrayConstraintsFromSetMidocoRemarksAfterService(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoRemarksAfterServiceItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoRemarksAfterServiceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoRemarksAfterServiceItem) ? get_class($midocoSellItemDetailsMidocoRemarksAfterServiceItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoRemarksAfterServiceItem), var_export($midocoSellItemDetailsMidocoRemarksAfterServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarksAfterService property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarksAfterService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarksAfterService
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoRemarksAfterService(array $midocoRemarksAfterService = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarksAfterServiceArrayErrorMessage = self::validateMidocoRemarksAfterServiceForArrayConstraintsFromSetMidocoRemarksAfterService($midocoRemarksAfterService))) {
            throw new InvalidArgumentException($midocoRemarksAfterServiceArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarksAfterService = $midocoRemarksAfterService;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarksAfterService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoRemarksAfterService(\Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarksAfterService property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarksAfterService[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoRemarksEnd value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    public function getMidocoRemarksEnd(): array
    {
        return $this->MidocoRemarksEnd;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRemarksEnd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarksEnd method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarksEndForArrayConstraintsFromSetMidocoRemarksEnd(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoRemarksEndItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoRemarksEndItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoRemarksEndItem) ? get_class($midocoSellItemDetailsMidocoRemarksEndItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoRemarksEndItem), var_export($midocoSellItemDetailsMidocoRemarksEndItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarksEnd property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarksEnd value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarksEnd
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoRemarksEnd(array $midocoRemarksEnd = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarksEndArrayErrorMessage = self::validateMidocoRemarksEndForArrayConstraintsFromSetMidocoRemarksEnd($midocoRemarksEnd))) {
            throw new InvalidArgumentException($midocoRemarksEndArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarksEnd = $midocoRemarksEnd;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarksEnd value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoRemarksEnd(\Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarksEnd property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarksEnd[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoHint value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoHintType[]
     */
    public function getMidocoHint(): array
    {
        return $this->MidocoHint;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoHint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoHint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoHintForArrayConstraintsFromSetMidocoHint(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoHintItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoHintItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoHintType) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoHintItem) ? get_class($midocoSellItemDetailsMidocoHintItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoHintItem), var_export($midocoSellItemDetailsMidocoHintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoHint property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoHintType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoHint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoHintType[] $midocoHint
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoHint(array $midocoHint = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoHintArrayErrorMessage = self::validateMidocoHintForArrayConstraintsFromSetMidocoHint($midocoHint))) {
            throw new InvalidArgumentException($midocoHintArrayErrorMessage, __LINE__);
        }
        $this->MidocoHint = $midocoHint;
        
        return $this;
    }
    /**
     * Add item to MidocoHint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoHintType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoHint(\Pggns\MidocoApi\Order\StructType\MidocoHintType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoHintType) {
            throw new InvalidArgumentException(sprintf('The MidocoHint property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoHintType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoHint[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBusDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing[]
     */
    public function getMidocoBusDetailsInfo4Printing(): array
    {
        return $this->MidocoBusDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBusDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBusDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBusDetailsInfo4PrintingForArrayConstraintsFromSetMidocoBusDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoBusDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoBusDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoBusDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoBusDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoBusDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoBusDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBusDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBusDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing[] $midocoBusDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoBusDetailsInfo4Printing(array $midocoBusDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBusDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoBusDetailsInfo4PrintingForArrayConstraintsFromSetMidocoBusDetailsInfo4Printing($midocoBusDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoBusDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoBusDetailsInfo4Printing = $midocoBusDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoBusDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoBusDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoBusDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBusDetailsInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBusDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoRailDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing[]
     */
    public function getMidocoRailDetailsInfo4Printing(): array
    {
        return $this->MidocoRailDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRailDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRailDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRailDetailsInfo4PrintingForArrayConstraintsFromSetMidocoRailDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoRailDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoRailDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoRailDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoRailDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoRailDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoRailDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRailDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRailDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing[] $midocoRailDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoRailDetailsInfo4Printing(array $midocoRailDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRailDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoRailDetailsInfo4PrintingForArrayConstraintsFromSetMidocoRailDetailsInfo4Printing($midocoRailDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoRailDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoRailDetailsInfo4Printing = $midocoRailDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoRailDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoRailDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoRailDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRailDetailsInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRailDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoPackageDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing[]
     */
    public function getMidocoPackageDetailsInfo4Printing(): array
    {
        return $this->MidocoPackageDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPackageDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPackageDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPackageDetailsInfo4PrintingForArrayConstraintsFromSetMidocoPackageDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoPackageDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoPackageDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoPackageDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoPackageDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoPackageDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoPackageDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPackageDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPackageDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing[] $midocoPackageDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoPackageDetailsInfo4Printing(array $midocoPackageDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPackageDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoPackageDetailsInfo4PrintingForArrayConstraintsFromSetMidocoPackageDetailsInfo4Printing($midocoPackageDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoPackageDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoPackageDetailsInfo4Printing = $midocoPackageDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoPackageDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoPackageDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoPackageDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPackageDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAdditionalService value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService[]
     */
    public function getMidocoAdditionalService(): array
    {
        return $this->MidocoAdditionalService;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdditionalService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdditionalService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdditionalServiceForArrayConstraintsFromSetMidocoAdditionalService(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoAdditionalServiceItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoAdditionalServiceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoAdditionalServiceItem) ? get_class($midocoSellItemDetailsMidocoAdditionalServiceItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoAdditionalServiceItem), var_export($midocoSellItemDetailsMidocoAdditionalServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdditionalService property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService[] $midocoAdditionalService
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoAdditionalService(array $midocoAdditionalService = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdditionalServiceArrayErrorMessage = self::validateMidocoAdditionalServiceForArrayConstraintsFromSetMidocoAdditionalService($midocoAdditionalService))) {
            throw new InvalidArgumentException($midocoAdditionalServiceArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdditionalService = $midocoAdditionalService;
        
        return $this;
    }
    /**
     * Add item to MidocoAdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoAdditionalService(\Pggns\MidocoApi\Order\StructType\MidocoAdditionalService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService) {
            throw new InvalidArgumentException(sprintf('The MidocoAdditionalService property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdditionalService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdditionalService[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoEventDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing[]
     */
    public function getMidocoEventDetailsInfo4Printing(): array
    {
        return $this->MidocoEventDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEventDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEventDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEventDetailsInfo4PrintingForArrayConstraintsFromSetMidocoEventDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoEventDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoEventDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoEventDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoEventDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoEventDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoEventDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEventDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEventDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing[] $midocoEventDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoEventDetailsInfo4Printing(array $midocoEventDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEventDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoEventDetailsInfo4PrintingForArrayConstraintsFromSetMidocoEventDetailsInfo4Printing($midocoEventDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoEventDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoEventDetailsInfo4Printing = $midocoEventDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoEventDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoEventDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoEventDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEventDetailsInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEventDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDocumentitem4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing[]
     */
    public function getMidocoDocumentitem4Printing(): array
    {
        return $this->MidocoDocumentitem4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDocumentitem4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocumentitem4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocumentitem4PrintingForArrayConstraintsFromSetMidocoDocumentitem4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoDocumentitem4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoDocumentitem4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoDocumentitem4PrintingItem) ? get_class($midocoSellItemDetailsMidocoDocumentitem4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoDocumentitem4PrintingItem), var_export($midocoSellItemDetailsMidocoDocumentitem4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocumentitem4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocumentitem4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing[] $midocoDocumentitem4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoDocumentitem4Printing(array $midocoDocumentitem4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocumentitem4PrintingArrayErrorMessage = self::validateMidocoDocumentitem4PrintingForArrayConstraintsFromSetMidocoDocumentitem4Printing($midocoDocumentitem4Printing))) {
            throw new InvalidArgumentException($midocoDocumentitem4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocumentitem4Printing = $midocoDocumentitem4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoDocumentitem4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoDocumentitem4Printing(\Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoDocumentitem4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocumentitem4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTransferDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing[]
     */
    public function getMidocoTransferDetailsInfo4Printing(): array
    {
        return $this->MidocoTransferDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTransferDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTransferDetailsInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTransferDetailsInfo4PrintingForArrayConstraintsFromSetMidocoTransferDetailsInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoTransferDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoTransferDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoTransferDetailsInfo4PrintingItem) ? get_class($midocoSellItemDetailsMidocoTransferDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoTransferDetailsInfo4PrintingItem), var_export($midocoSellItemDetailsMidocoTransferDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTransferDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTransferDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing[] $midocoTransferDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoTransferDetailsInfo4Printing(array $midocoTransferDetailsInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTransferDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoTransferDetailsInfo4PrintingForArrayConstraintsFromSetMidocoTransferDetailsInfo4Printing($midocoTransferDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoTransferDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoTransferDetailsInfo4Printing = $midocoTransferDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoTransferDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoTransferDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoTransferDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTransferDetailsInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTransferDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellDetailsPrice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice[]
     */
    public function getMidocoSellDetailsPrice(): array
    {
        return $this->MidocoSellDetailsPrice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellDetailsPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellDetailsPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellDetailsPriceForArrayConstraintsFromSetMidocoSellDetailsPrice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoSellDetailsPriceItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoSellDetailsPriceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoSellDetailsPriceItem) ? get_class($midocoSellItemDetailsMidocoSellDetailsPriceItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoSellDetailsPriceItem), var_export($midocoSellItemDetailsMidocoSellDetailsPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellDetailsPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellDetailsPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice[] $midocoSellDetailsPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoSellDetailsPrice(array $midocoSellDetailsPrice = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellDetailsPriceArrayErrorMessage = self::validateMidocoSellDetailsPriceForArrayConstraintsFromSetMidocoSellDetailsPrice($midocoSellDetailsPrice))) {
            throw new InvalidArgumentException($midocoSellDetailsPriceArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellDetailsPrice = $midocoSellDetailsPrice;
        
        return $this;
    }
    /**
     * Add item to MidocoSellDetailsPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoSellDetailsPrice(\Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice) {
            throw new InvalidArgumentException(sprintf('The MidocoSellDetailsPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellDetailsPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellDetailsPrice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAddress value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress|null
     */
    public function getMidocoSupplierAddress(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress
    {
        return $this->MidocoSupplierAddress;
    }
    /**
     * Set MidocoSupplierAddress value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoSupplierAddress(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress = null): self
    {
        $this->MidocoSupplierAddress = $midocoSupplierAddress;
        
        return $this;
    }
    /**
     * Get MidocoSupplierTemplate value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO[]
     */
    public function getMidocoSupplierTemplate(): array
    {
        return $this->MidocoSupplierTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierTemplateForArrayConstraintsFromSetMidocoSupplierTemplate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsMidocoSupplierTemplateItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemDetailsMidocoSupplierTemplateItem instanceof \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO) {
                $invalidValues[] = is_object($midocoSellItemDetailsMidocoSupplierTemplateItem) ? get_class($midocoSellItemDetailsMidocoSupplierTemplateItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsMidocoSupplierTemplateItem), var_export($midocoSellItemDetailsMidocoSupplierTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierTemplate property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO[] $midocoSupplierTemplate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoSupplierTemplate(array $midocoSupplierTemplate = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierTemplateArrayErrorMessage = self::validateMidocoSupplierTemplateForArrayConstraintsFromSetMidocoSupplierTemplate($midocoSupplierTemplate))) {
            throw new InvalidArgumentException($midocoSupplierTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierTemplate = $midocoSupplierTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToMidocoSupplierTemplate(\Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierTemplate property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierTemplate[] = $item;
        
        return $this;
    }
    /**
     * Get touchedCountry value
     * @return string[]
     */
    public function getTouchedCountry(): array
    {
        return $this->touchedCountry;
    }
    /**
     * This method is responsible for validating the values passed to the setTouchedCountry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTouchedCountry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTouchedCountryForArrayConstraintsFromSetTouchedCountry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemDetailsTouchedCountryItem) {
            // validation for constraint: itemType
            if (!is_string($midocoSellItemDetailsTouchedCountryItem)) {
                $invalidValues[] = is_object($midocoSellItemDetailsTouchedCountryItem) ? get_class($midocoSellItemDetailsTouchedCountryItem) : sprintf('%s(%s)', gettype($midocoSellItemDetailsTouchedCountryItem), var_export($midocoSellItemDetailsTouchedCountryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The touchedCountry property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set touchedCountry value
     * @throws InvalidArgumentException
     * @param string[] $touchedCountry
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setTouchedCountry(array $touchedCountry = []): self
    {
        // validation for constraint: array
        if ('' !== ($touchedCountryArrayErrorMessage = self::validateTouchedCountryForArrayConstraintsFromSetTouchedCountry($touchedCountry))) {
            throw new InvalidArgumentException($touchedCountryArrayErrorMessage, __LINE__);
        }
        $this->touchedCountry = $touchedCountry;
        
        return $this;
    }
    /**
     * Add item to touchedCountry value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function addToTouchedCountry(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The touchedCountry property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->touchedCountry[] = $item;
        
        return $this;
    }
    /**
     * Get travelTypeDescription value
     * @return string|null
     */
    public function getTravelTypeDescription(): ?string
    {
        return $this->travelTypeDescription;
    }
    /**
     * Set travelTypeDescription value
     * @param string $travelTypeDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setTravelTypeDescription(?string $travelTypeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($travelTypeDescription) && !is_string($travelTypeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelTypeDescription, true), gettype($travelTypeDescription)), __LINE__);
        }
        $this->travelTypeDescription = $travelTypeDescription;
        
        return $this;
    }
    /**
     * Get immediatePayment value
     * @return bool|null
     */
    public function getImmediatePayment(): ?bool
    {
        return $this->immediatePayment;
    }
    /**
     * Set immediatePayment value
     * @param bool $immediatePayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setImmediatePayment(?bool $immediatePayment = false): self
    {
        // validation for constraint: boolean
        if (!is_null($immediatePayment) && !is_bool($immediatePayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($immediatePayment, true), gettype($immediatePayment)), __LINE__);
        }
        $this->immediatePayment = $immediatePayment;
        
        return $this;
    }
    /**
     * Get forCustomer value
     * @return string|null
     */
    public function getForCustomer(): ?string
    {
        return $this->forCustomer;
    }
    /**
     * Set forCustomer value
     * @param string $forCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setForCustomer(?string $forCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($forCustomer) && !is_string($forCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forCustomer, true), gettype($forCustomer)), __LINE__);
        }
        $this->forCustomer = $forCustomer;
        
        return $this;
    }
    /**
     * Get fromCustomer value
     * @return string|null
     */
    public function getFromCustomer(): ?string
    {
        return $this->fromCustomer;
    }
    /**
     * Set fromCustomer value
     * @param string $fromCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setFromCustomer(?string $fromCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($fromCustomer) && !is_string($fromCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCustomer, true), gettype($fromCustomer)), __LINE__);
        }
        $this->fromCustomer = $fromCustomer;
        
        return $this;
    }
    /**
     * Get voucherQuantity value
     * @return int|null
     */
    public function getVoucherQuantity(): ?int
    {
        return $this->voucherQuantity;
    }
    /**
     * Set voucherQuantity value
     * @param int $voucherQuantity
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setVoucherQuantity(?int $voucherQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($voucherQuantity) && !(is_int($voucherQuantity) || ctype_digit($voucherQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voucherQuantity, true), gettype($voucherQuantity)), __LINE__);
        }
        $this->voucherQuantity = $voucherQuantity;
        
        return $this;
    }
    /**
     * Get voucherSinglePrice value
     * @return float|null
     */
    public function getVoucherSinglePrice(): ?float
    {
        return $this->voucherSinglePrice;
    }
    /**
     * Set voucherSinglePrice value
     * @param float $voucherSinglePrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setVoucherSinglePrice(?float $voucherSinglePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($voucherSinglePrice) && !(is_float($voucherSinglePrice) || is_numeric($voucherSinglePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($voucherSinglePrice, true), gettype($voucherSinglePrice)), __LINE__);
        }
        $this->voucherSinglePrice = $voucherSinglePrice;
        
        return $this;
    }
    /**
     * Get revenuePercent value
     * @return float|null
     */
    public function getRevenuePercent(): ?float
    {
        return $this->revenuePercent;
    }
    /**
     * Set revenuePercent value
     * @param float $revenuePercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setRevenuePercent(?float $revenuePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($revenuePercent) && !(is_float($revenuePercent) || is_numeric($revenuePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenuePercent, true), gettype($revenuePercent)), __LINE__);
        }
        $this->revenuePercent = $revenuePercent;
        
        return $this;
    }
    /**
     * Get confirmationGroup value
     * @return string|null
     */
    public function getConfirmationGroup(): ?string
    {
        return $this->confirmationGroup;
    }
    /**
     * Set confirmationGroup value
     * @param string $confirmationGroup
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setConfirmationGroup(?string $confirmationGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationGroup) && !is_string($confirmationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationGroup, true), gettype($confirmationGroup)), __LINE__);
        }
        $this->confirmationGroup = $confirmationGroup;
        
        return $this;
    }
    /**
     * Get sellingMode value
     * @return int|null
     */
    public function getSellingMode(): ?int
    {
        return $this->sellingMode;
    }
    /**
     * Set sellingMode value
     * @param int $sellingMode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setSellingMode(?int $sellingMode = null): self
    {
        // validation for constraint: int
        if (!is_null($sellingMode) && !(is_int($sellingMode) || ctype_digit($sellingMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellingMode, true), gettype($sellingMode)), __LINE__);
        }
        $this->sellingMode = $sellingMode;
        
        return $this;
    }
    /**
     * Get transfer value
     * @return string|null
     */
    public function getTransfer(): ?string
    {
        return $this->transfer;
    }
    /**
     * Set transfer value
     * @param string $transfer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setTransfer(?string $transfer = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer) && !is_string($transfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer, true), gettype($transfer)), __LINE__);
        }
        $this->transfer = $transfer;
        
        return $this;
    }
    /**
     * Get noOfNights value
     * @return string|null
     */
    public function getNoOfNights(): ?string
    {
        return $this->noOfNights;
    }
    /**
     * Set noOfNights value
     * @param string $noOfNights
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setNoOfNights(?string $noOfNights = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfNights) && !is_string($noOfNights)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfNights, true), gettype($noOfNights)), __LINE__);
        }
        $this->noOfNights = $noOfNights;
        
        return $this;
    }
    /**
     * Get MidocoTravelNumber value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber|null
     */
    public function getMidocoTravelNumber(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelNumber
    {
        return $this->MidocoTravelNumber;
    }
    /**
     * Set MidocoTravelNumber value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber $midocoTravelNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemDetails
     */
    public function setMidocoTravelNumber(?\Pggns\MidocoApi\Order\StructType\MidocoTravelNumber $midocoTravelNumber = null): self
    {
        $this->MidocoTravelNumber = $midocoTravelNumber;
        
        return $this;
    }
}
