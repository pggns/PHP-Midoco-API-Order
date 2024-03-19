<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelCmDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TravelCmDTO extends AbstractStructBase
{
    /**
     * The area
     * @var string|null
     */
    protected ?string $area = null;
    /**
     * The category
     * @var float|null
     */
    protected ?float $category = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The countryDesc
     * @var string|null
     */
    protected ?string $countryDesc = null;
    /**
     * The errorInfo
     * @var string|null
     */
    protected ?string $errorInfo = null;
    /**
     * The hotelChain
     * @var string|null
     */
    protected ?string $hotelChain = null;
    /**
     * The hotelCode
     * @var string|null
     */
    protected ?string $hotelCode = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The latitude
     * @var float|null
     */
    protected ?float $latitude = null;
    /**
     * The location
     * @var string|null
     */
    protected ?string $location = null;
    /**
     * The longitude
     * @var float|null
     */
    protected ?float $longitude = null;
    /**
     * The opicCode
     * @var int|null
     */
    protected ?int $opicCode = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The provider
     * @var string|null
     */
    protected ?string $provider = null;
    /**
     * The region
     * @var string|null
     */
    protected ?string $region = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetNo
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The travelType
     * @var int|null
     */
    protected ?int $travelType = null;
    /**
     * Constructor method for TravelCmDTO
     * @uses TravelCmDTO::setArea()
     * @uses TravelCmDTO::setCategory()
     * @uses TravelCmDTO::setCity()
     * @uses TravelCmDTO::setCountryCode()
     * @uses TravelCmDTO::setCountryDesc()
     * @uses TravelCmDTO::setErrorInfo()
     * @uses TravelCmDTO::setHotelChain()
     * @uses TravelCmDTO::setHotelCode()
     * @uses TravelCmDTO::setHotelName()
     * @uses TravelCmDTO::setItemId()
     * @uses TravelCmDTO::setLatitude()
     * @uses TravelCmDTO::setLocation()
     * @uses TravelCmDTO::setLongitude()
     * @uses TravelCmDTO::setOpicCode()
     * @uses TravelCmDTO::setPostalCode()
     * @uses TravelCmDTO::setProvider()
     * @uses TravelCmDTO::setRegion()
     * @uses TravelCmDTO::setStatus()
     * @uses TravelCmDTO::setStreet()
     * @uses TravelCmDTO::setStreetNo()
     * @uses TravelCmDTO::setTravelType()
     * @param string $area
     * @param float $category
     * @param string $city
     * @param string $countryCode
     * @param string $countryDesc
     * @param string $errorInfo
     * @param string $hotelChain
     * @param string $hotelCode
     * @param string $hotelName
     * @param int $itemId
     * @param float $latitude
     * @param string $location
     * @param float $longitude
     * @param int $opicCode
     * @param string $postalCode
     * @param string $provider
     * @param string $region
     * @param string $status
     * @param string $street
     * @param string $streetNo
     * @param int $travelType
     */
    public function __construct(?string $area = null, ?float $category = null, ?string $city = null, ?string $countryCode = null, ?string $countryDesc = null, ?string $errorInfo = null, ?string $hotelChain = null, ?string $hotelCode = null, ?string $hotelName = null, ?int $itemId = null, ?float $latitude = null, ?string $location = null, ?float $longitude = null, ?int $opicCode = null, ?string $postalCode = null, ?string $provider = null, ?string $region = null, ?string $status = null, ?string $street = null, ?string $streetNo = null, ?int $travelType = null)
    {
        $this
            ->setArea($area)
            ->setCategory($category)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setCountryDesc($countryDesc)
            ->setErrorInfo($errorInfo)
            ->setHotelChain($hotelChain)
            ->setHotelCode($hotelCode)
            ->setHotelName($hotelName)
            ->setItemId($itemId)
            ->setLatitude($latitude)
            ->setLocation($location)
            ->setLongitude($longitude)
            ->setOpicCode($opicCode)
            ->setPostalCode($postalCode)
            ->setProvider($provider)
            ->setRegion($region)
            ->setStatus($status)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setTravelType($travelType);
    }
    /**
     * Get area value
     * @return string|null
     */
    public function getArea(): ?string
    {
        return $this->area;
    }
    /**
     * Set area value
     * @param string $area
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setArea(?string $area = null): self
    {
        // validation for constraint: string
        if (!is_null($area) && !is_string($area)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area, true), gettype($area)), __LINE__);
        }
        $this->area = $area;
        
        return $this;
    }
    /**
     * Get category value
     * @return float|null
     */
    public function getCategory(): ?float
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param float $category
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setCategory(?float $category = null): self
    {
        // validation for constraint: float
        if (!is_null($category) && !(is_float($category) || is_numeric($category))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get countryDesc value
     * @return string|null
     */
    public function getCountryDesc(): ?string
    {
        return $this->countryDesc;
    }
    /**
     * Set countryDesc value
     * @param string $countryDesc
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setCountryDesc(?string $countryDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($countryDesc) && !is_string($countryDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryDesc, true), gettype($countryDesc)), __LINE__);
        }
        $this->countryDesc = $countryDesc;
        
        return $this;
    }
    /**
     * Get errorInfo value
     * @return string|null
     */
    public function getErrorInfo(): ?string
    {
        return $this->errorInfo;
    }
    /**
     * Set errorInfo value
     * @param string $errorInfo
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setErrorInfo(?string $errorInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($errorInfo) && !is_string($errorInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorInfo, true), gettype($errorInfo)), __LINE__);
        }
        $this->errorInfo = $errorInfo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
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
     * Get hotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->hotelCode;
    }
    /**
     * Set hotelCode value
     * @param string $hotelCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        $this->hotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get hotelName value
     * @return string|null
     */
    public function getHotelName(): ?string
    {
        return $this->hotelName;
    }
    /**
     * Set hotelName value
     * @param string $hotelName
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setHotelName(?string $hotelName = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelName, true), gettype($hotelName)), __LINE__);
        }
        $this->hotelName = $hotelName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
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
     * Get latitude value
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param float $latitude
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setLatitude(?float $latitude = null): self
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;
        
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->location = $location;
        
        return $this;
    }
    /**
     * Get longitude value
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param float $longitude
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setLongitude(?float $longitude = null): self
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;
        
        return $this;
    }
    /**
     * Get opicCode value
     * @return int|null
     */
    public function getOpicCode(): ?int
    {
        return $this->opicCode;
    }
    /**
     * Set opicCode value
     * @param int $opicCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setOpicCode(?int $opicCode = null): self
    {
        // validation for constraint: int
        if (!is_null($opicCode) && !(is_int($opicCode) || ctype_digit($opicCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($opicCode, true), gettype($opicCode)), __LINE__);
        }
        $this->opicCode = $opicCode;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get provider value
     * @return string|null
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }
    /**
     * Set provider value
     * @param string $provider
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setProvider(?string $provider = null): self
    {
        // validation for constraint: string
        if (!is_null($provider) && !is_string($provider)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provider, true), gettype($provider)), __LINE__);
        }
        $this->provider = $provider;
        
        return $this;
    }
    /**
     * Get region value
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }
    /**
     * Set region value
     * @param string $region
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setRegion(?string $region = null): self
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region, true), gettype($region)), __LINE__);
        }
        $this->region = $region;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->streetNo = $streetNo;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return int|null
     */
    public function getTravelType(): ?int
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param int $travelType
     * @return \Pggns\MidocoApi\Order\StructType\TravelCmDTO
     */
    public function setTravelType(?int $travelType = null): self
    {
        // validation for constraint: int
        if (!is_null($travelType) && !(is_int($travelType) || ctype_digit($travelType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
}
