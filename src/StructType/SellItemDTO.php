<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellItemDTO extends AbstractStructBase
{
    /**
     * The abtaClassType
     * @var int|null
     */
    protected ?int $abtaClassType = null;
    /**
     * The abtaSection
     * @var string|null
     */
    protected ?string $abtaSection = null;
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
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The areaDescription
     * @var string|null
     */
    protected ?string $areaDescription = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The articleCount
     * @var int|null
     */
    protected ?int $articleCount = null;
    /**
     * The atolClassType
     * @var int|null
     */
    protected ?int $atolClassType = null;
    /**
     * The atolIndex
     * @var int|null
     */
    protected ?int $atolIndex = null;
    /**
     * The atolPeriod
     * @var string|null
     */
    protected ?string $atolPeriod = null;
    /**
     * The bookingUser
     * @var int|null
     */
    protected ?int $bookingUser = null;
    /**
     * The bookvat
     * @var bool|null
     */
    protected ?bool $bookvat = null;
    /**
     * The buyCurrencyRate
     * @var float|null
     */
    protected ?float $buyCurrencyRate = null;
    /**
     * The calculatedFee
     * @var bool|null
     */
    protected ?bool $calculatedFee = null;
    /**
     * The calculatedMediatorAmount
     * @var float|null
     */
    protected ?float $calculatedMediatorAmount = null;
    /**
     * The calculatedMediatorFeeAmount
     * @var float|null
     */
    protected ?float $calculatedMediatorFeeAmount = null;
    /**
     * The calculatedRevenue
     * @var float|null
     */
    protected ?float $calculatedRevenue = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The cateringDescription
     * @var string|null
     */
    protected ?string $cateringDescription = null;
    /**
     * The ccPaidAmount
     * @var float|null
     */
    protected ?float $ccPaidAmount = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The commissionLevelId
     * @var string|null
     */
    protected ?string $commissionLevelId = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The confirmationReceived
     * @var bool|null
     */
    protected ?bool $confirmationReceived = null;
    /**
     * The confirmationRequired
     * @var bool|null
     */
    protected ?bool $confirmationRequired = null;
    /**
     * The contractTime
     * @var string|null
     */
    protected ?string $contractTime = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The costUnit
     * @var string|null
     */
    protected ?string $costUnit = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The countryDescription
     * @var string|null
     */
    protected ?string $countryDescription = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
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
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerConfReceived
     * @var bool|null
     */
    protected ?bool $customerConfReceived = null;
    /**
     * The customerConfRequired
     * @var bool|null
     */
    protected ?bool $customerConfRequired = null;
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
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The deposit
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The depositBase
     * @var float|null
     */
    protected ?float $depositBase = null;
    /**
     * The depositDate
     * @var string|null
     */
    protected ?string $depositDate = null;
    /**
     * The depositPaymentType
     * @var string|null
     */
    protected ?string $depositPaymentType = null;
    /**
     * The depositPercent
     * @var float|null
     */
    protected ?float $depositPercent = null;
    /**
     * The depositPreset
     * @var bool|null
     */
    protected ?bool $depositPreset = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The destinationArea
     * @var string|null
     */
    protected ?string $destinationArea = null;
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
     * The displayedDeposit
     * @var float|null
     */
    protected ?float $displayedDeposit = null;
    /**
     * The dunningStornoIgnore
     * @var bool|null
     */
    protected ?bool $dunningStornoIgnore = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * The exportRequired
     * @var bool|null
     */
    protected ?bool $exportRequired = null;
    /**
     * The extPaymentType
     * @var string|null
     */
    protected ?string $extPaymentType = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The finalPaymentDate
     * @var string|null
     */
    protected ?string $finalPaymentDate = null;
    /**
     * The finalPaymentType
     * @var string|null
     */
    protected ?string $finalPaymentType = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The geographicalCategory
     * @var string|null
     */
    protected ?string $geographicalCategory = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The hasSubItems
     * @var bool|null
     */
    protected ?bool $hasSubItems = null;
    /**
     * The hideServicePrices
     * @var bool|null
     */
    protected ?bool $hideServicePrices = null;
    /**
     * The immediatePayment
     * @var bool|null
     */
    protected ?bool $immediatePayment = null;
    /**
     * The initialPrice
     * @var float|null
     */
    protected ?float $initialPrice = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The insuranceDescription
     * @var string|null
     */
    protected ?string $insuranceDescription = null;
    /**
     * The isChanged
     * @var bool|null
     */
    protected ?bool $isChanged = null;
    /**
     * The isFeeTaxable
     * @var bool|null
     */
    protected ?bool $isFeeTaxable = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemParent
     * @var int|null
     */
    protected ?int $itemParent = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The locationDescription
     * @var string|null
     */
    protected ?string $locationDescription = null;
    /**
     * The lockIndicator
     * @var int|null
     */
    protected ?int $lockIndicator = null;
    /**
     * The manualRevenue
     * @var bool|null
     */
    protected ?bool $manualRevenue = null;
    /**
     * The mediatorFeeAmount
     * @var float|null
     */
    protected ?float $mediatorFeeAmount = null;
    /**
     * The mobilityIndicator
     * @var bool|null
     */
    protected ?bool $mobilityIndicator = null;
    /**
     * The modeRevenueCalculation
     * @var string|null
     */
    protected ?string $modeRevenueCalculation = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The needsCommissionSettlement
     * @var bool|null
     */
    protected ?bool $needsCommissionSettlement = null;
    /**
     * The needsInvoicePrint
     * @var bool|null
     */
    protected ?bool $needsInvoicePrint = null;
    /**
     * The needsSettlement
     * @var bool|null
     */
    protected ?bool $needsSettlement = null;
    /**
     * The needsVatDivisionIncoming
     * @var bool|null
     */
    protected ?bool $needsVatDivisionIncoming = null;
    /**
     * The needsVatDivisionOutgoing
     * @var bool|null
     */
    protected ?bool $needsVatDivisionOutgoing = null;
    /**
     * The noOfNights
     * @var string|null
     */
    protected ?string $noOfNights = null;
    /**
     * The oldOrderNo
     * @var int|null
     */
    protected ?int $oldOrderNo = null;
    /**
     * The oldUnitName
     * @var string|null
     */
    protected ?string $oldUnitName = null;
    /**
     * The opicCode
     * @var int|null
     */
    protected ?int $opicCode = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderPosition
     * @var int|null
     */
    protected ?int $orderPosition = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCalculatedRevenue
     * @var float|null
     */
    protected ?float $originalCalculatedRevenue = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The originalGrantedRevenue
     * @var float|null
     */
    protected ?float $originalGrantedRevenue = null;
    /**
     * The originalSupplierCommissionAmount
     * @var float|null
     */
    protected ?float $originalSupplierCommissionAmount = null;
    /**
     * The paidMediatorAmount
     * @var float|null
     */
    protected ?float $paidMediatorAmount = null;
    /**
     * The paidMediatorFeeAmount
     * @var float|null
     */
    protected ?float $paidMediatorFeeAmount = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The preventAutoVatDivision
     * @var bool|null
     */
    protected ?bool $preventAutoVatDivision = null;
    /**
     * The preventPrinting
     * @var bool|null
     */
    protected ?bool $preventPrinting = null;
    /**
     * The pricePrintStrategy
     * @var string|null
     */
    protected ?string $pricePrintStrategy = null;
    /**
     * The printOptionId
     * @var int|null
     */
    protected ?int $printOptionId = null;
    /**
     * The printVat
     * @var bool|null
     */
    protected ?bool $printVat = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The providedCommissionOption
     * @var string|null
     */
    protected ?string $providedCommissionOption = null;
    /**
     * The rateRevenueCalculation
     * @var float|null
     */
    protected ?float $rateRevenueCalculation = null;
    /**
     * The receivedStatus
     * @var string|null
     */
    protected ?string $receivedStatus = null;
    /**
     * The receivedStatusDate
     * @var string|null
     */
    protected ?string $receivedStatusDate = null;
    /**
     * The reducedVatFraction
     * @var float|null
     */
    protected ?float $reducedVatFraction = null;
    /**
     * The returnArrivalTime
     * @var string|null
     */
    protected ?string $returnArrivalTime = null;
    /**
     * The returnCarrier
     * @var string|null
     */
    protected ?string $returnCarrier = null;
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
     * The returnDepartureTime
     * @var string|null
     */
    protected ?string $returnDepartureTime = null;
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
     * The returnFlightNo
     * @var string|null
     */
    protected ?string $returnFlightNo = null;
    /**
     * The revenueBase
     * @var float|null
     */
    protected ?float $revenueBase = null;
    /**
     * The revenuePercent
     * @var float|null
     */
    protected ?float $revenuePercent = null;
    /**
     * The revenuePredefined
     * @var bool|null
     */
    protected ?bool $revenuePredefined = null;
    /**
     * The roomDescription
     * @var string|null
     */
    protected ?string $roomDescription = null;
    /**
     * The salePrice
     * @var float|null
     */
    protected ?float $salePrice = null;
    /**
     * The sellingMode
     * @var int|null
     */
    protected ?int $sellingMode = null;
    /**
     * The sellingModeDetermination
     * @var string|null
     */
    protected ?string $sellingModeDetermination = null;
    /**
     * The separatedFee
     * @var bool|null
     */
    protected ?bool $separatedFee = null;
    /**
     * The settlementBase
     * @var float|null
     */
    protected ?float $settlementBase = null;
    /**
     * The settlementDone
     * @var bool|null
     */
    protected ?bool $settlementDone = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The settlementTypeDebit
     * @var string|null
     */
    protected ?string $settlementTypeDebit = null;
    /**
     * The showInInbox
     * @var bool|null
     */
    protected ?bool $showInInbox = null;
    /**
     * The stornoConfReceived
     * @var bool|null
     */
    protected ?bool $stornoConfReceived = null;
    /**
     * The stornoConfRequired
     * @var bool|null
     */
    protected ?bool $stornoConfRequired = null;
    /**
     * The supplierCommissionAmount
     * @var float|null
     */
    protected ?float $supplierCommissionAmount = null;
    /**
     * The supplierDeposit
     * @var float|null
     */
    protected ?float $supplierDeposit = null;
    /**
     * The supplierDepositDate
     * @var string|null
     */
    protected ?string $supplierDepositDate = null;
    /**
     * The supplierFinalPaymentDate
     * @var string|null
     */
    protected ?string $supplierFinalPaymentDate = null;
    /**
     * The supplierInvoiceAmount
     * @var float|null
     */
    protected ?float $supplierInvoiceAmount = null;
    /**
     * The supplierInvoicePaid
     * @var bool|null
     */
    protected ?bool $supplierInvoicePaid = null;
    /**
     * The taxPartPercent
     * @var float|null
     */
    protected ?float $taxPartPercent = null;
    /**
     * The transfer
     * @var string|null
     */
    protected ?string $transfer = null;
    /**
     * The turnaroundPoint
     * @var string|null
     */
    protected ?string $turnaroundPoint = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The valueDateByInvoice
     * @var bool|null
     */
    protected ?bool $valueDateByInvoice = null;
    /**
     * The valueRevenueCalculation
     * @var float|null
     */
    protected ?float $valueRevenueCalculation = null;
    /**
     * The vatDivisionChangeCustomer
     * @var bool|null
     */
    protected ?bool $vatDivisionChangeCustomer = null;
    /**
     * The vatDivisionChangeSupplier
     * @var bool|null
     */
    protected ?bool $vatDivisionChangeSupplier = null;
    /**
     * The vatDivisionChecked
     * @var string|null
     */
    protected ?string $vatDivisionChecked = null;
    /**
     * The vatDivisionCheckedBy
     * @var int|null
     */
    protected ?int $vatDivisionCheckedBy = null;
    /**
     * The vatDivisionComment
     * @var string|null
     */
    protected ?string $vatDivisionComment = null;
    /**
     * The vatDivisionType
     * @var int|null
     */
    protected ?int $vatDivisionType = null;
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
     * Constructor method for SellItemDTO
     * @uses SellItemDTO::setAbtaClassType()
     * @uses SellItemDTO::setAbtaSection()
     * @uses SellItemDTO::setAccomodationCode()
     * @uses SellItemDTO::setAccomodationDescription()
     * @uses SellItemDTO::setAccountId()
     * @uses SellItemDTO::setAreaDescription()
     * @uses SellItemDTO::setArrivalTime()
     * @uses SellItemDTO::setArticleCount()
     * @uses SellItemDTO::setAtolClassType()
     * @uses SellItemDTO::setAtolIndex()
     * @uses SellItemDTO::setAtolPeriod()
     * @uses SellItemDTO::setBookingUser()
     * @uses SellItemDTO::setBookvat()
     * @uses SellItemDTO::setBuyCurrencyRate()
     * @uses SellItemDTO::setCalculatedFee()
     * @uses SellItemDTO::setCalculatedMediatorAmount()
     * @uses SellItemDTO::setCalculatedMediatorFeeAmount()
     * @uses SellItemDTO::setCalculatedRevenue()
     * @uses SellItemDTO::setCarrier()
     * @uses SellItemDTO::setCategory()
     * @uses SellItemDTO::setCateringDescription()
     * @uses SellItemDTO::setCcPaidAmount()
     * @uses SellItemDTO::setCommissionAmount()
     * @uses SellItemDTO::setCommissionLevelId()
     * @uses SellItemDTO::setCommissionPercent()
     * @uses SellItemDTO::setConfirmationGroup()
     * @uses SellItemDTO::setConfirmationReceived()
     * @uses SellItemDTO::setConfirmationRequired()
     * @uses SellItemDTO::setContractTime()
     * @uses SellItemDTO::setCostCentre()
     * @uses SellItemDTO::setCostUnit()
     * @uses SellItemDTO::setCountryCode()
     * @uses SellItemDTO::setCountryDescription()
     * @uses SellItemDTO::setCreationDate()
     * @uses SellItemDTO::setCreationTime()
     * @uses SellItemDTO::setCreationUser()
     * @uses SellItemDTO::setCruiseCode()
     * @uses SellItemDTO::setCruiseDescription()
     * @uses SellItemDTO::setCurrency()
     * @uses SellItemDTO::setCustomerConfReceived()
     * @uses SellItemDTO::setCustomerConfRequired()
     * @uses SellItemDTO::setDepartureCode()
     * @uses SellItemDTO::setDepartureDescription()
     * @uses SellItemDTO::setDepartureTime()
     * @uses SellItemDTO::setDeposit()
     * @uses SellItemDTO::setDepositBase()
     * @uses SellItemDTO::setDepositDate()
     * @uses SellItemDTO::setDepositPaymentType()
     * @uses SellItemDTO::setDepositPercent()
     * @uses SellItemDTO::setDepositPreset()
     * @uses SellItemDTO::setDescription()
     * @uses SellItemDTO::setDestinationArea()
     * @uses SellItemDTO::setDestinationCode()
     * @uses SellItemDTO::setDestinationDescription()
     * @uses SellItemDTO::setDisplayedDeposit()
     * @uses SellItemDTO::setDunningStornoIgnore()
     * @uses SellItemDTO::setExportDate()
     * @uses SellItemDTO::setExportRequired()
     * @uses SellItemDTO::setExtPaymentType()
     * @uses SellItemDTO::setFeeAmount()
     * @uses SellItemDTO::setFinalPaymentDate()
     * @uses SellItemDTO::setFinalPaymentType()
     * @uses SellItemDTO::setFlightNo()
     * @uses SellItemDTO::setGeographicalCategory()
     * @uses SellItemDTO::setGrantedRevenue()
     * @uses SellItemDTO::setHasSubItems()
     * @uses SellItemDTO::setHideServicePrices()
     * @uses SellItemDTO::setImmediatePayment()
     * @uses SellItemDTO::setInitialPrice()
     * @uses SellItemDTO::setInkassoPrice()
     * @uses SellItemDTO::setInsuranceDescription()
     * @uses SellItemDTO::setIsChanged()
     * @uses SellItemDTO::setIsFeeTaxable()
     * @uses SellItemDTO::setIsManual()
     * @uses SellItemDTO::setItemId()
     * @uses SellItemDTO::setItemParent()
     * @uses SellItemDTO::setItemPrice()
     * @uses SellItemDTO::setItemType()
     * @uses SellItemDTO::setLocationDescription()
     * @uses SellItemDTO::setLockIndicator()
     * @uses SellItemDTO::setManualRevenue()
     * @uses SellItemDTO::setMediatorFeeAmount()
     * @uses SellItemDTO::setMobilityIndicator()
     * @uses SellItemDTO::setModeRevenueCalculation()
     * @uses SellItemDTO::setModifyTimestamp()
     * @uses SellItemDTO::setModifyUser()
     * @uses SellItemDTO::setNeedsCommissionSettlement()
     * @uses SellItemDTO::setNeedsInvoicePrint()
     * @uses SellItemDTO::setNeedsSettlement()
     * @uses SellItemDTO::setNeedsVatDivisionIncoming()
     * @uses SellItemDTO::setNeedsVatDivisionOutgoing()
     * @uses SellItemDTO::setNoOfNights()
     * @uses SellItemDTO::setOldOrderNo()
     * @uses SellItemDTO::setOldUnitName()
     * @uses SellItemDTO::setOpicCode()
     * @uses SellItemDTO::setOrderId()
     * @uses SellItemDTO::setOrderPosition()
     * @uses SellItemDTO::setOriginalAmount()
     * @uses SellItemDTO::setOriginalCalculatedRevenue()
     * @uses SellItemDTO::setOriginalCurrency()
     * @uses SellItemDTO::setOriginalGrantedRevenue()
     * @uses SellItemDTO::setOriginalSupplierCommissionAmount()
     * @uses SellItemDTO::setPaidMediatorAmount()
     * @uses SellItemDTO::setPaidMediatorFeeAmount()
     * @uses SellItemDTO::setPaymentType()
     * @uses SellItemDTO::setPlanId()
     * @uses SellItemDTO::setPreventAutoVatDivision()
     * @uses SellItemDTO::setPreventPrinting()
     * @uses SellItemDTO::setPricePrintStrategy()
     * @uses SellItemDTO::setPrintOptionId()
     * @uses SellItemDTO::setPrintVat()
     * @uses SellItemDTO::setProductType()
     * @uses SellItemDTO::setProvidedCommissionOption()
     * @uses SellItemDTO::setRateRevenueCalculation()
     * @uses SellItemDTO::setReceivedStatus()
     * @uses SellItemDTO::setReceivedStatusDate()
     * @uses SellItemDTO::setReducedVatFraction()
     * @uses SellItemDTO::setReturnArrivalTime()
     * @uses SellItemDTO::setReturnCarrier()
     * @uses SellItemDTO::setReturnDepartureCode()
     * @uses SellItemDTO::setReturnDepartureDescription()
     * @uses SellItemDTO::setReturnDepartureTime()
     * @uses SellItemDTO::setReturnDestinationCode()
     * @uses SellItemDTO::setReturnDestinationDescription()
     * @uses SellItemDTO::setReturnFlightNo()
     * @uses SellItemDTO::setRevenueBase()
     * @uses SellItemDTO::setRevenuePercent()
     * @uses SellItemDTO::setRevenuePredefined()
     * @uses SellItemDTO::setRoomDescription()
     * @uses SellItemDTO::setSalePrice()
     * @uses SellItemDTO::setSellingMode()
     * @uses SellItemDTO::setSellingModeDetermination()
     * @uses SellItemDTO::setSeparatedFee()
     * @uses SellItemDTO::setSettlementBase()
     * @uses SellItemDTO::setSettlementDone()
     * @uses SellItemDTO::setSettlementType()
     * @uses SellItemDTO::setSettlementTypeDebit()
     * @uses SellItemDTO::setShowInInbox()
     * @uses SellItemDTO::setStornoConfReceived()
     * @uses SellItemDTO::setStornoConfRequired()
     * @uses SellItemDTO::setSupplierCommissionAmount()
     * @uses SellItemDTO::setSupplierDeposit()
     * @uses SellItemDTO::setSupplierDepositDate()
     * @uses SellItemDTO::setSupplierFinalPaymentDate()
     * @uses SellItemDTO::setSupplierInvoiceAmount()
     * @uses SellItemDTO::setSupplierInvoicePaid()
     * @uses SellItemDTO::setTaxPartPercent()
     * @uses SellItemDTO::setTransfer()
     * @uses SellItemDTO::setTurnaroundPoint()
     * @uses SellItemDTO::setUnitName()
     * @uses SellItemDTO::setValueDateByInvoice()
     * @uses SellItemDTO::setValueRevenueCalculation()
     * @uses SellItemDTO::setVatDivisionChangeCustomer()
     * @uses SellItemDTO::setVatDivisionChangeSupplier()
     * @uses SellItemDTO::setVatDivisionChecked()
     * @uses SellItemDTO::setVatDivisionCheckedBy()
     * @uses SellItemDTO::setVatDivisionComment()
     * @uses SellItemDTO::setVatDivisionType()
     * @uses SellItemDTO::setVatIncluded()
     * @uses SellItemDTO::setVatPercent()
     * @param int $abtaClassType
     * @param string $abtaSection
     * @param string $accomodationCode
     * @param string $accomodationDescription
     * @param string $accountId
     * @param string $areaDescription
     * @param string $arrivalTime
     * @param int $articleCount
     * @param int $atolClassType
     * @param int $atolIndex
     * @param string $atolPeriod
     * @param int $bookingUser
     * @param bool $bookvat
     * @param float $buyCurrencyRate
     * @param bool $calculatedFee
     * @param float $calculatedMediatorAmount
     * @param float $calculatedMediatorFeeAmount
     * @param float $calculatedRevenue
     * @param string $carrier
     * @param string $category
     * @param string $cateringDescription
     * @param float $ccPaidAmount
     * @param float $commissionAmount
     * @param string $commissionLevelId
     * @param float $commissionPercent
     * @param string $confirmationGroup
     * @param bool $confirmationReceived
     * @param bool $confirmationRequired
     * @param string $contractTime
     * @param string $costCentre
     * @param string $costUnit
     * @param string $countryCode
     * @param string $countryDescription
     * @param string $creationDate
     * @param string $creationTime
     * @param int $creationUser
     * @param string $cruiseCode
     * @param string $cruiseDescription
     * @param string $currency
     * @param bool $customerConfReceived
     * @param bool $customerConfRequired
     * @param string $departureCode
     * @param string $departureDescription
     * @param string $departureTime
     * @param float $deposit
     * @param float $depositBase
     * @param string $depositDate
     * @param string $depositPaymentType
     * @param float $depositPercent
     * @param bool $depositPreset
     * @param string $description
     * @param string $destinationArea
     * @param string $destinationCode
     * @param string $destinationDescription
     * @param float $displayedDeposit
     * @param bool $dunningStornoIgnore
     * @param string $exportDate
     * @param bool $exportRequired
     * @param string $extPaymentType
     * @param float $feeAmount
     * @param string $finalPaymentDate
     * @param string $finalPaymentType
     * @param string $flightNo
     * @param string $geographicalCategory
     * @param float $grantedRevenue
     * @param bool $hasSubItems
     * @param bool $hideServicePrices
     * @param bool $immediatePayment
     * @param float $initialPrice
     * @param float $inkassoPrice
     * @param string $insuranceDescription
     * @param bool $isChanged
     * @param bool $isFeeTaxable
     * @param bool $isManual
     * @param int $itemId
     * @param int $itemParent
     * @param float $itemPrice
     * @param string $itemType
     * @param string $locationDescription
     * @param int $lockIndicator
     * @param bool $manualRevenue
     * @param float $mediatorFeeAmount
     * @param bool $mobilityIndicator
     * @param string $modeRevenueCalculation
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param bool $needsCommissionSettlement
     * @param bool $needsInvoicePrint
     * @param bool $needsSettlement
     * @param bool $needsVatDivisionIncoming
     * @param bool $needsVatDivisionOutgoing
     * @param string $noOfNights
     * @param int $oldOrderNo
     * @param string $oldUnitName
     * @param int $opicCode
     * @param int $orderId
     * @param int $orderPosition
     * @param float $originalAmount
     * @param float $originalCalculatedRevenue
     * @param string $originalCurrency
     * @param float $originalGrantedRevenue
     * @param float $originalSupplierCommissionAmount
     * @param float $paidMediatorAmount
     * @param float $paidMediatorFeeAmount
     * @param string $paymentType
     * @param string $planId
     * @param bool $preventAutoVatDivision
     * @param bool $preventPrinting
     * @param string $pricePrintStrategy
     * @param int $printOptionId
     * @param bool $printVat
     * @param string $productType
     * @param string $providedCommissionOption
     * @param float $rateRevenueCalculation
     * @param string $receivedStatus
     * @param string $receivedStatusDate
     * @param float $reducedVatFraction
     * @param string $returnArrivalTime
     * @param string $returnCarrier
     * @param string $returnDepartureCode
     * @param string $returnDepartureDescription
     * @param string $returnDepartureTime
     * @param string $returnDestinationCode
     * @param string $returnDestinationDescription
     * @param string $returnFlightNo
     * @param float $revenueBase
     * @param float $revenuePercent
     * @param bool $revenuePredefined
     * @param string $roomDescription
     * @param float $salePrice
     * @param int $sellingMode
     * @param string $sellingModeDetermination
     * @param bool $separatedFee
     * @param float $settlementBase
     * @param bool $settlementDone
     * @param string $settlementType
     * @param string $settlementTypeDebit
     * @param bool $showInInbox
     * @param bool $stornoConfReceived
     * @param bool $stornoConfRequired
     * @param float $supplierCommissionAmount
     * @param float $supplierDeposit
     * @param string $supplierDepositDate
     * @param string $supplierFinalPaymentDate
     * @param float $supplierInvoiceAmount
     * @param bool $supplierInvoicePaid
     * @param float $taxPartPercent
     * @param string $transfer
     * @param string $turnaroundPoint
     * @param string $unitName
     * @param bool $valueDateByInvoice
     * @param float $valueRevenueCalculation
     * @param bool $vatDivisionChangeCustomer
     * @param bool $vatDivisionChangeSupplier
     * @param string $vatDivisionChecked
     * @param int $vatDivisionCheckedBy
     * @param string $vatDivisionComment
     * @param int $vatDivisionType
     * @param bool $vatIncluded
     * @param float $vatPercent
     */
    public function __construct(?int $abtaClassType = null, ?string $abtaSection = null, ?string $accomodationCode = null, ?string $accomodationDescription = null, ?string $accountId = null, ?string $areaDescription = null, ?string $arrivalTime = null, ?int $articleCount = null, ?int $atolClassType = null, ?int $atolIndex = null, ?string $atolPeriod = null, ?int $bookingUser = null, ?bool $bookvat = null, ?float $buyCurrencyRate = null, ?bool $calculatedFee = null, ?float $calculatedMediatorAmount = null, ?float $calculatedMediatorFeeAmount = null, ?float $calculatedRevenue = null, ?string $carrier = null, ?string $category = null, ?string $cateringDescription = null, ?float $ccPaidAmount = null, ?float $commissionAmount = null, ?string $commissionLevelId = null, ?float $commissionPercent = null, ?string $confirmationGroup = null, ?bool $confirmationReceived = null, ?bool $confirmationRequired = null, ?string $contractTime = null, ?string $costCentre = null, ?string $costUnit = null, ?string $countryCode = null, ?string $countryDescription = null, ?string $creationDate = null, ?string $creationTime = null, ?int $creationUser = null, ?string $cruiseCode = null, ?string $cruiseDescription = null, ?string $currency = null, ?bool $customerConfReceived = null, ?bool $customerConfRequired = null, ?string $departureCode = null, ?string $departureDescription = null, ?string $departureTime = null, ?float $deposit = null, ?float $depositBase = null, ?string $depositDate = null, ?string $depositPaymentType = null, ?float $depositPercent = null, ?bool $depositPreset = null, ?string $description = null, ?string $destinationArea = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?float $displayedDeposit = null, ?bool $dunningStornoIgnore = null, ?string $exportDate = null, ?bool $exportRequired = null, ?string $extPaymentType = null, ?float $feeAmount = null, ?string $finalPaymentDate = null, ?string $finalPaymentType = null, ?string $flightNo = null, ?string $geographicalCategory = null, ?float $grantedRevenue = null, ?bool $hasSubItems = null, ?bool $hideServicePrices = null, ?bool $immediatePayment = null, ?float $initialPrice = null, ?float $inkassoPrice = null, ?string $insuranceDescription = null, ?bool $isChanged = null, ?bool $isFeeTaxable = null, ?bool $isManual = null, ?int $itemId = null, ?int $itemParent = null, ?float $itemPrice = null, ?string $itemType = null, ?string $locationDescription = null, ?int $lockIndicator = null, ?bool $manualRevenue = null, ?float $mediatorFeeAmount = null, ?bool $mobilityIndicator = null, ?string $modeRevenueCalculation = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?bool $needsCommissionSettlement = null, ?bool $needsInvoicePrint = null, ?bool $needsSettlement = null, ?bool $needsVatDivisionIncoming = null, ?bool $needsVatDivisionOutgoing = null, ?string $noOfNights = null, ?int $oldOrderNo = null, ?string $oldUnitName = null, ?int $opicCode = null, ?int $orderId = null, ?int $orderPosition = null, ?float $originalAmount = null, ?float $originalCalculatedRevenue = null, ?string $originalCurrency = null, ?float $originalGrantedRevenue = null, ?float $originalSupplierCommissionAmount = null, ?float $paidMediatorAmount = null, ?float $paidMediatorFeeAmount = null, ?string $paymentType = null, ?string $planId = null, ?bool $preventAutoVatDivision = null, ?bool $preventPrinting = null, ?string $pricePrintStrategy = null, ?int $printOptionId = null, ?bool $printVat = null, ?string $productType = null, ?string $providedCommissionOption = null, ?float $rateRevenueCalculation = null, ?string $receivedStatus = null, ?string $receivedStatusDate = null, ?float $reducedVatFraction = null, ?string $returnArrivalTime = null, ?string $returnCarrier = null, ?string $returnDepartureCode = null, ?string $returnDepartureDescription = null, ?string $returnDepartureTime = null, ?string $returnDestinationCode = null, ?string $returnDestinationDescription = null, ?string $returnFlightNo = null, ?float $revenueBase = null, ?float $revenuePercent = null, ?bool $revenuePredefined = null, ?string $roomDescription = null, ?float $salePrice = null, ?int $sellingMode = null, ?string $sellingModeDetermination = null, ?bool $separatedFee = null, ?float $settlementBase = null, ?bool $settlementDone = null, ?string $settlementType = null, ?string $settlementTypeDebit = null, ?bool $showInInbox = null, ?bool $stornoConfReceived = null, ?bool $stornoConfRequired = null, ?float $supplierCommissionAmount = null, ?float $supplierDeposit = null, ?string $supplierDepositDate = null, ?string $supplierFinalPaymentDate = null, ?float $supplierInvoiceAmount = null, ?bool $supplierInvoicePaid = null, ?float $taxPartPercent = null, ?string $transfer = null, ?string $turnaroundPoint = null, ?string $unitName = null, ?bool $valueDateByInvoice = null, ?float $valueRevenueCalculation = null, ?bool $vatDivisionChangeCustomer = null, ?bool $vatDivisionChangeSupplier = null, ?string $vatDivisionChecked = null, ?int $vatDivisionCheckedBy = null, ?string $vatDivisionComment = null, ?int $vatDivisionType = null, ?bool $vatIncluded = null, ?float $vatPercent = null)
    {
        $this
            ->setAbtaClassType($abtaClassType)
            ->setAbtaSection($abtaSection)
            ->setAccomodationCode($accomodationCode)
            ->setAccomodationDescription($accomodationDescription)
            ->setAccountId($accountId)
            ->setAreaDescription($areaDescription)
            ->setArrivalTime($arrivalTime)
            ->setArticleCount($articleCount)
            ->setAtolClassType($atolClassType)
            ->setAtolIndex($atolIndex)
            ->setAtolPeriod($atolPeriod)
            ->setBookingUser($bookingUser)
            ->setBookvat($bookvat)
            ->setBuyCurrencyRate($buyCurrencyRate)
            ->setCalculatedFee($calculatedFee)
            ->setCalculatedMediatorAmount($calculatedMediatorAmount)
            ->setCalculatedMediatorFeeAmount($calculatedMediatorFeeAmount)
            ->setCalculatedRevenue($calculatedRevenue)
            ->setCarrier($carrier)
            ->setCategory($category)
            ->setCateringDescription($cateringDescription)
            ->setCcPaidAmount($ccPaidAmount)
            ->setCommissionAmount($commissionAmount)
            ->setCommissionLevelId($commissionLevelId)
            ->setCommissionPercent($commissionPercent)
            ->setConfirmationGroup($confirmationGroup)
            ->setConfirmationReceived($confirmationReceived)
            ->setConfirmationRequired($confirmationRequired)
            ->setContractTime($contractTime)
            ->setCostCentre($costCentre)
            ->setCostUnit($costUnit)
            ->setCountryCode($countryCode)
            ->setCountryDescription($countryDescription)
            ->setCreationDate($creationDate)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCruiseCode($cruiseCode)
            ->setCruiseDescription($cruiseDescription)
            ->setCurrency($currency)
            ->setCustomerConfReceived($customerConfReceived)
            ->setCustomerConfRequired($customerConfRequired)
            ->setDepartureCode($departureCode)
            ->setDepartureDescription($departureDescription)
            ->setDepartureTime($departureTime)
            ->setDeposit($deposit)
            ->setDepositBase($depositBase)
            ->setDepositDate($depositDate)
            ->setDepositPaymentType($depositPaymentType)
            ->setDepositPercent($depositPercent)
            ->setDepositPreset($depositPreset)
            ->setDescription($description)
            ->setDestinationArea($destinationArea)
            ->setDestinationCode($destinationCode)
            ->setDestinationDescription($destinationDescription)
            ->setDisplayedDeposit($displayedDeposit)
            ->setDunningStornoIgnore($dunningStornoIgnore)
            ->setExportDate($exportDate)
            ->setExportRequired($exportRequired)
            ->setExtPaymentType($extPaymentType)
            ->setFeeAmount($feeAmount)
            ->setFinalPaymentDate($finalPaymentDate)
            ->setFinalPaymentType($finalPaymentType)
            ->setFlightNo($flightNo)
            ->setGeographicalCategory($geographicalCategory)
            ->setGrantedRevenue($grantedRevenue)
            ->setHasSubItems($hasSubItems)
            ->setHideServicePrices($hideServicePrices)
            ->setImmediatePayment($immediatePayment)
            ->setInitialPrice($initialPrice)
            ->setInkassoPrice($inkassoPrice)
            ->setInsuranceDescription($insuranceDescription)
            ->setIsChanged($isChanged)
            ->setIsFeeTaxable($isFeeTaxable)
            ->setIsManual($isManual)
            ->setItemId($itemId)
            ->setItemParent($itemParent)
            ->setItemPrice($itemPrice)
            ->setItemType($itemType)
            ->setLocationDescription($locationDescription)
            ->setLockIndicator($lockIndicator)
            ->setManualRevenue($manualRevenue)
            ->setMediatorFeeAmount($mediatorFeeAmount)
            ->setMobilityIndicator($mobilityIndicator)
            ->setModeRevenueCalculation($modeRevenueCalculation)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setNeedsCommissionSettlement($needsCommissionSettlement)
            ->setNeedsInvoicePrint($needsInvoicePrint)
            ->setNeedsSettlement($needsSettlement)
            ->setNeedsVatDivisionIncoming($needsVatDivisionIncoming)
            ->setNeedsVatDivisionOutgoing($needsVatDivisionOutgoing)
            ->setNoOfNights($noOfNights)
            ->setOldOrderNo($oldOrderNo)
            ->setOldUnitName($oldUnitName)
            ->setOpicCode($opicCode)
            ->setOrderId($orderId)
            ->setOrderPosition($orderPosition)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCalculatedRevenue($originalCalculatedRevenue)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalGrantedRevenue($originalGrantedRevenue)
            ->setOriginalSupplierCommissionAmount($originalSupplierCommissionAmount)
            ->setPaidMediatorAmount($paidMediatorAmount)
            ->setPaidMediatorFeeAmount($paidMediatorFeeAmount)
            ->setPaymentType($paymentType)
            ->setPlanId($planId)
            ->setPreventAutoVatDivision($preventAutoVatDivision)
            ->setPreventPrinting($preventPrinting)
            ->setPricePrintStrategy($pricePrintStrategy)
            ->setPrintOptionId($printOptionId)
            ->setPrintVat($printVat)
            ->setProductType($productType)
            ->setProvidedCommissionOption($providedCommissionOption)
            ->setRateRevenueCalculation($rateRevenueCalculation)
            ->setReceivedStatus($receivedStatus)
            ->setReceivedStatusDate($receivedStatusDate)
            ->setReducedVatFraction($reducedVatFraction)
            ->setReturnArrivalTime($returnArrivalTime)
            ->setReturnCarrier($returnCarrier)
            ->setReturnDepartureCode($returnDepartureCode)
            ->setReturnDepartureDescription($returnDepartureDescription)
            ->setReturnDepartureTime($returnDepartureTime)
            ->setReturnDestinationCode($returnDestinationCode)
            ->setReturnDestinationDescription($returnDestinationDescription)
            ->setReturnFlightNo($returnFlightNo)
            ->setRevenueBase($revenueBase)
            ->setRevenuePercent($revenuePercent)
            ->setRevenuePredefined($revenuePredefined)
            ->setRoomDescription($roomDescription)
            ->setSalePrice($salePrice)
            ->setSellingMode($sellingMode)
            ->setSellingModeDetermination($sellingModeDetermination)
            ->setSeparatedFee($separatedFee)
            ->setSettlementBase($settlementBase)
            ->setSettlementDone($settlementDone)
            ->setSettlementType($settlementType)
            ->setSettlementTypeDebit($settlementTypeDebit)
            ->setShowInInbox($showInInbox)
            ->setStornoConfReceived($stornoConfReceived)
            ->setStornoConfRequired($stornoConfRequired)
            ->setSupplierCommissionAmount($supplierCommissionAmount)
            ->setSupplierDeposit($supplierDeposit)
            ->setSupplierDepositDate($supplierDepositDate)
            ->setSupplierFinalPaymentDate($supplierFinalPaymentDate)
            ->setSupplierInvoiceAmount($supplierInvoiceAmount)
            ->setSupplierInvoicePaid($supplierInvoicePaid)
            ->setTaxPartPercent($taxPartPercent)
            ->setTransfer($transfer)
            ->setTurnaroundPoint($turnaroundPoint)
            ->setUnitName($unitName)
            ->setValueDateByInvoice($valueDateByInvoice)
            ->setValueRevenueCalculation($valueRevenueCalculation)
            ->setVatDivisionChangeCustomer($vatDivisionChangeCustomer)
            ->setVatDivisionChangeSupplier($vatDivisionChangeSupplier)
            ->setVatDivisionChecked($vatDivisionChecked)
            ->setVatDivisionCheckedBy($vatDivisionCheckedBy)
            ->setVatDivisionComment($vatDivisionComment)
            ->setVatDivisionType($vatDivisionType)
            ->setVatIncluded($vatIncluded)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get abtaClassType value
     * @return int|null
     */
    public function getAbtaClassType(): ?int
    {
        return $this->abtaClassType;
    }
    /**
     * Set abtaClassType value
     * @param int $abtaClassType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setAbtaClassType(?int $abtaClassType = null): self
    {
        // validation for constraint: int
        if (!is_null($abtaClassType) && !(is_int($abtaClassType) || ctype_digit($abtaClassType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($abtaClassType, true), gettype($abtaClassType)), __LINE__);
        }
        $this->abtaClassType = $abtaClassType;
        
        return $this;
    }
    /**
     * Get abtaSection value
     * @return string|null
     */
    public function getAbtaSection(): ?string
    {
        return $this->abtaSection;
    }
    /**
     * Set abtaSection value
     * @param string $abtaSection
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setAbtaSection(?string $abtaSection = null): self
    {
        // validation for constraint: string
        if (!is_null($abtaSection) && !is_string($abtaSection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abtaSection, true), gettype($abtaSection)), __LINE__);
        }
        $this->abtaSection = $abtaSection;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get articleCount value
     * @return int|null
     */
    public function getArticleCount(): ?int
    {
        return $this->articleCount;
    }
    /**
     * Set articleCount value
     * @param int $articleCount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setArticleCount(?int $articleCount = null): self
    {
        // validation for constraint: int
        if (!is_null($articleCount) && !(is_int($articleCount) || ctype_digit($articleCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($articleCount, true), gettype($articleCount)), __LINE__);
        }
        $this->articleCount = $articleCount;
        
        return $this;
    }
    /**
     * Get atolClassType value
     * @return int|null
     */
    public function getAtolClassType(): ?int
    {
        return $this->atolClassType;
    }
    /**
     * Set atolClassType value
     * @param int $atolClassType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setAtolClassType(?int $atolClassType = null): self
    {
        // validation for constraint: int
        if (!is_null($atolClassType) && !(is_int($atolClassType) || ctype_digit($atolClassType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($atolClassType, true), gettype($atolClassType)), __LINE__);
        }
        $this->atolClassType = $atolClassType;
        
        return $this;
    }
    /**
     * Get atolIndex value
     * @return int|null
     */
    public function getAtolIndex(): ?int
    {
        return $this->atolIndex;
    }
    /**
     * Set atolIndex value
     * @param int $atolIndex
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setAtolIndex(?int $atolIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($atolIndex) && !(is_int($atolIndex) || ctype_digit($atolIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($atolIndex, true), gettype($atolIndex)), __LINE__);
        }
        $this->atolIndex = $atolIndex;
        
        return $this;
    }
    /**
     * Get atolPeriod value
     * @return string|null
     */
    public function getAtolPeriod(): ?string
    {
        return $this->atolPeriod;
    }
    /**
     * Set atolPeriod value
     * @param string $atolPeriod
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setAtolPeriod(?string $atolPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($atolPeriod) && !is_string($atolPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($atolPeriod, true), gettype($atolPeriod)), __LINE__);
        }
        $this->atolPeriod = $atolPeriod;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get bookvat value
     * @return bool|null
     */
    public function getBookvat(): ?bool
    {
        return $this->bookvat;
    }
    /**
     * Set bookvat value
     * @param bool $bookvat
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setBookvat(?bool $bookvat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookvat) && !is_bool($bookvat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookvat, true), gettype($bookvat)), __LINE__);
        }
        $this->bookvat = $bookvat;
        
        return $this;
    }
    /**
     * Get buyCurrencyRate value
     * @return float|null
     */
    public function getBuyCurrencyRate(): ?float
    {
        return $this->buyCurrencyRate;
    }
    /**
     * Set buyCurrencyRate value
     * @param float $buyCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setBuyCurrencyRate(?float $buyCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($buyCurrencyRate) && !(is_float($buyCurrencyRate) || is_numeric($buyCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyCurrencyRate, true), gettype($buyCurrencyRate)), __LINE__);
        }
        $this->buyCurrencyRate = $buyCurrencyRate;
        
        return $this;
    }
    /**
     * Get calculatedFee value
     * @return bool|null
     */
    public function getCalculatedFee(): ?bool
    {
        return $this->calculatedFee;
    }
    /**
     * Set calculatedFee value
     * @param bool $calculatedFee
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCalculatedFee(?bool $calculatedFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($calculatedFee) && !is_bool($calculatedFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($calculatedFee, true), gettype($calculatedFee)), __LINE__);
        }
        $this->calculatedFee = $calculatedFee;
        
        return $this;
    }
    /**
     * Get calculatedMediatorAmount value
     * @return float|null
     */
    public function getCalculatedMediatorAmount(): ?float
    {
        return $this->calculatedMediatorAmount;
    }
    /**
     * Set calculatedMediatorAmount value
     * @param float $calculatedMediatorAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCalculatedMediatorAmount(?float $calculatedMediatorAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMediatorAmount) && !(is_float($calculatedMediatorAmount) || is_numeric($calculatedMediatorAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMediatorAmount, true), gettype($calculatedMediatorAmount)), __LINE__);
        }
        $this->calculatedMediatorAmount = $calculatedMediatorAmount;
        
        return $this;
    }
    /**
     * Get calculatedMediatorFeeAmount value
     * @return float|null
     */
    public function getCalculatedMediatorFeeAmount(): ?float
    {
        return $this->calculatedMediatorFeeAmount;
    }
    /**
     * Set calculatedMediatorFeeAmount value
     * @param float $calculatedMediatorFeeAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCalculatedMediatorFeeAmount(?float $calculatedMediatorFeeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMediatorFeeAmount) && !(is_float($calculatedMediatorFeeAmount) || is_numeric($calculatedMediatorFeeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMediatorFeeAmount, true), gettype($calculatedMediatorFeeAmount)), __LINE__);
        }
        $this->calculatedMediatorFeeAmount = $calculatedMediatorFeeAmount;
        
        return $this;
    }
    /**
     * Get calculatedRevenue value
     * @return float|null
     */
    public function getCalculatedRevenue(): ?float
    {
        return $this->calculatedRevenue;
    }
    /**
     * Set calculatedRevenue value
     * @param float $calculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCalculatedRevenue(?float $calculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedRevenue) && !(is_float($calculatedRevenue) || is_numeric($calculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedRevenue, true), gettype($calculatedRevenue)), __LINE__);
        }
        $this->calculatedRevenue = $calculatedRevenue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get ccPaidAmount value
     * @return float|null
     */
    public function getCcPaidAmount(): ?float
    {
        return $this->ccPaidAmount;
    }
    /**
     * Set ccPaidAmount value
     * @param float $ccPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCcPaidAmount(?float $ccPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($ccPaidAmount) && !(is_float($ccPaidAmount) || is_numeric($ccPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ccPaidAmount, true), gettype($ccPaidAmount)), __LINE__);
        }
        $this->ccPaidAmount = $ccPaidAmount;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get commissionLevelId value
     * @return string|null
     */
    public function getCommissionLevelId(): ?string
    {
        return $this->commissionLevelId;
    }
    /**
     * Set commissionLevelId value
     * @param string $commissionLevelId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCommissionLevelId(?string $commissionLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionLevelId) && !is_string($commissionLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionLevelId, true), gettype($commissionLevelId)), __LINE__);
        }
        $this->commissionLevelId = $commissionLevelId;
        
        return $this;
    }
    /**
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get confirmationReceived value
     * @return bool|null
     */
    public function getConfirmationReceived(): ?bool
    {
        return $this->confirmationReceived;
    }
    /**
     * Set confirmationReceived value
     * @param bool $confirmationReceived
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setConfirmationReceived(?bool $confirmationReceived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($confirmationReceived) && !is_bool($confirmationReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($confirmationReceived, true), gettype($confirmationReceived)), __LINE__);
        }
        $this->confirmationReceived = $confirmationReceived;
        
        return $this;
    }
    /**
     * Get confirmationRequired value
     * @return bool|null
     */
    public function getConfirmationRequired(): ?bool
    {
        return $this->confirmationRequired;
    }
    /**
     * Set confirmationRequired value
     * @param bool $confirmationRequired
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setConfirmationRequired(?bool $confirmationRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($confirmationRequired) && !is_bool($confirmationRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($confirmationRequired, true), gettype($confirmationRequired)), __LINE__);
        }
        $this->confirmationRequired = $confirmationRequired;
        
        return $this;
    }
    /**
     * Get contractTime value
     * @return string|null
     */
    public function getContractTime(): ?string
    {
        return $this->contractTime;
    }
    /**
     * Set contractTime value
     * @param string $contractTime
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setContractTime(?string $contractTime = null): self
    {
        // validation for constraint: string
        if (!is_null($contractTime) && !is_string($contractTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractTime, true), gettype($contractTime)), __LINE__);
        }
        $this->contractTime = $contractTime;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get costUnit value
     * @return string|null
     */
    public function getCostUnit(): ?string
    {
        return $this->costUnit;
    }
    /**
     * Set costUnit value
     * @param string $costUnit
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCostUnit(?string $costUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($costUnit) && !is_string($costUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costUnit, true), gettype($costUnit)), __LINE__);
        }
        $this->costUnit = $costUnit;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get customerConfReceived value
     * @return bool|null
     */
    public function getCustomerConfReceived(): ?bool
    {
        return $this->customerConfReceived;
    }
    /**
     * Set customerConfReceived value
     * @param bool $customerConfReceived
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCustomerConfReceived(?bool $customerConfReceived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customerConfReceived) && !is_bool($customerConfReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerConfReceived, true), gettype($customerConfReceived)), __LINE__);
        }
        $this->customerConfReceived = $customerConfReceived;
        
        return $this;
    }
    /**
     * Get customerConfRequired value
     * @return bool|null
     */
    public function getCustomerConfRequired(): ?bool
    {
        return $this->customerConfRequired;
    }
    /**
     * Set customerConfRequired value
     * @param bool $customerConfRequired
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setCustomerConfRequired(?bool $customerConfRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customerConfRequired) && !is_bool($customerConfRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerConfRequired, true), gettype($customerConfRequired)), __LINE__);
        }
        $this->customerConfRequired = $customerConfRequired;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get deposit value
     * @return float|null
     */
    public function getDeposit(): ?float
    {
        return $this->deposit;
    }
    /**
     * Set deposit value
     * @param float $deposit
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setDeposit(?float $deposit = null): self
    {
        // validation for constraint: float
        if (!is_null($deposit) && !(is_float($deposit) || is_numeric($deposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deposit, true), gettype($deposit)), __LINE__);
        }
        $this->deposit = $deposit;
        
        return $this;
    }
    /**
     * Get depositBase value
     * @return float|null
     */
    public function getDepositBase(): ?float
    {
        return $this->depositBase;
    }
    /**
     * Set depositBase value
     * @param float $depositBase
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setDepositBase(?float $depositBase = null): self
    {
        // validation for constraint: float
        if (!is_null($depositBase) && !(is_float($depositBase) || is_numeric($depositBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositBase, true), gettype($depositBase)), __LINE__);
        }
        $this->depositBase = $depositBase;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get depositPercent value
     * @return float|null
     */
    public function getDepositPercent(): ?float
    {
        return $this->depositPercent;
    }
    /**
     * Set depositPercent value
     * @param float $depositPercent
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setDepositPercent(?float $depositPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($depositPercent) && !(is_float($depositPercent) || is_numeric($depositPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositPercent, true), gettype($depositPercent)), __LINE__);
        }
        $this->depositPercent = $depositPercent;
        
        return $this;
    }
    /**
     * Get depositPreset value
     * @return bool|null
     */
    public function getDepositPreset(): ?bool
    {
        return $this->depositPreset;
    }
    /**
     * Set depositPreset value
     * @param bool $depositPreset
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setDepositPreset(?bool $depositPreset = null): self
    {
        // validation for constraint: boolean
        if (!is_null($depositPreset) && !is_bool($depositPreset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($depositPreset, true), gettype($depositPreset)), __LINE__);
        }
        $this->depositPreset = $depositPreset;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get destinationArea value
     * @return string|null
     */
    public function getDestinationArea(): ?string
    {
        return $this->destinationArea;
    }
    /**
     * Set destinationArea value
     * @param string $destinationArea
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setDestinationArea(?string $destinationArea = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationArea) && !is_string($destinationArea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationArea, true), gettype($destinationArea)), __LINE__);
        }
        $this->destinationArea = $destinationArea;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get displayedDeposit value
     * @return float|null
     */
    public function getDisplayedDeposit(): ?float
    {
        return $this->displayedDeposit;
    }
    /**
     * Set displayedDeposit value
     * @param float $displayedDeposit
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setDisplayedDeposit(?float $displayedDeposit = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedDeposit) && !(is_float($displayedDeposit) || is_numeric($displayedDeposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedDeposit, true), gettype($displayedDeposit)), __LINE__);
        }
        $this->displayedDeposit = $displayedDeposit;
        
        return $this;
    }
    /**
     * Get dunningStornoIgnore value
     * @return bool|null
     */
    public function getDunningStornoIgnore(): ?bool
    {
        return $this->dunningStornoIgnore;
    }
    /**
     * Set dunningStornoIgnore value
     * @param bool $dunningStornoIgnore
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setDunningStornoIgnore(?bool $dunningStornoIgnore = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dunningStornoIgnore) && !is_bool($dunningStornoIgnore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dunningStornoIgnore, true), gettype($dunningStornoIgnore)), __LINE__);
        }
        $this->dunningStornoIgnore = $dunningStornoIgnore;
        
        return $this;
    }
    /**
     * Get exportDate value
     * @return string|null
     */
    public function getExportDate(): ?string
    {
        return $this->exportDate;
    }
    /**
     * Set exportDate value
     * @param string $exportDate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setExportDate(?string $exportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDate) && !is_string($exportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDate, true), gettype($exportDate)), __LINE__);
        }
        $this->exportDate = $exportDate;
        
        return $this;
    }
    /**
     * Get exportRequired value
     * @return bool|null
     */
    public function getExportRequired(): ?bool
    {
        return $this->exportRequired;
    }
    /**
     * Set exportRequired value
     * @param bool $exportRequired
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setExportRequired(?bool $exportRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportRequired) && !is_bool($exportRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportRequired, true), gettype($exportRequired)), __LINE__);
        }
        $this->exportRequired = $exportRequired;
        
        return $this;
    }
    /**
     * Get extPaymentType value
     * @return string|null
     */
    public function getExtPaymentType(): ?string
    {
        return $this->extPaymentType;
    }
    /**
     * Set extPaymentType value
     * @param string $extPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setExtPaymentType(?string $extPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($extPaymentType) && !is_string($extPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extPaymentType, true), gettype($extPaymentType)), __LINE__);
        }
        $this->extPaymentType = $extPaymentType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get geographicalCategory value
     * @return string|null
     */
    public function getGeographicalCategory(): ?string
    {
        return $this->geographicalCategory;
    }
    /**
     * Set geographicalCategory value
     * @param string $geographicalCategory
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setGeographicalCategory(?string $geographicalCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($geographicalCategory) && !is_string($geographicalCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geographicalCategory, true), gettype($geographicalCategory)), __LINE__);
        }
        $this->geographicalCategory = $geographicalCategory;
        
        return $this;
    }
    /**
     * Get grantedRevenue value
     * @return float|null
     */
    public function getGrantedRevenue(): ?float
    {
        return $this->grantedRevenue;
    }
    /**
     * Set grantedRevenue value
     * @param float $grantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setGrantedRevenue(?float $grantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenue) && !(is_float($grantedRevenue) || is_numeric($grantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenue, true), gettype($grantedRevenue)), __LINE__);
        }
        $this->grantedRevenue = $grantedRevenue;
        
        return $this;
    }
    /**
     * Get hasSubItems value
     * @return bool|null
     */
    public function getHasSubItems(): ?bool
    {
        return $this->hasSubItems;
    }
    /**
     * Set hasSubItems value
     * @param bool $hasSubItems
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setHasSubItems(?bool $hasSubItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasSubItems) && !is_bool($hasSubItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasSubItems, true), gettype($hasSubItems)), __LINE__);
        }
        $this->hasSubItems = $hasSubItems;
        
        return $this;
    }
    /**
     * Get hideServicePrices value
     * @return bool|null
     */
    public function getHideServicePrices(): ?bool
    {
        return $this->hideServicePrices;
    }
    /**
     * Set hideServicePrices value
     * @param bool $hideServicePrices
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setHideServicePrices(?bool $hideServicePrices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hideServicePrices) && !is_bool($hideServicePrices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideServicePrices, true), gettype($hideServicePrices)), __LINE__);
        }
        $this->hideServicePrices = $hideServicePrices;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setImmediatePayment(?bool $immediatePayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($immediatePayment) && !is_bool($immediatePayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($immediatePayment, true), gettype($immediatePayment)), __LINE__);
        }
        $this->immediatePayment = $immediatePayment;
        
        return $this;
    }
    /**
     * Get initialPrice value
     * @return float|null
     */
    public function getInitialPrice(): ?float
    {
        return $this->initialPrice;
    }
    /**
     * Set initialPrice value
     * @param float $initialPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setInitialPrice(?float $initialPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($initialPrice) && !(is_float($initialPrice) || is_numeric($initialPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($initialPrice, true), gettype($initialPrice)), __LINE__);
        }
        $this->initialPrice = $initialPrice;
        
        return $this;
    }
    /**
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get isChanged value
     * @return bool|null
     */
    public function getIsChanged(): ?bool
    {
        return $this->isChanged;
    }
    /**
     * Set isChanged value
     * @param bool $isChanged
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setIsChanged(?bool $isChanged = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isChanged) && !is_bool($isChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isChanged, true), gettype($isChanged)), __LINE__);
        }
        $this->isChanged = $isChanged;
        
        return $this;
    }
    /**
     * Get isFeeTaxable value
     * @return bool|null
     */
    public function getIsFeeTaxable(): ?bool
    {
        return $this->isFeeTaxable;
    }
    /**
     * Set isFeeTaxable value
     * @param bool $isFeeTaxable
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setIsFeeTaxable(?bool $isFeeTaxable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFeeTaxable) && !is_bool($isFeeTaxable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFeeTaxable, true), gettype($isFeeTaxable)), __LINE__);
        }
        $this->isFeeTaxable = $isFeeTaxable;
        
        return $this;
    }
    /**
     * Get isManual value
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
    /**
     * Set isManual value
     * @param bool $isManual
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setIsManual(?bool $isManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManual) && !is_bool($isManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManual, true), gettype($isManual)), __LINE__);
        }
        $this->isManual = $isManual;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get itemParent value
     * @return int|null
     */
    public function getItemParent(): ?int
    {
        return $this->itemParent;
    }
    /**
     * Set itemParent value
     * @param int $itemParent
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setItemParent(?int $itemParent = null): self
    {
        // validation for constraint: int
        if (!is_null($itemParent) && !(is_int($itemParent) || ctype_digit($itemParent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemParent, true), gettype($itemParent)), __LINE__);
        }
        $this->itemParent = $itemParent;
        
        return $this;
    }
    /**
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get lockIndicator value
     * @return int|null
     */
    public function getLockIndicator(): ?int
    {
        return $this->lockIndicator;
    }
    /**
     * Set lockIndicator value
     * @param int $lockIndicator
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setLockIndicator(?int $lockIndicator = null): self
    {
        // validation for constraint: int
        if (!is_null($lockIndicator) && !(is_int($lockIndicator) || ctype_digit($lockIndicator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lockIndicator, true), gettype($lockIndicator)), __LINE__);
        }
        $this->lockIndicator = $lockIndicator;
        
        return $this;
    }
    /**
     * Get manualRevenue value
     * @return bool|null
     */
    public function getManualRevenue(): ?bool
    {
        return $this->manualRevenue;
    }
    /**
     * Set manualRevenue value
     * @param bool $manualRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setManualRevenue(?bool $manualRevenue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manualRevenue) && !is_bool($manualRevenue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manualRevenue, true), gettype($manualRevenue)), __LINE__);
        }
        $this->manualRevenue = $manualRevenue;
        
        return $this;
    }
    /**
     * Get mediatorFeeAmount value
     * @return float|null
     */
    public function getMediatorFeeAmount(): ?float
    {
        return $this->mediatorFeeAmount;
    }
    /**
     * Set mediatorFeeAmount value
     * @param float $mediatorFeeAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setMediatorFeeAmount(?float $mediatorFeeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($mediatorFeeAmount) && !(is_float($mediatorFeeAmount) || is_numeric($mediatorFeeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediatorFeeAmount, true), gettype($mediatorFeeAmount)), __LINE__);
        }
        $this->mediatorFeeAmount = $mediatorFeeAmount;
        
        return $this;
    }
    /**
     * Get mobilityIndicator value
     * @return bool|null
     */
    public function getMobilityIndicator(): ?bool
    {
        return $this->mobilityIndicator;
    }
    /**
     * Set mobilityIndicator value
     * @param bool $mobilityIndicator
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setMobilityIndicator(?bool $mobilityIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mobilityIndicator) && !is_bool($mobilityIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mobilityIndicator, true), gettype($mobilityIndicator)), __LINE__);
        }
        $this->mobilityIndicator = $mobilityIndicator;
        
        return $this;
    }
    /**
     * Get modeRevenueCalculation value
     * @return string|null
     */
    public function getModeRevenueCalculation(): ?string
    {
        return $this->modeRevenueCalculation;
    }
    /**
     * Set modeRevenueCalculation value
     * @param string $modeRevenueCalculation
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setModeRevenueCalculation(?string $modeRevenueCalculation = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRevenueCalculation) && !is_string($modeRevenueCalculation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRevenueCalculation, true), gettype($modeRevenueCalculation)), __LINE__);
        }
        $this->modeRevenueCalculation = $modeRevenueCalculation;
        
        return $this;
    }
    /**
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get needsCommissionSettlement value
     * @return bool|null
     */
    public function getNeedsCommissionSettlement(): ?bool
    {
        return $this->needsCommissionSettlement;
    }
    /**
     * Set needsCommissionSettlement value
     * @param bool $needsCommissionSettlement
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setNeedsCommissionSettlement(?bool $needsCommissionSettlement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsCommissionSettlement) && !is_bool($needsCommissionSettlement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsCommissionSettlement, true), gettype($needsCommissionSettlement)), __LINE__);
        }
        $this->needsCommissionSettlement = $needsCommissionSettlement;
        
        return $this;
    }
    /**
     * Get needsInvoicePrint value
     * @return bool|null
     */
    public function getNeedsInvoicePrint(): ?bool
    {
        return $this->needsInvoicePrint;
    }
    /**
     * Set needsInvoicePrint value
     * @param bool $needsInvoicePrint
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setNeedsInvoicePrint(?bool $needsInvoicePrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsInvoicePrint) && !is_bool($needsInvoicePrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsInvoicePrint, true), gettype($needsInvoicePrint)), __LINE__);
        }
        $this->needsInvoicePrint = $needsInvoicePrint;
        
        return $this;
    }
    /**
     * Get needsSettlement value
     * @return bool|null
     */
    public function getNeedsSettlement(): ?bool
    {
        return $this->needsSettlement;
    }
    /**
     * Set needsSettlement value
     * @param bool $needsSettlement
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setNeedsSettlement(?bool $needsSettlement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsSettlement) && !is_bool($needsSettlement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsSettlement, true), gettype($needsSettlement)), __LINE__);
        }
        $this->needsSettlement = $needsSettlement;
        
        return $this;
    }
    /**
     * Get needsVatDivisionIncoming value
     * @return bool|null
     */
    public function getNeedsVatDivisionIncoming(): ?bool
    {
        return $this->needsVatDivisionIncoming;
    }
    /**
     * Set needsVatDivisionIncoming value
     * @param bool $needsVatDivisionIncoming
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setNeedsVatDivisionIncoming(?bool $needsVatDivisionIncoming = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsVatDivisionIncoming) && !is_bool($needsVatDivisionIncoming)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsVatDivisionIncoming, true), gettype($needsVatDivisionIncoming)), __LINE__);
        }
        $this->needsVatDivisionIncoming = $needsVatDivisionIncoming;
        
        return $this;
    }
    /**
     * Get needsVatDivisionOutgoing value
     * @return bool|null
     */
    public function getNeedsVatDivisionOutgoing(): ?bool
    {
        return $this->needsVatDivisionOutgoing;
    }
    /**
     * Set needsVatDivisionOutgoing value
     * @param bool $needsVatDivisionOutgoing
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setNeedsVatDivisionOutgoing(?bool $needsVatDivisionOutgoing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsVatDivisionOutgoing) && !is_bool($needsVatDivisionOutgoing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsVatDivisionOutgoing, true), gettype($needsVatDivisionOutgoing)), __LINE__);
        }
        $this->needsVatDivisionOutgoing = $needsVatDivisionOutgoing;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get oldOrderNo value
     * @return int|null
     */
    public function getOldOrderNo(): ?int
    {
        return $this->oldOrderNo;
    }
    /**
     * Set oldOrderNo value
     * @param int $oldOrderNo
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setOldOrderNo(?int $oldOrderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($oldOrderNo) && !(is_int($oldOrderNo) || ctype_digit($oldOrderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($oldOrderNo, true), gettype($oldOrderNo)), __LINE__);
        }
        $this->oldOrderNo = $oldOrderNo;
        
        return $this;
    }
    /**
     * Get oldUnitName value
     * @return string|null
     */
    public function getOldUnitName(): ?string
    {
        return $this->oldUnitName;
    }
    /**
     * Set oldUnitName value
     * @param string $oldUnitName
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setOldUnitName(?string $oldUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($oldUnitName) && !is_string($oldUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldUnitName, true), gettype($oldUnitName)), __LINE__);
        }
        $this->oldUnitName = $oldUnitName;
        
        return $this;
    }
    /**
     * Get opicCode value
     * @return int|null
     */
    public function getOpicCode(): ?int
    {
        return $this->opicCode;
    }
    /**
     * Set opicCode value
     * @param int $opicCode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setOpicCode(?int $opicCode = null): self
    {
        // validation for constraint: int
        if (!is_null($opicCode) && !(is_int($opicCode) || ctype_digit($opicCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($opicCode, true), gettype($opicCode)), __LINE__);
        }
        $this->opicCode = $opicCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get originalCalculatedRevenue value
     * @return float|null
     */
    public function getOriginalCalculatedRevenue(): ?float
    {
        return $this->originalCalculatedRevenue;
    }
    /**
     * Set originalCalculatedRevenue value
     * @param float $originalCalculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setOriginalCalculatedRevenue(?float $originalCalculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($originalCalculatedRevenue) && !(is_float($originalCalculatedRevenue) || is_numeric($originalCalculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalCalculatedRevenue, true), gettype($originalCalculatedRevenue)), __LINE__);
        }
        $this->originalCalculatedRevenue = $originalCalculatedRevenue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get originalGrantedRevenue value
     * @return float|null
     */
    public function getOriginalGrantedRevenue(): ?float
    {
        return $this->originalGrantedRevenue;
    }
    /**
     * Set originalGrantedRevenue value
     * @param float $originalGrantedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setOriginalGrantedRevenue(?float $originalGrantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($originalGrantedRevenue) && !(is_float($originalGrantedRevenue) || is_numeric($originalGrantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalGrantedRevenue, true), gettype($originalGrantedRevenue)), __LINE__);
        }
        $this->originalGrantedRevenue = $originalGrantedRevenue;
        
        return $this;
    }
    /**
     * Get originalSupplierCommissionAmount value
     * @return float|null
     */
    public function getOriginalSupplierCommissionAmount(): ?float
    {
        return $this->originalSupplierCommissionAmount;
    }
    /**
     * Set originalSupplierCommissionAmount value
     * @param float $originalSupplierCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setOriginalSupplierCommissionAmount(?float $originalSupplierCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalSupplierCommissionAmount) && !(is_float($originalSupplierCommissionAmount) || is_numeric($originalSupplierCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalSupplierCommissionAmount, true), gettype($originalSupplierCommissionAmount)), __LINE__);
        }
        $this->originalSupplierCommissionAmount = $originalSupplierCommissionAmount;
        
        return $this;
    }
    /**
     * Get paidMediatorAmount value
     * @return float|null
     */
    public function getPaidMediatorAmount(): ?float
    {
        return $this->paidMediatorAmount;
    }
    /**
     * Set paidMediatorAmount value
     * @param float $paidMediatorAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setPaidMediatorAmount(?float $paidMediatorAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidMediatorAmount) && !(is_float($paidMediatorAmount) || is_numeric($paidMediatorAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidMediatorAmount, true), gettype($paidMediatorAmount)), __LINE__);
        }
        $this->paidMediatorAmount = $paidMediatorAmount;
        
        return $this;
    }
    /**
     * Get paidMediatorFeeAmount value
     * @return float|null
     */
    public function getPaidMediatorFeeAmount(): ?float
    {
        return $this->paidMediatorFeeAmount;
    }
    /**
     * Set paidMediatorFeeAmount value
     * @param float $paidMediatorFeeAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setPaidMediatorFeeAmount(?float $paidMediatorFeeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidMediatorFeeAmount) && !(is_float($paidMediatorFeeAmount) || is_numeric($paidMediatorFeeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidMediatorFeeAmount, true), gettype($paidMediatorFeeAmount)), __LINE__);
        }
        $this->paidMediatorFeeAmount = $paidMediatorFeeAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get preventAutoVatDivision value
     * @return bool|null
     */
    public function getPreventAutoVatDivision(): ?bool
    {
        return $this->preventAutoVatDivision;
    }
    /**
     * Set preventAutoVatDivision value
     * @param bool $preventAutoVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setPreventAutoVatDivision(?bool $preventAutoVatDivision = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventAutoVatDivision) && !is_bool($preventAutoVatDivision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventAutoVatDivision, true), gettype($preventAutoVatDivision)), __LINE__);
        }
        $this->preventAutoVatDivision = $preventAutoVatDivision;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setPreventPrinting(?bool $preventPrinting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventPrinting) && !is_bool($preventPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventPrinting, true), gettype($preventPrinting)), __LINE__);
        }
        $this->preventPrinting = $preventPrinting;
        
        return $this;
    }
    /**
     * Get pricePrintStrategy value
     * @return string|null
     */
    public function getPricePrintStrategy(): ?string
    {
        return $this->pricePrintStrategy;
    }
    /**
     * Set pricePrintStrategy value
     * @param string $pricePrintStrategy
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setPricePrintStrategy(?string $pricePrintStrategy = null): self
    {
        // validation for constraint: string
        if (!is_null($pricePrintStrategy) && !is_string($pricePrintStrategy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pricePrintStrategy, true), gettype($pricePrintStrategy)), __LINE__);
        }
        $this->pricePrintStrategy = $pricePrintStrategy;
        
        return $this;
    }
    /**
     * Get printOptionId value
     * @return int|null
     */
    public function getPrintOptionId(): ?int
    {
        return $this->printOptionId;
    }
    /**
     * Set printOptionId value
     * @param int $printOptionId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setPrintOptionId(?int $printOptionId = null): self
    {
        // validation for constraint: int
        if (!is_null($printOptionId) && !(is_int($printOptionId) || ctype_digit($printOptionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printOptionId, true), gettype($printOptionId)), __LINE__);
        }
        $this->printOptionId = $printOptionId;
        
        return $this;
    }
    /**
     * Get printVat value
     * @return bool|null
     */
    public function getPrintVat(): ?bool
    {
        return $this->printVat;
    }
    /**
     * Set printVat value
     * @param bool $printVat
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setPrintVat(?bool $printVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printVat) && !is_bool($printVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printVat, true), gettype($printVat)), __LINE__);
        }
        $this->printVat = $printVat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get providedCommissionOption value
     * @return string|null
     */
    public function getProvidedCommissionOption(): ?string
    {
        return $this->providedCommissionOption;
    }
    /**
     * Set providedCommissionOption value
     * @param string $providedCommissionOption
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setProvidedCommissionOption(?string $providedCommissionOption = null): self
    {
        // validation for constraint: string
        if (!is_null($providedCommissionOption) && !is_string($providedCommissionOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providedCommissionOption, true), gettype($providedCommissionOption)), __LINE__);
        }
        $this->providedCommissionOption = $providedCommissionOption;
        
        return $this;
    }
    /**
     * Get rateRevenueCalculation value
     * @return float|null
     */
    public function getRateRevenueCalculation(): ?float
    {
        return $this->rateRevenueCalculation;
    }
    /**
     * Set rateRevenueCalculation value
     * @param float $rateRevenueCalculation
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setRateRevenueCalculation(?float $rateRevenueCalculation = null): self
    {
        // validation for constraint: float
        if (!is_null($rateRevenueCalculation) && !(is_float($rateRevenueCalculation) || is_numeric($rateRevenueCalculation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rateRevenueCalculation, true), gettype($rateRevenueCalculation)), __LINE__);
        }
        $this->rateRevenueCalculation = $rateRevenueCalculation;
        
        return $this;
    }
    /**
     * Get receivedStatus value
     * @return string|null
     */
    public function getReceivedStatus(): ?string
    {
        return $this->receivedStatus;
    }
    /**
     * Set receivedStatus value
     * @param string $receivedStatus
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setReceivedStatus(?string $receivedStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($receivedStatus) && !is_string($receivedStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivedStatus, true), gettype($receivedStatus)), __LINE__);
        }
        $this->receivedStatus = $receivedStatus;
        
        return $this;
    }
    /**
     * Get receivedStatusDate value
     * @return string|null
     */
    public function getReceivedStatusDate(): ?string
    {
        return $this->receivedStatusDate;
    }
    /**
     * Set receivedStatusDate value
     * @param string $receivedStatusDate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setReceivedStatusDate(?string $receivedStatusDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receivedStatusDate) && !is_string($receivedStatusDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivedStatusDate, true), gettype($receivedStatusDate)), __LINE__);
        }
        $this->receivedStatusDate = $receivedStatusDate;
        
        return $this;
    }
    /**
     * Get reducedVatFraction value
     * @return float|null
     */
    public function getReducedVatFraction(): ?float
    {
        return $this->reducedVatFraction;
    }
    /**
     * Set reducedVatFraction value
     * @param float $reducedVatFraction
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setReducedVatFraction(?float $reducedVatFraction = null): self
    {
        // validation for constraint: float
        if (!is_null($reducedVatFraction) && !(is_float($reducedVatFraction) || is_numeric($reducedVatFraction))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($reducedVatFraction, true), gettype($reducedVatFraction)), __LINE__);
        }
        $this->reducedVatFraction = $reducedVatFraction;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get revenueBase value
     * @return float|null
     */
    public function getRevenueBase(): ?float
    {
        return $this->revenueBase;
    }
    /**
     * Set revenueBase value
     * @param float $revenueBase
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setRevenueBase(?float $revenueBase = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueBase) && !(is_float($revenueBase) || is_numeric($revenueBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueBase, true), gettype($revenueBase)), __LINE__);
        }
        $this->revenueBase = $revenueBase;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get revenuePredefined value
     * @return bool|null
     */
    public function getRevenuePredefined(): ?bool
    {
        return $this->revenuePredefined;
    }
    /**
     * Set revenuePredefined value
     * @param bool $revenuePredefined
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setRevenuePredefined(?bool $revenuePredefined = null): self
    {
        // validation for constraint: boolean
        if (!is_null($revenuePredefined) && !is_bool($revenuePredefined)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($revenuePredefined, true), gettype($revenuePredefined)), __LINE__);
        }
        $this->revenuePredefined = $revenuePredefined;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get salePrice value
     * @return float|null
     */
    public function getSalePrice(): ?float
    {
        return $this->salePrice;
    }
    /**
     * Set salePrice value
     * @param float $salePrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSalePrice(?float $salePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($salePrice) && !(is_float($salePrice) || is_numeric($salePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePrice, true), gettype($salePrice)), __LINE__);
        }
        $this->salePrice = $salePrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get sellingModeDetermination value
     * @return string|null
     */
    public function getSellingModeDetermination(): ?string
    {
        return $this->sellingModeDetermination;
    }
    /**
     * Set sellingModeDetermination value
     * @param string $sellingModeDetermination
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSellingModeDetermination(?string $sellingModeDetermination = null): self
    {
        // validation for constraint: string
        if (!is_null($sellingModeDetermination) && !is_string($sellingModeDetermination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellingModeDetermination, true), gettype($sellingModeDetermination)), __LINE__);
        }
        $this->sellingModeDetermination = $sellingModeDetermination;
        
        return $this;
    }
    /**
     * Get separatedFee value
     * @return bool|null
     */
    public function getSeparatedFee(): ?bool
    {
        return $this->separatedFee;
    }
    /**
     * Set separatedFee value
     * @param bool $separatedFee
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSeparatedFee(?bool $separatedFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($separatedFee) && !is_bool($separatedFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($separatedFee, true), gettype($separatedFee)), __LINE__);
        }
        $this->separatedFee = $separatedFee;
        
        return $this;
    }
    /**
     * Get settlementBase value
     * @return float|null
     */
    public function getSettlementBase(): ?float
    {
        return $this->settlementBase;
    }
    /**
     * Set settlementBase value
     * @param float $settlementBase
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSettlementBase(?float $settlementBase = null): self
    {
        // validation for constraint: float
        if (!is_null($settlementBase) && !(is_float($settlementBase) || is_numeric($settlementBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($settlementBase, true), gettype($settlementBase)), __LINE__);
        }
        $this->settlementBase = $settlementBase;
        
        return $this;
    }
    /**
     * Get settlementDone value
     * @return bool|null
     */
    public function getSettlementDone(): ?bool
    {
        return $this->settlementDone;
    }
    /**
     * Set settlementDone value
     * @param bool $settlementDone
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSettlementDone(?bool $settlementDone = null): self
    {
        // validation for constraint: boolean
        if (!is_null($settlementDone) && !is_bool($settlementDone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($settlementDone, true), gettype($settlementDone)), __LINE__);
        }
        $this->settlementDone = $settlementDone;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get settlementTypeDebit value
     * @return string|null
     */
    public function getSettlementTypeDebit(): ?string
    {
        return $this->settlementTypeDebit;
    }
    /**
     * Set settlementTypeDebit value
     * @param string $settlementTypeDebit
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSettlementTypeDebit(?string $settlementTypeDebit = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementTypeDebit) && !is_string($settlementTypeDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementTypeDebit, true), gettype($settlementTypeDebit)), __LINE__);
        }
        $this->settlementTypeDebit = $settlementTypeDebit;
        
        return $this;
    }
    /**
     * Get showInInbox value
     * @return bool|null
     */
    public function getShowInInbox(): ?bool
    {
        return $this->showInInbox;
    }
    /**
     * Set showInInbox value
     * @param bool $showInInbox
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setShowInInbox(?bool $showInInbox = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showInInbox) && !is_bool($showInInbox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showInInbox, true), gettype($showInInbox)), __LINE__);
        }
        $this->showInInbox = $showInInbox;
        
        return $this;
    }
    /**
     * Get stornoConfReceived value
     * @return bool|null
     */
    public function getStornoConfReceived(): ?bool
    {
        return $this->stornoConfReceived;
    }
    /**
     * Set stornoConfReceived value
     * @param bool $stornoConfReceived
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setStornoConfReceived(?bool $stornoConfReceived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($stornoConfReceived) && !is_bool($stornoConfReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stornoConfReceived, true), gettype($stornoConfReceived)), __LINE__);
        }
        $this->stornoConfReceived = $stornoConfReceived;
        
        return $this;
    }
    /**
     * Get stornoConfRequired value
     * @return bool|null
     */
    public function getStornoConfRequired(): ?bool
    {
        return $this->stornoConfRequired;
    }
    /**
     * Set stornoConfRequired value
     * @param bool $stornoConfRequired
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setStornoConfRequired(?bool $stornoConfRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($stornoConfRequired) && !is_bool($stornoConfRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stornoConfRequired, true), gettype($stornoConfRequired)), __LINE__);
        }
        $this->stornoConfRequired = $stornoConfRequired;
        
        return $this;
    }
    /**
     * Get supplierCommissionAmount value
     * @return float|null
     */
    public function getSupplierCommissionAmount(): ?float
    {
        return $this->supplierCommissionAmount;
    }
    /**
     * Set supplierCommissionAmount value
     * @param float $supplierCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSupplierCommissionAmount(?float $supplierCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierCommissionAmount) && !(is_float($supplierCommissionAmount) || is_numeric($supplierCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierCommissionAmount, true), gettype($supplierCommissionAmount)), __LINE__);
        }
        $this->supplierCommissionAmount = $supplierCommissionAmount;
        
        return $this;
    }
    /**
     * Get supplierDeposit value
     * @return float|null
     */
    public function getSupplierDeposit(): ?float
    {
        return $this->supplierDeposit;
    }
    /**
     * Set supplierDeposit value
     * @param float $supplierDeposit
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSupplierDeposit(?float $supplierDeposit = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierDeposit) && !(is_float($supplierDeposit) || is_numeric($supplierDeposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierDeposit, true), gettype($supplierDeposit)), __LINE__);
        }
        $this->supplierDeposit = $supplierDeposit;
        
        return $this;
    }
    /**
     * Get supplierDepositDate value
     * @return string|null
     */
    public function getSupplierDepositDate(): ?string
    {
        return $this->supplierDepositDate;
    }
    /**
     * Set supplierDepositDate value
     * @param string $supplierDepositDate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSupplierDepositDate(?string $supplierDepositDate = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierDepositDate) && !is_string($supplierDepositDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierDepositDate, true), gettype($supplierDepositDate)), __LINE__);
        }
        $this->supplierDepositDate = $supplierDepositDate;
        
        return $this;
    }
    /**
     * Get supplierFinalPaymentDate value
     * @return string|null
     */
    public function getSupplierFinalPaymentDate(): ?string
    {
        return $this->supplierFinalPaymentDate;
    }
    /**
     * Set supplierFinalPaymentDate value
     * @param string $supplierFinalPaymentDate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSupplierFinalPaymentDate(?string $supplierFinalPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierFinalPaymentDate) && !is_string($supplierFinalPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierFinalPaymentDate, true), gettype($supplierFinalPaymentDate)), __LINE__);
        }
        $this->supplierFinalPaymentDate = $supplierFinalPaymentDate;
        
        return $this;
    }
    /**
     * Get supplierInvoiceAmount value
     * @return float|null
     */
    public function getSupplierInvoiceAmount(): ?float
    {
        return $this->supplierInvoiceAmount;
    }
    /**
     * Set supplierInvoiceAmount value
     * @param float $supplierInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSupplierInvoiceAmount(?float $supplierInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoiceAmount) && !(is_float($supplierInvoiceAmount) || is_numeric($supplierInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoiceAmount, true), gettype($supplierInvoiceAmount)), __LINE__);
        }
        $this->supplierInvoiceAmount = $supplierInvoiceAmount;
        
        return $this;
    }
    /**
     * Get supplierInvoicePaid value
     * @return bool|null
     */
    public function getSupplierInvoicePaid(): ?bool
    {
        return $this->supplierInvoicePaid;
    }
    /**
     * Set supplierInvoicePaid value
     * @param bool $supplierInvoicePaid
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setSupplierInvoicePaid(?bool $supplierInvoicePaid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($supplierInvoicePaid) && !is_bool($supplierInvoicePaid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($supplierInvoicePaid, true), gettype($supplierInvoicePaid)), __LINE__);
        }
        $this->supplierInvoicePaid = $supplierInvoicePaid;
        
        return $this;
    }
    /**
     * Get taxPartPercent value
     * @return float|null
     */
    public function getTaxPartPercent(): ?float
    {
        return $this->taxPartPercent;
    }
    /**
     * Set taxPartPercent value
     * @param float $taxPartPercent
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setTaxPartPercent(?float $taxPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($taxPartPercent) && !(is_float($taxPartPercent) || is_numeric($taxPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxPartPercent, true), gettype($taxPartPercent)), __LINE__);
        }
        $this->taxPartPercent = $taxPartPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get turnaroundPoint value
     * @return string|null
     */
    public function getTurnaroundPoint(): ?string
    {
        return $this->turnaroundPoint;
    }
    /**
     * Set turnaroundPoint value
     * @param string $turnaroundPoint
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setTurnaroundPoint(?string $turnaroundPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($turnaroundPoint) && !is_string($turnaroundPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($turnaroundPoint, true), gettype($turnaroundPoint)), __LINE__);
        }
        $this->turnaroundPoint = $turnaroundPoint;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * Get valueDateByInvoice value
     * @return bool|null
     */
    public function getValueDateByInvoice(): ?bool
    {
        return $this->valueDateByInvoice;
    }
    /**
     * Set valueDateByInvoice value
     * @param bool $valueDateByInvoice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setValueDateByInvoice(?bool $valueDateByInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($valueDateByInvoice) && !is_bool($valueDateByInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valueDateByInvoice, true), gettype($valueDateByInvoice)), __LINE__);
        }
        $this->valueDateByInvoice = $valueDateByInvoice;
        
        return $this;
    }
    /**
     * Get valueRevenueCalculation value
     * @return float|null
     */
    public function getValueRevenueCalculation(): ?float
    {
        return $this->valueRevenueCalculation;
    }
    /**
     * Set valueRevenueCalculation value
     * @param float $valueRevenueCalculation
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setValueRevenueCalculation(?float $valueRevenueCalculation = null): self
    {
        // validation for constraint: float
        if (!is_null($valueRevenueCalculation) && !(is_float($valueRevenueCalculation) || is_numeric($valueRevenueCalculation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valueRevenueCalculation, true), gettype($valueRevenueCalculation)), __LINE__);
        }
        $this->valueRevenueCalculation = $valueRevenueCalculation;
        
        return $this;
    }
    /**
     * Get vatDivisionChangeCustomer value
     * @return bool|null
     */
    public function getVatDivisionChangeCustomer(): ?bool
    {
        return $this->vatDivisionChangeCustomer;
    }
    /**
     * Set vatDivisionChangeCustomer value
     * @param bool $vatDivisionChangeCustomer
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setVatDivisionChangeCustomer(?bool $vatDivisionChangeCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatDivisionChangeCustomer) && !is_bool($vatDivisionChangeCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatDivisionChangeCustomer, true), gettype($vatDivisionChangeCustomer)), __LINE__);
        }
        $this->vatDivisionChangeCustomer = $vatDivisionChangeCustomer;
        
        return $this;
    }
    /**
     * Get vatDivisionChangeSupplier value
     * @return bool|null
     */
    public function getVatDivisionChangeSupplier(): ?bool
    {
        return $this->vatDivisionChangeSupplier;
    }
    /**
     * Set vatDivisionChangeSupplier value
     * @param bool $vatDivisionChangeSupplier
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setVatDivisionChangeSupplier(?bool $vatDivisionChangeSupplier = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatDivisionChangeSupplier) && !is_bool($vatDivisionChangeSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatDivisionChangeSupplier, true), gettype($vatDivisionChangeSupplier)), __LINE__);
        }
        $this->vatDivisionChangeSupplier = $vatDivisionChangeSupplier;
        
        return $this;
    }
    /**
     * Get vatDivisionChecked value
     * @return string|null
     */
    public function getVatDivisionChecked(): ?string
    {
        return $this->vatDivisionChecked;
    }
    /**
     * Set vatDivisionChecked value
     * @param string $vatDivisionChecked
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setVatDivisionChecked(?string $vatDivisionChecked = null): self
    {
        // validation for constraint: string
        if (!is_null($vatDivisionChecked) && !is_string($vatDivisionChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatDivisionChecked, true), gettype($vatDivisionChecked)), __LINE__);
        }
        $this->vatDivisionChecked = $vatDivisionChecked;
        
        return $this;
    }
    /**
     * Get vatDivisionCheckedBy value
     * @return int|null
     */
    public function getVatDivisionCheckedBy(): ?int
    {
        return $this->vatDivisionCheckedBy;
    }
    /**
     * Set vatDivisionCheckedBy value
     * @param int $vatDivisionCheckedBy
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setVatDivisionCheckedBy(?int $vatDivisionCheckedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($vatDivisionCheckedBy) && !(is_int($vatDivisionCheckedBy) || ctype_digit($vatDivisionCheckedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatDivisionCheckedBy, true), gettype($vatDivisionCheckedBy)), __LINE__);
        }
        $this->vatDivisionCheckedBy = $vatDivisionCheckedBy;
        
        return $this;
    }
    /**
     * Get vatDivisionComment value
     * @return string|null
     */
    public function getVatDivisionComment(): ?string
    {
        return $this->vatDivisionComment;
    }
    /**
     * Set vatDivisionComment value
     * @param string $vatDivisionComment
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setVatDivisionComment(?string $vatDivisionComment = null): self
    {
        // validation for constraint: string
        if (!is_null($vatDivisionComment) && !is_string($vatDivisionComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatDivisionComment, true), gettype($vatDivisionComment)), __LINE__);
        }
        $this->vatDivisionComment = $vatDivisionComment;
        
        return $this;
    }
    /**
     * Get vatDivisionType value
     * @return int|null
     */
    public function getVatDivisionType(): ?int
    {
        return $this->vatDivisionType;
    }
    /**
     * Set vatDivisionType value
     * @param int $vatDivisionType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
     */
    public function setVatDivisionType(?int $vatDivisionType = null): self
    {
        // validation for constraint: int
        if (!is_null($vatDivisionType) && !(is_int($vatDivisionType) || ctype_digit($vatDivisionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatDivisionType, true), gettype($vatDivisionType)), __LINE__);
        }
        $this->vatDivisionType = $vatDivisionType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDTO
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
}
