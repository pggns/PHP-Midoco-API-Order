<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RightsAssignChgLogDTO StructType
 * @subpackage Structs
 */
class RightsAssignChgLogDTO extends AbstractStructBase
{
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The rightId
     * @var string|null
     */
    protected ?string $rightId = null;
    /**
     * The rightName
     * @var string|null
     */
    protected ?string $rightName = null;
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
     * Constructor method for RightsAssignChgLogDTO
     * @uses RightsAssignChgLogDTO::setAppId()
     * @uses RightsAssignChgLogDTO::setChangeId()
     * @uses RightsAssignChgLogDTO::setRightId()
     * @uses RightsAssignChgLogDTO::setRightName()
     * @uses RightsAssignChgLogDTO::setTimestamp()
     * @uses RightsAssignChgLogDTO::setUserId()
     * @param string $appId
     * @param int $changeId
     * @param string $rightId
     * @param string $rightName
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?string $appId = null, ?int $changeId = null, ?string $rightId = null, ?string $rightName = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setAppId($appId)
            ->setChangeId($changeId)
            ->setRightId($rightId)
            ->setRightName($rightName)
            ->setTimestamp($timestamp)
            ->setUserId($userId);
    }
    /**
     * Get appId value
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }
    /**
     * Set appId value
     * @param string $appId
     * @return \Pggns\MidocoApi\Order\StructType\RightsAssignChgLogDTO
     */
    public function setAppId(?string $appId = null): self
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->appId = $appId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\RightsAssignChgLogDTO
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
     * Get rightId value
     * @return string|null
     */
    public function getRightId(): ?string
    {
        return $this->rightId;
    }
    /**
     * Set rightId value
     * @param string $rightId
     * @return \Pggns\MidocoApi\Order\StructType\RightsAssignChgLogDTO
     */
    public function setRightId(?string $rightId = null): self
    {
        // validation for constraint: string
        if (!is_null($rightId) && !is_string($rightId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rightId, true), gettype($rightId)), __LINE__);
        }
        $this->rightId = $rightId;
        
        return $this;
    }
    /**
     * Get rightName value
     * @return string|null
     */
    public function getRightName(): ?string
    {
        return $this->rightName;
    }
    /**
     * Set rightName value
     * @param string $rightName
     * @return \Pggns\MidocoApi\Order\StructType\RightsAssignChgLogDTO
     */
    public function setRightName(?string $rightName = null): self
    {
        // validation for constraint: string
        if (!is_null($rightName) && !is_string($rightName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rightName, true), gettype($rightName)), __LINE__);
        }
        $this->rightName = $rightName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RightsAssignChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\RightsAssignChgLogDTO
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
