<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for generic-service-type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Generic_service_type extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The service_code
     * Meta information extracted from the WSDL
     * - documentation: Short code for the type of booking (F for flight, H for hotel, V for insurance (Versicherung in german))
     * @var string|null
     */
    protected ?string $service_code = null;
    /**
     * The service_name
     * Meta information extracted from the WSDL
     * - documentation: Short form for service details (in case of flight: departure and arrival, in case of hotel: hotel code etc.)
     * @var string|null
     */
    protected ?string $service_name = null;
    /**
     * The accomodation
     * Meta information extracted from the WSDL
     * - documentation: coding for accomodation (D for double room, H for halfboard etc).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodation = null;
    /**
     * The accomodation_description
     * Meta information extracted from the WSDL
     * - documentation: Description of the accomodation in case of an accomodation (e.g. double room, shower, balcony etc.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodation_description = null;
    /**
     * The catering
     * Meta information extracted from the WSDL
     * - documentation: special catering field used by some tour operators in the STADIS format
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catering = null;
    /**
     * The catering_description
     * Meta information extracted from the WSDL
     * - documentation: Description of the catering (e.g. breakfast, half board, all inclusiv, etc.)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catering_description = null;
    /**
     * The persons_per_service
     * Meta information extracted from the WSDL
     * - documentation: Number of persons this service is booked for (in case of a double room: 2)
     * @var string|null
     */
    protected ?string $persons_per_service = null;
    /**
     * The no_of_services
     * Meta information extracted from the WSDL
     * - documentation: Number of booked services, normally multiplied by persons-per service to calculate the price
     * @var string|null
     */
    protected ?string $no_of_services = null;
    /**
     * The start_date
     * Meta information extracted from the WSDL
     * - documentation: Date when the service starts
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $start_date = null;
    /**
     * The end_date
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $end_date = null;
    /**
     * The person_assignment
     * Meta information extracted from the WSDL
     * - documentation: Assigned persons from persons section (form 1-3 or 1,2,3 or 1-3,5)
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The service_status
     * Meta information extracted from the WSDL
     * - documentation: Status of the booking (OK, XX for storno, RQ for a request booking, etc.)
     * @var string|null
     */
    protected ?string $service_status = null;
    /**
     * The service_price
     * Meta information extracted from the WSDL
     * - documentation: optional service based price (does not override the booking price given in the price section, just for informational used
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $service_price = null;
    /**
     * The service_currency
     * Meta information extracted from the WSDL
     * - documentation: Currency of the price
     * - default: EUR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service_currency = null;
    /**
     * The service_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service_description = null;
    /**
     * The location_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $location_description = null;
    /**
     * The departure_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $departure_time = null;
    /**
     * The arrival_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $arrival_time = null;
    /**
     * The simpleService
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $simpleService = null;
    /**
     * Constructor method for generic-service-type
     * @uses Generic_service_type::setPosition()
     * @uses Generic_service_type::setService_code()
     * @uses Generic_service_type::setService_name()
     * @uses Generic_service_type::setAccomodation()
     * @uses Generic_service_type::setAccomodation_description()
     * @uses Generic_service_type::setCatering()
     * @uses Generic_service_type::setCatering_description()
     * @uses Generic_service_type::setPersons_per_service()
     * @uses Generic_service_type::setNo_of_services()
     * @uses Generic_service_type::setStart_date()
     * @uses Generic_service_type::setEnd_date()
     * @uses Generic_service_type::setPerson_assignment()
     * @uses Generic_service_type::setService_status()
     * @uses Generic_service_type::setService_price()
     * @uses Generic_service_type::setService_currency()
     * @uses Generic_service_type::setService_description()
     * @uses Generic_service_type::setLocation_description()
     * @uses Generic_service_type::setDeparture_time()
     * @uses Generic_service_type::setArrival_time()
     * @uses Generic_service_type::setSimpleService()
     * @param int $position
     * @param string $service_code
     * @param string $service_name
     * @param string $accomodation
     * @param string $accomodation_description
     * @param string $catering
     * @param string $catering_description
     * @param string $persons_per_service
     * @param string $no_of_services
     * @param string $start_date
     * @param string $end_date
     * @param string $person_assignment
     * @param string $service_status
     * @param float $service_price
     * @param string $service_currency
     * @param string $service_description
     * @param string $location_description
     * @param string $departure_time
     * @param string $arrival_time
     * @param bool $simpleService
     */
    public function __construct(int $position, ?string $service_code = null, ?string $service_name = null, ?string $accomodation = null, ?string $accomodation_description = null, ?string $catering = null, ?string $catering_description = null, ?string $persons_per_service = null, ?string $no_of_services = null, ?string $start_date = null, ?string $end_date = null, ?string $person_assignment = null, ?string $service_status = null, ?float $service_price = null, ?string $service_currency = 'EUR', ?string $service_description = null, ?string $location_description = null, ?string $departure_time = null, ?string $arrival_time = null, ?bool $simpleService = false)
    {
        $this
            ->setPosition($position)
            ->setService_code($service_code)
            ->setService_name($service_name)
            ->setAccomodation($accomodation)
            ->setAccomodation_description($accomodation_description)
            ->setCatering($catering)
            ->setCatering_description($catering_description)
            ->setPersons_per_service($persons_per_service)
            ->setNo_of_services($no_of_services)
            ->setStart_date($start_date)
            ->setEnd_date($end_date)
            ->setPerson_assignment($person_assignment)
            ->setService_status($service_status)
            ->setService_price($service_price)
            ->setService_currency($service_currency)
            ->setService_description($service_description)
            ->setLocation_description($location_description)
            ->setDeparture_time($departure_time)
            ->setArrival_time($arrival_time)
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
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
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
     * Get service_code value
     * @return string|null
     */
    public function getService_code(): ?string
    {
        return $this->{'service-code'};
    }
    /**
     * Set service_code value
     * @param string $service_code
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setService_code(?string $service_code = null): self
    {
        // validation for constraint: string
        if (!is_null($service_code) && !is_string($service_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_code, true), gettype($service_code)), __LINE__);
        }
        $this->service_code = $this->{'service-code'} = $service_code;
        
        return $this;
    }
    /**
     * Get service_name value
     * @return string|null
     */
    public function getService_name(): ?string
    {
        return $this->{'service-name'};
    }
    /**
     * Set service_name value
     * @param string $service_name
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setService_name(?string $service_name = null): self
    {
        // validation for constraint: string
        if (!is_null($service_name) && !is_string($service_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_name, true), gettype($service_name)), __LINE__);
        }
        $this->service_name = $this->{'service-name'} = $service_name;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
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
     * Get accomodation_description value
     * @return string|null
     */
    public function getAccomodation_description(): ?string
    {
        return $this->{'accomodation-description'};
    }
    /**
     * Set accomodation_description value
     * @param string $accomodation_description
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setAccomodation_description(?string $accomodation_description = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation_description) && !is_string($accomodation_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation_description, true), gettype($accomodation_description)), __LINE__);
        }
        $this->accomodation_description = $this->{'accomodation-description'} = $accomodation_description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
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
     * Get catering_description value
     * @return string|null
     */
    public function getCatering_description(): ?string
    {
        return $this->{'catering-description'};
    }
    /**
     * Set catering_description value
     * @param string $catering_description
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setCatering_description(?string $catering_description = null): self
    {
        // validation for constraint: string
        if (!is_null($catering_description) && !is_string($catering_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catering_description, true), gettype($catering_description)), __LINE__);
        }
        $this->catering_description = $this->{'catering-description'} = $catering_description;
        
        return $this;
    }
    /**
     * Get persons_per_service value
     * @return string|null
     */
    public function getPersons_per_service(): ?string
    {
        return $this->{'persons-per-service'};
    }
    /**
     * Set persons_per_service value
     * @param string $persons_per_service
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setPersons_per_service(?string $persons_per_service = null): self
    {
        // validation for constraint: string
        if (!is_null($persons_per_service) && !is_string($persons_per_service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($persons_per_service, true), gettype($persons_per_service)), __LINE__);
        }
        $this->persons_per_service = $this->{'persons-per-service'} = $persons_per_service;
        
        return $this;
    }
    /**
     * Get no_of_services value
     * @return string|null
     */
    public function getNo_of_services(): ?string
    {
        return $this->{'no-of-services'};
    }
    /**
     * Set no_of_services value
     * @param string $no_of_services
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setNo_of_services(?string $no_of_services = null): self
    {
        // validation for constraint: string
        if (!is_null($no_of_services) && !is_string($no_of_services)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($no_of_services, true), gettype($no_of_services)), __LINE__);
        }
        $this->no_of_services = $this->{'no-of-services'} = $no_of_services;
        
        return $this;
    }
    /**
     * Get start_date value
     * @return string|null
     */
    public function getStart_date(): ?string
    {
        return $this->{'start-date'};
    }
    /**
     * Set start_date value
     * @param string $start_date
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setStart_date(?string $start_date = null): self
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_date, true), gettype($start_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($start_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $start_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($start_date, true)), __LINE__);
        }
        $this->start_date = $this->{'start-date'} = $start_date;
        
        return $this;
    }
    /**
     * Get end_date value
     * @return string|null
     */
    public function getEnd_date(): ?string
    {
        return $this->{'end-date'};
    }
    /**
     * Set end_date value
     * @param string $end_date
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setEnd_date(?string $end_date = null): self
    {
        // validation for constraint: string
        if (!is_null($end_date) && !is_string($end_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_date, true), gettype($end_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($end_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $end_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($end_date, true)), __LINE__);
        }
        $this->end_date = $this->{'end-date'} = $end_date;
        
        return $this;
    }
    /**
     * Get person_assignment value
     * @return string|null
     */
    public function getPerson_assignment(): ?string
    {
        return $this->{'person-assignment'};
    }
    /**
     * Set person_assignment value
     * @param string $person_assignment
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setPerson_assignment(?string $person_assignment = null): self
    {
        // validation for constraint: string
        if (!is_null($person_assignment) && !is_string($person_assignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($person_assignment, true), gettype($person_assignment)), __LINE__);
        }
        $this->person_assignment = $this->{'person-assignment'} = $person_assignment;
        
        return $this;
    }
    /**
     * Get service_status value
     * @return string|null
     */
    public function getService_status(): ?string
    {
        return $this->{'service-status'};
    }
    /**
     * Set service_status value
     * @param string $service_status
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setService_status(?string $service_status = null): self
    {
        // validation for constraint: string
        if (!is_null($service_status) && !is_string($service_status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_status, true), gettype($service_status)), __LINE__);
        }
        $this->service_status = $this->{'service-status'} = $service_status;
        
        return $this;
    }
    /**
     * Get service_price value
     * @return float|null
     */
    public function getService_price(): ?float
    {
        return $this->{'service-price'};
    }
    /**
     * Set service_price value
     * @param float $service_price
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setService_price(?float $service_price = null): self
    {
        // validation for constraint: float
        if (!is_null($service_price) && !(is_float($service_price) || is_numeric($service_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($service_price, true), gettype($service_price)), __LINE__);
        }
        $this->service_price = $this->{'service-price'} = $service_price;
        
        return $this;
    }
    /**
     * Get service_currency value
     * @return string|null
     */
    public function getService_currency(): ?string
    {
        return $this->{'service-currency'};
    }
    /**
     * Set service_currency value
     * @param string $service_currency
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setService_currency(?string $service_currency = 'EUR'): self
    {
        // validation for constraint: string
        if (!is_null($service_currency) && !is_string($service_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_currency, true), gettype($service_currency)), __LINE__);
        }
        $this->service_currency = $this->{'service-currency'} = $service_currency;
        
        return $this;
    }
    /**
     * Get service_description value
     * @return string|null
     */
    public function getService_description(): ?string
    {
        return $this->{'service-description'};
    }
    /**
     * Set service_description value
     * @param string $service_description
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setService_description(?string $service_description = null): self
    {
        // validation for constraint: string
        if (!is_null($service_description) && !is_string($service_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_description, true), gettype($service_description)), __LINE__);
        }
        $this->service_description = $this->{'service-description'} = $service_description;
        
        return $this;
    }
    /**
     * Get location_description value
     * @return string|null
     */
    public function getLocation_description(): ?string
    {
        return $this->{'location-description'};
    }
    /**
     * Set location_description value
     * @param string $location_description
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setLocation_description(?string $location_description = null): self
    {
        // validation for constraint: string
        if (!is_null($location_description) && !is_string($location_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_description, true), gettype($location_description)), __LINE__);
        }
        $this->location_description = $this->{'location-description'} = $location_description;
        
        return $this;
    }
    /**
     * Get departure_time value
     * @return string|null
     */
    public function getDeparture_time(): ?string
    {
        return $this->{'departure-time'};
    }
    /**
     * Set departure_time value
     * @param string $departure_time
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setDeparture_time(?string $departure_time = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_time) && !is_string($departure_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_time, true), gettype($departure_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($departure_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $departure_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($departure_time, true)), __LINE__);
        }
        $this->departure_time = $this->{'departure-time'} = $departure_time;
        
        return $this;
    }
    /**
     * Get arrival_time value
     * @return string|null
     */
    public function getArrival_time(): ?string
    {
        return $this->{'arrival-time'};
    }
    /**
     * Set arrival_time value
     * @param string $arrival_time
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
     */
    public function setArrival_time(?string $arrival_time = null): self
    {
        // validation for constraint: string
        if (!is_null($arrival_time) && !is_string($arrival_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_time, true), gettype($arrival_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($arrival_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $arrival_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($arrival_time, true)), __LINE__);
        }
        $this->arrival_time = $this->{'arrival-time'} = $arrival_time;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Generic_service_type
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
