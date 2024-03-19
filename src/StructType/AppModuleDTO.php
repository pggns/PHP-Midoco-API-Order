<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppModuleDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AppModuleDTO extends AbstractStructBase
{
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The isDefault
     * @var bool|null
     */
    protected ?bool $isDefault = null;
    /**
     * The modulId
     * @var string|null
     */
    protected ?string $modulId = null;
    /**
     * Constructor method for AppModuleDTO
     * @uses AppModuleDTO::setAppId()
     * @uses AppModuleDTO::setIsDefault()
     * @uses AppModuleDTO::setModulId()
     * @param string $appId
     * @param bool $isDefault
     * @param string $modulId
     */
    public function __construct(?string $appId = null, ?bool $isDefault = null, ?string $modulId = null)
    {
        $this
            ->setAppId($appId)
            ->setIsDefault($isDefault)
            ->setModulId($modulId);
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
     * @return \Pggns\MidocoApi\Order\StructType\AppModuleDTO
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
     * Get isDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Set isDefault value
     * @param bool $isDefault
     * @return \Pggns\MidocoApi\Order\StructType\AppModuleDTO
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->isDefault = $isDefault;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AppModuleDTO
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
}
