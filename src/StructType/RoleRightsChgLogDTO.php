<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoleRightsChgLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoleRightsChgLogDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The rightId
     * @var string|null
     */
    protected ?string $rightId = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for RoleRightsChgLogDTO
     * @uses RoleRightsChgLogDTO::setChangeId()
     * @uses RoleRightsChgLogDTO::setRightId()
     * @uses RoleRightsChgLogDTO::setRoleId()
     * @uses RoleRightsChgLogDTO::setTimestamp()
     * @uses RoleRightsChgLogDTO::setUserId()
     * @param int $changeId
     * @param string $rightId
     * @param int $roleId
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?int $changeId = null, ?string $rightId = null, ?int $roleId = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setChangeId($changeId)
            ->setRightId($rightId)
            ->setRoleId($roleId)
            ->setTimestamp($timestamp)
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleRightsChgLogDTO
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
     * Get rightId value
     * @return string|null
     */
    public function getRightId(): ?string
    {
        return $this->rightId;
    }
    /**
     * Set rightId value
     * @param string $rightId
     * @return \Pggns\MidocoApi\Order\StructType\RoleRightsChgLogDTO
     */
    public function setRightId(?string $rightId = null): self
    {
        // validation for constraint: string
        if (!is_null($rightId) && !is_string($rightId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rightId, true), gettype($rightId)), __LINE__);
        }
        $this->rightId = $rightId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleRightsChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleRightsChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleRightsChgLogDTO
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
