<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveUnprintedBillingPositionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RemoveUnprintedBillingPositionsResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType[]
     */
    protected ?array $MidocoBillingPosition = null;
    /**
     * Constructor method for RemoveUnprintedBillingPositionsResponse
     * @uses RemoveUnprintedBillingPositionsResponse::setMidocoBillingPosition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType[] $midocoBillingPosition
     */
    public function __construct(?array $midocoBillingPosition = null)
    {
        $this
            ->setMidocoBillingPosition($midocoBillingPosition);
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType[]
     */
    public function getMidocoBillingPosition(): ?array
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionForArrayConstraintFromSetMidocoBillingPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $removeUnprintedBillingPositionsResponseMidocoBillingPositionItem) {
            // validation for constraint: itemType
            if (!$removeUnprintedBillingPositionsResponseMidocoBillingPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType) {
                $invalidValues[] = is_object($removeUnprintedBillingPositionsResponseMidocoBillingPositionItem) ? get_class($removeUnprintedBillingPositionsResponseMidocoBillingPositionItem) : sprintf('%s(%s)', gettype($removeUnprintedBillingPositionsResponseMidocoBillingPositionItem), var_export($removeUnprintedBillingPositionsResponseMidocoBillingPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType[] $midocoBillingPosition
     * @return \Pggns\MidocoApi\Order\StructType\RemoveUnprintedBillingPositionsResponse
     */
    public function setMidocoBillingPosition(?array $midocoBillingPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionArrayErrorMessage = self::validateMidocoBillingPositionForArrayConstraintFromSetMidocoBillingPosition($midocoBillingPosition))) {
            throw new InvalidArgumentException($midocoBillingPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $item
     * @return \Pggns\MidocoApi\Order\StructType\RemoveUnprintedBillingPositionsResponse
     */
    public function addToMidocoBillingPosition(\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPosition[] = $item;
        
        return $this;
    }
}
