<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductTypeSupplierResponse StructType
 * @subpackage Structs
 */
class GetProductTypeSupplierResponse extends AbstractStructBase
{
    /**
     * The MidocoProductTypeSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProductTypeSupplier
     * @var \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO[]
     */
    protected array $MidocoProductTypeSupplier = [];
    /**
     * Constructor method for GetProductTypeSupplierResponse
     * @uses GetProductTypeSupplierResponse::setMidocoProductTypeSupplier()
     * @param \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO[] $midocoProductTypeSupplier
     */
    public function __construct(array $midocoProductTypeSupplier = [])
    {
        $this
            ->setMidocoProductTypeSupplier($midocoProductTypeSupplier);
    }
    /**
     * Get MidocoProductTypeSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO[]
     */
    public function getMidocoProductTypeSupplier(): array
    {
        return $this->MidocoProductTypeSupplier;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoProductTypeSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProductTypeSupplier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProductTypeSupplierForArrayConstraintsFromSetMidocoProductTypeSupplier(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProductTypeSupplierResponseMidocoProductTypeSupplierItem) {
            // validation for constraint: itemType
            if (!$getProductTypeSupplierResponseMidocoProductTypeSupplierItem instanceof \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO) {
                $invalidValues[] = is_object($getProductTypeSupplierResponseMidocoProductTypeSupplierItem) ? get_class($getProductTypeSupplierResponseMidocoProductTypeSupplierItem) : sprintf('%s(%s)', gettype($getProductTypeSupplierResponseMidocoProductTypeSupplierItem), var_export($getProductTypeSupplierResponseMidocoProductTypeSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProductTypeSupplier property can only contain items of type \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProductTypeSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO[] $midocoProductTypeSupplier
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypeSupplierResponse
     */
    public function setMidocoProductTypeSupplier(array $midocoProductTypeSupplier = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProductTypeSupplierArrayErrorMessage = self::validateMidocoProductTypeSupplierForArrayConstraintsFromSetMidocoProductTypeSupplier($midocoProductTypeSupplier))) {
            throw new InvalidArgumentException($midocoProductTypeSupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoProductTypeSupplier = $midocoProductTypeSupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoProductTypeSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypeSupplierResponse
     */
    public function addToMidocoProductTypeSupplier(\Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoProductTypeSupplier property can only contain items of type \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProductTypeSupplier[] = $item;
        
        return $this;
    }
}
