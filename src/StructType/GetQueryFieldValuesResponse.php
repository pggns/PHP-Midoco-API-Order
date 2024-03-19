<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQueryFieldValuesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetQueryFieldValuesResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryFieldValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoQueryFieldValue
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue[]
     */
    protected ?array $MidocoQueryFieldValue = null;
    /**
     * Constructor method for GetQueryFieldValuesResponse
     * @uses GetQueryFieldValuesResponse::setMidocoQueryFieldValue()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue[] $midocoQueryFieldValue
     */
    public function __construct(?array $midocoQueryFieldValue = null)
    {
        $this
            ->setMidocoQueryFieldValue($midocoQueryFieldValue);
    }
    /**
     * Get MidocoQueryFieldValue value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue[]
     */
    public function getMidocoQueryFieldValue(): ?array
    {
        return $this->MidocoQueryFieldValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoQueryFieldValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryFieldValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryFieldValueForArrayConstraintFromSetMidocoQueryFieldValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getQueryFieldValuesResponseMidocoQueryFieldValueItem) {
            // validation for constraint: itemType
            if (!$getQueryFieldValuesResponseMidocoQueryFieldValueItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue) {
                $invalidValues[] = is_object($getQueryFieldValuesResponseMidocoQueryFieldValueItem) ? get_class($getQueryFieldValuesResponseMidocoQueryFieldValueItem) : sprintf('%s(%s)', gettype($getQueryFieldValuesResponseMidocoQueryFieldValueItem), var_export($getQueryFieldValuesResponseMidocoQueryFieldValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryFieldValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryFieldValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue[] $midocoQueryFieldValue
     * @return \Pggns\MidocoApi\Order\StructType\GetQueryFieldValuesResponse
     */
    public function setMidocoQueryFieldValue(?array $midocoQueryFieldValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryFieldValueArrayErrorMessage = self::validateMidocoQueryFieldValueForArrayConstraintFromSetMidocoQueryFieldValue($midocoQueryFieldValue))) {
            throw new InvalidArgumentException($midocoQueryFieldValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryFieldValue = $midocoQueryFieldValue;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryFieldValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue $item
     * @return \Pggns\MidocoApi\Order\StructType\GetQueryFieldValuesResponse
     */
    public function addToMidocoQueryFieldValue(\Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryFieldValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryFieldValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryFieldValue[] = $item;
        
        return $this;
    }
}
