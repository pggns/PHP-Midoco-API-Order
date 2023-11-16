<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderDTO StructType
 * @subpackage Structs
 */
class OrderDTO extends AbstractStructBase
{
    /**
     * The agencyCurrency
     * @var string|null
     */
    protected ?string $agencyCurrency = null;
    /**
     * The agencyCustomerId
     * @var int|null
     */
    protected ?int $agencyCustomerId = null;
    /**
     * The agencyDebitorNo
     * @var string|null
     */
    protected ?string $agencyDebitorNo = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The bookingCurrencyRate
     * @var float|null
     */
    protected ?float $bookingCurrencyRate = null;
    /**
     * The calculatedMediatorTotal
     * @var float|null
     */
    protected ?float $calculatedMediatorTotal = null;
    /**
     * The catalogKey
     * @var bool|null
     */
    protected ?bool $catalogKey = null;
    /**
     * The collectiveBilling
     * @var bool|null
     */
    protected ?bool $collectiveBilling = null;
    /**
     * The commissionBaseAmount
     * @var float|null
     */
    protected ?float $commissionBaseAmount = null;
    /**
     * The companyUsage
     * @var bool|null
     */
    protected ?bool $companyUsage = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
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
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The currencyLookupMethod
     * @var int|null
     */
    protected ?int $currencyLookupMethod = null;
    /**
     * The customerCostCentre
     * @var string|null
     */
    protected ?string $customerCostCentre = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The deliveryType
     * @var string|null
     */
    protected ?string $deliveryType = null;
    /**
     * The deliveryTypeId
     * @var string|null
     */
    protected ?string $deliveryTypeId = null;
    /**
     * The department
     * @var string|null
     */
    protected ?string $department = null;
    /**
     * The depositAmount
     * @var float|null
     */
    protected ?float $depositAmount = null;
    /**
     * The depositDate
     * @var string|null
     */
    protected ?string $depositDate = null;
    /**
     * The depositDunningDate
     * @var string|null
     */
    protected ?string $depositDunningDate = null;
    /**
     * The depositPaymentDueDate
     * @var string|null
     */
    protected ?string $depositPaymentDueDate = null;
    /**
     * The depositPreset
     * @var bool|null
     */
    protected ?bool $depositPreset = null;
    /**
     * The depositReceived
     * @var bool|null
     */
    protected ?bool $depositReceived = null;
    /**
     * The depositReceivedDate
     * @var string|null
     */
    protected ?string $depositReceivedDate = null;
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * The displayedCurrency
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * The displayedCurrencyRate
     * @var float|null
     */
    protected ?float $displayedCurrencyRate = null;
    /**
     * The displayedDepositAmount
     * @var float|null
     */
    protected ?float $displayedDepositAmount = null;
    /**
     * The displayedInkassoPrice
     * @var float|null
     */
    protected ?float $displayedInkassoPrice = null;
    /**
     * The displayedTotalPayment
     * @var float|null
     */
    protected ?float $displayedTotalPayment = null;
    /**
     * The displayedTotalPrice
     * @var float|null
     */
    protected ?float $displayedTotalPrice = null;
    /**
     * The dunningDate
     * @var string|null
     */
    protected ?string $dunningDate = null;
    /**
     * The dunningLock
     * @var bool|null
     */
    protected ?bool $dunningLock = null;
    /**
     * The dunningPreset
     * @var bool|null
     */
    protected ?bool $dunningPreset = null;
    /**
     * The durationKey
     * @var string|null
     */
    protected ?string $durationKey = null;
    /**
     * The endTravelDate
     * @var string|null
     */
    protected ?string $endTravelDate = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorCodeParameters
     * @var string|null
     */
    protected ?string $errorCodeParameters = null;
    /**
     * The extBookingId
     * @var string|null
     */
    protected ?string $extBookingId = null;
    /**
     * The finalPayment
     * @var string|null
     */
    protected ?string $finalPayment = null;
    /**
     * The finalPaymentReceived
     * @var bool|null
     */
    protected ?bool $finalPaymentReceived = null;
    /**
     * The finalPaymentReceivedDate
     * @var string|null
     */
    protected ?string $finalPaymentReceivedDate = null;
    /**
     * The firstWorkTime
     * @var string|null
     */
    protected ?string $firstWorkTime = null;
    /**
     * The groupReservation
     * @var bool|null
     */
    protected ?bool $groupReservation = null;
    /**
     * The hasForeignDebitor
     * @var bool|null
     */
    protected ?bool $hasForeignDebitor = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The invoicingType
     * @var string|null
     */
    protected ?string $invoicingType = null;
    /**
     * The isOrderControlled
     * @var bool|null
     */
    protected ?bool $isOrderControlled = null;
    /**
     * The isReadonly
     * @var bool|null
     */
    protected ?bool $isReadonly = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The lastAgencySettlementPos
     * @var int|null
     */
    protected ?int $lastAgencySettlementPos = null;
    /**
     * The lastInkassoPrice
     * @var float|null
     */
    protected ?float $lastInkassoPrice = null;
    /**
     * The lastInvoiceId
     * @var int|null
     */
    protected ?int $lastInvoiceId = null;
    /**
     * The lastWorkingUser
     * @var int|null
     */
    protected ?int $lastWorkingUser = null;
    /**
     * The lastWorkingUserTimestamp
     * @var string|null
     */
    protected ?string $lastWorkingUserTimestamp = null;
    /**
     * The legalCountry
     * @var string|null
     */
    protected ?string $legalCountry = null;
    /**
     * The lockIndicator
     * @var int|null
     */
    protected ?int $lockIndicator = null;
    /**
     * The lockReason
     * @var string|null
     */
    protected ?string $lockReason = null;
    /**
     * The lockTimestamp
     * @var string|null
     */
    protected ?string $lockTimestamp = null;
    /**
     * The lockUser
     * @var int|null
     */
    protected ?int $lockUser = null;
    /**
     * The mainBookingId
     * @var string|null
     */
    protected ?string $mainBookingId = null;
    /**
     * The mainSupplierId
     * @var string|null
     */
    protected ?string $mainSupplierId = null;
    /**
     * The manualCommission
     * @var bool|null
     */
    protected ?bool $manualCommission = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * The mediatorCurrency
     * @var string|null
     */
    protected ?string $mediatorCurrency = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyTime
     * @var string|null
     */
    protected ?string $modifyTime = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The needsCommissionPrint
     * @var bool|null
     */
    protected ?bool $needsCommissionPrint = null;
    /**
     * The needsInvoicePrint
     * @var bool|null
     */
    protected ?bool $needsInvoicePrint = null;
    /**
     * The needsSellModeAssign
     * @var bool|null
     */
    protected ?bool $needsSellModeAssign = null;
    /**
     * The nonBookedVat
     * @var float|null
     */
    protected ?float $nonBookedVat = null;
    /**
     * The optionHandled
     * @var bool|null
     */
    protected ?bool $optionHandled = null;
    /**
     * The orderControlledBy
     * @var int|null
     */
    protected ?int $orderControlledBy = null;
    /**
     * The orderControlledTimestamp
     * @var string|null
     */
    protected ?string $orderControlledTimestamp = null;
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
     * The paymentDueDate
     * @var string|null
     */
    protected ?string $paymentDueDate = null;
    /**
     * The paymentExported
     * @var bool|null
     */
    protected ?bool $paymentExported = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The personsKey
     * @var string|null
     */
    protected ?string $personsKey = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The projectNo
     * @var string|null
     */
    protected ?string $projectNo = null;
    /**
     * The ranking
     * @var int|null
     */
    protected ?int $ranking = null;
    /**
     * The requestHandled
     * @var bool|null
     */
    protected ?bool $requestHandled = null;
    /**
     * The sellingType
     * @var int|null
     */
    protected ?int $sellingType = null;
    /**
     * The startTravelDate
     * @var string|null
     */
    protected ?string $startTravelDate = null;
    /**
     * The stornoHandled
     * @var bool|null
     */
    protected ?bool $stornoHandled = null;
    /**
     * The subAgencyId
     * @var string|null
     */
    protected ?string $subAgencyId = null;
    /**
     * The totalCommission
     * @var float|null
     */
    protected ?float $totalCommission = null;
    /**
     * The totalCommissionAgencyCurrency
     * @var float|null
     */
    protected ?float $totalCommissionAgencyCurrency = null;
    /**
     * The totalCommissionInsurance
     * @var float|null
     */
    protected ?float $totalCommissionInsurance = null;
    /**
     * The totalCommissionInsuranceAgencyCurrency
     * @var float|null
     */
    protected ?float $totalCommissionInsuranceAgencyCurrency = null;
    /**
     * The totalCommissionVat
     * @var float|null
     */
    protected ?float $totalCommissionVat = null;
    /**
     * The totalCommissionVatAgencyCurrency
     * @var float|null
     */
    protected ?float $totalCommissionVatAgencyCurrency = null;
    /**
     * The totalPayment
     * @var float|null
     */
    protected ?float $totalPayment = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The transportKey
     * @var string|null
     */
    protected ?string $transportKey = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The travelDocsDeliveryComm
     * @var string|null
     */
    protected ?string $travelDocsDeliveryComm = null;
    /**
     * The travelDocumentsDeliveredBy
     * @var int|null
     */
    protected ?int $travelDocumentsDeliveredBy = null;
    /**
     * The travelDocumentsDeliveryDate
     * @var string|null
     */
    protected ?string $travelDocumentsDeliveryDate = null;
    /**
     * The travelDocumentsReceiveDate
     * @var string|null
     */
    protected ?string $travelDocumentsReceiveDate = null;
    /**
     * The travelDocumentsReceivedBy
     * @var int|null
     */
    protected ?int $travelDocumentsReceivedBy = null;
    /**
     * The traveldocsInfoCustBy
     * @var int|null
     */
    protected ?int $traveldocsInfoCustBy = null;
    /**
     * The traveldocsInfoCustDate
     * @var string|null
     */
    protected ?string $traveldocsInfoCustDate = null;
    /**
     * The traveldocsInfoCustType
     * @var string|null
     */
    protected ?string $traveldocsInfoCustType = null;
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * The traveltypeKey
     * @var string|null
     */
    protected ?string $traveltypeKey = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The workStartTime
     * @var string|null
     */
    protected ?string $workStartTime = null;
    /**
     * The workingUser
     * @var int|null
     */
    protected ?int $workingUser = null;
    /**
     * Constructor method for OrderDTO
     * @uses OrderDTO::setAgencyCurrency()
     * @uses OrderDTO::setAgencyCustomerId()
     * @uses OrderDTO::setAgencyDebitorNo()
     * @uses OrderDTO::setAgencyId()
     * @uses OrderDTO::setBookingCurrencyRate()
     * @uses OrderDTO::setCalculatedMediatorTotal()
     * @uses OrderDTO::setCatalogKey()
     * @uses OrderDTO::setCollectiveBilling()
     * @uses OrderDTO::setCommissionBaseAmount()
     * @uses OrderDTO::setCompanyUsage()
     * @uses OrderDTO::setCooperationId()
     * @uses OrderDTO::setCreationDate()
     * @uses OrderDTO::setCreationTime()
     * @uses OrderDTO::setCreationUser()
     * @uses OrderDTO::setCurrency()
     * @uses OrderDTO::setCurrencyLookupMethod()
     * @uses OrderDTO::setCustomerCostCentre()
     * @uses OrderDTO::setDebitorNo()
     * @uses OrderDTO::setDeliveryType()
     * @uses OrderDTO::setDeliveryTypeId()
     * @uses OrderDTO::setDepartment()
     * @uses OrderDTO::setDepositAmount()
     * @uses OrderDTO::setDepositDate()
     * @uses OrderDTO::setDepositDunningDate()
     * @uses OrderDTO::setDepositPaymentDueDate()
     * @uses OrderDTO::setDepositPreset()
     * @uses OrderDTO::setDepositReceived()
     * @uses OrderDTO::setDepositReceivedDate()
     * @uses OrderDTO::setDestinationKey()
     * @uses OrderDTO::setDisplayedCurrency()
     * @uses OrderDTO::setDisplayedCurrencyRate()
     * @uses OrderDTO::setDisplayedDepositAmount()
     * @uses OrderDTO::setDisplayedInkassoPrice()
     * @uses OrderDTO::setDisplayedTotalPayment()
     * @uses OrderDTO::setDisplayedTotalPrice()
     * @uses OrderDTO::setDunningDate()
     * @uses OrderDTO::setDunningLock()
     * @uses OrderDTO::setDunningPreset()
     * @uses OrderDTO::setDurationKey()
     * @uses OrderDTO::setEndTravelDate()
     * @uses OrderDTO::setErrorBundle()
     * @uses OrderDTO::setErrorCode()
     * @uses OrderDTO::setErrorCodeParameters()
     * @uses OrderDTO::setExtBookingId()
     * @uses OrderDTO::setFinalPayment()
     * @uses OrderDTO::setFinalPaymentReceived()
     * @uses OrderDTO::setFinalPaymentReceivedDate()
     * @uses OrderDTO::setFirstWorkTime()
     * @uses OrderDTO::setGroupReservation()
     * @uses OrderDTO::setHasForeignDebitor()
     * @uses OrderDTO::setInkassoPrice()
     * @uses OrderDTO::setInternalVersion()
     * @uses OrderDTO::setInvoicedAmount()
     * @uses OrderDTO::setInvoicingType()
     * @uses OrderDTO::setIsOrderControlled()
     * @uses OrderDTO::setIsReadonly()
     * @uses OrderDTO::setIsStorno()
     * @uses OrderDTO::setLastAgencySettlementPos()
     * @uses OrderDTO::setLastInkassoPrice()
     * @uses OrderDTO::setLastInvoiceId()
     * @uses OrderDTO::setLastWorkingUser()
     * @uses OrderDTO::setLastWorkingUserTimestamp()
     * @uses OrderDTO::setLegalCountry()
     * @uses OrderDTO::setLockIndicator()
     * @uses OrderDTO::setLockReason()
     * @uses OrderDTO::setLockTimestamp()
     * @uses OrderDTO::setLockUser()
     * @uses OrderDTO::setMainBookingId()
     * @uses OrderDTO::setMainSupplierId()
     * @uses OrderDTO::setManualCommission()
     * @uses OrderDTO::setMediatorAffiliate()
     * @uses OrderDTO::setMediatorCurrency()
     * @uses OrderDTO::setMediatorId()
     * @uses OrderDTO::setMediatorType()
     * @uses OrderDTO::setModifyDate()
     * @uses OrderDTO::setModifyTime()
     * @uses OrderDTO::setModifyUser()
     * @uses OrderDTO::setNeedsCommissionPrint()
     * @uses OrderDTO::setNeedsInvoicePrint()
     * @uses OrderDTO::setNeedsSellModeAssign()
     * @uses OrderDTO::setNonBookedVat()
     * @uses OrderDTO::setOptionHandled()
     * @uses OrderDTO::setOrderControlledBy()
     * @uses OrderDTO::setOrderControlledTimestamp()
     * @uses OrderDTO::setOrderId()
     * @uses OrderDTO::setOrderNo()
     * @uses OrderDTO::setPaymentDueDate()
     * @uses OrderDTO::setPaymentExported()
     * @uses OrderDTO::setPaymentType()
     * @uses OrderDTO::setPersonsKey()
     * @uses OrderDTO::setProductType()
     * @uses OrderDTO::setProjectNo()
     * @uses OrderDTO::setRanking()
     * @uses OrderDTO::setRequestHandled()
     * @uses OrderDTO::setSellingType()
     * @uses OrderDTO::setStartTravelDate()
     * @uses OrderDTO::setStornoHandled()
     * @uses OrderDTO::setSubAgencyId()
     * @uses OrderDTO::setTotalCommission()
     * @uses OrderDTO::setTotalCommissionAgencyCurrency()
     * @uses OrderDTO::setTotalCommissionInsurance()
     * @uses OrderDTO::setTotalCommissionInsuranceAgencyCurrency()
     * @uses OrderDTO::setTotalCommissionVat()
     * @uses OrderDTO::setTotalCommissionVatAgencyCurrency()
     * @uses OrderDTO::setTotalPayment()
     * @uses OrderDTO::setTotalPrice()
     * @uses OrderDTO::setTransportKey()
     * @uses OrderDTO::setTravelDate()
     * @uses OrderDTO::setTravelDocsDeliveryComm()
     * @uses OrderDTO::setTravelDocumentsDeliveredBy()
     * @uses OrderDTO::setTravelDocumentsDeliveryDate()
     * @uses OrderDTO::setTravelDocumentsReceiveDate()
     * @uses OrderDTO::setTravelDocumentsReceivedBy()
     * @uses OrderDTO::setTraveldocsInfoCustBy()
     * @uses OrderDTO::setTraveldocsInfoCustDate()
     * @uses OrderDTO::setTraveldocsInfoCustType()
     * @uses OrderDTO::setTravellerId()
     * @uses OrderDTO::setTraveltypeKey()
     * @uses OrderDTO::setUnitName()
     * @uses OrderDTO::setWorkStartTime()
     * @uses OrderDTO::setWorkingUser()
     * @param string $agencyCurrency
     * @param int $agencyCustomerId
     * @param string $agencyDebitorNo
     * @param string $agencyId
     * @param float $bookingCurrencyRate
     * @param float $calculatedMediatorTotal
     * @param bool $catalogKey
     * @param bool $collectiveBilling
     * @param float $commissionBaseAmount
     * @param bool $companyUsage
     * @param string $cooperationId
     * @param string $creationDate
     * @param string $creationTime
     * @param int $creationUser
     * @param string $currency
     * @param int $currencyLookupMethod
     * @param string $customerCostCentre
     * @param string $debitorNo
     * @param string $deliveryType
     * @param string $deliveryTypeId
     * @param string $department
     * @param float $depositAmount
     * @param string $depositDate
     * @param string $depositDunningDate
     * @param string $depositPaymentDueDate
     * @param bool $depositPreset
     * @param bool $depositReceived
     * @param string $depositReceivedDate
     * @param string $destinationKey
     * @param string $displayedCurrency
     * @param float $displayedCurrencyRate
     * @param float $displayedDepositAmount
     * @param float $displayedInkassoPrice
     * @param float $displayedTotalPayment
     * @param float $displayedTotalPrice
     * @param string $dunningDate
     * @param bool $dunningLock
     * @param bool $dunningPreset
     * @param string $durationKey
     * @param string $endTravelDate
     * @param string $errorBundle
     * @param string $errorCode
     * @param string $errorCodeParameters
     * @param string $extBookingId
     * @param string $finalPayment
     * @param bool $finalPaymentReceived
     * @param string $finalPaymentReceivedDate
     * @param string $firstWorkTime
     * @param bool $groupReservation
     * @param bool $hasForeignDebitor
     * @param float $inkassoPrice
     * @param int $internalVersion
     * @param float $invoicedAmount
     * @param string $invoicingType
     * @param bool $isOrderControlled
     * @param bool $isReadonly
     * @param bool $isStorno
     * @param int $lastAgencySettlementPos
     * @param float $lastInkassoPrice
     * @param int $lastInvoiceId
     * @param int $lastWorkingUser
     * @param string $lastWorkingUserTimestamp
     * @param string $legalCountry
     * @param int $lockIndicator
     * @param string $lockReason
     * @param string $lockTimestamp
     * @param int $lockUser
     * @param string $mainBookingId
     * @param string $mainSupplierId
     * @param bool $manualCommission
     * @param string $mediatorAffiliate
     * @param string $mediatorCurrency
     * @param string $mediatorId
     * @param string $mediatorType
     * @param string $modifyDate
     * @param string $modifyTime
     * @param int $modifyUser
     * @param bool $needsCommissionPrint
     * @param bool $needsInvoicePrint
     * @param bool $needsSellModeAssign
     * @param float $nonBookedVat
     * @param bool $optionHandled
     * @param int $orderControlledBy
     * @param string $orderControlledTimestamp
     * @param int $orderId
     * @param int $orderNo
     * @param string $paymentDueDate
     * @param bool $paymentExported
     * @param string $paymentType
     * @param string $personsKey
     * @param string $productType
     * @param string $projectNo
     * @param int $ranking
     * @param bool $requestHandled
     * @param int $sellingType
     * @param string $startTravelDate
     * @param bool $stornoHandled
     * @param string $subAgencyId
     * @param float $totalCommission
     * @param float $totalCommissionAgencyCurrency
     * @param float $totalCommissionInsurance
     * @param float $totalCommissionInsuranceAgencyCurrency
     * @param float $totalCommissionVat
     * @param float $totalCommissionVatAgencyCurrency
     * @param float $totalPayment
     * @param float $totalPrice
     * @param string $transportKey
     * @param string $travelDate
     * @param string $travelDocsDeliveryComm
     * @param int $travelDocumentsDeliveredBy
     * @param string $travelDocumentsDeliveryDate
     * @param string $travelDocumentsReceiveDate
     * @param int $travelDocumentsReceivedBy
     * @param int $traveldocsInfoCustBy
     * @param string $traveldocsInfoCustDate
     * @param string $traveldocsInfoCustType
     * @param int $travellerId
     * @param string $traveltypeKey
     * @param string $unitName
     * @param string $workStartTime
     * @param int $workingUser
     */
    public function __construct(?string $agencyCurrency = null, ?int $agencyCustomerId = null, ?string $agencyDebitorNo = null, ?string $agencyId = null, ?float $bookingCurrencyRate = null, ?float $calculatedMediatorTotal = null, ?bool $catalogKey = null, ?bool $collectiveBilling = null, ?float $commissionBaseAmount = null, ?bool $companyUsage = null, ?string $cooperationId = null, ?string $creationDate = null, ?string $creationTime = null, ?int $creationUser = null, ?string $currency = null, ?int $currencyLookupMethod = null, ?string $customerCostCentre = null, ?string $debitorNo = null, ?string $deliveryType = null, ?string $deliveryTypeId = null, ?string $department = null, ?float $depositAmount = null, ?string $depositDate = null, ?string $depositDunningDate = null, ?string $depositPaymentDueDate = null, ?bool $depositPreset = null, ?bool $depositReceived = null, ?string $depositReceivedDate = null, ?string $destinationKey = null, ?string $displayedCurrency = null, ?float $displayedCurrencyRate = null, ?float $displayedDepositAmount = null, ?float $displayedInkassoPrice = null, ?float $displayedTotalPayment = null, ?float $displayedTotalPrice = null, ?string $dunningDate = null, ?bool $dunningLock = null, ?bool $dunningPreset = null, ?string $durationKey = null, ?string $endTravelDate = null, ?string $errorBundle = null, ?string $errorCode = null, ?string $errorCodeParameters = null, ?string $extBookingId = null, ?string $finalPayment = null, ?bool $finalPaymentReceived = null, ?string $finalPaymentReceivedDate = null, ?string $firstWorkTime = null, ?bool $groupReservation = null, ?bool $hasForeignDebitor = null, ?float $inkassoPrice = null, ?int $internalVersion = null, ?float $invoicedAmount = null, ?string $invoicingType = null, ?bool $isOrderControlled = null, ?bool $isReadonly = null, ?bool $isStorno = null, ?int $lastAgencySettlementPos = null, ?float $lastInkassoPrice = null, ?int $lastInvoiceId = null, ?int $lastWorkingUser = null, ?string $lastWorkingUserTimestamp = null, ?string $legalCountry = null, ?int $lockIndicator = null, ?string $lockReason = null, ?string $lockTimestamp = null, ?int $lockUser = null, ?string $mainBookingId = null, ?string $mainSupplierId = null, ?bool $manualCommission = null, ?string $mediatorAffiliate = null, ?string $mediatorCurrency = null, ?string $mediatorId = null, ?string $mediatorType = null, ?string $modifyDate = null, ?string $modifyTime = null, ?int $modifyUser = null, ?bool $needsCommissionPrint = null, ?bool $needsInvoicePrint = null, ?bool $needsSellModeAssign = null, ?float $nonBookedVat = null, ?bool $optionHandled = null, ?int $orderControlledBy = null, ?string $orderControlledTimestamp = null, ?int $orderId = null, ?int $orderNo = null, ?string $paymentDueDate = null, ?bool $paymentExported = null, ?string $paymentType = null, ?string $personsKey = null, ?string $productType = null, ?string $projectNo = null, ?int $ranking = null, ?bool $requestHandled = null, ?int $sellingType = null, ?string $startTravelDate = null, ?bool $stornoHandled = null, ?string $subAgencyId = null, ?float $totalCommission = null, ?float $totalCommissionAgencyCurrency = null, ?float $totalCommissionInsurance = null, ?float $totalCommissionInsuranceAgencyCurrency = null, ?float $totalCommissionVat = null, ?float $totalCommissionVatAgencyCurrency = null, ?float $totalPayment = null, ?float $totalPrice = null, ?string $transportKey = null, ?string $travelDate = null, ?string $travelDocsDeliveryComm = null, ?int $travelDocumentsDeliveredBy = null, ?string $travelDocumentsDeliveryDate = null, ?string $travelDocumentsReceiveDate = null, ?int $travelDocumentsReceivedBy = null, ?int $traveldocsInfoCustBy = null, ?string $traveldocsInfoCustDate = null, ?string $traveldocsInfoCustType = null, ?int $travellerId = null, ?string $traveltypeKey = null, ?string $unitName = null, ?string $workStartTime = null, ?int $workingUser = null)
    {
        $this
            ->setAgencyCurrency($agencyCurrency)
            ->setAgencyCustomerId($agencyCustomerId)
            ->setAgencyDebitorNo($agencyDebitorNo)
            ->setAgencyId($agencyId)
            ->setBookingCurrencyRate($bookingCurrencyRate)
            ->setCalculatedMediatorTotal($calculatedMediatorTotal)
            ->setCatalogKey($catalogKey)
            ->setCollectiveBilling($collectiveBilling)
            ->setCommissionBaseAmount($commissionBaseAmount)
            ->setCompanyUsage($companyUsage)
            ->setCooperationId($cooperationId)
            ->setCreationDate($creationDate)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCurrency($currency)
            ->setCurrencyLookupMethod($currencyLookupMethod)
            ->setCustomerCostCentre($customerCostCentre)
            ->setDebitorNo($debitorNo)
            ->setDeliveryType($deliveryType)
            ->setDeliveryTypeId($deliveryTypeId)
            ->setDepartment($department)
            ->setDepositAmount($depositAmount)
            ->setDepositDate($depositDate)
            ->setDepositDunningDate($depositDunningDate)
            ->setDepositPaymentDueDate($depositPaymentDueDate)
            ->setDepositPreset($depositPreset)
            ->setDepositReceived($depositReceived)
            ->setDepositReceivedDate($depositReceivedDate)
            ->setDestinationKey($destinationKey)
            ->setDisplayedCurrency($displayedCurrency)
            ->setDisplayedCurrencyRate($displayedCurrencyRate)
            ->setDisplayedDepositAmount($displayedDepositAmount)
            ->setDisplayedInkassoPrice($displayedInkassoPrice)
            ->setDisplayedTotalPayment($displayedTotalPayment)
            ->setDisplayedTotalPrice($displayedTotalPrice)
            ->setDunningDate($dunningDate)
            ->setDunningLock($dunningLock)
            ->setDunningPreset($dunningPreset)
            ->setDurationKey($durationKey)
            ->setEndTravelDate($endTravelDate)
            ->setErrorBundle($errorBundle)
            ->setErrorCode($errorCode)
            ->setErrorCodeParameters($errorCodeParameters)
            ->setExtBookingId($extBookingId)
            ->setFinalPayment($finalPayment)
            ->setFinalPaymentReceived($finalPaymentReceived)
            ->setFinalPaymentReceivedDate($finalPaymentReceivedDate)
            ->setFirstWorkTime($firstWorkTime)
            ->setGroupReservation($groupReservation)
            ->setHasForeignDebitor($hasForeignDebitor)
            ->setInkassoPrice($inkassoPrice)
            ->setInternalVersion($internalVersion)
            ->setInvoicedAmount($invoicedAmount)
            ->setInvoicingType($invoicingType)
            ->setIsOrderControlled($isOrderControlled)
            ->setIsReadonly($isReadonly)
            ->setIsStorno($isStorno)
            ->setLastAgencySettlementPos($lastAgencySettlementPos)
            ->setLastInkassoPrice($lastInkassoPrice)
            ->setLastInvoiceId($lastInvoiceId)
            ->setLastWorkingUser($lastWorkingUser)
            ->setLastWorkingUserTimestamp($lastWorkingUserTimestamp)
            ->setLegalCountry($legalCountry)
            ->setLockIndicator($lockIndicator)
            ->setLockReason($lockReason)
            ->setLockTimestamp($lockTimestamp)
            ->setLockUser($lockUser)
            ->setMainBookingId($mainBookingId)
            ->setMainSupplierId($mainSupplierId)
            ->setManualCommission($manualCommission)
            ->setMediatorAffiliate($mediatorAffiliate)
            ->setMediatorCurrency($mediatorCurrency)
            ->setMediatorId($mediatorId)
            ->setMediatorType($mediatorType)
            ->setModifyDate($modifyDate)
            ->setModifyTime($modifyTime)
            ->setModifyUser($modifyUser)
            ->setNeedsCommissionPrint($needsCommissionPrint)
            ->setNeedsInvoicePrint($needsInvoicePrint)
            ->setNeedsSellModeAssign($needsSellModeAssign)
            ->setNonBookedVat($nonBookedVat)
            ->setOptionHandled($optionHandled)
            ->setOrderControlledBy($orderControlledBy)
            ->setOrderControlledTimestamp($orderControlledTimestamp)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setPaymentDueDate($paymentDueDate)
            ->setPaymentExported($paymentExported)
            ->setPaymentType($paymentType)
            ->setPersonsKey($personsKey)
            ->setProductType($productType)
            ->setProjectNo($projectNo)
            ->setRanking($ranking)
            ->setRequestHandled($requestHandled)
            ->setSellingType($sellingType)
            ->setStartTravelDate($startTravelDate)
            ->setStornoHandled($stornoHandled)
            ->setSubAgencyId($subAgencyId)
            ->setTotalCommission($totalCommission)
            ->setTotalCommissionAgencyCurrency($totalCommissionAgencyCurrency)
            ->setTotalCommissionInsurance($totalCommissionInsurance)
            ->setTotalCommissionInsuranceAgencyCurrency($totalCommissionInsuranceAgencyCurrency)
            ->setTotalCommissionVat($totalCommissionVat)
            ->setTotalCommissionVatAgencyCurrency($totalCommissionVatAgencyCurrency)
            ->setTotalPayment($totalPayment)
            ->setTotalPrice($totalPrice)
            ->setTransportKey($transportKey)
            ->setTravelDate($travelDate)
            ->setTravelDocsDeliveryComm($travelDocsDeliveryComm)
            ->setTravelDocumentsDeliveredBy($travelDocumentsDeliveredBy)
            ->setTravelDocumentsDeliveryDate($travelDocumentsDeliveryDate)
            ->setTravelDocumentsReceiveDate($travelDocumentsReceiveDate)
            ->setTravelDocumentsReceivedBy($travelDocumentsReceivedBy)
            ->setTraveldocsInfoCustBy($traveldocsInfoCustBy)
            ->setTraveldocsInfoCustDate($traveldocsInfoCustDate)
            ->setTraveldocsInfoCustType($traveldocsInfoCustType)
            ->setTravellerId($travellerId)
            ->setTraveltypeKey($traveltypeKey)
            ->setUnitName($unitName)
            ->setWorkStartTime($workStartTime)
            ->setWorkingUser($workingUser);
    }
    /**
     * Get agencyCurrency value
     * @return string|null
     */
    public function getAgencyCurrency(): ?string
    {
        return $this->agencyCurrency;
    }
    /**
     * Set agencyCurrency value
     * @param string $agencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setAgencyCurrency(?string $agencyCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyCurrency) && !is_string($agencyCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyCurrency, true), gettype($agencyCurrency)), __LINE__);
        }
        $this->agencyCurrency = $agencyCurrency;
        
        return $this;
    }
    /**
     * Get agencyCustomerId value
     * @return int|null
     */
    public function getAgencyCustomerId(): ?int
    {
        return $this->agencyCustomerId;
    }
    /**
     * Set agencyCustomerId value
     * @param int $agencyCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setAgencyCustomerId(?int $agencyCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($agencyCustomerId) && !(is_int($agencyCustomerId) || ctype_digit($agencyCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($agencyCustomerId, true), gettype($agencyCustomerId)), __LINE__);
        }
        $this->agencyCustomerId = $agencyCustomerId;
        
        return $this;
    }
    /**
     * Get agencyDebitorNo value
     * @return string|null
     */
    public function getAgencyDebitorNo(): ?string
    {
        return $this->agencyDebitorNo;
    }
    /**
     * Set agencyDebitorNo value
     * @param string $agencyDebitorNo
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setAgencyDebitorNo(?string $agencyDebitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyDebitorNo) && !is_string($agencyDebitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyDebitorNo, true), gettype($agencyDebitorNo)), __LINE__);
        }
        $this->agencyDebitorNo = $agencyDebitorNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get bookingCurrencyRate value
     * @return float|null
     */
    public function getBookingCurrencyRate(): ?float
    {
        return $this->bookingCurrencyRate;
    }
    /**
     * Set bookingCurrencyRate value
     * @param float $bookingCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setBookingCurrencyRate(?float $bookingCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($bookingCurrencyRate) && !(is_float($bookingCurrencyRate) || is_numeric($bookingCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookingCurrencyRate, true), gettype($bookingCurrencyRate)), __LINE__);
        }
        $this->bookingCurrencyRate = $bookingCurrencyRate;
        
        return $this;
    }
    /**
     * Get calculatedMediatorTotal value
     * @return float|null
     */
    public function getCalculatedMediatorTotal(): ?float
    {
        return $this->calculatedMediatorTotal;
    }
    /**
     * Set calculatedMediatorTotal value
     * @param float $calculatedMediatorTotal
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setCalculatedMediatorTotal(?float $calculatedMediatorTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMediatorTotal) && !(is_float($calculatedMediatorTotal) || is_numeric($calculatedMediatorTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMediatorTotal, true), gettype($calculatedMediatorTotal)), __LINE__);
        }
        $this->calculatedMediatorTotal = $calculatedMediatorTotal;
        
        return $this;
    }
    /**
     * Get catalogKey value
     * @return bool|null
     */
    public function getCatalogKey(): ?bool
    {
        return $this->catalogKey;
    }
    /**
     * Set catalogKey value
     * @param bool $catalogKey
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setCatalogKey(?bool $catalogKey = null): self
    {
        // validation for constraint: boolean
        if (!is_null($catalogKey) && !is_bool($catalogKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($catalogKey, true), gettype($catalogKey)), __LINE__);
        }
        $this->catalogKey = $catalogKey;
        
        return $this;
    }
    /**
     * Get collectiveBilling value
     * @return bool|null
     */
    public function getCollectiveBilling(): ?bool
    {
        return $this->collectiveBilling;
    }
    /**
     * Set collectiveBilling value
     * @param bool $collectiveBilling
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setCollectiveBilling(?bool $collectiveBilling = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveBilling) && !is_bool($collectiveBilling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveBilling, true), gettype($collectiveBilling)), __LINE__);
        }
        $this->collectiveBilling = $collectiveBilling;
        
        return $this;
    }
    /**
     * Get commissionBaseAmount value
     * @return float|null
     */
    public function getCommissionBaseAmount(): ?float
    {
        return $this->commissionBaseAmount;
    }
    /**
     * Set commissionBaseAmount value
     * @param float $commissionBaseAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setCommissionBaseAmount(?float $commissionBaseAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionBaseAmount) && !(is_float($commissionBaseAmount) || is_numeric($commissionBaseAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionBaseAmount, true), gettype($commissionBaseAmount)), __LINE__);
        }
        $this->commissionBaseAmount = $commissionBaseAmount;
        
        return $this;
    }
    /**
     * Get companyUsage value
     * @return bool|null
     */
    public function getCompanyUsage(): ?bool
    {
        return $this->companyUsage;
    }
    /**
     * Set companyUsage value
     * @param bool $companyUsage
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setCompanyUsage(?bool $companyUsage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($companyUsage) && !is_bool($companyUsage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($companyUsage, true), gettype($companyUsage)), __LINE__);
        }
        $this->companyUsage = $companyUsage;
        
        return $this;
    }
    /**
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get currencyLookupMethod value
     * @return int|null
     */
    public function getCurrencyLookupMethod(): ?int
    {
        return $this->currencyLookupMethod;
    }
    /**
     * Set currencyLookupMethod value
     * @param int $currencyLookupMethod
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setCurrencyLookupMethod(?int $currencyLookupMethod = null): self
    {
        // validation for constraint: int
        if (!is_null($currencyLookupMethod) && !(is_int($currencyLookupMethod) || ctype_digit($currencyLookupMethod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currencyLookupMethod, true), gettype($currencyLookupMethod)), __LINE__);
        }
        $this->currencyLookupMethod = $currencyLookupMethod;
        
        return $this;
    }
    /**
     * Get customerCostCentre value
     * @return string|null
     */
    public function getCustomerCostCentre(): ?string
    {
        return $this->customerCostCentre;
    }
    /**
     * Set customerCostCentre value
     * @param string $customerCostCentre
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setCustomerCostCentre(?string $customerCostCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCostCentre) && !is_string($customerCostCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCostCentre, true), gettype($customerCostCentre)), __LINE__);
        }
        $this->customerCostCentre = $customerCostCentre;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get deliveryType value
     * @return string|null
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }
    /**
     * Set deliveryType value
     * @param string $deliveryType
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDeliveryType(?string $deliveryType = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryType) && !is_string($deliveryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryType, true), gettype($deliveryType)), __LINE__);
        }
        $this->deliveryType = $deliveryType;
        
        return $this;
    }
    /**
     * Get deliveryTypeId value
     * @return string|null
     */
    public function getDeliveryTypeId(): ?string
    {
        return $this->deliveryTypeId;
    }
    /**
     * Set deliveryTypeId value
     * @param string $deliveryTypeId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDeliveryTypeId(?string $deliveryTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryTypeId) && !is_string($deliveryTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryTypeId, true), gettype($deliveryTypeId)), __LINE__);
        }
        $this->deliveryTypeId = $deliveryTypeId;
        
        return $this;
    }
    /**
     * Get department value
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }
    /**
     * Set department value
     * @param string $department
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get depositDunningDate value
     * @return string|null
     */
    public function getDepositDunningDate(): ?string
    {
        return $this->depositDunningDate;
    }
    /**
     * Set depositDunningDate value
     * @param string $depositDunningDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDepositDunningDate(?string $depositDunningDate = null): self
    {
        // validation for constraint: string
        if (!is_null($depositDunningDate) && !is_string($depositDunningDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositDunningDate, true), gettype($depositDunningDate)), __LINE__);
        }
        $this->depositDunningDate = $depositDunningDate;
        
        return $this;
    }
    /**
     * Get depositPaymentDueDate value
     * @return string|null
     */
    public function getDepositPaymentDueDate(): ?string
    {
        return $this->depositPaymentDueDate;
    }
    /**
     * Set depositPaymentDueDate value
     * @param string $depositPaymentDueDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDepositPaymentDueDate(?string $depositPaymentDueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($depositPaymentDueDate) && !is_string($depositPaymentDueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositPaymentDueDate, true), gettype($depositPaymentDueDate)), __LINE__);
        }
        $this->depositPaymentDueDate = $depositPaymentDueDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get depositReceived value
     * @return bool|null
     */
    public function getDepositReceived(): ?bool
    {
        return $this->depositReceived;
    }
    /**
     * Set depositReceived value
     * @param bool $depositReceived
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDepositReceived(?bool $depositReceived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($depositReceived) && !is_bool($depositReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($depositReceived, true), gettype($depositReceived)), __LINE__);
        }
        $this->depositReceived = $depositReceived;
        
        return $this;
    }
    /**
     * Get depositReceivedDate value
     * @return string|null
     */
    public function getDepositReceivedDate(): ?string
    {
        return $this->depositReceivedDate;
    }
    /**
     * Set depositReceivedDate value
     * @param string $depositReceivedDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDepositReceivedDate(?string $depositReceivedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($depositReceivedDate) && !is_string($depositReceivedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositReceivedDate, true), gettype($depositReceivedDate)), __LINE__);
        }
        $this->depositReceivedDate = $depositReceivedDate;
        
        return $this;
    }
    /**
     * Get destinationKey value
     * @return string|null
     */
    public function getDestinationKey(): ?string
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param string $destinationKey
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDestinationKey(?string $destinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKey) && !is_string($destinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
        return $this;
    }
    /**
     * Get displayedCurrency value
     * @return string|null
     */
    public function getDisplayedCurrency(): ?string
    {
        return $this->displayedCurrency;
    }
    /**
     * Set displayedCurrency value
     * @param string $displayedCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDisplayedCurrency(?string $displayedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedCurrency) && !is_string($displayedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedCurrency, true), gettype($displayedCurrency)), __LINE__);
        }
        $this->displayedCurrency = $displayedCurrency;
        
        return $this;
    }
    /**
     * Get displayedCurrencyRate value
     * @return float|null
     */
    public function getDisplayedCurrencyRate(): ?float
    {
        return $this->displayedCurrencyRate;
    }
    /**
     * Set displayedCurrencyRate value
     * @param float $displayedCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDisplayedCurrencyRate(?float $displayedCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedCurrencyRate) && !(is_float($displayedCurrencyRate) || is_numeric($displayedCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedCurrencyRate, true), gettype($displayedCurrencyRate)), __LINE__);
        }
        $this->displayedCurrencyRate = $displayedCurrencyRate;
        
        return $this;
    }
    /**
     * Get displayedDepositAmount value
     * @return float|null
     */
    public function getDisplayedDepositAmount(): ?float
    {
        return $this->displayedDepositAmount;
    }
    /**
     * Set displayedDepositAmount value
     * @param float $displayedDepositAmount
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDisplayedDepositAmount(?float $displayedDepositAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedDepositAmount) && !(is_float($displayedDepositAmount) || is_numeric($displayedDepositAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedDepositAmount, true), gettype($displayedDepositAmount)), __LINE__);
        }
        $this->displayedDepositAmount = $displayedDepositAmount;
        
        return $this;
    }
    /**
     * Get displayedInkassoPrice value
     * @return float|null
     */
    public function getDisplayedInkassoPrice(): ?float
    {
        return $this->displayedInkassoPrice;
    }
    /**
     * Set displayedInkassoPrice value
     * @param float $displayedInkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDisplayedInkassoPrice(?float $displayedInkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedInkassoPrice) && !(is_float($displayedInkassoPrice) || is_numeric($displayedInkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedInkassoPrice, true), gettype($displayedInkassoPrice)), __LINE__);
        }
        $this->displayedInkassoPrice = $displayedInkassoPrice;
        
        return $this;
    }
    /**
     * Get displayedTotalPayment value
     * @return float|null
     */
    public function getDisplayedTotalPayment(): ?float
    {
        return $this->displayedTotalPayment;
    }
    /**
     * Set displayedTotalPayment value
     * @param float $displayedTotalPayment
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDisplayedTotalPayment(?float $displayedTotalPayment = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedTotalPayment) && !(is_float($displayedTotalPayment) || is_numeric($displayedTotalPayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedTotalPayment, true), gettype($displayedTotalPayment)), __LINE__);
        }
        $this->displayedTotalPayment = $displayedTotalPayment;
        
        return $this;
    }
    /**
     * Get displayedTotalPrice value
     * @return float|null
     */
    public function getDisplayedTotalPrice(): ?float
    {
        return $this->displayedTotalPrice;
    }
    /**
     * Set displayedTotalPrice value
     * @param float $displayedTotalPrice
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDisplayedTotalPrice(?float $displayedTotalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedTotalPrice) && !(is_float($displayedTotalPrice) || is_numeric($displayedTotalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedTotalPrice, true), gettype($displayedTotalPrice)), __LINE__);
        }
        $this->displayedTotalPrice = $displayedTotalPrice;
        
        return $this;
    }
    /**
     * Get dunningDate value
     * @return string|null
     */
    public function getDunningDate(): ?string
    {
        return $this->dunningDate;
    }
    /**
     * Set dunningDate value
     * @param string $dunningDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDunningDate(?string $dunningDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dunningDate) && !is_string($dunningDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dunningDate, true), gettype($dunningDate)), __LINE__);
        }
        $this->dunningDate = $dunningDate;
        
        return $this;
    }
    /**
     * Get dunningLock value
     * @return bool|null
     */
    public function getDunningLock(): ?bool
    {
        return $this->dunningLock;
    }
    /**
     * Set dunningLock value
     * @param bool $dunningLock
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDunningLock(?bool $dunningLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dunningLock) && !is_bool($dunningLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dunningLock, true), gettype($dunningLock)), __LINE__);
        }
        $this->dunningLock = $dunningLock;
        
        return $this;
    }
    /**
     * Get dunningPreset value
     * @return bool|null
     */
    public function getDunningPreset(): ?bool
    {
        return $this->dunningPreset;
    }
    /**
     * Set dunningPreset value
     * @param bool $dunningPreset
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDunningPreset(?bool $dunningPreset = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dunningPreset) && !is_bool($dunningPreset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dunningPreset, true), gettype($dunningPreset)), __LINE__);
        }
        $this->dunningPreset = $dunningPreset;
        
        return $this;
    }
    /**
     * Get durationKey value
     * @return string|null
     */
    public function getDurationKey(): ?string
    {
        return $this->durationKey;
    }
    /**
     * Set durationKey value
     * @param string $durationKey
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setDurationKey(?string $durationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($durationKey) && !is_string($durationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($durationKey, true), gettype($durationKey)), __LINE__);
        }
        $this->durationKey = $durationKey;
        
        return $this;
    }
    /**
     * Get endTravelDate value
     * @return string|null
     */
    public function getEndTravelDate(): ?string
    {
        return $this->endTravelDate;
    }
    /**
     * Set endTravelDate value
     * @param string $endTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setEndTravelDate(?string $endTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelDate) && !is_string($endTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelDate, true), gettype($endTravelDate)), __LINE__);
        }
        $this->endTravelDate = $endTravelDate;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorCodeParameters value
     * @return string|null
     */
    public function getErrorCodeParameters(): ?string
    {
        return $this->errorCodeParameters;
    }
    /**
     * Set errorCodeParameters value
     * @param string $errorCodeParameters
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setErrorCodeParameters(?string $errorCodeParameters = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCodeParameters) && !is_string($errorCodeParameters)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCodeParameters, true), gettype($errorCodeParameters)), __LINE__);
        }
        $this->errorCodeParameters = $errorCodeParameters;
        
        return $this;
    }
    /**
     * Get extBookingId value
     * @return string|null
     */
    public function getExtBookingId(): ?string
    {
        return $this->extBookingId;
    }
    /**
     * Set extBookingId value
     * @param string $extBookingId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setExtBookingId(?string $extBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($extBookingId) && !is_string($extBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extBookingId, true), gettype($extBookingId)), __LINE__);
        }
        $this->extBookingId = $extBookingId;
        
        return $this;
    }
    /**
     * Get finalPayment value
     * @return string|null
     */
    public function getFinalPayment(): ?string
    {
        return $this->finalPayment;
    }
    /**
     * Set finalPayment value
     * @param string $finalPayment
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setFinalPayment(?string $finalPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPayment) && !is_string($finalPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPayment, true), gettype($finalPayment)), __LINE__);
        }
        $this->finalPayment = $finalPayment;
        
        return $this;
    }
    /**
     * Get finalPaymentReceived value
     * @return bool|null
     */
    public function getFinalPaymentReceived(): ?bool
    {
        return $this->finalPaymentReceived;
    }
    /**
     * Set finalPaymentReceived value
     * @param bool $finalPaymentReceived
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setFinalPaymentReceived(?bool $finalPaymentReceived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($finalPaymentReceived) && !is_bool($finalPaymentReceived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($finalPaymentReceived, true), gettype($finalPaymentReceived)), __LINE__);
        }
        $this->finalPaymentReceived = $finalPaymentReceived;
        
        return $this;
    }
    /**
     * Get finalPaymentReceivedDate value
     * @return string|null
     */
    public function getFinalPaymentReceivedDate(): ?string
    {
        return $this->finalPaymentReceivedDate;
    }
    /**
     * Set finalPaymentReceivedDate value
     * @param string $finalPaymentReceivedDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setFinalPaymentReceivedDate(?string $finalPaymentReceivedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPaymentReceivedDate) && !is_string($finalPaymentReceivedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPaymentReceivedDate, true), gettype($finalPaymentReceivedDate)), __LINE__);
        }
        $this->finalPaymentReceivedDate = $finalPaymentReceivedDate;
        
        return $this;
    }
    /**
     * Get firstWorkTime value
     * @return string|null
     */
    public function getFirstWorkTime(): ?string
    {
        return $this->firstWorkTime;
    }
    /**
     * Set firstWorkTime value
     * @param string $firstWorkTime
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setFirstWorkTime(?string $firstWorkTime = null): self
    {
        // validation for constraint: string
        if (!is_null($firstWorkTime) && !is_string($firstWorkTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstWorkTime, true), gettype($firstWorkTime)), __LINE__);
        }
        $this->firstWorkTime = $firstWorkTime;
        
        return $this;
    }
    /**
     * Get groupReservation value
     * @return bool|null
     */
    public function getGroupReservation(): ?bool
    {
        return $this->groupReservation;
    }
    /**
     * Set groupReservation value
     * @param bool $groupReservation
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setGroupReservation(?bool $groupReservation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupReservation) && !is_bool($groupReservation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupReservation, true), gettype($groupReservation)), __LINE__);
        }
        $this->groupReservation = $groupReservation;
        
        return $this;
    }
    /**
     * Get hasForeignDebitor value
     * @return bool|null
     */
    public function getHasForeignDebitor(): ?bool
    {
        return $this->hasForeignDebitor;
    }
    /**
     * Set hasForeignDebitor value
     * @param bool $hasForeignDebitor
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setHasForeignDebitor(?bool $hasForeignDebitor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasForeignDebitor) && !is_bool($hasForeignDebitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasForeignDebitor, true), gettype($hasForeignDebitor)), __LINE__);
        }
        $this->hasForeignDebitor = $hasForeignDebitor;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get invoicingType value
     * @return string|null
     */
    public function getInvoicingType(): ?string
    {
        return $this->invoicingType;
    }
    /**
     * Set invoicingType value
     * @param string $invoicingType
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setInvoicingType(?string $invoicingType = null): self
    {
        // validation for constraint: string
        if (!is_null($invoicingType) && !is_string($invoicingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoicingType, true), gettype($invoicingType)), __LINE__);
        }
        $this->invoicingType = $invoicingType;
        
        return $this;
    }
    /**
     * Get isOrderControlled value
     * @return bool|null
     */
    public function getIsOrderControlled(): ?bool
    {
        return $this->isOrderControlled;
    }
    /**
     * Set isOrderControlled value
     * @param bool $isOrderControlled
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setIsOrderControlled(?bool $isOrderControlled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrderControlled) && !is_bool($isOrderControlled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrderControlled, true), gettype($isOrderControlled)), __LINE__);
        }
        $this->isOrderControlled = $isOrderControlled;
        
        return $this;
    }
    /**
     * Get isReadonly value
     * @return bool|null
     */
    public function getIsReadonly(): ?bool
    {
        return $this->isReadonly;
    }
    /**
     * Set isReadonly value
     * @param bool $isReadonly
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setIsReadonly(?bool $isReadonly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadonly) && !is_bool($isReadonly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadonly, true), gettype($isReadonly)), __LINE__);
        }
        $this->isReadonly = $isReadonly;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get lastAgencySettlementPos value
     * @return int|null
     */
    public function getLastAgencySettlementPos(): ?int
    {
        return $this->lastAgencySettlementPos;
    }
    /**
     * Set lastAgencySettlementPos value
     * @param int $lastAgencySettlementPos
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setLastAgencySettlementPos(?int $lastAgencySettlementPos = null): self
    {
        // validation for constraint: int
        if (!is_null($lastAgencySettlementPos) && !(is_int($lastAgencySettlementPos) || ctype_digit($lastAgencySettlementPos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastAgencySettlementPos, true), gettype($lastAgencySettlementPos)), __LINE__);
        }
        $this->lastAgencySettlementPos = $lastAgencySettlementPos;
        
        return $this;
    }
    /**
     * Get lastInkassoPrice value
     * @return float|null
     */
    public function getLastInkassoPrice(): ?float
    {
        return $this->lastInkassoPrice;
    }
    /**
     * Set lastInkassoPrice value
     * @param float $lastInkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setLastInkassoPrice(?float $lastInkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($lastInkassoPrice) && !(is_float($lastInkassoPrice) || is_numeric($lastInkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lastInkassoPrice, true), gettype($lastInkassoPrice)), __LINE__);
        }
        $this->lastInkassoPrice = $lastInkassoPrice;
        
        return $this;
    }
    /**
     * Get lastInvoiceId value
     * @return int|null
     */
    public function getLastInvoiceId(): ?int
    {
        return $this->lastInvoiceId;
    }
    /**
     * Set lastInvoiceId value
     * @param int $lastInvoiceId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setLastInvoiceId(?int $lastInvoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($lastInvoiceId) && !(is_int($lastInvoiceId) || ctype_digit($lastInvoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastInvoiceId, true), gettype($lastInvoiceId)), __LINE__);
        }
        $this->lastInvoiceId = $lastInvoiceId;
        
        return $this;
    }
    /**
     * Get lastWorkingUser value
     * @return int|null
     */
    public function getLastWorkingUser(): ?int
    {
        return $this->lastWorkingUser;
    }
    /**
     * Set lastWorkingUser value
     * @param int $lastWorkingUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setLastWorkingUser(?int $lastWorkingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lastWorkingUser) && !(is_int($lastWorkingUser) || ctype_digit($lastWorkingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastWorkingUser, true), gettype($lastWorkingUser)), __LINE__);
        }
        $this->lastWorkingUser = $lastWorkingUser;
        
        return $this;
    }
    /**
     * Get lastWorkingUserTimestamp value
     * @return string|null
     */
    public function getLastWorkingUserTimestamp(): ?string
    {
        return $this->lastWorkingUserTimestamp;
    }
    /**
     * Set lastWorkingUserTimestamp value
     * @param string $lastWorkingUserTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setLastWorkingUserTimestamp(?string $lastWorkingUserTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($lastWorkingUserTimestamp) && !is_string($lastWorkingUserTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastWorkingUserTimestamp, true), gettype($lastWorkingUserTimestamp)), __LINE__);
        }
        $this->lastWorkingUserTimestamp = $lastWorkingUserTimestamp;
        
        return $this;
    }
    /**
     * Get legalCountry value
     * @return string|null
     */
    public function getLegalCountry(): ?string
    {
        return $this->legalCountry;
    }
    /**
     * Set legalCountry value
     * @param string $legalCountry
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setLegalCountry(?string $legalCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($legalCountry) && !is_string($legalCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalCountry, true), gettype($legalCountry)), __LINE__);
        }
        $this->legalCountry = $legalCountry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get lockReason value
     * @return string|null
     */
    public function getLockReason(): ?string
    {
        return $this->lockReason;
    }
    /**
     * Set lockReason value
     * @param string $lockReason
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setLockReason(?string $lockReason = null): self
    {
        // validation for constraint: string
        if (!is_null($lockReason) && !is_string($lockReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReason, true), gettype($lockReason)), __LINE__);
        }
        $this->lockReason = $lockReason;
        
        return $this;
    }
    /**
     * Get lockTimestamp value
     * @return string|null
     */
    public function getLockTimestamp(): ?string
    {
        return $this->lockTimestamp;
    }
    /**
     * Set lockTimestamp value
     * @param string $lockTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setLockTimestamp(?string $lockTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($lockTimestamp) && !is_string($lockTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockTimestamp, true), gettype($lockTimestamp)), __LINE__);
        }
        $this->lockTimestamp = $lockTimestamp;
        
        return $this;
    }
    /**
     * Get lockUser value
     * @return int|null
     */
    public function getLockUser(): ?int
    {
        return $this->lockUser;
    }
    /**
     * Set lockUser value
     * @param int $lockUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setLockUser(?int $lockUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lockUser) && !(is_int($lockUser) || ctype_digit($lockUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lockUser, true), gettype($lockUser)), __LINE__);
        }
        $this->lockUser = $lockUser;
        
        return $this;
    }
    /**
     * Get mainBookingId value
     * @return string|null
     */
    public function getMainBookingId(): ?string
    {
        return $this->mainBookingId;
    }
    /**
     * Set mainBookingId value
     * @param string $mainBookingId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setMainBookingId(?string $mainBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($mainBookingId) && !is_string($mainBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainBookingId, true), gettype($mainBookingId)), __LINE__);
        }
        $this->mainBookingId = $mainBookingId;
        
        return $this;
    }
    /**
     * Get mainSupplierId value
     * @return string|null
     */
    public function getMainSupplierId(): ?string
    {
        return $this->mainSupplierId;
    }
    /**
     * Set mainSupplierId value
     * @param string $mainSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setMainSupplierId(?string $mainSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($mainSupplierId) && !is_string($mainSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainSupplierId, true), gettype($mainSupplierId)), __LINE__);
        }
        $this->mainSupplierId = $mainSupplierId;
        
        return $this;
    }
    /**
     * Get manualCommission value
     * @return bool|null
     */
    public function getManualCommission(): ?bool
    {
        return $this->manualCommission;
    }
    /**
     * Set manualCommission value
     * @param bool $manualCommission
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setManualCommission(?bool $manualCommission = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manualCommission) && !is_bool($manualCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manualCommission, true), gettype($manualCommission)), __LINE__);
        }
        $this->manualCommission = $manualCommission;
        
        return $this;
    }
    /**
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
        return $this;
    }
    /**
     * Get mediatorCurrency value
     * @return string|null
     */
    public function getMediatorCurrency(): ?string
    {
        return $this->mediatorCurrency;
    }
    /**
     * Set mediatorCurrency value
     * @param string $mediatorCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setMediatorCurrency(?string $mediatorCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorCurrency) && !is_string($mediatorCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorCurrency, true), gettype($mediatorCurrency)), __LINE__);
        }
        $this->mediatorCurrency = $mediatorCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get mediatorType value
     * @return string|null
     */
    public function getMediatorType(): ?string
    {
        return $this->mediatorType;
    }
    /**
     * Set mediatorType value
     * @param string $mediatorType
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setMediatorType(?string $mediatorType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorType) && !is_string($mediatorType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorType, true), gettype($mediatorType)), __LINE__);
        }
        $this->mediatorType = $mediatorType;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyTime value
     * @return string|null
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }
    /**
     * Set modifyTime value
     * @param string $modifyTime
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setModifyTime(?string $modifyTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTime) && !is_string($modifyTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTime, true), gettype($modifyTime)), __LINE__);
        }
        $this->modifyTime = $modifyTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get needsCommissionPrint value
     * @return bool|null
     */
    public function getNeedsCommissionPrint(): ?bool
    {
        return $this->needsCommissionPrint;
    }
    /**
     * Set needsCommissionPrint value
     * @param bool $needsCommissionPrint
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setNeedsCommissionPrint(?bool $needsCommissionPrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsCommissionPrint) && !is_bool($needsCommissionPrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsCommissionPrint, true), gettype($needsCommissionPrint)), __LINE__);
        }
        $this->needsCommissionPrint = $needsCommissionPrint;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get needsSellModeAssign value
     * @return bool|null
     */
    public function getNeedsSellModeAssign(): ?bool
    {
        return $this->needsSellModeAssign;
    }
    /**
     * Set needsSellModeAssign value
     * @param bool $needsSellModeAssign
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setNeedsSellModeAssign(?bool $needsSellModeAssign = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsSellModeAssign) && !is_bool($needsSellModeAssign)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsSellModeAssign, true), gettype($needsSellModeAssign)), __LINE__);
        }
        $this->needsSellModeAssign = $needsSellModeAssign;
        
        return $this;
    }
    /**
     * Get nonBookedVat value
     * @return float|null
     */
    public function getNonBookedVat(): ?float
    {
        return $this->nonBookedVat;
    }
    /**
     * Set nonBookedVat value
     * @param float $nonBookedVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setNonBookedVat(?float $nonBookedVat = null): self
    {
        // validation for constraint: float
        if (!is_null($nonBookedVat) && !(is_float($nonBookedVat) || is_numeric($nonBookedVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nonBookedVat, true), gettype($nonBookedVat)), __LINE__);
        }
        $this->nonBookedVat = $nonBookedVat;
        
        return $this;
    }
    /**
     * Get optionHandled value
     * @return bool|null
     */
    public function getOptionHandled(): ?bool
    {
        return $this->optionHandled;
    }
    /**
     * Set optionHandled value
     * @param bool $optionHandled
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setOptionHandled(?bool $optionHandled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($optionHandled) && !is_bool($optionHandled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optionHandled, true), gettype($optionHandled)), __LINE__);
        }
        $this->optionHandled = $optionHandled;
        
        return $this;
    }
    /**
     * Get orderControlledBy value
     * @return int|null
     */
    public function getOrderControlledBy(): ?int
    {
        return $this->orderControlledBy;
    }
    /**
     * Set orderControlledBy value
     * @param int $orderControlledBy
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setOrderControlledBy(?int $orderControlledBy = null): self
    {
        // validation for constraint: int
        if (!is_null($orderControlledBy) && !(is_int($orderControlledBy) || ctype_digit($orderControlledBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderControlledBy, true), gettype($orderControlledBy)), __LINE__);
        }
        $this->orderControlledBy = $orderControlledBy;
        
        return $this;
    }
    /**
     * Get orderControlledTimestamp value
     * @return string|null
     */
    public function getOrderControlledTimestamp(): ?string
    {
        return $this->orderControlledTimestamp;
    }
    /**
     * Set orderControlledTimestamp value
     * @param string $orderControlledTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setOrderControlledTimestamp(?string $orderControlledTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($orderControlledTimestamp) && !is_string($orderControlledTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderControlledTimestamp, true), gettype($orderControlledTimestamp)), __LINE__);
        }
        $this->orderControlledTimestamp = $orderControlledTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get paymentDueDate value
     * @return string|null
     */
    public function getPaymentDueDate(): ?string
    {
        return $this->paymentDueDate;
    }
    /**
     * Set paymentDueDate value
     * @param string $paymentDueDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setPaymentDueDate(?string $paymentDueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDueDate) && !is_string($paymentDueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDueDate, true), gettype($paymentDueDate)), __LINE__);
        }
        $this->paymentDueDate = $paymentDueDate;
        
        return $this;
    }
    /**
     * Get paymentExported value
     * @return bool|null
     */
    public function getPaymentExported(): ?bool
    {
        return $this->paymentExported;
    }
    /**
     * Set paymentExported value
     * @param bool $paymentExported
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setPaymentExported(?bool $paymentExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paymentExported) && !is_bool($paymentExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paymentExported, true), gettype($paymentExported)), __LINE__);
        }
        $this->paymentExported = $paymentExported;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get personsKey value
     * @return string|null
     */
    public function getPersonsKey(): ?string
    {
        return $this->personsKey;
    }
    /**
     * Set personsKey value
     * @param string $personsKey
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setPersonsKey(?string $personsKey = null): self
    {
        // validation for constraint: string
        if (!is_null($personsKey) && !is_string($personsKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personsKey, true), gettype($personsKey)), __LINE__);
        }
        $this->personsKey = $personsKey;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get projectNo value
     * @return string|null
     */
    public function getProjectNo(): ?string
    {
        return $this->projectNo;
    }
    /**
     * Set projectNo value
     * @param string $projectNo
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setProjectNo(?string $projectNo = null): self
    {
        // validation for constraint: string
        if (!is_null($projectNo) && !is_string($projectNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($projectNo, true), gettype($projectNo)), __LINE__);
        }
        $this->projectNo = $projectNo;
        
        return $this;
    }
    /**
     * Get ranking value
     * @return int|null
     */
    public function getRanking(): ?int
    {
        return $this->ranking;
    }
    /**
     * Set ranking value
     * @param int $ranking
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setRanking(?int $ranking = null): self
    {
        // validation for constraint: int
        if (!is_null($ranking) && !(is_int($ranking) || ctype_digit($ranking))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ranking, true), gettype($ranking)), __LINE__);
        }
        $this->ranking = $ranking;
        
        return $this;
    }
    /**
     * Get requestHandled value
     * @return bool|null
     */
    public function getRequestHandled(): ?bool
    {
        return $this->requestHandled;
    }
    /**
     * Set requestHandled value
     * @param bool $requestHandled
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setRequestHandled(?bool $requestHandled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requestHandled) && !is_bool($requestHandled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requestHandled, true), gettype($requestHandled)), __LINE__);
        }
        $this->requestHandled = $requestHandled;
        
        return $this;
    }
    /**
     * Get sellingType value
     * @return int|null
     */
    public function getSellingType(): ?int
    {
        return $this->sellingType;
    }
    /**
     * Set sellingType value
     * @param int $sellingType
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setSellingType(?int $sellingType = null): self
    {
        // validation for constraint: int
        if (!is_null($sellingType) && !(is_int($sellingType) || ctype_digit($sellingType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellingType, true), gettype($sellingType)), __LINE__);
        }
        $this->sellingType = $sellingType;
        
        return $this;
    }
    /**
     * Get startTravelDate value
     * @return string|null
     */
    public function getStartTravelDate(): ?string
    {
        return $this->startTravelDate;
    }
    /**
     * Set startTravelDate value
     * @param string $startTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setStartTravelDate(?string $startTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelDate) && !is_string($startTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelDate, true), gettype($startTravelDate)), __LINE__);
        }
        $this->startTravelDate = $startTravelDate;
        
        return $this;
    }
    /**
     * Get stornoHandled value
     * @return bool|null
     */
    public function getStornoHandled(): ?bool
    {
        return $this->stornoHandled;
    }
    /**
     * Set stornoHandled value
     * @param bool $stornoHandled
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setStornoHandled(?bool $stornoHandled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($stornoHandled) && !is_bool($stornoHandled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stornoHandled, true), gettype($stornoHandled)), __LINE__);
        }
        $this->stornoHandled = $stornoHandled;
        
        return $this;
    }
    /**
     * Get subAgencyId value
     * @return string|null
     */
    public function getSubAgencyId(): ?string
    {
        return $this->subAgencyId;
    }
    /**
     * Set subAgencyId value
     * @param string $subAgencyId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setSubAgencyId(?string $subAgencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($subAgencyId) && !is_string($subAgencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subAgencyId, true), gettype($subAgencyId)), __LINE__);
        }
        $this->subAgencyId = $subAgencyId;
        
        return $this;
    }
    /**
     * Get totalCommission value
     * @return float|null
     */
    public function getTotalCommission(): ?float
    {
        return $this->totalCommission;
    }
    /**
     * Set totalCommission value
     * @param float $totalCommission
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTotalCommission(?float $totalCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($totalCommission) && !(is_float($totalCommission) || is_numeric($totalCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCommission, true), gettype($totalCommission)), __LINE__);
        }
        $this->totalCommission = $totalCommission;
        
        return $this;
    }
    /**
     * Get totalCommissionAgencyCurrency value
     * @return float|null
     */
    public function getTotalCommissionAgencyCurrency(): ?float
    {
        return $this->totalCommissionAgencyCurrency;
    }
    /**
     * Set totalCommissionAgencyCurrency value
     * @param float $totalCommissionAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTotalCommissionAgencyCurrency(?float $totalCommissionAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($totalCommissionAgencyCurrency) && !(is_float($totalCommissionAgencyCurrency) || is_numeric($totalCommissionAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCommissionAgencyCurrency, true), gettype($totalCommissionAgencyCurrency)), __LINE__);
        }
        $this->totalCommissionAgencyCurrency = $totalCommissionAgencyCurrency;
        
        return $this;
    }
    /**
     * Get totalCommissionInsurance value
     * @return float|null
     */
    public function getTotalCommissionInsurance(): ?float
    {
        return $this->totalCommissionInsurance;
    }
    /**
     * Set totalCommissionInsurance value
     * @param float $totalCommissionInsurance
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTotalCommissionInsurance(?float $totalCommissionInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($totalCommissionInsurance) && !(is_float($totalCommissionInsurance) || is_numeric($totalCommissionInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCommissionInsurance, true), gettype($totalCommissionInsurance)), __LINE__);
        }
        $this->totalCommissionInsurance = $totalCommissionInsurance;
        
        return $this;
    }
    /**
     * Get totalCommissionInsuranceAgencyCurrency value
     * @return float|null
     */
    public function getTotalCommissionInsuranceAgencyCurrency(): ?float
    {
        return $this->totalCommissionInsuranceAgencyCurrency;
    }
    /**
     * Set totalCommissionInsuranceAgencyCurrency value
     * @param float $totalCommissionInsuranceAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTotalCommissionInsuranceAgencyCurrency(?float $totalCommissionInsuranceAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($totalCommissionInsuranceAgencyCurrency) && !(is_float($totalCommissionInsuranceAgencyCurrency) || is_numeric($totalCommissionInsuranceAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCommissionInsuranceAgencyCurrency, true), gettype($totalCommissionInsuranceAgencyCurrency)), __LINE__);
        }
        $this->totalCommissionInsuranceAgencyCurrency = $totalCommissionInsuranceAgencyCurrency;
        
        return $this;
    }
    /**
     * Get totalCommissionVat value
     * @return float|null
     */
    public function getTotalCommissionVat(): ?float
    {
        return $this->totalCommissionVat;
    }
    /**
     * Set totalCommissionVat value
     * @param float $totalCommissionVat
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTotalCommissionVat(?float $totalCommissionVat = null): self
    {
        // validation for constraint: float
        if (!is_null($totalCommissionVat) && !(is_float($totalCommissionVat) || is_numeric($totalCommissionVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCommissionVat, true), gettype($totalCommissionVat)), __LINE__);
        }
        $this->totalCommissionVat = $totalCommissionVat;
        
        return $this;
    }
    /**
     * Get totalCommissionVatAgencyCurrency value
     * @return float|null
     */
    public function getTotalCommissionVatAgencyCurrency(): ?float
    {
        return $this->totalCommissionVatAgencyCurrency;
    }
    /**
     * Set totalCommissionVatAgencyCurrency value
     * @param float $totalCommissionVatAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTotalCommissionVatAgencyCurrency(?float $totalCommissionVatAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($totalCommissionVatAgencyCurrency) && !(is_float($totalCommissionVatAgencyCurrency) || is_numeric($totalCommissionVatAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCommissionVatAgencyCurrency, true), gettype($totalCommissionVatAgencyCurrency)), __LINE__);
        }
        $this->totalCommissionVatAgencyCurrency = $totalCommissionVatAgencyCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get transportKey value
     * @return string|null
     */
    public function getTransportKey(): ?string
    {
        return $this->transportKey;
    }
    /**
     * Set transportKey value
     * @param string $transportKey
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTransportKey(?string $transportKey = null): self
    {
        // validation for constraint: string
        if (!is_null($transportKey) && !is_string($transportKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportKey, true), gettype($transportKey)), __LINE__);
        }
        $this->transportKey = $transportKey;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get travelDocsDeliveryComm value
     * @return string|null
     */
    public function getTravelDocsDeliveryComm(): ?string
    {
        return $this->travelDocsDeliveryComm;
    }
    /**
     * Set travelDocsDeliveryComm value
     * @param string $travelDocsDeliveryComm
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTravelDocsDeliveryComm(?string $travelDocsDeliveryComm = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDocsDeliveryComm) && !is_string($travelDocsDeliveryComm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDocsDeliveryComm, true), gettype($travelDocsDeliveryComm)), __LINE__);
        }
        $this->travelDocsDeliveryComm = $travelDocsDeliveryComm;
        
        return $this;
    }
    /**
     * Get travelDocumentsDeliveredBy value
     * @return int|null
     */
    public function getTravelDocumentsDeliveredBy(): ?int
    {
        return $this->travelDocumentsDeliveredBy;
    }
    /**
     * Set travelDocumentsDeliveredBy value
     * @param int $travelDocumentsDeliveredBy
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTravelDocumentsDeliveredBy(?int $travelDocumentsDeliveredBy = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDocumentsDeliveredBy) && !(is_int($travelDocumentsDeliveredBy) || ctype_digit($travelDocumentsDeliveredBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDocumentsDeliveredBy, true), gettype($travelDocumentsDeliveredBy)), __LINE__);
        }
        $this->travelDocumentsDeliveredBy = $travelDocumentsDeliveredBy;
        
        return $this;
    }
    /**
     * Get travelDocumentsDeliveryDate value
     * @return string|null
     */
    public function getTravelDocumentsDeliveryDate(): ?string
    {
        return $this->travelDocumentsDeliveryDate;
    }
    /**
     * Set travelDocumentsDeliveryDate value
     * @param string $travelDocumentsDeliveryDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTravelDocumentsDeliveryDate(?string $travelDocumentsDeliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDocumentsDeliveryDate) && !is_string($travelDocumentsDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDocumentsDeliveryDate, true), gettype($travelDocumentsDeliveryDate)), __LINE__);
        }
        $this->travelDocumentsDeliveryDate = $travelDocumentsDeliveryDate;
        
        return $this;
    }
    /**
     * Get travelDocumentsReceiveDate value
     * @return string|null
     */
    public function getTravelDocumentsReceiveDate(): ?string
    {
        return $this->travelDocumentsReceiveDate;
    }
    /**
     * Set travelDocumentsReceiveDate value
     * @param string $travelDocumentsReceiveDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTravelDocumentsReceiveDate(?string $travelDocumentsReceiveDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDocumentsReceiveDate) && !is_string($travelDocumentsReceiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDocumentsReceiveDate, true), gettype($travelDocumentsReceiveDate)), __LINE__);
        }
        $this->travelDocumentsReceiveDate = $travelDocumentsReceiveDate;
        
        return $this;
    }
    /**
     * Get travelDocumentsReceivedBy value
     * @return int|null
     */
    public function getTravelDocumentsReceivedBy(): ?int
    {
        return $this->travelDocumentsReceivedBy;
    }
    /**
     * Set travelDocumentsReceivedBy value
     * @param int $travelDocumentsReceivedBy
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTravelDocumentsReceivedBy(?int $travelDocumentsReceivedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDocumentsReceivedBy) && !(is_int($travelDocumentsReceivedBy) || ctype_digit($travelDocumentsReceivedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDocumentsReceivedBy, true), gettype($travelDocumentsReceivedBy)), __LINE__);
        }
        $this->travelDocumentsReceivedBy = $travelDocumentsReceivedBy;
        
        return $this;
    }
    /**
     * Get traveldocsInfoCustBy value
     * @return int|null
     */
    public function getTraveldocsInfoCustBy(): ?int
    {
        return $this->traveldocsInfoCustBy;
    }
    /**
     * Set traveldocsInfoCustBy value
     * @param int $traveldocsInfoCustBy
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTraveldocsInfoCustBy(?int $traveldocsInfoCustBy = null): self
    {
        // validation for constraint: int
        if (!is_null($traveldocsInfoCustBy) && !(is_int($traveldocsInfoCustBy) || ctype_digit($traveldocsInfoCustBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($traveldocsInfoCustBy, true), gettype($traveldocsInfoCustBy)), __LINE__);
        }
        $this->traveldocsInfoCustBy = $traveldocsInfoCustBy;
        
        return $this;
    }
    /**
     * Get traveldocsInfoCustDate value
     * @return string|null
     */
    public function getTraveldocsInfoCustDate(): ?string
    {
        return $this->traveldocsInfoCustDate;
    }
    /**
     * Set traveldocsInfoCustDate value
     * @param string $traveldocsInfoCustDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTraveldocsInfoCustDate(?string $traveldocsInfoCustDate = null): self
    {
        // validation for constraint: string
        if (!is_null($traveldocsInfoCustDate) && !is_string($traveldocsInfoCustDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveldocsInfoCustDate, true), gettype($traveldocsInfoCustDate)), __LINE__);
        }
        $this->traveldocsInfoCustDate = $traveldocsInfoCustDate;
        
        return $this;
    }
    /**
     * Get traveldocsInfoCustType value
     * @return string|null
     */
    public function getTraveldocsInfoCustType(): ?string
    {
        return $this->traveldocsInfoCustType;
    }
    /**
     * Set traveldocsInfoCustType value
     * @param string $traveldocsInfoCustType
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTraveldocsInfoCustType(?string $traveldocsInfoCustType = null): self
    {
        // validation for constraint: string
        if (!is_null($traveldocsInfoCustType) && !is_string($traveldocsInfoCustType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveldocsInfoCustType, true), gettype($traveldocsInfoCustType)), __LINE__);
        }
        $this->traveldocsInfoCustType = $traveldocsInfoCustType;
        
        return $this;
    }
    /**
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
    /**
     * Get traveltypeKey value
     * @return string|null
     */
    public function getTraveltypeKey(): ?string
    {
        return $this->traveltypeKey;
    }
    /**
     * Set traveltypeKey value
     * @param string $traveltypeKey
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setTraveltypeKey(?string $traveltypeKey = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltypeKey) && !is_string($traveltypeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltypeKey, true), gettype($traveltypeKey)), __LINE__);
        }
        $this->traveltypeKey = $traveltypeKey;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
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
     * Get workStartTime value
     * @return string|null
     */
    public function getWorkStartTime(): ?string
    {
        return $this->workStartTime;
    }
    /**
     * Set workStartTime value
     * @param string $workStartTime
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setWorkStartTime(?string $workStartTime = null): self
    {
        // validation for constraint: string
        if (!is_null($workStartTime) && !is_string($workStartTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workStartTime, true), gettype($workStartTime)), __LINE__);
        }
        $this->workStartTime = $workStartTime;
        
        return $this;
    }
    /**
     * Get workingUser value
     * @return int|null
     */
    public function getWorkingUser(): ?int
    {
        return $this->workingUser;
    }
    /**
     * Set workingUser value
     * @param int $workingUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderDTO
     */
    public function setWorkingUser(?int $workingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($workingUser) && !(is_int($workingUser) || ctype_digit($workingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workingUser, true), gettype($workingUser)), __LINE__);
        }
        $this->workingUser = $workingUser;
        
        return $this;
    }
}
