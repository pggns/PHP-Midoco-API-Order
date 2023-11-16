<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSaveBookingControlRequest StructType
 * @subpackage Structs
 */
class GetSaveBookingControlRequest extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The isControlled
     * @var bool|null
     */
    protected ?bool $isControlled = null;
    /**
     * Constructor method for GetSaveBookingControlRequest
     * @uses GetSaveBookingControlRequest::setUserId()
     * @uses GetSaveBookingControlRequest::setOrderId()
     * @uses GetSaveBookingControlRequest::setIsControlled()
     * @param int $userId
     * @param int $orderId
     * @param bool $isControlled
     */
    public function __construct(?int $userId = null, ?int $orderId = null, ?bool $isControlled = null)
    {
        $this
            ->setUserId($userId)
            ->setOrderId($orderId)
            ->setIsControlled($isControlled);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSaveBookingControlRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSaveBookingControlRequest
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
     * Get isControlled value
     * @return bool|null
     */
    public function getIsControlled(): ?bool
    {
        return $this->isControlled;
    }
    /**
     * Set isControlled value
     * @param bool $isControlled
     * @return \Pggns\MidocoApi\Order\StructType\GetSaveBookingControlRequest
     */
    public function setIsControlled(?bool $isControlled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isControlled) && !is_bool($isControlled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isControlled, true), gettype($isControlled)), __LINE__);
        }
        $this->isControlled = $isControlled;
        
        return $this;
    }
}
