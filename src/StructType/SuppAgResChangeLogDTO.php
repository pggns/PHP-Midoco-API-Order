<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuppAgResChangeLogDTO StructType
 * @subpackage Structs
 */
class SuppAgResChangeLogDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The sourceAgency
     * @var string|null
     */
    protected ?string $sourceAgency = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
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
     * Constructor method for SuppAgResChangeLogDTO
     * @uses SuppAgResChangeLogDTO::setChangeId()
     * @uses SuppAgResChangeLogDTO::setSourceAgency()
     * @uses SuppAgResChangeLogDTO::setSupplierId()
     * @uses SuppAgResChangeLogDTO::setTimestamp()
     * @uses SuppAgResChangeLogDTO::setUserId()
     * @param int $changeId
     * @param string $sourceAgency
     * @param string $supplierId
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?int $changeId = null, ?string $sourceAgency = null, ?string $supplierId = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setChangeId($changeId)
            ->setSourceAgency($sourceAgency)
            ->setSupplierId($supplierId)
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppAgResChangeLogDTO
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
     * Get sourceAgency value
     * @return string|null
     */
    public function getSourceAgency(): ?string
    {
        return $this->sourceAgency;
    }
    /**
     * Set sourceAgency value
     * @param string $sourceAgency
     * @return \Pggns\MidocoApi\Order\StructType\SuppAgResChangeLogDTO
     */
    public function setSourceAgency(?string $sourceAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceAgency) && !is_string($sourceAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceAgency, true), gettype($sourceAgency)), __LINE__);
        }
        $this->sourceAgency = $sourceAgency;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SuppAgResChangeLogDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppAgResChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppAgResChangeLogDTO
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
