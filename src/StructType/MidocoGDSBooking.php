<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGDSBooking StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoGDSBooking extends AbstractStructBase
{
    /**
     * The GDSBookingIdentification
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: GDSBookingIdentification
     * @var \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification
     */
    protected \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification $GDSBookingIdentification;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Customer
     * @var \Pggns\MidocoApi\Order\StructType\Customer_1[]
     */
    protected ?array $Customer = null;
    /**
     * The Traveler
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: Traveler
     * @var \Pggns\MidocoApi\Order\StructType\Traveler[]
     */
    protected ?array $Traveler = null;
    /**
     * The FlightBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: FlightBooking
     * @var \Pggns\MidocoApi\Order\StructType\FlightBooking[]
     */
    protected ?array $FlightBooking = null;
    /**
     * The CarBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Car_service_type[]
     */
    protected ?array $CarBooking = null;
    /**
     * The HotelBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Accomodation_service_type[]
     */
    protected ?array $HotelBooking = null;
    /**
     * The GDSRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GDSRemark
     * @var \Pggns\MidocoApi\Order\StructType\GDSRemark[]
     */
    protected ?array $GDSRemark = null;
    /**
     * The BillingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: BillingInfo
     * @var \Pggns\MidocoApi\Order\StructType\BillingInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingInfo $BillingInfo = null;
    /**
     * The AdditionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\AdditionalServiceType[]
     */
    protected ?array $AdditionalService = null;
    /**
     * The OriginalBookingMessageBase64
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: booking_message:OriginalBookingMessageBase64
     * @var string|null
     */
    protected ?string $OriginalBookingMessageBase64 = null;
    /**
     * The CustomerDefinedField
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Cdf[]
     */
    protected ?array $CustomerDefinedField = null;
    /**
     * Constructor method for MidocoGDSBooking
     * @uses MidocoGDSBooking::setGDSBookingIdentification()
     * @uses MidocoGDSBooking::setCustomer()
     * @uses MidocoGDSBooking::setTraveler()
     * @uses MidocoGDSBooking::setFlightBooking()
     * @uses MidocoGDSBooking::setCarBooking()
     * @uses MidocoGDSBooking::setHotelBooking()
     * @uses MidocoGDSBooking::setGDSRemark()
     * @uses MidocoGDSBooking::setBillingInfo()
     * @uses MidocoGDSBooking::setAdditionalService()
     * @uses MidocoGDSBooking::setOriginalBookingMessageBase64()
     * @uses MidocoGDSBooking::setCustomerDefinedField()
     * @param \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification $gDSBookingIdentification
     * @param \Pggns\MidocoApi\Order\StructType\Customer_1[] $customer
     * @param \Pggns\MidocoApi\Order\StructType\Traveler[] $traveler
     * @param \Pggns\MidocoApi\Order\StructType\FlightBooking[] $flightBooking
     * @param \Pggns\MidocoApi\Order\StructType\Car_service_type[] $carBooking
     * @param \Pggns\MidocoApi\Order\StructType\Accomodation_service_type[] $hotelBooking
     * @param \Pggns\MidocoApi\Order\StructType\GDSRemark[] $gDSRemark
     * @param \Pggns\MidocoApi\Order\StructType\BillingInfo $billingInfo
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalServiceType[] $additionalService
     * @param string $originalBookingMessageBase64
     * @param \Pggns\MidocoApi\Order\StructType\Cdf[] $customerDefinedField
     */
    public function __construct(\Pggns\MidocoApi\Order\StructType\GDSBookingIdentification $gDSBookingIdentification, ?array $customer = null, ?array $traveler = null, ?array $flightBooking = null, ?array $carBooking = null, ?array $hotelBooking = null, ?array $gDSRemark = null, ?\Pggns\MidocoApi\Order\StructType\BillingInfo $billingInfo = null, ?array $additionalService = null, ?string $originalBookingMessageBase64 = null, ?array $customerDefinedField = null)
    {
        $this
            ->setGDSBookingIdentification($gDSBookingIdentification)
            ->setCustomer($customer)
            ->setTraveler($traveler)
            ->setFlightBooking($flightBooking)
            ->setCarBooking($carBooking)
            ->setHotelBooking($hotelBooking)
            ->setGDSRemark($gDSRemark)
            ->setBillingInfo($billingInfo)
            ->setAdditionalService($additionalService)
            ->setOriginalBookingMessageBase64($originalBookingMessageBase64)
            ->setCustomerDefinedField($customerDefinedField);
    }
    /**
     * Get GDSBookingIdentification value
     * @return \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification
     */
    public function getGDSBookingIdentification(): \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification
    {
        return $this->GDSBookingIdentification;
    }
    /**
     * Set GDSBookingIdentification value
     * @param \Pggns\MidocoApi\Order\StructType\GDSBookingIdentification $gDSBookingIdentification
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setGDSBookingIdentification(\Pggns\MidocoApi\Order\StructType\GDSBookingIdentification $gDSBookingIdentification): self
    {
        $this->GDSBookingIdentification = $gDSBookingIdentification;
        
        return $this;
    }
    /**
     * Get Customer value
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1[]
     */
    public function getCustomer(): ?array
    {
        return $this->Customer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerForArrayConstraintFromSetCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingCustomerItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingCustomerItem instanceof \Pggns\MidocoApi\Order\StructType\Customer_1) {
                $invalidValues[] = is_object($midocoGDSBookingCustomerItem) ? get_class($midocoGDSBookingCustomerItem) : sprintf('%s(%s)', gettype($midocoGDSBookingCustomerItem), var_export($midocoGDSBookingCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Customer property can only contain items of type \Pggns\MidocoApi\Order\StructType\Customer_1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Customer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Customer_1[] $customer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setCustomer(?array $customer = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerArrayErrorMessage = self::validateCustomerForArrayConstraintFromSetCustomer($customer))) {
            throw new InvalidArgumentException($customerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($customer) && count($customer) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($customer)), __LINE__);
        }
        $this->Customer = $customer;
        
        return $this;
    }
    /**
     * Add item to Customer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Customer_1 $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function addToCustomer(\Pggns\MidocoApi\Order\StructType\Customer_1 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Customer_1) {
            throw new InvalidArgumentException(sprintf('The Customer property can only contain items of type \Pggns\MidocoApi\Order\StructType\Customer_1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Customer) && count($this->Customer) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Customer)), __LINE__);
        }
        $this->Customer[] = $item;
        
        return $this;
    }
    /**
     * Get Traveler value
     * @return \Pggns\MidocoApi\Order\StructType\Traveler[]
     */
    public function getTraveler(): ?array
    {
        return $this->Traveler;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTraveler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraveler method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerForArrayConstraintFromSetTraveler(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingTravelerItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingTravelerItem instanceof \Pggns\MidocoApi\Order\StructType\Traveler) {
                $invalidValues[] = is_object($midocoGDSBookingTravelerItem) ? get_class($midocoGDSBookingTravelerItem) : sprintf('%s(%s)', gettype($midocoGDSBookingTravelerItem), var_export($midocoGDSBookingTravelerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Traveler property can only contain items of type \Pggns\MidocoApi\Order\StructType\Traveler, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Traveler value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Traveler[] $traveler
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setTraveler(?array $traveler = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelerArrayErrorMessage = self::validateTravelerForArrayConstraintFromSetTraveler($traveler))) {
            throw new InvalidArgumentException($travelerArrayErrorMessage, __LINE__);
        }
        $this->Traveler = $traveler;
        
        return $this;
    }
    /**
     * Add item to Traveler value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Traveler $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function addToTraveler(\Pggns\MidocoApi\Order\StructType\Traveler $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Traveler) {
            throw new InvalidArgumentException(sprintf('The Traveler property can only contain items of type \Pggns\MidocoApi\Order\StructType\Traveler, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Traveler[] = $item;
        
        return $this;
    }
    /**
     * Get FlightBooking value
     * @return \Pggns\MidocoApi\Order\StructType\FlightBooking[]
     */
    public function getFlightBooking(): ?array
    {
        return $this->FlightBooking;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFlightBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightBooking method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightBookingForArrayConstraintFromSetFlightBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingFlightBookingItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingFlightBookingItem instanceof \Pggns\MidocoApi\Order\StructType\FlightBooking) {
                $invalidValues[] = is_object($midocoGDSBookingFlightBookingItem) ? get_class($midocoGDSBookingFlightBookingItem) : sprintf('%s(%s)', gettype($midocoGDSBookingFlightBookingItem), var_export($midocoGDSBookingFlightBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightBooking[] $flightBooking
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setFlightBooking(?array $flightBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightBookingArrayErrorMessage = self::validateFlightBookingForArrayConstraintFromSetFlightBooking($flightBooking))) {
            throw new InvalidArgumentException($flightBookingArrayErrorMessage, __LINE__);
        }
        $this->FlightBooking = $flightBooking;
        
        return $this;
    }
    /**
     * Add item to FlightBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightBooking $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function addToFlightBooking(\Pggns\MidocoApi\Order\StructType\FlightBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FlightBooking) {
            throw new InvalidArgumentException(sprintf('The FlightBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FlightBooking[] = $item;
        
        return $this;
    }
    /**
     * Get CarBooking value
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type[]
     */
    public function getCarBooking(): ?array
    {
        return $this->CarBooking;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCarBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarBooking method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarBookingForArrayConstraintFromSetCarBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingCarBookingItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingCarBookingItem instanceof \Pggns\MidocoApi\Order\StructType\Car_service_type) {
                $invalidValues[] = is_object($midocoGDSBookingCarBookingItem) ? get_class($midocoGDSBookingCarBookingItem) : sprintf('%s(%s)', gettype($midocoGDSBookingCarBookingItem), var_export($midocoGDSBookingCarBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CarBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\Car_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CarBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Car_service_type[] $carBooking
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setCarBooking(?array $carBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($carBookingArrayErrorMessage = self::validateCarBookingForArrayConstraintFromSetCarBooking($carBooking))) {
            throw new InvalidArgumentException($carBookingArrayErrorMessage, __LINE__);
        }
        $this->CarBooking = $carBooking;
        
        return $this;
    }
    /**
     * Add item to CarBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Car_service_type $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function addToCarBooking(\Pggns\MidocoApi\Order\StructType\Car_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Car_service_type) {
            throw new InvalidArgumentException(sprintf('The CarBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\Car_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CarBooking[] = $item;
        
        return $this;
    }
    /**
     * Get HotelBooking value
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type[]
     */
    public function getHotelBooking(): ?array
    {
        return $this->HotelBooking;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelBooking method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelBookingForArrayConstraintFromSetHotelBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingHotelBookingItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingHotelBookingItem instanceof \Pggns\MidocoApi\Order\StructType\Accomodation_service_type) {
                $invalidValues[] = is_object($midocoGDSBookingHotelBookingItem) ? get_class($midocoGDSBookingHotelBookingItem) : sprintf('%s(%s)', gettype($midocoGDSBookingHotelBookingItem), var_export($midocoGDSBookingHotelBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\Accomodation_service_type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Accomodation_service_type[] $hotelBooking
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setHotelBooking(?array $hotelBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelBookingArrayErrorMessage = self::validateHotelBookingForArrayConstraintFromSetHotelBooking($hotelBooking))) {
            throw new InvalidArgumentException($hotelBookingArrayErrorMessage, __LINE__);
        }
        $this->HotelBooking = $hotelBooking;
        
        return $this;
    }
    /**
     * Add item to HotelBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Accomodation_service_type $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function addToHotelBooking(\Pggns\MidocoApi\Order\StructType\Accomodation_service_type $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Accomodation_service_type) {
            throw new InvalidArgumentException(sprintf('The HotelBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\Accomodation_service_type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->HotelBooking[] = $item;
        
        return $this;
    }
    /**
     * Get GDSRemark value
     * @return \Pggns\MidocoApi\Order\StructType\GDSRemark[]
     */
    public function getGDSRemark(): ?array
    {
        return $this->GDSRemark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGDSRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGDSRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGDSRemarkForArrayConstraintFromSetGDSRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingGDSRemarkItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingGDSRemarkItem instanceof \Pggns\MidocoApi\Order\StructType\GDSRemark) {
                $invalidValues[] = is_object($midocoGDSBookingGDSRemarkItem) ? get_class($midocoGDSBookingGDSRemarkItem) : sprintf('%s(%s)', gettype($midocoGDSBookingGDSRemarkItem), var_export($midocoGDSBookingGDSRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GDSRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\GDSRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GDSRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GDSRemark[] $gDSRemark
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setGDSRemark(?array $gDSRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($gDSRemarkArrayErrorMessage = self::validateGDSRemarkForArrayConstraintFromSetGDSRemark($gDSRemark))) {
            throw new InvalidArgumentException($gDSRemarkArrayErrorMessage, __LINE__);
        }
        $this->GDSRemark = $gDSRemark;
        
        return $this;
    }
    /**
     * Add item to GDSRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\GDSRemark $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function addToGDSRemark(\Pggns\MidocoApi\Order\StructType\GDSRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\GDSRemark) {
            throw new InvalidArgumentException(sprintf('The GDSRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\GDSRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GDSRemark[] = $item;
        
        return $this;
    }
    /**
     * Get BillingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\BillingInfo|null
     */
    public function getBillingInfo(): ?\Pggns\MidocoApi\Order\StructType\BillingInfo
    {
        return $this->BillingInfo;
    }
    /**
     * Set BillingInfo value
     * @param \Pggns\MidocoApi\Order\StructType\BillingInfo $billingInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setBillingInfo(?\Pggns\MidocoApi\Order\StructType\BillingInfo $billingInfo = null): self
    {
        $this->BillingInfo = $billingInfo;
        
        return $this;
    }
    /**
     * Get AdditionalService value
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalServiceType[]
     */
    public function getAdditionalService(): ?array
    {
        return $this->AdditionalService;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdditionalService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalService method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalServiceForArrayConstraintFromSetAdditionalService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingAdditionalServiceItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingAdditionalServiceItem instanceof \Pggns\MidocoApi\Order\StructType\AdditionalServiceType) {
                $invalidValues[] = is_object($midocoGDSBookingAdditionalServiceItem) ? get_class($midocoGDSBookingAdditionalServiceItem) : sprintf('%s(%s)', gettype($midocoGDSBookingAdditionalServiceItem), var_export($midocoGDSBookingAdditionalServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalService property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalServiceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalServiceType[] $additionalService
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setAdditionalService(?array $additionalService = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalServiceArrayErrorMessage = self::validateAdditionalServiceForArrayConstraintFromSetAdditionalService($additionalService))) {
            throw new InvalidArgumentException($additionalServiceArrayErrorMessage, __LINE__);
        }
        $this->AdditionalService = $additionalService;
        
        return $this;
    }
    /**
     * Add item to AdditionalService value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalServiceType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function addToAdditionalService(\Pggns\MidocoApi\Order\StructType\AdditionalServiceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AdditionalServiceType) {
            throw new InvalidArgumentException(sprintf('The AdditionalService property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalServiceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalService[] = $item;
        
        return $this;
    }
    /**
     * Get OriginalBookingMessageBase64 value
     * @return string|null
     */
    public function getOriginalBookingMessageBase64(): ?string
    {
        return $this->OriginalBookingMessageBase64;
    }
    /**
     * Set OriginalBookingMessageBase64 value
     * @param string $originalBookingMessageBase64
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setOriginalBookingMessageBase64(?string $originalBookingMessageBase64 = null): self
    {
        // validation for constraint: string
        if (!is_null($originalBookingMessageBase64) && !is_string($originalBookingMessageBase64)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBookingMessageBase64, true), gettype($originalBookingMessageBase64)), __LINE__);
        }
        $this->OriginalBookingMessageBase64 = $originalBookingMessageBase64;
        
        return $this;
    }
    /**
     * Get CustomerDefinedField value
     * @return \Pggns\MidocoApi\Order\StructType\Cdf[]
     */
    public function getCustomerDefinedField(): ?array
    {
        return $this->CustomerDefinedField;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomerDefinedField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerDefinedField method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerDefinedFieldForArrayConstraintFromSetCustomerDefinedField(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGDSBookingCustomerDefinedFieldItem) {
            // validation for constraint: itemType
            if (!$midocoGDSBookingCustomerDefinedFieldItem instanceof \Pggns\MidocoApi\Order\StructType\Cdf) {
                $invalidValues[] = is_object($midocoGDSBookingCustomerDefinedFieldItem) ? get_class($midocoGDSBookingCustomerDefinedFieldItem) : sprintf('%s(%s)', gettype($midocoGDSBookingCustomerDefinedFieldItem), var_export($midocoGDSBookingCustomerDefinedFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerDefinedField property can only contain items of type \Pggns\MidocoApi\Order\StructType\Cdf, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CustomerDefinedField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Cdf[] $customerDefinedField
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function setCustomerDefinedField(?array $customerDefinedField = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerDefinedFieldArrayErrorMessage = self::validateCustomerDefinedFieldForArrayConstraintFromSetCustomerDefinedField($customerDefinedField))) {
            throw new InvalidArgumentException($customerDefinedFieldArrayErrorMessage, __LINE__);
        }
        $this->CustomerDefinedField = $customerDefinedField;
        
        return $this;
    }
    /**
     * Add item to CustomerDefinedField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Cdf $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGDSBooking
     */
    public function addToCustomerDefinedField(\Pggns\MidocoApi\Order\StructType\Cdf $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Cdf) {
            throw new InvalidArgumentException(sprintf('The CustomerDefinedField property can only contain items of type \Pggns\MidocoApi\Order\StructType\Cdf, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CustomerDefinedField[] = $item;
        
        return $this;
    }
}
