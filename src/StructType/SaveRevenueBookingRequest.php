<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRevenueBookingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRevenueBookingRequest extends AbstractStructBase
{
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $RevenueBookingInfo = null;
    /**
     * The execute_booking
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $execute_booking = null;
    /**
     * Constructor method for SaveRevenueBookingRequest
     * @uses SaveRevenueBookingRequest::setRevenueBookingInfo()
     * @uses SaveRevenueBookingRequest::setExecute_booking()
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo
     * @param bool $execute_booking
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null, ?bool $execute_booking = true)
    {
        $this
            ->setRevenueBookingInfo($revenueBookingInfo)
            ->setExecute_booking($execute_booking);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveRevenueBookingRequest
     */
    public function setRevenueBookingInfo(?\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $revenueBookingInfo = null): self
    {
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
    /**
     * Get execute_booking value
     * @return bool|null
     */
    public function getExecute_booking(): ?bool
    {
        return $this->execute_booking;
    }
    /**
     * Set execute_booking value
     * @param bool $execute_booking
     * @return \Pggns\MidocoApi\Order\StructType\SaveRevenueBookingRequest
     */
    public function setExecute_booking(?bool $execute_booking = true): self
    {
        // validation for constraint: boolean
        if (!is_null($execute_booking) && !is_bool($execute_booking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($execute_booking, true), gettype($execute_booking)), __LINE__);
        }
        $this->execute_booking = $execute_booking;
        
        return $this;
    }
}
