<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerMfDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerMfDTO extends AbstractStructBase
{
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * The bean
     * @var string|null
     */
    protected ?string $bean = null;
    /**
     * The className
     * @var string|null
     */
    protected ?string $className = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dataType
     * @var int|null
     */
    protected ?int $dataType = null;
    /**
     * The hasAllowedValues
     * @var bool|null
     */
    protected ?bool $hasAllowedValues = null;
    /**
     * The isOptional
     * @var bool|null
     */
    protected ?bool $isOptional = null;
    /**
     * The maxLength
     * @var int|null
     */
    protected ?int $maxLength = null;
    /**
     * The minLength
     * @var int|null
     */
    protected ?int $minLength = null;
    /**
     * The onlyNumeric
     * @var bool|null
     */
    protected ?bool $onlyNumeric = null;
    /**
     * The presetContent
     * @var bool|null
     */
    protected ?bool $presetContent = null;
    /**
     * The presetValue
     * @var string|null
     */
    protected ?string $presetValue = null;
    /**
     * The printEnforced
     * @var bool|null
     */
    protected ?bool $printEnforced = null;
    /**
     * The printingLabel
     * @var string|null
     */
    protected ?string $printingLabel = null;
    /**
     * The regexPattern
     * @var string|null
     */
    protected ?string $regexPattern = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for CustomerMfDTO
     * @uses CustomerMfDTO::setAttrName()
     * @uses CustomerMfDTO::setBean()
     * @uses CustomerMfDTO::setClassName()
     * @uses CustomerMfDTO::setCustomerId()
     * @uses CustomerMfDTO::setDataType()
     * @uses CustomerMfDTO::setHasAllowedValues()
     * @uses CustomerMfDTO::setIsOptional()
     * @uses CustomerMfDTO::setMaxLength()
     * @uses CustomerMfDTO::setMinLength()
     * @uses CustomerMfDTO::setOnlyNumeric()
     * @uses CustomerMfDTO::setPresetContent()
     * @uses CustomerMfDTO::setPresetValue()
     * @uses CustomerMfDTO::setPrintEnforced()
     * @uses CustomerMfDTO::setPrintingLabel()
     * @uses CustomerMfDTO::setRegexPattern()
     * @uses CustomerMfDTO::setValidFrom()
     * @uses CustomerMfDTO::setValidTo()
     * @param string $attrName
     * @param string $bean
     * @param string $className
     * @param int $customerId
     * @param int $dataType
     * @param bool $hasAllowedValues
     * @param bool $isOptional
     * @param int $maxLength
     * @param int $minLength
     * @param bool $onlyNumeric
     * @param bool $presetContent
     * @param string $presetValue
     * @param bool $printEnforced
     * @param string $printingLabel
     * @param string $regexPattern
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $attrName = null, ?string $bean = null, ?string $className = null, ?int $customerId = null, ?int $dataType = null, ?bool $hasAllowedValues = null, ?bool $isOptional = null, ?int $maxLength = null, ?int $minLength = null, ?bool $onlyNumeric = null, ?bool $presetContent = null, ?string $presetValue = null, ?bool $printEnforced = null, ?string $printingLabel = null, ?string $regexPattern = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setAttrName($attrName)
            ->setBean($bean)
            ->setClassName($className)
            ->setCustomerId($customerId)
            ->setDataType($dataType)
            ->setHasAllowedValues($hasAllowedValues)
            ->setIsOptional($isOptional)
            ->setMaxLength($maxLength)
            ->setMinLength($minLength)
            ->setOnlyNumeric($onlyNumeric)
            ->setPresetContent($presetContent)
            ->setPresetValue($presetValue)
            ->setPrintEnforced($printEnforced)
            ->setPrintingLabel($printingLabel)
            ->setRegexPattern($regexPattern)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get attrName value
     * @return string|null
     */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     * @param string $attrName
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setAttrName(?string $attrName = null): self
    {
        // validation for constraint: string
        if (!is_null($attrName) && !is_string($attrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrName, true), gettype($attrName)), __LINE__);
        }
        $this->attrName = $attrName;
        
        return $this;
    }
    /**
     * Get bean value
     * @return string|null
     */
    public function getBean(): ?string
    {
        return $this->bean;
    }
    /**
     * Set bean value
     * @param string $bean
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setBean(?string $bean = null): self
    {
        // validation for constraint: string
        if (!is_null($bean) && !is_string($bean)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bean, true), gettype($bean)), __LINE__);
        }
        $this->bean = $bean;
        
        return $this;
    }
    /**
     * Get className value
     * @return string|null
     */
    public function getClassName(): ?string
    {
        return $this->className;
    }
    /**
     * Set className value
     * @param string $className
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setClassName(?string $className = null): self
    {
        // validation for constraint: string
        if (!is_null($className) && !is_string($className)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($className, true), gettype($className)), __LINE__);
        }
        $this->className = $className;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get dataType value
     * @return int|null
     */
    public function getDataType(): ?int
    {
        return $this->dataType;
    }
    /**
     * Set dataType value
     * @param int $dataType
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setDataType(?int $dataType = null): self
    {
        // validation for constraint: int
        if (!is_null($dataType) && !(is_int($dataType) || ctype_digit($dataType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dataType, true), gettype($dataType)), __LINE__);
        }
        $this->dataType = $dataType;
        
        return $this;
    }
    /**
     * Get hasAllowedValues value
     * @return bool|null
     */
    public function getHasAllowedValues(): ?bool
    {
        return $this->hasAllowedValues;
    }
    /**
     * Set hasAllowedValues value
     * @param bool $hasAllowedValues
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setHasAllowedValues(?bool $hasAllowedValues = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasAllowedValues) && !is_bool($hasAllowedValues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAllowedValues, true), gettype($hasAllowedValues)), __LINE__);
        }
        $this->hasAllowedValues = $hasAllowedValues;
        
        return $this;
    }
    /**
     * Get isOptional value
     * @return bool|null
     */
    public function getIsOptional(): ?bool
    {
        return $this->isOptional;
    }
    /**
     * Set isOptional value
     * @param bool $isOptional
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setIsOptional(?bool $isOptional = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOptional) && !is_bool($isOptional)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOptional, true), gettype($isOptional)), __LINE__);
        }
        $this->isOptional = $isOptional;
        
        return $this;
    }
    /**
     * Get maxLength value
     * @return int|null
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }
    /**
     * Set maxLength value
     * @param int $maxLength
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setMaxLength(?int $maxLength = null): self
    {
        // validation for constraint: int
        if (!is_null($maxLength) && !(is_int($maxLength) || ctype_digit($maxLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxLength, true), gettype($maxLength)), __LINE__);
        }
        $this->maxLength = $maxLength;
        
        return $this;
    }
    /**
     * Get minLength value
     * @return int|null
     */
    public function getMinLength(): ?int
    {
        return $this->minLength;
    }
    /**
     * Set minLength value
     * @param int $minLength
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setMinLength(?int $minLength = null): self
    {
        // validation for constraint: int
        if (!is_null($minLength) && !(is_int($minLength) || ctype_digit($minLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minLength, true), gettype($minLength)), __LINE__);
        }
        $this->minLength = $minLength;
        
        return $this;
    }
    /**
     * Get onlyNumeric value
     * @return bool|null
     */
    public function getOnlyNumeric(): ?bool
    {
        return $this->onlyNumeric;
    }
    /**
     * Set onlyNumeric value
     * @param bool $onlyNumeric
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setOnlyNumeric(?bool $onlyNumeric = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyNumeric) && !is_bool($onlyNumeric)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyNumeric, true), gettype($onlyNumeric)), __LINE__);
        }
        $this->onlyNumeric = $onlyNumeric;
        
        return $this;
    }
    /**
     * Get presetContent value
     * @return bool|null
     */
    public function getPresetContent(): ?bool
    {
        return $this->presetContent;
    }
    /**
     * Set presetContent value
     * @param bool $presetContent
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setPresetContent(?bool $presetContent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($presetContent) && !is_bool($presetContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($presetContent, true), gettype($presetContent)), __LINE__);
        }
        $this->presetContent = $presetContent;
        
        return $this;
    }
    /**
     * Get presetValue value
     * @return string|null
     */
    public function getPresetValue(): ?string
    {
        return $this->presetValue;
    }
    /**
     * Set presetValue value
     * @param string $presetValue
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setPresetValue(?string $presetValue = null): self
    {
        // validation for constraint: string
        if (!is_null($presetValue) && !is_string($presetValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($presetValue, true), gettype($presetValue)), __LINE__);
        }
        $this->presetValue = $presetValue;
        
        return $this;
    }
    /**
     * Get printEnforced value
     * @return bool|null
     */
    public function getPrintEnforced(): ?bool
    {
        return $this->printEnforced;
    }
    /**
     * Set printEnforced value
     * @param bool $printEnforced
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setPrintEnforced(?bool $printEnforced = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printEnforced) && !is_bool($printEnforced)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printEnforced, true), gettype($printEnforced)), __LINE__);
        }
        $this->printEnforced = $printEnforced;
        
        return $this;
    }
    /**
     * Get printingLabel value
     * @return string|null
     */
    public function getPrintingLabel(): ?string
    {
        return $this->printingLabel;
    }
    /**
     * Set printingLabel value
     * @param string $printingLabel
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setPrintingLabel(?string $printingLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($printingLabel) && !is_string($printingLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingLabel, true), gettype($printingLabel)), __LINE__);
        }
        $this->printingLabel = $printingLabel;
        
        return $this;
    }
    /**
     * Get regexPattern value
     * @return string|null
     */
    public function getRegexPattern(): ?string
    {
        return $this->regexPattern;
    }
    /**
     * Set regexPattern value
     * @param string $regexPattern
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setRegexPattern(?string $regexPattern = null): self
    {
        // validation for constraint: string
        if (!is_null($regexPattern) && !is_string($regexPattern)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regexPattern, true), gettype($regexPattern)), __LINE__);
        }
        $this->regexPattern = $regexPattern;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Order\StructType\CustomerMfDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
