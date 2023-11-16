<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersForTravellerResponse StructType
 * @subpackage Structs
 */
class GetOrdersForTravellerResponse extends AbstractStructBase
{
    /**
     * The MidocoTravellerOrderInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravellerOrderInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo[]
     */
    protected array $MidocoTravellerOrderInfo = [];
    /**
     * Constructor method for GetOrdersForTravellerResponse
     * @uses GetOrdersForTravellerResponse::setMidocoTravellerOrderInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo[] $midocoTravellerOrderInfo
     */
    public function __construct(array $midocoTravellerOrderInfo = [])
    {
        $this
            ->setMidocoTravellerOrderInfo($midocoTravellerOrderInfo);
    }
    /**
     * Get MidocoTravellerOrderInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo[]
     */
    public function getMidocoTravellerOrderInfo(): array
    {
        return $this->MidocoTravellerOrderInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravellerOrderInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravellerOrderInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravellerOrderInfoForArrayConstraintsFromSetMidocoTravellerOrderInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdersForTravellerResponseMidocoTravellerOrderInfoItem) {
            // validation for constraint: itemType
            if (!$getOrdersForTravellerResponseMidocoTravellerOrderInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo) {
                $invalidValues[] = is_object($getOrdersForTravellerResponseMidocoTravellerOrderInfoItem) ? get_class($getOrdersForTravellerResponseMidocoTravellerOrderInfoItem) : sprintf('%s(%s)', gettype($getOrdersForTravellerResponseMidocoTravellerOrderInfoItem), var_export($getOrdersForTravellerResponseMidocoTravellerOrderInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravellerOrderInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravellerOrderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo[] $midocoTravellerOrderInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersForTravellerResponse
     */
    public function setMidocoTravellerOrderInfo(array $midocoTravellerOrderInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravellerOrderInfoArrayErrorMessage = self::validateMidocoTravellerOrderInfoForArrayConstraintsFromSetMidocoTravellerOrderInfo($midocoTravellerOrderInfo))) {
            throw new InvalidArgumentException($midocoTravellerOrderInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravellerOrderInfo = $midocoTravellerOrderInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoTravellerOrderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersForTravellerResponse
     */
    public function addToMidocoTravellerOrderInfo(\Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoTravellerOrderInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravellerOrderInfo[] = $item;
        
        return $this;
    }
}
