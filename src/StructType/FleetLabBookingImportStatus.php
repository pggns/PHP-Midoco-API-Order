<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FleetLabBookingImportStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FleetLabBookingImportStatus extends ImportHandlerResponseType
{
    /**
     * The retailerUnitName
     * @var string|null
     */
    protected ?string $retailerUnitName = null;
    /**
     * The retailerUnitOrderNo
     * @var int|null
     */
    protected ?int $retailerUnitOrderNo = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * Constructor method for FleetLabBookingImportStatus
     * @uses FleetLabBookingImportStatus::setRetailerUnitName()
     * @uses FleetLabBookingImportStatus::setRetailerUnitOrderNo()
     * @uses FleetLabBookingImportStatus::setBookingId()
     * @param string $retailerUnitName
     * @param int $retailerUnitOrderNo
     * @param string $bookingId
     */
    public function __construct(?string $retailerUnitName = null, ?int $retailerUnitOrderNo = null, ?string $bookingId = null)
    {
        $this
            ->setRetailerUnitName($retailerUnitName)
            ->setRetailerUnitOrderNo($retailerUnitOrderNo)
            ->setBookingId($bookingId);
    }
    /**
     * Get retailerUnitName value
     * @return string|null
     */
    public function getRetailerUnitName(): ?string
    {
        return $this->retailerUnitName;
    }
    /**
     * Set retailerUnitName value
     * @param string $retailerUnitName
     * @return \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus
     */
    public function setRetailerUnitName(?string $retailerUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($retailerUnitName) && !is_string($retailerUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retailerUnitName, true), gettype($retailerUnitName)), __LINE__);
        }
        $this->retailerUnitName = $retailerUnitName;
        
        return $this;
    }
    /**
     * Get retailerUnitOrderNo value
     * @return int|null
     */
    public function getRetailerUnitOrderNo(): ?int
    {
        return $this->retailerUnitOrderNo;
    }
    /**
     * Set retailerUnitOrderNo value
     * @param int $retailerUnitOrderNo
     * @return \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus
     */
    public function setRetailerUnitOrderNo(?int $retailerUnitOrderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($retailerUnitOrderNo) && !(is_int($retailerUnitOrderNo) || ctype_digit($retailerUnitOrderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($retailerUnitOrderNo, true), gettype($retailerUnitOrderNo)), __LINE__);
        }
        $this->retailerUnitOrderNo = $retailerUnitOrderNo;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\FleetLabBookingImportStatus
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
