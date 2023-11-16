<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarkSuppliersResponse StructType
 * @subpackage Structs
 */
class GetRemarkSuppliersResponse extends AbstractStructBase
{
    /**
     * The MidocoRemarkSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRemarkSupplier
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier[]
     */
    protected array $MidocoRemarkSupplier = [];
    /**
     * Constructor method for GetRemarkSuppliersResponse
     * @uses GetRemarkSuppliersResponse::setMidocoRemarkSupplier()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier[] $midocoRemarkSupplier
     */
    public function __construct(array $midocoRemarkSupplier = [])
    {
        $this
            ->setMidocoRemarkSupplier($midocoRemarkSupplier);
    }
    /**
     * Get MidocoRemarkSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier[]
     */
    public function getMidocoRemarkSupplier(): array
    {
        return $this->MidocoRemarkSupplier;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRemarkSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarkSupplier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarkSupplierForArrayConstraintsFromSetMidocoRemarkSupplier(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRemarkSuppliersResponseMidocoRemarkSupplierItem) {
            // validation for constraint: itemType
            if (!$getRemarkSuppliersResponseMidocoRemarkSupplierItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier) {
                $invalidValues[] = is_object($getRemarkSuppliersResponseMidocoRemarkSupplierItem) ? get_class($getRemarkSuppliersResponseMidocoRemarkSupplierItem) : sprintf('%s(%s)', gettype($getRemarkSuppliersResponseMidocoRemarkSupplierItem), var_export($getRemarkSuppliersResponseMidocoRemarkSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarkSupplier property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarkSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier[] $midocoRemarkSupplier
     * @return \Pggns\MidocoApi\Order\StructType\GetRemarkSuppliersResponse
     */
    public function setMidocoRemarkSupplier(array $midocoRemarkSupplier = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarkSupplierArrayErrorMessage = self::validateMidocoRemarkSupplierForArrayConstraintsFromSetMidocoRemarkSupplier($midocoRemarkSupplier))) {
            throw new InvalidArgumentException($midocoRemarkSupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarkSupplier = $midocoRemarkSupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarkSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier $item
     * @return \Pggns\MidocoApi\Order\StructType\GetRemarkSuppliersResponse
     */
    public function addToMidocoRemarkSupplier(\Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarkSupplier property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarkSupplier[] = $item;
        
        return $this;
    }
}
