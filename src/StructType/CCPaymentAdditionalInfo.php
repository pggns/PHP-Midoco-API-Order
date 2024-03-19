<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CCPaymentAdditionalInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CCPaymentAdditionalInfo extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The booking_id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $booking_id = null;
    /**
     * The supplier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The person_assignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $person_assignment = null;
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The personAssignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $personAssignment = null;
    /**
     * Constructor method for CCPaymentAdditionalInfo
     * @uses CCPaymentAdditionalInfo::setName()
     * @uses CCPaymentAdditionalInfo::setValue()
     * @uses CCPaymentAdditionalInfo::setBooking_id()
     * @uses CCPaymentAdditionalInfo::setSupplier()
     * @uses CCPaymentAdditionalInfo::setPerson_assignment()
     * @uses CCPaymentAdditionalInfo::setBookingId()
     * @uses CCPaymentAdditionalInfo::setPersonAssignment()
     * @param string $name
     * @param string $value
     * @param string $booking_id
     * @param string $supplier
     * @param string $person_assignment
     * @param string $bookingId
     * @param string $personAssignment
     */
    public function __construct(?string $name = null, ?string $value = null, ?string $booking_id = null, ?string $supplier = null, ?string $person_assignment = null, ?string $bookingId = null, ?string $personAssignment = null)
    {
        $this
            ->setName($name)
            ->setValue($value)
            ->setBooking_id($booking_id)
            ->setSupplier($supplier)
            ->setPerson_assignment($person_assignment)
            ->setBookingId($bookingId)
            ->setPersonAssignment($personAssignment);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @uses \Pggns\MidocoApi\Order\EnumType\Name::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Name::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Name::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Name', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Name::getValidValues())), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get booking_id value
     * @return string|null
     */
    public function getBooking_id(): ?string
    {
        return $this->{'booking-id'};
    }
    /**
     * Set booking_id value
     * @param string $booking_id
     * @return \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo
     */
    public function setBooking_id(?string $booking_id = null): self
    {
        // validation for constraint: string
        if (!is_null($booking_id) && !is_string($booking_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking_id, true), gettype($booking_id)), __LINE__);
        }
        $this->booking_id = $this->{'booking-id'} = $booking_id;
        
        return $this;
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\CCPaymentAdditionalInfo
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
