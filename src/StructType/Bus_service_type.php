<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bus-service-type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Bus_service_type extends AbstractStructBase
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
     * The accomodation_code
     * @var string|null
     */
    protected ?string $accomodation_code = null;
    /**
     * The accomodation_desc
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accomodation_desc = null;
    /**
     * The outward_from_date
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $outward_from_date = null;
    /**
     * The outward_from_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $outward_from_time = null;
    /**
     * The outward_from_city_code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $outward_from_city_code = null;
    /**
     * The outward_from_city_desc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $outward_from_city_desc = null;
    /**
     * The outward_to_date
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $outward_to_date = null;
    /**
     * The outward_to_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $outward_to_time = null;
    /**
     * The outward_to_city_code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $outward_to_city_code = null;
    /**
     * The outward_to_city_desc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $outward_to_city_desc = null;
    /**
     * The outward_seat
     * @var string|null
     */
    protected ?string $outward_seat = null;
    /**
     * The outward_platform
     * @var string|null
     */
    protected ?string $outward_platform = null;
    /**
     * The return_from_date
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $return_from_date = null;
    /**
     * The return_from_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $return_from_time = null;
    /**
     * The return_from_city_code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_from_city_code = null;
    /**
     * The return_from_city_desc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_from_city_desc = null;
    /**
     * The return_to_date
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $return_to_date = null;
    /**
     * The return_to_time
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{2}:[0-9]{2}
     * @var string|null
     */
    protected ?string $return_to_time = null;
    /**
     * The return_to_city_code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_to_city_code = null;
    /**
     * The return_to_city_desc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 64
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $return_to_city_desc = null;
    /**
     * The return_seat
     * @var string|null
     */
    protected ?string $return_seat = null;
    /**
     * The return_platform
     * @var string|null
     */
    protected ?string $return_platform = null;
    /**
     * The transfer
     * @var string|null
     */
    protected ?string $transfer = null;
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
     * The pax_per_service
     * @var int|null
     */
    protected ?int $pax_per_service = null;
    /**
     * The no_of_nights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $no_of_nights = null;
    /**
     * Constructor method for bus-service-type
     * @uses Bus_service_type::setPosition()
     * @uses Bus_service_type::setService_code()
     * @uses Bus_service_type::setService_name()
     * @uses Bus_service_type::setService_description()
     * @uses Bus_service_type::setAccomodation_code()
     * @uses Bus_service_type::setAccomodation_desc()
     * @uses Bus_service_type::setOutward_from_date()
     * @uses Bus_service_type::setOutward_from_time()
     * @uses Bus_service_type::setOutward_from_city_code()
     * @uses Bus_service_type::setOutward_from_city_desc()
     * @uses Bus_service_type::setOutward_to_date()
     * @uses Bus_service_type::setOutward_to_time()
     * @uses Bus_service_type::setOutward_to_city_code()
     * @uses Bus_service_type::setOutward_to_city_desc()
     * @uses Bus_service_type::setOutward_seat()
     * @uses Bus_service_type::setOutward_platform()
     * @uses Bus_service_type::setReturn_from_date()
     * @uses Bus_service_type::setReturn_from_time()
     * @uses Bus_service_type::setReturn_from_city_code()
     * @uses Bus_service_type::setReturn_from_city_desc()
     * @uses Bus_service_type::setReturn_to_date()
     * @uses Bus_service_type::setReturn_to_time()
     * @uses Bus_service_type::setReturn_to_city_code()
     * @uses Bus_service_type::setReturn_to_city_desc()
     * @uses Bus_service_type::setReturn_seat()
     * @uses Bus_service_type::setReturn_platform()
     * @uses Bus_service_type::setTransfer()
     * @uses Bus_service_type::setService_status()
     * @uses Bus_service_type::setPerson_assignment()
     * @uses Bus_service_type::setService_price()
     * @uses Bus_service_type::setCurrency()
     * @uses Bus_service_type::setVat_included()
     * @uses Bus_service_type::setPax_per_service()
     * @uses Bus_service_type::setNo_of_nights()
     * @param int $position
     * @param string $service_code
     * @param string $service_name
     * @param string $service_description
     * @param string $accomodation_code
     * @param string $accomodation_desc
     * @param string $outward_from_date
     * @param string $outward_from_time
     * @param string $outward_from_city_code
     * @param string $outward_from_city_desc
     * @param string $outward_to_date
     * @param string $outward_to_time
     * @param string $outward_to_city_code
     * @param string $outward_to_city_desc
     * @param string $outward_seat
     * @param string $outward_platform
     * @param string $return_from_date
     * @param string $return_from_time
     * @param string $return_from_city_code
     * @param string $return_from_city_desc
     * @param string $return_to_date
     * @param string $return_to_time
     * @param string $return_to_city_code
     * @param string $return_to_city_desc
     * @param string $return_seat
     * @param string $return_platform
     * @param string $transfer
     * @param string $service_status
     * @param string $person_assignment
     * @param float $service_price
     * @param string $currency
     * @param bool $vat_included
     * @param int $pax_per_service
     * @param int $no_of_nights
     */
    public function __construct(int $position, ?string $service_code = null, ?string $service_name = null, ?string $service_description = null, ?string $accomodation_code = null, ?string $accomodation_desc = null, ?string $outward_from_date = null, ?string $outward_from_time = null, ?string $outward_from_city_code = null, ?string $outward_from_city_desc = null, ?string $outward_to_date = null, ?string $outward_to_time = null, ?string $outward_to_city_code = null, ?string $outward_to_city_desc = null, ?string $outward_seat = null, ?string $outward_platform = null, ?string $return_from_date = null, ?string $return_from_time = null, ?string $return_from_city_code = null, ?string $return_from_city_desc = null, ?string $return_to_date = null, ?string $return_to_time = null, ?string $return_to_city_code = null, ?string $return_to_city_desc = null, ?string $return_seat = null, ?string $return_platform = null, ?string $transfer = null, ?string $service_status = null, ?string $person_assignment = null, ?float $service_price = null, ?string $currency = 'EUR', ?bool $vat_included = false, ?int $pax_per_service = null, ?int $no_of_nights = null)
    {
        $this
            ->setPosition($position)
            ->setService_code($service_code)
            ->setService_name($service_name)
            ->setService_description($service_description)
            ->setAccomodation_code($accomodation_code)
            ->setAccomodation_desc($accomodation_desc)
            ->setOutward_from_date($outward_from_date)
            ->setOutward_from_time($outward_from_time)
            ->setOutward_from_city_code($outward_from_city_code)
            ->setOutward_from_city_desc($outward_from_city_desc)
            ->setOutward_to_date($outward_to_date)
            ->setOutward_to_time($outward_to_time)
            ->setOutward_to_city_code($outward_to_city_code)
            ->setOutward_to_city_desc($outward_to_city_desc)
            ->setOutward_seat($outward_seat)
            ->setOutward_platform($outward_platform)
            ->setReturn_from_date($return_from_date)
            ->setReturn_from_time($return_from_time)
            ->setReturn_from_city_code($return_from_city_code)
            ->setReturn_from_city_desc($return_from_city_desc)
            ->setReturn_to_date($return_to_date)
            ->setReturn_to_time($return_to_time)
            ->setReturn_to_city_code($return_to_city_code)
            ->setReturn_to_city_desc($return_to_city_desc)
            ->setReturn_seat($return_seat)
            ->setReturn_platform($return_platform)
            ->setTransfer($transfer)
            ->setService_status($service_status)
            ->setPerson_assignment($person_assignment)
            ->setService_price($service_price)
            ->setCurrency($currency)
            ->setVat_included($vat_included)
            ->setPax_per_service($pax_per_service)
            ->setNo_of_nights($no_of_nights);
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * Get accomodation_code value
     * @return string|null
     */
    public function getAccomodation_code(): ?string
    {
        return $this->{'accomodation-code'};
    }
    /**
     * Set accomodation_code value
     * @param string $accomodation_code
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setAccomodation_code(?string $accomodation_code = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation_code) && !is_string($accomodation_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation_code, true), gettype($accomodation_code)), __LINE__);
        }
        $this->accomodation_code = $this->{'accomodation-code'} = $accomodation_code;
        
        return $this;
    }
    /**
     * Get accomodation_desc value
     * @return string|null
     */
    public function getAccomodation_desc(): ?string
    {
        return $this->{'accomodation-desc'};
    }
    /**
     * Set accomodation_desc value
     * @param string $accomodation_desc
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setAccomodation_desc(?string $accomodation_desc = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodation_desc) && !is_string($accomodation_desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodation_desc, true), gettype($accomodation_desc)), __LINE__);
        }
        $this->accomodation_desc = $this->{'accomodation-desc'} = $accomodation_desc;
        
        return $this;
    }
    /**
     * Get outward_from_date value
     * @return string|null
     */
    public function getOutward_from_date(): ?string
    {
        return $this->{'outward-from-date'};
    }
    /**
     * Set outward_from_date value
     * @param string $outward_from_date
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_from_date(?string $outward_from_date = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_from_date) && !is_string($outward_from_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_from_date, true), gettype($outward_from_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($outward_from_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $outward_from_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($outward_from_date, true)), __LINE__);
        }
        $this->outward_from_date = $this->{'outward-from-date'} = $outward_from_date;
        
        return $this;
    }
    /**
     * Get outward_from_time value
     * @return string|null
     */
    public function getOutward_from_time(): ?string
    {
        return $this->{'outward-from-time'};
    }
    /**
     * Set outward_from_time value
     * @param string $outward_from_time
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_from_time(?string $outward_from_time = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_from_time) && !is_string($outward_from_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_from_time, true), gettype($outward_from_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($outward_from_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $outward_from_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($outward_from_time, true)), __LINE__);
        }
        $this->outward_from_time = $this->{'outward-from-time'} = $outward_from_time;
        
        return $this;
    }
    /**
     * Get outward_from_city_code value
     * @return string|null
     */
    public function getOutward_from_city_code(): ?string
    {
        return $this->{'outward-from-city-code'};
    }
    /**
     * Set outward_from_city_code value
     * @param string $outward_from_city_code
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_from_city_code(?string $outward_from_city_code = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_from_city_code) && !is_string($outward_from_city_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_from_city_code, true), gettype($outward_from_city_code)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($outward_from_city_code) && mb_strlen((string) $outward_from_city_code) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $outward_from_city_code)), __LINE__);
        }
        $this->outward_from_city_code = $this->{'outward-from-city-code'} = $outward_from_city_code;
        
        return $this;
    }
    /**
     * Get outward_from_city_desc value
     * @return string|null
     */
    public function getOutward_from_city_desc(): ?string
    {
        return $this->{'outward-from-city-desc'};
    }
    /**
     * Set outward_from_city_desc value
     * @param string $outward_from_city_desc
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_from_city_desc(?string $outward_from_city_desc = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_from_city_desc) && !is_string($outward_from_city_desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_from_city_desc, true), gettype($outward_from_city_desc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($outward_from_city_desc) && mb_strlen((string) $outward_from_city_desc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $outward_from_city_desc)), __LINE__);
        }
        $this->outward_from_city_desc = $this->{'outward-from-city-desc'} = $outward_from_city_desc;
        
        return $this;
    }
    /**
     * Get outward_to_date value
     * @return string|null
     */
    public function getOutward_to_date(): ?string
    {
        return $this->{'outward-to-date'};
    }
    /**
     * Set outward_to_date value
     * @param string $outward_to_date
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_to_date(?string $outward_to_date = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_to_date) && !is_string($outward_to_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_to_date, true), gettype($outward_to_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($outward_to_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $outward_to_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($outward_to_date, true)), __LINE__);
        }
        $this->outward_to_date = $this->{'outward-to-date'} = $outward_to_date;
        
        return $this;
    }
    /**
     * Get outward_to_time value
     * @return string|null
     */
    public function getOutward_to_time(): ?string
    {
        return $this->{'outward-to-time'};
    }
    /**
     * Set outward_to_time value
     * @param string $outward_to_time
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_to_time(?string $outward_to_time = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_to_time) && !is_string($outward_to_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_to_time, true), gettype($outward_to_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($outward_to_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $outward_to_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($outward_to_time, true)), __LINE__);
        }
        $this->outward_to_time = $this->{'outward-to-time'} = $outward_to_time;
        
        return $this;
    }
    /**
     * Get outward_to_city_code value
     * @return string|null
     */
    public function getOutward_to_city_code(): ?string
    {
        return $this->{'outward-to-city-code'};
    }
    /**
     * Set outward_to_city_code value
     * @param string $outward_to_city_code
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_to_city_code(?string $outward_to_city_code = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_to_city_code) && !is_string($outward_to_city_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_to_city_code, true), gettype($outward_to_city_code)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($outward_to_city_code) && mb_strlen((string) $outward_to_city_code) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $outward_to_city_code)), __LINE__);
        }
        $this->outward_to_city_code = $this->{'outward-to-city-code'} = $outward_to_city_code;
        
        return $this;
    }
    /**
     * Get outward_to_city_desc value
     * @return string|null
     */
    public function getOutward_to_city_desc(): ?string
    {
        return $this->{'outward-to-city-desc'};
    }
    /**
     * Set outward_to_city_desc value
     * @param string $outward_to_city_desc
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_to_city_desc(?string $outward_to_city_desc = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_to_city_desc) && !is_string($outward_to_city_desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_to_city_desc, true), gettype($outward_to_city_desc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($outward_to_city_desc) && mb_strlen((string) $outward_to_city_desc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $outward_to_city_desc)), __LINE__);
        }
        $this->outward_to_city_desc = $this->{'outward-to-city-desc'} = $outward_to_city_desc;
        
        return $this;
    }
    /**
     * Get outward_seat value
     * @return string|null
     */
    public function getOutward_seat(): ?string
    {
        return $this->{'outward-seat'};
    }
    /**
     * Set outward_seat value
     * @param string $outward_seat
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_seat(?string $outward_seat = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_seat) && !is_string($outward_seat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_seat, true), gettype($outward_seat)), __LINE__);
        }
        $this->outward_seat = $this->{'outward-seat'} = $outward_seat;
        
        return $this;
    }
    /**
     * Get outward_platform value
     * @return string|null
     */
    public function getOutward_platform(): ?string
    {
        return $this->{'outward-platform'};
    }
    /**
     * Set outward_platform value
     * @param string $outward_platform
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setOutward_platform(?string $outward_platform = null): self
    {
        // validation for constraint: string
        if (!is_null($outward_platform) && !is_string($outward_platform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outward_platform, true), gettype($outward_platform)), __LINE__);
        }
        $this->outward_platform = $this->{'outward-platform'} = $outward_platform;
        
        return $this;
    }
    /**
     * Get return_from_date value
     * @return string|null
     */
    public function getReturn_from_date(): ?string
    {
        return $this->{'return-from-date'};
    }
    /**
     * Set return_from_date value
     * @param string $return_from_date
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_from_date(?string $return_from_date = null): self
    {
        // validation for constraint: string
        if (!is_null($return_from_date) && !is_string($return_from_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_from_date, true), gettype($return_from_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($return_from_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $return_from_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($return_from_date, true)), __LINE__);
        }
        $this->return_from_date = $this->{'return-from-date'} = $return_from_date;
        
        return $this;
    }
    /**
     * Get return_from_time value
     * @return string|null
     */
    public function getReturn_from_time(): ?string
    {
        return $this->{'return-from-time'};
    }
    /**
     * Set return_from_time value
     * @param string $return_from_time
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_from_time(?string $return_from_time = null): self
    {
        // validation for constraint: string
        if (!is_null($return_from_time) && !is_string($return_from_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_from_time, true), gettype($return_from_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($return_from_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $return_from_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($return_from_time, true)), __LINE__);
        }
        $this->return_from_time = $this->{'return-from-time'} = $return_from_time;
        
        return $this;
    }
    /**
     * Get return_from_city_code value
     * @return string|null
     */
    public function getReturn_from_city_code(): ?string
    {
        return $this->{'return-from-city-code'};
    }
    /**
     * Set return_from_city_code value
     * @param string $return_from_city_code
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_from_city_code(?string $return_from_city_code = null): self
    {
        // validation for constraint: string
        if (!is_null($return_from_city_code) && !is_string($return_from_city_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_from_city_code, true), gettype($return_from_city_code)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($return_from_city_code) && mb_strlen((string) $return_from_city_code) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $return_from_city_code)), __LINE__);
        }
        $this->return_from_city_code = $this->{'return-from-city-code'} = $return_from_city_code;
        
        return $this;
    }
    /**
     * Get return_from_city_desc value
     * @return string|null
     */
    public function getReturn_from_city_desc(): ?string
    {
        return $this->{'return-from-city-desc'};
    }
    /**
     * Set return_from_city_desc value
     * @param string $return_from_city_desc
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_from_city_desc(?string $return_from_city_desc = null): self
    {
        // validation for constraint: string
        if (!is_null($return_from_city_desc) && !is_string($return_from_city_desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_from_city_desc, true), gettype($return_from_city_desc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($return_from_city_desc) && mb_strlen((string) $return_from_city_desc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $return_from_city_desc)), __LINE__);
        }
        $this->return_from_city_desc = $this->{'return-from-city-desc'} = $return_from_city_desc;
        
        return $this;
    }
    /**
     * Get return_to_date value
     * @return string|null
     */
    public function getReturn_to_date(): ?string
    {
        return $this->{'return-to-date'};
    }
    /**
     * Set return_to_date value
     * @param string $return_to_date
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_to_date(?string $return_to_date = null): self
    {
        // validation for constraint: string
        if (!is_null($return_to_date) && !is_string($return_to_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_to_date, true), gettype($return_to_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($return_to_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', (string) $return_to_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($return_to_date, true)), __LINE__);
        }
        $this->return_to_date = $this->{'return-to-date'} = $return_to_date;
        
        return $this;
    }
    /**
     * Get return_to_time value
     * @return string|null
     */
    public function getReturn_to_time(): ?string
    {
        return $this->{'return-to-time'};
    }
    /**
     * Set return_to_time value
     * @param string $return_to_time
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_to_time(?string $return_to_time = null): self
    {
        // validation for constraint: string
        if (!is_null($return_to_time) && !is_string($return_to_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_to_time, true), gettype($return_to_time)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{2}:[0-9]{2})
        if (!is_null($return_to_time) && !preg_match('/[0-9]{2}:[0-9]{2}/', (string) $return_to_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{2}:[0-9]{2}/', var_export($return_to_time, true)), __LINE__);
        }
        $this->return_to_time = $this->{'return-to-time'} = $return_to_time;
        
        return $this;
    }
    /**
     * Get return_to_city_code value
     * @return string|null
     */
    public function getReturn_to_city_code(): ?string
    {
        return $this->{'return-to-city-code'};
    }
    /**
     * Set return_to_city_code value
     * @param string $return_to_city_code
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_to_city_code(?string $return_to_city_code = null): self
    {
        // validation for constraint: string
        if (!is_null($return_to_city_code) && !is_string($return_to_city_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_to_city_code, true), gettype($return_to_city_code)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($return_to_city_code) && mb_strlen((string) $return_to_city_code) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $return_to_city_code)), __LINE__);
        }
        $this->return_to_city_code = $this->{'return-to-city-code'} = $return_to_city_code;
        
        return $this;
    }
    /**
     * Get return_to_city_desc value
     * @return string|null
     */
    public function getReturn_to_city_desc(): ?string
    {
        return $this->{'return-to-city-desc'};
    }
    /**
     * Set return_to_city_desc value
     * @param string $return_to_city_desc
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_to_city_desc(?string $return_to_city_desc = null): self
    {
        // validation for constraint: string
        if (!is_null($return_to_city_desc) && !is_string($return_to_city_desc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_to_city_desc, true), gettype($return_to_city_desc)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($return_to_city_desc) && mb_strlen((string) $return_to_city_desc) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $return_to_city_desc)), __LINE__);
        }
        $this->return_to_city_desc = $this->{'return-to-city-desc'} = $return_to_city_desc;
        
        return $this;
    }
    /**
     * Get return_seat value
     * @return string|null
     */
    public function getReturn_seat(): ?string
    {
        return $this->{'return-seat'};
    }
    /**
     * Set return_seat value
     * @param string $return_seat
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_seat(?string $return_seat = null): self
    {
        // validation for constraint: string
        if (!is_null($return_seat) && !is_string($return_seat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_seat, true), gettype($return_seat)), __LINE__);
        }
        $this->return_seat = $this->{'return-seat'} = $return_seat;
        
        return $this;
    }
    /**
     * Get return_platform value
     * @return string|null
     */
    public function getReturn_platform(): ?string
    {
        return $this->{'return-platform'};
    }
    /**
     * Set return_platform value
     * @param string $return_platform
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setReturn_platform(?string $return_platform = null): self
    {
        // validation for constraint: string
        if (!is_null($return_platform) && !is_string($return_platform)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return_platform, true), gettype($return_platform)), __LINE__);
        }
        $this->return_platform = $this->{'return-platform'} = $return_platform;
        
        return $this;
    }
    /**
     * Get transfer value
     * @return string|null
     */
    public function getTransfer(): ?string
    {
        return $this->transfer;
    }
    /**
     * Set transfer value
     * @param string $transfer
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
     */
    public function setTransfer(?string $transfer = null): self
    {
        // validation for constraint: string
        if (!is_null($transfer) && !is_string($transfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transfer, true), gettype($transfer)), __LINE__);
        }
        $this->transfer = $transfer;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Bus_service_type
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
}
