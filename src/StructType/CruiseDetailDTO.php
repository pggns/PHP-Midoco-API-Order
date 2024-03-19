<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CruiseDetailDTO extends AbstractStructBase
{
    /**
     * The arrivalTransportType
     * @var string|null
     */
    protected ?string $arrivalTransportType = null;
    /**
     * The cabinCode
     * @var string|null
     */
    protected ?string $cabinCode = null;
    /**
     * The cabinDescription
     * @var string|null
     */
    protected ?string $cabinDescription = null;
    /**
     * The cabinNo
     * @var string|null
     */
    protected ?string $cabinNo = null;
    /**
     * The catering
     * @var string|null
     */
    protected ?string $catering = null;
    /**
     * The cateringDescription
     * @var string|null
     */
    protected ?string $cateringDescription = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The debarkation
     * @var string|null
     */
    protected ?string $debarkation = null;
    /**
     * The deck
     * @var string|null
     */
    protected ?string $deck = null;
    /**
     * The departureDescr
     * @var string|null
     */
    protected ?string $departureDescr = null;
    /**
     * The destinationDescr
     * @var string|null
     */
    protected ?string $destinationDescr = null;
    /**
     * The embarkation
     * @var string|null
     */
    protected ?string $embarkation = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The noOfNights
     * @var string|null
     */
    protected ?string $noOfNights = null;
    /**
     * The noOfServices
     * @var string|null
     */
    protected ?string $noOfServices = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
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
     * The returnDepartureDescr
     * @var string|null
     */
    protected ?string $returnDepartureDescr = null;
    /**
     * The returnDestinationDescr
     * @var string|null
     */
    protected ?string $returnDestinationDescr = null;
    /**
     * The returnTransportType
     * @var string|null
     */
    protected ?string $returnTransportType = null;
    /**
     * The route
     * @var string|null
     */
    protected ?string $route = null;
    /**
     * The serviceCode
     * @var string|null
     */
    protected ?string $serviceCode = null;
    /**
     * The serviceDescription
     * @var string|null
     */
    protected ?string $serviceDescription = null;
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
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The transfer
     * @var string|null
     */
    protected ?string $transfer = null;
    /**
     * The vatIncluded
     * @var bool|null
     */
    protected ?bool $vatIncluded = null;
    /**
     * The vehicle
     * @var string|null
     */
    protected ?string $vehicle = null;
    /**
     * The vehicleDimension
     * @var string|null
     */
    protected ?string $vehicleDimension = null;
    /**
     * The vehiclePlateNumber
     * @var string|null
     */
    protected ?string $vehiclePlateNumber = null;
    /**
     * Constructor method for CruiseDetailDTO
     * @uses CruiseDetailDTO::setArrivalTransportType()
     * @uses CruiseDetailDTO::setCabinCode()
     * @uses CruiseDetailDTO::setCabinDescription()
     * @uses CruiseDetailDTO::setCabinNo()
     * @uses CruiseDetailDTO::setCatering()
     * @uses CruiseDetailDTO::setCateringDescription()
     * @uses CruiseDetailDTO::setCountry()
     * @uses CruiseDetailDTO::setCurrency()
     * @uses CruiseDetailDTO::setDebarkation()
     * @uses CruiseDetailDTO::setDeck()
     * @uses CruiseDetailDTO::setDepartureDescr()
     * @uses CruiseDetailDTO::setDestinationDescr()
     * @uses CruiseDetailDTO::setEmbarkation()
     * @uses CruiseDetailDTO::setEndDate()
     * @uses CruiseDetailDTO::setItemId()
     * @uses CruiseDetailDTO::setNoOfNights()
     * @uses CruiseDetailDTO::setNoOfServices()
     * @uses CruiseDetailDTO::setPersonAssignment()
     * @uses CruiseDetailDTO::setPersonsPerService()
     * @uses CruiseDetailDTO::setPosition()
     * @uses CruiseDetailDTO::setReferencePosition()
     * @uses CruiseDetailDTO::setReturnDepartureDescr()
     * @uses CruiseDetailDTO::setReturnDestinationDescr()
     * @uses CruiseDetailDTO::setReturnTransportType()
     * @uses CruiseDetailDTO::setRoute()
     * @uses CruiseDetailDTO::setServiceCode()
     * @uses CruiseDetailDTO::setServiceDescription()
     * @uses CruiseDetailDTO::setServiceName()
     * @uses CruiseDetailDTO::setServiceStatus()
     * @uses CruiseDetailDTO::setStartDate()
     * @uses CruiseDetailDTO::setTotalPrice()
     * @uses CruiseDetailDTO::setTransfer()
     * @uses CruiseDetailDTO::setVatIncluded()
     * @uses CruiseDetailDTO::setVehicle()
     * @uses CruiseDetailDTO::setVehicleDimension()
     * @uses CruiseDetailDTO::setVehiclePlateNumber()
     * @param string $arrivalTransportType
     * @param string $cabinCode
     * @param string $cabinDescription
     * @param string $cabinNo
     * @param string $catering
     * @param string $cateringDescription
     * @param string $country
     * @param string $currency
     * @param string $debarkation
     * @param string $deck
     * @param string $departureDescr
     * @param string $destinationDescr
     * @param string $embarkation
     * @param string $endDate
     * @param int $itemId
     * @param string $noOfNights
     * @param string $noOfServices
     * @param string $personAssignment
     * @param int $personsPerService
     * @param int $position
     * @param int $referencePosition
     * @param string $returnDepartureDescr
     * @param string $returnDestinationDescr
     * @param string $returnTransportType
     * @param string $route
     * @param string $serviceCode
     * @param string $serviceDescription
     * @param string $serviceName
     * @param string $serviceStatus
     * @param string $startDate
     * @param float $totalPrice
     * @param string $transfer
     * @param bool $vatIncluded
     * @param string $vehicle
     * @param string $vehicleDimension
     * @param string $vehiclePlateNumber
     */
    public function __construct(?string $arrivalTransportType = null, ?string $cabinCode = null, ?string $cabinDescription = null, ?string $cabinNo = null, ?string $catering = null, ?string $cateringDescription = null, ?string $country = null, ?string $currency = null, ?string $debarkation = null, ?string $deck = null, ?string $departureDescr = null, ?string $destinationDescr = null, ?string $embarkation = null, ?string $endDate = null, ?int $itemId = null, ?string $noOfNights = null, ?string $noOfServices = null, ?string $personAssignment = null, ?int $personsPerService = null, ?int $position = null, ?int $referencePosition = null, ?string $returnDepartureDescr = null, ?string $returnDestinationDescr = null, ?string $returnTransportType = null, ?string $route = null, ?string $serviceCode = null, ?string $serviceDescription = null, ?string $serviceName = null, ?string $serviceStatus = null, ?string $startDate = null, ?float $totalPrice = null, ?string $transfer = null, ?bool $vatIncluded = null, ?string $vehicle = null, ?string $vehicleDimension = null, ?string $vehiclePlateNumber = null)
    {
        $this
            ->setArrivalTransportType($arrivalTransportType)
            ->setCabinCode($cabinCode)
            ->setCabinDescription($cabinDescription)
            ->setCabinNo($cabinNo)
            ->setCatering($catering)
            ->setCateringDescription($cateringDescription)
            ->setCountry($country)
            ->setCurrency($currency)
            ->setDebarkation($debarkation)
            ->setDeck($deck)
            ->setDepartureDescr($departureDescr)
            ->setDestinationDescr($destinationDescr)
            ->setEmbarkation($embarkation)
            ->setEndDate($endDate)
            ->setItemId($itemId)
            ->setNoOfNights($noOfNights)
            ->setNoOfServices($noOfServices)
            ->setPersonAssignment($personAssignment)
            ->setPersonsPerService($personsPerService)
            ->setPosition($position)
            ->setReferencePosition($referencePosition)
            ->setReturnDepartureDescr($returnDepartureDescr)
            ->setReturnDestinationDescr($returnDestinationDescr)
            ->setReturnTransportType($returnTransportType)
            ->setRoute($route)
            ->setServiceCode($serviceCode)
            ->setServiceDescription($serviceDescription)
            ->setServiceName($serviceName)
            ->setServiceStatus($serviceStatus)
            ->setStartDate($startDate)
            ->setTotalPrice($totalPrice)
            ->setTransfer($transfer)
            ->setVatIncluded($vatIncluded)
            ->setVehicle($vehicle)
            ->setVehicleDimension($vehicleDimension)
            ->setVehiclePlateNumber($vehiclePlateNumber);
    }
    /**
     * Get arrivalTransportType value
     * @return string|null
     */
    public function getArrivalTransportType(): ?string
    {
        return $this->arrivalTransportType;
    }
    /**
     * Set arrivalTransportType value
     * @param string $arrivalTransportType
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setArrivalTransportType(?string $arrivalTransportType = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTransportType) && !is_string($arrivalTransportType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTransportType, true), gettype($arrivalTransportType)), __LINE__);
        }
        $this->arrivalTransportType = $arrivalTransportType;
        
        return $this;
    }
    /**
     * Get cabinCode value
     * @return string|null
     */
    public function getCabinCode(): ?string
    {
        return $this->cabinCode;
    }
    /**
     * Set cabinCode value
     * @param string $cabinCode
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setCabinCode(?string $cabinCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinCode) && !is_string($cabinCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinCode, true), gettype($cabinCode)), __LINE__);
        }
        $this->cabinCode = $cabinCode;
        
        return $this;
    }
    /**
     * Get cabinDescription value
     * @return string|null
     */
    public function getCabinDescription(): ?string
    {
        return $this->cabinDescription;
    }
    /**
     * Set cabinDescription value
     * @param string $cabinDescription
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setCabinDescription(?string $cabinDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinDescription) && !is_string($cabinDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinDescription, true), gettype($cabinDescription)), __LINE__);
        }
        $this->cabinDescription = $cabinDescription;
        
        return $this;
    }
    /**
     * Get cabinNo value
     * @return string|null
     */
    public function getCabinNo(): ?string
    {
        return $this->cabinNo;
    }
    /**
     * Set cabinNo value
     * @param string $cabinNo
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setCabinNo(?string $cabinNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinNo) && !is_string($cabinNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinNo, true), gettype($cabinNo)), __LINE__);
        }
        $this->cabinNo = $cabinNo;
        
        return $this;
    }
    /**
     * Get catering value
     * @return string|null
     */
    public function getCatering(): ?string
    {
        return $this->catering;
    }
    /**
     * Set catering value
     * @param string $catering
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setCatering(?string $catering = null): self
    {
        // validation for constraint: string
        if (!is_null($catering) && !is_string($catering)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catering, true), gettype($catering)), __LINE__);
        }
        $this->catering = $catering;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * Get debarkation value
     * @return string|null
     */
    public function getDebarkation(): ?string
    {
        return $this->debarkation;
    }
    /**
     * Set debarkation value
     * @param string $debarkation
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setDebarkation(?string $debarkation = null): self
    {
        // validation for constraint: string
        if (!is_null($debarkation) && !is_string($debarkation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debarkation, true), gettype($debarkation)), __LINE__);
        }
        $this->debarkation = $debarkation;
        
        return $this;
    }
    /**
     * Get deck value
     * @return string|null
     */
    public function getDeck(): ?string
    {
        return $this->deck;
    }
    /**
     * Set deck value
     * @param string $deck
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setDeck(?string $deck = null): self
    {
        // validation for constraint: string
        if (!is_null($deck) && !is_string($deck)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deck, true), gettype($deck)), __LINE__);
        }
        $this->deck = $deck;
        
        return $this;
    }
    /**
     * Get departureDescr value
     * @return string|null
     */
    public function getDepartureDescr(): ?string
    {
        return $this->departureDescr;
    }
    /**
     * Set departureDescr value
     * @param string $departureDescr
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setDepartureDescr(?string $departureDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDescr) && !is_string($departureDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDescr, true), gettype($departureDescr)), __LINE__);
        }
        $this->departureDescr = $departureDescr;
        
        return $this;
    }
    /**
     * Get destinationDescr value
     * @return string|null
     */
    public function getDestinationDescr(): ?string
    {
        return $this->destinationDescr;
    }
    /**
     * Set destinationDescr value
     * @param string $destinationDescr
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setDestinationDescr(?string $destinationDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationDescr) && !is_string($destinationDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDescr, true), gettype($destinationDescr)), __LINE__);
        }
        $this->destinationDescr = $destinationDescr;
        
        return $this;
    }
    /**
     * Get embarkation value
     * @return string|null
     */
    public function getEmbarkation(): ?string
    {
        return $this->embarkation;
    }
    /**
     * Set embarkation value
     * @param string $embarkation
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setEmbarkation(?string $embarkation = null): self
    {
        // validation for constraint: string
        if (!is_null($embarkation) && !is_string($embarkation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($embarkation, true), gettype($embarkation)), __LINE__);
        }
        $this->embarkation = $embarkation;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * Get noOfNights value
     * @return string|null
     */
    public function getNoOfNights(): ?string
    {
        return $this->noOfNights;
    }
    /**
     * Set noOfNights value
     * @param string $noOfNights
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setNoOfNights(?string $noOfNights = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfNights) && !is_string($noOfNights)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfNights, true), gettype($noOfNights)), __LINE__);
        }
        $this->noOfNights = $noOfNights;
        
        return $this;
    }
    /**
     * Get noOfServices value
     * @return string|null
     */
    public function getNoOfServices(): ?string
    {
        return $this->noOfServices;
    }
    /**
     * Set noOfServices value
     * @param string $noOfServices
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setNoOfServices(?string $noOfServices = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfServices) && !is_string($noOfServices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfServices, true), gettype($noOfServices)), __LINE__);
        }
        $this->noOfServices = $noOfServices;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * Get returnDepartureDescr value
     * @return string|null
     */
    public function getReturnDepartureDescr(): ?string
    {
        return $this->returnDepartureDescr;
    }
    /**
     * Set returnDepartureDescr value
     * @param string $returnDepartureDescr
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setReturnDepartureDescr(?string $returnDepartureDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureDescr) && !is_string($returnDepartureDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureDescr, true), gettype($returnDepartureDescr)), __LINE__);
        }
        $this->returnDepartureDescr = $returnDepartureDescr;
        
        return $this;
    }
    /**
     * Get returnDestinationDescr value
     * @return string|null
     */
    public function getReturnDestinationDescr(): ?string
    {
        return $this->returnDestinationDescr;
    }
    /**
     * Set returnDestinationDescr value
     * @param string $returnDestinationDescr
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setReturnDestinationDescr(?string $returnDestinationDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationDescr) && !is_string($returnDestinationDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationDescr, true), gettype($returnDestinationDescr)), __LINE__);
        }
        $this->returnDestinationDescr = $returnDestinationDescr;
        
        return $this;
    }
    /**
     * Get returnTransportType value
     * @return string|null
     */
    public function getReturnTransportType(): ?string
    {
        return $this->returnTransportType;
    }
    /**
     * Set returnTransportType value
     * @param string $returnTransportType
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setReturnTransportType(?string $returnTransportType = null): self
    {
        // validation for constraint: string
        if (!is_null($returnTransportType) && !is_string($returnTransportType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnTransportType, true), gettype($returnTransportType)), __LINE__);
        }
        $this->returnTransportType = $returnTransportType;
        
        return $this;
    }
    /**
     * Get route value
     * @return string|null
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param string $route
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setRoute(?string $route = null): self
    {
        // validation for constraint: string
        if (!is_null($route) && !is_string($route)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($route, true), gettype($route)), __LINE__);
        }
        $this->route = $route;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
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
     * Get transfer value
     * @return string|null
     */
    public function getTransfer(): ?string
    {
        return $this->transfer;
    }
    /**
     * Set transfer value
     * @param string $transfer
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setTransfer(?string $transfer = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer) && !is_string($transfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer, true), gettype($transfer)), __LINE__);
        }
        $this->transfer = $transfer;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setVatIncluded(?bool $vatIncluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIncluded) && !is_bool($vatIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->vatIncluded = $vatIncluded;
        
        return $this;
    }
    /**
     * Get vehicle value
     * @return string|null
     */
    public function getVehicle(): ?string
    {
        return $this->vehicle;
    }
    /**
     * Set vehicle value
     * @param string $vehicle
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setVehicle(?string $vehicle = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicle) && !is_string($vehicle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle, true), gettype($vehicle)), __LINE__);
        }
        $this->vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get vehicleDimension value
     * @return string|null
     */
    public function getVehicleDimension(): ?string
    {
        return $this->vehicleDimension;
    }
    /**
     * Set vehicleDimension value
     * @param string $vehicleDimension
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setVehicleDimension(?string $vehicleDimension = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleDimension) && !is_string($vehicleDimension)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleDimension, true), gettype($vehicleDimension)), __LINE__);
        }
        $this->vehicleDimension = $vehicleDimension;
        
        return $this;
    }
    /**
     * Get vehiclePlateNumber value
     * @return string|null
     */
    public function getVehiclePlateNumber(): ?string
    {
        return $this->vehiclePlateNumber;
    }
    /**
     * Set vehiclePlateNumber value
     * @param string $vehiclePlateNumber
     * @return \Pggns\MidocoApi\Order\StructType\CruiseDetailDTO
     */
    public function setVehiclePlateNumber(?string $vehiclePlateNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($vehiclePlateNumber) && !is_string($vehiclePlateNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehiclePlateNumber, true), gettype($vehiclePlateNumber)), __LINE__);
        }
        $this->vehiclePlateNumber = $vehiclePlateNumber;
        
        return $this;
    }
}
