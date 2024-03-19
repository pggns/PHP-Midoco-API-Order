<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressValidateDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressValidateDTO extends AbstractStructBase
{
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
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * Constructor method for AddressValidateDTO
     * @uses AddressValidateDTO::setStreet()
     * @uses AddressValidateDTO::setStreetNo()
     * @uses AddressValidateDTO::setPostalCode()
     * @uses AddressValidateDTO::setCity()
     * @uses AddressValidateDTO::setCountry()
     * @param string $street
     * @param string $streetNo
     * @param string $postalCode
     * @param string $city
     * @param string $country
     */
    public function __construct(?string $street = null, ?string $streetNo = null, ?string $postalCode = null, ?string $city = null, ?string $country = null)
    {
        $this
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setPostalCode($postalCode)
            ->setCity($city)
            ->setCountry($country);
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
     * @return \Pggns\MidocoApi\Order\StructType\AddressValidateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AddressValidateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AddressValidateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AddressValidateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AddressValidateDTO
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
}
