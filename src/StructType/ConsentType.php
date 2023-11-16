<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsentType StructType
 * @subpackage Structs
 */
class ConsentType extends AbstractStructBase
{
    /**
     * The consentId
     * @var string|null
     */
    protected ?string $consentId = null;
    /**
     * The groupId
     * @var string|null
     */
    protected ?string $groupId = null;
    /**
     * The groupContactPermitted
     * @var bool|null
     */
    protected ?bool $groupContactPermitted = null;
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
     * The updateCrmCustomer
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $updateCrmCustomer = null;
    /**
     * Constructor method for ConsentType
     * @uses ConsentType::setConsentId()
     * @uses ConsentType::setGroupId()
     * @uses ConsentType::setGroupContactPermitted()
     * @uses ConsentType::setTimestamp()
     * @uses ConsentType::setMailingProhibted()
     * @uses ConsentType::setMailingStatus()
     * @uses ConsentType::setUpdateCrmCustomer()
     * @param string $consentId
     * @param string $groupId
     * @param bool $groupContactPermitted
     * @param string $timestamp
     * @param bool $mailingProhibted
     * @param string $mailingStatus
     * @param bool $updateCrmCustomer
     */
    public function __construct(?string $consentId = null, ?string $groupId = null, ?bool $groupContactPermitted = null, ?string $timestamp = null, ?bool $mailingProhibted = null, ?string $mailingStatus = null, ?bool $updateCrmCustomer = true)
    {
        $this
            ->setConsentId($consentId)
            ->setGroupId($groupId)
            ->setGroupContactPermitted($groupContactPermitted)
            ->setTimestamp($timestamp)
            ->setMailingProhibted($mailingProhibted)
            ->setMailingStatus($mailingStatus)
            ->setUpdateCrmCustomer($updateCrmCustomer);
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
     * @return \Pggns\MidocoApi\Order\StructType\ConsentType
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
     * Get groupId value
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param string $groupId
     * @return \Pggns\MidocoApi\Order\StructType\ConsentType
     */
    public function setGroupId(?string $groupId = null): self
    {
        // validation for constraint: string
        if (!is_null($groupId) && !is_string($groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        
        return $this;
    }
    /**
     * Get groupContactPermitted value
     * @return bool|null
     */
    public function getGroupContactPermitted(): ?bool
    {
        return $this->groupContactPermitted;
    }
    /**
     * Set groupContactPermitted value
     * @param bool $groupContactPermitted
     * @return \Pggns\MidocoApi\Order\StructType\ConsentType
     */
    public function setGroupContactPermitted(?bool $groupContactPermitted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupContactPermitted) && !is_bool($groupContactPermitted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupContactPermitted, true), gettype($groupContactPermitted)), __LINE__);
        }
        $this->groupContactPermitted = $groupContactPermitted;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ConsentType
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
     * @return \Pggns\MidocoApi\Order\StructType\ConsentType
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
     * @return \Pggns\MidocoApi\Order\StructType\ConsentType
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
     * Get updateCrmCustomer value
     * @return bool|null
     */
    public function getUpdateCrmCustomer(): ?bool
    {
        return $this->updateCrmCustomer;
    }
    /**
     * Set updateCrmCustomer value
     * @param bool $updateCrmCustomer
     * @return \Pggns\MidocoApi\Order\StructType\ConsentType
     */
    public function setUpdateCrmCustomer(?bool $updateCrmCustomer = true): self
    {
        // validation for constraint: boolean
        if (!is_null($updateCrmCustomer) && !is_bool($updateCrmCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($updateCrmCustomer, true), gettype($updateCrmCustomer)), __LINE__);
        }
        $this->updateCrmCustomer = $updateCrmCustomer;
        
        return $this;
    }
}
