<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerTravelType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerTravelType extends CrmTravelDTO
{
    /**
     * The bookingUserName
     * @var string|null
     */
    protected ?string $bookingUserName = null;
    /**
     * The travelDuration
     * @var int|null
     */
    protected ?int $travelDuration = null;
    /**
     * Constructor method for MidocoCustomerTravelType
     * @uses MidocoCustomerTravelType::setBookingUserName()
     * @uses MidocoCustomerTravelType::setTravelDuration()
     * @param string $bookingUserName
     * @param int $travelDuration
     */
    public function __construct(?string $bookingUserName = null, ?int $travelDuration = null)
    {
        $this
            ->setBookingUserName($bookingUserName)
            ->setTravelDuration($travelDuration);
    }
    /**
     * Get bookingUserName value
     * @return string|null
     */
    public function getBookingUserName(): ?string
    {
        return $this->bookingUserName;
    }
    /**
     * Set bookingUserName value
     * @param string $bookingUserName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType
     */
    public function setBookingUserName(?string $bookingUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingUserName) && !is_string($bookingUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingUserName, true), gettype($bookingUserName)), __LINE__);
        }
        $this->bookingUserName = $bookingUserName;
        
        return $this;
    }
    /**
     * Get travelDuration value
     * @return int|null
     */
    public function getTravelDuration(): ?int
    {
        return $this->travelDuration;
    }
    /**
     * Set travelDuration value
     * @param int $travelDuration
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType
     */
    public function setTravelDuration(?int $travelDuration = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDuration) && !(is_int($travelDuration) || ctype_digit($travelDuration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDuration, true), gettype($travelDuration)), __LINE__);
        }
        $this->travelDuration = $travelDuration;
        
        return $this;
    }
}
