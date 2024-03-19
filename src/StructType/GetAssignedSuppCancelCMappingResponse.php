<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedSuppCancelCMappingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAssignedSuppCancelCMappingResponse extends AbstractStructBase
{
    /**
     * The MidocoSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSuppCancelCMapping
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping[]
     */
    protected ?array $MidocoSuppCancelCMapping = null;
    /**
     * Constructor method for GetAssignedSuppCancelCMappingResponse
     * @uses GetAssignedSuppCancelCMappingResponse::setMidocoSuppCancelCMapping()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping[] $midocoSuppCancelCMapping
     */
    public function __construct(?array $midocoSuppCancelCMapping = null)
    {
        $this
            ->setMidocoSuppCancelCMapping($midocoSuppCancelCMapping);
    }
    /**
     * Get MidocoSuppCancelCMapping value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping[]
     */
    public function getMidocoSuppCancelCMapping(): ?array
    {
        return $this->MidocoSuppCancelCMapping;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSuppCancelCMapping method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSuppCancelCMapping method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSuppCancelCMappingForArrayConstraintFromSetMidocoSuppCancelCMapping(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedSuppCancelCMappingResponseMidocoSuppCancelCMappingItem) {
            // validation for constraint: itemType
            if (!$getAssignedSuppCancelCMappingResponseMidocoSuppCancelCMappingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping) {
                $invalidValues[] = is_object($getAssignedSuppCancelCMappingResponseMidocoSuppCancelCMappingItem) ? get_class($getAssignedSuppCancelCMappingResponseMidocoSuppCancelCMappingItem) : sprintf('%s(%s)', gettype($getAssignedSuppCancelCMappingResponseMidocoSuppCancelCMappingItem), var_export($getAssignedSuppCancelCMappingResponseMidocoSuppCancelCMappingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSuppCancelCMapping property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSuppCancelCMapping value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping[] $midocoSuppCancelCMapping
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedSuppCancelCMappingResponse
     */
    public function setMidocoSuppCancelCMapping(?array $midocoSuppCancelCMapping = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSuppCancelCMappingArrayErrorMessage = self::validateMidocoSuppCancelCMappingForArrayConstraintFromSetMidocoSuppCancelCMapping($midocoSuppCancelCMapping))) {
            throw new InvalidArgumentException($midocoSuppCancelCMappingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSuppCancelCMapping = $midocoSuppCancelCMapping;
        
        return $this;
    }
    /**
     * Add item to MidocoSuppCancelCMapping value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedSuppCancelCMappingResponse
     */
    public function addToMidocoSuppCancelCMapping(\Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping) {
            throw new InvalidArgumentException(sprintf('The MidocoSuppCancelCMapping property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSuppCancelCMapping, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSuppCancelCMapping[] = $item;
        
        return $this;
    }
}
