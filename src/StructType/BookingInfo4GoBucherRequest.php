<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingInfo4GoBucherRequest StructType
 * @subpackage Structs
 */
class BookingInfo4GoBucherRequest extends AbstractStructBase
{
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * The midoco_booking_message
     * Meta information extracted from the WSDL
     * - ref: mbm:midoco-booking-message
     * @var \Pggns\MidocoApi\Order\StructType\Midoco_booking_message|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message $midoco_booking_message = null;
    /**
     * Constructor method for BookingInfo4GoBucherRequest
     * @uses BookingInfo4GoBucherRequest::setUrl()
     * @uses BookingInfo4GoBucherRequest::setMidoco_booking_message()
     * @param string $url
     * @param \Pggns\MidocoApi\Order\StructType\Midoco_booking_message $midoco_booking_message
     */
    public function __construct(?string $url = null, ?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message $midoco_booking_message = null)
    {
        $this
            ->setUrl($url)
            ->setMidoco_booking_message($midoco_booking_message);
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Pggns\MidocoApi\Order\StructType\BookingInfo4GoBucherRequest
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BookingInfo4GoBucherRequest
     */
    public function setMidoco_booking_message(?\Pggns\MidocoApi\Order\StructType\Midoco_booking_message $midoco_booking_message = null): self
    {
        $this->midoco_booking_message = $this->{'midoco-booking-message'} = $midoco_booking_message;
        
        return $this;
    }
}
