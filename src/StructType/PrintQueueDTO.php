<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintQueueDTO StructType
 * @subpackage Structs
 */
class PrintQueueDTO extends AbstractStructBase
{
    /**
     * The creationUnitName
     * @var string|null
     */
    protected ?string $creationUnitName = null;
    /**
     * The lastAccessTime
     * @var string|null
     */
    protected ?string $lastAccessTime = null;
    /**
     * The lastWorkstationId
     * @var string|null
     */
    protected ?string $lastWorkstationId = null;
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * The queueName
     * @var string|null
     */
    protected ?string $queueName = null;
    /**
     * Constructor method for PrintQueueDTO
     * @uses PrintQueueDTO::setCreationUnitName()
     * @uses PrintQueueDTO::setLastAccessTime()
     * @uses PrintQueueDTO::setLastWorkstationId()
     * @uses PrintQueueDTO::setQueueId()
     * @uses PrintQueueDTO::setQueueName()
     * @param string $creationUnitName
     * @param string $lastAccessTime
     * @param string $lastWorkstationId
     * @param int $queueId
     * @param string $queueName
     */
    public function __construct(?string $creationUnitName = null, ?string $lastAccessTime = null, ?string $lastWorkstationId = null, ?int $queueId = null, ?string $queueName = null)
    {
        $this
            ->setCreationUnitName($creationUnitName)
            ->setLastAccessTime($lastAccessTime)
            ->setLastWorkstationId($lastWorkstationId)
            ->setQueueId($queueId)
            ->setQueueName($queueName);
    }
    /**
     * Get creationUnitName value
     * @return string|null
     */
    public function getCreationUnitName(): ?string
    {
        return $this->creationUnitName;
    }
    /**
     * Set creationUnitName value
     * @param string $creationUnitName
     * @return \Pggns\MidocoApi\Order\StructType\PrintQueueDTO
     */
    public function setCreationUnitName(?string $creationUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUnitName) && !is_string($creationUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUnitName, true), gettype($creationUnitName)), __LINE__);
        }
        $this->creationUnitName = $creationUnitName;
        
        return $this;
    }
    /**
     * Get lastAccessTime value
     * @return string|null
     */
    public function getLastAccessTime(): ?string
    {
        return $this->lastAccessTime;
    }
    /**
     * Set lastAccessTime value
     * @param string $lastAccessTime
     * @return \Pggns\MidocoApi\Order\StructType\PrintQueueDTO
     */
    public function setLastAccessTime(?string $lastAccessTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastAccessTime) && !is_string($lastAccessTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastAccessTime, true), gettype($lastAccessTime)), __LINE__);
        }
        $this->lastAccessTime = $lastAccessTime;
        
        return $this;
    }
    /**
     * Get lastWorkstationId value
     * @return string|null
     */
    public function getLastWorkstationId(): ?string
    {
        return $this->lastWorkstationId;
    }
    /**
     * Set lastWorkstationId value
     * @param string $lastWorkstationId
     * @return \Pggns\MidocoApi\Order\StructType\PrintQueueDTO
     */
    public function setLastWorkstationId(?string $lastWorkstationId = null): self
    {
        // validation for constraint: string
        if (!is_null($lastWorkstationId) && !is_string($lastWorkstationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastWorkstationId, true), gettype($lastWorkstationId)), __LINE__);
        }
        $this->lastWorkstationId = $lastWorkstationId;
        
        return $this;
    }
    /**
     * Get queueId value
     * @return int|null
     */
    public function getQueueId(): ?int
    {
        return $this->queueId;
    }
    /**
     * Set queueId value
     * @param int $queueId
     * @return \Pggns\MidocoApi\Order\StructType\PrintQueueDTO
     */
    public function setQueueId(?int $queueId = null): self
    {
        // validation for constraint: int
        if (!is_null($queueId) && !(is_int($queueId) || ctype_digit($queueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queueId, true), gettype($queueId)), __LINE__);
        }
        $this->queueId = $queueId;
        
        return $this;
    }
    /**
     * Get queueName value
     * @return string|null
     */
    public function getQueueName(): ?string
    {
        return $this->queueName;
    }
    /**
     * Set queueName value
     * @param string $queueName
     * @return \Pggns\MidocoApi\Order\StructType\PrintQueueDTO
     */
    public function setQueueName(?string $queueName = null): self
    {
        // validation for constraint: string
        if (!is_null($queueName) && !is_string($queueName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queueName, true), gettype($queueName)), __LINE__);
        }
        $this->queueName = $queueName;
        
        return $this;
    }
}
