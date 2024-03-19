<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatistikAtDataDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class StatistikAtDataDTO extends AbstractStructBase
{
    /**
     * The cityCode
     * @var string|null
     */
    protected ?string $cityCode = null;
    /**
     * The importId
     * @var int|null
     */
    protected ?int $importId = null;
    /**
     * The municipalityCode
     * @var string|null
     */
    protected ?string $municipalityCode = null;
    /**
     * The politicalCommunity
     * @var string|null
     */
    protected ?string $politicalCommunity = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The streetCode
     * @var string|null
     */
    protected ?string $streetCode = null;
    /**
     * The streetName
     * @var string|null
     */
    protected ?string $streetName = null;
    /**
     * The streetNamePhonetic
     * @var string|null
     */
    protected ?string $streetNamePhonetic = null;
    /**
     * The streetNameUpper
     * @var string|null
     */
    protected ?string $streetNameUpper = null;
    /**
     * The townCode
     * @var string|null
     */
    protected ?string $townCode = null;
    /**
     * The townName
     * @var string|null
     */
    protected ?string $townName = null;
    /**
     * The townNamePhonetic
     * @var string|null
     */
    protected ?string $townNamePhonetic = null;
    /**
     * The townNameUpper
     * @var string|null
     */
    protected ?string $townNameUpper = null;
    /**
     * Constructor method for StatistikAtDataDTO
     * @uses StatistikAtDataDTO::setCityCode()
     * @uses StatistikAtDataDTO::setImportId()
     * @uses StatistikAtDataDTO::setMunicipalityCode()
     * @uses StatistikAtDataDTO::setPoliticalCommunity()
     * @uses StatistikAtDataDTO::setPostalCode()
     * @uses StatistikAtDataDTO::setStreetCode()
     * @uses StatistikAtDataDTO::setStreetName()
     * @uses StatistikAtDataDTO::setStreetNamePhonetic()
     * @uses StatistikAtDataDTO::setStreetNameUpper()
     * @uses StatistikAtDataDTO::setTownCode()
     * @uses StatistikAtDataDTO::setTownName()
     * @uses StatistikAtDataDTO::setTownNamePhonetic()
     * @uses StatistikAtDataDTO::setTownNameUpper()
     * @param string $cityCode
     * @param int $importId
     * @param string $municipalityCode
     * @param string $politicalCommunity
     * @param string $postalCode
     * @param string $streetCode
     * @param string $streetName
     * @param string $streetNamePhonetic
     * @param string $streetNameUpper
     * @param string $townCode
     * @param string $townName
     * @param string $townNamePhonetic
     * @param string $townNameUpper
     */
    public function __construct(?string $cityCode = null, ?int $importId = null, ?string $municipalityCode = null, ?string $politicalCommunity = null, ?string $postalCode = null, ?string $streetCode = null, ?string $streetName = null, ?string $streetNamePhonetic = null, ?string $streetNameUpper = null, ?string $townCode = null, ?string $townName = null, ?string $townNamePhonetic = null, ?string $townNameUpper = null)
    {
        $this
            ->setCityCode($cityCode)
            ->setImportId($importId)
            ->setMunicipalityCode($municipalityCode)
            ->setPoliticalCommunity($politicalCommunity)
            ->setPostalCode($postalCode)
            ->setStreetCode($streetCode)
            ->setStreetName($streetName)
            ->setStreetNamePhonetic($streetNamePhonetic)
            ->setStreetNameUpper($streetNameUpper)
            ->setTownCode($townCode)
            ->setTownName($townName)
            ->setTownNamePhonetic($townNamePhonetic)
            ->setTownNameUpper($townNameUpper);
    }
    /**
     * Get cityCode value
     * @return string|null
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }
    /**
     * Set cityCode value
     * @param string $cityCode
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setCityCode(?string $cityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityCode, true), gettype($cityCode)), __LINE__);
        }
        $this->cityCode = $cityCode;
        
        return $this;
    }
    /**
     * Get importId value
     * @return int|null
     */
    public function getImportId(): ?int
    {
        return $this->importId;
    }
    /**
     * Set importId value
     * @param int $importId
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setImportId(?int $importId = null): self
    {
        // validation for constraint: int
        if (!is_null($importId) && !(is_int($importId) || ctype_digit($importId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importId, true), gettype($importId)), __LINE__);
        }
        $this->importId = $importId;
        
        return $this;
    }
    /**
     * Get municipalityCode value
     * @return string|null
     */
    public function getMunicipalityCode(): ?string
    {
        return $this->municipalityCode;
    }
    /**
     * Set municipalityCode value
     * @param string $municipalityCode
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setMunicipalityCode(?string $municipalityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($municipalityCode) && !is_string($municipalityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($municipalityCode, true), gettype($municipalityCode)), __LINE__);
        }
        $this->municipalityCode = $municipalityCode;
        
        return $this;
    }
    /**
     * Get politicalCommunity value
     * @return string|null
     */
    public function getPoliticalCommunity(): ?string
    {
        return $this->politicalCommunity;
    }
    /**
     * Set politicalCommunity value
     * @param string $politicalCommunity
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setPoliticalCommunity(?string $politicalCommunity = null): self
    {
        // validation for constraint: string
        if (!is_null($politicalCommunity) && !is_string($politicalCommunity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($politicalCommunity, true), gettype($politicalCommunity)), __LINE__);
        }
        $this->politicalCommunity = $politicalCommunity;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
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
     * Get streetCode value
     * @return string|null
     */
    public function getStreetCode(): ?string
    {
        return $this->streetCode;
    }
    /**
     * Set streetCode value
     * @param string $streetCode
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setStreetCode(?string $streetCode = null): self
    {
        // validation for constraint: string
        if (!is_null($streetCode) && !is_string($streetCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetCode, true), gettype($streetCode)), __LINE__);
        }
        $this->streetCode = $streetCode;
        
        return $this;
    }
    /**
     * Get streetName value
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }
    /**
     * Set streetName value
     * @param string $streetName
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setStreetName(?string $streetName = null): self
    {
        // validation for constraint: string
        if (!is_null($streetName) && !is_string($streetName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetName, true), gettype($streetName)), __LINE__);
        }
        $this->streetName = $streetName;
        
        return $this;
    }
    /**
     * Get streetNamePhonetic value
     * @return string|null
     */
    public function getStreetNamePhonetic(): ?string
    {
        return $this->streetNamePhonetic;
    }
    /**
     * Set streetNamePhonetic value
     * @param string $streetNamePhonetic
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setStreetNamePhonetic(?string $streetNamePhonetic = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNamePhonetic) && !is_string($streetNamePhonetic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNamePhonetic, true), gettype($streetNamePhonetic)), __LINE__);
        }
        $this->streetNamePhonetic = $streetNamePhonetic;
        
        return $this;
    }
    /**
     * Get streetNameUpper value
     * @return string|null
     */
    public function getStreetNameUpper(): ?string
    {
        return $this->streetNameUpper;
    }
    /**
     * Set streetNameUpper value
     * @param string $streetNameUpper
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setStreetNameUpper(?string $streetNameUpper = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNameUpper) && !is_string($streetNameUpper)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNameUpper, true), gettype($streetNameUpper)), __LINE__);
        }
        $this->streetNameUpper = $streetNameUpper;
        
        return $this;
    }
    /**
     * Get townCode value
     * @return string|null
     */
    public function getTownCode(): ?string
    {
        return $this->townCode;
    }
    /**
     * Set townCode value
     * @param string $townCode
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setTownCode(?string $townCode = null): self
    {
        // validation for constraint: string
        if (!is_null($townCode) && !is_string($townCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($townCode, true), gettype($townCode)), __LINE__);
        }
        $this->townCode = $townCode;
        
        return $this;
    }
    /**
     * Get townName value
     * @return string|null
     */
    public function getTownName(): ?string
    {
        return $this->townName;
    }
    /**
     * Set townName value
     * @param string $townName
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setTownName(?string $townName = null): self
    {
        // validation for constraint: string
        if (!is_null($townName) && !is_string($townName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($townName, true), gettype($townName)), __LINE__);
        }
        $this->townName = $townName;
        
        return $this;
    }
    /**
     * Get townNamePhonetic value
     * @return string|null
     */
    public function getTownNamePhonetic(): ?string
    {
        return $this->townNamePhonetic;
    }
    /**
     * Set townNamePhonetic value
     * @param string $townNamePhonetic
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setTownNamePhonetic(?string $townNamePhonetic = null): self
    {
        // validation for constraint: string
        if (!is_null($townNamePhonetic) && !is_string($townNamePhonetic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($townNamePhonetic, true), gettype($townNamePhonetic)), __LINE__);
        }
        $this->townNamePhonetic = $townNamePhonetic;
        
        return $this;
    }
    /**
     * Get townNameUpper value
     * @return string|null
     */
    public function getTownNameUpper(): ?string
    {
        return $this->townNameUpper;
    }
    /**
     * Set townNameUpper value
     * @param string $townNameUpper
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtDataDTO
     */
    public function setTownNameUpper(?string $townNameUpper = null): self
    {
        // validation for constraint: string
        if (!is_null($townNameUpper) && !is_string($townNameUpper)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($townNameUpper, true), gettype($townNameUpper)), __LINE__);
        }
        $this->townNameUpper = $townNameUpper;
        
        return $this;
    }
}
