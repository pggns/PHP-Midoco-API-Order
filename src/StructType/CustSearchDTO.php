<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustSearchDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustSearchDTO extends AbstractStructBase
{
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The exactCity
     * @var string|null
     */
    protected ?string $exactCity = null;
    /**
     * The exactForename
     * @var string|null
     */
    protected ?string $exactForename = null;
    /**
     * The exactMiddlename
     * @var string|null
     */
    protected ?string $exactMiddlename = null;
    /**
     * The exactName
     * @var string|null
     */
    protected ?string $exactName = null;
    /**
     * The exactStreet
     * @var string|null
     */
    protected ?string $exactStreet = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The isDeleted
     * @var bool|null
     */
    protected ?bool $isDeleted = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for CustSearchDTO
     * @uses CustSearchDTO::setCity()
     * @uses CustSearchDTO::setCustomerId()
     * @uses CustSearchDTO::setExactCity()
     * @uses CustSearchDTO::setExactForename()
     * @uses CustSearchDTO::setExactMiddlename()
     * @uses CustSearchDTO::setExactName()
     * @uses CustSearchDTO::setExactStreet()
     * @uses CustSearchDTO::setForename()
     * @uses CustSearchDTO::setIsDeleted()
     * @uses CustSearchDTO::setName()
     * @uses CustSearchDTO::setStreet()
     * @uses CustSearchDTO::setTravellerId()
     * @uses CustSearchDTO::setType()
     * @uses CustSearchDTO::setUnitName()
     * @param string $city
     * @param int $customerId
     * @param string $exactCity
     * @param string $exactForename
     * @param string $exactMiddlename
     * @param string $exactName
     * @param string $exactStreet
     * @param string $forename
     * @param bool $isDeleted
     * @param string $name
     * @param string $street
     * @param int $travellerId
     * @param string $type
     * @param string $unitName
     */
    public function __construct(?string $city = null, ?int $customerId = null, ?string $exactCity = null, ?string $exactForename = null, ?string $exactMiddlename = null, ?string $exactName = null, ?string $exactStreet = null, ?string $forename = null, ?bool $isDeleted = null, ?string $name = null, ?string $street = null, ?int $travellerId = null, ?string $type = null, ?string $unitName = null)
    {
        $this
            ->setCity($city)
            ->setCustomerId($customerId)
            ->setExactCity($exactCity)
            ->setExactForename($exactForename)
            ->setExactMiddlename($exactMiddlename)
            ->setExactName($exactName)
            ->setExactStreet($exactStreet)
            ->setForename($forename)
            ->setIsDeleted($isDeleted)
            ->setName($name)
            ->setStreet($street)
            ->setTravellerId($travellerId)
            ->setType($type)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
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
     * Get exactForename value
     * @return string|null
     */
    public function getExactForename(): ?string
    {
        return $this->exactForename;
    }
    /**
     * Set exactForename value
     * @param string $exactForename
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setExactForename(?string $exactForename = null): self
    {
        // validation for constraint: string
        if (!is_null($exactForename) && !is_string($exactForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactForename, true), gettype($exactForename)), __LINE__);
        }
        $this->exactForename = $exactForename;
        
        return $this;
    }
    /**
     * Get exactMiddlename value
     * @return string|null
     */
    public function getExactMiddlename(): ?string
    {
        return $this->exactMiddlename;
    }
    /**
     * Set exactMiddlename value
     * @param string $exactMiddlename
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setExactMiddlename(?string $exactMiddlename = null): self
    {
        // validation for constraint: string
        if (!is_null($exactMiddlename) && !is_string($exactMiddlename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactMiddlename, true), gettype($exactMiddlename)), __LINE__);
        }
        $this->exactMiddlename = $exactMiddlename;
        
        return $this;
    }
    /**
     * Get exactName value
     * @return string|null
     */
    public function getExactName(): ?string
    {
        return $this->exactName;
    }
    /**
     * Set exactName value
     * @param string $exactName
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setExactName(?string $exactName = null): self
    {
        // validation for constraint: string
        if (!is_null($exactName) && !is_string($exactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exactName, true), gettype($exactName)), __LINE__);
        }
        $this->exactName = $exactName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
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
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get isDeleted value
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }
    /**
     * Set isDeleted value
     * @param bool $isDeleted
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setIsDeleted(?bool $isDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeleted) && !is_bool($isDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeleted, true), gettype($isDeleted)), __LINE__);
        }
        $this->isDeleted = $isDeleted;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
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
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\CustSearchDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
