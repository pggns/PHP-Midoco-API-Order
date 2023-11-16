<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetRevenueBookingPaymentRequest StructType
 * @subpackage Structs
 */
class SetRevenueBookingPaymentRequest extends AbstractStructBase
{
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $RevenueBookingInfo = null;
    /**
     * Constructor method for SetRevenueBookingPaymentRequest
     * @uses SetRevenueBookingPaymentRequest::setRevenueBookingInfo()
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null)
    {
        $this
            ->setRevenueBookingInfo($revenueBookingInfo);
    }
    /**
     * Get RevenueBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType|null
     */
    public function getRevenueBookingInfo(): ?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
    {
        return $this->RevenueBookingInfo;
    }
    /**
     * Set RevenueBookingInfo value
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\SetRevenueBookingPaymentRequest
     */
    public function setRevenueBookingInfo(?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null): self
    {
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
}
