<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for midoco-booking-message StructType
 * Meta information extracted from the WSDL
 * - documentation: optional dunning infos at order level | optional payments at order level | This section contains the payment information which is given by the customer | a message containing information of booked items in a reservation system
 * @subpackage Structs
 */
class Midoco_booking_message extends AbstractStructBase
{
    /**
     * The agency_identity
     * @var \Pggns\MidocoApi\Order\StructType\Agency_identity|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Agency_identity $agency_identity = null;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Customer[]
     */
    protected array $customer = [];
    /**
     * The package_info
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Package_info[]
     */
    protected array $package_info = [];
    /**
     * The booking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Booking[]
     */
    protected array $booking = [];
    /**
     * The prices
     * @var \Pggns\MidocoApi\Order\StructType\Prices|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Prices $prices = null;
    /**
     * The ticket
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Ticket[]
     */
    protected array $ticket = [];
    /**
     * The payment_info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: payment-info
     * @var \Pggns\MidocoApi\Order\StructType\Payment_info|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Payment_info $payment_info = null;
    /**
     * The marketing_info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Marketing_info|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Marketing_info $marketing_info = null;
    /**
     * The internal_treatment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Internal_treatment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Internal_treatment $internal_treatment = null;
    /**
     * The order_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Order_remark[]
     */
    protected array $order_remark = [];
    /**
     * The ExternalPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ExternalPayment
     * @var \Pggns\MidocoApi\Order\StructType\ExternalPayment[]
     */
    protected array $ExternalPayment = [];
    /**
     * The imported_document
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Imported_document[]
     */
    protected array $imported_document = [];
    /**
     * The DunningInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: DunningInfo
     * @var \Pggns\MidocoApi\Order\StructType\DunningInfo[]
     */
    protected array $DunningInfo = [];
    /**
     * The voucher
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Voucher[]
     */
    protected array $voucher = [];
    /**
     * The verk_data
     * Meta information extracted from the WSDL
     * - documentation: VERK Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\VerkDataInfo[]
     */
    protected array $verk_data = [];
    /**
     * The message_version
     * Meta information extracted from the WSDL
     * - default: 1
     * @var int|null
     */
    protected ?int $message_version = null;
    /**
     * Constructor method for midoco-booking-message
     * @uses Midoco_booking_message::setAgency_identity()
     * @uses Midoco_booking_message::setCustomer()
     * @uses Midoco_booking_message::setPackage_info()
     * @uses Midoco_booking_message::setBooking()
     * @uses Midoco_booking_message::setPrices()
     * @uses Midoco_booking_message::setTicket()
     * @uses Midoco_booking_message::setPayment_info()
     * @uses Midoco_booking_message::setMarketing_info()
     * @uses Midoco_booking_message::setInternal_treatment()
     * @uses Midoco_booking_message::setOrder_remark()
     * @uses Midoco_booking_message::setExternalPayment()
     * @uses Midoco_booking_message::setImported_document()
     * @uses Midoco_booking_message::setDunningInfo()
     * @uses Midoco_booking_message::setVoucher()
     * @uses Midoco_booking_message::setVerk_data()
     * @uses Midoco_booking_message::setMessage_version()
     * @param \Pggns\MidocoApi\Order\StructType\Agency_identity $agency_identity
     * @param \Pggns\MidocoApi\Order\StructType\Customer[] $customer
     * @param \Pggns\MidocoApi\Order\StructType\Package_info[] $package_info
     * @param \Pggns\MidocoApi\Order\StructType\Booking[] $booking
     * @param \Pggns\MidocoApi\Order\StructType\Prices $prices
     * @param \Pggns\MidocoApi\Order\StructType\Ticket[] $ticket
     * @param \Pggns\MidocoApi\Order\StructType\Payment_info $payment_info
     * @param \Pggns\MidocoApi\Order\StructType\Marketing_info $marketing_info
     * @param \Pggns\MidocoApi\Order\StructType\Internal_treatment $internal_treatment
     * @param \Pggns\MidocoApi\Order\StructType\Order_remark[] $order_remark
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPayment[] $externalPayment
     * @param \Pggns\MidocoApi\Order\StructType\Imported_document[] $imported_document
     * @param \Pggns\MidocoApi\Order\StructType\DunningInfo[] $dunningInfo
     * @param \Pggns\MidocoApi\Order\StructType\Voucher[] $voucher
     * @param \Pggns\MidocoApi\Order\StructType\VerkDataInfo[] $verk_data
     * @param int $message_version
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\Agency_identity $agency_identity = null, array $customer = [], array $package_info = [], array $booking = [], ?\Pggns\MidocoApi\Order\StructType\Prices $prices = null, array $ticket = [], ?\Pggns\MidocoApi\Order\StructType\Payment_info $payment_info = null, ?\Pggns\MidocoApi\Order\StructType\Marketing_info $marketing_info = null, ?\Pggns\MidocoApi\Order\StructType\Internal_treatment $internal_treatment = null, array $order_remark = [], array $externalPayment = [], array $imported_document = [], array $dunningInfo = [], array $voucher = [], array $verk_data = [], ?int $message_version = 1)
    {
        $this
            ->setAgency_identity($agency_identity)
            ->setCustomer($customer)
            ->setPackage_info($package_info)
            ->setBooking($booking)
            ->setPrices($prices)
            ->setTicket($ticket)
            ->setPayment_info($payment_info)
            ->setMarketing_info($marketing_info)
            ->setInternal_treatment($internal_treatment)
            ->setOrder_remark($order_remark)
            ->setExternalPayment($externalPayment)
            ->setImported_document($imported_document)
            ->setDunningInfo($dunningInfo)
            ->setVoucher($voucher)
            ->setVerk_data($verk_data)
            ->setMessage_version($message_version);
    }
    /**
     * Get agency_identity value
     * @return \Pggns\MidocoApi\Order\StructType\Agency_identity|null
     */
    public function getAgency_identity(): ?\Pggns\MidocoApi\Order\StructType\Agency_identity
    {
        return $this->{'agency-identity'};
    }
    /**
     * Set agency_identity value
     * @param \Pggns\MidocoApi\Order\StructType\Agency_identity $agency_identity
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setAgency_identity(?\Pggns\MidocoApi\Order\StructType\Agency_identity $agency_identity = null): self
    {
        $this->agency_identity = $this->{'agency-identity'} = $agency_identity;
        
        return $this;
    }
    /**
     * Get customer value
     * @return \Pggns\MidocoApi\Order\StructType\Customer[]
     */
    public function getCustomer(): array
    {
        return $this->customer;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerForArrayConstraintsFromSetCustomer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messageCustomerItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messageCustomerItem instanceof \Pggns\MidocoApi\Order\StructType\Customer) {
                $invalidValues[] = is_object($midoco_booking_messageCustomerItem) ? get_class($midoco_booking_messageCustomerItem) : sprintf('%s(%s)', gettype($midoco_booking_messageCustomerItem), var_export($midoco_booking_messageCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customer property can only contain items of type \Pggns\MidocoApi\Order\StructType\Customer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set customer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Customer[] $customer
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setCustomer(array $customer = []): self
    {
        // validation for constraint: array
        if ('' !== ($customerArrayErrorMessage = self::validateCustomerForArrayConstraintsFromSetCustomer($customer))) {
            throw new InvalidArgumentException($customerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($customer) && count($customer) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($customer)), __LINE__);
        }
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * Add item to customer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Customer $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToCustomer(\Pggns\MidocoApi\Order\StructType\Customer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Customer) {
            throw new InvalidArgumentException(sprintf('The customer property can only contain items of type \Pggns\MidocoApi\Order\StructType\Customer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->customer) && count($this->customer) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->customer)), __LINE__);
        }
        $this->customer[] = $item;
        
        return $this;
    }
    /**
     * Get package_info value
     * @return \Pggns\MidocoApi\Order\StructType\Package_info[]
     */
    public function getPackage_info(): array
    {
        return $this->{'package-info'};
    }
    /**
     * This method is responsible for validating the values passed to the setPackage_info method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPackage_info method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePackage_infoForArrayConstraintsFromSetPackage_info(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messagePackage_infoItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messagePackage_infoItem instanceof \Pggns\MidocoApi\Order\StructType\Package_info) {
                $invalidValues[] = is_object($midoco_booking_messagePackage_infoItem) ? get_class($midoco_booking_messagePackage_infoItem) : sprintf('%s(%s)', gettype($midoco_booking_messagePackage_infoItem), var_export($midoco_booking_messagePackage_infoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The package_info property can only contain items of type \Pggns\MidocoApi\Order\StructType\Package_info, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set package_info value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Package_info[] $package_info
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setPackage_info(array $package_info = []): self
    {
        // validation for constraint: array
        if ('' !== ($package_infoArrayErrorMessage = self::validatePackage_infoForArrayConstraintsFromSetPackage_info($package_info))) {
            throw new InvalidArgumentException($package_infoArrayErrorMessage, __LINE__);
        }
        $this->package_info = $this->{'package-info'} = $package_info;
        
        return $this;
    }
    /**
     * Add item to package_info value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Package_info $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToPackage_info(\Pggns\MidocoApi\Order\StructType\Package_info $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Package_info) {
            throw new InvalidArgumentException(sprintf('The package_info property can only contain items of type \Pggns\MidocoApi\Order\StructType\Package_info, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->package_info[] = $this->{'package-info'}[] = $item;
        
        return $this;
    }
    /**
     * Get booking value
     * @return \Pggns\MidocoApi\Order\StructType\Booking[]
     */
    public function getBooking(): array
    {
        return $this->booking;
    }
    /**
     * This method is responsible for validating the values passed to the setBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingForArrayConstraintsFromSetBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messageBookingItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messageBookingItem instanceof \Pggns\MidocoApi\Order\StructType\Booking) {
                $invalidValues[] = is_object($midoco_booking_messageBookingItem) ? get_class($midoco_booking_messageBookingItem) : sprintf('%s(%s)', gettype($midoco_booking_messageBookingItem), var_export($midoco_booking_messageBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The booking property can only contain items of type \Pggns\MidocoApi\Order\StructType\Booking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set booking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Booking[] $booking
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setBooking(array $booking = []): self
    {
        // validation for constraint: array
        if ('' !== ($bookingArrayErrorMessage = self::validateBookingForArrayConstraintsFromSetBooking($booking))) {
            throw new InvalidArgumentException($bookingArrayErrorMessage, __LINE__);
        }
        $this->booking = $booking;
        
        return $this;
    }
    /**
     * Add item to booking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Booking $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToBooking(\Pggns\MidocoApi\Order\StructType\Booking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Booking) {
            throw new InvalidArgumentException(sprintf('The booking property can only contain items of type \Pggns\MidocoApi\Order\StructType\Booking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->booking[] = $item;
        
        return $this;
    }
    /**
     * Get prices value
     * @return \Pggns\MidocoApi\Order\StructType\Prices|null
     */
    public function getPrices(): ?\Pggns\MidocoApi\Order\StructType\Prices
    {
        return $this->prices;
    }
    /**
     * Set prices value
     * @param \Pggns\MidocoApi\Order\StructType\Prices $prices
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setPrices(?\Pggns\MidocoApi\Order\StructType\Prices $prices = null): self
    {
        $this->prices = $prices;
        
        return $this;
    }
    /**
     * Get ticket value
     * @return \Pggns\MidocoApi\Order\StructType\Ticket[]
     */
    public function getTicket(): array
    {
        return $this->ticket;
    }
    /**
     * This method is responsible for validating the values passed to the setTicket method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicket method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketForArrayConstraintsFromSetTicket(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messageTicketItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messageTicketItem instanceof \Pggns\MidocoApi\Order\StructType\Ticket) {
                $invalidValues[] = is_object($midoco_booking_messageTicketItem) ? get_class($midoco_booking_messageTicketItem) : sprintf('%s(%s)', gettype($midoco_booking_messageTicketItem), var_export($midoco_booking_messageTicketItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ticket property can only contain items of type \Pggns\MidocoApi\Order\StructType\Ticket, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ticket value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Ticket[] $ticket
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setTicket(array $ticket = []): self
    {
        // validation for constraint: array
        if ('' !== ($ticketArrayErrorMessage = self::validateTicketForArrayConstraintsFromSetTicket($ticket))) {
            throw new InvalidArgumentException($ticketArrayErrorMessage, __LINE__);
        }
        $this->ticket = $ticket;
        
        return $this;
    }
    /**
     * Add item to ticket value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Ticket $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToTicket(\Pggns\MidocoApi\Order\StructType\Ticket $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Ticket) {
            throw new InvalidArgumentException(sprintf('The ticket property can only contain items of type \Pggns\MidocoApi\Order\StructType\Ticket, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ticket[] = $item;
        
        return $this;
    }
    /**
     * Get payment_info value
     * @return \Pggns\MidocoApi\Order\StructType\Payment_info|null
     */
    public function getPayment_info(): ?\Pggns\MidocoApi\Order\StructType\Payment_info
    {
        return $this->{'payment-info'};
    }
    /**
     * Set payment_info value
     * @param \Pggns\MidocoApi\Order\StructType\Payment_info $payment_info
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setPayment_info(?\Pggns\MidocoApi\Order\StructType\Payment_info $payment_info = null): self
    {
        $this->payment_info = $this->{'payment-info'} = $payment_info;
        
        return $this;
    }
    /**
     * Get marketing_info value
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info|null
     */
    public function getMarketing_info(): ?\Pggns\MidocoApi\Order\StructType\Marketing_info
    {
        return $this->{'marketing-info'};
    }
    /**
     * Set marketing_info value
     * @param \Pggns\MidocoApi\Order\StructType\Marketing_info $marketing_info
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setMarketing_info(?\Pggns\MidocoApi\Order\StructType\Marketing_info $marketing_info = null): self
    {
        $this->marketing_info = $this->{'marketing-info'} = $marketing_info;
        
        return $this;
    }
    /**
     * Get internal_treatment value
     * @return \Pggns\MidocoApi\Order\StructType\Internal_treatment|null
     */
    public function getInternal_treatment(): ?\Pggns\MidocoApi\Order\StructType\Internal_treatment
    {
        return $this->internal_treatment;
    }
    /**
     * Set internal_treatment value
     * @param \Pggns\MidocoApi\Order\StructType\Internal_treatment $internal_treatment
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setInternal_treatment(?\Pggns\MidocoApi\Order\StructType\Internal_treatment $internal_treatment = null): self
    {
        $this->internal_treatment = $internal_treatment;
        
        return $this;
    }
    /**
     * Get order_remark value
     * @return \Pggns\MidocoApi\Order\StructType\Order_remark[]
     */
    public function getOrder_remark(): array
    {
        return $this->{'order-remark'};
    }
    /**
     * This method is responsible for validating the values passed to the setOrder_remark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrder_remark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrder_remarkForArrayConstraintsFromSetOrder_remark(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messageOrder_remarkItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messageOrder_remarkItem instanceof \Pggns\MidocoApi\Order\StructType\Order_remark) {
                $invalidValues[] = is_object($midoco_booking_messageOrder_remarkItem) ? get_class($midoco_booking_messageOrder_remarkItem) : sprintf('%s(%s)', gettype($midoco_booking_messageOrder_remarkItem), var_export($midoco_booking_messageOrder_remarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The order_remark property can only contain items of type \Pggns\MidocoApi\Order\StructType\Order_remark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set order_remark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Order_remark[] $order_remark
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setOrder_remark(array $order_remark = []): self
    {
        // validation for constraint: array
        if ('' !== ($order_remarkArrayErrorMessage = self::validateOrder_remarkForArrayConstraintsFromSetOrder_remark($order_remark))) {
            throw new InvalidArgumentException($order_remarkArrayErrorMessage, __LINE__);
        }
        $this->order_remark = $this->{'order-remark'} = $order_remark;
        
        return $this;
    }
    /**
     * Add item to order_remark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Order_remark $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToOrder_remark(\Pggns\MidocoApi\Order\StructType\Order_remark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Order_remark) {
            throw new InvalidArgumentException(sprintf('The order_remark property can only contain items of type \Pggns\MidocoApi\Order\StructType\Order_remark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->order_remark[] = $this->{'order-remark'}[] = $item;
        
        return $this;
    }
    /**
     * Get ExternalPayment value
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment[]
     */
    public function getExternalPayment(): array
    {
        return $this->ExternalPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalPaymentForArrayConstraintsFromSetExternalPayment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messageExternalPaymentItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messageExternalPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\ExternalPayment) {
                $invalidValues[] = is_object($midoco_booking_messageExternalPaymentItem) ? get_class($midoco_booking_messageExternalPaymentItem) : sprintf('%s(%s)', gettype($midoco_booking_messageExternalPaymentItem), var_export($midoco_booking_messageExternalPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPayment[] $externalPayment
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setExternalPayment(array $externalPayment = []): self
    {
        // validation for constraint: array
        if ('' !== ($externalPaymentArrayErrorMessage = self::validateExternalPaymentForArrayConstraintsFromSetExternalPayment($externalPayment))) {
            throw new InvalidArgumentException($externalPaymentArrayErrorMessage, __LINE__);
        }
        $this->ExternalPayment = $externalPayment;
        
        return $this;
    }
    /**
     * Add item to ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPayment $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToExternalPayment(\Pggns\MidocoApi\Order\StructType\ExternalPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ExternalPayment) {
            throw new InvalidArgumentException(sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalPayment[] = $item;
        
        return $this;
    }
    /**
     * Get imported_document value
     * @return \Pggns\MidocoApi\Order\StructType\Imported_document[]
     */
    public function getImported_document(): array
    {
        return $this->{'imported-document'};
    }
    /**
     * This method is responsible for validating the values passed to the setImported_document method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImported_document method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImported_documentForArrayConstraintsFromSetImported_document(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messageImported_documentItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messageImported_documentItem instanceof \Pggns\MidocoApi\Order\StructType\Imported_document) {
                $invalidValues[] = is_object($midoco_booking_messageImported_documentItem) ? get_class($midoco_booking_messageImported_documentItem) : sprintf('%s(%s)', gettype($midoco_booking_messageImported_documentItem), var_export($midoco_booking_messageImported_documentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The imported_document property can only contain items of type \Pggns\MidocoApi\Order\StructType\Imported_document, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set imported_document value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Imported_document[] $imported_document
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setImported_document(array $imported_document = []): self
    {
        // validation for constraint: array
        if ('' !== ($imported_documentArrayErrorMessage = self::validateImported_documentForArrayConstraintsFromSetImported_document($imported_document))) {
            throw new InvalidArgumentException($imported_documentArrayErrorMessage, __LINE__);
        }
        $this->imported_document = $this->{'imported-document'} = $imported_document;
        
        return $this;
    }
    /**
     * Add item to imported_document value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Imported_document $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToImported_document(\Pggns\MidocoApi\Order\StructType\Imported_document $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Imported_document) {
            throw new InvalidArgumentException(sprintf('The imported_document property can only contain items of type \Pggns\MidocoApi\Order\StructType\Imported_document, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->imported_document[] = $this->{'imported-document'}[] = $item;
        
        return $this;
    }
    /**
     * Get DunningInfo value
     * @return \Pggns\MidocoApi\Order\StructType\DunningInfo[]
     */
    public function getDunningInfo(): array
    {
        return $this->DunningInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setDunningInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDunningInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDunningInfoForArrayConstraintsFromSetDunningInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messageDunningInfoItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messageDunningInfoItem instanceof \Pggns\MidocoApi\Order\StructType\DunningInfo) {
                $invalidValues[] = is_object($midoco_booking_messageDunningInfoItem) ? get_class($midoco_booking_messageDunningInfoItem) : sprintf('%s(%s)', gettype($midoco_booking_messageDunningInfoItem), var_export($midoco_booking_messageDunningInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DunningInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\DunningInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DunningInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DunningInfo[] $dunningInfo
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setDunningInfo(array $dunningInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($dunningInfoArrayErrorMessage = self::validateDunningInfoForArrayConstraintsFromSetDunningInfo($dunningInfo))) {
            throw new InvalidArgumentException($dunningInfoArrayErrorMessage, __LINE__);
        }
        $this->DunningInfo = $dunningInfo;
        
        return $this;
    }
    /**
     * Add item to DunningInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DunningInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToDunningInfo(\Pggns\MidocoApi\Order\StructType\DunningInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DunningInfo) {
            throw new InvalidArgumentException(sprintf('The DunningInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\DunningInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DunningInfo[] = $item;
        
        return $this;
    }
    /**
     * Get voucher value
     * @return \Pggns\MidocoApi\Order\StructType\Voucher[]
     */
    public function getVoucher(): array
    {
        return $this->voucher;
    }
    /**
     * This method is responsible for validating the values passed to the setVoucher method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoucher method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoucherForArrayConstraintsFromSetVoucher(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messageVoucherItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messageVoucherItem instanceof \Pggns\MidocoApi\Order\StructType\Voucher) {
                $invalidValues[] = is_object($midoco_booking_messageVoucherItem) ? get_class($midoco_booking_messageVoucherItem) : sprintf('%s(%s)', gettype($midoco_booking_messageVoucherItem), var_export($midoco_booking_messageVoucherItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The voucher property can only contain items of type \Pggns\MidocoApi\Order\StructType\Voucher, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set voucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Voucher[] $voucher
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setVoucher(array $voucher = []): self
    {
        // validation for constraint: array
        if ('' !== ($voucherArrayErrorMessage = self::validateVoucherForArrayConstraintsFromSetVoucher($voucher))) {
            throw new InvalidArgumentException($voucherArrayErrorMessage, __LINE__);
        }
        $this->voucher = $voucher;
        
        return $this;
    }
    /**
     * Add item to voucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Voucher $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToVoucher(\Pggns\MidocoApi\Order\StructType\Voucher $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Voucher) {
            throw new InvalidArgumentException(sprintf('The voucher property can only contain items of type \Pggns\MidocoApi\Order\StructType\Voucher, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->voucher[] = $item;
        
        return $this;
    }
    /**
     * Get verk_data value
     * @return \Pggns\MidocoApi\Order\StructType\VerkDataInfo[]
     */
    public function getVerk_data(): array
    {
        return $this->{'verk-data'};
    }
    /**
     * This method is responsible for validating the values passed to the setVerk_data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVerk_data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVerk_dataForArrayConstraintsFromSetVerk_data(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_messageVerk_dataItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_messageVerk_dataItem instanceof \Pggns\MidocoApi\Order\StructType\VerkDataInfo) {
                $invalidValues[] = is_object($midoco_booking_messageVerk_dataItem) ? get_class($midoco_booking_messageVerk_dataItem) : sprintf('%s(%s)', gettype($midoco_booking_messageVerk_dataItem), var_export($midoco_booking_messageVerk_dataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The verk_data property can only contain items of type \Pggns\MidocoApi\Order\StructType\VerkDataInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set verk_data value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VerkDataInfo[] $verk_data
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setVerk_data(array $verk_data = []): self
    {
        // validation for constraint: array
        if ('' !== ($verk_dataArrayErrorMessage = self::validateVerk_dataForArrayConstraintsFromSetVerk_data($verk_data))) {
            throw new InvalidArgumentException($verk_dataArrayErrorMessage, __LINE__);
        }
        $this->verk_data = $this->{'verk-data'} = $verk_data;
        
        return $this;
    }
    /**
     * Add item to verk_data value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VerkDataInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function addToVerk_data(\Pggns\MidocoApi\Order\StructType\VerkDataInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VerkDataInfo) {
            throw new InvalidArgumentException(sprintf('The verk_data property can only contain items of type \Pggns\MidocoApi\Order\StructType\VerkDataInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->verk_data[] = $this->{'verk-data'}[] = $item;
        
        return $this;
    }
    /**
     * Get message_version value
     * @return int|null
     */
    public function getMessage_version(): ?int
    {
        return $this->{'message-version'};
    }
    /**
     * Set message_version value
     * @param int $message_version
     * @return \Pggns\MidocoApi\Order\StructType\Midoco_booking_message
     */
    public function setMessage_version(?int $message_version = 1): self
    {
        // validation for constraint: int
        if (!is_null($message_version) && !(is_int($message_version) || ctype_digit($message_version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($message_version, true), gettype($message_version)), __LINE__);
        }
        $this->message_version = $this->{'message-version'} = $message_version;
        
        return $this;
    }
}
