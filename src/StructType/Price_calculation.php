<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for price_calculation StructType
 * Meta information extracted from the WSDL
 * - documentation: information about the calculation, which lead to the selling price, only informational, not used for further calculation like storno fees
 * @subpackage Structs
 */
class Price_calculation extends AbstractStructBase
{
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The booking_reference
     * @var int|null
     */
    protected ?int $booking_reference = null;
    /**
     * Constructor method for price_calculation
     * @uses Price_calculation::setPosition()
     * @uses Price_calculation::setId()
     * @uses Price_calculation::setType()
     * @uses Price_calculation::setDescription()
     * @uses Price_calculation::setAmount()
     * @uses Price_calculation::setBooking_reference()
     * @param int $position
     * @param string $id
     * @param string $type
     * @param string $description
     * @param float $amount
     * @param int $booking_reference
     */
    public function __construct(?int $position = null, ?string $id = null, ?string $type = null, ?string $description = null, ?float $amount = null, ?int $booking_reference = null)
    {
        $this
            ->setPosition($position)
            ->setId($id)
            ->setType($type)
            ->setDescription($description)
            ->setAmount($amount)
            ->setBooking_reference($booking_reference);
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
     * @return \Pggns\MidocoApi\Order\StructType\Price_calculation
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
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Order\StructType\Price_calculation
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\Price_calculation
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Price_calculation
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
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\Price_calculation
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get booking_reference value
     * @return int|null
     */
    public function getBooking_reference(): ?int
    {
        return $this->booking_reference;
    }
    /**
     * Set booking_reference value
     * @param int $booking_reference
     * @return \Pggns\MidocoApi\Order\StructType\Price_calculation
     */
    public function setBooking_reference(?int $booking_reference = null): self
    {
        // validation for constraint: int
        if (!is_null($booking_reference) && !(is_int($booking_reference) || ctype_digit($booking_reference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($booking_reference, true), gettype($booking_reference)), __LINE__);
        }
        $this->booking_reference = $booking_reference;
        
        return $this;
    }
}
