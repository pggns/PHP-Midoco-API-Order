<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryNameDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CountryNameDTO extends AbstractStructBase
{
    /**
     * The countryId
     * @var string|null
     */
    protected ?string $countryId = null;
    /**
     * The countryLocalized
     * @var string|null
     */
    protected ?string $countryLocalized = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * Constructor method for CountryNameDTO
     * @uses CountryNameDTO::setCountryId()
     * @uses CountryNameDTO::setCountryLocalized()
     * @uses CountryNameDTO::setCultureId()
     * @param string $countryId
     * @param string $countryLocalized
     * @param string $cultureId
     */
    public function __construct(?string $countryId = null, ?string $countryLocalized = null, ?string $cultureId = null)
    {
        $this
            ->setCountryId($countryId)
            ->setCountryLocalized($countryLocalized)
            ->setCultureId($cultureId);
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
     * @return \Pggns\MidocoApi\Order\StructType\CountryNameDTO
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
     * Get countryLocalized value
     * @return string|null
     */
    public function getCountryLocalized(): ?string
    {
        return $this->countryLocalized;
    }
    /**
     * Set countryLocalized value
     * @param string $countryLocalized
     * @return \Pggns\MidocoApi\Order\StructType\CountryNameDTO
     */
    public function setCountryLocalized(?string $countryLocalized = null): self
    {
        // validation for constraint: string
        if (!is_null($countryLocalized) && !is_string($countryLocalized)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryLocalized, true), gettype($countryLocalized)), __LINE__);
        }
        $this->countryLocalized = $countryLocalized;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CountryNameDTO
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
}
