<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalCampaignAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalCampaignAssignDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The extCampId
     * @var int|null
     */
    protected ?int $extCampId = null;
    /**
     * The externalReference
     * @var string|null
     */
    protected ?string $externalReference = null;
    /**
     * The recipient
     * @var string|null
     */
    protected ?string $recipient = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for ExternalCampaignAssignDTO
     * @uses ExternalCampaignAssignDTO::setCustomerId()
     * @uses ExternalCampaignAssignDTO::setExtCampId()
     * @uses ExternalCampaignAssignDTO::setExternalReference()
     * @uses ExternalCampaignAssignDTO::setRecipient()
     * @uses ExternalCampaignAssignDTO::setUnitName()
     * @param int $customerId
     * @param int $extCampId
     * @param string $externalReference
     * @param string $recipient
     * @param string $unitName
     */
    public function __construct(?int $customerId = null, ?int $extCampId = null, ?string $externalReference = null, ?string $recipient = null, ?string $unitName = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setExtCampId($extCampId)
            ->setExternalReference($externalReference)
            ->setRecipient($recipient)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO
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
     * Get extCampId value
     * @return int|null
     */
    public function getExtCampId(): ?int
    {
        return $this->extCampId;
    }
    /**
     * Set extCampId value
     * @param int $extCampId
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO
     */
    public function setExtCampId(?int $extCampId = null): self
    {
        // validation for constraint: int
        if (!is_null($extCampId) && !(is_int($extCampId) || ctype_digit($extCampId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extCampId, true), gettype($extCampId)), __LINE__);
        }
        $this->extCampId = $extCampId;
        
        return $this;
    }
    /**
     * Get externalReference value
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }
    /**
     * Set externalReference value
     * @param string $externalReference
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO
     */
    public function setExternalReference(?string $externalReference = null): self
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReference, true), gettype($externalReference)), __LINE__);
        }
        $this->externalReference = $externalReference;
        
        return $this;
    }
    /**
     * Get recipient value
     * @return string|null
     */
    public function getRecipient(): ?string
    {
        return $this->recipient;
    }
    /**
     * Set recipient value
     * @param string $recipient
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO
     */
    public function setRecipient(?string $recipient = null): self
    {
        // validation for constraint: string
        if (!is_null($recipient) && !is_string($recipient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipient, true), gettype($recipient)), __LINE__);
        }
        $this->recipient = $recipient;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExternalCampaignAssignDTO
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
