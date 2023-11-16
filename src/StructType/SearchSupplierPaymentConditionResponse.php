<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierPaymentConditionResponse StructType
 * @subpackage Structs
 */
class SearchSupplierPaymentConditionResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierPaymentCondition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[]
     */
    protected array $MidocoSupplierPaymentCondition = [];
    /**
     * Constructor method for SearchSupplierPaymentConditionResponse
     * @uses SearchSupplierPaymentConditionResponse::setMidocoSupplierPaymentCondition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[] $midocoSupplierPaymentCondition
     */
    public function __construct(array $midocoSupplierPaymentCondition = [])
    {
        $this
            ->setMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition);
    }
    /**
     * Get MidocoSupplierPaymentCondition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[]
     */
    public function getMidocoSupplierPaymentCondition(): array
    {
        return $this->MidocoSupplierPaymentCondition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierPaymentCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierPaymentCondition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierPaymentConditionForArrayConstraintsFromSetMidocoSupplierPaymentCondition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem) {
            // validation for constraint: itemType
            if (!$searchSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition) {
                $invalidValues[] = is_object($searchSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem) ? get_class($searchSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem) : sprintf('%s(%s)', gettype($searchSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem), var_export($searchSupplierPaymentConditionResponseMidocoSupplierPaymentConditionItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierPaymentConditionResponse
     */
    public function setMidocoSupplierPaymentCondition(array $midocoSupplierPaymentCondition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierPaymentConditionArrayErrorMessage = self::validateMidocoSupplierPaymentConditionForArrayConstraintsFromSetMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition))) {
            throw new InvalidArgumentException($midocoSupplierPaymentConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierPaymentCondition = $midocoSupplierPaymentCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierPaymentConditionResponse
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
