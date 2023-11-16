<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessAssignDTO StructType
 * @subpackage Structs
 */
class ProcessAssignDTO extends AbstractStructBase
{
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The eventId
     * @var string|null
     */
    protected ?string $eventId = null;
    /**
     * The inheritable
     * @var bool|null
     */
    protected ?bool $inheritable = null;
    /**
     * The processName
     * @var string|null
     */
    protected ?string $processName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for ProcessAssignDTO
     * @uses ProcessAssignDTO::setAppId()
     * @uses ProcessAssignDTO::setEventId()
     * @uses ProcessAssignDTO::setInheritable()
     * @uses ProcessAssignDTO::setProcessName()
     * @uses ProcessAssignDTO::setUnitName()
     * @param string $appId
     * @param string $eventId
     * @param bool $inheritable
     * @param string $processName
     * @param string $unitName
     */
    public function __construct(?string $appId = null, ?string $eventId = null, ?bool $inheritable = null, ?string $processName = null, ?string $unitName = null)
    {
        $this
            ->setAppId($appId)
            ->setEventId($eventId)
            ->setInheritable($inheritable)
            ->setProcessName($processName)
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO
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
     * Get eventId value
     * @return string|null
     */
    public function getEventId(): ?string
    {
        return $this->eventId;
    }
    /**
     * Set eventId value
     * @param string $eventId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO
     */
    public function setEventId(?string $eventId = null): self
    {
        // validation for constraint: string
        if (!is_null($eventId) && !is_string($eventId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventId, true), gettype($eventId)), __LINE__);
        }
        $this->eventId = $eventId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO
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
     * Get processName value
     * @return string|null
     */
    public function getProcessName(): ?string
    {
        return $this->processName;
    }
    /**
     * Set processName value
     * @param string $processName
     * @return \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO
     */
    public function setProcessName(?string $processName = null): self
    {
        // validation for constraint: string
        if (!is_null($processName) && !is_string($processName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processName, true), gettype($processName)), __LINE__);
        }
        $this->processName = $processName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessAssignDTO
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
