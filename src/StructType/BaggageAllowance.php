<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageAllowance StructType
 * @subpackage Structs
 */
class BaggageAllowance extends AbstractStructBase
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
     * The BookingDetailRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BookingDetailRefId
     * @var int[]
     */
    protected array $BookingDetailRefId = [];
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The maxPieces
     * @var int|null
     */
    protected ?int $maxPieces = null;
    /**
     * The maxWeightPerPiece
     * @var float|null
     */
    protected ?float $maxWeightPerPiece = null;
    /**
     * The weightUnit
     * @var string|null
     */
    protected ?string $weightUnit = null;
    /**
     * Constructor method for BaggageAllowance
     * @uses BaggageAllowance::setTravelerRefId()
     * @uses BaggageAllowance::setBookingDetailRefId()
     * @uses BaggageAllowance::setDescription()
     * @uses BaggageAllowance::setMaxPieces()
     * @uses BaggageAllowance::setMaxWeightPerPiece()
     * @uses BaggageAllowance::setWeightUnit()
     * @param int[] $travelerRefId
     * @param int[] $bookingDetailRefId
     * @param string $description
     * @param int $maxPieces
     * @param float $maxWeightPerPiece
     * @param string $weightUnit
     */
    public function __construct(array $travelerRefId = [], array $bookingDetailRefId = [], ?string $description = null, ?int $maxPieces = null, ?float $maxWeightPerPiece = null, ?string $weightUnit = null)
    {
        $this
            ->setTravelerRefId($travelerRefId)
            ->setBookingDetailRefId($bookingDetailRefId)
            ->setDescription($description)
            ->setMaxPieces($maxPieces)
            ->setMaxWeightPerPiece($maxWeightPerPiece)
            ->setWeightUnit($weightUnit);
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
        foreach ($values as $baggageAllowanceTravelerRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($baggageAllowanceTravelerRefIdItem) || ctype_digit($baggageAllowanceTravelerRefIdItem))) {
                $invalidValues[] = is_object($baggageAllowanceTravelerRefIdItem) ? get_class($baggageAllowanceTravelerRefIdItem) : sprintf('%s(%s)', gettype($baggageAllowanceTravelerRefIdItem), var_export($baggageAllowanceTravelerRefIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowance
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
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowance
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
        foreach ($values as $baggageAllowanceBookingDetailRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($baggageAllowanceBookingDetailRefIdItem) || ctype_digit($baggageAllowanceBookingDetailRefIdItem))) {
                $invalidValues[] = is_object($baggageAllowanceBookingDetailRefIdItem) ? get_class($baggageAllowanceBookingDetailRefIdItem) : sprintf('%s(%s)', gettype($baggageAllowanceBookingDetailRefIdItem), var_export($baggageAllowanceBookingDetailRefIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowance
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
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowance
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
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowance
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
     * Get maxPieces value
     * @return int|null
     */
    public function getMaxPieces(): ?int
    {
        return $this->maxPieces;
    }
    /**
     * Set maxPieces value
     * @param int $maxPieces
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowance
     */
    public function setMaxPieces(?int $maxPieces = null): self
    {
        // validation for constraint: int
        if (!is_null($maxPieces) && !(is_int($maxPieces) || ctype_digit($maxPieces))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxPieces, true), gettype($maxPieces)), __LINE__);
        }
        $this->maxPieces = $maxPieces;
        
        return $this;
    }
    /**
     * Get maxWeightPerPiece value
     * @return float|null
     */
    public function getMaxWeightPerPiece(): ?float
    {
        return $this->maxWeightPerPiece;
    }
    /**
     * Set maxWeightPerPiece value
     * @param float $maxWeightPerPiece
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowance
     */
    public function setMaxWeightPerPiece(?float $maxWeightPerPiece = null): self
    {
        // validation for constraint: float
        if (!is_null($maxWeightPerPiece) && !(is_float($maxWeightPerPiece) || is_numeric($maxWeightPerPiece))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxWeightPerPiece, true), gettype($maxWeightPerPiece)), __LINE__);
        }
        $this->maxWeightPerPiece = $maxWeightPerPiece;
        
        return $this;
    }
    /**
     * Get weightUnit value
     * @return string|null
     */
    public function getWeightUnit(): ?string
    {
        return $this->weightUnit;
    }
    /**
     * Set weightUnit value
     * @uses \Pggns\MidocoApi\Order\EnumType\WeightUnitsType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\WeightUnitsType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $weightUnit
     * @return \Pggns\MidocoApi\Order\StructType\BaggageAllowance
     */
    public function setWeightUnit(?string $weightUnit = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\WeightUnitsType::valueIsValid($weightUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\WeightUnitsType', is_array($weightUnit) ? implode(', ', $weightUnit) : var_export($weightUnit, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\WeightUnitsType::getValidValues())), __LINE__);
        }
        $this->weightUnit = $weightUnit;
        
        return $this;
    }
}
