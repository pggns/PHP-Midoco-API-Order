<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightBooking StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FlightBooking extends AbstractStructBase
{
    /**
     * The FlightSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: FlightSegment
     * @var \Pggns\MidocoApi\Order\StructType\FlightSegment[]
     */
    protected ?array $FlightSegment = null;
    /**
     * The Ticket
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: Ticket
     * @var \Pggns\MidocoApi\Order\StructType\Ticket_1[]
     */
    protected ?array $Ticket = null;
    /**
     * The TicketPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TicketPrice
     * @var \Pggns\MidocoApi\Order\StructType\TicketPrice[]
     */
    protected ?array $TicketPrice = null;
    /**
     * The SpecialServiceRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SpecialServiceRequest
     * @var \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1[]
     */
    protected ?array $SpecialServiceRequest = null;
    /**
     * The BaggageAllowance
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BaggageAllowance
     * @var \Pggns\MidocoApi\Order\StructType\BaggageAllowance[]
     */
    protected ?array $BaggageAllowance = null;
    /**
     * The TravelerRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TravelerRefId
     * @var int[]
     */
    protected ?array $TravelerRefId = null;
    /**
     * The TravelerTotalPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TravelerTotalPrice
     * @var \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice[]
     */
    protected ?array $TravelerTotalPrice = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The totalPrice
     * Meta information extracted from the WSDL
     * - documentation: it should be filled only before ticketing
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - documentation: it should be filled only before ticketing
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The sourceSystem
     * @var string|null
     */
    protected ?string $sourceSystem = null;
    /**
     * The sourceExtId
     * @var string|null
     */
    protected ?string $sourceExtId = null;
    /**
     * Constructor method for FlightBooking
     * @uses FlightBooking::setFlightSegment()
     * @uses FlightBooking::setTicket()
     * @uses FlightBooking::setTicketPrice()
     * @uses FlightBooking::setSpecialServiceRequest()
     * @uses FlightBooking::setBaggageAllowance()
     * @uses FlightBooking::setTravelerRefId()
     * @uses FlightBooking::setTravelerTotalPrice()
     * @uses FlightBooking::setBookingPosition()
     * @uses FlightBooking::setSupplierId()
     * @uses FlightBooking::setBookingId()
     * @uses FlightBooking::setBookingDate()
     * @uses FlightBooking::setTotalPrice()
     * @uses FlightBooking::setCurrency()
     * @uses FlightBooking::setExtId()
     * @uses FlightBooking::setSourceSystem()
     * @uses FlightBooking::setSourceExtId()
     * @param \Pggns\MidocoApi\Order\StructType\FlightSegment[] $flightSegment
     * @param \Pggns\MidocoApi\Order\StructType\Ticket_1[] $ticket
     * @param \Pggns\MidocoApi\Order\StructType\TicketPrice[] $ticketPrice
     * @param \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1[] $specialServiceRequest
     * @param \Pggns\MidocoApi\Order\StructType\BaggageAllowance[] $baggageAllowance
     * @param int[] $travelerRefId
     * @param \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice[] $travelerTotalPrice
     * @param int $bookingPosition
     * @param string $supplierId
     * @param string $bookingId
     * @param string $bookingDate
     * @param float $totalPrice
     * @param string $currency
     * @param string $extId
     * @param string $sourceSystem
     * @param string $sourceExtId
     */
    public function __construct(?array $flightSegment = null, ?array $ticket = null, ?array $ticketPrice = null, ?array $specialServiceRequest = null, ?array $baggageAllowance = null, ?array $travelerRefId = null, ?array $travelerTotalPrice = null, ?int $bookingPosition = null, ?string $supplierId = null, ?string $bookingId = null, ?string $bookingDate = null, ?float $totalPrice = null, ?string $currency = null, ?string $extId = null, ?string $sourceSystem = null, ?string $sourceExtId = null)
    {
        $this
            ->setFlightSegment($flightSegment)
            ->setTicket($ticket)
            ->setTicketPrice($ticketPrice)
            ->setSpecialServiceRequest($specialServiceRequest)
            ->setBaggageAllowance($baggageAllowance)
            ->setTravelerRefId($travelerRefId)
            ->setTravelerTotalPrice($travelerTotalPrice)
            ->setBookingPosition($bookingPosition)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setBookingDate($bookingDate)
            ->setTotalPrice($totalPrice)
            ->setCurrency($currency)
            ->setExtId($extId)
            ->setSourceSystem($sourceSystem)
            ->setSourceExtId($sourceExtId);
    }
    /**
     * Get FlightSegment value
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegment[]
     */
    public function getFlightSegment(): ?array
    {
        return $this->FlightSegment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFlightSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightSegmentForArrayConstraintFromSetFlightSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightBookingFlightSegmentItem) {
            // validation for constraint: itemType
            if (!$flightBookingFlightSegmentItem instanceof \Pggns\MidocoApi\Order\StructType\FlightSegment) {
                $invalidValues[] = is_object($flightBookingFlightSegmentItem) ? get_class($flightBookingFlightSegmentItem) : sprintf('%s(%s)', gettype($flightBookingFlightSegmentItem), var_export($flightBookingFlightSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightSegment property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightSegment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightSegment[] $flightSegment
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setFlightSegment(?array $flightSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightSegmentArrayErrorMessage = self::validateFlightSegmentForArrayConstraintFromSetFlightSegment($flightSegment))) {
            throw new InvalidArgumentException($flightSegmentArrayErrorMessage, __LINE__);
        }
        $this->FlightSegment = $flightSegment;
        
        return $this;
    }
    /**
     * Add item to FlightSegment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightSegment $item
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function addToFlightSegment(\Pggns\MidocoApi\Order\StructType\FlightSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FlightSegment) {
            throw new InvalidArgumentException(sprintf('The FlightSegment property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FlightSegment[] = $item;
        
        return $this;
    }
    /**
     * Get Ticket value
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1[]
     */
    public function getTicket(): ?array
    {
        return $this->Ticket;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTicket method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicket method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketForArrayConstraintFromSetTicket(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightBookingTicketItem) {
            // validation for constraint: itemType
            if (!$flightBookingTicketItem instanceof \Pggns\MidocoApi\Order\StructType\Ticket_1) {
                $invalidValues[] = is_object($flightBookingTicketItem) ? get_class($flightBookingTicketItem) : sprintf('%s(%s)', gettype($flightBookingTicketItem), var_export($flightBookingTicketItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Ticket property can only contain items of type \Pggns\MidocoApi\Order\StructType\Ticket_1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Ticket value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Ticket_1[] $ticket
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setTicket(?array $ticket = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketArrayErrorMessage = self::validateTicketForArrayConstraintFromSetTicket($ticket))) {
            throw new InvalidArgumentException($ticketArrayErrorMessage, __LINE__);
        }
        $this->Ticket = $ticket;
        
        return $this;
    }
    /**
     * Add item to Ticket value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Ticket_1 $item
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function addToTicket(\Pggns\MidocoApi\Order\StructType\Ticket_1 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Ticket_1) {
            throw new InvalidArgumentException(sprintf('The Ticket property can only contain items of type \Pggns\MidocoApi\Order\StructType\Ticket_1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Ticket[] = $item;
        
        return $this;
    }
    /**
     * Get TicketPrice value
     * @return \Pggns\MidocoApi\Order\StructType\TicketPrice[]
     */
    public function getTicketPrice(): ?array
    {
        return $this->TicketPrice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTicketPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketPrice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketPriceForArrayConstraintFromSetTicketPrice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightBookingTicketPriceItem) {
            // validation for constraint: itemType
            if (!$flightBookingTicketPriceItem instanceof \Pggns\MidocoApi\Order\StructType\TicketPrice) {
                $invalidValues[] = is_object($flightBookingTicketPriceItem) ? get_class($flightBookingTicketPriceItem) : sprintf('%s(%s)', gettype($flightBookingTicketPriceItem), var_export($flightBookingTicketPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\TicketPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TicketPrice[] $ticketPrice
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setTicketPrice(?array $ticketPrice = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketPriceArrayErrorMessage = self::validateTicketPriceForArrayConstraintFromSetTicketPrice($ticketPrice))) {
            throw new InvalidArgumentException($ticketPriceArrayErrorMessage, __LINE__);
        }
        $this->TicketPrice = $ticketPrice;
        
        return $this;
    }
    /**
     * Add item to TicketPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TicketPrice $item
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function addToTicketPrice(\Pggns\MidocoApi\Order\StructType\TicketPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TicketPrice) {
            throw new InvalidArgumentException(sprintf('The TicketPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\TicketPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TicketPrice[] = $item;
        
        return $this;
    }
    /**
     * Get SpecialServiceRequest value
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1[]
     */
    public function getSpecialServiceRequest(): ?array
    {
        return $this->SpecialServiceRequest;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSpecialServiceRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecialServiceRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecialServiceRequestForArrayConstraintFromSetSpecialServiceRequest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightBookingSpecialServiceRequestItem) {
            // validation for constraint: itemType
            if (!$flightBookingSpecialServiceRequestItem instanceof \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1) {
                $invalidValues[] = is_object($flightBookingSpecialServiceRequestItem) ? get_class($flightBookingSpecialServiceRequestItem) : sprintf('%s(%s)', gettype($flightBookingSpecialServiceRequestItem), var_export($flightBookingSpecialServiceRequestItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SpecialServiceRequest property can only contain items of type \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SpecialServiceRequest value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1[] $specialServiceRequest
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setSpecialServiceRequest(?array $specialServiceRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($specialServiceRequestArrayErrorMessage = self::validateSpecialServiceRequestForArrayConstraintFromSetSpecialServiceRequest($specialServiceRequest))) {
            throw new InvalidArgumentException($specialServiceRequestArrayErrorMessage, __LINE__);
        }
        $this->SpecialServiceRequest = $specialServiceRequest;
        
        return $this;
    }
    /**
     * Add item to SpecialServiceRequest value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1 $item
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function addToSpecialServiceRequest(\Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1) {
            throw new InvalidArgumentException(sprintf('The SpecialServiceRequest property can only contain items of type \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SpecialServiceRequest[] = $item;
        
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowance[]
     */
    public function getBaggageAllowance(): ?array
    {
        return $this->BaggageAllowance;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBaggageAllowance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBaggageAllowance method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBaggageAllowanceForArrayConstraintFromSetBaggageAllowance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightBookingBaggageAllowanceItem) {
            // validation for constraint: itemType
            if (!$flightBookingBaggageAllowanceItem instanceof \Pggns\MidocoApi\Order\StructType\BaggageAllowance) {
                $invalidValues[] = is_object($flightBookingBaggageAllowanceItem) ? get_class($flightBookingBaggageAllowanceItem) : sprintf('%s(%s)', gettype($flightBookingBaggageAllowanceItem), var_export($flightBookingBaggageAllowanceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BaggageAllowance property can only contain items of type \Pggns\MidocoApi\Order\StructType\BaggageAllowance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BaggageAllowance value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BaggageAllowance[] $baggageAllowance
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setBaggageAllowance(?array $baggageAllowance = null): self
    {
        // validation for constraint: array
        if ('' !== ($baggageAllowanceArrayErrorMessage = self::validateBaggageAllowanceForArrayConstraintFromSetBaggageAllowance($baggageAllowance))) {
            throw new InvalidArgumentException($baggageAllowanceArrayErrorMessage, __LINE__);
        }
        $this->BaggageAllowance = $baggageAllowance;
        
        return $this;
    }
    /**
     * Add item to BaggageAllowance value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BaggageAllowance $item
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function addToBaggageAllowance(\Pggns\MidocoApi\Order\StructType\BaggageAllowance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BaggageAllowance) {
            throw new InvalidArgumentException(sprintf('The BaggageAllowance property can only contain items of type \Pggns\MidocoApi\Order\StructType\BaggageAllowance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BaggageAllowance[] = $item;
        
        return $this;
    }
    /**
     * Get TravelerRefId value
     * @return int[]
     */
    public function getTravelerRefId(): ?array
    {
        return $this->TravelerRefId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelerRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelerRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerRefIdForArrayConstraintFromSetTravelerRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightBookingTravelerRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($flightBookingTravelerRefIdItem) || ctype_digit($flightBookingTravelerRefIdItem))) {
                $invalidValues[] = is_object($flightBookingTravelerRefIdItem) ? get_class($flightBookingTravelerRefIdItem) : sprintf('%s(%s)', gettype($flightBookingTravelerRefIdItem), var_export($flightBookingTravelerRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelerRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TravelerRefId value
     * @throws InvalidArgumentException
     * @param int[] $travelerRefId
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setTravelerRefId(?array $travelerRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelerRefIdArrayErrorMessage = self::validateTravelerRefIdForArrayConstraintFromSetTravelerRefId($travelerRefId))) {
            throw new InvalidArgumentException($travelerRefIdArrayErrorMessage, __LINE__);
        }
        $this->TravelerRefId = $travelerRefId;
        
        return $this;
    }
    /**
     * Add item to TravelerRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function addToTravelerRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The TravelerRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TravelerRefId[] = $item;
        
        return $this;
    }
    /**
     * Get TravelerTotalPrice value
     * @return \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice[]
     */
    public function getTravelerTotalPrice(): ?array
    {
        return $this->TravelerTotalPrice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelerTotalPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelerTotalPrice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerTotalPriceForArrayConstraintFromSetTravelerTotalPrice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightBookingTravelerTotalPriceItem) {
            // validation for constraint: itemType
            if (!$flightBookingTravelerTotalPriceItem instanceof \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice) {
                $invalidValues[] = is_object($flightBookingTravelerTotalPriceItem) ? get_class($flightBookingTravelerTotalPriceItem) : sprintf('%s(%s)', gettype($flightBookingTravelerTotalPriceItem), var_export($flightBookingTravelerTotalPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelerTotalPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TravelerTotalPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice[] $travelerTotalPrice
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setTravelerTotalPrice(?array $travelerTotalPrice = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelerTotalPriceArrayErrorMessage = self::validateTravelerTotalPriceForArrayConstraintFromSetTravelerTotalPrice($travelerTotalPrice))) {
            throw new InvalidArgumentException($travelerTotalPriceArrayErrorMessage, __LINE__);
        }
        $this->TravelerTotalPrice = $travelerTotalPrice;
        
        return $this;
    }
    /**
     * Add item to TravelerTotalPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice $item
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function addToTravelerTotalPrice(\Pggns\MidocoApi\Order\StructType\TravelerTotalPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice) {
            throw new InvalidArgumentException(sprintf('The TravelerTotalPrice property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelerTotalPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TravelerTotalPrice[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
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
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($bookingDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($bookingDate, true)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
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
     * Get extId value
     * @return string|null
     */
    public function getExtId(): ?string
    {
        return $this->extId;
    }
    /**
     * Set extId value
     * @param string $extId
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setExtId(?string $extId = null): self
    {
        // validation for constraint: string
        if (!is_null($extId) && !is_string($extId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extId, true), gettype($extId)), __LINE__);
        }
        $this->extId = $extId;
        
        return $this;
    }
    /**
     * Get sourceSystem value
     * @return string|null
     */
    public function getSourceSystem(): ?string
    {
        return $this->sourceSystem;
    }
    /**
     * Set sourceSystem value
     * @param string $sourceSystem
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setSourceSystem(?string $sourceSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceSystem) && !is_string($sourceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceSystem, true), gettype($sourceSystem)), __LINE__);
        }
        $this->sourceSystem = $sourceSystem;
        
        return $this;
    }
    /**
     * Get sourceExtId value
     * @return string|null
     */
    public function getSourceExtId(): ?string
    {
        return $this->sourceExtId;
    }
    /**
     * Set sourceExtId value
     * @param string $sourceExtId
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking
     */
    public function setSourceExtId(?string $sourceExtId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceExtId) && !is_string($sourceExtId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceExtId, true), gettype($sourceExtId)), __LINE__);
        }
        $this->sourceExtId = $sourceExtId;
        
        return $this;
    }
}
