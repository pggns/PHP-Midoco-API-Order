<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transfer-service-type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Transfer_service_type extends AbstractStructBase
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
     * The persons_per_service
     * Meta information extracted from the WSDL
     * - documentation: Number of persons this service is booked for (in case of a double room: 2)
     * @var string|null
     */
    protected ?string $persons_per_service = null;
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
     * The start_time
     * Meta information extracted from the WSDL
     * - documentation: Date when the service starts
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $start_time = null;
    /**
     * The end_time
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $end_time = null;
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
     * The departure_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_code = null;
    /**
     * The departure_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_description = null;
    /**
     * The departure_location
     * Meta information extracted from the WSDL
     * - documentation: location for departure
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_location = null;
    /**
     * The departure_point
     * Meta information extracted from the WSDL
     * - documentation: meeting point for departure
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_point = null;
    /**
     * The destination_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destination_code = null;
    /**
     * The destination_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destination_description = null;
    /**
     * The return_departure_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_departure_code = null;
    /**
     * The return_departure_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_departure_description = null;
    /**
     * The return_destination_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_destination_code = null;
    /**
     * The return_destination_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_destination_description = null;
    /**
     * The baggage_allowance
     * Meta information extracted from the WSDL
     * - documentation: max. baggage allowance
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $baggage_allowance = null;
    /**
     * The duration
     * Meta information extracted from the WSDL
     * - documentation: time of transfer
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $duration = null;
    /**
     * The transfer_address1
     * Meta information extracted from the WSDL
     * - documentation: destination adress
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transfer_address1 = null;
    /**
     * The transfer_address2
     * Meta information extracted from the WSDL
     * - documentation: destination adress
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transfer_address2 = null;
    /**
     * The transfer_address3
     * Meta information extracted from the WSDL
     * - documentation: destination adress
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transfer_address3 = null;
    /**
     * The transfer_address4
     * Meta information extracted from the WSDL
     * - documentation: destination adress
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transfer_address4 = null;
    /**
     * The vehicle_code
     * Meta information extracted from the WSDL
     * - documentation: code for vehicle
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vehicle_code = null;
    /**
     * The vehicle_description
     * Meta information extracted from the WSDL
     * - documentation: long description for vehicle
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vehicle_description = null;
    /**
     * The type_of_transfer
     * Meta information extracted from the WSDL
     * - documentation: type description (e.g. private transfer, bus transfer..)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type_of_transfer = null;
    /**
     * The direction
     * Meta information extracted from the WSDL
     * - documentation: direction (OUTWARD, RETURN, BOTH)
     * - default: BOTH
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $direction = null;
    /**
     * The emergency_Number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $emergency_Number = null;
    /**
     * The max_passengers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $max_passengers = null;
    /**
     * The simpleService
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $simpleService = null;
    /**
     * Constructor method for transfer-service-type
     * @uses Transfer_service_type::setPosition()
     * @uses Transfer_service_type::setService_code()
     * @uses Transfer_service_type::setService_name()
     * @uses Transfer_service_type::setPersons_per_service()
     * @uses Transfer_service_type::setStart_date()
     * @uses Transfer_service_type::setEnd_date()
     * @uses Transfer_service_type::setStart_time()
     * @uses Transfer_service_type::setEnd_time()
     * @uses Transfer_service_type::setPerson_assignment()
     * @uses Transfer_service_type::setService_status()
     * @uses Transfer_service_type::setService_price()
     * @uses Transfer_service_type::setService_currency()
     * @uses Transfer_service_type::setService_description()
     * @uses Transfer_service_type::setDeparture_code()
     * @uses Transfer_service_type::setDeparture_description()
     * @uses Transfer_service_type::setDeparture_location()
     * @uses Transfer_service_type::setDeparture_point()
     * @uses Transfer_service_type::setDestination_code()
     * @uses Transfer_service_type::setDestination_description()
     * @uses Transfer_service_type::setReturn_departure_code()
     * @uses Transfer_service_type::setReturn_departure_description()
     * @uses Transfer_service_type::setReturn_destination_code()
     * @uses Transfer_service_type::setReturn_destination_description()
     * @uses Transfer_service_type::setBaggage_allowance()
     * @uses Transfer_service_type::setDuration()
     * @uses Transfer_service_type::setTransfer_address1()
     * @uses Transfer_service_type::setTransfer_address2()
     * @uses Transfer_service_type::setTransfer_address3()
     * @uses Transfer_service_type::setTransfer_address4()
     * @uses Transfer_service_type::setVehicle_code()
     * @uses Transfer_service_type::setVehicle_description()
     * @uses Transfer_service_type::setType_of_transfer()
     * @uses Transfer_service_type::setDirection()
     * @uses Transfer_service_type::setEmergency_Number()
     * @uses Transfer_service_type::setMax_passengers()
     * @uses Transfer_service_type::setSimpleService()
     * @param int $position
     * @param string $service_code
     * @param string $service_name
     * @param string $persons_per_service
     * @param string $start_date
     * @param string $end_date
     * @param string $start_time
     * @param string $end_time
     * @param string $person_assignment
     * @param string $service_status
     * @param float $service_price
     * @param string $service_currency
     * @param string $service_description
     * @param string $departure_code
     * @param string $departure_description
     * @param string $departure_location
     * @param string $departure_point
     * @param string $destination_code
     * @param string $destination_description
     * @param string $return_departure_code
     * @param string $return_departure_description
     * @param string $return_destination_code
     * @param string $return_destination_description
     * @param string $baggage_allowance
     * @param string $duration
     * @param string $transfer_address1
     * @param string $transfer_address2
     * @param string $transfer_address3
     * @param string $transfer_address4
     * @param string $vehicle_code
     * @param string $vehicle_description
     * @param string $type_of_transfer
     * @param string $direction
     * @param string $emergency_Number
     * @param int $max_passengers
     * @param bool $simpleService
     */
    public function __construct(int $position, ?string $service_code = null, ?string $service_name = null, ?string $persons_per_service = null, ?string $start_date = null, ?string $end_date = null, ?string $start_time = null, ?string $end_time = null, ?string $person_assignment = null, ?string $service_status = null, ?float $service_price = null, ?string $service_currency = 'EUR', ?string $service_description = null, ?string $departure_code = null, ?string $departure_description = null, ?string $departure_location = null, ?string $departure_point = null, ?string $destination_code = null, ?string $destination_description = null, ?string $return_departure_code = null, ?string $return_departure_description = null, ?string $return_destination_code = null, ?string $return_destination_description = null, ?string $baggage_allowance = null, ?string $duration = null, ?string $transfer_address1 = null, ?string $transfer_address2 = null, ?string $transfer_address3 = null, ?string $transfer_address4 = null, ?string $vehicle_code = null, ?string $vehicle_description = null, ?string $type_of_transfer = null, ?string $direction = null, ?string $emergency_Number = null, ?int $max_passengers = null, ?bool $simpleService = false)
    {
        $this
            ->setPosition($position)
            ->setService_code($service_code)
            ->setService_name($service_name)
            ->setPersons_per_service($persons_per_service)
            ->setStart_date($start_date)
            ->setEnd_date($end_date)
            ->setStart_time($start_time)
            ->setEnd_time($end_time)
            ->setPerson_assignment($person_assignment)
            ->setService_status($service_status)
            ->setService_price($service_price)
            ->setService_currency($service_currency)
            ->setService_description($service_description)
            ->setDeparture_code($departure_code)
            ->setDeparture_description($departure_description)
            ->setDeparture_location($departure_location)
            ->setDeparture_point($departure_point)
            ->setDestination_code($destination_code)
            ->setDestination_description($destination_description)
            ->setReturn_departure_code($return_departure_code)
            ->setReturn_departure_description($return_departure_description)
            ->setReturn_destination_code($return_destination_code)
            ->setReturn_destination_description($return_destination_description)
            ->setBaggage_allowance($baggage_allowance)
            ->setDuration($duration)
            ->setTransfer_address1($transfer_address1)
            ->setTransfer_address2($transfer_address2)
            ->setTransfer_address3($transfer_address3)
            ->setTransfer_address4($transfer_address4)
            ->setVehicle_code($vehicle_code)
            ->setVehicle_description($vehicle_description)
            ->setType_of_transfer($type_of_transfer)
            ->setDirection($direction)
            ->setEmergency_Number($emergency_Number)
            ->setMax_passengers($max_passengers)
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * Get start_time value
     * @return string|null
     */
    public function getStart_time(): ?string
    {
        return $this->{'start-time'};
    }
    /**
     * Set start_time value
     * @param string $start_time
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setStart_time(?string $start_time = null): self
    {
        // validation for constraint: string
        if (!is_null($start_time) && !is_string($start_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_time, true), gettype($start_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2}:[0-9]{2})
        if (!is_null($start_time) && !preg_match('/[0-9]{2}:[0-9]{2}:[0-9]{2}/', (string) $start_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}:[0-9]{2}/', var_export($start_time, true)), __LINE__);
        }
        $this->start_time = $this->{'start-time'} = $start_time;
        
        return $this;
    }
    /**
     * Get end_time value
     * @return string|null
     */
    public function getEnd_time(): ?string
    {
        return $this->{'end-time'};
    }
    /**
     * Set end_time value
     * @param string $end_time
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setEnd_time(?string $end_time = null): self
    {
        // validation for constraint: string
        if (!is_null($end_time) && !is_string($end_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_time, true), gettype($end_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2}:[0-9]{2})
        if (!is_null($end_time) && !preg_match('/[0-9]{2}:[0-9]{2}:[0-9]{2}/', (string) $end_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}:[0-9]{2}/', var_export($end_time, true)), __LINE__);
        }
        $this->end_time = $this->{'end-time'} = $end_time;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * Get departure_code value
     * @return string|null
     */
    public function getDeparture_code(): ?string
    {
        return $this->{'departure-code'};
    }
    /**
     * Set departure_code value
     * @param string $departure_code
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setDeparture_code(?string $departure_code = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_code) && !is_string($departure_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_code, true), gettype($departure_code)), __LINE__);
        }
        $this->departure_code = $this->{'departure-code'} = $departure_code;
        
        return $this;
    }
    /**
     * Get departure_description value
     * @return string|null
     */
    public function getDeparture_description(): ?string
    {
        return $this->{'departure-description'};
    }
    /**
     * Set departure_description value
     * @param string $departure_description
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setDeparture_description(?string $departure_description = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_description) && !is_string($departure_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_description, true), gettype($departure_description)), __LINE__);
        }
        $this->departure_description = $this->{'departure-description'} = $departure_description;
        
        return $this;
    }
    /**
     * Get departure_location value
     * @return string|null
     */
    public function getDeparture_location(): ?string
    {
        return $this->{'departure-location'};
    }
    /**
     * Set departure_location value
     * @param string $departure_location
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setDeparture_location(?string $departure_location = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_location) && !is_string($departure_location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_location, true), gettype($departure_location)), __LINE__);
        }
        $this->departure_location = $this->{'departure-location'} = $departure_location;
        
        return $this;
    }
    /**
     * Get departure_point value
     * @return string|null
     */
    public function getDeparture_point(): ?string
    {
        return $this->{'departure-point'};
    }
    /**
     * Set departure_point value
     * @param string $departure_point
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setDeparture_point(?string $departure_point = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_point) && !is_string($departure_point)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_point, true), gettype($departure_point)), __LINE__);
        }
        $this->departure_point = $this->{'departure-point'} = $departure_point;
        
        return $this;
    }
    /**
     * Get destination_code value
     * @return string|null
     */
    public function getDestination_code(): ?string
    {
        return $this->{'destination-code'};
    }
    /**
     * Set destination_code value
     * @param string $destination_code
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setDestination_code(?string $destination_code = null): self
    {
        // validation for constraint: string
        if (!is_null($destination_code) && !is_string($destination_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination_code, true), gettype($destination_code)), __LINE__);
        }
        $this->destination_code = $this->{'destination-code'} = $destination_code;
        
        return $this;
    }
    /**
     * Get destination_description value
     * @return string|null
     */
    public function getDestination_description(): ?string
    {
        return $this->{'destination-description'};
    }
    /**
     * Set destination_description value
     * @param string $destination_description
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setDestination_description(?string $destination_description = null): self
    {
        // validation for constraint: string
        if (!is_null($destination_description) && !is_string($destination_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination_description, true), gettype($destination_description)), __LINE__);
        }
        $this->destination_description = $this->{'destination-description'} = $destination_description;
        
        return $this;
    }
    /**
     * Get return_departure_code value
     * @return string|null
     */
    public function getReturn_departure_code(): ?string
    {
        return $this->{'return-departure-code'};
    }
    /**
     * Set return_departure_code value
     * @param string $return_departure_code
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setReturn_departure_code(?string $return_departure_code = null): self
    {
        // validation for constraint: string
        if (!is_null($return_departure_code) && !is_string($return_departure_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_departure_code, true), gettype($return_departure_code)), __LINE__);
        }
        $this->return_departure_code = $this->{'return-departure-code'} = $return_departure_code;
        
        return $this;
    }
    /**
     * Get return_departure_description value
     * @return string|null
     */
    public function getReturn_departure_description(): ?string
    {
        return $this->{'return-departure-description'};
    }
    /**
     * Set return_departure_description value
     * @param string $return_departure_description
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setReturn_departure_description(?string $return_departure_description = null): self
    {
        // validation for constraint: string
        if (!is_null($return_departure_description) && !is_string($return_departure_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_departure_description, true), gettype($return_departure_description)), __LINE__);
        }
        $this->return_departure_description = $this->{'return-departure-description'} = $return_departure_description;
        
        return $this;
    }
    /**
     * Get return_destination_code value
     * @return string|null
     */
    public function getReturn_destination_code(): ?string
    {
        return $this->{'return-destination-code'};
    }
    /**
     * Set return_destination_code value
     * @param string $return_destination_code
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setReturn_destination_code(?string $return_destination_code = null): self
    {
        // validation for constraint: string
        if (!is_null($return_destination_code) && !is_string($return_destination_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_destination_code, true), gettype($return_destination_code)), __LINE__);
        }
        $this->return_destination_code = $this->{'return-destination-code'} = $return_destination_code;
        
        return $this;
    }
    /**
     * Get return_destination_description value
     * @return string|null
     */
    public function getReturn_destination_description(): ?string
    {
        return $this->{'return-destination-description'};
    }
    /**
     * Set return_destination_description value
     * @param string $return_destination_description
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setReturn_destination_description(?string $return_destination_description = null): self
    {
        // validation for constraint: string
        if (!is_null($return_destination_description) && !is_string($return_destination_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_destination_description, true), gettype($return_destination_description)), __LINE__);
        }
        $this->return_destination_description = $this->{'return-destination-description'} = $return_destination_description;
        
        return $this;
    }
    /**
     * Get baggage_allowance value
     * @return string|null
     */
    public function getBaggage_allowance(): ?string
    {
        return $this->{'baggage-allowance'};
    }
    /**
     * Set baggage_allowance value
     * @param string $baggage_allowance
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setBaggage_allowance(?string $baggage_allowance = null): self
    {
        // validation for constraint: string
        if (!is_null($baggage_allowance) && !is_string($baggage_allowance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baggage_allowance, true), gettype($baggage_allowance)), __LINE__);
        }
        $this->baggage_allowance = $this->{'baggage-allowance'} = $baggage_allowance;
        
        return $this;
    }
    /**
     * Get duration value
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param string $duration
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setDuration(?string $duration = null): self
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        
        return $this;
    }
    /**
     * Get transfer_address1 value
     * @return string|null
     */
    public function getTransfer_address1(): ?string
    {
        return $this->{'transfer-address1'};
    }
    /**
     * Set transfer_address1 value
     * @param string $transfer_address1
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setTransfer_address1(?string $transfer_address1 = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer_address1) && !is_string($transfer_address1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer_address1, true), gettype($transfer_address1)), __LINE__);
        }
        $this->transfer_address1 = $this->{'transfer-address1'} = $transfer_address1;
        
        return $this;
    }
    /**
     * Get transfer_address2 value
     * @return string|null
     */
    public function getTransfer_address2(): ?string
    {
        return $this->{'transfer-address2'};
    }
    /**
     * Set transfer_address2 value
     * @param string $transfer_address2
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setTransfer_address2(?string $transfer_address2 = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer_address2) && !is_string($transfer_address2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer_address2, true), gettype($transfer_address2)), __LINE__);
        }
        $this->transfer_address2 = $this->{'transfer-address2'} = $transfer_address2;
        
        return $this;
    }
    /**
     * Get transfer_address3 value
     * @return string|null
     */
    public function getTransfer_address3(): ?string
    {
        return $this->{'transfer-address3'};
    }
    /**
     * Set transfer_address3 value
     * @param string $transfer_address3
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setTransfer_address3(?string $transfer_address3 = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer_address3) && !is_string($transfer_address3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer_address3, true), gettype($transfer_address3)), __LINE__);
        }
        $this->transfer_address3 = $this->{'transfer-address3'} = $transfer_address3;
        
        return $this;
    }
    /**
     * Get transfer_address4 value
     * @return string|null
     */
    public function getTransfer_address4(): ?string
    {
        return $this->{'transfer-address4'};
    }
    /**
     * Set transfer_address4 value
     * @param string $transfer_address4
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setTransfer_address4(?string $transfer_address4 = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer_address4) && !is_string($transfer_address4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer_address4, true), gettype($transfer_address4)), __LINE__);
        }
        $this->transfer_address4 = $this->{'transfer-address4'} = $transfer_address4;
        
        return $this;
    }
    /**
     * Get vehicle_code value
     * @return string|null
     */
    public function getVehicle_code(): ?string
    {
        return $this->{'vehicle-code'};
    }
    /**
     * Set vehicle_code value
     * @param string $vehicle_code
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setVehicle_code(?string $vehicle_code = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicle_code) && !is_string($vehicle_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_code, true), gettype($vehicle_code)), __LINE__);
        }
        $this->vehicle_code = $this->{'vehicle-code'} = $vehicle_code;
        
        return $this;
    }
    /**
     * Get vehicle_description value
     * @return string|null
     */
    public function getVehicle_description(): ?string
    {
        return $this->{'vehicle-description'};
    }
    /**
     * Set vehicle_description value
     * @param string $vehicle_description
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setVehicle_description(?string $vehicle_description = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicle_description) && !is_string($vehicle_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_description, true), gettype($vehicle_description)), __LINE__);
        }
        $this->vehicle_description = $this->{'vehicle-description'} = $vehicle_description;
        
        return $this;
    }
    /**
     * Get type_of_transfer value
     * @return string|null
     */
    public function getType_of_transfer(): ?string
    {
        return $this->{'type-of-transfer'};
    }
    /**
     * Set type_of_transfer value
     * @param string $type_of_transfer
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setType_of_transfer(?string $type_of_transfer = null): self
    {
        // validation for constraint: string
        if (!is_null($type_of_transfer) && !is_string($type_of_transfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type_of_transfer, true), gettype($type_of_transfer)), __LINE__);
        }
        $this->type_of_transfer = $this->{'type-of-transfer'} = $type_of_transfer;
        
        return $this;
    }
    /**
     * Get direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @uses \Pggns\MidocoApi\Order\EnumType\Direction::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Direction::getValidValues()
     * @throws InvalidArgumentException
     * @param string $direction
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Direction::valueIsValid($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Direction', is_array($direction) ? implode(', ', $direction) : var_export($direction, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Direction::getValidValues())), __LINE__);
        }
        $this->direction = $direction;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
     * Get max_passengers value
     * @return int|null
     */
    public function getMax_passengers(): ?int
    {
        return $this->{'max-passengers'};
    }
    /**
     * Set max_passengers value
     * @param int $max_passengers
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
     */
    public function setMax_passengers(?int $max_passengers = null): self
    {
        // validation for constraint: int
        if (!is_null($max_passengers) && !(is_int($max_passengers) || ctype_digit($max_passengers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($max_passengers, true), gettype($max_passengers)), __LINE__);
        }
        $this->max_passengers = $this->{'max-passengers'} = $max_passengers;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Transfer_service_type
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
