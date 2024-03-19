<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmTravelIntentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmTravelIntentDTO extends AbstractStructBase
{
    /**
     * The accomodationCode
     * @var string|null
     */
    protected ?string $accomodationCode = null;
    /**
     * The accomodationDescription
     * @var string|null
     */
    protected ?string $accomodationDescription = null;
    /**
     * The areaCode
     * @var string|null
     */
    protected ?string $areaCode = null;
    /**
     * The areaDescription
     * @var string|null
     */
    protected ?string $areaDescription = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The cateringDescription
     * @var string|null
     */
    protected ?string $cateringDescription = null;
    /**
     * The cruiseDescription
     * @var string|null
     */
    protected ?string $cruiseDescription = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDescription
     * @var string|null
     */
    protected ?string $departureDescription = null;
    /**
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
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
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The insuranceDescription
     * @var string|null
     */
    protected ?string $insuranceDescription = null;
    /**
     * The intentPosition
     * @var int|null
     */
    protected ?int $intentPosition = null;
    /**
     * The intentTimestamp
     * @var string|null
     */
    protected ?string $intentTimestamp = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The processed
     * @var bool|null
     */
    protected ?bool $processed = null;
    /**
     * The returnArrivalTime
     * @var string|null
     */
    protected ?string $returnArrivalTime = null;
    /**
     * The returnCarrier
     * @var string|null
     */
    protected ?string $returnCarrier = null;
    /**
     * The returnDepartureCode
     * @var string|null
     */
    protected ?string $returnDepartureCode = null;
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
     * The returnFlightNo
     * @var string|null
     */
    protected ?string $returnFlightNo = null;
    /**
     * The roomDescription
     * @var string|null
     */
    protected ?string $roomDescription = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for CrmTravelIntentDTO
     * @uses CrmTravelIntentDTO::setAccomodationCode()
     * @uses CrmTravelIntentDTO::setAccomodationDescription()
     * @uses CrmTravelIntentDTO::setAreaCode()
     * @uses CrmTravelIntentDTO::setAreaDescription()
     * @uses CrmTravelIntentDTO::setArrivalTime()
     * @uses CrmTravelIntentDTO::setCarrier()
     * @uses CrmTravelIntentDTO::setCateringDescription()
     * @uses CrmTravelIntentDTO::setCruiseDescription()
     * @uses CrmTravelIntentDTO::setCustomerId()
     * @uses CrmTravelIntentDTO::setDepartureCode()
     * @uses CrmTravelIntentDTO::setDepartureDescription()
     * @uses CrmTravelIntentDTO::setDepartureTime()
     * @uses CrmTravelIntentDTO::setDescription()
     * @uses CrmTravelIntentDTO::setDestinationCode()
     * @uses CrmTravelIntentDTO::setDestinationDescription()
     * @uses CrmTravelIntentDTO::setFlightNo()
     * @uses CrmTravelIntentDTO::setInsuranceDescription()
     * @uses CrmTravelIntentDTO::setIntentPosition()
     * @uses CrmTravelIntentDTO::setIntentTimestamp()
     * @uses CrmTravelIntentDTO::setMediatorAffiliate()
     * @uses CrmTravelIntentDTO::setMediatorId()
     * @uses CrmTravelIntentDTO::setProcessed()
     * @uses CrmTravelIntentDTO::setReturnArrivalTime()
     * @uses CrmTravelIntentDTO::setReturnCarrier()
     * @uses CrmTravelIntentDTO::setReturnDepartureCode()
     * @uses CrmTravelIntentDTO::setReturnDepartureDescription()
     * @uses CrmTravelIntentDTO::setReturnDepartureTime()
     * @uses CrmTravelIntentDTO::setReturnDestinationCode()
     * @uses CrmTravelIntentDTO::setReturnDestinationDescription()
     * @uses CrmTravelIntentDTO::setReturnFlightNo()
     * @uses CrmTravelIntentDTO::setRoomDescription()
     * @uses CrmTravelIntentDTO::setSupplierId()
     * @param string $accomodationCode
     * @param string $accomodationDescription
     * @param string $areaCode
     * @param string $areaDescription
     * @param string $arrivalTime
     * @param string $carrier
     * @param string $cateringDescription
     * @param string $cruiseDescription
     * @param int $customerId
     * @param string $departureCode
     * @param string $departureDescription
     * @param string $departureTime
     * @param string $description
     * @param string $destinationCode
     * @param string $destinationDescription
     * @param string $flightNo
     * @param string $insuranceDescription
     * @param int $intentPosition
     * @param string $intentTimestamp
     * @param string $mediatorAffiliate
     * @param string $mediatorId
     * @param bool $processed
     * @param string $returnArrivalTime
     * @param string $returnCarrier
     * @param string $returnDepartureCode
     * @param string $returnDepartureDescription
     * @param string $returnDepartureTime
     * @param string $returnDestinationCode
     * @param string $returnDestinationDescription
     * @param string $returnFlightNo
     * @param string $roomDescription
     * @param string $supplierId
     */
    public function __construct(?string $accomodationCode = null, ?string $accomodationDescription = null, ?string $areaCode = null, ?string $areaDescription = null, ?string $arrivalTime = null, ?string $carrier = null, ?string $cateringDescription = null, ?string $cruiseDescription = null, ?int $customerId = null, ?string $departureCode = null, ?string $departureDescription = null, ?string $departureTime = null, ?string $description = null, ?string $destinationCode = null, ?string $destinationDescription = null, ?string $flightNo = null, ?string $insuranceDescription = null, ?int $intentPosition = null, ?string $intentTimestamp = null, ?string $mediatorAffiliate = null, ?string $mediatorId = null, ?bool $processed = null, ?string $returnArrivalTime = null, ?string $returnCarrier = null, ?string $returnDepartureCode = null, ?string $returnDepartureDescription = null, ?string $returnDepartureTime = null, ?string $returnDestinationCode = null, ?string $returnDestinationDescription = null, ?string $returnFlightNo = null, ?string $roomDescription = null, ?string $supplierId = null)
    {
        $this
            ->setAccomodationCode($accomodationCode)
            ->setAccomodationDescription($accomodationDescription)
            ->setAreaCode($areaCode)
            ->setAreaDescription($areaDescription)
            ->setArrivalTime($arrivalTime)
            ->setCarrier($carrier)
            ->setCateringDescription($cateringDescription)
            ->setCruiseDescription($cruiseDescription)
            ->setCustomerId($customerId)
            ->setDepartureCode($departureCode)
            ->setDepartureDescription($departureDescription)
            ->setDepartureTime($departureTime)
            ->setDescription($description)
            ->setDestinationCode($destinationCode)
            ->setDestinationDescription($destinationDescription)
            ->setFlightNo($flightNo)
            ->setInsuranceDescription($insuranceDescription)
            ->setIntentPosition($intentPosition)
            ->setIntentTimestamp($intentTimestamp)
            ->setMediatorAffiliate($mediatorAffiliate)
            ->setMediatorId($mediatorId)
            ->setProcessed($processed)
            ->setReturnArrivalTime($returnArrivalTime)
            ->setReturnCarrier($returnCarrier)
            ->setReturnDepartureCode($returnDepartureCode)
            ->setReturnDepartureDescription($returnDepartureDescription)
            ->setReturnDepartureTime($returnDepartureTime)
            ->setReturnDestinationCode($returnDestinationCode)
            ->setReturnDestinationDescription($returnDestinationDescription)
            ->setReturnFlightNo($returnFlightNo)
            ->setRoomDescription($roomDescription)
            ->setSupplierId($supplierId);
    }
    /**
     * Get accomodationCode value
     * @return string|null
     */
    public function getAccomodationCode(): ?string
    {
        return $this->accomodationCode;
    }
    /**
     * Set accomodationCode value
     * @param string $accomodationCode
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setAccomodationCode(?string $accomodationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationCode) && !is_string($accomodationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationCode, true), gettype($accomodationCode)), __LINE__);
        }
        $this->accomodationCode = $accomodationCode;
        
        return $this;
    }
    /**
     * Get accomodationDescription value
     * @return string|null
     */
    public function getAccomodationDescription(): ?string
    {
        return $this->accomodationDescription;
    }
    /**
     * Set accomodationDescription value
     * @param string $accomodationDescription
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setAccomodationDescription(?string $accomodationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationDescription) && !is_string($accomodationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationDescription, true), gettype($accomodationDescription)), __LINE__);
        }
        $this->accomodationDescription = $accomodationDescription;
        
        return $this;
    }
    /**
     * Get areaCode value
     * @return string|null
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }
    /**
     * Set areaCode value
     * @param string $areaCode
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setAreaCode(?string $areaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($areaCode) && !is_string($areaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaCode, true), gettype($areaCode)), __LINE__);
        }
        $this->areaCode = $areaCode;
        
        return $this;
    }
    /**
     * Get areaDescription value
     * @return string|null
     */
    public function getAreaDescription(): ?string
    {
        return $this->areaDescription;
    }
    /**
     * Set areaDescription value
     * @param string $areaDescription
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setAreaDescription(?string $areaDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($areaDescription) && !is_string($areaDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaDescription, true), gettype($areaDescription)), __LINE__);
        }
        $this->areaDescription = $areaDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * Get cateringDescription value
     * @return string|null
     */
    public function getCateringDescription(): ?string
    {
        return $this->cateringDescription;
    }
    /**
     * Set cateringDescription value
     * @param string $cateringDescription
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setCateringDescription(?string $cateringDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringDescription) && !is_string($cateringDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringDescription, true), gettype($cateringDescription)), __LINE__);
        }
        $this->cateringDescription = $cateringDescription;
        
        return $this;
    }
    /**
     * Get cruiseDescription value
     * @return string|null
     */
    public function getCruiseDescription(): ?string
    {
        return $this->cruiseDescription;
    }
    /**
     * Set cruiseDescription value
     * @param string $cruiseDescription
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setCruiseDescription(?string $cruiseDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cruiseDescription) && !is_string($cruiseDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cruiseDescription, true), gettype($cruiseDescription)), __LINE__);
        }
        $this->cruiseDescription = $cruiseDescription;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * Get insuranceDescription value
     * @return string|null
     */
    public function getInsuranceDescription(): ?string
    {
        return $this->insuranceDescription;
    }
    /**
     * Set insuranceDescription value
     * @param string $insuranceDescription
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setInsuranceDescription(?string $insuranceDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceDescription) && !is_string($insuranceDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceDescription, true), gettype($insuranceDescription)), __LINE__);
        }
        $this->insuranceDescription = $insuranceDescription;
        
        return $this;
    }
    /**
     * Get intentPosition value
     * @return int|null
     */
    public function getIntentPosition(): ?int
    {
        return $this->intentPosition;
    }
    /**
     * Set intentPosition value
     * @param int $intentPosition
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setIntentPosition(?int $intentPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($intentPosition) && !(is_int($intentPosition) || ctype_digit($intentPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intentPosition, true), gettype($intentPosition)), __LINE__);
        }
        $this->intentPosition = $intentPosition;
        
        return $this;
    }
    /**
     * Get intentTimestamp value
     * @return string|null
     */
    public function getIntentTimestamp(): ?string
    {
        return $this->intentTimestamp;
    }
    /**
     * Set intentTimestamp value
     * @param string $intentTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setIntentTimestamp(?string $intentTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($intentTimestamp) && !is_string($intentTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intentTimestamp, true), gettype($intentTimestamp)), __LINE__);
        }
        $this->intentTimestamp = $intentTimestamp;
        
        return $this;
    }
    /**
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get processed value
     * @return bool|null
     */
    public function getProcessed(): ?bool
    {
        return $this->processed;
    }
    /**
     * Set processed value
     * @param bool $processed
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setProcessed(?bool $processed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($processed) && !is_bool($processed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processed, true), gettype($processed)), __LINE__);
        }
        $this->processed = $processed;
        
        return $this;
    }
    /**
     * Get returnArrivalTime value
     * @return string|null
     */
    public function getReturnArrivalTime(): ?string
    {
        return $this->returnArrivalTime;
    }
    /**
     * Set returnArrivalTime value
     * @param string $returnArrivalTime
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setReturnArrivalTime(?string $returnArrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnArrivalTime) && !is_string($returnArrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnArrivalTime, true), gettype($returnArrivalTime)), __LINE__);
        }
        $this->returnArrivalTime = $returnArrivalTime;
        
        return $this;
    }
    /**
     * Get returnCarrier value
     * @return string|null
     */
    public function getReturnCarrier(): ?string
    {
        return $this->returnCarrier;
    }
    /**
     * Set returnCarrier value
     * @param string $returnCarrier
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setReturnCarrier(?string $returnCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCarrier) && !is_string($returnCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCarrier, true), gettype($returnCarrier)), __LINE__);
        }
        $this->returnCarrier = $returnCarrier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
     * Get returnFlightNo value
     * @return string|null
     */
    public function getReturnFlightNo(): ?string
    {
        return $this->returnFlightNo;
    }
    /**
     * Set returnFlightNo value
     * @param string $returnFlightNo
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setReturnFlightNo(?string $returnFlightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($returnFlightNo) && !is_string($returnFlightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFlightNo, true), gettype($returnFlightNo)), __LINE__);
        }
        $this->returnFlightNo = $returnFlightNo;
        
        return $this;
    }
    /**
     * Get roomDescription value
     * @return string|null
     */
    public function getRoomDescription(): ?string
    {
        return $this->roomDescription;
    }
    /**
     * Set roomDescription value
     * @param string $roomDescription
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
     */
    public function setRoomDescription(?string $roomDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($roomDescription) && !is_string($roomDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roomDescription, true), gettype($roomDescription)), __LINE__);
        }
        $this->roomDescription = $roomDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravelIntentDTO
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
}
