<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubOrdersInfoRequest StructType
 * @subpackage Structs
 */
class GetSubOrdersInfoRequest extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderId;
    /**
     * The isSubOrder
     * @var bool|null
     */
    protected ?bool $isSubOrder = null;
    /**
     * The containsTravelNoItems
     * @var bool|null
     */
    protected ?bool $containsTravelNoItems = null;
    /**
     * Constructor method for GetSubOrdersInfoRequest
     * @uses GetSubOrdersInfoRequest::setOrderId()
     * @uses GetSubOrdersInfoRequest::setIsSubOrder()
     * @uses GetSubOrdersInfoRequest::setContainsTravelNoItems()
     * @param int $orderId
     * @param bool $isSubOrder
     * @param bool $containsTravelNoItems
     */
    public function __construct(int $orderId, ?bool $isSubOrder = null, ?bool $containsTravelNoItems = null)
    {
        $this
            ->setOrderId($orderId)
            ->setIsSubOrder($isSubOrder)
            ->setContainsTravelNoItems($containsTravelNoItems);
    }
    /**
     * Get orderId value
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetSubOrdersInfoRequest
     */
    public function setOrderId(int $orderId): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get isSubOrder value
     * @return bool|null
     */
    public function getIsSubOrder(): ?bool
    {
        return $this->isSubOrder;
    }
    /**
     * Set isSubOrder value
     * @param bool $isSubOrder
     * @return \Pggns\MidocoApi\Order\StructType\GetSubOrdersInfoRequest
     */
    public function setIsSubOrder(?bool $isSubOrder = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSubOrder) && !is_bool($isSubOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubOrder, true), gettype($isSubOrder)), __LINE__);
        }
        $this->isSubOrder = $isSubOrder;
        
        return $this;
    }
    /**
     * Get containsTravelNoItems value
     * @return bool|null
     */
    public function getContainsTravelNoItems(): ?bool
    {
        return $this->containsTravelNoItems;
    }
    /**
     * Set containsTravelNoItems value
     * @param bool $containsTravelNoItems
     * @return \Pggns\MidocoApi\Order\StructType\GetSubOrdersInfoRequest
     */
    public function setContainsTravelNoItems(?bool $containsTravelNoItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($containsTravelNoItems) && !is_bool($containsTravelNoItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($containsTravelNoItems, true), gettype($containsTravelNoItems)), __LINE__);
        }
        $this->containsTravelNoItems = $containsTravelNoItems;
        
        return $this;
    }
}
