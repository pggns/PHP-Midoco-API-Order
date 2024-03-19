<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSequenceValuesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSequenceValuesResponse extends AbstractStructBase
{
    /**
     * The SequenceValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\SequenceContent[]
     */
    protected ?array $SequenceValue = null;
    /**
     * Constructor method for GetSequenceValuesResponse
     * @uses GetSequenceValuesResponse::setSequenceValue()
     * @param \Pggns\MidocoApi\Order\StructType\SequenceContent[] $sequenceValue
     */
    public function __construct(?array $sequenceValue = null)
    {
        $this
            ->setSequenceValue($sequenceValue);
    }
    /**
     * Get SequenceValue value
     * @return \Pggns\MidocoApi\Order\StructType\SequenceContent[]
     */
    public function getSequenceValue(): ?array
    {
        return $this->SequenceValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSequenceValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSequenceValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSequenceValueForArrayConstraintFromSetSequenceValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSequenceValuesResponseSequenceValueItem) {
            // validation for constraint: itemType
            if (!$getSequenceValuesResponseSequenceValueItem instanceof \Pggns\MidocoApi\Order\StructType\SequenceContent) {
                $invalidValues[] = is_object($getSequenceValuesResponseSequenceValueItem) ? get_class($getSequenceValuesResponseSequenceValueItem) : sprintf('%s(%s)', gettype($getSequenceValuesResponseSequenceValueItem), var_export($getSequenceValuesResponseSequenceValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SequenceValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\SequenceContent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SequenceValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SequenceContent[] $sequenceValue
     * @return \Pggns\MidocoApi\Order\StructType\GetSequenceValuesResponse
     */
    public function setSequenceValue(?array $sequenceValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($sequenceValueArrayErrorMessage = self::validateSequenceValueForArrayConstraintFromSetSequenceValue($sequenceValue))) {
            throw new InvalidArgumentException($sequenceValueArrayErrorMessage, __LINE__);
        }
        $this->SequenceValue = $sequenceValue;
        
        return $this;
    }
    /**
     * Add item to SequenceValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SequenceContent $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSequenceValuesResponse
     */
    public function addToSequenceValue(\Pggns\MidocoApi\Order\StructType\SequenceContent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SequenceContent) {
            throw new InvalidArgumentException(sprintf('The SequenceValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\SequenceContent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SequenceValue[] = $item;
        
        return $this;
    }
}
