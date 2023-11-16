<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accomodationServiceType StructType
 * @subpackage Structs
 */
class AccomodationServiceType extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The serviceCode
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceName
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The serviceDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceDescription = null;
    /**
     * The accomodation
     * @var string|null
     */
    protected ?string $accomodation = null;
    /**
     * The accomodationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodationDescription = null;
    /**
     * The catering
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catering = null;
    /**
     * The cateringDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cateringDescription = null;
    /**
     * The locationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locationDescription = null;
    /**
     * The allocation
     * Meta information extracted from the WSDL
     * - documentation: Number of persons per service. It must be integer.
     * @var string|null
     */
    protected ?string $allocation = null;
    /**
     * The noOfServices
     * @var string|null
     */
    protected ?string $noOfServices = null;
    /**
     * The noOfNights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfNights = null;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - documentation: Date when the service starts
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The vatIncluded
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vatIncluded = null;
    /**
     * The country_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country_description = null;
    /**
     * The transfer_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transfer_description = null;
    /**
     * The address_line1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address_line1 = null;
    /**
     * The address_line2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address_line2 = null;
    /**
     * The address_line3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address_line3 = null;
    /**
     * The address_line4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address_line4 = null;
    /**
     * The emergency_Number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $emergency_Number = null;
    /**
     * The corporateDiscount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $corporateDiscount = null;
    /**
     * The travelerRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $travelerRefId = [];
    /**
     * The chain
     * @var string|null
     */
    protected ?string $chain = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The sourceSystem
     * @var string|null
     */
    protected ?string $sourceSystem = null;
    /**
     * The sourceExtId
     * @var string|null
     */
    protected ?string $sourceExtId = null;
    /**
     * The airportCode
     * @var string|null
     */
    protected ?string $airportCode = null;
    /**
     * Constructor method for accomodationServiceType
     * @uses AccomodationServiceType::setPosition()
     * @uses AccomodationServiceType::setServiceCode()
     * @uses AccomodationServiceType::setServiceName()
     * @uses AccomodationServiceType::setServiceDescription()
     * @uses AccomodationServiceType::setAccomodation()
     * @uses AccomodationServiceType::setAccomodationDescription()
     * @uses AccomodationServiceType::setCatering()
     * @uses AccomodationServiceType::setCateringDescription()
     * @uses AccomodationServiceType::setLocationDescription()
     * @uses AccomodationServiceType::setAllocation()
     * @uses AccomodationServiceType::setNoOfServices()
     * @uses AccomodationServiceType::setNoOfNights()
     * @uses AccomodationServiceType::setStartDate()
     * @uses AccomodationServiceType::setEndDate()
     * @uses AccomodationServiceType::setServiceStatus()
     * @uses AccomodationServiceType::setPersonAssignment()
     * @uses AccomodationServiceType::setTotalPrice()
     * @uses AccomodationServiceType::setCurrency()
     * @uses AccomodationServiceType::setVatIncluded()
     * @uses AccomodationServiceType::setCountry_description()
     * @uses AccomodationServiceType::setTransfer_description()
     * @uses AccomodationServiceType::setAddress_line1()
     * @uses AccomodationServiceType::setAddress_line2()
     * @uses AccomodationServiceType::setAddress_line3()
     * @uses AccomodationServiceType::setAddress_line4()
     * @uses AccomodationServiceType::setEmergency_Number()
     * @uses AccomodationServiceType::setCorporateDiscount()
     * @uses AccomodationServiceType::setTravelerRefId()
     * @uses AccomodationServiceType::setChain()
     * @uses AccomodationServiceType::setCategory()
     * @uses AccomodationServiceType::setBookingId()
     * @uses AccomodationServiceType::setBookingDate()
     * @uses AccomodationServiceType::setSupplierId()
     * @uses AccomodationServiceType::setExtId()
     * @uses AccomodationServiceType::setSourceSystem()
     * @uses AccomodationServiceType::setSourceExtId()
     * @uses AccomodationServiceType::setAirportCode()
     * @param int $position
     * @param string $serviceCode
     * @param string $serviceName
     * @param string $serviceDescription
     * @param string $accomodation
     * @param string $accomodationDescription
     * @param string $catering
     * @param string $cateringDescription
     * @param string $locationDescription
     * @param string $allocation
     * @param string $noOfServices
     * @param int $noOfNights
     * @param string $startDate
     * @param string $endDate
     * @param string $serviceStatus
     * @param string $personAssignment
     * @param float $totalPrice
     * @param string $currency
     * @param bool $vatIncluded
     * @param string $country_description
     * @param string $transfer_description
     * @param string $address_line1
     * @param string $address_line2
     * @param string $address_line3
     * @param string $address_line4
     * @param string $emergency_Number
     * @param string $corporateDiscount
     * @param int[] $travelerRefId
     * @param string $chain
     * @param string $category
     * @param string $bookingId
     * @param string $bookingDate
     * @param string $supplierId
     * @param string $extId
     * @param string $sourceSystem
     * @param string $sourceExtId
     * @param string $airportCode
     */
    public function __construct(int $position, ?string $serviceCode = null, ?string $serviceName = null, ?string $serviceDescription = null, ?string $accomodation = null, ?string $accomodationDescription = null, ?string $catering = null, ?string $cateringDescription = null, ?string $locationDescription = null, ?string $allocation = null, ?string $noOfServices = null, ?int $noOfNights = null, ?string $startDate = null, ?string $endDate = null, ?string $serviceStatus = null, ?string $personAssignment = null, ?float $totalPrice = null, ?string $currency = 'EUR', ?bool $vatIncluded = false, ?string $country_description = null, ?string $transfer_description = null, ?string $address_line1 = null, ?string $address_line2 = null, ?string $address_line3 = null, ?string $address_line4 = null, ?string $emergency_Number = null, ?string $corporateDiscount = null, array $travelerRefId = [], ?string $chain = null, ?string $category = null, ?string $bookingId = null, ?string $bookingDate = null, ?string $supplierId = null, ?string $extId = null, ?string $sourceSystem = null, ?string $sourceExtId = null, ?string $airportCode = null)
    {
        $this
            ->setPosition($position)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setServiceDescription($serviceDescription)
            ->setAccomodation($accomodation)
            ->setAccomodationDescription($accomodationDescription)
            ->setCatering($catering)
            ->setCateringDescription($cateringDescription)
            ->setLocationDescription($locationDescription)
            ->setAllocation($allocation)
            ->setNoOfServices($noOfServices)
            ->setNoOfNights($noOfNights)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setServiceStatus($serviceStatus)
            ->setPersonAssignment($personAssignment)
            ->setTotalPrice($totalPrice)
            ->setCurrency($currency)
            ->setVatIncluded($vatIncluded)
            ->setCountry_description($country_description)
            ->setTransfer_description($transfer_description)
            ->setAddress_line1($address_line1)
            ->setAddress_line2($address_line2)
            ->setAddress_line3($address_line3)
            ->setAddress_line4($address_line4)
            ->setEmergency_Number($emergency_Number)
            ->setCorporateDiscount($corporateDiscount)
            ->setTravelerRefId($travelerRefId)
            ->setChain($chain)
            ->setCategory($category)
            ->setBookingId($bookingId)
            ->setBookingDate($bookingDate)
            ->setSupplierId($supplierId)
            ->setExtId($extId)
            ->setSourceSystem($sourceSystem)
            ->setSourceExtId($sourceExtId)
            ->setAirportCode($airportCode);
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * Get serviceDescription value
     * @return string|null
     */
    public function getServiceDescription(): ?string
    {
        return $this->serviceDescription;
    }
    /**
     * Set serviceDescription value
     * @param string $serviceDescription
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setServiceDescription(?string $serviceDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceDescription) && !is_string($serviceDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceDescription, true), gettype($serviceDescription)), __LINE__);
        }
        $this->serviceDescription = $serviceDescription;
        
        return $this;
    }
    /**
     * Get accomodation value
     * @return string|null
     */
    public function getAccomodation(): ?string
    {
        return $this->accomodation;
    }
    /**
     * Set accomodation value
     * @param string $accomodation
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setAccomodation(?string $accomodation = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation) && !is_string($accomodation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation, true), gettype($accomodation)), __LINE__);
        }
        $this->accomodation = $accomodation;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * Get catering value
     * @return string|null
     */
    public function getCatering(): ?string
    {
        return $this->catering;
    }
    /**
     * Set catering value
     * @param string $catering
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setCatering(?string $catering = null): self
    {
        // validation for constraint: string
        if (!is_null($catering) && !is_string($catering)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catering, true), gettype($catering)), __LINE__);
        }
        $this->catering = $catering;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * Get allocation value
     * @return string|null
     */
    public function getAllocation(): ?string
    {
        return $this->allocation;
    }
    /**
     * Set allocation value
     * @param string $allocation
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setAllocation(?string $allocation = null): self
    {
        // validation for constraint: string
        if (!is_null($allocation) && !is_string($allocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allocation, true), gettype($allocation)), __LINE__);
        }
        $this->allocation = $allocation;
        
        return $this;
    }
    /**
     * Get noOfServices value
     * @return string|null
     */
    public function getNoOfServices(): ?string
    {
        return $this->noOfServices;
    }
    /**
     * Set noOfServices value
     * @param string $noOfServices
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setNoOfServices(?string $noOfServices = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfServices) && !is_string($noOfServices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfServices, true), gettype($noOfServices)), __LINE__);
        }
        $this->noOfServices = $noOfServices;
        
        return $this;
    }
    /**
     * Get noOfNights value
     * @return int|null
     */
    public function getNoOfNights(): ?int
    {
        return $this->noOfNights;
    }
    /**
     * Set noOfNights value
     * @param int $noOfNights
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setNoOfNights(?int $noOfNights = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfNights) && !(is_int($noOfNights) || ctype_digit($noOfNights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfNights, true), gettype($noOfNights)), __LINE__);
        }
        $this->noOfNights = $noOfNights;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($startDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($startDate, true)), __LINE__);
        }
        $this->startDate = $startDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($endDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($endDate, true)), __LINE__);
        }
        $this->endDate = $endDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setCurrency(?string $currency = 'EUR'): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setVatIncluded(?bool $vatIncluded = false): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIncluded) && !is_bool($vatIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->vatIncluded = $vatIncluded;
        
        return $this;
    }
    /**
     * Get country_description value
     * @return string|null
     */
    public function getCountry_description(): ?string
    {
        return $this->country_description;
    }
    /**
     * Set country_description value
     * @param string $country_description
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setCountry_description(?string $country_description = null): self
    {
        // validation for constraint: string
        if (!is_null($country_description) && !is_string($country_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_description, true), gettype($country_description)), __LINE__);
        }
        $this->country_description = $country_description;
        
        return $this;
    }
    /**
     * Get transfer_description value
     * @return string|null
     */
    public function getTransfer_description(): ?string
    {
        return $this->transfer_description;
    }
    /**
     * Set transfer_description value
     * @param string $transfer_description
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setTransfer_description(?string $transfer_description = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer_description) && !is_string($transfer_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer_description, true), gettype($transfer_description)), __LINE__);
        }
        $this->transfer_description = $transfer_description;
        
        return $this;
    }
    /**
     * Get address_line1 value
     * @return string|null
     */
    public function getAddress_line1(): ?string
    {
        return $this->address_line1;
    }
    /**
     * Set address_line1 value
     * @param string $address_line1
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setAddress_line1(?string $address_line1 = null): self
    {
        // validation for constraint: string
        if (!is_null($address_line1) && !is_string($address_line1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line1, true), gettype($address_line1)), __LINE__);
        }
        $this->address_line1 = $address_line1;
        
        return $this;
    }
    /**
     * Get address_line2 value
     * @return string|null
     */
    public function getAddress_line2(): ?string
    {
        return $this->address_line2;
    }
    /**
     * Set address_line2 value
     * @param string $address_line2
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setAddress_line2(?string $address_line2 = null): self
    {
        // validation for constraint: string
        if (!is_null($address_line2) && !is_string($address_line2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line2, true), gettype($address_line2)), __LINE__);
        }
        $this->address_line2 = $address_line2;
        
        return $this;
    }
    /**
     * Get address_line3 value
     * @return string|null
     */
    public function getAddress_line3(): ?string
    {
        return $this->address_line3;
    }
    /**
     * Set address_line3 value
     * @param string $address_line3
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setAddress_line3(?string $address_line3 = null): self
    {
        // validation for constraint: string
        if (!is_null($address_line3) && !is_string($address_line3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line3, true), gettype($address_line3)), __LINE__);
        }
        $this->address_line3 = $address_line3;
        
        return $this;
    }
    /**
     * Get address_line4 value
     * @return string|null
     */
    public function getAddress_line4(): ?string
    {
        return $this->address_line4;
    }
    /**
     * Set address_line4 value
     * @param string $address_line4
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setAddress_line4(?string $address_line4 = null): self
    {
        // validation for constraint: string
        if (!is_null($address_line4) && !is_string($address_line4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line4, true), gettype($address_line4)), __LINE__);
        }
        $this->address_line4 = $address_line4;
        
        return $this;
    }
    /**
     * Get emergency_Number value
     * @return string|null
     */
    public function getEmergency_Number(): ?string
    {
        return $this->{'emergency-Number'};
    }
    /**
     * Set emergency_Number value
     * @param string $emergency_Number
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setEmergency_Number(?string $emergency_Number = null): self
    {
        // validation for constraint: string
        if (!is_null($emergency_Number) && !is_string($emergency_Number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emergency_Number, true), gettype($emergency_Number)), __LINE__);
        }
        $this->emergency_Number = $this->{'emergency-Number'} = $emergency_Number;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * Get travelerRefId value
     * @return int[]
     */
    public function getTravelerRefId(): array
    {
        return $this->travelerRefId;
    }
    /**
     * This method is responsible for validating the values passed to the setTravelerRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelerRefId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerRefIdForArrayConstraintsFromSetTravelerRefId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accomodationServiceTypeTravelerRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($accomodationServiceTypeTravelerRefIdItem) || ctype_digit($accomodationServiceTypeTravelerRefIdItem))) {
                $invalidValues[] = is_object($accomodationServiceTypeTravelerRefIdItem) ? get_class($accomodationServiceTypeTravelerRefIdItem) : sprintf('%s(%s)', gettype($accomodationServiceTypeTravelerRefIdItem), var_export($accomodationServiceTypeTravelerRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The travelerRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set travelerRefId value
     * @throws InvalidArgumentException
     * @param int[] $travelerRefId
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setTravelerRefId(array $travelerRefId = []): self
    {
        // validation for constraint: array
        if ('' !== ($travelerRefIdArrayErrorMessage = self::validateTravelerRefIdForArrayConstraintsFromSetTravelerRefId($travelerRefId))) {
            throw new InvalidArgumentException($travelerRefIdArrayErrorMessage, __LINE__);
        }
        $this->travelerRefId = $travelerRefId;
        
        return $this;
    }
    /**
     * Add item to travelerRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function addToTravelerRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The travelerRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->travelerRefId[] = $item;
        
        return $this;
    }
    /**
     * Get chain value
     * @return string|null
     */
    public function getChain(): ?string
    {
        return $this->chain;
    }
    /**
     * Set chain value
     * @param string $chain
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setChain(?string $chain = null): self
    {
        // validation for constraint: string
        if (!is_null($chain) && !is_string($chain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chain, true), gettype($chain)), __LINE__);
        }
        $this->chain = $chain;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
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
     * Get sourceSystem value
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->sourceSystem;
    }
    /**
     * Set sourceSystem value
     * @param string $sourceSystem
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceSystem) && !is_string($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceSystem, true), gettype($sourceSystem)), __LINE__);
        }
        $this->sourceSystem = $sourceSystem;
        
        return $this;
    }
    /**
     * Get sourceExtId value
     * @return string|null
     */
    public function getSourceExtId(): ?string
    {
        return $this->sourceExtId;
    }
    /**
     * Set sourceExtId value
     * @param string $sourceExtId
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setSourceExtId(?string $sourceExtId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceExtId) && !is_string($sourceExtId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceExtId, true), gettype($sourceExtId)), __LINE__);
        }
        $this->sourceExtId = $sourceExtId;
        
        return $this;
    }
    /**
     * Get airportCode value
     * @return string|null
     */
    public function getAirportCode(): ?string
    {
        return $this->airportCode;
    }
    /**
     * Set airportCode value
     * @param string $airportCode
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationServiceType
     */
    public function setAirportCode(?string $airportCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airportCode, true), gettype($airportCode)), __LINE__);
        }
        $this->airportCode = $airportCode;
        
        return $this;
    }
}
