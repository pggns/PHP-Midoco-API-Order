<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierPaymentConditionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierPaymentConditionResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierPaymentCondition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[]
     */
    protected ?array $MidocoSupplierPaymentCondition = null;
    /**
     * Constructor method for GetSupplierPaymentConditionResponse
     * @uses GetSupplierPaymentConditionResponse::setMidocoSupplierPaymentCondition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[] $midocoSupplierPaymentCondition
     */
    public function __construct(?array $midocoSupplierPaymentCondition = null)
    {
        $this
            ->setMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition);
    }
    /**
     * Get MidocoSupplierPaymentCondition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[]
     */
    public function getMidocoSupplierPaymentCondition(): ?array
    {
        return $this->MidocoSupplierPaymentCondition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierPaymentCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierPaymentCondition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierPaymentConditionForArrayConstraintFromSetMidocoSupplierPaymentCondition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem) {
            // validation for constraint: itemType
            if (!$getSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition) {
                $invalidValues[] = is_object($getSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem) ? get_class($getSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem) : sprintf('%s(%s)', gettype($getSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem), var_export($getSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierPaymentCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[] $midocoSupplierPaymentCondition
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierPaymentConditionResponse
     */
    public function setMidocoSupplierPaymentCondition(?array $midocoSupplierPaymentCondition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierPaymentConditionArrayErrorMessage = self::validateMidocoSupplierPaymentConditionForArrayConstraintFromSetMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition))) {
            throw new InvalidArgumentException($midocoSupplierPaymentConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierPaymentCondition = $midocoSupplierPaymentCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierPaymentConditionResponse
     */
    public function addToMidocoSupplierPaymentCondition(\Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierPaymentCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierPaymentCondition[] = $item;
        
        return $this;
    }
}
