<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerMf StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerMf extends CustomerMfDTO
{
    /**
     * The MidocoCustomerMfAllowedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerMfAllowedValue
     * @var \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO[]
     */
    protected ?array $MidocoCustomerMfAllowedValue = null;
    /**
     * Constructor method for MidocoCustomerMf
     * @uses MidocoCustomerMf::setMidocoCustomerMfAllowedValue()
     * @param \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO[] $midocoCustomerMfAllowedValue
     */
    public function __construct(?array $midocoCustomerMfAllowedValue = null)
    {
        $this
            ->setMidocoCustomerMfAllowedValue($midocoCustomerMfAllowedValue);
    }
    /**
     * Get MidocoCustomerMfAllowedValue value
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO[]
     */
    public function getMidocoCustomerMfAllowedValue(): ?array
    {
        return $this->MidocoCustomerMfAllowedValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerMfAllowedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerMfAllowedValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerMfAllowedValueForArrayConstraintFromSetMidocoCustomerMfAllowedValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerMfMidocoCustomerMfAllowedValueItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerMfMidocoCustomerMfAllowedValueItem instanceof \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO) {
                $invalidValues[] = is_object($midocoCustomerMfMidocoCustomerMfAllowedValueItem) ? get_class($midocoCustomerMfMidocoCustomerMfAllowedValueItem) : sprintf('%s(%s)', gettype($midocoCustomerMfMidocoCustomerMfAllowedValueItem), var_export($midocoCustomerMfMidocoCustomerMfAllowedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerMfAllowedValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerMfAllowedValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO[] $midocoCustomerMfAllowedValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerMf
     */
    public function setMidocoCustomerMfAllowedValue(?array $midocoCustomerMfAllowedValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerMfAllowedValueArrayErrorMessage = self::validateMidocoCustomerMfAllowedValueForArrayConstraintFromSetMidocoCustomerMfAllowedValue($midocoCustomerMfAllowedValue))) {
            throw new InvalidArgumentException($midocoCustomerMfAllowedValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerMfAllowedValue = $midocoCustomerMfAllowedValue;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerMfAllowedValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerMf
     */
    public function addToMidocoCustomerMfAllowedValue(\Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerMfAllowedValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\CustomerMfAllowedValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerMfAllowedValue[] = $item;
        
        return $this;
    }
}
