<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveUnprintedBillingPositionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveUnprintedBillingPositionsRequest extends AbstractStructBase
{
    /**
     * The orderIds
     * @var string|null
     */
    protected ?string $orderIds = null;
    /**
     * Constructor method for RemoveUnprintedBillingPositionsRequest
     * @uses RemoveUnprintedBillingPositionsRequest::setOrderIds()
     * @param string $orderIds
     */
    public function __construct(?string $orderIds = null)
    {
        $this
            ->setOrderIds($orderIds);
    }
    /**
     * Get orderIds value
     * @return string|null
     */
    public function getOrderIds(): ?string
    {
        return $this->orderIds;
    }
    /**
     * Set orderIds value
     * @param string $orderIds
     * @return \Pggns\MidocoApi\Order\StructType\RemoveUnprintedBillingPositionsRequest
     */
    public function setOrderIds(?string $orderIds = null): self
    {
        // validation for constraint: string
        if (!is_null($orderIds) && !is_string($orderIds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderIds, true), gettype($orderIds)), __LINE__);
        }
        $this->orderIds = $orderIds;
        
        return $this;
    }
}
