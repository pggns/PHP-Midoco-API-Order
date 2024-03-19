<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierCancelConditionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierCancelConditionResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierCancelCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierCancelCondition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition[]
     */
    protected ?array $MidocoSupplierCancelCondition = null;
    /**
     * Constructor method for GetSupplierCancelConditionResponse
     * @uses GetSupplierCancelConditionResponse::setMidocoSupplierCancelCondition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition[] $midocoSupplierCancelCondition
     */
    public function __construct(?array $midocoSupplierCancelCondition = null)
    {
        $this
            ->setMidocoSupplierCancelCondition($midocoSupplierCancelCondition);
    }
    /**
     * Get MidocoSupplierCancelCondition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition[]
     */
    public function getMidocoSupplierCancelCondition(): ?array
    {
        return $this->MidocoSupplierCancelCondition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierCancelCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierCancelCondition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierCancelConditionForArrayConstraintFromSetMidocoSupplierCancelCondition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierCancelConditionResponseMidocoSupplierCancelConditionItem) {
            // validation for constraint: itemType
            if (!$getSupplierCancelConditionResponseMidocoSupplierCancelConditionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition) {
                $invalidValues[] = is_object($getSupplierCancelConditionResponseMidocoSupplierCancelConditionItem) ? get_class($getSupplierCancelConditionResponseMidocoSupplierCancelConditionItem) : sprintf('%s(%s)', gettype($getSupplierCancelConditionResponseMidocoSupplierCancelConditionItem), var_export($getSupplierCancelConditionResponseMidocoSupplierCancelConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierCancelCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierCancelCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition[] $midocoSupplierCancelCondition
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCancelConditionResponse
     */
    public function setMidocoSupplierCancelCondition(?array $midocoSupplierCancelCondition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierCancelConditionArrayErrorMessage = self::validateMidocoSupplierCancelConditionForArrayConstraintFromSetMidocoSupplierCancelCondition($midocoSupplierCancelCondition))) {
            throw new InvalidArgumentException($midocoSupplierCancelConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierCancelCondition = $midocoSupplierCancelCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierCancelCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCancelConditionResponse
     */
    public function addToMidocoSupplierCancelCondition(\Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierCancelCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierCancelCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierCancelCondition[] = $item;
        
        return $this;
    }
}
