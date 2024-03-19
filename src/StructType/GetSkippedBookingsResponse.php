<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSkippedBookingsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSkippedBookingsResponse extends AbstractStructBase
{
    /**
     * The MidocoSkippedBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSkippedBooking
     * @var \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO[]
     */
    protected ?array $MidocoSkippedBooking = null;
    /**
     * Constructor method for GetSkippedBookingsResponse
     * @uses GetSkippedBookingsResponse::setMidocoSkippedBooking()
     * @param \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO[] $midocoSkippedBooking
     */
    public function __construct(?array $midocoSkippedBooking = null)
    {
        $this
            ->setMidocoSkippedBooking($midocoSkippedBooking);
    }
    /**
     * Get MidocoSkippedBooking value
     * @return \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO[]
     */
    public function getMidocoSkippedBooking(): ?array
    {
        return $this->MidocoSkippedBooking;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSkippedBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSkippedBooking method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSkippedBookingForArrayConstraintFromSetMidocoSkippedBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSkippedBookingsResponseMidocoSkippedBookingItem) {
            // validation for constraint: itemType
            if (!$getSkippedBookingsResponseMidocoSkippedBookingItem instanceof \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO) {
                $invalidValues[] = is_object($getSkippedBookingsResponseMidocoSkippedBookingItem) ? get_class($getSkippedBookingsResponseMidocoSkippedBookingItem) : sprintf('%s(%s)', gettype($getSkippedBookingsResponseMidocoSkippedBookingItem), var_export($getSkippedBookingsResponseMidocoSkippedBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSkippedBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSkippedBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO[] $midocoSkippedBooking
     * @return \Pggns\MidocoApi\Order\StructType\GetSkippedBookingsResponse
     */
    public function setMidocoSkippedBooking(?array $midocoSkippedBooking = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSkippedBookingArrayErrorMessage = self::validateMidocoSkippedBookingForArrayConstraintFromSetMidocoSkippedBooking($midocoSkippedBooking))) {
            throw new InvalidArgumentException($midocoSkippedBookingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSkippedBooking = $midocoSkippedBooking;
        
        return $this;
    }
    /**
     * Add item to MidocoSkippedBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSkippedBookingsResponse
     */
    public function addToMidocoSkippedBooking(\Pggns\MidocoApi\Order\StructType\SkippedBookingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSkippedBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\SkippedBookingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSkippedBooking[] = $item;
        
        return $this;
    }
}
