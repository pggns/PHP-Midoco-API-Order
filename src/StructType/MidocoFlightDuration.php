<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFlightDuration StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoFlightDuration extends AbstractStructBase
{
    /**
     * The time
     * @var string|null
     */
    protected ?string $time = null;
    /**
     * The days
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $days = null;
    /**
     * Constructor method for MidocoFlightDuration
     * @uses MidocoFlightDuration::setTime()
     * @uses MidocoFlightDuration::setDays()
     * @param string $time
     * @param string $days
     */
    public function __construct(?string $time = null, ?string $days = null)
    {
        $this
            ->setTime($time)
            ->setDays($days);
    }
    /**
     * Get time value
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $time
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDuration
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;
        
        return $this;
    }
    /**
     * Get days value
     * @return string|null
     */
    public function getDays(): ?string
    {
        return $this->days;
    }
    /**
     * Set days value
     * @param string $days
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDuration
     */
    public function setDays(?string $days = null): self
    {
        // validation for constraint: string
        if (!is_null($days) && !is_string($days)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($days, true), gettype($days)), __LINE__);
        }
        $this->days = $days;
        
        return $this;
    }
}
