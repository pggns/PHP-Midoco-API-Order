<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductTypeMediatorConditionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetProductTypeMediatorConditionsResponse extends AbstractStructBase
{
    /**
     * The MidocoProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProductTypeMediatorCondition
     * @var \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO[]
     */
    protected ?array $MidocoProductTypeMediatorCondition = null;
    /**
     * Constructor method for GetProductTypeMediatorConditionsResponse
     * @uses GetProductTypeMediatorConditionsResponse::setMidocoProductTypeMediatorCondition()
     * @param \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO[] $midocoProductTypeMediatorCondition
     */
    public function __construct(?array $midocoProductTypeMediatorCondition = null)
    {
        $this
            ->setMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition);
    }
    /**
     * Get MidocoProductTypeMediatorCondition value
     * @return \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO[]
     */
    public function getMidocoProductTypeMediatorCondition(): ?array
    {
        return $this->MidocoProductTypeMediatorCondition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoProductTypeMediatorCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProductTypeMediatorCondition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProductTypeMediatorConditionForArrayConstraintFromSetMidocoProductTypeMediatorCondition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProductTypeMediatorConditionsResponseMidocoProductTypeMediatorConditionItem) {
            // validation for constraint: itemType
            if (!$getProductTypeMediatorConditionsResponseMidocoProductTypeMediatorConditionItem instanceof \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO) {
                $invalidValues[] = is_object($getProductTypeMediatorConditionsResponseMidocoProductTypeMediatorConditionItem) ? get_class($getProductTypeMediatorConditionsResponseMidocoProductTypeMediatorConditionItem) : sprintf('%s(%s)', gettype($getProductTypeMediatorConditionsResponseMidocoProductTypeMediatorConditionItem), var_export($getProductTypeMediatorConditionsResponseMidocoProductTypeMediatorConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProductTypeMediatorCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProductTypeMediatorCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO[] $midocoProductTypeMediatorCondition
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypeMediatorConditionsResponse
     */
    public function setMidocoProductTypeMediatorCondition(?array $midocoProductTypeMediatorCondition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProductTypeMediatorConditionArrayErrorMessage = self::validateMidocoProductTypeMediatorConditionForArrayConstraintFromSetMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition))) {
            throw new InvalidArgumentException($midocoProductTypeMediatorConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoProductTypeMediatorCondition = $midocoProductTypeMediatorCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoProductTypeMediatorCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypeMediatorConditionsResponse
     */
    public function addToMidocoProductTypeMediatorCondition(\Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoProductTypeMediatorCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProductTypeMediatorCondition[] = $item;
        
        return $this;
    }
}
