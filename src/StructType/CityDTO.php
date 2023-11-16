<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityDTO StructType
 * @subpackage Structs
 */
class CityDTO extends AbstractStructBase
{
    /**
     * The cityName
     * @var string|null
     */
    protected ?string $cityName = null;
    /**
     * The countryId
     * @var string|null
     */
    protected ?string $countryId = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The telPrefix
     * @var string|null
     */
    protected ?string $telPrefix = null;
    /**
     * The zipCode
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * Constructor method for CityDTO
     * @uses CityDTO::setCityName()
     * @uses CityDTO::setCountryId()
     * @uses CityDTO::setState()
     * @uses CityDTO::setTelPrefix()
     * @uses CityDTO::setZipCode()
     * @param string $cityName
     * @param string $countryId
     * @param string $state
     * @param string $telPrefix
     * @param string $zipCode
     */
    public function __construct(?string $cityName = null, ?string $countryId = null, ?string $state = null, ?string $telPrefix = null, ?string $zipCode = null)
    {
        $this
            ->setCityName($cityName)
            ->setCountryId($countryId)
            ->setState($state)
            ->setTelPrefix($telPrefix)
            ->setZipCode($zipCode);
    }
    /**
     * Get cityName value
     * @return string|null
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }
    /**
     * Set cityName value
     * @param string $cityName
     * @return \Pggns\MidocoApi\Order\StructType\CityDTO
     */
    public function setCityName(?string $cityName = null): self
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityName, true), gettype($cityName)), __LINE__);
        }
        $this->cityName = $cityName;
        
        return $this;
    }
    /**
     * Get countryId value
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param string $countryId
     * @return \Pggns\MidocoApi\Order\StructType\CityDTO
     */
    public function setCountryId(?string $countryId = null): self
    {
        // validation for constraint: string
        if (!is_null($countryId) && !is_string($countryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Pggns\MidocoApi\Order\StructType\CityDTO
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get telPrefix value
     * @return string|null
     */
    public function getTelPrefix(): ?string
    {
        return $this->telPrefix;
    }
    /**
     * Set telPrefix value
     * @param string $telPrefix
     * @return \Pggns\MidocoApi\Order\StructType\CityDTO
     */
    public function setTelPrefix(?string $telPrefix = null): self
    {
        // validation for constraint: string
        if (!is_null($telPrefix) && !is_string($telPrefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telPrefix, true), gettype($telPrefix)), __LINE__);
        }
        $this->telPrefix = $telPrefix;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Pggns\MidocoApi\Order\StructType\CityDTO
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
}
