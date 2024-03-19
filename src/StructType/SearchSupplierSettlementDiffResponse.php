<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierSettlementDiffResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchSupplierSettlementDiffResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierSettlementDiff
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff[]
     */
    protected ?array $MidocoSupplierSettlementDiff = null;
    /**
     * Constructor method for SearchSupplierSettlementDiffResponse
     * @uses SearchSupplierSettlementDiffResponse::setMidocoSupplierSettlementDiff()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff[] $midocoSupplierSettlementDiff
     */
    public function __construct(?array $midocoSupplierSettlementDiff = null)
    {
        $this
            ->setMidocoSupplierSettlementDiff($midocoSupplierSettlementDiff);
    }
    /**
     * Get MidocoSupplierSettlementDiff value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff[]
     */
    public function getMidocoSupplierSettlementDiff(): ?array
    {
        return $this->MidocoSupplierSettlementDiff;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierSettlementDiff method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierSettlementDiff method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierSettlementDiffForArrayConstraintFromSetMidocoSupplierSettlementDiff(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchSupplierSettlementDiffResponseMidocoSupplierSettlementDiffItem) {
            // validation for constraint: itemType
            if (!$searchSupplierSettlementDiffResponseMidocoSupplierSettlementDiffItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff) {
                $invalidValues[] = is_object($searchSupplierSettlementDiffResponseMidocoSupplierSettlementDiffItem) ? get_class($searchSupplierSettlementDiffResponseMidocoSupplierSettlementDiffItem) : sprintf('%s(%s)', gettype($searchSupplierSettlementDiffResponseMidocoSupplierSettlementDiffItem), var_export($searchSupplierSettlementDiffResponseMidocoSupplierSettlementDiffItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierSettlementDiff property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierSettlementDiff value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff[] $midocoSupplierSettlementDiff
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierSettlementDiffResponse
     */
    public function setMidocoSupplierSettlementDiff(?array $midocoSupplierSettlementDiff = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierSettlementDiffArrayErrorMessage = self::validateMidocoSupplierSettlementDiffForArrayConstraintFromSetMidocoSupplierSettlementDiff($midocoSupplierSettlementDiff))) {
            throw new InvalidArgumentException($midocoSupplierSettlementDiffArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierSettlementDiff = $midocoSupplierSettlementDiff;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierSettlementDiff value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierSettlementDiffResponse
     */
    public function addToMidocoSupplierSettlementDiff(\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierSettlementDiff property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementDiff, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierSettlementDiff[] = $item;
        
        return $this;
    }
}
