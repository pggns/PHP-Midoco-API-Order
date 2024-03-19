<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for railServiceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RailServiceType extends AbstractStructBase
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
     * The departureDate
     * Meta information extracted from the WSDL
     * - documentation: optional only when open segment is set, else not optional !
     * - base: xs:string
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
     * The departureCode
     * Meta information extracted from the WSDL
     * - documentation: In case of a transport, the code from the departing location (like the airport short code)
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDesc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departureDesc = null;
    /**
     * The departurePlatform
     * @var string|null
     */
    protected ?string $departurePlatform = null;
    /**
     * The arrivalDate
     * Meta information extracted from the WSDL
     * - documentation: if left out, it is coinsidered to be the same as departure date, set only when flying over a day barrier
     * - base: xs:string
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
     * The arrivalCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrivalCode = null;
    /**
     * The arrivalDesc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrivalDesc = null;
    /**
     * The arrivalPlatform
     * @var string|null
     */
    protected ?string $arrivalPlatform = null;
    /**
     * The bookingClass
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The tariffCode
     * @var string|null
     */
    protected ?string $tariffCode = null;
    /**
     * The tariffDesc
     * @var string|null
     */
    protected ?string $tariffDesc = null;
    /**
     * The trainNo
     * @var string|null
     */
    protected ?string $trainNo = null;
    /**
     * The trainType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $trainType = null;
    /**
     * The waggon
     * @var string|null
     */
    protected ?string $waggon = null;
    /**
     * The partition
     * @var string|null
     */
    protected ?string $partition = null;
    /**
     * The seat
     * @var string|null
     */
    protected ?string $seat = null;
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
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
     * The servicePrice
     * @var float|null
     */
    protected ?float $servicePrice = null;
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
     * The companyCustomer
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $companyCustomer = null;
    /**
     * The paxPerService
     * @var int|null
     */
    protected ?int $paxPerService = null;
    /**
     * The reductionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reductionCode = null;
    /**
     * The reductionDesc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reductionDesc = null;
    /**
     * The validFrom
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The lastCancelDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $lastCancelDate = null;
    /**
     * The noOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfChildren = null;
    /**
     * The ticketCategory
     * Meta information extracted from the WSDL
     * - default: STANDARD_ONLINE
     * @var string|null
     */
    protected ?string $ticketCategory = null;
    /**
     * The ccInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ccInformation
     * @var \Pggns\MidocoApi\Order\StructType\CcInformation|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation = null;
    /**
     * Constructor method for railServiceType
     * @uses RailServiceType::setPosition()
     * @uses RailServiceType::setServiceCode()
     * @uses RailServiceType::setServiceName()
     * @uses RailServiceType::setServiceDescription()
     * @uses RailServiceType::setDepartureDate()
     * @uses RailServiceType::setDepartureTime()
     * @uses RailServiceType::setDepartureCode()
     * @uses RailServiceType::setDepartureDesc()
     * @uses RailServiceType::setDeparturePlatform()
     * @uses RailServiceType::setArrivalDate()
     * @uses RailServiceType::setArrivalTime()
     * @uses RailServiceType::setArrivalCode()
     * @uses RailServiceType::setArrivalDesc()
     * @uses RailServiceType::setArrivalPlatform()
     * @uses RailServiceType::setBookingClass()
     * @uses RailServiceType::setTariffCode()
     * @uses RailServiceType::setTariffDesc()
     * @uses RailServiceType::setTrainNo()
     * @uses RailServiceType::setTrainType()
     * @uses RailServiceType::setWaggon()
     * @uses RailServiceType::setPartition()
     * @uses RailServiceType::setSeat()
     * @uses RailServiceType::setDocumentNo()
     * @uses RailServiceType::setServiceStatus()
     * @uses RailServiceType::setPersonAssignment()
     * @uses RailServiceType::setServicePrice()
     * @uses RailServiceType::setCurrency()
     * @uses RailServiceType::setVatIncluded()
     * @uses RailServiceType::setCompanyCustomer()
     * @uses RailServiceType::setPaxPerService()
     * @uses RailServiceType::setReductionCode()
     * @uses RailServiceType::setReductionDesc()
     * @uses RailServiceType::setValidFrom()
     * @uses RailServiceType::setLastCancelDate()
     * @uses RailServiceType::setNoOfChildren()
     * @uses RailServiceType::setTicketCategory()
     * @uses RailServiceType::setCcInformation()
     * @param int $position
     * @param string $serviceCode
     * @param string $serviceName
     * @param string $serviceDescription
     * @param string $departureDate
     * @param string $departureTime
     * @param string $departureCode
     * @param string $departureDesc
     * @param string $departurePlatform
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $arrivalCode
     * @param string $arrivalDesc
     * @param string $arrivalPlatform
     * @param string $bookingClass
     * @param string $tariffCode
     * @param string $tariffDesc
     * @param string $trainNo
     * @param string $trainType
     * @param string $waggon
     * @param string $partition
     * @param string $seat
     * @param string $documentNo
     * @param string $serviceStatus
     * @param string $personAssignment
     * @param float $servicePrice
     * @param string $currency
     * @param bool $vatIncluded
     * @param bool $companyCustomer
     * @param int $paxPerService
     * @param string $reductionCode
     * @param string $reductionDesc
     * @param string $validFrom
     * @param string $lastCancelDate
     * @param int $noOfChildren
     * @param string $ticketCategory
     * @param \Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation
     */
    public function __construct(int $position, ?string $serviceCode = null, ?string $serviceName = null, ?string $serviceDescription = null, ?string $departureDate = null, ?string $departureTime = null, ?string $departureCode = null, ?string $departureDesc = null, ?string $departurePlatform = null, ?string $arrivalDate = null, ?string $arrivalTime = null, ?string $arrivalCode = null, ?string $arrivalDesc = null, ?string $arrivalPlatform = null, ?string $bookingClass = null, ?string $tariffCode = null, ?string $tariffDesc = null, ?string $trainNo = null, ?string $trainType = null, ?string $waggon = null, ?string $partition = null, ?string $seat = null, ?string $documentNo = null, ?string $serviceStatus = null, ?string $personAssignment = null, ?float $servicePrice = null, ?string $currency = 'EUR', ?bool $vatIncluded = false, ?bool $companyCustomer = false, ?int $paxPerService = null, ?string $reductionCode = null, ?string $reductionDesc = null, ?string $validFrom = null, ?string $lastCancelDate = null, ?int $noOfChildren = null, ?string $ticketCategory = null, ?\Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation = null)
    {
        $this
            ->setPosition($position)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setServiceDescription($serviceDescription)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setDepartureCode($departureCode)
            ->setDepartureDesc($departureDesc)
            ->setDeparturePlatform($departurePlatform)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setArrivalCode($arrivalCode)
            ->setArrivalDesc($arrivalDesc)
            ->setArrivalPlatform($arrivalPlatform)
            ->setBookingClass($bookingClass)
            ->setTariffCode($tariffCode)
            ->setTariffDesc($tariffDesc)
            ->setTrainNo($trainNo)
            ->setTrainType($trainType)
            ->setWaggon($waggon)
            ->setPartition($partition)
            ->setSeat($seat)
            ->setDocumentNo($documentNo)
            ->setServiceStatus($serviceStatus)
            ->setPersonAssignment($personAssignment)
            ->setServicePrice($servicePrice)
            ->setCurrency($currency)
            ->setVatIncluded($vatIncluded)
            ->setCompanyCustomer($companyCustomer)
            ->setPaxPerService($paxPerService)
            ->setReductionCode($reductionCode)
            ->setReductionDesc($reductionDesc)
            ->setValidFrom($validFrom)
            ->setLastCancelDate($lastCancelDate)
            ->setNoOfChildren($noOfChildren)
            ->setTicketCategory($ticketCategory)
            ->setCcInformation($ccInformation);
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($departureCode) && mb_strlen((string) $departureCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $departureCode)), __LINE__);
        }
        $this->departureCode = $departureCode;
        
        return $this;
    }
    /**
     * Get departureDesc value
     * @return string|null
     */
    public function getDepartureDesc(): ?string
    {
        return $this->departureDesc;
    }
    /**
     * Set departureDesc value
     * @param string $departureDesc
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setDepartureDesc(?string $departureDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDesc) && !is_string($departureDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDesc, true), gettype($departureDesc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($departureDesc) && mb_strlen((string) $departureDesc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $departureDesc)), __LINE__);
        }
        $this->departureDesc = $departureDesc;
        
        return $this;
    }
    /**
     * Get departurePlatform value
     * @return string|null
     */
    public function getDeparturePlatform(): ?string
    {
        return $this->departurePlatform;
    }
    /**
     * Set departurePlatform value
     * @param string $departurePlatform
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setDeparturePlatform(?string $departurePlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($departurePlatform) && !is_string($departurePlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departurePlatform, true), gettype($departurePlatform)), __LINE__);
        }
        $this->departurePlatform = $departurePlatform;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * Get arrivalCode value
     * @return string|null
     */
    public function getArrivalCode(): ?string
    {
        return $this->arrivalCode;
    }
    /**
     * Set arrivalCode value
     * @param string $arrivalCode
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setArrivalCode(?string $arrivalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalCode) && !is_string($arrivalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalCode, true), gettype($arrivalCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($arrivalCode) && mb_strlen((string) $arrivalCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $arrivalCode)), __LINE__);
        }
        $this->arrivalCode = $arrivalCode;
        
        return $this;
    }
    /**
     * Get arrivalDesc value
     * @return string|null
     */
    public function getArrivalDesc(): ?string
    {
        return $this->arrivalDesc;
    }
    /**
     * Set arrivalDesc value
     * @param string $arrivalDesc
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setArrivalDesc(?string $arrivalDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalDesc) && !is_string($arrivalDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDesc, true), gettype($arrivalDesc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($arrivalDesc) && mb_strlen((string) $arrivalDesc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $arrivalDesc)), __LINE__);
        }
        $this->arrivalDesc = $arrivalDesc;
        
        return $this;
    }
    /**
     * Get arrivalPlatform value
     * @return string|null
     */
    public function getArrivalPlatform(): ?string
    {
        return $this->arrivalPlatform;
    }
    /**
     * Set arrivalPlatform value
     * @param string $arrivalPlatform
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setArrivalPlatform(?string $arrivalPlatform = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalPlatform) && !is_string($arrivalPlatform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalPlatform, true), gettype($arrivalPlatform)), __LINE__);
        }
        $this->arrivalPlatform = $arrivalPlatform;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * Get tariffCode value
     * @return string|null
     */
    public function getTariffCode(): ?string
    {
        return $this->tariffCode;
    }
    /**
     * Set tariffCode value
     * @param string $tariffCode
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setTariffCode(?string $tariffCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffCode) && !is_string($tariffCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffCode, true), gettype($tariffCode)), __LINE__);
        }
        $this->tariffCode = $tariffCode;
        
        return $this;
    }
    /**
     * Get tariffDesc value
     * @return string|null
     */
    public function getTariffDesc(): ?string
    {
        return $this->tariffDesc;
    }
    /**
     * Set tariffDesc value
     * @param string $tariffDesc
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setTariffDesc(?string $tariffDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffDesc) && !is_string($tariffDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffDesc, true), gettype($tariffDesc)), __LINE__);
        }
        $this->tariffDesc = $tariffDesc;
        
        return $this;
    }
    /**
     * Get trainNo value
     * @return string|null
     */
    public function getTrainNo(): ?string
    {
        return $this->trainNo;
    }
    /**
     * Set trainNo value
     * @param string $trainNo
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setTrainNo(?string $trainNo = null): self
    {
        // validation for constraint: string
        if (!is_null($trainNo) && !is_string($trainNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNo, true), gettype($trainNo)), __LINE__);
        }
        $this->trainNo = $trainNo;
        
        return $this;
    }
    /**
     * Get trainType value
     * @return string|null
     */
    public function getTrainType(): ?string
    {
        return $this->trainType;
    }
    /**
     * Set trainType value
     * @param string $trainType
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setTrainType(?string $trainType = null): self
    {
        // validation for constraint: string
        if (!is_null($trainType) && !is_string($trainType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainType, true), gettype($trainType)), __LINE__);
        }
        $this->trainType = $trainType;
        
        return $this;
    }
    /**
     * Get waggon value
     * @return string|null
     */
    public function getWaggon(): ?string
    {
        return $this->waggon;
    }
    /**
     * Set waggon value
     * @param string $waggon
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setWaggon(?string $waggon = null): self
    {
        // validation for constraint: string
        if (!is_null($waggon) && !is_string($waggon)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waggon, true), gettype($waggon)), __LINE__);
        }
        $this->waggon = $waggon;
        
        return $this;
    }
    /**
     * Get partition value
     * @return string|null
     */
    public function getPartition(): ?string
    {
        return $this->partition;
    }
    /**
     * Set partition value
     * @param string $partition
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setPartition(?string $partition = null): self
    {
        // validation for constraint: string
        if (!is_null($partition) && !is_string($partition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partition, true), gettype($partition)), __LINE__);
        }
        $this->partition = $partition;
        
        return $this;
    }
    /**
     * Get seat value
     * @return string|null
     */
    public function getSeat(): ?string
    {
        return $this->seat;
    }
    /**
     * Set seat value
     * @param string $seat
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setSeat(?string $seat = null): self
    {
        // validation for constraint: string
        if (!is_null($seat) && !is_string($seat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seat, true), gettype($seat)), __LINE__);
        }
        $this->seat = $seat;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return string|null
     */
    public function getDocumentNo(): ?string
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param string $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setDocumentNo(?string $documentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNo) && !is_string($documentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
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
     * Get companyCustomer value
     * @return bool|null
     */
    public function getCompanyCustomer(): ?bool
    {
        return $this->companyCustomer;
    }
    /**
     * Set companyCustomer value
     * @param bool $companyCustomer
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setCompanyCustomer(?bool $companyCustomer = false): self
    {
        // validation for constraint: boolean
        if (!is_null($companyCustomer) && !is_bool($companyCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($companyCustomer, true), gettype($companyCustomer)), __LINE__);
        }
        $this->companyCustomer = $companyCustomer;
        
        return $this;
    }
    /**
     * Get paxPerService value
     * @return int|null
     */
    public function getPaxPerService(): ?int
    {
        return $this->paxPerService;
    }
    /**
     * Set paxPerService value
     * @param int $paxPerService
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setPaxPerService(?int $paxPerService = null): self
    {
        // validation for constraint: int
        if (!is_null($paxPerService) && !(is_int($paxPerService) || ctype_digit($paxPerService))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paxPerService, true), gettype($paxPerService)), __LINE__);
        }
        $this->paxPerService = $paxPerService;
        
        return $this;
    }
    /**
     * Get reductionCode value
     * @return string|null
     */
    public function getReductionCode(): ?string
    {
        return $this->reductionCode;
    }
    /**
     * Set reductionCode value
     * @param string $reductionCode
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setReductionCode(?string $reductionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($reductionCode) && !is_string($reductionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reductionCode, true), gettype($reductionCode)), __LINE__);
        }
        $this->reductionCode = $reductionCode;
        
        return $this;
    }
    /**
     * Get reductionDesc value
     * @return string|null
     */
    public function getReductionDesc(): ?string
    {
        return $this->reductionDesc;
    }
    /**
     * Set reductionDesc value
     * @param string $reductionDesc
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setReductionDesc(?string $reductionDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($reductionDesc) && !is_string($reductionDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reductionDesc, true), gettype($reductionDesc)), __LINE__);
        }
        $this->reductionDesc = $reductionDesc;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($validFrom) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($validFrom, true)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get lastCancelDate value
     * @return string|null
     */
    public function getLastCancelDate(): ?string
    {
        return $this->lastCancelDate;
    }
    /**
     * Set lastCancelDate value
     * @param string $lastCancelDate
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setLastCancelDate(?string $lastCancelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastCancelDate) && !is_string($lastCancelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastCancelDate, true), gettype($lastCancelDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($lastCancelDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $lastCancelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($lastCancelDate, true)), __LINE__);
        }
        $this->lastCancelDate = $lastCancelDate;
        
        return $this;
    }
    /**
     * Get noOfChildren value
     * @return int|null
     */
    public function getNoOfChildren(): ?int
    {
        return $this->noOfChildren;
    }
    /**
     * Set noOfChildren value
     * @param int $noOfChildren
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setNoOfChildren(?int $noOfChildren = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfChildren) && !(is_int($noOfChildren) || ctype_digit($noOfChildren))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfChildren, true), gettype($noOfChildren)), __LINE__);
        }
        $this->noOfChildren = $noOfChildren;
        
        return $this;
    }
    /**
     * Get ticketCategory value
     * @return string|null
     */
    public function getTicketCategory(): ?string
    {
        return $this->ticketCategory;
    }
    /**
     * Set ticketCategory value
     * @uses \Pggns\MidocoApi\Order\EnumType\TicketCategory::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\TicketCategory::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticketCategory
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setTicketCategory(?string $ticketCategory = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\TicketCategory::valueIsValid($ticketCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\TicketCategory', is_array($ticketCategory) ? implode(', ', $ticketCategory) : var_export($ticketCategory, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\TicketCategory::getValidValues())), __LINE__);
        }
        $this->ticketCategory = $ticketCategory;
        
        return $this;
    }
    /**
     * Get ccInformation value
     * @return \Pggns\MidocoApi\Order\StructType\CcInformation|null
     */
    public function getCcInformation(): ?\Pggns\MidocoApi\Order\StructType\CcInformation
    {
        return $this->ccInformation;
    }
    /**
     * Set ccInformation value
     * @param \Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation
     * @return \Pggns\MidocoApi\Order\StructType\RailServiceType
     */
    public function setCcInformation(?\Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation = null): self
    {
        $this->ccInformation = $ccInformation;
        
        return $this;
    }
}
