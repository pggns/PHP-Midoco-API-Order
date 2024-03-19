<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CountryDTO extends AbstractStructBase
{
    /**
     * The bankAdapterId
     * @var string|null
     */
    protected ?string $bankAdapterId = null;
    /**
     * The checkZip
     * @var bool|null
     */
    protected ?bool $checkZip = null;
    /**
     * The continent
     * @var string|null
     */
    protected ?string $continent = null;
    /**
     * The countryId
     * @var string|null
     */
    protected ?string $countryId = null;
    /**
     * The countryIso3
     * @var string|null
     */
    protected ?string $countryIso3 = null;
    /**
     * The fakeCountry
     * @var bool|null
     */
    protected ?bool $fakeCountry = null;
    /**
     * The telephonePrefix
     * @var string|null
     */
    protected ?string $telephonePrefix = null;
    /**
     * Constructor method for CountryDTO
     * @uses CountryDTO::setBankAdapterId()
     * @uses CountryDTO::setCheckZip()
     * @uses CountryDTO::setContinent()
     * @uses CountryDTO::setCountryId()
     * @uses CountryDTO::setCountryIso3()
     * @uses CountryDTO::setFakeCountry()
     * @uses CountryDTO::setTelephonePrefix()
     * @param string $bankAdapterId
     * @param bool $checkZip
     * @param string $continent
     * @param string $countryId
     * @param string $countryIso3
     * @param bool $fakeCountry
     * @param string $telephonePrefix
     */
    public function __construct(?string $bankAdapterId = null, ?bool $checkZip = null, ?string $continent = null, ?string $countryId = null, ?string $countryIso3 = null, ?bool $fakeCountry = null, ?string $telephonePrefix = null)
    {
        $this
            ->setBankAdapterId($bankAdapterId)
            ->setCheckZip($checkZip)
            ->setContinent($continent)
            ->setCountryId($countryId)
            ->setCountryIso3($countryIso3)
            ->setFakeCountry($fakeCountry)
            ->setTelephonePrefix($telephonePrefix);
    }
    /**
     * Get bankAdapterId value
     * @return string|null
     */
    public function getBankAdapterId(): ?string
    {
        return $this->bankAdapterId;
    }
    /**
     * Set bankAdapterId value
     * @param string $bankAdapterId
     * @return \Pggns\MidocoApi\Order\StructType\CountryDTO
     */
    public function setBankAdapterId(?string $bankAdapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($bankAdapterId) && !is_string($bankAdapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAdapterId, true), gettype($bankAdapterId)), __LINE__);
        }
        $this->bankAdapterId = $bankAdapterId;
        
        return $this;
    }
    /**
     * Get checkZip value
     * @return bool|null
     */
    public function getCheckZip(): ?bool
    {
        return $this->checkZip;
    }
    /**
     * Set checkZip value
     * @param bool $checkZip
     * @return \Pggns\MidocoApi\Order\StructType\CountryDTO
     */
    public function setCheckZip(?bool $checkZip = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkZip) && !is_bool($checkZip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkZip, true), gettype($checkZip)), __LINE__);
        }
        $this->checkZip = $checkZip;
        
        return $this;
    }
    /**
     * Get continent value
     * @return string|null
     */
    public function getContinent(): ?string
    {
        return $this->continent;
    }
    /**
     * Set continent value
     * @param string $continent
     * @return \Pggns\MidocoApi\Order\StructType\CountryDTO
     */
    public function setContinent(?string $continent = null): self
    {
        // validation for constraint: string
        if (!is_null($continent) && !is_string($continent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($continent, true), gettype($continent)), __LINE__);
        }
        $this->continent = $continent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CountryDTO
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
     * Get countryIso3 value
     * @return string|null
     */
    public function getCountryIso3(): ?string
    {
        return $this->countryIso3;
    }
    /**
     * Set countryIso3 value
     * @param string $countryIso3
     * @return \Pggns\MidocoApi\Order\StructType\CountryDTO
     */
    public function setCountryIso3(?string $countryIso3 = null): self
    {
        // validation for constraint: string
        if (!is_null($countryIso3) && !is_string($countryIso3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryIso3, true), gettype($countryIso3)), __LINE__);
        }
        $this->countryIso3 = $countryIso3;
        
        return $this;
    }
    /**
     * Get fakeCountry value
     * @return bool|null
     */
    public function getFakeCountry(): ?bool
    {
        return $this->fakeCountry;
    }
    /**
     * Set fakeCountry value
     * @param bool $fakeCountry
     * @return \Pggns\MidocoApi\Order\StructType\CountryDTO
     */
    public function setFakeCountry(?bool $fakeCountry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($fakeCountry) && !is_bool($fakeCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fakeCountry, true), gettype($fakeCountry)), __LINE__);
        }
        $this->fakeCountry = $fakeCountry;
        
        return $this;
    }
    /**
     * Get telephonePrefix value
     * @return string|null
     */
    public function getTelephonePrefix(): ?string
    {
        return $this->telephonePrefix;
    }
    /**
     * Set telephonePrefix value
     * @param string $telephonePrefix
     * @return \Pggns\MidocoApi\Order\StructType\CountryDTO
     */
    public function setTelephonePrefix(?string $telephonePrefix = null): self
    {
        // validation for constraint: string
        if (!is_null($telephonePrefix) && !is_string($telephonePrefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telephonePrefix, true), gettype($telephonePrefix)), __LINE__);
        }
        $this->telephonePrefix = $telephonePrefix;
        
        return $this;
    }
}
