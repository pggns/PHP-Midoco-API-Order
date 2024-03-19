<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccomodationDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccomodationDetailDTO extends AbstractStructBase
{
    /**
     * The accomodation
     * @var string|null
     */
    protected ?string $accomodation = null;
    /**
     * The accomodationDescription
     * @var string|null
     */
    protected ?string $accomodationDescription = null;
    /**
     * The addressLine1
     * @var string|null
     */
    protected ?string $addressLine1 = null;
    /**
     * The addressLine2
     * @var string|null
     */
    protected ?string $addressLine2 = null;
    /**
     * The addressLine3
     * @var string|null
     */
    protected ?string $addressLine3 = null;
    /**
     * The addressLine4
     * @var string|null
     */
    protected ?string $addressLine4 = null;
    /**
     * The airportCode
     * @var string|null
     */
    protected ?string $airportCode = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
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
     * The corporateDiscount
     * @var string|null
     */
    protected ?string $corporateDiscount = null;
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
     * The emergencyNumber
     * @var string|null
     */
    protected ?string $emergencyNumber = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The hotelChain
     * @var string|null
     */
    protected ?string $hotelChain = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The locationDescription
     * @var string|null
     */
    protected ?string $locationDescription = null;
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
     * Constructor method for AccomodationDetailDTO
     * @uses AccomodationDetailDTO::setAccomodation()
     * @uses AccomodationDetailDTO::setAccomodationDescription()
     * @uses AccomodationDetailDTO::setAddressLine1()
     * @uses AccomodationDetailDTO::setAddressLine2()
     * @uses AccomodationDetailDTO::setAddressLine3()
     * @uses AccomodationDetailDTO::setAddressLine4()
     * @uses AccomodationDetailDTO::setAirportCode()
     * @uses AccomodationDetailDTO::setCategory()
     * @uses AccomodationDetailDTO::setCatering()
     * @uses AccomodationDetailDTO::setCateringDescription()
     * @uses AccomodationDetailDTO::setCorporateDiscount()
     * @uses AccomodationDetailDTO::setCountry()
     * @uses AccomodationDetailDTO::setCurrency()
     * @uses AccomodationDetailDTO::setEmergencyNumber()
     * @uses AccomodationDetailDTO::setEndDate()
     * @uses AccomodationDetailDTO::setHotelChain()
     * @uses AccomodationDetailDTO::setItemId()
     * @uses AccomodationDetailDTO::setLocationDescription()
     * @uses AccomodationDetailDTO::setNoOfNights()
     * @uses AccomodationDetailDTO::setNoOfServices()
     * @uses AccomodationDetailDTO::setPersonAssignment()
     * @uses AccomodationDetailDTO::setPersonsPerService()
     * @uses AccomodationDetailDTO::setPosition()
     * @uses AccomodationDetailDTO::setReferencePosition()
     * @uses AccomodationDetailDTO::setServiceCode()
     * @uses AccomodationDetailDTO::setServiceDescription()
     * @uses AccomodationDetailDTO::setServiceName()
     * @uses AccomodationDetailDTO::setServiceStatus()
     * @uses AccomodationDetailDTO::setStartDate()
     * @uses AccomodationDetailDTO::setTotalPrice()
     * @uses AccomodationDetailDTO::setTransfer()
     * @uses AccomodationDetailDTO::setVatIncluded()
     * @param string $accomodation
     * @param string $accomodationDescription
     * @param string $addressLine1
     * @param string $addressLine2
     * @param string $addressLine3
     * @param string $addressLine4
     * @param string $airportCode
     * @param string $category
     * @param string $catering
     * @param string $cateringDescription
     * @param string $corporateDiscount
     * @param string $country
     * @param string $currency
     * @param string $emergencyNumber
     * @param string $endDate
     * @param string $hotelChain
     * @param int $itemId
     * @param string $locationDescription
     * @param string $noOfNights
     * @param string $noOfServices
     * @param string $personAssignment
     * @param int $personsPerService
     * @param int $position
     * @param int $referencePosition
     * @param string $serviceCode
     * @param string $serviceDescription
     * @param string $serviceName
     * @param string $serviceStatus
     * @param string $startDate
     * @param float $totalPrice
     * @param string $transfer
     * @param bool $vatIncluded
     */
    public function __construct(?string $accomodation = null, ?string $accomodationDescription = null, ?string $addressLine1 = null, ?string $addressLine2 = null, ?string $addressLine3 = null, ?string $addressLine4 = null, ?string $airportCode = null, ?string $category = null, ?string $catering = null, ?string $cateringDescription = null, ?string $corporateDiscount = null, ?string $country = null, ?string $currency = null, ?string $emergencyNumber = null, ?string $endDate = null, ?string $hotelChain = null, ?int $itemId = null, ?string $locationDescription = null, ?string $noOfNights = null, ?string $noOfServices = null, ?string $personAssignment = null, ?int $personsPerService = null, ?int $position = null, ?int $referencePosition = null, ?string $serviceCode = null, ?string $serviceDescription = null, ?string $serviceName = null, ?string $serviceStatus = null, ?string $startDate = null, ?float $totalPrice = null, ?string $transfer = null, ?bool $vatIncluded = null)
    {
        $this
            ->setAccomodation($accomodation)
            ->setAccomodationDescription($accomodationDescription)
            ->setAddressLine1($addressLine1)
            ->setAddressLine2($addressLine2)
            ->setAddressLine3($addressLine3)
            ->setAddressLine4($addressLine4)
            ->setAirportCode($airportCode)
            ->setCategory($category)
            ->setCatering($catering)
            ->setCateringDescription($cateringDescription)
            ->setCorporateDiscount($corporateDiscount)
            ->setCountry($country)
            ->setCurrency($currency)
            ->setEmergencyNumber($emergencyNumber)
            ->setEndDate($endDate)
            ->setHotelChain($hotelChain)
            ->setItemId($itemId)
            ->setLocationDescription($locationDescription)
            ->setNoOfNights($noOfNights)
            ->setNoOfServices($noOfServices)
            ->setPersonAssignment($personAssignment)
            ->setPersonsPerService($personsPerService)
            ->setPosition($position)
            ->setReferencePosition($referencePosition)
            ->setServiceCode($serviceCode)
            ->setServiceDescription($serviceDescription)
            ->setServiceName($serviceName)
            ->setServiceStatus($serviceStatus)
            ->setStartDate($startDate)
            ->setTotalPrice($totalPrice)
            ->setTransfer($transfer)
            ->setVatIncluded($vatIncluded);
    }
    /**
     * Get accomodation value
     * @return string|null
     */
    public function getAccomodation(): ?string
    {
        return $this->accomodation;
    }
    /**
     * Set accomodation value
     * @param string $accomodation
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setAccomodation(?string $accomodation = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation) && !is_string($accomodation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation, true), gettype($accomodation)), __LINE__);
        }
        $this->accomodation = $accomodation;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * Get addressLine1 value
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }
    /**
     * Set addressLine1 value
     * @param string $addressLine1
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setAddressLine1(?string $addressLine1 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLine1) && !is_string($addressLine1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine1, true), gettype($addressLine1)), __LINE__);
        }
        $this->addressLine1 = $addressLine1;
        
        return $this;
    }
    /**
     * Get addressLine2 value
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }
    /**
     * Set addressLine2 value
     * @param string $addressLine2
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setAddressLine2(?string $addressLine2 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLine2) && !is_string($addressLine2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine2, true), gettype($addressLine2)), __LINE__);
        }
        $this->addressLine2 = $addressLine2;
        
        return $this;
    }
    /**
     * Get addressLine3 value
     * @return string|null
     */
    public function getAddressLine3(): ?string
    {
        return $this->addressLine3;
    }
    /**
     * Set addressLine3 value
     * @param string $addressLine3
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setAddressLine3(?string $addressLine3 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLine3) && !is_string($addressLine3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine3, true), gettype($addressLine3)), __LINE__);
        }
        $this->addressLine3 = $addressLine3;
        
        return $this;
    }
    /**
     * Get addressLine4 value
     * @return string|null
     */
    public function getAddressLine4(): ?string
    {
        return $this->addressLine4;
    }
    /**
     * Set addressLine4 value
     * @param string $addressLine4
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setAddressLine4(?string $addressLine4 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressLine4) && !is_string($addressLine4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressLine4, true), gettype($addressLine4)), __LINE__);
        }
        $this->addressLine4 = $addressLine4;
        
        return $this;
    }
    /**
     * Get airportCode value
     * @return string|null
     */
    public function getAirportCode(): ?string
    {
        return $this->airportCode;
    }
    /**
     * Set airportCode value
     * @param string $airportCode
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setAirportCode(?string $airportCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airportCode, true), gettype($airportCode)), __LINE__);
        }
        $this->airportCode = $airportCode;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * Get corporateDiscount value
     * @return string|null
     */
    public function getCorporateDiscount(): ?string
    {
        return $this->corporateDiscount;
    }
    /**
     * Set corporateDiscount value
     * @param string $corporateDiscount
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setCorporateDiscount(?string $corporateDiscount = null): self
    {
        // validation for constraint: string
        if (!is_null($corporateDiscount) && !is_string($corporateDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporateDiscount, true), gettype($corporateDiscount)), __LINE__);
        }
        $this->corporateDiscount = $corporateDiscount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * Get hotelChain value
     * @return string|null
     */
    public function getHotelChain(): ?string
    {
        return $this->hotelChain;
    }
    /**
     * Set hotelChain value
     * @param string $hotelChain
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setHotelChain(?string $hotelChain = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelChain) && !is_string($hotelChain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelChain, true), gettype($hotelChain)), __LINE__);
        }
        $this->hotelChain = $hotelChain;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * Get locationDescription value
     * @return string|null
     */
    public function getLocationDescription(): ?string
    {
        return $this->locationDescription;
    }
    /**
     * Set locationDescription value
     * @param string $locationDescription
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
     */
    public function setLocationDescription(?string $locationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($locationDescription) && !is_string($locationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationDescription, true), gettype($locationDescription)), __LINE__);
        }
        $this->locationDescription = $locationDescription;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AccomodationDetailDTO
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
}
