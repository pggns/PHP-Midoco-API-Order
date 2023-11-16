<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GDSRemark StructType
 * @subpackage Structs
 */
class GDSRemark extends AbstractStructBase
{
    /**
     * The TravelerRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TravelerRefId
     * @var int[]
     */
    protected array $TravelerRefId = [];
    /**
     * The BookingPositionRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BookingPositionRefId
     * @var int[]
     */
    protected array $BookingPositionRefId = [];
    /**
     * The BookingDetailRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BookingDetailRefId
     * @var int[]
     */
    protected array $BookingDetailRefId = [];
    /**
     * The syntaxType
     * @var string|null
     */
    protected ?string $syntaxType = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * Constructor method for GDSRemark
     * @uses GDSRemark::setTravelerRefId()
     * @uses GDSRemark::setBookingPositionRefId()
     * @uses GDSRemark::setBookingDetailRefId()
     * @uses GDSRemark::setSyntaxType()
     * @uses GDSRemark::setText()
     * @param int[] $travelerRefId
     * @param int[] $bookingPositionRefId
     * @param int[] $bookingDetailRefId
     * @param string $syntaxType
     * @param string $text
     */
    public function __construct(array $travelerRefId = [], array $bookingPositionRefId = [], array $bookingDetailRefId = [], ?string $syntaxType = null, ?string $text = null)
    {
        $this
            ->setTravelerRefId($travelerRefId)
            ->setBookingPositionRefId($bookingPositionRefId)
            ->setBookingDetailRefId($bookingDetailRefId)
            ->setSyntaxType($syntaxType)
            ->setText($text);
    }
    /**
     * Get TravelerRefId value
     * @return int[]
     */
    public function getTravelerRefId(): array
    {
        return $this->TravelerRefId;
    }
    /**
     * This method is responsible for validating the values passed to the setTravelerRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelerRefId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerRefIdForArrayConstraintsFromSetTravelerRefId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $gDSRemarkTravelerRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($gDSRemarkTravelerRefIdItem) || ctype_digit($gDSRemarkTravelerRefIdItem))) {
                $invalidValues[] = is_object($gDSRemarkTravelerRefIdItem) ? get_class($gDSRemarkTravelerRefIdItem) : sprintf('%s(%s)', gettype($gDSRemarkTravelerRefIdItem), var_export($gDSRemarkTravelerRefIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GDSRemark
     */
    public function setTravelerRefId(array $travelerRefId = []): self
    {
        // validation for constraint: array
        if ('' !== ($travelerRefIdArrayErrorMessage = self::validateTravelerRefIdForArrayConstraintsFromSetTravelerRefId($travelerRefId))) {
            throw new InvalidArgumentException($travelerRefIdArrayErrorMessage, __LINE__);
        }
        $this->TravelerRefId = $travelerRefId;
        
        return $this;
    }
    /**
     * Add item to TravelerRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GDSRemark
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
    public function getBookingPositionRefId(): array
    {
        return $this->BookingPositionRefId;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingPositionRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingPositionRefId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingPositionRefIdForArrayConstraintsFromSetBookingPositionRefId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $gDSRemarkBookingPositionRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($gDSRemarkBookingPositionRefIdItem) || ctype_digit($gDSRemarkBookingPositionRefIdItem))) {
                $invalidValues[] = is_object($gDSRemarkBookingPositionRefIdItem) ? get_class($gDSRemarkBookingPositionRefIdItem) : sprintf('%s(%s)', gettype($gDSRemarkBookingPositionRefIdItem), var_export($gDSRemarkBookingPositionRefIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GDSRemark
     */
    public function setBookingPositionRefId(array $bookingPositionRefId = []): self
    {
        // validation for constraint: array
        if ('' !== ($bookingPositionRefIdArrayErrorMessage = self::validateBookingPositionRefIdForArrayConstraintsFromSetBookingPositionRefId($bookingPositionRefId))) {
            throw new InvalidArgumentException($bookingPositionRefIdArrayErrorMessage, __LINE__);
        }
        $this->BookingPositionRefId = $bookingPositionRefId;
        
        return $this;
    }
    /**
     * Add item to BookingPositionRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GDSRemark
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
     * Get BookingDetailRefId value
     * @return int[]
     */
    public function getBookingDetailRefId(): array
    {
        return $this->BookingDetailRefId;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingDetailRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingDetailRefId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingDetailRefIdForArrayConstraintsFromSetBookingDetailRefId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $gDSRemarkBookingDetailRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($gDSRemarkBookingDetailRefIdItem) || ctype_digit($gDSRemarkBookingDetailRefIdItem))) {
                $invalidValues[] = is_object($gDSRemarkBookingDetailRefIdItem) ? get_class($gDSRemarkBookingDetailRefIdItem) : sprintf('%s(%s)', gettype($gDSRemarkBookingDetailRefIdItem), var_export($gDSRemarkBookingDetailRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingDetailRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingDetailRefId value
     * @throws InvalidArgumentException
     * @param int[] $bookingDetailRefId
     * @return \Pggns\MidocoApi\Order\StructType\GDSRemark
     */
    public function setBookingDetailRefId(array $bookingDetailRefId = []): self
    {
        // validation for constraint: array
        if ('' !== ($bookingDetailRefIdArrayErrorMessage = self::validateBookingDetailRefIdForArrayConstraintsFromSetBookingDetailRefId($bookingDetailRefId))) {
            throw new InvalidArgumentException($bookingDetailRefIdArrayErrorMessage, __LINE__);
        }
        $this->BookingDetailRefId = $bookingDetailRefId;
        
        return $this;
    }
    /**
     * Add item to BookingDetailRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GDSRemark
     */
    public function addToBookingDetailRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The BookingDetailRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BookingDetailRefId[] = $item;
        
        return $this;
    }
    /**
     * Get syntaxType value
     * @return string|null
     */
    public function getSyntaxType(): ?string
    {
        return $this->syntaxType;
    }
    /**
     * Set syntaxType value
     * @uses \Pggns\MidocoApi\Order\EnumType\GDSRemarkSyntaxType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\GDSRemarkSyntaxType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $syntaxType
     * @return \Pggns\MidocoApi\Order\StructType\GDSRemark
     */
    public function setSyntaxType(?string $syntaxType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\GDSRemarkSyntaxType::valueIsValid($syntaxType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\GDSRemarkSyntaxType', is_array($syntaxType) ? implode(', ', $syntaxType) : var_export($syntaxType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\GDSRemarkSyntaxType::getValidValues())), __LINE__);
        }
        $this->syntaxType = $syntaxType;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\GDSRemark
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
}
