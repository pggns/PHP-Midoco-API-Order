<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchingProductTypeSupplierResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMatchingProductTypeSupplierResponse extends AbstractStructBase
{
    /**
     * The MidocoProductTypeSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProductTypeSupplier
     * @var \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO[]
     */
    protected ?array $MidocoProductTypeSupplier = null;
    /**
     * Constructor method for GetMatchingProductTypeSupplierResponse
     * @uses GetMatchingProductTypeSupplierResponse::setMidocoProductTypeSupplier()
     * @param \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO[] $midocoProductTypeSupplier
     */
    public function __construct(?array $midocoProductTypeSupplier = null)
    {
        $this
            ->setMidocoProductTypeSupplier($midocoProductTypeSupplier);
    }
    /**
     * Get MidocoProductTypeSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO[]
     */
    public function getMidocoProductTypeSupplier(): ?array
    {
        return $this->MidocoProductTypeSupplier;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoProductTypeSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProductTypeSupplier method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProductTypeSupplierForArrayConstraintFromSetMidocoProductTypeSupplier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMatchingProductTypeSupplierResponseMidocoProductTypeSupplierItem) {
            // validation for constraint: itemType
            if (!$getMatchingProductTypeSupplierResponseMidocoProductTypeSupplierItem instanceof \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO) {
                $invalidValues[] = is_object($getMatchingProductTypeSupplierResponseMidocoProductTypeSupplierItem) ? get_class($getMatchingProductTypeSupplierResponseMidocoProductTypeSupplierItem) : sprintf('%s(%s)', gettype($getMatchingProductTypeSupplierResponseMidocoProductTypeSupplierItem), var_export($getMatchingProductTypeSupplierResponseMidocoProductTypeSupplierItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingProductTypeSupplierResponse
     */
    public function setMidocoProductTypeSupplier(?array $midocoProductTypeSupplier = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProductTypeSupplierArrayErrorMessage = self::validateMidocoProductTypeSupplierForArrayConstraintFromSetMidocoProductTypeSupplier($midocoProductTypeSupplier))) {
            throw new InvalidArgumentException($midocoProductTypeSupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoProductTypeSupplier = $midocoProductTypeSupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoProductTypeSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ProductTypeSupplierDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMatchingProductTypeSupplierResponse
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
