<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ticket StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Ticket_1 extends AbstractStructBase
{
    /**
     * The BookingPositionRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: BookingPositionRefId
     * @var int
     */
    protected int $BookingPositionRefId;
    /**
     * The TravelerRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: TravelerRefId
     * @var int
     */
    protected int $TravelerRefId;
    /**
     * The TicketPriceRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: TicketPriceRefId
     * @var int
     */
    protected int $TicketPriceRefId;
    /**
     * The TicketCoupon
     * Meta information extracted from the WSDL
     * - choice: TicketCoupon | BookingDetailRefId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TicketCoupon
     * @var \Pggns\MidocoApi\Order\StructType\TicketCoupon[]
     */
    protected ?array $TicketCoupon = null;
    /**
     * The BookingDetailRefId
     * Meta information extracted from the WSDL
     * - choice: TicketCoupon | BookingDetailRefId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BookingDetailRefId
     * @var int[]
     */
    protected ?array $BookingDetailRefId = null;
    /**
     * The CreditCardPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: CreditCardPayment
     * @var \Pggns\MidocoApi\Order\StructType\CreditCardPayment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CreditCardPayment $CreditCardPayment = null;
    /**
     * The ticketId
     * @var int|null
     */
    protected ?int $ticketId = null;
    /**
     * The bspAgency
     * @var string|null
     */
    protected ?string $bspAgency = null;
    /**
     * The bspValidator
     * @var string|null
     */
    protected ?string $bspValidator = null;
    /**
     * The checkDigit
     * @var string|null
     */
    protected ?string $checkDigit = null;
    /**
     * The dateOfIssue
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $dateOfIssue = null;
    /**
     * The ticketSubtypeDescription
     * @var string|null
     */
    protected ?string $ticketSubtypeDescription = null;
    /**
     * The ticketNumber
     * @var string|null
     */
    protected ?string $ticketNumber = null;
    /**
     * The ticketSubtype
     * @var string|null
     */
    protected ?string $ticketSubtype = null;
    /**
     * The ticketType
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The referencedTicketNumber
     * @var string|null
     */
    protected ?string $referencedTicketNumber = null;
    /**
     * The exchangeTicketNumber
     * @var string|null
     */
    protected ?string $exchangeTicketNumber = null;
    /**
     * The isDomestic
     * @var bool|null
     */
    protected ?bool $isDomestic = null;
    /**
     * The ticketPrintType
     * @var string|null
     */
    protected ?string $ticketPrintType = null;
    /**
     * The ticketNumberConj
     * @var string|null
     */
    protected ?string $ticketNumberConj = null;
    /**
     * The ticketTariffType
     * @var string|null
     */
    protected ?string $ticketTariffType = null;
    /**
     * The ticketingAgent
     * @var string|null
     */
    protected ?string $ticketingAgent = null;
    /**
     * The ticketingCity
     * @var string|null
     */
    protected ?string $ticketingCity = null;
    /**
     * The ticketingPcc
     * @var string|null
     */
    protected ?string $ticketingPcc = null;
    /**
     * The travelDate
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The isInkasso
     * @var bool|null
     */
    protected ?bool $isInkasso = null;
    /**
     * The extPaymentType
     * Meta information extracted from the WSDL
     * - documentation: default available values are: CASH,DEBIT,CC,FULL_CREDIT. More can be defined in org. unit attribute CUSTOM_EXTERN_PAYMENT_TYPES
     * @var string|null
     */
    protected ?string $extPaymentType = null;
    /**
     * The emdSubGroup
     * @var string|null
     */
    protected ?string $emdSubGroup = null;
    /**
     * Constructor method for Ticket
     * @uses Ticket_1::setBookingPositionRefId()
     * @uses Ticket_1::setTravelerRefId()
     * @uses Ticket_1::setTicketPriceRefId()
     * @uses Ticket_1::setTicketCoupon()
     * @uses Ticket_1::setBookingDetailRefId()
     * @uses Ticket_1::setCreditCardPayment()
     * @uses Ticket_1::setTicketId()
     * @uses Ticket_1::setBspAgency()
     * @uses Ticket_1::setBspValidator()
     * @uses Ticket_1::setCheckDigit()
     * @uses Ticket_1::setDateOfIssue()
     * @uses Ticket_1::setTicketSubtypeDescription()
     * @uses Ticket_1::setTicketNumber()
     * @uses Ticket_1::setTicketSubtype()
     * @uses Ticket_1::setTicketType()
     * @uses Ticket_1::setReferencedTicketNumber()
     * @uses Ticket_1::setExchangeTicketNumber()
     * @uses Ticket_1::setIsDomestic()
     * @uses Ticket_1::setTicketPrintType()
     * @uses Ticket_1::setTicketNumberConj()
     * @uses Ticket_1::setTicketTariffType()
     * @uses Ticket_1::setTicketingAgent()
     * @uses Ticket_1::setTicketingCity()
     * @uses Ticket_1::setTicketingPcc()
     * @uses Ticket_1::setTravelDate()
     * @uses Ticket_1::setPaymentType()
     * @uses Ticket_1::setIsInkasso()
     * @uses Ticket_1::setExtPaymentType()
     * @uses Ticket_1::setEmdSubGroup()
     * @param int $bookingPositionRefId
     * @param int $travelerRefId
     * @param int $ticketPriceRefId
     * @param \Pggns\MidocoApi\Order\StructType\TicketCoupon[] $ticketCoupon
     * @param int[] $bookingDetailRefId
     * @param \Pggns\MidocoApi\Order\StructType\CreditCardPayment $creditCardPayment
     * @param int $ticketId
     * @param string $bspAgency
     * @param string $bspValidator
     * @param string $checkDigit
     * @param string $dateOfIssue
     * @param string $ticketSubtypeDescription
     * @param string $ticketNumber
     * @param string $ticketSubtype
     * @param string $ticketType
     * @param string $referencedTicketNumber
     * @param string $exchangeTicketNumber
     * @param bool $isDomestic
     * @param string $ticketPrintType
     * @param string $ticketNumberConj
     * @param string $ticketTariffType
     * @param string $ticketingAgent
     * @param string $ticketingCity
     * @param string $ticketingPcc
     * @param string $travelDate
     * @param string $paymentType
     * @param bool $isInkasso
     * @param string $extPaymentType
     * @param string $emdSubGroup
     */
    public function __construct(int $bookingPositionRefId, int $travelerRefId, int $ticketPriceRefId, ?array $ticketCoupon = null, ?array $bookingDetailRefId = null, ?\Pggns\MidocoApi\Order\StructType\CreditCardPayment $creditCardPayment = null, ?int $ticketId = null, ?string $bspAgency = null, ?string $bspValidator = null, ?string $checkDigit = null, ?string $dateOfIssue = null, ?string $ticketSubtypeDescription = null, ?string $ticketNumber = null, ?string $ticketSubtype = null, ?string $ticketType = null, ?string $referencedTicketNumber = null, ?string $exchangeTicketNumber = null, ?bool $isDomestic = null, ?string $ticketPrintType = null, ?string $ticketNumberConj = null, ?string $ticketTariffType = null, ?string $ticketingAgent = null, ?string $ticketingCity = null, ?string $ticketingPcc = null, ?string $travelDate = null, ?string $paymentType = null, ?bool $isInkasso = null, ?string $extPaymentType = null, ?string $emdSubGroup = null)
    {
        $this
            ->setBookingPositionRefId($bookingPositionRefId)
            ->setTravelerRefId($travelerRefId)
            ->setTicketPriceRefId($ticketPriceRefId)
            ->setTicketCoupon($ticketCoupon)
            ->setBookingDetailRefId($bookingDetailRefId)
            ->setCreditCardPayment($creditCardPayment)
            ->setTicketId($ticketId)
            ->setBspAgency($bspAgency)
            ->setBspValidator($bspValidator)
            ->setCheckDigit($checkDigit)
            ->setDateOfIssue($dateOfIssue)
            ->setTicketSubtypeDescription($ticketSubtypeDescription)
            ->setTicketNumber($ticketNumber)
            ->setTicketSubtype($ticketSubtype)
            ->setTicketType($ticketType)
            ->setReferencedTicketNumber($referencedTicketNumber)
            ->setExchangeTicketNumber($exchangeTicketNumber)
            ->setIsDomestic($isDomestic)
            ->setTicketPrintType($ticketPrintType)
            ->setTicketNumberConj($ticketNumberConj)
            ->setTicketTariffType($ticketTariffType)
            ->setTicketingAgent($ticketingAgent)
            ->setTicketingCity($ticketingCity)
            ->setTicketingPcc($ticketingPcc)
            ->setTravelDate($travelDate)
            ->setPaymentType($paymentType)
            ->setIsInkasso($isInkasso)
            ->setExtPaymentType($extPaymentType)
            ->setEmdSubGroup($emdSubGroup);
    }
    /**
     * Get BookingPositionRefId value
     * @return int
     */
    public function getBookingPositionRefId(): int
    {
        return $this->BookingPositionRefId;
    }
    /**
     * Set BookingPositionRefId value
     * @param int $bookingPositionRefId
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setBookingPositionRefId(int $bookingPositionRefId): self
    {
        // validation for constraint: int
        if (!is_null($bookingPositionRefId) && !(is_int($bookingPositionRefId) || ctype_digit($bookingPositionRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPositionRefId, true), gettype($bookingPositionRefId)), __LINE__);
        }
        $this->BookingPositionRefId = $bookingPositionRefId;
        
        return $this;
    }
    /**
     * Get TravelerRefId value
     * @return int
     */
    public function getTravelerRefId(): int
    {
        return $this->TravelerRefId;
    }
    /**
     * Set TravelerRefId value
     * @param int $travelerRefId
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTravelerRefId(int $travelerRefId): self
    {
        // validation for constraint: int
        if (!is_null($travelerRefId) && !(is_int($travelerRefId) || ctype_digit($travelerRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelerRefId, true), gettype($travelerRefId)), __LINE__);
        }
        $this->TravelerRefId = $travelerRefId;
        
        return $this;
    }
    /**
     * Get TicketPriceRefId value
     * @return int
     */
    public function getTicketPriceRefId(): int
    {
        return $this->TicketPriceRefId;
    }
    /**
     * Set TicketPriceRefId value
     * @param int $ticketPriceRefId
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketPriceRefId(int $ticketPriceRefId): self
    {
        // validation for constraint: int
        if (!is_null($ticketPriceRefId) && !(is_int($ticketPriceRefId) || ctype_digit($ticketPriceRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ticketPriceRefId, true), gettype($ticketPriceRefId)), __LINE__);
        }
        $this->TicketPriceRefId = $ticketPriceRefId;
        
        return $this;
    }
    /**
     * Get TicketCoupon value
     * @return \Pggns\MidocoApi\Order\StructType\TicketCoupon[]|null
     */
    public function getTicketCoupon(): ?array
    {
        return $this->TicketCoupon ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTicketCoupon method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketCoupon method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketCouponForArrayConstraintFromSetTicketCoupon(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketTicketCouponItem) {
            // validation for constraint: itemType
            if (!$ticketTicketCouponItem instanceof \Pggns\MidocoApi\Order\StructType\TicketCoupon) {
                $invalidValues[] = is_object($ticketTicketCouponItem) ? get_class($ticketTicketCouponItem) : sprintf('%s(%s)', gettype($ticketTicketCouponItem), var_export($ticketTicketCouponItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketCoupon property can only contain items of type \Pggns\MidocoApi\Order\StructType\TicketCoupon, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTicketCoupon method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketCoupon method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTicketCouponForChoiceConstraintFromSetTicketCoupon($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'BookingDetailRefId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TicketCoupon can\'t be set as the property %s is already set. Only one property must be set among these properties: TicketCoupon, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TicketCoupon value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TicketCoupon[] $ticketCoupon
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketCoupon(?array $ticketCoupon = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketCouponArrayErrorMessage = self::validateTicketCouponForArrayConstraintFromSetTicketCoupon($ticketCoupon))) {
            throw new InvalidArgumentException($ticketCouponArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(TicketCoupon, BookingDetailRefId)
        if ('' !== ($ticketCouponChoiceErrorMessage = self::validateTicketCouponForChoiceConstraintFromSetTicketCoupon($ticketCoupon))) {
            throw new InvalidArgumentException($ticketCouponChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($ticketCoupon) && count($ticketCoupon) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($ticketCoupon)), __LINE__);
        }
        if (is_null($ticketCoupon) || (is_array($ticketCoupon) && empty($ticketCoupon))) {
            unset($this->TicketCoupon);
        } else {
            $this->TicketCoupon = $ticketCoupon;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToTicketCoupon method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToTicketCoupon method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToTicketCoupon($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'BookingDetailRefId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TicketCoupon can\'t be set as the property %s is already set. Only one property must be set among these properties: TicketCoupon, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to TicketCoupon value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TicketCoupon $item
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function addToTicketCoupon(\Pggns\MidocoApi\Order\StructType\TicketCoupon $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TicketCoupon) {
            throw new InvalidArgumentException(sprintf('The TicketCoupon property can only contain items of type \Pggns\MidocoApi\Order\StructType\TicketCoupon, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(TicketCoupon, BookingDetailRefId)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToTicketCoupon($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->TicketCoupon) && count($this->TicketCoupon) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->TicketCoupon)), __LINE__);
        }
        $this->TicketCoupon[] = $item;
        
        return $this;
    }
    /**
     * Get BookingDetailRefId value
     * @return int[]|null
     */
    public function getBookingDetailRefId(): ?array
    {
        return $this->BookingDetailRefId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingDetailRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingDetailRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingDetailRefIdForArrayConstraintFromSetBookingDetailRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketBookingDetailRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($ticketBookingDetailRefIdItem) || ctype_digit($ticketBookingDetailRefIdItem))) {
                $invalidValues[] = is_object($ticketBookingDetailRefIdItem) ? get_class($ticketBookingDetailRefIdItem) : sprintf('%s(%s)', gettype($ticketBookingDetailRefIdItem), var_export($ticketBookingDetailRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingDetailRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingDetailRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingDetailRefId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateBookingDetailRefIdForChoiceConstraintFromSetBookingDetailRefId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TicketCoupon',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BookingDetailRefId can\'t be set as the property %s is already set. Only one property must be set among these properties: BookingDetailRefId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set BookingDetailRefId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param int[] $bookingDetailRefId
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setBookingDetailRefId(?array $bookingDetailRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingDetailRefIdArrayErrorMessage = self::validateBookingDetailRefIdForArrayConstraintFromSetBookingDetailRefId($bookingDetailRefId))) {
            throw new InvalidArgumentException($bookingDetailRefIdArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(TicketCoupon, BookingDetailRefId)
        if ('' !== ($bookingDetailRefIdChoiceErrorMessage = self::validateBookingDetailRefIdForChoiceConstraintFromSetBookingDetailRefId($bookingDetailRefId))) {
            throw new InvalidArgumentException($bookingDetailRefIdChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($bookingDetailRefId) && count($bookingDetailRefId) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($bookingDetailRefId)), __LINE__);
        }
        if (is_null($bookingDetailRefId) || (is_array($bookingDetailRefId) && empty($bookingDetailRefId))) {
            unset($this->BookingDetailRefId);
        } else {
            $this->BookingDetailRefId = $bookingDetailRefId;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToBookingDetailRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToBookingDetailRefId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToBookingDetailRefId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TicketCoupon',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property BookingDetailRefId can\'t be set as the property %s is already set. Only one property must be set among these properties: BookingDetailRefId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to BookingDetailRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function addToBookingDetailRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The BookingDetailRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(TicketCoupon, BookingDetailRefId)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToBookingDetailRefId($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->BookingDetailRefId) && count($this->BookingDetailRefId) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->BookingDetailRefId)), __LINE__);
        }
        $this->BookingDetailRefId[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardPayment value
     * @return \Pggns\MidocoApi\Order\StructType\CreditCardPayment|null
     */
    public function getCreditCardPayment(): ?\Pggns\MidocoApi\Order\StructType\CreditCardPayment
    {
        return $this->CreditCardPayment;
    }
    /**
     * Set CreditCardPayment value
     * @param \Pggns\MidocoApi\Order\StructType\CreditCardPayment $creditCardPayment
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setCreditCardPayment(?\Pggns\MidocoApi\Order\StructType\CreditCardPayment $creditCardPayment = null): self
    {
        $this->CreditCardPayment = $creditCardPayment;
        
        return $this;
    }
    /**
     * Get ticketId value
     * @return int|null
     */
    public function getTicketId(): ?int
    {
        return $this->ticketId;
    }
    /**
     * Set ticketId value
     * @param int $ticketId
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketId(?int $ticketId = null): self
    {
        // validation for constraint: int
        if (!is_null($ticketId) && !(is_int($ticketId) || ctype_digit($ticketId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ticketId, true), gettype($ticketId)), __LINE__);
        }
        $this->ticketId = $ticketId;
        
        return $this;
    }
    /**
     * Get bspAgency value
     * @return string|null
     */
    public function getBspAgency(): ?string
    {
        return $this->bspAgency;
    }
    /**
     * Set bspAgency value
     * @param string $bspAgency
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setBspAgency(?string $bspAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($bspAgency) && !is_string($bspAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspAgency, true), gettype($bspAgency)), __LINE__);
        }
        $this->bspAgency = $bspAgency;
        
        return $this;
    }
    /**
     * Get bspValidator value
     * @return string|null
     */
    public function getBspValidator(): ?string
    {
        return $this->bspValidator;
    }
    /**
     * Set bspValidator value
     * @param string $bspValidator
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setBspValidator(?string $bspValidator = null): self
    {
        // validation for constraint: string
        if (!is_null($bspValidator) && !is_string($bspValidator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspValidator, true), gettype($bspValidator)), __LINE__);
        }
        $this->bspValidator = $bspValidator;
        
        return $this;
    }
    /**
     * Get checkDigit value
     * @return string|null
     */
    public function getCheckDigit(): ?string
    {
        return $this->checkDigit;
    }
    /**
     * Set checkDigit value
     * @param string $checkDigit
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setCheckDigit(?string $checkDigit = null): self
    {
        // validation for constraint: string
        if (!is_null($checkDigit) && !is_string($checkDigit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkDigit, true), gettype($checkDigit)), __LINE__);
        }
        $this->checkDigit = $checkDigit;
        
        return $this;
    }
    /**
     * Get dateOfIssue value
     * @return string|null
     */
    public function getDateOfIssue(): ?string
    {
        return $this->dateOfIssue;
    }
    /**
     * Set dateOfIssue value
     * @param string $dateOfIssue
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setDateOfIssue(?string $dateOfIssue = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfIssue) && !is_string($dateOfIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfIssue, true), gettype($dateOfIssue)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($dateOfIssue) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $dateOfIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($dateOfIssue, true)), __LINE__);
        }
        $this->dateOfIssue = $dateOfIssue;
        
        return $this;
    }
    /**
     * Get ticketSubtypeDescription value
     * @return string|null
     */
    public function getTicketSubtypeDescription(): ?string
    {
        return $this->ticketSubtypeDescription;
    }
    /**
     * Set ticketSubtypeDescription value
     * @param string $ticketSubtypeDescription
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketSubtypeDescription(?string $ticketSubtypeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketSubtypeDescription) && !is_string($ticketSubtypeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketSubtypeDescription, true), gettype($ticketSubtypeDescription)), __LINE__);
        }
        $this->ticketSubtypeDescription = $ticketSubtypeDescription;
        
        return $this;
    }
    /**
     * Get ticketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->ticketNumber;
    }
    /**
     * Set ticketNumber value
     * @param string $ticketNumber
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        $this->ticketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get ticketSubtype value
     * @return string|null
     */
    public function getTicketSubtype(): ?string
    {
        return $this->ticketSubtype;
    }
    /**
     * Set ticketSubtype value
     * @param string $ticketSubtype
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketSubtype(?string $ticketSubtype = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketSubtype) && !is_string($ticketSubtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketSubtype, true), gettype($ticketSubtype)), __LINE__);
        }
        $this->ticketSubtype = $ticketSubtype;
        
        return $this;
    }
    /**
     * Get ticketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }
    /**
     * Set ticketType value
     * @uses \Pggns\MidocoApi\Order\EnumType\TicketType_1::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\TicketType_1::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticketType
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\TicketType_1::valueIsValid($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\TicketType_1', is_array($ticketType) ? implode(', ', $ticketType) : var_export($ticketType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\TicketType_1::getValidValues())), __LINE__);
        }
        $this->ticketType = $ticketType;
        
        return $this;
    }
    /**
     * Get referencedTicketNumber value
     * @return string|null
     */
    public function getReferencedTicketNumber(): ?string
    {
        return $this->referencedTicketNumber;
    }
    /**
     * Set referencedTicketNumber value
     * @param string $referencedTicketNumber
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setReferencedTicketNumber(?string $referencedTicketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($referencedTicketNumber) && !is_string($referencedTicketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencedTicketNumber, true), gettype($referencedTicketNumber)), __LINE__);
        }
        $this->referencedTicketNumber = $referencedTicketNumber;
        
        return $this;
    }
    /**
     * Get exchangeTicketNumber value
     * @return string|null
     */
    public function getExchangeTicketNumber(): ?string
    {
        return $this->exchangeTicketNumber;
    }
    /**
     * Set exchangeTicketNumber value
     * @param string $exchangeTicketNumber
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setExchangeTicketNumber(?string $exchangeTicketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($exchangeTicketNumber) && !is_string($exchangeTicketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exchangeTicketNumber, true), gettype($exchangeTicketNumber)), __LINE__);
        }
        $this->exchangeTicketNumber = $exchangeTicketNumber;
        
        return $this;
    }
    /**
     * Get isDomestic value
     * @return bool|null
     */
    public function getIsDomestic(): ?bool
    {
        return $this->isDomestic;
    }
    /**
     * Set isDomestic value
     * @param bool $isDomestic
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setIsDomestic(?bool $isDomestic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDomestic) && !is_bool($isDomestic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDomestic, true), gettype($isDomestic)), __LINE__);
        }
        $this->isDomestic = $isDomestic;
        
        return $this;
    }
    /**
     * Get ticketPrintType value
     * @return string|null
     */
    public function getTicketPrintType(): ?string
    {
        return $this->ticketPrintType;
    }
    /**
     * Set ticketPrintType value
     * @uses \Pggns\MidocoApi\Order\EnumType\TicketPrintType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\TicketPrintType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticketPrintType
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketPrintType(?string $ticketPrintType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\TicketPrintType::valueIsValid($ticketPrintType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\TicketPrintType', is_array($ticketPrintType) ? implode(', ', $ticketPrintType) : var_export($ticketPrintType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\TicketPrintType::getValidValues())), __LINE__);
        }
        $this->ticketPrintType = $ticketPrintType;
        
        return $this;
    }
    /**
     * Get ticketNumberConj value
     * @return string|null
     */
    public function getTicketNumberConj(): ?string
    {
        return $this->ticketNumberConj;
    }
    /**
     * Set ticketNumberConj value
     * @param string $ticketNumberConj
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketNumberConj(?string $ticketNumberConj = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumberConj) && !is_string($ticketNumberConj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumberConj, true), gettype($ticketNumberConj)), __LINE__);
        }
        $this->ticketNumberConj = $ticketNumberConj;
        
        return $this;
    }
    /**
     * Get ticketTariffType value
     * @return string|null
     */
    public function getTicketTariffType(): ?string
    {
        return $this->ticketTariffType;
    }
    /**
     * Set ticketTariffType value
     * @param string $ticketTariffType
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketTariffType(?string $ticketTariffType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketTariffType) && !is_string($ticketTariffType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketTariffType, true), gettype($ticketTariffType)), __LINE__);
        }
        $this->ticketTariffType = $ticketTariffType;
        
        return $this;
    }
    /**
     * Get ticketingAgent value
     * @return string|null
     */
    public function getTicketingAgent(): ?string
    {
        return $this->ticketingAgent;
    }
    /**
     * Set ticketingAgent value
     * @param string $ticketingAgent
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketingAgent(?string $ticketingAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingAgent) && !is_string($ticketingAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingAgent, true), gettype($ticketingAgent)), __LINE__);
        }
        $this->ticketingAgent = $ticketingAgent;
        
        return $this;
    }
    /**
     * Get ticketingCity value
     * @return string|null
     */
    public function getTicketingCity(): ?string
    {
        return $this->ticketingCity;
    }
    /**
     * Set ticketingCity value
     * @param string $ticketingCity
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketingCity(?string $ticketingCity = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingCity) && !is_string($ticketingCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingCity, true), gettype($ticketingCity)), __LINE__);
        }
        $this->ticketingCity = $ticketingCity;
        
        return $this;
    }
    /**
     * Get ticketingPcc value
     * @return string|null
     */
    public function getTicketingPcc(): ?string
    {
        return $this->ticketingPcc;
    }
    /**
     * Set ticketingPcc value
     * @param string $ticketingPcc
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTicketingPcc(?string $ticketingPcc = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingPcc) && !is_string($ticketingPcc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingPcc, true), gettype($ticketingPcc)), __LINE__);
        }
        $this->ticketingPcc = $ticketingPcc;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($travelDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($travelDate, true)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
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
     * @uses \Pggns\MidocoApi\Order\EnumType\PaymentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\PaymentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\PaymentType::valueIsValid($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\PaymentType', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\PaymentType::getValidValues())), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get isInkasso value
     * @return bool|null
     */
    public function getIsInkasso(): ?bool
    {
        return $this->isInkasso;
    }
    /**
     * Set isInkasso value
     * @param bool $isInkasso
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setIsInkasso(?bool $isInkasso = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInkasso) && !is_bool($isInkasso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInkasso, true), gettype($isInkasso)), __LINE__);
        }
        $this->isInkasso = $isInkasso;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
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
     * Get emdSubGroup value
     * @return string|null
     */
    public function getEmdSubGroup(): ?string
    {
        return $this->emdSubGroup;
    }
    /**
     * Set emdSubGroup value
     * @param string $emdSubGroup
     * @return \Pggns\MidocoApi\Order\StructType\Ticket_1
     */
    public function setEmdSubGroup(?string $emdSubGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($emdSubGroup) && !is_string($emdSubGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emdSubGroup, true), gettype($emdSubGroup)), __LINE__);
        }
        $this->emdSubGroup = $emdSubGroup;
        
        return $this;
    }
}
