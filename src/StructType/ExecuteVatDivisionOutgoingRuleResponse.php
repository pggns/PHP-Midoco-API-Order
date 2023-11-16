<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteVatDivisionOutgoingRuleResponse StructType
 * @subpackage Structs
 */
class ExecuteVatDivisionOutgoingRuleResponse extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ordersd:MidocoVatCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVatCode[]
     */
    protected array $MidocoVatCode = [];
    /**
     * The MidocoSellItemVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    protected array $MidocoSellItemVatDivision = [];
    /**
     * Constructor method for ExecuteVatDivisionOutgoingRuleResponse
     * @uses ExecuteVatDivisionOutgoingRuleResponse::setMidocoVatCode()
     * @uses ExecuteVatDivisionOutgoingRuleResponse::setMidocoSellItemVatDivision()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode[] $midocoVatCode
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     */
    public function __construct(array $midocoVatCode = [], array $midocoSellItemVatDivision = [])
    {
        $this
            ->setMidocoVatCode($midocoVatCode)
            ->setMidocoSellItemVatDivision($midocoSellItemVatDivision);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatCode[]
     */
    public function getMidocoVatCode(): array
    {
        return $this->MidocoVatCode;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVatCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatCodeForArrayConstraintsFromSetMidocoVatCode(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeVatDivisionOutgoingRuleResponseMidocoVatCodeItem) {
            // validation for constraint: itemType
            if (!$executeVatDivisionOutgoingRuleResponseMidocoVatCodeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoVatCode) {
                $invalidValues[] = is_object($executeVatDivisionOutgoingRuleResponseMidocoVatCodeItem) ? get_class($executeVatDivisionOutgoingRuleResponseMidocoVatCodeItem) : sprintf('%s(%s)', gettype($executeVatDivisionOutgoingRuleResponseMidocoVatCodeItem), var_export($executeVatDivisionOutgoingRuleResponseMidocoVatCodeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionOutgoingRuleResponse
     */
    public function setMidocoVatCode(array $midocoVatCode = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatCodeArrayErrorMessage = self::validateMidocoVatCodeForArrayConstraintsFromSetMidocoVatCode($midocoVatCode))) {
            throw new InvalidArgumentException($midocoVatCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
    /**
     * Add item to MidocoVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionOutgoingRuleResponse
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
     * Get MidocoSellItemVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    public function getMidocoSellItemVatDivision(): array
    {
        return $this->MidocoSellItemVatDivision;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemVatDivision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemVatDivision method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemVatDivisionForArrayConstraintsFromSetMidocoSellItemVatDivision(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeVatDivisionOutgoingRuleResponseMidocoSellItemVatDivisionItem) {
            // validation for constraint: itemType
            if (!$executeVatDivisionOutgoingRuleResponseMidocoSellItemVatDivisionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
                $invalidValues[] = is_object($executeVatDivisionOutgoingRuleResponseMidocoSellItemVatDivisionItem) ? get_class($executeVatDivisionOutgoingRuleResponseMidocoSellItemVatDivisionItem) : sprintf('%s(%s)', gettype($executeVatDivisionOutgoingRuleResponseMidocoSellItemVatDivisionItem), var_export($executeVatDivisionOutgoingRuleResponseMidocoSellItemVatDivisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionOutgoingRuleResponse
     */
    public function setMidocoSellItemVatDivision(array $midocoSellItemVatDivision = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemVatDivisionArrayErrorMessage = self::validateMidocoSellItemVatDivisionForArrayConstraintsFromSetMidocoSellItemVatDivision($midocoSellItemVatDivision))) {
            throw new InvalidArgumentException($midocoSellItemVatDivisionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemVatDivision = $midocoSellItemVatDivision;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteVatDivisionOutgoingRuleResponse
     */
    public function addToMidocoSellItemVatDivision(\Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemVatDivision[] = $item;
        
        return $this;
    }
}
