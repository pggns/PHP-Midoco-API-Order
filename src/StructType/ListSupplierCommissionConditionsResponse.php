<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSupplierCommissionConditionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListSupplierCommissionConditionsResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommissionCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierCommissionCondition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition[]
     */
    protected ?array $MidocoSupplierCommissionCondition = null;
    /**
     * Constructor method for ListSupplierCommissionConditionsResponse
     * @uses ListSupplierCommissionConditionsResponse::setMidocoSupplierCommissionCondition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition[] $midocoSupplierCommissionCondition
     */
    public function __construct(?array $midocoSupplierCommissionCondition = null)
    {
        $this
            ->setMidocoSupplierCommissionCondition($midocoSupplierCommissionCondition);
    }
    /**
     * Get MidocoSupplierCommissionCondition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition[]
     */
    public function getMidocoSupplierCommissionCondition(): ?array
    {
        return $this->MidocoSupplierCommissionCondition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierCommissionCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierCommissionCondition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierCommissionConditionForArrayConstraintFromSetMidocoSupplierCommissionCondition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSupplierCommissionConditionsResponseMidocoSupplierCommissionConditionItem) {
            // validation for constraint: itemType
            if (!$listSupplierCommissionConditionsResponseMidocoSupplierCommissionConditionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition) {
                $invalidValues[] = is_object($listSupplierCommissionConditionsResponseMidocoSupplierCommissionConditionItem) ? get_class($listSupplierCommissionConditionsResponseMidocoSupplierCommissionConditionItem) : sprintf('%s(%s)', gettype($listSupplierCommissionConditionsResponseMidocoSupplierCommissionConditionItem), var_export($listSupplierCommissionConditionsResponseMidocoSupplierCommissionConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierCommissionCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierCommissionCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition[] $midocoSupplierCommissionCondition
     * @return \Pggns\MidocoApi\Order\StructType\ListSupplierCommissionConditionsResponse
     */
    public function setMidocoSupplierCommissionCondition(?array $midocoSupplierCommissionCondition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierCommissionConditionArrayErrorMessage = self::validateMidocoSupplierCommissionConditionForArrayConstraintFromSetMidocoSupplierCommissionCondition($midocoSupplierCommissionCondition))) {
            throw new InvalidArgumentException($midocoSupplierCommissionConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierCommissionCondition = $midocoSupplierCommissionCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierCommissionCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition $item
     * @return \Pggns\MidocoApi\Order\StructType\ListSupplierCommissionConditionsResponse
     */
    public function addToMidocoSupplierCommissionCondition(\Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierCommissionCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierCommissionCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierCommissionCondition[] = $item;
        
        return $this;
    }
}
