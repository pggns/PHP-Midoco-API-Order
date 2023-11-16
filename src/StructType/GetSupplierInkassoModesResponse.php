<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierInkassoModesResponse StructType
 * @subpackage Structs
 */
class GetSupplierInkassoModesResponse extends AbstractStructBase
{
    /**
     * The SupplierInkassoMode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SupplierInkassoMode
     * @var \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType[]
     */
    protected array $SupplierInkassoMode = [];
    /**
     * Constructor method for GetSupplierInkassoModesResponse
     * @uses GetSupplierInkassoModesResponse::setSupplierInkassoMode()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType[] $supplierInkassoMode
     */
    public function __construct(array $supplierInkassoMode = [])
    {
        $this
            ->setSupplierInkassoMode($supplierInkassoMode);
    }
    /**
     * Get SupplierInkassoMode value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType[]
     */
    public function getSupplierInkassoMode(): array
    {
        return $this->SupplierInkassoMode;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplierInkassoMode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierInkassoMode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierInkassoModeForArrayConstraintsFromSetSupplierInkassoMode(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierInkassoModesResponseSupplierInkassoModeItem) {
            // validation for constraint: itemType
            if (!$getSupplierInkassoModesResponseSupplierInkassoModeItem instanceof \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType) {
                $invalidValues[] = is_object($getSupplierInkassoModesResponseSupplierInkassoModeItem) ? get_class($getSupplierInkassoModesResponseSupplierInkassoModeItem) : sprintf('%s(%s)', gettype($getSupplierInkassoModesResponseSupplierInkassoModeItem), var_export($getSupplierInkassoModesResponseSupplierInkassoModeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplierInkassoMode property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplierInkassoMode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType[] $supplierInkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierInkassoModesResponse
     */
    public function setSupplierInkassoMode(array $supplierInkassoMode = []): self
    {
        // validation for constraint: array
        if ('' !== ($supplierInkassoModeArrayErrorMessage = self::validateSupplierInkassoModeForArrayConstraintsFromSetSupplierInkassoMode($supplierInkassoMode))) {
            throw new InvalidArgumentException($supplierInkassoModeArrayErrorMessage, __LINE__);
        }
        $this->SupplierInkassoMode = $supplierInkassoMode;
        
        return $this;
    }
    /**
     * Add item to SupplierInkassoMode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierInkassoModesResponse
     */
    public function addToSupplierInkassoMode(\Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType) {
            throw new InvalidArgumentException(sprintf('The SupplierInkassoMode property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierInkassoModeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SupplierInkassoMode[] = $item;
        
        return $this;
    }
}
