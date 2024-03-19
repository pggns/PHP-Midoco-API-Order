<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocFlightDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DocFlightDetailDTO extends AbstractStructBase
{
    /**
     * The aircraftType
     * @var string|null
     */
    protected ?string $aircraftType = null;
    /**
     * The arrivalDate
     * @var string|null
     */
    protected ?string $arrivalDate = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The baggageAllowance
     * @var string|null
     */
    protected ?string $baggageAllowance = null;
    /**
     * The bookingClass
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The checkinTime
     * @var string|null
     */
    protected ?string $checkinTime = null;
    /**
     * The classDescription
     * @var string|null
     */
    protected ?string $classDescription = null;
    /**
     * The co2Emission
     * @var float|null
     */
    protected ?float $co2Emission = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDate
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
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The destinationCode
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
     * The isDeleted
     * @var bool|null
     */
    protected ?bool $isDeleted = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The miles
     * @var int|null
     */
    protected ?int $miles = null;
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
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The preventPrinting
     * @var bool|null
     */
    protected ?bool $preventPrinting = null;
    /**
     * The referencePosition
     * @var int|null
     */
    protected ?int $referencePosition = null;
    /**
     * The segmentNo
     * @var int|null
     */
    protected ?int $segmentNo = null;
    /**
     * The serviceCode
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * Constructor method for DocFlightDetailDTO
     * @uses DocFlightDetailDTO::setAircraftType()
     * @uses DocFlightDetailDTO::setArrivalDate()
     * @uses DocFlightDetailDTO::setArrivalTime()
     * @uses DocFlightDetailDTO::setBaggageAllowance()
     * @uses DocFlightDetailDTO::setBookingClass()
     * @uses DocFlightDetailDTO::setCarrier()
     * @uses DocFlightDetailDTO::setCheckinTime()
     * @uses DocFlightDetailDTO::setClassDescription()
     * @uses DocFlightDetailDTO::setCo2Emission()
     * @uses DocFlightDetailDTO::setDepartureCode()
     * @uses DocFlightDetailDTO::setDepartureDate()
     * @uses DocFlightDetailDTO::setDepartureDescription()
     * @uses DocFlightDetailDTO::setDepartureTerminal()
     * @uses DocFlightDetailDTO::setDepartureTime()
     * @uses DocFlightDetailDTO::setDestinationCode()
     * @uses DocFlightDetailDTO::setDestinationDescription()
     * @uses DocFlightDetailDTO::setDuration()
     * @uses DocFlightDetailDTO::setFareBase()
     * @uses DocFlightDetailDTO::setFlightNo()
     * @uses DocFlightDetailDTO::setIsDeleted()
     * @uses DocFlightDetailDTO::setItemId()
     * @uses DocFlightDetailDTO::setMiles()
     * @uses DocFlightDetailDTO::setOpenSegment()
     * @uses DocFlightDetailDTO::setOperatingCarrier()
     * @uses DocFlightDetailDTO::setOperatingCarrierFlightNo()
     * @uses DocFlightDetailDTO::setPersonAssignment()
     * @uses DocFlightDetailDTO::setPosition()
     * @uses DocFlightDetailDTO::setPreventPrinting()
     * @uses DocFlightDetailDTO::setReferencePosition()
     * @uses DocFlightDetailDTO::setSegmentNo()
     * @uses DocFlightDetailDTO::setServiceCode()
     * @uses DocFlightDetailDTO::setServiceStatus()
     * @param string $aircraftType
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $baggageAllowance
     * @param string $bookingClass
     * @param string $carrier
     * @param string $checkinTime
     * @param string $classDescription
     * @param float $co2Emission
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
     * @param bool $isDeleted
     * @param int $itemId
     * @param int $miles
     * @param bool $openSegment
     * @param string $operatingCarrier
     * @param string $operatingCarrierFlightNo
     * @param string $personAssignment
     * @param int $position
     * @param bool $preventPrinting
     * @param int $referencePosition
     * @param int $segmentNo
     * @param string $serviceCode
     * @param string $serviceStatus
     */
    public function __construct(?string $aircraftType = null, ?string $arrivalDate = null, ?string $arrivalTime = null, ?string $baggageAllowance = null, ?string $bookingClass = null, ?string $carrier = null, ?string $checkinTime = null, ?string $classDescription = null, ?float $co2Emission = null, ?string $departureCode = null, ?string $departureDate = null, ?string $departureDescription = null, ?string $departureTerminal = null, ?string $departureTime = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?string $duration = null, ?string $fareBase = null, ?string $flightNo = null, ?bool $isDeleted = null, ?int $itemId = null, ?int $miles = null, ?bool $openSegment = null, ?string $operatingCarrier = null, ?string $operatingCarrierFlightNo = null, ?string $personAssignment = null, ?int $position = null, ?bool $preventPrinting = null, ?int $referencePosition = null, ?int $segmentNo = null, ?string $serviceCode = null, ?string $serviceStatus = null)
    {
        $this
            ->setAircraftType($aircraftType)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setBaggageAllowance($baggageAllowance)
            ->setBookingClass($bookingClass)
            ->setCarrier($carrier)
            ->setCheckinTime($checkinTime)
            ->setClassDescription($classDescription)
            ->setCo2Emission($co2Emission)
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
            ->setIsDeleted($isDeleted)
            ->setItemId($itemId)
            ->setMiles($miles)
            ->setOpenSegment($openSegment)
            ->setOperatingCarrier($operatingCarrier)
            ->setOperatingCarrierFlightNo($operatingCarrierFlightNo)
            ->setPersonAssignment($personAssignment)
            ->setPosition($position)
            ->setPreventPrinting($preventPrinting)
            ->setReferencePosition($referencePosition)
            ->setSegmentNo($segmentNo)
            ->setServiceCode($serviceCode)
            ->setServiceStatus($serviceStatus);
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
     */
    public function setArrivalDate(?string $arrivalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDate, true), gettype($arrivalDate)), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->arrivalTime = $arrivalTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
     */
    public function setCheckinTime(?string $checkinTime = null): self
    {
        // validation for constraint: string
        if (!is_null($checkinTime) && !is_string($checkinTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkinTime, true), gettype($checkinTime)), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * Get isDeleted value
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }
    /**
     * Set isDeleted value
     * @param bool $isDeleted
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
     */
    public function setIsDeleted(?bool $isDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeleted) && !is_bool($isDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeleted, true), gettype($isDeleted)), __LINE__);
        }
        $this->isDeleted = $isDeleted;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * Get referencePosition value
     * @return int|null
     */
    public function getReferencePosition(): ?int
    {
        return $this->referencePosition;
    }
    /**
     * Set referencePosition value
     * @param int $referencePosition
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
     */
    public function setReferencePosition(?int $referencePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($referencePosition) && !(is_int($referencePosition) || ctype_digit($referencePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referencePosition, true), gettype($referencePosition)), __LINE__);
        }
        $this->referencePosition = $referencePosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO
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
}
