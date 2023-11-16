<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuiAttributeDefinitionDTO StructType
 * @subpackage Structs
 */
class GuiAttributeDefinitionDTO extends AbstractStructBase
{
    /**
     * The attributeId
     * @var int|null
     */
    protected ?int $attributeId = null;
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The groupId
     * @var string|null
     */
    protected ?string $groupId = null;
    /**
     * The isVisible
     * @var bool|null
     */
    protected ?bool $isVisible = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The preferredWidth
     * @var int|null
     */
    protected ?int $preferredWidth = null;
    /**
     * Constructor method for GuiAttributeDefinitionDTO
     * @uses GuiAttributeDefinitionDTO::setAttributeId()
     * @uses GuiAttributeDefinitionDTO::setAttributeName()
     * @uses GuiAttributeDefinitionDTO::setGroupId()
     * @uses GuiAttributeDefinitionDTO::setIsVisible()
     * @uses GuiAttributeDefinitionDTO::setPosition()
     * @uses GuiAttributeDefinitionDTO::setPreferredWidth()
     * @param int $attributeId
     * @param string $attributeName
     * @param string $groupId
     * @param bool $isVisible
     * @param int $position
     * @param int $preferredWidth
     */
    public function __construct(?int $attributeId = null, ?string $attributeName = null, ?string $groupId = null, ?bool $isVisible = null, ?int $position = null, ?int $preferredWidth = null)
    {
        $this
            ->setAttributeId($attributeId)
            ->setAttributeName($attributeName)
            ->setGroupId($groupId)
            ->setIsVisible($isVisible)
            ->setPosition($position)
            ->setPreferredWidth($preferredWidth);
    }
    /**
     * Get attributeId value
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }
    /**
     * Set attributeId value
     * @param int $attributeId
     * @return \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO
     */
    public function setAttributeId(?int $attributeId = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeId) && !(is_int($attributeId) || ctype_digit($attributeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeId, true), gettype($attributeId)), __LINE__);
        }
        $this->attributeId = $attributeId;
        
        return $this;
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get groupId value
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param string $groupId
     * @return \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO
     */
    public function setGroupId(?string $groupId = null): self
    {
        // validation for constraint: string
        if (!is_null($groupId) && !is_string($groupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        
        return $this;
    }
    /**
     * Get isVisible value
     * @return bool|null
     */
    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }
    /**
     * Set isVisible value
     * @param bool $isVisible
     * @return \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO
     */
    public function setIsVisible(?bool $isVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisible) && !is_bool($isVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisible, true), gettype($isVisible)), __LINE__);
        }
        $this->isVisible = $isVisible;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get preferredWidth value
     * @return int|null
     */
    public function getPreferredWidth(): ?int
    {
        return $this->preferredWidth;
    }
    /**
     * Set preferredWidth value
     * @param int $preferredWidth
     * @return \Pggns\MidocoApi\Order\StructType\GuiAttributeDefinitionDTO
     */
    public function setPreferredWidth(?int $preferredWidth = null): self
    {
        // validation for constraint: int
        if (!is_null($preferredWidth) && !(is_int($preferredWidth) || ctype_digit($preferredWidth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($preferredWidth, true), gettype($preferredWidth)), __LINE__);
        }
        $this->preferredWidth = $preferredWidth;
        
        return $this;
    }
}
