<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoConsentCommunicationType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoConsentCommunicationType extends AbstractStructBase
{
    /**
     * The consentId
     * @var string|null
     */
    protected ?string $consentId = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The mailingProhibted
     * @var bool|null
     */
    protected ?bool $mailingProhibted = null;
    /**
     * The mailingStatus
     * @var string|null
     */
    protected ?string $mailingStatus = null;
    /**
     * Constructor method for MidocoConsentCommunicationType
     * @uses MidocoConsentCommunicationType::setConsentId()
     * @uses MidocoConsentCommunicationType::setTimestamp()
     * @uses MidocoConsentCommunicationType::setMailingProhibted()
     * @uses MidocoConsentCommunicationType::setMailingStatus()
     * @param string $consentId
     * @param string $timestamp
     * @param bool $mailingProhibted
     * @param string $mailingStatus
     */
    public function __construct(?string $consentId = null, ?string $timestamp = null, ?bool $mailingProhibted = null, ?string $mailingStatus = null)
    {
        $this
            ->setConsentId($consentId)
            ->setTimestamp($timestamp)
            ->setMailingProhibted($mailingProhibted)
            ->setMailingStatus($mailingStatus);
    }
    /**
     * Get consentId value
     * @return string|null
     */
    public function getConsentId(): ?string
    {
        return $this->consentId;
    }
    /**
     * Set consentId value
     * @param string $consentId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsentCommunicationType
     */
    public function setConsentId(?string $consentId = null): self
    {
        // validation for constraint: string
        if (!is_null($consentId) && !is_string($consentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consentId, true), gettype($consentId)), __LINE__);
        }
        $this->consentId = $consentId;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsentCommunicationType
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get mailingProhibted value
     * @return bool|null
     */
    public function getMailingProhibted(): ?bool
    {
        return $this->mailingProhibted;
    }
    /**
     * Set mailingProhibted value
     * @param bool $mailingProhibted
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsentCommunicationType
     */
    public function setMailingProhibted(?bool $mailingProhibted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibted) && !is_bool($mailingProhibted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibted, true), gettype($mailingProhibted)), __LINE__);
        }
        $this->mailingProhibted = $mailingProhibted;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsentCommunicationType
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
}
