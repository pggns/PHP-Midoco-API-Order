<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VirtualAccChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VirtualAccChangeLogDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The virtualAccountId
     * @var int|null
     */
    protected ?int $virtualAccountId = null;
    /**
     * Constructor method for VirtualAccChangeLogDTO
     * @uses VirtualAccChangeLogDTO::setChangeId()
     * @uses VirtualAccChangeLogDTO::setTimestamp()
     * @uses VirtualAccChangeLogDTO::setUserId()
     * @uses VirtualAccChangeLogDTO::setVirtualAccountId()
     * @param int $changeId
     * @param string $timestamp
     * @param int $userId
     * @param int $virtualAccountId
     */
    public function __construct(?int $changeId = null, ?string $timestamp = null, ?int $userId = null, ?int $virtualAccountId = null)
    {
        $this
            ->setChangeId($changeId)
            ->setTimestamp($timestamp)
            ->setUserId($userId)
            ->setVirtualAccountId($virtualAccountId);
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
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccChangeLogDTO
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
    /**
     * Get virtualAccountId value
     * @return int|null
     */
    public function getVirtualAccountId(): ?int
    {
        return $this->virtualAccountId;
    }
    /**
     * Set virtualAccountId value
     * @param int $virtualAccountId
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccChangeLogDTO
     */
    public function setVirtualAccountId(?int $virtualAccountId = null): self
    {
        // validation for constraint: int
        if (!is_null($virtualAccountId) && !(is_int($virtualAccountId) || ctype_digit($virtualAccountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($virtualAccountId, true), gettype($virtualAccountId)), __LINE__);
        }
        $this->virtualAccountId = $virtualAccountId;
        
        return $this;
    }
}
