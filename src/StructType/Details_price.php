<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for details-price StructType
 * @subpackage Structs
 */
class Details_price extends AbstractStructBase
{
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The service_ref
     * @var int|null
     */
    protected ?int $service_ref = null;
    /**
     * The passenger_assignment
     * @var string|null
     */
    protected ?string $passenger_assignment = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The single_price
     * @var float|null
     */
    protected ?float $single_price = null;
    /**
     * The price_multiply
     * @var int|null
     */
    protected ?int $price_multiply = null;
    /**
     * The total_price
     * @var float|null
     */
    protected ?float $total_price = null;
    /**
     * Constructor method for details-price
     * @uses Details_price::setPosition()
     * @uses Details_price::setService_ref()
     * @uses Details_price::setPassenger_assignment()
     * @uses Details_price::setDescription()
     * @uses Details_price::setSingle_price()
     * @uses Details_price::setPrice_multiply()
     * @uses Details_price::setTotal_price()
     * @param int $position
     * @param int $service_ref
     * @param string $passenger_assignment
     * @param string $description
     * @param float $single_price
     * @param int $price_multiply
     * @param float $total_price
     */
    public function __construct(?int $position = null, ?int $service_ref = null, ?string $passenger_assignment = null, ?string $description = null, ?float $single_price = null, ?int $price_multiply = null, ?float $total_price = null)
    {
        $this
            ->setPosition($position)
            ->setService_ref($service_ref)
            ->setPassenger_assignment($passenger_assignment)
            ->setDescription($description)
            ->setSingle_price($single_price)
            ->setPrice_multiply($price_multiply)
            ->setTotal_price($total_price);
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\Details_price
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get service_ref value
     * @return int|null
     */
    public function getService_ref(): ?int
    {
        return $this->{'service-ref'};
    }
    /**
     * Set service_ref value
     * @param int $service_ref
     * @return \Pggns\MidocoApi\Order\StructType\Details_price
     */
    public function setService_ref(?int $service_ref = null): self
    {
        // validation for constraint: int
        if (!is_null($service_ref) && !(is_int($service_ref) || ctype_digit($service_ref))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($service_ref, true), gettype($service_ref)), __LINE__);
        }
        $this->service_ref = $this->{'service-ref'} = $service_ref;
        
        return $this;
    }
    /**
     * Get passenger_assignment value
     * @return string|null
     */
    public function getPassenger_assignment(): ?string
    {
        return $this->{'passenger-assignment'};
    }
    /**
     * Set passenger_assignment value
     * @param string $passenger_assignment
     * @return \Pggns\MidocoApi\Order\StructType\Details_price
     */
    public function setPassenger_assignment(?string $passenger_assignment = null): self
    {
        // validation for constraint: string
        if (!is_null($passenger_assignment) && !is_string($passenger_assignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passenger_assignment, true), gettype($passenger_assignment)), __LINE__);
        }
        $this->passenger_assignment = $this->{'passenger-assignment'} = $passenger_assignment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Details_price
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
     * Get single_price value
     * @return float|null
     */
    public function getSingle_price(): ?float
    {
        return $this->{'single-price'};
    }
    /**
     * Set single_price value
     * @param float $single_price
     * @return \Pggns\MidocoApi\Order\StructType\Details_price
     */
    public function setSingle_price(?float $single_price = null): self
    {
        // validation for constraint: float
        if (!is_null($single_price) && !(is_float($single_price) || is_numeric($single_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($single_price, true), gettype($single_price)), __LINE__);
        }
        $this->single_price = $this->{'single-price'} = $single_price;
        
        return $this;
    }
    /**
     * Get price_multiply value
     * @return int|null
     */
    public function getPrice_multiply(): ?int
    {
        return $this->{'price-multiply'};
    }
    /**
     * Set price_multiply value
     * @param int $price_multiply
     * @return \Pggns\MidocoApi\Order\StructType\Details_price
     */
    public function setPrice_multiply(?int $price_multiply = null): self
    {
        // validation for constraint: int
        if (!is_null($price_multiply) && !(is_int($price_multiply) || ctype_digit($price_multiply))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($price_multiply, true), gettype($price_multiply)), __LINE__);
        }
        $this->price_multiply = $this->{'price-multiply'} = $price_multiply;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Details_price
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
}
