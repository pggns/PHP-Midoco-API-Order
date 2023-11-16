<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmwayMediatorBookings StructType
 * @subpackage Structs
 */
class AmwayMediatorBookings extends AbstractStructBase
{
    /**
     * The AmwayMediatorBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking[]
     */
    protected array $AmwayMediatorBooking = [];
    /**
     * The amwayMediator
     * @var string|null
     */
    protected ?string $amwayMediator = null;
    /**
     * Constructor method for AmwayMediatorBookings
     * @uses AmwayMediatorBookings::setAmwayMediatorBooking()
     * @uses AmwayMediatorBookings::setAmwayMediator()
     * @param \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking[] $amwayMediatorBooking
     * @param string $amwayMediator
     */
    public function __construct(array $amwayMediatorBooking = [], ?string $amwayMediator = null)
    {
        $this
            ->setAmwayMediatorBooking($amwayMediatorBooking)
            ->setAmwayMediator($amwayMediator);
    }
    /**
     * Get AmwayMediatorBooking value
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking[]
     */
    public function getAmwayMediatorBooking(): array
    {
        return $this->AmwayMediatorBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setAmwayMediatorBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAmwayMediatorBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAmwayMediatorBookingForArrayConstraintsFromSetAmwayMediatorBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $amwayMediatorBookingsAmwayMediatorBookingItem) {
            // validation for constraint: itemType
            if (!$amwayMediatorBookingsAmwayMediatorBookingItem instanceof \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking) {
                $invalidValues[] = is_object($amwayMediatorBookingsAmwayMediatorBookingItem) ? get_class($amwayMediatorBookingsAmwayMediatorBookingItem) : sprintf('%s(%s)', gettype($amwayMediatorBookingsAmwayMediatorBookingItem), var_export($amwayMediatorBookingsAmwayMediatorBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AmwayMediatorBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AmwayMediatorBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking[] $amwayMediatorBooking
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings
     */
    public function setAmwayMediatorBooking(array $amwayMediatorBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($amwayMediatorBookingArrayErrorMessage = self::validateAmwayMediatorBookingForArrayConstraintsFromSetAmwayMediatorBooking($amwayMediatorBooking))) {
            throw new InvalidArgumentException($amwayMediatorBookingArrayErrorMessage, __LINE__);
        }
        $this->AmwayMediatorBooking = $amwayMediatorBooking;
        
        return $this;
    }
    /**
     * Add item to AmwayMediatorBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking $item
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings
     */
    public function addToAmwayMediatorBooking(\Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking) {
            throw new InvalidArgumentException(sprintf('The AmwayMediatorBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\AmwayMediatorBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AmwayMediatorBooking[] = $item;
        
        return $this;
    }
    /**
     * Get amwayMediator value
     * @return string|null
     */
    public function getAmwayMediator(): ?string
    {
        return $this->amwayMediator;
    }
    /**
     * Set amwayMediator value
     * @param string $amwayMediator
     * @return \Pggns\MidocoApi\Order\StructType\AmwayMediatorBookings
     */
    public function setAmwayMediator(?string $amwayMediator = null): self
    {
        // validation for constraint: string
        if (!is_null($amwayMediator) && !is_string($amwayMediator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amwayMediator, true), gettype($amwayMediator)), __LINE__);
        }
        $this->amwayMediator = $amwayMediator;
        
        return $this;
    }
}
