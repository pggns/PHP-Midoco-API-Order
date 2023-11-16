<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSubOrdersInfoResponse StructType
 * @subpackage Structs
 */
class GetSubOrdersInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoSubOrderInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSubOrderInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo[]
     */
    protected array $MidocoSubOrderInfo = [];
    /**
     * Constructor method for GetSubOrdersInfoResponse
     * @uses GetSubOrdersInfoResponse::setMidocoSubOrderInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo[] $midocoSubOrderInfo
     */
    public function __construct(array $midocoSubOrderInfo = [])
    {
        $this
            ->setMidocoSubOrderInfo($midocoSubOrderInfo);
    }
    /**
     * Get MidocoSubOrderInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo[]
     */
    public function getMidocoSubOrderInfo(): array
    {
        return $this->MidocoSubOrderInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSubOrderInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSubOrderInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSubOrderInfoForArrayConstraintsFromSetMidocoSubOrderInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSubOrdersInfoResponseMidocoSubOrderInfoItem) {
            // validation for constraint: itemType
            if (!$getSubOrdersInfoResponseMidocoSubOrderInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo) {
                $invalidValues[] = is_object($getSubOrdersInfoResponseMidocoSubOrderInfoItem) ? get_class($getSubOrdersInfoResponseMidocoSubOrderInfoItem) : sprintf('%s(%s)', gettype($getSubOrdersInfoResponseMidocoSubOrderInfoItem), var_export($getSubOrdersInfoResponseMidocoSubOrderInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSubOrderInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSubOrderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo[] $midocoSubOrderInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetSubOrdersInfoResponse
     */
    public function setMidocoSubOrderInfo(array $midocoSubOrderInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSubOrderInfoArrayErrorMessage = self::validateMidocoSubOrderInfoForArrayConstraintsFromSetMidocoSubOrderInfo($midocoSubOrderInfo))) {
            throw new InvalidArgumentException($midocoSubOrderInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoSubOrderInfo = $midocoSubOrderInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoSubOrderInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSubOrdersInfoResponse
     */
    public function addToMidocoSubOrderInfo(\Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoSubOrderInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSubOrderInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSubOrderInfo[] = $item;
        
        return $this;
    }
}
