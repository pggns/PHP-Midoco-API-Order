<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for event-service-type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Event_service_type extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The service_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service_code = null;
    /**
     * The service_name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service_name = null;
    /**
     * The no_of_tickets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $no_of_tickets = null;
    /**
     * The start_date
     * Meta information extracted from the WSDL
     * - documentation: Date when the service starts
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $start_date = null;
    /**
     * The end_date
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $end_date = null;
    /**
     * The start_time
     * Meta information extracted from the WSDL
     * - documentation: Date when the service starts
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}
     * @var string|null
     */
    protected ?string $start_time = null;
    /**
     * The end_time
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}
     * @var string|null
     */
    protected ?string $end_time = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The organizer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $organizer = null;
    /**
     * The location_address1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $location_address1 = null;
    /**
     * The location_address2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $location_address2 = null;
    /**
     * The location_address3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $location_address3 = null;
    /**
     * The location_address4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $location_address4 = null;
    /**
     * The location_name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $location_name = null;
    /**
     * The seat_area
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $seat_area = null;
    /**
     * The row
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $row = null;
    /**
     * The seat_no
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $seat_no = null;
    /**
     * The total_price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $total_price = null;
    /**
     * The advance_sale_price
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $advance_sale_price = null;
    /**
     * The service_status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service_status = null;
    /**
     * The person_assignment
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The discount_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $discount_type = null;
    /**
     * The booking_reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $booking_reference = null;
    /**
     * The ticket_category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ticket_category = null;
    /**
     * Constructor method for event-service-type
     * @uses Event_service_type::setPosition()
     * @uses Event_service_type::setService_code()
     * @uses Event_service_type::setService_name()
     * @uses Event_service_type::setNo_of_tickets()
     * @uses Event_service_type::setStart_date()
     * @uses Event_service_type::setEnd_date()
     * @uses Event_service_type::setStart_time()
     * @uses Event_service_type::setEnd_time()
     * @uses Event_service_type::setDescription()
     * @uses Event_service_type::setName()
     * @uses Event_service_type::setOrganizer()
     * @uses Event_service_type::setLocation_address1()
     * @uses Event_service_type::setLocation_address2()
     * @uses Event_service_type::setLocation_address3()
     * @uses Event_service_type::setLocation_address4()
     * @uses Event_service_type::setLocation_name()
     * @uses Event_service_type::setSeat_area()
     * @uses Event_service_type::setRow()
     * @uses Event_service_type::setSeat_no()
     * @uses Event_service_type::setTotal_price()
     * @uses Event_service_type::setAdvance_sale_price()
     * @uses Event_service_type::setService_status()
     * @uses Event_service_type::setPerson_assignment()
     * @uses Event_service_type::setPrice()
     * @uses Event_service_type::setCurrency()
     * @uses Event_service_type::setDiscount_type()
     * @uses Event_service_type::setBooking_reference()
     * @uses Event_service_type::setTicket_category()
     * @param int $position
     * @param string $service_code
     * @param string $service_name
     * @param int $no_of_tickets
     * @param string $start_date
     * @param string $end_date
     * @param string $start_time
     * @param string $end_time
     * @param string $description
     * @param string $name
     * @param string $organizer
     * @param string $location_address1
     * @param string $location_address2
     * @param string $location_address3
     * @param string $location_address4
     * @param string $location_name
     * @param string $seat_area
     * @param string $row
     * @param string $seat_no
     * @param float $total_price
     * @param float $advance_sale_price
     * @param string $service_status
     * @param string $person_assignment
     * @param float $price
     * @param string $currency
     * @param string $discount_type
     * @param string $booking_reference
     * @param string $ticket_category
     */
    public function __construct(int $position, ?string $service_code = null, ?string $service_name = null, ?int $no_of_tickets = null, ?string $start_date = null, ?string $end_date = null, ?string $start_time = null, ?string $end_time = null, ?string $description = null, ?string $name = null, ?string $organizer = null, ?string $location_address1 = null, ?string $location_address2 = null, ?string $location_address3 = null, ?string $location_address4 = null, ?string $location_name = null, ?string $seat_area = null, ?string $row = null, ?string $seat_no = null, ?float $total_price = null, ?float $advance_sale_price = null, ?string $service_status = null, ?string $person_assignment = null, ?float $price = null, ?string $currency = 'EUR', ?string $discount_type = null, ?string $booking_reference = null, ?string $ticket_category = null)
    {
        $this
            ->setPosition($position)
            ->setService_code($service_code)
            ->setService_name($service_name)
            ->setNo_of_tickets($no_of_tickets)
            ->setStart_date($start_date)
            ->setEnd_date($end_date)
            ->setStart_time($start_time)
            ->setEnd_time($end_time)
            ->setDescription($description)
            ->setName($name)
            ->setOrganizer($organizer)
            ->setLocation_address1($location_address1)
            ->setLocation_address2($location_address2)
            ->setLocation_address3($location_address3)
            ->setLocation_address4($location_address4)
            ->setLocation_name($location_name)
            ->setSeat_area($seat_area)
            ->setRow($row)
            ->setSeat_no($seat_no)
            ->setTotal_price($total_price)
            ->setAdvance_sale_price($advance_sale_price)
            ->setService_status($service_status)
            ->setPerson_assignment($person_assignment)
            ->setPrice($price)
            ->setCurrency($currency)
            ->setDiscount_type($discount_type)
            ->setBooking_reference($booking_reference)
            ->setTicket_category($ticket_category);
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
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
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
     * Get service_code value
     * @return string|null
     */
    public function getService_code(): ?string
    {
        return $this->{'service-code'};
    }
    /**
     * Set service_code value
     * @param string $service_code
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setService_code(?string $service_code = null): self
    {
        // validation for constraint: string
        if (!is_null($service_code) && !is_string($service_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_code, true), gettype($service_code)), __LINE__);
        }
        $this->service_code = $this->{'service-code'} = $service_code;
        
        return $this;
    }
    /**
     * Get service_name value
     * @return string|null
     */
    public function getService_name(): ?string
    {
        return $this->{'service-name'};
    }
    /**
     * Set service_name value
     * @param string $service_name
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setService_name(?string $service_name = null): self
    {
        // validation for constraint: string
        if (!is_null($service_name) && !is_string($service_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_name, true), gettype($service_name)), __LINE__);
        }
        $this->service_name = $this->{'service-name'} = $service_name;
        
        return $this;
    }
    /**
     * Get no_of_tickets value
     * @return int|null
     */
    public function getNo_of_tickets(): ?int
    {
        return $this->{'no-of-tickets'};
    }
    /**
     * Set no_of_tickets value
     * @param int $no_of_tickets
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setNo_of_tickets(?int $no_of_tickets = null): self
    {
        // validation for constraint: int
        if (!is_null($no_of_tickets) && !(is_int($no_of_tickets) || ctype_digit($no_of_tickets))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($no_of_tickets, true), gettype($no_of_tickets)), __LINE__);
        }
        $this->no_of_tickets = $this->{'no-of-tickets'} = $no_of_tickets;
        
        return $this;
    }
    /**
     * Get start_date value
     * @return string|null
     */
    public function getStart_date(): ?string
    {
        return $this->{'start-date'};
    }
    /**
     * Set start_date value
     * @param string $start_date
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setStart_date(?string $start_date = null): self
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_date, true), gettype($start_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($start_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $start_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($start_date, true)), __LINE__);
        }
        $this->start_date = $this->{'start-date'} = $start_date;
        
        return $this;
    }
    /**
     * Get end_date value
     * @return string|null
     */
    public function getEnd_date(): ?string
    {
        return $this->{'end-date'};
    }
    /**
     * Set end_date value
     * @param string $end_date
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setEnd_date(?string $end_date = null): self
    {
        // validation for constraint: string
        if (!is_null($end_date) && !is_string($end_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_date, true), gettype($end_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($end_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $end_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($end_date, true)), __LINE__);
        }
        $this->end_date = $this->{'end-date'} = $end_date;
        
        return $this;
    }
    /**
     * Get start_time value
     * @return string|null
     */
    public function getStart_time(): ?string
    {
        return $this->{'start-time'};
    }
    /**
     * Set start_time value
     * @param string $start_time
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setStart_time(?string $start_time = null): self
    {
        // validation for constraint: string
        if (!is_null($start_time) && !is_string($start_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_time, true), gettype($start_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2})
        if (!is_null($start_time) && !preg_match('/[0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}/', (string) $start_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}/', var_export($start_time, true)), __LINE__);
        }
        $this->start_time = $this->{'start-time'} = $start_time;
        
        return $this;
    }
    /**
     * Get end_time value
     * @return string|null
     */
    public function getEnd_time(): ?string
    {
        return $this->{'end-time'};
    }
    /**
     * Set end_time value
     * @param string $end_time
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setEnd_time(?string $end_time = null): self
    {
        // validation for constraint: string
        if (!is_null($end_time) && !is_string($end_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_time, true), gettype($end_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2})
        if (!is_null($end_time) && !preg_match('/[0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}/', (string) $end_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}:{0,1}[0-9]{0,2}/', var_export($end_time, true)), __LINE__);
        }
        $this->end_time = $this->{'end-time'} = $end_time;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
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
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get organizer value
     * @return string|null
     */
    public function getOrganizer(): ?string
    {
        return $this->organizer;
    }
    /**
     * Set organizer value
     * @param string $organizer
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setOrganizer(?string $organizer = null): self
    {
        // validation for constraint: string
        if (!is_null($organizer) && !is_string($organizer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizer, true), gettype($organizer)), __LINE__);
        }
        $this->organizer = $organizer;
        
        return $this;
    }
    /**
     * Get location_address1 value
     * @return string|null
     */
    public function getLocation_address1(): ?string
    {
        return $this->{'location-address1'};
    }
    /**
     * Set location_address1 value
     * @param string $location_address1
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setLocation_address1(?string $location_address1 = null): self
    {
        // validation for constraint: string
        if (!is_null($location_address1) && !is_string($location_address1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_address1, true), gettype($location_address1)), __LINE__);
        }
        $this->location_address1 = $this->{'location-address1'} = $location_address1;
        
        return $this;
    }
    /**
     * Get location_address2 value
     * @return string|null
     */
    public function getLocation_address2(): ?string
    {
        return $this->{'location-address2'};
    }
    /**
     * Set location_address2 value
     * @param string $location_address2
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setLocation_address2(?string $location_address2 = null): self
    {
        // validation for constraint: string
        if (!is_null($location_address2) && !is_string($location_address2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_address2, true), gettype($location_address2)), __LINE__);
        }
        $this->location_address2 = $this->{'location-address2'} = $location_address2;
        
        return $this;
    }
    /**
     * Get location_address3 value
     * @return string|null
     */
    public function getLocation_address3(): ?string
    {
        return $this->{'location-address3'};
    }
    /**
     * Set location_address3 value
     * @param string $location_address3
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setLocation_address3(?string $location_address3 = null): self
    {
        // validation for constraint: string
        if (!is_null($location_address3) && !is_string($location_address3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_address3, true), gettype($location_address3)), __LINE__);
        }
        $this->location_address3 = $this->{'location-address3'} = $location_address3;
        
        return $this;
    }
    /**
     * Get location_address4 value
     * @return string|null
     */
    public function getLocation_address4(): ?string
    {
        return $this->{'location-address4'};
    }
    /**
     * Set location_address4 value
     * @param string $location_address4
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setLocation_address4(?string $location_address4 = null): self
    {
        // validation for constraint: string
        if (!is_null($location_address4) && !is_string($location_address4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_address4, true), gettype($location_address4)), __LINE__);
        }
        $this->location_address4 = $this->{'location-address4'} = $location_address4;
        
        return $this;
    }
    /**
     * Get location_name value
     * @return string|null
     */
    public function getLocation_name(): ?string
    {
        return $this->{'location-name'};
    }
    /**
     * Set location_name value
     * @param string $location_name
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setLocation_name(?string $location_name = null): self
    {
        // validation for constraint: string
        if (!is_null($location_name) && !is_string($location_name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_name, true), gettype($location_name)), __LINE__);
        }
        $this->location_name = $this->{'location-name'} = $location_name;
        
        return $this;
    }
    /**
     * Get seat_area value
     * @return string|null
     */
    public function getSeat_area(): ?string
    {
        return $this->{'seat-area'};
    }
    /**
     * Set seat_area value
     * @param string $seat_area
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setSeat_area(?string $seat_area = null): self
    {
        // validation for constraint: string
        if (!is_null($seat_area) && !is_string($seat_area)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seat_area, true), gettype($seat_area)), __LINE__);
        }
        $this->seat_area = $this->{'seat-area'} = $seat_area;
        
        return $this;
    }
    /**
     * Get row value
     * @return string|null
     */
    public function getRow(): ?string
    {
        return $this->row;
    }
    /**
     * Set row value
     * @param string $row
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setRow(?string $row = null): self
    {
        // validation for constraint: string
        if (!is_null($row) && !is_string($row)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($row, true), gettype($row)), __LINE__);
        }
        $this->row = $row;
        
        return $this;
    }
    /**
     * Get seat_no value
     * @return string|null
     */
    public function getSeat_no(): ?string
    {
        return $this->{'seat-no'};
    }
    /**
     * Set seat_no value
     * @param string $seat_no
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setSeat_no(?string $seat_no = null): self
    {
        // validation for constraint: string
        if (!is_null($seat_no) && !is_string($seat_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seat_no, true), gettype($seat_no)), __LINE__);
        }
        $this->seat_no = $this->{'seat-no'} = $seat_no;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
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
     * Get advance_sale_price value
     * @return float|null
     */
    public function getAdvance_sale_price(): ?float
    {
        return $this->{'advance-sale-price'};
    }
    /**
     * Set advance_sale_price value
     * @param float $advance_sale_price
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setAdvance_sale_price(?float $advance_sale_price = null): self
    {
        // validation for constraint: float
        if (!is_null($advance_sale_price) && !(is_float($advance_sale_price) || is_numeric($advance_sale_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($advance_sale_price, true), gettype($advance_sale_price)), __LINE__);
        }
        $this->advance_sale_price = $this->{'advance-sale-price'} = $advance_sale_price;
        
        return $this;
    }
    /**
     * Get service_status value
     * @return string|null
     */
    public function getService_status(): ?string
    {
        return $this->{'service-status'};
    }
    /**
     * Set service_status value
     * @param string $service_status
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setService_status(?string $service_status = null): self
    {
        // validation for constraint: string
        if (!is_null($service_status) && !is_string($service_status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_status, true), gettype($service_status)), __LINE__);
        }
        $this->service_status = $this->{'service-status'} = $service_status;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setCurrency(?string $currency = 'EUR'): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get discount_type value
     * @return string|null
     */
    public function getDiscount_type(): ?string
    {
        return $this->{'discount-type'};
    }
    /**
     * Set discount_type value
     * @param string $discount_type
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setDiscount_type(?string $discount_type = null): self
    {
        // validation for constraint: string
        if (!is_null($discount_type) && !is_string($discount_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discount_type, true), gettype($discount_type)), __LINE__);
        }
        $this->discount_type = $this->{'discount-type'} = $discount_type;
        
        return $this;
    }
    /**
     * Get booking_reference value
     * @return string|null
     */
    public function getBooking_reference(): ?string
    {
        return $this->{'booking-reference'};
    }
    /**
     * Set booking_reference value
     * @param string $booking_reference
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setBooking_reference(?string $booking_reference = null): self
    {
        // validation for constraint: string
        if (!is_null($booking_reference) && !is_string($booking_reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_reference, true), gettype($booking_reference)), __LINE__);
        }
        $this->booking_reference = $this->{'booking-reference'} = $booking_reference;
        
        return $this;
    }
    /**
     * Get ticket_category value
     * @return string|null
     */
    public function getTicket_category(): ?string
    {
        return $this->{'ticket-category'};
    }
    /**
     * Set ticket_category value
     * @param string $ticket_category
     * @return \Pggns\MidocoApi\Order\StructType\Event_service_type
     */
    public function setTicket_category(?string $ticket_category = null): self
    {
        // validation for constraint: string
        if (!is_null($ticket_category) && !is_string($ticket_category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticket_category, true), gettype($ticket_category)), __LINE__);
        }
        $this->ticket_category = $this->{'ticket-category'} = $ticket_category;
        
        return $this;
    }
}
