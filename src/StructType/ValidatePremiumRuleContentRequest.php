<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatePremiumRuleContentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ValidatePremiumRuleContentRequest extends AbstractStructBase
{
    /**
     * The orgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgunit = null;
    /**
     * The rulebase
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var float[]
     */
    protected ?array $rulebase = null;
    /**
     * The ruleContent
     * @var string|null
     */
    protected ?string $ruleContent = null;
    /**
     * Constructor method for ValidatePremiumRuleContentRequest
     * @uses ValidatePremiumRuleContentRequest::setOrgunit()
     * @uses ValidatePremiumRuleContentRequest::setRulebase()
     * @uses ValidatePremiumRuleContentRequest::setRuleContent()
     * @param string[] $orgunit
     * @param float[] $rulebase
     * @param string $ruleContent
     */
    public function __construct(?array $orgunit = null, ?array $rulebase = null, ?string $ruleContent = null)
    {
        $this
            ->setOrgunit($orgunit)
            ->setRulebase($rulebase)
            ->setRuleContent($ruleContent);
    }
    /**
     * Get orgunit value
     * @return string[]
     */
    public function getOrgunit(): ?array
    {
        return $this->orgunit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgunit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgunitForArrayConstraintFromSetOrgunit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $validatePremiumRuleContentRequestOrgunitItem) {
            // validation for constraint: itemType
            if (!is_string($validatePremiumRuleContentRequestOrgunitItem)) {
                $invalidValues[] = is_object($validatePremiumRuleContentRequestOrgunitItem) ? get_class($validatePremiumRuleContentRequestOrgunitItem) : sprintf('%s(%s)', gettype($validatePremiumRuleContentRequestOrgunitItem), var_export($validatePremiumRuleContentRequestOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgunit property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgunit value
     * @throws InvalidArgumentException
     * @param string[] $orgunit
     * @return \Pggns\MidocoApi\Order\StructType\ValidatePremiumRuleContentRequest
     */
    public function setOrgunit(?array $orgunit = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgunitArrayErrorMessage = self::validateOrgunitForArrayConstraintFromSetOrgunit($orgunit))) {
            throw new InvalidArgumentException($orgunitArrayErrorMessage, __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
    /**
     * Add item to orgunit value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\ValidatePremiumRuleContentRequest
     */
    public function addToOrgunit(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgunit property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgunit[] = $item;
        
        return $this;
    }
    /**
     * Get rulebase value
     * @return float[]
     */
    public function getRulebase(): ?array
    {
        return $this->rulebase;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRulebase method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRulebase method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRulebaseForArrayConstraintFromSetRulebase(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $validatePremiumRuleContentRequestRulebaseItem) {
            // validation for constraint: itemType
            if (!(is_float($validatePremiumRuleContentRequestRulebaseItem) || is_numeric($validatePremiumRuleContentRequestRulebaseItem))) {
                $invalidValues[] = is_object($validatePremiumRuleContentRequestRulebaseItem) ? get_class($validatePremiumRuleContentRequestRulebaseItem) : sprintf('%s(%s)', gettype($validatePremiumRuleContentRequestRulebaseItem), var_export($validatePremiumRuleContentRequestRulebaseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The rulebase property can only contain items of type float, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set rulebase value
     * @throws InvalidArgumentException
     * @param float[] $rulebase
     * @return \Pggns\MidocoApi\Order\StructType\ValidatePremiumRuleContentRequest
     */
    public function setRulebase(?array $rulebase = null): self
    {
        // validation for constraint: array
        if ('' !== ($rulebaseArrayErrorMessage = self::validateRulebaseForArrayConstraintFromSetRulebase($rulebase))) {
            throw new InvalidArgumentException($rulebaseArrayErrorMessage, __LINE__);
        }
        $this->rulebase = $rulebase;
        
        return $this;
    }
    /**
     * Add item to rulebase value
     * @throws InvalidArgumentException
     * @param float $item
     * @return \Pggns\MidocoApi\Order\StructType\ValidatePremiumRuleContentRequest
     */
    public function addToRulebase(float $item): self
    {
        // validation for constraint: itemType
        if (!(is_float($item) || is_numeric($item))) {
            throw new InvalidArgumentException(sprintf('The rulebase property can only contain items of type float, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->rulebase[] = $item;
        
        return $this;
    }
    /**
     * Get ruleContent value
     * @return string|null
     */
    public function getRuleContent(): ?string
    {
        return $this->ruleContent;
    }
    /**
     * Set ruleContent value
     * @param string $ruleContent
     * @return \Pggns\MidocoApi\Order\StructType\ValidatePremiumRuleContentRequest
     */
    public function setRuleContent(?string $ruleContent = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleContent) && !is_string($ruleContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleContent, true), gettype($ruleContent)), __LINE__);
        }
        $this->ruleContent = $ruleContent;
        
        return $this;
    }
}
