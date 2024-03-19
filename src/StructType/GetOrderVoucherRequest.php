<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderVoucherRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderVoucherRequest extends AbstractStructBase
{
    /**
     * The voucherId
     * @var int|null
     */
    protected ?int $voucherId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for GetOrderVoucherRequest
     * @uses GetOrderVoucherRequest::setVoucherId()
     * @uses GetOrderVoucherRequest::setOrderId()
     * @param int $voucherId
     * @param int $orderId
     */
    public function __construct(?int $voucherId = null, ?int $orderId = null)
    {
        $this
            ->setVoucherId($voucherId)
            ->setOrderId($orderId);
    }
    /**
     * Get voucherId value
     * @return int|null
     */
    public function getVoucherId(): ?int
    {
        return $this->voucherId;
    }
    /**
     * Set voucherId value
     * @param int $voucherId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderVoucherRequest
     */
    public function setVoucherId(?int $voucherId = null): self
    {
        // validation for constraint: int
        if (!is_null($voucherId) && !(is_int($voucherId) || ctype_digit($voucherId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voucherId, true), gettype($voucherId)), __LINE__);
        }
        $this->voucherId = $voucherId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderVoucherRequest
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
}
