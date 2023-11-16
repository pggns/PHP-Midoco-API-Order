<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextTemplateDTO StructType
 * @subpackage Structs
 */
class TextTemplateDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The templateContent
     * @var string|null
     */
    protected ?string $templateContent = null;
    /**
     * The templateId
     * @var string|null
     */
    protected ?string $templateId = null;
    /**
     * Constructor method for TextTemplateDTO
     * @uses TextTemplateDTO::setCustomerId()
     * @uses TextTemplateDTO::setTemplateContent()
     * @uses TextTemplateDTO::setTemplateId()
     * @param int $customerId
     * @param string $templateContent
     * @param string $templateId
     */
    public function __construct(?int $customerId = null, ?string $templateContent = null, ?string $templateId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setTemplateContent($templateContent)
            ->setTemplateId($templateId);
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
     * @return \Pggns\MidocoApi\Order\StructType\TextTemplateDTO
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
     * Get templateContent value
     * @return string|null
     */
    public function getTemplateContent(): ?string
    {
        return $this->templateContent;
    }
    /**
     * Set templateContent value
     * @param string $templateContent
     * @return \Pggns\MidocoApi\Order\StructType\TextTemplateDTO
     */
    public function setTemplateContent(?string $templateContent = null): self
    {
        // validation for constraint: string
        if (!is_null($templateContent) && !is_string($templateContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateContent, true), gettype($templateContent)), __LINE__);
        }
        $this->templateContent = $templateContent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TextTemplateDTO
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
