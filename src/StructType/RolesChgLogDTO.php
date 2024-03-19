<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RolesChgLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RolesChgLogDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The isRoleInherited
     * @var bool|null
     */
    protected ?bool $isRoleInherited = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * The roleName
     * @var string|null
     */
    protected ?string $roleName = null;
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
     * Constructor method for RolesChgLogDTO
     * @uses RolesChgLogDTO::setChangeId()
     * @uses RolesChgLogDTO::setIsRoleInherited()
     * @uses RolesChgLogDTO::setRoleId()
     * @uses RolesChgLogDTO::setRoleName()
     * @uses RolesChgLogDTO::setTimestamp()
     * @uses RolesChgLogDTO::setUnitName()
     * @uses RolesChgLogDTO::setUserId()
     * @param int $changeId
     * @param bool $isRoleInherited
     * @param int $roleId
     * @param string $roleName
     * @param string $timestamp
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?int $changeId = null, ?bool $isRoleInherited = null, ?int $roleId = null, ?string $roleName = null, ?string $timestamp = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setChangeId($changeId)
            ->setIsRoleInherited($isRoleInherited)
            ->setRoleId($roleId)
            ->setRoleName($roleName)
            ->setTimestamp($timestamp)
            ->setUnitName($unitName)
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Order\StructType\RolesChgLogDTO
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
     * Get isRoleInherited value
     * @return bool|null
     */
    public function getIsRoleInherited(): ?bool
    {
        return $this->isRoleInherited;
    }
    /**
     * Set isRoleInherited value
     * @param bool $isRoleInherited
     * @return \Pggns\MidocoApi\Order\StructType\RolesChgLogDTO
     */
    public function setIsRoleInherited(?bool $isRoleInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRoleInherited) && !is_bool($isRoleInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRoleInherited, true), gettype($isRoleInherited)), __LINE__);
        }
        $this->isRoleInherited = $isRoleInherited;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RolesChgLogDTO
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
     * Get roleName value
     * @return string|null
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }
    /**
     * Set roleName value
     * @param string $roleName
     * @return \Pggns\MidocoApi\Order\StructType\RolesChgLogDTO
     */
    public function setRoleName(?string $roleName = null): self
    {
        // validation for constraint: string
        if (!is_null($roleName) && !is_string($roleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roleName, true), gettype($roleName)), __LINE__);
        }
        $this->roleName = $roleName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RolesChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RolesChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RolesChgLogDTO
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
