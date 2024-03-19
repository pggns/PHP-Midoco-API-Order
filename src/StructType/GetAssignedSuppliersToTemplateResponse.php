<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedSuppliersToTemplateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAssignedSuppliersToTemplateResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierType[]
     */
    protected ?array $MidocoSupplier = null;
    /**
     * Constructor method for GetAssignedSuppliersToTemplateResponse
     * @uses GetAssignedSuppliersToTemplateResponse::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType[] $midocoSupplier
     */
    public function __construct(?array $midocoSupplier = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType[]
     */
    public function getMidocoSupplier(): ?array
    {
        return $this->MidocoSupplier;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplier method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierForArrayConstraintFromSetMidocoSupplier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAssignedSuppliersToTemplateResponseMidocoSupplierItem) {
            // validation for constraint: itemType
            if (!$getAssignedSuppliersToTemplateResponseMidocoSupplierItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierType) {
                $invalidValues[] = is_object($getAssignedSuppliersToTemplateResponseMidocoSupplierItem) ? get_class($getAssignedSuppliersToTemplateResponseMidocoSupplierItem) : sprintf('%s(%s)', gettype($getAssignedSuppliersToTemplateResponseMidocoSupplierItem), var_export($getAssignedSuppliersToTemplateResponseMidocoSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplier property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType[] $midocoSupplier
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedSuppliersToTemplateResponse
     */
    public function setMidocoSupplier(?array $midocoSupplier = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierArrayErrorMessage = self::validateMidocoSupplierForArrayConstraintFromSetMidocoSupplier($midocoSupplier))) {
            throw new InvalidArgumentException($midocoSupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedSuppliersToTemplateResponse
     */
    public function addToMidocoSupplier(\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierType) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplier property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplier[] = $item;
        
        return $this;
    }
}
