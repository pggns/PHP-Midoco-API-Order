<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoConsent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoConsent extends ConsentDTO
{
    /**
     * The disabledUnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $disabledUnitName = null;
    /**
     * The enabledUnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $enabledUnitName = null;
    /**
     * The displayText
     * @var string|null
     */
    protected ?string $displayText = null;
    /**
     * Constructor method for MidocoConsent
     * @uses MidocoConsent::setDisabledUnitName()
     * @uses MidocoConsent::setEnabledUnitName()
     * @uses MidocoConsent::setDisplayText()
     * @param string[] $disabledUnitName
     * @param string[] $enabledUnitName
     * @param string $displayText
     */
    public function __construct(?array $disabledUnitName = null, ?array $enabledUnitName = null, ?string $displayText = null)
    {
        $this
            ->setDisabledUnitName($disabledUnitName)
            ->setEnabledUnitName($enabledUnitName)
            ->setDisplayText($displayText);
    }
    /**
     * Get disabledUnitName value
     * @return string[]
     */
    public function getDisabledUnitName(): ?array
    {
        return $this->disabledUnitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDisabledUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisabledUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisabledUnitNameForArrayConstraintFromSetDisabledUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoConsentDisabledUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($midocoConsentDisabledUnitNameItem)) {
                $invalidValues[] = is_object($midocoConsentDisabledUnitNameItem) ? get_class($midocoConsentDisabledUnitNameItem) : sprintf('%s(%s)', gettype($midocoConsentDisabledUnitNameItem), var_export($midocoConsentDisabledUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The disabledUnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set disabledUnitName value
     * @throws InvalidArgumentException
     * @param string[] $disabledUnitName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsent
     */
    public function setDisabledUnitName(?array $disabledUnitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($disabledUnitNameArrayErrorMessage = self::validateDisabledUnitNameForArrayConstraintFromSetDisabledUnitName($disabledUnitName))) {
            throw new InvalidArgumentException($disabledUnitNameArrayErrorMessage, __LINE__);
        }
        $this->disabledUnitName = $disabledUnitName;
        
        return $this;
    }
    /**
     * Add item to disabledUnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsent
     */
    public function addToDisabledUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The disabledUnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->disabledUnitName[] = $item;
        
        return $this;
    }
    /**
     * Get enabledUnitName value
     * @return string[]
     */
    public function getEnabledUnitName(): ?array
    {
        return $this->enabledUnitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEnabledUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnabledUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnabledUnitNameForArrayConstraintFromSetEnabledUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoConsentEnabledUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($midocoConsentEnabledUnitNameItem)) {
                $invalidValues[] = is_object($midocoConsentEnabledUnitNameItem) ? get_class($midocoConsentEnabledUnitNameItem) : sprintf('%s(%s)', gettype($midocoConsentEnabledUnitNameItem), var_export($midocoConsentEnabledUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The enabledUnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set enabledUnitName value
     * @throws InvalidArgumentException
     * @param string[] $enabledUnitName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsent
     */
    public function setEnabledUnitName(?array $enabledUnitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($enabledUnitNameArrayErrorMessage = self::validateEnabledUnitNameForArrayConstraintFromSetEnabledUnitName($enabledUnitName))) {
            throw new InvalidArgumentException($enabledUnitNameArrayErrorMessage, __LINE__);
        }
        $this->enabledUnitName = $enabledUnitName;
        
        return $this;
    }
    /**
     * Add item to enabledUnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsent
     */
    public function addToEnabledUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The enabledUnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->enabledUnitName[] = $item;
        
        return $this;
    }
    /**
     * Get displayText value
     * @return string|null
     */
    public function getDisplayText(): ?string
    {
        return $this->displayText;
    }
    /**
     * Set displayText value
     * @param string $displayText
     * @return \Pggns\MidocoApi\Order\StructType\MidocoConsent
     */
    public function setDisplayText(?string $displayText = null): self
    {
        // validation for constraint: string
        if (!is_null($displayText) && !is_string($displayText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayText, true), gettype($displayText)), __LINE__);
        }
        $this->displayText = $displayText;
        
        return $this;
    }
}
