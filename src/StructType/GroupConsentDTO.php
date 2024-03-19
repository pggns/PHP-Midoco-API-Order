<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupConsentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GroupConsentDTO extends AbstractStructBase
{
    /**
     * The consentTimestamp
     * @var string|null
     */
    protected ?string $consentTimestamp = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The externalConsentId
     * @var string|null
     */
    protected ?string $externalConsentId = null;
    /**
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
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
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for GroupConsentDTO
     * @uses GroupConsentDTO::setConsentTimestamp()
     * @uses GroupConsentDTO::setCustomerId()
     * @uses GroupConsentDTO::setDescription()
     * @uses GroupConsentDTO::setExternalConsentId()
     * @uses GroupConsentDTO::setMailingProhibited()
     * @uses GroupConsentDTO::setMailingStatus()
     * @uses GroupConsentDTO::setMailingStatusModifyDate()
     * @uses GroupConsentDTO::setMailingStatusModifyUser()
     * @uses GroupConsentDTO::setType()
     * @param string $consentTimestamp
     * @param int $customerId
     * @param string $description
     * @param string $externalConsentId
     * @param bool $mailingProhibited
     * @param string $mailingStatus
     * @param string $mailingStatusModifyDate
     * @param int $mailingStatusModifyUser
     * @param string $type
     */
    public function __construct(?string $consentTimestamp = null, ?int $customerId = null, ?string $description = null, ?string $externalConsentId = null, ?bool $mailingProhibited = null, ?string $mailingStatus = null, ?string $mailingStatusModifyDate = null, ?int $mailingStatusModifyUser = null, ?string $type = null)
    {
        $this
            ->setConsentTimestamp($consentTimestamp)
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setExternalConsentId($externalConsentId)
            ->setMailingProhibited($mailingProhibited)
            ->setMailingStatus($mailingStatus)
            ->setMailingStatusModifyDate($mailingStatusModifyDate)
            ->setMailingStatusModifyUser($mailingStatusModifyUser)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupConsentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupConsentDTO
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\GroupConsentDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupConsentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupConsentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupConsentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupConsentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupConsentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\GroupConsentDTO
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
}
