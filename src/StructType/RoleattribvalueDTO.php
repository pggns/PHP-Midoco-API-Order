<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoleattribvalueDTO StructType
 * @subpackage Structs
 */
class RoleattribvalueDTO extends AbstractStructBase
{
    /**
     * The attribName
     * @var string|null
     */
    protected ?string $attribName = null;
    /**
     * The attribValue
     * @var string|null
     */
    protected ?string $attribValue = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * Constructor method for RoleattribvalueDTO
     * @uses RoleattribvalueDTO::setAttribName()
     * @uses RoleattribvalueDTO::setAttribValue()
     * @uses RoleattribvalueDTO::setRoleId()
     * @param string $attribName
     * @param string $attribValue
     * @param int $roleId
     */
    public function __construct(?string $attribName = null, ?string $attribValue = null, ?int $roleId = null)
    {
        $this
            ->setAttribName($attribName)
            ->setAttribValue($attribValue)
            ->setRoleId($roleId);
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleattribvalueDTO
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
     * Get attribValue value
     * @return string|null
     */
    public function getAttribValue(): ?string
    {
        return $this->attribValue;
    }
    /**
     * Set attribValue value
     * @param string $attribValue
     * @return \Pggns\MidocoApi\Order\StructType\RoleattribvalueDTO
     */
    public function setAttribValue(?string $attribValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attribValue) && !is_string($attribValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribValue, true), gettype($attribValue)), __LINE__);
        }
        $this->attribValue = $attribValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RoleattribvalueDTO
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
