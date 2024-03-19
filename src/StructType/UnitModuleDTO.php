<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitModuleDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UnitModuleDTO extends AbstractStructBase
{
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The inheritable
     * @var bool|null
     */
    protected ?bool $inheritable = null;
    /**
     * The modulId
     * @var string|null
     */
    protected ?string $modulId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for UnitModuleDTO
     * @uses UnitModuleDTO::setAppId()
     * @uses UnitModuleDTO::setInheritable()
     * @uses UnitModuleDTO::setModulId()
     * @uses UnitModuleDTO::setUnitName()
     * @param string $appId
     * @param bool $inheritable
     * @param string $modulId
     * @param string $unitName
     */
    public function __construct(?string $appId = null, ?bool $inheritable = null, ?string $modulId = null, ?string $unitName = null)
    {
        $this
            ->setAppId($appId)
            ->setInheritable($inheritable)
            ->setModulId($modulId)
            ->setUnitName($unitName);
    }
    /**
     * Get appId value
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }
    /**
     * Set appId value
     * @param string $appId
     * @return \Pggns\MidocoApi\Order\StructType\UnitModuleDTO
     */
    public function setAppId(?string $appId = null): self
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->appId = $appId;
        
        return $this;
    }
    /**
     * Get inheritable value
     * @return bool|null
     */
    public function getInheritable(): ?bool
    {
        return $this->inheritable;
    }
    /**
     * Set inheritable value
     * @param bool $inheritable
     * @return \Pggns\MidocoApi\Order\StructType\UnitModuleDTO
     */
    public function setInheritable(?bool $inheritable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inheritable) && !is_bool($inheritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inheritable, true), gettype($inheritable)), __LINE__);
        }
        $this->inheritable = $inheritable;
        
        return $this;
    }
    /**
     * Get modulId value
     * @return string|null
     */
    public function getModulId(): ?string
    {
        return $this->modulId;
    }
    /**
     * Set modulId value
     * @param string $modulId
     * @return \Pggns\MidocoApi\Order\StructType\UnitModuleDTO
     */
    public function setModulId(?string $modulId = null): self
    {
        // validation for constraint: string
        if (!is_null($modulId) && !is_string($modulId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modulId, true), gettype($modulId)), __LINE__);
        }
        $this->modulId = $modulId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UnitModuleDTO
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
