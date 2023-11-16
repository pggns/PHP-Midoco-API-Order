<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgTemplateTextDTO StructType
 * @subpackage Structs
 */
class OrgTemplateTextDTO extends AbstractStructBase
{
    /**
     * The orgTemplateId
     * @var int|null
     */
    protected ?int $orgTemplateId = null;
    /**
     * The printTypes
     * @var string|null
     */
    protected ?string $printTypes = null;
    /**
     * The templateText
     * @var string|null
     */
    protected ?string $templateText = null;
    /**
     * The templateType
     * @var string|null
     */
    protected ?string $templateType = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrgTemplateTextDTO
     * @uses OrgTemplateTextDTO::setOrgTemplateId()
     * @uses OrgTemplateTextDTO::setPrintTypes()
     * @uses OrgTemplateTextDTO::setTemplateText()
     * @uses OrgTemplateTextDTO::setTemplateType()
     * @uses OrgTemplateTextDTO::setUnitName()
     * @param int $orgTemplateId
     * @param string $printTypes
     * @param string $templateText
     * @param string $templateType
     * @param string $unitName
     */
    public function __construct(?int $orgTemplateId = null, ?string $printTypes = null, ?string $templateText = null, ?string $templateType = null, ?string $unitName = null)
    {
        $this
            ->setOrgTemplateId($orgTemplateId)
            ->setPrintTypes($printTypes)
            ->setTemplateText($templateText)
            ->setTemplateType($templateType)
            ->setUnitName($unitName);
    }
    /**
     * Get orgTemplateId value
     * @return int|null
     */
    public function getOrgTemplateId(): ?int
    {
        return $this->orgTemplateId;
    }
    /**
     * Set orgTemplateId value
     * @param int $orgTemplateId
     * @return \Pggns\MidocoApi\Order\StructType\OrgTemplateTextDTO
     */
    public function setOrgTemplateId(?int $orgTemplateId = null): self
    {
        // validation for constraint: int
        if (!is_null($orgTemplateId) && !(is_int($orgTemplateId) || ctype_digit($orgTemplateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgTemplateId, true), gettype($orgTemplateId)), __LINE__);
        }
        $this->orgTemplateId = $orgTemplateId;
        
        return $this;
    }
    /**
     * Get printTypes value
     * @return string|null
     */
    public function getPrintTypes(): ?string
    {
        return $this->printTypes;
    }
    /**
     * Set printTypes value
     * @param string $printTypes
     * @return \Pggns\MidocoApi\Order\StructType\OrgTemplateTextDTO
     */
    public function setPrintTypes(?string $printTypes = null): self
    {
        // validation for constraint: string
        if (!is_null($printTypes) && !is_string($printTypes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTypes, true), gettype($printTypes)), __LINE__);
        }
        $this->printTypes = $printTypes;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgTemplateTextDTO
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
     * Get templateType value
     * @return string|null
     */
    public function getTemplateType(): ?string
    {
        return $this->templateType;
    }
    /**
     * Set templateType value
     * @param string $templateType
     * @return \Pggns\MidocoApi\Order\StructType\OrgTemplateTextDTO
     */
    public function setTemplateType(?string $templateType = null): self
    {
        // validation for constraint: string
        if (!is_null($templateType) && !is_string($templateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateType, true), gettype($templateType)), __LINE__);
        }
        $this->templateType = $templateType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgTemplateTextDTO
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
