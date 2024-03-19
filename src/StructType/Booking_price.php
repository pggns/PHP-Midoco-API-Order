<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for booking-price StructType
 * Meta information extracted from the WSDL
 * - documentation: a price in this section is subject of reference in all price-ref attributes of services and other price-information
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Booking_price extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The supplier
     * Meta information extracted from the WSDL
     * - documentation: internal supplier id for this booking. Should match the pre-defined supplier-Id in order master data
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The catalog
     * Meta information extracted from the WSDL
     * - documentation: optional catalog/traveltype field to differ multiple types of bookings for same supplier Id
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catalog = null;
    /**
     * The booking_id
     * Meta information extracted from the WSDL
     * - documentation: ID of booking this is used to identify the booking for this supplier
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $booking_id = null;
    /**
     * The deposit
     * Meta information extracted from the WSDL
     * - documentation: pre-calculated deposit amount
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The deposit_payment_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $deposit_payment_type = null;
    /**
     * The total_price
     * Meta information extracted from the WSDL
     * - documentation: for non-package prices: the selling price incl. commission. For packages: the purchase price (without marge)
     * @var float|null
     */
    protected ?float $total_price = null;
    /**
     * The hide_service_prices
     * Meta information extracted from the WSDL
     * - documentation: Setting this to true will suppress the display of any service price on a document for the customer
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $hide_service_prices = null;
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
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The vat_included
     * Meta information extracted from the WSDL
     * - documentation: set to true when an invoice should contain vat information for this price (when it is not already printed on the ticket for a domestic flight)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vat_included = null;
    /**
     * The sale_price
     * Meta information extracted from the WSDL
     * - documentation: only for package services, the price which the customer has to pay
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $sale_price = null;
    /**
     * The original_price
     * Meta information extracted from the WSDL
     * - documentation: Sets the sell item's foreign currency price from a creditor. The original_currency is mandatory.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $original_price = null;
    /**
     * The original_currency
     * Meta information extracted from the WSDL
     * - documentation: The sell item's foreign currency from a creditor.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $original_currency = null;
    /**
     * The customer_selling_price
     * Meta information extracted from the WSDL
     * - documentation: Sets the foreign currency customer selling price of a sell item. This element price has priority and could overwrite base-total-price. Only available for non-package-child sellitems. The element displayed-currency with foreign
     * currency for order is mandatory. Order-Adapter-Settings: FX_CALC_CUSTOMER_SELLING_PRICE_EDITABLE = Y required
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $customer_selling_price = null;
    /**
     * The revenue_amount
     * Meta information extracted from the WSDL
     * - documentation: previously calculated revenue of this booking (commission or marge for netto prices)
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $revenue_amount = null;
    /**
     * The reduced_vat_fraction
     * Meta information extracted from the WSDL
     * - documentation: included amount for catering
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $reduced_vat_fraction = null;
    /**
     * The deposit_date
     * Meta information extracted from the WSDL
     * - documentation: due date of the deposit amount
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $deposit_date = null;
    /**
     * The final_payment_date
     * Meta information extracted from the WSDL
     * - documentation: date of final payment
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $final_payment_date = null;
    /**
     * The supplier_deposit_amount
     * Meta information extracted from the WSDL
     * - documentation: supplier deposit amount
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $supplier_deposit_amount = null;
    /**
     * The supplier_deposit_date
     * Meta information extracted from the WSDL
     * - documentation: supplier deposit date
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $supplier_deposit_date = null;
    /**
     * The supplier_final_payment_date
     * Meta information extracted from the WSDL
     * - documentation: supplier final payment date
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $supplier_final_payment_date = null;
    /**
     * The supplier_commission_amount
     * Meta information extracted from the WSDL
     * - documentation: supplier commission amount
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $supplier_commission_amount = null;
    /**
     * The vat_division
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Vat_division[]
     */
    protected ?array $vat_division = null;
    /**
     * The commission_value
     * Meta information extracted from the WSDL
     * - documentation: the commission for the agency
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commission_value = null;
    /**
     * The commission_percent
     * Meta information extracted from the WSDL
     * - documentation: the commission percent for the agency
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commission_percent = null;
    /**
     * The commission_currency
     * Meta information extracted from the WSDL
     * - documentation: the commission currency - use only for foreign currency agency settlement
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $commission_currency = null;
    /**
     * The mode_revenue_calculation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mode_revenue_calculation = null;
    /**
     * The value_revenue_calculation
     * Meta information extracted from the WSDL
     * - documentation: value of revenue calculation
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $value_revenue_calculation = null;
    /**
     * The buy_currency_rate
     * Meta information extracted from the WSDL
     * - documentation: buy currency rate
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $buy_currency_rate = null;
    /**
     * The fee_amount
     * Meta information extracted from the WSDL
     * - documentation: Fee amount/ Mark Up
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $fee_amount = null;
    /**
     * The calculated_mediator_amount
     * Meta information extracted from the WSDL
     * - documentation: The mediator commission amount
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $calculated_mediator_amount = null;
    /**
     * The mediator_commission_percent
     * Meta information extracted from the WSDL
     * - documentation: The mediator commission amount
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $mediator_commission_percent = null;
    /**
     * The mediator_commission_currency
     * Meta information extracted from the WSDL
     * - documentation: The mediator commission currency - use only for foreign currency mediator settlement
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mediator_commission_currency = null;
    /**
     * Constructor method for booking-price
     * @uses Booking_price::setPosition()
     * @uses Booking_price::setSupplier()
     * @uses Booking_price::setCatalog()
     * @uses Booking_price::setBooking_id()
     * @uses Booking_price::setDeposit()
     * @uses Booking_price::setDeposit_payment_type()
     * @uses Booking_price::setTotal_price()
     * @uses Booking_price::setHide_service_prices()
     * @uses Booking_price::setPayment_type()
     * @uses Booking_price::setExtPaymentType()
     * @uses Booking_price::setCurrency()
     * @uses Booking_price::setVat_included()
     * @uses Booking_price::setSale_price()
     * @uses Booking_price::setOriginal_price()
     * @uses Booking_price::setOriginal_currency()
     * @uses Booking_price::setCustomer_selling_price()
     * @uses Booking_price::setRevenue_amount()
     * @uses Booking_price::setReduced_vat_fraction()
     * @uses Booking_price::setDeposit_date()
     * @uses Booking_price::setFinal_payment_date()
     * @uses Booking_price::setSupplier_deposit_amount()
     * @uses Booking_price::setSupplier_deposit_date()
     * @uses Booking_price::setSupplier_final_payment_date()
     * @uses Booking_price::setSupplier_commission_amount()
     * @uses Booking_price::setVat_division()
     * @uses Booking_price::setCommission_value()
     * @uses Booking_price::setCommission_percent()
     * @uses Booking_price::setCommission_currency()
     * @uses Booking_price::setMode_revenue_calculation()
     * @uses Booking_price::setValue_revenue_calculation()
     * @uses Booking_price::setBuy_currency_rate()
     * @uses Booking_price::setFee_amount()
     * @uses Booking_price::setCalculated_mediator_amount()
     * @uses Booking_price::setMediator_commission_percent()
     * @uses Booking_price::setMediator_commission_currency()
     * @param int $position
     * @param string $supplier
     * @param string $catalog
     * @param string $booking_id
     * @param float $deposit
     * @param string $deposit_payment_type
     * @param float $total_price
     * @param bool $hide_service_prices
     * @param string $payment_type
     * @param string $extPaymentType
     * @param string $currency
     * @param bool $vat_included
     * @param float $sale_price
     * @param float $original_price
     * @param string $original_currency
     * @param float $customer_selling_price
     * @param float $revenue_amount
     * @param float $reduced_vat_fraction
     * @param string $deposit_date
     * @param string $final_payment_date
     * @param float $supplier_deposit_amount
     * @param string $supplier_deposit_date
     * @param string $supplier_final_payment_date
     * @param float $supplier_commission_amount
     * @param \Pggns\MidocoApi\Order\StructType\Vat_division[] $vat_division
     * @param float $commission_value
     * @param float $commission_percent
     * @param string $commission_currency
     * @param string $mode_revenue_calculation
     * @param float $value_revenue_calculation
     * @param float $buy_currency_rate
     * @param float $fee_amount
     * @param float $calculated_mediator_amount
     * @param float $mediator_commission_percent
     * @param string $mediator_commission_currency
     */
    public function __construct(int $position, ?string $supplier = null, ?string $catalog = null, ?string $booking_id = null, ?float $deposit = null, ?string $deposit_payment_type = null, ?float $total_price = null, ?bool $hide_service_prices = false, ?string $payment_type = null, ?string $extPaymentType = null, ?string $currency = null, ?bool $vat_included = null, ?float $sale_price = null, ?float $original_price = null, ?string $original_currency = null, ?float $customer_selling_price = null, ?float $revenue_amount = null, ?float $reduced_vat_fraction = null, ?string $deposit_date = null, ?string $final_payment_date = null, ?float $supplier_deposit_amount = null, ?string $supplier_deposit_date = null, ?string $supplier_final_payment_date = null, ?float $supplier_commission_amount = null, ?array $vat_division = null, ?float $commission_value = null, ?float $commission_percent = null, ?string $commission_currency = null, ?string $mode_revenue_calculation = null, ?float $value_revenue_calculation = null, ?float $buy_currency_rate = null, ?float $fee_amount = null, ?float $calculated_mediator_amount = null, ?float $mediator_commission_percent = null, ?string $mediator_commission_currency = null)
    {
        $this
            ->setPosition($position)
            ->setSupplier($supplier)
            ->setCatalog($catalog)
            ->setBooking_id($booking_id)
            ->setDeposit($deposit)
            ->setDeposit_payment_type($deposit_payment_type)
            ->setTotal_price($total_price)
            ->setHide_service_prices($hide_service_prices)
            ->setPayment_type($payment_type)
            ->setExtPaymentType($extPaymentType)
            ->setCurrency($currency)
            ->setVat_included($vat_included)
            ->setSale_price($sale_price)
            ->setOriginal_price($original_price)
            ->setOriginal_currency($original_currency)
            ->setCustomer_selling_price($customer_selling_price)
            ->setRevenue_amount($revenue_amount)
            ->setReduced_vat_fraction($reduced_vat_fraction)
            ->setDeposit_date($deposit_date)
            ->setFinal_payment_date($final_payment_date)
            ->setSupplier_deposit_amount($supplier_deposit_amount)
            ->setSupplier_deposit_date($supplier_deposit_date)
            ->setSupplier_final_payment_date($supplier_final_payment_date)
            ->setSupplier_commission_amount($supplier_commission_amount)
            ->setVat_division($vat_division)
            ->setCommission_value($commission_value)
            ->setCommission_percent($commission_percent)
            ->setCommission_currency($commission_currency)
            ->setMode_revenue_calculation($mode_revenue_calculation)
            ->setValue_revenue_calculation($value_revenue_calculation)
            ->setBuy_currency_rate($buy_currency_rate)
            ->setFee_amount($fee_amount)
            ->setCalculated_mediator_amount($calculated_mediator_amount)
            ->setMediator_commission_percent($mediator_commission_percent)
            ->setMediator_commission_currency($mediator_commission_currency);
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
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
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
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
        return $this;
    }
    /**
     * Get catalog value
     * @return string|null
     */
    public function getCatalog(): ?string
    {
        return $this->catalog;
    }
    /**
     * Set catalog value
     * @param string $catalog
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setCatalog(?string $catalog = null): self
    {
        // validation for constraint: string
        if (!is_null($catalog) && !is_string($catalog)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catalog, true), gettype($catalog)), __LINE__);
        }
        $this->catalog = $catalog;
        
        return $this;
    }
    /**
     * Get booking_id value
     * @return string|null
     */
    public function getBooking_id(): ?string
    {
        return $this->{'booking-id'};
    }
    /**
     * Set booking_id value
     * @param string $booking_id
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setBooking_id(?string $booking_id = null): self
    {
        // validation for constraint: string
        if (!is_null($booking_id) && !is_string($booking_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_id, true), gettype($booking_id)), __LINE__);
        }
        $this->booking_id = $this->{'booking-id'} = $booking_id;
        
        return $this;
    }
    /**
     * Get deposit value
     * @return float|null
     */
    public function getDeposit(): ?float
    {
        return $this->deposit;
    }
    /**
     * Set deposit value
     * @param float $deposit
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setDeposit(?float $deposit = null): self
    {
        // validation for constraint: float
        if (!is_null($deposit) && !(is_float($deposit) || is_numeric($deposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deposit, true), gettype($deposit)), __LINE__);
        }
        $this->deposit = $deposit;
        
        return $this;
    }
    /**
     * Get deposit_payment_type value
     * @return string|null
     */
    public function getDeposit_payment_type(): ?string
    {
        return $this->{'deposit-payment-type'};
    }
    /**
     * Set deposit_payment_type value
     * @uses \Pggns\MidocoApi\Order\EnumType\Deposit_payment_type::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Deposit_payment_type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deposit_payment_type
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setDeposit_payment_type(?string $deposit_payment_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Deposit_payment_type::valueIsValid($deposit_payment_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Deposit_payment_type', is_array($deposit_payment_type) ? implode(', ', $deposit_payment_type) : var_export($deposit_payment_type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Deposit_payment_type::getValidValues())), __LINE__);
        }
        $this->deposit_payment_type = $this->{'deposit-payment-type'} = $deposit_payment_type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
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
     * Get hide_service_prices value
     * @return bool|null
     */
    public function getHide_service_prices(): ?bool
    {
        return $this->{'hide-service-prices'};
    }
    /**
     * Set hide_service_prices value
     * @param bool $hide_service_prices
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setHide_service_prices(?bool $hide_service_prices = false): self
    {
        // validation for constraint: boolean
        if (!is_null($hide_service_prices) && !is_bool($hide_service_prices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hide_service_prices, true), gettype($hide_service_prices)), __LINE__);
        }
        $this->hide_service_prices = $this->{'hide-service-prices'} = $hide_service_prices;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
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
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
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
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
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
     * Get vat_included value
     * @return bool|null
     */
    public function getVat_included(): ?bool
    {
        return $this->{'vat-included'};
    }
    /**
     * Set vat_included value
     * @param bool $vat_included
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setVat_included(?bool $vat_included = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vat_included) && !is_bool($vat_included)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vat_included, true), gettype($vat_included)), __LINE__);
        }
        $this->vat_included = $this->{'vat-included'} = $vat_included;
        
        return $this;
    }
    /**
     * Get sale_price value
     * @return float|null
     */
    public function getSale_price(): ?float
    {
        return $this->{'sale-price'};
    }
    /**
     * Set sale_price value
     * @param float $sale_price
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setSale_price(?float $sale_price = null): self
    {
        // validation for constraint: float
        if (!is_null($sale_price) && !(is_float($sale_price) || is_numeric($sale_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sale_price, true), gettype($sale_price)), __LINE__);
        }
        $this->sale_price = $this->{'sale-price'} = $sale_price;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
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
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
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
     * Get customer_selling_price value
     * @return float|null
     */
    public function getCustomer_selling_price(): ?float
    {
        return $this->{'customer-selling-price'};
    }
    /**
     * Set customer_selling_price value
     * @param float $customer_selling_price
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setCustomer_selling_price(?float $customer_selling_price = null): self
    {
        // validation for constraint: float
        if (!is_null($customer_selling_price) && !(is_float($customer_selling_price) || is_numeric($customer_selling_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customer_selling_price, true), gettype($customer_selling_price)), __LINE__);
        }
        $this->customer_selling_price = $this->{'customer-selling-price'} = $customer_selling_price;
        
        return $this;
    }
    /**
     * Get revenue_amount value
     * @return float|null
     */
    public function getRevenue_amount(): ?float
    {
        return $this->revenue_amount;
    }
    /**
     * Set revenue_amount value
     * @param float $revenue_amount
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setRevenue_amount(?float $revenue_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($revenue_amount) && !(is_float($revenue_amount) || is_numeric($revenue_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenue_amount, true), gettype($revenue_amount)), __LINE__);
        }
        $this->revenue_amount = $revenue_amount;
        
        return $this;
    }
    /**
     * Get reduced_vat_fraction value
     * @return float|null
     */
    public function getReduced_vat_fraction(): ?float
    {
        return $this->reduced_vat_fraction;
    }
    /**
     * Set reduced_vat_fraction value
     * @param float $reduced_vat_fraction
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setReduced_vat_fraction(?float $reduced_vat_fraction = null): self
    {
        // validation for constraint: float
        if (!is_null($reduced_vat_fraction) && !(is_float($reduced_vat_fraction) || is_numeric($reduced_vat_fraction))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($reduced_vat_fraction, true), gettype($reduced_vat_fraction)), __LINE__);
        }
        $this->reduced_vat_fraction = $reduced_vat_fraction;
        
        return $this;
    }
    /**
     * Get deposit_date value
     * @return string|null
     */
    public function getDeposit_date(): ?string
    {
        return $this->{'deposit-date'};
    }
    /**
     * Set deposit_date value
     * @param string $deposit_date
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setDeposit_date(?string $deposit_date = null): self
    {
        // validation for constraint: string
        if (!is_null($deposit_date) && !is_string($deposit_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deposit_date, true), gettype($deposit_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($deposit_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $deposit_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($deposit_date, true)), __LINE__);
        }
        $this->deposit_date = $this->{'deposit-date'} = $deposit_date;
        
        return $this;
    }
    /**
     * Get final_payment_date value
     * @return string|null
     */
    public function getFinal_payment_date(): ?string
    {
        return $this->{'final-payment-date'};
    }
    /**
     * Set final_payment_date value
     * @param string $final_payment_date
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setFinal_payment_date(?string $final_payment_date = null): self
    {
        // validation for constraint: string
        if (!is_null($final_payment_date) && !is_string($final_payment_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($final_payment_date, true), gettype($final_payment_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($final_payment_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $final_payment_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($final_payment_date, true)), __LINE__);
        }
        $this->final_payment_date = $this->{'final-payment-date'} = $final_payment_date;
        
        return $this;
    }
    /**
     * Get supplier_deposit_amount value
     * @return float|null
     */
    public function getSupplier_deposit_amount(): ?float
    {
        return $this->supplier_deposit_amount;
    }
    /**
     * Set supplier_deposit_amount value
     * @param float $supplier_deposit_amount
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setSupplier_deposit_amount(?float $supplier_deposit_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplier_deposit_amount) && !(is_float($supplier_deposit_amount) || is_numeric($supplier_deposit_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplier_deposit_amount, true), gettype($supplier_deposit_amount)), __LINE__);
        }
        $this->supplier_deposit_amount = $supplier_deposit_amount;
        
        return $this;
    }
    /**
     * Get supplier_deposit_date value
     * @return string|null
     */
    public function getSupplier_deposit_date(): ?string
    {
        return $this->supplier_deposit_date;
    }
    /**
     * Set supplier_deposit_date value
     * @param string $supplier_deposit_date
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setSupplier_deposit_date(?string $supplier_deposit_date = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier_deposit_date) && !is_string($supplier_deposit_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_deposit_date, true), gettype($supplier_deposit_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($supplier_deposit_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $supplier_deposit_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($supplier_deposit_date, true)), __LINE__);
        }
        $this->supplier_deposit_date = $supplier_deposit_date;
        
        return $this;
    }
    /**
     * Get supplier_final_payment_date value
     * @return string|null
     */
    public function getSupplier_final_payment_date(): ?string
    {
        return $this->supplier_final_payment_date;
    }
    /**
     * Set supplier_final_payment_date value
     * @param string $supplier_final_payment_date
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setSupplier_final_payment_date(?string $supplier_final_payment_date = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier_final_payment_date) && !is_string($supplier_final_payment_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_final_payment_date, true), gettype($supplier_final_payment_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($supplier_final_payment_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $supplier_final_payment_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($supplier_final_payment_date, true)), __LINE__);
        }
        $this->supplier_final_payment_date = $supplier_final_payment_date;
        
        return $this;
    }
    /**
     * Get supplier_commission_amount value
     * @return float|null
     */
    public function getSupplier_commission_amount(): ?float
    {
        return $this->supplier_commission_amount;
    }
    /**
     * Set supplier_commission_amount value
     * @param float $supplier_commission_amount
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setSupplier_commission_amount(?float $supplier_commission_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplier_commission_amount) && !(is_float($supplier_commission_amount) || is_numeric($supplier_commission_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplier_commission_amount, true), gettype($supplier_commission_amount)), __LINE__);
        }
        $this->supplier_commission_amount = $supplier_commission_amount;
        
        return $this;
    }
    /**
     * Get vat_division value
     * @return \Pggns\MidocoApi\Order\StructType\Vat_division[]
     */
    public function getVat_division(): ?array
    {
        return $this->vat_division;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVat_division method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVat_division method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVat_divisionForArrayConstraintFromSetVat_division(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $booking_priceVat_divisionItem) {
            // validation for constraint: itemType
            if (!$booking_priceVat_divisionItem instanceof \Pggns\MidocoApi\Order\StructType\Vat_division) {
                $invalidValues[] = is_object($booking_priceVat_divisionItem) ? get_class($booking_priceVat_divisionItem) : sprintf('%s(%s)', gettype($booking_priceVat_divisionItem), var_export($booking_priceVat_divisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The vat_division property can only contain items of type \Pggns\MidocoApi\Order\StructType\Vat_division, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set vat_division value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Vat_division[] $vat_division
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setVat_division(?array $vat_division = null): self
    {
        // validation for constraint: array
        if ('' !== ($vat_divisionArrayErrorMessage = self::validateVat_divisionForArrayConstraintFromSetVat_division($vat_division))) {
            throw new InvalidArgumentException($vat_divisionArrayErrorMessage, __LINE__);
        }
        $this->vat_division = $vat_division;
        
        return $this;
    }
    /**
     * Add item to vat_division value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Vat_division $item
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function addToVat_division(\Pggns\MidocoApi\Order\StructType\Vat_division $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Vat_division) {
            throw new InvalidArgumentException(sprintf('The vat_division property can only contain items of type \Pggns\MidocoApi\Order\StructType\Vat_division, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->vat_division[] = $item;
        
        return $this;
    }
    /**
     * Get commission_value value
     * @return float|null
     */
    public function getCommission_value(): ?float
    {
        return $this->{'commission-value'};
    }
    /**
     * Set commission_value value
     * @param float $commission_value
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setCommission_value(?float $commission_value = null): self
    {
        // validation for constraint: float
        if (!is_null($commission_value) && !(is_float($commission_value) || is_numeric($commission_value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission_value, true), gettype($commission_value)), __LINE__);
        }
        $this->commission_value = $this->{'commission-value'} = $commission_value;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
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
     * Get commission_currency value
     * @return string|null
     */
    public function getCommission_currency(): ?string
    {
        return $this->{'commission-currency'};
    }
    /**
     * Set commission_currency value
     * @param string $commission_currency
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setCommission_currency(?string $commission_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($commission_currency) && !is_string($commission_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commission_currency, true), gettype($commission_currency)), __LINE__);
        }
        $this->commission_currency = $this->{'commission-currency'} = $commission_currency;
        
        return $this;
    }
    /**
     * Get mode_revenue_calculation value
     * @return string|null
     */
    public function getMode_revenue_calculation(): ?string
    {
        return $this->{'mode-revenue-calculation'};
    }
    /**
     * Set mode_revenue_calculation value
     * @uses \Pggns\MidocoApi\Order\EnumType\Mode_revenue_calculation::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Mode_revenue_calculation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mode_revenue_calculation
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setMode_revenue_calculation(?string $mode_revenue_calculation = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Mode_revenue_calculation::valueIsValid($mode_revenue_calculation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Mode_revenue_calculation', is_array($mode_revenue_calculation) ? implode(', ', $mode_revenue_calculation) : var_export($mode_revenue_calculation, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Mode_revenue_calculation::getValidValues())), __LINE__);
        }
        $this->mode_revenue_calculation = $this->{'mode-revenue-calculation'} = $mode_revenue_calculation;
        
        return $this;
    }
    /**
     * Get value_revenue_calculation value
     * @return float|null
     */
    public function getValue_revenue_calculation(): ?float
    {
        return $this->{'value-revenue-calculation'};
    }
    /**
     * Set value_revenue_calculation value
     * @param float $value_revenue_calculation
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setValue_revenue_calculation(?float $value_revenue_calculation = null): self
    {
        // validation for constraint: float
        if (!is_null($value_revenue_calculation) && !(is_float($value_revenue_calculation) || is_numeric($value_revenue_calculation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value_revenue_calculation, true), gettype($value_revenue_calculation)), __LINE__);
        }
        $this->value_revenue_calculation = $this->{'value-revenue-calculation'} = $value_revenue_calculation;
        
        return $this;
    }
    /**
     * Get buy_currency_rate value
     * @return float|null
     */
    public function getBuy_currency_rate(): ?float
    {
        return $this->{'buy-currency-rate'};
    }
    /**
     * Set buy_currency_rate value
     * @param float $buy_currency_rate
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setBuy_currency_rate(?float $buy_currency_rate = null): self
    {
        // validation for constraint: float
        if (!is_null($buy_currency_rate) && !(is_float($buy_currency_rate) || is_numeric($buy_currency_rate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buy_currency_rate, true), gettype($buy_currency_rate)), __LINE__);
        }
        $this->buy_currency_rate = $this->{'buy-currency-rate'} = $buy_currency_rate;
        
        return $this;
    }
    /**
     * Get fee_amount value
     * @return float|null
     */
    public function getFee_amount(): ?float
    {
        return $this->{'fee-amount'};
    }
    /**
     * Set fee_amount value
     * @param float $fee_amount
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setFee_amount(?float $fee_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($fee_amount) && !(is_float($fee_amount) || is_numeric($fee_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fee_amount, true), gettype($fee_amount)), __LINE__);
        }
        $this->fee_amount = $this->{'fee-amount'} = $fee_amount;
        
        return $this;
    }
    /**
     * Get calculated_mediator_amount value
     * @return float|null
     */
    public function getCalculated_mediator_amount(): ?float
    {
        return $this->{'calculated-mediator-amount'};
    }
    /**
     * Set calculated_mediator_amount value
     * @param float $calculated_mediator_amount
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setCalculated_mediator_amount(?float $calculated_mediator_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($calculated_mediator_amount) && !(is_float($calculated_mediator_amount) || is_numeric($calculated_mediator_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculated_mediator_amount, true), gettype($calculated_mediator_amount)), __LINE__);
        }
        $this->calculated_mediator_amount = $this->{'calculated-mediator-amount'} = $calculated_mediator_amount;
        
        return $this;
    }
    /**
     * Get mediator_commission_percent value
     * @return float|null
     */
    public function getMediator_commission_percent(): ?float
    {
        return $this->{'mediator-commission-percent'};
    }
    /**
     * Set mediator_commission_percent value
     * @param float $mediator_commission_percent
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setMediator_commission_percent(?float $mediator_commission_percent = null): self
    {
        // validation for constraint: float
        if (!is_null($mediator_commission_percent) && !(is_float($mediator_commission_percent) || is_numeric($mediator_commission_percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($mediator_commission_percent, true), gettype($mediator_commission_percent)), __LINE__);
        }
        $this->mediator_commission_percent = $this->{'mediator-commission-percent'} = $mediator_commission_percent;
        
        return $this;
    }
    /**
     * Get mediator_commission_currency value
     * @return string|null
     */
    public function getMediator_commission_currency(): ?string
    {
        return $this->{'mediator-commission-currency'};
    }
    /**
     * Set mediator_commission_currency value
     * @param string $mediator_commission_currency
     * @return \Pggns\MidocoApi\Order\StructType\Booking_price
     */
    public function setMediator_commission_currency(?string $mediator_commission_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($mediator_commission_currency) && !is_string($mediator_commission_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediator_commission_currency, true), gettype($mediator_commission_currency)), __LINE__);
        }
        $this->mediator_commission_currency = $this->{'mediator-commission-currency'} = $mediator_commission_currency;
        
        return $this;
    }
}
