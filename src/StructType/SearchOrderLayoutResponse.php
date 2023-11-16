<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderLayoutResponse StructType
 * @subpackage Structs
 */
class SearchOrderLayoutResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderLayout
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderLayout
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout[]
     */
    protected array $MidocoOrderLayout = [];
    /**
     * Constructor method for SearchOrderLayoutResponse
     * @uses SearchOrderLayoutResponse::setMidocoOrderLayout()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout[] $midocoOrderLayout
     */
    public function __construct(array $midocoOrderLayout = [])
    {
        $this
            ->setMidocoOrderLayout($midocoOrderLayout);
    }
    /**
     * Get MidocoOrderLayout value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout[]
     */
    public function getMidocoOrderLayout(): array
    {
        return $this->MidocoOrderLayout;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderLayout method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderLayout method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderLayoutForArrayConstraintsFromSetMidocoOrderLayout(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchOrderLayoutResponseMidocoOrderLayoutItem) {
            // validation for constraint: itemType
            if (!$searchOrderLayoutResponseMidocoOrderLayoutItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout) {
                $invalidValues[] = is_object($searchOrderLayoutResponseMidocoOrderLayoutItem) ? get_class($searchOrderLayoutResponseMidocoOrderLayoutItem) : sprintf('%s(%s)', gettype($searchOrderLayoutResponseMidocoOrderLayoutItem), var_export($searchOrderLayoutResponseMidocoOrderLayoutItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderLayout property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderLayout value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout[] $midocoOrderLayout
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutResponse
     */
    public function setMidocoOrderLayout(array $midocoOrderLayout = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderLayoutArrayErrorMessage = self::validateMidocoOrderLayoutForArrayConstraintsFromSetMidocoOrderLayout($midocoOrderLayout))) {
            throw new InvalidArgumentException($midocoOrderLayoutArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderLayout = $midocoOrderLayout;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderLayout value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutResponse
     */
    public function addToMidocoOrderLayout(\Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderLayout property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderLayout[] = $item;
        
        return $this;
    }
}
