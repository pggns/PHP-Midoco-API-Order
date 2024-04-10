<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cdf StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Cdf extends AbstractStructBase
{
    /**
     * The cdfName
     * @var string|null
     */
    protected ?string $cdfName = null;
    /**
     * The cdfValue
     * @var string|null
     */
    protected ?string $cdfValue = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * The person_assignment
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The personAssignment
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * Constructor method for Cdf
     * @uses Cdf::setCdfName()
     * @uses Cdf::setCdfValue()
     * @uses Cdf::setBookingPosition()
     * @uses Cdf::setPerson_assignment()
     * @uses Cdf::setPersonAssignment()
     * @param string $cdfName
     * @param string $cdfValue
     * @param int $bookingPosition
     * @param string $person_assignment
     * @param string $personAssignment
     */
    public function __construct(?string $cdfName = null, ?string $cdfValue = null, ?int $bookingPosition = null, ?string $person_assignment = null, ?string $personAssignment = null)
    {
        $this
            ->setCdfName($cdfName)
            ->setCdfValue($cdfValue)
            ->setBookingPosition($bookingPosition)
            ->setPerson_assignment($person_assignment)
            ->setPersonAssignment($personAssignment);
    }
    /**
     * Get cdfName value
     * @return string|null
     */
    public function getCdfName(): ?string
    {
        return $this->cdfName;
    }
    /**
     * Set cdfName value
     * @param string $cdfName
     * @return \Pggns\MidocoApi\Order\StructType\Cdf
     */
    public function setCdfName(?string $cdfName = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfName) && !is_string($cdfName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfName, true), gettype($cdfName)), __LINE__);
        }
        $this->cdfName = $cdfName;
        
        return $this;
    }
    /**
     * Get cdfValue value
     * @return string|null
     */
    public function getCdfValue(): ?string
    {
        return $this->cdfValue;
    }
    /**
     * Set cdfValue value
     * @param string $cdfValue
     * @return \Pggns\MidocoApi\Order\StructType\Cdf
     */
    public function setCdfValue(?string $cdfValue = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfValue) && !is_string($cdfValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfValue, true), gettype($cdfValue)), __LINE__);
        }
        $this->cdfValue = $cdfValue;
        
        return $this;
    }
    /**
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\Cdf
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Cdf
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
     * Get personAssignment value
     * @return string|null
     */
    public function getPersonAssignment(): ?string
    {
        return $this->personAssignment;
    }
    /**
     * Set personAssignment value
     * @param string $personAssignment
     * @return \Pggns\MidocoApi\Order\StructType\Cdf
     */
    public function setPersonAssignment(?string $personAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($personAssignment) && !is_string($personAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personAssignment, true), gettype($personAssignment)), __LINE__);
        }
        $this->personAssignment = $personAssignment;
        
        return $this;
    }
}
