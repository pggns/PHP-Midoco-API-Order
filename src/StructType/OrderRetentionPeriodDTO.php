<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderRetentionPeriodDTO StructType
 * @subpackage Structs
 */
class OrderRetentionPeriodDTO extends AbstractStructBase
{
    /**
     * The duration
     * @var int|null
     */
    protected ?int $duration = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The startOfDeadline
     * @var int|null
     */
    protected ?int $startOfDeadline = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrderRetentionPeriodDTO
     * @uses OrderRetentionPeriodDTO::setDuration()
     * @uses OrderRetentionPeriodDTO::setId()
     * @uses OrderRetentionPeriodDTO::setStartOfDeadline()
     * @uses OrderRetentionPeriodDTO::setUnitName()
     * @param int $duration
     * @param int $id
     * @param int $startOfDeadline
     * @param string $unitName
     */
    public function __construct(?int $duration = null, ?int $id = null, ?int $startOfDeadline = null, ?string $unitName = null)
    {
        $this
            ->setDuration($duration)
            ->setId($id)
            ->setStartOfDeadline($startOfDeadline)
            ->setUnitName($unitName);
    }
    /**
     * Get duration value
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param int $duration
     * @return \Pggns\MidocoApi\Order\StructType\OrderRetentionPeriodDTO
     */
    public function setDuration(?int $duration = null): self
    {
        // validation for constraint: int
        if (!is_null($duration) && !(is_int($duration) || ctype_digit($duration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\OrderRetentionPeriodDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get startOfDeadline value
     * @return int|null
     */
    public function getStartOfDeadline(): ?int
    {
        return $this->startOfDeadline;
    }
    /**
     * Set startOfDeadline value
     * @param int $startOfDeadline
     * @return \Pggns\MidocoApi\Order\StructType\OrderRetentionPeriodDTO
     */
    public function setStartOfDeadline(?int $startOfDeadline = null): self
    {
        // validation for constraint: int
        if (!is_null($startOfDeadline) && !(is_int($startOfDeadline) || ctype_digit($startOfDeadline))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startOfDeadline, true), gettype($startOfDeadline)), __LINE__);
        }
        $this->startOfDeadline = $startOfDeadline;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderRetentionPeriodDTO
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
