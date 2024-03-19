<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRevenueBookingVatDivsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRevenueBookingVatDivsRequest extends AbstractStructBase
{
    /**
     * The MidocoRevenueBookingVatDiv
     * Meta information extracted from the WSDL
     * - ref: MidocoRevenueBookingVatDiv
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $MidocoRevenueBookingVatDiv = null;
    /**
     * Constructor method for GetRevenueBookingVatDivsRequest
     * @uses GetRevenueBookingVatDivsRequest::setMidocoRevenueBookingVatDiv()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $midocoRevenueBookingVatDiv
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $midocoRevenueBookingVatDiv = null)
    {
        $this
            ->setMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv);
    }
    /**
     * Get MidocoRevenueBookingVatDiv value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv|null
     */
    public function getMidocoRevenueBookingVatDiv(): ?\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv
    {
        return $this->MidocoRevenueBookingVatDiv;
    }
    /**
     * Set MidocoRevenueBookingVatDiv value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $midocoRevenueBookingVatDiv
     * @return \Pggns\MidocoApi\Order\StructType\GetRevenueBookingVatDivsRequest
     */
    public function setMidocoRevenueBookingVatDiv(?\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $midocoRevenueBookingVatDiv = null): self
    {
        $this->MidocoRevenueBookingVatDiv = $midocoRevenueBookingVatDiv;
        
        return $this;
    }
}
