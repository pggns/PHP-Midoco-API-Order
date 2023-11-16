<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierAccountAssignResponse StructType
 * @subpackage Structs
 */
class SearchSupplierAccountAssignResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign[]
     */
    protected array $MidocoSupplierAccountAssign = [];
    /**
     * Constructor method for SearchSupplierAccountAssignResponse
     * @uses SearchSupplierAccountAssignResponse::setMidocoSupplierAccountAssign()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign[] $midocoSupplierAccountAssign
     */
    public function __construct(array $midocoSupplierAccountAssign = [])
    {
        $this
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign);
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign[]
     */
    public function getMidocoSupplierAccountAssign(): array
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierAccountAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAccountAssign method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAccountAssignForArrayConstraintsFromSetMidocoSupplierAccountAssign(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchSupplierAccountAssignResponseMidocoSupplierAccountAssignItem) {
            // validation for constraint: itemType
            if (!$searchSupplierAccountAssignResponseMidocoSupplierAccountAssignItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign) {
                $invalidValues[] = is_object($searchSupplierAccountAssignResponseMidocoSupplierAccountAssignItem) ? get_class($searchSupplierAccountAssignResponseMidocoSupplierAccountAssignItem) : sprintf('%s(%s)', gettype($searchSupplierAccountAssignResponseMidocoSupplierAccountAssignItem), var_export($searchSupplierAccountAssignResponseMidocoSupplierAccountAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAccountAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign[] $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAccountAssignResponse
     */
    public function setMidocoSupplierAccountAssign(array $midocoSupplierAccountAssign = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAccountAssignArrayErrorMessage = self::validateMidocoSupplierAccountAssignForArrayConstraintsFromSetMidocoSupplierAccountAssign($midocoSupplierAccountAssign))) {
            throw new InvalidArgumentException($midocoSupplierAccountAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAccountAssignResponse
     */
    public function addToMidocoSupplierAccountAssign(\Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAccountAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAccountAssign[] = $item;
        
        return $this;
    }
}
