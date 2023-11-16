<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextTemplateTypeDTO StructType
 * @subpackage Structs
 */
class TextTemplateTypeDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The templateId
     * @var string|null
     */
    protected ?string $templateId = null;
    /**
     * Constructor method for TextTemplateTypeDTO
     * @uses TextTemplateTypeDTO::setDescription()
     * @uses TextTemplateTypeDTO::setTemplateId()
     * @param string $description
     * @param string $templateId
     */
    public function __construct(?string $description = null, ?string $templateId = null)
    {
        $this
            ->setDescription($description)
            ->setTemplateId($templateId);
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
     * @return \Pggns\MidocoApi\Order\StructType\TextTemplateTypeDTO
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
     * @return string|null
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param string $templateId
     * @return \Pggns\MidocoApi\Order\StructType\TextTemplateTypeDTO
     */
    public function setTemplateId(?string $templateId = null): self
    {
        // validation for constraint: string
        if (!is_null($templateId) && !is_string($templateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
}
