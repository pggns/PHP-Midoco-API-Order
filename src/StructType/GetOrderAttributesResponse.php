<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderAttributesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderAttributesResponse extends AbstractStructBase
{
    /**
     * The MidocoAttributeValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAttributeValue
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue[]
     */
    protected ?array $MidocoAttributeValue = null;
    /**
     * Constructor method for GetOrderAttributesResponse
     * @uses GetOrderAttributesResponse::setMidocoAttributeValue()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue[] $midocoAttributeValue
     */
    public function __construct(?array $midocoAttributeValue = null)
    {
        $this
            ->setMidocoAttributeValue($midocoAttributeValue);
    }
    /**
     * Get MidocoAttributeValue value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue[]
     */
    public function getMidocoAttributeValue(): ?array
    {
        return $this->MidocoAttributeValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAttributeValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAttributeValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAttributeValueForArrayConstraintFromSetMidocoAttributeValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderAttributesResponseMidocoAttributeValueItem) {
            // validation for constraint: itemType
            if (!$getOrderAttributesResponseMidocoAttributeValueItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue) {
                $invalidValues[] = is_object($getOrderAttributesResponseMidocoAttributeValueItem) ? get_class($getOrderAttributesResponseMidocoAttributeValueItem) : sprintf('%s(%s)', gettype($getOrderAttributesResponseMidocoAttributeValueItem), var_export($getOrderAttributesResponseMidocoAttributeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAttributeValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue[] $midocoAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAttributesResponse
     */
    public function setMidocoAttributeValue(?array $midocoAttributeValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAttributeValueArrayErrorMessage = self::validateMidocoAttributeValueForArrayConstraintFromSetMidocoAttributeValue($midocoAttributeValue))) {
            throw new InvalidArgumentException($midocoAttributeValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoAttributeValue = $midocoAttributeValue;
        
        return $this;
    }
    /**
     * Add item to MidocoAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderAttributesResponse
     */
    public function addToMidocoAttributeValue(\Pggns\MidocoApi\Order\StructType\MidocoAttributeValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue) {
            throw new InvalidArgumentException(sprintf('The MidocoAttributeValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAttributeValue[] = $item;
        
        return $this;
    }
}
