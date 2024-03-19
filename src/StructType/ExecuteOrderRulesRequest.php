<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteOrderRulesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteOrderRulesRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The ruleName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $ruleName = null;
    /**
     * The infoKey
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $infoKey = null;
    /**
     * The infoValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $infoValue = null;
    /**
     * Constructor method for ExecuteOrderRulesRequest
     * @uses ExecuteOrderRulesRequest::setOrderId()
     * @uses ExecuteOrderRulesRequest::setRuleName()
     * @uses ExecuteOrderRulesRequest::setInfoKey()
     * @uses ExecuteOrderRulesRequest::setInfoValue()
     * @param int $orderId
     * @param string[] $ruleName
     * @param string[] $infoKey
     * @param string[] $infoValue
     */
    public function __construct(?int $orderId = null, ?array $ruleName = null, ?array $infoKey = null, ?array $infoValue = null)
    {
        $this
            ->setOrderId($orderId)
            ->setRuleName($ruleName)
            ->setInfoKey($infoKey)
            ->setInfoValue($infoValue);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get ruleName value
     * @return string[]
     */
    public function getRuleName(): ?array
    {
        return $this->ruleName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRuleName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRuleName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRuleNameForArrayConstraintFromSetRuleName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeOrderRulesRequestRuleNameItem) {
            // validation for constraint: itemType
            if (!is_string($executeOrderRulesRequestRuleNameItem)) {
                $invalidValues[] = is_object($executeOrderRulesRequestRuleNameItem) ? get_class($executeOrderRulesRequestRuleNameItem) : sprintf('%s(%s)', gettype($executeOrderRulesRequestRuleNameItem), var_export($executeOrderRulesRequestRuleNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ruleName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ruleName value
     * @throws InvalidArgumentException
     * @param string[] $ruleName
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest
     */
    public function setRuleName(?array $ruleName = null): self
    {
        // validation for constraint: array
        if ('' !== ($ruleNameArrayErrorMessage = self::validateRuleNameForArrayConstraintFromSetRuleName($ruleName))) {
            throw new InvalidArgumentException($ruleNameArrayErrorMessage, __LINE__);
        }
        $this->ruleName = $ruleName;
        
        return $this;
    }
    /**
     * Add item to ruleName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest
     */
    public function addToRuleName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ruleName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ruleName[] = $item;
        
        return $this;
    }
    /**
     * Get infoKey value
     * @return string[]
     */
    public function getInfoKey(): ?array
    {
        return $this->infoKey;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInfoKey method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInfoKey method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInfoKeyForArrayConstraintFromSetInfoKey(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeOrderRulesRequestInfoKeyItem) {
            // validation for constraint: itemType
            if (!is_string($executeOrderRulesRequestInfoKeyItem)) {
                $invalidValues[] = is_object($executeOrderRulesRequestInfoKeyItem) ? get_class($executeOrderRulesRequestInfoKeyItem) : sprintf('%s(%s)', gettype($executeOrderRulesRequestInfoKeyItem), var_export($executeOrderRulesRequestInfoKeyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The infoKey property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set infoKey value
     * @throws InvalidArgumentException
     * @param string[] $infoKey
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest
     */
    public function setInfoKey(?array $infoKey = null): self
    {
        // validation for constraint: array
        if ('' !== ($infoKeyArrayErrorMessage = self::validateInfoKeyForArrayConstraintFromSetInfoKey($infoKey))) {
            throw new InvalidArgumentException($infoKeyArrayErrorMessage, __LINE__);
        }
        $this->infoKey = $infoKey;
        
        return $this;
    }
    /**
     * Add item to infoKey value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest
     */
    public function addToInfoKey(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The infoKey property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->infoKey[] = $item;
        
        return $this;
    }
    /**
     * Get infoValue value
     * @return string[]
     */
    public function getInfoValue(): ?array
    {
        return $this->infoValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInfoValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInfoValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInfoValueForArrayConstraintFromSetInfoValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeOrderRulesRequestInfoValueItem) {
            // validation for constraint: itemType
            if (!is_string($executeOrderRulesRequestInfoValueItem)) {
                $invalidValues[] = is_object($executeOrderRulesRequestInfoValueItem) ? get_class($executeOrderRulesRequestInfoValueItem) : sprintf('%s(%s)', gettype($executeOrderRulesRequestInfoValueItem), var_export($executeOrderRulesRequestInfoValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The infoValue property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set infoValue value
     * @throws InvalidArgumentException
     * @param string[] $infoValue
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest
     */
    public function setInfoValue(?array $infoValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($infoValueArrayErrorMessage = self::validateInfoValueForArrayConstraintFromSetInfoValue($infoValue))) {
            throw new InvalidArgumentException($infoValueArrayErrorMessage, __LINE__);
        }
        $this->infoValue = $infoValue;
        
        return $this;
    }
    /**
     * Add item to infoValue value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest
     */
    public function addToInfoValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The infoValue property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->infoValue[] = $item;
        
        return $this;
    }
}
