<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerDoubleAddrInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerDoubleAddrInfo extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
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
     * The zipCode
     * @var string|null
     */
    protected ?string $zipCode = null;
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
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The travelsNo
     * @var int|null
     */
    protected ?int $travelsNo = null;
    /**
     * The lastTravelDate
     * @var string|null
     */
    protected ?string $lastTravelDate = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The phoneNr
     * @var string|null
     */
    protected ?string $phoneNr = null;
    /**
     * The isLocked
     * @var bool|null
     */
    protected ?bool $isLocked = null;
    /**
     * The lockReasonId
     * @var string|null
     */
    protected ?string $lockReasonId = null;
    /**
     * Constructor method for CustomerDoubleAddrInfo
     * @uses CustomerDoubleAddrInfo::setCustomerId()
     * @uses CustomerDoubleAddrInfo::setName()
     * @uses CustomerDoubleAddrInfo::setForename()
     * @uses CustomerDoubleAddrInfo::setStreet()
     * @uses CustomerDoubleAddrInfo::setStreetNo()
     * @uses CustomerDoubleAddrInfo::setZipCode()
     * @uses CustomerDoubleAddrInfo::setCity()
     * @uses CustomerDoubleAddrInfo::setCountry()
     * @uses CustomerDoubleAddrInfo::setType()
     * @uses CustomerDoubleAddrInfo::setEmail()
     * @uses CustomerDoubleAddrInfo::setTravelsNo()
     * @uses CustomerDoubleAddrInfo::setLastTravelDate()
     * @uses CustomerDoubleAddrInfo::setUnitName()
     * @uses CustomerDoubleAddrInfo::setDebitorNo()
     * @uses CustomerDoubleAddrInfo::setPhoneNr()
     * @uses CustomerDoubleAddrInfo::setIsLocked()
     * @uses CustomerDoubleAddrInfo::setLockReasonId()
     * @param int $customerId
     * @param string $name
     * @param string $forename
     * @param string $street
     * @param string $streetNo
     * @param string $zipCode
     * @param string $city
     * @param string $country
     * @param string $type
     * @param string $email
     * @param int $travelsNo
     * @param string $lastTravelDate
     * @param string $unitName
     * @param string $debitorNo
     * @param string $phoneNr
     * @param bool $isLocked
     * @param string $lockReasonId
     */
    public function __construct(?int $customerId = null, ?string $name = null, ?string $forename = null, ?string $street = null, ?string $streetNo = null, ?string $zipCode = null, ?string $city = null, ?string $country = null, ?string $type = null, ?string $email = null, ?int $travelsNo = null, ?string $lastTravelDate = null, ?string $unitName = null, ?string $debitorNo = null, ?string $phoneNr = null, ?bool $isLocked = null, ?string $lockReasonId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setName($name)
            ->setForename($forename)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setCountry($country)
            ->setType($type)
            ->setEmail($email)
            ->setTravelsNo($travelsNo)
            ->setLastTravelDate($lastTravelDate)
            ->setUnitName($unitName)
            ->setDebitorNo($debitorNo)
            ->setPhoneNr($phoneNr)
            ->setIsLocked($isLocked)
            ->setLockReasonId($lockReasonId);
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get travelsNo value
     * @return int|null
     */
    public function getTravelsNo(): ?int
    {
        return $this->travelsNo;
    }
    /**
     * Set travelsNo value
     * @param int $travelsNo
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
     */
    public function setTravelsNo(?int $travelsNo = null): self
    {
        // validation for constraint: int
        if (!is_null($travelsNo) && !(is_int($travelsNo) || ctype_digit($travelsNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelsNo, true), gettype($travelsNo)), __LINE__);
        }
        $this->travelsNo = $travelsNo;
        
        return $this;
    }
    /**
     * Get lastTravelDate value
     * @return string|null
     */
    public function getLastTravelDate(): ?string
    {
        return $this->lastTravelDate;
    }
    /**
     * Set lastTravelDate value
     * @param string $lastTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
     */
    public function setLastTravelDate(?string $lastTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTravelDate) && !is_string($lastTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTravelDate, true), gettype($lastTravelDate)), __LINE__);
        }
        $this->lastTravelDate = $lastTravelDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
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
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get phoneNr value
     * @return string|null
     */
    public function getPhoneNr(): ?string
    {
        return $this->phoneNr;
    }
    /**
     * Set phoneNr value
     * @param string $phoneNr
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
     */
    public function setPhoneNr(?string $phoneNr = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNr) && !is_string($phoneNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNr, true), gettype($phoneNr)), __LINE__);
        }
        $this->phoneNr = $phoneNr;
        
        return $this;
    }
    /**
     * Get isLocked value
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }
    /**
     * Set isLocked value
     * @param bool $isLocked
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
     */
    public function setIsLocked(?bool $isLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLocked) && !is_bool($isLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLocked, true), gettype($isLocked)), __LINE__);
        }
        $this->isLocked = $isLocked;
        
        return $this;
    }
    /**
     * Get lockReasonId value
     * @return string|null
     */
    public function getLockReasonId(): ?string
    {
        return $this->lockReasonId;
    }
    /**
     * Set lockReasonId value
     * @param string $lockReasonId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDoubleAddrInfo
     */
    public function setLockReasonId(?string $lockReasonId = null): self
    {
        // validation for constraint: string
        if (!is_null($lockReasonId) && !is_string($lockReasonId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReasonId, true), gettype($lockReasonId)), __LINE__);
        }
        $this->lockReasonId = $lockReasonId;
        
        return $this;
    }
}
