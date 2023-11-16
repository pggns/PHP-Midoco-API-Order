<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccountPeriodRequest StructType
 * @subpackage Structs
 */
class SaveAccountPeriodRequest extends AbstractStructBase
{
    /**
     * The MidocoBookingPeriodAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingPeriodAccount
     * @var \Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO $MidocoBookingPeriodAccount = null;
    /**
     * Constructor method for SaveAccountPeriodRequest
     * @uses SaveAccountPeriodRequest::setMidocoBookingPeriodAccount()
     * @param \Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO $midocoBookingPeriodAccount
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO $midocoBookingPeriodAccount = null)
    {
        $this
            ->setMidocoBookingPeriodAccount($midocoBookingPeriodAccount);
    }
    /**
     * Get MidocoBookingPeriodAccount value
     * @return \Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO|null
     */
    public function getMidocoBookingPeriodAccount(): ?\Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO
    {
        return $this->MidocoBookingPeriodAccount;
    }
    /**
     * Set MidocoBookingPeriodAccount value
     * @param \Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO $midocoBookingPeriodAccount
     * @return \Pggns\MidocoApi\Order\StructType\SaveAccountPeriodRequest
     */
    public function setMidocoBookingPeriodAccount(?\Pggns\MidocoApi\Order\StructType\BookingPeriodAccountDTO $midocoBookingPeriodAccount = null): self
    {
        $this->MidocoBookingPeriodAccount = $midocoBookingPeriodAccount;
        
        return $this;
    }
}
