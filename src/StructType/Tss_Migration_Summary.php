<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tss-Migration-Summary StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Tss_Migration_Summary extends AbstractStructBase
{
    /**
     * The completed
     * @var int|null
     */
    protected ?int $completed = null;
    /**
     * The failed
     * @var int|null
     */
    protected ?int $failed = null;
    /**
     * The ignored
     * @var int|null
     */
    protected ?int $ignored = null;
    /**
     * The start
     * @var string|null
     */
    protected ?string $start = null;
    /**
     * The end
     * @var string|null
     */
    protected ?string $end = null;
    /**
     * The elapsed_ms
     * @var int|null
     */
    protected ?int $elapsed_ms = null;
    /**
     * Constructor method for Tss-Migration-Summary
     * @uses Tss_Migration_Summary::setCompleted()
     * @uses Tss_Migration_Summary::setFailed()
     * @uses Tss_Migration_Summary::setIgnored()
     * @uses Tss_Migration_Summary::setStart()
     * @uses Tss_Migration_Summary::setEnd()
     * @uses Tss_Migration_Summary::setElapsed_ms()
     * @param int $completed
     * @param int $failed
     * @param int $ignored
     * @param string $start
     * @param string $end
     * @param int $elapsed_ms
     */
    public function __construct(?int $completed = null, ?int $failed = null, ?int $ignored = null, ?string $start = null, ?string $end = null, ?int $elapsed_ms = null)
    {
        $this
            ->setCompleted($completed)
            ->setFailed($failed)
            ->setIgnored($ignored)
            ->setStart($start)
            ->setEnd($end)
            ->setElapsed_ms($elapsed_ms);
    }
    /**
     * Get completed value
     * @return int|null
     */
    public function getCompleted(): ?int
    {
        return $this->completed;
    }
    /**
     * Set completed value
     * @param int $completed
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary
     */
    public function setCompleted(?int $completed = null): self
    {
        // validation for constraint: int
        if (!is_null($completed) && !(is_int($completed) || ctype_digit($completed))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($completed, true), gettype($completed)), __LINE__);
        }
        $this->completed = $completed;
        
        return $this;
    }
    /**
     * Get failed value
     * @return int|null
     */
    public function getFailed(): ?int
    {
        return $this->failed;
    }
    /**
     * Set failed value
     * @param int $failed
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary
     */
    public function setFailed(?int $failed = null): self
    {
        // validation for constraint: int
        if (!is_null($failed) && !(is_int($failed) || ctype_digit($failed))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($failed, true), gettype($failed)), __LINE__);
        }
        $this->failed = $failed;
        
        return $this;
    }
    /**
     * Get ignored value
     * @return int|null
     */
    public function getIgnored(): ?int
    {
        return $this->ignored;
    }
    /**
     * Set ignored value
     * @param int $ignored
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary
     */
    public function setIgnored(?int $ignored = null): self
    {
        // validation for constraint: int
        if (!is_null($ignored) && !(is_int($ignored) || ctype_digit($ignored))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ignored, true), gettype($ignored)), __LINE__);
        }
        $this->ignored = $ignored;
        
        return $this;
    }
    /**
     * Get start value
     * @return string|null
     */
    public function getStart(): ?string
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param string $start
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary
     */
    public function setStart(?string $start = null): self
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->start = $start;
        
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        
        return $this;
    }
    /**
     * Get elapsed_ms value
     * @return int|null
     */
    public function getElapsed_ms(): ?int
    {
        return $this->{'elapsed-ms'};
    }
    /**
     * Set elapsed_ms value
     * @param int $elapsed_ms
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary
     */
    public function setElapsed_ms(?int $elapsed_ms = null): self
    {
        // validation for constraint: int
        if (!is_null($elapsed_ms) && !(is_int($elapsed_ms) || ctype_digit($elapsed_ms))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($elapsed_ms, true), gettype($elapsed_ms)), __LINE__);
        }
        $this->elapsed_ms = $this->{'elapsed-ms'} = $elapsed_ms;
        
        return $this;
    }
}
