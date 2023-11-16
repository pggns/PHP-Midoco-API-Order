<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierMappingResponse StructType
 * @subpackage Structs
 */
class GetSupplierMappingResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierMapping
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierMapping
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping[]
     */
    protected array $MidocoSupplierMapping = [];
    /**
     * Constructor method for GetSupplierMappingResponse
     * @uses GetSupplierMappingResponse::setMidocoSupplierMapping()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping[] $midocoSupplierMapping
     */
    public function __construct(array $midocoSupplierMapping = [])
    {
        $this
            ->setMidocoSupplierMapping($midocoSupplierMapping);
    }
    /**
     * Get MidocoSupplierMapping value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping[]
     */
    public function getMidocoSupplierMapping(): array
    {
        return $this->MidocoSupplierMapping;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierMapping method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierMapping method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierMappingForArrayConstraintsFromSetMidocoSupplierMapping(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierMappingResponseMidocoSupplierMappingItem) {
            // validation for constraint: itemType
            if (!$getSupplierMappingResponseMidocoSupplierMappingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping) {
                $invalidValues[] = is_object($getSupplierMappingResponseMidocoSupplierMappingItem) ? get_class($getSupplierMappingResponseMidocoSupplierMappingItem) : sprintf('%s(%s)', gettype($getSupplierMappingResponseMidocoSupplierMappingItem), var_export($getSupplierMappingResponseMidocoSupplierMappingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierMapping property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierMapping value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping[] $midocoSupplierMapping
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierMappingResponse
     */
    public function setMidocoSupplierMapping(array $midocoSupplierMapping = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierMappingArrayErrorMessage = self::validateMidocoSupplierMappingForArrayConstraintsFromSetMidocoSupplierMapping($midocoSupplierMapping))) {
            throw new InvalidArgumentException($midocoSupplierMappingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierMapping = $midocoSupplierMapping;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierMapping value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierMappingResponse
     */
    public function addToMidocoSupplierMapping(\Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierMapping property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierMapping[] = $item;
        
        return $this;
    }
}
