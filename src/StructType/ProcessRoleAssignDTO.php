<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessRoleAssignDTO StructType
 * @subpackage Structs
 */
class ProcessRoleAssignDTO extends AbstractStructBase
{
    /**
     * The processName
     * @var string|null
     */
    protected ?string $processName = null;
    /**
     * The role
     * @var string|null
     */
    protected ?string $role = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * Constructor method for ProcessRoleAssignDTO
     * @uses ProcessRoleAssignDTO::setProcessName()
     * @uses ProcessRoleAssignDTO::setRole()
     * @uses ProcessRoleAssignDTO::setRoleId()
     * @param string $processName
     * @param string $role
     * @param int $roleId
     */
    public function __construct(?string $processName = null, ?string $role = null, ?int $roleId = null)
    {
        $this
            ->setProcessName($processName)
            ->setRole($role)
            ->setRoleId($roleId);
    }
    /**
     * Get processName value
     * @return string|null
     */
    public function getProcessName(): ?string
    {
        return $this->processName;
    }
    /**
     * Set processName value
     * @param string $processName
     * @return \Pggns\MidocoApi\Order\StructType\ProcessRoleAssignDTO
     */
    public function setProcessName(?string $processName = null): self
    {
        // validation for constraint: string
        if (!is_null($processName) && !is_string($processName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processName, true), gettype($processName)), __LINE__);
        }
        $this->processName = $processName;
        
        return $this;
    }
    /**
     * Get role value
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }
    /**
     * Set role value
     * @param string $role
     * @return \Pggns\MidocoApi\Order\StructType\ProcessRoleAssignDTO
     */
    public function setRole(?string $role = null): self
    {
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($role, true), gettype($role)), __LINE__);
        }
        $this->role = $role;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessRoleAssignDTO
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
}
