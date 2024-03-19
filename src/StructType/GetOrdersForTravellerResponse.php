<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersForTravellerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
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
    protected ?array $MidocoTravellerOrderInfo = null;
    /**
     * Constructor method for GetOrdersForTravellerResponse
     * @uses GetOrdersForTravellerResponse::setMidocoTravellerOrderInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo[] $midocoTravellerOrderInfo
     */
    public function __construct(?array $midocoTravellerOrderInfo = null)
    {
        $this
            ->setMidocoTravellerOrderInfo($midocoTravellerOrderInfo);
    }
    /**
     * Get MidocoTravellerOrderInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravellerOrderInfo[]
     */
    public function getMidocoTravellerOrderInfo(): ?array
    {
        return $this->MidocoTravellerOrderInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTravellerOrderInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravellerOrderInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravellerOrderInfoForArrayConstraintFromSetMidocoTravellerOrderInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
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
    public function setMidocoTravellerOrderInfo(?array $midocoTravellerOrderInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravellerOrderInfoArrayErrorMessage = self::validateMidocoTravellerOrderInfoForArrayConstraintFromSetMidocoTravellerOrderInfo($midocoTravellerOrderInfo))) {
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
