<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSeatType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FlightSeatType extends AbstractStructBase
{
    /**
     * The seat
     * @var string|null
     */
    protected ?string $seat = null;
    /**
     * The person_assignment
     * Meta information extracted from the WSDL
     * - documentation: Assigned person from persons section
     * @var int|null
     */
    protected ?int $person_assignment = null;
    /**
     * The personAssignment
     * Meta information extracted from the WSDL
     * - documentation: Assigned person from persons section
     * @var int|null
     */
    protected ?int $personAssignment = null;
    /**
     * Constructor method for FlightSeatType
     * @uses FlightSeatType::setSeat()
     * @uses FlightSeatType::setPerson_assignment()
     * @uses FlightSeatType::setPersonAssignment()
     * @param string $seat
     * @param int $person_assignment
     * @param int $personAssignment
     */
    public function __construct(?string $seat = null, ?int $person_assignment = null, ?int $personAssignment = null)
    {
        $this
            ->setSeat($seat)
            ->setPerson_assignment($person_assignment)
            ->setPersonAssignment($personAssignment);
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightSeatType
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
     * Get person_assignment value
     * @return int|null
     */
    public function getPerson_assignment(): ?int
    {
        return $this->{'person-assignment'};
    }
    /**
     * Set person_assignment value
     * @param int $person_assignment
     * @return \Pggns\MidocoApi\Order\StructType\FlightSeatType
     */
    public function setPerson_assignment(?int $person_assignment = null): self
    {
        // validation for constraint: int
        if (!is_null($person_assignment) && !(is_int($person_assignment) || ctype_digit($person_assignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($person_assignment, true), gettype($person_assignment)), __LINE__);
        }
        $this->person_assignment = $this->{'person-assignment'} = $person_assignment;
        
        return $this;
    }
    /**
     * Get personAssignment value
     * @return int|null
     */
    public function getPersonAssignment(): ?int
    {
        return $this->personAssignment;
    }
    /**
     * Set personAssignment value
     * @param int $personAssignment
     * @return \Pggns\MidocoApi\Order\StructType\FlightSeatType
     */
    public function setPersonAssignment(?int $personAssignment = null): self
    {
        // validation for constraint: int
        if (!is_null($personAssignment) && !(is_int($personAssignment) || ctype_digit($personAssignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personAssignment, true), gettype($personAssignment)), __LINE__);
        }
        $this->personAssignment = $personAssignment;
        
        return $this;
    }
}
