<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeMultiEditRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FeeMultiEditRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeMultiEdit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeMultiEdit
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit[]
     */
    protected ?array $MidocoFeeMultiEdit = null;
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
     * Constructor method for FeeMultiEditRequest
     * @uses FeeMultiEditRequest::setMidocoFeeMultiEdit()
     * @uses FeeMultiEditRequest::setMidocoFeeGroupAssign()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit[] $midocoFeeMultiEdit
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign[] $midocoFeeGroupAssign
     */
    public function __construct(?array $midocoFeeMultiEdit = null, ?array $midocoFeeGroupAssign = null)
    {
        $this
            ->setMidocoFeeMultiEdit($midocoFeeMultiEdit)
            ->setMidocoFeeGroupAssign($midocoFeeGroupAssign);
    }
    /**
     * Get MidocoFeeMultiEdit value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit[]
     */
    public function getMidocoFeeMultiEdit(): ?array
    {
        return $this->MidocoFeeMultiEdit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFeeMultiEdit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeMultiEdit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeMultiEditForArrayConstraintFromSetMidocoFeeMultiEdit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $feeMultiEditRequestMidocoFeeMultiEditItem) {
            // validation for constraint: itemType
            if (!$feeMultiEditRequestMidocoFeeMultiEditItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit) {
                $invalidValues[] = is_object($feeMultiEditRequestMidocoFeeMultiEditItem) ? get_class($feeMultiEditRequestMidocoFeeMultiEditItem) : sprintf('%s(%s)', gettype($feeMultiEditRequestMidocoFeeMultiEditItem), var_export($feeMultiEditRequestMidocoFeeMultiEditItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeMultiEdit property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeMultiEdit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit[] $midocoFeeMultiEdit
     * @return \Pggns\MidocoApi\Order\StructType\FeeMultiEditRequest
     */
    public function setMidocoFeeMultiEdit(?array $midocoFeeMultiEdit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeMultiEditArrayErrorMessage = self::validateMidocoFeeMultiEditForArrayConstraintFromSetMidocoFeeMultiEdit($midocoFeeMultiEdit))) {
            throw new InvalidArgumentException($midocoFeeMultiEditArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeMultiEdit = $midocoFeeMultiEdit;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeMultiEdit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit $item
     * @return \Pggns\MidocoApi\Order\StructType\FeeMultiEditRequest
     */
    public function addToMidocoFeeMultiEdit(\Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeMultiEdit property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFeeMultiEdit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeMultiEdit[] = $item;
        
        return $this;
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
        foreach ($values as $feeMultiEditRequestMidocoFeeGroupAssignItem) {
            // validation for constraint: itemType
            if (!$feeMultiEditRequestMidocoFeeGroupAssignItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign) {
                $invalidValues[] = is_object($feeMultiEditRequestMidocoFeeGroupAssignItem) ? get_class($feeMultiEditRequestMidocoFeeGroupAssignItem) : sprintf('%s(%s)', gettype($feeMultiEditRequestMidocoFeeGroupAssignItem), var_export($feeMultiEditRequestMidocoFeeGroupAssignItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeMultiEditRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeMultiEditRequest
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
