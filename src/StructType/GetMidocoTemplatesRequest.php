<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTemplatesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoTemplatesRequest extends AbstractStructBase
{
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
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The isDefault
     * @var bool|null
     */
    protected ?bool $isDefault = null;
    /**
     * The subType
     * @var string|null
     */
    protected ?string $subType = null;
    /**
     * Constructor method for GetMidocoTemplatesRequest
     * @uses GetMidocoTemplatesRequest::setDescription()
     * @uses GetMidocoTemplatesRequest::setTemplateId()
     * @uses GetMidocoTemplatesRequest::setType()
     * @uses GetMidocoTemplatesRequest::setIsDefault()
     * @uses GetMidocoTemplatesRequest::setSubType()
     * @param string $description
     * @param int $templateId
     * @param string $type
     * @param bool $isDefault
     * @param string $subType
     */
    public function __construct(?string $description = null, ?int $templateId = null, ?string $type = null, ?bool $isDefault = null, ?string $subType = null)
    {
        $this
            ->setDescription($description)
            ->setTemplateId($templateId)
            ->setType($type)
            ->setIsDefault($isDefault)
            ->setSubType($subType);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTemplatesRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTemplatesRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTemplatesRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTemplatesRequest
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
     * Get subType value
     * @return string|null
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }
    /**
     * Set subType value
     * @param string $subType
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTemplatesRequest
     */
    public function setSubType(?string $subType = null): self
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->subType = $subType;
        
        return $this;
    }
}
