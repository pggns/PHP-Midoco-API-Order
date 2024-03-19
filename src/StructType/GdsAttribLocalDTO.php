<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GdsAttribLocalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GdsAttribLocalDTO extends AbstractStructBase
{
    /**
     * The attributeId
     * @var string|null
     */
    protected ?string $attributeId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The locale
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * Constructor method for GdsAttribLocalDTO
     * @uses GdsAttribLocalDTO::setAttributeId()
     * @uses GdsAttribLocalDTO::setDescription()
     * @uses GdsAttribLocalDTO::setLocale()
     * @param string $attributeId
     * @param string $description
     * @param string $locale
     */
    public function __construct(?string $attributeId = null, ?string $description = null, ?string $locale = null)
    {
        $this
            ->setAttributeId($attributeId)
            ->setDescription($description)
            ->setLocale($locale);
    }
    /**
     * Get attributeId value
     * @return string|null
     */
    public function getAttributeId(): ?string
    {
        return $this->attributeId;
    }
    /**
     * Set attributeId value
     * @param string $attributeId
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribLocalDTO
     */
    public function setAttributeId(?string $attributeId = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeId) && !is_string($attributeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeId, true), gettype($attributeId)), __LINE__);
        }
        $this->attributeId = $attributeId;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribLocalDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribLocalDTO
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
}
