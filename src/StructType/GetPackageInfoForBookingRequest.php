<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageInfoForBookingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPackageInfoForBookingRequest extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * Constructor method for GetPackageInfoForBookingRequest
     * @uses GetPackageInfoForBookingRequest::setBookingId()
     * @param string $bookingId
     */
    public function __construct(?string $bookingId = null)
    {
        $this
            ->setBookingId($bookingId);
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\GetPackageInfoForBookingRequest
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
}
