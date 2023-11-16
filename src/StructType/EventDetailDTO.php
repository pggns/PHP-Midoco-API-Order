<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EventDetailDTO StructType
 * @subpackage Structs
 */
class EventDetailDTO extends AbstractStructBase
{
    /**
     * The advanceSalePrice
     * @var float|null
     */
    protected ?float $advanceSalePrice = null;
    /**
     * The bookingReference
     * @var string|null
     */
    protected ?string $bookingReference = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The discountType
     * @var string|null
     */
    protected ?string $discountType = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The endTime
     * @var string|null
     */
    protected ?string $endTime = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The locationAddress1
     * @var string|null
     */
    protected ?string $locationAddress1 = null;
    /**
     * The locationAddress2
     * @var string|null
     */
    protected ?string $locationAddress2 = null;
    /**
     * The locationAddress3
     * @var string|null
     */
    protected ?string $locationAddress3 = null;
    /**
     * The locationAddress4
     * @var string|null
     */
    protected ?string $locationAddress4 = null;
    /**
     * The locationName
     * @var string|null
     */
    protected ?string $locationName = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The noOfTickets
     * @var int|null
     */
    protected ?int $noOfTickets = null;
    /**
     * The organizer
     * @var string|null
     */
    protected ?string $organizer = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The referencePosition
     * @var int|null
     */
    protected ?int $referencePosition = null;
    /**
     * The rowNo
     * @var string|null
     */
    protected ?string $rowNo = null;
    /**
     * The seatArea
     * @var string|null
     */
    protected ?string $seatArea = null;
    /**
     * The seatNo
     * @var string|null
     */
    protected ?string $seatNo = null;
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
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The ticketCategory
     * @var string|null
     */
    protected ?string $ticketCategory = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * Constructor method for EventDetailDTO
     * @uses EventDetailDTO::setAdvanceSalePrice()
     * @uses EventDetailDTO::setBookingReference()
     * @uses EventDetailDTO::setCurrency()
     * @uses EventDetailDTO::setDescription()
     * @uses EventDetailDTO::setDiscountType()
     * @uses EventDetailDTO::setEndDate()
     * @uses EventDetailDTO::setEndTime()
     * @uses EventDetailDTO::setItemId()
     * @uses EventDetailDTO::setLocationAddress1()
     * @uses EventDetailDTO::setLocationAddress2()
     * @uses EventDetailDTO::setLocationAddress3()
     * @uses EventDetailDTO::setLocationAddress4()
     * @uses EventDetailDTO::setLocationName()
     * @uses EventDetailDTO::setName()
     * @uses EventDetailDTO::setNoOfTickets()
     * @uses EventDetailDTO::setOrganizer()
     * @uses EventDetailDTO::setPosition()
     * @uses EventDetailDTO::setPrice()
     * @uses EventDetailDTO::setReferencePosition()
     * @uses EventDetailDTO::setRowNo()
     * @uses EventDetailDTO::setSeatArea()
     * @uses EventDetailDTO::setSeatNo()
     * @uses EventDetailDTO::setServiceCode()
     * @uses EventDetailDTO::setServiceName()
     * @uses EventDetailDTO::setServiceStatus()
     * @uses EventDetailDTO::setStartDate()
     * @uses EventDetailDTO::setStartTime()
     * @uses EventDetailDTO::setTicketCategory()
     * @uses EventDetailDTO::setTotalPrice()
     * @param float $advanceSalePrice
     * @param string $bookingReference
     * @param string $currency
     * @param string $description
     * @param string $discountType
     * @param string $endDate
     * @param string $endTime
     * @param int $itemId
     * @param string $locationAddress1
     * @param string $locationAddress2
     * @param string $locationAddress3
     * @param string $locationAddress4
     * @param string $locationName
     * @param string $name
     * @param int $noOfTickets
     * @param string $organizer
     * @param int $position
     * @param float $price
     * @param int $referencePosition
     * @param string $rowNo
     * @param string $seatArea
     * @param string $seatNo
     * @param string $serviceCode
     * @param string $serviceName
     * @param string $serviceStatus
     * @param string $startDate
     * @param string $startTime
     * @param string $ticketCategory
     * @param float $totalPrice
     */
    public function __construct(?float $advanceSalePrice = null, ?string $bookingReference = null, ?string $currency = null, ?string $description = null, ?string $discountType = null, ?string $endDate = null, ?string $endTime = null, ?int $itemId = null, ?string $locationAddress1 = null, ?string $locationAddress2 = null, ?string $locationAddress3 = null, ?string $locationAddress4 = null, ?string $locationName = null, ?string $name = null, ?int $noOfTickets = null, ?string $organizer = null, ?int $position = null, ?float $price = null, ?int $referencePosition = null, ?string $rowNo = null, ?string $seatArea = null, ?string $seatNo = null, ?string $serviceCode = null, ?string $serviceName = null, ?string $serviceStatus = null, ?string $startDate = null, ?string $startTime = null, ?string $ticketCategory = null, ?float $totalPrice = null)
    {
        $this
            ->setAdvanceSalePrice($advanceSalePrice)
            ->setBookingReference($bookingReference)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setDiscountType($discountType)
            ->setEndDate($endDate)
            ->setEndTime($endTime)
            ->setItemId($itemId)
            ->setLocationAddress1($locationAddress1)
            ->setLocationAddress2($locationAddress2)
            ->setLocationAddress3($locationAddress3)
            ->setLocationAddress4($locationAddress4)
            ->setLocationName($locationName)
            ->setName($name)
            ->setNoOfTickets($noOfTickets)
            ->setOrganizer($organizer)
            ->setPosition($position)
            ->setPrice($price)
            ->setReferencePosition($referencePosition)
            ->setRowNo($rowNo)
            ->setSeatArea($seatArea)
            ->setSeatNo($seatNo)
            ->setServiceCode($serviceCode)
            ->setServiceName($serviceName)
            ->setServiceStatus($serviceStatus)
            ->setStartDate($startDate)
            ->setStartTime($startTime)
            ->setTicketCategory($ticketCategory)
            ->setTotalPrice($totalPrice);
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->endTime = $endTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * Get rowNo value
     * @return string|null
     */
    public function getRowNo(): ?string
    {
        return $this->rowNo;
    }
    /**
     * Set rowNo value
     * @param string $rowNo
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
     */
    public function setRowNo(?string $rowNo = null): self
    {
        // validation for constraint: string
        if (!is_null($rowNo) && !is_string($rowNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rowNo, true), gettype($rowNo)), __LINE__);
        }
        $this->rowNo = $rowNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\EventDetailDTO
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
}
