<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdapterDefAttrChgLogDTO StructType
 * @subpackage Structs
 */
class AdapterDefAttrChgLogDTO extends AbstractStructBase
{
    /**
     * The adapterId
     * @var string|null
     */
    protected ?string $adapterId = null;
    /**
     * The attrDefValue
     * @var string|null
     */
    protected ?string $attrDefValue = null;
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
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
     * Constructor method for AdapterDefAttrChgLogDTO
     * @uses AdapterDefAttrChgLogDTO::setAdapterId()
     * @uses AdapterDefAttrChgLogDTO::setAttrDefValue()
     * @uses AdapterDefAttrChgLogDTO::setAttrName()
     * @uses AdapterDefAttrChgLogDTO::setChangeId()
     * @uses AdapterDefAttrChgLogDTO::setTimestamp()
     * @uses AdapterDefAttrChgLogDTO::setUserId()
     * @param string $adapterId
     * @param string $attrDefValue
     * @param string $attrName
     * @param int $changeId
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?string $adapterId = null, ?string $attrDefValue = null, ?string $attrName = null, ?int $changeId = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setAdapterId($adapterId)
            ->setAttrDefValue($attrDefValue)
            ->setAttrName($attrName)
            ->setChangeId($changeId)
            ->setTimestamp($timestamp)
            ->setUserId($userId);
    }
    /**
     * Get adapterId value
     * @return string|null
     */
    public function getAdapterId(): ?string
    {
        return $this->adapterId;
    }
    /**
     * Set adapterId value
     * @param string $adapterId
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDefAttrChgLogDTO
     */
    public function setAdapterId(?string $adapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterId) && !is_string($adapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterId, true), gettype($adapterId)), __LINE__);
        }
        $this->adapterId = $adapterId;
        
        return $this;
    }
    /**
     * Get attrDefValue value
     * @return string|null
     */
    public function getAttrDefValue(): ?string
    {
        return $this->attrDefValue;
    }
    /**
     * Set attrDefValue value
     * @param string $attrDefValue
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDefAttrChgLogDTO
     */
    public function setAttrDefValue(?string $attrDefValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attrDefValue) && !is_string($attrDefValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrDefValue, true), gettype($attrDefValue)), __LINE__);
        }
        $this->attrDefValue = $attrDefValue;
        
        return $this;
    }
    /**
     * Get attrName value
     * @return string|null
     */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     * @param string $attrName
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDefAttrChgLogDTO
     */
    public function setAttrName(?string $attrName = null): self
    {
        // validation for constraint: string
        if (!is_null($attrName) && !is_string($attrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrName, true), gettype($attrName)), __LINE__);
        }
        $this->attrName = $attrName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDefAttrChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDefAttrChgLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdapterDefAttrChgLogDTO
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
