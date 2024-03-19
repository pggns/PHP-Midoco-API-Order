<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for transferServiceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransferServiceType extends AbstractStructBase
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
     * The personsPerService
     * Meta information extracted from the WSDL
     * - documentation: Number of persons this service is booked for (in case of a double room: 2)
     * @var string|null
     */
    protected ?string $personsPerService = null;
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
     * The startTime
     * Meta information extracted from the WSDL
     * - documentation: Date when the service starts
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The endTime
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $endTime = null;
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
     * The departureCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureDescription = null;
    /**
     * The departureLocation
     * Meta information extracted from the WSDL
     * - documentation: location for departure
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureLocation = null;
    /**
     * The departurePoint
     * Meta information extracted from the WSDL
     * - documentation: meeting point for departure
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departurePoint = null;
    /**
     * The destinationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destinationDescription = null;
    /**
     * The returnDepartureCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnDepartureCode = null;
    /**
     * The returnDepartureDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnDepartureDescription = null;
    /**
     * The returnDestinationCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnDestinationCode = null;
    /**
     * The returnDestinationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $returnDestinationDescription = null;
    /**
     * The baggageAllowance
     * Meta information extracted from the WSDL
     * - documentation: max. baggage allowance
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $baggageAllowance = null;
    /**
     * The duration
     * Meta information extracted from the WSDL
     * - documentation: time of transfer
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $duration = null;
    /**
     * The transferAddress1
     * Meta information extracted from the WSDL
     * - documentation: destination adress
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transferAddress1 = null;
    /**
     * The transferAddress2
     * Meta information extracted from the WSDL
     * - documentation: destination adress
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transferAddress2 = null;
    /**
     * The transferAddress3
     * Meta information extracted from the WSDL
     * - documentation: destination adress
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transferAddress3 = null;
    /**
     * The transferAddress4
     * Meta information extracted from the WSDL
     * - documentation: destination adress
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transferAddress4 = null;
    /**
     * The vehicleCode
     * Meta information extracted from the WSDL
     * - documentation: code for vehicle
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vehicleCode = null;
    /**
     * The vehicleDescription
     * Meta information extracted from the WSDL
     * - documentation: long description for vehicle
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $vehicleDescription = null;
    /**
     * The typeOfTransfer
     * Meta information extracted from the WSDL
     * - documentation: type description (e.g. private transfer, bus transfer..)
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typeOfTransfer = null;
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
     * The maxPassengers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxPassengers = null;
    /**
     * The simpleService
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $simpleService = null;
    /**
     * Constructor method for transferServiceType
     * @uses TransferServiceType::setPosition()
     * @uses TransferServiceType::setServiceCode()
     * @uses TransferServiceType::setServiceName()
     * @uses TransferServiceType::setPersonsPerService()
     * @uses TransferServiceType::setStartDate()
     * @uses TransferServiceType::setEndDate()
     * @uses TransferServiceType::setStartTime()
     * @uses TransferServiceType::setEndTime()
     * @uses TransferServiceType::setPersonAssignment()
     * @uses TransferServiceType::setServiceStatus()
     * @uses TransferServiceType::setServicePrice()
     * @uses TransferServiceType::setServiceCurrency()
     * @uses TransferServiceType::setServiceDescription()
     * @uses TransferServiceType::setDepartureCode()
     * @uses TransferServiceType::setDepartureDescription()
     * @uses TransferServiceType::setDepartureLocation()
     * @uses TransferServiceType::setDeparturePoint()
     * @uses TransferServiceType::setDestinationCode()
     * @uses TransferServiceType::setDestinationDescription()
     * @uses TransferServiceType::setReturnDepartureCode()
     * @uses TransferServiceType::setReturnDepartureDescription()
     * @uses TransferServiceType::setReturnDestinationCode()
     * @uses TransferServiceType::setReturnDestinationDescription()
     * @uses TransferServiceType::setBaggageAllowance()
     * @uses TransferServiceType::setDuration()
     * @uses TransferServiceType::setTransferAddress1()
     * @uses TransferServiceType::setTransferAddress2()
     * @uses TransferServiceType::setTransferAddress3()
     * @uses TransferServiceType::setTransferAddress4()
     * @uses TransferServiceType::setVehicleCode()
     * @uses TransferServiceType::setVehicleDescription()
     * @uses TransferServiceType::setTypeOfTransfer()
     * @uses TransferServiceType::setDirection()
     * @uses TransferServiceType::setEmergency_Number()
     * @uses TransferServiceType::setMaxPassengers()
     * @uses TransferServiceType::setSimpleService()
     * @param int $position
     * @param string $serviceCode
     * @param string $serviceName
     * @param string $personsPerService
     * @param string $startDate
     * @param string $endDate
     * @param string $startTime
     * @param string $endTime
     * @param string $personAssignment
     * @param string $serviceStatus
     * @param float $servicePrice
     * @param string $serviceCurrency
     * @param string $serviceDescription
     * @param string $departureCode
     * @param string $departureDescription
     * @param string $departureLocation
     * @param string $departurePoint
     * @param string $destinationCode
     * @param string $destinationDescription
     * @param string $returnDepartureCode
     * @param string $returnDepartureDescription
     * @param string $returnDestinationCode
     * @param string $returnDestinationDescription
     * @param string $baggageAllowance
     * @param string $duration
     * @param string $transferAddress1
     * @param string $transferAddress2
     * @param string $transferAddress3
     * @param string $transferAddress4
     * @param string $vehicleCode
     * @param string $vehicleDescription
     * @param string $typeOfTransfer
     * @param string $direction
     * @param string $emergency_Number
     * @param int $maxPassengers
     * @param bool $simpleService
     */
    public function __construct(int $position, ?string $serviceCode = null, ?string $serviceName = null, ?string $personsPerService = null, ?string $startDate = null, ?string $endDate = null, ?string $startTime = null, ?string $endTime = null, ?string $personAssignment = null, ?string $serviceStatus = null, ?float $servicePrice = null, ?string $serviceCurrency = 'EUR', ?string $serviceDescription = null, ?string $departureCode = null, ?string $departureDescription = null, ?string $departureLocation = null, ?string $departurePoint = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?string $returnDepartureCode = null, ?string $returnDepartureDescription = null, ?string $returnDestinationCode = null, ?string $returnDestinationDescription = null, ?string $baggageAllowance = null, ?string $duration = null, ?string $transferAddress1 = null, ?string $transferAddress2 = null, ?string $transferAddress3 = null, ?string $transferAddress4 = null, ?string $vehicleCode = null, ?string $vehicleDescription = null, ?string $typeOfTransfer = null, ?string $direction = null, ?string $emergency_Number = null, ?int $maxPassengers = null, ?bool $simpleService = false)
    {
        $this
            ->setPosition($position)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setPersonsPerService($personsPerService)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setPersonAssignment($personAssignment)
            ->setServiceStatus($serviceStatus)
            ->setServicePrice($servicePrice)
            ->setServiceCurrency($serviceCurrency)
            ->setServiceDescription($serviceDescription)
            ->setDepartureCode($departureCode)
            ->setDepartureDescription($departureDescription)
            ->setDepartureLocation($departureLocation)
            ->setDeparturePoint($departurePoint)
            ->setDestinationCode($destinationCode)
            ->setDestinationDescription($destinationDescription)
            ->setReturnDepartureCode($returnDepartureCode)
            ->setReturnDepartureDescription($returnDepartureDescription)
            ->setReturnDestinationCode($returnDestinationCode)
            ->setReturnDestinationDescription($returnDestinationDescription)
            ->setBaggageAllowance($baggageAllowance)
            ->setDuration($duration)
            ->setTransferAddress1($transferAddress1)
            ->setTransferAddress2($transferAddress2)
            ->setTransferAddress3($transferAddress3)
            ->setTransferAddress4($transferAddress4)
            ->setVehicleCode($vehicleCode)
            ->setVehicleDescription($vehicleDescription)
            ->setTypeOfTransfer($typeOfTransfer)
            ->setDirection($direction)
            ->setEmergency_Number($emergency_Number)
            ->setMaxPassengers($maxPassengers)
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2}:[0-9]{2})
        if (!is_null($startTime) && !preg_match('/[0-9]{2}:[0-9]{2}:[0-9]{2}/', (string) $startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}:[0-9]{2}/', var_export($startTime, true)), __LINE__);
        }
        $this->startTime = $startTime;
        
        return $this;
    }
    /**
     * Get endTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }
    /**
     * Set endTime value
     * @param string $endTime
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2}:[0-9]{2})
        if (!is_null($endTime) && !preg_match('/[0-9]{2}:[0-9]{2}:[0-9]{2}/', (string) $endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}:[0-9]{2}/', var_export($endTime, true)), __LINE__);
        }
        $this->endTime = $endTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * Get departureLocation value
     * @return string|null
     */
    public function getDepartureLocation(): ?string
    {
        return $this->departureLocation;
    }
    /**
     * Set departureLocation value
     * @param string $departureLocation
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setDepartureLocation(?string $departureLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($departureLocation) && !is_string($departureLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureLocation, true), gettype($departureLocation)), __LINE__);
        }
        $this->departureLocation = $departureLocation;
        
        return $this;
    }
    /**
     * Get departurePoint value
     * @return string|null
     */
    public function getDeparturePoint(): ?string
    {
        return $this->departurePoint;
    }
    /**
     * Set departurePoint value
     * @param string $departurePoint
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setDeparturePoint(?string $departurePoint = null): self
    {
        // validation for constraint: string
        if (!is_null($departurePoint) && !is_string($departurePoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departurePoint, true), gettype($departurePoint)), __LINE__);
        }
        $this->departurePoint = $departurePoint;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * Get returnDepartureCode value
     * @return string|null
     */
    public function getReturnDepartureCode(): ?string
    {
        return $this->returnDepartureCode;
    }
    /**
     * Set returnDepartureCode value
     * @param string $returnDepartureCode
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setReturnDepartureCode(?string $returnDepartureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureCode) && !is_string($returnDepartureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureCode, true), gettype($returnDepartureCode)), __LINE__);
        }
        $this->returnDepartureCode = $returnDepartureCode;
        
        return $this;
    }
    /**
     * Get returnDepartureDescription value
     * @return string|null
     */
    public function getReturnDepartureDescription(): ?string
    {
        return $this->returnDepartureDescription;
    }
    /**
     * Set returnDepartureDescription value
     * @param string $returnDepartureDescription
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setReturnDepartureDescription(?string $returnDepartureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureDescription) && !is_string($returnDepartureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureDescription, true), gettype($returnDepartureDescription)), __LINE__);
        }
        $this->returnDepartureDescription = $returnDepartureDescription;
        
        return $this;
    }
    /**
     * Get returnDestinationCode value
     * @return string|null
     */
    public function getReturnDestinationCode(): ?string
    {
        return $this->returnDestinationCode;
    }
    /**
     * Set returnDestinationCode value
     * @param string $returnDestinationCode
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setReturnDestinationCode(?string $returnDestinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationCode) && !is_string($returnDestinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationCode, true), gettype($returnDestinationCode)), __LINE__);
        }
        $this->returnDestinationCode = $returnDestinationCode;
        
        return $this;
    }
    /**
     * Get returnDestinationDescription value
     * @return string|null
     */
    public function getReturnDestinationDescription(): ?string
    {
        return $this->returnDestinationDescription;
    }
    /**
     * Set returnDestinationDescription value
     * @param string $returnDestinationDescription
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setReturnDestinationDescription(?string $returnDestinationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationDescription) && !is_string($returnDestinationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationDescription, true), gettype($returnDestinationDescription)), __LINE__);
        }
        $this->returnDestinationDescription = $returnDestinationDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * Get transferAddress1 value
     * @return string|null
     */
    public function getTransferAddress1(): ?string
    {
        return $this->transferAddress1;
    }
    /**
     * Set transferAddress1 value
     * @param string $transferAddress1
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setTransferAddress1(?string $transferAddress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($transferAddress1) && !is_string($transferAddress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferAddress1, true), gettype($transferAddress1)), __LINE__);
        }
        $this->transferAddress1 = $transferAddress1;
        
        return $this;
    }
    /**
     * Get transferAddress2 value
     * @return string|null
     */
    public function getTransferAddress2(): ?string
    {
        return $this->transferAddress2;
    }
    /**
     * Set transferAddress2 value
     * @param string $transferAddress2
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setTransferAddress2(?string $transferAddress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($transferAddress2) && !is_string($transferAddress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferAddress2, true), gettype($transferAddress2)), __LINE__);
        }
        $this->transferAddress2 = $transferAddress2;
        
        return $this;
    }
    /**
     * Get transferAddress3 value
     * @return string|null
     */
    public function getTransferAddress3(): ?string
    {
        return $this->transferAddress3;
    }
    /**
     * Set transferAddress3 value
     * @param string $transferAddress3
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setTransferAddress3(?string $transferAddress3 = null): self
    {
        // validation for constraint: string
        if (!is_null($transferAddress3) && !is_string($transferAddress3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferAddress3, true), gettype($transferAddress3)), __LINE__);
        }
        $this->transferAddress3 = $transferAddress3;
        
        return $this;
    }
    /**
     * Get transferAddress4 value
     * @return string|null
     */
    public function getTransferAddress4(): ?string
    {
        return $this->transferAddress4;
    }
    /**
     * Set transferAddress4 value
     * @param string $transferAddress4
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setTransferAddress4(?string $transferAddress4 = null): self
    {
        // validation for constraint: string
        if (!is_null($transferAddress4) && !is_string($transferAddress4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferAddress4, true), gettype($transferAddress4)), __LINE__);
        }
        $this->transferAddress4 = $transferAddress4;
        
        return $this;
    }
    /**
     * Get vehicleCode value
     * @return string|null
     */
    public function getVehicleCode(): ?string
    {
        return $this->vehicleCode;
    }
    /**
     * Set vehicleCode value
     * @param string $vehicleCode
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setVehicleCode(?string $vehicleCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleCode) && !is_string($vehicleCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleCode, true), gettype($vehicleCode)), __LINE__);
        }
        $this->vehicleCode = $vehicleCode;
        
        return $this;
    }
    /**
     * Get vehicleDescription value
     * @return string|null
     */
    public function getVehicleDescription(): ?string
    {
        return $this->vehicleDescription;
    }
    /**
     * Set vehicleDescription value
     * @param string $vehicleDescription
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setVehicleDescription(?string $vehicleDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleDescription) && !is_string($vehicleDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleDescription, true), gettype($vehicleDescription)), __LINE__);
        }
        $this->vehicleDescription = $vehicleDescription;
        
        return $this;
    }
    /**
     * Get typeOfTransfer value
     * @return string|null
     */
    public function getTypeOfTransfer(): ?string
    {
        return $this->typeOfTransfer;
    }
    /**
     * Set typeOfTransfer value
     * @param string $typeOfTransfer
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setTypeOfTransfer(?string $typeOfTransfer = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOfTransfer) && !is_string($typeOfTransfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOfTransfer, true), gettype($typeOfTransfer)), __LINE__);
        }
        $this->typeOfTransfer = $typeOfTransfer;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
     * Get maxPassengers value
     * @return int|null
     */
    public function getMaxPassengers(): ?int
    {
        return $this->maxPassengers;
    }
    /**
     * Set maxPassengers value
     * @param int $maxPassengers
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
     */
    public function setMaxPassengers(?int $maxPassengers = null): self
    {
        // validation for constraint: int
        if (!is_null($maxPassengers) && !(is_int($maxPassengers) || ctype_digit($maxPassengers))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxPassengers, true), gettype($maxPassengers)), __LINE__);
        }
        $this->maxPassengers = $maxPassengers;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferServiceType
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
