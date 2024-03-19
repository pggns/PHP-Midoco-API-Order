<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TemplateDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The isDefault
     * @var bool|null
     */
    protected ?bool $isDefault = null;
    /**
     * The templateId
     * @var int|null
     */
    protected ?int $templateId = null;
    /**
     * The templateText
     * @var string|null
     */
    protected ?string $templateText = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for TemplateDTO
     * @uses TemplateDTO::setDescription()
     * @uses TemplateDTO::setIsDefault()
     * @uses TemplateDTO::setTemplateId()
     * @uses TemplateDTO::setTemplateText()
     * @uses TemplateDTO::setType()
     * @param string $description
     * @param bool $isDefault
     * @param int $templateId
     * @param string $templateText
     * @param string $type
     */
    public function __construct(?string $description = null, ?bool $isDefault = null, ?int $templateId = null, ?string $templateText = null, ?string $type = null)
    {
        $this
            ->setDescription($description)
            ->setIsDefault($isDefault)
            ->setTemplateId($templateId)
            ->setTemplateText($templateText)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Order\StructType\TemplateDTO
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
     * Get isDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Set isDefault value
     * @param bool $isDefault
     * @return \Pggns\MidocoApi\Order\StructType\TemplateDTO
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->isDefault = $isDefault;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TemplateDTO
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
     * Get templateText value
     * @return string|null
     */
    public function getTemplateText(): ?string
    {
        return $this->templateText;
    }
    /**
     * Set templateText value
     * @param string $templateText
     * @return \Pggns\MidocoApi\Order\StructType\TemplateDTO
     */
    public function setTemplateText(?string $templateText = null): self
    {
        // validation for constraint: string
        if (!is_null($templateText) && !is_string($templateText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateText, true), gettype($templateText)), __LINE__);
        }
        $this->templateText = $templateText;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\TemplateDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
