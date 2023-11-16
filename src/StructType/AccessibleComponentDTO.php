<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccessibleComponentDTO StructType
 * @subpackage Structs
 */
class AccessibleComponentDTO extends AbstractStructBase
{
    /**
     * The bundleName
     * @var string|null
     */
    protected ?string $bundleName = null;
    /**
     * The componentId
     * @var int|null
     */
    protected ?int $componentId = null;
    /**
     * The guiPosition
     * @var int|null
     */
    protected ?int $guiPosition = null;
    /**
     * The guiType
     * @var string|null
     */
    protected ?string $guiType = null;
    /**
     * The isEditable
     * @var bool|null
     */
    protected ?bool $isEditable = null;
    /**
     * The parentComponentId
     * @var int|null
     */
    protected ?int $parentComponentId = null;
    /**
     * The resourceId
     * @var string|null
     */
    protected ?string $resourceId = null;
    /**
     * Constructor method for AccessibleComponentDTO
     * @uses AccessibleComponentDTO::setBundleName()
     * @uses AccessibleComponentDTO::setComponentId()
     * @uses AccessibleComponentDTO::setGuiPosition()
     * @uses AccessibleComponentDTO::setGuiType()
     * @uses AccessibleComponentDTO::setIsEditable()
     * @uses AccessibleComponentDTO::setParentComponentId()
     * @uses AccessibleComponentDTO::setResourceId()
     * @param string $bundleName
     * @param int $componentId
     * @param int $guiPosition
     * @param string $guiType
     * @param bool $isEditable
     * @param int $parentComponentId
     * @param string $resourceId
     */
    public function __construct(?string $bundleName = null, ?int $componentId = null, ?int $guiPosition = null, ?string $guiType = null, ?bool $isEditable = null, ?int $parentComponentId = null, ?string $resourceId = null)
    {
        $this
            ->setBundleName($bundleName)
            ->setComponentId($componentId)
            ->setGuiPosition($guiPosition)
            ->setGuiType($guiType)
            ->setIsEditable($isEditable)
            ->setParentComponentId($parentComponentId)
            ->setResourceId($resourceId);
    }
    /**
     * Get bundleName value
     * @return string|null
     */
    public function getBundleName(): ?string
    {
        return $this->bundleName;
    }
    /**
     * Set bundleName value
     * @param string $bundleName
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentDTO
     */
    public function setBundleName(?string $bundleName = null): self
    {
        // validation for constraint: string
        if (!is_null($bundleName) && !is_string($bundleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bundleName, true), gettype($bundleName)), __LINE__);
        }
        $this->bundleName = $bundleName;
        
        return $this;
    }
    /**
     * Get componentId value
     * @return int|null
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }
    /**
     * Set componentId value
     * @param int $componentId
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentDTO
     */
    public function setComponentId(?int $componentId = null): self
    {
        // validation for constraint: int
        if (!is_null($componentId) && !(is_int($componentId) || ctype_digit($componentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($componentId, true), gettype($componentId)), __LINE__);
        }
        $this->componentId = $componentId;
        
        return $this;
    }
    /**
     * Get guiPosition value
     * @return int|null
     */
    public function getGuiPosition(): ?int
    {
        return $this->guiPosition;
    }
    /**
     * Set guiPosition value
     * @param int $guiPosition
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentDTO
     */
    public function setGuiPosition(?int $guiPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($guiPosition) && !(is_int($guiPosition) || ctype_digit($guiPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($guiPosition, true), gettype($guiPosition)), __LINE__);
        }
        $this->guiPosition = $guiPosition;
        
        return $this;
    }
    /**
     * Get guiType value
     * @return string|null
     */
    public function getGuiType(): ?string
    {
        return $this->guiType;
    }
    /**
     * Set guiType value
     * @param string $guiType
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentDTO
     */
    public function setGuiType(?string $guiType = null): self
    {
        // validation for constraint: string
        if (!is_null($guiType) && !is_string($guiType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guiType, true), gettype($guiType)), __LINE__);
        }
        $this->guiType = $guiType;
        
        return $this;
    }
    /**
     * Get isEditable value
     * @return bool|null
     */
    public function getIsEditable(): ?bool
    {
        return $this->isEditable;
    }
    /**
     * Set isEditable value
     * @param bool $isEditable
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentDTO
     */
    public function setIsEditable(?bool $isEditable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEditable) && !is_bool($isEditable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEditable, true), gettype($isEditable)), __LINE__);
        }
        $this->isEditable = $isEditable;
        
        return $this;
    }
    /**
     * Get parentComponentId value
     * @return int|null
     */
    public function getParentComponentId(): ?int
    {
        return $this->parentComponentId;
    }
    /**
     * Set parentComponentId value
     * @param int $parentComponentId
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentDTO
     */
    public function setParentComponentId(?int $parentComponentId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentComponentId) && !(is_int($parentComponentId) || ctype_digit($parentComponentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentComponentId, true), gettype($parentComponentId)), __LINE__);
        }
        $this->parentComponentId = $parentComponentId;
        
        return $this;
    }
    /**
     * Get resourceId value
     * @return string|null
     */
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }
    /**
     * Set resourceId value
     * @param string $resourceId
     * @return \Pggns\MidocoApi\Order\StructType\AccessibleComponentDTO
     */
    public function setResourceId(?string $resourceId = null): self
    {
        // validation for constraint: string
        if (!is_null($resourceId) && !is_string($resourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resourceId, true), gettype($resourceId)), __LINE__);
        }
        $this->resourceId = $resourceId;
        
        return $this;
    }
}
