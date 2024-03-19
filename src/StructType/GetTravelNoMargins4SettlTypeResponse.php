<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNoMargins4SettlTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelNoMargins4SettlTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelNoMarginSettlType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNoMarginSettlType
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType[]
     */
    protected ?array $MidocoTravelNoMarginSettlType = null;
    /**
     * Constructor method for GetTravelNoMargins4SettlTypeResponse
     * @uses GetTravelNoMargins4SettlTypeResponse::setMidocoTravelNoMarginSettlType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType[] $midocoTravelNoMarginSettlType
     */
    public function __construct(?array $midocoTravelNoMarginSettlType = null)
    {
        $this
            ->setMidocoTravelNoMarginSettlType($midocoTravelNoMarginSettlType);
    }
    /**
     * Get MidocoTravelNoMarginSettlType value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType[]
     */
    public function getMidocoTravelNoMarginSettlType(): ?array
    {
        return $this->MidocoTravelNoMarginSettlType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTravelNoMarginSettlType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNoMarginSettlType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNoMarginSettlTypeForArrayConstraintFromSetMidocoTravelNoMarginSettlType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNoMargins4SettlTypeResponseMidocoTravelNoMarginSettlTypeItem) {
            // validation for constraint: itemType
            if (!$getTravelNoMargins4SettlTypeResponseMidocoTravelNoMarginSettlTypeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType) {
                $invalidValues[] = is_object($getTravelNoMargins4SettlTypeResponseMidocoTravelNoMarginSettlTypeItem) ? get_class($getTravelNoMargins4SettlTypeResponseMidocoTravelNoMarginSettlTypeItem) : sprintf('%s(%s)', gettype($getTravelNoMargins4SettlTypeResponseMidocoTravelNoMarginSettlTypeItem), var_export($getTravelNoMargins4SettlTypeResponseMidocoTravelNoMarginSettlTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNoMarginSettlType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNoMarginSettlType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType[] $midocoTravelNoMarginSettlType
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNoMargins4SettlTypeResponse
     */
    public function setMidocoTravelNoMarginSettlType(?array $midocoTravelNoMarginSettlType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNoMarginSettlTypeArrayErrorMessage = self::validateMidocoTravelNoMarginSettlTypeForArrayConstraintFromSetMidocoTravelNoMarginSettlType($midocoTravelNoMarginSettlType))) {
            throw new InvalidArgumentException($midocoTravelNoMarginSettlTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNoMarginSettlType = $midocoTravelNoMarginSettlType;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNoMarginSettlType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNoMargins4SettlTypeResponse
     */
    public function addToMidocoTravelNoMarginSettlType(\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNoMarginSettlType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNoMarginSettlType[] = $item;
        
        return $this;
    }
}
