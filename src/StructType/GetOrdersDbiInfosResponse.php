<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersDbiInfosResponse StructType
 * @subpackage Structs
 */
class GetOrdersDbiInfosResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdersDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdersDbiInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    protected array $MidocoOrdersDbiInfo = [];
    /**
     * Constructor method for GetOrdersDbiInfosResponse
     * @uses GetOrdersDbiInfosResponse::setMidocoOrdersDbiInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[] $midocoOrdersDbiInfo
     */
    public function __construct(array $midocoOrdersDbiInfo = [])
    {
        $this
            ->setMidocoOrdersDbiInfo($midocoOrdersDbiInfo);
    }
    /**
     * Get MidocoOrdersDbiInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    public function getMidocoOrdersDbiInfo(): array
    {
        return $this->MidocoOrdersDbiInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdersDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdersDbiInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdersDbiInfoForArrayConstraintsFromSetMidocoOrdersDbiInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdersDbiInfosResponseMidocoOrdersDbiInfoItem) {
            // validation for constraint: itemType
            if (!$getOrdersDbiInfosResponseMidocoOrdersDbiInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo) {
                $invalidValues[] = is_object($getOrdersDbiInfosResponseMidocoOrdersDbiInfoItem) ? get_class($getOrdersDbiInfosResponseMidocoOrdersDbiInfoItem) : sprintf('%s(%s)', gettype($getOrdersDbiInfosResponseMidocoOrdersDbiInfoItem), var_export($getOrdersDbiInfosResponseMidocoOrdersDbiInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdersDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdersDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[] $midocoOrdersDbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosResponse
     */
    public function setMidocoOrdersDbiInfo(array $midocoOrdersDbiInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdersDbiInfoArrayErrorMessage = self::validateMidocoOrdersDbiInfoForArrayConstraintsFromSetMidocoOrdersDbiInfo($midocoOrdersDbiInfo))) {
            throw new InvalidArgumentException($midocoOrdersDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdersDbiInfo = $midocoOrdersDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdersDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosResponse
     */
    public function addToMidocoOrdersDbiInfo(\Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdersDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdersDbiInfo[] = $item;
        
        return $this;
    }
}
