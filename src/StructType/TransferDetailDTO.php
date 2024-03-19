<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransferDetailDTO extends AbstractStructBase
{
    /**
     * The baggageAllowance
     * @var string|null
     */
    protected ?string $baggageAllowance = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
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
     * The departureLocation
     * @var string|null
     */
    protected ?string $departureLocation = null;
    /**
     * The departurePoint
     * @var string|null
     */
    protected ?string $departurePoint = null;
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
     * The direction
     * @var string|null
     */
    protected ?string $direction = null;
    /**
     * The duration
     * @var string|null
     */
    protected ?string $duration = null;
    /**
     * The emergencyNumber
     * @var string|null
     */
    protected ?string $emergencyNumber = null;
    /**
     * The isOneWay
     * @var bool|null
     */
    protected ?bool $isOneWay = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The maxPassengers
     * @var int|null
     */
    protected ?int $maxPassengers = null;
    /**
     * The paxAssigned
     * @var string|null
     */
    protected ?string $paxAssigned = null;
    /**
     * The personsPerService
     * @var int|null
     */
    protected ?int $personsPerService = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The referencePosition
     * @var int|null
     */
    protected ?int $referencePosition = null;
    /**
     * The returnDepartureCode
     * @var string|null
     */
    protected ?string $returnDepartureCode = null;
    /**
     * The returnDepartureDate
     * @var string|null
     */
    protected ?string $returnDepartureDate = null;
    /**
     * The returnDepartureDescription
     * @var string|null
     */
    protected ?string $returnDepartureDescription = null;
    /**
     * The returnDepartureTime
     * @var string|null
     */
    protected ?string $returnDepartureTime = null;
    /**
     * The returnDestinationCode
     * @var string|null
     */
    protected ?string $returnDestinationCode = null;
    /**
     * The returnDestinationDescription
     * @var string|null
     */
    protected ?string $returnDestinationDescription = null;
    /**
     * The serviceDescription
     * @var string|null
     */
    protected ?string $serviceDescription = null;
    /**
     * The serviceStatus
     * @var string|null
     */
    protected ?string $serviceStatus = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The transferAddress1
     * @var string|null
     */
    protected ?string $transferAddress1 = null;
    /**
     * The transferAddress2
     * @var string|null
     */
    protected ?string $transferAddress2 = null;
    /**
     * The transferAddress3
     * @var string|null
     */
    protected ?string $transferAddress3 = null;
    /**
     * The transferAddress4
     * @var string|null
     */
    protected ?string $transferAddress4 = null;
    /**
     * The typeOfTransfer
     * @var string|null
     */
    protected ?string $typeOfTransfer = null;
    /**
     * The vehicleCode
     * @var string|null
     */
    protected ?string $vehicleCode = null;
    /**
     * The vehicleDescription
     * @var string|null
     */
    protected ?string $vehicleDescription = null;
    /**
     * Constructor method for TransferDetailDTO
     * @uses TransferDetailDTO::setBaggageAllowance()
     * @uses TransferDetailDTO::setBookingId()
     * @uses TransferDetailDTO::setCurrency()
     * @uses TransferDetailDTO::setDepartureCode()
     * @uses TransferDetailDTO::setDepartureDate()
     * @uses TransferDetailDTO::setDepartureDescription()
     * @uses TransferDetailDTO::setDepartureLocation()
     * @uses TransferDetailDTO::setDeparturePoint()
     * @uses TransferDetailDTO::setDepartureTime()
     * @uses TransferDetailDTO::setDestinationCode()
     * @uses TransferDetailDTO::setDestinationDescription()
     * @uses TransferDetailDTO::setDirection()
     * @uses TransferDetailDTO::setDuration()
     * @uses TransferDetailDTO::setEmergencyNumber()
     * @uses TransferDetailDTO::setIsOneWay()
     * @uses TransferDetailDTO::setItemId()
     * @uses TransferDetailDTO::setMaxPassengers()
     * @uses TransferDetailDTO::setPaxAssigned()
     * @uses TransferDetailDTO::setPersonsPerService()
     * @uses TransferDetailDTO::setPosition()
     * @uses TransferDetailDTO::setReferencePosition()
     * @uses TransferDetailDTO::setReturnDepartureCode()
     * @uses TransferDetailDTO::setReturnDepartureDate()
     * @uses TransferDetailDTO::setReturnDepartureDescription()
     * @uses TransferDetailDTO::setReturnDepartureTime()
     * @uses TransferDetailDTO::setReturnDestinationCode()
     * @uses TransferDetailDTO::setReturnDestinationDescription()
     * @uses TransferDetailDTO::setServiceDescription()
     * @uses TransferDetailDTO::setServiceStatus()
     * @uses TransferDetailDTO::setSupplierId()
     * @uses TransferDetailDTO::setTotalPrice()
     * @uses TransferDetailDTO::setTransferAddress1()
     * @uses TransferDetailDTO::setTransferAddress2()
     * @uses TransferDetailDTO::setTransferAddress3()
     * @uses TransferDetailDTO::setTransferAddress4()
     * @uses TransferDetailDTO::setTypeOfTransfer()
     * @uses TransferDetailDTO::setVehicleCode()
     * @uses TransferDetailDTO::setVehicleDescription()
     * @param string $baggageAllowance
     * @param string $bookingId
     * @param string $currency
     * @param string $departureCode
     * @param string $departureDate
     * @param string $departureDescription
     * @param string $departureLocation
     * @param string $departurePoint
     * @param string $departureTime
     * @param string $destinationCode
     * @param string $destinationDescription
     * @param string $direction
     * @param string $duration
     * @param string $emergencyNumber
     * @param bool $isOneWay
     * @param int $itemId
     * @param int $maxPassengers
     * @param string $paxAssigned
     * @param int $personsPerService
     * @param int $position
     * @param int $referencePosition
     * @param string $returnDepartureCode
     * @param string $returnDepartureDate
     * @param string $returnDepartureDescription
     * @param string $returnDepartureTime
     * @param string $returnDestinationCode
     * @param string $returnDestinationDescription
     * @param string $serviceDescription
     * @param string $serviceStatus
     * @param string $supplierId
     * @param float $totalPrice
     * @param string $transferAddress1
     * @param string $transferAddress2
     * @param string $transferAddress3
     * @param string $transferAddress4
     * @param string $typeOfTransfer
     * @param string $vehicleCode
     * @param string $vehicleDescription
     */
    public function __construct(?string $baggageAllowance = null, ?string $bookingId = null, ?string $currency = null, ?string $departureCode = null, ?string $departureDate = null, ?string $departureDescription = null, ?string $departureLocation = null, ?string $departurePoint = null, ?string $departureTime = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?string $direction = null, ?string $duration = null, ?string $emergencyNumber = null, ?bool $isOneWay = null, ?int $itemId = null, ?int $maxPassengers = null, ?string $paxAssigned = null, ?int $personsPerService = null, ?int $position = null, ?int $referencePosition = null, ?string $returnDepartureCode = null, ?string $returnDepartureDate = null, ?string $returnDepartureDescription = null, ?string $returnDepartureTime = null, ?string $returnDestinationCode = null, ?string $returnDestinationDescription = null, ?string $serviceDescription = null, ?string $serviceStatus = null, ?string $supplierId = null, ?float $totalPrice = null, ?string $transferAddress1 = null, ?string $transferAddress2 = null, ?string $transferAddress3 = null, ?string $transferAddress4 = null, ?string $typeOfTransfer = null, ?string $vehicleCode = null, ?string $vehicleDescription = null)
    {
        $this
            ->setBaggageAllowance($baggageAllowance)
            ->setBookingId($bookingId)
            ->setCurrency($currency)
            ->setDepartureCode($departureCode)
            ->setDepartureDate($departureDate)
            ->setDepartureDescription($departureDescription)
            ->setDepartureLocation($departureLocation)
            ->setDeparturePoint($departurePoint)
            ->setDepartureTime($departureTime)
            ->setDestinationCode($destinationCode)
            ->setDestinationDescription($destinationDescription)
            ->setDirection($direction)
            ->setDuration($duration)
            ->setEmergencyNumber($emergencyNumber)
            ->setIsOneWay($isOneWay)
            ->setItemId($itemId)
            ->setMaxPassengers($maxPassengers)
            ->setPaxAssigned($paxAssigned)
            ->setPersonsPerService($personsPerService)
            ->setPosition($position)
            ->setReferencePosition($referencePosition)
            ->setReturnDepartureCode($returnDepartureCode)
            ->setReturnDepartureDate($returnDepartureDate)
            ->setReturnDepartureDescription($returnDepartureDescription)
            ->setReturnDepartureTime($returnDepartureTime)
            ->setReturnDestinationCode($returnDestinationCode)
            ->setReturnDestinationDescription($returnDestinationDescription)
            ->setServiceDescription($serviceDescription)
            ->setServiceStatus($serviceStatus)
            ->setSupplierId($supplierId)
            ->setTotalPrice($totalPrice)
            ->setTransferAddress1($transferAddress1)
            ->setTransferAddress2($transferAddress2)
            ->setTransferAddress3($transferAddress3)
            ->setTransferAddress4($transferAddress4)
            ->setTypeOfTransfer($typeOfTransfer)
            ->setVehicleCode($vehicleCode)
            ->setVehicleDescription($vehicleDescription);
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * Get direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @param string $direction
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        $this->direction = $direction;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * Get emergencyNumber value
     * @return string|null
     */
    public function getEmergencyNumber(): ?string
    {
        return $this->emergencyNumber;
    }
    /**
     * Set emergencyNumber value
     * @param string $emergencyNumber
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
     */
    public function setEmergencyNumber(?string $emergencyNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($emergencyNumber) && !is_string($emergencyNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emergencyNumber, true), gettype($emergencyNumber)), __LINE__);
        }
        $this->emergencyNumber = $emergencyNumber;
        
        return $this;
    }
    /**
     * Get isOneWay value
     * @return bool|null
     */
    public function getIsOneWay(): ?bool
    {
        return $this->isOneWay;
    }
    /**
     * Set isOneWay value
     * @param bool $isOneWay
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
     */
    public function setIsOneWay(?bool $isOneWay = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOneWay) && !is_bool($isOneWay)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOneWay, true), gettype($isOneWay)), __LINE__);
        }
        $this->isOneWay = $isOneWay;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * Get paxAssigned value
     * @return string|null
     */
    public function getPaxAssigned(): ?string
    {
        return $this->paxAssigned;
    }
    /**
     * Set paxAssigned value
     * @param string $paxAssigned
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
     */
    public function setPaxAssigned(?string $paxAssigned = null): self
    {
        // validation for constraint: string
        if (!is_null($paxAssigned) && !is_string($paxAssigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxAssigned, true), gettype($paxAssigned)), __LINE__);
        }
        $this->paxAssigned = $paxAssigned;
        
        return $this;
    }
    /**
     * Get personsPerService value
     * @return int|null
     */
    public function getPersonsPerService(): ?int
    {
        return $this->personsPerService;
    }
    /**
     * Set personsPerService value
     * @param int $personsPerService
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
     */
    public function setPersonsPerService(?int $personsPerService = null): self
    {
        // validation for constraint: int
        if (!is_null($personsPerService) && !(is_int($personsPerService) || ctype_digit($personsPerService))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personsPerService, true), gettype($personsPerService)), __LINE__);
        }
        $this->personsPerService = $personsPerService;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * Get returnDepartureDate value
     * @return string|null
     */
    public function getReturnDepartureDate(): ?string
    {
        return $this->returnDepartureDate;
    }
    /**
     * Set returnDepartureDate value
     * @param string $returnDepartureDate
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
     */
    public function setReturnDepartureDate(?string $returnDepartureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureDate) && !is_string($returnDepartureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureDate, true), gettype($returnDepartureDate)), __LINE__);
        }
        $this->returnDepartureDate = $returnDepartureDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * Get returnDepartureTime value
     * @return string|null
     */
    public function getReturnDepartureTime(): ?string
    {
        return $this->returnDepartureTime;
    }
    /**
     * Set returnDepartureTime value
     * @param string $returnDepartureTime
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
     */
    public function setReturnDepartureTime(?string $returnDepartureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureTime) && !is_string($returnDepartureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureTime, true), gettype($returnDepartureTime)), __LINE__);
        }
        $this->returnDepartureTime = $returnDepartureTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TransferDetailDTO
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
}
