<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderChangeLogDTO extends AbstractStructBase
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
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
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
     * Constructor method for OrderChangeLogDTO
     * @uses OrderChangeLogDTO::setAction()
     * @uses OrderChangeLogDTO::setChangeId()
     * @uses OrderChangeLogDTO::setOrderId()
     * @uses OrderChangeLogDTO::setTimestamp()
     * @uses OrderChangeLogDTO::setUnitName()
     * @param string $action
     * @param int $changeId
     * @param int $orderId
     * @param string $timestamp
     * @param string $unitName
     */
    public function __construct(?string $action = null, ?int $changeId = null, ?int $orderId = null, ?string $timestamp = null, ?string $unitName = null)
    {
        $this
            ->setAction($action)
            ->setChangeId($changeId)
            ->setOrderId($orderId)
            ->setTimestamp($timestamp)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderChangeLogDTO
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
