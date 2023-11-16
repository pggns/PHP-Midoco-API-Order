<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportChangedCustomersLogDTO StructType
 * @subpackage Structs
 */
class ExportChangedCustomersLogDTO extends AbstractStructBase
{
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The isCatched
     * @var bool|null
     */
    protected ?bool $isCatched = null;
    /**
     * The reason
     * @var int|null
     */
    protected ?int $reason = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for ExportChangedCustomersLogDTO
     * @uses ExportChangedCustomersLogDTO::setAction()
     * @uses ExportChangedCustomersLogDTO::setChangeId()
     * @uses ExportChangedCustomersLogDTO::setCustomerId()
     * @uses ExportChangedCustomersLogDTO::setInternalVersion()
     * @uses ExportChangedCustomersLogDTO::setIsCatched()
     * @uses ExportChangedCustomersLogDTO::setReason()
     * @uses ExportChangedCustomersLogDTO::setTimestamp()
     * @uses ExportChangedCustomersLogDTO::setUnitName()
     * @uses ExportChangedCustomersLogDTO::setUserId()
     * @param string $action
     * @param int $changeId
     * @param int $customerId
     * @param int $internalVersion
     * @param bool $isCatched
     * @param int $reason
     * @param string $timestamp
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?string $action = null, ?int $changeId = null, ?int $customerId = null, ?int $internalVersion = null, ?bool $isCatched = null, ?int $reason = null, ?string $timestamp = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setAction($action)
            ->setChangeId($changeId)
            ->setCustomerId($customerId)
            ->setInternalVersion($internalVersion)
            ->setIsCatched($isCatched)
            ->setReason($reason)
            ->setTimestamp($timestamp)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedCustomersLogDTO
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
    /**
     * Get changeId value
     * @return int|null
     */
    public function getChangeId(): ?int
    {
        return $this->changeId;
    }
    /**
     * Set changeId value
     * @param int $changeId
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedCustomersLogDTO
     */
    public function setChangeId(?int $changeId = null): self
    {
        // validation for constraint: int
        if (!is_null($changeId) && !(is_int($changeId) || ctype_digit($changeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeId, true), gettype($changeId)), __LINE__);
        }
        $this->changeId = $changeId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedCustomersLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedCustomersLogDTO
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
     * Get isCatched value
     * @return bool|null
     */
    public function getIsCatched(): ?bool
    {
        return $this->isCatched;
    }
    /**
     * Set isCatched value
     * @param bool $isCatched
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedCustomersLogDTO
     */
    public function setIsCatched(?bool $isCatched = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCatched) && !is_bool($isCatched)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCatched, true), gettype($isCatched)), __LINE__);
        }
        $this->isCatched = $isCatched;
        
        return $this;
    }
    /**
     * Get reason value
     * @return int|null
     */
    public function getReason(): ?int
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param int $reason
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedCustomersLogDTO
     */
    public function setReason(?int $reason = null): self
    {
        // validation for constraint: int
        if (!is_null($reason) && !(is_int($reason) || ctype_digit($reason))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedCustomersLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedCustomersLogDTO
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedCustomersLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
