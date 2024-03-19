<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cruiseServiceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CruiseServiceType extends AbstractStructBase
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
     * The cabinCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cabinCode = null;
    /**
     * The cabinDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cabinDescription = null;
    /**
     * The cateringCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cateringCode = null;
    /**
     * The cateringDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cateringDescription = null;
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
     * The personsPerService
     * @var string|null
     */
    protected ?string $personsPerService = null;
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
     * The country
     * Meta information extracted from the WSDL
     * - documentation: ISO Code for the country
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The transfer
     * @var string|null
     */
    protected ?string $transfer = null;
    /**
     * The embarkation
     * @var string|null
     */
    protected ?string $embarkation = null;
    /**
     * The debarkation
     * @var string|null
     */
    protected ?string $debarkation = null;
    /**
     * The route
     * @var string|null
     */
    protected ?string $route = null;
    /**
     * The deck
     * @var string|null
     */
    protected ?string $deck = null;
    /**
     * The cabin_no
     * @var string|null
     */
    protected ?string $cabin_no = null;
    /**
     * The vehicle
     * @var string|null
     */
    protected ?string $vehicle = null;
    /**
     * The vehicle_dimension
     * @var string|null
     */
    protected ?string $vehicle_dimension = null;
    /**
     * The vehicle_plate_number
     * @var string|null
     */
    protected ?string $vehicle_plate_number = null;
    /**
     * The arrivalTransportType
     * Meta information extracted from the WSDL
     * - documentation: Transport Type to arrive Embarkation
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrivalTransportType = null;
    /**
     * The departureDescr
     * Meta information extracted from the WSDL
     * - documentation: Departure for Transfer to Embarkation
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureDescr = null;
    /**
     * The destinationDescr
     * Meta information extracted from the WSDL
     * - documentation: Destination for Transfer to Embarkation
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationDescr = null;
    /**
     * The returnTransportType
     * Meta information extracted from the WSDL
     * - documentation: Transport Type to return from Debarkation to Return Destination
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnTransportType = null;
    /**
     * The returnDepartureDescr
     * Meta information extracted from the WSDL
     * - documentation: Departure for Return Transfer from Debarkation
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnDepartureDescr = null;
    /**
     * The returnDestinationDescr
     * Meta information extracted from the WSDL
     * - documentation: Destination for Return Transfer from Debarkation
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnDestinationDescr = null;
    /**
     * Constructor method for cruiseServiceType
     * @uses CruiseServiceType::setPosition()
     * @uses CruiseServiceType::setServiceCode()
     * @uses CruiseServiceType::setServiceName()
     * @uses CruiseServiceType::setServiceDescription()
     * @uses CruiseServiceType::setCabinCode()
     * @uses CruiseServiceType::setCabinDescription()
     * @uses CruiseServiceType::setCateringCode()
     * @uses CruiseServiceType::setCateringDescription()
     * @uses CruiseServiceType::setStartDate()
     * @uses CruiseServiceType::setEndDate()
     * @uses CruiseServiceType::setPersonsPerService()
     * @uses CruiseServiceType::setNoOfServices()
     * @uses CruiseServiceType::setNoOfNights()
     * @uses CruiseServiceType::setServiceStatus()
     * @uses CruiseServiceType::setPersonAssignment()
     * @uses CruiseServiceType::setTotalPrice()
     * @uses CruiseServiceType::setCurrency()
     * @uses CruiseServiceType::setVatIncluded()
     * @uses CruiseServiceType::setCountry()
     * @uses CruiseServiceType::setTransfer()
     * @uses CruiseServiceType::setEmbarkation()
     * @uses CruiseServiceType::setDebarkation()
     * @uses CruiseServiceType::setRoute()
     * @uses CruiseServiceType::setDeck()
     * @uses CruiseServiceType::setCabin_no()
     * @uses CruiseServiceType::setVehicle()
     * @uses CruiseServiceType::setVehicle_dimension()
     * @uses CruiseServiceType::setVehicle_plate_number()
     * @uses CruiseServiceType::setArrivalTransportType()
     * @uses CruiseServiceType::setDepartureDescr()
     * @uses CruiseServiceType::setDestinationDescr()
     * @uses CruiseServiceType::setReturnTransportType()
     * @uses CruiseServiceType::setReturnDepartureDescr()
     * @uses CruiseServiceType::setReturnDestinationDescr()
     * @param int $position
     * @param string $serviceCode
     * @param string $serviceName
     * @param string $serviceDescription
     * @param string $cabinCode
     * @param string $cabinDescription
     * @param string $cateringCode
     * @param string $cateringDescription
     * @param string $startDate
     * @param string $endDate
     * @param string $personsPerService
     * @param string $noOfServices
     * @param int $noOfNights
     * @param string $serviceStatus
     * @param string $personAssignment
     * @param float $totalPrice
     * @param string $currency
     * @param bool $vatIncluded
     * @param string $country
     * @param string $transfer
     * @param string $embarkation
     * @param string $debarkation
     * @param string $route
     * @param string $deck
     * @param string $cabin_no
     * @param string $vehicle
     * @param string $vehicle_dimension
     * @param string $vehicle_plate_number
     * @param string $arrivalTransportType
     * @param string $departureDescr
     * @param string $destinationDescr
     * @param string $returnTransportType
     * @param string $returnDepartureDescr
     * @param string $returnDestinationDescr
     */
    public function __construct(int $position, ?string $serviceCode = null, ?string $serviceName = null, ?string $serviceDescription = null, ?string $cabinCode = null, ?string $cabinDescription = null, ?string $cateringCode = null, ?string $cateringDescription = null, ?string $startDate = null, ?string $endDate = null, ?string $personsPerService = null, ?string $noOfServices = null, ?int $noOfNights = null, ?string $serviceStatus = null, ?string $personAssignment = null, ?float $totalPrice = null, ?string $currency = 'EUR', ?bool $vatIncluded = false, ?string $country = null, ?string $transfer = null, ?string $embarkation = null, ?string $debarkation = null, ?string $route = null, ?string $deck = null, ?string $cabin_no = null, ?string $vehicle = null, ?string $vehicle_dimension = null, ?string $vehicle_plate_number = null, ?string $arrivalTransportType = null, ?string $departureDescr = null, ?string $destinationDescr = null, ?string $returnTransportType = null, ?string $returnDepartureDescr = null, ?string $returnDestinationDescr = null)
    {
        $this
            ->setPosition($position)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setServiceDescription($serviceDescription)
            ->setCabinCode($cabinCode)
            ->setCabinDescription($cabinDescription)
            ->setCateringCode($cateringCode)
            ->setCateringDescription($cateringDescription)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setPersonsPerService($personsPerService)
            ->setNoOfServices($noOfServices)
            ->setNoOfNights($noOfNights)
            ->setServiceStatus($serviceStatus)
            ->setPersonAssignment($personAssignment)
            ->setTotalPrice($totalPrice)
            ->setCurrency($currency)
            ->setVatIncluded($vatIncluded)
            ->setCountry($country)
            ->setTransfer($transfer)
            ->setEmbarkation($embarkation)
            ->setDebarkation($debarkation)
            ->setRoute($route)
            ->setDeck($deck)
            ->setCabin_no($cabin_no)
            ->setVehicle($vehicle)
            ->setVehicle_dimension($vehicle_dimension)
            ->setVehicle_plate_number($vehicle_plate_number)
            ->setArrivalTransportType($arrivalTransportType)
            ->setDepartureDescr($departureDescr)
            ->setDestinationDescr($destinationDescr)
            ->setReturnTransportType($returnTransportType)
            ->setReturnDepartureDescr($returnDepartureDescr)
            ->setReturnDestinationDescr($returnDestinationDescr);
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * Get cabinCode value
     * @return string|null
     */
    public function getCabinCode(): ?string
    {
        return $this->cabinCode;
    }
    /**
     * Set cabinCode value
     * @param string $cabinCode
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setCabinCode(?string $cabinCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinCode) && !is_string($cabinCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinCode, true), gettype($cabinCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($cabinCode) && mb_strlen((string) $cabinCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $cabinCode)), __LINE__);
        }
        $this->cabinCode = $cabinCode;
        
        return $this;
    }
    /**
     * Get cabinDescription value
     * @return string|null
     */
    public function getCabinDescription(): ?string
    {
        return $this->cabinDescription;
    }
    /**
     * Set cabinDescription value
     * @param string $cabinDescription
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setCabinDescription(?string $cabinDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinDescription) && !is_string($cabinDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinDescription, true), gettype($cabinDescription)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($cabinDescription) && mb_strlen((string) $cabinDescription) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $cabinDescription)), __LINE__);
        }
        $this->cabinDescription = $cabinDescription;
        
        return $this;
    }
    /**
     * Get cateringCode value
     * @return string|null
     */
    public function getCateringCode(): ?string
    {
        return $this->cateringCode;
    }
    /**
     * Set cateringCode value
     * @param string $cateringCode
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setCateringCode(?string $cateringCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringCode) && !is_string($cateringCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringCode, true), gettype($cateringCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($cateringCode) && mb_strlen((string) $cateringCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $cateringCode)), __LINE__);
        }
        $this->cateringCode = $cateringCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setCateringDescription(?string $cateringDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringDescription) && !is_string($cateringDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringDescription, true), gettype($cateringDescription)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($cateringDescription) && mb_strlen((string) $cateringDescription) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $cateringDescription)), __LINE__);
        }
        $this->cateringDescription = $cateringDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($startDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $startDate)) {
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($endDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($endDate, true)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get personsPerService value
     * @return string|null
     */
    public function getPersonsPerService(): ?string
    {
        return $this->personsPerService;
    }
    /**
     * Set personsPerService value
     * @param string $personsPerService
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setPersonsPerService(?string $personsPerService = null): self
    {
        // validation for constraint: string
        if (!is_null($personsPerService) && !is_string($personsPerService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personsPerService, true), gettype($personsPerService)), __LINE__);
        }
        $this->personsPerService = $personsPerService;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
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
     * Get embarkation value
     * @return string|null
     */
    public function getEmbarkation(): ?string
    {
        return $this->embarkation;
    }
    /**
     * Set embarkation value
     * @param string $embarkation
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setEmbarkation(?string $embarkation = null): self
    {
        // validation for constraint: string
        if (!is_null($embarkation) && !is_string($embarkation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($embarkation, true), gettype($embarkation)), __LINE__);
        }
        $this->embarkation = $embarkation;
        
        return $this;
    }
    /**
     * Get debarkation value
     * @return string|null
     */
    public function getDebarkation(): ?string
    {
        return $this->debarkation;
    }
    /**
     * Set debarkation value
     * @param string $debarkation
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setDebarkation(?string $debarkation = null): self
    {
        // validation for constraint: string
        if (!is_null($debarkation) && !is_string($debarkation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debarkation, true), gettype($debarkation)), __LINE__);
        }
        $this->debarkation = $debarkation;
        
        return $this;
    }
    /**
     * Get route value
     * @return string|null
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param string $route
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setRoute(?string $route = null): self
    {
        // validation for constraint: string
        if (!is_null($route) && !is_string($route)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($route, true), gettype($route)), __LINE__);
        }
        $this->route = $route;
        
        return $this;
    }
    /**
     * Get deck value
     * @return string|null
     */
    public function getDeck(): ?string
    {
        return $this->deck;
    }
    /**
     * Set deck value
     * @param string $deck
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setDeck(?string $deck = null): self
    {
        // validation for constraint: string
        if (!is_null($deck) && !is_string($deck)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deck, true), gettype($deck)), __LINE__);
        }
        $this->deck = $deck;
        
        return $this;
    }
    /**
     * Get cabin_no value
     * @return string|null
     */
    public function getCabin_no(): ?string
    {
        return $this->cabin_no;
    }
    /**
     * Set cabin_no value
     * @param string $cabin_no
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setCabin_no(?string $cabin_no = null): self
    {
        // validation for constraint: string
        if (!is_null($cabin_no) && !is_string($cabin_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabin_no, true), gettype($cabin_no)), __LINE__);
        }
        $this->cabin_no = $cabin_no;
        
        return $this;
    }
    /**
     * Get vehicle value
     * @return string|null
     */
    public function getVehicle(): ?string
    {
        return $this->vehicle;
    }
    /**
     * Set vehicle value
     * @param string $vehicle
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setVehicle(?string $vehicle = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicle) && !is_string($vehicle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle, true), gettype($vehicle)), __LINE__);
        }
        $this->vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get vehicle_dimension value
     * @return string|null
     */
    public function getVehicle_dimension(): ?string
    {
        return $this->vehicle_dimension;
    }
    /**
     * Set vehicle_dimension value
     * @param string $vehicle_dimension
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setVehicle_dimension(?string $vehicle_dimension = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicle_dimension) && !is_string($vehicle_dimension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_dimension, true), gettype($vehicle_dimension)), __LINE__);
        }
        $this->vehicle_dimension = $vehicle_dimension;
        
        return $this;
    }
    /**
     * Get vehicle_plate_number value
     * @return string|null
     */
    public function getVehicle_plate_number(): ?string
    {
        return $this->vehicle_plate_number;
    }
    /**
     * Set vehicle_plate_number value
     * @param string $vehicle_plate_number
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setVehicle_plate_number(?string $vehicle_plate_number = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicle_plate_number) && !is_string($vehicle_plate_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_plate_number, true), gettype($vehicle_plate_number)), __LINE__);
        }
        $this->vehicle_plate_number = $vehicle_plate_number;
        
        return $this;
    }
    /**
     * Get arrivalTransportType value
     * @return string|null
     */
    public function getArrivalTransportType(): ?string
    {
        return $this->arrivalTransportType;
    }
    /**
     * Set arrivalTransportType value
     * @uses \Pggns\MidocoApi\Order\EnumType\TransportType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\TransportType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $arrivalTransportType
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setArrivalTransportType(?string $arrivalTransportType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\TransportType::valueIsValid($arrivalTransportType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\TransportType', is_array($arrivalTransportType) ? implode(', ', $arrivalTransportType) : var_export($arrivalTransportType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\TransportType::getValidValues())), __LINE__);
        }
        $this->arrivalTransportType = $arrivalTransportType;
        
        return $this;
    }
    /**
     * Get departureDescr value
     * @return string|null
     */
    public function getDepartureDescr(): ?string
    {
        return $this->departureDescr;
    }
    /**
     * Set departureDescr value
     * @param string $departureDescr
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setDepartureDescr(?string $departureDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDescr) && !is_string($departureDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDescr, true), gettype($departureDescr)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($departureDescr) && mb_strlen((string) $departureDescr) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $departureDescr)), __LINE__);
        }
        $this->departureDescr = $departureDescr;
        
        return $this;
    }
    /**
     * Get destinationDescr value
     * @return string|null
     */
    public function getDestinationDescr(): ?string
    {
        return $this->destinationDescr;
    }
    /**
     * Set destinationDescr value
     * @param string $destinationDescr
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setDestinationDescr(?string $destinationDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDescr) && !is_string($destinationDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDescr, true), gettype($destinationDescr)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($destinationDescr) && mb_strlen((string) $destinationDescr) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $destinationDescr)), __LINE__);
        }
        $this->destinationDescr = $destinationDescr;
        
        return $this;
    }
    /**
     * Get returnTransportType value
     * @return string|null
     */
    public function getReturnTransportType(): ?string
    {
        return $this->returnTransportType;
    }
    /**
     * Set returnTransportType value
     * @uses \Pggns\MidocoApi\Order\EnumType\TransportType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\TransportType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $returnTransportType
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setReturnTransportType(?string $returnTransportType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\TransportType::valueIsValid($returnTransportType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\TransportType', is_array($returnTransportType) ? implode(', ', $returnTransportType) : var_export($returnTransportType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\TransportType::getValidValues())), __LINE__);
        }
        $this->returnTransportType = $returnTransportType;
        
        return $this;
    }
    /**
     * Get returnDepartureDescr value
     * @return string|null
     */
    public function getReturnDepartureDescr(): ?string
    {
        return $this->returnDepartureDescr;
    }
    /**
     * Set returnDepartureDescr value
     * @param string $returnDepartureDescr
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setReturnDepartureDescr(?string $returnDepartureDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureDescr) && !is_string($returnDepartureDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureDescr, true), gettype($returnDepartureDescr)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($returnDepartureDescr) && mb_strlen((string) $returnDepartureDescr) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $returnDepartureDescr)), __LINE__);
        }
        $this->returnDepartureDescr = $returnDepartureDescr;
        
        return $this;
    }
    /**
     * Get returnDestinationDescr value
     * @return string|null
     */
    public function getReturnDestinationDescr(): ?string
    {
        return $this->returnDestinationDescr;
    }
    /**
     * Set returnDestinationDescr value
     * @param string $returnDestinationDescr
     * @return \Pggns\MidocoApi\Order\StructType\CruiseServiceType
     */
    public function setReturnDestinationDescr(?string $returnDestinationDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationDescr) && !is_string($returnDestinationDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationDescr, true), gettype($returnDestinationDescr)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($returnDestinationDescr) && mb_strlen((string) $returnDestinationDescr) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $returnDestinationDescr)), __LINE__);
        }
        $this->returnDestinationDescr = $returnDestinationDescr;
        
        return $this;
    }
}
