<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for genericServiceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenericServiceType extends AbstractStructBase
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
     * Meta information extracted from the WSDL
     * - documentation: Short code for the type of booking (F for flight, H for hotel, V for insurance (Versicherung in german))
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceName
     * Meta information extracted from the WSDL
     * - documentation: Short form for service details (in case of flight: departure and arrival, in case of hotel: hotel code etc.)
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The accomodation
     * Meta information extracted from the WSDL
     * - documentation: coding for accomodation (D for double room, H for halfboard etc).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodation = null;
    /**
     * The accomodationDescription
     * Meta information extracted from the WSDL
     * - documentation: Description of the accomodation in case of an accomodation (e.g. double room, shower, balcony etc.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodationDescription = null;
    /**
     * The catering
     * Meta information extracted from the WSDL
     * - documentation: special catering field used by some tour operators in the STADIS format
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catering = null;
    /**
     * The cateringDescription
     * Meta information extracted from the WSDL
     * - documentation: Description of the catering (e.g. breakfast, half board, all inclusiv, etc.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cateringDescription = null;
    /**
     * The personsPerService
     * Meta information extracted from the WSDL
     * - documentation: Number of persons this service is booked for (in case of a double room: 2)
     * @var string|null
     */
    protected ?string $personsPerService = null;
    /**
     * The noOfServices
     * Meta information extracted from the WSDL
     * - documentation: Number of booked services, normally multiplied by personsPer service to calculate the price
     * @var string|null
     */
    protected ?string $noOfServices = null;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - documentation: Date when the service starts
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The personAssignment
     * Meta information extracted from the WSDL
     * - documentation: Assigned persons from persons section (form 1-3 or 1,2,3 or 1-3,5)
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The serviceStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of the booking (OK, XX for storno, RQ for a request booking, etc.)
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The servicePrice
     * Meta information extracted from the WSDL
     * - documentation: optional service based price (does not override the booking price given in the price section, just for informational used
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $servicePrice = null;
    /**
     * The serviceCurrency
     * Meta information extracted from the WSDL
     * - documentation: Currency of the price
     * - default: EUR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceCurrency = null;
    /**
     * The serviceDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceDescription = null;
    /**
     * The locationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locationDescription = null;
    /**
     * The departureTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The arrivalTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The simpleService
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $simpleService = null;
    /**
     * Constructor method for genericServiceType
     * @uses GenericServiceType::setPosition()
     * @uses GenericServiceType::setServiceCode()
     * @uses GenericServiceType::setServiceName()
     * @uses GenericServiceType::setAccomodation()
     * @uses GenericServiceType::setAccomodationDescription()
     * @uses GenericServiceType::setCatering()
     * @uses GenericServiceType::setCateringDescription()
     * @uses GenericServiceType::setPersonsPerService()
     * @uses GenericServiceType::setNoOfServices()
     * @uses GenericServiceType::setStartDate()
     * @uses GenericServiceType::setEndDate()
     * @uses GenericServiceType::setPersonAssignment()
     * @uses GenericServiceType::setServiceStatus()
     * @uses GenericServiceType::setServicePrice()
     * @uses GenericServiceType::setServiceCurrency()
     * @uses GenericServiceType::setServiceDescription()
     * @uses GenericServiceType::setLocationDescription()
     * @uses GenericServiceType::setDepartureTime()
     * @uses GenericServiceType::setArrivalTime()
     * @uses GenericServiceType::setSimpleService()
     * @param int $position
     * @param string $serviceCode
     * @param string $serviceName
     * @param string $accomodation
     * @param string $accomodationDescription
     * @param string $catering
     * @param string $cateringDescription
     * @param string $personsPerService
     * @param string $noOfServices
     * @param string $startDate
     * @param string $endDate
     * @param string $personAssignment
     * @param string $serviceStatus
     * @param float $servicePrice
     * @param string $serviceCurrency
     * @param string $serviceDescription
     * @param string $locationDescription
     * @param string $departureTime
     * @param string $arrivalTime
     * @param bool $simpleService
     */
    public function __construct(int $position, ?string $serviceCode = null, ?string $serviceName = null, ?string $accomodation = null, ?string $accomodationDescription = null, ?string $catering = null, ?string $cateringDescription = null, ?string $personsPerService = null, ?string $noOfServices = null, ?string $startDate = null, ?string $endDate = null, ?string $personAssignment = null, ?string $serviceStatus = null, ?float $servicePrice = null, ?string $serviceCurrency = 'EUR', ?string $serviceDescription = null, ?string $locationDescription = null, ?string $departureTime = null, ?string $arrivalTime = null, ?bool $simpleService = false)
    {
        $this
            ->setPosition($position)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setAccomodation($accomodation)
            ->setAccomodationDescription($accomodationDescription)
            ->setCatering($catering)
            ->setCateringDescription($cateringDescription)
            ->setPersonsPerService($personsPerService)
            ->setNoOfServices($noOfServices)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setPersonAssignment($personAssignment)
            ->setServiceStatus($serviceStatus)
            ->setServicePrice($servicePrice)
            ->setServiceCurrency($serviceCurrency)
            ->setServiceDescription($serviceDescription)
            ->setLocationDescription($locationDescription)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setSimpleService($simpleService);
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * Get serviceCurrency value
     * @return string|null
     */
    public function getServiceCurrency(): ?string
    {
        return $this->serviceCurrency;
    }
    /**
     * Set serviceCurrency value
     * @param string $serviceCurrency
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
     */
    public function setServiceCurrency(?string $serviceCurrency = 'EUR'): self
    {
        // validation for constraint: string
        if (!is_null($serviceCurrency) && !is_string($serviceCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCurrency, true), gettype($serviceCurrency)), __LINE__);
        }
        $this->serviceCurrency = $serviceCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($departureTime) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($departureTime, true)), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($arrivalTime) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($arrivalTime, true)), __LINE__);
        }
        $this->arrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get simpleService value
     * @return bool|null
     */
    public function getSimpleService(): ?bool
    {
        return $this->simpleService;
    }
    /**
     * Set simpleService value
     * @param bool $simpleService
     * @return \Pggns\MidocoApi\Order\StructType\GenericServiceType
     */
    public function setSimpleService(?bool $simpleService = false): self
    {
        // validation for constraint: boolean
        if (!is_null($simpleService) && !is_bool($simpleService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($simpleService, true), gettype($simpleService)), __LINE__);
        }
        $this->simpleService = $simpleService;
        
        return $this;
    }
}
