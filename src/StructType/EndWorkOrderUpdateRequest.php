<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndWorkOrderUpdateRequest StructType
 * @subpackage Structs
 */
class EndWorkOrderUpdateRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The orderVersion
     * @var int|null
     */
    protected ?int $orderVersion = null;
    /**
     * The addHistory
     * @var bool|null
     */
    protected ?bool $addHistory = null;
    /**
     * Constructor method for EndWorkOrderUpdateRequest
     * @uses EndWorkOrderUpdateRequest::setOrderId()
     * @uses EndWorkOrderUpdateRequest::setUserId()
     * @uses EndWorkOrderUpdateRequest::setOrderVersion()
     * @uses EndWorkOrderUpdateRequest::setAddHistory()
     * @param int $orderId
     * @param int $userId
     * @param int $orderVersion
     * @param bool $addHistory
     */
    public function __construct(?int $orderId = null, ?int $userId = null, ?int $orderVersion = null, ?bool $addHistory = null)
    {
        $this
            ->setOrderId($orderId)
            ->setUserId($userId)
            ->setOrderVersion($orderVersion)
            ->setAddHistory($addHistory);
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
     * @return \Pggns\MidocoApi\Order\StructType\EndWorkOrderUpdateRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\EndWorkOrderUpdateRequest
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
     * Get orderVersion value
     * @return int|null
     */
    public function getOrderVersion(): ?int
    {
        return $this->orderVersion;
    }
    /**
     * Set orderVersion value
     * @param int $orderVersion
     * @return \Pggns\MidocoApi\Order\StructType\EndWorkOrderUpdateRequest
     */
    public function setOrderVersion(?int $orderVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($orderVersion) && !(is_int($orderVersion) || ctype_digit($orderVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderVersion, true), gettype($orderVersion)), __LINE__);
        }
        $this->orderVersion = $orderVersion;
        
        return $this;
    }
    /**
     * Get addHistory value
     * @return bool|null
     */
    public function getAddHistory(): ?bool
    {
        return $this->addHistory;
    }
    /**
     * Set addHistory value
     * @param bool $addHistory
     * @return \Pggns\MidocoApi\Order\StructType\EndWorkOrderUpdateRequest
     */
    public function setAddHistory(?bool $addHistory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($addHistory) && !is_bool($addHistory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($addHistory, true), gettype($addHistory)), __LINE__);
        }
        $this->addHistory = $addHistory;
        
        return $this;
    }
}
