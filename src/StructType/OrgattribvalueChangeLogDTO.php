<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgattribvalueChangeLogDTO StructType
 * @subpackage Structs
 */
class OrgattribvalueChangeLogDTO extends AbstractStructBase
{
    /**
     * The attribName
     * @var string|null
     */
    protected ?string $attribName = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The newValue
     * @var string|null
     */
    protected ?string $newValue = null;
    /**
     * The oldValue
     * @var string|null
     */
    protected ?string $oldValue = null;
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
     * Constructor method for OrgattribvalueChangeLogDTO
     * @uses OrgattribvalueChangeLogDTO::setAttribName()
     * @uses OrgattribvalueChangeLogDTO::setChangeId()
     * @uses OrgattribvalueChangeLogDTO::setNewValue()
     * @uses OrgattribvalueChangeLogDTO::setOldValue()
     * @uses OrgattribvalueChangeLogDTO::setTimestamp()
     * @uses OrgattribvalueChangeLogDTO::setUnitName()
     * @uses OrgattribvalueChangeLogDTO::setUserId()
     * @param string $attribName
     * @param int $changeId
     * @param string $newValue
     * @param string $oldValue
     * @param string $timestamp
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?string $attribName = null, ?int $changeId = null, ?string $newValue = null, ?string $oldValue = null, ?string $timestamp = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setAttribName($attribName)
            ->setChangeId($changeId)
            ->setNewValue($newValue)
            ->setOldValue($oldValue)
            ->setTimestamp($timestamp)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get attribName value
     * @return string|null
     */
    public function getAttribName(): ?string
    {
        return $this->attribName;
    }
    /**
     * Set attribName value
     * @param string $attribName
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueChangeLogDTO
     */
    public function setAttribName(?string $attribName = null): self
    {
        // validation for constraint: string
        if (!is_null($attribName) && !is_string($attribName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribName, true), gettype($attribName)), __LINE__);
        }
        $this->attribName = $attribName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueChangeLogDTO
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
     * Get newValue value
     * @return string|null
     */
    public function getNewValue(): ?string
    {
        return $this->newValue;
    }
    /**
     * Set newValue value
     * @param string $newValue
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueChangeLogDTO
     */
    public function setNewValue(?string $newValue = null): self
    {
        // validation for constraint: string
        if (!is_null($newValue) && !is_string($newValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newValue, true), gettype($newValue)), __LINE__);
        }
        $this->newValue = $newValue;
        
        return $this;
    }
    /**
     * Get oldValue value
     * @return string|null
     */
    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }
    /**
     * Set oldValue value
     * @param string $oldValue
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueChangeLogDTO
     */
    public function setOldValue(?string $oldValue = null): self
    {
        // validation for constraint: string
        if (!is_null($oldValue) && !is_string($oldValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldValue, true), gettype($oldValue)), __LINE__);
        }
        $this->oldValue = $oldValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgattribvalueChangeLogDTO
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
