<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeChoiceValueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AttributeChoiceValueDTO extends AbstractStructBase
{
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The choiceValue
     * @var string|null
     */
    protected ?string $choiceValue = null;
    /**
     * The contextId
     * @var string|null
     */
    protected ?string $contextId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for AttributeChoiceValueDTO
     * @uses AttributeChoiceValueDTO::setAttributeName()
     * @uses AttributeChoiceValueDTO::setChoiceValue()
     * @uses AttributeChoiceValueDTO::setContextId()
     * @uses AttributeChoiceValueDTO::setUnitName()
     * @param string $attributeName
     * @param string $choiceValue
     * @param string $contextId
     * @param string $unitName
     */
    public function __construct(?string $attributeName = null, ?string $choiceValue = null, ?string $contextId = null, ?string $unitName = null)
    {
        $this
            ->setAttributeName($attributeName)
            ->setChoiceValue($choiceValue)
            ->setContextId($contextId)
            ->setUnitName($unitName);
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get choiceValue value
     * @return string|null
     */
    public function getChoiceValue(): ?string
    {
        return $this->choiceValue;
    }
    /**
     * Set choiceValue value
     * @param string $choiceValue
     * @return \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO
     */
    public function setChoiceValue(?string $choiceValue = null): self
    {
        // validation for constraint: string
        if (!is_null($choiceValue) && !is_string($choiceValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($choiceValue, true), gettype($choiceValue)), __LINE__);
        }
        $this->choiceValue = $choiceValue;
        
        return $this;
    }
    /**
     * Get contextId value
     * @return string|null
     */
    public function getContextId(): ?string
    {
        return $this->contextId;
    }
    /**
     * Set contextId value
     * @param string $contextId
     * @return \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO
     */
    public function setContextId(?string $contextId = null): self
    {
        // validation for constraint: string
        if (!is_null($contextId) && !is_string($contextId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextId, true), gettype($contextId)), __LINE__);
        }
        $this->contextId = $contextId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\AttributeChoiceValueDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
