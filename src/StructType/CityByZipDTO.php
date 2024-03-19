<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityByZipDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CityByZipDTO extends AbstractStructBase
{
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The zipCode
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * Constructor method for CityByZipDTO
     * @uses CityByZipDTO::setCountryCode()
     * @uses CityByZipDTO::setZipCode()
     * @param string $countryCode
     * @param string $zipCode
     */
    public function __construct(?string $countryCode = null, ?string $zipCode = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setZipCode($zipCode);
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
     * @return \Pggns\MidocoApi\Order\StructType\CityByZipDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CityByZipDTO
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
