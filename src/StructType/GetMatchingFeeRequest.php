<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchingFeeRequest StructType
 * @subpackage Structs
 */
class GetMatchingFeeRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The startTravel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The feeGroup
     * @var string|null
     */
    protected ?string $feeGroup = null;
    /**
     * The debitorNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The departureCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The destinationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The bookingClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The airlineCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $airlineCode = null;
    /**
     * The ticketType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The ticketOrigin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticketOrigin = null;
    /**
     * The bspCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bspCode = null;
    /**
     * The geographicalCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $geographicalCategory = null;
    /**
     * The departureGeographicalCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureGeographicalCategory = null;
    /**
     * The destinationGeographicalCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationGeographicalCategory = null;
    /**
     * The paymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The feePercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $feePercent = null;
    /**
     * The minFeeValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $minFeeValue = null;
    /**
     * The maxFeeValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $maxFeeValue = null;
    /**
     * The documentSubtype
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $documentSubtype = null;
    /**
     * The ticketDesignator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticketDesignator = null;
    /**
     * The fareType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fareType = null;
    /**
     * The railDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $railDescription = null;
    /**
     * The MidocoSellItemAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemAttribute
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute[]
     */
    protected array $MidocoSellItemAttribute = [];
    /**
     * The MidocoOrderAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderAttribute
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute[]
     */
    protected array $MidocoOrderAttribute = [];
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $accountId = [];
    /**
     * The price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The orderPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $orderPrice = null;
    /**
     * The bookingSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingSource = null;
    /**
     * The bookingSourceExt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingSourceExt = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The taxPartPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $taxPartPercent = null;
    /**
     * The companyTariff
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $companyTariff = null;
    /**
     * The railTicketType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $railTicketType = [];
    /**
     * The useGlobalPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $useGlobalPrice = null;
    /**
     * The corporateDiscount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $corporateDiscount = null;
    /**
     * The bookingCreationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingCreationDate = null;
    /**
     * The itemType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The itemStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $itemStatus = null;
    /**
     * The countSegments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $countSegments = null;
    /**
     * The ticketPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ticketPrice = null;
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[]
     */
    protected array $MidocoVatDivision = [];
    /**
     * The needsVatDivisionOutgoing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $needsVatDivisionOutgoing = null;
    /**
     * The isDomestic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isDomestic = null;
    /**
     * The extPaymentType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: CASH | DEBIT | CC | FULL_CREDIT
     * @var string|null
     */
    protected ?string $extPaymentType = null;
    /**
     * The taxCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $taxCountry = null;
    /**
     * The documentSubgroupEmd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $documentSubgroupEmd = null;
    /**
     * Constructor method for GetMatchingFeeRequest
     * @uses GetMatchingFeeRequest::setSupplierId()
     * @uses GetMatchingFeeRequest::setTravelType()
     * @uses GetMatchingFeeRequest::setStartTravel()
     * @uses GetMatchingFeeRequest::setEndTravel()
     * @uses GetMatchingFeeRequest::setFeeGroup()
     * @uses GetMatchingFeeRequest::setDebitorNo()
     * @uses GetMatchingFeeRequest::setDepartureCode()
     * @uses GetMatchingFeeRequest::setDestinationCode()
     * @uses GetMatchingFeeRequest::setBookingClass()
     * @uses GetMatchingFeeRequest::setAirlineCode()
     * @uses GetMatchingFeeRequest::setTicketType()
     * @uses GetMatchingFeeRequest::setTicketOrigin()
     * @uses GetMatchingFeeRequest::setBspCode()
     * @uses GetMatchingFeeRequest::setGeographicalCategory()
     * @uses GetMatchingFeeRequest::setDepartureGeographicalCategory()
     * @uses GetMatchingFeeRequest::setDestinationGeographicalCategory()
     * @uses GetMatchingFeeRequest::setPaymentType()
     * @uses GetMatchingFeeRequest::setFeePercent()
     * @uses GetMatchingFeeRequest::setMinFeeValue()
     * @uses GetMatchingFeeRequest::setMaxFeeValue()
     * @uses GetMatchingFeeRequest::setDocumentSubtype()
     * @uses GetMatchingFeeRequest::setTicketDesignator()
     * @uses GetMatchingFeeRequest::setFareType()
     * @uses GetMatchingFeeRequest::setRailDescription()
     * @uses GetMatchingFeeRequest::setMidocoSellItemAttribute()
     * @uses GetMatchingFeeRequest::setMidocoOrderAttribute()
     * @uses GetMatchingFeeRequest::setAccountId()
     * @uses GetMatchingFeeRequest::setPrice()
     * @uses GetMatchingFeeRequest::setOrderPrice()
     * @uses GetMatchingFeeRequest::setBookingSource()
     * @uses GetMatchingFeeRequest::setBookingSourceExt()
     * @uses GetMatchingFeeRequest::setUnitName()
     * @uses GetMatchingFeeRequest::setTaxPartPercent()
     * @uses GetMatchingFeeRequest::setCompanyTariff()
     * @uses GetMatchingFeeRequest::setRailTicketType()
     * @uses GetMatchingFeeRequest::setUseGlobalPrice()
     * @uses GetMatchingFeeRequest::setCorporateDiscount()
     * @uses GetMatchingFeeRequest::setBookingCreationDate()
     * @uses GetMatchingFeeRequest::setItemType()
     * @uses GetMatchingFeeRequest::setItemStatus()
     * @uses GetMatchingFeeRequest::setCountSegments()
     * @uses GetMatchingFeeRequest::setTicketPrice()
     * @uses GetMatchingFeeRequest::setMidocoVatDivision()
     * @uses GetMatchingFeeRequest::setNeedsVatDivisionOutgoing()
     * @uses GetMatchingFeeRequest::setIsDomestic()
     * @uses GetMatchingFeeRequest::setExtPaymentType()
     * @uses GetMatchingFeeRequest::setTaxCountry()
     * @uses GetMatchingFeeRequest::setDocumentSubgroupEmd()
     * @param string $supplierId
     * @param string $travelType
     * @param string $startTravel
     * @param string $endTravel
     * @param string $feeGroup
     * @param string $debitorNo
     * @param string $departureCode
     * @param string $destinationCode
     * @param string $bookingClass
     * @param string $airlineCode
     * @param string $ticketType
     * @param string $ticketOrigin
     * @param string $bspCode
     * @param string $geographicalCategory
     * @param string $departureGeographicalCategory
     * @param string $destinationGeographicalCategory
     * @param string $paymentType
     * @param float $feePercent
     * @param float $minFeeValue
     * @param float $maxFeeValue
     * @param string $documentSubtype
     * @param string $ticketDesignator
     * @param string $fareType
     * @param string $railDescription
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute[] $midocoSellItemAttribute
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute[] $midocoOrderAttribute
     * @param string[] $accountId
     * @param float $price
     * @param float $orderPrice
     * @param string $bookingSource
     * @param string $bookingSourceExt
     * @param string $unitName
     * @param float $taxPartPercent
     * @param bool $companyTariff
     * @param string[] $railTicketType
     * @param bool $useGlobalPrice
     * @param string $corporateDiscount
     * @param string $bookingCreationDate
     * @param string $itemType
     * @param string $itemStatus
     * @param int $countSegments
     * @param float $ticketPrice
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[] $midocoVatDivision
     * @param bool $needsVatDivisionOutgoing
     * @param bool $isDomestic
     * @param string $extPaymentType
     * @param string $taxCountry
     * @param string $documentSubgroupEmd
     */
    public function __construct(?string $supplierId = null, ?string $travelType = null, ?string $startTravel = null, ?string $endTravel = null, ?string $feeGroup = null, ?string $debitorNo = null, ?string $departureCode = null, ?string $destinationCode = null, ?string $bookingClass = null, ?string $airlineCode = null, ?string $ticketType = null, ?string $ticketOrigin = null, ?string $bspCode = null, ?string $geographicalCategory = null, ?string $departureGeographicalCategory = null, ?string $destinationGeographicalCategory = null, ?string $paymentType = null, ?float $feePercent = null, ?float $minFeeValue = null, ?float $maxFeeValue = null, ?string $documentSubtype = null, ?string $ticketDesignator = null, ?string $fareType = null, ?string $railDescription = null, array $midocoSellItemAttribute = [], array $midocoOrderAttribute = [], array $accountId = [], ?float $price = null, ?float $orderPrice = null, ?string $bookingSource = null, ?string $bookingSourceExt = null, ?string $unitName = null, ?float $taxPartPercent = null, ?bool $companyTariff = null, array $railTicketType = [], ?bool $useGlobalPrice = null, ?string $corporateDiscount = null, ?string $bookingCreationDate = null, ?string $itemType = null, ?string $itemStatus = null, ?int $countSegments = null, ?float $ticketPrice = null, array $midocoVatDivision = [], ?bool $needsVatDivisionOutgoing = null, ?bool $isDomestic = null, ?string $extPaymentType = null, ?string $taxCountry = null, ?string $documentSubgroupEmd = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setTravelType($travelType)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setFeeGroup($feeGroup)
            ->setDebitorNo($debitorNo)
            ->setDepartureCode($departureCode)
            ->setDestinationCode($destinationCode)
            ->setBookingClass($bookingClass)
            ->setAirlineCode($airlineCode)
            ->setTicketType($ticketType)
            ->setTicketOrigin($ticketOrigin)
            ->setBspCode($bspCode)
            ->setGeographicalCategory($geographicalCategory)
            ->setDepartureGeographicalCategory($departureGeographicalCategory)
            ->setDestinationGeographicalCategory($destinationGeographicalCategory)
            ->setPaymentType($paymentType)
            ->setFeePercent($feePercent)
            ->setMinFeeValue($minFeeValue)
            ->setMaxFeeValue($maxFeeValue)
            ->setDocumentSubtype($documentSubtype)
            ->setTicketDesignator($ticketDesignator)
            ->setFareType($fareType)
            ->setRailDescription($railDescription)
            ->setMidocoSellItemAttribute($midocoSellItemAttribute)
            ->setMidocoOrderAttribute($midocoOrderAttribute)
            ->setAccountId($accountId)
            ->setPrice($price)
            ->setOrderPrice($orderPrice)
            ->setBookingSource($bookingSource)
            ->setBookingSourceExt($bookingSourceExt)
            ->setUnitName($unitName)
            ->setTaxPartPercent($taxPartPercent)
            ->setCompanyTariff($companyTariff)
            ->setRailTicketType($railTicketType)
            ->setUseGlobalPrice($useGlobalPrice)
            ->setCorporateDiscount($corporateDiscount)
            ->setBookingCreationDate($bookingCreationDate)
            ->setItemType($itemType)
            ->setItemStatus($itemStatus)
            ->setCountSegments($countSegments)
            ->setTicketPrice($ticketPrice)
            ->setMidocoVatDivision($midocoVatDivision)
            ->setNeedsVatDivisionOutgoing($needsVatDivisionOutgoing)
            ->setIsDomestic($isDomestic)
            ->setExtPaymentType($extPaymentType)
            ->setTaxCountry($taxCountry)
            ->setDocumentSubgroupEmd($documentSubgroupEmd);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * Get airlineCode value
     * @return string|null
     */
    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }
    /**
     * Set airlineCode value
     * @param string $airlineCode
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setAirlineCode(?string $airlineCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineCode, true), gettype($airlineCode)), __LINE__);
        }
        $this->airlineCode = $airlineCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * Get destinationGeographicalCategory value
     * @return string|null
     */
    public function getDestinationGeographicalCategory(): ?string
    {
        return $this->destinationGeographicalCategory;
    }
    /**
     * Set destinationGeographicalCategory value
     * @param string $destinationGeographicalCategory
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setDestinationGeographicalCategory(?string $destinationGeographicalCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationGeographicalCategory) && !is_string($destinationGeographicalCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationGeographicalCategory, true), gettype($destinationGeographicalCategory)), __LINE__);
        }
        $this->destinationGeographicalCategory = $destinationGeographicalCategory;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * Get MidocoSellItemAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute[]
     */
    public function getMidocoSellItemAttribute(): array
    {
        return $this->MidocoSellItemAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemAttributeForArrayConstraintsFromSetMidocoSellItemAttribute(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMatchingFeeRequestMidocoSellItemAttributeItem) {
            // validation for constraint: itemType
            if (!$getMatchingFeeRequestMidocoSellItemAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute) {
                $invalidValues[] = is_object($getMatchingFeeRequestMidocoSellItemAttributeItem) ? get_class($getMatchingFeeRequestMidocoSellItemAttributeItem) : sprintf('%s(%s)', gettype($getMatchingFeeRequestMidocoSellItemAttributeItem), var_export($getMatchingFeeRequestMidocoSellItemAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute[] $midocoSellItemAttribute
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setMidocoSellItemAttribute(array $midocoSellItemAttribute = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemAttributeArrayErrorMessage = self::validateMidocoSellItemAttributeForArrayConstraintsFromSetMidocoSellItemAttribute($midocoSellItemAttribute))) {
            throw new InvalidArgumentException($midocoSellItemAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemAttribute = $midocoSellItemAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function addToMidocoSellItemAttribute(\Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrderAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute[]
     */
    public function getMidocoOrderAttribute(): array
    {
        return $this->MidocoOrderAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderAttributeForArrayConstraintsFromSetMidocoOrderAttribute(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMatchingFeeRequestMidocoOrderAttributeItem) {
            // validation for constraint: itemType
            if (!$getMatchingFeeRequestMidocoOrderAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute) {
                $invalidValues[] = is_object($getMatchingFeeRequestMidocoOrderAttributeItem) ? get_class($getMatchingFeeRequestMidocoOrderAttributeItem) : sprintf('%s(%s)', gettype($getMatchingFeeRequestMidocoOrderAttributeItem), var_export($getMatchingFeeRequestMidocoOrderAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute[] $midocoOrderAttribute
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setMidocoOrderAttribute(array $midocoOrderAttribute = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderAttributeArrayErrorMessage = self::validateMidocoOrderAttributeForArrayConstraintsFromSetMidocoOrderAttribute($midocoOrderAttribute))) {
            throw new InvalidArgumentException($midocoOrderAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderAttribute = $midocoOrderAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function addToMidocoOrderAttribute(\Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string[]
     */
    public function getAccountId(): array
    {
        return $this->accountId;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountIdForArrayConstraintsFromSetAccountId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMatchingFeeRequestAccountIdItem) {
            // validation for constraint: itemType
            if (!is_string($getMatchingFeeRequestAccountIdItem)) {
                $invalidValues[] = is_object($getMatchingFeeRequestAccountIdItem) ? get_class($getMatchingFeeRequestAccountIdItem) : sprintf('%s(%s)', gettype($getMatchingFeeRequestAccountIdItem), var_export($getMatchingFeeRequestAccountIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The accountId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set accountId value
     * @throws InvalidArgumentException
     * @param string[] $accountId
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setAccountId(array $accountId = []): self
    {
        // validation for constraint: array
        if ('' !== ($accountIdArrayErrorMessage = self::validateAccountIdForArrayConstraintsFromSetAccountId($accountId))) {
            throw new InvalidArgumentException($accountIdArrayErrorMessage, __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Add item to accountId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function addToAccountId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The accountId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->accountId[] = $item;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get orderPrice value
     * @return float|null
     */
    public function getOrderPrice(): ?float
    {
        return $this->orderPrice;
    }
    /**
     * Set orderPrice value
     * @param float $orderPrice
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setOrderPrice(?float $orderPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($orderPrice) && !(is_float($orderPrice) || is_numeric($orderPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($orderPrice, true), gettype($orderPrice)), __LINE__);
        }
        $this->orderPrice = $orderPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * Get railTicketType value
     * @return string[]
     */
    public function getRailTicketType(): array
    {
        return $this->railTicketType;
    }
    /**
     * This method is responsible for validating the values passed to the setRailTicketType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailTicketType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailTicketTypeForArrayConstraintsFromSetRailTicketType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMatchingFeeRequestRailTicketTypeItem) {
            // validation for constraint: itemType
            if (!is_string($getMatchingFeeRequestRailTicketTypeItem)) {
                $invalidValues[] = is_object($getMatchingFeeRequestRailTicketTypeItem) ? get_class($getMatchingFeeRequestRailTicketTypeItem) : sprintf('%s(%s)', gettype($getMatchingFeeRequestRailTicketTypeItem), var_export($getMatchingFeeRequestRailTicketTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The railTicketType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set railTicketType value
     * @throws InvalidArgumentException
     * @param string[] $railTicketType
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setRailTicketType(array $railTicketType = []): self
    {
        // validation for constraint: array
        if ('' !== ($railTicketTypeArrayErrorMessage = self::validateRailTicketTypeForArrayConstraintsFromSetRailTicketType($railTicketType))) {
            throw new InvalidArgumentException($railTicketTypeArrayErrorMessage, __LINE__);
        }
        $this->railTicketType = $railTicketType;
        
        return $this;
    }
    /**
     * Add item to railTicketType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function addToRailTicketType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The railTicketType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->railTicketType[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * Get corporateDiscount value
     * @return string|null
     */
    public function getCorporateDiscount(): ?string
    {
        return $this->corporateDiscount;
    }
    /**
     * Set corporateDiscount value
     * @param string $corporateDiscount
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setCorporateDiscount(?string $corporateDiscount = null): self
    {
        // validation for constraint: string
        if (!is_null($corporateDiscount) && !is_string($corporateDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporateDiscount, true), gettype($corporateDiscount)), __LINE__);
        }
        $this->corporateDiscount = $corporateDiscount;
        
        return $this;
    }
    /**
     * Get bookingCreationDate value
     * @return string|null
     */
    public function getBookingCreationDate(): ?string
    {
        return $this->bookingCreationDate;
    }
    /**
     * Set bookingCreationDate value
     * @param string $bookingCreationDate
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setBookingCreationDate(?string $bookingCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingCreationDate) && !is_string($bookingCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingCreationDate, true), gettype($bookingCreationDate)), __LINE__);
        }
        $this->bookingCreationDate = $bookingCreationDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * Get itemStatus value
     * @return string|null
     */
    public function getItemStatus(): ?string
    {
        return $this->itemStatus;
    }
    /**
     * Set itemStatus value
     * @param string $itemStatus
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setItemStatus(?string $itemStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($itemStatus) && !is_string($itemStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemStatus, true), gettype($itemStatus)), __LINE__);
        }
        $this->itemStatus = $itemStatus;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * Get ticketPrice value
     * @return float|null
     */
    public function getTicketPrice(): ?float
    {
        return $this->ticketPrice;
    }
    /**
     * Set ticketPrice value
     * @param float $ticketPrice
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setTicketPrice(?float $ticketPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($ticketPrice) && !(is_float($ticketPrice) || is_numeric($ticketPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ticketPrice, true), gettype($ticketPrice)), __LINE__);
        }
        $this->ticketPrice = $ticketPrice;
        
        return $this;
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[]
     */
    public function getMidocoVatDivision(): array
    {
        return $this->MidocoVatDivision;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVatDivision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatDivision method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatDivisionForArrayConstraintsFromSetMidocoVatDivision(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMatchingFeeRequestMidocoVatDivisionItem) {
            // validation for constraint: itemType
            if (!$getMatchingFeeRequestMidocoVatDivisionItem instanceof \Pggns\MidocoApi\Order\StructType\VatDivisionDTO) {
                $invalidValues[] = is_object($getMatchingFeeRequestMidocoVatDivisionItem) ? get_class($getMatchingFeeRequestMidocoVatDivisionItem) : sprintf('%s(%s)', gettype($getMatchingFeeRequestMidocoVatDivisionItem), var_export($getMatchingFeeRequestMidocoVatDivisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatDivisionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[] $midocoVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setMidocoVatDivision(array $midocoVatDivision = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatDivisionArrayErrorMessage = self::validateMidocoVatDivisionForArrayConstraintsFromSetMidocoVatDivision($midocoVatDivision))) {
            throw new InvalidArgumentException($midocoVatDivisionArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
    /**
     * Add item to MidocoVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function addToMidocoVatDivision(\Pggns\MidocoApi\Order\StructType\VatDivisionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VatDivisionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatDivisionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatDivision[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
     * Get extPaymentType value
     * @return string|null
     */
    public function getExtPaymentType(): ?string
    {
        return $this->extPaymentType;
    }
    /**
     * Set extPaymentType value
     * @uses \Pggns\MidocoApi\Order\EnumType\ExtPaymentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\ExtPaymentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $extPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setExtPaymentType(?string $extPaymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\ExtPaymentType::valueIsValid($extPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\ExtPaymentType', is_array($extPaymentType) ? implode(', ', $extPaymentType) : var_export($extPaymentType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\ExtPaymentType::getValidValues())), __LINE__);
        }
        // validation for constraint: pattern(CASH, DEBIT, CC, FULL_CREDIT)
        if (!is_null($extPaymentType) && !preg_match('/CASH|DEBIT|CC|FULL_CREDIT/', $extPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /CASH|DEBIT|CC|FULL_CREDIT/', var_export($extPaymentType, true)), __LINE__);
        }
        $this->extPaymentType = $extPaymentType;
        
        return $this;
    }
    /**
     * Get taxCountry value
     * @return string|null
     */
    public function getTaxCountry(): ?string
    {
        return $this->taxCountry;
    }
    /**
     * Set taxCountry value
     * @param string $taxCountry
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
     */
    public function setTaxCountry(?string $taxCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($taxCountry) && !is_string($taxCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxCountry, true), gettype($taxCountry)), __LINE__);
        }
        $this->taxCountry = $taxCountry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingFeeRequest
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
}
