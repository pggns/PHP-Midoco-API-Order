<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteVatDivisionIncomingRuleResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteVatDivisionIncomingRuleResponse extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ordersd:MidocoVatCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVatCode[]
     */
    protected ?array $MidocoVatCode = null;
    /**
     * The MidocoRevenueBookingVatDiv
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRevenueBookingVatDiv
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    protected ?array $MidocoRevenueBookingVatDiv = null;
    /**
     * Constructor method for ExecuteVatDivisionIncomingRuleResponse
     * @uses ExecuteVatDivisionIncomingRuleResponse::setMidocoVatCode()
     * @uses ExecuteVatDivisionIncomingRuleResponse::setMidocoRevenueBookingVatDiv()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode[] $midocoVatCode
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     */
    public function __construct(?array $midocoVatCode = null, ?array $midocoRevenueBookingVatDiv = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode)
            ->setMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatCode[]
     */
    public function getMidocoVatCode(): ?array
    {
        return $this->MidocoVatCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatCodeForArrayConstraintFromSetMidocoVatCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeVatDivisionIncomingRuleResponseMidocoVatCodeItem) {
            // validation for constraint: itemType
            if (!$executeVatDivisionIncomingRuleResponseMidocoVatCodeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoVatCode) {
                $invalidValues[] = is_object($executeVatDivisionIncomingRuleResponseMidocoVatCodeItem) ? get_class($executeVatDivisionIncomingRuleResponseMidocoVatCodeItem) : sprintf('%s(%s)', gettype($executeVatDivisionIncomingRuleResponseMidocoVatCodeItem), var_export($executeVatDivisionIncomingRuleResponseMidocoVatCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVatCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode[] $midocoVatCode
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionIncomingRuleResponse
     */
    public function setMidocoVatCode(?array $midocoVatCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatCodeArrayErrorMessage = self::validateMidocoVatCodeForArrayConstraintFromSetMidocoVatCode($midocoVatCode))) {
            throw new InvalidArgumentException($midocoVatCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
    /**
     * Add item to MidocoVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionIncomingRuleResponse
     */
    public function addToMidocoVatCode(\Pggns\MidocoApi\Order\StructType\MidocoVatCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoVatCode) {
            throw new InvalidArgumentException(sprintf('The MidocoVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVatCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatCode[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoRevenueBookingVatDiv value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    public function getMidocoRevenueBookingVatDiv(): ?array
    {
        return $this->MidocoRevenueBookingVatDiv;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoRevenueBookingVatDiv method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRevenueBookingVatDiv method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRevenueBookingVatDivForArrayConstraintFromSetMidocoRevenueBookingVatDiv(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeVatDivisionIncomingRuleResponseMidocoRevenueBookingVatDivItem) {
            // validation for constraint: itemType
            if (!$executeVatDivisionIncomingRuleResponseMidocoRevenueBookingVatDivItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv) {
                $invalidValues[] = is_object($executeVatDivisionIncomingRuleResponseMidocoRevenueBookingVatDivItem) ? get_class($executeVatDivisionIncomingRuleResponseMidocoRevenueBookingVatDivItem) : sprintf('%s(%s)', gettype($executeVatDivisionIncomingRuleResponseMidocoRevenueBookingVatDivItem), var_export($executeVatDivisionIncomingRuleResponseMidocoRevenueBookingVatDivItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionIncomingRuleResponse
     */
    public function setMidocoRevenueBookingVatDiv(?array $midocoRevenueBookingVatDiv = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRevenueBookingVatDivArrayErrorMessage = self::validateMidocoRevenueBookingVatDivForArrayConstraintFromSetMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv))) {
            throw new InvalidArgumentException($midocoRevenueBookingVatDivArrayErrorMessage, __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv = $midocoRevenueBookingVatDiv;
        
        return $this;
    }
    /**
     * Add item to MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionIncomingRuleResponse
     */
    public function addToMidocoRevenueBookingVatDiv(\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv) {
            throw new InvalidArgumentException(sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv[] = $item;
        
        return $this;
    }
}
