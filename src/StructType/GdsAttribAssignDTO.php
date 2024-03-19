<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GdsAttribAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GdsAttribAssignDTO extends AbstractStructBase
{
    /**
     * The attributeId
     * @var string|null
     */
    protected ?string $attributeId = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The gdsId
     * @var string|null
     */
    protected ?string $gdsId = null;
    /**
     * The informationType
     * @var string|null
     */
    protected ?string $informationType = null;
    /**
     * The prefix
     * @var string|null
     */
    protected ?string $prefix = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for GdsAttribAssignDTO
     * @uses GdsAttribAssignDTO::setAttributeId()
     * @uses GdsAttribAssignDTO::setCategory()
     * @uses GdsAttribAssignDTO::setGdsId()
     * @uses GdsAttribAssignDTO::setInformationType()
     * @uses GdsAttribAssignDTO::setPrefix()
     * @uses GdsAttribAssignDTO::setType()
     * @param string $attributeId
     * @param string $category
     * @param string $gdsId
     * @param string $informationType
     * @param string $prefix
     * @param string $type
     */
    public function __construct(?string $attributeId = null, ?string $category = null, ?string $gdsId = null, ?string $informationType = null, ?string $prefix = null, ?string $type = null)
    {
        $this
            ->setAttributeId($attributeId)
            ->setCategory($category)
            ->setGdsId($gdsId)
            ->setInformationType($informationType)
            ->setPrefix($prefix)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribAssignDTO
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
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribAssignDTO
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get gdsId value
     * @return string|null
     */
    public function getGdsId(): ?string
    {
        return $this->gdsId;
    }
    /**
     * Set gdsId value
     * @param string $gdsId
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribAssignDTO
     */
    public function setGdsId(?string $gdsId = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsId) && !is_string($gdsId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsId, true), gettype($gdsId)), __LINE__);
        }
        $this->gdsId = $gdsId;
        
        return $this;
    }
    /**
     * Get informationType value
     * @return string|null
     */
    public function getInformationType(): ?string
    {
        return $this->informationType;
    }
    /**
     * Set informationType value
     * @param string $informationType
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribAssignDTO
     */
    public function setInformationType(?string $informationType = null): self
    {
        // validation for constraint: string
        if (!is_null($informationType) && !is_string($informationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($informationType, true), gettype($informationType)), __LINE__);
        }
        $this->informationType = $informationType;
        
        return $this;
    }
    /**
     * Get prefix value
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }
    /**
     * Set prefix value
     * @param string $prefix
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribAssignDTO
     */
    public function setPrefix(?string $prefix = null): self
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefix, true), gettype($prefix)), __LINE__);
        }
        $this->prefix = $prefix;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GdsAttribAssignDTO
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
