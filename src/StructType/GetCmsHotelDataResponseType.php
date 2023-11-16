<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCmsHotelDataResponseType StructType
 * @subpackage Structs
 */
class GetCmsHotelDataResponseType extends AbstractStructBase
{
    /**
     * The attributes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Attributes|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Attributes $attributes = null;
    /**
     * The pictures
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Pictures|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Pictures $pictures = null;
    /**
     * The hotelname
     * @var string|null
     */
    protected ?string $hotelname = null;
    /**
     * The category
     * @var float|null
     */
    protected ?float $category = null;
    /**
     * The opic
     * @var int|null
     */
    protected ?int $opic = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The region
     * @var string|null
     */
    protected ?string $region = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The countrycode
     * @var string|null
     */
    protected ?string $countrycode = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The savedWithStatusOk
     * @var bool|null
     */
    protected ?bool $savedWithStatusOk = null;
    /**
     * The countSavedAttributes
     * @var int|null
     */
    protected ?int $countSavedAttributes = null;
    /**
     * Constructor method for GetCmsHotelDataResponseType
     * @uses GetCmsHotelDataResponseType::setAttributes()
     * @uses GetCmsHotelDataResponseType::setPictures()
     * @uses GetCmsHotelDataResponseType::setHotelname()
     * @uses GetCmsHotelDataResponseType::setCategory()
     * @uses GetCmsHotelDataResponseType::setOpic()
     * @uses GetCmsHotelDataResponseType::setDestination()
     * @uses GetCmsHotelDataResponseType::setRegion()
     * @uses GetCmsHotelDataResponseType::setCountry()
     * @uses GetCmsHotelDataResponseType::setCountrycode()
     * @uses GetCmsHotelDataResponseType::setCity()
     * @uses GetCmsHotelDataResponseType::setSavedWithStatusOk()
     * @uses GetCmsHotelDataResponseType::setCountSavedAttributes()
     * @param \Pggns\MidocoApi\Order\StructType\Attributes $attributes
     * @param \Pggns\MidocoApi\Order\StructType\Pictures $pictures
     * @param string $hotelname
     * @param float $category
     * @param int $opic
     * @param string $destination
     * @param string $region
     * @param string $country
     * @param string $countrycode
     * @param string $city
     * @param bool $savedWithStatusOk
     * @param int $countSavedAttributes
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\Attributes $attributes = null, ?\Pggns\MidocoApi\Order\StructType\Pictures $pictures = null, ?string $hotelname = null, ?float $category = null, ?int $opic = null, ?string $destination = null, ?string $region = null, ?string $country = null, ?string $countrycode = null, ?string $city = null, ?bool $savedWithStatusOk = null, ?int $countSavedAttributes = null)
    {
        $this
            ->setAttributes($attributes)
            ->setPictures($pictures)
            ->setHotelname($hotelname)
            ->setCategory($category)
            ->setOpic($opic)
            ->setDestination($destination)
            ->setRegion($region)
            ->setCountry($country)
            ->setCountrycode($countrycode)
            ->setCity($city)
            ->setSavedWithStatusOk($savedWithStatusOk)
            ->setCountSavedAttributes($countSavedAttributes);
    }
    /**
     * Get attributes value
     * @return \Pggns\MidocoApi\Order\StructType\Attributes|null
     */
    public function getAttributes(): ?\Pggns\MidocoApi\Order\StructType\Attributes
    {
        return $this->attributes;
    }
    /**
     * Set attributes value
     * @param \Pggns\MidocoApi\Order\StructType\Attributes $attributes
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
     */
    public function setAttributes(?\Pggns\MidocoApi\Order\StructType\Attributes $attributes = null): self
    {
        $this->attributes = $attributes;
        
        return $this;
    }
    /**
     * Get pictures value
     * @return \Pggns\MidocoApi\Order\StructType\Pictures|null
     */
    public function getPictures(): ?\Pggns\MidocoApi\Order\StructType\Pictures
    {
        return $this->pictures;
    }
    /**
     * Set pictures value
     * @param \Pggns\MidocoApi\Order\StructType\Pictures $pictures
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
     */
    public function setPictures(?\Pggns\MidocoApi\Order\StructType\Pictures $pictures = null): self
    {
        $this->pictures = $pictures;
        
        return $this;
    }
    /**
     * Get hotelname value
     * @return string|null
     */
    public function getHotelname(): ?string
    {
        return $this->hotelname;
    }
    /**
     * Set hotelname value
     * @param string $hotelname
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
     */
    public function setHotelname(?string $hotelname = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelname) && !is_string($hotelname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelname, true), gettype($hotelname)), __LINE__);
        }
        $this->hotelname = $hotelname;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
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
     * Get opic value
     * @return int|null
     */
    public function getOpic(): ?int
    {
        return $this->opic;
    }
    /**
     * Set opic value
     * @param int $opic
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
     */
    public function setOpic(?int $opic = null): self
    {
        // validation for constraint: int
        if (!is_null($opic) && !(is_int($opic) || ctype_digit($opic))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($opic, true), gettype($opic)), __LINE__);
        }
        $this->opic = $opic;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
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
     * Get countrycode value
     * @return string|null
     */
    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }
    /**
     * Set countrycode value
     * @param string $countrycode
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
     */
    public function setCountrycode(?string $countrycode = null): self
    {
        // validation for constraint: string
        if (!is_null($countrycode) && !is_string($countrycode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countrycode, true), gettype($countrycode)), __LINE__);
        }
        $this->countrycode = $countrycode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
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
     * Get savedWithStatusOk value
     * @return bool|null
     */
    public function getSavedWithStatusOk(): ?bool
    {
        return $this->savedWithStatusOk;
    }
    /**
     * Set savedWithStatusOk value
     * @param bool $savedWithStatusOk
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
     */
    public function setSavedWithStatusOk(?bool $savedWithStatusOk = null): self
    {
        // validation for constraint: boolean
        if (!is_null($savedWithStatusOk) && !is_bool($savedWithStatusOk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($savedWithStatusOk, true), gettype($savedWithStatusOk)), __LINE__);
        }
        $this->savedWithStatusOk = $savedWithStatusOk;
        
        return $this;
    }
    /**
     * Get countSavedAttributes value
     * @return int|null
     */
    public function getCountSavedAttributes(): ?int
    {
        return $this->countSavedAttributes;
    }
    /**
     * Set countSavedAttributes value
     * @param int $countSavedAttributes
     * @return \Pggns\MidocoApi\Order\StructType\GetCmsHotelDataResponseType
     */
    public function setCountSavedAttributes(?int $countSavedAttributes = null): self
    {
        // validation for constraint: int
        if (!is_null($countSavedAttributes) && !(is_int($countSavedAttributes) || ctype_digit($countSavedAttributes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countSavedAttributes, true), gettype($countSavedAttributes)), __LINE__);
        }
        $this->countSavedAttributes = $countSavedAttributes;
        
        return $this;
    }
}
