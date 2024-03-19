<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportChangedOrdersLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportChangedOrdersLogDTO extends AbstractStructBase
{
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The isCatched
     * @var bool|null
     */
    protected ?bool $isCatched = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The reason
     * @var int|null
     */
    protected ?int $reason = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for ExportChangedOrdersLogDTO
     * @uses ExportChangedOrdersLogDTO::setAction()
     * @uses ExportChangedOrdersLogDTO::setChangeId()
     * @uses ExportChangedOrdersLogDTO::setInternalVersion()
     * @uses ExportChangedOrdersLogDTO::setIsCatched()
     * @uses ExportChangedOrdersLogDTO::setOrderId()
     * @uses ExportChangedOrdersLogDTO::setOrderNo()
     * @uses ExportChangedOrdersLogDTO::setReason()
     * @uses ExportChangedOrdersLogDTO::setTimestamp()
     * @uses ExportChangedOrdersLogDTO::setUnitName()
     * @uses ExportChangedOrdersLogDTO::setUserId()
     * @param string $action
     * @param int $changeId
     * @param int $internalVersion
     * @param bool $isCatched
     * @param int $orderId
     * @param int $orderNo
     * @param int $reason
     * @param string $timestamp
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?string $action = null, ?int $changeId = null, ?int $internalVersion = null, ?bool $isCatched = null, ?int $orderId = null, ?int $orderNo = null, ?int $reason = null, ?string $timestamp = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setAction($action)
            ->setChangeId($changeId)
            ->setInternalVersion($internalVersion)
            ->setIsCatched($isCatched)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setReason($reason)
            ->setTimestamp($timestamp)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
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
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get isCatched value
     * @return bool|null
     */
    public function getIsCatched(): ?bool
    {
        return $this->isCatched;
    }
    /**
     * Set isCatched value
     * @param bool $isCatched
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
     */
    public function setIsCatched(?bool $isCatched = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCatched) && !is_bool($isCatched)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCatched, true), gettype($isCatched)), __LINE__);
        }
        $this->isCatched = $isCatched;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get reason value
     * @return int|null
     */
    public function getReason(): ?int
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param int $reason
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
     */
    public function setReason(?int $reason = null): self
    {
        // validation for constraint: int
        if (!is_null($reason) && !(is_int($reason) || ctype_digit($reason))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO
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
