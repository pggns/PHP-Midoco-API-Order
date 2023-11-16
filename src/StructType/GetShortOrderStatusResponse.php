<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShortOrderStatusResponse StructType
 * @subpackage Structs
 */
class GetShortOrderStatusResponse extends AbstractStructBase
{
    /**
     * The bookingStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\BookingStatus[]
     */
    protected array $bookingStatus = [];
    /**
     * Constructor method for GetShortOrderStatusResponse
     * @uses GetShortOrderStatusResponse::setBookingStatus()
     * @param \Pggns\MidocoApi\Order\StructType\BookingStatus[] $bookingStatus
     */
    public function __construct(array $bookingStatus = [])
    {
        $this
            ->setBookingStatus($bookingStatus);
    }
    /**
     * Get bookingStatus value
     * @return \Pggns\MidocoApi\Order\StructType\BookingStatus[]
     */
    public function getBookingStatus(): array
    {
        return $this->bookingStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingStatusForArrayConstraintsFromSetBookingStatus(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getShortOrderStatusResponseBookingStatusItem) {
            // validation for constraint: itemType
            if (!$getShortOrderStatusResponseBookingStatusItem instanceof \Pggns\MidocoApi\Order\StructType\BookingStatus) {
                $invalidValues[] = is_object($getShortOrderStatusResponseBookingStatusItem) ? get_class($getShortOrderStatusResponseBookingStatusItem) : sprintf('%s(%s)', gettype($getShortOrderStatusResponseBookingStatusItem), var_export($getShortOrderStatusResponseBookingStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The bookingStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\BookingStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set bookingStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BookingStatus[] $bookingStatus
     * @return \Pggns\MidocoApi\Order\StructType\GetShortOrderStatusResponse
     */
    public function setBookingStatus(array $bookingStatus = []): self
    {
        // validation for constraint: array
        if ('' !== ($bookingStatusArrayErrorMessage = self::validateBookingStatusForArrayConstraintsFromSetBookingStatus($bookingStatus))) {
            throw new InvalidArgumentException($bookingStatusArrayErrorMessage, __LINE__);
        }
        $this->bookingStatus = $bookingStatus;
        
        return $this;
    }
    /**
     * Add item to bookingStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BookingStatus $item
     * @return \Pggns\MidocoApi\Order\StructType\GetShortOrderStatusResponse
     */
    public function addToBookingStatus(\Pggns\MidocoApi\Order\StructType\BookingStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BookingStatus) {
            throw new InvalidArgumentException(sprintf('The bookingStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\BookingStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->bookingStatus[] = $item;
        
        return $this;
    }
}
