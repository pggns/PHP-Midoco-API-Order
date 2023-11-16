<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderAccountingInfosResponse StructType
 * @subpackage Structs
 */
class GetOrderAccountingInfosResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderAccountingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderAccountingInfo
     * @var \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO[]
     */
    protected array $MidocoOrderAccountingInfo = [];
    /**
     * Constructor method for GetOrderAccountingInfosResponse
     * @uses GetOrderAccountingInfosResponse::setMidocoOrderAccountingInfo()
     * @param \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO[] $midocoOrderAccountingInfo
     */
    public function __construct(array $midocoOrderAccountingInfo = [])
    {
        $this
            ->setMidocoOrderAccountingInfo($midocoOrderAccountingInfo);
    }
    /**
     * Get MidocoOrderAccountingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO[]
     */
    public function getMidocoOrderAccountingInfo(): array
    {
        return $this->MidocoOrderAccountingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderAccountingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderAccountingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderAccountingInfoForArrayConstraintsFromSetMidocoOrderAccountingInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderAccountingInfosResponseMidocoOrderAccountingInfoItem) {
            // validation for constraint: itemType
            if (!$getOrderAccountingInfosResponseMidocoOrderAccountingInfoItem instanceof \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO) {
                $invalidValues[] = is_object($getOrderAccountingInfosResponseMidocoOrderAccountingInfoItem) ? get_class($getOrderAccountingInfosResponseMidocoOrderAccountingInfoItem) : sprintf('%s(%s)', gettype($getOrderAccountingInfosResponseMidocoOrderAccountingInfoItem), var_export($getOrderAccountingInfosResponseMidocoOrderAccountingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderAccountingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderAccountingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO[] $midocoOrderAccountingInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAccountingInfosResponse
     */
    public function setMidocoOrderAccountingInfo(array $midocoOrderAccountingInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderAccountingInfoArrayErrorMessage = self::validateMidocoOrderAccountingInfoForArrayConstraintsFromSetMidocoOrderAccountingInfo($midocoOrderAccountingInfo))) {
            throw new InvalidArgumentException($midocoOrderAccountingInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderAccountingInfo = $midocoOrderAccountingInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderAccountingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAccountingInfosResponse
     */
    public function addToMidocoOrderAccountingInfo(\Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderAccountingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderAccountingInfoDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderAccountingInfo[] = $item;
        
        return $this;
    }
}
