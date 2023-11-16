<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommunicationDTO StructType
 * @subpackage Structs
 */
class CommunicationDTO extends AbstractStructBase
{
    /**
     * The addressType
     * @var string|null
     */
    protected ?string $addressType = null;
    /**
     * The consentTimestamp
     * @var string|null
     */
    protected ?string $consentTimestamp = null;
    /**
     * The data
     * @var string|null
     */
    protected ?string $data = null;
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
     * The mediaType
     * @var string|null
     */
    protected ?string $mediaType = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The useForMailing
     * @var bool|null
     */
    protected ?bool $useForMailing = null;
    /**
     * Constructor method for CommunicationDTO
     * @uses CommunicationDTO::setAddressType()
     * @uses CommunicationDTO::setConsentTimestamp()
     * @uses CommunicationDTO::setData()
     * @uses CommunicationDTO::setEmailChecked()
     * @uses CommunicationDTO::setExternalConsentId()
     * @uses CommunicationDTO::setMediaType()
     * @uses CommunicationDTO::setOrderId()
     * @uses CommunicationDTO::setUseForMailing()
     * @param string $addressType
     * @param string $consentTimestamp
     * @param string $data
     * @param int $emailChecked
     * @param string $externalConsentId
     * @param string $mediaType
     * @param int $orderId
     * @param bool $useForMailing
     */
    public function __construct(?string $addressType = null, ?string $consentTimestamp = null, ?string $data = null, ?int $emailChecked = null, ?string $externalConsentId = null, ?string $mediaType = null, ?int $orderId = null, ?bool $useForMailing = null)
    {
        $this
            ->setAddressType($addressType)
            ->setConsentTimestamp($consentTimestamp)
            ->setData($data)
            ->setEmailChecked($emailChecked)
            ->setExternalConsentId($externalConsentId)
            ->setMediaType($mediaType)
            ->setOrderId($orderId)
            ->setUseForMailing($useForMailing);
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
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationDTO
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
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationDTO
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationDTO
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
     * Get mediaType value
     * @return string|null
     */
    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }
    /**
     * Set mediaType value
     * @param string $mediaType
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationDTO
     */
    public function setMediaType(?string $mediaType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediaType) && !is_string($mediaType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediaType, true), gettype($mediaType)), __LINE__);
        }
        $this->mediaType = $mediaType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationDTO
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
