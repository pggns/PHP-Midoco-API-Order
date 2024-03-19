<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessActivityDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessActivityDTO extends AbstractStructBase
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
     * Constructor method for ProcessActivityDTO
     * @uses ProcessActivityDTO::setActivity()
     * @uses ProcessActivityDTO::setProcessName()
     * @param string $activity
     * @param string $processName
     */
    public function __construct(?string $activity = null, ?string $processName = null)
    {
        $this
            ->setActivity($activity)
            ->setProcessName($processName);
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessActivityDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessActivityDTO
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
}
