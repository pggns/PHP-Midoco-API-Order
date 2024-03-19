<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingMessage4OrderResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingMessage4OrderResponse extends AbstractStructBase
{
    /**
     * The midoco_booking_message
     * Meta information extracted from the WSDL
     * - ref: mbm:midoco-booking-message
     * @var \Pggns\MidocoApi\Order\StructType\Midoco_booking_message|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message $midoco_booking_message = null;
    /**
     * Constructor method for GetBookingMessage4OrderResponse
     * @uses GetBookingMessage4OrderResponse::setMidoco_booking_message()
     * @param \Pggns\MidocoApi\Order\StructType\Midoco_booking_message $midoco_booking_message
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message $midoco_booking_message = null)
    {
        $this
            ->setMidoco_booking_message($midoco_booking_message);
    }
    /**
     * Get midoco_booking_message value
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message|null
     */
    public function getMidoco_booking_message(): ?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message
    {
        return $this->{'midoco-booking-message'};
    }
    /**
     * Set midoco_booking_message value
     * @param \Pggns\MidocoApi\Order\StructType\Midoco_booking_message $midoco_booking_message
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingMessage4OrderResponse
     */
    public function setMidoco_booking_message(?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message $midoco_booking_message = null): self
    {
        $this->midoco_booking_message = $this->{'midoco-booking-message'} = $midoco_booking_message;
        
        return $this;
    }
}
