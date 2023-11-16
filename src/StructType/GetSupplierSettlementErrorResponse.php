<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierSettlementErrorResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: returns the supplier settlement error records
 * @subpackage Structs
 */
class GetSupplierSettlementErrorResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierSettlementInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo[]
     */
    protected array $MidocoSupplierSettlementInfo = [];
    /**
     * Constructor method for GetSupplierSettlementErrorResponse
     * @uses GetSupplierSettlementErrorResponse::setMidocoSupplierSettlementInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo[] $midocoSupplierSettlementInfo
     */
    public function __construct(array $midocoSupplierSettlementInfo = [])
    {
        $this
            ->setMidocoSupplierSettlementInfo($midocoSupplierSettlementInfo);
    }
    /**
     * Get MidocoSupplierSettlementInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo[]
     */
    public function getMidocoSupplierSettlementInfo(): array
    {
        return $this->MidocoSupplierSettlementInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierSettlementInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierSettlementInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierSettlementInfoForArrayConstraintsFromSetMidocoSupplierSettlementInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierSettlementErrorResponseMidocoSupplierSettlementInfoItem) {
            // validation for constraint: itemType
            if (!$getSupplierSettlementErrorResponseMidocoSupplierSettlementInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo) {
                $invalidValues[] = is_object($getSupplierSettlementErrorResponseMidocoSupplierSettlementInfoItem) ? get_class($getSupplierSettlementErrorResponseMidocoSupplierSettlementInfoItem) : sprintf('%s(%s)', gettype($getSupplierSettlementErrorResponseMidocoSupplierSettlementInfoItem), var_export($getSupplierSettlementErrorResponseMidocoSupplierSettlementInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierSettlementInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo[] $midocoSupplierSettlementInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierSettlementErrorResponse
     */
    public function setMidocoSupplierSettlementInfo(array $midocoSupplierSettlementInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierSettlementInfoArrayErrorMessage = self::validateMidocoSupplierSettlementInfoForArrayConstraintsFromSetMidocoSupplierSettlementInfo($midocoSupplierSettlementInfo))) {
            throw new InvalidArgumentException($midocoSupplierSettlementInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierSettlementInfo = $midocoSupplierSettlementInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierSettlementErrorResponse
     */
    public function addToMidocoSupplierSettlementInfo(\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierSettlementInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierSettlementInfo[] = $item;
        
        return $this;
    }
}
