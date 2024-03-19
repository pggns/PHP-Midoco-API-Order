<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnassignedBookingsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getUnassignedBookings --- this method is used to display the inbox. The response is constructed with: - sell-item id - tour operator (for tickets without assigned price-details: the IATA supplier) - traveltype (empty for tickets) -
 * first service (for tickets: the ticket-no) - first traveller - start-travel - end-travel - number of passengers - total-price - status - working-user - working-timestamp (a list of the above records is returned) This method should return the
 * Sell-Items which are marked to be shown in inbox. A SellItem can be edited from this list or attached to an order.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUnassignedBookingsResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType[]
     */
    protected ?array $MidocoBookingInfo = null;
    /**
     * Constructor method for GetUnassignedBookingsResponse
     * @uses GetUnassignedBookingsResponse::setMidocoBookingInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType[] $midocoBookingInfo
     */
    public function __construct(?array $midocoBookingInfo = null)
    {
        $this
            ->setMidocoBookingInfo($midocoBookingInfo);
    }
    /**
     * Get MidocoBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType[]
     */
    public function getMidocoBookingInfo(): ?array
    {
        return $this->MidocoBookingInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingInfoForArrayConstraintFromSetMidocoBookingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUnassignedBookingsResponseMidocoBookingInfoItem) {
            // validation for constraint: itemType
            if (!$getUnassignedBookingsResponseMidocoBookingInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType) {
                $invalidValues[] = is_object($getUnassignedBookingsResponseMidocoBookingInfoItem) ? get_class($getUnassignedBookingsResponseMidocoBookingInfoItem) : sprintf('%s(%s)', gettype($getUnassignedBookingsResponseMidocoBookingInfoItem), var_export($getUnassignedBookingsResponseMidocoBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType[] $midocoBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetUnassignedBookingsResponse
     */
    public function setMidocoBookingInfo(?array $midocoBookingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingInfoArrayErrorMessage = self::validateMidocoBookingInfoForArrayConstraintFromSetMidocoBookingInfo($midocoBookingInfo))) {
            throw new InvalidArgumentException($midocoBookingInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingInfo = $midocoBookingInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetUnassignedBookingsResponse
     */
    public function addToMidocoBookingInfo(\Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingInfo[] = $item;
        
        return $this;
    }
}
