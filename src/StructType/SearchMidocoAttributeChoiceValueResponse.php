<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMidocoAttributeChoiceValueResponse StructType
 * @subpackage Structs
 */
class SearchMidocoAttributeChoiceValueResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSystemAttributeChoiceValue
     * @var \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO[]
     */
    protected array $MidocoSystemAttributeChoiceValue = [];
    /**
     * Constructor method for SearchMidocoAttributeChoiceValueResponse
     * @uses SearchMidocoAttributeChoiceValueResponse::setMidocoSystemAttributeChoiceValue()
     * @param \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO[] $midocoSystemAttributeChoiceValue
     */
    public function __construct(array $midocoSystemAttributeChoiceValue = [])
    {
        $this
            ->setMidocoSystemAttributeChoiceValue($midocoSystemAttributeChoiceValue);
    }
    /**
     * Get MidocoSystemAttributeChoiceValue value
     * @return \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO[]
     */
    public function getMidocoSystemAttributeChoiceValue(): array
    {
        return $this->MidocoSystemAttributeChoiceValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSystemAttributeChoiceValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSystemAttributeChoiceValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSystemAttributeChoiceValueForArrayConstraintsFromSetMidocoSystemAttributeChoiceValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMidocoAttributeChoiceValueResponseMidocoSystemAttributeChoiceValueItem) {
            // validation for constraint: itemType
            if (!$searchMidocoAttributeChoiceValueResponseMidocoSystemAttributeChoiceValueItem instanceof \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO) {
                $invalidValues[] = is_object($searchMidocoAttributeChoiceValueResponseMidocoSystemAttributeChoiceValueItem) ? get_class($searchMidocoAttributeChoiceValueResponseMidocoSystemAttributeChoiceValueItem) : sprintf('%s(%s)', gettype($searchMidocoAttributeChoiceValueResponseMidocoSystemAttributeChoiceValueItem), var_export($searchMidocoAttributeChoiceValueResponseMidocoSystemAttributeChoiceValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSystemAttributeChoiceValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSystemAttributeChoiceValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO[] $midocoSystemAttributeChoiceValue
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAttributeChoiceValueResponse
     */
    public function setMidocoSystemAttributeChoiceValue(array $midocoSystemAttributeChoiceValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSystemAttributeChoiceValueArrayErrorMessage = self::validateMidocoSystemAttributeChoiceValueForArrayConstraintsFromSetMidocoSystemAttributeChoiceValue($midocoSystemAttributeChoiceValue))) {
            throw new InvalidArgumentException($midocoSystemAttributeChoiceValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoSystemAttributeChoiceValue = $midocoSystemAttributeChoiceValue;
        
        return $this;
    }
    /**
     * Add item to MidocoSystemAttributeChoiceValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAttributeChoiceValueResponse
     */
    public function addToMidocoSystemAttributeChoiceValue(\Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSystemAttributeChoiceValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSystemAttributeChoiceValue[] = $item;
        
        return $this;
    }
}
