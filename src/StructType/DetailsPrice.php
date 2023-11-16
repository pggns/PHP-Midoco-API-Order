<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for detailsPrice StructType
 * @subpackage Structs
 */
class DetailsPrice extends AbstractStructBase
{
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The serviceRef
     * @var int|null
     */
    protected ?int $serviceRef = null;
    /**
     * The passengerAssignment
     * @var string|null
     */
    protected ?string $passengerAssignment = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The singlePrice
     * @var float|null
     */
    protected ?float $singlePrice = null;
    /**
     * The priceMultiply
     * @var int|null
     */
    protected ?int $priceMultiply = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * Constructor method for detailsPrice
     * @uses DetailsPrice::setPosition()
     * @uses DetailsPrice::setServiceRef()
     * @uses DetailsPrice::setPassengerAssignment()
     * @uses DetailsPrice::setDescription()
     * @uses DetailsPrice::setSinglePrice()
     * @uses DetailsPrice::setPriceMultiply()
     * @uses DetailsPrice::setTotalPrice()
     * @param int $position
     * @param int $serviceRef
     * @param string $passengerAssignment
     * @param string $description
     * @param float $singlePrice
     * @param int $priceMultiply
     * @param float $totalPrice
     */
    public function __construct(?int $position = null, ?int $serviceRef = null, ?string $passengerAssignment = null, ?string $description = null, ?float $singlePrice = null, ?int $priceMultiply = null, ?float $totalPrice = null)
    {
        $this
            ->setPosition($position)
            ->setServiceRef($serviceRef)
            ->setPassengerAssignment($passengerAssignment)
            ->setDescription($description)
            ->setSinglePrice($singlePrice)
            ->setPriceMultiply($priceMultiply)
            ->setTotalPrice($totalPrice);
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
     * @return \Pggns\MidocoApi\Order\StructType\DetailsPrice
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
     * Get serviceRef value
     * @return int|null
     */
    public function getServiceRef(): ?int
    {
        return $this->serviceRef;
    }
    /**
     * Set serviceRef value
     * @param int $serviceRef
     * @return \Pggns\MidocoApi\Order\StructType\DetailsPrice
     */
    public function setServiceRef(?int $serviceRef = null): self
    {
        // validation for constraint: int
        if (!is_null($serviceRef) && !(is_int($serviceRef) || ctype_digit($serviceRef))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($serviceRef, true), gettype($serviceRef)), __LINE__);
        }
        $this->serviceRef = $serviceRef;
        
        return $this;
    }
    /**
     * Get passengerAssignment value
     * @return string|null
     */
    public function getPassengerAssignment(): ?string
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param string $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\DetailsPrice
     */
    public function setPassengerAssignment(?string $passengerAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerAssignment) && !is_string($passengerAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DetailsPrice
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
     * Get singlePrice value
     * @return float|null
     */
    public function getSinglePrice(): ?float
    {
        return $this->singlePrice;
    }
    /**
     * Set singlePrice value
     * @param float $singlePrice
     * @return \Pggns\MidocoApi\Order\StructType\DetailsPrice
     */
    public function setSinglePrice(?float $singlePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($singlePrice) && !(is_float($singlePrice) || is_numeric($singlePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($singlePrice, true), gettype($singlePrice)), __LINE__);
        }
        $this->singlePrice = $singlePrice;
        
        return $this;
    }
    /**
     * Get priceMultiply value
     * @return int|null
     */
    public function getPriceMultiply(): ?int
    {
        return $this->priceMultiply;
    }
    /**
     * Set priceMultiply value
     * @param int $priceMultiply
     * @return \Pggns\MidocoApi\Order\StructType\DetailsPrice
     */
    public function setPriceMultiply(?int $priceMultiply = null): self
    {
        // validation for constraint: int
        if (!is_null($priceMultiply) && !(is_int($priceMultiply) || ctype_digit($priceMultiply))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priceMultiply, true), gettype($priceMultiply)), __LINE__);
        }
        $this->priceMultiply = $priceMultiply;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\DetailsPrice
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
}
