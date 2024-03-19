<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierVatSchemasResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierVatSchemasResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierVatSchema
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierVatSchema
     * @var \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO[]
     */
    protected ?array $MidocoSupplierVatSchema = null;
    /**
     * Constructor method for GetSupplierVatSchemasResponse
     * @uses GetSupplierVatSchemasResponse::setMidocoSupplierVatSchema()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO[] $midocoSupplierVatSchema
     */
    public function __construct(?array $midocoSupplierVatSchema = null)
    {
        $this
            ->setMidocoSupplierVatSchema($midocoSupplierVatSchema);
    }
    /**
     * Get MidocoSupplierVatSchema value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO[]
     */
    public function getMidocoSupplierVatSchema(): ?array
    {
        return $this->MidocoSupplierVatSchema;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierVatSchema method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierVatSchema method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierVatSchemaForArrayConstraintFromSetMidocoSupplierVatSchema(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierVatSchemasResponseMidocoSupplierVatSchemaItem) {
            // validation for constraint: itemType
            if (!$getSupplierVatSchemasResponseMidocoSupplierVatSchemaItem instanceof \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO) {
                $invalidValues[] = is_object($getSupplierVatSchemasResponseMidocoSupplierVatSchemaItem) ? get_class($getSupplierVatSchemasResponseMidocoSupplierVatSchemaItem) : sprintf('%s(%s)', gettype($getSupplierVatSchemasResponseMidocoSupplierVatSchemaItem), var_export($getSupplierVatSchemasResponseMidocoSupplierVatSchemaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierVatSchema property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierVatSchema value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO[] $midocoSupplierVatSchema
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierVatSchemasResponse
     */
    public function setMidocoSupplierVatSchema(?array $midocoSupplierVatSchema = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierVatSchemaArrayErrorMessage = self::validateMidocoSupplierVatSchemaForArrayConstraintFromSetMidocoSupplierVatSchema($midocoSupplierVatSchema))) {
            throw new InvalidArgumentException($midocoSupplierVatSchemaArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierVatSchema = $midocoSupplierVatSchema;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierVatSchema value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierVatSchemasResponse
     */
    public function addToMidocoSupplierVatSchema(\Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierVatSchema property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierVatSchemaDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierVatSchema[] = $item;
        
        return $this;
    }
}
