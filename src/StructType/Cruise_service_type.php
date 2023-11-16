<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cruise-service-type StructType
 * @subpackage Structs
 */
class Cruise_service_type extends AbstractStructBase
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
     * @var string|null
     */
    protected ?string $service_code = null;
    /**
     * The service_name
     * @var string|null
     */
    protected ?string $service_name = null;
    /**
     * The service_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service_description = null;
    /**
     * The cabin_code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cabin_code = null;
    /**
     * The cabin_description
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cabin_description = null;
    /**
     * The catering_code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catering_code = null;
    /**
     * The catering_description
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catering_description = null;
    /**
     * The start_date
     * Meta information extracted from the WSDL
     * - documentation: Date when the service starts
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $start_date = null;
    /**
     * The end_date
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $end_date = null;
    /**
     * The persons_per_service
     * @var string|null
     */
    protected ?string $persons_per_service = null;
    /**
     * The no_of_services
     * @var string|null
     */
    protected ?string $no_of_services = null;
    /**
     * The no_of_nights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $no_of_nights = null;
    /**
     * The service_status
     * @var string|null
     */
    protected ?string $service_status = null;
    /**
     * The person_assignment
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The total_price
     * @var float|null
     */
    protected ?float $total_price = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The vat_included
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vat_included = null;
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
     * The arrival_transport_type
     * Meta information extracted from the WSDL
     * - documentation: Transport Type to arrive Embarkation
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrival_transport_type = null;
    /**
     * The departure_descr
     * Meta information extracted from the WSDL
     * - documentation: Departure for Transfer to Embarkation
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_descr = null;
    /**
     * The destination_descr
     * Meta information extracted from the WSDL
     * - documentation: Destination for Transfer to Embarkation
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destination_descr = null;
    /**
     * The return_transport_type
     * Meta information extracted from the WSDL
     * - documentation: Transport Type to return from Debarkation to Return Destination
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_transport_type = null;
    /**
     * The return_departure_descr
     * Meta information extracted from the WSDL
     * - documentation: Departure for Return Transfer from Debarkation
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_departure_descr = null;
    /**
     * The return_destination_descr
     * Meta information extracted from the WSDL
     * - documentation: Destination for Return Transfer from Debarkation
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_destination_descr = null;
    /**
     * Constructor method for cruise-service-type
     * @uses Cruise_service_type::setPosition()
     * @uses Cruise_service_type::setService_code()
     * @uses Cruise_service_type::setService_name()
     * @uses Cruise_service_type::setService_description()
     * @uses Cruise_service_type::setCabin_code()
     * @uses Cruise_service_type::setCabin_description()
     * @uses Cruise_service_type::setCatering_code()
     * @uses Cruise_service_type::setCatering_description()
     * @uses Cruise_service_type::setStart_date()
     * @uses Cruise_service_type::setEnd_date()
     * @uses Cruise_service_type::setPersons_per_service()
     * @uses Cruise_service_type::setNo_of_services()
     * @uses Cruise_service_type::setNo_of_nights()
     * @uses Cruise_service_type::setService_status()
     * @uses Cruise_service_type::setPerson_assignment()
     * @uses Cruise_service_type::setTotal_price()
     * @uses Cruise_service_type::setCurrency()
     * @uses Cruise_service_type::setVat_included()
     * @uses Cruise_service_type::setCountry()
     * @uses Cruise_service_type::setTransfer()
     * @uses Cruise_service_type::setEmbarkation()
     * @uses Cruise_service_type::setDebarkation()
     * @uses Cruise_service_type::setRoute()
     * @uses Cruise_service_type::setDeck()
     * @uses Cruise_service_type::setCabin_no()
     * @uses Cruise_service_type::setVehicle()
     * @uses Cruise_service_type::setVehicle_dimension()
     * @uses Cruise_service_type::setVehicle_plate_number()
     * @uses Cruise_service_type::setArrival_transport_type()
     * @uses Cruise_service_type::setDeparture_descr()
     * @uses Cruise_service_type::setDestination_descr()
     * @uses Cruise_service_type::setReturn_transport_type()
     * @uses Cruise_service_type::setReturn_departure_descr()
     * @uses Cruise_service_type::setReturn_destination_descr()
     * @param int $position
     * @param string $service_code
     * @param string $service_name
     * @param string $service_description
     * @param string $cabin_code
     * @param string $cabin_description
     * @param string $catering_code
     * @param string $catering_description
     * @param string $start_date
     * @param string $end_date
     * @param string $persons_per_service
     * @param string $no_of_services
     * @param int $no_of_nights
     * @param string $service_status
     * @param string $person_assignment
     * @param float $total_price
     * @param string $currency
     * @param bool $vat_included
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
     * @param string $arrival_transport_type
     * @param string $departure_descr
     * @param string $destination_descr
     * @param string $return_transport_type
     * @param string $return_departure_descr
     * @param string $return_destination_descr
     */
    public function __construct(int $position, ?string $service_code = null, ?string $service_name = null, ?string $service_description = null, ?string $cabin_code = null, ?string $cabin_description = null, ?string $catering_code = null, ?string $catering_description = null, ?string $start_date = null, ?string $end_date = null, ?string $persons_per_service = null, ?string $no_of_services = null, ?int $no_of_nights = null, ?string $service_status = null, ?string $person_assignment = null, ?float $total_price = null, ?string $currency = 'EUR', ?bool $vat_included = false, ?string $country = null, ?string $transfer = null, ?string $embarkation = null, ?string $debarkation = null, ?string $route = null, ?string $deck = null, ?string $cabin_no = null, ?string $vehicle = null, ?string $vehicle_dimension = null, ?string $vehicle_plate_number = null, ?string $arrival_transport_type = null, ?string $departure_descr = null, ?string $destination_descr = null, ?string $return_transport_type = null, ?string $return_departure_descr = null, ?string $return_destination_descr = null)
    {
        $this
            ->setPosition($position)
            ->setService_code($service_code)
            ->setService_name($service_name)
            ->setService_description($service_description)
            ->setCabin_code($cabin_code)
            ->setCabin_description($cabin_description)
            ->setCatering_code($catering_code)
            ->setCatering_description($catering_description)
            ->setStart_date($start_date)
            ->setEnd_date($end_date)
            ->setPersons_per_service($persons_per_service)
            ->setNo_of_services($no_of_services)
            ->setNo_of_nights($no_of_nights)
            ->setService_status($service_status)
            ->setPerson_assignment($person_assignment)
            ->setTotal_price($total_price)
            ->setCurrency($currency)
            ->setVat_included($vat_included)
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
            ->setArrival_transport_type($arrival_transport_type)
            ->setDeparture_descr($departure_descr)
            ->setDestination_descr($destination_descr)
            ->setReturn_transport_type($return_transport_type)
            ->setReturn_departure_descr($return_departure_descr)
            ->setReturn_destination_descr($return_destination_descr);
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * Get cabin_code value
     * @return string|null
     */
    public function getCabin_code(): ?string
    {
        return $this->{'cabin-code'};
    }
    /**
     * Set cabin_code value
     * @param string $cabin_code
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setCabin_code(?string $cabin_code = null): self
    {
        // validation for constraint: string
        if (!is_null($cabin_code) && !is_string($cabin_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabin_code, true), gettype($cabin_code)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($cabin_code) && mb_strlen((string) $cabin_code) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $cabin_code)), __LINE__);
        }
        $this->cabin_code = $this->{'cabin-code'} = $cabin_code;
        
        return $this;
    }
    /**
     * Get cabin_description value
     * @return string|null
     */
    public function getCabin_description(): ?string
    {
        return $this->{'cabin-description'};
    }
    /**
     * Set cabin_description value
     * @param string $cabin_description
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setCabin_description(?string $cabin_description = null): self
    {
        // validation for constraint: string
        if (!is_null($cabin_description) && !is_string($cabin_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabin_description, true), gettype($cabin_description)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($cabin_description) && mb_strlen((string) $cabin_description) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $cabin_description)), __LINE__);
        }
        $this->cabin_description = $this->{'cabin-description'} = $cabin_description;
        
        return $this;
    }
    /**
     * Get catering_code value
     * @return string|null
     */
    public function getCatering_code(): ?string
    {
        return $this->{'catering-code'};
    }
    /**
     * Set catering_code value
     * @param string $catering_code
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setCatering_code(?string $catering_code = null): self
    {
        // validation for constraint: string
        if (!is_null($catering_code) && !is_string($catering_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catering_code, true), gettype($catering_code)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($catering_code) && mb_strlen((string) $catering_code) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $catering_code)), __LINE__);
        }
        $this->catering_code = $this->{'catering-code'} = $catering_code;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setCatering_description(?string $catering_description = null): self
    {
        // validation for constraint: string
        if (!is_null($catering_description) && !is_string($catering_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catering_description, true), gettype($catering_description)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($catering_description) && mb_strlen((string) $catering_description) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $catering_description)), __LINE__);
        }
        $this->catering_description = $this->{'catering-description'} = $catering_description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setStart_date(?string $start_date = null): self
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_date, true), gettype($start_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($start_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $start_date)) {
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setEnd_date(?string $end_date = null): self
    {
        // validation for constraint: string
        if (!is_null($end_date) && !is_string($end_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_date, true), gettype($end_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($end_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $end_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($end_date, true)), __LINE__);
        }
        $this->end_date = $this->{'end-date'} = $end_date;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * Get no_of_nights value
     * @return int|null
     */
    public function getNo_of_nights(): ?int
    {
        return $this->{'no-of-nights'};
    }
    /**
     * Set no_of_nights value
     * @param int $no_of_nights
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setNo_of_nights(?int $no_of_nights = null): self
    {
        // validation for constraint: int
        if (!is_null($no_of_nights) && !(is_int($no_of_nights) || ctype_digit($no_of_nights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($no_of_nights, true), gettype($no_of_nights)), __LINE__);
        }
        $this->no_of_nights = $this->{'no-of-nights'} = $no_of_nights;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * Get total_price value
     * @return float|null
     */
    public function getTotal_price(): ?float
    {
        return $this->{'total-price'};
    }
    /**
     * Set total_price value
     * @param float $total_price
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setTotal_price(?float $total_price = null): self
    {
        // validation for constraint: float
        if (!is_null($total_price) && !(is_float($total_price) || is_numeric($total_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_price, true), gettype($total_price)), __LINE__);
        }
        $this->total_price = $this->{'total-price'} = $total_price;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * Get vat_included value
     * @return bool|null
     */
    public function getVat_included(): ?bool
    {
        return $this->{'vat-included'};
    }
    /**
     * Set vat_included value
     * @param bool $vat_included
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setVat_included(?bool $vat_included = false): self
    {
        // validation for constraint: boolean
        if (!is_null($vat_included) && !is_bool($vat_included)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vat_included, true), gettype($vat_included)), __LINE__);
        }
        $this->vat_included = $this->{'vat-included'} = $vat_included;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
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
     * Get arrival_transport_type value
     * @return string|null
     */
    public function getArrival_transport_type(): ?string
    {
        return $this->{'arrival-transport-type'};
    }
    /**
     * Set arrival_transport_type value
     * @uses \Pggns\MidocoApi\Order\EnumType\TransportType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\TransportType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $arrival_transport_type
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setArrival_transport_type(?string $arrival_transport_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\TransportType::valueIsValid($arrival_transport_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\TransportType', is_array($arrival_transport_type) ? implode(', ', $arrival_transport_type) : var_export($arrival_transport_type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\TransportType::getValidValues())), __LINE__);
        }
        $this->arrival_transport_type = $this->{'arrival-transport-type'} = $arrival_transport_type;
        
        return $this;
    }
    /**
     * Get departure_descr value
     * @return string|null
     */
    public function getDeparture_descr(): ?string
    {
        return $this->{'departure-descr'};
    }
    /**
     * Set departure_descr value
     * @param string $departure_descr
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setDeparture_descr(?string $departure_descr = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_descr) && !is_string($departure_descr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_descr, true), gettype($departure_descr)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($departure_descr) && mb_strlen((string) $departure_descr) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $departure_descr)), __LINE__);
        }
        $this->departure_descr = $this->{'departure-descr'} = $departure_descr;
        
        return $this;
    }
    /**
     * Get destination_descr value
     * @return string|null
     */
    public function getDestination_descr(): ?string
    {
        return $this->{'destination-descr'};
    }
    /**
     * Set destination_descr value
     * @param string $destination_descr
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setDestination_descr(?string $destination_descr = null): self
    {
        // validation for constraint: string
        if (!is_null($destination_descr) && !is_string($destination_descr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination_descr, true), gettype($destination_descr)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($destination_descr) && mb_strlen((string) $destination_descr) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $destination_descr)), __LINE__);
        }
        $this->destination_descr = $this->{'destination-descr'} = $destination_descr;
        
        return $this;
    }
    /**
     * Get return_transport_type value
     * @return string|null
     */
    public function getReturn_transport_type(): ?string
    {
        return $this->{'return-transport-type'};
    }
    /**
     * Set return_transport_type value
     * @uses \Pggns\MidocoApi\Order\EnumType\TransportType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\TransportType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $return_transport_type
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setReturn_transport_type(?string $return_transport_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\TransportType::valueIsValid($return_transport_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\TransportType', is_array($return_transport_type) ? implode(', ', $return_transport_type) : var_export($return_transport_type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\TransportType::getValidValues())), __LINE__);
        }
        $this->return_transport_type = $this->{'return-transport-type'} = $return_transport_type;
        
        return $this;
    }
    /**
     * Get return_departure_descr value
     * @return string|null
     */
    public function getReturn_departure_descr(): ?string
    {
        return $this->{'return-departure-descr'};
    }
    /**
     * Set return_departure_descr value
     * @param string $return_departure_descr
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setReturn_departure_descr(?string $return_departure_descr = null): self
    {
        // validation for constraint: string
        if (!is_null($return_departure_descr) && !is_string($return_departure_descr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_departure_descr, true), gettype($return_departure_descr)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($return_departure_descr) && mb_strlen((string) $return_departure_descr) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $return_departure_descr)), __LINE__);
        }
        $this->return_departure_descr = $this->{'return-departure-descr'} = $return_departure_descr;
        
        return $this;
    }
    /**
     * Get return_destination_descr value
     * @return string|null
     */
    public function getReturn_destination_descr(): ?string
    {
        return $this->{'return-destination-descr'};
    }
    /**
     * Set return_destination_descr value
     * @param string $return_destination_descr
     * @return \Pggns\MidocoApi\Order\StructType\Cruise_service_type
     */
    public function setReturn_destination_descr(?string $return_destination_descr = null): self
    {
        // validation for constraint: string
        if (!is_null($return_destination_descr) && !is_string($return_destination_descr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_destination_descr, true), gettype($return_destination_descr)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($return_destination_descr) && mb_strlen((string) $return_destination_descr) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $return_destination_descr)), __LINE__);
        }
        $this->return_destination_descr = $this->{'return-destination-descr'} = $return_destination_descr;
        
        return $this;
    }
}
