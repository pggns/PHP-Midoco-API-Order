<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderPassengerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOrderPassengerRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderPassengerFirstName
     * @var string|null
     */
    protected ?string $orderPassengerFirstName = null;
    /**
     * The orderPassengerName
     * @var string|null
     */
    protected ?string $orderPassengerName = null;
    /**
     * Constructor method for DeleteOrderPassengerRequest
     * @uses DeleteOrderPassengerRequest::setOrderId()
     * @uses DeleteOrderPassengerRequest::setOrderPassengerFirstName()
     * @uses DeleteOrderPassengerRequest::setOrderPassengerName()
     * @param int $orderId
     * @param string $orderPassengerFirstName
     * @param string $orderPassengerName
     */
    public function __construct(?int $orderId = null, ?string $orderPassengerFirstName = null, ?string $orderPassengerName = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderPassengerFirstName($orderPassengerFirstName)
            ->setOrderPassengerName($orderPassengerName);
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderPassengerRequest
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
     * Get orderPassengerFirstName value
     * @return string|null
     */
    public function getOrderPassengerFirstName(): ?string
    {
        return $this->orderPassengerFirstName;
    }
    /**
     * Set orderPassengerFirstName value
     * @param string $orderPassengerFirstName
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderPassengerRequest
     */
    public function setOrderPassengerFirstName(?string $orderPassengerFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($orderPassengerFirstName) && !is_string($orderPassengerFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderPassengerFirstName, true), gettype($orderPassengerFirstName)), __LINE__);
        }
        $this->orderPassengerFirstName = $orderPassengerFirstName;
        
        return $this;
    }
    /**
     * Get orderPassengerName value
     * @return string|null
     */
    public function getOrderPassengerName(): ?string
    {
        return $this->orderPassengerName;
    }
    /**
     * Set orderPassengerName value
     * @param string $orderPassengerName
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderPassengerRequest
     */
    public function setOrderPassengerName(?string $orderPassengerName = null): self
    {
        // validation for constraint: string
        if (!is_null($orderPassengerName) && !is_string($orderPassengerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderPassengerName, true), gettype($orderPassengerName)), __LINE__);
        }
        $this->orderPassengerName = $orderPassengerName;
        
        return $this;
    }
}
