<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgunitGuiAttributeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrgunitGuiAttributeDTO extends AbstractStructBase
{
    /**
     * The attributeId
     * @var int|null
     */
    protected ?int $attributeId = null;
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
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrgunitGuiAttributeDTO
     * @uses OrgunitGuiAttributeDTO::setAttributeId()
     * @uses OrgunitGuiAttributeDTO::setIsVisible()
     * @uses OrgunitGuiAttributeDTO::setPosition()
     * @uses OrgunitGuiAttributeDTO::setPreferredWidth()
     * @uses OrgunitGuiAttributeDTO::setUnitName()
     * @param int $attributeId
     * @param bool $isVisible
     * @param int $position
     * @param int $preferredWidth
     * @param string $unitName
     */
    public function __construct(?int $attributeId = null, ?bool $isVisible = null, ?int $position = null, ?int $preferredWidth = null, ?string $unitName = null)
    {
        $this
            ->setAttributeId($attributeId)
            ->setIsVisible($isVisible)
            ->setPosition($position)
            ->setPreferredWidth($preferredWidth)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitGuiAttributeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitGuiAttributeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitGuiAttributeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitGuiAttributeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitGuiAttributeDTO
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
