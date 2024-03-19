<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeDefinitionLocalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AttributeDefinitionLocalDTO extends AbstractStructBase
{
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The contextId
     * @var string|null
     */
    protected ?string $contextId = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The localization
     * @var string|null
     */
    protected ?string $localization = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for AttributeDefinitionLocalDTO
     * @uses AttributeDefinitionLocalDTO::setAttributeName()
     * @uses AttributeDefinitionLocalDTO::setContextId()
     * @uses AttributeDefinitionLocalDTO::setCultureId()
     * @uses AttributeDefinitionLocalDTO::setLocalization()
     * @uses AttributeDefinitionLocalDTO::setUnitName()
     * @param string $attributeName
     * @param string $contextId
     * @param string $cultureId
     * @param string $localization
     * @param string $unitName
     */
    public function __construct(?string $attributeName = null, ?string $contextId = null, ?string $cultureId = null, ?string $localization = null, ?string $unitName = null)
    {
        $this
            ->setAttributeName($attributeName)
            ->setContextId($contextId)
            ->setCultureId($cultureId)
            ->setLocalization($localization)
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
     * @return \Pggns\MidocoApi\Order\StructType\AttributeDefinitionLocalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AttributeDefinitionLocalDTO
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
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\AttributeDefinitionLocalDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get localization value
     * @return string|null
     */
    public function getLocalization(): ?string
    {
        return $this->localization;
    }
    /**
     * Set localization value
     * @param string $localization
     * @return \Pggns\MidocoApi\Order\StructType\AttributeDefinitionLocalDTO
     */
    public function setLocalization(?string $localization = null): self
    {
        // validation for constraint: string
        if (!is_null($localization) && !is_string($localization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localization, true), gettype($localization)), __LINE__);
        }
        $this->localization = $localization;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AttributeDefinitionLocalDTO
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
