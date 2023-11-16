<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderCustomerDTO StructType
 * @subpackage Structs
 */
class OrderCustomerDTO extends AbstractStructBase
{
    /**
     * The addressChecked
     * @var bool|null
     */
    protected ?bool $addressChecked = null;
    /**
     * The addressCheckedStatus
     * @var string|null
     */
    protected ?string $addressCheckedStatus = null;
    /**
     * The addressType
     * @var string|null
     */
    protected ?string $addressType = null;
    /**
     * The birthday
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The companyName
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * The consentTimestamp
     * @var string|null
     */
    protected ?string $consentTimestamp = null;
    /**
     * The contactPerson
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The customerConsentUpdated
     * @var bool|null
     */
    protected ?bool $customerConsentUpdated = null;
    /**
     * The endorsement
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The externalConsentId
     * @var string|null
     */
    protected ?string $externalConsentId = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The gender
     * @var int|null
     */
    protected ?int $gender = null;
    /**
     * The hasBtContract
     * @var bool|null
     */
    protected ?bool $hasBtContract = null;
    /**
     * The isDeleted
     * @var bool|null
     */
    protected ?bool $isDeleted = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The name2
     * @var string|null
     */
    protected ?string $name2 = null;
    /**
     * The nationality
     * @var string|null
     */
    protected ?string $nationality = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The postOfficeBox
     * @var string|null
     */
    protected ?string $postOfficeBox = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The referenceCustomerId
     * @var string|null
     */
    protected ?string $referenceCustomerId = null;
    /**
     * The referenceSystemId
     * @var string|null
     */
    protected ?string $referenceSystemId = null;
    /**
     * The referenceUrl
     * @var string|null
     */
    protected ?string $referenceUrl = null;
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
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
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * Constructor method for OrderCustomerDTO
     * @uses OrderCustomerDTO::setAddressChecked()
     * @uses OrderCustomerDTO::setAddressCheckedStatus()
     * @uses OrderCustomerDTO::setAddressType()
     * @uses OrderCustomerDTO::setBirthday()
     * @uses OrderCustomerDTO::setCity()
     * @uses OrderCustomerDTO::setCompanyName()
     * @uses OrderCustomerDTO::setConsentTimestamp()
     * @uses OrderCustomerDTO::setContactPerson()
     * @uses OrderCustomerDTO::setCountry()
     * @uses OrderCustomerDTO::setCustomerConsentUpdated()
     * @uses OrderCustomerDTO::setEndorsement()
     * @uses OrderCustomerDTO::setExternalConsentId()
     * @uses OrderCustomerDTO::setForename()
     * @uses OrderCustomerDTO::setGender()
     * @uses OrderCustomerDTO::setHasBtContract()
     * @uses OrderCustomerDTO::setIsDeleted()
     * @uses OrderCustomerDTO::setIsSpecialCustomer()
     * @uses OrderCustomerDTO::setMiddleName()
     * @uses OrderCustomerDTO::setMidocoCustomerId()
     * @uses OrderCustomerDTO::setName()
     * @uses OrderCustomerDTO::setName2()
     * @uses OrderCustomerDTO::setNationality()
     * @uses OrderCustomerDTO::setOrderId()
     * @uses OrderCustomerDTO::setPostOfficeBox()
     * @uses OrderCustomerDTO::setPostalCode()
     * @uses OrderCustomerDTO::setReferenceCustomerId()
     * @uses OrderCustomerDTO::setReferenceSystemId()
     * @uses OrderCustomerDTO::setReferenceUrl()
     * @uses OrderCustomerDTO::setSalutation()
     * @uses OrderCustomerDTO::setState()
     * @uses OrderCustomerDTO::setStreet()
     * @uses OrderCustomerDTO::setStreetNo()
     * @uses OrderCustomerDTO::setTitle()
     * @uses OrderCustomerDTO::setType()
     * @uses OrderCustomerDTO::setVatId()
     * @param bool $addressChecked
     * @param string $addressCheckedStatus
     * @param string $addressType
     * @param string $birthday
     * @param string $city
     * @param string $companyName
     * @param string $consentTimestamp
     * @param string $contactPerson
     * @param string $country
     * @param bool $customerConsentUpdated
     * @param string $endorsement
     * @param string $externalConsentId
     * @param string $forename
     * @param int $gender
     * @param bool $hasBtContract
     * @param bool $isDeleted
     * @param bool $isSpecialCustomer
     * @param string $middleName
     * @param int $midocoCustomerId
     * @param string $name
     * @param string $name2
     * @param string $nationality
     * @param int $orderId
     * @param string $postOfficeBox
     * @param string $postalCode
     * @param string $referenceCustomerId
     * @param string $referenceSystemId
     * @param string $referenceUrl
     * @param string $salutation
     * @param string $state
     * @param string $street
     * @param string $streetNo
     * @param string $title
     * @param string $type
     * @param string $vatId
     */
    public function __construct(?bool $addressChecked = null, ?string $addressCheckedStatus = null, ?string $addressType = null, ?string $birthday = null, ?string $city = null, ?string $companyName = null, ?string $consentTimestamp = null, ?string $contactPerson = null, ?string $country = null, ?bool $customerConsentUpdated = null, ?string $endorsement = null, ?string $externalConsentId = null, ?string $forename = null, ?int $gender = null, ?bool $hasBtContract = null, ?bool $isDeleted = null, ?bool $isSpecialCustomer = null, ?string $middleName = null, ?int $midocoCustomerId = null, ?string $name = null, ?string $name2 = null, ?string $nationality = null, ?int $orderId = null, ?string $postOfficeBox = null, ?string $postalCode = null, ?string $referenceCustomerId = null, ?string $referenceSystemId = null, ?string $referenceUrl = null, ?string $salutation = null, ?string $state = null, ?string $street = null, ?string $streetNo = null, ?string $title = null, ?string $type = null, ?string $vatId = null)
    {
        $this
            ->setAddressChecked($addressChecked)
            ->setAddressCheckedStatus($addressCheckedStatus)
            ->setAddressType($addressType)
            ->setBirthday($birthday)
            ->setCity($city)
            ->setCompanyName($companyName)
            ->setConsentTimestamp($consentTimestamp)
            ->setContactPerson($contactPerson)
            ->setCountry($country)
            ->setCustomerConsentUpdated($customerConsentUpdated)
            ->setEndorsement($endorsement)
            ->setExternalConsentId($externalConsentId)
            ->setForename($forename)
            ->setGender($gender)
            ->setHasBtContract($hasBtContract)
            ->setIsDeleted($isDeleted)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setMiddleName($middleName)
            ->setMidocoCustomerId($midocoCustomerId)
            ->setName($name)
            ->setName2($name2)
            ->setNationality($nationality)
            ->setOrderId($orderId)
            ->setPostOfficeBox($postOfficeBox)
            ->setPostalCode($postalCode)
            ->setReferenceCustomerId($referenceCustomerId)
            ->setReferenceSystemId($referenceSystemId)
            ->setReferenceUrl($referenceUrl)
            ->setSalutation($salutation)
            ->setState($state)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setTitle($title)
            ->setType($type)
            ->setVatId($vatId);
    }
    /**
     * Get addressChecked value
     * @return bool|null
     */
    public function getAddressChecked(): ?bool
    {
        return $this->addressChecked;
    }
    /**
     * Set addressChecked value
     * @param bool $addressChecked
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setAddressChecked(?bool $addressChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($addressChecked) && !is_bool($addressChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($addressChecked, true), gettype($addressChecked)), __LINE__);
        }
        $this->addressChecked = $addressChecked;
        
        return $this;
    }
    /**
     * Get addressCheckedStatus value
     * @return string|null
     */
    public function getAddressCheckedStatus(): ?string
    {
        return $this->addressCheckedStatus;
    }
    /**
     * Set addressCheckedStatus value
     * @param string $addressCheckedStatus
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setAddressCheckedStatus(?string $addressCheckedStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($addressCheckedStatus) && !is_string($addressCheckedStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressCheckedStatus, true), gettype($addressCheckedStatus)), __LINE__);
        }
        $this->addressCheckedStatus = $addressCheckedStatus;
        
        return $this;
    }
    /**
     * Get addressType value
     * @return string|null
     */
    public function getAddressType(): ?string
    {
        return $this->addressType;
    }
    /**
     * Set addressType value
     * @param string $addressType
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setAddressType(?string $addressType = null): self
    {
        // validation for constraint: string
        if (!is_null($addressType) && !is_string($addressType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressType, true), gettype($addressType)), __LINE__);
        }
        $this->addressType = $addressType;
        
        return $this;
    }
    /**
     * Get birthday value
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }
    /**
     * Set birthday value
     * @param string $birthday
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        $this->birthday = $birthday;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        
        return $this;
    }
    /**
     * Get consentTimestamp value
     * @return string|null
     */
    public function getConsentTimestamp(): ?string
    {
        return $this->consentTimestamp;
    }
    /**
     * Set consentTimestamp value
     * @param string $consentTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setConsentTimestamp(?string $consentTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($consentTimestamp) && !is_string($consentTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consentTimestamp, true), gettype($consentTimestamp)), __LINE__);
        }
        $this->consentTimestamp = $consentTimestamp;
        
        return $this;
    }
    /**
     * Get contactPerson value
     * @return string|null
     */
    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }
    /**
     * Set contactPerson value
     * @param string $contactPerson
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setContactPerson(?string $contactPerson = null): self
    {
        // validation for constraint: string
        if (!is_null($contactPerson) && !is_string($contactPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPerson, true), gettype($contactPerson)), __LINE__);
        }
        $this->contactPerson = $contactPerson;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * Get customerConsentUpdated value
     * @return bool|null
     */
    public function getCustomerConsentUpdated(): ?bool
    {
        return $this->customerConsentUpdated;
    }
    /**
     * Set customerConsentUpdated value
     * @param bool $customerConsentUpdated
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setCustomerConsentUpdated(?bool $customerConsentUpdated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($customerConsentUpdated) && !is_bool($customerConsentUpdated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerConsentUpdated, true), gettype($customerConsentUpdated)), __LINE__);
        }
        $this->customerConsentUpdated = $customerConsentUpdated;
        
        return $this;
    }
    /**
     * Get endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->endorsement;
    }
    /**
     * Set endorsement value
     * @param string $endorsement
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        $this->endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get externalConsentId value
     * @return string|null
     */
    public function getExternalConsentId(): ?string
    {
        return $this->externalConsentId;
    }
    /**
     * Set externalConsentId value
     * @param string $externalConsentId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setExternalConsentId(?string $externalConsentId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalConsentId) && !is_string($externalConsentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalConsentId, true), gettype($externalConsentId)), __LINE__);
        }
        $this->externalConsentId = $externalConsentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * Get gender value
     * @return int|null
     */
    public function getGender(): ?int
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param int $gender
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setGender(?int $gender = null): self
    {
        // validation for constraint: int
        if (!is_null($gender) && !(is_int($gender) || ctype_digit($gender))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
        
        return $this;
    }
    /**
     * Get hasBtContract value
     * @return bool|null
     */
    public function getHasBtContract(): ?bool
    {
        return $this->hasBtContract;
    }
    /**
     * Set hasBtContract value
     * @param bool $hasBtContract
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setHasBtContract(?bool $hasBtContract = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasBtContract) && !is_bool($hasBtContract)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasBtContract, true), gettype($hasBtContract)), __LINE__);
        }
        $this->hasBtContract = $hasBtContract;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        
        return $this;
    }
    /**
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * Get name2 value
     * @return string|null
     */
    public function getName2(): ?string
    {
        return $this->name2;
    }
    /**
     * Set name2 value
     * @param string $name2
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setName2(?string $name2 = null): self
    {
        // validation for constraint: string
        if (!is_null($name2) && !is_string($name2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name2, true), gettype($name2)), __LINE__);
        }
        $this->name2 = $name2;
        
        return $this;
    }
    /**
     * Get nationality value
     * @return string|null
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }
    /**
     * Set nationality value
     * @param string $nationality
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setNationality(?string $nationality = null): self
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationality, true), gettype($nationality)), __LINE__);
        }
        $this->nationality = $nationality;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get postOfficeBox value
     * @return string|null
     */
    public function getPostOfficeBox(): ?string
    {
        return $this->postOfficeBox;
    }
    /**
     * Set postOfficeBox value
     * @param string $postOfficeBox
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setPostOfficeBox(?string $postOfficeBox = null): self
    {
        // validation for constraint: string
        if (!is_null($postOfficeBox) && !is_string($postOfficeBox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postOfficeBox, true), gettype($postOfficeBox)), __LINE__);
        }
        $this->postOfficeBox = $postOfficeBox;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * Get referenceCustomerId value
     * @return string|null
     */
    public function getReferenceCustomerId(): ?string
    {
        return $this->referenceCustomerId;
    }
    /**
     * Set referenceCustomerId value
     * @param string $referenceCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setReferenceCustomerId(?string $referenceCustomerId = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceCustomerId) && !is_string($referenceCustomerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceCustomerId, true), gettype($referenceCustomerId)), __LINE__);
        }
        $this->referenceCustomerId = $referenceCustomerId;
        
        return $this;
    }
    /**
     * Get referenceSystemId value
     * @return string|null
     */
    public function getReferenceSystemId(): ?string
    {
        return $this->referenceSystemId;
    }
    /**
     * Set referenceSystemId value
     * @param string $referenceSystemId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setReferenceSystemId(?string $referenceSystemId = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceSystemId) && !is_string($referenceSystemId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceSystemId, true), gettype($referenceSystemId)), __LINE__);
        }
        $this->referenceSystemId = $referenceSystemId;
        
        return $this;
    }
    /**
     * Get referenceUrl value
     * @return string|null
     */
    public function getReferenceUrl(): ?string
    {
        return $this->referenceUrl;
    }
    /**
     * Set referenceUrl value
     * @param string $referenceUrl
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setReferenceUrl(?string $referenceUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceUrl) && !is_string($referenceUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceUrl, true), gettype($referenceUrl)), __LINE__);
        }
        $this->referenceUrl = $referenceUrl;
        
        return $this;
    }
    /**
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
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
     * Get vatId value
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param string $vatId
     * @return \Pggns\MidocoApi\Order\StructType\OrderCustomerDTO
     */
    public function setVatId(?string $vatId = null): self
    {
        // validation for constraint: string
        if (!is_null($vatId) && !is_string($vatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
        return $this;
    }
}
