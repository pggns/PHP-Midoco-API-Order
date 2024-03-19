<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MfGroupAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MfGroupAssignDTO extends AbstractStructBase
{
    /**
     * The dtoClass
     * @var string|null
     */
    protected ?string $dtoClass = null;
    /**
     * The groupClass
     * @var string|null
     */
    protected ?string $groupClass = null;
    /**
     * The groupId
     * @var string|null
     */
    protected ?string $groupId = null;
    /**
     * The isGui
     * @var bool|null
     */
    protected ?bool $isGui = null;
    /**
     * Constructor method for MfGroupAssignDTO
     * @uses MfGroupAssignDTO::setDtoClass()
     * @uses MfGroupAssignDTO::setGroupClass()
     * @uses MfGroupAssignDTO::setGroupId()
     * @uses MfGroupAssignDTO::setIsGui()
     * @param string $dtoClass
     * @param string $groupClass
     * @param string $groupId
     * @param bool $isGui
     */
    public function __construct(?string $dtoClass = null, ?string $groupClass = null, ?string $groupId = null, ?bool $isGui = null)
    {
        $this
            ->setDtoClass($dtoClass)
            ->setGroupClass($groupClass)
            ->setGroupId($groupId)
            ->setIsGui($isGui);
    }
    /**
     * Get dtoClass value
     * @return string|null
     */
    public function getDtoClass(): ?string
    {
        return $this->dtoClass;
    }
    /**
     * Set dtoClass value
     * @param string $dtoClass
     * @return \Pggns\MidocoApi\Order\StructType\MfGroupAssignDTO
     */
    public function setDtoClass(?string $dtoClass = null): self
    {
        // validation for constraint: string
        if (!is_null($dtoClass) && !is_string($dtoClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dtoClass, true), gettype($dtoClass)), __LINE__);
        }
        $this->dtoClass = $dtoClass;
        
        return $this;
    }
    /**
     * Get groupClass value
     * @return string|null
     */
    public function getGroupClass(): ?string
    {
        return $this->groupClass;
    }
    /**
     * Set groupClass value
     * @param string $groupClass
     * @return \Pggns\MidocoApi\Order\StructType\MfGroupAssignDTO
     */
    public function setGroupClass(?string $groupClass = null): self
    {
        // validation for constraint: string
        if (!is_null($groupClass) && !is_string($groupClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupClass, true), gettype($groupClass)), __LINE__);
        }
        $this->groupClass = $groupClass;
        
        return $this;
    }
    /**
     * Get groupId value
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param string $groupId
     * @return \Pggns\MidocoApi\Order\StructType\MfGroupAssignDTO
     */
    public function setGroupId(?string $groupId = null): self
    {
        // validation for constraint: string
        if (!is_null($groupId) && !is_string($groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        
        return $this;
    }
    /**
     * Get isGui value
     * @return bool|null
     */
    public function getIsGui(): ?bool
    {
        return $this->isGui;
    }
    /**
     * Set isGui value
     * @param bool $isGui
     * @return \Pggns\MidocoApi\Order\StructType\MfGroupAssignDTO
     */
    public function setIsGui(?bool $isGui = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGui) && !is_bool($isGui)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGui, true), gettype($isGui)), __LINE__);
        }
        $this->isGui = $isGui;
        
        return $this;
    }
}
