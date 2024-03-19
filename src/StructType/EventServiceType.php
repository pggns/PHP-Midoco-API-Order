<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eventServiceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EventServiceType extends AbstractStructBase
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
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The noOfTickets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfTickets = null;
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
     * - pattern: [0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The endTime
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}
     * @var string|null
     */
    protected ?string $endTime = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The organizer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $organizer = null;
    /**
     * The locationAddress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locationAddress1 = null;
    /**
     * The locationAddress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locationAddress2 = null;
    /**
     * The locationAddress3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locationAddress3 = null;
    /**
     * The locationAddress4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locationAddress4 = null;
    /**
     * The locationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locationName = null;
    /**
     * The seatArea
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $seatArea = null;
    /**
     * The row
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $row = null;
    /**
     * The seatNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $seatNo = null;
    /**
     * The totalPrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The advanceSalePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $advanceSalePrice = null;
    /**
     * The serviceStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The discountType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $discountType = null;
    /**
     * The bookingReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingReference = null;
    /**
     * The ticketCategory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticketCategory = null;
    /**
     * Constructor method for eventServiceType
     * @uses EventServiceType::setPosition()
     * @uses EventServiceType::setServiceCode()
     * @uses EventServiceType::setServiceName()
     * @uses EventServiceType::setNoOfTickets()
     * @uses EventServiceType::setStartDate()
     * @uses EventServiceType::setEndDate()
     * @uses EventServiceType::setStartTime()
     * @uses EventServiceType::setEndTime()
     * @uses EventServiceType::setDescription()
     * @uses EventServiceType::setName()
     * @uses EventServiceType::setOrganizer()
     * @uses EventServiceType::setLocationAddress1()
     * @uses EventServiceType::setLocationAddress2()
     * @uses EventServiceType::setLocationAddress3()
     * @uses EventServiceType::setLocationAddress4()
     * @uses EventServiceType::setLocationName()
     * @uses EventServiceType::setSeatArea()
     * @uses EventServiceType::setRow()
     * @uses EventServiceType::setSeatNo()
     * @uses EventServiceType::setTotalPrice()
     * @uses EventServiceType::setAdvanceSalePrice()
     * @uses EventServiceType::setServiceStatus()
     * @uses EventServiceType::setPersonAssignment()
     * @uses EventServiceType::setPrice()
     * @uses EventServiceType::setCurrency()
     * @uses EventServiceType::setDiscountType()
     * @uses EventServiceType::setBookingReference()
     * @uses EventServiceType::setTicketCategory()
     * @param int $position
     * @param string $serviceCode
     * @param string $serviceName
     * @param int $noOfTickets
     * @param string $startDate
     * @param string $endDate
     * @param string $startTime
     * @param string $endTime
     * @param string $description
     * @param string $name
     * @param string $organizer
     * @param string $locationAddress1
     * @param string $locationAddress2
     * @param string $locationAddress3
     * @param string $locationAddress4
     * @param string $locationName
     * @param string $seatArea
     * @param string $row
     * @param string $seatNo
     * @param float $totalPrice
     * @param float $advanceSalePrice
     * @param string $serviceStatus
     * @param string $personAssignment
     * @param float $price
     * @param string $currency
     * @param string $discountType
     * @param string $bookingReference
     * @param string $ticketCategory
     */
    public function __construct(int $position, ?string $serviceCode = null, ?string $serviceName = null, ?int $noOfTickets = null, ?string $startDate = null, ?string $endDate = null, ?string $startTime = null, ?string $endTime = null, ?string $description = null, ?string $name = null, ?string $organizer = null, ?string $locationAddress1 = null, ?string $locationAddress2 = null, ?string $locationAddress3 = null, ?string $locationAddress4 = null, ?string $locationName = null, ?string $seatArea = null, ?string $row = null, ?string $seatNo = null, ?float $totalPrice = null, ?float $advanceSalePrice = null, ?string $serviceStatus = null, ?string $personAssignment = null, ?float $price = null, ?string $currency = 'EUR', ?string $discountType = null, ?string $bookingReference = null, ?string $ticketCategory = null)
    {
        $this
            ->setPosition($position)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setNoOfTickets($noOfTickets)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setDescription($description)
            ->setName($name)
            ->setOrganizer($organizer)
            ->setLocationAddress1($locationAddress1)
            ->setLocationAddress2($locationAddress2)
            ->setLocationAddress3($locationAddress3)
            ->setLocationAddress4($locationAddress4)
            ->setLocationName($locationName)
            ->setSeatArea($seatArea)
            ->setRow($row)
            ->setSeatNo($seatNo)
            ->setTotalPrice($totalPrice)
            ->setAdvanceSalePrice($advanceSalePrice)
            ->setServiceStatus($serviceStatus)
            ->setPersonAssignment($personAssignment)
            ->setPrice($price)
            ->setCurrency($currency)
            ->setDiscountType($discountType)
            ->setBookingReference($bookingReference)
            ->setTicketCategory($ticketCategory);
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
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
     * Get noOfTickets value
     * @return int|null
     */
    public function getNoOfTickets(): ?int
    {
        return $this->noOfTickets;
    }
    /**
     * Set noOfTickets value
     * @param int $noOfTickets
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setNoOfTickets(?int $noOfTickets = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfTickets) && !(is_int($noOfTickets) || ctype_digit($noOfTickets))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfTickets, true), gettype($noOfTickets)), __LINE__);
        }
        $this->noOfTickets = $noOfTickets;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2})
        if (!is_null($startTime) && !preg_match('/[0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}/', (string) $startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}/', var_export($startTime, true)), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2})
        if (!is_null($endTime) && !preg_match('/[0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}/', (string) $endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}/', var_export($endTime, true)), __LINE__);
        }
        $this->endTime = $endTime;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get organizer value
     * @return string|null
     */
    public function getOrganizer(): ?string
    {
        return $this->organizer;
    }
    /**
     * Set organizer value
     * @param string $organizer
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setOrganizer(?string $organizer = null): self
    {
        // validation for constraint: string
        if (!is_null($organizer) && !is_string($organizer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizer, true), gettype($organizer)), __LINE__);
        }
        $this->organizer = $organizer;
        
        return $this;
    }
    /**
     * Get locationAddress1 value
     * @return string|null
     */
    public function getLocationAddress1(): ?string
    {
        return $this->locationAddress1;
    }
    /**
     * Set locationAddress1 value
     * @param string $locationAddress1
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setLocationAddress1(?string $locationAddress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($locationAddress1) && !is_string($locationAddress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationAddress1, true), gettype($locationAddress1)), __LINE__);
        }
        $this->locationAddress1 = $locationAddress1;
        
        return $this;
    }
    /**
     * Get locationAddress2 value
     * @return string|null
     */
    public function getLocationAddress2(): ?string
    {
        return $this->locationAddress2;
    }
    /**
     * Set locationAddress2 value
     * @param string $locationAddress2
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setLocationAddress2(?string $locationAddress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($locationAddress2) && !is_string($locationAddress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationAddress2, true), gettype($locationAddress2)), __LINE__);
        }
        $this->locationAddress2 = $locationAddress2;
        
        return $this;
    }
    /**
     * Get locationAddress3 value
     * @return string|null
     */
    public function getLocationAddress3(): ?string
    {
        return $this->locationAddress3;
    }
    /**
     * Set locationAddress3 value
     * @param string $locationAddress3
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setLocationAddress3(?string $locationAddress3 = null): self
    {
        // validation for constraint: string
        if (!is_null($locationAddress3) && !is_string($locationAddress3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationAddress3, true), gettype($locationAddress3)), __LINE__);
        }
        $this->locationAddress3 = $locationAddress3;
        
        return $this;
    }
    /**
     * Get locationAddress4 value
     * @return string|null
     */
    public function getLocationAddress4(): ?string
    {
        return $this->locationAddress4;
    }
    /**
     * Set locationAddress4 value
     * @param string $locationAddress4
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setLocationAddress4(?string $locationAddress4 = null): self
    {
        // validation for constraint: string
        if (!is_null($locationAddress4) && !is_string($locationAddress4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationAddress4, true), gettype($locationAddress4)), __LINE__);
        }
        $this->locationAddress4 = $locationAddress4;
        
        return $this;
    }
    /**
     * Get locationName value
     * @return string|null
     */
    public function getLocationName(): ?string
    {
        return $this->locationName;
    }
    /**
     * Set locationName value
     * @param string $locationName
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setLocationName(?string $locationName = null): self
    {
        // validation for constraint: string
        if (!is_null($locationName) && !is_string($locationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationName, true), gettype($locationName)), __LINE__);
        }
        $this->locationName = $locationName;
        
        return $this;
    }
    /**
     * Get seatArea value
     * @return string|null
     */
    public function getSeatArea(): ?string
    {
        return $this->seatArea;
    }
    /**
     * Set seatArea value
     * @param string $seatArea
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setSeatArea(?string $seatArea = null): self
    {
        // validation for constraint: string
        if (!is_null($seatArea) && !is_string($seatArea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatArea, true), gettype($seatArea)), __LINE__);
        }
        $this->seatArea = $seatArea;
        
        return $this;
    }
    /**
     * Get row value
     * @return string|null
     */
    public function getRow(): ?string
    {
        return $this->row;
    }
    /**
     * Set row value
     * @param string $row
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setRow(?string $row = null): self
    {
        // validation for constraint: string
        if (!is_null($row) && !is_string($row)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($row, true), gettype($row)), __LINE__);
        }
        $this->row = $row;
        
        return $this;
    }
    /**
     * Get seatNo value
     * @return string|null
     */
    public function getSeatNo(): ?string
    {
        return $this->seatNo;
    }
    /**
     * Set seatNo value
     * @param string $seatNo
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setSeatNo(?string $seatNo = null): self
    {
        // validation for constraint: string
        if (!is_null($seatNo) && !is_string($seatNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatNo, true), gettype($seatNo)), __LINE__);
        }
        $this->seatNo = $seatNo;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get advanceSalePrice value
     * @return float|null
     */
    public function getAdvanceSalePrice(): ?float
    {
        return $this->advanceSalePrice;
    }
    /**
     * Set advanceSalePrice value
     * @param float $advanceSalePrice
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setAdvanceSalePrice(?float $advanceSalePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($advanceSalePrice) && !(is_float($advanceSalePrice) || is_numeric($advanceSalePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($advanceSalePrice, true), gettype($advanceSalePrice)), __LINE__);
        }
        $this->advanceSalePrice = $advanceSalePrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
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
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
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
     * Get discountType value
     * @return string|null
     */
    public function getDiscountType(): ?string
    {
        return $this->discountType;
    }
    /**
     * Set discountType value
     * @param string $discountType
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setDiscountType(?string $discountType = null): self
    {
        // validation for constraint: string
        if (!is_null($discountType) && !is_string($discountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountType, true), gettype($discountType)), __LINE__);
        }
        $this->discountType = $discountType;
        
        return $this;
    }
    /**
     * Get bookingReference value
     * @return string|null
     */
    public function getBookingReference(): ?string
    {
        return $this->bookingReference;
    }
    /**
     * Set bookingReference value
     * @param string $bookingReference
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setBookingReference(?string $bookingReference = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingReference) && !is_string($bookingReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingReference, true), gettype($bookingReference)), __LINE__);
        }
        $this->bookingReference = $bookingReference;
        
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
     * @param string $ticketCategory
     * @return \Pggns\MidocoApi\Order\StructType\EventServiceType
     */
    public function setTicketCategory(?string $ticketCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketCategory) && !is_string($ticketCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketCategory, true), gettype($ticketCategory)), __LINE__);
        }
        $this->ticketCategory = $ticketCategory;
        
        return $this;
    }
}
