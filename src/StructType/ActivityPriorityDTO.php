<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivityPriorityDTO StructType
 * @subpackage Structs
 */
class ActivityPriorityDTO extends AbstractStructBase
{
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The timeframe
     * @var int|null
     */
    protected ?int $timeframe = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for ActivityPriorityDTO
     * @uses ActivityPriorityDTO::setPriority()
     * @uses ActivityPriorityDTO::setTimeframe()
     * @uses ActivityPriorityDTO::setTypeId()
     * @param int $priority
     * @param int $timeframe
     * @param string $typeId
     */
    public function __construct(?int $priority = null, ?int $timeframe = null, ?string $typeId = null)
    {
        $this
            ->setPriority($priority)
            ->setTimeframe($timeframe)
            ->setTypeId($typeId);
    }
    /**
     * Get priority value
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param int $priority
     * @return \Pggns\MidocoApi\Order\StructType\ActivityPriorityDTO
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        
        return $this;
    }
    /**
     * Get timeframe value
     * @return int|null
     */
    public function getTimeframe(): ?int
    {
        return $this->timeframe;
    }
    /**
     * Set timeframe value
     * @param int $timeframe
     * @return \Pggns\MidocoApi\Order\StructType\ActivityPriorityDTO
     */
    public function setTimeframe(?int $timeframe = null): self
    {
        // validation for constraint: int
        if (!is_null($timeframe) && !(is_int($timeframe) || ctype_digit($timeframe))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeframe, true), gettype($timeframe)), __LINE__);
        }
        $this->timeframe = $timeframe;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ActivityPriorityDTO
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
}
