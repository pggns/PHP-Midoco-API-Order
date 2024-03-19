<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportContactType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoImportContactType extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The mediaId
     * @var string|null
     */
    protected ?string $mediaId = null;
    /**
     * The contactData
     * @var string|null
     */
    protected ?string $contactData = null;
    /**
     * The contactUrl
     * @var string|null
     */
    protected ?string $contactUrl = null;
    /**
     * The useForMailing
     * @var bool|null
     */
    protected ?bool $useForMailing = null;
    /**
     * The useAsDefault
     * @var bool|null
     */
    protected ?bool $useAsDefault = null;
    /**
     * The mailingStatus
     * @var string|null
     */
    protected ?string $mailingStatus = null;
    /**
     * The notProvided
     * @var bool|null
     */
    protected ?bool $notProvided = null;
    /**
     * The notAvailable
     * @var bool|null
     */
    protected ?bool $notAvailable = null;
    /**
     * Constructor method for MidocoImportContactType
     * @uses MidocoImportContactType::setCustomerId()
     * @uses MidocoImportContactType::setMediaId()
     * @uses MidocoImportContactType::setContactData()
     * @uses MidocoImportContactType::setContactUrl()
     * @uses MidocoImportContactType::setUseForMailing()
     * @uses MidocoImportContactType::setUseAsDefault()
     * @uses MidocoImportContactType::setMailingStatus()
     * @uses MidocoImportContactType::setNotProvided()
     * @uses MidocoImportContactType::setNotAvailable()
     * @param string $customerId
     * @param string $mediaId
     * @param string $contactData
     * @param string $contactUrl
     * @param bool $useForMailing
     * @param bool $useAsDefault
     * @param string $mailingStatus
     * @param bool $notProvided
     * @param bool $notAvailable
     */
    public function __construct(?string $customerId = null, ?string $mediaId = null, ?string $contactData = null, ?string $contactUrl = null, ?bool $useForMailing = null, ?bool $useAsDefault = null, ?string $mailingStatus = null, ?bool $notProvided = null, ?bool $notAvailable = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setMediaId($mediaId)
            ->setContactData($contactData)
            ->setContactUrl($contactUrl)
            ->setUseForMailing($useForMailing)
            ->setUseAsDefault($useAsDefault)
            ->setMailingStatus($mailingStatus)
            ->setNotProvided($notProvided)
            ->setNotAvailable($notAvailable);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType
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
}
