<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableOrderLockReasonDescriptionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableOrderLockReasonDescriptionsRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReason
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderLockReason
     * @var \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO $MidocoOrderLockReason = null;
    /**
     * Constructor method for GetAvailableOrderLockReasonDescriptionsRequest
     * @uses GetAvailableOrderLockReasonDescriptionsRequest::setMidocoOrderLockReason()
     * @param \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO $midocoOrderLockReason
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO $midocoOrderLockReason = null)
    {
        $this
            ->setMidocoOrderLockReason($midocoOrderLockReason);
    }
    /**
     * Get MidocoOrderLockReason value
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO|null
     */
    public function getMidocoOrderLockReason(): ?\Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO
    {
        return $this->MidocoOrderLockReason;
    }
    /**
     * Set MidocoOrderLockReason value
     * @param \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO $midocoOrderLockReason
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableOrderLockReasonDescriptionsRequest
     */
    public function setMidocoOrderLockReason(?\Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO $midocoOrderLockReason = null): self
    {
        $this->MidocoOrderLockReason = $midocoOrderLockReason;
        
        return $this;
    }
}
