<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccessDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccessDimensionDTO extends AbstractStructBase
{
    /**
     * The dimensionName
     * @var string|null
     */
    protected ?string $dimensionName = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * Constructor method for AccessDimensionDTO
     * @uses AccessDimensionDTO::setDimensionName()
     * @uses AccessDimensionDTO::setOrgUnit()
     * @uses AccessDimensionDTO::setRoleId()
     * @param string $dimensionName
     * @param string $orgUnit
     * @param int $roleId
     */
    public function __construct(?string $dimensionName = null, ?string $orgUnit = null, ?int $roleId = null)
    {
        $this
            ->setDimensionName($dimensionName)
            ->setOrgUnit($orgUnit)
            ->setRoleId($roleId);
    }
    /**
     * Get dimensionName value
     * @return string|null
     */
    public function getDimensionName(): ?string
    {
        return $this->dimensionName;
    }
    /**
     * Set dimensionName value
     * @param string $dimensionName
     * @return \Pggns\MidocoApi\Order\StructType\AccessDimensionDTO
     */
    public function setDimensionName(?string $dimensionName = null): self
    {
        // validation for constraint: string
        if (!is_null($dimensionName) && !is_string($dimensionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dimensionName, true), gettype($dimensionName)), __LINE__);
        }
        $this->dimensionName = $dimensionName;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\AccessDimensionDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccessDimensionDTO
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
