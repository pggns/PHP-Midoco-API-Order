<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFlightSegmentDetails StructType
 * @subpackage Structs
 */
class MidocoFlightSegmentDetails extends FlightSegmentDetailDTO
{
    /**
     * The MidocoExtendedSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExtendedSellPassenger
     * @var \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger[]
     */
    protected array $MidocoExtendedSellPassenger = [];
    /**
     * Constructor method for MidocoFlightSegmentDetails
     * @uses MidocoFlightSegmentDetails::setMidocoExtendedSellPassenger()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger[] $midocoExtendedSellPassenger
     */
    public function __construct(array $midocoExtendedSellPassenger = [])
    {
        $this
            ->setMidocoExtendedSellPassenger($midocoExtendedSellPassenger);
    }
    /**
     * Get MidocoExtendedSellPassenger value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger[]
     */
    public function getMidocoExtendedSellPassenger(): array
    {
        return $this->MidocoExtendedSellPassenger;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoExtendedSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExtendedSellPassenger method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExtendedSellPassengerForArrayConstraintsFromSetMidocoExtendedSellPassenger(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoFlightSegmentDetailsMidocoExtendedSellPassengerItem) {
            // validation for constraint: itemType
            if (!$midocoFlightSegmentDetailsMidocoExtendedSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger) {
                $invalidValues[] = is_object($midocoFlightSegmentDetailsMidocoExtendedSellPassengerItem) ? get_class($midocoFlightSegmentDetailsMidocoExtendedSellPassengerItem) : sprintf('%s(%s)', gettype($midocoFlightSegmentDetailsMidocoExtendedSellPassengerItem), var_export($midocoFlightSegmentDetailsMidocoExtendedSellPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExtendedSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExtendedSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger[] $midocoExtendedSellPassenger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails
     */
    public function setMidocoExtendedSellPassenger(array $midocoExtendedSellPassenger = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExtendedSellPassengerArrayErrorMessage = self::validateMidocoExtendedSellPassengerForArrayConstraintsFromSetMidocoExtendedSellPassenger($midocoExtendedSellPassenger))) {
            throw new InvalidArgumentException($midocoExtendedSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoExtendedSellPassenger = $midocoExtendedSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoExtendedSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails
     */
    public function addToMidocoExtendedSellPassenger(\Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger) {
            throw new InvalidArgumentException(sprintf('The MidocoExtendedSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoExtendedSellPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExtendedSellPassenger[] = $item;
        
        return $this;
    }
}
