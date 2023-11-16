<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookPaymentProviderSettlementBookingResponse StructType
 * @subpackage Structs
 */
class BookPaymentProviderSettlementBookingResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentProviderSettlBooking
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentProviderSettlBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $MidocoPaymentProviderSettlBooking = null;
    /**
     * Constructor method for BookPaymentProviderSettlementBookingResponse
     * @uses BookPaymentProviderSettlementBookingResponse::setMidocoPaymentProviderSettlBooking()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBooking
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBooking = null)
    {
        $this
            ->setMidocoPaymentProviderSettlBooking($midocoPaymentProviderSettlBooking);
    }
    /**
     * Get MidocoPaymentProviderSettlBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType|null
     */
    public function getMidocoPaymentProviderSettlBooking(): ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType
    {
        return $this->MidocoPaymentProviderSettlBooking;
    }
    /**
     * Set MidocoPaymentProviderSettlBooking value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBooking
     * @return \Pggns\MidocoApi\Order\StructType\BookPaymentProviderSettlementBookingResponse
     */
    public function setMidocoPaymentProviderSettlBooking(?\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType $midocoPaymentProviderSettlBooking = null): self
    {
        $this->MidocoPaymentProviderSettlBooking = $midocoPaymentProviderSettlBooking;
        
        return $this;
    }
}
