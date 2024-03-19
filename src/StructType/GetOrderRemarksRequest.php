<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderRemarksRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderRemarksRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The sortOrder
     * @var string|null
     */
    protected ?string $sortOrder = null;
    /**
     * Constructor method for GetOrderRemarksRequest
     * @uses GetOrderRemarksRequest::setOrderId()
     * @uses GetOrderRemarksRequest::setSortOrder()
     * @param int $orderId
     * @param string $sortOrder
     */
    public function __construct(?int $orderId = null, ?string $sortOrder = null)
    {
        $this
            ->setOrderId($orderId)
            ->setSortOrder($sortOrder);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRemarksRequest
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
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param string $sortOrder
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRemarksRequest
     */
    public function setSortOrder(?string $sortOrder = null): self
    {
        // validation for constraint: string
        if (!is_null($sortOrder) && !is_string($sortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortOrder, true), gettype($sortOrder)), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        
        return $this;
    }
}
