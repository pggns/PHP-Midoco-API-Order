<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegmentDetailDTO StructType
 * @subpackage Structs
 */
class FlightSegmentDetailDTO extends AbstractStructBase
{
    /**
     * The allowPrinting
     * @var bool|null
     */
    protected ?bool $allowPrinting = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The flightPosition
     * @var int|null
     */
    protected ?int $flightPosition = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The pa
     * @var string|null
     */
    protected ?string $pa = null;
    /**
     * The passenger
     * @var int|null
     */
    protected ?int $passenger = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The seat
     * @var string|null
     */
    protected ?string $seat = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for FlightSegmentDetailDTO
     * @uses FlightSegmentDetailDTO::setAllowPrinting()
     * @uses FlightSegmentDetailDTO::setCode()
     * @uses FlightSegmentDetailDTO::setDescription()
     * @uses FlightSegmentDetailDTO::setFlightPosition()
     * @uses FlightSegmentDetailDTO::setItemId()
     * @uses FlightSegmentDetailDTO::setPa()
     * @uses FlightSegmentDetailDTO::setPassenger()
     * @uses FlightSegmentDetailDTO::setPosition()
     * @uses FlightSegmentDetailDTO::setSeat()
     * @uses FlightSegmentDetailDTO::setStatus()
     * @param bool $allowPrinting
     * @param string $code
     * @param string $description
     * @param int $flightPosition
     * @param int $itemId
     * @param string $pa
     * @param int $passenger
     * @param int $position
     * @param string $seat
     * @param string $status
     */
    public function __construct(?bool $allowPrinting = null, ?string $code = null, ?string $description = null, ?int $flightPosition = null, ?int $itemId = null, ?string $pa = null, ?int $passenger = null, ?int $position = null, ?string $seat = null, ?string $status = null)
    {
        $this
            ->setAllowPrinting($allowPrinting)
            ->setCode($code)
            ->setDescription($description)
            ->setFlightPosition($flightPosition)
            ->setItemId($itemId)
            ->setPa($pa)
            ->setPassenger($passenger)
            ->setPosition($position)
            ->setSeat($seat)
            ->setStatus($status);
    }
    /**
     * Get allowPrinting value
     * @return bool|null
     */
    public function getAllowPrinting(): ?bool
    {
        return $this->allowPrinting;
    }
    /**
     * Set allowPrinting value
     * @param bool $allowPrinting
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
     */
    public function setAllowPrinting(?bool $allowPrinting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowPrinting) && !is_bool($allowPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowPrinting, true), gettype($allowPrinting)), __LINE__);
        }
        $this->allowPrinting = $allowPrinting;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
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
     * Get flightPosition value
     * @return int|null
     */
    public function getFlightPosition(): ?int
    {
        return $this->flightPosition;
    }
    /**
     * Set flightPosition value
     * @param int $flightPosition
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
     */
    public function setFlightPosition(?int $flightPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($flightPosition) && !(is_int($flightPosition) || ctype_digit($flightPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flightPosition, true), gettype($flightPosition)), __LINE__);
        }
        $this->flightPosition = $flightPosition;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get pa value
     * @return string|null
     */
    public function getPa(): ?string
    {
        return $this->pa;
    }
    /**
     * Set pa value
     * @param string $pa
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
     */
    public function setPa(?string $pa = null): self
    {
        // validation for constraint: string
        if (!is_null($pa) && !is_string($pa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pa, true), gettype($pa)), __LINE__);
        }
        $this->pa = $pa;
        
        return $this;
    }
    /**
     * Get passenger value
     * @return int|null
     */
    public function getPassenger(): ?int
    {
        return $this->passenger;
    }
    /**
     * Set passenger value
     * @param int $passenger
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
     */
    public function setPassenger(?int $passenger = null): self
    {
        // validation for constraint: int
        if (!is_null($passenger) && !(is_int($passenger) || ctype_digit($passenger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passenger, true), gettype($passenger)), __LINE__);
        }
        $this->passenger = $passenger;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
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
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegmentDetailDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
