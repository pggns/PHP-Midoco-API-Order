<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EditTravelNoMarginRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EditTravelNoMarginRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNoMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTravelNoMargin
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $MidocoTravelNoMargin = null;
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
     * Constructor method for EditTravelNoMarginRequest
     * @uses EditTravelNoMarginRequest::setMidocoTravelNoMargin()
     * @uses EditTravelNoMarginRequest::setMidocoTravelNoMarginSettlType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType[] $midocoTravelNoMarginSettlType
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null, ?array $midocoTravelNoMarginSettlType = null)
    {
        $this
            ->setMidocoTravelNoMargin($midocoTravelNoMargin)
            ->setMidocoTravelNoMarginSettlType($midocoTravelNoMarginSettlType);
    }
    /**
     * Get MidocoTravelNoMargin value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin|null
     */
    public function getMidocoTravelNoMargin(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
    {
        return $this->MidocoTravelNoMargin;
    }
    /**
     * Set MidocoTravelNoMargin value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     * @return \Pggns\MidocoApi\Order\StructType\EditTravelNoMarginRequest
     */
    public function setMidocoTravelNoMargin(?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null): self
    {
        $this->MidocoTravelNoMargin = $midocoTravelNoMargin;
        
        return $this;
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
        foreach ($values as $editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem) {
            // validation for constraint: itemType
            if (!$editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMarginSettlType) {
                $invalidValues[] = is_object($editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem) ? get_class($editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem) : sprintf('%s(%s)', gettype($editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem), var_export($editTravelNoMarginRequestMidocoTravelNoMarginSettlTypeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\EditTravelNoMarginRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\EditTravelNoMarginRequest
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
