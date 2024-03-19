<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPositions4BonusClearingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingPositions4BonusClearingResponse extends AbstractStructBase
{
    /**
     * The MidocoBonusBillingPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBonusBillingPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition[]
     */
    protected ?array $MidocoBonusBillingPosition = null;
    /**
     * Constructor method for GetBillingPositions4BonusClearingResponse
     * @uses GetBillingPositions4BonusClearingResponse::setMidocoBonusBillingPosition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition[] $midocoBonusBillingPosition
     */
    public function __construct(?array $midocoBonusBillingPosition = null)
    {
        $this
            ->setMidocoBonusBillingPosition($midocoBonusBillingPosition);
    }
    /**
     * Get MidocoBonusBillingPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition[]
     */
    public function getMidocoBonusBillingPosition(): ?array
    {
        return $this->MidocoBonusBillingPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBonusBillingPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBonusBillingPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBonusBillingPositionForArrayConstraintFromSetMidocoBonusBillingPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingPositions4BonusClearingResponseMidocoBonusBillingPositionItem) {
            // validation for constraint: itemType
            if (!$getBillingPositions4BonusClearingResponseMidocoBonusBillingPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition) {
                $invalidValues[] = is_object($getBillingPositions4BonusClearingResponseMidocoBonusBillingPositionItem) ? get_class($getBillingPositions4BonusClearingResponseMidocoBonusBillingPositionItem) : sprintf('%s(%s)', gettype($getBillingPositions4BonusClearingResponseMidocoBonusBillingPositionItem), var_export($getBillingPositions4BonusClearingResponseMidocoBonusBillingPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBonusBillingPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBonusBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition[] $midocoBonusBillingPosition
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4BonusClearingResponse
     */
    public function setMidocoBonusBillingPosition(?array $midocoBonusBillingPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBonusBillingPositionArrayErrorMessage = self::validateMidocoBonusBillingPositionForArrayConstraintFromSetMidocoBonusBillingPosition($midocoBonusBillingPosition))) {
            throw new InvalidArgumentException($midocoBonusBillingPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoBonusBillingPosition = $midocoBonusBillingPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoBonusBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4BonusClearingResponse
     */
    public function addToMidocoBonusBillingPosition(\Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoBonusBillingPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusBillingPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBonusBillingPosition[] = $item;
        
        return $this;
    }
}
