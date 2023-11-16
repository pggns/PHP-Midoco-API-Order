<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegment StructType
 * @subpackage Structs
 */
class FlightSegment extends SegmentType
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
     * The bookingDetailId
     * Meta information extracted from the WSDL
     * - documentation: Unique ID for the FlightSegment in the Flight Booking
     * @var int|null
     */
    protected ?int $bookingDetailId = null;
    /**
     * Constructor method for FlightSegment
     * @uses FlightSegment::setTravelerRefId()
     * @uses FlightSegment::setBookingDetailId()
     * @param int[] $travelerRefId
     * @param int $bookingDetailId
     */
    public function __construct(array $travelerRefId = [], ?int $bookingDetailId = null)
    {
        $this
            ->setTravelerRefId($travelerRefId)
            ->setBookingDetailId($bookingDetailId);
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
        foreach ($values as $flightSegmentTravelerRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($flightSegmentTravelerRefIdItem) || ctype_digit($flightSegmentTravelerRefIdItem))) {
                $invalidValues[] = is_object($flightSegmentTravelerRefIdItem) ? get_class($flightSegmentTravelerRefIdItem) : sprintf('%s(%s)', gettype($flightSegmentTravelerRefIdItem), var_export($flightSegmentTravelerRefIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegment
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegment
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
     * Get bookingDetailId value
     * @return int|null
     */
    public function getBookingDetailId(): ?int
    {
        return $this->bookingDetailId;
    }
    /**
     * Set bookingDetailId value
     * @param int $bookingDetailId
     * @return \Pggns\MidocoApi\Order\StructType\FlightSegment
     */
    public function setBookingDetailId(?int $bookingDetailId = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingDetailId) && !(is_int($bookingDetailId) || ctype_digit($bookingDetailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingDetailId, true), gettype($bookingDetailId)), __LINE__);
        }
        $this->bookingDetailId = $bookingDetailId;
        
        return $this;
    }
}
