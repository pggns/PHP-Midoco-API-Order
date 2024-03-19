<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoleRightDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RoleRightDTO extends AbstractStructBase
{
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
     * Constructor method for RoleRightDTO
     * @uses RoleRightDTO::setRightId()
     * @uses RoleRightDTO::setRoleId()
     * @param string $rightId
     * @param int $roleId
     */
    public function __construct(?string $rightId = null, ?int $roleId = null)
    {
        $this
            ->setRightId($rightId)
            ->setRoleId($roleId);
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleRightDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleRightDTO
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
