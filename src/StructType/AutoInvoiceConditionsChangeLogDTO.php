<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoInvoiceConditionsChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AutoInvoiceConditionsChangeLogDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The conditionId
     * @var int|null
     */
    protected ?int $conditionId = null;
    /**
     * The diffData
     * @var string|null
     */
    protected ?string $diffData = null;
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
     * Constructor method for AutoInvoiceConditionsChangeLogDTO
     * @uses AutoInvoiceConditionsChangeLogDTO::setChangeId()
     * @uses AutoInvoiceConditionsChangeLogDTO::setConditionId()
     * @uses AutoInvoiceConditionsChangeLogDTO::setDiffData()
     * @uses AutoInvoiceConditionsChangeLogDTO::setTimestamp()
     * @uses AutoInvoiceConditionsChangeLogDTO::setUserId()
     * @param int $changeId
     * @param int $conditionId
     * @param string $diffData
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?int $changeId = null, ?int $conditionId = null, ?string $diffData = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setChangeId($changeId)
            ->setConditionId($conditionId)
            ->setDiffData($diffData)
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
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionsChangeLogDTO
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
     * Get conditionId value
     * @return int|null
     */
    public function getConditionId(): ?int
    {
        return $this->conditionId;
    }
    /**
     * Set conditionId value
     * @param int $conditionId
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionsChangeLogDTO
     */
    public function setConditionId(?int $conditionId = null): self
    {
        // validation for constraint: int
        if (!is_null($conditionId) && !(is_int($conditionId) || ctype_digit($conditionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($conditionId, true), gettype($conditionId)), __LINE__);
        }
        $this->conditionId = $conditionId;
        
        return $this;
    }
    /**
     * Get diffData value
     * @return string|null
     */
    public function getDiffData(): ?string
    {
        return $this->diffData;
    }
    /**
     * Set diffData value
     * @param string $diffData
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionsChangeLogDTO
     */
    public function setDiffData(?string $diffData = null): self
    {
        // validation for constraint: string
        if (!is_null($diffData) && !is_string($diffData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diffData, true), gettype($diffData)), __LINE__);
        }
        $this->diffData = $diffData;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionsChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionsChangeLogDTO
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
