<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderHistoryRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The isProcessed
     * @var bool|null
     */
    protected ?bool $isProcessed = null;
    /**
     * Constructor method for GetOrderHistoryRequest
     * @uses GetOrderHistoryRequest::setOrderId()
     * @uses GetOrderHistoryRequest::setIsProcessed()
     * @param int $orderId
     * @param bool $isProcessed
     */
    public function __construct(?int $orderId = null, ?bool $isProcessed = null)
    {
        $this
            ->setOrderId($orderId)
            ->setIsProcessed($isProcessed);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderHistoryRequest
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
     * Get isProcessed value
     * @return bool|null
     */
    public function getIsProcessed(): ?bool
    {
        return $this->isProcessed;
    }
    /**
     * Set isProcessed value
     * @param bool $isProcessed
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderHistoryRequest
     */
    public function setIsProcessed(?bool $isProcessed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProcessed) && !is_bool($isProcessed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProcessed, true), gettype($isProcessed)), __LINE__);
        }
        $this->isProcessed = $isProcessed;
        
        return $this;
    }
}
