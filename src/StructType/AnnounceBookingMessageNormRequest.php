<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceBookingMessageNormRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceBookingMessageNormRequest extends AbstractStructBase
{
    /**
     * The midoco_booking_message_norm
     * Meta information extracted from the WSDL
     * - ref: mbm_norm:midoco_booking_message_norm
     * @var \Pggns\MidocoApi\Order\StructType\Midoco_booking_message_norm|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message_norm $midoco_booking_message_norm = null;
    /**
     * Constructor method for AnnounceBookingMessageNormRequest
     * @uses AnnounceBookingMessageNormRequest::setMidoco_booking_message_norm()
     * @param \Pggns\MidocoApi\Order\StructType\Midoco_booking_message_norm $midoco_booking_message_norm
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message_norm $midoco_booking_message_norm = null)
    {
        $this
            ->setMidoco_booking_message_norm($midoco_booking_message_norm);
    }
    /**
     * Get midoco_booking_message_norm value
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message_norm|null
     */
    public function getMidoco_booking_message_norm(): ?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message_norm
    {
        return $this->midoco_booking_message_norm;
    }
    /**
     * Set midoco_booking_message_norm value
     * @param \Pggns\MidocoApi\Order\StructType\Midoco_booking_message_norm $midoco_booking_message_norm
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageNormRequest
     */
    public function setMidoco_booking_message_norm(?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message_norm $midoco_booking_message_norm = null): self
    {
        $this->midoco_booking_message_norm = $midoco_booking_message_norm;
        
        return $this;
    }
}
