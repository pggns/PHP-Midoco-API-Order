<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemRevenuesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: retrieve all preparedRevenueBookings and revenueBookings of this sellItem
 * @subpackage Structs
 */
class GetSellItemRevenuesResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType $MidocoBookingInfo = null;
    /**
     * The MidocoPreparedRevenueBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPreparedRevenueBooking
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking[]
     */
    protected array $MidocoPreparedRevenueBooking = [];
    /**
     * Constructor method for GetSellItemRevenuesResponse
     * @uses GetSellItemRevenuesResponse::setMidocoBookingInfo()
     * @uses GetSellItemRevenuesResponse::setMidocoPreparedRevenueBooking()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType $midocoBookingInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking[] $midocoPreparedRevenueBooking
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType $midocoBookingInfo = null, array $midocoPreparedRevenueBooking = [])
    {
        $this
            ->setMidocoBookingInfo($midocoBookingInfo)
            ->setMidocoPreparedRevenueBooking($midocoPreparedRevenueBooking);
    }
    /**
     * Get MidocoBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType|null
     */
    public function getMidocoBookingInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType
    {
        return $this->MidocoBookingInfo;
    }
    /**
     * Set MidocoBookingInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType $midocoBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemRevenuesResponse
     */
    public function setMidocoBookingInfo(?\Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType $midocoBookingInfo = null): self
    {
        $this->MidocoBookingInfo = $midocoBookingInfo;
        
        return $this;
    }
    /**
     * Get MidocoPreparedRevenueBooking value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking[]
     */
    public function getMidocoPreparedRevenueBooking(): array
    {
        return $this->MidocoPreparedRevenueBooking;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPreparedRevenueBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPreparedRevenueBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPreparedRevenueBookingForArrayConstraintsFromSetMidocoPreparedRevenueBooking(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellItemRevenuesResponseMidocoPreparedRevenueBookingItem) {
            // validation for constraint: itemType
            if (!$getSellItemRevenuesResponseMidocoPreparedRevenueBookingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking) {
                $invalidValues[] = is_object($getSellItemRevenuesResponseMidocoPreparedRevenueBookingItem) ? get_class($getSellItemRevenuesResponseMidocoPreparedRevenueBookingItem) : sprintf('%s(%s)', gettype($getSellItemRevenuesResponseMidocoPreparedRevenueBookingItem), var_export($getSellItemRevenuesResponseMidocoPreparedRevenueBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPreparedRevenueBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPreparedRevenueBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking[] $midocoPreparedRevenueBooking
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemRevenuesResponse
     */
    public function setMidocoPreparedRevenueBooking(array $midocoPreparedRevenueBooking = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPreparedRevenueBookingArrayErrorMessage = self::validateMidocoPreparedRevenueBookingForArrayConstraintsFromSetMidocoPreparedRevenueBooking($midocoPreparedRevenueBooking))) {
            throw new InvalidArgumentException($midocoPreparedRevenueBookingArrayErrorMessage, __LINE__);
        }
        $this->MidocoPreparedRevenueBooking = $midocoPreparedRevenueBooking;
        
        return $this;
    }
    /**
     * Add item to MidocoPreparedRevenueBooking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemRevenuesResponse
     */
    public function addToMidocoPreparedRevenueBooking(\Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking) {
            throw new InvalidArgumentException(sprintf('The MidocoPreparedRevenueBooking property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPreparedRevenueBooking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPreparedRevenueBooking[] = $item;
        
        return $this;
    }
}
