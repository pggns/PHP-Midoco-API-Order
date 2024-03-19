<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirportCodeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AirportCodeDTO extends AbstractStructBase
{
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * Constructor method for AirportCodeDTO
     * @uses AirportCodeDTO::setCity()
     * @uses AirportCodeDTO::setCode()
     * @uses AirportCodeDTO::setCountry()
     * @param string $city
     * @param string $code
     * @param string $country
     */
    public function __construct(?string $city = null, ?string $code = null, ?string $country = null)
    {
        $this
            ->setCity($city)
            ->setCode($code)
            ->setCountry($country);
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
     * @return \Pggns\MidocoApi\Order\StructType\AirportCodeDTO
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
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\AirportCodeDTO
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AirportCodeDTO
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
