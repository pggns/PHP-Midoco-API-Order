<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prices StructType
 * Meta information extracted from the WSDL
 * - documentation: The price section, giving prices for all the bookings mentioned above, referenced by the price_ref attribute
 * @subpackage Structs
 */
class Prices extends AbstractStructBase
{
    /**
     * The booking_price
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Booking_price[]
     */
    protected array $booking_price = [];
    /**
     * The flight_price
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Flight_price[]
     */
    protected array $flight_price = [];
    /**
     * The fee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Fee[]
     */
    protected array $fee = [];
    /**
     * The details_price
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Details_price[]
     */
    protected array $details_price = [];
    /**
     * The displayed_currency
     * Meta information extracted from the WSDL
     * - documentation: A debitor currency which is used to display a foreign price in the invoice.
     * @var string|null
     */
    protected ?string $displayed_currency = null;
    /**
     * The displayed_currency_rate
     * Meta information extracted from the WSDL
     * - documentation: Conversion rate used to calculate the price of every sell item from orgunit currency to foreign currency. This information is used to calculate other information (like deposit payment amount) in foreign currency for print (not for
     * financial booking)
     * @var float|null
     */
    protected ?float $displayed_currency_rate = null;
    /**
     * The booking_currency_rate
     * Meta information extracted from the WSDL
     * - documentation: conversion rate used to calculate the price from foreign currency to orgunit currency.
     * @var float|null
     */
    protected ?float $booking_currency_rate = null;
    /**
     * The bookingPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\BookingPrice[]
     */
    protected array $bookingPrice = [];
    /**
     * The flightPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\FlightPrice[]
     */
    protected array $flightPrice = [];
    /**
     * The detailsPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\DetailsPrice[]
     */
    protected array $detailsPrice = [];
    /**
     * The displayedCurrency
     * Meta information extracted from the WSDL
     * - documentation: A debitor currency which is used to display a foreign price in the invoice.
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * The displayedCurrencyRate
     * Meta information extracted from the WSDL
     * - documentation: Conversion rate used to calculate the price of every sell item from orgunit currency to foreign currency. This information is used to calculate other information (like deposit payment amount) in foreign currency for print (not for
     * financial booking)
     * @var float|null
     */
    protected ?float $displayedCurrencyRate = null;
    /**
     * The bookingCurrencyRate
     * Meta information extracted from the WSDL
     * - documentation: conversion rate used to calculate the price from foreign currency to orgunit currency.
     * @var float|null
     */
    protected ?float $bookingCurrencyRate = null;
    /**
     * Constructor method for prices
     * @uses Prices::setBooking_price()
     * @uses Prices::setFlight_price()
     * @uses Prices::setFee()
     * @uses Prices::setDetails_price()
     * @uses Prices::setDisplayed_currency()
     * @uses Prices::setDisplayed_currency_rate()
     * @uses Prices::setBooking_currency_rate()
     * @uses Prices::setBookingPrice()
     * @uses Prices::setFlightPrice()
     * @uses Prices::setDetailsPrice()
     * @uses Prices::setDisplayedCurrency()
     * @uses Prices::setDisplayedCurrencyRate()
     * @uses Prices::setBookingCurrencyRate()
     * @param \Pggns\MidocoApi\Order\StructType\Booking_price[] $booking_price
     * @param \Pggns\MidocoApi\Order\StructType\Flight_price[] $flight_price
     * @param \Pggns\MidocoApi\Order\StructType\Fee[] $fee
     * @param \Pggns\MidocoApi\Order\StructType\Details_price[] $details_price
     * @param string $displayed_currency
     * @param float $displayed_currency_rate
     * @param float $booking_currency_rate
     * @param \Pggns\MidocoApi\Order\StructType\BookingPrice[] $bookingPrice
     * @param \Pggns\MidocoApi\Order\StructType\FlightPrice[] $flightPrice
     * @param \Pggns\MidocoApi\Order\StructType\DetailsPrice[] $detailsPrice
     * @param string $displayedCurrency
     * @param float $displayedCurrencyRate
     * @param float $bookingCurrencyRate
     */
    public function __construct(array $booking_price = [], array $flight_price = [], array $fee = [], array $details_price = [], ?string $displayed_currency = null, ?float $displayed_currency_rate = null, ?float $booking_currency_rate = null, array $bookingPrice = [], array $flightPrice = [], array $detailsPrice = [], ?string $displayedCurrency = null, ?float $displayedCurrencyRate = null, ?float $bookingCurrencyRate = null)
    {
        $this
            ->setBooking_price($booking_price)
            ->setFlight_price($flight_price)
            ->setFee($fee)
            ->setDetails_price($details_price)
            ->setDisplayed_currency($displayed_currency)
            ->setDisplayed_currency_rate($displayed_currency_rate)
            ->setBooking_currency_rate($booking_currency_rate)
            ->setBookingPrice($bookingPrice)
            ->setFlightPrice($flightPrice)
            ->setDetailsPrice($detailsPrice)
            ->setDisplayedCurrency($displayedCurrency)
            ->setDisplayedCurrencyRate($displayedCurrencyRate)
            ->setBookingCurrencyRate($bookingCurrencyRate);
    }
    /**
     * Get booking_price value
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price[]
     */
    public function getBooking_price(): array
    {
        return $this->{'booking-price'};
    }
    /**
     * This method is responsible for validating the values passed to the setBooking_price method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBooking_price method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBooking_priceForArrayConstraintsFromSetBooking_price(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesBooking_priceItem) {
            // validation for constraint: itemType
            if (!$pricesBooking_priceItem instanceof \Pggns\MidocoApi\Order\StructType\Booking_price) {
                $invalidValues[] = is_object($pricesBooking_priceItem) ? get_class($pricesBooking_priceItem) : sprintf('%s(%s)', gettype($pricesBooking_priceItem), var_export($pricesBooking_priceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The booking_price property can only contain items of type \Pggns\MidocoApi\Order\StructType\Booking_price, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set booking_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Booking_price[] $booking_price
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setBooking_price(array $booking_price = []): self
    {
        // validation for constraint: array
        if ('' !== ($booking_priceArrayErrorMessage = self::validateBooking_priceForArrayConstraintsFromSetBooking_price($booking_price))) {
            throw new InvalidArgumentException($booking_priceArrayErrorMessage, __LINE__);
        }
        $this->booking_price = $this->{'booking-price'} = $booking_price;
        
        return $this;
    }
    /**
     * Add item to booking_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Booking_price $item
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function addToBooking_price(\Pggns\MidocoApi\Order\StructType\Booking_price $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Booking_price) {
            throw new InvalidArgumentException(sprintf('The booking_price property can only contain items of type \Pggns\MidocoApi\Order\StructType\Booking_price, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->booking_price[] = $this->{'booking-price'}[] = $item;
        
        return $this;
    }
    /**
     * Get flight_price value
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price[]
     */
    public function getFlight_price(): array
    {
        return $this->{'flight-price'};
    }
    /**
     * This method is responsible for validating the values passed to the setFlight_price method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlight_price method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlight_priceForArrayConstraintsFromSetFlight_price(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesFlight_priceItem) {
            // validation for constraint: itemType
            if (!$pricesFlight_priceItem instanceof \Pggns\MidocoApi\Order\StructType\Flight_price) {
                $invalidValues[] = is_object($pricesFlight_priceItem) ? get_class($pricesFlight_priceItem) : sprintf('%s(%s)', gettype($pricesFlight_priceItem), var_export($pricesFlight_priceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The flight_price property can only contain items of type \Pggns\MidocoApi\Order\StructType\Flight_price, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set flight_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Flight_price[] $flight_price
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setFlight_price(array $flight_price = []): self
    {
        // validation for constraint: array
        if ('' !== ($flight_priceArrayErrorMessage = self::validateFlight_priceForArrayConstraintsFromSetFlight_price($flight_price))) {
            throw new InvalidArgumentException($flight_priceArrayErrorMessage, __LINE__);
        }
        $this->flight_price = $this->{'flight-price'} = $flight_price;
        
        return $this;
    }
    /**
     * Add item to flight_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Flight_price $item
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function addToFlight_price(\Pggns\MidocoApi\Order\StructType\Flight_price $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Flight_price) {
            throw new InvalidArgumentException(sprintf('The flight_price property can only contain items of type \Pggns\MidocoApi\Order\StructType\Flight_price, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->flight_price[] = $this->{'flight-price'}[] = $item;
        
        return $this;
    }
    /**
     * Get fee value
     * @return \Pggns\MidocoApi\Order\StructType\Fee[]
     */
    public function getFee(): array
    {
        return $this->fee;
    }
    /**
     * This method is responsible for validating the values passed to the setFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeForArrayConstraintsFromSetFee(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesFeeItem) {
            // validation for constraint: itemType
            if (!$pricesFeeItem instanceof \Pggns\MidocoApi\Order\StructType\Fee) {
                $invalidValues[] = is_object($pricesFeeItem) ? get_class($pricesFeeItem) : sprintf('%s(%s)', gettype($pricesFeeItem), var_export($pricesFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fee property can only contain items of type \Pggns\MidocoApi\Order\StructType\Fee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set fee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Fee[] $fee
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setFee(array $fee = []): self
    {
        // validation for constraint: array
        if ('' !== ($feeArrayErrorMessage = self::validateFeeForArrayConstraintsFromSetFee($fee))) {
            throw new InvalidArgumentException($feeArrayErrorMessage, __LINE__);
        }
        $this->fee = $fee;
        
        return $this;
    }
    /**
     * Add item to fee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Fee $item
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function addToFee(\Pggns\MidocoApi\Order\StructType\Fee $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Fee) {
            throw new InvalidArgumentException(sprintf('The fee property can only contain items of type \Pggns\MidocoApi\Order\StructType\Fee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fee[] = $item;
        
        return $this;
    }
    /**
     * Get details_price value
     * @return \Pggns\MidocoApi\Order\StructType\Details_price[]
     */
    public function getDetails_price(): array
    {
        return $this->{'details-price'};
    }
    /**
     * This method is responsible for validating the values passed to the setDetails_price method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetails_price method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetails_priceForArrayConstraintsFromSetDetails_price(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesDetails_priceItem) {
            // validation for constraint: itemType
            if (!$pricesDetails_priceItem instanceof \Pggns\MidocoApi\Order\StructType\Details_price) {
                $invalidValues[] = is_object($pricesDetails_priceItem) ? get_class($pricesDetails_priceItem) : sprintf('%s(%s)', gettype($pricesDetails_priceItem), var_export($pricesDetails_priceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The details_price property can only contain items of type \Pggns\MidocoApi\Order\StructType\Details_price, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set details_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Details_price[] $details_price
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setDetails_price(array $details_price = []): self
    {
        // validation for constraint: array
        if ('' !== ($details_priceArrayErrorMessage = self::validateDetails_priceForArrayConstraintsFromSetDetails_price($details_price))) {
            throw new InvalidArgumentException($details_priceArrayErrorMessage, __LINE__);
        }
        $this->details_price = $this->{'details-price'} = $details_price;
        
        return $this;
    }
    /**
     * Add item to details_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Details_price $item
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function addToDetails_price(\Pggns\MidocoApi\Order\StructType\Details_price $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Details_price) {
            throw new InvalidArgumentException(sprintf('The details_price property can only contain items of type \Pggns\MidocoApi\Order\StructType\Details_price, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->details_price[] = $this->{'details-price'}[] = $item;
        
        return $this;
    }
    /**
     * Get displayed_currency value
     * @return string|null
     */
    public function getDisplayed_currency(): ?string
    {
        return $this->{'displayed-currency'};
    }
    /**
     * Set displayed_currency value
     * @param string $displayed_currency
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setDisplayed_currency(?string $displayed_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayed_currency) && !is_string($displayed_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayed_currency, true), gettype($displayed_currency)), __LINE__);
        }
        $this->displayed_currency = $this->{'displayed-currency'} = $displayed_currency;
        
        return $this;
    }
    /**
     * Get displayed_currency_rate value
     * @return float|null
     */
    public function getDisplayed_currency_rate(): ?float
    {
        return $this->{'displayed-currency-rate'};
    }
    /**
     * Set displayed_currency_rate value
     * @param float $displayed_currency_rate
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setDisplayed_currency_rate(?float $displayed_currency_rate = null): self
    {
        // validation for constraint: float
        if (!is_null($displayed_currency_rate) && !(is_float($displayed_currency_rate) || is_numeric($displayed_currency_rate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayed_currency_rate, true), gettype($displayed_currency_rate)), __LINE__);
        }
        $this->displayed_currency_rate = $this->{'displayed-currency-rate'} = $displayed_currency_rate;
        
        return $this;
    }
    /**
     * Get booking_currency_rate value
     * @return float|null
     */
    public function getBooking_currency_rate(): ?float
    {
        return $this->{'booking-currency-rate'};
    }
    /**
     * Set booking_currency_rate value
     * @param float $booking_currency_rate
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setBooking_currency_rate(?float $booking_currency_rate = null): self
    {
        // validation for constraint: float
        if (!is_null($booking_currency_rate) && !(is_float($booking_currency_rate) || is_numeric($booking_currency_rate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($booking_currency_rate, true), gettype($booking_currency_rate)), __LINE__);
        }
        $this->booking_currency_rate = $this->{'booking-currency-rate'} = $booking_currency_rate;
        
        return $this;
    }
    /**
     * Get bookingPrice value
     * @return \Pggns\MidocoApi\Order\StructType\BookingPrice[]
     */
    public function getBookingPrice(): array
    {
        return $this->bookingPrice;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingPriceForArrayConstraintsFromSetBookingPrice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesBookingPriceItem) {
            // validation for constraint: itemType
            if (!$pricesBookingPriceItem instanceof \Pggns\MidocoApi\Order\StructType\BookingPrice) {
                $invalidValues[] = is_object($pricesBookingPriceItem) ? get_class($pricesBookingPriceItem) : sprintf('%s(%s)', gettype($pricesBookingPriceItem), var_export($pricesBookingPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bookingPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\BookingPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bookingPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BookingPrice[] $bookingPrice
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setBookingPrice(array $bookingPrice = []): self
    {
        // validation for constraint: array
        if ('' !== ($bookingPriceArrayErrorMessage = self::validateBookingPriceForArrayConstraintsFromSetBookingPrice($bookingPrice))) {
            throw new InvalidArgumentException($bookingPriceArrayErrorMessage, __LINE__);
        }
        $this->bookingPrice = $bookingPrice;
        
        return $this;
    }
    /**
     * Add item to bookingPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BookingPrice $item
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function addToBookingPrice(\Pggns\MidocoApi\Order\StructType\BookingPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BookingPrice) {
            throw new InvalidArgumentException(sprintf('The bookingPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\BookingPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bookingPrice[] = $item;
        
        return $this;
    }
    /**
     * Get flightPrice value
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice[]
     */
    public function getFlightPrice(): array
    {
        return $this->flightPrice;
    }
    /**
     * This method is responsible for validating the values passed to the setFlightPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightPriceForArrayConstraintsFromSetFlightPrice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesFlightPriceItem) {
            // validation for constraint: itemType
            if (!$pricesFlightPriceItem instanceof \Pggns\MidocoApi\Order\StructType\FlightPrice) {
                $invalidValues[] = is_object($pricesFlightPriceItem) ? get_class($pricesFlightPriceItem) : sprintf('%s(%s)', gettype($pricesFlightPriceItem), var_export($pricesFlightPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The flightPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set flightPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightPrice[] $flightPrice
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setFlightPrice(array $flightPrice = []): self
    {
        // validation for constraint: array
        if ('' !== ($flightPriceArrayErrorMessage = self::validateFlightPriceForArrayConstraintsFromSetFlightPrice($flightPrice))) {
            throw new InvalidArgumentException($flightPriceArrayErrorMessage, __LINE__);
        }
        $this->flightPrice = $flightPrice;
        
        return $this;
    }
    /**
     * Add item to flightPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightPrice $item
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function addToFlightPrice(\Pggns\MidocoApi\Order\StructType\FlightPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FlightPrice) {
            throw new InvalidArgumentException(sprintf('The flightPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->flightPrice[] = $item;
        
        return $this;
    }
    /**
     * Get detailsPrice value
     * @return \Pggns\MidocoApi\Order\StructType\DetailsPrice[]
     */
    public function getDetailsPrice(): array
    {
        return $this->detailsPrice;
    }
    /**
     * This method is responsible for validating the values passed to the setDetailsPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetailsPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailsPriceForArrayConstraintsFromSetDetailsPrice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesDetailsPriceItem) {
            // validation for constraint: itemType
            if (!$pricesDetailsPriceItem instanceof \Pggns\MidocoApi\Order\StructType\DetailsPrice) {
                $invalidValues[] = is_object($pricesDetailsPriceItem) ? get_class($pricesDetailsPriceItem) : sprintf('%s(%s)', gettype($pricesDetailsPriceItem), var_export($pricesDetailsPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The detailsPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\DetailsPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set detailsPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DetailsPrice[] $detailsPrice
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setDetailsPrice(array $detailsPrice = []): self
    {
        // validation for constraint: array
        if ('' !== ($detailsPriceArrayErrorMessage = self::validateDetailsPriceForArrayConstraintsFromSetDetailsPrice($detailsPrice))) {
            throw new InvalidArgumentException($detailsPriceArrayErrorMessage, __LINE__);
        }
        $this->detailsPrice = $detailsPrice;
        
        return $this;
    }
    /**
     * Add item to detailsPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DetailsPrice $item
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function addToDetailsPrice(\Pggns\MidocoApi\Order\StructType\DetailsPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DetailsPrice) {
            throw new InvalidArgumentException(sprintf('The detailsPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\DetailsPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->detailsPrice[] = $item;
        
        return $this;
    }
    /**
     * Get displayedCurrency value
     * @return string|null
     */
    public function getDisplayedCurrency(): ?string
    {
        return $this->displayedCurrency;
    }
    /**
     * Set displayedCurrency value
     * @param string $displayedCurrency
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setDisplayedCurrency(?string $displayedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedCurrency) && !is_string($displayedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedCurrency, true), gettype($displayedCurrency)), __LINE__);
        }
        $this->displayedCurrency = $displayedCurrency;
        
        return $this;
    }
    /**
     * Get displayedCurrencyRate value
     * @return float|null
     */
    public function getDisplayedCurrencyRate(): ?float
    {
        return $this->displayedCurrencyRate;
    }
    /**
     * Set displayedCurrencyRate value
     * @param float $displayedCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setDisplayedCurrencyRate(?float $displayedCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedCurrencyRate) && !(is_float($displayedCurrencyRate) || is_numeric($displayedCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedCurrencyRate, true), gettype($displayedCurrencyRate)), __LINE__);
        }
        $this->displayedCurrencyRate = $displayedCurrencyRate;
        
        return $this;
    }
    /**
     * Get bookingCurrencyRate value
     * @return float|null
     */
    public function getBookingCurrencyRate(): ?float
    {
        return $this->bookingCurrencyRate;
    }
    /**
     * Set bookingCurrencyRate value
     * @param float $bookingCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\Prices
     */
    public function setBookingCurrencyRate(?float $bookingCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($bookingCurrencyRate) && !(is_float($bookingCurrencyRate) || is_numeric($bookingCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookingCurrencyRate, true), gettype($bookingCurrencyRate)), __LINE__);
        }
        $this->bookingCurrencyRate = $bookingCurrencyRate;
        
        return $this;
    }
}
