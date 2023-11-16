<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmAddressPhoneticDTO StructType
 * @subpackage Structs
 */
class CrmAddressPhoneticDTO extends AbstractStructBase
{
    /**
     * The addressId
     * @var int|null
     */
    protected ?int $addressId = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The exactCity
     * @var string|null
     */
    protected ?string $exactCity = null;
    /**
     * The exactStreet
     * @var string|null
     */
    protected ?string $exactStreet = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * Constructor method for CrmAddressPhoneticDTO
     * @uses CrmAddressPhoneticDTO::setAddressId()
     * @uses CrmAddressPhoneticDTO::setCity()
     * @uses CrmAddressPhoneticDTO::setExactCity()
     * @uses CrmAddressPhoneticDTO::setExactStreet()
     * @uses CrmAddressPhoneticDTO::setStreet()
     * @param int $addressId
     * @param string $city
     * @param string $exactCity
     * @param string $exactStreet
     * @param string $street
     */
    public function __construct(?int $addressId = null, ?string $city = null, ?string $exactCity = null, ?string $exactStreet = null, ?string $street = null)
    {
        $this
            ->setAddressId($addressId)
            ->setCity($city)
            ->setExactCity($exactCity)
            ->setExactStreet($exactStreet)
            ->setStreet($street);
    }
    /**
     * Get addressId value
     * @return int|null
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \Pggns\MidocoApi\Order\StructType\CrmAddressPhoneticDTO
     */
    public function setAddressId(?int $addressId = null): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmAddressPhoneticDTO
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
     * Get exactCity value
     * @return string|null
     */
    public function getExactCity(): ?string
    {
        return $this->exactCity;
    }
    /**
     * Set exactCity value
     * @param string $exactCity
     * @return \Pggns\MidocoApi\Order\StructType\CrmAddressPhoneticDTO
     */
    public function setExactCity(?string $exactCity = null): self
    {
        // validation for constraint: string
        if (!is_null($exactCity) && !is_string($exactCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactCity, true), gettype($exactCity)), __LINE__);
        }
        $this->exactCity = $exactCity;
        
        return $this;
    }
    /**
     * Get exactStreet value
     * @return string|null
     */
    public function getExactStreet(): ?string
    {
        return $this->exactStreet;
    }
    /**
     * Set exactStreet value
     * @param string $exactStreet
     * @return \Pggns\MidocoApi\Order\StructType\CrmAddressPhoneticDTO
     */
    public function setExactStreet(?string $exactStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($exactStreet) && !is_string($exactStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactStreet, true), gettype($exactStreet)), __LINE__);
        }
        $this->exactStreet = $exactStreet;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmAddressPhoneticDTO
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
}
