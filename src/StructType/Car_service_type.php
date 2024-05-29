<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for car-service-type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Car_service_type extends AbstractStructBase
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
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The car_type
     * @var string|null
     */
    protected ?string $car_type = null;
    /**
     * The car_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $car_description = null;
    /**
     * The pickup_code
     * Meta information extracted from the WSDL
     * - documentation: abbreviation for pickup place (e.g. SFO for San Francisco airport)
     * @var string|null
     */
    protected ?string $pickup_code = null;
    /**
     * The pickup_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $pickup_description = null;
    /**
     * The pickup_date
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $pickup_date = null;
    /**
     * The pickup_time
     * Meta information extracted from the WSDL
     * - documentation: earliest time for picking up the car
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $pickup_time = null;
    /**
     * The return_code
     * Meta information extracted from the WSDL
     * - documentation: abbreviation for return place (see pickup-code)
     * @var string|null
     */
    protected ?string $return_code = null;
    /**
     * The return_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_description = null;
    /**
     * The return_date
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $return_date = null;
    /**
     * The return_time
     * Meta information extracted from the WSDL
     * - documentation: latest time for returning the car at the return date
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $return_time = null;
    /**
     * The service_status
     * @var string|null
     */
    protected ?string $service_status = null;
    /**
     * The service_price
     * @var float|null
     */
    protected ?float $service_price = null;
    /**
     * The no_of_services
     * @var int|null
     */
    protected ?int $no_of_services = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The insurance_type
     * Meta information extracted from the WSDL
     * - documentation: if there is additional insurance information, it should be added here
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $insurance_type = null;
    /**
     * The insurance_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $insurance_description = null;
    /**
     * The vat_included
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vat_included = null;
    /**
     * The country_code
     * Meta information extracted from the WSDL
     * - documentation: ISO Code for the country
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country_code = null;
    /**
     * The country_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $country_description = null;
    /**
     * The return_country_code
     * Meta information extracted from the WSDL
     * - documentation: ISO Code for the country
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_country_code = null;
    /**
     * The return_country_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_country_description = null;
    /**
     * The car_supplier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $car_supplier = null;
    /**
     * The region_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $region_code = null;
    /**
     * The region_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $region_description = null;
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
    protected ?array $traveler_ref_id = null;
    /**
     * The destination_area
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destination_area = null;
    /**
     * The area_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $area_description = null;
    /**
     * The return_destination_area
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_destination_area = null;
    /**
     * The return_area_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_area_description = null;
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
     * Constructor method for car-service-type
     * @uses Car_service_type::setPosition()
     * @uses Car_service_type::setService_code()
     * @uses Car_service_type::setService_name()
     * @uses Car_service_type::setCategory()
     * @uses Car_service_type::setCar_type()
     * @uses Car_service_type::setCar_description()
     * @uses Car_service_type::setPickup_code()
     * @uses Car_service_type::setPickup_description()
     * @uses Car_service_type::setPickup_date()
     * @uses Car_service_type::setPickup_time()
     * @uses Car_service_type::setReturn_code()
     * @uses Car_service_type::setReturn_description()
     * @uses Car_service_type::setReturn_date()
     * @uses Car_service_type::setReturn_time()
     * @uses Car_service_type::setService_status()
     * @uses Car_service_type::setService_price()
     * @uses Car_service_type::setNo_of_services()
     * @uses Car_service_type::setCurrency()
     * @uses Car_service_type::setInsurance_type()
     * @uses Car_service_type::setInsurance_description()
     * @uses Car_service_type::setVat_included()
     * @uses Car_service_type::setCountry_code()
     * @uses Car_service_type::setCountry_description()
     * @uses Car_service_type::setReturn_country_code()
     * @uses Car_service_type::setReturn_country_description()
     * @uses Car_service_type::setCar_supplier()
     * @uses Car_service_type::setRegion_code()
     * @uses Car_service_type::setRegion_description()
     * @uses Car_service_type::setCorporate_discount()
     * @uses Car_service_type::setTraveler_ref_id()
     * @uses Car_service_type::setDestination_area()
     * @uses Car_service_type::setArea_description()
     * @uses Car_service_type::setReturn_destination_area()
     * @uses Car_service_type::setReturn_area_description()
     * @uses Car_service_type::setBookingId()
     * @uses Car_service_type::setBookingDate()
     * @uses Car_service_type::setSupplierId()
     * @uses Car_service_type::setExtId()
     * @uses Car_service_type::setSourceSystem()
     * @uses Car_service_type::setSourceExtId()
     * @param int $position
     * @param string $service_code
     * @param string $service_name
     * @param string $category
     * @param string $car_type
     * @param string $car_description
     * @param string $pickup_code
     * @param string $pickup_description
     * @param string $pickup_date
     * @param string $pickup_time
     * @param string $return_code
     * @param string $return_description
     * @param string $return_date
     * @param string $return_time
     * @param string $service_status
     * @param float $service_price
     * @param int $no_of_services
     * @param string $currency
     * @param string $insurance_type
     * @param string $insurance_description
     * @param bool $vat_included
     * @param string $country_code
     * @param string $country_description
     * @param string $return_country_code
     * @param string $return_country_description
     * @param string $car_supplier
     * @param string $region_code
     * @param string $region_description
     * @param string $corporate_discount
     * @param int[] $traveler_ref_id
     * @param string $destination_area
     * @param string $area_description
     * @param string $return_destination_area
     * @param string $return_area_description
     * @param string $bookingId
     * @param string $bookingDate
     * @param string $supplierId
     * @param string $extId
     * @param string $sourceSystem
     * @param string $sourceExtId
     */
    public function __construct(int $position, ?string $service_code = null, ?string $service_name = null, ?string $category = null, ?string $car_type = null, ?string $car_description = null, ?string $pickup_code = null, ?string $pickup_description = null, ?string $pickup_date = null, ?string $pickup_time = null, ?string $return_code = null, ?string $return_description = null, ?string $return_date = null, ?string $return_time = null, ?string $service_status = null, ?float $service_price = null, ?int $no_of_services = null, ?string $currency = null, ?string $insurance_type = null, ?string $insurance_description = null, ?bool $vat_included = false, ?string $country_code = null, ?string $country_description = null, ?string $return_country_code = null, ?string $return_country_description = null, ?string $car_supplier = null, ?string $region_code = null, ?string $region_description = null, ?string $corporate_discount = null, ?array $traveler_ref_id = null, ?string $destination_area = null, ?string $area_description = null, ?string $return_destination_area = null, ?string $return_area_description = null, ?string $bookingId = null, ?string $bookingDate = null, ?string $supplierId = null, ?string $extId = null, ?string $sourceSystem = null, ?string $sourceExtId = null)
    {
        $this
            ->setPosition($position)
            ->setService_code($service_code)
            ->setService_name($service_name)
            ->setCategory($category)
            ->setCar_type($car_type)
            ->setCar_description($car_description)
            ->setPickup_code($pickup_code)
            ->setPickup_description($pickup_description)
            ->setPickup_date($pickup_date)
            ->setPickup_time($pickup_time)
            ->setReturn_code($return_code)
            ->setReturn_description($return_description)
            ->setReturn_date($return_date)
            ->setReturn_time($return_time)
            ->setService_status($service_status)
            ->setService_price($service_price)
            ->setNo_of_services($no_of_services)
            ->setCurrency($currency)
            ->setInsurance_type($insurance_type)
            ->setInsurance_description($insurance_description)
            ->setVat_included($vat_included)
            ->setCountry_code($country_code)
            ->setCountry_description($country_description)
            ->setReturn_country_code($return_country_code)
            ->setReturn_country_description($return_country_description)
            ->setCar_supplier($car_supplier)
            ->setRegion_code($region_code)
            ->setRegion_description($region_description)
            ->setCorporate_discount($corporate_discount)
            ->setTraveler_ref_id($traveler_ref_id)
            ->setDestination_area($destination_area)
            ->setArea_description($area_description)
            ->setReturn_destination_area($return_destination_area)
            ->setReturn_area_description($return_area_description)
            ->setBookingId($bookingId)
            ->setBookingDate($bookingDate)
            ->setSupplierId($supplierId)
            ->setExtId($extId)
            ->setSourceSystem($sourceSystem)
            ->setSourceExtId($sourceExtId);
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * Get car_type value
     * @return string|null
     */
    public function getCar_type(): ?string
    {
        return $this->{'car-type'};
    }
    /**
     * Set car_type value
     * @param string $car_type
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setCar_type(?string $car_type = null): self
    {
        // validation for constraint: string
        if (!is_null($car_type) && !is_string($car_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($car_type, true), gettype($car_type)), __LINE__);
        }
        $this->car_type = $this->{'car-type'} = $car_type;
        
        return $this;
    }
    /**
     * Get car_description value
     * @return string|null
     */
    public function getCar_description(): ?string
    {
        return $this->{'car-description'};
    }
    /**
     * Set car_description value
     * @param string $car_description
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setCar_description(?string $car_description = null): self
    {
        // validation for constraint: string
        if (!is_null($car_description) && !is_string($car_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($car_description, true), gettype($car_description)), __LINE__);
        }
        $this->car_description = $this->{'car-description'} = $car_description;
        
        return $this;
    }
    /**
     * Get pickup_code value
     * @return string|null
     */
    public function getPickup_code(): ?string
    {
        return $this->{'pickup-code'};
    }
    /**
     * Set pickup_code value
     * @param string $pickup_code
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setPickup_code(?string $pickup_code = null): self
    {
        // validation for constraint: string
        if (!is_null($pickup_code) && !is_string($pickup_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickup_code, true), gettype($pickup_code)), __LINE__);
        }
        $this->pickup_code = $this->{'pickup-code'} = $pickup_code;
        
        return $this;
    }
    /**
     * Get pickup_description value
     * @return string|null
     */
    public function getPickup_description(): ?string
    {
        return $this->{'pickup-description'};
    }
    /**
     * Set pickup_description value
     * @param string $pickup_description
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setPickup_description(?string $pickup_description = null): self
    {
        // validation for constraint: string
        if (!is_null($pickup_description) && !is_string($pickup_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickup_description, true), gettype($pickup_description)), __LINE__);
        }
        $this->pickup_description = $this->{'pickup-description'} = $pickup_description;
        
        return $this;
    }
    /**
     * Get pickup_date value
     * @return string|null
     */
    public function getPickup_date(): ?string
    {
        return $this->{'pickup-date'};
    }
    /**
     * Set pickup_date value
     * @param string $pickup_date
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setPickup_date(?string $pickup_date = null): self
    {
        // validation for constraint: string
        if (!is_null($pickup_date) && !is_string($pickup_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickup_date, true), gettype($pickup_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($pickup_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $pickup_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($pickup_date, true)), __LINE__);
        }
        $this->pickup_date = $this->{'pickup-date'} = $pickup_date;
        
        return $this;
    }
    /**
     * Get pickup_time value
     * @return string|null
     */
    public function getPickup_time(): ?string
    {
        return $this->{'pickup-time'};
    }
    /**
     * Set pickup_time value
     * @param string $pickup_time
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setPickup_time(?string $pickup_time = null): self
    {
        // validation for constraint: string
        if (!is_null($pickup_time) && !is_string($pickup_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickup_time, true), gettype($pickup_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($pickup_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $pickup_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($pickup_time, true)), __LINE__);
        }
        $this->pickup_time = $this->{'pickup-time'} = $pickup_time;
        
        return $this;
    }
    /**
     * Get return_code value
     * @return string|null
     */
    public function getReturn_code(): ?string
    {
        return $this->{'return-code'};
    }
    /**
     * Set return_code value
     * @param string $return_code
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setReturn_code(?string $return_code = null): self
    {
        // validation for constraint: string
        if (!is_null($return_code) && !is_string($return_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_code, true), gettype($return_code)), __LINE__);
        }
        $this->return_code = $this->{'return-code'} = $return_code;
        
        return $this;
    }
    /**
     * Get return_description value
     * @return string|null
     */
    public function getReturn_description(): ?string
    {
        return $this->{'return-description'};
    }
    /**
     * Set return_description value
     * @param string $return_description
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setReturn_description(?string $return_description = null): self
    {
        // validation for constraint: string
        if (!is_null($return_description) && !is_string($return_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_description, true), gettype($return_description)), __LINE__);
        }
        $this->return_description = $this->{'return-description'} = $return_description;
        
        return $this;
    }
    /**
     * Get return_date value
     * @return string|null
     */
    public function getReturn_date(): ?string
    {
        return $this->{'return-date'};
    }
    /**
     * Set return_date value
     * @param string $return_date
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setReturn_date(?string $return_date = null): self
    {
        // validation for constraint: string
        if (!is_null($return_date) && !is_string($return_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_date, true), gettype($return_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($return_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $return_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($return_date, true)), __LINE__);
        }
        $this->return_date = $this->{'return-date'} = $return_date;
        
        return $this;
    }
    /**
     * Get return_time value
     * @return string|null
     */
    public function getReturn_time(): ?string
    {
        return $this->{'return-time'};
    }
    /**
     * Set return_time value
     * @param string $return_time
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setReturn_time(?string $return_time = null): self
    {
        // validation for constraint: string
        if (!is_null($return_time) && !is_string($return_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_time, true), gettype($return_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($return_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $return_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($return_time, true)), __LINE__);
        }
        $this->return_time = $this->{'return-time'} = $return_time;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * Get no_of_services value
     * @return int|null
     */
    public function getNo_of_services(): ?int
    {
        return $this->{'no-of-services'};
    }
    /**
     * Set no_of_services value
     * @param int $no_of_services
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setNo_of_services(?int $no_of_services = null): self
    {
        // validation for constraint: int
        if (!is_null($no_of_services) && !(is_int($no_of_services) || ctype_digit($no_of_services))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($no_of_services, true), gettype($no_of_services)), __LINE__);
        }
        $this->no_of_services = $this->{'no-of-services'} = $no_of_services;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * Get insurance_type value
     * @return string|null
     */
    public function getInsurance_type(): ?string
    {
        return $this->{'insurance-type'};
    }
    /**
     * Set insurance_type value
     * @param string $insurance_type
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setInsurance_type(?string $insurance_type = null): self
    {
        // validation for constraint: string
        if (!is_null($insurance_type) && !is_string($insurance_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurance_type, true), gettype($insurance_type)), __LINE__);
        }
        $this->insurance_type = $this->{'insurance-type'} = $insurance_type;
        
        return $this;
    }
    /**
     * Get insurance_description value
     * @return string|null
     */
    public function getInsurance_description(): ?string
    {
        return $this->{'insurance-description'};
    }
    /**
     * Set insurance_description value
     * @param string $insurance_description
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setInsurance_description(?string $insurance_description = null): self
    {
        // validation for constraint: string
        if (!is_null($insurance_description) && !is_string($insurance_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurance_description, true), gettype($insurance_description)), __LINE__);
        }
        $this->insurance_description = $this->{'insurance-description'} = $insurance_description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * Get country_code value
     * @return string|null
     */
    public function getCountry_code(): ?string
    {
        return $this->{'country-code'};
    }
    /**
     * Set country_code value
     * @param string $country_code
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setCountry_code(?string $country_code = null): self
    {
        // validation for constraint: string
        if (!is_null($country_code) && !is_string($country_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_code, true), gettype($country_code)), __LINE__);
        }
        $this->country_code = $this->{'country-code'} = $country_code;
        
        return $this;
    }
    /**
     * Get country_description value
     * @return string|null
     */
    public function getCountry_description(): ?string
    {
        return $this->{'country-description'};
    }
    /**
     * Set country_description value
     * @param string $country_description
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setCountry_description(?string $country_description = null): self
    {
        // validation for constraint: string
        if (!is_null($country_description) && !is_string($country_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_description, true), gettype($country_description)), __LINE__);
        }
        $this->country_description = $this->{'country-description'} = $country_description;
        
        return $this;
    }
    /**
     * Get return_country_code value
     * @return string|null
     */
    public function getReturn_country_code(): ?string
    {
        return $this->{'return-country-code'};
    }
    /**
     * Set return_country_code value
     * @param string $return_country_code
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setReturn_country_code(?string $return_country_code = null): self
    {
        // validation for constraint: string
        if (!is_null($return_country_code) && !is_string($return_country_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_country_code, true), gettype($return_country_code)), __LINE__);
        }
        $this->return_country_code = $this->{'return-country-code'} = $return_country_code;
        
        return $this;
    }
    /**
     * Get return_country_description value
     * @return string|null
     */
    public function getReturn_country_description(): ?string
    {
        return $this->{'return-country-description'};
    }
    /**
     * Set return_country_description value
     * @param string $return_country_description
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setReturn_country_description(?string $return_country_description = null): self
    {
        // validation for constraint: string
        if (!is_null($return_country_description) && !is_string($return_country_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_country_description, true), gettype($return_country_description)), __LINE__);
        }
        $this->return_country_description = $this->{'return-country-description'} = $return_country_description;
        
        return $this;
    }
    /**
     * Get car_supplier value
     * @return string|null
     */
    public function getCar_supplier(): ?string
    {
        return $this->{'car-supplier'};
    }
    /**
     * Set car_supplier value
     * @param string $car_supplier
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setCar_supplier(?string $car_supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($car_supplier) && !is_string($car_supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($car_supplier, true), gettype($car_supplier)), __LINE__);
        }
        $this->car_supplier = $this->{'car-supplier'} = $car_supplier;
        
        return $this;
    }
    /**
     * Get region_code value
     * @return string|null
     */
    public function getRegion_code(): ?string
    {
        return $this->{'region-code'};
    }
    /**
     * Set region_code value
     * @param string $region_code
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setRegion_code(?string $region_code = null): self
    {
        // validation for constraint: string
        if (!is_null($region_code) && !is_string($region_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region_code, true), gettype($region_code)), __LINE__);
        }
        $this->region_code = $this->{'region-code'} = $region_code;
        
        return $this;
    }
    /**
     * Get region_description value
     * @return string|null
     */
    public function getRegion_description(): ?string
    {
        return $this->{'region-description'};
    }
    /**
     * Set region_description value
     * @param string $region_description
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setRegion_description(?string $region_description = null): self
    {
        // validation for constraint: string
        if (!is_null($region_description) && !is_string($region_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($region_description, true), gettype($region_description)), __LINE__);
        }
        $this->region_description = $this->{'region-description'} = $region_description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
    public function getTraveler_ref_id(): ?array
    {
        return $this->{'traveler-ref-id'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTraveler_ref_id method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraveler_ref_id method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTraveler_ref_idForArrayConstraintFromSetTraveler_ref_id(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $car_service_typeTraveler_ref_idItem) {
            // validation for constraint: itemType
            if (!(is_int($car_service_typeTraveler_ref_idItem) || ctype_digit($car_service_typeTraveler_ref_idItem))) {
                $invalidValues[] = is_object($car_service_typeTraveler_ref_idItem) ? get_class($car_service_typeTraveler_ref_idItem) : sprintf('%s(%s)', gettype($car_service_typeTraveler_ref_idItem), var_export($car_service_typeTraveler_ref_idItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setTraveler_ref_id(?array $traveler_ref_id = null): self
    {
        // validation for constraint: array
        if ('' !== ($traveler_ref_idArrayErrorMessage = self::validateTraveler_ref_idForArrayConstraintFromSetTraveler_ref_id($traveler_ref_id))) {
            throw new InvalidArgumentException($traveler_ref_idArrayErrorMessage, __LINE__);
        }
        $this->traveler_ref_id = $this->{'traveler-ref-id'} = $traveler_ref_id;
        
        return $this;
    }
    /**
     * Add item to traveler_ref_id value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * Get destination_area value
     * @return string|null
     */
    public function getDestination_area(): ?string
    {
        return $this->{'destination-area'};
    }
    /**
     * Set destination_area value
     * @param string $destination_area
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setDestination_area(?string $destination_area = null): self
    {
        // validation for constraint: string
        if (!is_null($destination_area) && !is_string($destination_area)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination_area, true), gettype($destination_area)), __LINE__);
        }
        $this->destination_area = $this->{'destination-area'} = $destination_area;
        
        return $this;
    }
    /**
     * Get area_description value
     * @return string|null
     */
    public function getArea_description(): ?string
    {
        return $this->{'area-description'};
    }
    /**
     * Set area_description value
     * @param string $area_description
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setArea_description(?string $area_description = null): self
    {
        // validation for constraint: string
        if (!is_null($area_description) && !is_string($area_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area_description, true), gettype($area_description)), __LINE__);
        }
        $this->area_description = $this->{'area-description'} = $area_description;
        
        return $this;
    }
    /**
     * Get return_destination_area value
     * @return string|null
     */
    public function getReturn_destination_area(): ?string
    {
        return $this->{'return-destination-area'};
    }
    /**
     * Set return_destination_area value
     * @param string $return_destination_area
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setReturn_destination_area(?string $return_destination_area = null): self
    {
        // validation for constraint: string
        if (!is_null($return_destination_area) && !is_string($return_destination_area)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_destination_area, true), gettype($return_destination_area)), __LINE__);
        }
        $this->return_destination_area = $this->{'return-destination-area'} = $return_destination_area;
        
        return $this;
    }
    /**
     * Get return_area_description value
     * @return string|null
     */
    public function getReturn_area_description(): ?string
    {
        return $this->{'return-area-description'};
    }
    /**
     * Set return_area_description value
     * @param string $return_area_description
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
     */
    public function setReturn_area_description(?string $return_area_description = null): self
    {
        // validation for constraint: string
        if (!is_null($return_area_description) && !is_string($return_area_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_area_description, true), gettype($return_area_description)), __LINE__);
        }
        $this->return_area_description = $this->{'return-area-description'} = $return_area_description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Car_service_type
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
