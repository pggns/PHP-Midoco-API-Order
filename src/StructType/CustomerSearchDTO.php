<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerSearchDTO StructType
 * @subpackage Structs
 */
class CustomerSearchDTO extends AbstractStructBase
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The addressId
     * @var int|null
     */
    protected ?int $addressId = null;
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
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The postOfficeBox
     * @var string|null
     */
    protected ?string $postOfficeBox = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The telephone
     * @var string|null
     */
    protected ?string $telephone = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The web
     * @var string|null
     */
    protected ?string $web = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The hasGDSProfileAttributes
     * @var bool|null
     */
    protected ?bool $hasGDSProfileAttributes = null;
    /**
     * The organisationName
     * @var string|null
     */
    protected ?string $organisationName = null;
    /**
     * The contactPerson
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The endorsement
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
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
     * The score
     * @var string|null
     */
    protected ?string $score = null;
    /**
     * The sortName
     * @var string|null
     */
    protected ?string $sortName = null;
    /**
     * The name2
     * @var string|null
     */
    protected ?string $name2 = null;
    /**
     * The makeNewOrder
     * @var bool|null
     */
    protected ?bool $makeNewOrder = null;
    /**
     * The gdsCompanyCustomerId
     * @var int|null
     */
    protected ?int $gdsCompanyCustomerId = null;
    /**
     * The gdsCompanyName
     * @var string|null
     */
    protected ?string $gdsCompanyName = null;
    /**
     * The gdsCompanyDebitorNo
     * @var string|null
     */
    protected ?string $gdsCompanyDebitorNo = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The mandateReference
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * Constructor method for CustomerSearchDTO
     * @uses CustomerSearchDTO::setType()
     * @uses CustomerSearchDTO::setId()
     * @uses CustomerSearchDTO::setTitle()
     * @uses CustomerSearchDTO::setName()
     * @uses CustomerSearchDTO::setMiddleName()
     * @uses CustomerSearchDTO::setForename()
     * @uses CustomerSearchDTO::setAgencyId()
     * @uses CustomerSearchDTO::setAddressId()
     * @uses CustomerSearchDTO::setStreet()
     * @uses CustomerSearchDTO::setStreetNo()
     * @uses CustomerSearchDTO::setPostalCode()
     * @uses CustomerSearchDTO::setPostOfficeBox()
     * @uses CustomerSearchDTO::setCountry()
     * @uses CustomerSearchDTO::setCity()
     * @uses CustomerSearchDTO::setTelephone()
     * @uses CustomerSearchDTO::setEmail()
     * @uses CustomerSearchDTO::setWeb()
     * @uses CustomerSearchDTO::setDebitorNo()
     * @uses CustomerSearchDTO::setSalutationId()
     * @uses CustomerSearchDTO::setMediatorId()
     * @uses CustomerSearchDTO::setHasGDSProfileAttributes()
     * @uses CustomerSearchDTO::setOrganisationName()
     * @uses CustomerSearchDTO::setContactPerson()
     * @uses CustomerSearchDTO::setEndorsement()
     * @uses CustomerSearchDTO::setOrgUnit()
     * @uses CustomerSearchDTO::setIsLocked()
     * @uses CustomerSearchDTO::setLockReasonId()
     * @uses CustomerSearchDTO::setScore()
     * @uses CustomerSearchDTO::setSortName()
     * @uses CustomerSearchDTO::setName2()
     * @uses CustomerSearchDTO::setMakeNewOrder()
     * @uses CustomerSearchDTO::setGdsCompanyCustomerId()
     * @uses CustomerSearchDTO::setGdsCompanyName()
     * @uses CustomerSearchDTO::setGdsCompanyDebitorNo()
     * @uses CustomerSearchDTO::setMediatorType()
     * @uses CustomerSearchDTO::setMandateReference()
     * @uses CustomerSearchDTO::setContactId()
     * @param string $type
     * @param int $id
     * @param string $title
     * @param string $name
     * @param string $middleName
     * @param string $forename
     * @param string $agencyId
     * @param int $addressId
     * @param string $street
     * @param string $streetNo
     * @param string $postalCode
     * @param string $postOfficeBox
     * @param string $country
     * @param string $city
     * @param string $telephone
     * @param string $email
     * @param string $web
     * @param string $debitorNo
     * @param string $salutationId
     * @param string $mediatorId
     * @param bool $hasGDSProfileAttributes
     * @param string $organisationName
     * @param string $contactPerson
     * @param string $endorsement
     * @param string $orgUnit
     * @param bool $isLocked
     * @param string $lockReasonId
     * @param string $score
     * @param string $sortName
     * @param string $name2
     * @param bool $makeNewOrder
     * @param int $gdsCompanyCustomerId
     * @param string $gdsCompanyName
     * @param string $gdsCompanyDebitorNo
     * @param string $mediatorType
     * @param string $mandateReference
     * @param int $contactId
     */
    public function __construct(?string $type = null, ?int $id = null, ?string $title = null, ?string $name = null, ?string $middleName = null, ?string $forename = null, ?string $agencyId = null, ?int $addressId = null, ?string $street = null, ?string $streetNo = null, ?string $postalCode = null, ?string $postOfficeBox = null, ?string $country = null, ?string $city = null, ?string $telephone = null, ?string $email = null, ?string $web = null, ?string $debitorNo = null, ?string $salutationId = null, ?string $mediatorId = null, ?bool $hasGDSProfileAttributes = null, ?string $organisationName = null, ?string $contactPerson = null, ?string $endorsement = null, ?string $orgUnit = null, ?bool $isLocked = null, ?string $lockReasonId = null, ?string $score = null, ?string $sortName = null, ?string $name2 = null, ?bool $makeNewOrder = null, ?int $gdsCompanyCustomerId = null, ?string $gdsCompanyName = null, ?string $gdsCompanyDebitorNo = null, ?string $mediatorType = null, ?string $mandateReference = null, ?int $contactId = null)
    {
        $this
            ->setType($type)
            ->setId($id)
            ->setTitle($title)
            ->setName($name)
            ->setMiddleName($middleName)
            ->setForename($forename)
            ->setAgencyId($agencyId)
            ->setAddressId($addressId)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setPostalCode($postalCode)
            ->setPostOfficeBox($postOfficeBox)
            ->setCountry($country)
            ->setCity($city)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setWeb($web)
            ->setDebitorNo($debitorNo)
            ->setSalutationId($salutationId)
            ->setMediatorId($mediatorId)
            ->setHasGDSProfileAttributes($hasGDSProfileAttributes)
            ->setOrganisationName($organisationName)
            ->setContactPerson($contactPerson)
            ->setEndorsement($endorsement)
            ->setOrgUnit($orgUnit)
            ->setIsLocked($isLocked)
            ->setLockReasonId($lockReasonId)
            ->setScore($score)
            ->setSortName($sortName)
            ->setName2($name2)
            ->setMakeNewOrder($makeNewOrder)
            ->setGdsCompanyCustomerId($gdsCompanyCustomerId)
            ->setGdsCompanyName($gdsCompanyName)
            ->setGdsCompanyDebitorNo($gdsCompanyDebitorNo)
            ->setMediatorType($mediatorType)
            ->setMandateReference($mandateReference)
            ->setContactId($contactId);
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get addressId value
     * @return int|null
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setAddressId(?int $addressId = null): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * Get telephone value
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }
    /**
     * Set telephone value
     * @param string $telephone
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setTelephone(?string $telephone = null): self
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telephone, true), gettype($telephone)), __LINE__);
        }
        $this->telephone = $telephone;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * Get web value
     * @return string|null
     */
    public function getWeb(): ?string
    {
        return $this->web;
    }
    /**
     * Set web value
     * @param string $web
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setWeb(?string $web = null): self
    {
        // validation for constraint: string
        if (!is_null($web) && !is_string($web)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web, true), gettype($web)), __LINE__);
        }
        $this->web = $web;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get hasGDSProfileAttributes value
     * @return bool|null
     */
    public function getHasGDSProfileAttributes(): ?bool
    {
        return $this->hasGDSProfileAttributes;
    }
    /**
     * Set hasGDSProfileAttributes value
     * @param bool $hasGDSProfileAttributes
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setHasGDSProfileAttributes(?bool $hasGDSProfileAttributes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasGDSProfileAttributes) && !is_bool($hasGDSProfileAttributes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasGDSProfileAttributes, true), gettype($hasGDSProfileAttributes)), __LINE__);
        }
        $this->hasGDSProfileAttributes = $hasGDSProfileAttributes;
        
        return $this;
    }
    /**
     * Get organisationName value
     * @return string|null
     */
    public function getOrganisationName(): ?string
    {
        return $this->organisationName;
    }
    /**
     * Set organisationName value
     * @param string $organisationName
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setOrganisationName(?string $organisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationName) && !is_string($organisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationName, true), gettype($organisationName)), __LINE__);
        }
        $this->organisationName = $organisationName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
    /**
     * Get score value
     * @return string|null
     */
    public function getScore(): ?string
    {
        return $this->score;
    }
    /**
     * Set score value
     * @param string $score
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setScore(?string $score = null): self
    {
        // validation for constraint: string
        if (!is_null($score) && !is_string($score)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($score, true), gettype($score)), __LINE__);
        }
        $this->score = $score;
        
        return $this;
    }
    /**
     * Get sortName value
     * @return string|null
     */
    public function getSortName(): ?string
    {
        return $this->sortName;
    }
    /**
     * Set sortName value
     * @param string $sortName
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setSortName(?string $sortName = null): self
    {
        // validation for constraint: string
        if (!is_null($sortName) && !is_string($sortName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortName, true), gettype($sortName)), __LINE__);
        }
        $this->sortName = $sortName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
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
     * Get makeNewOrder value
     * @return bool|null
     */
    public function getMakeNewOrder(): ?bool
    {
        return $this->makeNewOrder;
    }
    /**
     * Set makeNewOrder value
     * @param bool $makeNewOrder
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setMakeNewOrder(?bool $makeNewOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($makeNewOrder) && !is_bool($makeNewOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($makeNewOrder, true), gettype($makeNewOrder)), __LINE__);
        }
        $this->makeNewOrder = $makeNewOrder;
        
        return $this;
    }
    /**
     * Get gdsCompanyCustomerId value
     * @return int|null
     */
    public function getGdsCompanyCustomerId(): ?int
    {
        return $this->gdsCompanyCustomerId;
    }
    /**
     * Set gdsCompanyCustomerId value
     * @param int $gdsCompanyCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setGdsCompanyCustomerId(?int $gdsCompanyCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($gdsCompanyCustomerId) && !(is_int($gdsCompanyCustomerId) || ctype_digit($gdsCompanyCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($gdsCompanyCustomerId, true), gettype($gdsCompanyCustomerId)), __LINE__);
        }
        $this->gdsCompanyCustomerId = $gdsCompanyCustomerId;
        
        return $this;
    }
    /**
     * Get gdsCompanyName value
     * @return string|null
     */
    public function getGdsCompanyName(): ?string
    {
        return $this->gdsCompanyName;
    }
    /**
     * Set gdsCompanyName value
     * @param string $gdsCompanyName
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setGdsCompanyName(?string $gdsCompanyName = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsCompanyName) && !is_string($gdsCompanyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsCompanyName, true), gettype($gdsCompanyName)), __LINE__);
        }
        $this->gdsCompanyName = $gdsCompanyName;
        
        return $this;
    }
    /**
     * Get gdsCompanyDebitorNo value
     * @return string|null
     */
    public function getGdsCompanyDebitorNo(): ?string
    {
        return $this->gdsCompanyDebitorNo;
    }
    /**
     * Set gdsCompanyDebitorNo value
     * @param string $gdsCompanyDebitorNo
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setGdsCompanyDebitorNo(?string $gdsCompanyDebitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsCompanyDebitorNo) && !is_string($gdsCompanyDebitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsCompanyDebitorNo, true), gettype($gdsCompanyDebitorNo)), __LINE__);
        }
        $this->gdsCompanyDebitorNo = $gdsCompanyDebitorNo;
        
        return $this;
    }
    /**
     * Get mediatorType value
     * @return string|null
     */
    public function getMediatorType(): ?string
    {
        return $this->mediatorType;
    }
    /**
     * Set mediatorType value
     * @param string $mediatorType
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setMediatorType(?string $mediatorType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorType) && !is_string($mediatorType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorType, true), gettype($mediatorType)), __LINE__);
        }
        $this->mediatorType = $mediatorType;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
    /**
     * Get contactId value
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerSearchDTO
     */
    public function setContactId(?int $contactId = null): self
    {
        // validation for constraint: int
        if (!is_null($contactId) && !(is_int($contactId) || ctype_digit($contactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
        
        return $this;
    }
}
