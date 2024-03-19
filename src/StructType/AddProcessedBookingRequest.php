<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddProcessedBookingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddProcessedBookingRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessedBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessedBooking
     * @var \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO $MidocoProcessedBooking = null;
    /**
     * Constructor method for AddProcessedBookingRequest
     * @uses AddProcessedBookingRequest::setMidocoProcessedBooking()
     * @param \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO $midocoProcessedBooking
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO $midocoProcessedBooking = null)
    {
        $this
            ->setMidocoProcessedBooking($midocoProcessedBooking);
    }
    /**
     * Get MidocoProcessedBooking value
     * @return \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO|null
     */
    public function getMidocoProcessedBooking(): ?\Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO
    {
        return $this->MidocoProcessedBooking;
    }
    /**
     * Set MidocoProcessedBooking value
     * @param \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO $midocoProcessedBooking
     * @return \Pggns\MidocoApi\Order\StructType\AddProcessedBookingRequest
     */
    public function setMidocoProcessedBooking(?\Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO $midocoProcessedBooking = null): self
    {
        $this->MidocoProcessedBooking = $midocoProcessedBooking;
        
        return $this;
    }
}
