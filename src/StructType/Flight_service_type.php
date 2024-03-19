<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for flight-service-type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Flight_service_type extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The flight_no
     * Meta information extracted from the WSDL
     * - documentation: for open segments can be empty
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flight_no = null;
    /**
     * The booking_class
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $booking_class = null;
    /**
     * The class_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $class_description = null;
    /**
     * The open_segment
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $open_segment = null;
    /**
     * The departure_code
     * @var string|null
     */
    protected ?string $departure_code = null;
    /**
     * The destination_code
     * @var string|null
     */
    protected ?string $destination_code = null;
    /**
     * The departure_date
     * Meta information extracted from the WSDL
     * - documentation: optional only when open segment is set, else not optional !
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $departure_date = null;
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
     * The checkin_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $checkin_time = null;
    /**
     * The arrival_date
     * Meta information extracted from the WSDL
     * - documentation: if left out, it is coinsidered to be the same as departure date, set only when flying over a day barrier
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $arrival_date = null;
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
     * The departure_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_description = null;
    /**
     * The destination_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destination_description = null;
    /**
     * The person_assignment
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The service_status
     * @var string|null
     */
    protected ?string $service_status = null;
    /**
     * The baggage_allowance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $baggage_allowance = null;
    /**
     * The segment_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $segment_no = null;
    /**
     * The cabin_class
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cabin_class = null;
    /**
     * The stopover_count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $stopover_count = null;
    /**
     * The aircraft_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $aircraft_type = null;
    /**
     * The meal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\FlightMealType[]
     */
    protected ?array $meal = null;
    /**
     * The seat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\FlightSeatType[]
     */
    protected ?array $seat = null;
    /**
     * The operating_carrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $operating_carrier = null;
    /**
     * The operating_carrier_flight_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $operating_carrier_flight_no = null;
    /**
     * The miles
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $miles = null;
    /**
     * The duration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $duration = null;
    /**
     * The fare_base
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fare_base = null;
    /**
     * The co2_emission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $co2_emission = null;
    /**
     * The special_service_request
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Special_service_request[]
     */
    protected ?array $special_service_request = null;
    /**
     * The departureTerminal
     * @var string|null
     */
    protected ?string $departureTerminal = null;
    /**
     * Constructor method for flight-service-type
     * @uses Flight_service_type::setPosition()
     * @uses Flight_service_type::setCarrier()
     * @uses Flight_service_type::setFlight_no()
     * @uses Flight_service_type::setBooking_class()
     * @uses Flight_service_type::setClass_description()
     * @uses Flight_service_type::setOpen_segment()
     * @uses Flight_service_type::setDeparture_code()
     * @uses Flight_service_type::setDestination_code()
     * @uses Flight_service_type::setDeparture_date()
     * @uses Flight_service_type::setDeparture_time()
     * @uses Flight_service_type::setCheckin_time()
     * @uses Flight_service_type::setArrival_date()
     * @uses Flight_service_type::setArrival_time()
     * @uses Flight_service_type::setDeparture_description()
     * @uses Flight_service_type::setDestination_description()
     * @uses Flight_service_type::setPerson_assignment()
     * @uses Flight_service_type::setService_status()
     * @uses Flight_service_type::setBaggage_allowance()
     * @uses Flight_service_type::setSegment_no()
     * @uses Flight_service_type::setCabin_class()
     * @uses Flight_service_type::setStopover_count()
     * @uses Flight_service_type::setAircraft_type()
     * @uses Flight_service_type::setMeal()
     * @uses Flight_service_type::setSeat()
     * @uses Flight_service_type::setOperating_carrier()
     * @uses Flight_service_type::setOperating_carrier_flight_no()
     * @uses Flight_service_type::setMiles()
     * @uses Flight_service_type::setDuration()
     * @uses Flight_service_type::setFare_base()
     * @uses Flight_service_type::setCo2_emission()
     * @uses Flight_service_type::setSpecial_service_request()
     * @uses Flight_service_type::setDepartureTerminal()
     * @param int $position
     * @param string $carrier
     * @param string $flight_no
     * @param string $booking_class
     * @param string $class_description
     * @param bool $open_segment
     * @param string $departure_code
     * @param string $destination_code
     * @param string $departure_date
     * @param string $departure_time
     * @param string $checkin_time
     * @param string $arrival_date
     * @param string $arrival_time
     * @param string $departure_description
     * @param string $destination_description
     * @param string $person_assignment
     * @param string $service_status
     * @param string $baggage_allowance
     * @param int $segment_no
     * @param string $cabin_class
     * @param int $stopover_count
     * @param string $aircraft_type
     * @param \Pggns\MidocoApi\Order\StructType\FlightMealType[] $meal
     * @param \Pggns\MidocoApi\Order\StructType\FlightSeatType[] $seat
     * @param string $operating_carrier
     * @param string $operating_carrier_flight_no
     * @param int $miles
     * @param string $duration
     * @param string $fare_base
     * @param float $co2_emission
     * @param \Pggns\MidocoApi\Order\StructType\Special_service_request[] $special_service_request
     * @param string $departureTerminal
     */
    public function __construct(int $position, ?string $carrier = null, ?string $flight_no = null, ?string $booking_class = null, ?string $class_description = null, ?bool $open_segment = false, ?string $departure_code = null, ?string $destination_code = null, ?string $departure_date = null, ?string $departure_time = null, ?string $checkin_time = null, ?string $arrival_date = null, ?string $arrival_time = null, ?string $departure_description = null, ?string $destination_description = null, ?string $person_assignment = null, ?string $service_status = null, ?string $baggage_allowance = null, ?int $segment_no = null, ?string $cabin_class = null, ?int $stopover_count = null, ?string $aircraft_type = null, ?array $meal = null, ?array $seat = null, ?string $operating_carrier = null, ?string $operating_carrier_flight_no = null, ?int $miles = null, ?string $duration = null, ?string $fare_base = null, ?float $co2_emission = null, ?array $special_service_request = null, ?string $departureTerminal = null)
    {
        $this
            ->setPosition($position)
            ->setCarrier($carrier)
            ->setFlight_no($flight_no)
            ->setBooking_class($booking_class)
            ->setClass_description($class_description)
            ->setOpen_segment($open_segment)
            ->setDeparture_code($departure_code)
            ->setDestination_code($destination_code)
            ->setDeparture_date($departure_date)
            ->setDeparture_time($departure_time)
            ->setCheckin_time($checkin_time)
            ->setArrival_date($arrival_date)
            ->setArrival_time($arrival_time)
            ->setDeparture_description($departure_description)
            ->setDestination_description($destination_description)
            ->setPerson_assignment($person_assignment)
            ->setService_status($service_status)
            ->setBaggage_allowance($baggage_allowance)
            ->setSegment_no($segment_no)
            ->setCabin_class($cabin_class)
            ->setStopover_count($stopover_count)
            ->setAircraft_type($aircraft_type)
            ->setMeal($meal)
            ->setSeat($seat)
            ->setOperating_carrier($operating_carrier)
            ->setOperating_carrier_flight_no($operating_carrier_flight_no)
            ->setMiles($miles)
            ->setDuration($duration)
            ->setFare_base($fare_base)
            ->setCo2_emission($co2_emission)
            ->setSpecial_service_request($special_service_request)
            ->setDepartureTerminal($departureTerminal);
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * Get flight_no value
     * @return string|null
     */
    public function getFlight_no(): ?string
    {
        return $this->{'flight-no'};
    }
    /**
     * Set flight_no value
     * @param string $flight_no
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setFlight_no(?string $flight_no = null): self
    {
        // validation for constraint: string
        if (!is_null($flight_no) && !is_string($flight_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flight_no, true), gettype($flight_no)), __LINE__);
        }
        $this->flight_no = $this->{'flight-no'} = $flight_no;
        
        return $this;
    }
    /**
     * Get booking_class value
     * @return string|null
     */
    public function getBooking_class(): ?string
    {
        return $this->{'booking-class'};
    }
    /**
     * Set booking_class value
     * @param string $booking_class
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setBooking_class(?string $booking_class = null): self
    {
        // validation for constraint: string
        if (!is_null($booking_class) && !is_string($booking_class)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_class, true), gettype($booking_class)), __LINE__);
        }
        $this->booking_class = $this->{'booking-class'} = $booking_class;
        
        return $this;
    }
    /**
     * Get class_description value
     * @return string|null
     */
    public function getClass_description(): ?string
    {
        return $this->{'class-description'};
    }
    /**
     * Set class_description value
     * @param string $class_description
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setClass_description(?string $class_description = null): self
    {
        // validation for constraint: string
        if (!is_null($class_description) && !is_string($class_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($class_description, true), gettype($class_description)), __LINE__);
        }
        $this->class_description = $this->{'class-description'} = $class_description;
        
        return $this;
    }
    /**
     * Get open_segment value
     * @return bool|null
     */
    public function getOpen_segment(): ?bool
    {
        return $this->{'open-segment'};
    }
    /**
     * Set open_segment value
     * @param bool $open_segment
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setOpen_segment(?bool $open_segment = false): self
    {
        // validation for constraint: boolean
        if (!is_null($open_segment) && !is_bool($open_segment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($open_segment, true), gettype($open_segment)), __LINE__);
        }
        $this->open_segment = $this->{'open-segment'} = $open_segment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * Get departure_date value
     * @return string|null
     */
    public function getDeparture_date(): ?string
    {
        return $this->{'departure-date'};
    }
    /**
     * Set departure_date value
     * @param string $departure_date
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setDeparture_date(?string $departure_date = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_date) && !is_string($departure_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_date, true), gettype($departure_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($departure_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $departure_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($departure_date, true)), __LINE__);
        }
        $this->departure_date = $this->{'departure-date'} = $departure_date;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * Get checkin_time value
     * @return string|null
     */
    public function getCheckin_time(): ?string
    {
        return $this->{'checkin-time'};
    }
    /**
     * Set checkin_time value
     * @param string $checkin_time
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setCheckin_time(?string $checkin_time = null): self
    {
        // validation for constraint: string
        if (!is_null($checkin_time) && !is_string($checkin_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkin_time, true), gettype($checkin_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($checkin_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $checkin_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($checkin_time, true)), __LINE__);
        }
        $this->checkin_time = $this->{'checkin-time'} = $checkin_time;
        
        return $this;
    }
    /**
     * Get arrival_date value
     * @return string|null
     */
    public function getArrival_date(): ?string
    {
        return $this->{'arrival-date'};
    }
    /**
     * Set arrival_date value
     * @param string $arrival_date
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setArrival_date(?string $arrival_date = null): self
    {
        // validation for constraint: string
        if (!is_null($arrival_date) && !is_string($arrival_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_date, true), gettype($arrival_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($arrival_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $arrival_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($arrival_date, true)), __LINE__);
        }
        $this->arrival_date = $this->{'arrival-date'} = $arrival_date;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * Get segment_no value
     * @return int|null
     */
    public function getSegment_no(): ?int
    {
        return $this->{'segment-no'};
    }
    /**
     * Set segment_no value
     * @param int $segment_no
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setSegment_no(?int $segment_no = null): self
    {
        // validation for constraint: int
        if (!is_null($segment_no) && !(is_int($segment_no) || ctype_digit($segment_no))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segment_no, true), gettype($segment_no)), __LINE__);
        }
        $this->segment_no = $this->{'segment-no'} = $segment_no;
        
        return $this;
    }
    /**
     * Get cabin_class value
     * @return string|null
     */
    public function getCabin_class(): ?string
    {
        return $this->{'cabin-class'};
    }
    /**
     * Set cabin_class value
     * @param string $cabin_class
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setCabin_class(?string $cabin_class = null): self
    {
        // validation for constraint: string
        if (!is_null($cabin_class) && !is_string($cabin_class)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabin_class, true), gettype($cabin_class)), __LINE__);
        }
        $this->cabin_class = $this->{'cabin-class'} = $cabin_class;
        
        return $this;
    }
    /**
     * Get stopover_count value
     * @return int|null
     */
    public function getStopover_count(): ?int
    {
        return $this->{'stopover-count'};
    }
    /**
     * Set stopover_count value
     * @param int $stopover_count
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setStopover_count(?int $stopover_count = null): self
    {
        // validation for constraint: int
        if (!is_null($stopover_count) && !(is_int($stopover_count) || ctype_digit($stopover_count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stopover_count, true), gettype($stopover_count)), __LINE__);
        }
        $this->stopover_count = $this->{'stopover-count'} = $stopover_count;
        
        return $this;
    }
    /**
     * Get aircraft_type value
     * @return string|null
     */
    public function getAircraft_type(): ?string
    {
        return $this->{'aircraft-type'};
    }
    /**
     * Set aircraft_type value
     * @param string $aircraft_type
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setAircraft_type(?string $aircraft_type = null): self
    {
        // validation for constraint: string
        if (!is_null($aircraft_type) && !is_string($aircraft_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aircraft_type, true), gettype($aircraft_type)), __LINE__);
        }
        $this->aircraft_type = $this->{'aircraft-type'} = $aircraft_type;
        
        return $this;
    }
    /**
     * Get meal value
     * @return \Pggns\MidocoApi\Order\StructType\FlightMealType[]
     */
    public function getMeal(): ?array
    {
        return $this->meal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMeal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMeal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMealForArrayConstraintFromSetMeal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flight_service_typeMealItem) {
            // validation for constraint: itemType
            if (!$flight_service_typeMealItem instanceof \Pggns\MidocoApi\Order\StructType\FlightMealType) {
                $invalidValues[] = is_object($flight_service_typeMealItem) ? get_class($flight_service_typeMealItem) : sprintf('%s(%s)', gettype($flight_service_typeMealItem), var_export($flight_service_typeMealItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The meal property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightMealType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set meal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightMealType[] $meal
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setMeal(?array $meal = null): self
    {
        // validation for constraint: array
        if ('' !== ($mealArrayErrorMessage = self::validateMealForArrayConstraintFromSetMeal($meal))) {
            throw new InvalidArgumentException($mealArrayErrorMessage, __LINE__);
        }
        $this->meal = $meal;
        
        return $this;
    }
    /**
     * Add item to meal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightMealType $item
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function addToMeal(\Pggns\MidocoApi\Order\StructType\FlightMealType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FlightMealType) {
            throw new InvalidArgumentException(sprintf('The meal property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightMealType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->meal[] = $item;
        
        return $this;
    }
    /**
     * Get seat value
     * @return \Pggns\MidocoApi\Order\StructType\FlightSeatType[]
     */
    public function getSeat(): ?array
    {
        return $this->seat;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSeat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSeat method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSeatForArrayConstraintFromSetSeat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flight_service_typeSeatItem) {
            // validation for constraint: itemType
            if (!$flight_service_typeSeatItem instanceof \Pggns\MidocoApi\Order\StructType\FlightSeatType) {
                $invalidValues[] = is_object($flight_service_typeSeatItem) ? get_class($flight_service_typeSeatItem) : sprintf('%s(%s)', gettype($flight_service_typeSeatItem), var_export($flight_service_typeSeatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The seat property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightSeatType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set seat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightSeatType[] $seat
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setSeat(?array $seat = null): self
    {
        // validation for constraint: array
        if ('' !== ($seatArrayErrorMessage = self::validateSeatForArrayConstraintFromSetSeat($seat))) {
            throw new InvalidArgumentException($seatArrayErrorMessage, __LINE__);
        }
        $this->seat = $seat;
        
        return $this;
    }
    /**
     * Add item to seat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightSeatType $item
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function addToSeat(\Pggns\MidocoApi\Order\StructType\FlightSeatType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FlightSeatType) {
            throw new InvalidArgumentException(sprintf('The seat property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightSeatType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->seat[] = $item;
        
        return $this;
    }
    /**
     * Get operating_carrier value
     * @return string|null
     */
    public function getOperating_carrier(): ?string
    {
        return $this->{'operating-carrier'};
    }
    /**
     * Set operating_carrier value
     * @param string $operating_carrier
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setOperating_carrier(?string $operating_carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($operating_carrier) && !is_string($operating_carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operating_carrier, true), gettype($operating_carrier)), __LINE__);
        }
        $this->operating_carrier = $this->{'operating-carrier'} = $operating_carrier;
        
        return $this;
    }
    /**
     * Get operating_carrier_flight_no value
     * @return string|null
     */
    public function getOperating_carrier_flight_no(): ?string
    {
        return $this->{'operating-carrier-flight-no'};
    }
    /**
     * Set operating_carrier_flight_no value
     * @param string $operating_carrier_flight_no
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setOperating_carrier_flight_no(?string $operating_carrier_flight_no = null): self
    {
        // validation for constraint: string
        if (!is_null($operating_carrier_flight_no) && !is_string($operating_carrier_flight_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operating_carrier_flight_no, true), gettype($operating_carrier_flight_no)), __LINE__);
        }
        $this->operating_carrier_flight_no = $this->{'operating-carrier-flight-no'} = $operating_carrier_flight_no;
        
        return $this;
    }
    /**
     * Get miles value
     * @return int|null
     */
    public function getMiles(): ?int
    {
        return $this->miles;
    }
    /**
     * Set miles value
     * @param int $miles
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setMiles(?int $miles = null): self
    {
        // validation for constraint: int
        if (!is_null($miles) && !(is_int($miles) || ctype_digit($miles))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($miles, true), gettype($miles)), __LINE__);
        }
        $this->miles = $miles;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
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
     * Get fare_base value
     * @return string|null
     */
    public function getFare_base(): ?string
    {
        return $this->{'fare-base'};
    }
    /**
     * Set fare_base value
     * @param string $fare_base
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setFare_base(?string $fare_base = null): self
    {
        // validation for constraint: string
        if (!is_null($fare_base) && !is_string($fare_base)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fare_base, true), gettype($fare_base)), __LINE__);
        }
        $this->fare_base = $this->{'fare-base'} = $fare_base;
        
        return $this;
    }
    /**
     * Get co2_emission value
     * @return float|null
     */
    public function getCo2_emission(): ?float
    {
        return $this->{'co2-emission'};
    }
    /**
     * Set co2_emission value
     * @param float $co2_emission
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setCo2_emission(?float $co2_emission = null): self
    {
        // validation for constraint: float
        if (!is_null($co2_emission) && !(is_float($co2_emission) || is_numeric($co2_emission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($co2_emission, true), gettype($co2_emission)), __LINE__);
        }
        $this->co2_emission = $this->{'co2-emission'} = $co2_emission;
        
        return $this;
    }
    /**
     * Get special_service_request value
     * @return \Pggns\MidocoApi\Order\StructType\Special_service_request[]
     */
    public function getSpecial_service_request(): ?array
    {
        return $this->{'special-service-request'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSpecial_service_request method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecial_service_request method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecial_service_requestForArrayConstraintFromSetSpecial_service_request(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flight_service_typeSpecial_service_requestItem) {
            // validation for constraint: itemType
            if (!$flight_service_typeSpecial_service_requestItem instanceof \Pggns\MidocoApi\Order\StructType\Special_service_request) {
                $invalidValues[] = is_object($flight_service_typeSpecial_service_requestItem) ? get_class($flight_service_typeSpecial_service_requestItem) : sprintf('%s(%s)', gettype($flight_service_typeSpecial_service_requestItem), var_export($flight_service_typeSpecial_service_requestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The special_service_request property can only contain items of type \Pggns\MidocoApi\Order\StructType\Special_service_request, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set special_service_request value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Special_service_request[] $special_service_request
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setSpecial_service_request(?array $special_service_request = null): self
    {
        // validation for constraint: array
        if ('' !== ($special_service_requestArrayErrorMessage = self::validateSpecial_service_requestForArrayConstraintFromSetSpecial_service_request($special_service_request))) {
            throw new InvalidArgumentException($special_service_requestArrayErrorMessage, __LINE__);
        }
        $this->special_service_request = $this->{'special-service-request'} = $special_service_request;
        
        return $this;
    }
    /**
     * Add item to special_service_request value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Special_service_request $item
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function addToSpecial_service_request(\Pggns\MidocoApi\Order\StructType\Special_service_request $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Special_service_request) {
            throw new InvalidArgumentException(sprintf('The special_service_request property can only contain items of type \Pggns\MidocoApi\Order\StructType\Special_service_request, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->special_service_request[] = $this->{'special-service-request'}[] = $item;
        
        return $this;
    }
    /**
     * Get departureTerminal value
     * @return string|null
     */
    public function getDepartureTerminal(): ?string
    {
        return $this->departureTerminal;
    }
    /**
     * Set departureTerminal value
     * @param string $departureTerminal
     * @return \Pggns\MidocoApi\Order\StructType\Flight_service_type
     */
    public function setDepartureTerminal(?string $departureTerminal = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTerminal) && !is_string($departureTerminal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTerminal, true), gettype($departureTerminal)), __LINE__);
        }
        $this->departureTerminal = $departureTerminal;
        
        return $this;
    }
}
