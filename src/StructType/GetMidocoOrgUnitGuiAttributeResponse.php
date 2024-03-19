<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoOrgUnitGuiAttributeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoOrgUnitGuiAttributeResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunitGuiAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgunitGuiAttribute
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute[]
     */
    protected ?array $MidocoOrgunitGuiAttribute = null;
    /**
     * Constructor method for GetMidocoOrgUnitGuiAttributeResponse
     * @uses GetMidocoOrgUnitGuiAttributeResponse::setMidocoOrgunitGuiAttribute()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute[] $midocoOrgunitGuiAttribute
     */
    public function __construct(?array $midocoOrgunitGuiAttribute = null)
    {
        $this
            ->setMidocoOrgunitGuiAttribute($midocoOrgunitGuiAttribute);
    }
    /**
     * Get MidocoOrgunitGuiAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute[]
     */
    public function getMidocoOrgunitGuiAttribute(): ?array
    {
        return $this->MidocoOrgunitGuiAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrgunitGuiAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunitGuiAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitGuiAttributeForArrayConstraintFromSetMidocoOrgunitGuiAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoOrgUnitGuiAttributeResponseMidocoOrgunitGuiAttributeItem) {
            // validation for constraint: itemType
            if (!$getMidocoOrgUnitGuiAttributeResponseMidocoOrgunitGuiAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute) {
                $invalidValues[] = is_object($getMidocoOrgUnitGuiAttributeResponseMidocoOrgunitGuiAttributeItem) ? get_class($getMidocoOrgUnitGuiAttributeResponseMidocoOrgunitGuiAttributeItem) : sprintf('%s(%s)', gettype($getMidocoOrgUnitGuiAttributeResponseMidocoOrgunitGuiAttributeItem), var_export($getMidocoOrgUnitGuiAttributeResponseMidocoOrgunitGuiAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunitGuiAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunitGuiAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute[] $midocoOrgunitGuiAttribute
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoOrgUnitGuiAttributeResponse
     */
    public function setMidocoOrgunitGuiAttribute(?array $midocoOrgunitGuiAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitGuiAttributeArrayErrorMessage = self::validateMidocoOrgunitGuiAttributeForArrayConstraintFromSetMidocoOrgunitGuiAttribute($midocoOrgunitGuiAttribute))) {
            throw new InvalidArgumentException($midocoOrgunitGuiAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunitGuiAttribute = $midocoOrgunitGuiAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunitGuiAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoOrgUnitGuiAttributeResponse
     */
    public function addToMidocoOrgunitGuiAttribute(\Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunitGuiAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunitGuiAttribute[] = $item;
        
        return $this;
    }
}
