<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRevenueBookingForSellitemResponse StructType
 * @subpackage Structs
 */
class GetRevenueBookingForSellitemResponse extends AbstractStructBase
{
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[]
     */
    protected array $RevenueBookingInfo = [];
    /**
     * Constructor method for GetRevenueBookingForSellitemResponse
     * @uses GetRevenueBookingForSellitemResponse::setRevenueBookingInfo()
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[] $revenueBookingInfo
     */
    public function __construct(array $revenueBookingInfo = [])
    {
        $this
            ->setRevenueBookingInfo($revenueBookingInfo);
    }
    /**
     * Get RevenueBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[]
     */
    public function getRevenueBookingInfo(): array
    {
        return $this->RevenueBookingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setRevenueBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRevenueBookingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRevenueBookingInfoForArrayConstraintsFromSetRevenueBookingInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRevenueBookingForSellitemResponseRevenueBookingInfoItem) {
            // validation for constraint: itemType
            if (!$getRevenueBookingForSellitemResponseRevenueBookingInfoItem instanceof \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType) {
                $invalidValues[] = is_object($getRevenueBookingForSellitemResponseRevenueBookingInfoItem) ? get_class($getRevenueBookingForSellitemResponseRevenueBookingInfoItem) : sprintf('%s(%s)', gettype($getRevenueBookingForSellitemResponseRevenueBookingInfoItem), var_export($getRevenueBookingForSellitemResponseRevenueBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType[] $revenueBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetRevenueBookingForSellitemResponse
     */
    public function setRevenueBookingInfo(array $revenueBookingInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($revenueBookingInfoArrayErrorMessage = self::validateRevenueBookingInfoForArrayConstraintsFromSetRevenueBookingInfo($revenueBookingInfo))) {
            throw new InvalidArgumentException($revenueBookingInfoArrayErrorMessage, __LINE__);
        }
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
    /**
     * Add item to RevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetRevenueBookingForSellitemResponse
     */
    public function addToRevenueBookingInfo(\Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType) {
            throw new InvalidArgumentException(sprintf('The RevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RevenueBookingInfo[] = $item;
        
        return $this;
    }
}
