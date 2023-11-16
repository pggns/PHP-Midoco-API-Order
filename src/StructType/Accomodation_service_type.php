<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accomodation-service-type StructType
 * @subpackage Structs
 */
class Accomodation_service_type extends AbstractStructBase
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
     * The accomodation
     * @var string|null
     */
    protected ?string $accomodation = null;
    /**
     * The accomodation_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodation_description = null;
    /**
     * The catering
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catering = null;
    /**
     * The catering_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catering_description = null;
    /**
     * The location_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $location_description = null;
    /**
     * The allocation
     * Meta information extracted from the WSDL
     * - documentation: Number of persons per service. It must be integer.
     * @var string|null
     */
    protected ?string $allocation = null;
    /**
     * The no_of_services
     * @var string|null
     */
    protected ?string $no_of_services = null;
    /**
     * The no_of_nights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $no_of_nights = null;
    /**
     * The start_date
     * Meta information extracted from the WSDL
     * - documentation: Date when the service starts
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $start_date = null;
    /**
     * The end_date
     * Meta information extracted from the WSDL
     * - documentation: Date when the service ends
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $end_date = null;
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
     * The total_price
     * @var float|null
     */
    protected ?float $total_price = null;
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
     * The country_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country_description = null;
    /**
     * The transfer_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transfer_description = null;
    /**
     * The address_line1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address_line1 = null;
    /**
     * The address_line2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address_line2 = null;
    /**
     * The address_line3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address_line3 = null;
    /**
     * The address_line4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $address_line4 = null;
    /**
     * The emergency_Number
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $emergency_Number = null;
    /**
     * The corporate_discount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $corporate_discount = null;
    /**
     * The traveler_ref_id
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $traveler_ref_id = [];
    /**
     * The chain
     * @var string|null
     */
    protected ?string $chain = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
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
     * The airport_code
     * @var string|null
     */
    protected ?string $airport_code = null;
    /**
     * Constructor method for accomodation-service-type
     * @uses Accomodation_service_type::setPosition()
     * @uses Accomodation_service_type::setService_code()
     * @uses Accomodation_service_type::setService_name()
     * @uses Accomodation_service_type::setService_description()
     * @uses Accomodation_service_type::setAccomodation()
     * @uses Accomodation_service_type::setAccomodation_description()
     * @uses Accomodation_service_type::setCatering()
     * @uses Accomodation_service_type::setCatering_description()
     * @uses Accomodation_service_type::setLocation_description()
     * @uses Accomodation_service_type::setAllocation()
     * @uses Accomodation_service_type::setNo_of_services()
     * @uses Accomodation_service_type::setNo_of_nights()
     * @uses Accomodation_service_type::setStart_date()
     * @uses Accomodation_service_type::setEnd_date()
     * @uses Accomodation_service_type::setService_status()
     * @uses Accomodation_service_type::setPerson_assignment()
     * @uses Accomodation_service_type::setTotal_price()
     * @uses Accomodation_service_type::setCurrency()
     * @uses Accomodation_service_type::setVat_included()
     * @uses Accomodation_service_type::setCountry_description()
     * @uses Accomodation_service_type::setTransfer_description()
     * @uses Accomodation_service_type::setAddress_line1()
     * @uses Accomodation_service_type::setAddress_line2()
     * @uses Accomodation_service_type::setAddress_line3()
     * @uses Accomodation_service_type::setAddress_line4()
     * @uses Accomodation_service_type::setEmergency_Number()
     * @uses Accomodation_service_type::setCorporate_discount()
     * @uses Accomodation_service_type::setTraveler_ref_id()
     * @uses Accomodation_service_type::setChain()
     * @uses Accomodation_service_type::setCategory()
     * @uses Accomodation_service_type::setBookingId()
     * @uses Accomodation_service_type::setBookingDate()
     * @uses Accomodation_service_type::setSupplierId()
     * @uses Accomodation_service_type::setExtId()
     * @uses Accomodation_service_type::setSourceSystem()
     * @uses Accomodation_service_type::setSourceExtId()
     * @uses Accomodation_service_type::setAirport_code()
     * @param int $position
     * @param string $service_code
     * @param string $service_name
     * @param string $service_description
     * @param string $accomodation
     * @param string $accomodation_description
     * @param string $catering
     * @param string $catering_description
     * @param string $location_description
     * @param string $allocation
     * @param string $no_of_services
     * @param int $no_of_nights
     * @param string $start_date
     * @param string $end_date
     * @param string $service_status
     * @param string $person_assignment
     * @param float $total_price
     * @param string $currency
     * @param bool $vat_included
     * @param string $country_description
     * @param string $transfer_description
     * @param string $address_line1
     * @param string $address_line2
     * @param string $address_line3
     * @param string $address_line4
     * @param string $emergency_Number
     * @param string $corporate_discount
     * @param int[] $traveler_ref_id
     * @param string $chain
     * @param string $category
     * @param string $bookingId
     * @param string $bookingDate
     * @param string $supplierId
     * @param string $extId
     * @param string $sourceSystem
     * @param string $sourceExtId
     * @param string $airport_code
     */
    public function __construct(int $position, ?string $service_code = null, ?string $service_name = null, ?string $service_description = null, ?string $accomodation = null, ?string $accomodation_description = null, ?string $catering = null, ?string $catering_description = null, ?string $location_description = null, ?string $allocation = null, ?string $no_of_services = null, ?int $no_of_nights = null, ?string $start_date = null, ?string $end_date = null, ?string $service_status = null, ?string $person_assignment = null, ?float $total_price = null, ?string $currency = 'EUR', ?bool $vat_included = false, ?string $country_description = null, ?string $transfer_description = null, ?string $address_line1 = null, ?string $address_line2 = null, ?string $address_line3 = null, ?string $address_line4 = null, ?string $emergency_Number = null, ?string $corporate_discount = null, array $traveler_ref_id = [], ?string $chain = null, ?string $category = null, ?string $bookingId = null, ?string $bookingDate = null, ?string $supplierId = null, ?string $extId = null, ?string $sourceSystem = null, ?string $sourceExtId = null, ?string $airport_code = null)
    {
        $this
            ->setPosition($position)
            ->setService_code($service_code)
            ->setService_name($service_name)
            ->setService_description($service_description)
            ->setAccomodation($accomodation)
            ->setAccomodation_description($accomodation_description)
            ->setCatering($catering)
            ->setCatering_description($catering_description)
            ->setLocation_description($location_description)
            ->setAllocation($allocation)
            ->setNo_of_services($no_of_services)
            ->setNo_of_nights($no_of_nights)
            ->setStart_date($start_date)
            ->setEnd_date($end_date)
            ->setService_status($service_status)
            ->setPerson_assignment($person_assignment)
            ->setTotal_price($total_price)
            ->setCurrency($currency)
            ->setVat_included($vat_included)
            ->setCountry_description($country_description)
            ->setTransfer_description($transfer_description)
            ->setAddress_line1($address_line1)
            ->setAddress_line2($address_line2)
            ->setAddress_line3($address_line3)
            ->setAddress_line4($address_line4)
            ->setEmergency_Number($emergency_Number)
            ->setCorporate_discount($corporate_discount)
            ->setTraveler_ref_id($traveler_ref_id)
            ->setChain($chain)
            ->setCategory($category)
            ->setBookingId($bookingId)
            ->setBookingDate($bookingDate)
            ->setSupplierId($supplierId)
            ->setExtId($extId)
            ->setSourceSystem($sourceSystem)
            ->setSourceExtId($sourceExtId)
            ->setAirport_code($airport_code);
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * Get accomodation value
     * @return string|null
     */
    public function getAccomodation(): ?string
    {
        return $this->accomodation;
    }
    /**
     * Set accomodation value
     * @param string $accomodation
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setAccomodation(?string $accomodation = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation) && !is_string($accomodation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation, true), gettype($accomodation)), __LINE__);
        }
        $this->accomodation = $accomodation;
        
        return $this;
    }
    /**
     * Get accomodation_description value
     * @return string|null
     */
    public function getAccomodation_description(): ?string
    {
        return $this->{'accomodation-description'};
    }
    /**
     * Set accomodation_description value
     * @param string $accomodation_description
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setAccomodation_description(?string $accomodation_description = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation_description) && !is_string($accomodation_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation_description, true), gettype($accomodation_description)), __LINE__);
        }
        $this->accomodation_description = $this->{'accomodation-description'} = $accomodation_description;
        
        return $this;
    }
    /**
     * Get catering value
     * @return string|null
     */
    public function getCatering(): ?string
    {
        return $this->catering;
    }
    /**
     * Set catering value
     * @param string $catering
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setCatering(?string $catering = null): self
    {
        // validation for constraint: string
        if (!is_null($catering) && !is_string($catering)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catering, true), gettype($catering)), __LINE__);
        }
        $this->catering = $catering;
        
        return $this;
    }
    /**
     * Get catering_description value
     * @return string|null
     */
    public function getCatering_description(): ?string
    {
        return $this->{'catering-description'};
    }
    /**
     * Set catering_description value
     * @param string $catering_description
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setCatering_description(?string $catering_description = null): self
    {
        // validation for constraint: string
        if (!is_null($catering_description) && !is_string($catering_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catering_description, true), gettype($catering_description)), __LINE__);
        }
        $this->catering_description = $this->{'catering-description'} = $catering_description;
        
        return $this;
    }
    /**
     * Get location_description value
     * @return string|null
     */
    public function getLocation_description(): ?string
    {
        return $this->{'location-description'};
    }
    /**
     * Set location_description value
     * @param string $location_description
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setLocation_description(?string $location_description = null): self
    {
        // validation for constraint: string
        if (!is_null($location_description) && !is_string($location_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_description, true), gettype($location_description)), __LINE__);
        }
        $this->location_description = $this->{'location-description'} = $location_description;
        
        return $this;
    }
    /**
     * Get allocation value
     * @return string|null
     */
    public function getAllocation(): ?string
    {
        return $this->allocation;
    }
    /**
     * Set allocation value
     * @param string $allocation
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setAllocation(?string $allocation = null): self
    {
        // validation for constraint: string
        if (!is_null($allocation) && !is_string($allocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allocation, true), gettype($allocation)), __LINE__);
        }
        $this->allocation = $allocation;
        
        return $this;
    }
    /**
     * Get no_of_services value
     * @return string|null
     */
    public function getNo_of_services(): ?string
    {
        return $this->{'no-of-services'};
    }
    /**
     * Set no_of_services value
     * @param string $no_of_services
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setNo_of_services(?string $no_of_services = null): self
    {
        // validation for constraint: string
        if (!is_null($no_of_services) && !is_string($no_of_services)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($no_of_services, true), gettype($no_of_services)), __LINE__);
        }
        $this->no_of_services = $this->{'no-of-services'} = $no_of_services;
        
        return $this;
    }
    /**
     * Get no_of_nights value
     * @return int|null
     */
    public function getNo_of_nights(): ?int
    {
        return $this->{'no-of-nights'};
    }
    /**
     * Set no_of_nights value
     * @param int $no_of_nights
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setNo_of_nights(?int $no_of_nights = null): self
    {
        // validation for constraint: int
        if (!is_null($no_of_nights) && !(is_int($no_of_nights) || ctype_digit($no_of_nights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($no_of_nights, true), gettype($no_of_nights)), __LINE__);
        }
        $this->no_of_nights = $this->{'no-of-nights'} = $no_of_nights;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setStart_date(?string $start_date = null): self
    {
        // validation for constraint: string
        if (!is_null($start_date) && !is_string($start_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_date, true), gettype($start_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($start_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $start_date)) {
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setEnd_date(?string $end_date = null): self
    {
        // validation for constraint: string
        if (!is_null($end_date) && !is_string($end_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_date, true), gettype($end_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($end_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $end_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($end_date, true)), __LINE__);
        }
        $this->end_date = $this->{'end-date'} = $end_date;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * Get country_description value
     * @return string|null
     */
    public function getCountry_description(): ?string
    {
        return $this->country_description;
    }
    /**
     * Set country_description value
     * @param string $country_description
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setCountry_description(?string $country_description = null): self
    {
        // validation for constraint: string
        if (!is_null($country_description) && !is_string($country_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_description, true), gettype($country_description)), __LINE__);
        }
        $this->country_description = $country_description;
        
        return $this;
    }
    /**
     * Get transfer_description value
     * @return string|null
     */
    public function getTransfer_description(): ?string
    {
        return $this->transfer_description;
    }
    /**
     * Set transfer_description value
     * @param string $transfer_description
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setTransfer_description(?string $transfer_description = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer_description) && !is_string($transfer_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer_description, true), gettype($transfer_description)), __LINE__);
        }
        $this->transfer_description = $transfer_description;
        
        return $this;
    }
    /**
     * Get address_line1 value
     * @return string|null
     */
    public function getAddress_line1(): ?string
    {
        return $this->address_line1;
    }
    /**
     * Set address_line1 value
     * @param string $address_line1
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setAddress_line1(?string $address_line1 = null): self
    {
        // validation for constraint: string
        if (!is_null($address_line1) && !is_string($address_line1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line1, true), gettype($address_line1)), __LINE__);
        }
        $this->address_line1 = $address_line1;
        
        return $this;
    }
    /**
     * Get address_line2 value
     * @return string|null
     */
    public function getAddress_line2(): ?string
    {
        return $this->address_line2;
    }
    /**
     * Set address_line2 value
     * @param string $address_line2
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setAddress_line2(?string $address_line2 = null): self
    {
        // validation for constraint: string
        if (!is_null($address_line2) && !is_string($address_line2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line2, true), gettype($address_line2)), __LINE__);
        }
        $this->address_line2 = $address_line2;
        
        return $this;
    }
    /**
     * Get address_line3 value
     * @return string|null
     */
    public function getAddress_line3(): ?string
    {
        return $this->address_line3;
    }
    /**
     * Set address_line3 value
     * @param string $address_line3
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setAddress_line3(?string $address_line3 = null): self
    {
        // validation for constraint: string
        if (!is_null($address_line3) && !is_string($address_line3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line3, true), gettype($address_line3)), __LINE__);
        }
        $this->address_line3 = $address_line3;
        
        return $this;
    }
    /**
     * Get address_line4 value
     * @return string|null
     */
    public function getAddress_line4(): ?string
    {
        return $this->address_line4;
    }
    /**
     * Set address_line4 value
     * @param string $address_line4
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setAddress_line4(?string $address_line4 = null): self
    {
        // validation for constraint: string
        if (!is_null($address_line4) && !is_string($address_line4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_line4, true), gettype($address_line4)), __LINE__);
        }
        $this->address_line4 = $address_line4;
        
        return $this;
    }
    /**
     * Get emergency_Number value
     * @return string|null
     */
    public function getEmergency_Number(): ?string
    {
        return $this->{'emergency-Number'};
    }
    /**
     * Set emergency_Number value
     * @param string $emergency_Number
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setEmergency_Number(?string $emergency_Number = null): self
    {
        // validation for constraint: string
        if (!is_null($emergency_Number) && !is_string($emergency_Number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emergency_Number, true), gettype($emergency_Number)), __LINE__);
        }
        $this->emergency_Number = $this->{'emergency-Number'} = $emergency_Number;
        
        return $this;
    }
    /**
     * Get corporate_discount value
     * @return string|null
     */
    public function getCorporate_discount(): ?string
    {
        return $this->{'corporate-discount'};
    }
    /**
     * Set corporate_discount value
     * @param string $corporate_discount
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setCorporate_discount(?string $corporate_discount = null): self
    {
        // validation for constraint: string
        if (!is_null($corporate_discount) && !is_string($corporate_discount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporate_discount, true), gettype($corporate_discount)), __LINE__);
        }
        $this->corporate_discount = $this->{'corporate-discount'} = $corporate_discount;
        
        return $this;
    }
    /**
     * Get traveler_ref_id value
     * @return int[]
     */
    public function getTraveler_ref_id(): array
    {
        return $this->{'traveler-ref-id'};
    }
    /**
     * This method is responsible for validating the values passed to the setTraveler_ref_id method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraveler_ref_id method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTraveler_ref_idForArrayConstraintsFromSetTraveler_ref_id(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accomodation_service_typeTraveler_ref_idItem) {
            // validation for constraint: itemType
            if (!(is_int($accomodation_service_typeTraveler_ref_idItem) || ctype_digit($accomodation_service_typeTraveler_ref_idItem))) {
                $invalidValues[] = is_object($accomodation_service_typeTraveler_ref_idItem) ? get_class($accomodation_service_typeTraveler_ref_idItem) : sprintf('%s(%s)', gettype($accomodation_service_typeTraveler_ref_idItem), var_export($accomodation_service_typeTraveler_ref_idItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The traveler_ref_id property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set traveler_ref_id value
     * @throws InvalidArgumentException
     * @param int[] $traveler_ref_id
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setTraveler_ref_id(array $traveler_ref_id = []): self
    {
        // validation for constraint: array
        if ('' !== ($traveler_ref_idArrayErrorMessage = self::validateTraveler_ref_idForArrayConstraintsFromSetTraveler_ref_id($traveler_ref_id))) {
            throw new InvalidArgumentException($traveler_ref_idArrayErrorMessage, __LINE__);
        }
        $this->traveler_ref_id = $this->{'traveler-ref-id'} = $traveler_ref_id;
        
        return $this;
    }
    /**
     * Add item to traveler_ref_id value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function addToTraveler_ref_id(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The traveler_ref_id property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->traveler_ref_id[] = $this->{'traveler-ref-id'}[] = $item;
        
        return $this;
    }
    /**
     * Get chain value
     * @return string|null
     */
    public function getChain(): ?string
    {
        return $this->chain;
    }
    /**
     * Set chain value
     * @param string $chain
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setChain(?string $chain = null): self
    {
        // validation for constraint: string
        if (!is_null($chain) && !is_string($chain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chain, true), gettype($chain)), __LINE__);
        }
        $this->chain = $chain;
        
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
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
    /**
     * Get airport_code value
     * @return string|null
     */
    public function getAirport_code(): ?string
    {
        return $this->{'airport-code'};
    }
    /**
     * Set airport_code value
     * @param string $airport_code
     * @return \Pggns\MidocoApi\Order\StructType\Accomodation_service_type
     */
    public function setAirport_code(?string $airport_code = null): self
    {
        // validation for constraint: string
        if (!is_null($airport_code) && !is_string($airport_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airport_code, true), gettype($airport_code)), __LINE__);
        }
        $this->airport_code = $this->{'airport-code'} = $airport_code;
        
        return $this;
    }
}
