<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SegmentType extends AbstractStructBase
{
    /**
     * The aircraftType
     * @var string|null
     */
    protected ?string $aircraftType = null;
    /**
     * The arrivalDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $arrivalDate = null;
    /**
     * The arrivalTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: ([01][0-9]|2[0-3]):[0-5][0-9]
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The bookingClass
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The baggageAllowance
     * @var string|null
     */
    protected ?string $baggageAllowance = null;
    /**
     * The cabinClass
     * @var string|null
     */
    protected ?string $cabinClass = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The checkinTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: ([01][0-9]|2[0-3]):[0-5][0-9]
     * @var string|null
     */
    protected ?string $checkinTime = null;
    /**
     * The classDescription
     * @var string|null
     */
    protected ?string $classDescription = null;
    /**
     * The departureCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [A-Za-z0-9]{3,5}
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The departureDescription
     * @var string|null
     */
    protected ?string $departureDescription = null;
    /**
     * The departureTerminal
     * @var string|null
     */
    protected ?string $departureTerminal = null;
    /**
     * The departureTime
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: ([01][0-9]|2[0-3]):[0-5][0-9]
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The destinationCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [A-Za-z0-9]{3,5}
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationDescription
     * @var string|null
     */
    protected ?string $destinationDescription = null;
    /**
     * The duration
     * @var string|null
     */
    protected ?string $duration = null;
    /**
     * The fareBase
     * @var string|null
     */
    protected ?string $fareBase = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The openSegment
     * @var bool|null
     */
    protected ?bool $openSegment = null;
    /**
     * The operatingCarrier
     * @var string|null
     */
    protected ?string $operatingCarrier = null;
    /**
     * The operatingCarrierFlightNo
     * @var string|null
     */
    protected ?string $operatingCarrierFlightNo = null;
    /**
     * The preventPrinting
     * @var bool|null
     */
    protected ?bool $preventPrinting = null;
    /**
     * The segmentNumber
     * @var int|null
     */
    protected ?int $segmentNumber = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The stopoverCount
     * @var int|null
     */
    protected ?int $stopoverCount = null;
    /**
     * The miles
     * @var int|null
     */
    protected ?int $miles = null;
    /**
     * Constructor method for SegmentType
     * @uses SegmentType::setAircraftType()
     * @uses SegmentType::setArrivalDate()
     * @uses SegmentType::setArrivalTime()
     * @uses SegmentType::setBookingClass()
     * @uses SegmentType::setBaggageAllowance()
     * @uses SegmentType::setCabinClass()
     * @uses SegmentType::setCarrier()
     * @uses SegmentType::setCheckinTime()
     * @uses SegmentType::setClassDescription()
     * @uses SegmentType::setDepartureCode()
     * @uses SegmentType::setDepartureDate()
     * @uses SegmentType::setDepartureDescription()
     * @uses SegmentType::setDepartureTerminal()
     * @uses SegmentType::setDepartureTime()
     * @uses SegmentType::setDestinationCode()
     * @uses SegmentType::setDestinationDescription()
     * @uses SegmentType::setDuration()
     * @uses SegmentType::setFareBase()
     * @uses SegmentType::setFlightNo()
     * @uses SegmentType::setOpenSegment()
     * @uses SegmentType::setOperatingCarrier()
     * @uses SegmentType::setOperatingCarrierFlightNo()
     * @uses SegmentType::setPreventPrinting()
     * @uses SegmentType::setSegmentNumber()
     * @uses SegmentType::setServiceStatus()
     * @uses SegmentType::setStopoverCount()
     * @uses SegmentType::setMiles()
     * @param string $aircraftType
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $bookingClass
     * @param string $baggageAllowance
     * @param string $cabinClass
     * @param string $carrier
     * @param string $checkinTime
     * @param string $classDescription
     * @param string $departureCode
     * @param string $departureDate
     * @param string $departureDescription
     * @param string $departureTerminal
     * @param string $departureTime
     * @param string $destinationCode
     * @param string $destinationDescription
     * @param string $duration
     * @param string $fareBase
     * @param string $flightNo
     * @param bool $openSegment
     * @param string $operatingCarrier
     * @param string $operatingCarrierFlightNo
     * @param bool $preventPrinting
     * @param int $segmentNumber
     * @param string $serviceStatus
     * @param int $stopoverCount
     * @param int $miles
     */
    public function __construct(?string $aircraftType = null, ?string $arrivalDate = null, ?string $arrivalTime = null, ?string $bookingClass = null, ?string $baggageAllowance = null, ?string $cabinClass = null, ?string $carrier = null, ?string $checkinTime = null, ?string $classDescription = null, ?string $departureCode = null, ?string $departureDate = null, ?string $departureDescription = null, ?string $departureTerminal = null, ?string $departureTime = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?string $duration = null, ?string $fareBase = null, ?string $flightNo = null, ?bool $openSegment = null, ?string $operatingCarrier = null, ?string $operatingCarrierFlightNo = null, ?bool $preventPrinting = null, ?int $segmentNumber = null, ?string $serviceStatus = null, ?int $stopoverCount = null, ?int $miles = null)
    {
        $this
            ->setAircraftType($aircraftType)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setBookingClass($bookingClass)
            ->setBaggageAllowance($baggageAllowance)
            ->setCabinClass($cabinClass)
            ->setCarrier($carrier)
            ->setCheckinTime($checkinTime)
            ->setClassDescription($classDescription)
            ->setDepartureCode($departureCode)
            ->setDepartureDate($departureDate)
            ->setDepartureDescription($departureDescription)
            ->setDepartureTerminal($departureTerminal)
            ->setDepartureTime($departureTime)
            ->setDestinationCode($destinationCode)
            ->setDestinationDescription($destinationDescription)
            ->setDuration($duration)
            ->setFareBase($fareBase)
            ->setFlightNo($flightNo)
            ->setOpenSegment($openSegment)
            ->setOperatingCarrier($operatingCarrier)
            ->setOperatingCarrierFlightNo($operatingCarrierFlightNo)
            ->setPreventPrinting($preventPrinting)
            ->setSegmentNumber($segmentNumber)
            ->setServiceStatus($serviceStatus)
            ->setStopoverCount($stopoverCount)
            ->setMiles($miles);
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        // validation for constraint: pattern(([01][0-9]|2[0-3]):[0-5][0-9])
        if (!is_null($arrivalTime) && !preg_match('/([01][0-9]|2[0-3]):[0-5][0-9]/', (string) $arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([01][0-9]|2[0-3]):[0-5][0-9]/', var_export($arrivalTime, true)), __LINE__);
        }
        $this->arrivalTime = $arrivalTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
     */
    public function setCheckinTime(?string $checkinTime = null): self
    {
        // validation for constraint: string
        if (!is_null($checkinTime) && !is_string($checkinTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkinTime, true), gettype($checkinTime)), __LINE__);
        }
        // validation for constraint: pattern(([01][0-9]|2[0-3]):[0-5][0-9])
        if (!is_null($checkinTime) && !preg_match('/([01][0-9]|2[0-3]):[0-5][0-9]/', (string) $checkinTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([01][0-9]|2[0-3]):[0-5][0-9]/', var_export($checkinTime, true)), __LINE__);
        }
        $this->checkinTime = $checkinTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        // validation for constraint: pattern([A-Za-z0-9]{3,5})
        if (!is_null($departureCode) && !preg_match('/[A-Za-z0-9]{3,5}/', (string) $departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[A-Za-z0-9]{3,5}/', var_export($departureCode, true)), __LINE__);
        }
        $this->departureCode = $departureCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        // validation for constraint: pattern(([01][0-9]|2[0-3]):[0-5][0-9])
        if (!is_null($departureTime) && !preg_match('/([01][0-9]|2[0-3]):[0-5][0-9]/', (string) $departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([01][0-9]|2[0-3]):[0-5][0-9]/', var_export($departureTime, true)), __LINE__);
        }
        $this->departureTime = $departureTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        // validation for constraint: pattern([A-Za-z0-9]{3,5})
        if (!is_null($destinationCode) && !preg_match('/[A-Za-z0-9]{3,5}/', (string) $destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[A-Za-z0-9]{3,5}/', var_export($destinationCode, true)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
     */
    public function setOpenSegment(?bool $openSegment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($openSegment) && !is_bool($openSegment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($openSegment, true), gettype($openSegment)), __LINE__);
        }
        $this->openSegment = $openSegment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * Get preventPrinting value
     * @return bool|null
     */
    public function getPreventPrinting(): ?bool
    {
        return $this->preventPrinting;
    }
    /**
     * Set preventPrinting value
     * @param bool $preventPrinting
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
     */
    public function setPreventPrinting(?bool $preventPrinting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventPrinting) && !is_bool($preventPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventPrinting, true), gettype($preventPrinting)), __LINE__);
        }
        $this->preventPrinting = $preventPrinting;
        
        return $this;
    }
    /**
     * Get segmentNumber value
     * @return int|null
     */
    public function getSegmentNumber(): ?int
    {
        return $this->segmentNumber;
    }
    /**
     * Set segmentNumber value
     * @param int $segmentNumber
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
     */
    public function setSegmentNumber(?int $segmentNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentNumber) && !(is_int($segmentNumber) || ctype_digit($segmentNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentNumber, true), gettype($segmentNumber)), __LINE__);
        }
        $this->segmentNumber = $segmentNumber;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
     * @return \Pggns\MidocoApi\Order\StructType\SegmentType
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
}
