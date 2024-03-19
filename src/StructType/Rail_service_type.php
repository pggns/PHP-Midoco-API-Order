<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rail-service-type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Rail_service_type extends AbstractStructBase
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
     * @var string|null
     */
    protected ?string $service_code = null;
    /**
     * The service_name
     * @var string|null
     */
    protected ?string $service_name = null;
    /**
     * The service_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service_description = null;
    /**
     * The departure_date
     * Meta information extracted from the WSDL
     * - documentation: optional only when open segment is set, else not optional !
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $departure_date = null;
    /**
     * The departure_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $departure_time = null;
    /**
     * The departure_code
     * Meta information extracted from the WSDL
     * - documentation: In case of a transport, the code from the departing location (like the airport short code)
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_code = null;
    /**
     * The departure_desc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $departure_desc = null;
    /**
     * The departure_platform
     * @var string|null
     */
    protected ?string $departure_platform = null;
    /**
     * The arrival_date
     * Meta information extracted from the WSDL
     * - documentation: if left out, it is coinsidered to be the same as departure date, set only when flying over a day barrier
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $arrival_date = null;
    /**
     * The arrival_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $arrival_time = null;
    /**
     * The arrival_code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrival_code = null;
    /**
     * The arrival_desc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrival_desc = null;
    /**
     * The arrival_platform
     * @var string|null
     */
    protected ?string $arrival_platform = null;
    /**
     * The booking_class
     * @var string|null
     */
    protected ?string $booking_class = null;
    /**
     * The tariff_code
     * @var string|null
     */
    protected ?string $tariff_code = null;
    /**
     * The tariff_desc
     * @var string|null
     */
    protected ?string $tariff_desc = null;
    /**
     * The train_no
     * @var string|null
     */
    protected ?string $train_no = null;
    /**
     * The train_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $train_type = null;
    /**
     * The waggon
     * @var string|null
     */
    protected ?string $waggon = null;
    /**
     * The partition
     * @var string|null
     */
    protected ?string $partition = null;
    /**
     * The seat
     * @var string|null
     */
    protected ?string $seat = null;
    /**
     * The document_no
     * @var string|null
     */
    protected ?string $document_no = null;
    /**
     * The service_status
     * @var string|null
     */
    protected ?string $service_status = null;
    /**
     * The person_assignment
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The service_price
     * @var float|null
     */
    protected ?float $service_price = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - default: EUR
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The vat_included
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vat_included = null;
    /**
     * The company_customer
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $company_customer = null;
    /**
     * The pax_per_service
     * @var int|null
     */
    protected ?int $pax_per_service = null;
    /**
     * The reduction_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reduction_code = null;
    /**
     * The reduction_desc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $reduction_desc = null;
    /**
     * The valid_from
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $valid_from = null;
    /**
     * The last_cancel_date
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $last_cancel_date = null;
    /**
     * The no_of_children
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $no_of_children = null;
    /**
     * The ticket_category
     * Meta information extracted from the WSDL
     * - default: STANDARD_ONLINE
     * @var string|null
     */
    protected ?string $ticket_category = null;
    /**
     * The cc_information
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: cc-information
     * @var \Pggns\MidocoApi\Order\StructType\Cc_information|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Cc_information $cc_information = null;
    /**
     * Constructor method for rail-service-type
     * @uses Rail_service_type::setPosition()
     * @uses Rail_service_type::setService_code()
     * @uses Rail_service_type::setService_name()
     * @uses Rail_service_type::setService_description()
     * @uses Rail_service_type::setDeparture_date()
     * @uses Rail_service_type::setDeparture_time()
     * @uses Rail_service_type::setDeparture_code()
     * @uses Rail_service_type::setDeparture_desc()
     * @uses Rail_service_type::setDeparture_platform()
     * @uses Rail_service_type::setArrival_date()
     * @uses Rail_service_type::setArrival_time()
     * @uses Rail_service_type::setArrival_code()
     * @uses Rail_service_type::setArrival_desc()
     * @uses Rail_service_type::setArrival_platform()
     * @uses Rail_service_type::setBooking_class()
     * @uses Rail_service_type::setTariff_code()
     * @uses Rail_service_type::setTariff_desc()
     * @uses Rail_service_type::setTrain_no()
     * @uses Rail_service_type::setTrain_type()
     * @uses Rail_service_type::setWaggon()
     * @uses Rail_service_type::setPartition()
     * @uses Rail_service_type::setSeat()
     * @uses Rail_service_type::setDocument_no()
     * @uses Rail_service_type::setService_status()
     * @uses Rail_service_type::setPerson_assignment()
     * @uses Rail_service_type::setService_price()
     * @uses Rail_service_type::setCurrency()
     * @uses Rail_service_type::setVat_included()
     * @uses Rail_service_type::setCompany_customer()
     * @uses Rail_service_type::setPax_per_service()
     * @uses Rail_service_type::setReduction_code()
     * @uses Rail_service_type::setReduction_desc()
     * @uses Rail_service_type::setValid_from()
     * @uses Rail_service_type::setLast_cancel_date()
     * @uses Rail_service_type::setNo_of_children()
     * @uses Rail_service_type::setTicket_category()
     * @uses Rail_service_type::setCc_information()
     * @param int $position
     * @param string $service_code
     * @param string $service_name
     * @param string $service_description
     * @param string $departure_date
     * @param string $departure_time
     * @param string $departure_code
     * @param string $departure_desc
     * @param string $departure_platform
     * @param string $arrival_date
     * @param string $arrival_time
     * @param string $arrival_code
     * @param string $arrival_desc
     * @param string $arrival_platform
     * @param string $booking_class
     * @param string $tariff_code
     * @param string $tariff_desc
     * @param string $train_no
     * @param string $train_type
     * @param string $waggon
     * @param string $partition
     * @param string $seat
     * @param string $document_no
     * @param string $service_status
     * @param string $person_assignment
     * @param float $service_price
     * @param string $currency
     * @param bool $vat_included
     * @param bool $company_customer
     * @param int $pax_per_service
     * @param string $reduction_code
     * @param string $reduction_desc
     * @param string $valid_from
     * @param string $last_cancel_date
     * @param int $no_of_children
     * @param string $ticket_category
     * @param \Pggns\MidocoApi\Order\StructType\Cc_information $cc_information
     */
    public function __construct(int $position, ?string $service_code = null, ?string $service_name = null, ?string $service_description = null, ?string $departure_date = null, ?string $departure_time = null, ?string $departure_code = null, ?string $departure_desc = null, ?string $departure_platform = null, ?string $arrival_date = null, ?string $arrival_time = null, ?string $arrival_code = null, ?string $arrival_desc = null, ?string $arrival_platform = null, ?string $booking_class = null, ?string $tariff_code = null, ?string $tariff_desc = null, ?string $train_no = null, ?string $train_type = null, ?string $waggon = null, ?string $partition = null, ?string $seat = null, ?string $document_no = null, ?string $service_status = null, ?string $person_assignment = null, ?float $service_price = null, ?string $currency = 'EUR', ?bool $vat_included = false, ?bool $company_customer = false, ?int $pax_per_service = null, ?string $reduction_code = null, ?string $reduction_desc = null, ?string $valid_from = null, ?string $last_cancel_date = null, ?int $no_of_children = null, ?string $ticket_category = null, ?\Pggns\MidocoApi\Order\StructType\Cc_information $cc_information = null)
    {
        $this
            ->setPosition($position)
            ->setService_code($service_code)
            ->setService_name($service_name)
            ->setService_description($service_description)
            ->setDeparture_date($departure_date)
            ->setDeparture_time($departure_time)
            ->setDeparture_code($departure_code)
            ->setDeparture_desc($departure_desc)
            ->setDeparture_platform($departure_platform)
            ->setArrival_date($arrival_date)
            ->setArrival_time($arrival_time)
            ->setArrival_code($arrival_code)
            ->setArrival_desc($arrival_desc)
            ->setArrival_platform($arrival_platform)
            ->setBooking_class($booking_class)
            ->setTariff_code($tariff_code)
            ->setTariff_desc($tariff_desc)
            ->setTrain_no($train_no)
            ->setTrain_type($train_type)
            ->setWaggon($waggon)
            ->setPartition($partition)
            ->setSeat($seat)
            ->setDocument_no($document_no)
            ->setService_status($service_status)
            ->setPerson_assignment($person_assignment)
            ->setService_price($service_price)
            ->setCurrency($currency)
            ->setVat_included($vat_included)
            ->setCompany_customer($company_customer)
            ->setPax_per_service($pax_per_service)
            ->setReduction_code($reduction_code)
            ->setReduction_desc($reduction_desc)
            ->setValid_from($valid_from)
            ->setLast_cancel_date($last_cancel_date)
            ->setNo_of_children($no_of_children)
            ->setTicket_category($ticket_category)
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
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
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
     * Get service_description value
     * @return string|null
     */
    public function getService_description(): ?string
    {
        return $this->{'service-description'};
    }
    /**
     * Set service_description value
     * @param string $service_description
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setService_description(?string $service_description = null): self
    {
        // validation for constraint: string
        if (!is_null($service_description) && !is_string($service_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service_description, true), gettype($service_description)), __LINE__);
        }
        $this->service_description = $this->{'service-description'} = $service_description;
        
        return $this;
    }
    /**
     * Get departure_date value
     * @return string|null
     */
    public function getDeparture_date(): ?string
    {
        return $this->{'departure-date'};
    }
    /**
     * Set departure_date value
     * @param string $departure_date
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setDeparture_date(?string $departure_date = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_date) && !is_string($departure_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_date, true), gettype($departure_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($departure_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $departure_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($departure_date, true)), __LINE__);
        }
        $this->departure_date = $this->{'departure-date'} = $departure_date;
        
        return $this;
    }
    /**
     * Get departure_time value
     * @return string|null
     */
    public function getDeparture_time(): ?string
    {
        return $this->{'departure-time'};
    }
    /**
     * Set departure_time value
     * @param string $departure_time
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setDeparture_time(?string $departure_time = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_time) && !is_string($departure_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_time, true), gettype($departure_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($departure_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $departure_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($departure_time, true)), __LINE__);
        }
        $this->departure_time = $this->{'departure-time'} = $departure_time;
        
        return $this;
    }
    /**
     * Get departure_code value
     * @return string|null
     */
    public function getDeparture_code(): ?string
    {
        return $this->{'departure-code'};
    }
    /**
     * Set departure_code value
     * @param string $departure_code
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setDeparture_code(?string $departure_code = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_code) && !is_string($departure_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_code, true), gettype($departure_code)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($departure_code) && mb_strlen((string) $departure_code) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $departure_code)), __LINE__);
        }
        $this->departure_code = $this->{'departure-code'} = $departure_code;
        
        return $this;
    }
    /**
     * Get departure_desc value
     * @return string|null
     */
    public function getDeparture_desc(): ?string
    {
        return $this->{'departure-desc'};
    }
    /**
     * Set departure_desc value
     * @param string $departure_desc
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setDeparture_desc(?string $departure_desc = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_desc) && !is_string($departure_desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_desc, true), gettype($departure_desc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($departure_desc) && mb_strlen((string) $departure_desc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $departure_desc)), __LINE__);
        }
        $this->departure_desc = $this->{'departure-desc'} = $departure_desc;
        
        return $this;
    }
    /**
     * Get departure_platform value
     * @return string|null
     */
    public function getDeparture_platform(): ?string
    {
        return $this->{'departure-platform'};
    }
    /**
     * Set departure_platform value
     * @param string $departure_platform
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setDeparture_platform(?string $departure_platform = null): self
    {
        // validation for constraint: string
        if (!is_null($departure_platform) && !is_string($departure_platform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure_platform, true), gettype($departure_platform)), __LINE__);
        }
        $this->departure_platform = $this->{'departure-platform'} = $departure_platform;
        
        return $this;
    }
    /**
     * Get arrival_date value
     * @return string|null
     */
    public function getArrival_date(): ?string
    {
        return $this->{'arrival-date'};
    }
    /**
     * Set arrival_date value
     * @param string $arrival_date
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setArrival_date(?string $arrival_date = null): self
    {
        // validation for constraint: string
        if (!is_null($arrival_date) && !is_string($arrival_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_date, true), gettype($arrival_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($arrival_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $arrival_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($arrival_date, true)), __LINE__);
        }
        $this->arrival_date = $this->{'arrival-date'} = $arrival_date;
        
        return $this;
    }
    /**
     * Get arrival_time value
     * @return string|null
     */
    public function getArrival_time(): ?string
    {
        return $this->{'arrival-time'};
    }
    /**
     * Set arrival_time value
     * @param string $arrival_time
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setArrival_time(?string $arrival_time = null): self
    {
        // validation for constraint: string
        if (!is_null($arrival_time) && !is_string($arrival_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_time, true), gettype($arrival_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($arrival_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $arrival_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($arrival_time, true)), __LINE__);
        }
        $this->arrival_time = $this->{'arrival-time'} = $arrival_time;
        
        return $this;
    }
    /**
     * Get arrival_code value
     * @return string|null
     */
    public function getArrival_code(): ?string
    {
        return $this->{'arrival-code'};
    }
    /**
     * Set arrival_code value
     * @param string $arrival_code
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setArrival_code(?string $arrival_code = null): self
    {
        // validation for constraint: string
        if (!is_null($arrival_code) && !is_string($arrival_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_code, true), gettype($arrival_code)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($arrival_code) && mb_strlen((string) $arrival_code) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $arrival_code)), __LINE__);
        }
        $this->arrival_code = $this->{'arrival-code'} = $arrival_code;
        
        return $this;
    }
    /**
     * Get arrival_desc value
     * @return string|null
     */
    public function getArrival_desc(): ?string
    {
        return $this->{'arrival-desc'};
    }
    /**
     * Set arrival_desc value
     * @param string $arrival_desc
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setArrival_desc(?string $arrival_desc = null): self
    {
        // validation for constraint: string
        if (!is_null($arrival_desc) && !is_string($arrival_desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_desc, true), gettype($arrival_desc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($arrival_desc) && mb_strlen((string) $arrival_desc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $arrival_desc)), __LINE__);
        }
        $this->arrival_desc = $this->{'arrival-desc'} = $arrival_desc;
        
        return $this;
    }
    /**
     * Get arrival_platform value
     * @return string|null
     */
    public function getArrival_platform(): ?string
    {
        return $this->{'arrival-platform'};
    }
    /**
     * Set arrival_platform value
     * @param string $arrival_platform
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setArrival_platform(?string $arrival_platform = null): self
    {
        // validation for constraint: string
        if (!is_null($arrival_platform) && !is_string($arrival_platform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrival_platform, true), gettype($arrival_platform)), __LINE__);
        }
        $this->arrival_platform = $this->{'arrival-platform'} = $arrival_platform;
        
        return $this;
    }
    /**
     * Get booking_class value
     * @return string|null
     */
    public function getBooking_class(): ?string
    {
        return $this->{'booking-class'};
    }
    /**
     * Set booking_class value
     * @param string $booking_class
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setBooking_class(?string $booking_class = null): self
    {
        // validation for constraint: string
        if (!is_null($booking_class) && !is_string($booking_class)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_class, true), gettype($booking_class)), __LINE__);
        }
        $this->booking_class = $this->{'booking-class'} = $booking_class;
        
        return $this;
    }
    /**
     * Get tariff_code value
     * @return string|null
     */
    public function getTariff_code(): ?string
    {
        return $this->{'tariff-code'};
    }
    /**
     * Set tariff_code value
     * @param string $tariff_code
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setTariff_code(?string $tariff_code = null): self
    {
        // validation for constraint: string
        if (!is_null($tariff_code) && !is_string($tariff_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariff_code, true), gettype($tariff_code)), __LINE__);
        }
        $this->tariff_code = $this->{'tariff-code'} = $tariff_code;
        
        return $this;
    }
    /**
     * Get tariff_desc value
     * @return string|null
     */
    public function getTariff_desc(): ?string
    {
        return $this->{'tariff-desc'};
    }
    /**
     * Set tariff_desc value
     * @param string $tariff_desc
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setTariff_desc(?string $tariff_desc = null): self
    {
        // validation for constraint: string
        if (!is_null($tariff_desc) && !is_string($tariff_desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariff_desc, true), gettype($tariff_desc)), __LINE__);
        }
        $this->tariff_desc = $this->{'tariff-desc'} = $tariff_desc;
        
        return $this;
    }
    /**
     * Get train_no value
     * @return string|null
     */
    public function getTrain_no(): ?string
    {
        return $this->{'train-no'};
    }
    /**
     * Set train_no value
     * @param string $train_no
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setTrain_no(?string $train_no = null): self
    {
        // validation for constraint: string
        if (!is_null($train_no) && !is_string($train_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($train_no, true), gettype($train_no)), __LINE__);
        }
        $this->train_no = $this->{'train-no'} = $train_no;
        
        return $this;
    }
    /**
     * Get train_type value
     * @return string|null
     */
    public function getTrain_type(): ?string
    {
        return $this->{'train-type'};
    }
    /**
     * Set train_type value
     * @param string $train_type
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setTrain_type(?string $train_type = null): self
    {
        // validation for constraint: string
        if (!is_null($train_type) && !is_string($train_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($train_type, true), gettype($train_type)), __LINE__);
        }
        $this->train_type = $this->{'train-type'} = $train_type;
        
        return $this;
    }
    /**
     * Get waggon value
     * @return string|null
     */
    public function getWaggon(): ?string
    {
        return $this->waggon;
    }
    /**
     * Set waggon value
     * @param string $waggon
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setWaggon(?string $waggon = null): self
    {
        // validation for constraint: string
        if (!is_null($waggon) && !is_string($waggon)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waggon, true), gettype($waggon)), __LINE__);
        }
        $this->waggon = $waggon;
        
        return $this;
    }
    /**
     * Get partition value
     * @return string|null
     */
    public function getPartition(): ?string
    {
        return $this->partition;
    }
    /**
     * Set partition value
     * @param string $partition
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setPartition(?string $partition = null): self
    {
        // validation for constraint: string
        if (!is_null($partition) && !is_string($partition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partition, true), gettype($partition)), __LINE__);
        }
        $this->partition = $partition;
        
        return $this;
    }
    /**
     * Get seat value
     * @return string|null
     */
    public function getSeat(): ?string
    {
        return $this->seat;
    }
    /**
     * Set seat value
     * @param string $seat
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setSeat(?string $seat = null): self
    {
        // validation for constraint: string
        if (!is_null($seat) && !is_string($seat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seat, true), gettype($seat)), __LINE__);
        }
        $this->seat = $seat;
        
        return $this;
    }
    /**
     * Get document_no value
     * @return string|null
     */
    public function getDocument_no(): ?string
    {
        return $this->{'document-no'};
    }
    /**
     * Set document_no value
     * @param string $document_no
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setDocument_no(?string $document_no = null): self
    {
        // validation for constraint: string
        if (!is_null($document_no) && !is_string($document_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($document_no, true), gettype($document_no)), __LINE__);
        }
        $this->document_no = $this->{'document-no'} = $document_no;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
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
     * Get service_price value
     * @return float|null
     */
    public function getService_price(): ?float
    {
        return $this->{'service-price'};
    }
    /**
     * Set service_price value
     * @param float $service_price
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setService_price(?float $service_price = null): self
    {
        // validation for constraint: float
        if (!is_null($service_price) && !(is_float($service_price) || is_numeric($service_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($service_price, true), gettype($service_price)), __LINE__);
        }
        $this->service_price = $this->{'service-price'} = $service_price;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setVat_included(?bool $vat_included = false): self
    {
        // validation for constraint: boolean
        if (!is_null($vat_included) && !is_bool($vat_included)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vat_included, true), gettype($vat_included)), __LINE__);
        }
        $this->vat_included = $this->{'vat-included'} = $vat_included;
        
        return $this;
    }
    /**
     * Get company_customer value
     * @return bool|null
     */
    public function getCompany_customer(): ?bool
    {
        return $this->{'company-customer'};
    }
    /**
     * Set company_customer value
     * @param bool $company_customer
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setCompany_customer(?bool $company_customer = false): self
    {
        // validation for constraint: boolean
        if (!is_null($company_customer) && !is_bool($company_customer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($company_customer, true), gettype($company_customer)), __LINE__);
        }
        $this->company_customer = $this->{'company-customer'} = $company_customer;
        
        return $this;
    }
    /**
     * Get pax_per_service value
     * @return int|null
     */
    public function getPax_per_service(): ?int
    {
        return $this->{'pax-per-service'};
    }
    /**
     * Set pax_per_service value
     * @param int $pax_per_service
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setPax_per_service(?int $pax_per_service = null): self
    {
        // validation for constraint: int
        if (!is_null($pax_per_service) && !(is_int($pax_per_service) || ctype_digit($pax_per_service))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pax_per_service, true), gettype($pax_per_service)), __LINE__);
        }
        $this->pax_per_service = $this->{'pax-per-service'} = $pax_per_service;
        
        return $this;
    }
    /**
     * Get reduction_code value
     * @return string|null
     */
    public function getReduction_code(): ?string
    {
        return $this->{'reduction-code'};
    }
    /**
     * Set reduction_code value
     * @param string $reduction_code
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setReduction_code(?string $reduction_code = null): self
    {
        // validation for constraint: string
        if (!is_null($reduction_code) && !is_string($reduction_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reduction_code, true), gettype($reduction_code)), __LINE__);
        }
        $this->reduction_code = $this->{'reduction-code'} = $reduction_code;
        
        return $this;
    }
    /**
     * Get reduction_desc value
     * @return string|null
     */
    public function getReduction_desc(): ?string
    {
        return $this->{'reduction-desc'};
    }
    /**
     * Set reduction_desc value
     * @param string $reduction_desc
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setReduction_desc(?string $reduction_desc = null): self
    {
        // validation for constraint: string
        if (!is_null($reduction_desc) && !is_string($reduction_desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reduction_desc, true), gettype($reduction_desc)), __LINE__);
        }
        $this->reduction_desc = $this->{'reduction-desc'} = $reduction_desc;
        
        return $this;
    }
    /**
     * Get valid_from value
     * @return string|null
     */
    public function getValid_from(): ?string
    {
        return $this->{'valid-from'};
    }
    /**
     * Set valid_from value
     * @param string $valid_from
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setValid_from(?string $valid_from = null): self
    {
        // validation for constraint: string
        if (!is_null($valid_from) && !is_string($valid_from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valid_from, true), gettype($valid_from)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($valid_from) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $valid_from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($valid_from, true)), __LINE__);
        }
        $this->valid_from = $this->{'valid-from'} = $valid_from;
        
        return $this;
    }
    /**
     * Get last_cancel_date value
     * @return string|null
     */
    public function getLast_cancel_date(): ?string
    {
        return $this->{'last-cancel-date'};
    }
    /**
     * Set last_cancel_date value
     * @param string $last_cancel_date
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setLast_cancel_date(?string $last_cancel_date = null): self
    {
        // validation for constraint: string
        if (!is_null($last_cancel_date) && !is_string($last_cancel_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_cancel_date, true), gettype($last_cancel_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($last_cancel_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $last_cancel_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($last_cancel_date, true)), __LINE__);
        }
        $this->last_cancel_date = $this->{'last-cancel-date'} = $last_cancel_date;
        
        return $this;
    }
    /**
     * Get no_of_children value
     * @return int|null
     */
    public function getNo_of_children(): ?int
    {
        return $this->{'no-of-children'};
    }
    /**
     * Set no_of_children value
     * @param int $no_of_children
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setNo_of_children(?int $no_of_children = null): self
    {
        // validation for constraint: int
        if (!is_null($no_of_children) && !(is_int($no_of_children) || ctype_digit($no_of_children))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($no_of_children, true), gettype($no_of_children)), __LINE__);
        }
        $this->no_of_children = $this->{'no-of-children'} = $no_of_children;
        
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
     * @uses \Pggns\MidocoApi\Order\EnumType\Ticket_category::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Ticket_category::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ticket_category
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setTicket_category(?string $ticket_category = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Ticket_category::valueIsValid($ticket_category)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Ticket_category', is_array($ticket_category) ? implode(', ', $ticket_category) : var_export($ticket_category, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Ticket_category::getValidValues())), __LINE__);
        }
        $this->ticket_category = $this->{'ticket-category'} = $ticket_category;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Rail_service_type
     */
    public function setCc_information(?\Pggns\MidocoApi\Order\StructType\Cc_information $cc_information = null): self
    {
        $this->cc_information = $this->{'cc-information'} = $cc_information;
        
        return $this;
    }
}
