<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgunitDTO StructType
 * @subpackage Structs
 */
class OrgunitDTO extends AbstractStructBase
{
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The contactPerson
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The defaultCultureId
     * @var string|null
     */
    protected ?string $defaultCultureId = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The email2
     * @var string|null
     */
    protected ?string $email2 = null;
    /**
     * The emailNotSentReceiver
     * @var string|null
     */
    protected ?string $emailNotSentReceiver = null;
    /**
     * The fax
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * The flighttimeEmail
     * @var string|null
     */
    protected ?string $flighttimeEmail = null;
    /**
     * The flighttimeRestrictions
     * @var string|null
     */
    protected ?string $flighttimeRestrictions = null;
    /**
     * The isPartCentCampDenied
     * @var bool|null
     */
    protected ?bool $isPartCentCampDenied = null;
    /**
     * The licenseRequired
     * @var bool|null
     */
    protected ?bool $licenseRequired = null;
    /**
     * The locked
     * @var bool|null
     */
    protected ?bool $locked = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The preventImport
     * @var bool|null
     */
    protected ?bool $preventImport = null;
    /**
     * The printName
     * @var string|null
     */
    protected ?string $printName = null;
    /**
     * The productive
     * @var bool|null
     */
    protected ?bool $productive = null;
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * The receiveEmail
     * @var string|null
     */
    protected ?string $receiveEmail = null;
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
     * The telephone
     * @var string|null
     */
    protected ?string $telephone = null;
    /**
     * The timeDifference
     * @var int|null
     */
    protected ?int $timeDifference = null;
    /**
     * The timezone
     * @var string|null
     */
    protected ?string $timezone = null;
    /**
     * The unitAlias
     * @var string|null
     */
    protected ?string $unitAlias = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The unitParent
     * @var string|null
     */
    protected ?string $unitParent = null;
    /**
     * The userGroup
     * @var bool|null
     */
    protected ?bool $userGroup = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * Constructor method for OrgunitDTO
     * @uses OrgunitDTO::setCity()
     * @uses OrgunitDTO::setContactPerson()
     * @uses OrgunitDTO::setCostCentre()
     * @uses OrgunitDTO::setCountryCode()
     * @uses OrgunitDTO::setCreationDate()
     * @uses OrgunitDTO::setDefaultCultureId()
     * @uses OrgunitDTO::setEmail()
     * @uses OrgunitDTO::setEmail2()
     * @uses OrgunitDTO::setEmailNotSentReceiver()
     * @uses OrgunitDTO::setFax()
     * @uses OrgunitDTO::setFlighttimeEmail()
     * @uses OrgunitDTO::setFlighttimeRestrictions()
     * @uses OrgunitDTO::setIsPartCentCampDenied()
     * @uses OrgunitDTO::setLicenseRequired()
     * @uses OrgunitDTO::setLocked()
     * @uses OrgunitDTO::setPostalCode()
     * @uses OrgunitDTO::setPreventImport()
     * @uses OrgunitDTO::setPrintName()
     * @uses OrgunitDTO::setProductive()
     * @uses OrgunitDTO::setQueueId()
     * @uses OrgunitDTO::setReceiveEmail()
     * @uses OrgunitDTO::setState()
     * @uses OrgunitDTO::setStreet()
     * @uses OrgunitDTO::setStreetNo()
     * @uses OrgunitDTO::setTelephone()
     * @uses OrgunitDTO::setTimeDifference()
     * @uses OrgunitDTO::setTimezone()
     * @uses OrgunitDTO::setUnitAlias()
     * @uses OrgunitDTO::setUnitName()
     * @uses OrgunitDTO::setUnitParent()
     * @uses OrgunitDTO::setUserGroup()
     * @uses OrgunitDTO::setVatId()
     * @param string $city
     * @param string $contactPerson
     * @param string $costCentre
     * @param string $countryCode
     * @param string $creationDate
     * @param string $defaultCultureId
     * @param string $email
     * @param string $email2
     * @param string $emailNotSentReceiver
     * @param string $fax
     * @param string $flighttimeEmail
     * @param string $flighttimeRestrictions
     * @param bool $isPartCentCampDenied
     * @param bool $licenseRequired
     * @param bool $locked
     * @param string $postalCode
     * @param bool $preventImport
     * @param string $printName
     * @param bool $productive
     * @param int $queueId
     * @param string $receiveEmail
     * @param string $state
     * @param string $street
     * @param string $streetNo
     * @param string $telephone
     * @param int $timeDifference
     * @param string $timezone
     * @param string $unitAlias
     * @param string $unitName
     * @param string $unitParent
     * @param bool $userGroup
     * @param string $vatId
     */
    public function __construct(?string $city = null, ?string $contactPerson = null, ?string $costCentre = null, ?string $countryCode = null, ?string $creationDate = null, ?string $defaultCultureId = null, ?string $email = null, ?string $email2 = null, ?string $emailNotSentReceiver = null, ?string $fax = null, ?string $flighttimeEmail = null, ?string $flighttimeRestrictions = null, ?bool $isPartCentCampDenied = null, ?bool $licenseRequired = null, ?bool $locked = null, ?string $postalCode = null, ?bool $preventImport = null, ?string $printName = null, ?bool $productive = null, ?int $queueId = null, ?string $receiveEmail = null, ?string $state = null, ?string $street = null, ?string $streetNo = null, ?string $telephone = null, ?int $timeDifference = null, ?string $timezone = null, ?string $unitAlias = null, ?string $unitName = null, ?string $unitParent = null, ?bool $userGroup = null, ?string $vatId = null)
    {
        $this
            ->setCity($city)
            ->setContactPerson($contactPerson)
            ->setCostCentre($costCentre)
            ->setCountryCode($countryCode)
            ->setCreationDate($creationDate)
            ->setDefaultCultureId($defaultCultureId)
            ->setEmail($email)
            ->setEmail2($email2)
            ->setEmailNotSentReceiver($emailNotSentReceiver)
            ->setFax($fax)
            ->setFlighttimeEmail($flighttimeEmail)
            ->setFlighttimeRestrictions($flighttimeRestrictions)
            ->setIsPartCentCampDenied($isPartCentCampDenied)
            ->setLicenseRequired($licenseRequired)
            ->setLocked($locked)
            ->setPostalCode($postalCode)
            ->setPreventImport($preventImport)
            ->setPrintName($printName)
            ->setProductive($productive)
            ->setQueueId($queueId)
            ->setReceiveEmail($receiveEmail)
            ->setState($state)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setTelephone($telephone)
            ->setTimeDifference($timeDifference)
            ->setTimezone($timezone)
            ->setUnitAlias($unitAlias)
            ->setUnitName($unitName)
            ->setUnitParent($unitParent)
            ->setUserGroup($userGroup)
            ->setVatId($vatId);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get defaultCultureId value
     * @return string|null
     */
    public function getDefaultCultureId(): ?string
    {
        return $this->defaultCultureId;
    }
    /**
     * Set defaultCultureId value
     * @param string $defaultCultureId
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setDefaultCultureId(?string $defaultCultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultCultureId) && !is_string($defaultCultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultCultureId, true), gettype($defaultCultureId)), __LINE__);
        }
        $this->defaultCultureId = $defaultCultureId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * Get email2 value
     * @return string|null
     */
    public function getEmail2(): ?string
    {
        return $this->email2;
    }
    /**
     * Set email2 value
     * @param string $email2
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setEmail2(?string $email2 = null): self
    {
        // validation for constraint: string
        if (!is_null($email2) && !is_string($email2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email2, true), gettype($email2)), __LINE__);
        }
        $this->email2 = $email2;
        
        return $this;
    }
    /**
     * Get emailNotSentReceiver value
     * @return string|null
     */
    public function getEmailNotSentReceiver(): ?string
    {
        return $this->emailNotSentReceiver;
    }
    /**
     * Set emailNotSentReceiver value
     * @param string $emailNotSentReceiver
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setEmailNotSentReceiver(?string $emailNotSentReceiver = null): self
    {
        // validation for constraint: string
        if (!is_null($emailNotSentReceiver) && !is_string($emailNotSentReceiver)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailNotSentReceiver, true), gettype($emailNotSentReceiver)), __LINE__);
        }
        $this->emailNotSentReceiver = $emailNotSentReceiver;
        
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        
        return $this;
    }
    /**
     * Get flighttimeEmail value
     * @return string|null
     */
    public function getFlighttimeEmail(): ?string
    {
        return $this->flighttimeEmail;
    }
    /**
     * Set flighttimeEmail value
     * @param string $flighttimeEmail
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setFlighttimeEmail(?string $flighttimeEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($flighttimeEmail) && !is_string($flighttimeEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flighttimeEmail, true), gettype($flighttimeEmail)), __LINE__);
        }
        $this->flighttimeEmail = $flighttimeEmail;
        
        return $this;
    }
    /**
     * Get flighttimeRestrictions value
     * @return string|null
     */
    public function getFlighttimeRestrictions(): ?string
    {
        return $this->flighttimeRestrictions;
    }
    /**
     * Set flighttimeRestrictions value
     * @param string $flighttimeRestrictions
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setFlighttimeRestrictions(?string $flighttimeRestrictions = null): self
    {
        // validation for constraint: string
        if (!is_null($flighttimeRestrictions) && !is_string($flighttimeRestrictions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flighttimeRestrictions, true), gettype($flighttimeRestrictions)), __LINE__);
        }
        $this->flighttimeRestrictions = $flighttimeRestrictions;
        
        return $this;
    }
    /**
     * Get isPartCentCampDenied value
     * @return bool|null
     */
    public function getIsPartCentCampDenied(): ?bool
    {
        return $this->isPartCentCampDenied;
    }
    /**
     * Set isPartCentCampDenied value
     * @param bool $isPartCentCampDenied
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setIsPartCentCampDenied(?bool $isPartCentCampDenied = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPartCentCampDenied) && !is_bool($isPartCentCampDenied)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPartCentCampDenied, true), gettype($isPartCentCampDenied)), __LINE__);
        }
        $this->isPartCentCampDenied = $isPartCentCampDenied;
        
        return $this;
    }
    /**
     * Get licenseRequired value
     * @return bool|null
     */
    public function getLicenseRequired(): ?bool
    {
        return $this->licenseRequired;
    }
    /**
     * Set licenseRequired value
     * @param bool $licenseRequired
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setLicenseRequired(?bool $licenseRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($licenseRequired) && !is_bool($licenseRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($licenseRequired, true), gettype($licenseRequired)), __LINE__);
        }
        $this->licenseRequired = $licenseRequired;
        
        return $this;
    }
    /**
     * Get locked value
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param bool $locked
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setLocked(?bool $locked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * Get preventImport value
     * @return bool|null
     */
    public function getPreventImport(): ?bool
    {
        return $this->preventImport;
    }
    /**
     * Set preventImport value
     * @param bool $preventImport
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setPreventImport(?bool $preventImport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventImport) && !is_bool($preventImport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventImport, true), gettype($preventImport)), __LINE__);
        }
        $this->preventImport = $preventImport;
        
        return $this;
    }
    /**
     * Get printName value
     * @return string|null
     */
    public function getPrintName(): ?string
    {
        return $this->printName;
    }
    /**
     * Set printName value
     * @param string $printName
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setPrintName(?string $printName = null): self
    {
        // validation for constraint: string
        if (!is_null($printName) && !is_string($printName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printName, true), gettype($printName)), __LINE__);
        }
        $this->printName = $printName;
        
        return $this;
    }
    /**
     * Get productive value
     * @return bool|null
     */
    public function getProductive(): ?bool
    {
        return $this->productive;
    }
    /**
     * Set productive value
     * @param bool $productive
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setProductive(?bool $productive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($productive) && !is_bool($productive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($productive, true), gettype($productive)), __LINE__);
        }
        $this->productive = $productive;
        
        return $this;
    }
    /**
     * Get queueId value
     * @return int|null
     */
    public function getQueueId(): ?int
    {
        return $this->queueId;
    }
    /**
     * Set queueId value
     * @param int $queueId
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setQueueId(?int $queueId = null): self
    {
        // validation for constraint: int
        if (!is_null($queueId) && !(is_int($queueId) || ctype_digit($queueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queueId, true), gettype($queueId)), __LINE__);
        }
        $this->queueId = $queueId;
        
        return $this;
    }
    /**
     * Get receiveEmail value
     * @return string|null
     */
    public function getReceiveEmail(): ?string
    {
        return $this->receiveEmail;
    }
    /**
     * Set receiveEmail value
     * @param string $receiveEmail
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setReceiveEmail(?string $receiveEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($receiveEmail) && !is_string($receiveEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiveEmail, true), gettype($receiveEmail)), __LINE__);
        }
        $this->receiveEmail = $receiveEmail;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * Get timeDifference value
     * @return int|null
     */
    public function getTimeDifference(): ?int
    {
        return $this->timeDifference;
    }
    /**
     * Set timeDifference value
     * @param int $timeDifference
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setTimeDifference(?int $timeDifference = null): self
    {
        // validation for constraint: int
        if (!is_null($timeDifference) && !(is_int($timeDifference) || ctype_digit($timeDifference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeDifference, true), gettype($timeDifference)), __LINE__);
        }
        $this->timeDifference = $timeDifference;
        
        return $this;
    }
    /**
     * Get timezone value
     * @return string|null
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }
    /**
     * Set timezone value
     * @param string $timezone
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setTimezone(?string $timezone = null): self
    {
        // validation for constraint: string
        if (!is_null($timezone) && !is_string($timezone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timezone, true), gettype($timezone)), __LINE__);
        }
        $this->timezone = $timezone;
        
        return $this;
    }
    /**
     * Get unitAlias value
     * @return string|null
     */
    public function getUnitAlias(): ?string
    {
        return $this->unitAlias;
    }
    /**
     * Set unitAlias value
     * @param string $unitAlias
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setUnitAlias(?string $unitAlias = null): self
    {
        // validation for constraint: string
        if (!is_null($unitAlias) && !is_string($unitAlias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitAlias, true), gettype($unitAlias)), __LINE__);
        }
        $this->unitAlias = $unitAlias;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
     * Get unitParent value
     * @return string|null
     */
    public function getUnitParent(): ?string
    {
        return $this->unitParent;
    }
    /**
     * Set unitParent value
     * @param string $unitParent
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setUnitParent(?string $unitParent = null): self
    {
        // validation for constraint: string
        if (!is_null($unitParent) && !is_string($unitParent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitParent, true), gettype($unitParent)), __LINE__);
        }
        $this->unitParent = $unitParent;
        
        return $this;
    }
    /**
     * Get userGroup value
     * @return bool|null
     */
    public function getUserGroup(): ?bool
    {
        return $this->userGroup;
    }
    /**
     * Set userGroup value
     * @param bool $userGroup
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
     */
    public function setUserGroup(?bool $userGroup = null): self
    {
        // validation for constraint: boolean
        if (!is_null($userGroup) && !is_bool($userGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userGroup, true), gettype($userGroup)), __LINE__);
        }
        $this->userGroup = $userGroup;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO
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
