<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitModulesChgLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UnitModulesChgLogDTO extends AbstractStructBase
{
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
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
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UnitModulesChgLogDTO
     * @uses UnitModulesChgLogDTO::setAppId()
     * @uses UnitModulesChgLogDTO::setChangeId()
     * @uses UnitModulesChgLogDTO::setInheritable()
     * @uses UnitModulesChgLogDTO::setModulId()
     * @uses UnitModulesChgLogDTO::setTimestamp()
     * @uses UnitModulesChgLogDTO::setUnitName()
     * @uses UnitModulesChgLogDTO::setUserId()
     * @param string $appId
     * @param int $changeId
     * @param bool $inheritable
     * @param string $modulId
     * @param string $timestamp
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?string $appId = null, ?int $changeId = null, ?bool $inheritable = null, ?string $modulId = null, ?string $timestamp = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setAppId($appId)
            ->setChangeId($changeId)
            ->setInheritable($inheritable)
            ->setModulId($modulId)
            ->setTimestamp($timestamp)
            ->setUnitName($unitName)
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesChgLogDTO
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
     * Get changeId value
     * @return int|null
     */
    public function getChangeId(): ?int
    {
        return $this->changeId;
    }
    /**
     * Set changeId value
     * @param int $changeId
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesChgLogDTO
     */
    public function setChangeId(?int $changeId = null): self
    {
        // validation for constraint: int
        if (!is_null($changeId) && !(is_int($changeId) || ctype_digit($changeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeId, true), gettype($changeId)), __LINE__);
        }
        $this->changeId = $changeId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesChgLogDTO
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
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesChgLogDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesChgLogDTO
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
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\UnitModulesChgLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
