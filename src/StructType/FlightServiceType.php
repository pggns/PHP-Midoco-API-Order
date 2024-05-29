<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for flightServiceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FlightServiceType extends AbstractStructBase
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
     * The flightNo
     * Meta information extracted from the WSDL
     * - documentation: for open segments can be empty
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The bookingClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The classDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $classDescription = null;
    /**
     * The openSegment
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $openSegment = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The departureDate
     * Meta information extracted from the WSDL
     * - documentation: optional only when open segment is set, else not optional !
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $departureDate = null;
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
     * The checkinTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $checkinTime = null;
    /**
     * The arrivalDate
     * Meta information extracted from the WSDL
     * - documentation: if left out, it is coinsidered to be the same as departure date, set only when flying over a day barrier
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $arrivalDate = null;
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
     * The departureDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureDescription = null;
    /**
     * The destinationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationDescription = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The baggageAllowance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $baggageAllowance = null;
    /**
     * The segmentNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $segmentNo = null;
    /**
     * The cabinClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cabinClass = null;
    /**
     * The stopoverCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $stopoverCount = null;
    /**
     * The aircraftType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $aircraftType = null;
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
     * The operatingCarrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $operatingCarrier = null;
    /**
     * The operatingCarrierFlightNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $operatingCarrierFlightNo = null;
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
     * The fareBase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fareBase = null;
    /**
     * The co2Emission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $co2Emission = null;
    /**
     * The specialServiceRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest[]
     */
    protected ?array $specialServiceRequest = null;
    /**
     * The departureTerminal
     * @var string|null
     */
    protected ?string $departureTerminal = null;
    /**
     * Constructor method for flightServiceType
     * @uses FlightServiceType::setPosition()
     * @uses FlightServiceType::setCarrier()
     * @uses FlightServiceType::setFlightNo()
     * @uses FlightServiceType::setBookingClass()
     * @uses FlightServiceType::setClassDescription()
     * @uses FlightServiceType::setOpenSegment()
     * @uses FlightServiceType::setDepartureCode()
     * @uses FlightServiceType::setDestinationCode()
     * @uses FlightServiceType::setDepartureDate()
     * @uses FlightServiceType::setDepartureTime()
     * @uses FlightServiceType::setCheckinTime()
     * @uses FlightServiceType::setArrivalDate()
     * @uses FlightServiceType::setArrivalTime()
     * @uses FlightServiceType::setDepartureDescription()
     * @uses FlightServiceType::setDestinationDescription()
     * @uses FlightServiceType::setPersonAssignment()
     * @uses FlightServiceType::setServiceStatus()
     * @uses FlightServiceType::setBaggageAllowance()
     * @uses FlightServiceType::setSegmentNo()
     * @uses FlightServiceType::setCabinClass()
     * @uses FlightServiceType::setStopoverCount()
     * @uses FlightServiceType::setAircraftType()
     * @uses FlightServiceType::setMeal()
     * @uses FlightServiceType::setSeat()
     * @uses FlightServiceType::setOperatingCarrier()
     * @uses FlightServiceType::setOperatingCarrierFlightNo()
     * @uses FlightServiceType::setMiles()
     * @uses FlightServiceType::setDuration()
     * @uses FlightServiceType::setFareBase()
     * @uses FlightServiceType::setCo2Emission()
     * @uses FlightServiceType::setSpecialServiceRequest()
     * @uses FlightServiceType::setDepartureTerminal()
     * @param int $position
     * @param string $carrier
     * @param string $flightNo
     * @param string $bookingClass
     * @param string $classDescription
     * @param bool $openSegment
     * @param string $departureCode
     * @param string $destinationCode
     * @param string $departureDate
     * @param string $departureTime
     * @param string $checkinTime
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $departureDescription
     * @param string $destinationDescription
     * @param string $personAssignment
     * @param string $serviceStatus
     * @param string $baggageAllowance
     * @param int $segmentNo
     * @param string $cabinClass
     * @param int $stopoverCount
     * @param string $aircraftType
     * @param \Pggns\MidocoApi\Order\StructType\FlightMealType[] $meal
     * @param \Pggns\MidocoApi\Order\StructType\FlightSeatType[] $seat
     * @param string $operatingCarrier
     * @param string $operatingCarrierFlightNo
     * @param int $miles
     * @param string $duration
     * @param string $fareBase
     * @param float $co2Emission
     * @param \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest[] $specialServiceRequest
     * @param string $departureTerminal
     */
    public function __construct(int $position, ?string $carrier = null, ?string $flightNo = null, ?string $bookingClass = null, ?string $classDescription = null, ?bool $openSegment = false, ?string $departureCode = null, ?string $destinationCode = null, ?string $departureDate = null, ?string $departureTime = null, ?string $checkinTime = null, ?string $arrivalDate = null, ?string $arrivalTime = null, ?string $departureDescription = null, ?string $destinationDescription = null, ?string $personAssignment = null, ?string $serviceStatus = null, ?string $baggageAllowance = null, ?int $segmentNo = null, ?string $cabinClass = null, ?int $stopoverCount = null, ?string $aircraftType = null, ?array $meal = null, ?array $seat = null, ?string $operatingCarrier = null, ?string $operatingCarrierFlightNo = null, ?int $miles = null, ?string $duration = null, ?string $fareBase = null, ?float $co2Emission = null, ?array $specialServiceRequest = null, ?string $departureTerminal = null)
    {
        $this
            ->setPosition($position)
            ->setCarrier($carrier)
            ->setFlightNo($flightNo)
            ->setBookingClass($bookingClass)
            ->setClassDescription($classDescription)
            ->setOpenSegment($openSegment)
            ->setDepartureCode($departureCode)
            ->setDestinationCode($destinationCode)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setCheckinTime($checkinTime)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setDepartureDescription($departureDescription)
            ->setDestinationDescription($destinationDescription)
            ->setPersonAssignment($personAssignment)
            ->setServiceStatus($serviceStatus)
            ->setBaggageAllowance($baggageAllowance)
            ->setSegmentNo($segmentNo)
            ->setCabinClass($cabinClass)
            ->setStopoverCount($stopoverCount)
            ->setAircraftType($aircraftType)
            ->setMeal($meal)
            ->setSeat($seat)
            ->setOperatingCarrier($operatingCarrier)
            ->setOperatingCarrierFlightNo($operatingCarrierFlightNo)
            ->setMiles($miles)
            ->setDuration($duration)
            ->setFareBase($fareBase)
            ->setCo2Emission($co2Emission)
            ->setSpecialServiceRequest($specialServiceRequest)
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * Get classDescription value
     * @return string|null
     */
    public function getClassDescription(): ?string
    {
        return $this->classDescription;
    }
    /**
     * Set classDescription value
     * @param string $classDescription
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setClassDescription(?string $classDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($classDescription) && !is_string($classDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classDescription, true), gettype($classDescription)), __LINE__);
        }
        $this->classDescription = $classDescription;
        
        return $this;
    }
    /**
     * Get openSegment value
     * @return bool|null
     */
    public function getOpenSegment(): ?bool
    {
        return $this->openSegment;
    }
    /**
     * Set openSegment value
     * @param bool $openSegment
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setOpenSegment(?bool $openSegment = false): self
    {
        // validation for constraint: boolean
        if (!is_null($openSegment) && !is_bool($openSegment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($openSegment, true), gettype($openSegment)), __LINE__);
        }
        $this->openSegment = $openSegment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * Get departureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }
    /**
     * Set departureDate value
     * @param string $departureDate
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($departureDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($departureDate, true)), __LINE__);
        }
        $this->departureDate = $departureDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * Get checkinTime value
     * @return string|null
     */
    public function getCheckinTime(): ?string
    {
        return $this->checkinTime;
    }
    /**
     * Set checkinTime value
     * @param string $checkinTime
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setCheckinTime(?string $checkinTime = null): self
    {
        // validation for constraint: string
        if (!is_null($checkinTime) && !is_string($checkinTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkinTime, true), gettype($checkinTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($checkinTime) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $checkinTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($checkinTime, true)), __LINE__);
        }
        $this->checkinTime = $checkinTime;
        
        return $this;
    }
    /**
     * Get arrivalDate value
     * @return string|null
     */
    public function getArrivalDate(): ?string
    {
        return $this->arrivalDate;
    }
    /**
     * Set arrivalDate value
     * @param string $arrivalDate
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setArrivalDate(?string $arrivalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDate, true), gettype($arrivalDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($arrivalDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $arrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($arrivalDate, true)), __LINE__);
        }
        $this->arrivalDate = $arrivalDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * Get departureDescription value
     * @return string|null
     */
    public function getDepartureDescription(): ?string
    {
        return $this->departureDescription;
    }
    /**
     * Set departureDescription value
     * @param string $departureDescription
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setDepartureDescription(?string $departureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDescription) && !is_string($departureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDescription, true), gettype($departureDescription)), __LINE__);
        }
        $this->departureDescription = $departureDescription;
        
        return $this;
    }
    /**
     * Get destinationDescription value
     * @return string|null
     */
    public function getDestinationDescription(): ?string
    {
        return $this->destinationDescription;
    }
    /**
     * Set destinationDescription value
     * @param string $destinationDescription
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setDestinationDescription(?string $destinationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDescription) && !is_string($destinationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDescription, true), gettype($destinationDescription)), __LINE__);
        }
        $this->destinationDescription = $destinationDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * Get baggageAllowance value
     * @return string|null
     */
    public function getBaggageAllowance(): ?string
    {
        return $this->baggageAllowance;
    }
    /**
     * Set baggageAllowance value
     * @param string $baggageAllowance
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setBaggageAllowance(?string $baggageAllowance = null): self
    {
        // validation for constraint: string
        if (!is_null($baggageAllowance) && !is_string($baggageAllowance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baggageAllowance, true), gettype($baggageAllowance)), __LINE__);
        }
        $this->baggageAllowance = $baggageAllowance;
        
        return $this;
    }
    /**
     * Get segmentNo value
     * @return int|null
     */
    public function getSegmentNo(): ?int
    {
        return $this->segmentNo;
    }
    /**
     * Set segmentNo value
     * @param int $segmentNo
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setSegmentNo(?int $segmentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentNo) && !(is_int($segmentNo) || ctype_digit($segmentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentNo, true), gettype($segmentNo)), __LINE__);
        }
        $this->segmentNo = $segmentNo;
        
        return $this;
    }
    /**
     * Get cabinClass value
     * @return string|null
     */
    public function getCabinClass(): ?string
    {
        return $this->cabinClass;
    }
    /**
     * Set cabinClass value
     * @param string $cabinClass
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinClass, true), gettype($cabinClass)), __LINE__);
        }
        $this->cabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get stopoverCount value
     * @return int|null
     */
    public function getStopoverCount(): ?int
    {
        return $this->stopoverCount;
    }
    /**
     * Set stopoverCount value
     * @param int $stopoverCount
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setStopoverCount(?int $stopoverCount = null): self
    {
        // validation for constraint: int
        if (!is_null($stopoverCount) && !(is_int($stopoverCount) || ctype_digit($stopoverCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stopoverCount, true), gettype($stopoverCount)), __LINE__);
        }
        $this->stopoverCount = $stopoverCount;
        
        return $this;
    }
    /**
     * Get aircraftType value
     * @return string|null
     */
    public function getAircraftType(): ?string
    {
        return $this->aircraftType;
    }
    /**
     * Set aircraftType value
     * @param string $aircraftType
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setAircraftType(?string $aircraftType = null): self
    {
        // validation for constraint: string
        if (!is_null($aircraftType) && !is_string($aircraftType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aircraftType, true), gettype($aircraftType)), __LINE__);
        }
        $this->aircraftType = $aircraftType;
        
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
        foreach ($values as $flightServiceTypeMealItem) {
            // validation for constraint: itemType
            if (!$flightServiceTypeMealItem instanceof \Pggns\MidocoApi\Order\StructType\FlightMealType) {
                $invalidValues[] = is_object($flightServiceTypeMealItem) ? get_class($flightServiceTypeMealItem) : sprintf('%s(%s)', gettype($flightServiceTypeMealItem), var_export($flightServiceTypeMealItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
        foreach ($values as $flightServiceTypeSeatItem) {
            // validation for constraint: itemType
            if (!$flightServiceTypeSeatItem instanceof \Pggns\MidocoApi\Order\StructType\FlightSeatType) {
                $invalidValues[] = is_object($flightServiceTypeSeatItem) ? get_class($flightServiceTypeSeatItem) : sprintf('%s(%s)', gettype($flightServiceTypeSeatItem), var_export($flightServiceTypeSeatItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * Get operatingCarrier value
     * @return string|null
     */
    public function getOperatingCarrier(): ?string
    {
        return $this->operatingCarrier;
    }
    /**
     * Set operatingCarrier value
     * @param string $operatingCarrier
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setOperatingCarrier(?string $operatingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingCarrier) && !is_string($operatingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingCarrier, true), gettype($operatingCarrier)), __LINE__);
        }
        $this->operatingCarrier = $operatingCarrier;
        
        return $this;
    }
    /**
     * Get operatingCarrierFlightNo value
     * @return string|null
     */
    public function getOperatingCarrierFlightNo(): ?string
    {
        return $this->operatingCarrierFlightNo;
    }
    /**
     * Set operatingCarrierFlightNo value
     * @param string $operatingCarrierFlightNo
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setOperatingCarrierFlightNo(?string $operatingCarrierFlightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingCarrierFlightNo) && !is_string($operatingCarrierFlightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingCarrierFlightNo, true), gettype($operatingCarrierFlightNo)), __LINE__);
        }
        $this->operatingCarrierFlightNo = $operatingCarrierFlightNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
     * Get fareBase value
     * @return string|null
     */
    public function getFareBase(): ?string
    {
        return $this->fareBase;
    }
    /**
     * Set fareBase value
     * @param string $fareBase
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setFareBase(?string $fareBase = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBase) && !is_string($fareBase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBase, true), gettype($fareBase)), __LINE__);
        }
        $this->fareBase = $fareBase;
        
        return $this;
    }
    /**
     * Get co2Emission value
     * @return float|null
     */
    public function getCo2Emission(): ?float
    {
        return $this->co2Emission;
    }
    /**
     * Set co2Emission value
     * @param float $co2Emission
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setCo2Emission(?float $co2Emission = null): self
    {
        // validation for constraint: float
        if (!is_null($co2Emission) && !(is_float($co2Emission) || is_numeric($co2Emission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($co2Emission, true), gettype($co2Emission)), __LINE__);
        }
        $this->co2Emission = $co2Emission;
        
        return $this;
    }
    /**
     * Get specialServiceRequest value
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest[]
     */
    public function getSpecialServiceRequest(): ?array
    {
        return $this->specialServiceRequest;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSpecialServiceRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecialServiceRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecialServiceRequestForArrayConstraintFromSetSpecialServiceRequest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightServiceTypeSpecialServiceRequestItem) {
            // validation for constraint: itemType
            if (!$flightServiceTypeSpecialServiceRequestItem instanceof \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest) {
                $invalidValues[] = is_object($flightServiceTypeSpecialServiceRequestItem) ? get_class($flightServiceTypeSpecialServiceRequestItem) : sprintf('%s(%s)', gettype($flightServiceTypeSpecialServiceRequestItem), var_export($flightServiceTypeSpecialServiceRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The specialServiceRequest property can only contain items of type \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set specialServiceRequest value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest[] $specialServiceRequest
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function setSpecialServiceRequest(?array $specialServiceRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($specialServiceRequestArrayErrorMessage = self::validateSpecialServiceRequestForArrayConstraintFromSetSpecialServiceRequest($specialServiceRequest))) {
            throw new InvalidArgumentException($specialServiceRequestArrayErrorMessage, __LINE__);
        }
        $this->specialServiceRequest = $specialServiceRequest;
        
        return $this;
    }
    /**
     * Add item to specialServiceRequest value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest $item
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
     */
    public function addToSpecialServiceRequest(\Pggns\MidocoApi\Order\StructType\SpecialServiceRequest $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest) {
            throw new InvalidArgumentException(sprintf('The specialServiceRequest property can only contain items of type \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->specialServiceRequest[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightServiceType
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
