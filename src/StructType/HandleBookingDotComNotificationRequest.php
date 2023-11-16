<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HandleBookingDotComNotificationRequest StructType
 * @subpackage Structs
 */
class HandleBookingDotComNotificationRequest extends AbstractStructBase
{
    /**
     * The reservationId
     * @var string|null
     */
    protected ?string $reservationId = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * Constructor method for HandleBookingDotComNotificationRequest
     * @uses HandleBookingDotComNotificationRequest::setReservationId()
     * @uses HandleBookingDotComNotificationRequest::setUserName()
     * @param string $reservationId
     * @param string $userName
     */
    public function __construct(?string $reservationId = null, ?string $userName = null)
    {
        $this
            ->setReservationId($reservationId)
            ->setUserName($userName);
    }
    /**
     * Get reservationId value
     * @return string|null
     */
    public function getReservationId(): ?string
    {
        return $this->reservationId;
    }
    /**
     * Set reservationId value
     * @param string $reservationId
     * @return \Pggns\MidocoApi\Order\StructType\HandleBookingDotComNotificationRequest
     */
    public function setReservationId(?string $reservationId = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationId) && !is_string($reservationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationId, true), gettype($reservationId)), __LINE__);
        }
        $this->reservationId = $reservationId;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Order\StructType\HandleBookingDotComNotificationRequest
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
}
