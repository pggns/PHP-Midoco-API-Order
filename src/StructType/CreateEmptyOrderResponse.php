<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateEmptyOrderResponse StructType
 * @subpackage Structs
 */
class CreateEmptyOrderResponse extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for CreateEmptyOrderResponse
     * @uses CreateEmptyOrderResponse::setOrderId()
     * @param int $orderId
     */
    public function __construct(?int $orderId = null)
    {
        $this
            ->setOrderId($orderId);
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateEmptyOrderResponse
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
