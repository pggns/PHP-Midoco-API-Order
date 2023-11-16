<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAmwayMediatorBookingsResponse StructType
 * @subpackage Structs
 */
class GetAmwayMediatorBookingsResponse extends AbstractStructBase
{
    /**
     * The AmwayMediatorBookings
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings[]
     */
    protected array $AmwayMediatorBookings = [];
    /**
     * Constructor method for GetAmwayMediatorBookingsResponse
     * @uses GetAmwayMediatorBookingsResponse::setAmwayMediatorBookings()
     * @param \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings[] $amwayMediatorBookings
     */
    public function __construct(array $amwayMediatorBookings = [])
    {
        $this
            ->setAmwayMediatorBookings($amwayMediatorBookings);
    }
    /**
     * Get AmwayMediatorBookings value
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings[]
     */
    public function getAmwayMediatorBookings(): array
    {
        return $this->AmwayMediatorBookings;
    }
    /**
     * This method is responsible for validating the values passed to the setAmwayMediatorBookings method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAmwayMediatorBookings method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAmwayMediatorBookingsForArrayConstraintsFromSetAmwayMediatorBookings(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAmwayMediatorBookingsResponseAmwayMediatorBookingsItem) {
            // validation for constraint: itemType
            if (!$getAmwayMediatorBookingsResponseAmwayMediatorBookingsItem instanceof \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings) {
                $invalidValues[] = is_object($getAmwayMediatorBookingsResponseAmwayMediatorBookingsItem) ? get_class($getAmwayMediatorBookingsResponseAmwayMediatorBookingsItem) : sprintf('%s(%s)', gettype($getAmwayMediatorBookingsResponseAmwayMediatorBookingsItem), var_export($getAmwayMediatorBookingsResponseAmwayMediatorBookingsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AmwayMediatorBookings property can only contain items of type \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AmwayMediatorBookings value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings[] $amwayMediatorBookings
     * @return \Pggns\MidocoApi\Order\StructType\GetAmwayMediatorBookingsResponse
     */
    public function setAmwayMediatorBookings(array $amwayMediatorBookings = []): self
    {
        // validation for constraint: array
        if ('' !== ($amwayMediatorBookingsArrayErrorMessage = self::validateAmwayMediatorBookingsForArrayConstraintsFromSetAmwayMediatorBookings($amwayMediatorBookings))) {
            throw new InvalidArgumentException($amwayMediatorBookingsArrayErrorMessage, __LINE__);
        }
        $this->AmwayMediatorBookings = $amwayMediatorBookings;
        
        return $this;
    }
    /**
     * Add item to AmwayMediatorBookings value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAmwayMediatorBookingsResponse
     */
    public function addToAmwayMediatorBookings(\Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings) {
            throw new InvalidArgumentException(sprintf('The AmwayMediatorBookings property can only contain items of type \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AmwayMediatorBookings[] = $item;
        
        return $this;
    }
}
