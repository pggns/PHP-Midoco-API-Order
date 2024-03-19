<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderLayoutRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOrderLayoutRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLayout
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderLayout
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout[]
     */
    protected ?array $MidocoOrderLayout = null;
    /**
     * Constructor method for DeleteOrderLayoutRequest
     * @uses DeleteOrderLayoutRequest::setMidocoOrderLayout()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout[] $midocoOrderLayout
     */
    public function __construct(?array $midocoOrderLayout = null)
    {
        $this
            ->setMidocoOrderLayout($midocoOrderLayout);
    }
    /**
     * Get MidocoOrderLayout value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout[]
     */
    public function getMidocoOrderLayout(): ?array
    {
        return $this->MidocoOrderLayout;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderLayout method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderLayout method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderLayoutForArrayConstraintFromSetMidocoOrderLayout(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteOrderLayoutRequestMidocoOrderLayoutItem) {
            // validation for constraint: itemType
            if (!$deleteOrderLayoutRequestMidocoOrderLayoutItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout) {
                $invalidValues[] = is_object($deleteOrderLayoutRequestMidocoOrderLayoutItem) ? get_class($deleteOrderLayoutRequestMidocoOrderLayoutItem) : sprintf('%s(%s)', gettype($deleteOrderLayoutRequestMidocoOrderLayoutItem), var_export($deleteOrderLayoutRequestMidocoOrderLayoutItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderLayoutRequest
     */
    public function setMidocoOrderLayout(?array $midocoOrderLayout = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderLayoutArrayErrorMessage = self::validateMidocoOrderLayoutForArrayConstraintFromSetMidocoOrderLayout($midocoOrderLayout))) {
            throw new InvalidArgumentException($midocoOrderLayoutArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderLayout = $midocoOrderLayout;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderLayout value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderLayoutRequest
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
