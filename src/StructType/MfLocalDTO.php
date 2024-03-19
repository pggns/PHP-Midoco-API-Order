<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MfLocalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MfLocalDTO extends AbstractStructBase
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
     * The localizedName
     * @var string|null
     */
    protected ?string $localizedName = null;
    /**
     * Constructor method for MfLocalDTO
     * @uses MfLocalDTO::setAttrName()
     * @uses MfLocalDTO::setBean()
     * @uses MfLocalDTO::setClassName()
     * @uses MfLocalDTO::setDescription()
     * @uses MfLocalDTO::setLocale()
     * @uses MfLocalDTO::setLocalizedName()
     * @param string $attrName
     * @param string $bean
     * @param string $className
     * @param string $description
     * @param string $locale
     * @param string $localizedName
     */
    public function __construct(?string $attrName = null, ?string $bean = null, ?string $className = null, ?string $description = null, ?string $locale = null, ?string $localizedName = null)
    {
        $this
            ->setAttrName($attrName)
            ->setBean($bean)
            ->setClassName($className)
            ->setDescription($description)
            ->setLocale($locale)
            ->setLocalizedName($localizedName);
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
     * @return \Pggns\MidocoApi\Order\StructType\MfLocalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MfLocalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MfLocalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MfLocalDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MfLocalDTO
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
    /**
     * Get localizedName value
     * @return string|null
     */
    public function getLocalizedName(): ?string
    {
        return $this->localizedName;
    }
    /**
     * Set localizedName value
     * @param string $localizedName
     * @return \Pggns\MidocoApi\Order\StructType\MfLocalDTO
     */
    public function setLocalizedName(?string $localizedName = null): self
    {
        // validation for constraint: string
        if (!is_null($localizedName) && !is_string($localizedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localizedName, true), gettype($localizedName)), __LINE__);
        }
        $this->localizedName = $localizedName;
        
        return $this;
    }
}
