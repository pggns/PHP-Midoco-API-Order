<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConfirmationReceivedSellitemsForSupplierResponse
 * StructType
 * @subpackage Structs
 */
class GetConfirmationReceivedSellitemsForSupplierResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierMailNotReceivedInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierMailNotReceivedInfo
     * @var \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo[]
     */
    protected array $MidocoSupplierMailNotReceivedInfo = [];
    /**
     * Constructor method for GetConfirmationReceivedSellitemsForSupplierResponse
     * @uses GetConfirmationReceivedSellitemsForSupplierResponse::setMidocoSupplierMailNotReceivedInfo()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo[] $midocoSupplierMailNotReceivedInfo
     */
    public function __construct(array $midocoSupplierMailNotReceivedInfo = [])
    {
        $this
            ->setMidocoSupplierMailNotReceivedInfo($midocoSupplierMailNotReceivedInfo);
    }
    /**
     * Get MidocoSupplierMailNotReceivedInfo value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo[]
     */
    public function getMidocoSupplierMailNotReceivedInfo(): array
    {
        return $this->MidocoSupplierMailNotReceivedInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierMailNotReceivedInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierMailNotReceivedInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierMailNotReceivedInfoForArrayConstraintsFromSetMidocoSupplierMailNotReceivedInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getConfirmationReceivedSellitemsForSupplierResponseMidocoSupplierMailNotReceivedInfoItem) {
            // validation for constraint: itemType
            if (!$getConfirmationReceivedSellitemsForSupplierResponseMidocoSupplierMailNotReceivedInfoItem instanceof \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo) {
                $invalidValues[] = is_object($getConfirmationReceivedSellitemsForSupplierResponseMidocoSupplierMailNotReceivedInfoItem) ? get_class($getConfirmationReceivedSellitemsForSupplierResponseMidocoSupplierMailNotReceivedInfoItem) : sprintf('%s(%s)', gettype($getConfirmationReceivedSellitemsForSupplierResponseMidocoSupplierMailNotReceivedInfoItem), var_export($getConfirmationReceivedSellitemsForSupplierResponseMidocoSupplierMailNotReceivedInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierMailNotReceivedInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierMailNotReceivedInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo[] $midocoSupplierMailNotReceivedInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierResponse
     */
    public function setMidocoSupplierMailNotReceivedInfo(array $midocoSupplierMailNotReceivedInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierMailNotReceivedInfoArrayErrorMessage = self::validateMidocoSupplierMailNotReceivedInfoForArrayConstraintsFromSetMidocoSupplierMailNotReceivedInfo($midocoSupplierMailNotReceivedInfo))) {
            throw new InvalidArgumentException($midocoSupplierMailNotReceivedInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierMailNotReceivedInfo = $midocoSupplierMailNotReceivedInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierMailNotReceivedInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetConfirmationReceivedSellitemsForSupplierResponse
     */
    public function addToMidocoSupplierMailNotReceivedInfo(\Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierMailNotReceivedInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierMailNotReceivedInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierMailNotReceivedInfo[] = $item;
        
        return $this;
    }
}
