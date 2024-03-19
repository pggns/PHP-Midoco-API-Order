<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierSettlPaymentConditionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchSupplierSettlPaymentConditionResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierSettlPaymentCondition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition[]
     */
    protected ?array $MidocoSupplierSettlPaymentCondition = null;
    /**
     * Constructor method for SearchSupplierSettlPaymentConditionResponse
     * @uses SearchSupplierSettlPaymentConditionResponse::setMidocoSupplierSettlPaymentCondition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition[] $midocoSupplierSettlPaymentCondition
     */
    public function __construct(?array $midocoSupplierSettlPaymentCondition = null)
    {
        $this
            ->setMidocoSupplierSettlPaymentCondition($midocoSupplierSettlPaymentCondition);
    }
    /**
     * Get MidocoSupplierSettlPaymentCondition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition[]
     */
    public function getMidocoSupplierSettlPaymentCondition(): ?array
    {
        return $this->MidocoSupplierSettlPaymentCondition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierSettlPaymentCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierSettlPaymentCondition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierSettlPaymentConditionForArrayConstraintFromSetMidocoSupplierSettlPaymentCondition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem) {
            // validation for constraint: itemType
            if (!$searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition) {
                $invalidValues[] = is_object($searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem) ? get_class($searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem) : sprintf('%s(%s)', gettype($searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem), var_export($searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierSettlPaymentCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierSettlPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition[] $midocoSupplierSettlPaymentCondition
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierSettlPaymentConditionResponse
     */
    public function setMidocoSupplierSettlPaymentCondition(?array $midocoSupplierSettlPaymentCondition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierSettlPaymentConditionArrayErrorMessage = self::validateMidocoSupplierSettlPaymentConditionForArrayConstraintFromSetMidocoSupplierSettlPaymentCondition($midocoSupplierSettlPaymentCondition))) {
            throw new InvalidArgumentException($midocoSupplierSettlPaymentConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierSettlPaymentCondition = $midocoSupplierSettlPaymentCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierSettlPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierSettlPaymentConditionResponse
     */
    public function addToMidocoSupplierSettlPaymentCondition(\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierSettlPaymentCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierSettlPaymentCondition[] = $item;
        
        return $this;
    }
}
