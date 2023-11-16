<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivityTypeAssignDTO StructType
 * @subpackage Structs
 */
class ActivityTypeAssignDTO extends AbstractStructBase
{
    /**
     * The activity
     * @var string|null
     */
    protected ?string $activity = null;
    /**
     * The processName
     * @var string|null
     */
    protected ?string $processName = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for ActivityTypeAssignDTO
     * @uses ActivityTypeAssignDTO::setActivity()
     * @uses ActivityTypeAssignDTO::setProcessName()
     * @uses ActivityTypeAssignDTO::setTypeId()
     * @uses ActivityTypeAssignDTO::setUnitName()
     * @param string $activity
     * @param string $processName
     * @param string $typeId
     * @param string $unitName
     */
    public function __construct(?string $activity = null, ?string $processName = null, ?string $typeId = null, ?string $unitName = null)
    {
        $this
            ->setActivity($activity)
            ->setProcessName($processName)
            ->setTypeId($typeId)
            ->setUnitName($unitName);
    }
    /**
     * Get activity value
     * @return string|null
     */
    public function getActivity(): ?string
    {
        return $this->activity;
    }
    /**
     * Set activity value
     * @param string $activity
     * @return \Pggns\MidocoApi\Order\StructType\ActivityTypeAssignDTO
     */
    public function setActivity(?string $activity = null): self
    {
        // validation for constraint: string
        if (!is_null($activity) && !is_string($activity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activity, true), gettype($activity)), __LINE__);
        }
        $this->activity = $activity;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ActivityTypeAssignDTO
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
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\ActivityTypeAssignDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ActivityTypeAssignDTO
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
