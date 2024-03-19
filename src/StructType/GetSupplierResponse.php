<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $MidocoSupplier = null;
    /**
     * The MidocoSupplierAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierAddress
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $MidocoSupplierAddress = null;
    /**
     * The MidocoSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAccountAssign
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign[]
     */
    protected ?array $MidocoSupplierAccountAssign = null;
    /**
     * The MidocoSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierPaymentCondition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[]
     */
    protected ?array $MidocoSupplierPaymentCondition = null;
    /**
     * Constructor method for GetSupplierResponse
     * @uses GetSupplierResponse::setMidocoSupplier()
     * @uses GetSupplierResponse::setMidocoSupplierAddress()
     * @uses GetSupplierResponse::setMidocoSupplierAccountAssign()
     * @uses GetSupplierResponse::setMidocoSupplierPaymentCondition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign[] $midocoSupplierAccountAssign
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[] $midocoSupplierPaymentCondition
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress = null, ?array $midocoSupplierAccountAssign = null, ?array $midocoSupplierPaymentCondition = null)
    {
        $this
            ->setMidocoSupplier($midocoSupplier)
            ->setMidocoSupplierAddress($midocoSupplierAddress)
            ->setMidocoSupplierAccountAssign($midocoSupplierAccountAssign)
            ->setMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierType|null
     */
    public function getMidocoSupplier(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType
    {
        return $this->MidocoSupplier;
    }
    /**
     * Set MidocoSupplier value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierResponse
     */
    public function setMidocoSupplier(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierType $midocoSupplier = null): self
    {
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAddress value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress|null
     */
    public function getMidocoSupplierAddress(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress
    {
        return $this->MidocoSupplierAddress;
    }
    /**
     * Set MidocoSupplierAddress value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierResponse
     */
    public function setMidocoSupplierAddress(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress = null): self
    {
        $this->MidocoSupplierAddress = $midocoSupplierAddress;
        
        return $this;
    }
    /**
     * Get MidocoSupplierAccountAssign value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign[]
     */
    public function getMidocoSupplierAccountAssign(): ?array
    {
        return $this->MidocoSupplierAccountAssign;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierAccountAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAccountAssign method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAccountAssignForArrayConstraintFromSetMidocoSupplierAccountAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierResponseMidocoSupplierAccountAssignItem) {
            // validation for constraint: itemType
            if (!$getSupplierResponseMidocoSupplierAccountAssignItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign) {
                $invalidValues[] = is_object($getSupplierResponseMidocoSupplierAccountAssignItem) ? get_class($getSupplierResponseMidocoSupplierAccountAssignItem) : sprintf('%s(%s)', gettype($getSupplierResponseMidocoSupplierAccountAssignItem), var_export($getSupplierResponseMidocoSupplierAccountAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAccountAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign[] $midocoSupplierAccountAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierResponse
     */
    public function setMidocoSupplierAccountAssign(?array $midocoSupplierAccountAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAccountAssignArrayErrorMessage = self::validateMidocoSupplierAccountAssignForArrayConstraintFromSetMidocoSupplierAccountAssign($midocoSupplierAccountAssign))) {
            throw new InvalidArgumentException($midocoSupplierAccountAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAccountAssign = $midocoSupplierAccountAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierResponse
     */
    public function addToMidocoSupplierAccountAssign(\Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAccountAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAccountAssign, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAccountAssign[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSupplierPaymentCondition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[]
     */
    public function getMidocoSupplierPaymentCondition(): ?array
    {
        return $this->MidocoSupplierPaymentCondition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierPaymentCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierPaymentCondition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierPaymentConditionForArrayConstraintFromSetMidocoSupplierPaymentCondition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierResponseMidocoSupplierPaymentConditionItem) {
            // validation for constraint: itemType
            if (!$getSupplierResponseMidocoSupplierPaymentConditionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition) {
                $invalidValues[] = is_object($getSupplierResponseMidocoSupplierPaymentConditionItem) ? get_class($getSupplierResponseMidocoSupplierPaymentConditionItem) : sprintf('%s(%s)', gettype($getSupplierResponseMidocoSupplierPaymentConditionItem), var_export($getSupplierResponseMidocoSupplierPaymentConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierPaymentCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition[] $midocoSupplierPaymentCondition
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierResponse
     */
    public function setMidocoSupplierPaymentCondition(?array $midocoSupplierPaymentCondition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierPaymentConditionArrayErrorMessage = self::validateMidocoSupplierPaymentConditionForArrayConstraintFromSetMidocoSupplierPaymentCondition($midocoSupplierPaymentCondition))) {
            throw new InvalidArgumentException($midocoSupplierPaymentConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierPaymentCondition = $midocoSupplierPaymentCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierResponse
     */
    public function addToMidocoSupplierPaymentCondition(\Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierPaymentCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierPaymentCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierPaymentCondition[] = $item;
        
        return $this;
    }
}
