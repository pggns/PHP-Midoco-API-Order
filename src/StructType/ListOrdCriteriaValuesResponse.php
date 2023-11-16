<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListOrdCriteriaValuesResponse StructType
 * @subpackage Structs
 */
class ListOrdCriteriaValuesResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaValue
     * @var \Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO[]
     */
    protected array $MidocoOrdCriteriaValue = [];
    /**
     * Constructor method for ListOrdCriteriaValuesResponse
     * @uses ListOrdCriteriaValuesResponse::setMidocoOrdCriteriaValue()
     * @param \Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO[] $midocoOrdCriteriaValue
     */
    public function __construct(array $midocoOrdCriteriaValue = [])
    {
        $this
            ->setMidocoOrdCriteriaValue($midocoOrdCriteriaValue);
    }
    /**
     * Get MidocoOrdCriteriaValue value
     * @return \Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO[]
     */
    public function getMidocoOrdCriteriaValue(): array
    {
        return $this->MidocoOrdCriteriaValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaValueForArrayConstraintsFromSetMidocoOrdCriteriaValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listOrdCriteriaValuesResponseMidocoOrdCriteriaValueItem) {
            // validation for constraint: itemType
            if (!$listOrdCriteriaValuesResponseMidocoOrdCriteriaValueItem instanceof \Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO) {
                $invalidValues[] = is_object($listOrdCriteriaValuesResponseMidocoOrdCriteriaValueItem) ? get_class($listOrdCriteriaValuesResponseMidocoOrdCriteriaValueItem) : sprintf('%s(%s)', gettype($listOrdCriteriaValuesResponseMidocoOrdCriteriaValueItem), var_export($listOrdCriteriaValuesResponseMidocoOrdCriteriaValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO[] $midocoOrdCriteriaValue
     * @return \Pggns\MidocoApi\Order\StructType\ListOrdCriteriaValuesResponse
     */
    public function setMidocoOrdCriteriaValue(array $midocoOrdCriteriaValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaValueArrayErrorMessage = self::validateMidocoOrdCriteriaValueForArrayConstraintsFromSetMidocoOrdCriteriaValue($midocoOrdCriteriaValue))) {
            throw new InvalidArgumentException($midocoOrdCriteriaValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaValue = $midocoOrdCriteriaValue;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\ListOrdCriteriaValuesResponse
     */
    public function addToMidocoOrdCriteriaValue(\Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrdCriteriaValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaValue[] = $item;
        
        return $this;
    }
}
