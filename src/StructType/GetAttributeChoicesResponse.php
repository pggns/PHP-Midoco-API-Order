<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttributeChoicesResponse StructType
 * @subpackage Structs
 */
class GetAttributeChoicesResponse extends AbstractStructBase
{
    /**
     * The MidocoAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAttributeChoiceValue
     * @var \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO[]
     */
    protected array $MidocoAttributeChoiceValue = [];
    /**
     * Constructor method for GetAttributeChoicesResponse
     * @uses GetAttributeChoicesResponse::setMidocoAttributeChoiceValue()
     * @param \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO[] $midocoAttributeChoiceValue
     */
    public function __construct(array $midocoAttributeChoiceValue = [])
    {
        $this
            ->setMidocoAttributeChoiceValue($midocoAttributeChoiceValue);
    }
    /**
     * Get MidocoAttributeChoiceValue value
     * @return \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO[]
     */
    public function getMidocoAttributeChoiceValue(): array
    {
        return $this->MidocoAttributeChoiceValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAttributeChoiceValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAttributeChoiceValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAttributeChoiceValueForArrayConstraintsFromSetMidocoAttributeChoiceValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAttributeChoicesResponseMidocoAttributeChoiceValueItem) {
            // validation for constraint: itemType
            if (!$getAttributeChoicesResponseMidocoAttributeChoiceValueItem instanceof \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO) {
                $invalidValues[] = is_object($getAttributeChoicesResponseMidocoAttributeChoiceValueItem) ? get_class($getAttributeChoicesResponseMidocoAttributeChoiceValueItem) : sprintf('%s(%s)', gettype($getAttributeChoicesResponseMidocoAttributeChoiceValueItem), var_export($getAttributeChoicesResponseMidocoAttributeChoiceValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAttributeChoiceValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAttributeChoiceValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO[] $midocoAttributeChoiceValue
     * @return \Pggns\MidocoApi\Order\StructType\GetAttributeChoicesResponse
     */
    public function setMidocoAttributeChoiceValue(array $midocoAttributeChoiceValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAttributeChoiceValueArrayErrorMessage = self::validateMidocoAttributeChoiceValueForArrayConstraintsFromSetMidocoAttributeChoiceValue($midocoAttributeChoiceValue))) {
            throw new InvalidArgumentException($midocoAttributeChoiceValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoAttributeChoiceValue = $midocoAttributeChoiceValue;
        
        return $this;
    }
    /**
     * Add item to MidocoAttributeChoiceValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAttributeChoicesResponse
     */
    public function addToMidocoAttributeChoiceValue(\Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAttributeChoiceValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAttributeChoiceValue[] = $item;
        
        return $this;
    }
}
