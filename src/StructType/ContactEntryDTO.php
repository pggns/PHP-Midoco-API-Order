<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactEntryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ContactEntryDTO extends AbstractStructBase
{
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The consentTimestamp
     * @var string|null
     */
    protected ?string $consentTimestamp = null;
    /**
     * The contactData
     * @var string|null
     */
    protected ?string $contactData = null;
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * The contactUrl
     * @var string|null
     */
    protected ?string $contactUrl = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The emailChecked
     * @var int|null
     */
    protected ?int $emailChecked = null;
    /**
     * The externalConsentId
     * @var string|null
     */
    protected ?string $externalConsentId = null;
    /**
     * The mailingStatus
     * @var string|null
     */
    protected ?string $mailingStatus = null;
    /**
     * The mailingStatusModifyDate
     * @var string|null
     */
    protected ?string $mailingStatusModifyDate = null;
    /**
     * The mailingStatusModifyUser
     * @var int|null
     */
    protected ?int $mailingStatusModifyUser = null;
    /**
     * The mediaId
     * @var string|null
     */
    protected ?string $mediaId = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The notAvailable
     * @var bool|null
     */
    protected ?bool $notAvailable = null;
    /**
     * The notProvided
     * @var bool|null
     */
    protected ?bool $notProvided = null;
    /**
     * The phoneNrBackward
     * @var string|null
     */
    protected ?string $phoneNrBackward = null;
    /**
     * The phoneNrNormalized
     * @var string|null
     */
    protected ?string $phoneNrNormalized = null;
    /**
     * The useAsDefault
     * @var bool|null
     */
    protected ?bool $useAsDefault = null;
    /**
     * The useForMailing
     * @var bool|null
     */
    protected ?bool $useForMailing = null;
    /**
     * Constructor method for ContactEntryDTO
     * @uses ContactEntryDTO::setComment()
     * @uses ContactEntryDTO::setConsentTimestamp()
     * @uses ContactEntryDTO::setContactData()
     * @uses ContactEntryDTO::setContactId()
     * @uses ContactEntryDTO::setContactUrl()
     * @uses ContactEntryDTO::setCreationDate()
     * @uses ContactEntryDTO::setCreationUser()
     * @uses ContactEntryDTO::setCustomerId()
     * @uses ContactEntryDTO::setEmailChecked()
     * @uses ContactEntryDTO::setExternalConsentId()
     * @uses ContactEntryDTO::setMailingStatus()
     * @uses ContactEntryDTO::setMailingStatusModifyDate()
     * @uses ContactEntryDTO::setMailingStatusModifyUser()
     * @uses ContactEntryDTO::setMediaId()
     * @uses ContactEntryDTO::setModifyDate()
     * @uses ContactEntryDTO::setModifyUser()
     * @uses ContactEntryDTO::setNotAvailable()
     * @uses ContactEntryDTO::setNotProvided()
     * @uses ContactEntryDTO::setPhoneNrBackward()
     * @uses ContactEntryDTO::setPhoneNrNormalized()
     * @uses ContactEntryDTO::setUseAsDefault()
     * @uses ContactEntryDTO::setUseForMailing()
     * @param string $comment
     * @param string $consentTimestamp
     * @param string $contactData
     * @param int $contactId
     * @param string $contactUrl
     * @param string $creationDate
     * @param int $creationUser
     * @param int $customerId
     * @param int $emailChecked
     * @param string $externalConsentId
     * @param string $mailingStatus
     * @param string $mailingStatusModifyDate
     * @param int $mailingStatusModifyUser
     * @param string $mediaId
     * @param string $modifyDate
     * @param int $modifyUser
     * @param bool $notAvailable
     * @param bool $notProvided
     * @param string $phoneNrBackward
     * @param string $phoneNrNormalized
     * @param bool $useAsDefault
     * @param bool $useForMailing
     */
    public function __construct(?string $comment = null, ?string $consentTimestamp = null, ?string $contactData = null, ?int $contactId = null, ?string $contactUrl = null, ?string $creationDate = null, ?int $creationUser = null, ?int $customerId = null, ?int $emailChecked = null, ?string $externalConsentId = null, ?string $mailingStatus = null, ?string $mailingStatusModifyDate = null, ?int $mailingStatusModifyUser = null, ?string $mediaId = null, ?string $modifyDate = null, ?int $modifyUser = null, ?bool $notAvailable = null, ?bool $notProvided = null, ?string $phoneNrBackward = null, ?string $phoneNrNormalized = null, ?bool $useAsDefault = null, ?bool $useForMailing = null)
    {
        $this
            ->setComment($comment)
            ->setConsentTimestamp($consentTimestamp)
            ->setContactData($contactData)
            ->setContactId($contactId)
            ->setContactUrl($contactUrl)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setCustomerId($customerId)
            ->setEmailChecked($emailChecked)
            ->setExternalConsentId($externalConsentId)
            ->setMailingStatus($mailingStatus)
            ->setMailingStatusModifyDate($mailingStatusModifyDate)
            ->setMailingStatusModifyUser($mailingStatusModifyUser)
            ->setMediaId($mediaId)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setNotAvailable($notAvailable)
            ->setNotProvided($notProvided)
            ->setPhoneNrBackward($phoneNrBackward)
            ->setPhoneNrNormalized($phoneNrNormalized)
            ->setUseAsDefault($useAsDefault)
            ->setUseForMailing($useForMailing);
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
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
     * Get contactData value
     * @return string|null
     */
    public function getContactData(): ?string
    {
        return $this->contactData;
    }
    /**
     * Set contactData value
     * @param string $contactData
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setContactData(?string $contactData = null): self
    {
        // validation for constraint: string
        if (!is_null($contactData) && !is_string($contactData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactData, true), gettype($contactData)), __LINE__);
        }
        $this->contactData = $contactData;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
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
    /**
     * Get contactUrl value
     * @return string|null
     */
    public function getContactUrl(): ?string
    {
        return $this->contactUrl;
    }
    /**
     * Set contactUrl value
     * @param string $contactUrl
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setContactUrl(?string $contactUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($contactUrl) && !is_string($contactUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactUrl, true), gettype($contactUrl)), __LINE__);
        }
        $this->contactUrl = $contactUrl;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
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
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
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
     * Get emailChecked value
     * @return int|null
     */
    public function getEmailChecked(): ?int
    {
        return $this->emailChecked;
    }
    /**
     * Set emailChecked value
     * @param int $emailChecked
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setEmailChecked(?int $emailChecked = null): self
    {
        // validation for constraint: int
        if (!is_null($emailChecked) && !(is_int($emailChecked) || ctype_digit($emailChecked))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailChecked, true), gettype($emailChecked)), __LINE__);
        }
        $this->emailChecked = $emailChecked;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
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
     * Get mailingStatus value
     * @return string|null
     */
    public function getMailingStatus(): ?string
    {
        return $this->mailingStatus;
    }
    /**
     * Set mailingStatus value
     * @param string $mailingStatus
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setMailingStatus(?string $mailingStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($mailingStatus) && !is_string($mailingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailingStatus, true), gettype($mailingStatus)), __LINE__);
        }
        $this->mailingStatus = $mailingStatus;
        
        return $this;
    }
    /**
     * Get mailingStatusModifyDate value
     * @return string|null
     */
    public function getMailingStatusModifyDate(): ?string
    {
        return $this->mailingStatusModifyDate;
    }
    /**
     * Set mailingStatusModifyDate value
     * @param string $mailingStatusModifyDate
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setMailingStatusModifyDate(?string $mailingStatusModifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($mailingStatusModifyDate) && !is_string($mailingStatusModifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailingStatusModifyDate, true), gettype($mailingStatusModifyDate)), __LINE__);
        }
        $this->mailingStatusModifyDate = $mailingStatusModifyDate;
        
        return $this;
    }
    /**
     * Get mailingStatusModifyUser value
     * @return int|null
     */
    public function getMailingStatusModifyUser(): ?int
    {
        return $this->mailingStatusModifyUser;
    }
    /**
     * Set mailingStatusModifyUser value
     * @param int $mailingStatusModifyUser
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setMailingStatusModifyUser(?int $mailingStatusModifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($mailingStatusModifyUser) && !(is_int($mailingStatusModifyUser) || ctype_digit($mailingStatusModifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mailingStatusModifyUser, true), gettype($mailingStatusModifyUser)), __LINE__);
        }
        $this->mailingStatusModifyUser = $mailingStatusModifyUser;
        
        return $this;
    }
    /**
     * Get mediaId value
     * @return string|null
     */
    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }
    /**
     * Set mediaId value
     * @param string $mediaId
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setMediaId(?string $mediaId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaId) && !is_string($mediaId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaId, true), gettype($mediaId)), __LINE__);
        }
        $this->mediaId = $mediaId;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get notAvailable value
     * @return bool|null
     */
    public function getNotAvailable(): ?bool
    {
        return $this->notAvailable;
    }
    /**
     * Set notAvailable value
     * @param bool $notAvailable
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setNotAvailable(?bool $notAvailable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notAvailable) && !is_bool($notAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notAvailable, true), gettype($notAvailable)), __LINE__);
        }
        $this->notAvailable = $notAvailable;
        
        return $this;
    }
    /**
     * Get notProvided value
     * @return bool|null
     */
    public function getNotProvided(): ?bool
    {
        return $this->notProvided;
    }
    /**
     * Set notProvided value
     * @param bool $notProvided
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setNotProvided(?bool $notProvided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notProvided) && !is_bool($notProvided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notProvided, true), gettype($notProvided)), __LINE__);
        }
        $this->notProvided = $notProvided;
        
        return $this;
    }
    /**
     * Get phoneNrBackward value
     * @return string|null
     */
    public function getPhoneNrBackward(): ?string
    {
        return $this->phoneNrBackward;
    }
    /**
     * Set phoneNrBackward value
     * @param string $phoneNrBackward
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setPhoneNrBackward(?string $phoneNrBackward = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNrBackward) && !is_string($phoneNrBackward)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNrBackward, true), gettype($phoneNrBackward)), __LINE__);
        }
        $this->phoneNrBackward = $phoneNrBackward;
        
        return $this;
    }
    /**
     * Get phoneNrNormalized value
     * @return string|null
     */
    public function getPhoneNrNormalized(): ?string
    {
        return $this->phoneNrNormalized;
    }
    /**
     * Set phoneNrNormalized value
     * @param string $phoneNrNormalized
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setPhoneNrNormalized(?string $phoneNrNormalized = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNrNormalized) && !is_string($phoneNrNormalized)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNrNormalized, true), gettype($phoneNrNormalized)), __LINE__);
        }
        $this->phoneNrNormalized = $phoneNrNormalized;
        
        return $this;
    }
    /**
     * Get useAsDefault value
     * @return bool|null
     */
    public function getUseAsDefault(): ?bool
    {
        return $this->useAsDefault;
    }
    /**
     * Set useAsDefault value
     * @param bool $useAsDefault
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setUseAsDefault(?bool $useAsDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useAsDefault) && !is_bool($useAsDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useAsDefault, true), gettype($useAsDefault)), __LINE__);
        }
        $this->useAsDefault = $useAsDefault;
        
        return $this;
    }
    /**
     * Get useForMailing value
     * @return bool|null
     */
    public function getUseForMailing(): ?bool
    {
        return $this->useForMailing;
    }
    /**
     * Set useForMailing value
     * @param bool $useForMailing
     * @return \Pggns\MidocoApi\Order\StructType\ContactEntryDTO
     */
    public function setUseForMailing(?bool $useForMailing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useForMailing) && !is_bool($useForMailing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useForMailing, true), gettype($useForMailing)), __LINE__);
        }
        $this->useForMailing = $useForMailing;
        
        return $this;
    }
}
