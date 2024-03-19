<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmTemplateDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmTemplateDTO extends AbstractStructBase
{
    /**
     * The defaultLanguage
     * @var string|null
     */
    protected ?string $defaultLanguage = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The templateId
     * @var int|null
     */
    protected ?int $templateId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The visibility
     * @var int|null
     */
    protected ?int $visibility = null;
    /**
     * Constructor method for CrmTemplateDTO
     * @uses CrmTemplateDTO::setDefaultLanguage()
     * @uses CrmTemplateDTO::setDescription()
     * @uses CrmTemplateDTO::setTemplateId()
     * @uses CrmTemplateDTO::setUnitName()
     * @uses CrmTemplateDTO::setVisibility()
     * @param string $defaultLanguage
     * @param string $description
     * @param int $templateId
     * @param string $unitName
     * @param int $visibility
     */
    public function __construct(?string $defaultLanguage = null, ?string $description = null, ?int $templateId = null, ?string $unitName = null, ?int $visibility = null)
    {
        $this
            ->setDefaultLanguage($defaultLanguage)
            ->setDescription($description)
            ->setTemplateId($templateId)
            ->setUnitName($unitName)
            ->setVisibility($visibility);
    }
    /**
     * Get defaultLanguage value
     * @return string|null
     */
    public function getDefaultLanguage(): ?string
    {
        return $this->defaultLanguage;
    }
    /**
     * Set defaultLanguage value
     * @param string $defaultLanguage
     * @return \Pggns\MidocoApi\Order\StructType\CrmTemplateDTO
     */
    public function setDefaultLanguage(?string $defaultLanguage = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultLanguage) && !is_string($defaultLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultLanguage, true), gettype($defaultLanguage)), __LINE__);
        }
        $this->defaultLanguage = $defaultLanguage;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTemplateDTO
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
     * Get templateId value
     * @return int|null
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param int $templateId
     * @return \Pggns\MidocoApi\Order\StructType\CrmTemplateDTO
     */
    public function setTemplateId(?int $templateId = null): self
    {
        // validation for constraint: int
        if (!is_null($templateId) && !(is_int($templateId) || ctype_digit($templateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmTemplateDTO
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
    /**
     * Get visibility value
     * @return int|null
     */
    public function getVisibility(): ?int
    {
        return $this->visibility;
    }
    /**
     * Set visibility value
     * @param int $visibility
     * @return \Pggns\MidocoApi\Order\StructType\CrmTemplateDTO
     */
    public function setVisibility(?int $visibility = null): self
    {
        // validation for constraint: int
        if (!is_null($visibility) && !(is_int($visibility) || ctype_digit($visibility))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($visibility, true), gettype($visibility)), __LINE__);
        }
        $this->visibility = $visibility;
        
        return $this;
    }
}
