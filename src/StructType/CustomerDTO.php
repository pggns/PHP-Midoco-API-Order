<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerDTO StructType
 * @subpackage Structs
 */
class CustomerDTO extends AbstractStructBase
{
    /**
     * The addresseeLine1
     * @var string|null
     */
    protected ?string $addresseeLine1 = null;
    /**
     * The addresseeLine2
     * @var string|null
     */
    protected ?string $addresseeLine2 = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The changingUser
     * @var int|null
     */
    protected ?int $changingUser = null;
    /**
     * The connectedCustomerId
     * @var int|null
     */
    protected ?int $connectedCustomerId = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The creatingUser
     * @var int|null
     */
    protected ?int $creatingUser = null;
    /**
     * The customerCategory
     * @var string|null
     */
    protected ?string $customerCategory = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dateChanged
     * @var string|null
     */
    protected ?string $dateChanged = null;
    /**
     * The dateCreated
     * @var string|null
     */
    protected ?string $dateCreated = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The defaultAddressId
     * @var int|null
     */
    protected ?int $defaultAddressId = null;
    /**
     * The defaultEmail
     * @var string|null
     */
    protected ?string $defaultEmail = null;
    /**
     * The defaultFax
     * @var string|null
     */
    protected ?string $defaultFax = null;
    /**
     * The defaultMobile
     * @var string|null
     */
    protected ?string $defaultMobile = null;
    /**
     * The defaultPhone
     * @var string|null
     */
    protected ?string $defaultPhone = null;
    /**
     * The defaultPhoneBusiness
     * @var string|null
     */
    protected ?string $defaultPhoneBusiness = null;
    /**
     * The defaultWeb
     * @var string|null
     */
    protected ?string $defaultWeb = null;
    /**
     * The deletedDate
     * @var string|null
     */
    protected ?string $deletedDate = null;
    /**
     * The deletedReasonId
     * @var int|null
     */
    protected ?int $deletedReasonId = null;
    /**
     * The deletedUser
     * @var int|null
     */
    protected ?int $deletedUser = null;
    /**
     * The exportRequired
     * @var bool|null
     */
    protected ?bool $exportRequired = null;
    /**
     * The extRefId
     * @var string|null
     */
    protected ?string $extRefId = null;
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The facesId
     * @var string|null
     */
    protected ?string $facesId = null;
    /**
     * The includeInSearch
     * @var bool|null
     */
    protected ?bool $includeInSearch = null;
    /**
     * The info
     * @var string|null
     */
    protected ?string $info = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The isAgency
     * @var bool|null
     */
    protected ?bool $isAgency = null;
    /**
     * The isCooperation
     * @var bool|null
     */
    protected ?bool $isCooperation = null;
    /**
     * The isDeleted
     * @var bool|null
     */
    protected ?bool $isDeleted = null;
    /**
     * The isMediator
     * @var bool|null
     */
    protected ?bool $isMediator = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The lockDate
     * @var string|null
     */
    protected ?string $lockDate = null;
    /**
     * The lockReasonId
     * @var string|null
     */
    protected ?string $lockReasonId = null;
    /**
     * The locked
     * @var bool|null
     */
    protected ?bool $locked = null;
    /**
     * The mailSalutation
     * @var string|null
     */
    protected ?string $mailSalutation = null;
    /**
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
    /**
     * The mailingProhibitedUntil
     * @var string|null
     */
    protected ?string $mailingProhibitedUntil = null;
    /**
     * The makeNewOrder
     * @var bool|null
     */
    protected ?bool $makeNewOrder = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorPortal
     * @var string|null
     */
    protected ?string $mediatorPortal = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The mergedCustomerId
     * @var int|null
     */
    protected ?int $mergedCustomerId = null;
    /**
     * The midocoUserId
     * @var int|null
     */
    protected ?int $midocoUserId = null;
    /**
     * The name2
     * @var string|null
     */
    protected ?string $name2 = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The responsibleDepartment
     * @var string|null
     */
    protected ?string $responsibleDepartment = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * The sortName
     * @var string|null
     */
    protected ?string $sortName = null;
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
     * Constructor method for CustomerDTO
     * @uses CustomerDTO::setAddresseeLine1()
     * @uses CustomerDTO::setAddresseeLine2()
     * @uses CustomerDTO::setAgencyId()
     * @uses CustomerDTO::setChangingUser()
     * @uses CustomerDTO::setConnectedCustomerId()
     * @uses CustomerDTO::setCooperationId()
     * @uses CustomerDTO::setCreatingUser()
     * @uses CustomerDTO::setCustomerCategory()
     * @uses CustomerDTO::setCustomerId()
     * @uses CustomerDTO::setDateChanged()
     * @uses CustomerDTO::setDateCreated()
     * @uses CustomerDTO::setDebitorNo()
     * @uses CustomerDTO::setDefaultAddressId()
     * @uses CustomerDTO::setDefaultEmail()
     * @uses CustomerDTO::setDefaultFax()
     * @uses CustomerDTO::setDefaultMobile()
     * @uses CustomerDTO::setDefaultPhone()
     * @uses CustomerDTO::setDefaultPhoneBusiness()
     * @uses CustomerDTO::setDefaultWeb()
     * @uses CustomerDTO::setDeletedDate()
     * @uses CustomerDTO::setDeletedReasonId()
     * @uses CustomerDTO::setDeletedUser()
     * @uses CustomerDTO::setExportRequired()
     * @uses CustomerDTO::setExtRefId()
     * @uses CustomerDTO::setExtSystem()
     * @uses CustomerDTO::setFacesId()
     * @uses CustomerDTO::setIncludeInSearch()
     * @uses CustomerDTO::setInfo()
     * @uses CustomerDTO::setInternalVersion()
     * @uses CustomerDTO::setIsAgency()
     * @uses CustomerDTO::setIsCooperation()
     * @uses CustomerDTO::setIsDeleted()
     * @uses CustomerDTO::setIsMediator()
     * @uses CustomerDTO::setLanguage()
     * @uses CustomerDTO::setLockDate()
     * @uses CustomerDTO::setLockReasonId()
     * @uses CustomerDTO::setLocked()
     * @uses CustomerDTO::setMailSalutation()
     * @uses CustomerDTO::setMailingProhibited()
     * @uses CustomerDTO::setMailingProhibitedUntil()
     * @uses CustomerDTO::setMakeNewOrder()
     * @uses CustomerDTO::setMediatorAffiliate()
     * @uses CustomerDTO::setMediatorId()
     * @uses CustomerDTO::setMediatorPortal()
     * @uses CustomerDTO::setMediatorType()
     * @uses CustomerDTO::setMergedCustomerId()
     * @uses CustomerDTO::setMidocoUserId()
     * @uses CustomerDTO::setName2()
     * @uses CustomerDTO::setPassword()
     * @uses CustomerDTO::setResponsibleDepartment()
     * @uses CustomerDTO::setSalutationId()
     * @uses CustomerDTO::setSortName()
     * @uses CustomerDTO::setType()
     * @uses CustomerDTO::setUnitName()
     * @param string $addresseeLine1
     * @param string $addresseeLine2
     * @param string $agencyId
     * @param int $changingUser
     * @param int $connectedCustomerId
     * @param string $cooperationId
     * @param int $creatingUser
     * @param string $customerCategory
     * @param int $customerId
     * @param string $dateChanged
     * @param string $dateCreated
     * @param string $debitorNo
     * @param int $defaultAddressId
     * @param string $defaultEmail
     * @param string $defaultFax
     * @param string $defaultMobile
     * @param string $defaultPhone
     * @param string $defaultPhoneBusiness
     * @param string $defaultWeb
     * @param string $deletedDate
     * @param int $deletedReasonId
     * @param int $deletedUser
     * @param bool $exportRequired
     * @param string $extRefId
     * @param string $extSystem
     * @param string $facesId
     * @param bool $includeInSearch
     * @param string $info
     * @param int $internalVersion
     * @param bool $isAgency
     * @param bool $isCooperation
     * @param bool $isDeleted
     * @param bool $isMediator
     * @param string $language
     * @param string $lockDate
     * @param string $lockReasonId
     * @param bool $locked
     * @param string $mailSalutation
     * @param bool $mailingProhibited
     * @param string $mailingProhibitedUntil
     * @param bool $makeNewOrder
     * @param string $mediatorAffiliate
     * @param string $mediatorId
     * @param string $mediatorPortal
     * @param string $mediatorType
     * @param int $mergedCustomerId
     * @param int $midocoUserId
     * @param string $name2
     * @param string $password
     * @param string $responsibleDepartment
     * @param string $salutationId
     * @param string $sortName
     * @param string $type
     * @param string $unitName
     */
    public function __construct(?string $addresseeLine1 = null, ?string $addresseeLine2 = null, ?string $agencyId = null, ?int $changingUser = null, ?int $connectedCustomerId = null, ?string $cooperationId = null, ?int $creatingUser = null, ?string $customerCategory = null, ?int $customerId = null, ?string $dateChanged = null, ?string $dateCreated = null, ?string $debitorNo = null, ?int $defaultAddressId = null, ?string $defaultEmail = null, ?string $defaultFax = null, ?string $defaultMobile = null, ?string $defaultPhone = null, ?string $defaultPhoneBusiness = null, ?string $defaultWeb = null, ?string $deletedDate = null, ?int $deletedReasonId = null, ?int $deletedUser = null, ?bool $exportRequired = null, ?string $extRefId = null, ?string $extSystem = null, ?string $facesId = null, ?bool $includeInSearch = null, ?string $info = null, ?int $internalVersion = null, ?bool $isAgency = null, ?bool $isCooperation = null, ?bool $isDeleted = null, ?bool $isMediator = null, ?string $language = null, ?string $lockDate = null, ?string $lockReasonId = null, ?bool $locked = null, ?string $mailSalutation = null, ?bool $mailingProhibited = null, ?string $mailingProhibitedUntil = null, ?bool $makeNewOrder = null, ?string $mediatorAffiliate = null, ?string $mediatorId = null, ?string $mediatorPortal = null, ?string $mediatorType = null, ?int $mergedCustomerId = null, ?int $midocoUserId = null, ?string $name2 = null, ?string $password = null, ?string $responsibleDepartment = null, ?string $salutationId = null, ?string $sortName = null, ?string $type = null, ?string $unitName = null)
    {
        $this
            ->setAddresseeLine1($addresseeLine1)
            ->setAddresseeLine2($addresseeLine2)
            ->setAgencyId($agencyId)
            ->setChangingUser($changingUser)
            ->setConnectedCustomerId($connectedCustomerId)
            ->setCooperationId($cooperationId)
            ->setCreatingUser($creatingUser)
            ->setCustomerCategory($customerCategory)
            ->setCustomerId($customerId)
            ->setDateChanged($dateChanged)
            ->setDateCreated($dateCreated)
            ->setDebitorNo($debitorNo)
            ->setDefaultAddressId($defaultAddressId)
            ->setDefaultEmail($defaultEmail)
            ->setDefaultFax($defaultFax)
            ->setDefaultMobile($defaultMobile)
            ->setDefaultPhone($defaultPhone)
            ->setDefaultPhoneBusiness($defaultPhoneBusiness)
            ->setDefaultWeb($defaultWeb)
            ->setDeletedDate($deletedDate)
            ->setDeletedReasonId($deletedReasonId)
            ->setDeletedUser($deletedUser)
            ->setExportRequired($exportRequired)
            ->setExtRefId($extRefId)
            ->setExtSystem($extSystem)
            ->setFacesId($facesId)
            ->setIncludeInSearch($includeInSearch)
            ->setInfo($info)
            ->setInternalVersion($internalVersion)
            ->setIsAgency($isAgency)
            ->setIsCooperation($isCooperation)
            ->setIsDeleted($isDeleted)
            ->setIsMediator($isMediator)
            ->setLanguage($language)
            ->setLockDate($lockDate)
            ->setLockReasonId($lockReasonId)
            ->setLocked($locked)
            ->setMailSalutation($mailSalutation)
            ->setMailingProhibited($mailingProhibited)
            ->setMailingProhibitedUntil($mailingProhibitedUntil)
            ->setMakeNewOrder($makeNewOrder)
            ->setMediatorAffiliate($mediatorAffiliate)
            ->setMediatorId($mediatorId)
            ->setMediatorPortal($mediatorPortal)
            ->setMediatorType($mediatorType)
            ->setMergedCustomerId($mergedCustomerId)
            ->setMidocoUserId($midocoUserId)
            ->setName2($name2)
            ->setPassword($password)
            ->setResponsibleDepartment($responsibleDepartment)
            ->setSalutationId($salutationId)
            ->setSortName($sortName)
            ->setType($type)
            ->setUnitName($unitName);
    }
    /**
     * Get addresseeLine1 value
     * @return string|null
     */
    public function getAddresseeLine1(): ?string
    {
        return $this->addresseeLine1;
    }
    /**
     * Set addresseeLine1 value
     * @param string $addresseeLine1
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setAddresseeLine1(?string $addresseeLine1 = null): self
    {
        // validation for constraint: string
        if (!is_null($addresseeLine1) && !is_string($addresseeLine1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeLine1, true), gettype($addresseeLine1)), __LINE__);
        }
        $this->addresseeLine1 = $addresseeLine1;
        
        return $this;
    }
    /**
     * Get addresseeLine2 value
     * @return string|null
     */
    public function getAddresseeLine2(): ?string
    {
        return $this->addresseeLine2;
    }
    /**
     * Set addresseeLine2 value
     * @param string $addresseeLine2
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setAddresseeLine2(?string $addresseeLine2 = null): self
    {
        // validation for constraint: string
        if (!is_null($addresseeLine2) && !is_string($addresseeLine2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeLine2, true), gettype($addresseeLine2)), __LINE__);
        }
        $this->addresseeLine2 = $addresseeLine2;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * Get changingUser value
     * @return int|null
     */
    public function getChangingUser(): ?int
    {
        return $this->changingUser;
    }
    /**
     * Set changingUser value
     * @param int $changingUser
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setChangingUser(?int $changingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($changingUser) && !(is_int($changingUser) || ctype_digit($changingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changingUser, true), gettype($changingUser)), __LINE__);
        }
        $this->changingUser = $changingUser;
        
        return $this;
    }
    /**
     * Get connectedCustomerId value
     * @return int|null
     */
    public function getConnectedCustomerId(): ?int
    {
        return $this->connectedCustomerId;
    }
    /**
     * Set connectedCustomerId value
     * @param int $connectedCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setConnectedCustomerId(?int $connectedCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($connectedCustomerId) && !(is_int($connectedCustomerId) || ctype_digit($connectedCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectedCustomerId, true), gettype($connectedCustomerId)), __LINE__);
        }
        $this->connectedCustomerId = $connectedCustomerId;
        
        return $this;
    }
    /**
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get creatingUser value
     * @return int|null
     */
    public function getCreatingUser(): ?int
    {
        return $this->creatingUser;
    }
    /**
     * Set creatingUser value
     * @param int $creatingUser
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setCreatingUser(?int $creatingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creatingUser) && !(is_int($creatingUser) || ctype_digit($creatingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creatingUser, true), gettype($creatingUser)), __LINE__);
        }
        $this->creatingUser = $creatingUser;
        
        return $this;
    }
    /**
     * Get customerCategory value
     * @return string|null
     */
    public function getCustomerCategory(): ?string
    {
        return $this->customerCategory;
    }
    /**
     * Set customerCategory value
     * @param string $customerCategory
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setCustomerCategory(?string $customerCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCategory) && !is_string($customerCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCategory, true), gettype($customerCategory)), __LINE__);
        }
        $this->customerCategory = $customerCategory;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * Get dateChanged value
     * @return string|null
     */
    public function getDateChanged(): ?string
    {
        return $this->dateChanged;
    }
    /**
     * Set dateChanged value
     * @param string $dateChanged
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDateChanged(?string $dateChanged = null): self
    {
        // validation for constraint: string
        if (!is_null($dateChanged) && !is_string($dateChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateChanged, true), gettype($dateChanged)), __LINE__);
        }
        $this->dateChanged = $dateChanged;
        
        return $this;
    }
    /**
     * Get dateCreated value
     * @return string|null
     */
    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }
    /**
     * Set dateCreated value
     * @param string $dateCreated
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDateCreated(?string $dateCreated = null): self
    {
        // validation for constraint: string
        if (!is_null($dateCreated) && !is_string($dateCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCreated, true), gettype($dateCreated)), __LINE__);
        }
        $this->dateCreated = $dateCreated;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * Get defaultAddressId value
     * @return int|null
     */
    public function getDefaultAddressId(): ?int
    {
        return $this->defaultAddressId;
    }
    /**
     * Set defaultAddressId value
     * @param int $defaultAddressId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDefaultAddressId(?int $defaultAddressId = null): self
    {
        // validation for constraint: int
        if (!is_null($defaultAddressId) && !(is_int($defaultAddressId) || ctype_digit($defaultAddressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultAddressId, true), gettype($defaultAddressId)), __LINE__);
        }
        $this->defaultAddressId = $defaultAddressId;
        
        return $this;
    }
    /**
     * Get defaultEmail value
     * @return string|null
     */
    public function getDefaultEmail(): ?string
    {
        return $this->defaultEmail;
    }
    /**
     * Set defaultEmail value
     * @param string $defaultEmail
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDefaultEmail(?string $defaultEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultEmail) && !is_string($defaultEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultEmail, true), gettype($defaultEmail)), __LINE__);
        }
        $this->defaultEmail = $defaultEmail;
        
        return $this;
    }
    /**
     * Get defaultFax value
     * @return string|null
     */
    public function getDefaultFax(): ?string
    {
        return $this->defaultFax;
    }
    /**
     * Set defaultFax value
     * @param string $defaultFax
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDefaultFax(?string $defaultFax = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultFax) && !is_string($defaultFax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultFax, true), gettype($defaultFax)), __LINE__);
        }
        $this->defaultFax = $defaultFax;
        
        return $this;
    }
    /**
     * Get defaultMobile value
     * @return string|null
     */
    public function getDefaultMobile(): ?string
    {
        return $this->defaultMobile;
    }
    /**
     * Set defaultMobile value
     * @param string $defaultMobile
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDefaultMobile(?string $defaultMobile = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultMobile) && !is_string($defaultMobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultMobile, true), gettype($defaultMobile)), __LINE__);
        }
        $this->defaultMobile = $defaultMobile;
        
        return $this;
    }
    /**
     * Get defaultPhone value
     * @return string|null
     */
    public function getDefaultPhone(): ?string
    {
        return $this->defaultPhone;
    }
    /**
     * Set defaultPhone value
     * @param string $defaultPhone
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDefaultPhone(?string $defaultPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultPhone) && !is_string($defaultPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultPhone, true), gettype($defaultPhone)), __LINE__);
        }
        $this->defaultPhone = $defaultPhone;
        
        return $this;
    }
    /**
     * Get defaultPhoneBusiness value
     * @return string|null
     */
    public function getDefaultPhoneBusiness(): ?string
    {
        return $this->defaultPhoneBusiness;
    }
    /**
     * Set defaultPhoneBusiness value
     * @param string $defaultPhoneBusiness
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDefaultPhoneBusiness(?string $defaultPhoneBusiness = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultPhoneBusiness) && !is_string($defaultPhoneBusiness)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultPhoneBusiness, true), gettype($defaultPhoneBusiness)), __LINE__);
        }
        $this->defaultPhoneBusiness = $defaultPhoneBusiness;
        
        return $this;
    }
    /**
     * Get defaultWeb value
     * @return string|null
     */
    public function getDefaultWeb(): ?string
    {
        return $this->defaultWeb;
    }
    /**
     * Set defaultWeb value
     * @param string $defaultWeb
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDefaultWeb(?string $defaultWeb = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultWeb) && !is_string($defaultWeb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultWeb, true), gettype($defaultWeb)), __LINE__);
        }
        $this->defaultWeb = $defaultWeb;
        
        return $this;
    }
    /**
     * Get deletedDate value
     * @return string|null
     */
    public function getDeletedDate(): ?string
    {
        return $this->deletedDate;
    }
    /**
     * Set deletedDate value
     * @param string $deletedDate
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDeletedDate(?string $deletedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deletedDate) && !is_string($deletedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deletedDate, true), gettype($deletedDate)), __LINE__);
        }
        $this->deletedDate = $deletedDate;
        
        return $this;
    }
    /**
     * Get deletedReasonId value
     * @return int|null
     */
    public function getDeletedReasonId(): ?int
    {
        return $this->deletedReasonId;
    }
    /**
     * Set deletedReasonId value
     * @param int $deletedReasonId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDeletedReasonId(?int $deletedReasonId = null): self
    {
        // validation for constraint: int
        if (!is_null($deletedReasonId) && !(is_int($deletedReasonId) || ctype_digit($deletedReasonId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deletedReasonId, true), gettype($deletedReasonId)), __LINE__);
        }
        $this->deletedReasonId = $deletedReasonId;
        
        return $this;
    }
    /**
     * Get deletedUser value
     * @return int|null
     */
    public function getDeletedUser(): ?int
    {
        return $this->deletedUser;
    }
    /**
     * Set deletedUser value
     * @param int $deletedUser
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setDeletedUser(?int $deletedUser = null): self
    {
        // validation for constraint: int
        if (!is_null($deletedUser) && !(is_int($deletedUser) || ctype_digit($deletedUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deletedUser, true), gettype($deletedUser)), __LINE__);
        }
        $this->deletedUser = $deletedUser;
        
        return $this;
    }
    /**
     * Get exportRequired value
     * @return bool|null
     */
    public function getExportRequired(): ?bool
    {
        return $this->exportRequired;
    }
    /**
     * Set exportRequired value
     * @param bool $exportRequired
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setExportRequired(?bool $exportRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportRequired) && !is_bool($exportRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportRequired, true), gettype($exportRequired)), __LINE__);
        }
        $this->exportRequired = $exportRequired;
        
        return $this;
    }
    /**
     * Get extRefId value
     * @return string|null
     */
    public function getExtRefId(): ?string
    {
        return $this->extRefId;
    }
    /**
     * Set extRefId value
     * @param string $extRefId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setExtRefId(?string $extRefId = null): self
    {
        // validation for constraint: string
        if (!is_null($extRefId) && !is_string($extRefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extRefId, true), gettype($extRefId)), __LINE__);
        }
        $this->extRefId = $extRefId;
        
        return $this;
    }
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
        return $this;
    }
    /**
     * Get facesId value
     * @return string|null
     */
    public function getFacesId(): ?string
    {
        return $this->facesId;
    }
    /**
     * Set facesId value
     * @param string $facesId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setFacesId(?string $facesId = null): self
    {
        // validation for constraint: string
        if (!is_null($facesId) && !is_string($facesId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facesId, true), gettype($facesId)), __LINE__);
        }
        $this->facesId = $facesId;
        
        return $this;
    }
    /**
     * Get includeInSearch value
     * @return bool|null
     */
    public function getIncludeInSearch(): ?bool
    {
        return $this->includeInSearch;
    }
    /**
     * Set includeInSearch value
     * @param bool $includeInSearch
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setIncludeInSearch(?bool $includeInSearch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeInSearch) && !is_bool($includeInSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeInSearch, true), gettype($includeInSearch)), __LINE__);
        }
        $this->includeInSearch = $includeInSearch;
        
        return $this;
    }
    /**
     * Get info value
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }
    /**
     * Set info value
     * @param string $info
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setInfo(?string $info = null): self
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), gettype($info)), __LINE__);
        }
        $this->info = $info;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get isAgency value
     * @return bool|null
     */
    public function getIsAgency(): ?bool
    {
        return $this->isAgency;
    }
    /**
     * Set isAgency value
     * @param bool $isAgency
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setIsAgency(?bool $isAgency = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAgency) && !is_bool($isAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAgency, true), gettype($isAgency)), __LINE__);
        }
        $this->isAgency = $isAgency;
        
        return $this;
    }
    /**
     * Get isCooperation value
     * @return bool|null
     */
    public function getIsCooperation(): ?bool
    {
        return $this->isCooperation;
    }
    /**
     * Set isCooperation value
     * @param bool $isCooperation
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setIsCooperation(?bool $isCooperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCooperation) && !is_bool($isCooperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCooperation, true), gettype($isCooperation)), __LINE__);
        }
        $this->isCooperation = $isCooperation;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * Get isMediator value
     * @return bool|null
     */
    public function getIsMediator(): ?bool
    {
        return $this->isMediator;
    }
    /**
     * Set isMediator value
     * @param bool $isMediator
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setIsMediator(?bool $isMediator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMediator) && !is_bool($isMediator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMediator, true), gettype($isMediator)), __LINE__);
        }
        $this->isMediator = $isMediator;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get lockDate value
     * @return string|null
     */
    public function getLockDate(): ?string
    {
        return $this->lockDate;
    }
    /**
     * Set lockDate value
     * @param string $lockDate
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setLockDate(?string $lockDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lockDate) && !is_string($lockDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockDate, true), gettype($lockDate)), __LINE__);
        }
        $this->lockDate = $lockDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * Get mailSalutation value
     * @return string|null
     */
    public function getMailSalutation(): ?string
    {
        return $this->mailSalutation;
    }
    /**
     * Set mailSalutation value
     * @param string $mailSalutation
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setMailSalutation(?string $mailSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($mailSalutation) && !is_string($mailSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailSalutation, true), gettype($mailSalutation)), __LINE__);
        }
        $this->mailSalutation = $mailSalutation;
        
        return $this;
    }
    /**
     * Get mailingProhibited value
     * @return bool|null
     */
    public function getMailingProhibited(): ?bool
    {
        return $this->mailingProhibited;
    }
    /**
     * Set mailingProhibited value
     * @param bool $mailingProhibited
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setMailingProhibited(?bool $mailingProhibited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibited) && !is_bool($mailingProhibited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibited, true), gettype($mailingProhibited)), __LINE__);
        }
        $this->mailingProhibited = $mailingProhibited;
        
        return $this;
    }
    /**
     * Get mailingProhibitedUntil value
     * @return string|null
     */
    public function getMailingProhibitedUntil(): ?string
    {
        return $this->mailingProhibitedUntil;
    }
    /**
     * Set mailingProhibitedUntil value
     * @param string $mailingProhibitedUntil
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setMailingProhibitedUntil(?string $mailingProhibitedUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($mailingProhibitedUntil) && !is_string($mailingProhibitedUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailingProhibitedUntil, true), gettype($mailingProhibitedUntil)), __LINE__);
        }
        $this->mailingProhibitedUntil = $mailingProhibitedUntil;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * Get mediatorPortal value
     * @return string|null
     */
    public function getMediatorPortal(): ?string
    {
        return $this->mediatorPortal;
    }
    /**
     * Set mediatorPortal value
     * @param string $mediatorPortal
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setMediatorPortal(?string $mediatorPortal = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorPortal) && !is_string($mediatorPortal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorPortal, true), gettype($mediatorPortal)), __LINE__);
        }
        $this->mediatorPortal = $mediatorPortal;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * Get mergedCustomerId value
     * @return int|null
     */
    public function getMergedCustomerId(): ?int
    {
        return $this->mergedCustomerId;
    }
    /**
     * Set mergedCustomerId value
     * @param int $mergedCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setMergedCustomerId(?int $mergedCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($mergedCustomerId) && !(is_int($mergedCustomerId) || ctype_digit($mergedCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mergedCustomerId, true), gettype($mergedCustomerId)), __LINE__);
        }
        $this->mergedCustomerId = $mergedCustomerId;
        
        return $this;
    }
    /**
     * Get midocoUserId value
     * @return int|null
     */
    public function getMidocoUserId(): ?int
    {
        return $this->midocoUserId;
    }
    /**
     * Set midocoUserId value
     * @param int $midocoUserId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setMidocoUserId(?int $midocoUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoUserId) && !(is_int($midocoUserId) || ctype_digit($midocoUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoUserId, true), gettype($midocoUserId)), __LINE__);
        }
        $this->midocoUserId = $midocoUserId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get responsibleDepartment value
     * @return string|null
     */
    public function getResponsibleDepartment(): ?string
    {
        return $this->responsibleDepartment;
    }
    /**
     * Set responsibleDepartment value
     * @param string $responsibleDepartment
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
     */
    public function setResponsibleDepartment(?string $responsibleDepartment = null): self
    {
        // validation for constraint: string
        if (!is_null($responsibleDepartment) && !is_string($responsibleDepartment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responsibleDepartment, true), gettype($responsibleDepartment)), __LINE__);
        }
        $this->responsibleDepartment = $responsibleDepartment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerDTO
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
