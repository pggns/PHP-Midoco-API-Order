<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaxconnectQueueDTO StructType
 * @subpackage Structs
 */
class PaxconnectQueueDTO extends AbstractStructBase
{
    /**
     * The advisoryId
     * @var string|null
     */
    protected ?string $advisoryId = null;
    /**
     * The counter
     * @var int|null
     */
    protected ?int $counter = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The errorText
     * @var string|null
     */
    protected ?string $errorText = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isFailed
     * @var bool|null
     */
    protected ?bool $isFailed = null;
    /**
     * The isImported
     * @var bool|null
     */
    protected ?bool $isImported = null;
    /**
     * The lastProcessedTime
     * @var string|null
     */
    protected ?string $lastProcessedTime = null;
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for PaxconnectQueueDTO
     * @uses PaxconnectQueueDTO::setAdvisoryId()
     * @uses PaxconnectQueueDTO::setCounter()
     * @uses PaxconnectQueueDTO::setCreationTime()
     * @uses PaxconnectQueueDTO::setCustomerId()
     * @uses PaxconnectQueueDTO::setErrorText()
     * @uses PaxconnectQueueDTO::setId()
     * @uses PaxconnectQueueDTO::setIsFailed()
     * @uses PaxconnectQueueDTO::setIsImported()
     * @uses PaxconnectQueueDTO::setLastProcessedTime()
     * @uses PaxconnectQueueDTO::setRefId()
     * @uses PaxconnectQueueDTO::setUnitName()
     * @param string $advisoryId
     * @param int $counter
     * @param string $creationTime
     * @param int $customerId
     * @param string $errorText
     * @param int $id
     * @param bool $isFailed
     * @param bool $isImported
     * @param string $lastProcessedTime
     * @param int $refId
     * @param string $unitName
     */
    public function __construct(?string $advisoryId = null, ?int $counter = null, ?string $creationTime = null, ?int $customerId = null, ?string $errorText = null, ?int $id = null, ?bool $isFailed = null, ?bool $isImported = null, ?string $lastProcessedTime = null, ?int $refId = null, ?string $unitName = null)
    {
        $this
            ->setAdvisoryId($advisoryId)
            ->setCounter($counter)
            ->setCreationTime($creationTime)
            ->setCustomerId($customerId)
            ->setErrorText($errorText)
            ->setId($id)
            ->setIsFailed($isFailed)
            ->setIsImported($isImported)
            ->setLastProcessedTime($lastProcessedTime)
            ->setRefId($refId)
            ->setUnitName($unitName);
    }
    /**
     * Get advisoryId value
     * @return string|null
     */
    public function getAdvisoryId(): ?string
    {
        return $this->advisoryId;
    }
    /**
     * Set advisoryId value
     * @param string $advisoryId
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
     */
    public function setAdvisoryId(?string $advisoryId = null): self
    {
        // validation for constraint: string
        if (!is_null($advisoryId) && !is_string($advisoryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($advisoryId, true), gettype($advisoryId)), __LINE__);
        }
        $this->advisoryId = $advisoryId;
        
        return $this;
    }
    /**
     * Get counter value
     * @return int|null
     */
    public function getCounter(): ?int
    {
        return $this->counter;
    }
    /**
     * Set counter value
     * @param int $counter
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
     */
    public function setCounter(?int $counter = null): self
    {
        // validation for constraint: int
        if (!is_null($counter) && !(is_int($counter) || ctype_digit($counter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($counter, true), gettype($counter)), __LINE__);
        }
        $this->counter = $counter;
        
        return $this;
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get errorText value
     * @return string|null
     */
    public function getErrorText(): ?string
    {
        return $this->errorText;
    }
    /**
     * Set errorText value
     * @param string $errorText
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
     */
    public function setErrorText(?string $errorText = null): self
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->errorText = $errorText;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
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
     * Get isFailed value
     * @return bool|null
     */
    public function getIsFailed(): ?bool
    {
        return $this->isFailed;
    }
    /**
     * Set isFailed value
     * @param bool $isFailed
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
     */
    public function setIsFailed(?bool $isFailed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFailed) && !is_bool($isFailed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFailed, true), gettype($isFailed)), __LINE__);
        }
        $this->isFailed = $isFailed;
        
        return $this;
    }
    /**
     * Get isImported value
     * @return bool|null
     */
    public function getIsImported(): ?bool
    {
        return $this->isImported;
    }
    /**
     * Set isImported value
     * @param bool $isImported
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
     */
    public function setIsImported(?bool $isImported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImported) && !is_bool($isImported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImported, true), gettype($isImported)), __LINE__);
        }
        $this->isImported = $isImported;
        
        return $this;
    }
    /**
     * Get lastProcessedTime value
     * @return string|null
     */
    public function getLastProcessedTime(): ?string
    {
        return $this->lastProcessedTime;
    }
    /**
     * Set lastProcessedTime value
     * @param string $lastProcessedTime
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
     */
    public function setLastProcessedTime(?string $lastProcessedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastProcessedTime) && !is_string($lastProcessedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastProcessedTime, true), gettype($lastProcessedTime)), __LINE__);
        }
        $this->lastProcessedTime = $lastProcessedTime;
        
        return $this;
    }
    /**
     * Get refId value
     * @return int|null
     */
    public function getRefId(): ?int
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param int $refId
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
     */
    public function setRefId(?int $refId = null): self
    {
        // validation for constraint: int
        if (!is_null($refId) && !(is_int($refId) || ctype_digit($refId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PaxconnectQueueDTO
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
