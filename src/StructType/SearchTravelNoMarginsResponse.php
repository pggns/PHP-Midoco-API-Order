<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTravelNoMarginsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchTravelNoMarginsResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelNoMargin
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNoMargin
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin[]
     */
    protected ?array $MidocoTravelNoMargin = null;
    /**
     * Constructor method for SearchTravelNoMarginsResponse
     * @uses SearchTravelNoMarginsResponse::setMidocoTravelNoMargin()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin[] $midocoTravelNoMargin
     */
    public function __construct(?array $midocoTravelNoMargin = null)
    {
        $this
            ->setMidocoTravelNoMargin($midocoTravelNoMargin);
    }
    /**
     * Get MidocoTravelNoMargin value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin[]
     */
    public function getMidocoTravelNoMargin(): ?array
    {
        return $this->MidocoTravelNoMargin;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTravelNoMargin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNoMargin method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNoMarginForArrayConstraintFromSetMidocoTravelNoMargin(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchTravelNoMarginsResponseMidocoTravelNoMarginItem) {
            // validation for constraint: itemType
            if (!$searchTravelNoMarginsResponseMidocoTravelNoMarginItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin) {
                $invalidValues[] = is_object($searchTravelNoMarginsResponseMidocoTravelNoMarginItem) ? get_class($searchTravelNoMarginsResponseMidocoTravelNoMarginItem) : sprintf('%s(%s)', gettype($searchTravelNoMarginsResponseMidocoTravelNoMarginItem), var_export($searchTravelNoMarginsResponseMidocoTravelNoMarginItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNoMargin property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNoMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin[] $midocoTravelNoMargin
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsResponse
     */
    public function setMidocoTravelNoMargin(?array $midocoTravelNoMargin = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNoMarginArrayErrorMessage = self::validateMidocoTravelNoMarginForArrayConstraintFromSetMidocoTravelNoMargin($midocoTravelNoMargin))) {
            throw new InvalidArgumentException($midocoTravelNoMarginArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNoMargin = $midocoTravelNoMargin;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNoMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsResponse
     */
    public function addToMidocoTravelNoMargin(\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNoMargin property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNoMargin[] = $item;
        
        return $this;
    }
}
