<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProcessedBookingsResponse StructType
 * @subpackage Structs
 */
class GetProcessedBookingsResponse extends AbstractStructBase
{
    /**
     * The MidocoProcessedBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProcessedBooking
     * @var \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO[]
     */
    protected array $MidocoProcessedBooking = [];
    /**
     * Constructor method for GetProcessedBookingsResponse
     * @uses GetProcessedBookingsResponse::setMidocoProcessedBooking()
     * @param \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO[] $midocoProcessedBooking
     */
    public function __construct(array $midocoProcessedBooking = [])
    {
        $this
            ->setMidocoProcessedBooking($midocoProcessedBooking);
    }
    /**
     * Get MidocoProcessedBooking value
     * @return \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO[]
     */
    public function getMidocoProcessedBooking(): array
    {
        return $this->MidocoProcessedBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoProcessedBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProcessedBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProcessedBookingForArrayConstraintsFromSetMidocoProcessedBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProcessedBookingsResponseMidocoProcessedBookingItem) {
            // validation for constraint: itemType
            if (!$getProcessedBookingsResponseMidocoProcessedBookingItem instanceof \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO) {
                $invalidValues[] = is_object($getProcessedBookingsResponseMidocoProcessedBookingItem) ? get_class($getProcessedBookingsResponseMidocoProcessedBookingItem) : sprintf('%s(%s)', gettype($getProcessedBookingsResponseMidocoProcessedBookingItem), var_export($getProcessedBookingsResponseMidocoProcessedBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProcessedBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProcessedBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO[] $midocoProcessedBooking
     * @return \Pggns\MidocoApi\Order\StructType\GetProcessedBookingsResponse
     */
    public function setMidocoProcessedBooking(array $midocoProcessedBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProcessedBookingArrayErrorMessage = self::validateMidocoProcessedBookingForArrayConstraintsFromSetMidocoProcessedBooking($midocoProcessedBooking))) {
            throw new InvalidArgumentException($midocoProcessedBookingArrayErrorMessage, __LINE__);
        }
        $this->MidocoProcessedBooking = $midocoProcessedBooking;
        
        return $this;
    }
    /**
     * Add item to MidocoProcessedBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetProcessedBookingsResponse
     */
    public function addToMidocoProcessedBooking(\Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoProcessedBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\ProcessedBookingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProcessedBooking[] = $item;
        
        return $this;
    }
}
