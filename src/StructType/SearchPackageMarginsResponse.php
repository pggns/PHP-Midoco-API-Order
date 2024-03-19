<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPackageMarginsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchPackageMarginsResponse extends AbstractStructBase
{
    /**
     * The MidocoPackageMargin
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPackageMargin
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPackageMargin[]
     */
    protected ?array $MidocoPackageMargin = null;
    /**
     * Constructor method for SearchPackageMarginsResponse
     * @uses SearchPackageMarginsResponse::setMidocoPackageMargin()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPackageMargin[] $midocoPackageMargin
     */
    public function __construct(?array $midocoPackageMargin = null)
    {
        $this
            ->setMidocoPackageMargin($midocoPackageMargin);
    }
    /**
     * Get MidocoPackageMargin value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPackageMargin[]
     */
    public function getMidocoPackageMargin(): ?array
    {
        return $this->MidocoPackageMargin;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPackageMargin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPackageMargin method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPackageMarginForArrayConstraintFromSetMidocoPackageMargin(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchPackageMarginsResponseMidocoPackageMarginItem) {
            // validation for constraint: itemType
            if (!$searchPackageMarginsResponseMidocoPackageMarginItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPackageMargin) {
                $invalidValues[] = is_object($searchPackageMarginsResponseMidocoPackageMarginItem) ? get_class($searchPackageMarginsResponseMidocoPackageMarginItem) : sprintf('%s(%s)', gettype($searchPackageMarginsResponseMidocoPackageMarginItem), var_export($searchPackageMarginsResponseMidocoPackageMarginItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPackageMargin property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPackageMargin, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPackageMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPackageMargin[] $midocoPackageMargin
     * @return \Pggns\MidocoApi\Order\StructType\SearchPackageMarginsResponse
     */
    public function setMidocoPackageMargin(?array $midocoPackageMargin = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPackageMarginArrayErrorMessage = self::validateMidocoPackageMarginForArrayConstraintFromSetMidocoPackageMargin($midocoPackageMargin))) {
            throw new InvalidArgumentException($midocoPackageMarginArrayErrorMessage, __LINE__);
        }
        $this->MidocoPackageMargin = $midocoPackageMargin;
        
        return $this;
    }
    /**
     * Add item to MidocoPackageMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPackageMargin $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchPackageMarginsResponse
     */
    public function addToMidocoPackageMargin(\Pggns\MidocoApi\Order\StructType\MidocoPackageMargin $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPackageMargin) {
            throw new InvalidArgumentException(sprintf('The MidocoPackageMargin property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPackageMargin, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPackageMargin[] = $item;
        
        return $this;
    }
}
