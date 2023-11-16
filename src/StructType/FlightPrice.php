<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for flightPrice StructType
 * Meta information extracted from the WSDL
 * - documentation: prices for flights, split in tax and fare amount
 * @subpackage Structs
 */
class FlightPrice extends AbstractStructBase
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
     * The ticketDesignator
     * Meta information extracted from the WSDL
     * - documentation: airline code for the airline fulfilling the ticket segments (printed on ticket)
     * @var string|null
     */
    protected ?string $ticketDesignator = null;
    /**
     * The baseFare
     * @var float|null
     */
    protected ?float $baseFare = null;
    /**
     * The fareType
     * @var string|null
     */
    protected ?string $fareType = null;
    /**
     * The totalTax
     * @var float|null
     */
    protected ?float $totalTax = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The commissionPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The commissionAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The wholesalePrice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $wholesalePrice = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * The serviceAssignment
     * Meta information extracted from the WSDL
     * - documentation: reference the segmentNo(s) covered by this pricing
     * @var string|null
     */
    protected ?string $serviceAssignment = null;
    /**
     * The paymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The extPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $extPaymentType = null;
    /**
     * The paymentInformation
     * Meta information extracted from the WSDL
     * - documentation: e.g. rules for storno, ticketing dependencies
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentInformation = null;
    /**
     * The ticketingDate
     * Meta information extracted from the WSDL
     * - documentation: For tickets: the date when the print should occur, not filled for lowFare, charter and bought tickets
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $ticketingDate = null;
    /**
     * The is_domestic
     * Meta information extracted from the WSDL
     * - documentation: indicates that this price is for a domestic ticket and contains vat.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $is_domestic = null;
    /**
     * The vatPrinted
     * Meta information extracted from the WSDL
     * - documentation: set to true when an invoice should not contain vat information for this price (applies for domestic tickets)
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vatPrinted = null;
    /**
     * The vat_percent
     * Meta information extracted from the WSDL
     * - documentation: Percent of VAT which is included in the selling price
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $vat_percent = null;
    /**
     * The feeCalculated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $feeCalculated = null;
    /**
     * The feeAmountIncluded
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $feeAmountIncluded = null;
    /**
     * The feeTaxablePercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $feeTaxablePercent = null;
    /**
     * The feeCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $feeCurrency = null;
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
     * The exchangeRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The saving
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: saving
     * @var \Pggns\MidocoApi\Order\StructType\Saving[]
     */
    protected array $saving = [];
    /**
     * The cancellationFee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $cancellationFee = null;
    /**
     * The ccInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ccInformation
     * @var \Pggns\MidocoApi\Order\StructType\CcInformation|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation = null;
    /**
     * Constructor method for flightPrice
     * @uses FlightPrice::setPosition()
     * @uses FlightPrice::setBooking_position()
     * @uses FlightPrice::setTicketDesignator()
     * @uses FlightPrice::setBaseFare()
     * @uses FlightPrice::setFareType()
     * @uses FlightPrice::setTotalTax()
     * @uses FlightPrice::setTotalPrice()
     * @uses FlightPrice::setCurrency()
     * @uses FlightPrice::setCommissionPercent()
     * @uses FlightPrice::setCommissionAmount()
     * @uses FlightPrice::setWholesalePrice()
     * @uses FlightPrice::setPersonAssignment()
     * @uses FlightPrice::setServiceAssignment()
     * @uses FlightPrice::setPaymentType()
     * @uses FlightPrice::setExtPaymentType()
     * @uses FlightPrice::setPaymentInformation()
     * @uses FlightPrice::setTicketingDate()
     * @uses FlightPrice::setIs_domestic()
     * @uses FlightPrice::setVatPrinted()
     * @uses FlightPrice::setVat_percent()
     * @uses FlightPrice::setFeeCalculated()
     * @uses FlightPrice::setFeeAmountIncluded()
     * @uses FlightPrice::setFeeTaxablePercent()
     * @uses FlightPrice::setFeeCurrency()
     * @uses FlightPrice::setOriginal_price()
     * @uses FlightPrice::setOriginal_currency()
     * @uses FlightPrice::setExchangeRate()
     * @uses FlightPrice::setSaving()
     * @uses FlightPrice::setCancellationFee()
     * @uses FlightPrice::setCcInformation()
     * @param int $position
     * @param int $booking_position
     * @param string $ticketDesignator
     * @param float $baseFare
     * @param string $fareType
     * @param float $totalTax
     * @param float $totalPrice
     * @param string $currency
     * @param float $commissionPercent
     * @param float $commissionAmount
     * @param float $wholesalePrice
     * @param string $personAssignment
     * @param string $serviceAssignment
     * @param string $paymentType
     * @param string $extPaymentType
     * @param string $paymentInformation
     * @param string $ticketingDate
     * @param bool $is_domestic
     * @param bool $vatPrinted
     * @param float $vat_percent
     * @param bool $feeCalculated
     * @param float $feeAmountIncluded
     * @param float $feeTaxablePercent
     * @param string $feeCurrency
     * @param float $original_price
     * @param string $original_currency
     * @param float $exchangeRate
     * @param \Pggns\MidocoApi\Order\StructType\Saving[] $saving
     * @param float $cancellationFee
     * @param \Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation
     */
    public function __construct(int $position, int $booking_position, ?string $ticketDesignator = null, ?float $baseFare = null, ?string $fareType = null, ?float $totalTax = null, ?float $totalPrice = null, ?string $currency = null, ?float $commissionPercent = null, ?float $commissionAmount = null, ?float $wholesalePrice = null, ?string $personAssignment = null, ?string $serviceAssignment = null, ?string $paymentType = null, ?string $extPaymentType = null, ?string $paymentInformation = null, ?string $ticketingDate = null, ?bool $is_domestic = null, ?bool $vatPrinted = false, ?float $vat_percent = null, ?bool $feeCalculated = null, ?float $feeAmountIncluded = null, ?float $feeTaxablePercent = null, ?string $feeCurrency = null, ?float $original_price = null, ?string $original_currency = null, ?float $exchangeRate = null, array $saving = [], ?float $cancellationFee = null, ?\Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation = null)
    {
        $this
            ->setPosition($position)
            ->setBooking_position($booking_position)
            ->setTicketDesignator($ticketDesignator)
            ->setBaseFare($baseFare)
            ->setFareType($fareType)
            ->setTotalTax($totalTax)
            ->setTotalPrice($totalPrice)
            ->setCurrency($currency)
            ->setCommissionPercent($commissionPercent)
            ->setCommissionAmount($commissionAmount)
            ->setWholesalePrice($wholesalePrice)
            ->setPersonAssignment($personAssignment)
            ->setServiceAssignment($serviceAssignment)
            ->setPaymentType($paymentType)
            ->setExtPaymentType($extPaymentType)
            ->setPaymentInformation($paymentInformation)
            ->setTicketingDate($ticketingDate)
            ->setIs_domestic($is_domestic)
            ->setVatPrinted($vatPrinted)
            ->setVat_percent($vat_percent)
            ->setFeeCalculated($feeCalculated)
            ->setFeeAmountIncluded($feeAmountIncluded)
            ->setFeeTaxablePercent($feeTaxablePercent)
            ->setFeeCurrency($feeCurrency)
            ->setOriginal_price($original_price)
            ->setOriginal_currency($original_currency)
            ->setExchangeRate($exchangeRate)
            ->setSaving($saving)
            ->setCancellationFee($cancellationFee)
            ->setCcInformation($ccInformation);
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * Get ticketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }
    /**
     * Set ticketDesignator value
     * @param string $ticketDesignator
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        $this->ticketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Get baseFare value
     * @return float|null
     */
    public function getBaseFare(): ?float
    {
        return $this->baseFare;
    }
    /**
     * Set baseFare value
     * @param float $baseFare
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setBaseFare(?float $baseFare = null): self
    {
        // validation for constraint: float
        if (!is_null($baseFare) && !(is_float($baseFare) || is_numeric($baseFare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseFare, true), gettype($baseFare)), __LINE__);
        }
        $this->baseFare = $baseFare;
        
        return $this;
    }
    /**
     * Get fareType value
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }
    /**
     * Set fareType value
     * @uses \Pggns\MidocoApi\Order\EnumType\FareType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\FareType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fareType
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setFareType(?string $fareType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\FareType::valueIsValid($fareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\FareType', is_array($fareType) ? implode(', ', $fareType) : var_export($fareType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\FareType::getValidValues())), __LINE__);
        }
        $this->fareType = $fareType;
        
        return $this;
    }
    /**
     * Get totalTax value
     * @return float|null
     */
    public function getTotalTax(): ?float
    {
        return $this->totalTax;
    }
    /**
     * Set totalTax value
     * @param float $totalTax
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setTotalTax(?float $totalTax = null): self
    {
        // validation for constraint: float
        if (!is_null($totalTax) && !(is_float($totalTax) || is_numeric($totalTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->totalTax = $totalTax;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get wholesalePrice value
     * @return float|null
     */
    public function getWholesalePrice(): ?float
    {
        return $this->wholesalePrice;
    }
    /**
     * Set wholesalePrice value
     * @param float $wholesalePrice
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setWholesalePrice(?float $wholesalePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($wholesalePrice) && !(is_float($wholesalePrice) || is_numeric($wholesalePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wholesalePrice, true), gettype($wholesalePrice)), __LINE__);
        }
        $this->wholesalePrice = $wholesalePrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * Get serviceAssignment value
     * @return string|null
     */
    public function getServiceAssignment(): ?string
    {
        return $this->serviceAssignment;
    }
    /**
     * Set serviceAssignment value
     * @param string $serviceAssignment
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setServiceAssignment(?string $serviceAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceAssignment) && !is_string($serviceAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceAssignment, true), gettype($serviceAssignment)), __LINE__);
        }
        $this->serviceAssignment = $serviceAssignment;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @uses \Pggns\MidocoApi\Order\EnumType\PaymentType_1::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\PaymentType_1::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\PaymentType_1::valueIsValid($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\PaymentType_1', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\PaymentType_1::getValidValues())), __LINE__);
        }
        $this->paymentType = $paymentType;
        
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
     * @uses \Pggns\MidocoApi\Order\EnumType\ExtPaymentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\ExtPaymentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $extPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setExtPaymentType(?string $extPaymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\ExtPaymentType::valueIsValid($extPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\ExtPaymentType', is_array($extPaymentType) ? implode(', ', $extPaymentType) : var_export($extPaymentType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\ExtPaymentType::getValidValues())), __LINE__);
        }
        $this->extPaymentType = $extPaymentType;
        
        return $this;
    }
    /**
     * Get paymentInformation value
     * @return string|null
     */
    public function getPaymentInformation(): ?string
    {
        return $this->paymentInformation;
    }
    /**
     * Set paymentInformation value
     * @param string $paymentInformation
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setPaymentInformation(?string $paymentInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentInformation) && !is_string($paymentInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentInformation, true), gettype($paymentInformation)), __LINE__);
        }
        $this->paymentInformation = $paymentInformation;
        
        return $this;
    }
    /**
     * Get ticketingDate value
     * @return string|null
     */
    public function getTicketingDate(): ?string
    {
        return $this->ticketingDate;
    }
    /**
     * Set ticketingDate value
     * @param string $ticketingDate
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setTicketingDate(?string $ticketingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingDate) && !is_string($ticketingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingDate, true), gettype($ticketingDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($ticketingDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $ticketingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($ticketingDate, true)), __LINE__);
        }
        $this->ticketingDate = $ticketingDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * Get vatPrinted value
     * @return bool|null
     */
    public function getVatPrinted(): ?bool
    {
        return $this->vatPrinted;
    }
    /**
     * Set vatPrinted value
     * @param bool $vatPrinted
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setVatPrinted(?bool $vatPrinted = false): self
    {
        // validation for constraint: boolean
        if (!is_null($vatPrinted) && !is_bool($vatPrinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatPrinted, true), gettype($vatPrinted)), __LINE__);
        }
        $this->vatPrinted = $vatPrinted;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * Get feeCalculated value
     * @return bool|null
     */
    public function getFeeCalculated(): ?bool
    {
        return $this->feeCalculated;
    }
    /**
     * Set feeCalculated value
     * @param bool $feeCalculated
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setFeeCalculated(?bool $feeCalculated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($feeCalculated) && !is_bool($feeCalculated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($feeCalculated, true), gettype($feeCalculated)), __LINE__);
        }
        $this->feeCalculated = $feeCalculated;
        
        return $this;
    }
    /**
     * Get feeAmountIncluded value
     * @return float|null
     */
    public function getFeeAmountIncluded(): ?float
    {
        return $this->feeAmountIncluded;
    }
    /**
     * Set feeAmountIncluded value
     * @param float $feeAmountIncluded
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setFeeAmountIncluded(?float $feeAmountIncluded = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmountIncluded) && !(is_float($feeAmountIncluded) || is_numeric($feeAmountIncluded))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmountIncluded, true), gettype($feeAmountIncluded)), __LINE__);
        }
        $this->feeAmountIncluded = $feeAmountIncluded;
        
        return $this;
    }
    /**
     * Get feeTaxablePercent value
     * @return float|null
     */
    public function getFeeTaxablePercent(): ?float
    {
        return $this->feeTaxablePercent;
    }
    /**
     * Set feeTaxablePercent value
     * @param float $feeTaxablePercent
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setFeeTaxablePercent(?float $feeTaxablePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($feeTaxablePercent) && !(is_float($feeTaxablePercent) || is_numeric($feeTaxablePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeTaxablePercent, true), gettype($feeTaxablePercent)), __LINE__);
        }
        $this->feeTaxablePercent = $feeTaxablePercent;
        
        return $this;
    }
    /**
     * Get feeCurrency value
     * @return string|null
     */
    public function getFeeCurrency(): ?string
    {
        return $this->feeCurrency;
    }
    /**
     * Set feeCurrency value
     * @param string $feeCurrency
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setFeeCurrency(?string $feeCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCurrency) && !is_string($feeCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCurrency, true), gettype($feeCurrency)), __LINE__);
        }
        $this->feeCurrency = $feeCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Get saving value
     * @return \Pggns\MidocoApi\Order\StructType\Saving[]
     */
    public function getSaving(): array
    {
        return $this->saving;
    }
    /**
     * This method is responsible for validating the values passed to the setSaving method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSaving method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavingForArrayConstraintsFromSetSaving(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightPriceSavingItem) {
            // validation for constraint: itemType
            if (!$flightPriceSavingItem instanceof \Pggns\MidocoApi\Order\StructType\Saving) {
                $invalidValues[] = is_object($flightPriceSavingItem) ? get_class($flightPriceSavingItem) : sprintf('%s(%s)', gettype($flightPriceSavingItem), var_export($flightPriceSavingItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setSaving(array $saving = []): self
    {
        // validation for constraint: array
        if ('' !== ($savingArrayErrorMessage = self::validateSavingForArrayConstraintsFromSetSaving($saving))) {
            throw new InvalidArgumentException($savingArrayErrorMessage, __LINE__);
        }
        $this->saving = $saving;
        
        return $this;
    }
    /**
     * Add item to saving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Saving $item
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
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
     * Get cancellationFee value
     * @return float|null
     */
    public function getCancellationFee(): ?float
    {
        return $this->cancellationFee;
    }
    /**
     * Set cancellationFee value
     * @param float $cancellationFee
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setCancellationFee(?float $cancellationFee = null): self
    {
        // validation for constraint: float
        if (!is_null($cancellationFee) && !(is_float($cancellationFee) || is_numeric($cancellationFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancellationFee, true), gettype($cancellationFee)), __LINE__);
        }
        $this->cancellationFee = $cancellationFee;
        
        return $this;
    }
    /**
     * Get ccInformation value
     * @return \Pggns\MidocoApi\Order\StructType\CcInformation|null
     */
    public function getCcInformation(): ?\Pggns\MidocoApi\Order\StructType\CcInformation
    {
        return $this->ccInformation;
    }
    /**
     * Set ccInformation value
     * @param \Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation
     * @return \Pggns\MidocoApi\Order\StructType\FlightPrice
     */
    public function setCcInformation(?\Pggns\MidocoApi\Order\StructType\CcInformation $ccInformation = null): self
    {
        $this->ccInformation = $ccInformation;
        
        return $this;
    }
}
