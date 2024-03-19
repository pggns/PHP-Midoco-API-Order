<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DunningLetterChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DunningLetterChangeLogDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The dunningLevel
     * @var int|null
     */
    protected ?int $dunningLevel = null;
    /**
     * The forDeposit
     * @var bool|null
     */
    protected ?bool $forDeposit = null;
    /**
     * The forStorno
     * @var bool|null
     */
    protected ?bool $forStorno = null;
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
     * Constructor method for DunningLetterChangeLogDTO
     * @uses DunningLetterChangeLogDTO::setChangeId()
     * @uses DunningLetterChangeLogDTO::setDunningLevel()
     * @uses DunningLetterChangeLogDTO::setForDeposit()
     * @uses DunningLetterChangeLogDTO::setForStorno()
     * @uses DunningLetterChangeLogDTO::setTimestamp()
     * @uses DunningLetterChangeLogDTO::setUserId()
     * @param int $changeId
     * @param int $dunningLevel
     * @param bool $forDeposit
     * @param bool $forStorno
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?int $changeId = null, ?int $dunningLevel = null, ?bool $forDeposit = null, ?bool $forStorno = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setChangeId($changeId)
            ->setDunningLevel($dunningLevel)
            ->setForDeposit($forDeposit)
            ->setForStorno($forStorno)
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterChangeLogDTO
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
     * Get dunningLevel value
     * @return int|null
     */
    public function getDunningLevel(): ?int
    {
        return $this->dunningLevel;
    }
    /**
     * Set dunningLevel value
     * @param int $dunningLevel
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterChangeLogDTO
     */
    public function setDunningLevel(?int $dunningLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningLevel) && !(is_int($dunningLevel) || ctype_digit($dunningLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningLevel, true), gettype($dunningLevel)), __LINE__);
        }
        $this->dunningLevel = $dunningLevel;
        
        return $this;
    }
    /**
     * Get forDeposit value
     * @return bool|null
     */
    public function getForDeposit(): ?bool
    {
        return $this->forDeposit;
    }
    /**
     * Set forDeposit value
     * @param bool $forDeposit
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterChangeLogDTO
     */
    public function setForDeposit(?bool $forDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forDeposit) && !is_bool($forDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forDeposit, true), gettype($forDeposit)), __LINE__);
        }
        $this->forDeposit = $forDeposit;
        
        return $this;
    }
    /**
     * Get forStorno value
     * @return bool|null
     */
    public function getForStorno(): ?bool
    {
        return $this->forStorno;
    }
    /**
     * Set forStorno value
     * @param bool $forStorno
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterChangeLogDTO
     */
    public function setForStorno(?bool $forStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forStorno) && !is_bool($forStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forStorno, true), gettype($forStorno)), __LINE__);
        }
        $this->forStorno = $forStorno;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DunningLetterChangeLogDTO
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
