<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeGroupAssignsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFeeGroupAssignsResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeGroupAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeGroupAssign
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign[]
     */
    protected ?array $MidocoFeeGroupAssign = null;
    /**
     * Constructor method for GetFeeGroupAssignsResponse
     * @uses GetFeeGroupAssignsResponse::setMidocoFeeGroupAssign()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign[] $midocoFeeGroupAssign
     */
    public function __construct(?array $midocoFeeGroupAssign = null)
    {
        $this
            ->setMidocoFeeGroupAssign($midocoFeeGroupAssign);
    }
    /**
     * Get MidocoFeeGroupAssign value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign[]
     */
    public function getMidocoFeeGroupAssign(): ?array
    {
        return $this->MidocoFeeGroupAssign;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFeeGroupAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeGroupAssign method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeGroupAssignForArrayConstraintFromSetMidocoFeeGroupAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFeeGroupAssignsResponseMidocoFeeGroupAssignItem) {
            // validation for constraint: itemType
            if (!$getFeeGroupAssignsResponseMidocoFeeGroupAssignItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign) {
                $invalidValues[] = is_object($getFeeGroupAssignsResponseMidocoFeeGroupAssignItem) ? get_class($getFeeGroupAssignsResponseMidocoFeeGroupAssignItem) : sprintf('%s(%s)', gettype($getFeeGroupAssignsResponseMidocoFeeGroupAssignItem), var_export($getFeeGroupAssignsResponseMidocoFeeGroupAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeGroupAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeGroupAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign[] $midocoFeeGroupAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupAssignsResponse
     */
    public function setMidocoFeeGroupAssign(?array $midocoFeeGroupAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeGroupAssignArrayErrorMessage = self::validateMidocoFeeGroupAssignForArrayConstraintFromSetMidocoFeeGroupAssign($midocoFeeGroupAssign))) {
            throw new InvalidArgumentException($midocoFeeGroupAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeGroupAssign = $midocoFeeGroupAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeGroupAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $item
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupAssignsResponse
     */
    public function addToMidocoFeeGroupAssign(\Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeGroupAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeGroupAssign[] = $item;
        
        return $this;
    }
}
