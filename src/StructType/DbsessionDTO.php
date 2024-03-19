<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DbsessionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DbsessionDTO extends AbstractStructBase
{
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The lastUsed
     * @var string|null
     */
    protected ?string $lastUsed = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * The sessionId
     * @var string|null
     */
    protected ?string $sessionId = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * The timetolive
     * @var int|null
     */
    protected ?int $timetolive = null;
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
     * The workstationId
     * @var string|null
     */
    protected ?string $workstationId = null;
    /**
     * Constructor method for DbsessionDTO
     * @uses DbsessionDTO::setCreationTime()
     * @uses DbsessionDTO::setLastUsed()
     * @uses DbsessionDTO::setRoleId()
     * @uses DbsessionDTO::setSessionId()
     * @uses DbsessionDTO::setStatus()
     * @uses DbsessionDTO::setTimetolive()
     * @uses DbsessionDTO::setUnitName()
     * @uses DbsessionDTO::setUserId()
     * @uses DbsessionDTO::setWorkstationId()
     * @param string $creationTime
     * @param string $lastUsed
     * @param int $roleId
     * @param string $sessionId
     * @param int $status
     * @param int $timetolive
     * @param string $unitName
     * @param int $userId
     * @param string $workstationId
     */
    public function __construct(?string $creationTime = null, ?string $lastUsed = null, ?int $roleId = null, ?string $sessionId = null, ?int $status = null, ?int $timetolive = null, ?string $unitName = null, ?int $userId = null, ?string $workstationId = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setLastUsed($lastUsed)
            ->setRoleId($roleId)
            ->setSessionId($sessionId)
            ->setStatus($status)
            ->setTimetolive($timetolive)
            ->setUnitName($unitName)
            ->setUserId($userId)
            ->setWorkstationId($workstationId);
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get lastUsed value
     * @return string|null
     */
    public function getLastUsed(): ?string
    {
        return $this->lastUsed;
    }
    /**
     * Set lastUsed value
     * @param string $lastUsed
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionDTO
     */
    public function setLastUsed(?string $lastUsed = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUsed) && !is_string($lastUsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUsed, true), gettype($lastUsed)), __LINE__);
        }
        $this->lastUsed = $lastUsed;
        
        return $this;
    }
    /**
     * Get roleId value
     * @return int|null
     */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }
    /**
     * Set roleId value
     * @param int $roleId
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionDTO
     */
    public function setRoleId(?int $roleId = null): self
    {
        // validation for constraint: int
        if (!is_null($roleId) && !(is_int($roleId) || ctype_digit($roleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleId, true), gettype($roleId)), __LINE__);
        }
        $this->roleId = $roleId;
        
        return $this;
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $sessionId
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionDTO
     */
    public function setSessionId(?string $sessionId = null): self
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionDTO
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get timetolive value
     * @return int|null
     */
    public function getTimetolive(): ?int
    {
        return $this->timetolive;
    }
    /**
     * Set timetolive value
     * @param int $timetolive
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionDTO
     */
    public function setTimetolive(?int $timetolive = null): self
    {
        // validation for constraint: int
        if (!is_null($timetolive) && !(is_int($timetolive) || ctype_digit($timetolive))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timetolive, true), gettype($timetolive)), __LINE__);
        }
        $this->timetolive = $timetolive;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionDTO
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
    /**
     * Get workstationId value
     * @return string|null
     */
    public function getWorkstationId(): ?string
    {
        return $this->workstationId;
    }
    /**
     * Set workstationId value
     * @param string $workstationId
     * @return \Pggns\MidocoApi\Order\StructType\DbsessionDTO
     */
    public function setWorkstationId(?string $workstationId = null): self
    {
        // validation for constraint: string
        if (!is_null($workstationId) && !is_string($workstationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workstationId, true), gettype($workstationId)), __LINE__);
        }
        $this->workstationId = $workstationId;
        
        return $this;
    }
}
