<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalServiceType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdditionalServiceType extends AbstractStructBase
{
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The booking_position
     * @var int|null
     */
    protected ?int $booking_position = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * Constructor method for AdditionalServiceType
     * @uses AdditionalServiceType::setCode()
     * @uses AdditionalServiceType::setDescription()
     * @uses AdditionalServiceType::setPrice()
     * @uses AdditionalServiceType::setCurrency()
     * @uses AdditionalServiceType::setBooking_position()
     * @uses AdditionalServiceType::setBookingPosition()
     * @param string $code
     * @param string $description
     * @param float $price
     * @param string $currency
     * @param int $booking_position
     * @param int $bookingPosition
     */
    public function __construct(?string $code = null, ?string $description = null, ?float $price = null, ?string $currency = null, ?int $booking_position = null, ?int $bookingPosition = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description)
            ->setPrice($price)
            ->setCurrency($currency)
            ->setBooking_position($booking_position)
            ->setBookingPosition($bookingPosition);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceType
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceType
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceType
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get booking_position value
     * @return int|null
     */
    public function getBooking_position(): ?int
    {
        return $this->{'booking-position'};
    }
    /**
     * Set booking_position value
     * @param int $booking_position
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceType
     */
    public function setBooking_position(?int $booking_position = null): self
    {
        // validation for constraint: int
        if (!is_null($booking_position) && !(is_int($booking_position) || ctype_digit($booking_position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($booking_position, true), gettype($booking_position)), __LINE__);
        }
        $this->booking_position = $this->{'booking-position'} = $booking_position;
        
        return $this;
    }
    /**
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceType
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
        return $this;
    }
}
