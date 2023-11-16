<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoProcessRoleAssign StructType
 * @subpackage Structs
 */
class MidocoProcessRoleAssign extends ProcessRoleAssignDTO
{
    /**
     * The roleName
     * @var string|null
     */
    protected ?string $roleName = null;
    /**
     * Constructor method for MidocoProcessRoleAssign
     * @uses MidocoProcessRoleAssign::setRoleName()
     * @param string $roleName
     */
    public function __construct(?string $roleName = null)
    {
        $this
            ->setRoleName($roleName);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProcessRoleAssign
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
}
