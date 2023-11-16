<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustomerBookingsResponse StructType
 * @subpackage Structs
 */
class SearchCustomerBookingsResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking[]
     */
    protected array $MidocoCustomerBooking = [];
    /**
     * Constructor method for SearchCustomerBookingsResponse
     * @uses SearchCustomerBookingsResponse::setMidocoCustomerBooking()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking[] $midocoCustomerBooking
     */
    public function __construct(array $midocoCustomerBooking = [])
    {
        $this
            ->setMidocoCustomerBooking($midocoCustomerBooking);
    }
    /**
     * Get MidocoCustomerBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking[]
     */
    public function getMidocoCustomerBooking(): array
    {
        return $this->MidocoCustomerBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerBookingForArrayConstraintsFromSetMidocoCustomerBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCustomerBookingsResponseMidocoCustomerBookingItem) {
            // validation for constraint: itemType
            if (!$searchCustomerBookingsResponseMidocoCustomerBookingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking) {
                $invalidValues[] = is_object($searchCustomerBookingsResponseMidocoCustomerBookingItem) ? get_class($searchCustomerBookingsResponseMidocoCustomerBookingItem) : sprintf('%s(%s)', gettype($searchCustomerBookingsResponseMidocoCustomerBookingItem), var_export($searchCustomerBookingsResponseMidocoCustomerBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking[] $midocoCustomerBooking
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsResponse
     */
    public function setMidocoCustomerBooking(array $midocoCustomerBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerBookingArrayErrorMessage = self::validateMidocoCustomerBookingForArrayConstraintsFromSetMidocoCustomerBooking($midocoCustomerBooking))) {
            throw new InvalidArgumentException($midocoCustomerBookingArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerBooking = $midocoCustomerBooking;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsResponse
     */
    public function addToMidocoCustomerBooking(\Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerBooking[] = $item;
        
        return $this;
    }
}
