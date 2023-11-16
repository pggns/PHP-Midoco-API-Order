<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPropertyAttribute StructType
 * @subpackage Structs
 */
class MidocoPropertyAttribute extends AbstractStructBase
{
    /**
     * The attribute
     * @var string|null
     */
    protected ?string $attribute = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The visible
     * @var bool|null
     */
    protected ?bool $visible = null;
    /**
     * The maxLength
     * @var int|null
     */
    protected ?int $maxLength = null;
    /**
     * The preferredWidth
     * @var int|null
     */
    protected ?int $preferredWidth = null;
    /**
     * Constructor method for MidocoPropertyAttribute
     * @uses MidocoPropertyAttribute::setAttribute()
     * @uses MidocoPropertyAttribute::setPosition()
     * @uses MidocoPropertyAttribute::setVisible()
     * @uses MidocoPropertyAttribute::setMaxLength()
     * @uses MidocoPropertyAttribute::setPreferredWidth()
     * @param string $attribute
     * @param int $position
     * @param bool $visible
     * @param int $maxLength
     * @param int $preferredWidth
     */
    public function __construct(?string $attribute = null, ?int $position = null, ?bool $visible = null, ?int $maxLength = null, ?int $preferredWidth = null)
    {
        $this
            ->setAttribute($attribute)
            ->setPosition($position)
            ->setVisible($visible)
            ->setMaxLength($maxLength)
            ->setPreferredWidth($preferredWidth);
    }
    /**
     * Get attribute value
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * Set attribute value
     * @param string $attribute
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute
     */
    public function setAttribute(?string $attribute = null): self
    {
        // validation for constraint: string
        if (!is_null($attribute) && !is_string($attribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribute, true), gettype($attribute)), __LINE__);
        }
        $this->attribute = $attribute;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute
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
     * Get visible value
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }
    /**
     * Set visible value
     * @param bool $visible
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute
     */
    public function setVisible(?bool $visible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($visible) && !is_bool($visible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visible, true), gettype($visible)), __LINE__);
        }
        $this->visible = $visible;
        
        return $this;
    }
    /**
     * Get maxLength value
     * @return int|null
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }
    /**
     * Set maxLength value
     * @param int $maxLength
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute
     */
    public function setMaxLength(?int $maxLength = null): self
    {
        // validation for constraint: int
        if (!is_null($maxLength) && !(is_int($maxLength) || ctype_digit($maxLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxLength, true), gettype($maxLength)), __LINE__);
        }
        $this->maxLength = $maxLength;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPropertyAttribute
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
