<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for insurance-service-type StructType
 * @subpackage Structs
 */
class Insurance_service_type extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The tariff_code
     * @var string|null
     */
    protected ?string $tariff_code = null;
    /**
     * The tariff_description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tariff_description = null;
    /**
     * The persons_per_service
     * @var string|null
     */
    protected ?string $persons_per_service = null;
    /**
     * The no_of_services
     * @var int|null
     */
    protected ?int $no_of_services = null;
    /**
     * The valid_start
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $valid_start = null;
    /**
     * The valid_end
     * @var string|null
     */
    protected ?string $valid_end = null;
    /**
     * The person_assignment
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The service_status
     * @var string|null
     */
    protected ?string $service_status = null;
    /**
     * The total_price
     * @var float|null
     */
    protected ?float $total_price = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The is_annual
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $is_annual = null;
    /**
     * The annual_valid_to
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $annual_valid_to = null;
    /**
     * Constructor method for insurance-service-type
     * @uses Insurance_service_type::setPosition()
     * @uses Insurance_service_type::setTariff_code()
     * @uses Insurance_service_type::setTariff_description()
     * @uses Insurance_service_type::setPersons_per_service()
     * @uses Insurance_service_type::setNo_of_services()
     * @uses Insurance_service_type::setValid_start()
     * @uses Insurance_service_type::setValid_end()
     * @uses Insurance_service_type::setPerson_assignment()
     * @uses Insurance_service_type::setService_status()
     * @uses Insurance_service_type::setTotal_price()
     * @uses Insurance_service_type::setCurrency()
     * @uses Insurance_service_type::setIs_annual()
     * @uses Insurance_service_type::setAnnual_valid_to()
     * @param int $position
     * @param string $tariff_code
     * @param string $tariff_description
     * @param string $persons_per_service
     * @param int $no_of_services
     * @param string $valid_start
     * @param string $valid_end
     * @param string $person_assignment
     * @param string $service_status
     * @param float $total_price
     * @param string $currency
     * @param bool $is_annual
     * @param string $annual_valid_to
     */
    public function __construct(int $position, ?string $tariff_code = null, ?string $tariff_description = null, ?string $persons_per_service = null, ?int $no_of_services = null, ?string $valid_start = null, ?string $valid_end = null, ?string $person_assignment = null, ?string $service_status = null, ?float $total_price = null, ?string $currency = null, ?bool $is_annual = null, ?string $annual_valid_to = null)
    {
        $this
            ->setPosition($position)
            ->setTariff_code($tariff_code)
            ->setTariff_description($tariff_description)
            ->setPersons_per_service($persons_per_service)
            ->setNo_of_services($no_of_services)
            ->setValid_start($valid_start)
            ->setValid_end($valid_end)
            ->setPerson_assignment($person_assignment)
            ->setService_status($service_status)
            ->setTotal_price($total_price)
            ->setCurrency($currency)
            ->setIs_annual($is_annual)
            ->setAnnual_valid_to($annual_valid_to);
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
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
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
     * Get tariff_description value
     * @return string|null
     */
    public function getTariff_description(): ?string
    {
        return $this->{'tariff-description'};
    }
    /**
     * Set tariff_description value
     * @param string $tariff_description
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
     */
    public function setTariff_description(?string $tariff_description = null): self
    {
        // validation for constraint: string
        if (!is_null($tariff_description) && !is_string($tariff_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariff_description, true), gettype($tariff_description)), __LINE__);
        }
        $this->tariff_description = $this->{'tariff-description'} = $tariff_description;
        
        return $this;
    }
    /**
     * Get persons_per_service value
     * @return string|null
     */
    public function getPersons_per_service(): ?string
    {
        return $this->{'persons-per-service'};
    }
    /**
     * Set persons_per_service value
     * @param string $persons_per_service
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
     */
    public function setPersons_per_service(?string $persons_per_service = null): self
    {
        // validation for constraint: string
        if (!is_null($persons_per_service) && !is_string($persons_per_service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($persons_per_service, true), gettype($persons_per_service)), __LINE__);
        }
        $this->persons_per_service = $this->{'persons-per-service'} = $persons_per_service;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
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
     * Get valid_start value
     * @return string|null
     */
    public function getValid_start(): ?string
    {
        return $this->{'valid-start'};
    }
    /**
     * Set valid_start value
     * @param string $valid_start
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
     */
    public function setValid_start(?string $valid_start = null): self
    {
        // validation for constraint: string
        if (!is_null($valid_start) && !is_string($valid_start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valid_start, true), gettype($valid_start)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($valid_start) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $valid_start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($valid_start, true)), __LINE__);
        }
        $this->valid_start = $this->{'valid-start'} = $valid_start;
        
        return $this;
    }
    /**
     * Get valid_end value
     * @return string|null
     */
    public function getValid_end(): ?string
    {
        return $this->{'valid-end'};
    }
    /**
     * Set valid_end value
     * @param string $valid_end
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
     */
    public function setValid_end(?string $valid_end = null): self
    {
        // validation for constraint: string
        if (!is_null($valid_end) && !is_string($valid_end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valid_end, true), gettype($valid_end)), __LINE__);
        }
        $this->valid_end = $this->{'valid-end'} = $valid_end;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
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
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
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
     * Get is_annual value
     * @return bool|null
     */
    public function getIs_annual(): ?bool
    {
        return $this->{'is-annual'};
    }
    /**
     * Set is_annual value
     * @param bool $is_annual
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
     */
    public function setIs_annual(?bool $is_annual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($is_annual) && !is_bool($is_annual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_annual, true), gettype($is_annual)), __LINE__);
        }
        $this->is_annual = $this->{'is-annual'} = $is_annual;
        
        return $this;
    }
    /**
     * Get annual_valid_to value
     * @return string|null
     */
    public function getAnnual_valid_to(): ?string
    {
        return $this->{'annual-valid-to'};
    }
    /**
     * Set annual_valid_to value
     * @param string $annual_valid_to
     * @return \Pggns\MidocoApi\Order\StructType\Insurance_service_type
     */
    public function setAnnual_valid_to(?string $annual_valid_to = null): self
    {
        // validation for constraint: string
        if (!is_null($annual_valid_to) && !is_string($annual_valid_to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($annual_valid_to, true), gettype($annual_valid_to)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($annual_valid_to) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $annual_valid_to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($annual_valid_to, true)), __LINE__);
        }
        $this->annual_valid_to = $this->{'annual-valid-to'} = $annual_valid_to;
        
        return $this;
    }
}
