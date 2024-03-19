<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmadeusStatusNotificationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AmadeusStatusNotificationRequest extends AbstractStructBase
{
    /**
     * The AmadeusBookingStatus
     * Meta information extracted from the WSDL
     * - ref: AmadeusBookingStatus
     * @var \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus $AmadeusBookingStatus = null;
    /**
     * Constructor method for AmadeusStatusNotificationRequest
     * @uses AmadeusStatusNotificationRequest::setAmadeusBookingStatus()
     * @param \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus $amadeusBookingStatus
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus $amadeusBookingStatus = null)
    {
        $this
            ->setAmadeusBookingStatus($amadeusBookingStatus);
    }
    /**
     * Get AmadeusBookingStatus value
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus|null
     */
    public function getAmadeusBookingStatus(): ?\Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus
    {
        return $this->AmadeusBookingStatus;
    }
    /**
     * Set AmadeusBookingStatus value
     * @param \Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus $amadeusBookingStatus
     * @return \Pggns\MidocoApi\Order\StructType\AmadeusStatusNotificationRequest
     */
    public function setAmadeusBookingStatus(?\Pggns\MidocoApi\Order\StructType\AmadeusBookingStatus $amadeusBookingStatus = null): self
    {
        $this->AmadeusBookingStatus = $amadeusBookingStatus;
        
        return $this;
    }
}
