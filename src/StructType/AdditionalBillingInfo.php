<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalBillingInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdditionalBillingInfo extends AbstractStructBase
{
    /**
     * The TravelerRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TravelerRefId
     * @var int[]
     */
    protected ?array $TravelerRefId = null;
    /**
     * The BookingPositionRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BookingPositionRefId
     * @var int[]
     */
    protected ?array $BookingPositionRefId = null;
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
     * Constructor method for AdditionalBillingInfo
     * @uses AdditionalBillingInfo::setTravelerRefId()
     * @uses AdditionalBillingInfo::setBookingPositionRefId()
     * @uses AdditionalBillingInfo::setName()
     * @uses AdditionalBillingInfo::setValue()
     * @param int[] $travelerRefId
     * @param int[] $bookingPositionRefId
     * @param string $name
     * @param string $value
     */
    public function __construct(?array $travelerRefId = null, ?array $bookingPositionRefId = null, ?string $name = null, ?string $value = null)
    {
        $this
            ->setTravelerRefId($travelerRefId)
            ->setBookingPositionRefId($bookingPositionRefId)
            ->setName($name)
            ->setValue($value);
    }
    /**
     * Get TravelerRefId value
     * @return int[]
     */
    public function getTravelerRefId(): ?array
    {
        return $this->TravelerRefId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelerRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelerRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerRefIdForArrayConstraintFromSetTravelerRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $additionalBillingInfoTravelerRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($additionalBillingInfoTravelerRefIdItem) || ctype_digit($additionalBillingInfoTravelerRefIdItem))) {
                $invalidValues[] = is_object($additionalBillingInfoTravelerRefIdItem) ? get_class($additionalBillingInfoTravelerRefIdItem) : sprintf('%s(%s)', gettype($additionalBillingInfoTravelerRefIdItem), var_export($additionalBillingInfoTravelerRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelerRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TravelerRefId value
     * @throws InvalidArgumentException
     * @param int[] $travelerRefId
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo
     */
    public function setTravelerRefId(?array $travelerRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelerRefIdArrayErrorMessage = self::validateTravelerRefIdForArrayConstraintFromSetTravelerRefId($travelerRefId))) {
            throw new InvalidArgumentException($travelerRefIdArrayErrorMessage, __LINE__);
        }
        $this->TravelerRefId = $travelerRefId;
        
        return $this;
    }
    /**
     * Add item to TravelerRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo
     */
    public function addToTravelerRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The TravelerRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TravelerRefId[] = $item;
        
        return $this;
    }
    /**
     * Get BookingPositionRefId value
     * @return int[]
     */
    public function getBookingPositionRefId(): ?array
    {
        return $this->BookingPositionRefId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingPositionRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingPositionRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingPositionRefIdForArrayConstraintFromSetBookingPositionRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $additionalBillingInfoBookingPositionRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($additionalBillingInfoBookingPositionRefIdItem) || ctype_digit($additionalBillingInfoBookingPositionRefIdItem))) {
                $invalidValues[] = is_object($additionalBillingInfoBookingPositionRefIdItem) ? get_class($additionalBillingInfoBookingPositionRefIdItem) : sprintf('%s(%s)', gettype($additionalBillingInfoBookingPositionRefIdItem), var_export($additionalBillingInfoBookingPositionRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingPositionRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingPositionRefId value
     * @throws InvalidArgumentException
     * @param int[] $bookingPositionRefId
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo
     */
    public function setBookingPositionRefId(?array $bookingPositionRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingPositionRefIdArrayErrorMessage = self::validateBookingPositionRefIdForArrayConstraintFromSetBookingPositionRefId($bookingPositionRefId))) {
            throw new InvalidArgumentException($bookingPositionRefIdArrayErrorMessage, __LINE__);
        }
        $this->BookingPositionRefId = $bookingPositionRefId;
        
        return $this;
    }
    /**
     * Add item to BookingPositionRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo
     */
    public function addToBookingPositionRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The BookingPositionRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BookingPositionRefId[] = $item;
        
        return $this;
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
     * @uses \Pggns\MidocoApi\Order\EnumType\AdditionalBillingInfoNameType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\AdditionalBillingInfoNameType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\AdditionalBillingInfoNameType::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\AdditionalBillingInfoNameType', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\AdditionalBillingInfoNameType::getValidValues())), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalBillingInfo
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
}
