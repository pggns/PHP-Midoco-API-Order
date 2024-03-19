<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareSubOrdersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareSubOrdersResponse extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType[]
     */
    protected ?array $MidocoOrder = null;
    /**
     * Constructor method for PrepareSubOrdersResponse
     * @uses PrepareSubOrdersResponse::setMidocoOrder()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType[] $midocoOrder
     */
    public function __construct(?array $midocoOrder = null)
    {
        $this
            ->setMidocoOrder($midocoOrder);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType[]
     */
    public function getMidocoOrder(): ?array
    {
        return $this->MidocoOrder;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrder method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderForArrayConstraintFromSetMidocoOrder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareSubOrdersResponseMidocoOrderItem) {
            // validation for constraint: itemType
            if (!$prepareSubOrdersResponseMidocoOrderItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderType) {
                $invalidValues[] = is_object($prepareSubOrdersResponseMidocoOrderItem) ? get_class($prepareSubOrdersResponseMidocoOrderItem) : sprintf('%s(%s)', gettype($prepareSubOrdersResponseMidocoOrderItem), var_export($prepareSubOrdersResponseMidocoOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType[] $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\PrepareSubOrdersResponse
     */
    public function setMidocoOrder(?array $midocoOrder = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderArrayErrorMessage = self::validateMidocoOrderForArrayConstraintFromSetMidocoOrder($midocoOrder))) {
            throw new InvalidArgumentException($midocoOrderArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Add item to MidocoOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareSubOrdersResponse
     */
    public function addToMidocoOrder(\Pggns\MidocoApi\Order\StructType\MidocoOrderType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderType) {
            throw new InvalidArgumentException(sprintf('The MidocoOrder property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrder[] = $item;
        
        return $this;
    }
}
