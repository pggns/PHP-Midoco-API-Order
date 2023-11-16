<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityNameDTO StructType
 * @subpackage Structs
 */
class CityNameDTO extends AbstractStructBase
{
    /**
     * The cityLocalizedName
     * @var string|null
     */
    protected ?string $cityLocalizedName = null;
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
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The zipCode
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * Constructor method for CityNameDTO
     * @uses CityNameDTO::setCityLocalizedName()
     * @uses CityNameDTO::setCityName()
     * @uses CityNameDTO::setCountryId()
     * @uses CityNameDTO::setCultureId()
     * @uses CityNameDTO::setZipCode()
     * @param string $cityLocalizedName
     * @param string $cityName
     * @param string $countryId
     * @param string $cultureId
     * @param string $zipCode
     */
    public function __construct(?string $cityLocalizedName = null, ?string $cityName = null, ?string $countryId = null, ?string $cultureId = null, ?string $zipCode = null)
    {
        $this
            ->setCityLocalizedName($cityLocalizedName)
            ->setCityName($cityName)
            ->setCountryId($countryId)
            ->setCultureId($cultureId)
            ->setZipCode($zipCode);
    }
    /**
     * Get cityLocalizedName value
     * @return string|null
     */
    public function getCityLocalizedName(): ?string
    {
        return $this->cityLocalizedName;
    }
    /**
     * Set cityLocalizedName value
     * @param string $cityLocalizedName
     * @return \Pggns\MidocoApi\Order\StructType\CityNameDTO
     */
    public function setCityLocalizedName(?string $cityLocalizedName = null): self
    {
        // validation for constraint: string
        if (!is_null($cityLocalizedName) && !is_string($cityLocalizedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityLocalizedName, true), gettype($cityLocalizedName)), __LINE__);
        }
        $this->cityLocalizedName = $cityLocalizedName;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\CityNameDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CityNameDTO
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
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\CityNameDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CityNameDTO
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
