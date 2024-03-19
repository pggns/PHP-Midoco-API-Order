<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoleDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoleDTO extends AbstractStructBase
{
    /**
     * The grade
     * @var int|null
     */
    protected ?int $grade = null;
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
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for RoleDTO
     * @uses RoleDTO::setGrade()
     * @uses RoleDTO::setIsRoleInherited()
     * @uses RoleDTO::setRoleId()
     * @uses RoleDTO::setRoleName()
     * @uses RoleDTO::setUnitName()
     * @param int $grade
     * @param bool $isRoleInherited
     * @param int $roleId
     * @param string $roleName
     * @param string $unitName
     */
    public function __construct(?int $grade = null, ?bool $isRoleInherited = null, ?int $roleId = null, ?string $roleName = null, ?string $unitName = null)
    {
        $this
            ->setGrade($grade)
            ->setIsRoleInherited($isRoleInherited)
            ->setRoleId($roleId)
            ->setRoleName($roleName)
            ->setUnitName($unitName);
    }
    /**
     * Get grade value
     * @return int|null
     */
    public function getGrade(): ?int
    {
        return $this->grade;
    }
    /**
     * Set grade value
     * @param int $grade
     * @return \Pggns\MidocoApi\Order\StructType\RoleDTO
     */
    public function setGrade(?int $grade = null): self
    {
        // validation for constraint: int
        if (!is_null($grade) && !(is_int($grade) || ctype_digit($grade))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($grade, true), gettype($grade)), __LINE__);
        }
        $this->grade = $grade;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleDTO
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
}
