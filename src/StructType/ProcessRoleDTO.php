<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessRoleDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessRoleDTO extends AbstractStructBase
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
     * Constructor method for ProcessRoleDTO
     * @uses ProcessRoleDTO::setProcessName()
     * @uses ProcessRoleDTO::setRole()
     * @param string $processName
     * @param string $role
     */
    public function __construct(?string $processName = null, ?string $role = null)
    {
        $this
            ->setProcessName($processName)
            ->setRole($role);
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessRoleDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessRoleDTO
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
}
