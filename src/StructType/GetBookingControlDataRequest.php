<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingControlDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingControlDataRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingControl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBookingControl
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingControl|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBookingControl $MidocoBookingControl = null;
    /**
     * Constructor method for GetBookingControlDataRequest
     * @uses GetBookingControlDataRequest::setMidocoBookingControl()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingControl $midocoBookingControl
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBookingControl $midocoBookingControl = null)
    {
        $this
            ->setMidocoBookingControl($midocoBookingControl);
    }
    /**
     * Get MidocoBookingControl value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl|null
     */
    public function getMidocoBookingControl(): ?\Pggns\MidocoApi\Order\StructType\MidocoBookingControl
    {
        return $this->MidocoBookingControl;
    }
    /**
     * Set MidocoBookingControl value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingControl $midocoBookingControl
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingControlDataRequest
     */
    public function setMidocoBookingControl(?\Pggns\MidocoApi\Order\StructType\MidocoBookingControl $midocoBookingControl = null): self
    {
        $this->MidocoBookingControl = $midocoBookingControl;
        
        return $this;
    }
}
