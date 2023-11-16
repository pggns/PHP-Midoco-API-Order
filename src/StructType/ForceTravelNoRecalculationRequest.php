<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ForceTravelNoRecalculationRequest StructType
 * @subpackage Structs
 */
class ForceTravelNoRecalculationRequest extends AbstractStructBase
{
    /**
     * The MidocoMargin
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoMargin
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMargin[]
     */
    protected array $MidocoMargin = [];
    /**
     * Constructor method for ForceTravelNoRecalculationRequest
     * @uses ForceTravelNoRecalculationRequest::setMidocoMargin()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMargin[] $midocoMargin
     */
    public function __construct(array $midocoMargin)
    {
        $this
            ->setMidocoMargin($midocoMargin);
    }
    /**
     * Get MidocoMargin value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMargin[]
     */
    public function getMidocoMargin(): array
    {
        return $this->MidocoMargin;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMargin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMargin method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginForArrayConstraintsFromSetMidocoMargin(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $forceTravelNoRecalculationRequestMidocoMarginItem) {
            // validation for constraint: itemType
            if (!$forceTravelNoRecalculationRequestMidocoMarginItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMargin) {
                $invalidValues[] = is_object($forceTravelNoRecalculationRequestMidocoMarginItem) ? get_class($forceTravelNoRecalculationRequestMidocoMarginItem) : sprintf('%s(%s)', gettype($forceTravelNoRecalculationRequestMidocoMarginItem), var_export($forceTravelNoRecalculationRequestMidocoMarginItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMargin property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMargin, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMargin[] $midocoMargin
     * @return \Pggns\MidocoApi\Order\StructType\ForceTravelNoRecalculationRequest
     */
    public function setMidocoMargin(array $midocoMargin): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginArrayErrorMessage = self::validateMidocoMarginForArrayConstraintsFromSetMidocoMargin($midocoMargin))) {
            throw new InvalidArgumentException($midocoMarginArrayErrorMessage, __LINE__);
        }
        $this->MidocoMargin = $midocoMargin;
        
        return $this;
    }
    /**
     * Add item to MidocoMargin value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMargin $item
     * @return \Pggns\MidocoApi\Order\StructType\ForceTravelNoRecalculationRequest
     */
    public function addToMidocoMargin(\Pggns\MidocoApi\Order\StructType\MidocoMargin $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMargin) {
            throw new InvalidArgumentException(sprintf('The MidocoMargin property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMargin, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMargin[] = $item;
        
        return $this;
    }
}
