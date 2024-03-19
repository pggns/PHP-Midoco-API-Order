<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPositionsForDocumentIdResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getBillingPositionsForDocumentId --- returns the billing positions corresponding to e document id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingPositionsForDocumentIdResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingPositionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPositionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType[]
     */
    protected ?array $MidocoBillingPositionInfo = null;
    /**
     * Constructor method for GetBillingPositionsForDocumentIdResponse
     * @uses GetBillingPositionsForDocumentIdResponse::setMidocoBillingPositionInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType[] $midocoBillingPositionInfo
     */
    public function __construct(?array $midocoBillingPositionInfo = null)
    {
        $this
            ->setMidocoBillingPositionInfo($midocoBillingPositionInfo);
    }
    /**
     * Get MidocoBillingPositionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType[]
     */
    public function getMidocoBillingPositionInfo(): ?array
    {
        return $this->MidocoBillingPositionInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingPositionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPositionInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionInfoForArrayConstraintFromSetMidocoBillingPositionInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingPositionsForDocumentIdResponseMidocoBillingPositionInfoItem) {
            // validation for constraint: itemType
            if (!$getBillingPositionsForDocumentIdResponseMidocoBillingPositionInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType) {
                $invalidValues[] = is_object($getBillingPositionsForDocumentIdResponseMidocoBillingPositionInfoItem) ? get_class($getBillingPositionsForDocumentIdResponseMidocoBillingPositionInfoItem) : sprintf('%s(%s)', gettype($getBillingPositionsForDocumentIdResponseMidocoBillingPositionInfoItem), var_export($getBillingPositionsForDocumentIdResponseMidocoBillingPositionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPositionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPositionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType[] $midocoBillingPositionInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositionsForDocumentIdResponse
     */
    public function setMidocoBillingPositionInfo(?array $midocoBillingPositionInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionInfoArrayErrorMessage = self::validateMidocoBillingPositionInfoForArrayConstraintFromSetMidocoBillingPositionInfo($midocoBillingPositionInfo))) {
            throw new InvalidArgumentException($midocoBillingPositionInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPositionInfo = $midocoBillingPositionInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPositionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositionsForDocumentIdResponse
     */
    public function addToMidocoBillingPositionInfo(\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPositionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPositionInfo[] = $item;
        
        return $this;
    }
}
