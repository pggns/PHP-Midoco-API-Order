<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketCoupon StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TicketCoupon extends SegmentType
{
    /**
     * The couponId
     * Meta information extracted from the WSDL
     * - documentation: Unique ID for the coupon
     * @var int|null
     */
    protected ?int $couponId = null;
    /**
     * Constructor method for TicketCoupon
     * @uses TicketCoupon::setCouponId()
     * @param int $couponId
     */
    public function __construct(?int $couponId = null)
    {
        $this
            ->setCouponId($couponId);
    }
    /**
     * Get couponId value
     * @return int|null
     */
    public function getCouponId(): ?int
    {
        return $this->couponId;
    }
    /**
     * Set couponId value
     * @param int $couponId
     * @return \Pggns\MidocoApi\Order\StructType\TicketCoupon
     */
    public function setCouponId(?int $couponId = null): self
    {
        // validation for constraint: int
        if (!is_null($couponId) && !(is_int($couponId) || ctype_digit($couponId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($couponId, true), gettype($couponId)), __LINE__);
        }
        $this->couponId = $couponId;
        
        return $this;
    }
}
