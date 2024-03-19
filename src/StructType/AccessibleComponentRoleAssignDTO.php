<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccessibleComponentRoleAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccessibleComponentRoleAssignDTO extends AbstractStructBase
{
    /**
     * The accessState
     * @var int|null
     */
    protected ?int $accessState = null;
    /**
     * The componentId
     * @var int|null
     */
    protected ?int $componentId = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * Constructor method for AccessibleComponentRoleAssignDTO
     * @uses AccessibleComponentRoleAssignDTO::setAccessState()
     * @uses AccessibleComponentRoleAssignDTO::setComponentId()
     * @uses AccessibleComponentRoleAssignDTO::setRoleId()
     * @param int $accessState
     * @param int $componentId
     * @param int $roleId
     */
    public function __construct(?int $accessState = null, ?int $componentId = null, ?int $roleId = null)
    {
        $this
            ->setAccessState($accessState)
            ->setComponentId($componentId)
            ->setRoleId($roleId);
    }
    /**
     * Get accessState value
     * @return int|null
     */
    public function getAccessState(): ?int
    {
        return $this->accessState;
    }
    /**
     * Set accessState value
     * @param int $accessState
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentRoleAssignDTO
     */
    public function setAccessState(?int $accessState = null): self
    {
        // validation for constraint: int
        if (!is_null($accessState) && !(is_int($accessState) || ctype_digit($accessState))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accessState, true), gettype($accessState)), __LINE__);
        }
        $this->accessState = $accessState;
        
        return $this;
    }
    /**
     * Get componentId value
     * @return int|null
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }
    /**
     * Set componentId value
     * @param int $componentId
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentRoleAssignDTO
     */
    public function setComponentId(?int $componentId = null): self
    {
        // validation for constraint: int
        if (!is_null($componentId) && !(is_int($componentId) || ctype_digit($componentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($componentId, true), gettype($componentId)), __LINE__);
        }
        $this->componentId = $componentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentRoleAssignDTO
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
