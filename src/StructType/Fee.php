<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fee StructType
 * Meta information extracted from the WSDL
 * - documentation: Service fee information, calculated by a delivering system, optional with fixed VAT liability information
 * @subpackage Structs
 */
class Fee extends AbstractStructBase
{
    /**
     * The reference_booking
     * Meta information extracted from the WSDL
     * - documentation: fill with -1 to achieve a fee without connected booking
     * @var int|null
     */
    protected ?int $reference_booking = null;
    /**
     * The reference_price
     * Meta information extracted from the WSDL
     * - documentation: can be provided instead of reference-service to reference a ticket or a booking
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reference_price = null;
    /**
     * The fee_code
     * @var string|null
     */
    protected ?string $fee_code = null;
    /**
     * The fee_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fee_description = null;
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
     * The person_assignment
     * Meta information extracted from the WSDL
     * - documentation: to be implemented - pls. send as workaround a not existing number, e.g. 99 - if you define a valid assignment the person of the last package or single service will be set
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The vat_free_amount
     * Meta information extracted from the WSDL
     * - documentation: standard: use vat-free amount for whole fee amount
     * @var float|null
     */
    protected ?float $vat_free_amount = null;
    /**
     * The taxable_amount
     * Meta information extracted from the WSDL
     * - documentation: fee (or part of the fee) which should be added a vat amount
     * @var float|null
     */
    protected ?float $taxable_amount = null;
    /**
     * The vat_included
     * Meta information extracted from the WSDL
     * - documentation: set to true, when in a taxable amount a vat is already included and should be calculated instead of adding it to the provided value
     * @var bool|null
     */
    protected ?bool $vat_included = null;
    /**
     * The fee_calculation_info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fee_calculation_info = null;
    /**
     * The supplier_id
     * @var string|null
     */
    protected ?string $supplier_id = null;
    /**
     * The booking_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $booking_id = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - default: OK
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The is_agency_fee
     * Meta information extracted from the WSDL
     * - documentation: set to true if the fee should be included i n the Agency Settlement
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $is_agency_fee = null;
    /**
     * The is_visible
     * Meta information extracted from the WSDL
     * - default: true
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $is_visible = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The order_position
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $order_position = null;
    /**
     * The price_ref
     * Meta information extracted from the WSDL
     * - documentation: declaring a price-ref is used to hide the fee in the invoice information by setting a total-price for some services including the fee
     * @var int|null
     */
    protected ?int $price_ref = null;
    /**
     * The referenceBooking
     * Meta information extracted from the WSDL
     * - documentation: fill with -1 to achieve a fee without connected booking
     * @var int|null
     */
    protected ?int $referenceBooking = null;
    /**
     * The referencePrice
     * Meta information extracted from the WSDL
     * - documentation: can be provided instead of referenceService to reference a ticket or a booking
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $referencePrice = null;
    /**
     * The feeCode
     * @var string|null
     */
    protected ?string $feeCode = null;
    /**
     * The feeDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $feeDescription = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The personAssignment
     * Meta information extracted from the WSDL
     * - documentation: to be implemented - pls. send as workaround a not existing number, e.g. 99 - if you define a valid assignment the person of the last package or single service will be set
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The vatFreeAmount
     * Meta information extracted from the WSDL
     * - documentation: standard: use vatFree amount for whole fee amount
     * @var float|null
     */
    protected ?float $vatFreeAmount = null;
    /**
     * The taxableAmount
     * Meta information extracted from the WSDL
     * - documentation: fee (or part of the fee) which should be added a vat amount
     * @var float|null
     */
    protected ?float $taxableAmount = null;
    /**
     * The vatIncluded
     * Meta information extracted from the WSDL
     * - documentation: set to true, when in a taxable amount a vat is already included and should be calculated instead of adding it to the provided value
     * @var bool|null
     */
    protected ?bool $vatIncluded = null;
    /**
     * The feeCalculationInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $feeCalculationInfo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The isAgencyFee
     * Meta information extracted from the WSDL
     * - documentation: set to true if the fee should be included i n the Agency Settlement
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isAgencyFee = null;
    /**
     * The isVisible
     * Meta information extracted from the WSDL
     * - default: true
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isVisible = null;
    /**
     * The orderPosition
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $orderPosition = null;
    /**
     * The priceRef
     * Meta information extracted from the WSDL
     * - documentation: declaring a priceRef is used to hide the fee in the invoice information by setting a totalPrice for some services including the fee
     * @var int|null
     */
    protected ?int $priceRef = null;
    /**
     * Constructor method for fee
     * @uses Fee::setReference_booking()
     * @uses Fee::setReference_price()
     * @uses Fee::setFee_code()
     * @uses Fee::setFee_description()
     * @uses Fee::setTotal_price()
     * @uses Fee::setCurrency()
     * @uses Fee::setPerson_assignment()
     * @uses Fee::setVat_free_amount()
     * @uses Fee::setTaxable_amount()
     * @uses Fee::setVat_included()
     * @uses Fee::setFee_calculation_info()
     * @uses Fee::setSupplier_id()
     * @uses Fee::setBooking_id()
     * @uses Fee::setStatus()
     * @uses Fee::setIs_agency_fee()
     * @uses Fee::setIs_visible()
     * @uses Fee::setPosition()
     * @uses Fee::setOrder_position()
     * @uses Fee::setPrice_ref()
     * @uses Fee::setReferenceBooking()
     * @uses Fee::setReferencePrice()
     * @uses Fee::setFeeCode()
     * @uses Fee::setFeeDescription()
     * @uses Fee::setTotalPrice()
     * @uses Fee::setPersonAssignment()
     * @uses Fee::setVatFreeAmount()
     * @uses Fee::setTaxableAmount()
     * @uses Fee::setVatIncluded()
     * @uses Fee::setFeeCalculationInfo()
     * @uses Fee::setSupplierId()
     * @uses Fee::setBookingId()
     * @uses Fee::setIsAgencyFee()
     * @uses Fee::setIsVisible()
     * @uses Fee::setOrderPosition()
     * @uses Fee::setPriceRef()
     * @param int $reference_booking
     * @param string $reference_price
     * @param string $fee_code
     * @param string $fee_description
     * @param float $total_price
     * @param string $currency
     * @param string $person_assignment
     * @param float $vat_free_amount
     * @param float $taxable_amount
     * @param bool $vat_included
     * @param string $fee_calculation_info
     * @param string $supplier_id
     * @param string $booking_id
     * @param string $status
     * @param bool $is_agency_fee
     * @param bool $is_visible
     * @param int $position
     * @param int $order_position
     * @param int $price_ref
     * @param int $referenceBooking
     * @param string $referencePrice
     * @param string $feeCode
     * @param string $feeDescription
     * @param float $totalPrice
     * @param string $personAssignment
     * @param float $vatFreeAmount
     * @param float $taxableAmount
     * @param bool $vatIncluded
     * @param string $feeCalculationInfo
     * @param string $supplierId
     * @param string $bookingId
     * @param bool $isAgencyFee
     * @param bool $isVisible
     * @param int $orderPosition
     * @param int $priceRef
     */
    public function __construct(?int $reference_booking = null, ?string $reference_price = null, ?string $fee_code = null, ?string $fee_description = null, ?float $total_price = null, ?string $currency = null, ?string $person_assignment = null, ?float $vat_free_amount = null, ?float $taxable_amount = null, ?bool $vat_included = null, ?string $fee_calculation_info = null, ?string $supplier_id = null, ?string $booking_id = null, ?string $status = 'OK', ?bool $is_agency_fee = null, ?bool $is_visible = true, ?int $position = null, ?int $order_position = null, ?int $price_ref = null, ?int $referenceBooking = null, ?string $referencePrice = null, ?string $feeCode = null, ?string $feeDescription = null, ?float $totalPrice = null, ?string $personAssignment = null, ?float $vatFreeAmount = null, ?float $taxableAmount = null, ?bool $vatIncluded = null, ?string $feeCalculationInfo = null, ?string $supplierId = null, ?string $bookingId = null, ?bool $isAgencyFee = null, ?bool $isVisible = true, ?int $orderPosition = null, ?int $priceRef = null)
    {
        $this
            ->setReference_booking($reference_booking)
            ->setReference_price($reference_price)
            ->setFee_code($fee_code)
            ->setFee_description($fee_description)
            ->setTotal_price($total_price)
            ->setCurrency($currency)
            ->setPerson_assignment($person_assignment)
            ->setVat_free_amount($vat_free_amount)
            ->setTaxable_amount($taxable_amount)
            ->setVat_included($vat_included)
            ->setFee_calculation_info($fee_calculation_info)
            ->setSupplier_id($supplier_id)
            ->setBooking_id($booking_id)
            ->setStatus($status)
            ->setIs_agency_fee($is_agency_fee)
            ->setIs_visible($is_visible)
            ->setPosition($position)
            ->setOrder_position($order_position)
            ->setPrice_ref($price_ref)
            ->setReferenceBooking($referenceBooking)
            ->setReferencePrice($referencePrice)
            ->setFeeCode($feeCode)
            ->setFeeDescription($feeDescription)
            ->setTotalPrice($totalPrice)
            ->setPersonAssignment($personAssignment)
            ->setVatFreeAmount($vatFreeAmount)
            ->setTaxableAmount($taxableAmount)
            ->setVatIncluded($vatIncluded)
            ->setFeeCalculationInfo($feeCalculationInfo)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setIsAgencyFee($isAgencyFee)
            ->setIsVisible($isVisible)
            ->setOrderPosition($orderPosition)
            ->setPriceRef($priceRef);
    }
    /**
     * Get reference_booking value
     * @return int|null
     */
    public function getReference_booking(): ?int
    {
        return $this->{'reference-booking'};
    }
    /**
     * Set reference_booking value
     * @param int $reference_booking
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setReference_booking(?int $reference_booking = null): self
    {
        // validation for constraint: int
        if (!is_null($reference_booking) && !(is_int($reference_booking) || ctype_digit($reference_booking))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reference_booking, true), gettype($reference_booking)), __LINE__);
        }
        $this->reference_booking = $this->{'reference-booking'} = $reference_booking;
        
        return $this;
    }
    /**
     * Get reference_price value
     * @return string|null
     */
    public function getReference_price(): ?string
    {
        return $this->{'reference-price'};
    }
    /**
     * Set reference_price value
     * @param string $reference_price
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setReference_price(?string $reference_price = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_price) && !is_string($reference_price)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_price, true), gettype($reference_price)), __LINE__);
        }
        $this->reference_price = $this->{'reference-price'} = $reference_price;
        
        return $this;
    }
    /**
     * Get fee_code value
     * @return string|null
     */
    public function getFee_code(): ?string
    {
        return $this->{'fee-code'};
    }
    /**
     * Set fee_code value
     * @param string $fee_code
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setFee_code(?string $fee_code = null): self
    {
        // validation for constraint: string
        if (!is_null($fee_code) && !is_string($fee_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fee_code, true), gettype($fee_code)), __LINE__);
        }
        $this->fee_code = $this->{'fee-code'} = $fee_code;
        
        return $this;
    }
    /**
     * Get fee_description value
     * @return string|null
     */
    public function getFee_description(): ?string
    {
        return $this->{'fee-description'};
    }
    /**
     * Set fee_description value
     * @param string $fee_description
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setFee_description(?string $fee_description = null): self
    {
        // validation for constraint: string
        if (!is_null($fee_description) && !is_string($fee_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fee_description, true), gettype($fee_description)), __LINE__);
        }
        $this->fee_description = $this->{'fee-description'} = $fee_description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Fee
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
     * @return \Pggns\MidocoApi\Order\StructType\Fee
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
     * @return \Pggns\MidocoApi\Order\StructType\Fee
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
     * Get vat_free_amount value
     * @return float|null
     */
    public function getVat_free_amount(): ?float
    {
        return $this->{'vat-free-amount'};
    }
    /**
     * Set vat_free_amount value
     * @param float $vat_free_amount
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setVat_free_amount(?float $vat_free_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($vat_free_amount) && !(is_float($vat_free_amount) || is_numeric($vat_free_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat_free_amount, true), gettype($vat_free_amount)), __LINE__);
        }
        $this->vat_free_amount = $this->{'vat-free-amount'} = $vat_free_amount;
        
        return $this;
    }
    /**
     * Get taxable_amount value
     * @return float|null
     */
    public function getTaxable_amount(): ?float
    {
        return $this->{'taxable-amount'};
    }
    /**
     * Set taxable_amount value
     * @param float $taxable_amount
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setTaxable_amount(?float $taxable_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($taxable_amount) && !(is_float($taxable_amount) || is_numeric($taxable_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxable_amount, true), gettype($taxable_amount)), __LINE__);
        }
        $this->taxable_amount = $this->{'taxable-amount'} = $taxable_amount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Fee
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
     * Get fee_calculation_info value
     * @return string|null
     */
    public function getFee_calculation_info(): ?string
    {
        return $this->{'fee-calculation-info'};
    }
    /**
     * Set fee_calculation_info value
     * @param string $fee_calculation_info
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setFee_calculation_info(?string $fee_calculation_info = null): self
    {
        // validation for constraint: string
        if (!is_null($fee_calculation_info) && !is_string($fee_calculation_info)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fee_calculation_info, true), gettype($fee_calculation_info)), __LINE__);
        }
        $this->fee_calculation_info = $this->{'fee-calculation-info'} = $fee_calculation_info;
        
        return $this;
    }
    /**
     * Get supplier_id value
     * @return string|null
     */
    public function getSupplier_id(): ?string
    {
        return $this->{'supplier-id'};
    }
    /**
     * Set supplier_id value
     * @param string $supplier_id
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setSupplier_id(?string $supplier_id = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier_id) && !is_string($supplier_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_id, true), gettype($supplier_id)), __LINE__);
        }
        $this->supplier_id = $this->{'supplier-id'} = $supplier_id;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Fee
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
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setStatus(?string $status = 'OK'): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get is_agency_fee value
     * @return bool|null
     */
    public function getIs_agency_fee(): ?bool
    {
        return $this->{'is-agency-fee'};
    }
    /**
     * Set is_agency_fee value
     * @param bool $is_agency_fee
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setIs_agency_fee(?bool $is_agency_fee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($is_agency_fee) && !is_bool($is_agency_fee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_agency_fee, true), gettype($is_agency_fee)), __LINE__);
        }
        $this->is_agency_fee = $this->{'is-agency-fee'} = $is_agency_fee;
        
        return $this;
    }
    /**
     * Get is_visible value
     * @return bool|null
     */
    public function getIs_visible(): ?bool
    {
        return $this->{'is-visible'};
    }
    /**
     * Set is_visible value
     * @param bool $is_visible
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setIs_visible(?bool $is_visible = true): self
    {
        // validation for constraint: boolean
        if (!is_null($is_visible) && !is_bool($is_visible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_visible, true), gettype($is_visible)), __LINE__);
        }
        $this->is_visible = $this->{'is-visible'} = $is_visible;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get order_position value
     * @return int|null
     */
    public function getOrder_position(): ?int
    {
        return $this->{'order-position'};
    }
    /**
     * Set order_position value
     * @param int $order_position
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setOrder_position(?int $order_position = null): self
    {
        // validation for constraint: int
        if (!is_null($order_position) && !(is_int($order_position) || ctype_digit($order_position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order_position, true), gettype($order_position)), __LINE__);
        }
        $this->order_position = $this->{'order-position'} = $order_position;
        
        return $this;
    }
    /**
     * Get price_ref value
     * @return int|null
     */
    public function getPrice_ref(): ?int
    {
        return $this->{'price-ref'};
    }
    /**
     * Set price_ref value
     * @param int $price_ref
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setPrice_ref(?int $price_ref = null): self
    {
        // validation for constraint: int
        if (!is_null($price_ref) && !(is_int($price_ref) || ctype_digit($price_ref))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($price_ref, true), gettype($price_ref)), __LINE__);
        }
        $this->price_ref = $this->{'price-ref'} = $price_ref;
        
        return $this;
    }
    /**
     * Get referenceBooking value
     * @return int|null
     */
    public function getReferenceBooking(): ?int
    {
        return $this->referenceBooking;
    }
    /**
     * Set referenceBooking value
     * @param int $referenceBooking
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setReferenceBooking(?int $referenceBooking = null): self
    {
        // validation for constraint: int
        if (!is_null($referenceBooking) && !(is_int($referenceBooking) || ctype_digit($referenceBooking))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referenceBooking, true), gettype($referenceBooking)), __LINE__);
        }
        $this->referenceBooking = $referenceBooking;
        
        return $this;
    }
    /**
     * Get referencePrice value
     * @return string|null
     */
    public function getReferencePrice(): ?string
    {
        return $this->referencePrice;
    }
    /**
     * Set referencePrice value
     * @param string $referencePrice
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setReferencePrice(?string $referencePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($referencePrice) && !is_string($referencePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencePrice, true), gettype($referencePrice)), __LINE__);
        }
        $this->referencePrice = $referencePrice;
        
        return $this;
    }
    /**
     * Get feeCode value
     * @return string|null
     */
    public function getFeeCode(): ?string
    {
        return $this->feeCode;
    }
    /**
     * Set feeCode value
     * @param string $feeCode
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setFeeCode(?string $feeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCode, true), gettype($feeCode)), __LINE__);
        }
        $this->feeCode = $feeCode;
        
        return $this;
    }
    /**
     * Get feeDescription value
     * @return string|null
     */
    public function getFeeDescription(): ?string
    {
        return $this->feeDescription;
    }
    /**
     * Set feeDescription value
     * @param string $feeDescription
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setFeeDescription(?string $feeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($feeDescription) && !is_string($feeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeDescription, true), gettype($feeDescription)), __LINE__);
        }
        $this->feeDescription = $feeDescription;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get personAssignment value
     * @return string|null
     */
    public function getPersonAssignment(): ?string
    {
        return $this->personAssignment;
    }
    /**
     * Set personAssignment value
     * @param string $personAssignment
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setPersonAssignment(?string $personAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($personAssignment) && !is_string($personAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personAssignment, true), gettype($personAssignment)), __LINE__);
        }
        $this->personAssignment = $personAssignment;
        
        return $this;
    }
    /**
     * Get vatFreeAmount value
     * @return float|null
     */
    public function getVatFreeAmount(): ?float
    {
        return $this->vatFreeAmount;
    }
    /**
     * Set vatFreeAmount value
     * @param float $vatFreeAmount
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setVatFreeAmount(?float $vatFreeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatFreeAmount) && !(is_float($vatFreeAmount) || is_numeric($vatFreeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatFreeAmount, true), gettype($vatFreeAmount)), __LINE__);
        }
        $this->vatFreeAmount = $vatFreeAmount;
        
        return $this;
    }
    /**
     * Get taxableAmount value
     * @return float|null
     */
    public function getTaxableAmount(): ?float
    {
        return $this->taxableAmount;
    }
    /**
     * Set taxableAmount value
     * @param float $taxableAmount
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setTaxableAmount(?float $taxableAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($taxableAmount) && !(is_float($taxableAmount) || is_numeric($taxableAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxableAmount, true), gettype($taxableAmount)), __LINE__);
        }
        $this->taxableAmount = $taxableAmount;
        
        return $this;
    }
    /**
     * Get vatIncluded value
     * @return bool|null
     */
    public function getVatIncluded(): ?bool
    {
        return $this->vatIncluded;
    }
    /**
     * Set vatIncluded value
     * @param bool $vatIncluded
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setVatIncluded(?bool $vatIncluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIncluded) && !is_bool($vatIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->vatIncluded = $vatIncluded;
        
        return $this;
    }
    /**
     * Get feeCalculationInfo value
     * @return string|null
     */
    public function getFeeCalculationInfo(): ?string
    {
        return $this->feeCalculationInfo;
    }
    /**
     * Set feeCalculationInfo value
     * @param string $feeCalculationInfo
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setFeeCalculationInfo(?string $feeCalculationInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCalculationInfo) && !is_string($feeCalculationInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCalculationInfo, true), gettype($feeCalculationInfo)), __LINE__);
        }
        $this->feeCalculationInfo = $feeCalculationInfo;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Fee
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
    /**
     * Get isAgencyFee value
     * @return bool|null
     */
    public function getIsAgencyFee(): ?bool
    {
        return $this->isAgencyFee;
    }
    /**
     * Set isAgencyFee value
     * @param bool $isAgencyFee
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setIsAgencyFee(?bool $isAgencyFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAgencyFee) && !is_bool($isAgencyFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAgencyFee, true), gettype($isAgencyFee)), __LINE__);
        }
        $this->isAgencyFee = $isAgencyFee;
        
        return $this;
    }
    /**
     * Get isVisible value
     * @return bool|null
     */
    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }
    /**
     * Set isVisible value
     * @param bool $isVisible
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setIsVisible(?bool $isVisible = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisible) && !is_bool($isVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisible, true), gettype($isVisible)), __LINE__);
        }
        $this->isVisible = $isVisible;
        
        return $this;
    }
    /**
     * Get orderPosition value
     * @return int|null
     */
    public function getOrderPosition(): ?int
    {
        return $this->orderPosition;
    }
    /**
     * Set orderPosition value
     * @param int $orderPosition
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setOrderPosition(?int $orderPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($orderPosition) && !(is_int($orderPosition) || ctype_digit($orderPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderPosition, true), gettype($orderPosition)), __LINE__);
        }
        $this->orderPosition = $orderPosition;
        
        return $this;
    }
    /**
     * Get priceRef value
     * @return int|null
     */
    public function getPriceRef(): ?int
    {
        return $this->priceRef;
    }
    /**
     * Set priceRef value
     * @param int $priceRef
     * @return \Pggns\MidocoApi\Order\StructType\Fee
     */
    public function setPriceRef(?int $priceRef = null): self
    {
        // validation for constraint: int
        if (!is_null($priceRef) && !(is_int($priceRef) || ctype_digit($priceRef))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priceRef, true), gettype($priceRef)), __LINE__);
        }
        $this->priceRef = $priceRef;
        
        return $this;
    }
}
