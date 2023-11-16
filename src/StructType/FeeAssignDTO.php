<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeAssignDTO StructType
 * @subpackage Structs
 */
class FeeAssignDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The airline
     * @var string|null
     */
    protected ?string $airline = null;
    /**
     * The assumeTicketTaxPercent
     * @var bool|null
     */
    protected ?bool $assumeTicketTaxPercent = null;
    /**
     * The bookingClass
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The bookingSource
     * @var string|null
     */
    protected ?string $bookingSource = null;
    /**
     * The bookingSourceExt
     * @var string|null
     */
    protected ?string $bookingSourceExt = null;
    /**
     * The bspCode
     * @var string|null
     */
    protected ?string $bspCode = null;
    /**
     * The companyTariff
     * @var bool|null
     */
    protected ?bool $companyTariff = null;
    /**
     * The countSegments
     * @var int|null
     */
    protected ?int $countSegments = null;
    /**
     * The dbUsePerMatch
     * @var bool|null
     */
    protected ?bool $dbUsePerMatch = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureGeographicalCategory
     * @var string|null
     */
    protected ?string $departureGeographicalCategory = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The documentSubgroupEmd
     * @var string|null
     */
    protected ?string $documentSubgroupEmd = null;
    /**
     * The documentSubtype
     * @var string|null
     */
    protected ?string $documentSubtype = null;
    /**
     * The documentSubtypeEmd
     * @var string|null
     */
    protected ?string $documentSubtypeEmd = null;
    /**
     * The endTravelFrom
     * @var string|null
     */
    protected ?string $endTravelFrom = null;
    /**
     * The endTravelTo
     * @var string|null
     */
    protected ?string $endTravelTo = null;
    /**
     * The extPaymentType
     * @var string|null
     */
    protected ?string $extPaymentType = null;
    /**
     * The fareType
     * @var string|null
     */
    protected ?string $fareType = null;
    /**
     * The feeAssignId
     * @var int|null
     */
    protected ?int $feeAssignId = null;
    /**
     * The feeCategory
     * @var string|null
     */
    protected ?string $feeCategory = null;
    /**
     * The feeCode
     * @var string|null
     */
    protected ?string $feeCode = null;
    /**
     * The feeGroup
     * @var string|null
     */
    protected ?string $feeGroup = null;
    /**
     * The feeGroupId
     * @var int|null
     */
    protected ?int $feeGroupId = null;
    /**
     * The feePercent
     * @var float|null
     */
    protected ?float $feePercent = null;
    /**
     * The feePriority
     * @var int|null
     */
    protected ?int $feePriority = null;
    /**
     * The feeValue
     * @var float|null
     */
    protected ?float $feeValue = null;
    /**
     * The geographicalCategory
     * @var string|null
     */
    protected ?string $geographicalCategory = null;
    /**
     * The isAbsoluteFeePercent
     * @var bool|null
     */
    protected ?bool $isAbsoluteFeePercent = null;
    /**
     * The isDomestic
     * @var bool|null
     */
    protected ?bool $isDomestic = null;
    /**
     * The isExplicit
     * @var bool|null
     */
    protected ?bool $isExplicit = null;
    /**
     * The isNettoFeeValue
     * @var bool|null
     */
    protected ?bool $isNettoFeeValue = null;
    /**
     * The isOrderFee
     * @var bool|null
     */
    protected ?bool $isOrderFee = null;
    /**
     * The isPercentValueRounded
     * @var bool|null
     */
    protected ?bool $isPercentValueRounded = null;
    /**
     * The isUseCustomerCurrency
     * @var bool|null
     */
    protected ?bool $isUseCustomerCurrency = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The maxFeeValue
     * @var float|null
     */
    protected ?float $maxFeeValue = null;
    /**
     * The minFeeValue
     * @var float|null
     */
    protected ?float $minFeeValue = null;
    /**
     * The noFeePrevDay
     * @var bool|null
     */
    protected ?bool $noFeePrevDay = null;
    /**
     * The noFeePrevDayCategory
     * @var string|null
     */
    protected ?string $noFeePrevDayCategory = null;
    /**
     * The noFeeSameDay
     * @var bool|null
     */
    protected ?bool $noFeeSameDay = null;
    /**
     * The noFeeSameDayCategory
     * @var string|null
     */
    protected ?string $noFeeSameDayCategory = null;
    /**
     * The oneFeeRelatedTicketsImport
     * @var bool|null
     */
    protected ?bool $oneFeeRelatedTicketsImport = null;
    /**
     * The orderAttribute
     * @var string|null
     */
    protected ?string $orderAttribute = null;
    /**
     * The orderAttribute2
     * @var string|null
     */
    protected ?string $orderAttribute2 = null;
    /**
     * The orderAttribute3
     * @var string|null
     */
    protected ?string $orderAttribute3 = null;
    /**
     * The orderAttributeValue
     * @var string|null
     */
    protected ?string $orderAttributeValue = null;
    /**
     * The orderAttributeValue2
     * @var string|null
     */
    protected ?string $orderAttributeValue2 = null;
    /**
     * The orderAttributeValue3
     * @var string|null
     */
    protected ?string $orderAttributeValue3 = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The priceFrom
     * @var float|null
     */
    protected ?float $priceFrom = null;
    /**
     * The priceTo
     * @var float|null
     */
    protected ?float $priceTo = null;
    /**
     * The railDescription
     * @var string|null
     */
    protected ?string $railDescription = null;
    /**
     * The revenue
     * @var string|null
     */
    protected ?string $revenue = null;
    /**
     * The revenuePercent
     * @var float|null
     */
    protected ?float $revenuePercent = null;
    /**
     * The reverseTrip
     * @var bool|null
     */
    protected ?bool $reverseTrip = null;
    /**
     * The segmentMultiply
     * @var bool|null
     */
    protected ?bool $segmentMultiply = null;
    /**
     * The segmentValueSet
     * @var int|null
     */
    protected ?int $segmentValueSet = null;
    /**
     * The sellitemAttribute
     * @var string|null
     */
    protected ?string $sellitemAttribute = null;
    /**
     * The sellitemAttribute2
     * @var string|null
     */
    protected ?string $sellitemAttribute2 = null;
    /**
     * The sellitemAttribute3
     * @var string|null
     */
    protected ?string $sellitemAttribute3 = null;
    /**
     * The sellitemAttributeValue
     * @var string|null
     */
    protected ?string $sellitemAttributeValue = null;
    /**
     * The sellitemAttributeValue2
     * @var string|null
     */
    protected ?string $sellitemAttributeValue2 = null;
    /**
     * The sellitemAttributeValue3
     * @var string|null
     */
    protected ?string $sellitemAttributeValue3 = null;
    /**
     * The sellitemStati
     * @var string|null
     */
    protected ?string $sellitemStati = null;
    /**
     * The startTravelFrom
     * @var string|null
     */
    protected ?string $startTravelFrom = null;
    /**
     * The startTravelTo
     * @var string|null
     */
    protected ?string $startTravelTo = null;
    /**
     * The supplierGroup
     * @var string|null
     */
    protected ?string $supplierGroup = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The ticketDesignator
     * @var string|null
     */
    protected ?string $ticketDesignator = null;
    /**
     * The ticketOrigin
     * @var string|null
     */
    protected ?string $ticketOrigin = null;
    /**
     * The ticketType
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The travellerMultiply
     * @var bool|null
     */
    protected ?bool $travellerMultiply = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The useCorporateDiscount
     * @var bool|null
     */
    protected ?bool $useCorporateDiscount = null;
    /**
     * The useGlobalPrice
     * @var bool|null
     */
    protected ?bool $useGlobalPrice = null;
    /**
     * The useGroupAmount
     * @var bool|null
     */
    protected ?bool $useGroupAmount = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * Constructor method for FeeAssignDTO
     * @uses FeeAssignDTO::setAccountId()
     * @uses FeeAssignDTO::setAirline()
     * @uses FeeAssignDTO::setAssumeTicketTaxPercent()
     * @uses FeeAssignDTO::setBookingClass()
     * @uses FeeAssignDTO::setBookingSource()
     * @uses FeeAssignDTO::setBookingSourceExt()
     * @uses FeeAssignDTO::setBspCode()
     * @uses FeeAssignDTO::setCompanyTariff()
     * @uses FeeAssignDTO::setCountSegments()
     * @uses FeeAssignDTO::setDbUsePerMatch()
     * @uses FeeAssignDTO::setDebitorNo()
     * @uses FeeAssignDTO::setDepartureCode()
     * @uses FeeAssignDTO::setDepartureGeographicalCategory()
     * @uses FeeAssignDTO::setDestinationCode()
     * @uses FeeAssignDTO::setDocumentSubgroupEmd()
     * @uses FeeAssignDTO::setDocumentSubtype()
     * @uses FeeAssignDTO::setDocumentSubtypeEmd()
     * @uses FeeAssignDTO::setEndTravelFrom()
     * @uses FeeAssignDTO::setEndTravelTo()
     * @uses FeeAssignDTO::setExtPaymentType()
     * @uses FeeAssignDTO::setFareType()
     * @uses FeeAssignDTO::setFeeAssignId()
     * @uses FeeAssignDTO::setFeeCategory()
     * @uses FeeAssignDTO::setFeeCode()
     * @uses FeeAssignDTO::setFeeGroup()
     * @uses FeeAssignDTO::setFeeGroupId()
     * @uses FeeAssignDTO::setFeePercent()
     * @uses FeeAssignDTO::setFeePriority()
     * @uses FeeAssignDTO::setFeeValue()
     * @uses FeeAssignDTO::setGeographicalCategory()
     * @uses FeeAssignDTO::setIsAbsoluteFeePercent()
     * @uses FeeAssignDTO::setIsDomestic()
     * @uses FeeAssignDTO::setIsExplicit()
     * @uses FeeAssignDTO::setIsNettoFeeValue()
     * @uses FeeAssignDTO::setIsOrderFee()
     * @uses FeeAssignDTO::setIsPercentValueRounded()
     * @uses FeeAssignDTO::setIsUseCustomerCurrency()
     * @uses FeeAssignDTO::setItemType()
     * @uses FeeAssignDTO::setMaxFeeValue()
     * @uses FeeAssignDTO::setMinFeeValue()
     * @uses FeeAssignDTO::setNoFeePrevDay()
     * @uses FeeAssignDTO::setNoFeePrevDayCategory()
     * @uses FeeAssignDTO::setNoFeeSameDay()
     * @uses FeeAssignDTO::setNoFeeSameDayCategory()
     * @uses FeeAssignDTO::setOneFeeRelatedTicketsImport()
     * @uses FeeAssignDTO::setOrderAttribute()
     * @uses FeeAssignDTO::setOrderAttribute2()
     * @uses FeeAssignDTO::setOrderAttribute3()
     * @uses FeeAssignDTO::setOrderAttributeValue()
     * @uses FeeAssignDTO::setOrderAttributeValue2()
     * @uses FeeAssignDTO::setOrderAttributeValue3()
     * @uses FeeAssignDTO::setPaymentType()
     * @uses FeeAssignDTO::setPriceFrom()
     * @uses FeeAssignDTO::setPriceTo()
     * @uses FeeAssignDTO::setRailDescription()
     * @uses FeeAssignDTO::setRevenue()
     * @uses FeeAssignDTO::setRevenuePercent()
     * @uses FeeAssignDTO::setReverseTrip()
     * @uses FeeAssignDTO::setSegmentMultiply()
     * @uses FeeAssignDTO::setSegmentValueSet()
     * @uses FeeAssignDTO::setSellitemAttribute()
     * @uses FeeAssignDTO::setSellitemAttribute2()
     * @uses FeeAssignDTO::setSellitemAttribute3()
     * @uses FeeAssignDTO::setSellitemAttributeValue()
     * @uses FeeAssignDTO::setSellitemAttributeValue2()
     * @uses FeeAssignDTO::setSellitemAttributeValue3()
     * @uses FeeAssignDTO::setSellitemStati()
     * @uses FeeAssignDTO::setStartTravelFrom()
     * @uses FeeAssignDTO::setStartTravelTo()
     * @uses FeeAssignDTO::setSupplierGroup()
     * @uses FeeAssignDTO::setSupplierId()
     * @uses FeeAssignDTO::setTicketDesignator()
     * @uses FeeAssignDTO::setTicketOrigin()
     * @uses FeeAssignDTO::setTicketType()
     * @uses FeeAssignDTO::setTravellerMultiply()
     * @uses FeeAssignDTO::setTraveltype()
     * @uses FeeAssignDTO::setUnitName()
     * @uses FeeAssignDTO::setUseCorporateDiscount()
     * @uses FeeAssignDTO::setUseGlobalPrice()
     * @uses FeeAssignDTO::setUseGroupAmount()
     * @uses FeeAssignDTO::setValidFrom()
     * @uses FeeAssignDTO::setValidUntil()
     * @param string $accountId
     * @param string $airline
     * @param bool $assumeTicketTaxPercent
     * @param string $bookingClass
     * @param string $bookingSource
     * @param string $bookingSourceExt
     * @param string $bspCode
     * @param bool $companyTariff
     * @param int $countSegments
     * @param bool $dbUsePerMatch
     * @param string $debitorNo
     * @param string $departureCode
     * @param string $departureGeographicalCategory
     * @param string $destinationCode
     * @param string $documentSubgroupEmd
     * @param string $documentSubtype
     * @param string $documentSubtypeEmd
     * @param string $endTravelFrom
     * @param string $endTravelTo
     * @param string $extPaymentType
     * @param string $fareType
     * @param int $feeAssignId
     * @param string $feeCategory
     * @param string $feeCode
     * @param string $feeGroup
     * @param int $feeGroupId
     * @param float $feePercent
     * @param int $feePriority
     * @param float $feeValue
     * @param string $geographicalCategory
     * @param bool $isAbsoluteFeePercent
     * @param bool $isDomestic
     * @param bool $isExplicit
     * @param bool $isNettoFeeValue
     * @param bool $isOrderFee
     * @param bool $isPercentValueRounded
     * @param bool $isUseCustomerCurrency
     * @param string $itemType
     * @param float $maxFeeValue
     * @param float $minFeeValue
     * @param bool $noFeePrevDay
     * @param string $noFeePrevDayCategory
     * @param bool $noFeeSameDay
     * @param string $noFeeSameDayCategory
     * @param bool $oneFeeRelatedTicketsImport
     * @param string $orderAttribute
     * @param string $orderAttribute2
     * @param string $orderAttribute3
     * @param string $orderAttributeValue
     * @param string $orderAttributeValue2
     * @param string $orderAttributeValue3
     * @param string $paymentType
     * @param float $priceFrom
     * @param float $priceTo
     * @param string $railDescription
     * @param string $revenue
     * @param float $revenuePercent
     * @param bool $reverseTrip
     * @param bool $segmentMultiply
     * @param int $segmentValueSet
     * @param string $sellitemAttribute
     * @param string $sellitemAttribute2
     * @param string $sellitemAttribute3
     * @param string $sellitemAttributeValue
     * @param string $sellitemAttributeValue2
     * @param string $sellitemAttributeValue3
     * @param string $sellitemStati
     * @param string $startTravelFrom
     * @param string $startTravelTo
     * @param string $supplierGroup
     * @param string $supplierId
     * @param string $ticketDesignator
     * @param string $ticketOrigin
     * @param string $ticketType
     * @param bool $travellerMultiply
     * @param string $traveltype
     * @param string $unitName
     * @param bool $useCorporateDiscount
     * @param bool $useGlobalPrice
     * @param bool $useGroupAmount
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?string $accountId = null, ?string $airline = null, ?bool $assumeTicketTaxPercent = null, ?string $bookingClass = null, ?string $bookingSource = null, ?string $bookingSourceExt = null, ?string $bspCode = null, ?bool $companyTariff = null, ?int $countSegments = null, ?bool $dbUsePerMatch = null, ?string $debitorNo = null, ?string $departureCode = null, ?string $departureGeographicalCategory = null, ?string $destinationCode = null, ?string $documentSubgroupEmd = null, ?string $documentSubtype = null, ?string $documentSubtypeEmd = null, ?string $endTravelFrom = null, ?string $endTravelTo = null, ?string $extPaymentType = null, ?string $fareType = null, ?int $feeAssignId = null, ?string $feeCategory = null, ?string $feeCode = null, ?string $feeGroup = null, ?int $feeGroupId = null, ?float $feePercent = null, ?int $feePriority = null, ?float $feeValue = null, ?string $geographicalCategory = null, ?bool $isAbsoluteFeePercent = null, ?bool $isDomestic = null, ?bool $isExplicit = null, ?bool $isNettoFeeValue = null, ?bool $isOrderFee = null, ?bool $isPercentValueRounded = null, ?bool $isUseCustomerCurrency = null, ?string $itemType = null, ?float $maxFeeValue = null, ?float $minFeeValue = null, ?bool $noFeePrevDay = null, ?string $noFeePrevDayCategory = null, ?bool $noFeeSameDay = null, ?string $noFeeSameDayCategory = null, ?bool $oneFeeRelatedTicketsImport = null, ?string $orderAttribute = null, ?string $orderAttribute2 = null, ?string $orderAttribute3 = null, ?string $orderAttributeValue = null, ?string $orderAttributeValue2 = null, ?string $orderAttributeValue3 = null, ?string $paymentType = null, ?float $priceFrom = null, ?float $priceTo = null, ?string $railDescription = null, ?string $revenue = null, ?float $revenuePercent = null, ?bool $reverseTrip = null, ?bool $segmentMultiply = null, ?int $segmentValueSet = null, ?string $sellitemAttribute = null, ?string $sellitemAttribute2 = null, ?string $sellitemAttribute3 = null, ?string $sellitemAttributeValue = null, ?string $sellitemAttributeValue2 = null, ?string $sellitemAttributeValue3 = null, ?string $sellitemStati = null, ?string $startTravelFrom = null, ?string $startTravelTo = null, ?string $supplierGroup = null, ?string $supplierId = null, ?string $ticketDesignator = null, ?string $ticketOrigin = null, ?string $ticketType = null, ?bool $travellerMultiply = null, ?string $traveltype = null, ?string $unitName = null, ?bool $useCorporateDiscount = null, ?bool $useGlobalPrice = null, ?bool $useGroupAmount = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAirline($airline)
            ->setAssumeTicketTaxPercent($assumeTicketTaxPercent)
            ->setBookingClass($bookingClass)
            ->setBookingSource($bookingSource)
            ->setBookingSourceExt($bookingSourceExt)
            ->setBspCode($bspCode)
            ->setCompanyTariff($companyTariff)
            ->setCountSegments($countSegments)
            ->setDbUsePerMatch($dbUsePerMatch)
            ->setDebitorNo($debitorNo)
            ->setDepartureCode($departureCode)
            ->setDepartureGeographicalCategory($departureGeographicalCategory)
            ->setDestinationCode($destinationCode)
            ->setDocumentSubgroupEmd($documentSubgroupEmd)
            ->setDocumentSubtype($documentSubtype)
            ->setDocumentSubtypeEmd($documentSubtypeEmd)
            ->setEndTravelFrom($endTravelFrom)
            ->setEndTravelTo($endTravelTo)
            ->setExtPaymentType($extPaymentType)
            ->setFareType($fareType)
            ->setFeeAssignId($feeAssignId)
            ->setFeeCategory($feeCategory)
            ->setFeeCode($feeCode)
            ->setFeeGroup($feeGroup)
            ->setFeeGroupId($feeGroupId)
            ->setFeePercent($feePercent)
            ->setFeePriority($feePriority)
            ->setFeeValue($feeValue)
            ->setGeographicalCategory($geographicalCategory)
            ->setIsAbsoluteFeePercent($isAbsoluteFeePercent)
            ->setIsDomestic($isDomestic)
            ->setIsExplicit($isExplicit)
            ->setIsNettoFeeValue($isNettoFeeValue)
            ->setIsOrderFee($isOrderFee)
            ->setIsPercentValueRounded($isPercentValueRounded)
            ->setIsUseCustomerCurrency($isUseCustomerCurrency)
            ->setItemType($itemType)
            ->setMaxFeeValue($maxFeeValue)
            ->setMinFeeValue($minFeeValue)
            ->setNoFeePrevDay($noFeePrevDay)
            ->setNoFeePrevDayCategory($noFeePrevDayCategory)
            ->setNoFeeSameDay($noFeeSameDay)
            ->setNoFeeSameDayCategory($noFeeSameDayCategory)
            ->setOneFeeRelatedTicketsImport($oneFeeRelatedTicketsImport)
            ->setOrderAttribute($orderAttribute)
            ->setOrderAttribute2($orderAttribute2)
            ->setOrderAttribute3($orderAttribute3)
            ->setOrderAttributeValue($orderAttributeValue)
            ->setOrderAttributeValue2($orderAttributeValue2)
            ->setOrderAttributeValue3($orderAttributeValue3)
            ->setPaymentType($paymentType)
            ->setPriceFrom($priceFrom)
            ->setPriceTo($priceTo)
            ->setRailDescription($railDescription)
            ->setRevenue($revenue)
            ->setRevenuePercent($revenuePercent)
            ->setReverseTrip($reverseTrip)
            ->setSegmentMultiply($segmentMultiply)
            ->setSegmentValueSet($segmentValueSet)
            ->setSellitemAttribute($sellitemAttribute)
            ->setSellitemAttribute2($sellitemAttribute2)
            ->setSellitemAttribute3($sellitemAttribute3)
            ->setSellitemAttributeValue($sellitemAttributeValue)
            ->setSellitemAttributeValue2($sellitemAttributeValue2)
            ->setSellitemAttributeValue3($sellitemAttributeValue3)
            ->setSellitemStati($sellitemStati)
            ->setStartTravelFrom($startTravelFrom)
            ->setStartTravelTo($startTravelTo)
            ->setSupplierGroup($supplierGroup)
            ->setSupplierId($supplierId)
            ->setTicketDesignator($ticketDesignator)
            ->setTicketOrigin($ticketOrigin)
            ->setTicketType($ticketType)
            ->setTravellerMultiply($travellerMultiply)
            ->setTraveltype($traveltype)
            ->setUnitName($unitName)
            ->setUseCorporateDiscount($useCorporateDiscount)
            ->setUseGlobalPrice($useGlobalPrice)
            ->setUseGroupAmount($useGroupAmount)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get airline value
     * @return string|null
     */
    public function getAirline(): ?string
    {
        return $this->airline;
    }
    /**
     * Set airline value
     * @param string $airline
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setAirline(?string $airline = null): self
    {
        // validation for constraint: string
        if (!is_null($airline) && !is_string($airline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airline, true), gettype($airline)), __LINE__);
        }
        $this->airline = $airline;
        
        return $this;
    }
    /**
     * Get assumeTicketTaxPercent value
     * @return bool|null
     */
    public function getAssumeTicketTaxPercent(): ?bool
    {
        return $this->assumeTicketTaxPercent;
    }
    /**
     * Set assumeTicketTaxPercent value
     * @param bool $assumeTicketTaxPercent
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setAssumeTicketTaxPercent(?bool $assumeTicketTaxPercent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($assumeTicketTaxPercent) && !is_bool($assumeTicketTaxPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($assumeTicketTaxPercent, true), gettype($assumeTicketTaxPercent)), __LINE__);
        }
        $this->assumeTicketTaxPercent = $assumeTicketTaxPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get bookingSource value
     * @return string|null
     */
    public function getBookingSource(): ?string
    {
        return $this->bookingSource;
    }
    /**
     * Set bookingSource value
     * @param string $bookingSource
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setBookingSource(?string $bookingSource = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingSource) && !is_string($bookingSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingSource, true), gettype($bookingSource)), __LINE__);
        }
        $this->bookingSource = $bookingSource;
        
        return $this;
    }
    /**
     * Get bookingSourceExt value
     * @return string|null
     */
    public function getBookingSourceExt(): ?string
    {
        return $this->bookingSourceExt;
    }
    /**
     * Set bookingSourceExt value
     * @param string $bookingSourceExt
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setBookingSourceExt(?string $bookingSourceExt = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingSourceExt) && !is_string($bookingSourceExt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingSourceExt, true), gettype($bookingSourceExt)), __LINE__);
        }
        $this->bookingSourceExt = $bookingSourceExt;
        
        return $this;
    }
    /**
     * Get bspCode value
     * @return string|null
     */
    public function getBspCode(): ?string
    {
        return $this->bspCode;
    }
    /**
     * Set bspCode value
     * @param string $bspCode
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setBspCode(?string $bspCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bspCode) && !is_string($bspCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspCode, true), gettype($bspCode)), __LINE__);
        }
        $this->bspCode = $bspCode;
        
        return $this;
    }
    /**
     * Get companyTariff value
     * @return bool|null
     */
    public function getCompanyTariff(): ?bool
    {
        return $this->companyTariff;
    }
    /**
     * Set companyTariff value
     * @param bool $companyTariff
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setCompanyTariff(?bool $companyTariff = null): self
    {
        // validation for constraint: boolean
        if (!is_null($companyTariff) && !is_bool($companyTariff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($companyTariff, true), gettype($companyTariff)), __LINE__);
        }
        $this->companyTariff = $companyTariff;
        
        return $this;
    }
    /**
     * Get countSegments value
     * @return int|null
     */
    public function getCountSegments(): ?int
    {
        return $this->countSegments;
    }
    /**
     * Set countSegments value
     * @param int $countSegments
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setCountSegments(?int $countSegments = null): self
    {
        // validation for constraint: int
        if (!is_null($countSegments) && !(is_int($countSegments) || ctype_digit($countSegments))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countSegments, true), gettype($countSegments)), __LINE__);
        }
        $this->countSegments = $countSegments;
        
        return $this;
    }
    /**
     * Get dbUsePerMatch value
     * @return bool|null
     */
    public function getDbUsePerMatch(): ?bool
    {
        return $this->dbUsePerMatch;
    }
    /**
     * Set dbUsePerMatch value
     * @param bool $dbUsePerMatch
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setDbUsePerMatch(?bool $dbUsePerMatch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dbUsePerMatch) && !is_bool($dbUsePerMatch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dbUsePerMatch, true), gettype($dbUsePerMatch)), __LINE__);
        }
        $this->dbUsePerMatch = $dbUsePerMatch;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get departureGeographicalCategory value
     * @return string|null
     */
    public function getDepartureGeographicalCategory(): ?string
    {
        return $this->departureGeographicalCategory;
    }
    /**
     * Set departureGeographicalCategory value
     * @param string $departureGeographicalCategory
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setDepartureGeographicalCategory(?string $departureGeographicalCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($departureGeographicalCategory) && !is_string($departureGeographicalCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureGeographicalCategory, true), gettype($departureGeographicalCategory)), __LINE__);
        }
        $this->departureGeographicalCategory = $departureGeographicalCategory;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get documentSubgroupEmd value
     * @return string|null
     */
    public function getDocumentSubgroupEmd(): ?string
    {
        return $this->documentSubgroupEmd;
    }
    /**
     * Set documentSubgroupEmd value
     * @param string $documentSubgroupEmd
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setDocumentSubgroupEmd(?string $documentSubgroupEmd = null): self
    {
        // validation for constraint: string
        if (!is_null($documentSubgroupEmd) && !is_string($documentSubgroupEmd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentSubgroupEmd, true), gettype($documentSubgroupEmd)), __LINE__);
        }
        $this->documentSubgroupEmd = $documentSubgroupEmd;
        
        return $this;
    }
    /**
     * Get documentSubtype value
     * @return string|null
     */
    public function getDocumentSubtype(): ?string
    {
        return $this->documentSubtype;
    }
    /**
     * Set documentSubtype value
     * @param string $documentSubtype
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setDocumentSubtype(?string $documentSubtype = null): self
    {
        // validation for constraint: string
        if (!is_null($documentSubtype) && !is_string($documentSubtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentSubtype, true), gettype($documentSubtype)), __LINE__);
        }
        $this->documentSubtype = $documentSubtype;
        
        return $this;
    }
    /**
     * Get documentSubtypeEmd value
     * @return string|null
     */
    public function getDocumentSubtypeEmd(): ?string
    {
        return $this->documentSubtypeEmd;
    }
    /**
     * Set documentSubtypeEmd value
     * @param string $documentSubtypeEmd
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setDocumentSubtypeEmd(?string $documentSubtypeEmd = null): self
    {
        // validation for constraint: string
        if (!is_null($documentSubtypeEmd) && !is_string($documentSubtypeEmd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentSubtypeEmd, true), gettype($documentSubtypeEmd)), __LINE__);
        }
        $this->documentSubtypeEmd = $documentSubtypeEmd;
        
        return $this;
    }
    /**
     * Get endTravelFrom value
     * @return string|null
     */
    public function getEndTravelFrom(): ?string
    {
        return $this->endTravelFrom;
    }
    /**
     * Set endTravelFrom value
     * @param string $endTravelFrom
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setEndTravelFrom(?string $endTravelFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelFrom) && !is_string($endTravelFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelFrom, true), gettype($endTravelFrom)), __LINE__);
        }
        $this->endTravelFrom = $endTravelFrom;
        
        return $this;
    }
    /**
     * Get endTravelTo value
     * @return string|null
     */
    public function getEndTravelTo(): ?string
    {
        return $this->endTravelTo;
    }
    /**
     * Set endTravelTo value
     * @param string $endTravelTo
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setEndTravelTo(?string $endTravelTo = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelTo) && !is_string($endTravelTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelTo, true), gettype($endTravelTo)), __LINE__);
        }
        $this->endTravelTo = $endTravelTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get fareType value
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }
    /**
     * Set fareType value
     * @param string $fareType
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setFareType(?string $fareType = null): self
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareType, true), gettype($fareType)), __LINE__);
        }
        $this->fareType = $fareType;
        
        return $this;
    }
    /**
     * Get feeAssignId value
     * @return int|null
     */
    public function getFeeAssignId(): ?int
    {
        return $this->feeAssignId;
    }
    /**
     * Set feeAssignId value
     * @param int $feeAssignId
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setFeeAssignId(?int $feeAssignId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeAssignId) && !(is_int($feeAssignId) || ctype_digit($feeAssignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeAssignId, true), gettype($feeAssignId)), __LINE__);
        }
        $this->feeAssignId = $feeAssignId;
        
        return $this;
    }
    /**
     * Get feeCategory value
     * @return string|null
     */
    public function getFeeCategory(): ?string
    {
        return $this->feeCategory;
    }
    /**
     * Set feeCategory value
     * @param string $feeCategory
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setFeeCategory(?string $feeCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCategory) && !is_string($feeCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCategory, true), gettype($feeCategory)), __LINE__);
        }
        $this->feeCategory = $feeCategory;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get feeGroup value
     * @return string|null
     */
    public function getFeeGroup(): ?string
    {
        return $this->feeGroup;
    }
    /**
     * Set feeGroup value
     * @param string $feeGroup
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setFeeGroup(?string $feeGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($feeGroup) && !is_string($feeGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeGroup, true), gettype($feeGroup)), __LINE__);
        }
        $this->feeGroup = $feeGroup;
        
        return $this;
    }
    /**
     * Get feeGroupId value
     * @return int|null
     */
    public function getFeeGroupId(): ?int
    {
        return $this->feeGroupId;
    }
    /**
     * Set feeGroupId value
     * @param int $feeGroupId
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setFeeGroupId(?int $feeGroupId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeGroupId) && !(is_int($feeGroupId) || ctype_digit($feeGroupId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeGroupId, true), gettype($feeGroupId)), __LINE__);
        }
        $this->feeGroupId = $feeGroupId;
        
        return $this;
    }
    /**
     * Get feePercent value
     * @return float|null
     */
    public function getFeePercent(): ?float
    {
        return $this->feePercent;
    }
    /**
     * Set feePercent value
     * @param float $feePercent
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setFeePercent(?float $feePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($feePercent) && !(is_float($feePercent) || is_numeric($feePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feePercent, true), gettype($feePercent)), __LINE__);
        }
        $this->feePercent = $feePercent;
        
        return $this;
    }
    /**
     * Get feePriority value
     * @return int|null
     */
    public function getFeePriority(): ?int
    {
        return $this->feePriority;
    }
    /**
     * Set feePriority value
     * @param int $feePriority
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setFeePriority(?int $feePriority = null): self
    {
        // validation for constraint: int
        if (!is_null($feePriority) && !(is_int($feePriority) || ctype_digit($feePriority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feePriority, true), gettype($feePriority)), __LINE__);
        }
        $this->feePriority = $feePriority;
        
        return $this;
    }
    /**
     * Get feeValue value
     * @return float|null
     */
    public function getFeeValue(): ?float
    {
        return $this->feeValue;
    }
    /**
     * Set feeValue value
     * @param float $feeValue
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setFeeValue(?float $feeValue = null): self
    {
        // validation for constraint: float
        if (!is_null($feeValue) && !(is_float($feeValue) || is_numeric($feeValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeValue, true), gettype($feeValue)), __LINE__);
        }
        $this->feeValue = $feeValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get isAbsoluteFeePercent value
     * @return bool|null
     */
    public function getIsAbsoluteFeePercent(): ?bool
    {
        return $this->isAbsoluteFeePercent;
    }
    /**
     * Set isAbsoluteFeePercent value
     * @param bool $isAbsoluteFeePercent
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setIsAbsoluteFeePercent(?bool $isAbsoluteFeePercent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAbsoluteFeePercent) && !is_bool($isAbsoluteFeePercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAbsoluteFeePercent, true), gettype($isAbsoluteFeePercent)), __LINE__);
        }
        $this->isAbsoluteFeePercent = $isAbsoluteFeePercent;
        
        return $this;
    }
    /**
     * Get isDomestic value
     * @return bool|null
     */
    public function getIsDomestic(): ?bool
    {
        return $this->isDomestic;
    }
    /**
     * Set isDomestic value
     * @param bool $isDomestic
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setIsDomestic(?bool $isDomestic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDomestic) && !is_bool($isDomestic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDomestic, true), gettype($isDomestic)), __LINE__);
        }
        $this->isDomestic = $isDomestic;
        
        return $this;
    }
    /**
     * Get isExplicit value
     * @return bool|null
     */
    public function getIsExplicit(): ?bool
    {
        return $this->isExplicit;
    }
    /**
     * Set isExplicit value
     * @param bool $isExplicit
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setIsExplicit(?bool $isExplicit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExplicit) && !is_bool($isExplicit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExplicit, true), gettype($isExplicit)), __LINE__);
        }
        $this->isExplicit = $isExplicit;
        
        return $this;
    }
    /**
     * Get isNettoFeeValue value
     * @return bool|null
     */
    public function getIsNettoFeeValue(): ?bool
    {
        return $this->isNettoFeeValue;
    }
    /**
     * Set isNettoFeeValue value
     * @param bool $isNettoFeeValue
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setIsNettoFeeValue(?bool $isNettoFeeValue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNettoFeeValue) && !is_bool($isNettoFeeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNettoFeeValue, true), gettype($isNettoFeeValue)), __LINE__);
        }
        $this->isNettoFeeValue = $isNettoFeeValue;
        
        return $this;
    }
    /**
     * Get isOrderFee value
     * @return bool|null
     */
    public function getIsOrderFee(): ?bool
    {
        return $this->isOrderFee;
    }
    /**
     * Set isOrderFee value
     * @param bool $isOrderFee
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setIsOrderFee(?bool $isOrderFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrderFee) && !is_bool($isOrderFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrderFee, true), gettype($isOrderFee)), __LINE__);
        }
        $this->isOrderFee = $isOrderFee;
        
        return $this;
    }
    /**
     * Get isPercentValueRounded value
     * @return bool|null
     */
    public function getIsPercentValueRounded(): ?bool
    {
        return $this->isPercentValueRounded;
    }
    /**
     * Set isPercentValueRounded value
     * @param bool $isPercentValueRounded
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setIsPercentValueRounded(?bool $isPercentValueRounded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPercentValueRounded) && !is_bool($isPercentValueRounded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPercentValueRounded, true), gettype($isPercentValueRounded)), __LINE__);
        }
        $this->isPercentValueRounded = $isPercentValueRounded;
        
        return $this;
    }
    /**
     * Get isUseCustomerCurrency value
     * @return bool|null
     */
    public function getIsUseCustomerCurrency(): ?bool
    {
        return $this->isUseCustomerCurrency;
    }
    /**
     * Set isUseCustomerCurrency value
     * @param bool $isUseCustomerCurrency
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setIsUseCustomerCurrency(?bool $isUseCustomerCurrency = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUseCustomerCurrency) && !is_bool($isUseCustomerCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUseCustomerCurrency, true), gettype($isUseCustomerCurrency)), __LINE__);
        }
        $this->isUseCustomerCurrency = $isUseCustomerCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get maxFeeValue value
     * @return float|null
     */
    public function getMaxFeeValue(): ?float
    {
        return $this->maxFeeValue;
    }
    /**
     * Set maxFeeValue value
     * @param float $maxFeeValue
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setMaxFeeValue(?float $maxFeeValue = null): self
    {
        // validation for constraint: float
        if (!is_null($maxFeeValue) && !(is_float($maxFeeValue) || is_numeric($maxFeeValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxFeeValue, true), gettype($maxFeeValue)), __LINE__);
        }
        $this->maxFeeValue = $maxFeeValue;
        
        return $this;
    }
    /**
     * Get minFeeValue value
     * @return float|null
     */
    public function getMinFeeValue(): ?float
    {
        return $this->minFeeValue;
    }
    /**
     * Set minFeeValue value
     * @param float $minFeeValue
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setMinFeeValue(?float $minFeeValue = null): self
    {
        // validation for constraint: float
        if (!is_null($minFeeValue) && !(is_float($minFeeValue) || is_numeric($minFeeValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minFeeValue, true), gettype($minFeeValue)), __LINE__);
        }
        $this->minFeeValue = $minFeeValue;
        
        return $this;
    }
    /**
     * Get noFeePrevDay value
     * @return bool|null
     */
    public function getNoFeePrevDay(): ?bool
    {
        return $this->noFeePrevDay;
    }
    /**
     * Set noFeePrevDay value
     * @param bool $noFeePrevDay
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setNoFeePrevDay(?bool $noFeePrevDay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noFeePrevDay) && !is_bool($noFeePrevDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noFeePrevDay, true), gettype($noFeePrevDay)), __LINE__);
        }
        $this->noFeePrevDay = $noFeePrevDay;
        
        return $this;
    }
    /**
     * Get noFeePrevDayCategory value
     * @return string|null
     */
    public function getNoFeePrevDayCategory(): ?string
    {
        return $this->noFeePrevDayCategory;
    }
    /**
     * Set noFeePrevDayCategory value
     * @param string $noFeePrevDayCategory
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setNoFeePrevDayCategory(?string $noFeePrevDayCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($noFeePrevDayCategory) && !is_string($noFeePrevDayCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noFeePrevDayCategory, true), gettype($noFeePrevDayCategory)), __LINE__);
        }
        $this->noFeePrevDayCategory = $noFeePrevDayCategory;
        
        return $this;
    }
    /**
     * Get noFeeSameDay value
     * @return bool|null
     */
    public function getNoFeeSameDay(): ?bool
    {
        return $this->noFeeSameDay;
    }
    /**
     * Set noFeeSameDay value
     * @param bool $noFeeSameDay
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setNoFeeSameDay(?bool $noFeeSameDay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noFeeSameDay) && !is_bool($noFeeSameDay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noFeeSameDay, true), gettype($noFeeSameDay)), __LINE__);
        }
        $this->noFeeSameDay = $noFeeSameDay;
        
        return $this;
    }
    /**
     * Get noFeeSameDayCategory value
     * @return string|null
     */
    public function getNoFeeSameDayCategory(): ?string
    {
        return $this->noFeeSameDayCategory;
    }
    /**
     * Set noFeeSameDayCategory value
     * @param string $noFeeSameDayCategory
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setNoFeeSameDayCategory(?string $noFeeSameDayCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($noFeeSameDayCategory) && !is_string($noFeeSameDayCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noFeeSameDayCategory, true), gettype($noFeeSameDayCategory)), __LINE__);
        }
        $this->noFeeSameDayCategory = $noFeeSameDayCategory;
        
        return $this;
    }
    /**
     * Get oneFeeRelatedTicketsImport value
     * @return bool|null
     */
    public function getOneFeeRelatedTicketsImport(): ?bool
    {
        return $this->oneFeeRelatedTicketsImport;
    }
    /**
     * Set oneFeeRelatedTicketsImport value
     * @param bool $oneFeeRelatedTicketsImport
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setOneFeeRelatedTicketsImport(?bool $oneFeeRelatedTicketsImport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oneFeeRelatedTicketsImport) && !is_bool($oneFeeRelatedTicketsImport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oneFeeRelatedTicketsImport, true), gettype($oneFeeRelatedTicketsImport)), __LINE__);
        }
        $this->oneFeeRelatedTicketsImport = $oneFeeRelatedTicketsImport;
        
        return $this;
    }
    /**
     * Get orderAttribute value
     * @return string|null
     */
    public function getOrderAttribute(): ?string
    {
        return $this->orderAttribute;
    }
    /**
     * Set orderAttribute value
     * @param string $orderAttribute
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setOrderAttribute(?string $orderAttribute = null): self
    {
        // validation for constraint: string
        if (!is_null($orderAttribute) && !is_string($orderAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderAttribute, true), gettype($orderAttribute)), __LINE__);
        }
        $this->orderAttribute = $orderAttribute;
        
        return $this;
    }
    /**
     * Get orderAttribute2 value
     * @return string|null
     */
    public function getOrderAttribute2(): ?string
    {
        return $this->orderAttribute2;
    }
    /**
     * Set orderAttribute2 value
     * @param string $orderAttribute2
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setOrderAttribute2(?string $orderAttribute2 = null): self
    {
        // validation for constraint: string
        if (!is_null($orderAttribute2) && !is_string($orderAttribute2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderAttribute2, true), gettype($orderAttribute2)), __LINE__);
        }
        $this->orderAttribute2 = $orderAttribute2;
        
        return $this;
    }
    /**
     * Get orderAttribute3 value
     * @return string|null
     */
    public function getOrderAttribute3(): ?string
    {
        return $this->orderAttribute3;
    }
    /**
     * Set orderAttribute3 value
     * @param string $orderAttribute3
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setOrderAttribute3(?string $orderAttribute3 = null): self
    {
        // validation for constraint: string
        if (!is_null($orderAttribute3) && !is_string($orderAttribute3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderAttribute3, true), gettype($orderAttribute3)), __LINE__);
        }
        $this->orderAttribute3 = $orderAttribute3;
        
        return $this;
    }
    /**
     * Get orderAttributeValue value
     * @return string|null
     */
    public function getOrderAttributeValue(): ?string
    {
        return $this->orderAttributeValue;
    }
    /**
     * Set orderAttributeValue value
     * @param string $orderAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setOrderAttributeValue(?string $orderAttributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($orderAttributeValue) && !is_string($orderAttributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderAttributeValue, true), gettype($orderAttributeValue)), __LINE__);
        }
        $this->orderAttributeValue = $orderAttributeValue;
        
        return $this;
    }
    /**
     * Get orderAttributeValue2 value
     * @return string|null
     */
    public function getOrderAttributeValue2(): ?string
    {
        return $this->orderAttributeValue2;
    }
    /**
     * Set orderAttributeValue2 value
     * @param string $orderAttributeValue2
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setOrderAttributeValue2(?string $orderAttributeValue2 = null): self
    {
        // validation for constraint: string
        if (!is_null($orderAttributeValue2) && !is_string($orderAttributeValue2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderAttributeValue2, true), gettype($orderAttributeValue2)), __LINE__);
        }
        $this->orderAttributeValue2 = $orderAttributeValue2;
        
        return $this;
    }
    /**
     * Get orderAttributeValue3 value
     * @return string|null
     */
    public function getOrderAttributeValue3(): ?string
    {
        return $this->orderAttributeValue3;
    }
    /**
     * Set orderAttributeValue3 value
     * @param string $orderAttributeValue3
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setOrderAttributeValue3(?string $orderAttributeValue3 = null): self
    {
        // validation for constraint: string
        if (!is_null($orderAttributeValue3) && !is_string($orderAttributeValue3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderAttributeValue3, true), gettype($orderAttributeValue3)), __LINE__);
        }
        $this->orderAttributeValue3 = $orderAttributeValue3;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get priceFrom value
     * @return float|null
     */
    public function getPriceFrom(): ?float
    {
        return $this->priceFrom;
    }
    /**
     * Set priceFrom value
     * @param float $priceFrom
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setPriceFrom(?float $priceFrom = null): self
    {
        // validation for constraint: float
        if (!is_null($priceFrom) && !(is_float($priceFrom) || is_numeric($priceFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceFrom, true), gettype($priceFrom)), __LINE__);
        }
        $this->priceFrom = $priceFrom;
        
        return $this;
    }
    /**
     * Get priceTo value
     * @return float|null
     */
    public function getPriceTo(): ?float
    {
        return $this->priceTo;
    }
    /**
     * Set priceTo value
     * @param float $priceTo
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setPriceTo(?float $priceTo = null): self
    {
        // validation for constraint: float
        if (!is_null($priceTo) && !(is_float($priceTo) || is_numeric($priceTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceTo, true), gettype($priceTo)), __LINE__);
        }
        $this->priceTo = $priceTo;
        
        return $this;
    }
    /**
     * Get railDescription value
     * @return string|null
     */
    public function getRailDescription(): ?string
    {
        return $this->railDescription;
    }
    /**
     * Set railDescription value
     * @param string $railDescription
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setRailDescription(?string $railDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($railDescription) && !is_string($railDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railDescription, true), gettype($railDescription)), __LINE__);
        }
        $this->railDescription = $railDescription;
        
        return $this;
    }
    /**
     * Get revenue value
     * @return string|null
     */
    public function getRevenue(): ?string
    {
        return $this->revenue;
    }
    /**
     * Set revenue value
     * @param string $revenue
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setRevenue(?string $revenue = null): self
    {
        // validation for constraint: string
        if (!is_null($revenue) && !is_string($revenue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($revenue, true), gettype($revenue)), __LINE__);
        }
        $this->revenue = $revenue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get reverseTrip value
     * @return bool|null
     */
    public function getReverseTrip(): ?bool
    {
        return $this->reverseTrip;
    }
    /**
     * Set reverseTrip value
     * @param bool $reverseTrip
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setReverseTrip(?bool $reverseTrip = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reverseTrip) && !is_bool($reverseTrip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reverseTrip, true), gettype($reverseTrip)), __LINE__);
        }
        $this->reverseTrip = $reverseTrip;
        
        return $this;
    }
    /**
     * Get segmentMultiply value
     * @return bool|null
     */
    public function getSegmentMultiply(): ?bool
    {
        return $this->segmentMultiply;
    }
    /**
     * Set segmentMultiply value
     * @param bool $segmentMultiply
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSegmentMultiply(?bool $segmentMultiply = null): self
    {
        // validation for constraint: boolean
        if (!is_null($segmentMultiply) && !is_bool($segmentMultiply)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($segmentMultiply, true), gettype($segmentMultiply)), __LINE__);
        }
        $this->segmentMultiply = $segmentMultiply;
        
        return $this;
    }
    /**
     * Get segmentValueSet value
     * @return int|null
     */
    public function getSegmentValueSet(): ?int
    {
        return $this->segmentValueSet;
    }
    /**
     * Set segmentValueSet value
     * @param int $segmentValueSet
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSegmentValueSet(?int $segmentValueSet = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentValueSet) && !(is_int($segmentValueSet) || ctype_digit($segmentValueSet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentValueSet, true), gettype($segmentValueSet)), __LINE__);
        }
        $this->segmentValueSet = $segmentValueSet;
        
        return $this;
    }
    /**
     * Get sellitemAttribute value
     * @return string|null
     */
    public function getSellitemAttribute(): ?string
    {
        return $this->sellitemAttribute;
    }
    /**
     * Set sellitemAttribute value
     * @param string $sellitemAttribute
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSellitemAttribute(?string $sellitemAttribute = null): self
    {
        // validation for constraint: string
        if (!is_null($sellitemAttribute) && !is_string($sellitemAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellitemAttribute, true), gettype($sellitemAttribute)), __LINE__);
        }
        $this->sellitemAttribute = $sellitemAttribute;
        
        return $this;
    }
    /**
     * Get sellitemAttribute2 value
     * @return string|null
     */
    public function getSellitemAttribute2(): ?string
    {
        return $this->sellitemAttribute2;
    }
    /**
     * Set sellitemAttribute2 value
     * @param string $sellitemAttribute2
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSellitemAttribute2(?string $sellitemAttribute2 = null): self
    {
        // validation for constraint: string
        if (!is_null($sellitemAttribute2) && !is_string($sellitemAttribute2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellitemAttribute2, true), gettype($sellitemAttribute2)), __LINE__);
        }
        $this->sellitemAttribute2 = $sellitemAttribute2;
        
        return $this;
    }
    /**
     * Get sellitemAttribute3 value
     * @return string|null
     */
    public function getSellitemAttribute3(): ?string
    {
        return $this->sellitemAttribute3;
    }
    /**
     * Set sellitemAttribute3 value
     * @param string $sellitemAttribute3
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSellitemAttribute3(?string $sellitemAttribute3 = null): self
    {
        // validation for constraint: string
        if (!is_null($sellitemAttribute3) && !is_string($sellitemAttribute3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellitemAttribute3, true), gettype($sellitemAttribute3)), __LINE__);
        }
        $this->sellitemAttribute3 = $sellitemAttribute3;
        
        return $this;
    }
    /**
     * Get sellitemAttributeValue value
     * @return string|null
     */
    public function getSellitemAttributeValue(): ?string
    {
        return $this->sellitemAttributeValue;
    }
    /**
     * Set sellitemAttributeValue value
     * @param string $sellitemAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSellitemAttributeValue(?string $sellitemAttributeValue = null): self
    {
        // validation for constraint: string
        if (!is_null($sellitemAttributeValue) && !is_string($sellitemAttributeValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellitemAttributeValue, true), gettype($sellitemAttributeValue)), __LINE__);
        }
        $this->sellitemAttributeValue = $sellitemAttributeValue;
        
        return $this;
    }
    /**
     * Get sellitemAttributeValue2 value
     * @return string|null
     */
    public function getSellitemAttributeValue2(): ?string
    {
        return $this->sellitemAttributeValue2;
    }
    /**
     * Set sellitemAttributeValue2 value
     * @param string $sellitemAttributeValue2
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSellitemAttributeValue2(?string $sellitemAttributeValue2 = null): self
    {
        // validation for constraint: string
        if (!is_null($sellitemAttributeValue2) && !is_string($sellitemAttributeValue2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellitemAttributeValue2, true), gettype($sellitemAttributeValue2)), __LINE__);
        }
        $this->sellitemAttributeValue2 = $sellitemAttributeValue2;
        
        return $this;
    }
    /**
     * Get sellitemAttributeValue3 value
     * @return string|null
     */
    public function getSellitemAttributeValue3(): ?string
    {
        return $this->sellitemAttributeValue3;
    }
    /**
     * Set sellitemAttributeValue3 value
     * @param string $sellitemAttributeValue3
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSellitemAttributeValue3(?string $sellitemAttributeValue3 = null): self
    {
        // validation for constraint: string
        if (!is_null($sellitemAttributeValue3) && !is_string($sellitemAttributeValue3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellitemAttributeValue3, true), gettype($sellitemAttributeValue3)), __LINE__);
        }
        $this->sellitemAttributeValue3 = $sellitemAttributeValue3;
        
        return $this;
    }
    /**
     * Get sellitemStati value
     * @return string|null
     */
    public function getSellitemStati(): ?string
    {
        return $this->sellitemStati;
    }
    /**
     * Set sellitemStati value
     * @param string $sellitemStati
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSellitemStati(?string $sellitemStati = null): self
    {
        // validation for constraint: string
        if (!is_null($sellitemStati) && !is_string($sellitemStati)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellitemStati, true), gettype($sellitemStati)), __LINE__);
        }
        $this->sellitemStati = $sellitemStati;
        
        return $this;
    }
    /**
     * Get startTravelFrom value
     * @return string|null
     */
    public function getStartTravelFrom(): ?string
    {
        return $this->startTravelFrom;
    }
    /**
     * Set startTravelFrom value
     * @param string $startTravelFrom
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setStartTravelFrom(?string $startTravelFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelFrom) && !is_string($startTravelFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelFrom, true), gettype($startTravelFrom)), __LINE__);
        }
        $this->startTravelFrom = $startTravelFrom;
        
        return $this;
    }
    /**
     * Get startTravelTo value
     * @return string|null
     */
    public function getStartTravelTo(): ?string
    {
        return $this->startTravelTo;
    }
    /**
     * Set startTravelTo value
     * @param string $startTravelTo
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setStartTravelTo(?string $startTravelTo = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelTo) && !is_string($startTravelTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelTo, true), gettype($startTravelTo)), __LINE__);
        }
        $this->startTravelTo = $startTravelTo;
        
        return $this;
    }
    /**
     * Get supplierGroup value
     * @return string|null
     */
    public function getSupplierGroup(): ?string
    {
        return $this->supplierGroup;
    }
    /**
     * Set supplierGroup value
     * @param string $supplierGroup
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setSupplierGroup(?string $supplierGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierGroup) && !is_string($supplierGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierGroup, true), gettype($supplierGroup)), __LINE__);
        }
        $this->supplierGroup = $supplierGroup;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get ticketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }
    /**
     * Set ticketDesignator value
     * @param string $ticketDesignator
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        $this->ticketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Get ticketOrigin value
     * @return string|null
     */
    public function getTicketOrigin(): ?string
    {
        return $this->ticketOrigin;
    }
    /**
     * Set ticketOrigin value
     * @param string $ticketOrigin
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setTicketOrigin(?string $ticketOrigin = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketOrigin) && !is_string($ticketOrigin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketOrigin, true), gettype($ticketOrigin)), __LINE__);
        }
        $this->ticketOrigin = $ticketOrigin;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get travellerMultiply value
     * @return bool|null
     */
    public function getTravellerMultiply(): ?bool
    {
        return $this->travellerMultiply;
    }
    /**
     * Set travellerMultiply value
     * @param bool $travellerMultiply
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setTravellerMultiply(?bool $travellerMultiply = null): self
    {
        // validation for constraint: boolean
        if (!is_null($travellerMultiply) && !is_bool($travellerMultiply)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($travellerMultiply, true), gettype($travellerMultiply)), __LINE__);
        }
        $this->travellerMultiply = $travellerMultiply;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get useCorporateDiscount value
     * @return bool|null
     */
    public function getUseCorporateDiscount(): ?bool
    {
        return $this->useCorporateDiscount;
    }
    /**
     * Set useCorporateDiscount value
     * @param bool $useCorporateDiscount
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setUseCorporateDiscount(?bool $useCorporateDiscount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useCorporateDiscount) && !is_bool($useCorporateDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useCorporateDiscount, true), gettype($useCorporateDiscount)), __LINE__);
        }
        $this->useCorporateDiscount = $useCorporateDiscount;
        
        return $this;
    }
    /**
     * Get useGlobalPrice value
     * @return bool|null
     */
    public function getUseGlobalPrice(): ?bool
    {
        return $this->useGlobalPrice;
    }
    /**
     * Set useGlobalPrice value
     * @param bool $useGlobalPrice
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setUseGlobalPrice(?bool $useGlobalPrice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useGlobalPrice) && !is_bool($useGlobalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useGlobalPrice, true), gettype($useGlobalPrice)), __LINE__);
        }
        $this->useGlobalPrice = $useGlobalPrice;
        
        return $this;
    }
    /**
     * Get useGroupAmount value
     * @return bool|null
     */
    public function getUseGroupAmount(): ?bool
    {
        return $this->useGroupAmount;
    }
    /**
     * Set useGroupAmount value
     * @param bool $useGroupAmount
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setUseGroupAmount(?bool $useGroupAmount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useGroupAmount) && !is_bool($useGroupAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useGroupAmount, true), gettype($useGroupAmount)), __LINE__);
        }
        $this->useGroupAmount = $useGroupAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
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
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignDTO
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
}
