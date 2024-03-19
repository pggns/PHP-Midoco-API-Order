<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitModulesNotAssignedDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UnitModulesNotAssignedDTO extends AbstractStructBase
{
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The modulId
     * @var string|null
     */
    protected ?string $modulId = null;
    /**
     * The notAssignedUnitName
     * @var string|null
     */
    protected ?string $notAssignedUnitName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for UnitModulesNotAssignedDTO
     * @uses UnitModulesNotAssignedDTO::setAppId()
     * @uses UnitModulesNotAssignedDTO::setModulId()
     * @uses UnitModulesNotAssignedDTO::setNotAssignedUnitName()
     * @uses UnitModulesNotAssignedDTO::setUnitName()
     * @param string $appId
     * @param string $modulId
     * @param string $notAssignedUnitName
     * @param string $unitName
     */
    public function __construct(?string $appId = null, ?string $modulId = null, ?string $notAssignedUnitName = null, ?string $unitName = null)
    {
        $this
            ->setAppId($appId)
            ->setModulId($modulId)
            ->setNotAssignedUnitName($notAssignedUnitName)
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
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesNotAssignedDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesNotAssignedDTO
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
     * Get notAssignedUnitName value
     * @return string|null
     */
    public function getNotAssignedUnitName(): ?string
    {
        return $this->notAssignedUnitName;
    }
    /**
     * Set notAssignedUnitName value
     * @param string $notAssignedUnitName
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesNotAssignedDTO
     */
    public function setNotAssignedUnitName(?string $notAssignedUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($notAssignedUnitName) && !is_string($notAssignedUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notAssignedUnitName, true), gettype($notAssignedUnitName)), __LINE__);
        }
        $this->notAssignedUnitName = $notAssignedUnitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesNotAssignedDTO
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
