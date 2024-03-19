<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for flight-price StructType
 * Meta information extracted from the WSDL
 * - documentation: prices for flights, split in tax and fare amount
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Flight_price extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The booking_position
     * Meta information extracted from the WSDL
     * - documentation: this is the reference to the booking, because in case of flight, a booking will have one price per passenger
     * - use: required
     * @var int
     */
    protected int $booking_position;
    /**
     * The ticket_designator
     * Meta information extracted from the WSDL
     * - documentation: airline code for the airline fulfilling the ticket segments (printed on ticket)
     * @var string|null
     */
    protected ?string $ticket_designator = null;
    /**
     * The base_fare
     * @var float|null
     */
    protected ?float $base_fare = null;
    /**
     * The fare_type
     * @var string|null
     */
    protected ?string $fare_type = null;
    /**
     * The total_tax
     * @var float|null
     */
    protected ?float $total_tax = null;
    /**
     * The total_price
     * @var float|null
     */
    protected ?float $total_price = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The commission_percent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commission_percent = null;
    /**
     * The commission_amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commission_amount = null;
    /**
     * The wholesale_price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $wholesale_price = null;
    /**
     * The person_assignment
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The service_assignment
     * Meta information extracted from the WSDL
     * - documentation: reference the segment-no(s) covered by this pricing
     * @var string|null
     */
    protected ?string $service_assignment = null;
    /**
     * The payment_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $payment_type = null;
    /**
     * The extPaymentType
     * Meta information extracted from the WSDL
     * - documentation: default available values are: CASH,DEBIT,CC,FULL_CREDIT. More can be defined in org. unit attribute CUSTOM_EXTERN_PAYMENT_TYPES
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $extPaymentType = null;
    /**
     * The payment_information
     * Meta information extracted from the WSDL
     * - documentation: e.g. rules for storno, ticketing dependencies
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $payment_information = null;
    /**
     * The ticketing_date
     * Meta information extracted from the WSDL
     * - documentation: For tickets: the date when the print should occur, not filled for low-fare, charter and bought tickets
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $ticketing_date = null;
    /**
     * The is_domestic
     * Meta information extracted from the WSDL
     * - documentation: indicates that this price is for a domestic ticket and contains vat.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $is_domestic = null;
    /**
     * The vat_printed
     * Meta information extracted from the WSDL
     * - documentation: set to true when an invoice should not contain vat information for this price (applies for domestic tickets)
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vat_printed = null;
    /**
     * The vat_percent
     * Meta information extracted from the WSDL
     * - documentation: Percent of VAT which is included in the selling price
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $vat_percent = null;
    /**
     * The fee_calculated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $fee_calculated = null;
    /**
     * The fee_amount_included
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $fee_amount_included = null;
    /**
     * The fee_taxable_percent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $fee_taxable_percent = null;
    /**
     * The fee_currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fee_currency = null;
    /**
     * The original_price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $original_price = null;
    /**
     * The original_currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $original_currency = null;
    /**
     * The exchange_rate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $exchange_rate = null;
    /**
     * The saving
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: saving
     * @var \Pggns\MidocoApi\Order\StructType\Saving[]
     */
    protected ?array $saving = null;
    /**
     * The cancellation_fee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $cancellation_fee = null;
    /**
     * The cc_information
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: cc-information
     * @var \Pggns\MidocoApi\Order\StructType\Cc_information|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Cc_information $cc_information = null;
    /**
     * Constructor method for flight-price
     * @uses Flight_price::setPosition()
     * @uses Flight_price::setBooking_position()
     * @uses Flight_price::setTicket_designator()
     * @uses Flight_price::setBase_fare()
     * @uses Flight_price::setFare_type()
     * @uses Flight_price::setTotal_tax()
     * @uses Flight_price::setTotal_price()
     * @uses Flight_price::setCurrency()
     * @uses Flight_price::setCommission_percent()
     * @uses Flight_price::setCommission_amount()
     * @uses Flight_price::setWholesale_price()
     * @uses Flight_price::setPerson_assignment()
     * @uses Flight_price::setService_assignment()
     * @uses Flight_price::setPayment_type()
     * @uses Flight_price::setExtPaymentType()
     * @uses Flight_price::setPayment_information()
     * @uses Flight_price::setTicketing_date()
     * @uses Flight_price::setIs_domestic()
     * @uses Flight_price::setVat_printed()
     * @uses Flight_price::setVat_percent()
     * @uses Flight_price::setFee_calculated()
     * @uses Flight_price::setFee_amount_included()
     * @uses Flight_price::setFee_taxable_percent()
     * @uses Flight_price::setFee_currency()
     * @uses Flight_price::setOriginal_price()
     * @uses Flight_price::setOriginal_currency()
     * @uses Flight_price::setExchange_rate()
     * @uses Flight_price::setSaving()
     * @uses Flight_price::setCancellation_fee()
     * @uses Flight_price::setCc_information()
     * @param int $position
     * @param int $booking_position
     * @param string $ticket_designator
     * @param float $base_fare
     * @param string $fare_type
     * @param float $total_tax
     * @param float $total_price
     * @param string $currency
     * @param float $commission_percent
     * @param float $commission_amount
     * @param float $wholesale_price
     * @param string $person_assignment
     * @param string $service_assignment
     * @param string $payment_type
     * @param string $extPaymentType
     * @param string $payment_information
     * @param string $ticketing_date
     * @param bool $is_domestic
     * @param bool $vat_printed
     * @param float $vat_percent
     * @param bool $fee_calculated
     * @param float $fee_amount_included
     * @param float $fee_taxable_percent
     * @param string $fee_currency
     * @param float $original_price
     * @param string $original_currency
     * @param float $exchange_rate
     * @param \Pggns\MidocoApi\Order\StructType\Saving[] $saving
     * @param float $cancellation_fee
     * @param \Pggns\MidocoApi\Order\StructType\Cc_information $cc_information
     */
    public function __construct(int $position, int $booking_position, ?string $ticket_designator = null, ?float $base_fare = null, ?string $fare_type = null, ?float $total_tax = null, ?float $total_price = null, ?string $currency = null, ?float $commission_percent = null, ?float $commission_amount = null, ?float $wholesale_price = null, ?string $person_assignment = null, ?string $service_assignment = null, ?string $payment_type = null, ?string $extPaymentType = null, ?string $payment_information = null, ?string $ticketing_date = null, ?bool $is_domestic = null, ?bool $vat_printed = false, ?float $vat_percent = null, ?bool $fee_calculated = null, ?float $fee_amount_included = null, ?float $fee_taxable_percent = null, ?string $fee_currency = null, ?float $original_price = null, ?string $original_currency = null, ?float $exchange_rate = null, ?array $saving = null, ?float $cancellation_fee = null, ?\Pggns\MidocoApi\Order\StructType\Cc_information $cc_information = null)
    {
        $this
            ->setPosition($position)
            ->setBooking_position($booking_position)
            ->setTicket_designator($ticket_designator)
            ->setBase_fare($base_fare)
            ->setFare_type($fare_type)
            ->setTotal_tax($total_tax)
            ->setTotal_price($total_price)
            ->setCurrency($currency)
            ->setCommission_percent($commission_percent)
            ->setCommission_amount($commission_amount)
            ->setWholesale_price($wholesale_price)
            ->setPerson_assignment($person_assignment)
            ->setService_assignment($service_assignment)
            ->setPayment_type($payment_type)
            ->setExtPaymentType($extPaymentType)
            ->setPayment_information($payment_information)
            ->setTicketing_date($ticketing_date)
            ->setIs_domestic($is_domestic)
            ->setVat_printed($vat_printed)
            ->setVat_percent($vat_percent)
            ->setFee_calculated($fee_calculated)
            ->setFee_amount_included($fee_amount_included)
            ->setFee_taxable_percent($fee_taxable_percent)
            ->setFee_currency($fee_currency)
            ->setOriginal_price($original_price)
            ->setOriginal_currency($original_currency)
            ->setExchange_rate($exchange_rate)
            ->setSaving($saving)
            ->setCancellation_fee($cancellation_fee)
            ->setCc_information($cc_information);
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get booking_position value
     * @return int
     */
    public function getBooking_position(): int
    {
        return $this->booking_position;
    }
    /**
     * Set booking_position value
     * @param int $booking_position
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setBooking_position(int $booking_position): self
    {
        // validation for constraint: int
        if (!is_null($booking_position) && !(is_int($booking_position) || ctype_digit($booking_position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($booking_position, true), gettype($booking_position)), __LINE__);
        }
        $this->booking_position = $booking_position;
        
        return $this;
    }
    /**
     * Get ticket_designator value
     * @return string|null
     */
    public function getTicket_designator(): ?string
    {
        return $this->{'ticket-designator'};
    }
    /**
     * Set ticket_designator value
     * @param string $ticket_designator
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setTicket_designator(?string $ticket_designator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticket_designator) && !is_string($ticket_designator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticket_designator, true), gettype($ticket_designator)), __LINE__);
        }
        $this->ticket_designator = $this->{'ticket-designator'} = $ticket_designator;
        
        return $this;
    }
    /**
     * Get base_fare value
     * @return float|null
     */
    public function getBase_fare(): ?float
    {
        return $this->{'base-fare'};
    }
    /**
     * Set base_fare value
     * @param float $base_fare
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setBase_fare(?float $base_fare = null): self
    {
        // validation for constraint: float
        if (!is_null($base_fare) && !(is_float($base_fare) || is_numeric($base_fare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($base_fare, true), gettype($base_fare)), __LINE__);
        }
        $this->base_fare = $this->{'base-fare'} = $base_fare;
        
        return $this;
    }
    /**
     * Get fare_type value
     * @return string|null
     */
    public function getFare_type(): ?string
    {
        return $this->{'fare-type'};
    }
    /**
     * Set fare_type value
     * @uses \Pggns\MidocoApi\Order\EnumType\Fare_type::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Fare_type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fare_type
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setFare_type(?string $fare_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Fare_type::valueIsValid($fare_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Fare_type', is_array($fare_type) ? implode(', ', $fare_type) : var_export($fare_type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Fare_type::getValidValues())), __LINE__);
        }
        $this->fare_type = $this->{'fare-type'} = $fare_type;
        
        return $this;
    }
    /**
     * Get total_tax value
     * @return float|null
     */
    public function getTotal_tax(): ?float
    {
        return $this->{'total-tax'};
    }
    /**
     * Set total_tax value
     * @param float $total_tax
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setTotal_tax(?float $total_tax = null): self
    {
        // validation for constraint: float
        if (!is_null($total_tax) && !(is_float($total_tax) || is_numeric($total_tax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_tax, true), gettype($total_tax)), __LINE__);
        }
        $this->total_tax = $this->{'total-tax'} = $total_tax;
        
        return $this;
    }
    /**
     * Get total_price value
     * @return float|null
     */
    public function getTotal_price(): ?float
    {
        return $this->{'total-price'};
    }
    /**
     * Set total_price value
     * @param float $total_price
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setTotal_price(?float $total_price = null): self
    {
        // validation for constraint: float
        if (!is_null($total_price) && !(is_float($total_price) || is_numeric($total_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_price, true), gettype($total_price)), __LINE__);
        }
        $this->total_price = $this->{'total-price'} = $total_price;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
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
     * Get commission_percent value
     * @return float|null
     */
    public function getCommission_percent(): ?float
    {
        return $this->{'commission-percent'};
    }
    /**
     * Set commission_percent value
     * @param float $commission_percent
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setCommission_percent(?float $commission_percent = null): self
    {
        // validation for constraint: float
        if (!is_null($commission_percent) && !(is_float($commission_percent) || is_numeric($commission_percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission_percent, true), gettype($commission_percent)), __LINE__);
        }
        $this->commission_percent = $this->{'commission-percent'} = $commission_percent;
        
        return $this;
    }
    /**
     * Get commission_amount value
     * @return float|null
     */
    public function getCommission_amount(): ?float
    {
        return $this->{'commission-amount'};
    }
    /**
     * Set commission_amount value
     * @param float $commission_amount
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setCommission_amount(?float $commission_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($commission_amount) && !(is_float($commission_amount) || is_numeric($commission_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission_amount, true), gettype($commission_amount)), __LINE__);
        }
        $this->commission_amount = $this->{'commission-amount'} = $commission_amount;
        
        return $this;
    }
    /**
     * Get wholesale_price value
     * @return float|null
     */
    public function getWholesale_price(): ?float
    {
        return $this->{'wholesale-price'};
    }
    /**
     * Set wholesale_price value
     * @param float $wholesale_price
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setWholesale_price(?float $wholesale_price = null): self
    {
        // validation for constraint: float
        if (!is_null($wholesale_price) && !(is_float($wholesale_price) || is_numeric($wholesale_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wholesale_price, true), gettype($wholesale_price)), __LINE__);
        }
        $this->wholesale_price = $this->{'wholesale-price'} = $wholesale_price;
        
        return $this;
    }
    /**
     * Get person_assignment value
     * @return string|null
     */
    public function getPerson_assignment(): ?string
    {
        return $this->{'person-assignment'};
    }
    /**
     * Set person_assignment value
     * @param string $person_assignment
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setPerson_assignment(?string $person_assignment = null): self
    {
        // validation for constraint: string
        if (!is_null($person_assignment) && !is_string($person_assignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($person_assignment, true), gettype($person_assignment)), __LINE__);
        }
        $this->person_assignment = $this->{'person-assignment'} = $person_assignment;
        
        return $this;
    }
    /**
     * Get service_assignment value
     * @return string|null
     */
    public function getService_assignment(): ?string
    {
        return $this->{'service-assignment'};
    }
    /**
     * Set service_assignment value
     * @param string $service_assignment
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setService_assignment(?string $service_assignment = null): self
    {
        // validation for constraint: string
        if (!is_null($service_assignment) && !is_string($service_assignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_assignment, true), gettype($service_assignment)), __LINE__);
        }
        $this->service_assignment = $this->{'service-assignment'} = $service_assignment;
        
        return $this;
    }
    /**
     * Get payment_type value
     * @return string|null
     */
    public function getPayment_type(): ?string
    {
        return $this->{'payment-type'};
    }
    /**
     * Set payment_type value
     * @uses \Pggns\MidocoApi\Order\EnumType\Payment_type::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Payment_type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $payment_type
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setPayment_type(?string $payment_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Payment_type::valueIsValid($payment_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Payment_type', is_array($payment_type) ? implode(', ', $payment_type) : var_export($payment_type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Payment_type::getValidValues())), __LINE__);
        }
        $this->payment_type = $this->{'payment-type'} = $payment_type;
        
        return $this;
    }
    /**
     * Get extPaymentType value
     * @return string|null
     */
    public function getExtPaymentType(): ?string
    {
        return $this->extPaymentType;
    }
    /**
     * Set extPaymentType value
     * @param string $extPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setExtPaymentType(?string $extPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($extPaymentType) && !is_string($extPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extPaymentType, true), gettype($extPaymentType)), __LINE__);
        }
        $this->extPaymentType = $extPaymentType;
        
        return $this;
    }
    /**
     * Get payment_information value
     * @return string|null
     */
    public function getPayment_information(): ?string
    {
        return $this->{'payment-information'};
    }
    /**
     * Set payment_information value
     * @param string $payment_information
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setPayment_information(?string $payment_information = null): self
    {
        // validation for constraint: string
        if (!is_null($payment_information) && !is_string($payment_information)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payment_information, true), gettype($payment_information)), __LINE__);
        }
        $this->payment_information = $this->{'payment-information'} = $payment_information;
        
        return $this;
    }
    /**
     * Get ticketing_date value
     * @return string|null
     */
    public function getTicketing_date(): ?string
    {
        return $this->{'ticketing-date'};
    }
    /**
     * Set ticketing_date value
     * @param string $ticketing_date
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setTicketing_date(?string $ticketing_date = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketing_date) && !is_string($ticketing_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketing_date, true), gettype($ticketing_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($ticketing_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $ticketing_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($ticketing_date, true)), __LINE__);
        }
        $this->ticketing_date = $this->{'ticketing-date'} = $ticketing_date;
        
        return $this;
    }
    /**
     * Get is_domestic value
     * @return bool|null
     */
    public function getIs_domestic(): ?bool
    {
        return $this->is_domestic;
    }
    /**
     * Set is_domestic value
     * @param bool $is_domestic
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setIs_domestic(?bool $is_domestic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($is_domestic) && !is_bool($is_domestic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_domestic, true), gettype($is_domestic)), __LINE__);
        }
        $this->is_domestic = $is_domestic;
        
        return $this;
    }
    /**
     * Get vat_printed value
     * @return bool|null
     */
    public function getVat_printed(): ?bool
    {
        return $this->{'vat-printed'};
    }
    /**
     * Set vat_printed value
     * @param bool $vat_printed
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setVat_printed(?bool $vat_printed = false): self
    {
        // validation for constraint: boolean
        if (!is_null($vat_printed) && !is_bool($vat_printed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vat_printed, true), gettype($vat_printed)), __LINE__);
        }
        $this->vat_printed = $this->{'vat-printed'} = $vat_printed;
        
        return $this;
    }
    /**
     * Get vat_percent value
     * @return float|null
     */
    public function getVat_percent(): ?float
    {
        return $this->vat_percent;
    }
    /**
     * Set vat_percent value
     * @param float $vat_percent
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setVat_percent(?float $vat_percent = null): self
    {
        // validation for constraint: float
        if (!is_null($vat_percent) && !(is_float($vat_percent) || is_numeric($vat_percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat_percent, true), gettype($vat_percent)), __LINE__);
        }
        $this->vat_percent = $vat_percent;
        
        return $this;
    }
    /**
     * Get fee_calculated value
     * @return bool|null
     */
    public function getFee_calculated(): ?bool
    {
        return $this->{'fee-calculated'};
    }
    /**
     * Set fee_calculated value
     * @param bool $fee_calculated
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setFee_calculated(?bool $fee_calculated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($fee_calculated) && !is_bool($fee_calculated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fee_calculated, true), gettype($fee_calculated)), __LINE__);
        }
        $this->fee_calculated = $this->{'fee-calculated'} = $fee_calculated;
        
        return $this;
    }
    /**
     * Get fee_amount_included value
     * @return float|null
     */
    public function getFee_amount_included(): ?float
    {
        return $this->{'fee-amount-included'};
    }
    /**
     * Set fee_amount_included value
     * @param float $fee_amount_included
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setFee_amount_included(?float $fee_amount_included = null): self
    {
        // validation for constraint: float
        if (!is_null($fee_amount_included) && !(is_float($fee_amount_included) || is_numeric($fee_amount_included))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fee_amount_included, true), gettype($fee_amount_included)), __LINE__);
        }
        $this->fee_amount_included = $this->{'fee-amount-included'} = $fee_amount_included;
        
        return $this;
    }
    /**
     * Get fee_taxable_percent value
     * @return float|null
     */
    public function getFee_taxable_percent(): ?float
    {
        return $this->{'fee-taxable-percent'};
    }
    /**
     * Set fee_taxable_percent value
     * @param float $fee_taxable_percent
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setFee_taxable_percent(?float $fee_taxable_percent = null): self
    {
        // validation for constraint: float
        if (!is_null($fee_taxable_percent) && !(is_float($fee_taxable_percent) || is_numeric($fee_taxable_percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fee_taxable_percent, true), gettype($fee_taxable_percent)), __LINE__);
        }
        $this->fee_taxable_percent = $this->{'fee-taxable-percent'} = $fee_taxable_percent;
        
        return $this;
    }
    /**
     * Get fee_currency value
     * @return string|null
     */
    public function getFee_currency(): ?string
    {
        return $this->{'fee-currency'};
    }
    /**
     * Set fee_currency value
     * @param string $fee_currency
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setFee_currency(?string $fee_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($fee_currency) && !is_string($fee_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fee_currency, true), gettype($fee_currency)), __LINE__);
        }
        $this->fee_currency = $this->{'fee-currency'} = $fee_currency;
        
        return $this;
    }
    /**
     * Get original_price value
     * @return float|null
     */
    public function getOriginal_price(): ?float
    {
        return $this->original_price;
    }
    /**
     * Set original_price value
     * @param float $original_price
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setOriginal_price(?float $original_price = null): self
    {
        // validation for constraint: float
        if (!is_null($original_price) && !(is_float($original_price) || is_numeric($original_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($original_price, true), gettype($original_price)), __LINE__);
        }
        $this->original_price = $original_price;
        
        return $this;
    }
    /**
     * Get original_currency value
     * @return string|null
     */
    public function getOriginal_currency(): ?string
    {
        return $this->original_currency;
    }
    /**
     * Set original_currency value
     * @param string $original_currency
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setOriginal_currency(?string $original_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($original_currency) && !is_string($original_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_currency, true), gettype($original_currency)), __LINE__);
        }
        $this->original_currency = $original_currency;
        
        return $this;
    }
    /**
     * Get exchange_rate value
     * @return float|null
     */
    public function getExchange_rate(): ?float
    {
        return $this->{'exchange-rate'};
    }
    /**
     * Set exchange_rate value
     * @param float $exchange_rate
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setExchange_rate(?float $exchange_rate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchange_rate) && !(is_float($exchange_rate) || is_numeric($exchange_rate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchange_rate, true), gettype($exchange_rate)), __LINE__);
        }
        $this->exchange_rate = $this->{'exchange-rate'} = $exchange_rate;
        
        return $this;
    }
    /**
     * Get saving value
     * @return \Pggns\MidocoApi\Order\StructType\Saving[]
     */
    public function getSaving(): ?array
    {
        return $this->saving;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSaving method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSaving method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavingForArrayConstraintFromSetSaving(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flight_priceSavingItem) {
            // validation for constraint: itemType
            if (!$flight_priceSavingItem instanceof \Pggns\MidocoApi\Order\StructType\Saving) {
                $invalidValues[] = is_object($flight_priceSavingItem) ? get_class($flight_priceSavingItem) : sprintf('%s(%s)', gettype($flight_priceSavingItem), var_export($flight_priceSavingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The saving property can only contain items of type \Pggns\MidocoApi\Order\StructType\Saving, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set saving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Saving[] $saving
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setSaving(?array $saving = null): self
    {
        // validation for constraint: array
        if ('' !== ($savingArrayErrorMessage = self::validateSavingForArrayConstraintFromSetSaving($saving))) {
            throw new InvalidArgumentException($savingArrayErrorMessage, __LINE__);
        }
        $this->saving = $saving;
        
        return $this;
    }
    /**
     * Add item to saving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Saving $item
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function addToSaving(\Pggns\MidocoApi\Order\StructType\Saving $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Saving) {
            throw new InvalidArgumentException(sprintf('The saving property can only contain items of type \Pggns\MidocoApi\Order\StructType\Saving, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->saving[] = $item;
        
        return $this;
    }
    /**
     * Get cancellation_fee value
     * @return float|null
     */
    public function getCancellation_fee(): ?float
    {
        return $this->{'cancellation-fee'};
    }
    /**
     * Set cancellation_fee value
     * @param float $cancellation_fee
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setCancellation_fee(?float $cancellation_fee = null): self
    {
        // validation for constraint: float
        if (!is_null($cancellation_fee) && !(is_float($cancellation_fee) || is_numeric($cancellation_fee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancellation_fee, true), gettype($cancellation_fee)), __LINE__);
        }
        $this->cancellation_fee = $this->{'cancellation-fee'} = $cancellation_fee;
        
        return $this;
    }
    /**
     * Get cc_information value
     * @return \Pggns\MidocoApi\Order\StructType\Cc_information|null
     */
    public function getCc_information(): ?\Pggns\MidocoApi\Order\StructType\Cc_information
    {
        return $this->{'cc-information'};
    }
    /**
     * Set cc_information value
     * @param \Pggns\MidocoApi\Order\StructType\Cc_information $cc_information
     * @return \Pggns\MidocoApi\Order\StructType\Flight_price
     */
    public function setCc_information(?\Pggns\MidocoApi\Order\StructType\Cc_information $cc_information = null): self
    {
        $this->cc_information = $this->{'cc-information'} = $cc_information;
        
        return $this;
    }
}
