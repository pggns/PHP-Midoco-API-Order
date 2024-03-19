<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeAssignChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FeeAssignChangeLogDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The feeAssignId
     * @var int|null
     */
    protected ?int $feeAssignId = null;
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
     * Constructor method for FeeAssignChangeLogDTO
     * @uses FeeAssignChangeLogDTO::setChangeId()
     * @uses FeeAssignChangeLogDTO::setFeeAssignId()
     * @uses FeeAssignChangeLogDTO::setTimestamp()
     * @uses FeeAssignChangeLogDTO::setUserId()
     * @param int $changeId
     * @param int $feeAssignId
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?int $changeId = null, ?int $feeAssignId = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setChangeId($changeId)
            ->setFeeAssignId($feeAssignId)
            ->setTimestamp($timestamp)
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignChangeLogDTO
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
     * Get feeAssignId value
     * @return int|null
     */
    public function getFeeAssignId(): ?int
    {
        return $this->feeAssignId;
    }
    /**
     * Set feeAssignId value
     * @param int $feeAssignId
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignChangeLogDTO
     */
    public function setFeeAssignId(?int $feeAssignId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeAssignId) && !(is_int($feeAssignId) || ctype_digit($feeAssignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeAssignId, true), gettype($feeAssignId)), __LINE__);
        }
        $this->feeAssignId = $feeAssignId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeAssignChangeLogDTO
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
}
